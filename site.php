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
class Chef
{
 public function makeChicken()
 {
  echo "The chef makes chicken <br>";
 }
 public function makeSalad()
 {
  echo "The chef makes salad <br>";
 }
 public function makeSpecialDish()
 {
  echo "The chef makes bbq ribs <br>";
 }
}

class ItalianChef extends Chef
{
 public function makePasta()
 {
  echo "The chef makes pasta <br>";
 }
 public function makeSpecialDish()
 {
  echo "The chef makes chicken parm";
 }
}

$chef = new Chef();
$chef->makeSpecialDish();

$italianChef = new ItalianChef();
$italianChef->makeSpecialDish();

?>
</body>

</html>