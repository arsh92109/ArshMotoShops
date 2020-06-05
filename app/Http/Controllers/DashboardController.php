<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\Order;
use App\Users;

class DashboardController extends Controller
{   
    
    public function index() {
        $product = new Product();
        $order = new Order();
        $user = new Users();

        return view('admin.dashboard', compact('product','order','user'));
    } 
}
