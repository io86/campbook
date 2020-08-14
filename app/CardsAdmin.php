<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CardsAdmin extends Model
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
    protected $connection = 'mysqlAdmin';

    /**
     * Fillable fields
     *
     * @var array
     */
    protected $fillable = [
        'visa', 'master', 'other_card', 'id_contact_info_camping'
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
