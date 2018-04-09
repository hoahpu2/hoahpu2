<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'order';

    protected $fillable = ['tracking_code', 'recipient_name', 'address', 'phone', 'delivery_time', 'note', 'package_name', 'deposit', 'cod', 'total', 'image_order', 'ship_team', 'collector', 'shipper', 'status'];

    public $timestamps = true;
}
