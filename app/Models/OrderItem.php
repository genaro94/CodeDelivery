<?php

namespace codeDelivery\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class OrderItem.
 *
 * @package namespace codeDelivery\Models;
 */
class OrderItem extends Model implements Transformable
{
    use TransformableTrait;

    protected $table = 'order_items';
	protected $fillable = ['product_id','order_id','price','qtd'];

	public function product(){
		return $this->belongsTo(Product::class);
	}

	public function order(){
		return $this->belongsTo(Order::class);
	}

}
