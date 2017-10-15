    // director module


    const Phone = {
        newPhone: function(data) {
            if ('id' in data) {
                this.id = data.id;
            }
            if ('name' in data) {
                this.name = data.name;
            }
            if ('manu' in data) {
                this.manu = data.manu;
            }
            if ('image' in data) {
                this.image = data.image;
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
              
        getmanu: function() {
            let valid = validate.ValidateName(this.manu);
            if (valid == true) return this.manu;
            else return false;
        }, 

        getimage: function() {
            let valid = validate.ValidateName(this.image);
            if (valid == true) return this.image;
            else return false;
        }


    };