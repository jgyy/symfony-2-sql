# Training PHP Symfony - 1: SQL

**Summary:** Following 42 formation course, you will learn to use SQL and ORM (Object-Relational Mapping) in Symfony.  
**Version:** 2

## Table of Contents

1. Foreword
2. General rules
3. Day-specific rules
4. Exercise 00: Database table with SQL
5. Exercise 01: Database table with ORM
6. Exercise 02: Insert and read with SQL
7. Exercise 03: Insert and read with ORM
8. Exercise 04: SQL - delete using request with condition
9. Exercise 05: ORM - delete using request with condition
10. Exercise 06: SQL: update database information
11. Exercise 07: ORM: update database information
12. Exercise 08: SQL - update table structure, create relations
13. Exercise 09: ORM - update table structure, create relations
14. Exercise 10: SQL & ORM - Insert into database from file
15. Exercise 11: SQL - Request with join, sort and condition
16. Exercise 12: ORM - Request with join, sort and condition
17. Exercise 13: ORM - Complete CRUD operations
18. Exercise 14: SQL - Functional injections
19. Submission and peer-evaluation 

## Chapter I: Foreword

One of the most common and challenging tasks for any application involves persisting and reading information to and from a database. Although the Symfony Framework doesn't integrate any component to work with databases, it provides tight integration with a third-party library called Doctrine. Doctrine's sole goal is to give you powerful tools to make database interactions easy and flexible.

## Chapter II: General rules

- Your project must be realized in a virtual machine.
- Your virtual machine must have all the necessary software to complete your project. These softwares must be configured and installed.
- You can choose the operating system to use for your virtual machine.
- You must be able to use your virtual machine from a cluster computer.
- You must use a shared folder between your virtual machine and your host machine.
- During your evaluations you will use this folder to share with your repository.
- Your functions should not quit unexpectedly (segmentation fault, bus error, double free, etc) apart from undefined behaviors. If this happens, your project will be considered non functional and will receive a 0 during the evaluation.
- We encourage you to create test programs for your project even though this work won't have to be submitted and won't be graded.
- Submit your work to your assigned git repository. Only the work in the git repository will be graded.

## Chapter III: Day-specific rules

- Use both annotations and configuration files for defining routes.
- Use controller-defined form types.
- Each displayed page must be properly formatted and should contain DocType, and HTML tags like `html`, `body`, `head`.
- The server used for this day is the one integrated in Symfony. It should be started and stopped using Symfony console commands.
- Only explicit request URLs should render a page without error. The not configured URLs should generate a 404 error.
- The requested URLs should work with and without trailing slash. E.g: both `/ex00` and `/ex00/` must work
- For solving each exercise, you will have to use only SQL, only ORM or both of them. If this condition is not met, no points will be given for your solution.
- Each exercise has to have its own table inside the database.
- The naming of database table should be explicit and correctly given. Eg: if you want to create a table for a model called Person, the database table should be named persons.

If no other explicit information is displayed, you must assume the following versions of languages:
- PHP - Symfony LTS
- HTML 5
- CSS 3

## Exercise 00: Database table with SQL

Turn-in directory: `ex00/`  
Files to turn in: Files and folder from your application  
Allowed functions: All methods

This exercise will help you learn the basic of SQL usage inside of Symfony framework.
The requirements of this exercise are simple:

- Work within the default application bundle
- Create the SQL query which will create a new table inside the database
- Configure database connection
- Create route which will call the generation of table
- No ORM is allowed in this exercise
- The structure of the table should correspond to the given one

The result of this exercise has to be a page which contains a button/link to create the database table and a success/error message regarding the result of the creation.

The database table structure is the following:
- id - integer - primary key
- username - string - unique
- name - string
- email - string - unique
- enable - boolean
- birthdate - datetime
- address - long text

The call to create table should not fail in case the table is already created.

## Exercise 01: Database table with ORM

Turn-in directory: `ex01/`  
Files to turn in: Files and folder from your application  
Allowed functions: All methods

After introducing SQL with Symfony, it's time to move to ORM (Object relational mapping). In this exercise, you will have to create the same table as in Exercise 00. The requirements of this exercise are simple:

- Work within the default application bundle
- Create the corresponding entity to the required structure
- Create route which will call the generation of table
- No SQL is allowed in this exercise
- The structure of the table should correspond to the given one
