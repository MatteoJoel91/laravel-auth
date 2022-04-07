<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'content', 'slug'];

    public function category() {

        return $this->belongsTo('App\Category'); /* namespace App; in model Post.php e poi il nome del model in questo caso Category */
        
    }
}
