"use static";

$(document).ready(function() {

    $('#submit').click(function() {
        let name;
        let manu;
        let image;
        let file_name;
        let value = $('#submit').val();
        let phones_model = new PhonesModuleController();

        // gets values and sends them to the controller
        switch (value) {
            case 'create':
                name = $('#name').val();
                image = $('#pic').prop('files')[0]; 
                manu = $("#select_manu option:selected").val();

                        if(image != undefined) {
                                file_name = image.name;  
                                let form_data = new FormData();                  
                                form_data.append('file', image);
                                sendFileToServer(form_data, 'upload');
                        }

                phones_model.createPhone(name, file_name, manu);
                break;

            case 'get-all':
                phones_model.GetAllPhones();
                break;

        }

    });

// upload add event
    // $('#upload').on('click', function() {
    // var file_data = $('#pic').prop('files')[0]; 
    // var file_name =file_data.name;  
    // var form_data = new FormData();                  
    // form_data.append('file', file_data);
    // sendFileToServer(form_data, 'upload');

    // $.ajax({
    //             url: "../../back/api/api.php", // point to server-side PHP script 
    //             dataType: 'text',  // what to expect back from the PHP script, if anything
    //             cache: false,
    //             contentType: false,
    //             processData: false,
    //             data: form_data,                         
    //             type: 'post',
    //             success: function(php_script_response){
    //             }
    //  });
// });


});