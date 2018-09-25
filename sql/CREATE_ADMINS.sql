CREATE TABLE admins (
  username VARCHAR(255) NOT NULL,
  first_name VARCHAR(255) NOT NULL,
  last_name VARCHAR(255) NOT NULL,
  password VARCHAR(255) NOT NULL,
  clearance INT(11) NOT NULL,
  PRIMARY KEY (username)
);
