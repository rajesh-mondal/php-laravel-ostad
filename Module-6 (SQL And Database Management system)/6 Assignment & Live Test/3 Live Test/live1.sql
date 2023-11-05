SELECT o.*, c.name AS customer_name
FROM orders AS o
INNER JOIN customers AS c
ON o.customer_id = c.id;