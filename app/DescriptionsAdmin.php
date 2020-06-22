<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DescriptionsAdmin extends Model
{
    /**
     * Table --> dascriptions
     *
     * @var string
     */
    protected $table = 'descriptions';

    /**
     * Primary key --> id_descriptions
     *
     * @var string
     */
    protected $primaryKey = 'id_descriptions';

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
        'description_en', 'description_gr', 'id_contact_info'
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
