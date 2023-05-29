<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Variant extends Model
{
    use HasFactory;
    protected $table = 'variant';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id', 'productId', 'colorId', 'sizeId', 'stockId'
    ];

    public function product():HasMany{
        return $this->hasMany(Product::class, 'productId', 'id');
    }

    public function color():HasMany{
        return $this->hasMany(Color::class, 'id', 'colorId');
    }

    public function stock():HasMany{
        return $this->hasMany(Stock::class, 'id', 'stockId');
    }

    public function size():HasMany{
        return $this->hasMany(Size::class, 'id', 'sizeId');
    }

    public function cart():BelongsTo{
        return $this->belongsTo(Cart::class);
    }
}
