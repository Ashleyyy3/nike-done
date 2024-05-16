
// Selecting the form element
const form = document.querySelector("form");

// Function to send the email
function sendEmail(event) {
    event.preventDefault(); // Prevent form submission

    // Fetching form input values
    const fullName = document.getElementById("name").value;
    const userEmail = document.getElementById("email").value;
    const userPhone = document.getElementById("phone").value;
    const emailSubject = document.getElementById("subject").value;
    const userMessage = document.getElementById("message").value;

    // Constructing the email body
    const bodyMessage = `
        Full Name: ${fullName}<br>
        Email: ${userEmail}<br>
        Phone Number: ${userPhone}<br>
        Message: ${userMessage}
    `;

    // Sending the email using SMTPJS
    Email.send({
        Host : "smtp.elasticemail.com",
        Username : "ashleyowin@gmail.com", // Your email address
        Password : "B581E1D41885B7C85866D4A66F7C92B6BA0E", // Your email password
        To : "ashleyowin@gmail.com", // Recipient email address
        From : userEmail, // Sender email address (user's email)
        Subject : emailSubject,
        Body : bodyMessage
    }).then(
        // Success callback
        message => alert("Email sent successfully")
    ).catch(
        // Error callback
        error => console.error("Error:", error)
    );
}

// Adding form submission event listener
form.addEventListener("submit", sendEmail);




















