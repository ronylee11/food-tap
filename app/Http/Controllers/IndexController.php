<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Index;

class IndexController extends Controller
{
    public function index() {
        return view('index', [
            'indexs' => Index::listIndex(),
        ]);
    }
}
