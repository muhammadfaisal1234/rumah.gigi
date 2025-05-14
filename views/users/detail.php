<?php include 'views/layouts/template.php'; ?>

<h2>Detail User</h2>
<p><strong>ID:</strong> <?= $user['id'] ?></p>
<p><strong>Username:</strong> <?= htmlspecialchars($user['username']) ?></p>
<p><strong>Role:</strong> <?= htmlspecialchars($user['role']) ?></p>
<a href="index.php?page=users">Kembali</a>