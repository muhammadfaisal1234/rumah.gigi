<?php include 'views/layouts/template.php'; ?>

<h2>Daftar Users</h2>
<a href="index.php?page=users&action=tambah">Tambah User</a>
<table border="1" cellpadding="5">
    <tr>
        <th>ID</th>
        <th>Username</th>
        <th>Role</th>
        <th>Aksi</th>
    </tr>
    <?php foreach ($users as $user): ?>
        <tr>
            <td><?= $user['id'] ?></td>
            <td><?= htmlspecialchars($user['username']) ?></td>
            <td><?= htmlspecialchars($user['role']) ?></td>
            <td>
                <a href="index.php?page=users&action=detail&id=<?= $user['id'] ?>">Detail</a> |
                <a href="index.php?page=users&action=edit&id=<?= $user['id'] ?>">Edit</a> |
                <a href="index.php?page=users&action=hapus&id=<?= $user['id'] ?>" onclick="return confirm('Hapus user ini?')">Hapus</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>