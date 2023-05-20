<?php

// conditions
// all the numbers in the array will be >= -1 <= 100
// in each array there will be >= 1 <=2 , -1 values
// only maximum of 5 elements can be present in the array
$array = [
    [12, -1, 1, 1, -1], // => 2
    [12, -1, 66, 4, 0], // => 70
    [12, 0, 66, 76, -1], // => 0
    [-1, 1, 2, 3, 4], // => 10
    [56, -1, 66, -1, 67], // => 66
];

// print the index which has the maximum sum between each 1s => 1
// print the array with all the sum values => [2, 70, 0, 10, 66]
