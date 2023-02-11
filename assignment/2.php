
<?php
//  Write a program to check student grades based on the marks.

// Conditions:

// If marks are 60% or more, the grade will be First Division.
// If marks are between 45% to 59%, the grade will be Second Division.
// If marks are between 33% to 44%, the grade will be Third Division.
// If marks are less than 33%, the student will  Fail.
$marks = -1;

if ( $marks >= 60 ) {
    echo "First Division";
} elseif ( $marks >= 45 && $marks < -59 ) {
    echo "Second Division";
} elseif ( $marks >= 33 && $marks <= 44 ) {
    echo "Third Division";
} else {
    echo "Fail";
}
