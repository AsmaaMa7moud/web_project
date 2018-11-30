<?php

include ("DB.php");
$q="insert into project   (id,name,image,des) VALUES
                               ('1','pasta','p1.jpg','5 spoons of flour
Large spoon of ghee
1/2 kilo pasta pen
1/4 kilo minced meat
A cup of soup
1 egg
salt
Onions
Milk'),
                               ('2','pizza','p2.jpg','Cup water
3 cups white flour
Two spoons of olive oil
spoon salt
Instant yeast bag
spoon sugar'),
                               ('3','kufta','p3.jpg','3 medium-sized onions
A Viennese loaf or a piezer
Half cup of chopped parsley
Half spoon black pepper
Half spoon spoons of meat
Half spoon grilled spice
Half spoon paprika
Half spoon chutney'),
                               ('4','crepe','p4.jpg','1 cup flour
2 eggs
1/2 cup milk
1/1 cup of water
 spoon salt
 Large spoon butter'),
                               ('5','kushari','p5.jpg','Rice half a kilo
 Spaghetti half a kilo
 Lenses half a kilo
 Homs Half a kilo
 Tomato juice: 1 kg
 Onion: half a kilo
 Vegetable oil a cup and a half
 Garlic 10 cloves
 Salt, to taste
 Cumin spoon (soft)
 Chop a spoon'),
                               ('6','chocolate cake','p6.jpg','1 cup flour and 1 cup of oil
cup of milk 
cup of raw cocoa
 sugar cup
 3 eggs
 Baking powder
 2 vanilla '),
                               ('7','apple pie','p7.jpg','1 cup butter
2 cups flour
1 teaspoon salt
1 egg
1 egg yolk
1/2 cup soft sugar
1 teaspoon vanilla
1 kg apple
1/2 cup water
1/2 cup sugar
2 tbsp cinnamon'),
                               ('8','cheese cake','p8.jpg','One and a half biscuits
3 butter cutters.
3/4 cups milk
an egg
Half a cup of sugar
2 hung large flour
8 pieces of Kerry cheese
')";
$db->myExec($q);

?>
