<?php

// http://sqlzoo.net/wiki/JOIN_Quiz_2

Q1;
Select the statement which lists the unfortunate directors of the movies which have caused financial loses (gross < budget)

SELECT name
FROM actor INNER JOIN movie ON actor.id = director
WHERE gross < budget

Q2:
Select the correct example of JOINing three tables

Answer:
SELECT *
FROM actor JOIN casting ON actor.id = actorid
JOIN movie ON movie.id = movieid

Q3:
Select the statement that shows the list of actors called 'John' by order of number of movies in which they acted

Answer:
SELECT name, COUNT(movieid)
FROM casting JOIN actor ON actorid=actor.id
WHERE name LIKE 'John %'
GROUP BY name ORDER BY 2 DESC

Q4:
Select the result that would be obtained from the following code:
SELECT title
FROM movie JOIN casting ON (movieid=movie.id)
JOIN actor   ON (actorid=actor.id)
WHERE name='Paul Hogan' AND ord = 1

Answer:
Table-B
"Crocodile" Dundee
Crocodile Dundee in Los Angeles
Flipper
Lightning Jack

Q5:
Select the statement that lists all the actors that starred in movies directed by Ridley Scott who has id 351

Answer:
SELECT name
FROM movie JOIN casting ON movie.id = movieid
JOIN actor ON actor.id = actorid
WHERE ord = 1 AND director = 351

Q6:
There are two sensible ways to connect movie and actor. They are:

Answer:
link the director column in movies with the primary key in actor
connect the primary keys of movie and actor via the casting table

Q7:
Select the result that would be obtained from the following code:
SELECT title, yr
FROM movie, casting, actor
WHERE name='Robert De Niro' AND movieid=movie.id AND actorid=actor.id AND ord = 3

Answer:
A Bronx Tale	1993
Bang the Drum Slowly	1973
Limitless	2011

?>
