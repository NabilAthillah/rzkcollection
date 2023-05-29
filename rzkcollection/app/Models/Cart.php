<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Cart extends Model
{
    use HasFactory;
    protected $table = 'cart';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id', 'qty', 'subtotal', 'variantId', 'userId'
    ];

    public function variant(): HasMany{
        return $this->hasMany(Variant::class);
    }

    public function user(): HasOne{
        return $this->hasOne(User::class);
    }

    public function transaction():BelongsTo{
        return $this->belongsTo(Transaction::class);
    }

}
