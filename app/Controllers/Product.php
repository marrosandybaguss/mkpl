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
		$products = $this->productModel->findAll();

		$data = [
			'products' => $products,
			'type' => 'product'
		];
		
		return view('app', $data);
	}

	public function create()
	{
		$data = $this->request->getVar();
		
		$this->productModel->save([
			'prod_name' => $this->request->getVar('prod_name'),
			'prod_type' => $this->request->getVar('prod_type'),
			'prod_qty' => $this->request->getVar('prod_qty'),
			'prod_notes' => $this->request->getVar('prod_notes')
		]);

		session()->setFlashdata('message', 'Product Successfully Added');
		return redirect()->to('/');
	}

	public function update($id)
	{
		$this->productModel->save([
			'id' => $id,
			'prod_name' => $this->request->getVar('prod_name'),
			'prod_type' => $this->request->getVar('prod_type'),
			'prod_qty' => $this->request->getVar('prod_qty'),
			'prod_notes' => $this->request->getVar('prod_notes')
		]);

		session()->setFlashdata('message', 'Data Product Has Been Updated');
		return redirect()->to('/');
	}

	public function delete($id)
	{		
		if ($this->productModel->delete($id)) {
			session()->setFlashdata('message', 'Product Successfully Deleted.');
		}
		return redirect()->to('/') ;
	}

}
