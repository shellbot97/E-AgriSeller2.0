CREATE TABLE `eagri_sale_payment` ( `sale_payment_id` INT(10) NOT NULL AUTO_INCREMENT , `sale_id` INT(10) NOT NULL , `invoice_number` VARCHAR(50) NOT NULL , `payment_type` VARCHAR(10) NOT NULL , `payment_type_number` VARCHAR(50) NOT NULL , `transaction_date` DATETIME NULL DEFAULT NULL , `transation_message` VARCHAR(250) NULL DEFAULT NULL , `settlement_status` VARCHAR(250) NULL DEFAULT NULL , `total_invoice_amount` DECIMAL(15,2) NOT NULL ,  `amount_due` DECIMAL(15,2) NOT NULL , `settlement_time` DATETIME NULL DEFAULT NULL , `hash` VARCHAR(250) NULL DEFAULT NULL , PRIMARY KEY (`sale_payment_id`)) ENGINE = InnoDB;