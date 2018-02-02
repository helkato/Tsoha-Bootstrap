<?php

//require 'app/models/tutkimusaihe.php'; --lisätty composer.json-tiedostoon

class HelloWorldController extends BaseController {

    // Palvelun etusivu, josta kirjaudutaan sisään; myös linkki rekisteröitymiseen
    public static function kirjautuminen() {
        // make-metodi renderöi app/views-kansiossa sijaitsevia tiedostoja
        View::make('suunnitelmat/kirjautuminen.html');
    }

    // Yksittäisen mittauksen tietojen muuttaminen ja poistaminen
    public static function mittauksen_muokkaus() {
        View::make('suunnitelmat/mittauksen_muokkaus.html');
    }

    // Yksittäisen mittauksen tietojen katseleminen
    public static function mittaus() {
        View::make('suunnitelmat/mittaus.html');
    }

    // Luettelo kaikista järjestelmän tuntemista mittauksista
    public static function mittausluettelo() {
        View::make('suunnitelmat/mittausluettelo.html');
    }

    // Yksittäisen mittauspaikan tietojen muuttaminen ja poistaminen
    public static function paikanmuokkaus() {
        View::make('suunnitelmat/paikan_muokkaus.html');
    }

    // Yksittäisen mittauspaikan tietojen katseleminen
    public static function paikka() {
        View::make('suunnitelmat/paikka.html');
    }

    // Kaikki mittauspaikat luetteloituna
    public static function paikkaluettelo() {
        View::make('suunnitelmat/paikkaluettelo.html');
    }

    // käyttäjäksi rekisteröityminen
    public static function register() {
        View::make('suunnitelmat/rekisteroityminen.html');
    }

    // uuden mittaustulosken syöttäminen
    public static function tuloksenlisays() {
        View::make('suunnitelmat/tuloksen_lisays.html');
    }

    // yksittäisen mittaustuloksen tietojen tarkasteleminen
    public static function tulos() {
        View::make('suunnitelmat/tulos.html');
    }

    // tulosten katseleminen luettelona
    public static function tulosluettelo() {
        View::make('suunnitelmat/tulosluettelo.html');
    }

    // tutkimusaiheiden tarkasteleminen luettelona
    public static function tutkimusaiheet() {
        View::make('suunnitelmat/tutkimusaiheet.html');
    }
    
    // Testaa koodiasi täällä
    public static function sandbox() {
        View::make('helloworld.html');
        echo 'This is sandbox!';

        $perus = Tutkimusaihe::find(11);
        $perus2 = Tutkimusaihe::find(12);
        $kaikki = Tutkimusaihe::all();

        // Kint-luokan dump-metodi tulostaa muuttujan arvon
        Kint::dump($perus);
        Kint::dump($perus);
        Kint::dump($perus2);
        Kint::dump($kaikki);

    }

}
