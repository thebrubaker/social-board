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

    public function removeScript($html) {
        $doc = new \DOMDocument();
        $doc->loadHTML($html, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        $script_tags = $doc->getElementsByTagName('script');
        $length = $script_tags->length;
        for ($i = 0; $i < $length; $i++) {
          $script_tags->item($i)->parentNode->removeChild($script_tags->item($i));
        }
        $html = $doc->saveHTML();
        return $html;
    }
}
