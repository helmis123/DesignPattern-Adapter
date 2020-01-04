<?php
require "vendor/autoload.php";
use App\Adapters\EBookAdapter;
use App\Classes\EBook;
$eBook = new EBook();
$book = new EBookAdapter($eBook);
// now the behavior the class Ebook is adapted to that of Book
echo $book->turnPage();
echo $book->turnPage();
echo $book->turnPage();

