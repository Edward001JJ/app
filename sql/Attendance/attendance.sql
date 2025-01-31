CREATE TABLE attendance(
  id BIGINT PRIMARY KEY AUTO_INCREMENT NOT NULL,
  attendance_id BIGINT (30),
  student VARCHAR (255),
  program VARCHAR (255),
  module VARCHAR (255),
  lecturer_code BIGINT (30),
  currYear BIGINT,
  idNum BIGINT,
  time TIME,
  currDate DATE
);