create table if not exists viviendas(
                    id int auto_increment not null,
                    tipo check (tipo in ('Piso','Chalet','Casa','Adosado')),
                    zona check (zona in ('Centro','Nervion','Triana','Aljarafe','Macarena')),
                    direccion varchar(100) not null,
                    dormitorios int not null,
                    precio double not null,
                    tamaño double not null,
                    extras check (extras in ('Piscina','Jardin','Garaje')),
                    foto varchar(256)
                )