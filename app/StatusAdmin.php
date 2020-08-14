<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StatusAdmin extends Model
{
    /**
     * Table --> status
     *
     * @var string
     */
    protected $table = 'status';

    /**
     * Primary key --> id_status
     *
     * @var string
     */
    protected $primaryKey = 'id_status';

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
        'status',
    ];

    /**
     * Defien Timestamps false
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * Relationship with ContactInfoCampingAdmin
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function contactInfoCampingAdmin()
    {
        return $this->hasMany('App\ContactInfoCampingAdmin', 'id_status');
    }
}
