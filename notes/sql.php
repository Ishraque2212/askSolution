<div class="container">
    <h1>SQL Notes</h1>
    <div class="sql-info">
        <h2>Introduction to SQL</h2>
        <p>
            SQL (Structured Query Language) is a standard language for managing relational databases.
            It allows users to create, manipulate, and query data stored in a relational database management system
            (RDBMS).
        </p>
        <h3>Basic SQL Commands:</h3>
        <ul>
            <li>SELECT: Used to retrieve data from a database.</li>
            <li>INSERT: Used to insert new records into a table.</li>
            <li>UPDATE: Used to modify existing records in a table.</li>
            <li>DELETE: Used to delete records from a table.</li>
            <li>CREATE TABLE: Used to create a new table in the database.</li>
            <li>ALTER TABLE: Used to modify an existing table structure.</li>
            <li>DROP TABLE: Used to delete a table from the database.</li>
        </ul>
        <h3>Data Manipulation Language (DML):</h3>
        <p>DML commands are used to manage data within database objects. Includes commands like SELECT, INSERT,
            UPDATE, DELETE.</p>

        <h3>Data Definition Language (DDL):</h3>
        <p>DDL commands are used to define, modify, and remove database objects. Includes commands like CREATE,
            ALTER, DROP.</p>

        <h3>Data Control Language (DCL):</h3>
        <p>DCL commands are used to control access to data within the database. Includes commands like GRANT,
            REVOKE.</p>

        <h3>SQL Constraints:</h3>
        <p>Constraints are rules enforced on data columns to maintain data integrity. Common constraints include
            PRIMARY KEY, FOREIGN KEY, UNIQUE, NOT NULL, CHECK.</p>

        <h3>SQL Joins:</h3>
        <p>Joins are used to combine rows from multiple tables based on a related column between them. Types of
            joins include INNER JOIN, LEFT JOIN, RIGHT JOIN, FULL JOIN.</p>

        <h3>SQL Functions:</h3>
        <p>SQL provides a variety of built-in functions for performing operations on data. Common functions include
            aggregate functions (SUM, AVG, COUNT), string functions (SUBSTRING, CONCAT), date functions (DATEADD,
            DATEDIFF).</p>

        <h3>SQL Indexes:</h3>
        <p>Indexes are used to improve the performance of queries by providing faster data retrieval. Types of
            indexes include clustered indexes and non-clustered indexes.</p>

        <h3>Transactions:</h3>
        <p>Transactions are sequences of SQL statements that are treated as a single unit of work. They ensure data
            integrity by enforcing the ACID properties (Atomicity, Consistency, Isolation, Durability).</p>

        <h3>SQL Views:</h3>
        <p>Views are virtual tables generated from the result of a SELECT query. They provide a way to simplify
            complex queries and restrict access to certain columns or rows.</p>

        <h3>SQL Triggers:</h3>
        <p>Triggers are special types of stored procedures that are automatically executed in response to certain
            events (e.g., INSERT, UPDATE, DELETE) on a table. They are used to enforce business rules, maintain data
            integrity, and perform auditing tasks.</p>

        <h3>SQL Subqueries:</h3>
        <p>Subqueries, also known as nested queries or inner queries, are queries embedded within another query.
            They can be used in SELECT, INSERT, UPDATE, and DELETE statements to provide a more dynamic and flexible
            approach to data retrieval and manipulation.</p>

        <h3>SQL Aggregate Functions:</h3>
        <p>Aggregate functions operate on a set of values and return a single value as output. Examples include SUM,
            AVG, COUNT, MIN, and MAX. These functions are commonly used in combination with the GROUP BY clause to
            perform calculations on groups of data.</p>

        <h3>SQL Group By Clause:</h3>
        <p>The GROUP BY clause is used in conjunction with aggregate functions to group the result set by one or
            more columns. It divides the rows returned by a query into groups and applies aggregate functions to
            each group independently.</p>

        <h3>SQL Having Clause:</h3>
        <p>The HAVING clause is used to filter the results of a GROUP BY clause based on specified conditions. It is
            similar to the WHERE clause but operates on aggregated data rather than individual rows.</p>

        <h3>SQL Case Statement:</h3>
        <p>The CASE statement is a conditional expression that evaluates a list of conditions and returns a value
            based on the first condition that is true. It can be used within SELECT, WHERE, and ORDER BY clauses to
            perform conditional logic.</p>

        <h3>SQL Stored Procedures:</h3>
        <p>Stored procedures are precompiled SQL code blocks that are stored in the database and can be executed
            multiple times. They encapsulate a sequence of SQL statements and can accept input parameters and return
            output values.</p>

        <h3>SQL Cursors:</h3>
        <p>Cursors are database objects used to retrieve and manipulate result sets one row at a time. They are
            commonly used within stored procedures to process query results row by row.</p>

        <h3>SQL Performance Optimization:</h3>
        <p>Techniques such as indexing, query optimization, and database normalization are used to improve the
            performance of SQL queries and database operations.</p>

        <h2>Conclusion</h2>
        <p>
            In conclusion, SQL is a powerful language for interacting with relational databases.
            From basic data retrieval to complex data manipulation and management, SQL provides a comprehensive set
            of features and commands.
            By understanding its syntax and various components such as DML, DDL, constraints, joins, functions,
            indexes, transactions, and more, users can effectively work with databases to store, retrieve, and
            analyze data.
            Whether it's building applications, generating reports, or performing business analytics, SQL remains an
            essential tool for database management and data-driven decision-making.
        </p>
    </div>
</div>