#Fakerino Laravel Package

[![Latest Stable Version](https://poser.pugx.org/fakerino/laravel-fakerino/v/stable.svg)](https://packagist.org/packages/fakerino/laravel-fakerino)
[![Travis Ci](https://travis-ci.org/niklongstone/symfony-fakerino.svg?branch=master)](https://travis-ci.org/niklongstone/laravel-fakerino)
[![License](https://poser.pugx.org/fakerino/laravel-fakerino/license.svg)](https://packagist.org/packages/fakerino/laravel-fakerino)

The Fakerino Laravel provides integration of [Fakerino](https://github.com/niklongstone/Fakerino) into the Laravel framework.

More information in the [official documentation](https://github.com/niklongstone/Fakerino/wiki).

## Installation

  Add the following dependencies to your projects composer.json file:

```JSON
    "require": {
        "fakerino/laravel-fakerino": "0.0.1",
    }
```

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
