<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
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
    protected $connection = 'mysql';

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
     * Relationship with ContactInfoCamping
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function contactInfoCamping()
    {
        return $this->hasMany('App\ContactInfoCamping', 'id_status');
    }
}
