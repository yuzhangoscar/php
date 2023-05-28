document.addEventListener('processedDataEvent', function (event) {
    destroyExistingCanvas();

    let data = JSON.parse(event.detail);

    // Extract the categories and expenses from the results
    let categories = [...new Set(Object.keys(data))];
    let expenses = Object.values(data);

    // Generate random colors for the pie slices
    let colors = [];
    for (var i = 0; i < categories.length; i++) {
        colors.push(getRandomColor());
    }

    // Create the pie chart
    let ctx = document.getElementById('expenseChart').getContext('2d');
    let chart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: categories,
            datasets: [{
                data: expenses,
                backgroundColor: colors
            }]
        },
        options: {
            title: {
                display: true,
                text: 'Total Expenses by Category'
            }
        }
    });

    // Function to generate a random color
    function getRandomColor() {
        let letters = '0123456789ABCDEF';
        let color = '#';
        for (let i = 0; i < 6; i++) {
            color += letters[Math.floor(Math.random() * 16)];
        }
        return color;
    }
})

function destroyExistingCanvas() {
    let existingChart = Chart.getChart('expenseChart');
    if (existingChart) {
        existingChart.destroy();
    }
}
