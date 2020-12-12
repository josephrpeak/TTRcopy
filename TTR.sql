CREATE TABLE artist (
	ID int(10) NOT NULL AUTO_INCREMENT,
	name varchar(30) NOT NULL,

	PRIMARY KEY(ID)
);

CREATE TABLE album (
	title varchar(30) NOT NULL,
	release_date int(8) NOT NULL,
	price decimal(8) NOT NULL,
	record_label varchar(30),

	PRIMARY KEY(title)
);

CREATE TABLE tracks (
	title varchar(30) NOT NULL,
	duration decimal(10),

	PRIMARY KEY(title)
);

CREATE TABLE account (
	ID int(10) NOT NULL AUTO_INCREMENT,
	username varchar(30) NOT NULL,
	password varchar(30) NOT NULL,
	email varchar(40) NOT NULL,
	CCN bigint(16),
	shipping_address varchar(50),
	CC_year int(4),
	CC_month int(2),

	PRIMARY KEY(ID)
);

CREATE TABLE customer (
	firstname varchar(30) NOT NULL,
	lastname varchar(30),
	phone_number int(10)

	#FOREIGN KEY (username) REFERENCES account(username)
);


