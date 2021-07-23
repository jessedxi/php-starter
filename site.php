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
class Movie
{
 public $title;
 private $rating;
 public function __construct($title, $rating)
 {
  $this->title = $title;
  $this->rating = $rating;
 }

 public function getRating()
 {
  return $this->rating;
 }

 public function setRating($rating)
 {
  $this->rating = $rating;
 }
}

$avengers = new Movie("Avengers", "PG-13");
//G, PG, PG-13, R, NR
$avengers->setRating("Dog");
echo $avengers->getRating();
?>
</body>

</html>