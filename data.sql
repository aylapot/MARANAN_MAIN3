-- Create the users table
CREATE TABLE users (
    user_id VARCHAR(255) PRIMARY KEY,
    role VARCHAR(50),
    lastName VARCHAR(255),
    firstName VARCHAR(255),
    middleName VARCHAR(255),
    number VARCHAR(255),
    email VARCHAR(255) UNIQUE,
    password VARCHAR(255)
);
