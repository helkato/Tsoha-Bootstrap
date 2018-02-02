<?php

//require 'app/models/tutkimusaihe.php'; --lisätty composer.json-tiedostoon

class VesistoController extends BaseController {

    // tietokannassa olevien vesistöjen tarkasteleminen luettelona
    public static function index() {

        //haetaan kaikki tutkimusaiheet tietokannasta
        $vesistot = Vesisto::all();

        View::make('vesisto/vesistot.html', array('vesistot' => $vesistot));
    }

    // Yksittäisen  vesistön tietojen tarkasteleminen
    public static function show($id) {

        //haetaan yksi vesistö tietokannasta
        $vesisto = Vesisto::find($id);

        View::make('vesisto/vesisto.html', array('vesisto' => $vesisto));
    }

}
