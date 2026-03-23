-- The Catalog

SELECT title, author, price
FROM library_books;


-- The Budget Filter

SELECT *
FROM library_books
WHERE price BETWEEN 100 AND 300;


-- The Modernist

SELECT *
FROM library_books
WHERE published_year > 2020;


-- The Search Bar

SELECT *
FROM library_books
WHERE title LIKE '%PHP%';


-- The Availability Check

SELECT *
FROM library_books
WHERE status != 'Lost'
ORDER BY published_year DESC;


-- The Author Audit

SELECT DISTINCT author
FROM library_books;


-- The Formatting

SELECT UPPER(title) AS title, ROUND(price) AS price
FROM library_books;