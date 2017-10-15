"use static";


$(document).ready(function() {

    $('#submit').click(function() {
        var value = $('#submit').val();
        var Movies = new Movie_controller();

        let name;
        let id;
        let d_id;



        // gets values and sends them to the controller
        switch (value) {
            case 'create':
                name = $('#name').val();
                d_id = $("#select_id option:selected").val();
                Movies.createMovies(name, d_id);
                break;

            case 'get-all':
                Movies.GetAllMovies();
                break;

            case 'update':
                id = $('#id').val();
                name = $('#name').val();
                d_id = $("#select_id option:selected").val();
                Movies.UpdateMovies(id, name, d_id);
                break;

            case 'delete':
                id = $('#id').val();
                Movies.deleteMovie(id);


        }

    });


    $('#id').change(function() {
        let id = $('#id').val();
        let Movies = new Movie_controller();
        Movies.CheckIfIdExist(id);

    });






});