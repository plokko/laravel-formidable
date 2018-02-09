# Formidable

[![Packagist](https://img.shields.io/packagist/v/plokko/formidable.svg)](https://packagist.org/packages/plokko/formidable)
[![Packagist](https://poser.pugx.org/plokko/formidable/d/total.svg)](https://packagist.org/packages/plokko/formidable)
[![Packagist](https://img.shields.io/packagist/l/plokko/formidable.svg)](https://packagist.org/packages/plokko/formidable)

A Laravel Vue.js form builder
## Installation

Install via composer
```bash
composer require plokko/formidable
```

### Register Service Provider

**If you use Laravel <5.5 you need to manually register the provider and facade**

Add service provider to `config/app.php` in `providers` section
```php
Plokko\Formidable\ServiceProvider::class,
```

Register package facade in `config/app.php` in `aliases` section
```php
Plokko\Formidable\Facades\Formidable::class,
```



### Publish Configuration File

```bash
php artisan vendor:publish --provider="Plokko\Formidable\ServiceProvider" --tag="config"
```

## Usage
Formidable is composed of a Vuejs library and a php helper to help you build the field configuration
### Javascript
...

###PHP helper

```php
$fields =Formidable::fields();
```

