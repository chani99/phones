    // director module


    const Movie = {
        newMovie: function(data) {
            if ('id' in data) {
                this.id = data.id;
            }
            if ('name' in data) {
                this.name = data.name;
            }
            if ('d_id' in data) {
                this.d_id = data.d_id;
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


        },

        getd_id: function() {
            let valD = validate.isSelected(this.d_id);
            if (valD == true) return this.d_id;
            else return false;


        }



    };