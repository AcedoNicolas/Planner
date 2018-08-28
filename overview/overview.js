$(".taskListElement").on('click', function () {
    var taskListId = $(this).data('value');

    $.ajax({
        type: 'GET',
        url: 'updateTasks.php',
        data: {taskListId: taskListId},
        success: function (response) {
            for (var item in response) {
                $('.tasks').append(
                    "<li>\n" +
                    "<form method=\"POST\">\n" +
                    "    <i class=\"fa fa-check-square-o\"></i>\n" +
                    "<div>" + item.name + "</div>\n" +
                    "</form>\n" +
                    "</li>"
                )
            }
        }
    })
});