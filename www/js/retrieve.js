let addRetrieveDataEvent =() => $(document).ready(function () {
        $.ajax({
            url: 'retrieve.php',
            type: 'GET',
            success: function (storedData) {
                let event = new CustomEvent('retrieveDataEvent', { detail: storedData });
                document.dispatchEvent(event); // Dispatch the event with the processed data
            },
            error: function () {
                // Handle any error that occurs during the AJAX request
                alert('An error occurred');
            }
        });
});

export default addRetrieveDataEvent;
