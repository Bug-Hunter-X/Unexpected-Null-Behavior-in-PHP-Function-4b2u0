# PHP Null Handling Bug

This repository demonstrates a common issue in PHP related to handling null values and loose typing. The `bug.php` file contains a function with a potential null-related error, while `bugSolution.php` provides a corrected version with explicit null checks.

## Problem

PHP's loose typing can lead to unexpected behavior when comparing values. In the original code, a failure to handle `null` values appropriately can result in unexpected behavior, such as errors, unexpected results, or unexpected function returns.

## Solution

The solution involves explicitly checking for `null` values using strict comparison (`===`) before performing any operations.  This ensures that the function behaves as expected when dealing with `null` inputs. 

## How to Run

1. Clone this repository.
2. Run `php bug.php` and `php bugSolution.php` to see the output from the original and corrected functions, respectively.  Observe the differences in behavior when a null value is passed. 