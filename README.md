# Laravel Sluggable

[![Latest Stable Version](https://poser.pugx.org/designbycode/sluggable/v/stable)](https://packagist.org/packages/designbycode/sluggable)
[![Total Downloads](https://poser.pugx.org/designbycode/sluggable/downloads)](https://packagist.org/packages/designbycode/sluggable)
[![Latest Unstable Version](https://poser.pugx.org/designbycode/sluggable/v/unstable)](https://packagist.org/packages/designbycode/sluggable)
[![License](https://poser.pugx.org/designbycode/sluggable/license)](https://packagist.org/packages/designbycode/sluggable)

Genarate a slug from Laravel Eloquent models

* [Installation](#installation)
* [How to use sluggable](#how-to-use-sluggable)
* [Example](#example)

### Installation

```php
$ composer require designbycode/sluggable
```

| Laravel Version | Package Version |
|:---------------:|:---------------:|
|       7.0       |      1.0.*      |
|       6.0       |      1.0.*      |


### Example 

```
http://www.exapmle.com/product/tiller%20with%20attachments
http://www.exapmle.com/product/tiller-with-attachments
```

### How to use sluggable
First create a slug field on the migration file.

```php 
Schema::create('product', function (Blueprint $table) {
    $table->id();
    $table->string('name');
    $table->string('slug')->unique();
    $table->timestamps();
});
```

Add the sluggable trait to the model you want to create a sluggable field on.
Sluggable will look for a field called title and genarate a slug from it.

```php 
use DesignByCode\Sluggable\Traits\Sluggable;

class Product extends Model 
{
	use Sluggable;
}
```
> To override the default value of title to whatever you want.

```php 
use DesignByCode\Sluggable\Traits\Sluggable;

class Product extends Model 
{
	use Sluggable;

	/**
	* @return string
	*/
	public function slugFrom()
	{
	    return 'name';
	}
}
```






