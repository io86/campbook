<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    /**
     * Table --> users
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * Primary key --> id_user
     *
     * @var string
     */
    protected $primaryKey = 'id_user';

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
      'username', 'email', 'password', 'id_role'
    ];

    /**
     * Hidden field --> password
     *
     * @var array
     *
     */
    protected $hidden = [
      'password'
    ];

    /**
     * Relationship with PhotoProfile
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function photoProfiles()
    {
        return $this->hasOne('App\PhotoProfiles', 'id_user');
    }

    /**
     * Relationship with ContactInfoCamping
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function contactInfoCamping()
    {
        return $this->hasOne('App\ContactInfoCamping', 'id_user');
    }

    /**
     * Relationship with Roles
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function roles()
    {
        return $this->belongsTo('App\Roles', 'id_role');
    }
}
