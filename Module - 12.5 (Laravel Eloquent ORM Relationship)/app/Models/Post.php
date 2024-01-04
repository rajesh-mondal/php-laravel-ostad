<?php

namespace App\Models;

use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Post extends Model {
    function user() {
        return $this->belongsTo( User::class );
    }

    function comment() {
        return $this->hasMany( Comment::class );
    }

    function tag() {
        return $this->belongsToMany( Tag::class, 'post_tags' );
    }

    function PostTag(){
        return $this->hasMany( PostTag::class );
    }
}
