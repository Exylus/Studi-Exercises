<?php
    $movie = "Children of Men";
    $rates = [3, 4, 2, 4, 3, 5, 0];
    $comment = ["Albert", "Super film, j’ai adoré!"];
    function mean($rates){
        print_r(array_sum($rates) / count($rates));
    }
    mean($rates);
    function anonymise($name){
        $author = $name[0];
        $nameLength = strlen($author);
        $numberOfStars = str_repeat('*', $nameLength - 1);
        $anonymisedAuthor = $author[0] . $numberOfStars;
        print_r($anonymisedAuthor);
    }
    anonymise($comment);