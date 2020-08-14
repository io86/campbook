<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PhotoProfiles extends Model
{
    /**
     * Table --> photo_profiles
     *
     * @var string
     */
    protected $table = 'photo_profiles';

    /**
     * Primary key --> id_photo_profile
     *
     * @var string
     */
    protected $primaryKey = 'id_photo_profile';

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
        'ur_photo_profile', 'id_user'
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
}
