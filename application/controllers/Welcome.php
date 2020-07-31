<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this -> load -> model('queries');
		$products = $this->queries->getProduct();
		$this->load->view('welcome_message',['products'=>$products]);
	}
	
	public function add()
	{
		$this->load->view('add');
	}

	public function update($p_Id)
	{
		$this -> load -> model('queries');
		$product = $this->queries->getSingleProduct($p_Id);
		$this->load->view('update', ['product'=>$product]);
	}

	public function save()
	{
		$this->load->view('add');

		if($this->input->post('submit'))
		{
			$p_Id=$this->input->post('p_Id');
			$p_name=$this->input->post('p_name');
			$image=$this->input->post('image');
			$price=$this->input->post('price');
			$quantity=$this->input->post('quantity');
			$this->queries->addProduct($p_Id,$p_name,$image,$price,$quantity);
			echo 'Product saved successfully';
			redirect("add/save");
		}
		else
		{
			echo 'failed to save Product';
		}
		return redirect('welcome');
	}
	

	public function change()
	{
		$this->form_validation->set_rules('p_Id','Product ID', 'required');
		$this->form_validation->set_rules('p_name','Product Name', 'required');
		$this->form_validation->set_rules('quantity','Quantity', 'required');
		
		if ($this->form_validation->run())
		{
			$data = $this->input->post(); 
			unset($data['submit']);
			$this->load->model('queries');
			if ($this->queries->updateProduct($data, $p_Id))
			{
				$this->session->set_flashdata('msg','Product updated successfully');
			}
			else{
				$this->session->set_flashdata('msg','failed to update Product');
			}
			return redirect('welcome');
		}
		else
		{
			$this->load->view('add');
		}
	}

	public function view($p_Id)
	{
		$this -> load -> model('queries');
		$product = $this->queries->getSingleProduct($p_Id);
		$this->load->view('view', ['product'=>$product]);
	}

	public function delete($p_Id)
	{
		$this -> load -> model('queries');
		if ($this->queries->deleteProduct($p_Id))
		{
			$this->session->set_flashdata('msg','product delete successfully');
		}
		else
		{
			$this->session->set_flashdata('msg','product delete successfully');
		}
		return redirect('welcome');
	}

}
