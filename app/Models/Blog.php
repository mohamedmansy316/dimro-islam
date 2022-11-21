<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Blog extends Model
{
    use HasFactory;
    const LIMIT = 100;
    protected $guarded = [];
    public function getFullSizeImageAttribute(){
        return url('storage/app/blog/full_size').'/'.$this->image;
    }
    public function getSmallSizeAttribute(){
        return url('storage/app/blog/small_size').'/'.$this->image;
    }
    public function getMeduimImageAttribute(){
        return url('storage/app/blog/meduim_size/').'/'.$this->image;
    }
    public function getBlogDescriptionAttribute(){
        return Str::limit($this->description, Blog::LIMIT);
    }
    public function Category(){
        return $this->belongsTo(Category::class, 'category_id')->withDefault([
            'title' => 'Not Available'
        ]);
    }
    public function Comment(){
        return $this->hasMany(Comment::class, 'resource_id');
    }
    public function getCategoryStatusAttribute(){
        if($this->is_active == 1){
            return 'Active';
        }elseif($this->is_active == 0){
            return 'Inactive';
        }else{
            return 'N/A';
        }
    }
}
