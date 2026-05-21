drop table if exists positions;
create table positions(
    id int auto_increment primary key,
    name varchar(100)
);
    insert into positions(name) values ("web Developer");
    insert into positions(name) values ("PHP Developer");
    insert into positions(name) values ("JS Developer");

    
CREATE TABLE employees (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    position_id INT,
    salary float,
    hire_date DATE,
    FOREIGN KEY (position_id) REFERENCES positions(id)
);

INSERT INTO employees (name, position_id, salary, hire_date)
VALUES
    ('John Doe', 1, 2500.00, '2023-01-15'),
    ('Jane Smith', 2, 4500.00, '2022-07-10'),
    ('Michael Brown', 3, 2800.00, '2024-03-05');


SELECT *
FROM employees
WHERE salary < 3000;

UPDATE positions
SET name = 'Senior Manager'
WHERE id = 3;


DELETE FROM employees
WHERE id = 2;

INSERT INTO employees (name, position_id, salary, hire_date)
VALUES
    ('Alice Johnson', 1, 2700.00, '2023-02-12'),
    ('Robert Williams', 2, 5200.00, '2021-11-03'),
    ('Emily Davis', 3, 2900.00, '2024-01-25');


DROP VIEW IF EXISTS employee_summary;

CREATE VIEW employee_summary AS
SELECT 
    e.name AS employee_name,
    p.name AS position_name,
    e.salary
FROM employees AS e, positions AS p
WHERE e.position_id = p.id;

DELIMITER //

CREATE PROCEDURE GetEmployeeByPosition (
    IN p_name VARCHAR(100)
)
BEGIN
    SELECT 
        e.id,
        e.name AS employee_name,
        p.name,
        e.salary,
        e.hire_date
    FROM employees e
    JOIN positions p
        ON e.position_id = p.id
    WHERE p.name = p_name;
END //

DELIMITER ;
SHOW CREATE PROCEDURE GetEmployeeByPosition;

CALL GetEmployeeByPosition('Senior Manager');

CREATE TABLE employee_log (
    log_id INT AUTO_INCREMENT PRIMARY KEY,
    employee_id INT,
    action VARCHAR(100),
    action_time TIMESTAMP 
);
drop trigger if exists employee_insert;
create trigger employee_insert 
after insert on employees 
for each row 
insert into employee_log( employee_id,action,action_time)
values (new.id,'insert',CURRENT_TIMESTAMP);

INSERT INTO employees (name, position_id, salary, hire_date)
VALUES ('David Miller', 1, 3200.00, '2025-05-20');

SELECT * FROM employee_log;

select * from employees;