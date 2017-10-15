// "use static";

// Gets results from ajax and sends it to the right method
function callback(response_text, calltype) {
    var respnse = JSON.parse(response_text);
    switch (calltype) {
        case 'create':
            wasDone(respnse, 'created');
            break;
        case 'getall':
            creaTable(respnse);
            break;
        case 'find_id':
            idtest(respnse);
            break;
        case 'delete':
            wasDone(respnse, 'deleted');
            break;
        case 'update':

            wasDone(respnse, 'updated');
            break;
        case 'selectlist':
            insertlist(respnse);
            break;
        default:
            alert('Erorr!');
    }
}




// Gets data from AJAX callback and send's it to html
function wasDone(response_text, calltype) {
    if (response_text == true) {
        $('#result').html("your request was " + calltype + " sucssesfuly.");
    } else {
        $('#result').html("error");
    }

}


function insertlist(response_text) {
    $("#select_id").html(response_text);
}


// Handles the result of the check id test
function idtest(response_text) {
    var check = response_text;
    if (check != true) {
        $("#id_error").html("this id doesn't exsist!");
        $("#hide").addClass("hide");
    } else {
        $("#id_error").html("");
        $("#hide").removeClass("hide");
    }
}