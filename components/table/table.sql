CREATE DATABASE IF NOT EXISTS school;

USE school;

CREATE TABLE IF NOT EXISTS users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  email VARCHAR(255) NOT NULL,
  username VARCHAR(255) NOT NULL,
  password VARCHAR(255) NOT NULL
);

CREATE TABLE IF NOT EXISTS userdetails (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(255) NOT NULL,
  name VARCHAR(255) NOT NULL,
  phone VARCHAR(255) NOT NULL,
  address VARCHAR(255) NOT NULL,
  stream VARCHAR(255) NOT NULL,
  shift VARCHAR(255) NOT NULL,
  year VARCHAR(255) NOT NULL
);

CREATE TABLE IF NOT EXISTS posts (
  post_id INT AUTO_INCREMENT PRIMARY KEY,
  message TEXT NOT NULL,
  post_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  user_name VARCHAR(255) NOT NULL
);
