<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PhotosCampingAdmin extends Model
{
    /**
     * Table --> photos_camping
     *
     * @var string
     */
    protected $table = 'photos_camping';

    /**
     * Primary key --> id_photos_camping
     *
     * @var string
     */
    protected $primaryKey = 'id_photos_camping';

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
        'img1',
        'img2',
        'img3',
        'img4',
        'img5',
        'img6',
        'img7',
        'img8',
        'img9',
        'img10',
        'img11',
        'img12',
        'img13',
        'img14',
        'img15',
        'img16',
        'id_contact_info_camping'
    ];

    /**
     * Relationship with ContactInfoCampingAdmin
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function contactInfoCampingAdmin()
    {
        return $this->belongsTo('App\ContactInfoCampingAdmin', 'id_contact_info_camping');
    }
}
