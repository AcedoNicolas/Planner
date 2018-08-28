$(".taskListElement").on('click', function () {
    let taskListId = $(this).data('value');
    getClickedTasks(taskListId);
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
                     "<div>"+ task.name +"</div>\n" +
                     "<input type=\"hidden\"  name=\"deleteTask\" value='"+ task.id +"'>\n" +
                     "<input type=\"submit\" value=\"verwijder\"/>\n" +
                     "</form>\n" +
                     "</li>"
                });
            }
            $('.tasks').html(taskListBody);
        }
    })
}