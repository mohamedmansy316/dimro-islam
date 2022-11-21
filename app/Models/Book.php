<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Book extends Model
{
    use HasFactory;
    protected $guarded = [];
    const LIMIT = 300;
    public function getBookImageAttribute(){
        return url('storage/app/public/images/books').'/'.$this->image;
    }
    public function getBookFileAttribute(){
        return url('storage/app/public/books').'/'.$this->file;
    }
    public function getBookDescriptionAttribute(){
        return Str::limit($this->description, Book::LIMIT);
    }
    public function getBookStatusAttribute(){
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
