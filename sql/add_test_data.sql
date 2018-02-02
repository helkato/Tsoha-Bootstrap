-- Lisää INSERT INTO lauseet tähän tiedostoon

-- Koska id-sarakkeen tietotyyppi on SERIAL, se asetetaan automaattisesti
INSERT INTO Kayttaja (nimi, rooli, kayttajatunnus, salasana) 
VALUES ('Susanna Suonio', 'suunnittelija', 'susa', 'susasuo'); 

INSERT INTO Kayttaja (nimi, rooli, kayttajatunnus, salasana) 
VALUES ('Minna Mittari', 'mittaaja', 'minna', 'minnami'); 

INSERT INTO Vesisto (nimi, tyyppi, kuvaus)
VALUES ('Bodom-järvi', 'järvi', 'Matalan runsaassa virkistyskäytössä olevan järven yleisseuranta 1) Vesistön perustiedot 2) Sinileväseuranta');

INSERT INTO Vesisto (nimi, tyyppi, kuvaus)
VALUES ('Espoonlahti', 'meri', 'Matalan merenlahden rehevöitymiskehityksen seuranta. Alueelle tulee valumavesiä teollisuusalueilta, joten saastumiskehitys on huolestuttavaa.  1) Rehevöitymisseuranta. 2) Saastepitoisuudet ');

INSERT INTO Naytteenottopaikka(nimi, osoite, gps, sijaintikuvaus, id_vesisto)
VALUES ('Oittaan uimaranta', 'Oittaantie 1, 02740 Espoo', '60.241187, 24.659877', 'Angry Birds-puiston vieressä', '1');

INSERT INTO Naytteenottopaikka(nimi, osoite, gps, sijaintikuvaus, id_vesisto)
VALUES ('Oittaan kartano, Master Golf Course Oy', 'Bodominkuja 7, 02940 Espoo', '60.262960, 24.682665', 'Golf-kentän reunalla 5. koivu oikealta', '1');

INSERT INTO Tutkimusaihe (nimi, tavoitteet)  --1
VALUES ('Vesistön perustiedot', 'Seurata Suomen ainutkertaisen järviluonnon vesiekologian tilaa');

INSERT INTO Tutkimusaihe (nimi, tavoitteet) --2
VALUES ('Rehevöitymisen seuranta', 'Matalien järvi- ja merialueiden rehevöitymisasteen seuranta');

INSERT INTO Tutkimusaihe (nimi, tavoitteet) --3
VALUES ('Saastumisen seuranta', 'Lähennä teollisuusalueita ja maankaatopaikkoja olevien vesistöjen saastepitoisuuksien seuranta');

INSERT INTO Tutkimusaihe (nimi, tavoitteet) --4
VALUES ('Happamoitumisen seuranta', 'Vesien happamoitumisen seuranta');

INSERT INTO Tutkimusaihe (nimi, tavoitteet) --5
VALUES ('Sinileväseuranta', 'Myrkyllisten sinilevien seuranta uimarantojen, virkistysalueiden, laidunmaiden ja kalatalouden vesistöissä');

INSERT INTO Tutkimusaihe (nimi, tavoitteet) --6
VALUES ('Uimaveden laadunmittaus ', 'Uimaveden laatu, esim ulosteperäisten bakteerien pitoisuudet');

INSERT INTO Vesistotutkimus (id_vesi, id_aihe) 
VALUES ('1', '1');

INSERT INTO Vesistotutkimus (id_vesi, id_aihe) 
VALUES ('1', '5');

INSERT INTO Vesistotutkimus (id_vesi, id_aihe) 
VALUES ('2', '2');

INSERT INTO Vesistotutkimus (id_vesi, id_aihe) 
VALUES ('2', '3');

INSERT INTO Tutkimusohje (id_aihe, nimi, kuvaus, tyoohje, valineet, ajankohta, dokumentointi) 
VALUES ('1', 'vakiomittaus1', 'Aineen 1 pitoisuuden mittaus','Otetaan mittari 1 ja laitetaan se mittalasiin, johon kaadetaan vettä. Luetaan mittarin lukema', 'mittari 1, mittalasi' , '4 krt/vuosi','3 desimaalin tarkkuudella, yksikkö mmol/ml');