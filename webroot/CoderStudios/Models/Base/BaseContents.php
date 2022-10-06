<?php

namespace CoderStudios\Models\Base;

use CoderStudios\Models\AbstractModel;

class BaseContents extends AbstractModel
{
    /**
     * Disable eloquent timestamps.
     *
     * @var bool
     */
    public $timestamps = true;

    /**
     * The database connection used with the model.
     *
     * @var string
     */
    protected $connection = 'mysql';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'v1contents';

    /**
     * The attributes that should be hidden from arrays.
     *
     * @var array
     */
    protected $hidden = ['id'];

    /**
     * The default attributes.
     *
     * @var array
     */
    protected $attributes = [];

    /**
     * Carbon converted dates.
     *
     * @var array
     */
    protected $dates = [];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'enabled',
        'category_id',
        'slug',
        'name',
        'page_title',
        'meta_description',
        'summary',
        'content',
    ];
}
