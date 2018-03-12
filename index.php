<?php

 require_once("init.php");

 $sql = "SELECT * FROM tasks";
 $tasks = $db->query($sql);

?>


<!DOCTYPE html>
<html>
  <head>
    <link href="style.css" type="text/css" rel="stylesheet">
    <title>ToDo List</title>
  </head>

  <body>
    <table>
      <thead>
        <th class="header">ToDo List.</th>
        <tr>
          <th>Задача</th>
          <th>Завершить</th>
          <th>Удалить</th>
        </tr>
      </thead>

      <tbody>
        <?php foreach($tasks as $task): ?>
          <tr>
            <?php if(!$task['done']): ?>
              <td><?php echo $task['name'] ?></td>
              <td align="center"><a class="mark" href="mark.php?mark_task=<?php echo $task['id']; ?>"></a></td>
            <?php else: ?>
              <td class="done"><?php echo $task['name'] ?></td>
              <td></td>
            <?php endif; ?>
              <td align="center"><a class="delete" href="delete.php?del_task=<?php echo $task['id']; ?>"></a></td>
          </tr>
        <?php endforeach; ?>
        <tr><td colspan=3"">
          <form method="POST" action="add.php">
            <input type="text" name="name" class="submit" placeholder="Новая задача" required>
            <input type="submit" value="Добавить задачу" class="submit">
          </form>
        </td></tr>
      </tbody>
    </table>
  </body>
</html>
