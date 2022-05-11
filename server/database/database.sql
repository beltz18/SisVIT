DROP DATABASE IF EXISTS sisvit;
CREATE DATABASE IF NOT EXISTS sisvit;
USE sisvit;

DROP DATABASE IF EXISTS usuario (
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