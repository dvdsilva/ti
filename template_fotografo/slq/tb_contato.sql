create table if not exists tb_contato(
id int auto_increment not null primary key,
nome varchar(50) not null,
telefone varchar(15) not null,
email varchar(50) not null,
endereco varchar(50) not null,
data date
)default character set utf8 default collate utf8_general_ci;