# Documentation Reader

A clean and readable method of providing documentation to your users, built on Laravel 4.

## Installation

Write your documentation in markdown, with the filename representing the chapter slug. All files must be in the root of the folder. We recommend versioning your documentation in a separate repository.

Have a look at `/docs` as the Laravel Framework documentation has been provided for an example.

Deploy the documentation to the `/docs` directory, or change the `path` configuration within `app/config/docs.php`.

Run `composer install` to install all required dependencies.

Point a virtualhost to the `/public` directory and your documentation should now be visible.

Please see `app/config/docs.php` for additional configuration parameters.

## Enjoy!

Enjoy using the docs reader!
