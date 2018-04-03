<?php

require_once 'vendor/autoload.php';

use \LookML\View;
use \LookML\Model;

function model() {
  $model = new Model();
  $model->set('connection', 'pgsql');

  $model->comment('include all the views');
  $model->set('include', '*.view');
  $model->comment('include all the dashboards');
  $model->set('include', '*.dashboard');


  $order = $model->explore('order');
  $order->set('label', 'Orders');
  $order->join('users')
    ->set('foreign_key', 'uid')
    ->set('relationship', 'many_to_one');


  // User
  $user = $model->explore('user')
    ->set('label', 'Users');

  return $model;
}

function user_view() {
  $user = new View('user');
  $user->dimension('uid')
    ->set('type', 'number');
  $user->dimension('name')
    ->set('type', 'string');


  return $user;
}

function order_view() {
  $order = new View('order');

  $order = new View('order');
  $order->dimension('order_id')
    ->set('type', 'number');
  return $order;
}

print "--- test.model.lkml ---\n";
print model();
print "\n\n";

print "--- user.view.lkml ---\n";
print user_view();
print "\n\n";

print "--- order.view.lkml ---\n";
print order_view();
print "\n\n";
