CREATE TABLE chapel(
  id BIGINT PRIMARY KEY AUTO_INCREMENT NOT NULL,
  chapel_id BIGINT (50),
  fname VARCHAR (255),
  program VARCHAR (255),
  currYear BIGINT,
  idNum BIGINT,
  email VARCHAR (255),
  time TIMESTAMP
);