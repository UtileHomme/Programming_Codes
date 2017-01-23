<?php

// http://sqlzoo.net/wiki/SELECT_from_Nobel_Tutorial

Q1;
Change the query shown so that it displays Nobel prizes for 1950.

Default:
SELECT yr, subject, winner
FROM nobel
WHERE yr = 1960

Answer:
SELECT yr, subject, winner
FROM nobel
WHERE yr = 1950

Q2:
Show who won the 1962 prize for Literature.

Default:
SELECT winner
FROM nobel
WHERE yr = 1960
AND subject = 'Physics'

Answer:
SELECT winner
FROM nobel
WHERE yr = 1962
AND subject = 'Literature'

Q3:
Show the year and subject that won 'Albert Einstein' his prize.

Answer:
select yr, subject
from nobel
where winner='Albert Einstein'

Q4:
Give the name of the 'Peace' winners since the year 2000, including 2000.

Answer:
select winner
from nobel
where subject='Peace' AND yr>=2000

Q5:
Show all details (yr, subject, winner) of the Literature prize winners for 1980 to 1989 inclusive.

Answer:
select * from nobel
where subject='Literature' AND
yr BETWEEN 1980 AND 1989

Q6:
Show all details of the presidential winners:

Theodore Roosevelt
Woodrow Wilson
Jimmy Carter

Default:
SELECT * FROM nobel
WHERE yr = 1970
AND subject IN ('Cookery',
'Chemistry',
'Literature')

Answer:
SELECT * FROM nobel
WHERE winner IN ('Theodore Roosevelt',
'Woodrow Wilson',
'Jimmy Carter')

Q7:
Show the winners with first name John

Answer:
select winner
from nobel
where winner LIKE 'John%'

Q8:
Show the Physics winners for 1980 together with the Chemistry winners for 1984.

Answer:
select * from nobel
where
((subject = 'Physics' AND yr=1980) OR
(subject='Chemistry' AND yr=1984))

Q9:
Show the winners for 1980 excluding the Chemistry and Medicine

Answer:
select * from nobel
where yr=1980 and subject not in('Chemistry','Medicine')

Q10:
Show who won a 'Medicine' prize in an early year (before 1910, not including 1910)
together with winners of a 'Literature' prize in a later year (after 2004, including 2004)

Answer:
select * from nobel
where ((subject='Medicine' AND yr<1910) OR (subject='Literature' AND yr>=2004))


Q12:
Find all details of the prize won by EUGENE O'NEILL
Escaping single quotes
You can't put a single quote in a quote string directly. You can use two single quotes within a quoted string.

Answer:
select * from nobel
where winner ='EUGENE O\'NEILL'

Q13:
Knights in order
List the winners, year and subject where the winner starts with Sir. Show the the most recent first, then by name order.

Answer:
select winner,yr,subject from nobel
where winner like 'Sir%'
order by yr desc,winner

Q14:
The expression subject IN ('Chemistry','Physics') can be used as a value - it will be 0 or 1.
Show the 1984 winners and subject ordered by subject and winner name; but list Chemistry and Physics last.

Answer:
SELECT winner, subject
FROM nobel
WHERE yr=1984
ORDER BY subject IN('Physics','Chemistry'),subject,winner




?>
