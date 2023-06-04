document.addEventListener('processedDataEvent', handler);
document.addEventListener('retrieveDataEvent', handler);

function handler (event) {
    destroyExistingCanvas();
    let data;
    try{
        data = JSON.parse(event.detail);
    } catch(error) {
        console.log(error);
        data = {'':0}
    }

    const resultArray = data.reduce((accumulator, currentObject) => {
        const { expense, category } = currentObject;

        // Check if the category already exists in the accumulator array
        const existingCategory = accumulator.find(item => item.category === category);

        if (existingCategory) {
            // If the category exists, add the expense to the existing total
            existingCategory.expense = parseFloat(existingCategory.expense) + parseFloat(expense);
        } else {
            // If the category doesn't exist, create a new entry in the accumulator
            accumulator.push({ expense, category });
        }

        return accumulator;
    }, []);

    // Extract the categories and expenses from the results
    let categories = resultArray.map(item => item.category);;
    let expenses = resultArray.map(item => item.expense);

    // Generate random colors for the pie slices
    let colors = [];
    for (var i = 0; i < categories.length; i++) {
        colors.push(getRandomColor());
    }

    // Create the pie chart
    let ctx = document.getElementById('pieChart').getContext('2d');
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

    // Extract the unique dates from the data
    let dates = [...new Set(data.map(item => item.today))];

    // Create an empty data structure to hold the expenses for each category and date
    let expensesData = {};
    for (let category of categories) {
        expensesData[category] = Array(dates.length).fill(0);
    }

    // Process the data and populate the expensesData
    for (let item of data) {
        //let categoryIndex = categories.indexOf(item.category);
        let dateIndex = dates.indexOf(item.today);
        for (let eachCategory of categories) {
            expensesData[eachCategory][dateIndex] = parseFloat(item.expense) + parseFloat(expensesData[eachCategory][dateIndex]);
        }
    }
    // Create the stacked column chart
    let ctx2 = document.getElementById('stackedColumnChart').getContext('2d');
    let chart2 = new Chart(ctx2, {
        type: 'bar',
        data: {
            labels: dates,
            datasets: categories.map((category, index) => ({
                label: category,
                data: expensesData[category],
                backgroundColor: colors[index],
            })),
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
};

function destroyExistingCanvas() {
    let pieChart = Chart.getChart('pieChart');
    let stackedColumnChart = Chart.getChart('stackedColumnChart');

    if (pieChart) {
        pieChart.destroy();
    }
    if (stackedColumnChart) {
        stackedColumnChart.destroy();
    }
}
