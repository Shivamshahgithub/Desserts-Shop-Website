ALTER TABLE `Products` DROP COLUMN cost;
ALTER TABLE Products
ADD column avg_rating decimal(1,1) default 0.0;
ALTER TABLE Products
MODIFY COLUMN avg_rating float;
ALTER TABLE Products
ADD column num_rating int default 0;
