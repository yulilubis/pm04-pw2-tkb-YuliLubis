<?php
class Product
{
private PDO $db;
public function __construct(PDO $db)
{
$this->db = $db;
}
public function all()
{
$stmt = $this->db->query(
"SELECT * FROM products ORDER BY id DESC"
);
return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
}