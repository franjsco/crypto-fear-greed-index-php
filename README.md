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
