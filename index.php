<?php 

  // Все животные
  $animals = [
    "Antarctica" => ["Catharacta skua", "Balaenoptera borealis", "Ommatophoca rossii"],
    "Eurasia" => ["Anser", "Canis lupus", "Rhinoceros unicornis"],
    "North America" => ["Mephitis", "Sylvilagus bachmani", "Didelphis marsupialis"],
    "South America" => ["Opisthocomus hoazin", "Tremarctos ornatus", "Chinchilla"],
    "Africa" => ["Addax nasomaculatus", "Crocuta crocuta", "Camelus dromaderius"],
    "Australia" => ["Dendrolagus", "Cygnus atratus", "Moloch horridus"]
  ];

  // Животные, названия которых состоят из двух слов
  $twoWordsAnimals = [];

  // Части названий животных
  $part1 = []; // Первое слово в названии
  $part2 = []; // Второе слово в названии

  foreach ($animals as $continent => $animalList) {
    foreach ($animalList as $animalListKey => $animal) {
      $explodedAnimals = explode(" ", $animal);
      $numberOfWords = count($explodedAnimals);
      
        if ($numberOfWords === 2) {
          $twoWordsAnimals[] = $animal;
          $part1[] = $explodedAnimals[0];
          $part2[] = $explodedAnimals[1];    
        }
    }
  }
    
  shuffle($part2);

  // Список выдуманных животных
  $final = [];
    
  foreach ($part1 as $finalKey => $finalValue) {
    $final[] = $finalValue . " " . $part2[$finalKey];
  }

?>

<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <link href="https://fonts.googleapis.com/css?family=PT+Serif:400,700&amp;subset=cyrillic" rel="stylesheet">
  <link rel="stylesheet" href="wd.css">
  <title>Жестокое обращение с животными</title>
</head>
<body>
  <div class="wrapper clearfix">
  <h1>Жестокое обращение с животными</h1>
    <div class="animals-list">
      <?php 
        foreach ($final as $key => $value) {
        echo $value . "<br>";
        }
      ?>
    </div>
    <div class="images">
    <img src="img/1-min.jpg" alt="">
    <img src="img/2-min.jpg" alt="">
    <img src="img/3-min.jpg" alt="">
    <img src="img/4-min.jpg" alt="">
    <img src="img/5-min.jpg" alt="">
    <img src="img/6-min.jpg" alt="">
    <img src="img/7-min.jpg" alt="">
    <img src="img/8-min.jpg" alt="">
    </div>
  </div>
</body>
</html>