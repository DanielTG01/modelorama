<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class ProductController extends Controller
{
    
    public function index(){
        //$products = Product::all();
        $products = Product::orderBy('id', 'DESC')->paginate(5);
        return view('product.index-producto', compact('products'));        
    }

    public function create(){ 
        return view('product.create-producto');       
    }

    public function show($product){
        $productDetail = Product::find($product);
        return view('product.show-producto', compact('productDetail'));        
    }

    public function store(Request $request){
        
        $product = new Product();

        $product->name = $request->name;
        $product->branch = $request->branch;
        $product->product_number = $request->product_number;
        $product->price = $request->price;
        $product->desc = $request->desc;

        $product->save();

        return redirect()->route('producto.index');
    }

    public function getReport() {

        $products = Product::all();

        $pdf = Pdf::loadView('product.report-product', compact('products'));
        return $pdf->stream('reporte-productos.pdf');
        
    }

}
