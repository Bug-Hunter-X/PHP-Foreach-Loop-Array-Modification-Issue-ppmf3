The solution avoids modifying the array directly within the foreach loop. Instead, it uses an array_filter function or creates a new array only containing elements to be kept:
```php
// Solution 1: Using array_filter
$myArray = ['a', 'b', 'c', 'd', 'e'];
$myArray = array_filter($myArray, function ($value) { 
    return $value !== 'c';
});
print_r($myArray);

// Solution 2: Creating a new array
$myArray = ['a', 'b', 'c', 'd', 'e'];
$newArray = [];
foreach ($myArray as $value) {
    if ($value !== 'c') {
        $newArray[] = $value;
    }
}
$myArray = $newArray; // Assign the new array
print_r($myArray);
```
Both solutions provide an effective way to remove 'c' from the array without causing unexpected behavior in the loop.