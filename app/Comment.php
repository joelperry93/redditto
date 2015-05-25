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
    protected $fillable = ['user_id', 'post_id', 'parent_id', 'content'];

    public function user() 
    {
        return $this->belongsTo('Redditto\User', 'user_id');
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
