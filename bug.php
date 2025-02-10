```php
function buggyFunction($arr) {
  if (empty($arr)) {
    return 0; // Handle empty array
  }

  $sum = 0;
  foreach ($arr as $value) {
    $sum += $value;
  }

  return $sum / count($arr);
}

$numbers = [10, 20, 30, 0, 50];
echo buggyFunction($numbers); //Output 22

$numbers = [0,0,0];
echo buggyFunction($numbers); //Output 0

$numbers = [];
echo buggyFunction($numbers); //Output 0

$numbers = ['a','b','c'];
echo buggyFunction($numbers); //Warning: Division by zero in ...
```