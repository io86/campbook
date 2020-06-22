<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AreasAdmin extends Model
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
    protected $connection = 'mysqlAdmin';

    /**
     * Fillable fields
     *
     * @var array
     */
    protected $fillable = [
        'area_gr', 'area_en'
    ];

    /**
     * Relationship with ContactInfoCampingAdmin
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function contactInfoCampingAdmin()
    {
        return $this->hasMany('App\ContactInfoCampingAdmin', 'id_areas');
    }
}
