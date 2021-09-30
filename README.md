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


Data example: 
```php
[
  "value" => "20",
  "value_classification" => "Extreme Fear",
  "timestamp" => "1632960000",
  "time_until_update" => "28139",
]
```