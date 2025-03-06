<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function food() {
        return view('categories.food');
    }
    public function home() {
        return view('categories.care');
    }
    public function beauty() {
        return view('categories.beauty');
    }
    public function baby() {
        return view('categories.baby');
    }
}
