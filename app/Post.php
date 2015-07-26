<?php namespace Redditto;

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
    protected $fillable = ['user_id', 'subreddit_id', 'title', 'is_link', 'is_nsfw', 'slug', 'content'];

    public function user() 
    {
        return $this->belongsTo('Redditto\User', 'user_id');
    }

    public function subreddit()
    {
        return $this->belongsTo('Redditto\Subreddit', 'subreddit_id');
    }

    public function comments() 
    {
        return $this->hasMany('Redditto\Comment')->wherePostId($this->id);
    }

    public function rootComments() 
    {
        return $this->hasMany('Redditto\Comment')->wherePostId($this->id)->whereParentId(null);
    }

    public function votes()
    {
        return $this->hasMany('Redditto\PostVote')->wherePostId($this->id)->sum('value') + 1;
    }

}
