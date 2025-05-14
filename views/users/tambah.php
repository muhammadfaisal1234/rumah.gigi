<?php include 'views/layouts/template.php'; ?>

<h2>Tambah User</h2>
<form method="POST">
    <label>Username:</label><br>
    <input type="text" name="username" required><br>
    <label>Password:</label><br>
    <input type="password" name="password" required><br>
    <label>Role:</label><br>
    <select name="role">
        <option value="admin">Admin</option>
        <option value="staff">Staff</option>
    </select><br><br>
    <button type="submit">Simpan</button>
</form>