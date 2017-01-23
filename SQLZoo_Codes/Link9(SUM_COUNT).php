<?php

// http://sqlzoo.net/wiki/SUM_and_COUNT

Q1:
Show the total population of the world.
world(name, continent, area, population, gdp)

Answer:
SELECT SUM(population)
FROM world

Q2:
List all the continents - just once each.

Answer:
select distinct(continent)
from world

Q3:
Give the total GDP of Africa

Answer:
select sum(GDP) from world
where continent = 'Africa'

Q4:
How many countries have an area of at least 1000000

Answer:
select count(name) from world
where area>1000000

Q5:
What is the total population of ('France','Germany','Spain')

Answer:
select sum(population)
from world
where name in ('France','Germany','Spain')

Q6:
For each continent show the continent and number of countries.

Answer:
select continent, count(name)
from world
group by continent

Q7:
For each continent show the continent and number of countries with populations of at least 10 million.

Answer:
select continent , count(name)
from world
where population>10000000
group by continent

Q8:
List the continents that have a total population of at least 100 million.

Answer:
select continent
from world
group by continent
having sum(population)>100000000



 ?>
