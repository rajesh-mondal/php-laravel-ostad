<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use App\Models\Profile;

class DemoController extends Controller {
    function DemoAction() {
        // return User::with( 'profile' )->get();
        // return Profile::with( 'user' )->get();
    }

    function post() {
        // return Post::get();
        // return Post::with( 'user' )->get();
        // return Post::where( 'id', 2 )->get();

        // select specific post with comment
        // return Post::where( 'id', 2 )->with('comment')->get();

        // select specific post with comment and user
        // return Post::where( 'id', 2 )->with( 'comment', 'user' )->get();

        // select specific post with comment and content
        // return Post::where( 'id', 2 )->with( ['comment' => function ( $query ) {
        //     $query->select( 'content' );
        // }] )->get();

        // select specific post with comment and user in decending order
        return Post::where( 'id', 2 )->with( ['comment' => function ( $query ) {
            $query->orderBy( 'id', 'desc' );
        }] )->get();

        // return User::with( 'post' )->get();
        // return User::with( 'profile', 'post', 'comment' )->get();

        // post with tags
        // return Post::with( 'tag' )->get();

        // tag with posts
        // return Tag::with( 'post' )->get();
    }

    function complex() {
        // return Post::with( 'user', 'user.profile' )->get();
        return User::with( 'post', 'post.PostTag' )->get();
    }
}
