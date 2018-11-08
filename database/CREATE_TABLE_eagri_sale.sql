CREATE TABLE `eagri_sale` ( `sale_id` INT(10) NOT NULL AUTO_INCREMENT , `sale_time` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP , `seller_people_id` INT(10) NOT NULL , `buyer_people_id` INT(10) NOT NULL , `sale_loc_latitude` DECIMAL(11,8) NULL DEFAULT NULL , `sale_loc_longitude` DECIMAL(11,8) NULL DEFAULT NULL , `invoice_number` VARCHAR(50) NOT NULL , `remark` TEXT NULL DEFAULT NULL , `total_invoice_amount` DECIMAL(15,2) NOT NULL , `hash` VARCHAR(100) NULL DEFAULT NULL , `status` VARCHAR(10) NULL DEFAULT NULL , PRIMARY KEY (`sale_id`)) ENGINE = InnoDB;