function sendMail(contactForm) {
    emailjs.send("service_ssg4q33", "template_ndqijso", {
            "from_name": contactForm.name.value,
            "from_email": contactForm.email.value,
            "message": contactForm.message.value
        })
        .then(
            function (response) {
                var element = document.getElementById("form");
                element.remove();
                var x = document.getElementById("status_success");
                x.style.display = "block";
                console.log("SUCCESS", response);
            },
            function (error) {
                var element = document.getElementById("form");
                element.remove();
                var ers = document.getElementById("status_failed");
                ers.style.display = "block";
                console.log("FAILED", error);
            }
        );
    return false;
}