<?php

class Vesisto extends BaseModel {

    // Attribuutit
    public $id, $nimi, $tyyppi, $kuvaus;

    // Konstruktori
    public function __construct($attributes) {
        parent::__construct($attributes);
    }

    // metodi, joka hakee kaikki veistöt ja palauttaa ne Vesisto-olioina
    public static function all() {
        $query = DB::connection()->prepare('SELECT * FROM Vesisto');
        $query->execute();
        $rows = $query->fetchAll();

        $vesistot = array();

        foreach ($rows as $row) {
            $vesistot[] = new Vesisto(array(
                'id' => $row['id'],
                'nimi' => $row['nimi'],
                'tyyppi' => $row['tyyppi'],
                'kuvaus' => $row['kuvaus']
            ));
        }
        return $vesistot;
    }

    // metodi yksittäisen vesiston tietojen näyttämiseksi
    public static function find($id) {
        $query = DB::connection()->prepare('SELECT * FROM Vesisto WHERE id = :id LIMIT 1');
        $query->execute(array('id' => $id));
        $row = $query->fetch();

        // $vesisto = array();  // voiko taulukon luomisen jättää pois?

        if ($row) {
            $vesisto[] = new Vesisto(array(
                'id' => $row['id'],
                'nimi' => $row['nimi'],
                'tyyppi' => $row['tyyppi'],
                'kuvaus' => $row['kuvaus']
            ));
            return $vesisto;
        }
        return null;
    }

    //näyttää html-lomakkeen
    public function create() {
        
    }

    public function save() {
        $query = DB::connection()->prepare('INSERT INTO Vesisto (nimi, tyyppi, kuvaus) VALUES(:nimi, :tyyppi, :kuvaus) RETURNING id');
        $query->execute(array('nimi' => $this->nimi, 'tyyppi' => $this->tyyppi, 'kuvaus' => $this->kuvaus));
        $row = $query->fetch();
        $this->id = $row['id'];
    }

}
