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
        weekends: false,
        selectHelper: true,
        select: function (info) {
            $("#newScheduling").modal("toggle");
            $("#newScheduling #start").val(info.startStr);
            let data_americana = info.startStr;
            let data_brasileira = data_americana.split("-").reverse().join("/");
            $("#newScheduling #data").val(data_brasileira);
        },
        validRange: function (currentDate) {
            var startDate = new Date(currentDate.getTime());
            var endDate = new Date(currentDate.valueOf());
            endDate.setDate(endDate.getDate() + 21);
            return {
                start: startDate,
                end: endDate,
            };
        },
        events: "http://127.0.0.1:8000/agendar/show",
        eventColor: "#000",
        dayMaxEvents: 2,
    });
    calendar.render();

    document.getElementById("env").addEventListener("click", function () {
        const dados = new FormData(form);
        axios.post("http://127.0.0.1:8000/agendar/enviar", dados);
    });
});
