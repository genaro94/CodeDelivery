<?php

namespace codeDelivery\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Order.
 *
 * @package namespace codeDelivery\Models;
 */
class Order extends Model implements Transformable
{
    use TransformableTrait;

    protected $table = 'orders';
	protected $fillable = ['client_id','user_deliveryman_id','total','status'];

	public function items(){
		return $this->hasMany(OrdemItem::class);
	}

	public function deliveryman(){
		return $this->belongsTo(User::class);
	}

	public function products(){
		return $this->hasMany(Product::class);
	}

}
