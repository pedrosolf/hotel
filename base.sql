CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `dni` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `rol` int(11) NOT NULL DEFAULT 0,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
);

ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

INSERT INTO `users` (`dni`, `name`, `email`, `password`, `phone`, `address`) VALUES
('34718285', 'Pedro Solf', 'pedrosolf@gmail.com', '123456', '3795025805', 'Perugorria 384'),
('24789321', 'Juan Perez', 'juan123@gmail.com', '123456', '741963852', 'Junin 1254'),
('54741862', 'Maria Clara', 'clara741@gmail.com', '123456', '011458965', '25 de mayo 875');

CREATE TABLE `room_type` (
  `id` int(11) NOT NULL,
  `description` varchar(100) NOT NULL,
  `capacity` int(11) NOT NULL DEFAULT 0,
  `total` int(11) NOT NULL DEFAULT 1
);

ALTER TABLE `room_type`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `room_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

INSERT INTO `room_type` (`description`, `capacity`, `total`) VALUES
('Simple', 1, 5),
('Doble', 2, 5),
('Familiar', 4, 5),
('Suite', 2, 5);

CREATE TABLE `rooms` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `type` int(11) NOT NULL DEFAULT 1,
  `floor` varchar(200) NOT NULL,
  `price` float NOT NULL,
  `descripcion` text NULL
);

ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `rooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

INSERT INTO `rooms` (`name`, `type`, `floor`, `price`) VALUES
('Room 100', 1, 'Piso 1', 150),
('Room 101', 1, 'Piso 1', 150),
('Room 102', 1, 'Piso 1', 150),
('Room 103', 1, 'Piso 1', 150),
('Room 104', 1, 'Piso 1', 150),
('Room 200', 2, 'Piso 2', 250),
('Room 201', 2, 'Piso 2', 250),
('Room 202', 2, 'Piso 2', 250),
('Room 203', 2, 'Piso 2', 250),
('Room 204', 2, 'Piso 2', 250),
('Room 300', 3, 'Piso 3', 500),
('Room 301', 3, 'Piso 3', 500),
('Room 302', 3, 'Piso 3', 500),
('Room 303', 3, 'Piso 3', 500),
('Room 304', 3, 'Piso 3', 500),
('Room 400', 4, 'Piso 4', 700),
('Room 401', 4, 'Piso 4', 700),
('Room 402', 4, 'Piso 4', 700),
('Room 403', 4, 'Piso 4', 700),
('Room 404', 4, 'Piso 4', 700);

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL,
  `cod_book` varchar(50) NOT NULL,
  `date_in` date NOT NULL,
  `date_out` date NOT NULL,
  `id_room` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `date_book` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
);

ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

INSERT INTO `bookings` (`cod_book`, `date_in`, `date_out`, `id_room`, `id_user`) VALUES
('11111111', '2024-01-29', '2024-01-31', 1, 1),
('22222222', '2024-01-31', '2024-02-04', 2, 2),
('11111111', '2024-02-10', '2024-02-12', 1, 1);

INSERT INTO `bookings` (`cod_book`, `date_in`, `date_out`, `id_room`, `id_user`) VALUES
('11111112', '2024-01-29', '2024-01-31', 2, 1),
('11111113', '2024-01-29', '2024-01-31', 3, 1),
('11111114', '2024-01-29', '2024-01-31', 4, 1)
('11111115', '2024-01-29', '2024-01-31', 1, 1);


id, cod_book, date_in, date_out, id_room, id_user
  
  
id name type floor	price	descripcion