<?php

namespace App\ModelFilters;

use EloquentFilter\ModelFilter;

class CatalogFilter extends ModelFilter
{
    /**
     * Related Models that have ModelFilters as well as the method on the ModelFilter
     * As [relationMethod => [input_key1, input_key2]].
     *
     * @var array
     */
    public $relations = [];

    public function name($value)
    {
        $this->where('name', 'LIKE', '%' . $value . '%');
    }
    public function parent(int $value = 0){
        $this->where('parent_id', $value);
    }
}
