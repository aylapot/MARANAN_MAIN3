document.getElementById('date').addEventListener('change', function () {
    const selectedDate = this.value;
    const dateStatus = document.getElementById('dateStatus');

    // Fetch availability from the server
    fetch(`check_availability.php?date=${selectedDate}`)
        .then(response => response.json())
        .then(data => {
            if (data.available) {
                dateStatus.textContent = "Date is available";
                dateStatus.style.color = "green";
            } else {
                dateStatus.textContent = "Date is taken";
                dateStatus.style.color = "red";
            }
        })
        .catch(error => {
            console.error('Error fetching availability:', error);
        });
});
