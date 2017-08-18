<?php 

  $animals = [
    "Antarctica" => ["Catharacta skua", "Balaenoptera borealis", "Ommatophoca rossii"],
    "Eurasia" => ["Anser", "Canis lupus", "Rhinoceros unicornis"],
    "North America" => ["Mephitis", "Sylvilagus bachmani", "Didelphis marsupialis"],
    "South America" => ["Opisthocomus hoazin", "Tremarctos ornatus", "Chinchilla"],
    "Africa" => ["Addax nasomaculatus", "Crocuta crocuta", "Camelus dromaderius"],
    "Australia" => ["Dendrolagus", "Cygnus atratus", "Moloch horridus"]
  ];

  $newAnimals = [];

  foreach ($animals as $continents => $animalList) {
    foreach ($animalList as $animalListKey => $animal) {
      if (strpos($animal, " ")) {
        $newAnimals[] = $animal;
      } 
    }
  }

  $exploded_1 = [];
  $exploded_2 = [];

  foreach ($newAnimals as $key => $value) {
    $explodedPart = explode(" ", "$value");
    $exploded_1[] = $explodedPart[0];
    $exploded_2[] = $explodedPart[1];
  }
  
  shuffle($exploded_2);

  echo "<pre>";
  print_r($exploded_1);
  print_r($exploded_2);
  echo "</pre>";

 ?>
