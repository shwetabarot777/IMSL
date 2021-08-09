<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
     protected $fillable = [
        'title',
        'slug',
        'photo',
        'summary',
        'parent_id',
        'status'
        
    ];

     

   /* public function subcategories(){
        return $this->hasMany('App\Models\Category', 'parent_id');
    }*/

      public function subcategory()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }

    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }
    
}
