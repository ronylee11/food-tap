<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Index extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description'];

    public static function listIndex() {
        return Index::latest()->filter(request(['title', 'search']))->paginate(3);
    }

    public static function scopeFilter($query, array $filters) {
        if ($filters['search'] ?? false) { // check if search url parameter is set
            $query->where('title', 'like', '%' . request('search') . '%') // find title that matches the search
                ->orWhere('description', 'like', '%' . request('search') . '%'); // find description that matches the search
        }
    }
}
