<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Payment extends Model
{
    use HasFactory;
    protected $table = 'payment';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id', 'nama', 'nomor'
    ];

    public function transaction():BelongsTo{
        return $this->belongsTo(Transaction::class);
    }
}
