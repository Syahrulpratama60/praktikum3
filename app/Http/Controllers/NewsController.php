<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function newspertama()
    {
        return redirect('https://www.educastudio.com/news');
    }
    public function newskedua($id)
    {
        return redirect('https://www.educastudio.com/news/educa-studio-berbagi-untuk-warga-sekitar-terdampak-covid-19');
    }
}
