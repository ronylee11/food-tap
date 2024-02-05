<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Index;

class IndexController extends Controller
{
    public function index() {
        return view('index.index', [
            'indexs' => Index::latest()->paginate(3),
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
            'id' => request('id'),
            'title' => request('title'),
            'body' => request('body'),
        ]);

        return redirect('/' . $index->id);
    }

    public function destroy(Index $index) {
        $index->delete();

        return redirect('/');
    }

    public function new() {
        return view('index.new');
    }

    public function store() {
        $index = Index::create([
            'id' => request('id'),
            'title' => request('title'),
            'description' => request('description'),
        ]);

        return redirect('/' . $index->id);
    }
}
