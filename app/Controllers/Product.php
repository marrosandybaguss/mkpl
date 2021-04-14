<?php

namespace App\Controllers;

use App\Models\ProductModel;
use CodeIgniter\CLI\Console;

class Product extends BaseController
{
	protected $productModel;

	public function __construct()
	{
		$this->productModel = new ProductModel();
	}

	public function index()
	{
		// $products = $this->productModel->findAll();

		return view('product');
	}

	public function delete($id)
	{		
		if (!isset($id)) {			
			session()->setFlashdata('message', 'Failed');
		}

		if ($this->productModel->delete($id)) {
			session()->setFlashdata('message', 'Success');							
		}
		return redirect()->to('/') ;
	}

	public function findId($id) {
		return $this->productModel->where('id', $id)->row();		
	}

}
