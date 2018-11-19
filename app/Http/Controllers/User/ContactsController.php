<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\CategoryProductsLanguages;
use App\Models\ProductsLanguages;

class ContactsController extends Controller
{

    public function index() {
        return view('user.contacts.index',[
        ]);
    }
}
