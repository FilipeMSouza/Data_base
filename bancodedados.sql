create table mecanico(
    idmecanico serial,
    nome varchar(50) NOT NULL,
    celular int NOT NULL,
    cpf varchar(50) NOT NULL primary key
)

create table cliente(
    idcliente serial,
    nomecliente varchar(50) NOT NULL,
    telefone int NOT NULL,
    cpfcliente varchar(50) not null primary key
)

create table veiculo(
    placa varchar(50) primary key,
    cpfclienteveiculo varchar(50),
    marca varchar(50),
    modelo varchar(50),
    ano date,
    foreign key (cpfclienteveiculo) REFERENCES cliente(cpfcliente)
)

create table conserto(
    idcodigorevisao serial,
    mecanico varchar(50),
    placa varchar(50) NOT NULL,
    datarevisao date NOT NULL,
    valorrevisao float NOT NULL,
    descricao text NOT NULL,
    cliente varchar(50),
    foreign key (placa) REFERENCES veiculo (placa),
    foreign key (mecanico) REFERENCES mecanico (cpf),
    foreign key (cliente) REFERENCES cliente (cpfcliente)
)