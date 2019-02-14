CREATE SCHEMA IF NOT EXISTS `todo`;

USE `todo`;

CREATE TABLE IF NOT EXISTS `user` (
  `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(100) NOT NULL,
  `password` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `uk_username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE IF NOT EXISTS `list` (
  `id` VARCHAR(40) NOT NULL,
  `user_id` INT(11) UNSIGNED NOT NULL,
  `name` VARCHAR(100) DEFAULT NULL,
  `is_deleted` TINYINT(1) UNSIGNED NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  INDEX `idx_user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE IF NOT EXISTS `task` (
  `id` VARCHAR(40) NOT NULL,
  `list_id` VARCHAR(40) NOT NULL,
  `summary` VARCHAR(255) DEFAULT NULL,
  `is_done` TINYINT(1) UNSIGNED NOT NULL DEFAULT '0',
  `is_deleted` TINYINT(1) UNSIGNED NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  INDEX `idx_list_id` (`list_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
