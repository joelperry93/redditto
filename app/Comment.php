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

}
