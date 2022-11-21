<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Source extends Model
{
    use HasFactory, SoftDeletes;
    protected $guarded = [];
    public function getSourceStatusAttribute(){
        if($this->is_active == 1){
            return 'Active';
        }elseif($this->is_active == 0){
            return 'Inactive';
        }else{
            return 'N/A';
        }
    }
}
