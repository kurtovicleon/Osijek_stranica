drop database if exists dogadajiosijek;
create database dogadajiosijek character set utf8 collate utf8_croatian_ci;

use dogadajiosijek;


create table korisnik(
sifra int not null primary key auto_increment,
ime varchar(50) not null,
adresa varchar(50) not null,
kontaktbroj int not null,
email varchar(50) not null
);

create table dogadaji(
sifra int not null primary key auto_increment,
dan int not null,
mjesto int not null,
vrijeme varchar(50),
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
putokaz varchar(50)
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