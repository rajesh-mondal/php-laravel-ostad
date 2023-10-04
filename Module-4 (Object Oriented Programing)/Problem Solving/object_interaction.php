<?php

class Song {
    public $songId;
    public $title;
}

$numb = new Song();
$numb->songId = 1;
$numb->title = 'Numb';
// echo $numb->title;
// print_r( $numb );

class Playlist {
    public $name;
    public $songs = [];

    public function addSong( $song ) {
        $this->songs[] = $song;
    }
}

$rockPlaylist = new Playlist();
$rockPlaylist->name = 'Rock';
$rockPlaylist->addSong( $numb );
print_r( $rockPlaylist );