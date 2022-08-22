<?php

namespace App\Traits;

trait MovieRating
{
    private $movieRatings =  [
        ["code" => "G", "title" => "General Audiences"],
        ["code" => "PG", "title" => "Parental Guidance Suggested"],
        ["code" => "PG-13", "title" => "Parents Strongly Cautioned"],
        ["code" => "R", "title" => "Restricted"],
        ["code" => "NC-17", "title" => "Clearly Adult"],
    ];
}
