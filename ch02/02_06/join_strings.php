<?php
$firstName = 'David';
$lastName = 'Powers';
$title = '"The Hitchhiker\'s Guide to the Galaxy"';
$author = 'Douglas Adams';
$answer = 42;
$newLines = "\r\n\r\n";

$book = "$title by $author";

//echo $book;
$fullName = "$firstName $lastName";
$message = "Name: $fullName $newLines";
$message .= "Book: $book";
