-- Lisää CREATE TABLE lauseet tähän tiedostoon

CREATE TYPE kayttajaryhma AS ENUM ('suunnittelija', 'mittaaja', 'laboratorio', 'asiakas');

CREATE TABLE Kayttaja(
id SERIAL PRIMARY KEY,
nimi varchar(70) NOT NULL,
rooli kayttajaryhma NOT NULL,
tyyppi varchar(35),
kuvaus varchar(350)
);

CREATE TABLE Vesisto(
id SERIAL PRIMARY KEY,
nimi varchar(70) NOT NULL,
tyyppi varchar(35),
kuvaus varchar(350)
);

CREATE TABLE Naytteenottopaikka(
id SERIAL PRIMARY KEY,
nimi varchar(70) NOT NULL,
osoite varchar(250),
gps varchar(30),
sijaintikuvaus varchar(350),
id_vesisto INTEGER REFERENCES Vesisto(id)
);


CREATE TABLE Tutkimusaihe(
id SERIAL PRIMARY KEY,
nimi varchar(85) NOT NULL,
tavoitteet varchar(350)
);

CREATE TABLE Vesistotutkimus(
id SERIAL PRIMARY KEY,
id_vesi INTEGER REFERENCES Vesisto(id),
id_aihe INTEGER REFERENCES Tutkimusaihe(id)
);


CREATE TABLE Tutkimusohje(
id SERIAL PRIMARY KEY,
id_aihe INTEGER REFERENCES Tutkimusaihe(id),
nimi varchar(85) NOT NULL,
kuvaus varchar(350),
tyoohje varchar(800),
valineet varchar(500),
ajankohta varchar(400),
dokumentointi varchar(400)
);

CREATE TABLE Kenttamittaus(
id SERIAL PRIMARY KEY,
aika TIMESTAMP,
tekija varchar(100),
id_tutkimus INTEGER REFERENCES Vesistotutkimus(id)
);

CREATE TABLE Nayte(
id SERIAL PRIMARY KEY,
nimi varchar(100) NOT NULL,
id_mittaus INTEGER REFERENCES Kenttamittaus(id)
);

CREATE TABLE Tulos(
id SERIAL PRIMARY KEY,
tulos_mitta decimal,
yksikko varchar(100),
tulos_kuvaus varchar(500),
lisatiedot varchar(500),
id_mittaus INTEGER REFERENCES Kenttamittaus(id),
id_nayte INTEGER REFERENCES Nayte(id)
);