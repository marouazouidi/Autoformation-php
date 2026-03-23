-- Total Inventory Value
SELECT SUM(price) AS price_books 
FROM `library_books`;



-- Stock Count
SELECT COUNT(*) AS Total 
FROM `library_books` 
WHERE status = 'Available';



-- Price Extremes:
SELECT MAX(price) AS Expensive_books , MIN(price) AS Cheapest_books 
FROM `library_books`;



-- Average Cost
SELECT AVG(price) AS Average_price 
FROM `library_books`;
