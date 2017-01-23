<?php

// http://sqlzoo.net/wiki/Using_Null_Quiz

Q1:
Select the code which uses a JOIN correctly.

Answer:
SELECT teacher.name, dept.name FROM teacher LEFT OUTER JOIN dept ON (teacher.dept > dept.id)

Q2:
Select the correct statement that shows the name of department which employs Cutflower -

Answer:
SELECT dept.name FROM teacher JOIN dept ON (dept.id = teacher.dept) WHERE teacher.name = 'Cutflower'

Q3:
Select out of following the code which uses a JOIN to show a list of all the departments and number of employed teachers

Answer:
SELECT dept.name, COUNT(teacher.name) FROM teacher RIGHT JOIN dept ON dept.id = teacher.dept GROUP BY dept.name

Q4:
Using SELECT name, dept, COALESCE(dept, 0) AS result FROM teacher on teacher table will:

Answer:
display 0 in result column for all teachers without department

Q5:
Query:
SELECT name,
CASE WHEN phone = 2752 THEN 'two'
WHEN phone = 2753 THEN 'three'
WHEN phone = 2754 THEN 'four'
END AS digit
FROM teacher
shows following 'digit':

Answer:
'four' for Throd

Q6:
Select the result that would be obtained from the following code:
SELECT name,
CASE
WHEN dept
IN (1)
THEN 'Computing'
ELSE 'Other'
END
FROM teacher

Answer:
Table-A
Shrivell	Computing
Throd	Computing
Splint	Computing
Spiregrain	Other
Cutflower	Other
Deadyawn	Other
?>
