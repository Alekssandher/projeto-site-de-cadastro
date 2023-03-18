create database bd_site;
use bd_site;

-- tabela dos notebooks cadastrados pelo cliente
select * from tb_notebook;
desc tb_notebook;
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
nm_site varchar(100),
ds_caracteristicas varchar(100),
imc_arquivo varchar(80),
dt_data datetime,
constraint pk_codigo
	primary key(cd_codigo_notebook));
    drop table tb_notebook;


-- tabela dos computadores cadastrados pelo cliente
select * from tb_computador;
create table tb_computador(
cd_codigo_computador int(11) NOT NULL auto_increment,
cd_codigo_notebook int,
ds_funcao varchar(30),
nm_tipo varchar(80),
nm_marca varchar(40),
ds_processador varchar(100),
ds_memoria varchar(40),
ds_armazenamento varchar(40),
ds_sistema varchar(40),
vl_preco decimal(7,3),
nm_site varchar(100),
 ds_caracteristicas varchar(100),
 imc_arquivo varchar(80),
 dt_data datetime,
	constraint pk_codigo_computador
		primary key(cd_codigo_computador),
	constraint fk_codigo
        foreign key(cd_codigo_notebook)
			references tb_notebook(cd_codigo_notebook));
            
drop table tb_computador;
-- tabela de cadastro das empresas parceiras
select * from tb_cadastro;
create table tb_cadastro(
cd_empresa int NOT NULL AUTO_INCREMENT,
cd_cnpj int(14),
nm_empresa varchar(200),
nm_email varchar(100),
nm_senha varchar(32),
	constraint pk_empresa
		primary key(cd_empresa));
          
alter table tb_notebook add dt_data datetime;
alter table tb_notebook add imc_imagem varchar(80);

desc tb_notebook;

-- códigos para exclusão de equipamentos do site
delete from tb_notebook
where cd_codigo_notebook between '36' and '39';
delete from tb_notebook
where cd_codigo_notebook = '35';
select * from tb_notebook;
delete from tb_cadastro
where cd_empresa between '1' and '2';

 
 -- procedure para transferir os equipamentos para o site
 insert into tb_notebook (cd_codigo_notebook,ds_funcao, nm_tipo, nm_marca, ds_memoria, ds_armazenamento, ds_sistema, vl_preco, nm_site)
 values (02, 'trabalho + casual', 'Notebook Dell Inspiron 15', 'Dell', '8gb DDR4 (1x8GB) + slot livre)', 'SSD de 256GB NVMe M.2',
 'Windows 10 Home', '3.500', 'lojasdell.com');
call spInsere_notebook('trabalho', 'Notebook Dell Inspiron 15', 'Dell', '8gb DDR4 (1x8GB) + slot livre(16 GB)',
 'SSD de 256GB NVMe M.2', 'Windows 11 Home', '3500', 'lojasdell.com');