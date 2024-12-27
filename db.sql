CREATE TABLE account (
    id INT PRIMARY KEY, 
    username VARCHAR(20) NOT NULL,
    password VARCHAR(255) NOT NULL
);

CREATE TABLE user (
    id INT PRIMARY KEY, 
    first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL,
    phone VARCHAR(20),
    account_id INT,
    FOREIGN KEY (account_id) REFERENCES account(id)
);