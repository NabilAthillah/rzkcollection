<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Status extends Model
{
    use HasFactory;
    protected $table = 'status';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id', 'statusName'
    ];

    public function transaction():BelongsTo{
        return $this->belongsTo(Transaction::class);
    }
}
