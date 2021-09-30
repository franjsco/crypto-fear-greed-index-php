# crypto-fear-greed-index
A PHP package to fetch Bitcoin Crypto Fear and Greed Index data from [alternative.me](https://alternative.me/)


## Requirements

* PHP >= 7.2
* ext-json


## Installation


```bash
composer require franjsco/crypto-fear-greed-index
```

## Example

```php
use Franjsco\CryptoFearGreedIndex\Client;

$client = new Client();

$data = $client->getData();
```


Return: 
```php
array(4) {
  ["value"]=>
  string(2) "20"
  ["value_classification"]=>
  string(12) "Extreme Fear"
  ["timestamp"]=>
  string(10) "1632960000"
  ["time_until_update"]=>
  string(5) "29024"
}
```