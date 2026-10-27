CREATE DATABASE CollegeDB;
USE CollegeDB;
CREATE TABLE Student(
Rno INT,
Sname VARCHAR(15),
cOURSEID INT 
); 
CREATE TABLE Course(
Courseid INT,
Cname VARCHAR(10)
);
INSERT INTO Student VALUES
(1,'RAMESH',101),
(2,'Priya',102),
(3,'Suresh',103);
SELECT *FROM Student; 

INSERT INTO Course VALUES
(101,'BCA'),
(102,'BCom'),
(103,'BSc');
SELECT*FROM Course;

SELECT Student.Rno,Student.Sname,
Course.Courseid,Course.Cname
FROM Student
INNER JOIN Course
ON Student.Courseid=Course.Courseid; 
SELECT Student.Rno,Student.Sname,
Course.Courseid,Course.Cname
FROM Student
LEFT OUTER JOIN Course
ON Student.Courseid=Course.Courseid; 
SELECT Student.Rno,Student.Sname,
Course.Courseid,Course.Cname
FROM Student
RIGHT OUTER JOIN Course
ON Student.Courseid=Course.Courseid;
SELECT Student.Rno,Student.Sname,
Course.Courseid,Course.Cname
FROM Student
LEFT JOIN Course
ON Student.Courseid=Course.Courseid; 
SELECT Student.Rno,Student.Sname,
Course.Courseid,Course.Cname
FROM Student
RIGHT  JOIN Course
ON Student.Courseid=Course.Courseid;
SELECT Student.Rno,Student.Sname,
Course.Courseid,Course.Cname
FROM Student
CROSS  JOIN Course;
