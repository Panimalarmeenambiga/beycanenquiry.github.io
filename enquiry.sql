CREATE DATABASE beycan_enquiry;

USE beycan_enquiry;

CREATE TABLE enquiries (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    class VARCHAR(50),
    course VARCHAR(100),
    mobile VARCHAR(15),
    alt_mobile VARCHAR(15),
    city VARCHAR(100),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
