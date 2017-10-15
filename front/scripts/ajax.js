    "use static";

    function sendAJAX(method, url, data, calltype) {
        $.ajax({
            type: method,
            url: url,
            data: { activitiesArray: data },
            success: function(response_text) {
                callback(response_text, calltype);
            }

        });
    }