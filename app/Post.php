<?php

namespace Allutomotive;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Kyslik\ColumnSortable\Sortable;
use Laravel\Scout\Searchable;

class Post extends Model
{
    //
    use Notifiable;
    use Sortable;
    use Searchable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'title', 'body', 'user_id','category_id','featured_photo','importance','description','keywords',
    ];

    public function images(){
        return $this->hasMany('Allutomotive\ImageGallery','post_id');
    }

    public function category(){
        return $this->belongsTo('Allutomotive\Category','category_id');
    }

    public function path()
    {

        $check = Category::all()->where('check->id', '===','this->id');

                return "/{$check->name}/{$this->title}";


    }

    public function creator()
    {

        return $this->belongsTo(User::class, 'user_id');

    }



}
