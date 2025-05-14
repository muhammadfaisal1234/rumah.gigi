<?php include 'views/layouts/template.php'; ?>

<h2>Edit User</h2>
<form method="POST">
    <label>Username:</label><br>
    <input type="text" name="username" value="<?= htmlspecialchars($user['username']) ?>" required><br>
    <label>Password (biarkan kosong jika tidak diubah):</label><br>
    <input type="password" name="password"><br>
    <label>Role:</label><br>
    <select name="role">
        <option value="admin" <?= $user['role'] === 'admin' ? 'selected' : '' ?>>Admin</option>
        <option value="staff" <?= $user['role'] === 'staff' ? 'selected' : '' ?>>Staff</option>
    </select><br><br>
    <button type="submit">Update</button>
</form>