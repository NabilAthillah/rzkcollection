<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Size extends Model
{
    use HasFactory;
    protected $table = 'size';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id', 'sizeName'
    ];

    public function variant():BelongsTo{
        return $this->belongsTo(Variant::class);
    }
}
