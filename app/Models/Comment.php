<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    // protected $fillable = ['name', 'email', 'subject', 'user_id', 'blog_id'];
    protected $guarded = [];
    public function getCommentStatusAttribute(){
        if($this->approved == 1){
            return 'Active';
        }elseif($this->approved == 0){
            return 'Inactive';
        }else{
            return 'N/A';
        }
    }
}
