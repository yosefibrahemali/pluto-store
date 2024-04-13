<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Transaction;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Review;


class Product extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = ['name', 'slug', 'regular_price', 'description']; 
    public function colors(){
        return $this->hasMany(Color::class);
    }
    public function reviews(): HasMany
    {
        return $this->hasMany(Transaction::class);
    }
    public function images()
  {
   return $this->hasMany('App\Image', 'product_id');
  }

}
