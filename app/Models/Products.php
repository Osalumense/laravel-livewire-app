<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    /**
     * @var string
     */
    protected $table = 'products';

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'description',
        'quantity', 
        'regular_price',
        'sale_price',
        'SKU',
        'image_url', 
        'status',
        'featured'
    ];
}
