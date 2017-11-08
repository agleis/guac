function subscribe(email) {
    $.getJSON('/subscribe?email=' + email, function (result) {
        if(result) {
            $("#subscribe-message").show();
        }
    });
}

$("#subscribe-button").click(function() {
    var email = $("#subscribe-form").val();
    subscribe(email);
    $("#subscribe-form").val("");
});