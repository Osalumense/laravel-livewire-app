<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    /**
     * Returns Frequently Asked Questions page
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View 
    */
    public function showProductsPage()
    {
        return view('products');
    }

    /**
     * Returns Frequently Asked Questions page
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View 
    */
    public function showFaqs()
    {
        return view('faqs');
    }
}
