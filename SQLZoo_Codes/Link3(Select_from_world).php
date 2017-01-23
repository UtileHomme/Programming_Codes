<?php

// http://sqlzoo.net/wiki/SELECT_from_WORLD_Tutorial

Q.1
Show the name for the countries that have a population of at least 200 million. 200 million is 200000000, there are eight zeros.

Answer:
SELECT name FROM world
WHERE population>200000000

Q.2
Give the name and the per capita GDP for those countries with a population of at least 200 million.

HELP:How to calculate per capita GDP
per capita GDP is the GDP divided by the population GDP/population

Answer:
SELECT name, GDP/population AS per_capita_GDP
FROM world
WHERE population>=200000000

Q.3
Show the name and population in millions for the countries of the continent 'South America'.
Divide the population by 1000000 to get population in millions.

Answer:
SELECT name, population/1000000
FROM world
WHERE continent='South America'

Q.4
Show the name and population for France, Germany, Italy

Answer:
select name, population
from world
where name in ('France','Germany','Italy')

Q.5
Show the countries which have a name that includes the word 'United'

Answer:
Select name from world
where name like '%United%'

Q.6
Two ways to be big: A country is big if it has an area of more than 3 million sq km or it has a population of more than 250 million.
Show the countries that are big by area or big by population. Show name, population and area.

Answer:
select name, population, area
from world
where area>3000000 or population>250000000

Q.7
Exclusive OR (XOR). Show the countries that are big by area or big by population but not both. Show name, population and area.

Australia has a big area but a small population, it should be included.
Indonesia has a big population but a small area, it should be included.
China has a big population and big area, it should be excluded.
United Kingdom has a small population and a small area, it should be excluded.

//http://stackoverflow.com/questions/30077259/exclude-results-from-an-sql-query-big-by-area-or-population-but-not-both

Answer1:
select name, population, area from world
where (area > 3000000 and population < 250000000) OR
(area < 3000000 and population > 250000000);

Answer2:
SELECT name, population, area
FROM world
WHERE (population > 250000000) XOR (area > 3000000);

Answer3:
SELECT name, population, area
FROM world
WHERE ((population > 250000000) OR (area > 3000000))
AND NOT ((population > 250000000) AND (area > 3000000))

Q.8
Show the name and population in millions and the GDP in billions for the countries of the continent 'South America'. Use the ROUND function to show the values to two decimal places.

For South America show population in millions and GDP in billions both to 2 decimal places.
Millions and billions
Divide by 1000000 (6 zeros) for millions. Divide by 1000000000 (9 zeros) for billions.

Answer:
select name, ROUND(population/1000000,2) , ROUND(GDP/1000000000,2)
from world
where continent = 'South America'

Q.9
Show the name and per-capita GDP for those countries with a GDP of at least one trillion (1000000000000; that is 12 zeros). Round this value to the nearest 1000.
Show per-capita GDP for the trillion dollar countries to the nearest $1000.

Answer:
select name,round(GDP/population,-3)
from world
where GDP>1000000000000

Q.10
The CASE statement shown is used to substitute North America for Caribbean in the third column.
Show the name - but substitute Australasia for Oceania - for countries beginning with N.

Default:
SELECT name, continent,
CASE WHEN continent='Caribbean' THEN 'North America'
ELSE continent END
FROM world
WHERE name LIKE 'J%'

Answer:
SELECT name,
CASE WHEN continent='Oceania' THEN 'Australasia'
ELSE continent END
FROM world
WHERE name LIKE 'N%'

Q.11
Show the name and the continent - but substitute Eurasia for Europe and Asia;
substitute America - for each country in North America or South America or Caribbean. Show countries beginning with A or B

Answer:
select name,
case when continent='Europe' OR continent='Asia'
Then
'Eurasia' when continent='North America' OR continent='South America' OR continent='Caribbean'
then 'America'
else continent
end
from world
where name like 'A%' OR name like 'B%'

Q.12
Put the continents right...

Oceania becomes Australasia
Countries in Eurasia and Turkey go to Europe/Asia
Caribbean islands starting with 'B' go to North America, other Caribbean islands go to South America
Order by country name in ascending order
Test your query using the WHERE clause with the following:
WHERE tld IN ('.ag','.ba','.bb','.ca','.cn','.nz','.ru','.tr','.uk')
Show the name, the original continent and the new continent of all countries.

// http://stackoverflow.com/questions/30195610/what-is-the-solution-to-13th-part-of-select-from-world-tutorial-on-sqlzoo

Answer:
SELECT name AS Country, continent as Continent,
   CASE WHEN continent='Oceania' THEN 'Australasia'
        WHEN continent = 'Eurasia' THEN 'Europe/Asia'
WHEN name='Turkey' THEN 'Europe/Asia'
        WHEN continent='Caribbean' AND name LIKE 'B%' THEN 'North America'
        WHEN continent='Caribbean' AND name NOT LIKE 'B%' THEN 'South America'
        ELSE continent END AS "New Continent"
FROM world
WHERE tld IN ('.ag','.ba','.bb','.ca','.cn','.nz','.ru','.tr','.uk')
ORDER BY Country;



?>
