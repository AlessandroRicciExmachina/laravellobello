<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model {
    use HasFactory;
    protected $guarded = [];
    // protected $fillable = ['category_id'];

    public function getRouteKeyName() {
        return 'slug';
    }

    //relationships

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function users() {
        return $this->belongsTo(User::class);
    }
}
