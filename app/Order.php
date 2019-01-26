<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'order_no', 'order_purchased_at', 'download_link', ''
    ];

    public function Parent()
	{
		return $this->belongsTo(User::class);
	}
}
