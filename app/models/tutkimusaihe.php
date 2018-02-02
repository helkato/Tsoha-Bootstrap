<?php

class Tutkimusaihe extends BaseModel {

    // Attribuutit
    public $id, $nimi, $tavoitteet;

    // Konstruktori
    public function __construct($attributes) {
        parent::__construct($attributes);
    }

    // metodi, joka hakee kaikki tutkimusaiheet ja palauttaa ne Tutkimusaihe-olioina
    public static function all() { // huom. staattinen metodi
        $query = DB::connection()->prepare('SELECT * FROM Tutkimusaihe'); // kyselyn alustus
        $query->execute(); //kyselyn suorittaminen
        $rows = $query->fetchAll(); //haetaan kyselyn tuottamat assosiaatiolistoja sis. rivit

        $tutkimusaiheet = array(); // luodaan tutkimusaiheet-taulukko

        foreach ($rows as $row) { //kyselyn tulosrivien läpikäynti
            $tutkimusaiheet[] = new Tutkimusaihe(array(// alkion lisääminen taulukkoon
                'id' => $row['id'],
                'nimi' => $row['nimi'],
                'tavoitteet' => $row['tavoitteet']
            ));
        }
        return $tutkimusaiheet; //palautetaan tutkimusaiheet-taulukko
    }

    public static function find($id) {
        $query = DB::connection()->prepare('SELECT * FROM Tutkimusaihe WHERE id = :id LIMIT 1');
        $query->execute(array('id' => $id));
        $row = $query->fetch();

        if ($row) {
            $tutkimusaihe = new Tutkimusaihe(array(
                'id' => $row['id'],
                'nimi' => $row['nimi'],
                'tavoitteet' => $row['tavoitteet']
            ));
            return $tutkimusaihe;
        }
        return null;
    } 

}
