<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\View;


class ProductController extends Controller
{

    public function index()
    {
        $search = request('search');

        if($search) {
            $products = Product::where([
                ['prod_name', 'like','%'.$search.'%']
            ])->get();
        } else {
             $products = Product::all();
        }


        return view('welcome',['products' => $products, 'search' => $search]);
    }

    public function create() {
        return view('events.create');
    }

    public function store(Request $request) {

        $product = new Product;

        $product->prod_name = $request->title;
        $product->prod_price = $request->price;
        $product->prod_marca = $request->marca;
        $product->prod_modelo = $request->modelo;
        $product->prod_fabr = $request->fabricante;
        $product->prod_EAN = $request->ean;
        $product->prod_description = $request->description;
        $product->prod_promocaoativa = $request->promocao;
        // $product->prod_type = $request->prod_type;
        $product->tags = $request->tags;
        $product->prod_image = $request->image;
        $product->prod_link = $request->link;

        // Image upload
        // if($request->hasFile('image') && $request->file('image')->isValid()) {
            
        //     $requestImage = $request->image;

        //     $extension = $requestImage->extension();

        //     $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

        //     $requestImage->move(public_path('img/products'), $imageName);

        //     $product->prod_image = $imageName;
        // }

        // $user = auth()->user();
        // $product->user_id = $user->id;

        $product->save();

        return redirect('/')->with('msg', 'produto criado com sucesso!');
    }

    public function list() {

        $user = auth()->user();

        $search = request('search');

        if($search) {
            $products = Product::where([
                ['prod_name', 'like','%'.$search.'%']
            ])->get();
        } else {
             $products = Product::all();
        }

        

        return view('events.list', ['products' => $products, 'user' => $user]);
    }

    public function edit($id) {
        
        $product = Product::findOrFail($id);

        return view('events.edit', ['product' => $product]);

    }

    public function update(Request $request) {  
        $data = $request->all();
        
        // Image upload

       Product::findOrFail($request->id)->update($data);

       return redirect('/dashboard')->with('msg', 'Evento editado com sucesso!');

    }

    public function destroy($id) {

        Product::findOrFail($id)->delete();

        return redirect('/dashboard')->with('msg', 'Evento excluído com sucesso!');
    }



    public function filtrarPorTag($tag)
    {
        $products = Product::where('tags', $tag)->get();
    
        return view('welcome', ['products' => $products]);
    }


}
