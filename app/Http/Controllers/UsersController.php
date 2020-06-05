<?php

namespace App\Http\Controllers;

use App\Users;
use App\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    

    public function index() {
        $users = Users::all();
        return view('admin.users.index', compact('users'));
    }

    public function show($id) {

        // Find the user
        $orders = Order::where('users_id', $id)->get();

        // Return array back to user details page

        return view('admin.users.details', compact('orders'));

    }
}
