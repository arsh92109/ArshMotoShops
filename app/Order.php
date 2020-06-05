<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Order;

use App\OrderItems;

use App\Product;

class Order extends Model
{

   protected $guarded = [];
   
   public function users() {
      return $this->belongsTo(Users::class);
   }

   public function OrderItems() {
      return $this->hasMany(OrderItems::class);
   }

   public function products() {
      return $this->belongsToMany(Product::class, 'order_items');
   }
   
}
