DROP DATABASE IF EXISTS `ajax-chat`;
CREATE DATABASE `ajax-chat` CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

GRANT ALL PRIVILEGES ON `ajax-chat`.* TO 'ajax-chat-user'@'localhost' IDENTIFIED BY 'We Love SQL API!';

USE `ajax-chat`;




CREATE TABLE `message` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `timestamp` TIMESTAMP NOT NULL,
    `text`TEXT NOT NULL 
);