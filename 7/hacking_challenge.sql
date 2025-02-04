
USE hacking_challenge;

-- Create vulnerable table (no password field)
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL
);

-- Insert test users
INSERT INTO users (username) VALUES
('admin'),
('hacker'),
('testuser');

-- Run this SQL Injection query to bypass login
SELECT * FROM users WHERE username='' OR 1=1 -- ';