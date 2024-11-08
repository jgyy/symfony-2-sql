# Training PHP Symfony - 1: SQL

**Summary:** Following 42 formation course, you will learn to use SQL and ORM (Object-Relational Mapping) in Symfony.  
**Version:** 2

```sh
symfony new . -version=lts
rm -rf .git
symfony server:start
```

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

Hint: entity generation and database table creation can be made using doctrine ORM commands. The commands can be found by typing `php appconsole doctrine` inside the terminal. Also, these terminal commands can be called inside Symfony controllers.

## Exercise 02: Insert and read with SQL

Turn-in directory: `ex02/`  
Files to turn in: Files and folder from your application  
Allowed functions: All methods

Using your previously gained knowledge, you should now be able to make other operations from the CRUD packet. Lets start with Insert and Read.

This exercise will help you gain knowledge about mapping information from website forms to SQL queries. The requirements of this exercise are:

- Work within the default application bundle
- Create a separate table for this exercise, using the same structure as in the previous exercises
- This exercise will be solved using only SQL, no ORM allowed
- Create a Symfony form and a show form action in the controller
- Create a controller endpoint for handling the information submitted from the form
- Make sure the unique fields will not throw exceptions on insert
- Create a webpage containing an HTML table in which to show the database content

Neither the call to create table, nor the insert of data should fail in case the table is already created or the data is already present in the table.

## Exercise 03: Insert and read with ORM

Turn-in directory: `ex03/`  
Files to turn in: Files and folder from your application  
Allowed functions: All methods

Moving back to ORM, the operations presented in the last exercise can be implemented using only Symfony Doctrine ORM specific commands. For Insert and Read with ORM, the list of requirements are the following:

- Work within the default application bundle
- Create a new entity with its own independent table, using the same structure as in the previous exercises
- This exercise will be solved using only Doctrine ORM
- Create a Symfony form and map it to the entity created earlier
- Create specific endpoints in the controller for Show form, handle inserted data and view the existing data from the database
- Make sure the unique fields will not throw exceptions on insert
- Create a webpage containing an HTML table in which to show the database content
- The form should contain validation
- The ORM commands should not be handled in the controller

Neither the call to create table, nor the insert of data should fail in case the table is already created or the data is already present in the table.

The final version of this exercise should allow the user to insert information into the database using the provided form and see the list of all entities from the database.

Hint: for doctrine commands, you can see the list by running `php appconsole doctrine` in the command line.

## Exercise 04: SQL - delete using request with condition

Turn-in directory: `ex04/`  
Files to turn in: Files and folder from your application  
Allowed functions: All methods

Continuing with the CRUD specific operations, we get now to the point of Delete. For this exercise, using only SQL and PHP code, you will have to write a Symfony specific bundle which will handle this kind of operation. The delete should be made using an endpoint of the application which accepts a conditioned request, something like `/delete/?id=` or `/delete/{id}`, where the id would represent an unique identifier of the object to be deleted.

The requirements of this exercise are the following:
- Work within the default application bundle
- Create a separate table for this exercise
- Create a controller method which has a route with parameter for deleting information
- Create SQL code for deleting information from the database
- Check if an item exists in the database
- Design an HTML page in which to show the existing information from the database in an HTML table and add the button for deleting each specific row
- Use only SQL code for deleting information from the database, no ORM allowed
- Add a success/error message on the designed webpage for representing the obtained result of the operation

## Exercise 05: ORM - delete using request with condition

Turn-in directory: `ex05/`  
Files to turn in: Files and folder from your application  
Allowed functions: All methods

For achieving CRUD in Symfony, ORM provides also methods for deleting entities from the database. This exercise will help you find the way of using delete option in Doctrine ORM. Following the requirements of the last exercise, you will have to implement the Delete option using only ORM. More precisely, the following requirements must be met:

- Work within the default application bundle
- Create a new entity specialized for this exercise. You can take the structure from exercise 00 as an example
- Create a controller method which has a route with a parameter for deleting information
- Check if an item exists in the database
- Design an HTML page in which to show the existing information from the database in an HTML table and add the button for deleting each specific row
- Use only ORM commands for deleting information from the database
- Add a success/error message on the designed webpage for representing the obtained result of the operation

## Exercise 06: SQL: update database information

Turn-in directory: `ex06/`  
Files to turn in: Files and folder from your application  
Allowed functions: All methods

The last element from the CRUD package is Update. For this exercise, using only SQL and PHP code, you will build, in Symfony framework, a bundle that is capable of updating an existing entity. To be more precise, each entity is mapped to at least a table from the database, so, in conclusion, you will have to update the tables from the database.

In order to solve this exercise, you will have to respect the following conditions:
- Work within the default application bundle
- Create a separate table in the database for this exercise. You can use as guideline the structure from ex00
- Create a webpage for displaying the entities that exist in the database using a table
- For each element from the webpage table, add a button for "Update", which will take the user to the edit page
- Create a form which will be autocompleted with the entity details and will allow the user to change each of the fields
- Design a controller with required methods for listing and updating entities from the database
- Use only SQL code for handling database updates, no ORM allowed
- No validation or conditions are required (unique fields, correct inserted values, etc)
- Display a success/error message on the list page, after updating an entity

In the final version, this exercise will provide the option to update existing information from the database. By designing it, you will have completed the CRUD operations using SQL.

## Exercise 07: ORM: update database information

Turn-in directory: `ex07/`  
Files to turn in: Files and folder from your application  
Allowed functions: All methods

Since each of the CRUD operations were implemented using both SQL and ORM, this exercise will reflect the usage of Update in ORM. For solving this exercise, you will have to design a new Symfony bundle capable of displaying and updating information from the database. Due to the usage of ORM, the database is reflected in PHP code using entities. In conclusion, the next requirements must be satisfied in order to solve this exercise:

- Work within the default application bundle
- Create a new Doctrine entity (you can use the structure from the previous exercises) mapped to a new table in the database
- Design an HTML webpage table in which to show the existing information from the database
- Develop a Symfony Form mapped to the entity created earlier
- Create controller methods capable of handling the list, display and update of entities
- No validations are required for this exercise
- Only ORM commands must be used for modifying information in the database
- Return a success/error message based on operation result

## Exercise 08: SQL - update table structure, create relations

Turn-in directory: `ex08/`  
Files to turn in: Files and folder from your application  
Allowed functions: All methods

Congratulations! You have finished the CRUD operations using both SQL and ORM. Now you should be able to implement the CRUD operations using both options, without hesitation. But, due to the fact that project specification could change, a developer should also know how to change the database structure and, most important, how to create relations between database tables.

As you may already know, in relational databases, we have 3 types of relationships between tables:
- One-to-one, example: one wheel has one tyre and viceversa
- One-to-many, example: one car has one owner, one owner could own several cars
- Many-to-many, example: one order can have several products, one product could belong to several orders

For this exercise, you have to design a Symfony bundle which is able to create a table with given structure, alter that table and add a new column and also create two relationships for two other tables (to be created) using foreign keys.

More detailed, the next requirements have to be met, in order to solve this exercise:
- Work within the default application bundle
- Design the SQL code required for creating and altering a table and making relationships between tables
- Create the initial table (named persons) using the structure from ex00, but don't add the address field. The table creation should be made using a link in the homepage and a success/error message should be displayed
- Create a new controller method which will add a new column to the designed table (ex: column marital_status:ENUM(single, married, widower))
- Create a new controller method for creating two new tables: bank_accounts and addresses. You have the freedom of designing the structure of these two tables
- Create a one-to-one relationship between bank_accounts and person table and a one-to-many relation
- Use only SQL for creating tables and relations
- For each operation (create table, alter tables, create relations between tables) return a success/error message

## Exercise 09: ORM - update table structure, create relations

Turn-in directory: `ex09/`  
Files to turn in: Files and folder from your application  
Allowed functions: All methods

For achieving the scope of this day, one important exercise should be done using both SQL and ORM techniques. It is now the time to update an entity and create relationships between entities using ORM. As stated in the previous exercise, there are 3 types of relations between entities (tables). One difference is that, in Symfony, these relations are made between entities and reflected in the database by automatically mapping foreign keys between tables (or creating connection tables for the many-to-many relation).

In order to achieve the final result, you have to accomplish the following requirements:

- Work within the default application bundle
- Create an initial entity using the structure defined in the previous exercises (Person entity structure)
- Add a new field (as required in the previous exercise) on the entity and update the database table
- Create two new entities (BankAccount and Address) and make bidirectional relationships between those and Person entity
- Use only ORM commands and instructions for handling the database structure
- Create controller methods for handling the creation, update and relationships management

Note: since Doctrine doesn't provide ways to alter the table and have a trace on it, you will have to use Doctrine migrations to add a new column on the table.

## Exercise 10: SQL & ORM - Insert into database from file

Turn-in directory: `ex10/`  
Files to turn in: Files and folder from your application  
Allowed functions: All methods

Nowadays, the provider of the information to be stored can be of several types: human input, data received using calls to external web services, auto-generated data or even information read from files. In this exercise, the main focus is to store information obtained by reading files.

For this exercise, you will have to propose a solution that will use both SQL and ORM at the same time. The requirements for this exercise are:

- Work within the default application bundle
- Create a new database table for SQL and a new entity (with related table) for ORM
- Design a controller method which will read a file content and insert it into both SQL table and ORM related table
- The controller method could be called from a link in a webpage. The information then should be visible into a table on a HTML page
- Ensure that the information is correctly stored and no fields are lost during the reading - writing operation

This exercise has to be solved using both SQL and ORM.

Hint: ensure that the file you want to read information from has the correct permission rights.

## Exercise 11: SQL - Request with join, sort and condition

Turn-in directory: `ex11/`  
Files to turn in: Files and folder from your application  
Allowed functions: All methods

Since these days, website are more complex than simple HTML pages, when using a database for providing information, sorting and conditional requests are very common. Also, due to database design principles, join between tables have to be made, in order for the user to have the required information. As an example, think of an e-commerce website: for a client to search for a specific product based on its type, category and color, the website backend has to make a join between the category and product tables, but also filter the result based on product color and type. In addition, if the client wants to order the list based on price, in ascending order, a sorting of the information read from the database has to be made.

For this exercise, the requirements are the following:

- Work within the default application bundle
- For this exercise, you can use the database tables designed in exercise 09, due to already existing relations (you can use one-to-one relations)
- Design an HTML webpage with a table in which to present the information stored in the database table
- In the HTML table, add a form with filtering and sorting (eg: filter by date, sort by name)
- Create required methods in the controller for handling the listing and generating the result after applying the created request with filtering and sorting
- Make sure that the information displayed in the HTML table is fetched from more than one table
- Use only SQL for making calls to the database
- For the request of information from the database, make sure to use join, condition, sort. If one is missing, no points will be given for this exercise!
- Add validations for parameters of the request

## Exercise 12: ORM - Request with join, sort and condition

Turn-in directory: `ex12/`  
Files to turn in: Files and folder from your application  
Allowed functions: All methods

As you may already thought, since the last exercise represents an important part of a web application, the requirements of this exercise are based on the same idea. The big difference is that, this time, you will have to use only ORM methods for achieving the required result.

In addition to the requirements of the last exercise, the following ideas have to be respected:

- Work within the default application bundle
- You can use the entities created in exercise 09, with one-to-one relationships between them
- Make sure to create special repository queries for fetching desired information
- Add validations for the parameters of the request

## Exercise 13: ORM - Complete CRUD operations

Turn-in directory: `ex13/`  
Files to turn in: Files and folder from your application  
Allowed functions: All methods

Good job, you're almost at the end of this day. But, before you finish it, you will do two cool exercises. This exercise will reflect all the knowledge you gained by solving the previous exercises. The main idea is to implement all the operations represented in CRUD, using only ORM commands.

The requirements that have to be met for this exercise are the following:

- Work within the default application bundle
- Create a new entity of Employee type, which will respect the following structure:
  - id - integer
  - firstname - string
  - lastname - string
  - email - string
  - birthdate - datetime
  - active - boolean
  - employed_since - datetime
  - employed_until - datetime
  - hours - ENUM (8,6,4)
  - salary - integer
  - position - ENUM(manager, account_manager, qa_manager, dev_manager, ceo, coo, backend_dev, frontend_dev, qa_tester)
- Create a one-to-many relationship between Employee entity and itself, representing the manager of an employee (each employee should have a manager - a person responsible)
- Implement a read endpoint, edit endpoint, delete endpoint and creation endpoint for the Employee entity
- The form for creating/editing an entity should contain different types of validations, based on the field type (ensure that some of them are required, unique, email has correct format, etc)
- Success/error messages should be created for each operation
- The application should not crash when requests are not correct (eg: deleting inexistent information, trying to insert duplicates, etc)

## Exercise 14: SQL - Functional injections

Turn-in directory: `ex14/`  
Files to turn in: Files and folder from your application  
Allowed functions: All methods

As promised, this is the last exercise of this day, but it will be one of the most interesting. Maybe you have heard of the term SQL injection, but you never tried to create one. This exercise will prove the vulnerability of SQL and HTML forms without validations inside a website. An SQL injection represents a technique used to attack websites and run different SQL queries (get specific field values, change information, drop information, drop database) over the database, using unprotected form fields.

For this exercise, the following requirements have to be met:

- Work within the default application bundle
- Create a controller method which will insert a new table into the database, if the table does not exist already
- The table status should be reflected in the webpage using a specific message ("Table exists" vs "Table does not exist")
- Create an HTML form in a webpage, mapped to a controller action, to insert information into the database
- Add a functional SQL injection using Javascript, on the form submit event
- The result of the SQL injection should be visible in the homepage or, if altering of information is done, the result should be visible in a listing of the database information

## Submission and peer-evaluation

Turn in your assignment in your Git repository as usual. Only the work inside your repository will be evaluated during the defense. Don't hesitate to double check the names of your folders and files to ensure they are correct.

The evaluation process will happen on the computer of the evaluated group.
