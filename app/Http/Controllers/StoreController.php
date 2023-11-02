<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Store;

class StoreController extends Controller
{
    public function index(){
        $stores = Store::all();
        return view('store.index', compact('stores'));
    }

    public function create(){
        return view('store.create');
    }

    public function store(Request $request){

        // $store = Store::create($request->all());

        $store = new Store();
        $store->clothe_name = $request->name;
        $store->clothe_desc = $request->description;
        $store->clothe_quantity = $request->quantity;
        $store->clothe_price = $request->price;

        $store->save();
        return 'success';
    }
}
