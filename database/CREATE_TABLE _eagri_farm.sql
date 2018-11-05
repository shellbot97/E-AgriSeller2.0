CREATE TABLE `eagri_farm` ( `farm_id` INT(10) NOT NULL AUTO_INCREMENT , `people_id` INT(10) NOT NULL , `latitude` DECIMAL NOT NULL , `longitude` DECIMAL NOT NULL , `postal_code` INT(6) NULL DEFAULT NULL , `category_id` INT(10) NOT NULL , `subcategory_id` INT(10) NULL DEFAULT NULL , `farm_location_id` INT(10) NULL DEFAULT NULL , `docu_id` INT(10) NULL DEFAULT NULL , `remark` TEXT NULL DEFAULT NULL , PRIMARY KEY (`farm_id`)) ENGINE = InnoDB;