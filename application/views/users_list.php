<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>user account</title>
</head>
<body>

    <?php foreach($users as $user): ?>

    <table>

        <tr>
            <td>    
                <?= $user->firstname?>

            </td>
            <td>
                <?= $user->lastname ?>
            </td>
            <td>    
                <?= $user->email ?>
            </td>
            <td>
                <?= $user->phone ?>
            </td>
        </tr>

        <?php endforeach; ?>
        
    </table>
</body>
</html>