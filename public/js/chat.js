document.querySelector("#chat-form").addEventListener("submit", function(e) {
    e.preventDefault();

    let inputField = document.querySelector("#input-field");
    let message = inputField.value;
    inputField.value = "";

    // Append user's message to chat log
    document.querySelector("#chat-log").innerHTML += `<div>User: ${message}</div>`;

    // Send the user's message to server to get AI's response
    fetch("/api/chat", {
        method: "POST",
        headers: {
            'Content-Type': 'application/json',
            'Accept': 'application/json',
            'X-Requested-With': 'XMLHttpRequest',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        },
        body: JSON.stringify({
            message: message
        })
    }).then(response => response.json()).then(data => {
        // Append AI's response to chat log
        document.querySelector("#chat-log").innerHTML += `<div>AI: ${data.response}</div>`;
    });
});
