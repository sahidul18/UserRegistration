## Simple User Registration and Log in System

* It's created using phpMyAdmin on localhost and php was used as server-side scripting language.

* I created a database 'userDb'
* I executed following command in phpMyAdmin to create a table with five columns with id being the primary key.

Note: Database needs to be created before running this web application.

CREATE TABLE IF NOT EXISTS userDb.`users` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `username` varchar(50) NOT NULL,
 `email` varchar(50) NOT NULL,
 `password` varchar(50) NOT NULL,
 `trn_date` datetime NOT NULL,
 PRIMARY KEY (`id`)
 );

 ![UICal](img\calculatorUI)
