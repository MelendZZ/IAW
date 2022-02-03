drop database  if exists bookorama;


create database bookorama;
use bookorama;
CREATE TABLE customers (
  customerid INTEGER UNSIGNED AUTO_INCREMENT NOT NULL  ,
  name VARCHAR(50)  NOT NULL  ,
  address VARCHAR(50)  NOT NULL  ,
  city VARCHAR(50)  NULL  ,
  PRIMARY KEY(customerid)  ,
);

CREATE TABLE orders (
  orderid INTEGER UNSIGNED AUTO_INCREMENT NOT NULL,
  customerid INTEGER UNSIGNED NOT NULL,
  amount FLOAT(6,2),
  date DATE NOT NULL,
  PRIMARY KEY(orderid),
);

CREATE TABLE books (
  isbn VARCHAR(50) NOT NULL,
  author VARCHAR(50),
  title VARCHAR(50),
  price FLOAT(5,2),
  PRIMARY KEY(isbn),
);

CREATE TABLE order_items(
  orderid INTEGER UNSIGNED NOT NULL,
  isbn VARCHAR(50) NOT NULL,
  quantity TINYINT UNSIGNED,
  PRIMARY KEY(orderid, isbn),
);

CREATE TABLE book_reviews(
  isbn VARCHAR(50) NOT NULL,
  review VARCHAR(50),
  PRIMARY KEY(isbn),
);
