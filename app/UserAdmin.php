<?php

namespace App;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;
use Illuminate\Database\Eloquent\Model;

class UserAdmin extends Model implements Authenticatable
{
    use AuthenticableTrait;

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
    protected $connection = 'mysqlAdmin';

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
     * Relationship with PhotoProfileAdmin
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function photoProfilesAdmin()
    {
        return $this->hasOne('App\PhotoProfilesAdmin', 'id_user');
    }

    /**
     * Relationship with ContactInfoCampingAdmin
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function contactInfoCampingAdmin()
    {
        return $this->hasOne('App\ContactInfoCampingAdmin', 'id_user');
    }

    /**
     * Relationship with RolesAdmin
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function rolesAdmin()
    {
        return $this->belongsTo('App\RolesAdmin', 'id_role');
    }
}
