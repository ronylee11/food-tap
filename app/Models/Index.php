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

    public static function scopeFilter($query, array $filters) {
        if ($filters['search'] ?? false) { // check if search url parameter is set
            $query->where('title', 'like', '%' . request('search') . '%') // find title that matches the search
                ->orWhere('description', 'like', '%' . request('search') . '%'); // find description that matches the search
        }
    }
}
