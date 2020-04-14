# InfoWeb
Make sure php/authController.php , php/createEvent.php and php/verify_email.php use there correct DB credentials. 

# Databases:
CREATE DATABASE verifyuser

CREATE TABLE users (
 id int(11) NOT NULL AUTO_INCREMENT,
 username varchar(100) NOT NULL,
 email varchar(100) NOT NULL,
 verified tinyint(1) NOT NULL DEFAULT '0',
 token varchar(255) DEFAULT NULL,
 password varchar(255) NOT NULL,
 role varchar(100) NOT NULL DEFAULT 'user',
 PRIMARY KEY (id)
);

CREATE TABLE allevents( 
 id int(11) NOT NULL AUTO_INCREMENT, 
 title varchar(100) NOT NULL, 
 description varchar(100) NOT NULL,
 ddate varchar(255) NOT NULL, 
 contact varchar(100) NOT NULL , PRIMARY KEY (id) 
);

# Hard Coded Admin:
INSERT INTO users(id, username, email, verified, password, role) 
	    values(0, 'admin', 'healthyorangecountyin@gmail.com', 1, 'admin', 'admin');
