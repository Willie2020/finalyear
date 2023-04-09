CREATE TABLE programs (
  id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  name varchar(50) NOT NULL,
  programme varchar(20) NOT NULL
);

CREATE TABLE users (
  id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  index_number varchar(8) NOT NULL UNIQUE,
  password varchar(255) NOT NULL,
  first_name varchar(255) NOT NULL,
  last_name varchar(255) NOT NULL,
  phone_number varchar(15) NOT NULL,
  program_id int(11) NOT NULL,
  FOREIGN KEY (program_id) REFERENCES programs (id)
);

CREATE TABLE tutor_request (
  id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  user_id int(11) NOT NULL,
  course varchar(20) NOT NULL,
  course_code varchar(25) NOT NULL,
  preferred_time datetime NOT NULL,
  preferred_gender char(1) NOT NULL,
  notes varchar(255) DEFAULT NULL,
  program_id int(11) NOT NULL,
  FOREIGN KEY (user_id) REFERENCES users (id),
  FOREIGN KEY (program_id) REFERENCES programs (id)
);

ALTER TABLE tutor_request
  ADD INDEX user_id_idx (user_id),
  ADD INDEX program_id_idx (program_id);
