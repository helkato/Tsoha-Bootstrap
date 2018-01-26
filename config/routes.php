<?php

  $routes->get('/', function() {
    HelloWorldController::kirjautuminen();
  });
  
   $routes->get('/mittaus/1', function() {
    HelloWorldController::mittaus();
  });
  
   $routes->get('/mittaus', function() {
    HelloWorldController::mittausluettelo();
  });
  
 $routes->get('/paikka/1', function() {
    HelloWorldController::paikka();
  });
   $routes->get('/paikka', function() {
    HelloWorldController::paikkaluettelo();
  });
  
   $routes->get('/tulos/1', function() {
    HelloWorldController::tulos();
  });
  
  $routes->get('/tulos', function() {
    HelloWorldController::tulosluettelo();
  });

  $routes->get('/hiekkalaatikko', function() {
    HelloWorldController::sandbox();
  });
