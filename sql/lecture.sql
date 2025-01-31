CREATE TABLE lectures(
  id BIGINT PRIMARY KEY AUTO_INCREMENT,
  lecture_id BIGINT (50),
  lecturer_name VARCHAR (255),
  module VARCHAR (255),
  program VARCHAR (255),
  classYear BIGINT,
  duration BIGINT,
  time TIME,
  currDate DATE
);