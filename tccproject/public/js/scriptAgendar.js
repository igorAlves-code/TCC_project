document.addEventListener("DOMContentLoaded", function () {
    let form = document.querySelector("form");
    var calendarEl = document.getElementById("calendar");
    var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: "dayGridMonth",
        headerToolbar: {
            start: "prev",
            center: "title",
            end: "next",
        },
        events: "",
        locale: "pt-br",
        selectable: true,
        selectHelper: true,
        select: function (start) {
            $("#newScheduling").modal("toggle");
        },
    });
    calendar.render();

    document.getElementById("env").addEventListener("click", function () {
        const dados = new FormData(form);
        axios.post("http://127.0.0.1:8000/agendar/enviar", dados);
    });
});
