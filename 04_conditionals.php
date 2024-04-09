<?php

/*---- Operators----- */

/*
     <        less
     >        great
     <=       less than ot equal to
     =>       greater than or equal to
     ==       equal to
     ===      identical to
     !=       not equal to
     !==      not identical to
*/

// $age = 17;

// if($age>=18) {
//     echo 'You are old enough to vote';
// } else{
//     echo 'Sorry, you are not old enough to vote';
// }

// $t = date("H")
//     if($t <12 ) {
//         echo 'Good Morning';
//     } elseif($t <= 17){
//     echo 'Good afternoon';
// } else{
//     'Good evening';
// }


$posts = ['First Post'];

// if (!empty($posts)) {
//     echo $posts[0];
// } else{
//     echo 'No posts';
// }

   // echo !empty($posts) ? $posts[0] : 'No posts';

// // $firstPost = !empty($posts) ? $posts[0] : 'No posts';

// $firstPost = !empty($posts) ? $posts[0] : null;

// $firstPost = $posts[0] ?? null;

$fav_color = 'yellow';

switch($fav_color){
    case('red'):
    echo 'Your favourite color is red';
        break;
    case('blue'):
    echo 'Your favourite color is blue';
        break;
    case('green'):
    echo 'Your favourite color is green';
        break;
    default: 
    echo ' Your favourite color is not red, green or blue';
}
