<?php

class Movie
{

    //Caratteristiche tipiche 

    public $title;
    public $year;
    public $genre;
    public $description;
    public $vote;

    //Funzione costruttore 

    public function __construct($_title, $_year, $_genre, $_description, $_vote)
    {
        $this->title = $_title;
        $this->year = $_year;
        $this->genre = $_genre;
        $this->description = $_description;
        $this->vote = $_vote;
    }

    //Metodi

    public function getTitle()
    {
        return $this->title;
    }

    public function getYear()
    {
        return $this->year;
    }

    public function getGenre()
    {
        return $this->genre;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getVote()
    {
        return $this->vote;
    }
}
