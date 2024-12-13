document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
            locale: 'Fr',
            initialView: 'dayGridMonth',
            events: function(fetchInfo, successCallback, failureCallback) {
                $.ajax({
                    url: './API/API_Calendrier.php',
                    method: 'GET',
                    dataType: 'json',
                    success: function(data) {
                        if (data.error) {
                            console.error(data.error);
                            failureCallback(data.error);
                        } else {
                            // Convert database events to FullCalendar events
                            var events = data.map(event => ({
                                title: event.nom_evenements,
                                start: event.dates_debut,
                                end: event.dates_fin,
                                description: event.description_evenements,
                                location: event.lieu + ', ' + event.ville,
                            }));
                            successCallback(events);
                        }
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        console.error("Error fetching events:", textStatus, errorThrown);
                        failureCallback(errorThrown);
                    }
                });
            },
            displayEventTime: false, // Désactiver l'affichage de l'heure
            displayEventEnd: false, // Désactiver l'heure de fin
            eventClick: function(info) {
                alert(
                    '' + info.event.title +
                    '\nDu : ' + info.event.start.toLocaleDateString() +
                    '\nAu : ' + (info.event.end ? info.event.end.toLocaleDateString() : 'Non spécifié') +
                    '\nLieu : ' + info.event.extendedProps.location +
                    '\nDescription : ' + info.event.extendedProps.description
                );
            }
        });
        calendar.render();
    });