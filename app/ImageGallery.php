<?php

namespace Allutomotive;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class ImageGallery extends Model
{
    //
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'title', 'about', 'image','post_id',
    ];
}
