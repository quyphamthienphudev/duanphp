CREATE DATABASE IF NOT EXISTS db2;
USE db2;

CREATE TABLE IF NOT EXISTS sinhvien (
  ma CHAR(10) PRIMARY KEY,
  ten VARCHAR(50) NOT NULL,
  email VARCHAR(50) NOT NULL
);

INSERT INTO sinhvien (ma, ten, email) VALUES
('001', 'Pham Thien Phu Quy', 'dh52201333@student.stu.edu.vn'),
('002', 'Nguyen Van An', 'dh52200308@student.stu.edu.vn');
