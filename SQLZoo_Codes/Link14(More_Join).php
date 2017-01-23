<?php

// http://sqlzoo.net/wiki/More_JOIN_operations

Q1:
List the films where the yr is 1962 [Show id, title]

Answer:
SELECT id, title
FROM movie
WHERE yr=1962

Q2:
Give year of 'Citizen Kane'.

Answer:
select yr
from movie
where title='Citizen Kane'

Q3:
List all of the Star Trek movies, include the id, title and yr (all of these movies include the words Star Trek in the title). Order results by year.

Answer:
select id,title,yr
from movie
where title like '%Star%Trek%'
order by yr

Q4:
What are the titles of the films with id 11768, 11955, 21191

Answer:
select title
from movie
where id in(11768,11955,21191)

Q5:
What id number does the actress 'Glenn Close' have?

Answer:
select id
from actor
where name = 'Glenn Close'

Q6:
What is the id of the film 'Casablanca'

Answer:
select id
from movie
where title='Casablanca'

Q7:
Obtain the cast list for 'Casablanca'.

what is a cast list?
The cast list is the names of the actors who were in the movie.

Use movieid=11768, this is the value that you obtained in the previous question.

Answer:
select name
from actor,casting
where id= actorid and
movieid=
(select id
from movie
where title='Casablanca')

Q8:
Obtain the cast list for the film 'Alien'

Answer:
select name
from actor,casting
where id= actorid and
movieid=
(select id
from movie
where title='Alien')

Q9:
List the films in which 'Harrison Ford' has appeared

Answer:
select title
from casting join movie
on
casting.movieid=movie.id
and actorid= (select id from actor where name='Harrison Ford')

Q10:
List the films where 'Harrison Ford' has appeared - but not in the starring role. [Note: the ord field of casting gives the position of the actor. If ord=1 then this actor is in the starring role]

Answer:
select title
from casting join movie
on
(casting.movieid=movie.id
and actorid= (select id from actor where name='Harrison Ford')and ord!=1)

Q11:
List the films together with the leading star for all 1962 films.

Answer:
SELECT title, name
FROM movie JOIN casting ON (id=movieid)
JOIN actor ON (actor.id = actorid)
WHERE ord=1 AND  yr = 1962

Q12:
Which were the busiest years for 'John Travolta', show the year and the number of movies he made each year for any year in which he made more than 2 movies.

Answer:
SELECT yr,COUNT(title) FROM
movie JOIN casting ON movie.id=movieid
JOIN actor   ON actorid=actor.id
WHERE name='John Travolta'
GROUP BY yr
HAVING COUNT(title)=(SELECT MAX(c) FROM
(SELECT yr,COUNT(title) AS c FROM
movie JOIN casting ON movie.id=movieid
JOIN actor   ON actorid=actor.id
WHERE name='John Travolta'
GROUP BY yr) AS t)

Q13:
List the film title and the leading actor for all of the films 'Julie Andrews' played in.

Did you get "Little Miss Marker twice"?
Julie Andrews starred in the 1980 remake of Little Miss Marker and not the original(1934).

Title is not a unique field, create a table of IDs in your subquery

Answer:
SELECT title, name FROM movie
JOIN casting x ON movie.id = movieid
JOIN actor ON actor.id =actorid
WHERE ord=1 AND movieid IN
(SELECT movieid FROM casting y
JOIN actor ON actor.id=actorid
WHERE name='Julie Andrews')

Q14:
Obtain a list, in alphabetical order, of actors who have had at least 30 starring roles.

Answer:
SELECT name
FROM actor
JOIN casting ON (id = actorid AND (SELECT COUNT(ord) FROM casting WHERE actorid = actor.id AND ord=1)>=30)
group BY name

Q15:


Q16:
List all the people who have worked with 'Art Garfunkel'.

Answer:
SELECT DISTINCT name
FROM actor JOIN casting ON id=actorid
WHERE movieid IN (SELECT movieid FROM casting JOIN actor ON (actorid=id AND name='Art Garfunkel')) AND name != 'Art Garfunkel'
GROUP BY name




?>
