CREATE TABLE `eagri_merchant_login` ( `merchant_id` INT(10) NOT NULL AUTO_INCREMENT , `people_id` INT(10) NOT NULL , `username` VARCHAR(255) NOT NULL , `password` VARCHAR(255) NOT NULL , `is_admin` INT(1) NOT NULL DEFAULT '0' , `deleted` INT(1) NOT NULL DEFAULT '0' , `store_id` INT(10) NOT NULL , PRIMARY KEY (`merchant_id`)) ENGINE = InnoDB;