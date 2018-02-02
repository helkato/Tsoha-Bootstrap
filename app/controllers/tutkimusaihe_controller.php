<?php

//require 'app/models/tutkimusaihe.php'; --lisätty composer.json-tiedostoon

class TutkimusaiheController extends BaseController {

    // tutkimusaiheiden tarkasteleminen luettelona
    public static function index() {

        //haetaan kaikki tutkimusaiheet tietokannasta
        $tutkimusaiheet = Tutkimusaihe::all();

        View::make('tutkimusaihe/tutkimusaiheet.html', array('tutkimusaiheet' => $tutkimusaiheet));
    }

    // Yksittäisen  tutkimusaiheen tietojen tarkasteleminen
    public static function show($id) {

        //haetaan yksi tutkimusaihe tietokannasta
        $tutkimusaihe = Tutkimusaihe::find($id);

        View::make('tutkimusaihe/tutkimusaihe.html', array('tutkimusaihe' => $tutkimusaihe));
    }

}
