<?php
	include '../config/config.php';
	$query = mysqli_query($koneksi, "SELECT users.id_user, users.username, orders.id_order, orders.subtotal   FROM users INNER JOIN orders ON users.id_user = orders.id_user");
?>