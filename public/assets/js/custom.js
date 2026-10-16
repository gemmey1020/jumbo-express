document.getElementById('tracking-form').addEventListener('submit', function(e) {
    e.preventDefault();

    const trackingNumber = document.getElementById('tracking-number').value;

    if (trackingNumber && /^\d+$/.test(trackingNumber)) {
        // Here you would typically make an AJAX call to your backend to fetch the tracking information
        // For demonstration purposes, we'll just display a mock result

        const resultDiv = document.getElementById('tracking-result');
        resultDiv.innerHTML = `<p>Tracking number: ${trackingNumber}</p><p>Status: In Transit</p><p>Estimated Delivery: 2024-05-25</p>`;
        resultDiv.style.display = 'block';
    } else {
        alert('Please enter a valid tracking number.');
    }
});
