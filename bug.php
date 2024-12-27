```php
function my_function($a, $b) {
  if ($a === null || $b === null) {
    return null; // Handle null values
  }

  // ... rest of the function
}

// Example usage:
$result = my_function(10, null);
var_dump($result); // Output: NULL

$result = my_function(10, 20);
var_dump($result); // Output: ... (Result of calculation)
```