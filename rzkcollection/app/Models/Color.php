<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Color extends Model
{
    use HasFactory;
    protected $table = 'color';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id', 'colorName', 'colorHexCode'
    ];

    public function variant():BelongsTo{
        return $this->belongsTo(Variant::class);
    }
}
