<?php
require 'vendor/autoload.php';

WingCommander::init();

Flight::route('/', function(){
    Flight::view()->set('someVar', 'Hello, World!');
    Flight::render('hello', array(), 'body');
    Flight::render('layout', array('title' => 'Test'));
});

Flight::start();
