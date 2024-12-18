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
                                id: event.id_eve,
                                title: event.nom_evenements,
                                start: event.dates_debut,
                                end: event.dates_fin,
                                description: event.description_evenements,
                                location: event.lieu + ', ' + event.ville,
                                likes: event.likes,
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
                console.log("ID de l'événement cliqué :", info.event.id);
                alert(
                    '' + info.event.title +
                    '\n' + info.event.id +
                    '\nDu : ' + info.event.start.toLocaleDateString() +
                    '\nAu : ' + (info.event.end ? info.event.end.toLocaleDateString() : 'Non spécifié') +
                    '\nLieu : ' + info.event.extendedProps.location +
                    '\nDescription : ' + info.event.extendedProps.description +
                    '\nLikes : ' + info.event.extendedProps.likes
                );

                // Ajouter un bouton like
                if (confirm('Voulez-vous liker cet événement ?')) {
                    $.ajax({
                        url: './API/liker.php',
                        method: 'POST',
                        data: { id_eve: info.event.id },
                        success: function(response) {
                            try {
                                const data = JSON.parse(response);
                                if (data.success) {
                                    alert(data.message);
                                } else {
                                    alert(data.error);
                                }
                            } catch (e) {
                                console.error("Erreur de parsing JSON :", e, response);
                                alert('Réponse inattendue du serveur.');
                            }
                        },
                        error: function(jqXHR, textStatus, errorThrown) {
                            alert('Erreur lors de l\'ajout du like.');
                            console.error("Détails de l'erreur :", textStatus, errorThrown);
                        }
                    });                    
                }
            }
        });
        calendar.render();
    };

    applyFiltersButton.addEventListener('click', function() {
        fetchFilteredEvents();
    });

    fetchFilteredEvents();
});