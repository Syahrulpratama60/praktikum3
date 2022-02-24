<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function productspertama()
    {
        return redirect('https://www.educastudio.com/category/marbel-edu-games');
    }
    public function productskedua()
    {
        return redirect('https://www.educastudio.com/category/marbel-and-friends-kids-games');
    }
    public function productsketiga()
    {
        return redirect('https://www.educastudio.com/category/riri-story-books');
    }
    public function productskeempat()
    {
        return redirect('https://www.educastudio.com/category/kolak-kids-songs');
    }
}
