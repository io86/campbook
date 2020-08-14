<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FacilitiesAdmin extends Model
{
    /**
     * Table --> facilities
     *
     * @var string
     */
    protected $table = 'facilities';

    /**
     * Primary key --> id_facilities
     *
     * @var string
     */
    protected $primaryKey = 'id_facilities';

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
        'distance_sea',
        'places',
        'area_sq',
        'room',
        'restaurant',
        'market',
        'bar',
        'cooking_facil',
        'ironic_facil',
        'hanticapped_people',
        'mobil_home',
        'wifi',
        'id_contact_info_camping'
    ];

    /**
     * Relationship with ContactInfoCampingAdmin
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function contactInfoCampingAdmin()
    {
        return $this->belongsTo('App\ContactInfoCampingAdmin', 'id_contact_info_camping');
    }
}
