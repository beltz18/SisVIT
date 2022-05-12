DROP DATABASE IF EXISTS sisvit;
CREATE DATABASE IF NOT EXISTS sisvit;
USE sisvit;

DROP TABLE IF EXISTS usuario;
CREATE TABLE IF NOT EXISTS usuario (
  idt_usr INT UNSIGNED NOT NULL AUTO_INCREMENT,
  nam_usr VARCHAR(99) NOT NULL,
  ced_usr VARCHAR(15) NOT NULL,
  usr_usr VARCHAR(20) NOT NULL,
  psw_usr VARCHAR(32) NOT NULL,
  acc_lvl SET('admin','poli','user') NOT NULL,
  fch_reg TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (idt_usr),
  CONSTRAINT UNIQUE (ced_usr),
  CONSTRAINT UNIQUE (usr_usr)
);

INSERT INTO 
  usuario
(nam_usr,ced_usr,usr_usr,psw_usr,acc_lvl)
  VALUES
('Andi Montilla Sanchez', '26068764', 'beltz18', '81dc9bdb52d04dc20036dbd8313ed055', 'admin');