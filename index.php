<?php 

  $animals = [
    "Antarctica" => ["Catharacta skua", "Balaenoptera borealis", "Ommatophoca rossii"],
    "Eurasia" => ["Anser", "Canis lupus", "Rhinoceros unicornis"],
    "North America" => ["Mephitis", "Sylvilagus bachmani", "Didelphis marsupialis"],
    "South America" => ["Opisthocomus hoazin", "Tremarctos ornatus", "Chinchilla"],
    "Africa" => ["Addax nasomaculatus", "Crocuta crocuta", "Camelus dromaderius"],
    "Australia" => ["Dendrolagus", "Cygnus atratus", "Moloch horridus"]
  ];

  $twoWordsAnimals = [];

  foreach ($animals as $continent => $animalList) {
    foreach ($animalList as $animalListKey => $animal) {

      $explodedAnimals = explode(" ", $animal);
      $numberOfWords = count($explodedAnimals);
      
        if ($numberOfWords === 2) {
          $twoWordsAnimals[] = $animal;
        }
    }
  }

  echo "<pre>";       
  print_r($twoWordsAnimals);        
  echo "</pre>";

 ?>
