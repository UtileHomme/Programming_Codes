<?php

//valid for videos 31-33

(video 31)

//adding column into an existing table
ALTER TABLE bacon ADD samplecolumn varchar(10)

//dropping column
ALTER TABLE bacon DROP COLUMN samplecolumn

//dropping the entire table - retrieval not possible
DROP TABLE bacon

//renaming a table
RENAME TABLE customers TO users

(video 32)

//creating a view
CREATE VIEW mostbids AS
SELECT id, name, bids FROM items ORDER BY bids DESC LIMIT 10
//it will update automatically

//extracting columns and combining them as a VIEW
CREATE VIEW mailing AS
SELECT CONCAT(city, ',', state) AS address FROM customers


 ?>
