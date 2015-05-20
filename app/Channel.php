<?php namespace Redditto;

use Illuminate\Database\Eloquent\Model;

class Channel extends Model {

	/**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'channels';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'description', 'adult_content', 'deleted', 'creator_id'];

}
