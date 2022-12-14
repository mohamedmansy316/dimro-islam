<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function getSmallThumbAttribute(){
        return url('storage/app/products/small_thumb').'/'.$this->image;
    }
    public function getThumbAttribute(){
        return url('storage/app/products/thumb').'/'.$this->image;
    }
    public function getFullSizeAttribute(){
        return url('storage/app/products/full_size').'/'.$this->image;
    }
    public function Gallery(){
        return $this->hasMany(ProductImage::class , 'product_id');
    }
    public function Brand(){
        return $this->belongsTo(Brand::class , 'brand_id');
    }
    public function Category(){
        return $this->belongsTo(ProductCategory::class , 'category_id')->withDefault([
            'title' => 'Not Avilable'
        ]);
    }
    public function getProductStatusAttribute(){
        if($this->status == 1){
            return 'Available';
        }elseif($this->status == 0){
            return 'Sold Out';
        }else{
            return 'N/A';
        }
    }
}
