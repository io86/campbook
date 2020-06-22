<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Descriptions extends Model
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
    protected $connection = 'mysql';

    /**
     * Fillable fields
     *
     * @var array
     */
    protected $fillable = [
        'description_en', 'description_gr', 'id_contact_info'
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
