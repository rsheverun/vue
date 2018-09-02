<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StartController extends Controller
{
    public function index () 
    {
        $url_data = [
            array(
                'title' => 'title-1',
                'url' => 'url-1'
            ),
            array(
                'title' => 'title-2',
                'url' => 'url-2'
            )
        ];
        
        return view('welcome',['url_data'=>$url_data]);
    }

    public function getJson()
    {
        return [
            array(
                'title' => 'google-1',
                'url' => 'google.com'
            ),
            array(
                'title' => 'yandex-2',
                'url' => 'ya.ru'
            )
        ];
    }
}
