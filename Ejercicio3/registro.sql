CREATE TABLE usuarios (
  id int AUTO INCREMENT PRIMARY KEY,
  nombre varchar(100) NOT NULL,
  apellido int(100) NOT NULL,
  fecha_nacimiento date NOT NULL,
  email varchar(100) NOT NULL,
  teléfono varchar(20) NOT NULL,
  direccion varchar(255) NOT NULL,
  fecha_registro timestamp  DEFAULT current_timestamp()
) ;



INSERT INTO usuarios (nombre, apellido, fecha_nacimiento, email, teléfono, direccion) VALUES
('Ana', 'Mejia', '1990-08-16', 'AnaMF@gmail.com', '78789090', 'Barrio el calvario, Mercedes Umaña'),
('Luka', 'Gómez', '1992-05-21', 'Lukgomez@gmail.com', '78765432', 'Barrio concepcion, Usulutan'),
('Thiago', 'Flores', '1995-12-12', 'THFlores@gmail.com', '60609875', 'Colonia la merced,Jiquilisco');
('Liam', 'Villamil', '1997-03-10', 'LVilla@gmail.com', '60609900', 'Concepcion Batres, C.');
