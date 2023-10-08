<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Orders;

class OrderController extends Controller
{
    
    public function index()
    {
        $orders = Orders::with('user')->paginate(15);
        return view("admin.orders.index", compact('orders'));
    }
 
    public function create()
    {
        //
    }
 
    public function store(Request $request)
    {
        //
    }
 
    public function show(string $id)
    {
        //
    }
 
    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }
 
    public function destroy(string $id)
    {
        //
    }
}
