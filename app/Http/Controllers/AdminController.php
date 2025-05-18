<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class AdminController extends Controller
{
    public function index()
    {
        $orders = Order::all();

        return view('admin.index', compact('orders'));
    }
}
