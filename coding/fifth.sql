CREATE TABLE userTable{
	user_id int(100) NOT NULL PRIMARY KEY AUTO_INCREMENT,
	username varchar(100) NOT NULL UNIQUE,
	password varchar(100) NOT NULL 
}

CREATE TABLE userAddress {
	address_id int(100) NOT NULL PRIMARY KEY AUTO_INCREMENT,
	street varchar(100) NOT NULL,
	pincode int(100) NOT NULL,
	state text NOT NULL,
	country text NOT NULL,
	phone int(100),
	user int(100) NOT NULL FOREIGN KEY 
}

Here we can join two tables using userTable user_id column and userAddress user column.