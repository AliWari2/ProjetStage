$(document).ready(function() {
    $('.menu-item form').on('submit', function(e) {
        e.preventDefault();
        var form = $(this);
        $.ajax({
            url: form.attr('action'),
            type: 'POST',
            data: form.serialize(),
            success: function(response) {
                if (response.error) {
                    alert(response.error);
                } else {
                    alert(response.success);
                }
            },
            error: function() {
                alert('Erreur lors de l’ajout au panier.');
            }
        });
    });
});
