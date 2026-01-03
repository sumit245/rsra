-- RSRA Production Schema Patch (safe, additive only)
-- Purpose: Add missing plugin tables/columns (RestApi, Warehouse, related) without harming existing data
-- Usage: Run on the production database as a user with DDL privileges.
-- Notes: This script only creates tables if missing and adds columns if missing. No data is modified or dropped.

-- Set your target schema (database) name here if needed
-- USE `your_database_name`;

-- Helper: procedure to add a column if it does not exist (compatible with MySQL 5.7+)
DELIMITER $$
CREATE PROCEDURE IF NOT EXISTS add_column_if_missing(
    IN in_schema VARCHAR(64),
    IN in_table VARCHAR(64),
    IN in_column VARCHAR(64),
    IN in_definition TEXT
)
BEGIN
    DECLARE col_count INT DEFAULT 0;
    SELECT COUNT(*) INTO col_count
    FROM information_schema.COLUMNS
    WHERE TABLE_SCHEMA = in_schema AND TABLE_NAME = in_table AND COLUMN_NAME = in_column;

    IF col_count = 0 THEN
        SET @ddl = CONCAT('ALTER TABLE `', in_schema, '`.`', in_table, '` ADD COLUMN ', in_definition);
        PREPARE stmt FROM @ddl; EXECUTE stmt; DEALLOCATE PREPARE stmt;
    END IF;
END$$
DELIMITER ;

-- Detect current schema
SET @current_schema := DATABASE();

-- ===========================
-- RestApi plugin
-- ===========================
CREATE TABLE IF NOT EXISTS `rise_api_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `token` varchar(255) NOT NULL,
  `expiration_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ===========================
-- Warehouse plugin tables
-- ===========================

CREATE TABLE IF NOT EXISTS `ware_commodity_type` (
  `commodity_type_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `commondity_code` varchar(100) NULL,
  `commondity_name` text NULL,
  `order` int(10) NULL,
  `display` int(1) NULL COMMENT 'display 1: yes, 0: no',
  `note` text NULL,
  PRIMARY KEY (`commodity_type_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE IF NOT EXISTS `ware_unit_type` (
  `unit_type_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `unit_code` varchar(100) NULL,
  `unit_name` text NULL,
  `unit_symbol` text NULL,
  `order` int(10) NULL,
  `display` int(1) NULL,
  `note` text NULL,
  PRIMARY KEY (`unit_type_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE IF NOT EXISTS `ware_size_type` (
  `size_type_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `size_code` varchar(100) NULL,
  `size_name` text NULL,
  `size_symbol` text NULL,
  `order` int(10) NULL,
  `display` int(1) NULL,
  `note` text NULL,
  PRIMARY KEY (`size_type_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE IF NOT EXISTS `ware_style_type` (
  `style_type_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `style_code` varchar(100) NULL,
  `style_barcode` text NULL,
  `style_name` text NULL,
  `order` int(10) NULL,
  `display` int(1) NULL,
  `note` text NULL,
  PRIMARY KEY (`style_type_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE IF NOT EXISTS `ware_body_type` (
  `body_type_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `body_code` varchar(100) NULL,
  `body_name` text NULL,
  `order` int(10) NULL,
  `display` int(1) NULL,
  `note` text NULL,
  PRIMARY KEY (`body_type_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE IF NOT EXISTS `inventory_manage` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `warehouse_id` int(11) NOT NULL,
  `commodity_id` int(11) NOT NULL,
  `inventory_number` DECIMAL(15,2) NULL DEFAULT '0.00',
  `date_manufacture` date NULL,
  `expiry_date` date NULL,
  `lot_number` varchar(100) NULL,
  `purchase_price` DECIMAL(15,2) NULL DEFAULT '0.00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE IF NOT EXISTS `warehouse` (
  `warehouse_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `warehouse_code` varchar(100) NULL,
  `warehouse_name` text NULL,
  `warehouse_address` text NULL,
  `order` int(10) NULL,
  `display` int(1) NULL,
  `note` text NULL,
  `city` TEXT NULL,
  `state` TEXT NULL,
  `zip_code` TEXT NULL,
  `country` TEXT NULL,
  PRIMARY KEY (`warehouse_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE IF NOT EXISTS `goods_receipt` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `supplier_code` varchar(100) NULL,
  `supplier_name` text NULL,
  `deliver_name` text NULL,
  `buyer_id` int(11) NULL,
  `description` text NULL,
  `pr_order_id` int(11) NULL,
  `date_c` date NULL,
  `date_add` date NULL,
  `goods_receipt_code` varchar(100) NULL,
  `total_tax_money` decimal(15,2) NULL DEFAULT '0.00',
  `total_goods_money` decimal(15,2) NULL DEFAULT '0.00',
  `value_of_inventory` decimal(15,2) NULL DEFAULT '0.00',
  `total_money` decimal(15,2) NULL DEFAULT '0.00',
  `approval` INT(11) NULL DEFAULT 0,
  `addedfrom` INT(11) NULL,
  `warehouse_id` int(11) NULL,
  `project` TEXT NULL,
  `type` TEXT NULL,
  `department` int(11) NULL,
  `requester` int(11) NULL,
  `expiry_date` DATE NULL,
  `invoice_no` text NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE IF NOT EXISTS `goods_receipt_detail` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `goods_receipt_id` int(11) NOT NULL,
  `commodity_code` varchar(100) NULL,
  `commodity_name` text NULL,
  `warehouse_id` text NULL,
  `unit_id` text NULL,
  `quantities` text NULL,
  `unit_price` decimal(15,2) NULL DEFAULT '0.00',
  `tax` varchar(100) NULL,
  `tax_money` varchar(100) NULL,
  `goods_money` decimal(15,2) NULL DEFAULT '0.00',
  `note` text NULL,
  `date_manufacture` date NULL,
  `expiry_date` date NULL,
  `discount` decimal(15,2) NULL DEFAULT '0.00',
  `discount_money` decimal(15,2) NULL DEFAULT '0.00',
  `lot_number` varchar(100) NULL,
  `tax_rate` TEXT NULL,
  `sub_total` DECIMAL(15,2) NULL DEFAULT '0.00',
  `tax_name` TEXT NULL,
  `serial_number` VARCHAR(255) NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE IF NOT EXISTS `goods_transaction_detail` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `goods_receipt_id` int(11) NULL,
  `goods_id` int(11) NOT NULL,
  `quantity` varchar(100) NULL,
  `date_add` DATETIME NULL,
  `commodity_id` int(11) NOT NULL,
  `warehouse_id` int(11) NOT NULL,
  `note` text NULL,
  `status` int(2) NULL COMMENT '1:receipt 2:delivery',
  `old_quantity` varchar(100) NULL,
  `purchase_price` DECIMAL(15,2) NULL DEFAULT '0.00',
  `price` DECIMAL(15,2) NULL DEFAULT '0.00',
  `expiry_date` text NULL,
  `lot_number` text NULL,
  `from_stock_name` int(11) NULL,
  `to_stock_name` int(11) NULL,
  `serial_number` VARCHAR(255) NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE IF NOT EXISTS `inventory_commodity_min` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `commodity_id` int(11) NOT NULL,
  `commodity_code` varchar(100) NULL,
  `commodity_name` varchar(100) NULL,
  `inventory_number_min` DECIMAL(15,2) NULL DEFAULT '0.00',
  `inventory_number_max` DECIMAL(15,2) NULL DEFAULT '0.00',
  PRIMARY KEY (`id`, `commodity_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE IF NOT EXISTS `wh_approval_setting` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NOT NULL,
  `related` VARCHAR(255) NOT NULL,
  `setting` LONGTEXT NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE IF NOT EXISTS `wh_approval_details` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `rel_id` INT(11) NOT NULL,
  `rel_type` VARCHAR(45) NOT NULL,
  `staffid` VARCHAR(45) NULL,
  `approve` VARCHAR(45) NULL,
  `note` TEXT NULL,
  `date` DATETIME NULL,
  `approve_action` VARCHAR(255) NULL,
  `reject_action` VARCHAR(255) NULL,
  `approve_value` VARCHAR(255) NULL,
  `reject_value` VARCHAR(255) NULL,
  `staff_approve` INT(11) NULL,
  `action` VARCHAR(45) NULL,
  `sender` INT(11) NULL,
  `date_send` DATETIME NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE IF NOT EXISTS `goods_delivery` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `rel_type` int(11) NULL,
  `rel_document` int(11) NULL,
  `customer_code` text NULL,
  `customer_name` varchar(100) NULL,
  `to_` varchar(100) NULL,
  `address` varchar(100) NULL,
  `description` text NULL,
  `staff_id` int(11) NULL,
  `date_c` date NULL,
  `date_add` date NULL,
  `goods_delivery_code` varchar(100) NULL,
  `approval` INT(11) NULL DEFAULT 0,
  `addedfrom` INT(11) NULL,
  `total_money` DECIMAL(15,2) NULL DEFAULT '0.00',
  `warehouse_id` int(11) NULL,
  `total_discount` DECIMAL(15,2) NULL DEFAULT '0.00',
  `after_discount` DECIMAL(15,2) NULL DEFAULT '0.00',
  `invoice_id` varchar(100) NULL,
  `project` TEXT NULL,
  `type` TEXT NULL,
  `department` int(11) NULL,
  `requester` int(11) NULL,
  `invoice_no` text NULL,
  `pr_order_id` int(11) NULL,
  `type_of_delivery` VARCHAR(100) NULL DEFAULT 'total',
  `additional_discount` DECIMAL(15,2) NULL DEFAULT '0',
  `sub_total` DECIMAL(15,2) NULL DEFAULT '0',
  `delivery_status` VARCHAR(100) NULL DEFAULT 'ready_for_packing',
  `shipping_fee` DECIMAL(15,2) NULL DEFAULT '0.00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE IF NOT EXISTS `goods_delivery_detail` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `goods_delivery_id` int(11) NOT NULL,
  `commodity_code` varchar(100) NULL,
  `commodity_name` text NULL,
  `warehouse_id` text NULL,
  `unit_id` text NULL,
  `quantities` text NULL,
  `unit_price` varchar(100) NULL,
  `note` text NULL,
  `discount` varchar(100) NULL,
  `discount_money` varchar(100) NULL,
  `available_quantity` varchar(100) NULL,
  `tax_id` varchar(100) NULL,
  `total_after_discount` varchar(100) NULL,
  `expiry_date` text NULL,
  `lot_number` text NULL,
  `guarantee_period` text NULL,
  `tax_rate` TEXT NULL,
  `tax_name` TEXT NULL,
  `sub_total` DECIMAL(15,2) NULL DEFAULT '0',
  `packing_qty` DECIMAL(15,2) NULL DEFAULT '0.00',
  `total_money` DECIMAL(15,2) NULL DEFAULT '0.00',
  `serial_number` VARCHAR(255) NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE IF NOT EXISTS `wh_sub_group` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `sub_group_code` varchar(100) NULL,
  `sub_group_name` text NULL,
  `order` int(10) NULL,
  `display` int(1) NULL,
  `note` text NULL,
  `group_id` int(11) NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE IF NOT EXISTS `ware_color` (
  `color_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `color_code` varchar(100) NULL,
  `color_name` varchar(100) NULL,
  `color_hex` text NULL,
  `order` int(10) NULL,
  `display` int(1) NULL,
  `note` text NULL,
  PRIMARY KEY (`color_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE IF NOT EXISTS `wh_loss_adjustment` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `type` varchar(15) NULL,
  `addfrom` int(11) NULL,
  `reason` LONGTEXT NULL,
  `time` datetime NULL,
  `date_create` date NOT NULL,
  `status` int NOT NULL,
  `warehouses` int(11) NULL,
  `loss_adjustment_title` VARCHAR(200) NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE IF NOT EXISTS `wh_loss_adjustment_detail` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `items` int(11) NULL,
  `unit` int(11) NULL,
  `current_number` int(15) NULL,
  `updates_number` int(15) NULL,
  `loss_adjustment` INT(11) NULL,
  `expiry_date` text NULL,
  `lot_number` text NULL,
  `commodity_name` TEXT NULL,
  `serial_number` VARCHAR(255) NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE IF NOT EXISTS `internal_delivery_note` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `internal_delivery_name` text NULL,
  `description` text NULL,
  `staff_id` int(11) NULL,
  `date_c` date NULL,
  `date_add` date NULL,
  `internal_delivery_code` varchar(100) NULL,
  `approval` INT(11) NULL DEFAULT 0,
  `addedfrom` INT(11) NULL,
  `total_amount` decimal(15,2) NULL,
  `datecreated` datetime NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE IF NOT EXISTS `internal_delivery_note_detail` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `internal_delivery_id` int(11) NOT NULL,
  `commodity_code` varchar(100) NULL,
  `from_stock_name` text NULL,
  `to_stock_name` text NULL,
  `unit_id` text NULL,
  `available_quantity` text NULL,
  `quantities` text NULL,
  `unit_price` varchar(100) NULL,
  `into_money` varchar(100) NULL,
  `note` text NULL,
  `commodity_name` TEXT NULL,
  `serial_number` VARCHAR(255) NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE IF NOT EXISTS `goods_delivery_invoices_pr_orders` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `rel_id` int(11) NULL,
  `rel_type` int(11) NULL,
  `type` varchar(100) NULL COMMENT 'invoice, purchase_orders',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE IF NOT EXISTS `wh_goods_delivery_activity_log` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `rel_id` int NULL,
  `rel_type` varchar(100) NULL,
  `description` mediumtext NULL,
  `additional_data` text NULL,
  `date` datetime NULL,
  `staffid` int(11) NULL,
  `full_name` varchar(100) NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE IF NOT EXISTS `wh_packing_lists` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `delivery_note_id` INT(11) NULL,
  `packing_list_number` VARCHAR(100) NULL,
  `packing_list_name` VARCHAR(200) NULL,
  `width` DECIMAL(15,2) NULL DEFAULT '0.00',
  `height` DECIMAL(15,2) NULL DEFAULT '0.00',
  `lenght` DECIMAL(15,2) NULL DEFAULT '0.00',
  `weight` DECIMAL(15,2) NULL DEFAULT '0.00',
  `volume` DECIMAL(15,2) NULL DEFAULT '0.00',
  `clientid` INT(11) NULL,
  `subtotal` DECIMAL(15,2) NULL DEFAULT '0.00',
  `total_amount` DECIMAL(15,2) NULL DEFAULT '0.00',
  `discount_total` DECIMAL(15,2) NULL DEFAULT '0.00',
  `additional_discount` DECIMAL(15,2) NULL DEFAULT '0.00',
  `total_after_discount` DECIMAL(15,2) NULL DEFAULT '0.00',
  `billing_street` varchar(200) DEFAULT NULL,
  `billing_city` varchar(100) DEFAULT NULL,
  `billing_state` varchar(100) DEFAULT NULL,
  `billing_zip` varchar(100) DEFAULT NULL,
  `billing_country` int(11) DEFAULT NULL,
  `shipping_street` varchar(200) DEFAULT NULL,
  `shipping_city` varchar(100) DEFAULT NULL,
  `shipping_state` varchar(100) DEFAULT NULL,
  `shipping_zip` varchar(100) DEFAULT NULL,
  `shipping_country` int(11) DEFAULT NULL,
  `client_note` TEXT NULL,
  `admin_note` TEXT NULL,
  `approval` INT(11) NULL DEFAULT '0',
  `datecreated` DATETIME NULL,
  `staff_id` INT(11) NULL,
  `type_of_packing_list` VARCHAR(100) NULL DEFAULT 'total',
  `delivery_status` VARCHAR(100) NULL DEFAULT 'wh_ready_to_deliver',
  `shipping_fee` DECIMAL(15,2) NULL DEFAULT '0.00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE IF NOT EXISTS `wh_packing_list_details` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `packing_list_id` INT(11) NOT NULL,
  `delivery_detail_id` INT(11) NULL,
  `commodity_code` INT(11) NULL,
  `commodity_name` TEXT NULL,
  `quantity` DECIMAL(15,2) NULL DEFAULT '0.00',
  `unit_id` INT(11) NULL,
  `unit_price` DECIMAL(15,2) NULL DEFAULT '0.00',
  `sub_total` DECIMAL(15,2) NULL DEFAULT '0.00',
  `tax_id`  TEXT NULL,
  `tax_rate`  TEXT NULL,
  `tax_name`  TEXT NULL,
  `total_amount` DECIMAL(15,2) NULL DEFAULT '0.00',
  `discount` DECIMAL(15,2) NULL DEFAULT '0.00',
  `discount_total` DECIMAL(15,2) NULL DEFAULT '0.00',
  `total_after_discount` DECIMAL(15,2) NULL DEFAULT '0.00',
  `serial_number` VARCHAR(255) NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE IF NOT EXISTS `wh_omni_shipments` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `cart_id` INT(11) NULL,
  `shipment_number` VARCHAR(100) NULL,
  `planned_shipping_date` DATETIME NULL,
  `shipment_status` VARCHAR(50) NULL,
  `datecreated` DATETIME NULL,
  `goods_delivery_id` INT(11) NULL,
  `shipment_hash` VARCHAR(32) NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE IF NOT EXISTS `wh_order_returns` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `rel_id` INT(11) NULL,
  `rel_type` VARCHAR(50) NOT NULL,
  `return_type` VARCHAR(50) NULL,
  `company_id` INT(11) NULL,
  `company_name` VARCHAR(500) NULL,
  `email` VARCHAR(100) NULL,
  `phonenumber` VARCHAR(20) NULL,
  `order_number` VARCHAR(500) NULL,
  `order_date` DATETIME NULL,
  `number_of_item` DECIMAL(15,2) NULL DEFAULT '0.00',
  `order_total` DECIMAL(15,2) NULL DEFAULT '0.00',
  `order_return_number` VARCHAR(200) NULL,
  `order_return_name` VARCHAR(500) NULL,
  `fee_return_order` DECIMAL(15,2) NULL DEFAULT '0.00',
  `refund_loyaty_point` INT(11) NULL DEFAULT '0',
  `subtotal` DECIMAL(15,2) NULL DEFAULT '0.00',
  `total_amount` DECIMAL(15,2) NULL DEFAULT '0.00',
  `discount_total` DECIMAL(15,2) NULL DEFAULT '0.00',
  `additional_discount` DECIMAL(15,2) NULL DEFAULT '0.00',
  `adjustment_amount` DECIMAL(15,2) NULL DEFAULT '0.00',
  `total_after_discount` DECIMAL(15,2) NULL DEFAULT '0.00',
  `return_policies_information` TEXT NULL,
  `admin_note` TEXT NULL,
  `approval` INT(11) NULL DEFAULT 0,
  `datecreated` DATETIME NULL,
  `staff_id` INT(11) NULL,
  `receipt_delivery_id` INT(1) NULL DEFAULT 0,
  `currency` INT(11) NULL,
  `return_reason` longtext NULL,
  `receipt_delivery_type` VARCHAR(100) NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE IF NOT EXISTS `wh_order_return_details` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `order_return_id` INT(11) NOT NULL,
  `rel_type_detail_id` INT(11) NULL,
  `commodity_code` INT(11) NULL,
  `commodity_name` TEXT NULL,
  `quantity` DECIMAL(15,2) NULL DEFAULT '0.00',
  `unit_id` INT(11) NULL,
  `unit_price` DECIMAL(15,2) NULL DEFAULT '0.00',
  `sub_total` DECIMAL(15,2) NULL DEFAULT '0.00',
  `tax_id`  TEXT NULL,
  `tax_rate`  TEXT NULL,
  `tax_name`  TEXT NULL,
  `total_amount` DECIMAL(15,2) NULL DEFAULT '0.00',
  `discount` DECIMAL(15,2) NULL DEFAULT '0.00',
  `discount_total` DECIMAL(15,2) NULL DEFAULT '0.00',
  `total_after_discount` DECIMAL(15,2) NULL DEFAULT '0.00',
  `reason_return` VARCHAR(200) NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE IF NOT EXISTS `wh_inventory_serial_numbers` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `commodity_id` INT(11) NOT NULL,
  `warehouse_id` INT(11) NULL,
  `inventory_manage_id` INT(11) NULL,
  `serial_number` VARCHAR(255) NULL,
  `is_used` VARCHAR(20) NULL DEFAULT 'no',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE IF NOT EXISTS `wh_activity_log` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `rel_id` INT(11) NOT NULL,
  `rel_type` VARCHAR(45) NOT NULL,
  `staffid` INT(11) NULL,
  `date` DATETIME NULL,
  `note` TEXT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ===========================
-- Column additions on existing core tables (guarded)
-- ===========================
CALL add_column_if_missing(@current_schema, 'item_categories', 'commodity_group_code', ' `commodity_group_code` varchar(100) NULL');
CALL add_column_if_missing(@current_schema, 'item_categories', 'order', ' `order` int(10) NULL');
CALL add_column_if_missing(@current_schema, 'item_categories', 'display', ' `display` int(1) NULL DEFAULT 1');
CALL add_column_if_missing(@current_schema, 'item_categories', 'note', ' `note` text NULL');

CALL add_column_if_missing(@current_schema, 'items', 'tax', ' `tax` int(11) NULL');
CALL add_column_if_missing(@current_schema, 'items', 'tax2', ' `tax2` int(11) NULL');
CALL add_column_if_missing(@current_schema, 'items', 'commodity_code', ' `commodity_code` varchar(100) NULL');
CALL add_column_if_missing(@current_schema, 'items', 'commodity_barcode', ' `commodity_barcode` text NULL');
CALL add_column_if_missing(@current_schema, 'items', 'commodity_type', ' `commodity_type` int(11) NULL');
CALL add_column_if_missing(@current_schema, 'items', 'warehouse_id', ' `warehouse_id` int(11) NULL');
CALL add_column_if_missing(@current_schema, 'items', 'origin', ' `origin` varchar(100) NULL');
CALL add_column_if_missing(@current_schema, 'items', 'color_id', ' `color_id` int(11) NULL');
CALL add_column_if_missing(@current_schema, 'items', 'style_id', ' `style_id` int(11) NULL');
CALL add_column_if_missing(@current_schema, 'items', 'model_id', ' `model_id` int(11) NULL');
CALL add_column_if_missing(@current_schema, 'items', 'size_id', ' `size_id` int(11) NULL');
CALL add_column_if_missing(@current_schema, 'items', 'unit_id', ' `unit_id` int(11) NULL');
CALL add_column_if_missing(@current_schema, 'items', 'sku_code', ' `sku_code` varchar(200) NULL');
CALL add_column_if_missing(@current_schema, 'items', 'sku_name', ' `sku_name` varchar(200) NULL');
CALL add_column_if_missing(@current_schema, 'items', 'purchase_price', ' `purchase_price` decimal(15,2) NULL DEFAULT 0.00');
CALL add_column_if_missing(@current_schema, 'items', 'sub_group', ' `sub_group` varchar(200) NULL');
CALL add_column_if_missing(@current_schema, 'items', 'commodity_name', ' `commodity_name` varchar(200) NOT NULL');
CALL add_column_if_missing(@current_schema, 'items', 'color', ' `color` text NULL');
CALL add_column_if_missing(@current_schema, 'items', 'guarantee', ' `guarantee` text NULL');
CALL add_column_if_missing(@current_schema, 'items', 'profif_ratio', ' `profif_ratio` text NULL');
CALL add_column_if_missing(@current_schema, 'items', 'parent_id', ' `parent_id` int(11) NULL DEFAULT NULL');
CALL add_column_if_missing(@current_schema, 'items', 'attributes', ' `attributes` LONGTEXT NULL');
CALL add_column_if_missing(@current_schema, 'items', 'parent_attributes', ' `parent_attributes` LONGTEXT NULL');
CALL add_column_if_missing(@current_schema, 'items', 'can_be_sold', ' `can_be_sold` VARCHAR(100) NULL DEFAULT "can_be_sold"');
CALL add_column_if_missing(@current_schema, 'items', 'can_be_purchased', ' `can_be_purchased` VARCHAR(100) NULL DEFAULT "can_be_purchased"');
CALL add_column_if_missing(@current_schema, 'items', 'can_be_manufacturing', ' `can_be_manufacturing` VARCHAR(100) NULL DEFAULT "can_be_manufacturing"');
CALL add_column_if_missing(@current_schema, 'items', 'can_be_inventory', ' `can_be_inventory` VARCHAR(100) NULL DEFAULT "can_be_inventory"');
CALL add_column_if_missing(@current_schema, 'items', 'without_checking_warehouse', ' `without_checking_warehouse` int(11) NULL DEFAULT 0');
CALL add_column_if_missing(@current_schema, 'items', 'long_descriptions', ' `long_descriptions` LONGTEXT NULL');

CALL add_column_if_missing(@current_schema, 'invoice_items', 'wh_delivered_quantity', ' `wh_delivered_quantity` DECIMAL(15,2) DEFAULT 0');

CALL add_column_if_missing(@current_schema, 'notifications', 'inventory_goods_receiving_id', ' `inventory_goods_receiving_id` int(1) NOT NULL DEFAULT 0');
CALL add_column_if_missing(@current_schema, 'notifications', 'inventory_goods_delivery_id', ' `inventory_goods_delivery_id` int(1) NOT NULL DEFAULT 0');
CALL add_column_if_missing(@current_schema, 'notifications', 'packing_list_id', ' `packing_list_id` int(1) NOT NULL DEFAULT 0');
CALL add_column_if_missing(@current_schema, 'notifications', 'internal_delivery_note_id', ' `internal_delivery_note_id` int(1) NOT NULL DEFAULT 0');
CALL add_column_if_missing(@current_schema, 'notifications', 'loss_adjustment_is', ' `loss_adjustment_is` int(1) NOT NULL DEFAULT 0');
CALL add_column_if_missing(@current_schema, 'notifications', 'receiving_exporting_return_order_id', ' `receiving_exporting_return_order_id` int(1) NOT NULL DEFAULT 0');

CALL add_column_if_missing(@current_schema, 'pur_order_detail', 'wh_quantity_received', ' `wh_quantity_received` varchar(200) NULL');

-- Cleanup helper proc if desired
-- DROP PROCEDURE IF EXISTS add_column_if_missing;

-- End of patch
