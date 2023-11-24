<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function category(){
        return $this->hasOne(ProductCategory::class, 'id','category_id');
    }

    public function getCategoryNameAttribute(){
        return $this->category->name;
    }
}