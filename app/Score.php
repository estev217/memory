<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    protected $table = 'scores';

    /**
     * Get the user that owns the score.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }


}
