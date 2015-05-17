<?php namespace App;

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
        return $this->belongsTo('App\User', 'user_id');
    }

    public function children()
    {
        return self::where('parent_id', $this->id)->get();
    }
}
