# Inventory-Store-Management

This was a group work created my me and my team in Babcock University

It is a project on Inventory store managemement, it collect data of your products, warehouses, product sections, others and store them in a database where it can be accessed and edited in the website.

To be able to run this pages perfectly, you will need to have xampp or any mysql engine installed on your system.
This program's sql localhost is xampp

You need to run these sets of codes to be able to create the required database and tables for the Website.

CREATE DATABASE Inventory;
Query OK, 1 row affected (0.008 sec)

USE inventory;

CREATE TABLE managers(

CREATE TABLE warehouses (id INT AUTO_INCREMENT PRIMARY KEY,tag VARCHAR(40) NOT NULL, address VARCHAR(40) NOT NULL UNIQUE KEY, anager_id INT, OREIGN KEY (manager_id) REFERENCES managers(id) ON DELETE SET NULL);

CREATE TABLE products (id INT AUTO_INCREMENT PRIMARY KEY, name VARCHAR(40) NOT NULL, unit_price DECIMAL(7,3) NOT NULL DEFAULT 0, vendor VARCHAR(40) NOT NULL, category VARCHAR(40));

CREATE TABLE product_locations( id INT AUTO_INCREMENT PRIMARY KEY,warehouse_id INT NOT NULL, product_id INT NOT NULL, FOREIGN KEY (warehouse_id) REFERENCES warehouses(id) ON DELETE CASCADE, FOREIGN KEY (product_id) REFERENCES products(id) ON DELETE CASCADE);

CREATE TABLE stock_flows(id INT AUTO_INCREMENT PRIMARY KEY, product_id INT NOT NULL, flow_type ENUM("internal","inward","outward"), quantity INT NOT NULL DEFAULT 1, destination_address VARCHAR(40), warehouse_id INT, FOREIGN KEY (product_id) REFERENCES products(id) ON DELETE CASCADE, FOREIGN KEY (warehouse_id) REFERENCES warehouses(id) ON DELETE CASCADE);


ALL THESE CODES MUST BE RUNNED IN MYSQL COMMAND LINE, OR THE GUI INTERFACE E.G. PHPMYADMIN(XAMPP)

And if you run this code
SHOW TABLES
    -> ;
    
This must be the output.

+---------------------+

| Tables_in_inventory |

+---------------------+

| managers            |

| product_locations   |

| products            |

| stock_flows         |

| warehouses          |

+---------------------+
5 rows in set (0.001 sec)

I hope you have fun with the project, I'll still update it and make it more responsive. 
TILL THEN, HAPPY CODING AND GOD BLESS.
