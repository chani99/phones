    // director module


    const Director = {
        newDirector: function(data) {
            if ('id' in data) {
                this.id = data.id;
            }
            if ('name' in data) {
                this.name = data.name;
            }
        },

        getname: function() {
            let valN = validate.ValidateName(this.name);
            if (valN == true) return this.name;
            else return false;


        },

        getid: function() {
            let valid = validate.ValidateId(this.id);
            if (valid == true) return this.id;
            else return false;


        }


    };