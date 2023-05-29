<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;
    protected $table = 'product';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id', 'productName', 'productPrice', 'productDescription', 'productImage'
    ];

    public function variant():HasMany{
        return $this->hasMany(Variant::class, 'productId', 'id');
    }
}
