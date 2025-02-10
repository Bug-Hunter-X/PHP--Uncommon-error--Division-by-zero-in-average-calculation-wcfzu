# PHP Uncommon Error: Division by Zero in Average Calculation

This repository demonstrates a common yet easily overlooked error in PHP: division by zero when calculating the average of an array.  The `bug.php` file contains a function that attempts to calculate the average, but fails when encountering non-numeric values or an empty array.

The solution, provided in `bugSolution.php`, addresses this issue by adding robust error handling and input validation to prevent the division by zero error.

## How to Reproduce

1. Clone this repository.
2. Run `bug.php`. Observe the error when non-numeric values are present in the array.
3. Run `bugSolution.php`. Observe the improved error handling and correct average calculation, even with non-numeric values or empty array.