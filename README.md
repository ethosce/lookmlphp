# LookMLphp

Write LookML with PHP for [Looker](https://looker.com)

LookML is based off of YAML, but it is not YAML.

This library will allow you generate LookML with PHP.

## Installation
`composer require dlc-solutions/lookmlphp`

## Usage
LookMLphp is designed to be very flexible but provide convenience when possible.

See `example.php` for a full usage example.

### Create a model
```php
require_once 'vendor/autoload.php';
use LookML\Model;

// Define the model and connection
$model = new Model();
$model->set('connection', 'pgsql');

// Comments and includes
$model->comment('include all the views');
$model->set('include', '*.view');
$model->comment('include all the dashboards');
$model->set('include', '*.dashboard');

// Explore on orders
$order = $model->explore('order');
$order->set('label', 'Orders');
$order->join('users')
    ->set('foreign_key', 'uid')
    ->set('relationship', 'many_to_one');

// Explore on users
$user = $model->explore('user')
  ->set('label', 'Users');
  
// Render LookML
print $model;
```

### Create a view
```php
require_once 'vendor/autoload.php';
use LookML\View;

$user = new View('user');
$user->dimension('uid')
  ->set('type', 'number');
$user->dimension('name')
  ->set('type', 'string');
// Render the view.
print $user;

$order = new View('order');

$order = new View('order');
$order->dimension('order_id')
  ->set('type', 'number');
print $order;
```
