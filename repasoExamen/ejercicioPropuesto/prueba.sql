create table clientesUsuarios if not exists(
            id int auto_increment,
            Nombre varchar(100) not null,
            clave varchar(100) not null,
            primary key(id));