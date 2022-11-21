<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory, SoftDeletes;
    protected $guarded = [];
    public function getCategoryStatusAttribute(){
        if($this->is_active == 1){
            return 'Active';
        }elseif($this->is_active == 0){
            return 'Inactive';
        }else{
            return 'N/A';
        }
    }
    public function Blog(){
        return $this->hasMany(Blog::class , 'category_id');
    }
    public function Parent(){
        return $this->belongsTo(Category::class, 'parent_id')->withDefault([
            'title' => 'N/A',
            'id' => 0,
            'slug' => 'null'
        ]);
    }
    public function children(){
        return $this->hasMany(Category::class, 'parent_id');
    }
}
