<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;

class Users extends Model implements Authenticatable
{
    use AuthenticableTrait;
    use HasFactory;
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id', 'username', 'password', 'email'
    ];

    public function address():BelongsTo{
        return $this->belongsTo(Address::class);
    }

    public function cart():BelongsTo{
        return $this->belongsTo(Cart::class);
    }

    public function transaction():BelongsTo{
        return $this->belongsTo(Transaction::class);
    }
}
