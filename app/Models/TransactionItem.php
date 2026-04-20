<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TransactionItem extends Model
{
    protected $fillable = [
        'transaction_id','book_id','quantity','price','subtotal'
    ];

    public function book()
    {
        return $this->belongsTo(Book::class);
    }
}
