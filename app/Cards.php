<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cards extends Model
{
    /**
     * Table --> cards
     *
     * @var string
     */
    protected $table = 'cards';

    /**
     * Primary key --> id_cards
     *
     * @var string
     */
    protected $primaryKey = 'id_cards';

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
        'visa', 'master', 'other_card', 'id_contact_info_camping'
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
