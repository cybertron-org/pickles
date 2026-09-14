-- Pickles local development database for MySQL 8.4+
--
-- Run this as a MySQL administrator (for example, from phpMyAdmin's SQL tab).
-- Before running it, replace the password below with a unique local-only password.
-- Use that exact password in the DB_PASS value in .env afterwards.

SET @pickles_local_password = 'REPLACE_WITH_A_UNIQUE_LOCAL_PASSWORD';

CREATE DATABASE IF NOT EXISTS `pickles`
    CHARACTER SET utf8mb4
    COLLATE utf8mb4_unicode_ci;

-- MySQL 8.4 and the installed PHP driver do not support mysql_native_password.
-- This creates a compatible account using caching_sha2_password instead.
SET @create_user_sql = CONCAT(
    'CREATE USER IF NOT EXISTS ''pickles_local''@''localhost'' ',
    'IDENTIFIED WITH caching_sha2_password BY ',
    QUOTE(@pickles_local_password)
);
PREPARE create_user_statement FROM @create_user_sql;
EXECUTE create_user_statement;
DEALLOCATE PREPARE create_user_statement;

GRANT SELECT, INSERT, UPDATE, DELETE ON `pickles`.* TO 'pickles_local'@'localhost';
FLUSH PRIVILEGES;

USE `pickles`;

CREATE TABLE IF NOT EXISTS `leads` (
    `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
    `page` VARCHAR(2048) NULL,
    `date` DATETIME NULL,
    `created_at` DATETIME NULL,

    `first_name` VARCHAR(191) NULL,
    `last_name` VARCHAR(191) NULL,
    `name` VARCHAR(191) NULL,
    `email` VARCHAR(254) NULL,
    `phone` VARCHAR(64) NULL,
    `phone_no` VARCHAR(64) NULL,
    `country` VARCHAR(191) NULL,
    `message` LONGTEXT NULL,

    `service_category` VARCHAR(191) NULL,
    `service` VARCHAR(191) NULL,
    `estimated_budget` VARCHAR(191) NULL,
    `expected_date` VARCHAR(191) NULL,
    `industry` VARCHAR(191) NULL,

    `about_business` TEXT NULL,
    `website_address` VARCHAR(2048) NULL,
    `website` VARCHAR(2048) NULL,
    `product_services` TEXT NULL,
    `design_purpose` TEXT NULL,
    `web_nav` TEXT NULL,
    `web_req` TEXT NULL,
    `tech_informative` TEXT NULL,
    `tech_ecommerce` TEXT NULL,

    `question_1` TEXT NULL,
    `question_2` TEXT NULL,
    `question_3` TEXT NULL,
    `question_4` TEXT NULL,
    `question_5` TEXT NULL,
    `question_6` TEXT NULL,
    `question_7` TEXT NULL,

    `address` TEXT NULL,
    `city` VARCHAR(191) NULL,
    `web_address` VARCHAR(2048) NULL,
    `business_category` VARCHAR(191) NULL,
    `company_tagline` TEXT NULL,
    `specialties` TEXT NULL,
    `year_established` VARCHAR(32) NULL,
    `payment_type` VARCHAR(191) NULL,
    `brand_carried` TEXT NULL,
    `affiliations` TEXT NULL,

    `reference_1` VARCHAR(2048) NULL,
    `reference_2` VARCHAR(2048) NULL,
    `reference_3` VARCHAR(2048) NULL,
    `reference_4` VARCHAR(2048) NULL,
    `web_url_one` VARCHAR(2048) NULL,
    `web_url_two` VARCHAR(2048) NULL,
    `web_url_three` VARCHAR(2048) NULL,
    `web_url_four` VARCHAR(2048) NULL,
    `keywords` TEXT NULL,
    `keyword_two` TEXT NULL,
    `ftp_address` VARCHAR(2048) NULL,
    `ftp_username` VARCHAR(191) NULL,
    `ftp_password` TEXT NULL,
    `c_panel` VARCHAR(2048) NULL,

    `application_type` VARCHAR(191) NULL,
    `application_before` VARCHAR(191) NULL,
    `business_nature` VARCHAR(191) NULL,
    `services` TEXT NULL,

    PRIMARY KEY (`id`),
    KEY `idx_leads_email` (`email`),
    KEY `idx_leads_created_at` (`created_at`),
    KEY `idx_leads_date` (`date`),
    KEY `idx_leads_page` (`page`(191))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Put these values in .env after the script finishes. Use the same password
-- you assigned to @pickles_local_password above.
-- DB_HOST=localhost
-- DB_PORT=3306
-- DB_USER=pickles_local
-- DB_PASS=REPLACE_WITH_A_UNIQUE_LOCAL_PASSWORD
-- DB_NAME=pickles
