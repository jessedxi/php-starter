<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <?php
class Book
{
 public $title;
 public $author;
 public $pages;
}

$book1 = new Book;
$book1->title = "Harry Potter";
$book1->author = "JK Rowling";
$book1->pages = 400;

$book2 = new Book;
$book2->title = "Lord of the Rings";
$book2->author = "Tolkien";
$book2->pages = 700;

echo $book1->title;
echo $book2->author;

?>
</body>

</html>