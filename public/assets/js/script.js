// File: script.js
function submitForm(event) {
    event.preventDefault();

    var formData = new FormData(document.getElementById("myForm"));

    var xhr = new XMLHttpRequest();
    xhr.open("POST", "process.php", true);
    xhr.onload = function () {
        if (xhr.status === 200) {
            var messageContainer = document.getElementById("messageContainer");

            // Display the server response in the message container
            messageContainer.innerHTML = xhr.responseText;

            // Optional: You can clear the form fields after successful submission
            document.getElementById("myForm").reset();
        } else {
            console.error("Form submission failed");
        }
    };
    xhr.send(formData);
}
