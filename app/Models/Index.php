<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Index extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'title', 'description'];

    public static function listIndex() {
        return Index::where();

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
