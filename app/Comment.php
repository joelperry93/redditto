<?php namespace Redditto;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model {

	/**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'comments';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['parent_id', 'content'];

    public function user() 
    {
        return $this->belongsTo('Redditto\User', 'user_id');
    }

    public function post()
    {
        return $this->belongsTo('Redditto\Post', 'post_id');
    }

    public function children()
    {
        return self::where('parent_id', $this->id)->get();
    }

    public function votes()
    {
        return $this->hasMany('Redditto\CommentVote')->whereCommentId($this->id)->sum('value');
    }
}
