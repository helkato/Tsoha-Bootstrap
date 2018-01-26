-- Lisää CREATE TABLE lauseet tähän tiedostoon
CREATE TABLE Paikka(
tunniste SERIAL PRIMARY KEY,
nimi varchar(50) NOT NULL,
osoite varchar(200),
gps varchar(30),
kuvaus varchar(300)
);

CREATE TABLE Mittaus(
tunniste SERIAL PRIMARY KEY,
nimi varchar(20) NOT NULL,
kuvaus varchar(100),
ohje varchar(300),
valineet varchar(200),
ajankohta varchar(100),
dokumentointi varchar(100)
);
