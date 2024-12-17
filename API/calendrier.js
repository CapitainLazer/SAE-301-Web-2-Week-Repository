document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendrier');
    var filterType = document.getElementById('filter-type');
    var filterVille = document.getElementById('filter-ville');
    var filterDepartement = document.getElementById('filter-departement');
    var applyFiltersButton = document.getElementById('apply-filters');

    function fetchFilteredEvents() {
        var calendar = new FullCalendar.Calendar(calendarEl, {
            locale: 'Fr',
            initialView: 'dayGridMonth',
            events: function(fetchInfo, successCallback, failureCallback) {
                $.ajax({
                    url: './API/API_Calendrier.php',
                    method: 'GET',
                    data: {
                        type: filterType.value,
                        ville: filterVille.value,
                        departement: filterDepartement.value,
                    },
                    dataType: 'json',
                    success: function(data) {
                        if (data.error) {
                            console.error(data.error);
                            failureCallback(data.error);
                        } else {
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
            displayEventTime: false,
            displayEventEnd: false,
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
    }

    applyFiltersButton.addEventListener('click', function() {
        fetchFilteredEvents();
    });

    fetchFilteredEvents(); // Chargement initial
});