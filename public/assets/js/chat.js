document.querySelector('#chat-form').addEventListener('submit', function(event) {
    event.preventDefault();  // Prevent the form from being submitted normally

    const messageInput = document.querySelector('#input-field');
    const chatLog = document.querySelector('#chat-log');

    // Add the user's message to the chat log
    const userMessageElement = document.createElement('div');
    userMessageElement.textContent = 'User: ' + messageInput.value;
    chatLog.appendChild(userMessageElement);
    scrollToBottom();

    fetch('/api/chat', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'Accept': 'application/json',
            'X-Requested-With': 'XMLHttpRequest',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        },
        body: JSON.stringify({
            message: messageInput.value
        })
    }).then(response => response.json())
    .then(data => {
        // Add the AI's response to the chat log
        const aiMessageElement = document.createElement('div');
        aiMessageElement.textContent = 'AI: ' + data.response;
        chatLog.appendChild(aiMessageElement);
        scrollToBottom();
    })
    .catch(error => {
        console.error("An error occurred:", error);
    });

    // Clear the input field
    messageInput.value = '';
});
