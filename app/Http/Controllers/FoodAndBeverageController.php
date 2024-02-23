<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FoodAndBeverageController extends Controller
{
    public function index()
    {
        return view('food-and-beverage');
    }
}
