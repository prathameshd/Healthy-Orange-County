# Website for Healthy Orange County
MySQL  Ver 15.1 Distrib 10.3.22-MariaDB | PHP 7.3.15-3 (cli)

Make sure php/authController.php , php/createEvent.php, php/contactmsgs.php and php/verify_email.php use the correct DB credentials. 

Current DB Credentials:
User- newuser, 
Password- password, 
database- verifyuser

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
 description varchar(1000) NOT NULL,
 ddate varchar(255) NOT NULL, 
 contact varchar(100) NOT NULL , PRIMARY KEY (id) 
);

CREATE TABLE msgs( 
 id int(11) NOT NULL AUTO_INCREMENT, 
 name varchar(100) NOT NULL, 
 email varchar(100) NOT NULL, 
 ddate varchar(255) NOT NULL, 
 title varchar(100) NOT NULL, 
 message varchar(500) NOT NULL , PRIMARY KEY (id) 
);

CREATE TABLE rsvp( 
 id int(11) NOT NULL AUTO_INCREMENT, 
 userid int(11) NOT NULL, 
 eventid int(11) NOT NULL , PRIMARY KEY (id) 
);

CREATE TABLE adminmsgs( 
  id int(11) NOT NULL AUTO_INCREMENT, 
  email varchar(50) NOT NULL, 
  title varchar(100) NOT NULL, 
  message varchar(500) NOT NULL , PRIMARY KEY (id) 
);

# Hard Coded Admin:
INSERT INTO users(id, username, email, verified, password, role) 
	    values(0, 'admin', 'healthyorangecountyin@gmail.com', 1, 'admin', 'admin');

# References:
User Registeration and Email Verification-
	http://codewithawa.com/posts/user-registration-and-email-verification-php-and-mysql

