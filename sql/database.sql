CREATE DATABASE IF NOT EXISTS ad_management;

USE ad_management;

CREATE TABLE IF NOT EXISTS ads (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    content TEXT NOT NULL,
    image_url VARCHAR(255) DEFAULT NULL,
    start_date DATETIME NOT NULL,
    end_date DATETIME NOT NULL,
    status ENUM('active', 'inactive') NOT NULL DEFAULT 'active',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

INSERT INTO ads (title, content, image_url, start_date, end_date, status)
VALUES 
    ('Sample Ad 1', 'This is the content of Sample Ad 1.', 'https://example.com/image1.jpg', '2024-11-01 00:00:00', '2024-12-01 00:00:00', 'active'),
    ('Sample Ad 2', 'This is the content of Sample Ad 2.', 'https://example.com/image2.jpg', '2024-11-01 00:00:00', '2024-12-01 00:00:00', 'active');