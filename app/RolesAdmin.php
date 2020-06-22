<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RolesAdmin extends Model
{
    /**
     * Table --> roles
     *
     * @var string
     */
    protected $table = 'roles';

    /**
     * Primary key --> id_role
     *
     * @var string
     */
    protected $primaryKey = 'id_role';

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
        'role',
    ];

    /**
     * Define Timestamps
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * Relationship with UserAdmin
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function userAdmin()
    {
        return $this->hasMany('App\UserAdmin', 'id_role');
    }
}
