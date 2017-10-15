var validate = {
    // clears the error when user types a new value
    emptyError: $("input").change(function() {
        $("#result").html("");
    }),
    // checks if the field is not empty
    NotEmpty: function(inputtxt) {
        if ((inputtxt == "") || (inputtxt == undefined)) {
            return false;
        }
    },

    // Validation for name input
    ValidateName: function(name) {
        var pattern = /[0-9a-zA-Zא-ת\s!?=+-.,']+$/m;
        if (this.NotEmpty(name) == false) {
            alert("You must fill all input fields!");
            return false;

        } else if (!pattern.test(name)) {
            alert("The field contains invalid characters, only letters or numbers must be entered!");
            return false;

        } else {
            return true;
        }
    },

    // Validation for id/number input
    ValidateId: function(id) {
        if (this.NotEmpty(id) == false) {
            alert("You must fill all input fields!");
            return false;

        } else if (isNaN(id)) {
            alert("the id can contian only numbers!");
            return false;

        } else {
            return true;
        }
    },

    // Checks if a selection was choosen
    isSelected: function(selectid) {
        if (selectid == "Select a director") {
            alert("Please select a director");
            return false;

        } else {
            return true;

        }
    }

}