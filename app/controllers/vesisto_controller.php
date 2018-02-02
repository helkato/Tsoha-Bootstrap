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

    // Vesistön lisäyslomakkeen näyttäminen
    public static function create() {
        $vesisto = Vesisto::create();
        View::make('vesisto/new.html', array('vesisto' => $vesisto));
  
    }

    // Vesistön lisääminen tietokantaan
    public static function store() {
        $params = $_POST;

        $vesisto = new Vesisto(array(
            'nimi' => $params['nimi'],
            'tyyppi' => $params['tyyppi'],
            'kuvaus' => $params['kuvaus']
        ));

        Kint::dump($params);

        $vesisto->save();


        Redirect::to('/vesisto' . $vesisto->id, array('message' => 'Vesistö on lisätty tietokantaan.'));
    }

}
