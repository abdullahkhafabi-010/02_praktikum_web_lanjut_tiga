<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    //
    public function index($params = null){
        if ($params != null){
            return redirect('https://www.educastudio.com/news 
            https://www.educastudio.com/news/educa-studio-berbagi-untuk-warga-sekitarterdampak-covid-19 
            '. $params);
        } else{
            return redirect('https://www.educastudio.com/news');
        }
    }
}
