document.querySelector("#chat-form").addEventListener("submit", function(e) {
    e.preventDefault();

    let inputField = document.querySelector("#input-field");
    let message = inputField.value;
    inputField.value = "";

    let baseUrl = document.querySelector('meta[name="base-url"]').getAttribute('content');

    fetch("/api/chat",  {
        method: "POST",
        headers: {
            'Content-Type': 'application/json',
            'Accept': 'application/json',
            'X-Requested-With': 'XMLHttpRequest',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        },
        body: JSON.stringify({
            message: message  // send the new message
        })
    }).then(response => {
        if (!response.ok) {
            console.error(`Server responded with a status of ${response.status}`);
        }
        return response.json();
    }).then(data => {
        console.log(data);

        // Clear the chat log
        document.querySelector("#chat-log").innerHTML = '';

        // Append the updated conversation history
        // Assuming the server sends back a 'history' key in the response,
        // which contains the entire conversation history as an array.
        data.history.forEach((message, index) => {
            let sender = index % 2 === 0 ? 'User' : 'AI';
            let messageElement = `<div class="${sender}Message"><div class="messageBubble">${message}</div></div>`;
            document.querySelector("#chat-log").innerHTML += messageElement;
        });
    }).catch(error => {
        console.error("An error occurred:", error);
    });
});
