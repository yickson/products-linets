<?php

namespace App\Http\Controllers;

use App\Exports\ProductsExport;
use App\Modules\Product;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ProductController extends Controller
{
    public function getFile()
    {
        return Excel::download(new ProductsExport, 'products.csv');
    }
}
