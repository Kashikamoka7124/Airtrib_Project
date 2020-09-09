<?php

namespace App;

use Laranext\Categorizable;
use Illuminate\Database\Eloquent\Model;

class CorporateType extends Model
{
    use Categorizable;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'categories';

    /**
     * The Category Parent.
     *
     * @var string
     */
    protected static $parent = 'Corporate Type';
}
