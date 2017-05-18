<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Event\ProductUpdated;

class Product extends Model
{

    protected $fillable = ['name', 'category_id'];

    protected $events = [
        'updated' => ProductUpdated::class,
    ];

}
