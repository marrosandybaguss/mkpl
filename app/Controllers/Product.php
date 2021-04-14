<?php

namespace App\Controllers;
use App\Models\ProductModel;

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
}
