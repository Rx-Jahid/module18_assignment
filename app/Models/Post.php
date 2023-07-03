<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    private $table="posts";


   
    //relationship
    public function category()
{
    return $this->belongsTo(Category::class);
}

}
