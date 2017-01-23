<?php

// http://sqlzoo.net/wiki/Using_Null

Q1:
List the teachers who have NULL for their department.

Why we cannot use =
You might think that the phrase dept=NULL would work here but it doesn't - you can use the phrase dept IS NULL

Answer:
select name
from teacher
where dept is Null

Q2:
Note the INNER JOIN misses the teachers with no department and the departments with no teacher.

Answer:
SELECT teacher.name, dept.name
FROM teacher INNER JOIN dept
ON (teacher.dept=dept.id)

Q3:
Use a different JOIN so that all teachers are listed.

Answer:
SELECT teacher.name, dept.name
FROM teacher left JOIN dept
ON (teacher.dept=dept.id)

Q4:
Use a different JOIN so that all departments are listed.

Answer:
SELECT teacher.name, dept.name
FROM teacher right JOIN dept
ON (teacher.dept=dept.id)

Q5:
Use COALESCE to print the mobile number. Use the number '07986 444 2266' if there is no number given. Show teacher name and mobile number or '07986 444 2266'

Answer:
select name , COALESCE(mobile, '07986 444 2266')
from teacher

Q6:
Use the COALESCE function and a LEFT JOIN to print the teacher name and department name. Use the string 'None' where there is no department.

Answer:
SELECT teacher.name, Coalesce(dept.name, 'None')
FROM teacher left JOIN dept
ON (teacher.dept=dept.id)

Q7:
Use COUNT to show the number of teachers and the number of mobile phones.

Answer:
select count(name),count(mobile)
from teacher

Q8:
Use COUNT and GROUP BY dept.name to show each department and the number of staff. Use a RIGHT JOIN to ensure that the Engineering department is listed.

Answer:
SELECT dept.name,count(teacher.name)
FROM teacher right JOIN dept
ON (teacher.dept=dept.id)
group by dept.name

Q9:
Use CASE to show the name of each teacher followed by 'Sci' if the teacher is in dept 1 or 2 and 'Art' otherwise.

Answer:
select teacher.name,
case when dept.id=1 then 'Sci'
when dept.id=2 then 'Sci'
else 'Art' end
from teacher
left
JOIN dept ON (teacher.dept=dept.id)

Q10:
Use CASE to show the name of each teacher followed by 'Sci' if the teacher is in dept 1 or 2, show 'Art' if the teacher's dept is 3 and 'None' otherwise.

Answer:
select teacher.name,
case when dept.id=1 then 'Sci'
when dept.id=2 then 'Sci'
when dept.id=3 then 'Art'
else 'None' end
from teacher
left
JOIN dept ON (teacher.dept=dept.id)


?>
