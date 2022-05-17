<?php

use Quickweb\Library\Database\Connection;

require_once 'vendor/autoload.php';

$connection = new Connection();
$stmt = $connection->getInstance()->prepare("SELECT * FROM `epic_story`");
$stmt->execute();
$result = $stmt->get_result();
$logs = $result->fetch_all(MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Quickweb</title>

    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
          crossorigin="anonymous">
</head>

<body>
    <!-- As a link -->
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="index.php">Back to index</a>
    </nav>
    <div class="container">
        <div class="card bg-light mb-3" style="max-width: 50rem;">
            <div class="card-header">Database logs</div>
            <div class="card-body">
                <table class="table">
                    <?php foreach ($logs as $index => $record): ?>
                        <?php if ($index === 0):      ?>
                           <?php foreach ($record as $column => $value): ?>
                                <th><?= $column ?><th>
                            <?php endforeach; ?>
                       <?php endif; ?>
                            <tr>
                                <?php foreach ($record as $column => $value): ?>
                                    <td><?= $value ?><th>
                                <?php endforeach; ?>
                            </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
            integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
            integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
            crossorigin="anonymous"></script>
</body>

</html>
