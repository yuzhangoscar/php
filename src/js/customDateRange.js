const toggleDateRange = function() {
    $(document).ready(function() {
        $("#dateInputToggleButton").on("click", function() {
            let datePickerElement = $("#datepicker");
            let customDateRangeContainer = $("#customDateRangeContainer");

            if ($(this).html() === "Use Custom Date Range Instead") {
                datePickerElement.css("display", "none");
                customDateRangeContainer.css("display", "block");
                $(this).html("Use single date instead");
            }
            else {
                datePickerElement.css("display", "block");
                customDateRangeContainer.css("display", "none");
                $(this).html("Use Custom Date Range Instead");
            }
        });
    });
};

export default toggleDateRange;
