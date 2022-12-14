<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductCategory extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = [];
    public function Products(){
        return $this->hasMany(Product::class,'category_id');
    }
    public function Parent(){
        return $this->belongsTo(ProductCategory::class, 'parent_id')->withDefault([
            'title' => 'N/A',
            'id' => 0,
            'slug' => 'null'
        ]);
    }
    public function children(){
        return $this->hasMany(ProductCategory::class, 'parent_id');
    }

}
