<?php

namespace Allutomotive;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Category extends Model
{
    //
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'name', 'importance',
    ];

    public function posts()
    {

        return $this->hasMany(Post::class, 'category_id');

    }
}
