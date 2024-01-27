create table if not exists viviendas(
                id int auto_increment not null,
                tipo enum('Piso','chalet','casa','adosado') not null default 'Piso',
                zona enum('Centro','Nervion','Triana','Aljarafe','Macarena') not null default 'Centro',
                direccion varchar(100) not null,
                dormitorios int not null default 3,
                precio int not null,
                tamaño int not null,
                extras set('Piscina','Jardin','Garaje','Sauna') not null,
                foto varchar(100)
            )