<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model {
	
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'posts';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['user_id', 'channel_id', 'title', 'is_link', 'is_nsfw', 'slug', 'content'];


    public function channel()
    {
        return $this->belongsTo('App\Channel', 'channel_id');
    }

    public function commentsCount() 
    {
        return $this->hasMany('App\Comment')->wherePostId($this->id)->count();
    }

}
