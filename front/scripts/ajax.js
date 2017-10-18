    "use static";

    function sendAJAX(method, url, data, calltype, manu) {
        $.ajax({
            type: method,
            url: url,
            data: { activitiesArray: data },
            success: function(response_text) {
                callback(response_text, calltype, manu);
            }

        });
    }

    function sendFileToServer(data, calltype) {
        $.ajax({
            dataType: 'text', // what to expect back from the PHP script, if anything
            url: "../../back/api/fileAPI.php", // point to server-side PHP script 
            cache: false,
            contentType: false,
            processData: false,
            data: data,
            type: 'POST',
            success: function(response_text) {
                callback(response_text, calltype);

            }
        });
    }