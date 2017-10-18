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

            // case 'get-all':
            // manu = $("#select_manu option:selected").val();
            //     phones_model.GetAllPhones(manu);
            //     break;

        }

    });

    $('#select_manufac').change(function() {
        manu = $("#select_manufac option:selected").val();
        phones_model.GetAllPhones(manu);


    });
     
});