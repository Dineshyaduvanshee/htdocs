<!-- admin/index.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin List</title>
</head>
<body>

    <h1>Admin List</h1>

    <table>
        <thead>
            <tr>
                <?php foreach ($admins[0] as $key => $value): ?>
                    <th><?= ucfirst($key); ?></th>
                <?php endforeach; ?>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($admins as $admin): ?>
                <tr>
                    <?php foreach ($admin as $value): ?>
                        <td><?= esc($value); ?></td>
                    <?php endforeach; ?>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</body>
</html>
