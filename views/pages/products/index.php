<h1>Daftar Produk</h1>
<table border="1" cellpadding="8">
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Harga</th>
        <th>Stock</th>
    </tr>
    <?php foreach ($products as $product): ?>
    <tr>
        <td><?= $product['id'] ?></td>
        <td><?= htmlspecialchars($product['name']) ?></td>
        <td><?= $product['price'] ?></td>
        <td><?= $product['stock'] ?></td>
    </tr>
    <?php endforeach; ?>
</table>
