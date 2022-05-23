<?php
/* ------------ Functions ----------- */

/*
** Function Syntax
  function functionName($arg1, $arg2, ...) {
    // code to be executed
  }
  - Functions have their own local scope as opposed to global scope
*/



function registerUser() {
    echo 'User has been registered!'."</br>";
}

// Running a function

registerUser();




// Returning values


function add($n1, $n2){
    $sum = $n1 + $n2;
    return $sum;
}
echo add(1,2);


// Assigning anonymous functions to variables. Often used for closures and callback functions
$add = function ($num1, $num2) {
    return $num1 + $num2;
  };
  
  echo $add(5, 5);

?>