<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class Book extends Model
{
    use HasFactory;
  protected $fillable = ['title', 'category_id', 'image', 'author', 'release_date', 'description', 'price'];

     protected $hidden = ['updated_at', 'image','created_at'];
    protected $appends = [
        'image_url'
    ];

    public function getImageUrlAttribute(){
        if(!$this->image)
            return asset('http://localhost:8000/website-assets/img/favicon.png');
        else if(Str::startsWith($this->image, ['http://', 'https://']))
            return $this->image;
        else
            return asset('storage/'.$this->image);
    }

       public function category(){
        return $this->belongsTo(Category::class,
                        'category_id',
                            'id')->withDefault([
                                'category' => '-'
                            ]);;
    }


      public function users()
    {
        return $this->belongsToMany(User::class, 'user_book', 'book_id', 'user_id')->withPivot('title');
    }

    public function userBooks()
{
    return $this->hasMany(UserBook::class, 'book_id');
}


 public function books()
{
    return $this->belongsTo(Book::class, 'book_id');
}


}
