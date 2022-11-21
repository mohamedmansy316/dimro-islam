<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Article extends Model
{
    use HasFactory;
    const LIMIT = 200;
    protected $guarded = [];
    public function getArticleFileAttribute(){
        return url('storage/app/public/article').'/'.$this->file;
    }
    public function getArticleImageAttribute(){
        return url('storage/app/public/images/articles').'/'.$this->image;
    }
    public function getArticleStatusAttribute(){
        if($this->is_active == 1){
            return 'Active';
        }elseif($this->is_active == 0){
            return 'Inactive';
        }else{
            return 'N/A';
        }
    }
    public function getArticleDescriptionAttribute(){
        return Str::limit($this->description, Article::LIMIT);
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
