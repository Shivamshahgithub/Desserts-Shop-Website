CREATE TABLE IF NOT EXISTS Orders(
id int AUTO_INCREMENT PRIMARY KEY,
    address text (40),
    total_price int,
    payment_method varchar(20),
    money_received int,
    user_id int,
    created TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES Users(id)
)