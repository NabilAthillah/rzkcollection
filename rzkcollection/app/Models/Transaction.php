<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Transaction extends Model
{
    use HasFactory;
    protected $table = 'transaction';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id', 'buktiPembayaran', 'cartId', 'userId', 'statusId', 'deliveryId', 'paymentId', 'addressId'
    ];

    public function cart():HasMany{
        return $this->HasMany(Cart::class);
    }

    public function user():HasMany{
        return $this->HasMany(User::class);
    }

    public function status():HasMany{
        return $this->HasMany(Status::class);
    }

    public function delivery():HasMany{
        return $this->HasMany(Delivery::class);
    }

    public function payment():HasMany{
        return $this->HasMany(Payment::class);
    }

    public function address():HasMany{
        return $this->HasMany(Address::class);
    }
}
