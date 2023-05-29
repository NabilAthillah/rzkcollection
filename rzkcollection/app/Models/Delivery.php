<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Delivery extends Model
{
    use HasFactory;
    protected $table = 'delivery';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id', 'name'
    ];

    public function transaction():BelongsTo{
        return $this->belongsTo(Transaction::class);
    }
}
