<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Stock extends Model
{
    use HasFactory;
    protected $table = 'stock';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id', 'stockName'
    ];

    public function variant():BelongsTo{
        return $this->belongsTo(Variant::class);
    }
}
