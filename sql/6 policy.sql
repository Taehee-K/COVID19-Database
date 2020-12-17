CREATE TABLE IF NOT EXISTS policy (
    country varchar(15), 
    country_month char(7), 
    public_transport int(2), 
    school_closure int(2), 
    workplace_closure int(2),
    PRIMARY KEY (country_month),
    FOREIGN KEY (country) REFERENCES confirmed_world(country)
        on delete cascade
        on update cascade, 
    FOREIGN KEY (country_month) REFERENCES time_cases(country_month)
        on delete cascade
        on update cascade 
)ENGINE = INNODB;
describe policy;

INSERT INTO policy VALUES 
('Korea, South', 'KOR-Jan', 0, 0, 0), 
('Korea, South', 'KOR-Feb', 0, 3, 1), 
('Korea, South', 'KOR-Mar', 0, 3, 2), 
('Korea, South', 'KOR-Apr', 0, 3, 2), 
('Korea, South', 'KOR-May', 0, 3, 2), 
('Korea, South', 'KOR-Jun', 0, 3, 2), 
('Korea, South', 'KOR-Jul', 0, 3, 2), 
('Korea, South', 'KOR-Aug', 0, 3, 2), 
('Korea, South', 'KOR-Sep', 0, 1, 2), 
('United States', 'USA-Jan', 0, 0, 0), 
('United States', 'USA-Feb', 0, 0, 0), 
('United States', 'USA-Mar', 1, 3, 3), 
('United States', 'USA-Apr', 1, 3, 3), 
('United States', 'USA-May', 1, 3, 3), 
('United States', 'USA-Jun', 1, 3, 2), 
('United States', 'USA-Jul', 1, 3, 2), 
('United States', 'USA-Aug', 1, 3, 2), 
('United States', 'USA-Sep', 1, 3, 2);

select * from policy
