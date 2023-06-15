let addProcessDataEvent = () => $(document).ready(function () {
    $('#form').submit(function(event){
        event.preventDefault();

        let expense = $('#expense').val();
        let category = $('#category').val();
        let date = $('#datepicker').val();

        $.ajax({
            url: 'process.php',
            type: 'POST',
            data: {
                expense: expense,
                category: category,
                date: date
            },
            success: function (processedData) {
                let event = new CustomEvent('processedDataEvent', { detail: processedData });
                document.dispatchEvent(event); // Dispatch the event with the processed data
            },
            error: function () {
                // Handle any error that occurs during the AJAX request
                alert('An error occurred');
            }
        });
    });
});

export default addProcessDataEvent;
