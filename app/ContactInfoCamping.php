<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactInfoCamping extends Model
{
    /**
     * Table --> contact_info_campings
     *
     * @var string
     */
    protected $table = 'contact_info_campings';

    /**
     * Primary key --> id_contact_info_camping
     *
     * @var string
     */
    protected $primaryKey = 'id_contact_info_camping';

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
        'email_camping', 'website', 'tel', 'postcode', 'published_at', 'created_at', 'updated_at', 'id_user', 'id_status', 'id_areas'
    ];

    /**
     * Relationship with User
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User', 'id_user');
    }

    /**
     * Relaionship with Status
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function status()
    {
        return $this->belongsTo('App\Status', 'id_status');
    }

    /**
     * Relationship with Areas
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function areas()
    {
        return $this->belongsTo('App\Areas', 'id_areas');
    }

    /**
     * Relationship with CampingsEn
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function campingsEn()
    {
        return $this->hasOne('App\CampingsEn', 'id_contact_info_camping');
    }

    /**
     * Relationship with CampingsGr
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function campingsGr()
    {
        return $this->hasOne('App\CampingsGr', 'id_contact_info_camping');
    }

    /**
     * Relationship with SportsFacilities
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function sportsFacilities()
    {
        return $this->hasOne('App\SportsFacilities', 'id_contact_info_camping');
    }

    /**
     * Relationship with PhotosCamping
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function photosCamping()
    {
        return $this->hasOne('App\PhotosCamping', 'id_contact_info_camping');
    }

    /**
     * Relationship with Facilities
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function facilities()
    {
        return $this->hasOne('App\Facilities', 'id_contact_info_camping');
    }

    /**
     * Relationship with Descriptions
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function descriptions()
    {
        return $this->hasOne('App\Descriptions', 'id_contact_info_camping');
    }

    /**
     * Relationship with Cards
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function cards()
    {
        return $this->hasOne('App\Cards', 'id_contact_info_camping');
    }
}
