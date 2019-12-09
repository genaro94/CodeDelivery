<?php

namespace codeDelivery\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Client.
 *
 * @package namespace codeDelivery\Models;
 */
class Client extends Model implements Transformable
{
    use TransformableTrait;

    protected $table = 'clients';
	public $timestamps = false;
	protected $fillable = ['user_id','phone','address','city','state','zipcode'];

	public function user(){
		return $this->hasOne(User::class, 'id', 'user_id');
	}

}
