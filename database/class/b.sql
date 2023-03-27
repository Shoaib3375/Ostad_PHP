Use the departments table to answer the following questions:
a. Write a query to select all columns and rows from the departments table.
b. Write a query to select only the name and manager columns of the "Finance" department.
c. Write a query to calculate the total number of employees in each department.
d. Write a query to insert a new department called "Research" with a manager named "John Doe".

SELECT * FROM departments;
SELECT name, manager FROM departments WHERE name = 'Finance';

SELECT departments.name, COUNT(*) AS total_employees FROM employees JOIN departments ON employees.department_id = departments.id GROUP BY departments.name;

INSERT INTO departments (name, manager) VALUES ('Research', 'John Doe');
