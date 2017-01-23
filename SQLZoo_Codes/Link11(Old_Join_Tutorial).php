<?php

// http://sqlzoo.net/wiki/Old_JOIN_Tutorial

Q1:
Show the athelete (who) and the country name for medal winners in 2000.

ttms(games,color,who,country)
country(id,name)

Answer:
SELECT who, country.name
FROM ttms JOIN country
ON (ttms.country=country.id)
WHERE games = 2000

Q2:
Show the who and the color of the medal for the medal winners from 'Sweden'.

ttms(games,color,who,country)
country(id,name)

Answer:
select ttms.who , ttms.color
from ttms
join country
on ttms.country=country.id
where country.name='Sweden'

Q3:
Show the years in which 'China' won a 'gold' medal.

ttms(games,color,who,country)
country(id,name)

Answer:
select games
from ttms join
country
on ttms.country=country.id
where country.name="China" and ttms.color='gold'

Q4:
Show who won medals in the 'Barcelona' games.

ttws(games,color,who,country)
games(yr,city,country)

Default:
SELECT who, city
FROM ttws JOIN games
ON (ttws.games=games.yr)
WHERE city = 'Seoul'

Answer:
select who from ttws
join games on
ttws.games=games.yr
where games.city='Barcelona'

Q5:
Show which city 'Jing Chen' won medals. Show the city and the medal color.

ttws(games,color,who,country)
games(yr,city,country)

Answer:
select city , color
from ttws join games
on ttws.games=games.yr
where ttws.who='Jing Chen'

Q6:
Show who won the gold medal and the city.

ttws(games,color,who,country)
games(yr,city,country)

Answer:
select who , city
from ttws join games
on ttws.games=games.yr
where ttws.color='gold'

Q7:
Show the games and color of the medal won by the team that includes 'Yan Sen'.

ttmd(games,color,team,country)
team(id,,name)

Answer:
select games,color
from ttmd join
team on
ttmd.team=team.id
where team.name='Yan Sen'

Q8:
Show the 'gold' medal winners in 2004.

ttmd(games,color,team,country)
team(id,,name)

Answer:
select name
from team join
ttmd on
team.id = ttmd.team
where ttmd.color='gold' and ttmd.games=2004

Q9:
Show the name of each medal winner country 'FRA'.
ttmd(games,color,team,country)
team(id,,name)

Answer:
select name
from team join
ttmd on
team.id = ttmd.team
where ttmd.country='FRA'



?>
