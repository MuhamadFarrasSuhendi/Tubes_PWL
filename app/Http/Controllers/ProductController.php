<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    public function index(){
        $data ['categories'] = Product::with('category')->get();
        return view('products.index', $data);
    }

    public function create()
    {
        $data['categories'] = Category::pluck('nama', 'id');
        return view('products.create', $data);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
        'code' => 'required|max:3',
        'nama_produk' => 'required|max:255',
        'harga_beli' => 'required|numeric',
        'harga_jual' => 'required|numeric',
        'stok' => 'required|numeric',
        'kategori_id' => 'required',
        ]);

        Product::create($validated);
        $notification = array(
            'message' => 'Data product telah ditambahkan',
            'alert-type' => 'success'
        );
        if($request->save == true) {
            return redirect()->route('product')->with($notification);
        } else {
            return redirect()->route('product.create')->with($notification);
        }
    }
}
