const updateTodayDate = () => {
    document.addEventListener("DOMContentLoaded", () => {
        // Get the current date
        const today = new Date();

        // Get the individual date components
        const day = today.getDate();
        const month = today.getMonth() + 1;
        const year = today.getFullYear();

        // Format the date as "YYYY-MM-DD"
        const formattedDate = `${year}-${month.toString().padStart(2, '0')}-${day.toString().padStart(2, '0')}`;

        // Update the HTML element with the formatted date
        const dateElement = document.getElementById('todayDateDisplay');
        dateElement.textContent += ` ${formattedDate}`;
    })
}

export default updateTodayDate;
