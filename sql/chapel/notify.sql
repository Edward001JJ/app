CREATE TABLE notify(
  id BIGINT PRIMARY KEY AUTO_INCREMENT NOT NULL,
  notify_id BIGINT (50),
  chapel_id BIGINT (50),
  user BIGINT (20),
  statements VARCHAR(20),
  chapel_time VARCHAR (255),
  TIME TIMESTAMP
);