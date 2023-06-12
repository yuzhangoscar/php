const toggleDateRange = function() {
    $(document).ready(function() {
        $('input[name="option"]').on('click', function() {
            let customDateRangeContainer = $("#customDateRangeContainer");
            let selectedOption = $('input[name="option"]:checked').val();

            if (selectedOption === "customRange") {
                customDateRangeContainer.css("display", "block");
            }
            else if (selectedOption === "currentMonth") {
                customDateRangeContainer.css("display", "none");
            }
        });
    });
};

export default toggleDateRange;
