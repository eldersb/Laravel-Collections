<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getAll()
    {
        $products = (new Product())->getAll();
        return response()->json($products);
    }


    public function getById($id)
    {
        $productModel = new Product();
        $product = $productModel->getById($id);

        return response()->json($product);

        // else {
        //     return response()->json(['erro' => 'Produto não encontrado'], 404);
        // }
    }

    public function lowStock()
    {

        $productLowStock = new Product();
        $products = $productLowStock->getWithLowStock();

        return response()->json($products);

    }

    // public function categories(Request $request)
    // {
    //     $palavraChave = $request->query('palavraChave'); // Obtém a palavra-chave da query string

    //     $productModel = new Product();
    //     $products = $productModel->getByKeyword($palavraChave);

    //     return response()->json($products);

    // }

}
