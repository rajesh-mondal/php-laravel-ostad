SELECT p.*, c.name as category_name
FROM products AS p
LEFT JOIN categories AS c
ON p.category_id = c.id;