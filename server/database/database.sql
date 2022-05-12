DROP DATABASE IF EXISTS sisvit;
CREATE DATABASE IF NOT EXISTS sisvit;
USE sisvit;

DROP TABLE IF EXISTS usuario;
CREATE TABLE IF NOT EXISTS usuario (
  idt_usr INT UNSIGNED NOT NULL AUTO_INCREMENT,
  ced_usr VARCHAR(15) NOT NULL,
  nam_usr VARCHAR(99) NOT NULL,
  usr_usr VARCHAR(20) NOT NULL,
  psw_usr VARCHAR(32) NOT NULL,
  acc_lvl SET('admin','poli','user') NOT NULL,
  fch_reg TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (idt_usr),
  CONSTRAINT UNIQUE (ced_usr),
  CONSTRAINT UNIQUE (usr_usr)
);

DROP TABLE IF EXISTS persona;
CREATE TABLE IF NOT EXISTS persona (
  idt_per INT UNSIGNED AUTO_INCREMENT,
  ced_per VARCHAR(15),
  nam_per VARCHAR(99),
  cod_deu SET('0', '1', '2', '3') NOT NULL,
  yea_deu YEAR(4) NOT NULL,
  PRIMARY KEY (idt_per),
  CONSTRAINT UNIQUE (ced_per)
);

DROP TABLE IF EXISTS multa;
CREATE TABLE IF NOT EXISTS multa (
  idt_mul INT UNSIGNED NOT NULL AUTO_INCREMENT,
  ced_per VARCHAR(15) NOT NULL,
  mul_mul VARCHAR(999) NOT NULL,
  plc_veh VARCHAR(10) NOT NULL,
  mod_veh VARCHAR(99) NOT NULL,
  tlf_per VARCHAR(15) NOT NULL,
  PRIMARY KEY (idt_mul)
);

INSERT INTO 
  usuario
(nam_usr,ced_usr,usr_usr,psw_usr,acc_lvl)
  VALUES
('Andi Montilla Sanchez', '26068764', 'beltz18', '81dc9bdb52d04dc20036dbd8313ed055', 'admin');