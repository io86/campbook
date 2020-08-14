<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CampingsGrAdmin extends Model
{
    /**
     * Table --> campings_gr
     *
     * @var string
     */
    protected $table = 'campings_gr';

    /**
     * Primary key --> id_camping_gr
     *
     * @var string
     */
    protected $primaryKey = 'id_camping_gr';

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
        'name_gr', 'address_gr', 'city_gr', 'area_gr', 'id_contact_info_camping'
    ];

    /**
     * Relationship with ContactInfoCamping
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function contactInfoCampingAdmin()
    {
        return $this->belongsTo('App\ContactInfoCampingAdmin', 'id_contact_info_camping');
    }
}
