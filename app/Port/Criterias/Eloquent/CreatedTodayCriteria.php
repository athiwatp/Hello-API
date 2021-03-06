<?php

namespace App\Port\Criterias\Eloquent;

use App\Port\Criterias\Abstracts\Criteria;
use Carbon\Carbon;
use Prettus\Repository\Contracts\RepositoryInterface as PrettusRepositoryInterface;

/**
 * Class CreatedTodayCriteria
 *
 * @author  Mahmoud Zalt  <mahmoud@zalt.me>
 */
class CreatedTodayCriteria extends Criteria
{

    /**
     * @param                                                   $model
     * @param \Prettus\Repository\Contracts\RepositoryInterface $repository
     *
     * @return  mixed
     */
    public function apply($model, PrettusRepositoryInterface $repository)
    {
        return $model->where('created_at', '>=', Carbon::today()->toDateString());
    }
}
