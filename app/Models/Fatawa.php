<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fatawa extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function getFatawaFileAttribute(){
        return url('storage/app/public/articles').'/'.$this->file;
    }
    public function getFatawaStatusAttribute(){
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
}
