<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Order;
use App\Users;

class UserProfileController extends Controller
{
    public function index() {
        $id = auth()->user()->id;
        $user = Users::where('id', $id)->first();

        return view('front.profile.index', compact('user'));
    }

    public function show($id) {
        $orders = Order::find($id);
        return view('front.profile.details', compact('orders'));
    }
}
