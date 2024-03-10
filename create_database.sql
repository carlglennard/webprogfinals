CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    last_name VARCHAR(255) NOT NULL,
    first_name VARCHAR(255) NOT NULL,
    Email VARCHAR(255) NOT NULL UNIQUE,
    Country VARCHAR(255) NOT NULL,
    State VARCHAR(255) NOT NULL,
    City VARCHAR(255) NOT NULL,
    Barangay VARCHAR(255) NOT NULL,
    subdivision VARCHAR(255) NOT NULL,
    Street VARCHAR(255) NOT NULL,
    lot_block VARCHAR(255) NOT NULL,
    contact_number VARCHAR(20) NOT NULL,
    Password VARCHAR(255) NOT NULL,
    RegistrationDate TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
