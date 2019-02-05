<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use SoftDeletes;
    use UserstampsTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'subtitle', 'image', 'order',
    ];
}
