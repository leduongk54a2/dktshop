<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table= 'categories';
    public $timestamps=false;
    public function products(){
        return $this->hasMany(Product::class,'category_id','id');
        }


    public static function cateHome()
    {
        return Category::where('home', FLAG_ON)->get();
    }
}
