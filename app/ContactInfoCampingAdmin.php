<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactInfoCampingAdmin extends Model
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
    protected $connection = 'mysqlAdmin';

    /**
     * Fillable fields
     *
     * @var array
     */
    protected $fillable = [
        'email_camping', 'website', 'tel', 'postcode', 'published_at', 'created_at', 'updated_at', 'id_user', 'id_status', 'id_areas'
    ];

    /**
     * Relationship with UserAdmin
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function userAdmin()
    {
        return $this->belongsTo('App\UserAdmin', 'id_user');
    }

    /**
     * Relaionship with StatusAdmin
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function statusAdmin()
    {
        return $this->belongsTo('App\StatusAdmin', 'id_status');
    }

    /**
     * Relationship with AreasAdmin
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function areasAdmin()
    {
        return $this->belongsTo('App\AreasAdmin', 'id_areas');
    }

    /**
     * Relationship with CampingsEnAdmin
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function campingsEnAdmin()
    {
        return $this->hasOne('App\CampingsEnAdmin', 'id_contact_info_camping');
    }

    /**
     * Relationship with CampingsGrAdmin
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function campingsGrAdmin()
    {
        return $this->hasOne('App\CampingsGrAdmin', 'id_contact_info_camping');
    }

    /**
     * Relationship with SportsFacilitiesAdmin
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function sportsFacilitiesAdmin()
    {
        return $this->hasOne('App\SportsFacilitiesAdmin', 'id_contact_info_camping');
    }

    /**
     * Relationship with PhotosCampingAdmin
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function photosCampingAdmin()
    {
        return $this->hasOne('App\PhotosCampingAdmin', 'id_contact_info_camping');
    }

    /**
     * Relationship with FacilitiesAdmin
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function facilitiesAdmin()
    {
        return $this->hasOne('App\FacilitiesAdmin', 'id_contact_info_camping');
    }

    /**
     * Relationship with DescriptionsAdmin
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function descriptionsAdmin()
    {
        return $this->hasOne('App\DescriptionsAdmin', 'id_contact_info_camping');
    }

    /**
     * Relationship with CardsAdmin
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function cardsAdmin()
    {
        return $this->hasOne('App\CardsAdmin', 'id_contact_info_camping');
    }
}
