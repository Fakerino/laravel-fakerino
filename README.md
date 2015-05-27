#Fakerino Laravel Package

[![Latest Stable Version](https://poser.pugx.org/fakerino/laravel-fakerino/v/stable.svg)](https://packagist.org/packages/fakerino/laravel-fakerino)
[![Travis Ci](https://travis-ci.org/niklongstone/laravel-fakerino.svg?branch=master)](https://travis-ci.org/niklongstone/laravel-fakerino)
[![License](https://poser.pugx.org/fakerino/laravel-fakerino/license.svg)](https://packagist.org/packages/fakerino/laravel-fakerino)

The Fakerino Laravel provides integration of [Fakerino](https://github.com/niklongstone/Fakerino) into the Laravel framework.

More information in the [official documentation](https://github.com/niklongstone/Fakerino/wiki).

## Installation

  Add the following dependencies to your projects composer.json file:

```JSON
    "require": {
        "fakerino/laravel-fakerino": "0.0.*",
    }
```

### Install the ODS data sample in two ways:
 - Add a script to your composer.json:
```JSON
  "scripts": {
        "post-install-cmd": "vendor/fakerino/fakerino/build/ods vendor/fakerino/fakerino/data",
        "post-update-cmd": "vendor/fakerino/fakerino/build/ods vendor/fakerino/fakerino/data"
    }
```
 In this way the data will be always updated automatically via composer.

 - Run maually the command (after the fakerino composer installation):  
`$ vendor/fakerino/fakerino/build/ods vendor/fakerino/fakerino/data`

### Initializing the package

To initialize the bundle, you'll need to add it in your `config/app.php`.

```PHP
	'providers' => [
        'Fakerino\Package\FakerinoProvider',
```

### Usage in controller
```PHP

<?php namespace App\Http\Controllers;

use Fakerino\Fakerino;

class FakeController extends Controller
{
	public function index()
	{
        return $this->fakerino->fake('surname');
	}
}
```
