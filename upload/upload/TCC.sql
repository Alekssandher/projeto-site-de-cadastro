create database bd_site;
use bd_site;
create table tb_notebook (
cd_codigo_notebook int(11) NOT NULL AUTO_INCREMENT,
ds_funcao varchar(30),
nm_tipo varchar(80),
nm_marca varchar(40),
ds_processador varchar(100),
ds_memoria varchar(40),
ds_armazenamento varchar(40),
ds_sistema varchar(40),
vl_preco decimal(7,3),
nm_site varchar(40),
 ds_caracteristicas varchar(100),
constraint pk_codigo
	primary key(cd_codigo_notebook));
    drop table tb_notebook;
delete from tb_notebook
where cd_codigo_notebook = '8';
drop table tb_notebook;
create table tb_computador(
cd_codigo_computador varchar(20),
ds_funcao varchar(40),
nm_tipo varchar(80),
nm_marca varchar(40),
ds_memoria varchar(40),
ds_armazenamento varchar(40),
ds_sistema varchar(40),
vl_preco decimal (9,3),
nm_site varchar(40),
	constraint pk_codigo_computador
		primary key(cd_codigo_computador));

create table tb_cadastro(
cd_cnpj int(14) not null,
nm_empresa varchar(50),
nm_email varchar(50),
nm_senha varchar(20),
	constraint pk_cnpj
		primary key(cd_cnpj));
select * from tb_cadastro;






  drop procedure spInsere_notebook;  
alter table tb_notebook add ds_caracteristicas varchar(100);
alter table tb_notebook add ds_processador varchar(100);
alter table tb_notebook add dt_data datetime;
alter table tb_notebook change column imc_arquivo imc_arquivo varchar(80);
alter table tb_notebook add imc_imagem varchar(40);

ALTER TABLE tb_notebook
  CHANGE COLUMN cd_codigo_notebook cd_codigo int(11) NOT NULL AUTO_INCREMENT,
  ADD PRIMARY KEY (cd_codigo);
desc tb_notebook;
delete from tb_notebook
where cd_codigo_notebook between '72' and '73';
delete from tb_notebook
where cd_codigo_notebook = '21';
select * from tb_notebook;
insert into tb_notebook (cd_codigo_notebook,ds_funcao, nm_tipo, nm_marca, ds_processador, ds_memoria, ds_armazenamento, ds_sistema, vl_preco, nm_site, ds_caracteristicas)
values (01, 'casual + jogos', 'Notebook Acer Aspire 3 A315 23 - ROLD', 'Acer', '12gb DDR4 4(soldada) + 8(slot)',
 'HD de 1 TB 5400 RPM SATA III', 'Windows 10 Home', '4.000', 'lojasacer.com');
 insert into tb_notebook (cd_codigo_notebook,ds_funcao, nm_tipo, nm_marca, ds_memoria, ds_armazenamento, ds_sistema, vl_preco, nm_site)
 values (02, 'trabalho + casual', 'Notebook Dell Inspiron 15', 'Dell', '8gb DDR4 (1x8GB) + slot livre)', 'SSD de 256GB NVMe M.2',
 'Windows 10 Home', '3.500', 'lojasdell.com');
call spInsere_notebook('trabalho', 'Notebook Dell Inspiron 15', 'Dell', '8gb DDR4 (1x8GB) + slot livre(16 GB)',
 'SSD de 256GB NVMe M.2', 'Windows 11 Home', '3500', 'lojasdell.com');