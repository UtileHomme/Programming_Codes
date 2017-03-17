<?php

// http://sqlzoo.net/wiki/SELECT_names

Q1:
You can use WHERE name LIKE 'B%' to find the countries that start with "B".

The % is a wild-card it can match any characters
Find the country that start with Y

Answer:
SELECT name FROM world
WHERE name LIKE 'Y%'

Q2:
Find the countries that end with y

Answer:
SELECT name FROM world
  WHERE name LIKE '%y'

Q3:
Luxembourg has an x - so does one other country. List them both.

Find the countries that contain the letter x

Answer:
SELECT name FROM world
  WHERE name LIKE '%x%'

Q4:
Iceland, Switzerland end with land - but are there others?

Find the countries that end with land

Answer:
SELECT name FROM world
  WHERE name LIKE '%land'

Q5:
Columbia starts with a C and ends with ia - there are two more like this.

Find the countries that start with C and end with ia

Answer:
SELECT name FROM world
  WHERE name LIKE 'C%ia'

Q6:
Greece has a double e - who has a double o?

Find the country that has oo in the name

Answer:
SELECT name FROM world
  WHERE name LIKE '%oo%'

Q7:
Bahamas has three a - who else?

Find the countries that have three or more a in the name

Answer:
SELECT name FROM world
  WHERE name LIKE '%a%a%a%'

Q8:
India and Angola have an n as the second character. You can use the underscore as a single character wildcard.

SELECT name FROM world
 WHERE name LIKE '_n%'
ORDER BY name
Find the countries that have "t" as the second character.

Answer:
SELECT name FROM world
 WHERE name LIKE '_t%'
ORDER BY name

Q9:
Lesotho and Moldova both have two o characters separated by two other characters.

Find the countries that have two "o" characters separated by two others.

Answer:
SELECT name FROM world
 WHERE name LIKE '%o__o%'

Q10:
Cuba and Togo have four characters names.

Find the countries that have exactly four characters.

Answer:
SELECT name FROM world
 WHERE name LIKE '____'

Q11:
The capital of Luxembourg is Luxembourg. Show all the countries where the capital is the same as the name of the country

Find the country where the name is the capital city.

Answer:
SELECT name
  FROM world
 WHERE name LIKE capital

Q12: - Important
The capital of Mexico is Mexico City. Show all the countries where the capital has the country together with the word "City".

Find the country where the capital is the country plus "City".

Answer:
SELECT name
  FROM world
 WHERE capital LIKE CONCAT(name, ' City')

Q13: - Important
Find the capital and the name where the capital includes the name of the country.

Answer:
SELECT capital, name
from world
WHERE capital LIKE concat('%', name , '%')

Q14: - Important
Find the capital and the name where the capital is an extension of name of the country.
You should include Mexico City as it is longer than Mexico. You should not include Luxembourg as the capital is the same as the country.

Answer:
SELECT name,capital
from world
WHERE capital LIKE concat(name , '_%')

Q15: - Important
For Monaco-Ville the name is Monaco and the extension is -Ville.
Show the name and the extension where the capital is an extension of name of the country.
You can use the SQL function REPLACE.

Answer:
SELECT name, REPLACE(capital, name, '')
// the string to replace in , what to replace in the string, what to replace with
from world
WHERE capital LIKE concat(name , '_%_')
 ?>
