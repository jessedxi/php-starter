<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<form action="site.php" method ="post">
What was your grade? <br>
 <input type="text" name="grade" > <br>
<input type="submit">
</form>

  <?php
$grade = $_POST["grade"];
switch ($grade) {
    case "A":
        echo "You did amazing!";
        break;
    case "B":
        echo "You did pretty good!";
        break;
    case "C":
        echo "You did poorly";
        break;
    case "D":
        echo "You did badly";
        break;
    case "F":
        echo "You failed!";
        break;

}
?>
</body>
</html>