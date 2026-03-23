-- Status Report
SELECT status ,COUNT(*) AS total_books 
FROM `library_books` 
GROUP BY status;


-- Author Performance
SELECT author, SUM(price) AS total_value 
FROM `library_books` 
GROUP BY author;


-- The Filter
SELECT author, SUM(price) AS total_value 
FROM `library_books` GROUP BY author 
HAVING total_value > 500;
