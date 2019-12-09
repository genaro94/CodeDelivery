<?php

namespace codeDelivery\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Product.
 *
 * @package namespace codeDelivery\Models;
 */
class Product extends Model implements Transformable
{
    use TransformableTrait;

    protected $table = 'products';
	protected $fillable = ['category_id','name', 'description', 'price'];


	public function category(){
		return $this->belongsTo(Category::class);
	}

}
