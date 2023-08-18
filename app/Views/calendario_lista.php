<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendiario Lista</title>
</head>

<body>
    <div>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>start_date</th>
                    <th>end_date</th>
                    <th>text</th>
                    <th>details</th>
                    <th>Nota</th>
                </tr>
            </thead>

            <tbody>
                <?php if ($citas) : ?>
                    <?php foreach ($citas as $cita) : ?>
                        <tr>
                            <td><?php echo $cita['id'] ?> </td>
                            <td><?php echo $cita['start_date'] ?> </td>
                            <td><?php echo $cita['end_date'] ?> </td>
                            <td><?php echo $cita['text'] ?> </td>
                            <td><?php echo $cita['details'] ?> </td>
                            <td><?php echo $cita['calendar'] ?> </td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>

            </tbody>
        </table>
    </div>
</body>

</html>