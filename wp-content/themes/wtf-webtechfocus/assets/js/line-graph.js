/* globals Chart:false */

(() => {
    'use strict'
  
    // Graphs
    const ctx = document.getElementById('wtfGraph')
    // eslint-disable-next-line no-unused-vars
    const wtfGraph = new Chart(ctx, {
      type: 'line',
      data: {
        labels: [
          'Sunday',
          'Monday',
          'Tuesday',
          'Wednesday',
          'Thursday',
          'Friday',
          'Saturday'
        ],
        datasets: [{
          data: [
            14339,
            21345,
            16483,
            24003,
            28589,
            30092,
            12034
          ],
          lineTension: 0,
          backgroundColor: 'transparent',
          borderColor: '#00A19A',
          borderWidth: 4,
          pointBackgroundColor: '#00A19A'
        }]
      },
      options: {
        plugins: {
          legend: {
            display: false
          },
          tooltip: {
            boxPadding: 3
          }
        }
      }
    })
  })()
  