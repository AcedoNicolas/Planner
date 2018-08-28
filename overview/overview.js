$(".taskListElement").on('click', function () {
    let taskListId = $(this).data('value');
    getClickedTasks(taskListId);
});

$(".taskStatus").on('click', function () {
    let taskId = $(this).data('id');
    let taskListStatus = $(this).data('checked');

    $.ajax({
        type: 'POST',
        url: 'update-task-status.php',
        data: {
            taskId: taskId,
            taskListStatus: taskListStatus
        }
    });

    if (taskListStatus == "todo") {
        $(this).addClass('doing').html('doing');

    } else {
        $(this).addClass('todo').html('todo');
    }
});


function getClickedTasks(taskListId) {
    $.ajax({
        type: 'GET',
        url: 'get-selected-tasks.php',
        data: {taskListId: taskListId},
        success: function (response) {
            let returnedTasks = response;
            let taskListBody = '';
            console.log(response);
            if (response.length) {
                returnedTasks.forEach(function (task) {
                    taskListBody +=
                        "<li>\n" +
                        "<form method=\"POST\">\n" +
                        "<div>" + task.name + "</div>\n" +
                        "<input type=\"hidden\"  name=\"deleteTask\" value='" + task.id + "'>\n" +
                        "<input type=\"submit\" value=\"verwijder\"/>\n" +
                        "</form>\n" +
                        "</li>"
                });
            }
            $('.tasks').html(taskListBody);
        }
    })
}