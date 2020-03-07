# Validator
[![Build Status](https://travis-ci.com/Morebec/Validator.svg?branch=master)](https://travis-ci.com/Morebec/Validator)

The Validator component makes data validation easy. Its primary use is intended to ensure that the data of forms, Rest API and configuration files is in an appropriate and valid state.

A lot of validation libraries rely on an exception mechanism. This forces developers to check multiple related data fields one by one. This component instead uses validation errors that can be used for multiple pieces of data together. This is useful for example to return all errors for a given form at once.

## Installation
```bash
composer require morebec/validator
```

## Usage

```php

use Morebec\Validator\Rule as Assert;
use Morebec\Validator\Validator;


// Validate a single rule for a given field
Validator::validate($form['email_address'], new Assert\One(
    new Assert\IsString('The email address field was expected to be a string')
));

// Validate Multiple Rules for a given field
Validator::validate($form['email_address'], new Assert\All([
    new Assert\IsString('The email address field was expected to be a string'),
    new Assert\NotBlank('The email address field was expected not to be blank'),
    new Assert\IsEmail('The email address field was expected to be a valid email address'),
]));


// Ensure At least one rule is valid
Validator::validate($form['email_address'], new Assert\AtLeastOne([
    new Assert\IsString('The email address field was expected to be a string'),
    new Assert\NotBlank('The email address field was expected not to be blank'),
    new Assert\IsEmail('The email address field was expected to be a valid email address'),
]));
```

## Running Tests
```bash
php vendor/bin/phpunit --bootstrap vendor/autoload.php tests
```

## Contributing
Thank you for your interest :)  
To contribute, please read the `CONTRIBUTING.md` guidelines.

## Getting help
To get help, open a new issue on this repository.  
For Morebec team members, please use the appropriate internal channels.