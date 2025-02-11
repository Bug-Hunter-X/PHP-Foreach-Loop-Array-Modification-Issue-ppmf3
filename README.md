# PHP Foreach Loop Array Modification Issue

This repository demonstrates a common issue in PHP when modifying an array while iterating over it using a `foreach` loop.  The problem arises because `foreach` creates copies of the array's values, but when modifying values that are references (like objects), it might not update the original array correctly.  This can cause unexpected behavior.  The solution shows how to handle this using different iterating techniques.

## Bug
The `bug.php` file contains the erroneous code.  The code attempts to remove an element from the array within the loop, which leads to unexpected skipping of array elements.