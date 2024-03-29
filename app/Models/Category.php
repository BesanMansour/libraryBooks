<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
   protected $fillable = ['category'];

        protected $hidden = ['updated_at','created_at'];


      public function books(){
        return $this->hasMany(Post::class, 'category_id', 'category');
    }
}
