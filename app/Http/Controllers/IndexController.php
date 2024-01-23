<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Index;

class IndexController extends Controller
{
    public function index() {
        return view('index.index', [
            'indexs' => Index::listIndex(),
        ]);
    }

    public function show(Index $index) {
        return view('index.show', [
            'index' => $index,
        ]);
    }

    public function edit(Index $index) {
        return view('index.edit', [
            'index' => $index,
        ]);
    }

    public function update(Index $index) {
        $index->update([
            'title' => request('title'),
            'body' => request('body'),
        ]);

        return redirect('/' . $index->id);
    }
}
