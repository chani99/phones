var Movie_controller = function() {
    let MoviesApiMethod = 'Movie';
    let MoviesApiUrl = "../../Back/api/api.php";
    var data = {
        ctrl: MoviesApiMethod
    };
    let send;


    return {


        createMovies: function(name, d_id) {
            data.name = name;
            data.d_id = d_id;
            send = Object.create(Movie);
            send.newMovie(data);
            if (send.getname() != false && send.getd_id() != false) {
                sendAJAX("POST", MoviesApiUrl, data, 'create');
            }


        },

        CheckIfIdExist: function(id) {
            data.id = id;
            send = Object.create(Movie);
            send.newMovie(data);
            if (send.getid() != false) {
                sendAJAX("GET", MoviesApiUrl, data, 'find_id');
            }

        },

        GetAllMovies: function() {
            sendAJAX("GET", MoviesApiUrl, data, 'getall');

        },

        UpdateMovies: function(id, name, d_id) {
            data.id = id;
            data.name = name;
            data.d_id = d_id;
            send = Object.create(Movie);
            send.newMovie(data);
            if (send.getid() != false && send.getname() != false && send.getd_id() != false) {
                sendAJAX("PUT", MoviesApiUrl, data, 'update');
            }

        },

        deleteMovie: function(id) {
            data.id = id;
            send = Object.create(Movie);
            send.newMovie(data);
            if (send.getid() != false) {
                sendAJAX("DELETE", MoviesApiUrl, data, 'delete');
            }

        }
    }




}