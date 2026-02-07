CREATE DATABASE channel_partner_db;
USE channel_partner_db;

-- Users table
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    email VARCHAR(100) UNIQUE,
    password VARCHAR(255),
    role ENUM('admin','partner')
);

-- Partner details
CREATE TABLE partners (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    company_name VARCHAR(100),
    status VARCHAR(50),
    FOREIGN KEY (user_id) REFERENCES users(id)
);

-- Performance tracking
CREATE TABLE performance (
    id INT AUTO_INCREMENT PRIMARY KEY,
    partner_id INT,
    sales INT,
    rating INT,
    FOREIGN KEY (partner_id) REFERENCES partners(id)
);
