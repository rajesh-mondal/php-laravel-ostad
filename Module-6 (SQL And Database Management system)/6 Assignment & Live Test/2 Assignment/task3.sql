SELECT c.name AS category_name, SUM(oi.quantity * oi.unit_price) AS total_revenue
FROM categories c
LEFT JOIN products p ON c.id = p.category_id
LEFT JOIN order_items oi ON p.id = oi.product_id
GROUP BY c.name
ORDER BY total_revenue DESC;