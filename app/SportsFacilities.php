<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SportsFacilities extends Model
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
    protected $connection = 'mysql';

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
     * Relationship with ContactInfoCamping
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function contactInfoCamping()
    {
        return $this->belongsTo('App\ContactInfoCamping', 'id_contact_info_camping');
    }
}
