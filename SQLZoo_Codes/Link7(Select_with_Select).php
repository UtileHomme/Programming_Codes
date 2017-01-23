<?php

// http://sqlzoo.net/wiki/SELECT_within_SELECT_Tutorial

Q1:
List each country name where the population is larger than that of 'Russia'.

world(name, continent, area, population, gdp)

Default:
SELECT name FROM world
WHERE population >
(SELECT population FROM world
WHERE name='Romania')

Answer:
SELECT name FROM world
WHERE population >
(SELECT population FROM world
WHERE name='Russia')

Q2:
Show the countries in Europe with a per capita GDP greater than 'United Kingdom'.

Answer:
select name from world
where continent='Europe' AND GDP/population >
(select GDP/population from world
where name='United Kingdom')

Q3:
List the name and continent of countries in the continents containing either Argentina or Australia. Order by name of the country.

Answer:
select name,continent from world
where continent IN
(Select continent from world
where name IN ('Argentina','Australia'))
order by name

Q4:
Which country has a population that is more than Canada but less than Poland? Show the name and the population.

Answer:
select name, population from world
where (population>
(select population from world
where name='Canada')) AND
(population<
(Select population from world
where name='Poland')
)

Q5:
Germany (population 80 million) has the largest population of the countries in Europe. Austria (population 8.5 million) has 11% of the population of Germany.
Show the name and the population of each country in Europe. Show the population as a percentage of the population of Germany.
Decimal places
You can use the function ROUND to remove the decimal places.
Percent symbol %
You can use the function CONCAT to add the percentage symbol.

Answer:
select name, CONCAT(Round
(population*100/(Select population from world where name='Germany'),0), '%')
from world
where continent='Europe'

//NOTE
We can use the word ALL to allow >= or > or < or <=to act over a list.
For example, you can find the largest country in the world, by population with this query:

Query:
SELECT name
FROM world
WHERE population >= ALL(SELECT population
FROM world
WHERE population>0)

You need the condition population>0 in the sub-query as some countries have null for population.

Q6:
Which countries have a GDP greater than every country in Europe? [Give the name only.] (Some countries may have NULL gdp values)

Answer:
select name from world
where  GDP > ALL(
  Select GDP from
  world where
  gdp>0 and continent='Europe')

  Q7:
  Find the largest country (by area) in each continent, show the continent, the name and the area:

  Default:
  SELECT continent, name, population FROM world x
  WHERE population >= ALL
  (SELECT population FROM world y
  WHERE y.continent=x.continent
  AND population>0)

  Answer:
  SELECT continent, name, area FROM world x
  WHERE area >= ALL
  (SELECT area FROM world y
  WHERE y.continent=x.continent
  AND area>0)

  Q8:
  List each continent and the name of the country that comes first alphabetically.

  Answer:
  select continent, name from world x
  where name <= all
  (select name from world y where x.continent = y.continent
  )

Q9:
Find the continents where all countries have a population <= 25000000. Then find the names of the countries associated with these continents. Show name, continent and population.

Answer:
select name, continent, population from world x
where 25000000  > ALL(SELECT population FROM world y WHERE x.continent = y.continent AND y.population > 0)

Q10:
Some countries have populations more than three times that of any of their neighbours (in the same continent). Give the countries and continents.

Answer:
select name, continent from world x
where population > all
(select 3*population from world y where
x.continent = y.continent and population>0
and y.name!=x.name)


  ?>
