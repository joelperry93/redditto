<?php namespace Redditto;

use Illuminate\Database\Eloquent\Model;

class Subreddit extends Model {

	/**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'subreddits';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'description', 'adult_content', 'deleted', 'creator_id'];

    public function posts() 
    {
        return $this->hasMany('Redditto\Post')->whereSubredditId($this->id);
    }

}
