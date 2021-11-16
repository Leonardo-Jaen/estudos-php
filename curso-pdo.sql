create table `usuarios` (
	`id` int not null auto_increment primary key,
    `nome` varchar(100) not null,
    `email` varchar(100) not null
) ENGINE=INNODB DEFAULT CHARSET=utf8mb4;