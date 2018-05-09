DROP DATABASE IF EXISTS roboticsDB;
CREATE DATABASE roboticsDB;
USE roboticsDB;

CREATE TABLE student
(
  studentID INT(5) PRIMARY KEY,
  first_name VARCHAR(20) NOT NULL,
  last_name VARCHAR(20) NOT NULL,
  photoFileName VARCHAR(100) NOT NULL
);

CREATE TABLE arrival_log
(
  entry_stamp INT PRIMARY KEY AUTO_INCREMENT,
  studentID INT(5) NOT NULL,
  arrival_log_date DATE NOT NULL,
  arrival_log_time TIME NOT NULL,
  CONSTRAINT arrival_log_fk
    FOREIGN KEY (studentID) REFERENCES student (studentID)
    ON DELETE CASCADE
);

CREATE TABLE exit_log
(
  exit_stamp INT PRIMARY KEY AUTO_INCREMENT,
  studentID INT(5) NOT NULL,
  exit_log_date DATE NULL,
  exit_log_time TIME NULL,
  CONSTRAINT exit_log_fk
    FOREIGN KEY (studentID) REFERENCES student (studentID)
    ON DELETE CASCADE,
    CONSTRAINT exit_log_fk_arrival_log
      FOREIGN KEY (exit_stamp) REFERENCES arrival_log (entry_stamp)
      ON DELETE CASCADE
);
