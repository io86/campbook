<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SportsFacilitiesAdmin extends Model
{
    /**
     * Table --> sports_facilities
     *
     * @var string
     */
    protected $table = 'sports_facilities';

    /**
     * Primary key --> id_sports_facilites
     *
     * @var string
     */
    protected $primaryKey = 'id_sports_facilities';

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
        'beach_volley', 'tennis', 'football_5x5', 'ping_pong', 'basket', 'pool',
    ];

    /**
     * Define Timestamps
     *
     * @var bool
     */
    public $timestamps = false;

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
