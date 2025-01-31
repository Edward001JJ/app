CREATE TABLE total(
  id BIGINT PRIMARY KEY AUTO_INCREMENT NOT NULL,
  student_total BIGINT,
  chapel_total BIGINT,
  attendance_total BIGINT,
  event_total BIGINT
);

INSERT INTO total(id, student_total, chapel_total, attendance_total, event_total)
VALUES(1, 0, 0, 0, 0);