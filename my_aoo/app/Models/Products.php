<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    protected $table = 'products';
    protected $primaryKey = 'id';
    protected $fillable = ['products_name','products_price', 'description', 'categorys_id','created_at','quality'];

    public function category()
    {
        return $this->belongsTo(Categorys::class);
    }
    public function Products_Image()
    {
        return $this->belongsTo(Products_Image::class,'products_image' );
    }


    /**
     * Summary of comments
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comments()
    {
        return $this->hasMany(Comments::class, 'product_id');
    }
}
