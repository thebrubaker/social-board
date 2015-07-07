<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SocialCard extends Model
{
    /**
     * This model is set up for soft deleting
     *
     * @var boolean
     */
    protected $softDelete = true;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'social_cards';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['url', 'type'];

    
    public function user() {
    	return $this->hasOne('App\User');
    }

    public function board() {
    	return $this->hasOne('App\Board');
    }
}
