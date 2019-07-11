Simple PHP Crypt
=============

This tiny PHP class helps you to generating YouTube style hash from an Integer.

**Note** : This script requires BC-Math library [BCMath Arbitrary Precision Mathematics](http://php.net/manual/en/book.bc.php)

## Usage
### Hash
```php
MerkDev\Crypt::hash(9919)
```
### UnHash
```php
MerkDev\Crypt::unhash("CKAr6PzmUP")
```

## Example
* Clone this Repo : `https://github.com/merkdev/simple-php-crypt`
* Run a local server : `php -S localhost:4321 example/index.php`
* Open it on browser : [http://localhost:4321](http://localhost:4321)

## Install it via Composer
`composer require merkdev/simple-php-crypt`