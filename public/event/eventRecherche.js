$('#search-input').on('input', function() {
    var searchTerm = $(this).val();

    $.ajax({
        url: "/TheTreeWell/public/index.php/searchEvent",
        method: 'GET',
        data: {
            searchTerm: searchTerm
        },
        success: function(response) {
            // Traiter la réponse ici
            console.log(response);
        },
        error: function(xhr, status, error) {
            // Gérer l'erreur ici
            console.error('Erreur lors de la requête : ' + error);
        }
    });
});
