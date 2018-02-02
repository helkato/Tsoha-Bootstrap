-- Lisää INSERT INTO lauseet tähän tiedostoon

-- Koska id-sarakkeen tietotyyppi on SERIAL, se asetetaan automaattisesti
INSERT INTO Kayttaja (nimi, rooli, kayttajatunnus, salasana) 
VALUES ('Susanna Suonio', 'suunnittelija', 'susa', 'susasuo'); 

INSERT INTO Kayttaja (nimi, rooli, kayttajatunnus, salasana) 
VALUES ('Minna Mittari', 'mittaaja', 'minna', 'minnami'); 

INSERT INTO Vesisto (nimi, tyyppi, kuvaus)
VALUES ('Bodom-järvi', 'järvi', 'Matalan runsaassa virkistyskäytössä olevan järven yleisseuranta 1) Vesistön perustiedot 2) Sinileväseuranta');

INSERT INTO Vesisto (nimi, tyyppi, kuvaus)
VALUES ('Espoonlahti', 'meri', 'Matalan merenlahden rehevöitymiskehityksen seuranta 1) Rehevöitymisseuranta. 2) Harvinaisen indikaattoriötökän kannan laskenta');

INSERT INTO Naytteenottopaikka(nimi, osoite, gps, sijaintikuvaus, id_vesisto)
VALUES ('Oittaan uimaranta', 'Oittaantie 1, 02740 Espoo', '60.241187, 24.659877', 'Angry Birds-puiston vieressä', '1');

INSERT INTO Naytteenottopaikka(nimi, osoite, gps, sijaintikuvaus, id_vesisto)
VALUES ('Oittaan kartano, Master Golf Course Oy', 'Bodominkuja 7, 02940 Espoo', '60.262960, 24.682665', 'Golf-kentän reunalla 5. koivu oikealta', '1');

INSERT INTO Tutkimusaihe (nimi, tavoitteet) 
VALUES ('Vesistön perustiedot', 'Seurata Suomen ainutkertaisen järviluonnon vesiekologian tilaa');

INSERT INTO Tutkimusaihe (nimi, tavoitteet) 
VALUES ('Rehevöitymisen seuranta', 'Matalien järvi- ja merialueiden rehevöitymisasteen seuranta');
