/*
Mysql Datatype 
1. Number  
-tinyint - 8 [unsigned 0 to 255]
-small int - 16 [unsigned 0 to 16535]
-medium - 24 [unsigned 0 to 16777215 ]
-int - 32 [unsigned 0 to 4294967295]
- bigint 64 [unsigned 0 to 18446744073709551615]
- decimal [m,d] - decimal(5,2) == -999.99 to 999.99
-float(m,d) - float(7,4) = 999.9999
-double(m,d)

2. Date and Time Data Types
Data Type	“Zero” Value
DATE	'0000-00-00'
TIME	'00:00:00'
DATETIME	'0000-00-00 00:00:00'
TIMESTAMP	'0000-00-00 00:00:00'
YEAR	0000

******************* Automatic Initialization and Updating for TIMESTAMP and DATETIME*********************
With both DEFAULT CURRENT_TIMESTAMP and ON UPDATE CURRENT_TIMESTAMP, the column has the current timestamp for its default value and is automatically updated to the current timestamp.

CREATE TABLE t1 (
  ts TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  dt DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);
3. String Data Types
11.3.1 String Data Type Syntax
11.3.2 The CHAR and VARCHAR Types
11.3.3 The BINARY and VARBINARY Types
11.3.4 The BLOB and TEXT Types
11.3.5 The ENUM Type
11.3.6 The SET Type

*/
SELECT * FROM t1;


SELECT o.*, c.name FROM orders o INNER JOIN customers c ON o.customer_id = c.id;

SELECT products.*, c.name FROM products p LEFT JOIN categories c ON p.category_id = c.id;