CREATE TABLE time_cases (
    country_month char( 7 ) NOT NULL ,
    country VARCHAR(15) NOT NULL ,
    month INT(2) NOT NULL ,
    confirmed INT( 8 ) NOT NULL ,
    deaths INT( 7 ) NOT NULL ,
    PRIMARY KEY (country_month)
    ) ENGINE = INNODB;
describe time_cases;

INSERT INTO time_cases VALUES 
 ('KOR-Jan', 'Korea', 1, 11, 0),
 ('KOR-Feb', 'Korea', 2, 3150, 16),
 ('KOR-Mar', 'Korea', 3, 9786, 162),
 ('KOR-Apr', 'Korea', 4, 10774, 248),
 ('KOR-May', 'Korea', 5, 11503, 271),
 ('KOR-Jun', 'Korea', 6, 12850, 282),
 ('KOR-Jul', 'Korea', 7, 14336, 301),
 ('KOR-Aug', 'Korea', 8, 20182, 324),
 ('KOR-Sep', 'Korea', 9, 23889, 415),
 ('KOR-Oct', 'Korea', 10, 26635, 466),
 ('USA-Jan', 'United States',1, 8, 0),
 ('USA-Feb', 'United States',2, 3341, 1),
 ('USA-Mar', 'United States',3, 192101, 5252),
 ('USA-Apr', 'United States',4, 1076104, 65930),
 ('USA-May', 'United States',5, 1794196, 107614),
 ('USA-Jun', 'United States',6, 2628321, 127753),
 ('USA-Jul', 'United States',7, 4549671, 154047),
 ('USA-Aug', 'United States',8, 6012569, 183616),
 ('USA-Sep', 'United States',9, 7213255, 207106),
 ('USA-Oct', 'United States',10, 9122666, 230817);

 select * from time_cases;

CREATE INDEX time_index
ON time_cases (country, month);