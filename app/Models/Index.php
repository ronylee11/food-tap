<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Index extends Model
{
    use HasFactory;

    protected $fillables = ['title', 'description'];

    public static function listIndex() {
        return Index::all();

        //return [
            //[
            //'title' => 'Hello World',
            //'description' => 'This is a description'
            //],
            //[
            //'title' => 'Food Paradise',
            //'description' => 'cheap and affordable food!'
            //]
        //];
    }
}
