<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataController extends Controller
{
    public function showHome()
    {
        return view('front.pages.home', [
            'collection' => dataset('collection'),
            'featured' => dataset('featured'),

        ]);
    }
}

