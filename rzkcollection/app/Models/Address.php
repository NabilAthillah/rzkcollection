<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Address extends Model
{
    use HasFactory;
    protected $table = 'address';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id', 'nama', 'phone', 'jalan', 'desa', 'kecamatan', 'kota', 'provinsi', 'kodepos', 'userId'
    ];

    public function user(): HasMany {
        return $this->hasMany(Users::class);
    }

    public function transaction():BelongsTo{
        return $this->belongsTo(Transaction::class);
    }
}
