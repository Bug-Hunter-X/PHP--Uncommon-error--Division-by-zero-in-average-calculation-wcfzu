```php
function improvedAverage($arr) {
  if (empty($arr)) {
    return 0; // Handle empty array
  }

  // Check if all elements are numeric
  if (!array_filter($arr, 'is_numeric')) {
    return 'Error: Array contains non-numeric values.';
  }

  $sum = array_sum($arr);
  $count = count($arr);

  return $sum / $count;
}

$numbers = [10, 20, 30, 0, 50];
echo improvedAverage($numbers); // Output: 22

$numbers = [0,0,0];
echo improvedAverage($numbers); //Output 0

$numbers = [];
echo improvedAverage($numbers); //Output 0

$numbers = ['a','b','c'];
echo improvedAverage($numbers); //Output: Error: Array contains non-numeric values.
```