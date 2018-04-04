drop database if exists dogadajiosijek;
create database dogadajiosijek character set utf8 collate utf8_croatian_ci;

use dogadajiosijek;


create table korisnik(
sifra int not null primary key auto_increment,
ime varchar(50) not null,
adresa varchar(50) not null,
mjesto varchar(50) not null,
kontaktbroj int not null,
email varchar(50) not null
);

create table dogadaji(
sifra int not null primary key auto_increment,
dan int not null,
mjesto int not null,
vrijeme DATETIME,
cijena decimal(18,2),
tekst text not null,
kategorija varchar(50),
korisnik int not null
);

create table dan(
    sifra int not null primary key auto_increment,
    datum datetime
);
create table mjesto(
sifra int not null primary key auto_increment,
putokazx varchar(50);
putokazy varchar(50)
);
create table slika(
sifra int not null primary key auto_increment,
dogadaji int not null,
opis varchar(255)
);

alter table dogadaji add foreign key (korisnik) references korisnik(sifra);
alter table dogadaji add foreign key (dan) references dan(sifra);
alter table dogadaji add foreign key (mjesto) references mjesto(sifra);
alter table slika add foreign key (dogadaji) references dogadaji(sifra);

insert into korisnik(ime,adresa,mjesto,kontaktbroj,email) VALUES
('Caffe bar Osijek','Radićeva 10','Osijek',38595645987,'caffeos@osijek.hr'),
('Restoran Konoba','Županijska 15','Osijek',38596487613,'konoba@osijek.hr'),
('Muzej mursa','Europska avenija 16','Osijek'),38598493829,'mursaos@osijek.hr');

insert into mjesto(putokazx,putokazy) VALUES
(45.34294,34.4329),
(45.432,34.432);

insert into događaj(vrijeme,cijena,tekst,kategorija)
values 
('19:30:10',20,'Dođite na najbolji party godine','Zabava'),
('17:20:00',55,'Dobar koncert za vas i vaše najdraže');

insert into dan(datum)
VALUES ('2018-03-28'),
('2018-03-23');