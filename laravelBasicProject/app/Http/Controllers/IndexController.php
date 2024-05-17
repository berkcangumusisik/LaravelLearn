<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return inertia(
            'Index/Index',
            [
                'message' => 'Hello Laravel!'
            ]
        );
        // inertia() bizlere sayfalar arasında bağlantı kurmayı sağlar.
    }
    public function show()
    {
        return inertia("Index/Show");
    }
}

/*
*Laravel controller'ları, bir web uygulamasında belirli istekleri (request) işlemek için kullanılan sınıflardır. Controller'lar, uygulamanın iş mantığını kapsar ve genellikle model ile view arasında bir köprü görevi görür.
 */
