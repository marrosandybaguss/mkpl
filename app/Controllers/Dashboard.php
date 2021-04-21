<?php

namespace App\Controllers;

use App\Models\ProductModel;
use CodeIgniter\CLI\Console;

class Dashboard extends BaseController
{
	protected $productModel;

	public function __construct()
	{
		$this->productModel = new ProductModel();
	}

	public function index()
	{
		$totalFood = 0;
		$totalTshirt = 0;
		$totalSmartphone = 0;
		$totalQtyFood = 0;
		$totalQtyTshirt = 0;
		$totalQtySmartphone = 0;

		$products = $this->productModel->findAll();				

		foreach ($products as $product) {
			if ($product['prod_type'] == 'food') {
				$totalFood++;
				$totalQtyFood = $totalQtyFood + $product['prod_qty'];
			} elseif ($product['prod_type'] == 'tshirt') {
				$totalTshirt++;
				$totalQtyTshirt = $totalQtyTshirt + $product['prod_qty'];
			} elseif ($product['prod_type'] == 'smartphone') {
				$totalSmartphone++;
				$totalQtySmartphone = $totalQtySmartphone + $product['prod_qty'];
			}
		}

		$data = [			
			'type' => 'dashboard',
			'totalFood' => $totalFood,
			'totalTshirt' => $totalTshirt,
			'totalSmartphone' => $totalSmartphone,
			'totalQtyFood' => $totalQtyFood,
			'totalQtyTshirt' => $totalQtyTshirt,
			'totalQtySmartphone' => $totalQtySmartphone
		];		
		return view('app', $data);
	}

}
