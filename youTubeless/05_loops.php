<?php

/* -------- Loops & Iteration ------- */

/* ------------ For Loop ------------ */

/*
** For Loop Syntax
  for (initialize; condition; increment) {
  // code to be executed
  }
*/

for ($x = 0; $x <= 10; $x++) {
  echo "Number: $x <br>";
}

/* ------------ While Loop ------------ */

/*
** While Loop Syntax
  while (condition) {
  // code to be executed
  }
*/

$x = 1;
while ($x <= 5) {
  echo "Number: $x <br>";
  $x++;
}

/* ---------- Do While Loop --------- */

/*
** Do While Loop Syntax
  do {
  // code to be executed
  } while (condition);

do...while loop will always execute the block of code once, even if the condition is false.
*/

$x = 10;
do {
  echo "Number: $x <br>";
  $x++;
} while ($x <= 5);


/* ---------- Foreach Loop ---------- */

/*
** Foreach Loop Syntax
  foreach ($array as $value) {
  // code to be executed
  }
*/

// Loop through an array

// $posts  = ['first post', 'second post', 'third post'];

// for ($x=0; $x<count($posts); $x++ ) {
//     echo $posts[$x];
// }

// foreach($posts as $post){
//     echo $post;
// }


$posts  = ['first post', 'second post', 'third post'];

foreach($posts as $index =>  $post){
    echo $index+1 . ' - ' .  $post ;
}

$person = [
  'first_name' => 'Brad',
  'last_name' => 'Traversy',
  'email' => 'brad@gmail.com',
];
foreach($person as $key => $value){
    echo  "$key - $value";
}


