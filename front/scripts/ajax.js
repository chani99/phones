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

        function sendFileToServer(data, calltype) {
            $.ajax({
                    url: "../../back/api/api.php", // point to server-side PHP script 
                    dataType: 'text',  // what to expect back from the PHP script, if anything
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: data,                         
                    type: 'post',
                    success: function(response_text){
                        callback(response_text, calltype);

                    }
            });
        }
