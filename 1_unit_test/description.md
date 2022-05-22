🚥 Testy jednostkowe
---

Napisz testy jednostkowe, które sprawdzą poprawność działania poniższej funkcji.

```php
function sum($a, $b) {
    if (!is_int($a) || !is_int($b)) {
        throw new InvalidArgumentException();
    }
    return $a + $b;
}
```