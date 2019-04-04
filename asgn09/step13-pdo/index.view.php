<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Asgn09</title>
  <link href="../css/style.css" rel="stylesheet">

</head>

<body>
  <h2>Episode 13</h2>
  <p>Learning how to work with PDO.</p>
  
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
