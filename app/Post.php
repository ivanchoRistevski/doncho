<?php

namespace Allutomotive;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Post extends Model
{
    //
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'title', 'body', 'user_id','category_id','featured_photo','importance','description',
    ];

    public function images(){
        return $this->hasMany('Allutomotive\ImageGallery','post_id');
    }

    public function category(){
        return $this->belongsTo('Allutomotive\Category','category_id');
    }

    public function path()
    {

        return "/posts/{$this->id}";

    }

    public function creator()
    {

        return $this->belongsTo(User::class, 'user_id');

    }
}
