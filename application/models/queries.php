<?php
    class queries extends CI_Model{
        
        public function getProduct()
        {
            $query = $this->db->get('tbl_product');
            if($query->num_rows()>0)
            {
                return $query->result();
            }
        }

        public function addProduct($p_Id,$p_name,$image,$price,$quantity)
        {
            $query="INSERT INTO tbl_product (p_Id, p_name, image, price, quantity) VALUES('$p_Id','$p_name','$image','$price','$quantity')";
            $this->db->query($query);
        }

        public function getSingleProduct($p_Id)
        {
            $query = $this->db->get_where('tbl_product', array('p_Id'=>$p_Id));
            if($query->num_rows()>0)
            {
                return $query->result();
            }
        }

        public function updateProduct($data, $p_Id)
        {
            return $this->db->where('p_Id',$p_Id)
                            ->update('tbl_product',$data);
        
        }

        public function deleteProduct($p_Id)
        {
            return $this->db->delete('tbl_product', ['p_Id'=>$p_Id]);
        }

        public function addition($p_Id)
        {
            $query=" SELECT CAST (EXP(SUM(LOG(total))) AS UNSIGNED) AS result From tbl_product WHERE 'p_Id'==$p_Id";
            return  $this->db->query($query);
        }

    }
?>