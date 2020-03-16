CREATE TABLE areas (

    id_area INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    area VARCHAR(30) NOT NULL,
    imagem VARCHAR(200) NOT NULL,


)


CREATE TABLE profissoes (
    id_profissao INT PRIAMRY KEY AUTO_INCREMENT NOT NULL,
    nome VARCHAR(20) NOT NULL,
    imagem VARCHAR(200) NOT NULL,
    id_area FOREIGN KEY(id_area) REFERENCES area(id_area)
    
)


CREATE TABLE informacoes (
    id_informacao INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    sobre VARCHAR(8000) NOT NULL,
    mercado VARCHAR(5000) NOT NULL,
    atuacao VARCHAR(5000) NOT NULL,
    salario VARCHAR(7000) NOT NULL,
    universidade VARCHAR(7000) NOT NULL,
    id_profissao FOREIGN KEY(id_profissao) REFERENCES area(id_profissao)

)



CREATE TABLE graficos (
    id_graficos INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    graficos VARCHAR(50),
    id_profissao FOREIGN KEY(id_profissao) REFERENCES area(id_profissao)


)


