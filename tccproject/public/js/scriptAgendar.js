document.addEventListener("DOMContentLoaded", function () {
    var calendarEl = document.getElementById("calendar");
    var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: "dayGridMonth",
        headerToolbar: {
            start: "prev",
            center: "title",
            end: "next",
        },
        locale: "pt-br",
        selectable: true,
        selectHelper: true,
        select: function (start) {
            $("#bookingModal").modal("toggle");
        },
    });
    calendar.render();
});
