<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;

class ContactController extends Controller
{

    public function index()
    {
        // Envia para a view
        return view('site.contact.index');
    }
}
