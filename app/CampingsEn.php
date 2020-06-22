<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class CampingsEn extends Model
{
    /**
     * Table --> campings_en
     *
     * @var string
     */
    protected $table = 'campings_en';

    /**
     * Primary key --> id_camping_en
     *
     * @var string
     */
    protected $primaryKey = 'id_camping_en';

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
        'name_en', 'address_en', 'city_en', 'area_en', 'id_contact_info_camping'
    ];

    /**
     * Relationship with ContactInfoCamping
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function contactInfoCamping()
    {
        return $this->belongsTo('App\ContactInfoCamping', 'id_contact_info_camping');
    }
}
