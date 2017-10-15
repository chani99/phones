"use static";

$(document).ready(function() {

    $('#submit').click(function() {
        let name;
        let id;
        let value = $('#submit').val();
        let dirercotr_model = new DirectorModuleController();

        // gets values and sends them to the controller
        switch (value) {
            case 'create':
                name = $('#name').val();
                dirercotr_model.createDirector(name);
                break;

            case 'get-all':
                dirercotr_model.GetAllDirectors();
                break;

            case 'update':
                id = $('#id').val();
                name = $('#name').val();
                dirercotr_model.UpdateDirectors(id, name);
                break;

            case 'delete':
                id = $('#id').val();
                dirercotr_model.deleteDirector(id);
                break;


        }

    });

    // get's id onchange and send's it to sever to check if exists
    $('#id').change(function() {
        let id = $('#id').val();
        let dirercotr_model = new DirectorModuleController();
        dirercotr_model.CheckIfIdExist(id);


    });







});