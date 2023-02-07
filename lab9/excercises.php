<?php

$xml = simplexml_load_file('books.xml');

foreach ($xml->book as $book) {
    if ($book->author == "O'Brien, Tim") {
        echo $book->title . "<br>";
    }
}

?>
