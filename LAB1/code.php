<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Лабораторна робота 1 -> Виведення</title>
    
</head>

<body>
  <?php
  echo 'Рядок додано<br><br>';

  $note = $_POST['note'];
  $year = $_POST['year'];
  $month = $_POST['month'];
  $day = $_POST['day'];

  $item =  ["date" => $year . '.' . $month . '.' . $day, "note" => $note];

  $url = 'file.txt';

  $readJSONFile = file_get_contents($url);
  $array = json_decode($readJSONFile);

  if (!$array) $array = [];

  array_push($array, $item);

  $arrayJson = json_encode($array);
  $array = json_decode($arrayJson);

  usort($array, function ($a, $b) {
    return $a->date > $b->date ? -1 : 1;
  });

  $arrayJson = json_encode($array);
  file_put_contents($url, $arrayJson);

 echo '<table border = 1>';

   foreach ($array as $value) {
    echo '<tr><td>';
    echo $value->date;
    echo '</td><td>';
    echo $value->note;
    echo '</td><tr>';
  }

  echo '</table>';

  ?>

<a href="/">На головну</a>
</body>

</html>
