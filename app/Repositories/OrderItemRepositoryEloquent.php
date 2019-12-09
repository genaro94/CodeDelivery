<?php

namespace codeDelivery\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use codeDelivery\Repositories\OrderItemRepository;
use codeDelivery\Models\OrderItem;
use codeDelivery\Validators\OrderItemValidator;

/**
 * Class OrderItemRepositoryEloquent.
 *
 * @package namespace codeDelivery\Repositories;
 */
class OrderItemRepositoryEloquent extends BaseRepository implements OrderItemRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return OrderItem::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
