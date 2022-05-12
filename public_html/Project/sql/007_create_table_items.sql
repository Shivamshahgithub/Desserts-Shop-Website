CREATE TABLE IF NOT EXISTS Products(
    id int AUTO_INCREMENT PRIMARY  KEY,
    name varchar(30) UNIQUE, -- alternatively you'd have a SKU that's unique
    description text,
    stock int DEFAULT  1,
     -- shop people may want to record it as pennies
    category varchar(20),
    cost int DEFAULT 1,
    unit_price int Default 1,
    visibility boolean,
    image text,
    created TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    modified TIMESTAMP DEFAULT CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
    check (stock >= 0), -- don't allow negative stock; I don't allow backorders
    check (unit_price >= 0) -- don't allow negative costs
)