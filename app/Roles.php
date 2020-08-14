<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Roles extends Model
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
    protected $connection = 'mysql';

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
     * Relationship with User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function user()
    {
        return $this->hasMany('App\User', 'id_role');
    }
}
