CREATE TABLE student(
  id BIGINT PRIMARY KEY AUTO_INCREMENT NOT NULL,
  user_id BIGINT (50),
  app_id BIGINT (50),
  student VARCHAR (255),
  program VARCHAR (255),
  year BIGINT,
  email VARCHAR (255),
  password VARCHAR (255),
  verified VARCHAR (1),
  verify_code BIGINT,
  time TIMESTAMP 
);