$(document).ready(function() {
    $("#regForm").submit(function(event) {
        let valid = true;
        let errorMessage = "";

        // Get values
        let name = $("#fullname").val();
        let email = $("#email").val();
        let course = $("#course").val();

        // Simple Validation Logic
        if (name.trim() === "") {
            errorMessage += "Please enter your name.\n";
            valid = false;
        }

        if (email.trim() === "") {
            errorMessage += "Please enter your email.\n";
            valid = false;
        }

        if (course === "") {
            errorMessage += "Please select a course.\n";
            valid = false;
        }

        // If invalid, prevent form submission and show alert
        if (!valid) {
            alert(errorMessage);
            event.preventDefault(); // Stops the PHP page from loading
        }
    });
});