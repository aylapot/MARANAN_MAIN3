// Fetch reservation data and update the UI
async function fetchReservationData() {
    try {
      const response = await fetch('getReservations.php');
      const data = await response.json();
      console.log(data)
  
      // Update summary stats
      document.getElementById('total-reservations').textContent = `${data.totalReservations} /mo`;
      document.getElementById('completed-reservations').textContent = `${data.completedReservations} /mo`;
      document.getElementById('total-sales').textContent = `₱${data.totalSales.toLocaleString()} /mo`;
  
      // Update charts
      updateCharts(data);
    } catch (error) {
      console.error('Error fetching reservation data:', error);
    }
  }
  
  // Initialize and update charts
  function updateCharts(data) {
    const doughnutCtx = document.getElementById('doughnutChart').getContext('2d');
    const lineCtx = document.getElementById('lineChart').getContext('2d');
  
    // Doughnut Chart for Reservation Types
    new Chart(doughnutCtx, {
      type: 'doughnut',
      data: {
        labels: ['Completed', 'Pending'],
        datasets: [{
          label: 'Reservations',
          data: [data.completedReservations, data.totalReservations - data.completedReservations],
          backgroundColor: ['#3C91E6', '#FD7238'],
        }],
      },
    });
  
    // Line Chart for Monthly Reservations
    new Chart(lineCtx, {
      type: 'line',
      data: {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        datasets: [{
          label: 'Reservations',
          data: data.reservationsByMonth,
          borderColor: '#3C91E6',
          fill: false,
        }],
      },
    });
  }
  
  // Fetch data on page load
  document.addEventListener('DOMContentLoaded', fetchReservationData);


// $(document).ready(function() {
//     conts name = new URLSearchParams(window.location.search).get('name');
//     const response =await fetch(`http://localhost:3000/submit-reservation?name=${name}`);
//     const data = await response.json();

//     let html = '';
//     if (data) {
//         html += `
//             <div class="reservation">
//                 <h2>Reservation Details</h2>
//                 <p><strong>Name:</strong> ${data.name}</p>
//                 <p><strong>Email:</strong> ${data.email}</p>
//                 <p><strong>Phone:</strong> ${data.phone}</p>
//                 <p><strong>Package:</strong> ${data.package}</p>
//                 <p><strong>Guests:</strong> ${data.guests}</p>
//                 <p><strong>Date:</strong> ${data.date}</p>