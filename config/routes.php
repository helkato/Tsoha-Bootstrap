<?php

// tutkimusaiheiden listaussivu
$routes->get('/tutkimusaihe', function() {
    TutkimusaiheController::index();
});

// Tutkimusaiheen lisätietosivu, sis luettelon tutkimuksista - EI TOIMI
$routes->get('/tutkimusaihe/:id', function($id) {
    TutkimusaiheController::show($id);
});

//Vesistöjen listaussivu
$routes->get('/vesisto', function(){
    VesistoController::index();
});

//Yksittäisen vesistöjen esittelysivu
$routes->get('/vesisto/:id', function($id){
    VesistoController::show($id);
});

// Vesistön lisääminen tietokantaan
$routes->post('/vesisto', function(){
    VesistoController::store();
});

//Vesistön lisäyslomakkeen näyttäminen
$routes->get('/vesisto/new', function(){
    VesistoController::create();
});






// Alla alustavan suunnitteluvaiheen tietoja


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
