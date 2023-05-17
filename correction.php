<?php

function guessWordCount(string $word, int $length) : bool | int
 {
    $wordLength = strlen($word);

    if($length === $wordLength)
        return true;

    return $length - $wordLength;
 }

 echo guessWordCount("toto", 4). PHP_EOL;
 echo guessWordCount("carnaval", 8) . PHP_EOL;
 echo guessWordCount("souris", 6) . PHP_EOL;

 echo guessWordCount("titi", 6) . PHP_EOL;
 echo guessWordCount("tartine", 4) . PHP_EOL;
 echo guessWordCount("telephone", 12) . PHP_EOL;