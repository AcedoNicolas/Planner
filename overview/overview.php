<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Planner</title>
    <link rel="stylesheet" href="../css/style.css">
    <?php include '../config/session.php' ?>
</head>

<body>

<div class="page">
    <div class="pageHeader">
        <div class="title">My Planner</div>
        <div class="userPanel">
            <i class="fa fa-chevron-down"></i>
            <span class="username"><?php echo $user_firstname  , ' ' , $user_lastname ?></span>
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
                    <a href="../tasks/add/add.php" class="button active">Add New Task</a>
                    <div class="button">Add New List</div>
                    <div class="button inverz"><i class="fa fa-trash-o"></i></div>
                </div>
            </div>
            <div class="content">
                <div class="list">
                    <div class="title">School Stuff</div>
                    <ul>
                        <li class="checked"><i class="fa fa-check-square-o"></i><span>Php exam</span>
                            <div class="info">
                                <div class="button green">In progress</div>
                                <span>Complete by 29/08/2018</span>
                            </div>
                        </li>
                        <li><i class="fa fa-square-o"></i><span>Design a new logo</span>
                            <div class="info">
                                <div class="button">Pending</div>
                                <span>Complete by 15/09/2019</span>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="list">
                    <div class="title">Daily stuff</div>
                    <ul>
                        <li>
                            <i class="fa fa-square-o"></i><span>Buy shampoo for mom</span>
                            <div class="info">
                                <div class="button">Done</div>
                                <span>Completed by 31/07/2019</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="../js/index.js"></script>
</body>
</html>