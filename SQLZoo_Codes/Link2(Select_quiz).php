<?php
// http://sqlzoo.net/wiki/SELECT_Quiz

Q.1
Select the code which produces this table
name	population
Bahrain	1234571
Swaziland	1220000
Timor-Leste	1066409

Answer:
SELECT name, population
FROM world
WHERE population BETWEEN 1000000 AND 1250000

Q.2
Pick the result you would obtain from this code:
SELECT name, population
FROM world
WHERE name LIKE "Al%"

Answer:
Table-E
Albania	3200000
Algeria	32900000

Q.3
Select the code which shows the countries that end in A or L

Answer:
SELECT name FROM world
WHERE name LIKE '%a' OR name LIKE '%l'

Q.4
Pick the result from the query
SELECT name,LENGTH(name)
FROM world
WHERE LENGTH(name)=5 AND region='Europe'

Answer:
name	length(name)
Italy	5
Malta	5
Spain	5

Q.5
Here are the first few rows of the world table:
name	region	area	population	gdp
Afghanistan	South Asia	652225	26000000
Albania	Europe	28728	3200000	6656000000
Algeria	Middle East	2400000	32900000	75012000000
Andorra	Europe	468	64000
...
Pick the result you would obtain from this code:
SELECT name, area*2 FROM world WHERE population = 64000

Answer:
Andorra	936

Q.6
Select the code that would show the countries with an area larger than 50000 and a population smaller than 10000000

Answer:
SELECT name, area, population
FROM world
WHERE area > 50000 AND population < 10000000

Q.7
Select the code that shows the population density of China, Australia, Nigeria and France

Answer:
SELECT name, population/area
FROM world
WHERE name IN ('China', 'Nigeria', 'France', 'Australia')


?>
