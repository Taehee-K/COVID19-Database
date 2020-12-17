/*INSERT:  choose country+month to add data to policy */
insert into policy values(?, ?, ?, ?, ?)


/*UPDATE: total confirmed number of cases of a country*/
update confirmed_world 
set confirmed = ? 
where country = ?

/*DELETE: delete Oceanian countries  !!!button!!!*/
delete from confirmed_world where country = ?

/*SELECT: show continents and their total confirmed cases exceeding the number input by user*/
select continent, sum(confirmed) as total from confirmed_world group by continent having sum(confirmed)>20000000

select continent, country, confirmed, deaths 
from confirmed_world group by continent 
order by deaths 
limit INPUT

/*select country + month to see percentage of confirmed people compared to total population*/
select sum(population) as population
from region_info
where country = USER

select confirmed 
from time_cases 
where month = user


select country, confirmed, deaths 
from confirmed_world
where continent = 'ASIA'
order by deaths desc
limit 5;

/*Type in a Country to see its confirmed cases compared to max confirmed country*/
select country, confirmed, max(confirmed)
from confirmed world, (select country, max(confirmed) from confirmed_world)
where country = 'Korea, South'

select rank() over(order by deaths desc ) as rank, continent, country, confirmed, deaths
from confirmed_world
limit 40;

select country, deaths
from confirmed_world 
where confirmed < (select avg(confirmed) from confirmed_world) and continent = 'ASIA'
order by deaths desc
limit 5

/*comparison of confirmed and death cases to the maximum cases*/
select country, 
confirmed/(select max(confirmed)from confirmed_world) as confirmed_ratio, 
deaths/(select max(deaths) from confirmed_world) as deaths_ratio
from confirmed_world
where country = 'United States'



/*show country and months when public transportation was restricted... etc*/