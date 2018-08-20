<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Planner</title>
    <link rel="stylesheet" href="../../css/style.css">
</head>

<body>
<form method="POST">
    <input type="hidden" value="1">

    <label for="taskname">Taak Naam</label>
    <input type="text" name="taskname"/>

    <label for="taskdescription">Taak Beschrijving</label>
    <input type="text" name="taskdescription"/>

    <button type="submit">Voeg taak toe</button>
</form>


<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="../js/index.js"></script>

</body>
</html>