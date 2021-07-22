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
class Student
{
 public $name;
 public $major;
 public $gpa;

 public function __construct($name, $major, $gpa)
 {
  $this->name = $name;
  $this->major = $major;
  $this->gpa = $gpa;
 }
}

$book1 = new Student("Jim", "Business", 2.8);
$book2 = new Student("Pam", "Art", 3.6);
?>
</body>

</html>