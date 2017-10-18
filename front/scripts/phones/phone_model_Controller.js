    // director module controller get values and call type from director.js
    // and creates a director model and then sends it to ajax
    var PhonesModuleController = function() {
        let PhonesApiMethod = 'phones';
        let customerApiUrl = "../../back/api/api.php";
        var data = {
            ctrl: PhonesApiMethod
        };
        let send;


        return {

            createPhone: function(name, file_name, manu) {
                data.name = name;
                data.image = file_name;
                data.manu = manu;
                send = Object.create(Phone);
                send.newPhone(data);
                if (send.getname() != false) {
                    sendAJAX("POST", customerApiUrl, data, 'create');

                }
            },



            GetAllPhones: function(manu) {
                sendAJAX("GET", customerApiUrl, data, 'getall', manu);
            },



        }

    
    }