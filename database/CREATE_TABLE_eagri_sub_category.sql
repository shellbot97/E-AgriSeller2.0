CREATE TABLE `eagri_sub_category` ( `sub_category_id` INT(10) NOT NULL AUTO_INCREMENT , `sub_category_name` VARCHAR(50) NOT NULL , `category_id` INT(10) NOT NULL , `deleted` INT(1) NOT NULL DEFAULT '0' , PRIMARY KEY (`sub_category_id`)) ENGINE = InnoDB;