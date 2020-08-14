<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Areas extends Model
{
    /**
     * Table --> areas
     *
     * @var string
     */
    protected $table = 'areas';

    /**
     * Primary key --> id_areas
     *
     * @var string
     */
    protected $primaryKey = 'id_areas';

    /**
     * Timestamps --> false
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * Connection name
     *
     * @var string
     */
    protected $connection = 'mysql';

    /**
     * Fillable fields
     *
     * @var array
     */
    protected $fillable = [
        'area_gr', 'area_en'
    ];

    /**
     * Relationship with ContactInfoCamping
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function contactInfoCamping()
    {
        return $this->hasMany('App\ContactInfoCamping', 'id_areas');
    }
}
