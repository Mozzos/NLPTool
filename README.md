
# Mozzos

Natural Language Processing is one of the important directions in the field of computer science and artificial intelligence. It can be used to realize the effective communication between people and computer in the natural language of the various theories and methods. Natural Language Processing is a fusion of linguistics, computer science, mathematics in one of the science. Therefore, the research in this field will involve natural language, that is, people's daily use of language, so it has a close relationship with the study of linguistics, but there are important differences. Natural Language Processing is not a general study of natural language, but in the development of natural language communication can effectively achieve the computer system, especially the software system. So it's a part of computer science.

This package was created for a personal project and it's still a work in progress. I don't expect it's API to change however.

## Table of Contents

* [Installation](#installation)
* [Setting Up](#setting-up)
* [Use](#Use)
* [Group](#Group)

## Installation

- Add the package to your `composer.json` file and run `composer update`:
```json
{
    "require": {
        "mozzos/nlptool": "dev-master"
    }
}
```

- Add the service provider to your `app/config/app.php` file, inside the `providers` array: `Mozzos\NLPTool\Providers\NLPToolServiceProvider::class`

- Publish the config file by running the following command in the terminal: `php artisan config:publish mozzos/nlptool

- Edit the config files (located in `config/nlp.php`)  etc.

## Setting Up

There's only one step to tell your models that they should use Bouncy. Just add a trait! I'll be using a fictional `Product` model for the examples.

```php
use Mozzos\NLPTool\NLPTool;

class Product extends Eloquent {
    
    use NLPTool;
    
    // ...other Eloquent attributes
    // or methods.
}
```

## Use

An example participle;:
```php
   $res = $this->ws(strip_tags($request->content . "。" . $request->title))->get();
```

The `$params` array is exactly as NLP expects for it to build a JSON request.  etc.

## Group

An example participle;:
```php
   $res = $this->analysis(strip_tags($request->content . "。" . $request->title))->group(3);
```

The `$params` array is exactly as NLP expects for it to build a JSON request.  etc.
