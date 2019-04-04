<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Asgn08</title>
  <link href="../css/style.css" rel="stylesheet">

</head>

<body>
  <h2>Episode 12</h2>
  <p>Learning how to work with Classes.</p>
  
  <ul>
    <?php foreach ($tasks as $task) : ?>
      <li>

        <?php if($task->completed) : ?>
        <strike><?= $task->description; ?></strike>

        <?php else: ?>

        <?= $task->description; ?>
        <?php endif; ?>

      </li>

    <?php endforeach; ?>
  </ul>
  
  
  <a href="../index.php">Home Page</a>
</body>
</html>
