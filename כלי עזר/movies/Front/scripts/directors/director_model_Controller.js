    // director module controller get values and call type from director.js
    // and creates a director model and then sends it to ajax
    var DirectorModuleController = function() {
        let DirectorApiMethod = 'Director';
        let customerApiUrl = "../../Back/api/api.php";
        var data = {
            ctrl: DirectorApiMethod
        };
        let send;


        return {

            createDirector: function(name) {
                data.name = name;
                send = Object.create(Director);
                send.newDirector(data);
                if (send.getname() != false) {
                    sendAJAX("POST", customerApiUrl, data, 'create');

                }
            },

            CheckIfIdExist: function(id) {
                data.id = id;
                send = Object.create(Director);
                send.newDirector(data);
                if (send.getid() != false) {
                    sendAJAX("GET", customerApiUrl, data, 'find_id');
                }

            },

            GetAllDirectors: function() {
                sendAJAX("GET", customerApiUrl, data, 'getall');
            },

            UpdateDirectors: function(id, name) {
                data.id = id;
                data.name = name;
                send = Object.create(Director);
                send.newDirector(data);
                if (send.getid() != false && send.getname() != false) {
                    sendAJAX("PUT", customerApiUrl, data, 'update');
                }

            },

            deleteDirector: function(id) {
                data.id = id;
                send = Object.create(Director);
                send.newDirector(data);
                if (send.getid() != false) {
                    sendAJAX("DELETE", customerApiUrl, data, 'delete');
                }



            }
        }

    }