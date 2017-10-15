"use static";

$(document).ready(function() {

    $('#submit').click(function() {
        let name;
        let id;
        let value = $('#submit').val();
        let phones_model = new PhonesModuleController();

        // gets values and sends them to the controller
        switch (value) {
            case 'create':
                name = $('#name').val();
                phones_model.createPhone(name);
                break;

            case 'get-all':
                phones_model.GetAllPhones();
                break;

        }

    });

    // // get's id onchange and send's it to sever to check if exists
    // $('#id').change(function() {
    //     let id = $('#id').val();
    //     let dirercotr_model = new DirectorModuleController();
    //     dirercotr_model.CheckIfIdExist(id);


    });







