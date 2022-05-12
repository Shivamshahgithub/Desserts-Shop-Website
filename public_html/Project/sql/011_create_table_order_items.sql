CREATE TABLE IF NOT EXISTS Order_Items(
    id int AUTO_INCREMENT PRIMARY KEY,
    product_id int,
    order_id int,
    desired_quantity int,
    unit_price int DEFAULT 1,
    FOREIGN KEY (order_id) REFERENCES Orders(id),
    FOREIGN KEY (product_id) REFERENCES Products(id)
)