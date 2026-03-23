CREATE TABLE categories (

id INT AUTO_INCREMENT PRIMARY KEY,

name VARCHAR(100) NOT NULL

);



ALTER TABLE library_books
ADD category_id INT;


INSERT INTO categories (name) VALUES
('Programming'),
('Fiction'),
('Science'),
('History');



UPDATE library_books SET category_id = 1 WHERE title LIKE '%Code%';
UPDATE library_books SET category_id = 1 WHERE title LIKE '%PHP%';
UPDATE library_books SET category_id = 2 WHERE title LIKE '%Harry Potter%';
UPDATE library_books SET category_id = 2 WHERE title LIKE '%Hobbit%';
UPDATE library_books SET category_id = 3 WHERE title LIKE '%Science%';
UPDATE library_books SET category_id = 4 WHERE title LIKE '%History%';


SELECT library_books.title, categories.name
FROM library_books JOIN categories
ON library_books.category_id = categories.id;