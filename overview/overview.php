<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Planner</title>
    <link rel="stylesheet" href="../css/overview.css">
    <?php include 'overview-controller.php' ?>
</head>

<body>

<div class="page">
    <div class="pageHeader">
        <div class="title">My Planner</div>
        <div class="userPanel">
            <i class="fa fa-chevron-down"></i>
            <span class="username"><?php echo $user_firstname, ' ', $user_lastname ?></span>
            <img src=Profile.png width="40" height="40"/>
        </div>
    </div>
    <div class="main">
        <div class="nav">
            <div class="menu">
                <div class="title">Navigation</div>
                <ul>
                    <li><i class="fa fa-home"></i>Home</li>
                    <li class="active"><i class="fa fa-tasks"></i>Manage Tasks</li>
                </ul>
            </div>
        </div>
        <div class="view">
            <div class="viewHeader">
                <div class="title">Manage Tasks</div>
                <div class="functions">
                    <a href="../tasklist/add/add.php" class="button active">Add New Task List</a>
                    <a href="../tasks/add/add.php" class="button active">Add New Taks</a>
                    <div class="button inverz"><i class="fa fa-trash-o"></i></div>
                </div>
            </div>
            <div class="content">
                <h2>Tasklist</h2>
                <ul>
                    <li>
                        <form method="POST">
                            <a href="#" class="taskListElement" data-value="0">alle taken</a>
                        </form>
                    </li>

                    <?php if ($tasksList) : ?>
                        <?php foreach ($tasksList as $taskList): ?>
                            <li>
                                <form method="POST">
                                    <i class="fa fa-check-square-o"></i>
                                    <div>
                                        <a href="#" class="taskListElement" data-value="<?php echo $taskList['id'] ?>">
                                            <?php echo $taskList['name'] ?>
                                        </a>
                                    </div>
                                </form>
                            </li>
                        <?php endforeach; ?>
                    <?php else: ?>
                        Geen takenLijsten. Voeg een taakenlijst toe
                    <?php endif; ?>
                </ul>
            </div>
            <div class="content">
                <h2>Tasks</h2>
                <?php if ($tasks) : ?>
                    <ul class="tasks">
                        <?php foreach ($tasks as $task): ?>
                            <li>
                                <form method="POST">
                                    <input type="hidden" name="taskid" value="<?php echo $task['id'] ?>">
                                    <div><?php echo $task['name'] ?></div>
                                    <div class="taskStatus"
                                         data-checked="<?php echo $task['status'] ?>"
                                         name="taskStatus"
                                         data-id="<?php echo $task['id'] ?>">
                                        <?php echo $task['status'] ?>
                                    </div>
                                    <input type="submit" name="deleteTaskBtn" value="verwijder"/>

                                    <h3>Comments</h3>
                                    <?php
                                    $getTaskComments = $mysqli->query("SELECT * FROM comments WHERE taskid='" . $task['id'] . "'");
                                    $comments = mysqli_fetch_all($getTaskComments, MYSQLI_ASSOC);
                                    ?>
                                    <div class="comments">
                                        <?php foreach ($comments as $comment): ?>
                                            <div><i><?php echo $comment['created_date'] ?></i></div>
                                            <div><?php echo $comment['comment'] ?></div>
                                        <?php endforeach; ?>
                                    </div>

                                    <textarea class="commentField" name="comment" cols="30" rows="10"></textarea>
                                    <div class="addCommentBtn" data-taskid="<?php echo $task['id'] ?>">voeg comments toe </div>
                                </form>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                <?php else: ?>
                    Geen takenLijsten. Voeg een taakenlijst toe
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="overview.js"></script>
</body>
</html>