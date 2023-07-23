// Fetching data from server (fake data for demonstration purposes)
const fetchDataFromServer = () => {
    return new Promise(resolve => {
        setTimeout(() => {
            resolve({
                transactionId: 'ch_1I9GfQI62eZv9AJOeEz7vZ20',
                amountPaid: '$100.00',
                transactionDate: 'July 12, 2023',
                paymentMethod: 'Visa ****1234',
            });
        }, 1000);
    });
};

// Update UI with fetched data
const updateUI = data => {
    document.getElementById('transactionId').innerText = data.transactionId;
    document.getElementById('amountPaid').innerText = data.amountPaid;
    document.getElementById('transactionDate').innerText = data.transactionDate;
    document.getElementById('paymentMethod').innerText = data.paymentMethod;
};

// Fetch and display data
fetchDataFromServer().then(data => {
    updateUI(data);
});
