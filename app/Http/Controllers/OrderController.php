<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Status;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::all();

        return view('order.index', compact('orders'));
    }

    public function create()
    {
        $statuses = Status::all();

        return view('order.create', compact('statuses'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'date' => ['required', 'string', 'max:255'],
            'time' => ['required', 'string', 'max:255'],
            'adress' => ['required', 'string', 'max:255'],
            'type' => ['required', 'string', 'max:255'],
            'payment' => ['required', 'string', 'max:255']
        ]);

        Order::create([
            'date' => $request->date,
            'time' => $request->time,
            'adress' => $request->adress,
            'type' => $request->type,
            'payment' => $request->payment,
            'status_id' => 1,
            'user_id' => Auth::user()->id
        ]);

        return redirect("/");
    }
}
