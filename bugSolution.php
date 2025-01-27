```php
function processData(array $data): array {
  $newData = [];
  foreach ($data as $value) {
    if (is_string($value)) {
      $newData[] = strtolower($value);
    } else {
      $newData[] = $value; //Maintain original numeric data
    }
  }
  return $newData;
}

$myData = ['Apple', 'Banana', 123, 'Orange'];
$processedData = processData($myData);
print_r($processedData);
```