<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products_Image extends Model
{
    use HasFactory;
    protected $table = 'Products_Image';
    protected $primaryKey = 'id';
    protected $fillable = [
        'img_name',
        'products_id',
    ];
    public function Products()
    {
        return $this->belongsTo(Products::class,'products_image' );
    }
}
