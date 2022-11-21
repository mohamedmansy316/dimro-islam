<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function getResourceImageAttribute(){
        return url('storage/app/public/images').'/'.$this->image;
    }
    public function getResourceFileAttribute(){
        return url('storage/app/public/files').'/'.$this->file;
    }
    public function getResourceStatusAttribute(){
        if($this->is_active == 1){
            return 'Active';
        }elseif($this->is_active == 0){
            return 'Inactive';
        }else{
            return 'N/A';
        }
    }
    public function Category(){
        return $this->belongsTo(Category::class, 'category_id')->withDefault([
            'title' => 'Deleted Category'
        ]);
    }
    public function Author(){
        return $this->belongsTo(Author::class, 'author_id')->withDefault([
            'name' => 'Deleted Author'
        ]);
    }
    public function Source(){
        return $this->belongsTo(Source::class, 'source_id')->withDefault([
            'title' => 'Deleted Source'
        ]);
    }
    public function Comment(){
        return $this->hasMany(Comment::class, 'resource_id');
    }
}
