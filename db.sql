CREATE DATABASE `chat` ;
USE chat;

CREATE TABLE usuarios (
  id INT NOT NULL AUTO_INCREMENT,
  email VARCHAR(45) NOT NULL,
  nivel INT NOT NULL,
  senha VARCHAR(256) NOT NULL,
  bloqueado TINYINT NOT NULL DEFAULT 0,
  PRIMARY KEY (id),
  UNIQUE INDEX unique_email (email ASC)
);
  
CREATE TABLE mensagens (
  id INT NOT NULL AUTO_INCREMENT,
  id_usuario INT NOT NULL,
  hora DATETIME NOT NULL,
  texto TEXT,
  PRIMARY KEY (id),
  INDEX fk_mensagens_idx (id_usuario ASC),
  CONSTRAINT fk_mensagens
    FOREIGN KEY (id_usuario)
    REFERENCES usuarios(id)
    ON DELETE CASCADE
    ON UPDATE CASCADE
);