# Formidable

[![Build Status](https://travis-ci.org/plokko/formidable.svg?branch=master)](https://travis-ci.org/plokko/formidable)
[![styleci](https://styleci.io/repos/CHANGEME/shield)](https://styleci.io/repos/CHANGEME)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/plokko/formidable/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/plokko/formidable/?branch=master)
[![SensioLabsInsight](https://insight.sensiolabs.com/projects/CHANGEME/mini.png)](https://insight.sensiolabs.com/projects/CHANGEME)
[![Coverage Status](https://coveralls.io/repos/github/plokko/formidable/badge.svg?branch=master)](https://coveralls.io/github/plokko/formidable?branch=master)

[![Packagist](https://img.shields.io/packagist/v/plokko/formidable.svg)](https://packagist.org/packages/plokko/formidable)
[![Packagist](https://poser.pugx.org/plokko/formidable/d/total.svg)](https://packagist.org/packages/plokko/formidable)
[![Packagist](https://img.shields.io/packagist/l/plokko/formidable.svg)](https://packagist.org/packages/plokko/formidable)

Package description: CHANGE ME

## Installation

Install via composer
```bash
composer require plokko/formidable
```

### Register Service Provider

**Note! This and next step are optional if you use laravel>=5.5 with package
auto discovery feature.**

Add service provider to `config/app.php` in `providers` section
```php
Plokko\Formidable\ServiceProvider::class,
```

### Register Facade

Register package facade in `config/app.php` in `aliases` section
```php
Plokko\Formidable\Facades\Formidable::class,
```

### Publish Configuration File

```bash
php artisan vendor:publish --provider="Plokko\Formidable\ServiceProvider" --tag="config"
```

## Usage

WIP
