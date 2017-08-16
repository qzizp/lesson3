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

 ?>