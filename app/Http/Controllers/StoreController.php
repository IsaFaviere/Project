<?php

namespace App\Http\Controllers;

use App\Models\Store;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function index()
    {
        return Store::with('books')->get();
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'active' => 'boolean',
        ]);

        $store = Store::create($request->all());

        return response()->json($store, 201);
    }

    public function show(Store $store)
    {
        return $store->load('books');
    }

    public function update(Request $request, Store $store)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'active' => 'boolean',
        ]);

        $store->update($request->all());

        return response()->json($store, 200);
    }

    public function destroy(Store $store)
    {
        $store->delete();

        return response()->json(null, 204);
    }
}
