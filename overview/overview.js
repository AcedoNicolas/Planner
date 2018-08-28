$(document).ready(function () {
    $(".taskListElement").on('click', function () {
        let taskListId = $(this).data('value');
        getClickedTasks(taskListId);
    });

});

$(document).on("click", ".taskStatus", function () {
    let taskId = $(this).data('id');
    let taskListStatus = $(this).data('checked');
    console.log(taskId);
    console.log(taskListStatus);
    toggleTaskStatus(taskId, taskListStatus, this);
});

function toggleTaskStatus(taskId, taskListStatus, element) {
    if (taskListStatus === "todo") {
        $(element).data('checked', 'doing').html('doing');
    } else {
        $(element).data('checked', 'todo').html('todo');
    }

    $.ajax({
        type: 'POST',
        url: 'update-task-status.php',
        data: {
            taskId: taskId,
            taskListStatus: taskListStatus
        }
    });
}

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
                        `<li>
                            <form method="POST">
                                <div>${task.name}</div>
                                <div class="taskStatus" 
                                data-checked="${task.status}" name="taskStatus"data-id="${task.id}">
                                ${task.status}
                                </div>
                                <input type="hidden" name="deleteTask" value="<?php echo $task['id'] ?>">
                                <input type="submit" value="verwijder"/>
                            </form>
                         </li>`

                });
            }
            $('.tasks').html(taskListBody);
        }
    })
}