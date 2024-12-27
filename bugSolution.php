```php
function my_function($a, $b) {
  if ($a === null || $b === null) {
    return null; // Handle null values explicitly
  }

  // ... rest of the function, now safe to perform operations with $a and $b
  return $a + $b; // Example calculation
}

// Example usage:
$result = my_function(10, null);
var_dump($result); // Output: NULL

$result = my_function(10, 20);
var_dump($result); // Output: int(30)
```