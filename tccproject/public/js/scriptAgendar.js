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
        hiddenDays: [0],
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
            endDate.setDate(endDate.getDate() + 14);
            return {
                start: startDate,
                end: endDate,
            };
        },
        eventClick: function (info) {
            $("#viewAgendamento").modal("toggle");
            let data_americana = info.event.startStr;
            let data_brasileira = data_americana.split("-").reverse().join("/");
            let ifnullRecurso = document.querySelector(
                "#viewAgendamento #ifNullRecurso"
            );
            let ifnullAmbiente = document.querySelector(
                "#viewAgendamento #ifNullAmbiente"
            );

            $("#viewAgendamento #start").val(data_brasileira);
            $("#viewAgendamento #Nome").val(info.event.title);
            $("#viewAgendamento #Retirada").val(
                info.event.extendedProps.retirada + "ªaula"
            );
            $("#viewAgendamento #Devolucao").val(
                info.event.extendedProps.devolucao + "ªaula"
            );

            if (info.event.extendedProps.ambiente === null) {
                ifnullAmbiente.style.display = "none";
            } else {
                ifnullAmbiente.style.display = "block";
                $("#viewAgendamento #Ambiente").val(
                    info.event.extendedProps.ambiente
                );
            }

            if (info.event.extendedProps.recurso === null) {
                ifnullRecurso.style.display = "none";
            } else {
                ifnullRecurso.style.display = "block";
                $("#viewAgendamento #Recurso").val(
                    info.event.extendedProps.recurso
                );
            }
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
