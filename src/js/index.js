import addProcessDataEvent from "./submit";
import addRetrieveDataEvent from "./retrieve";
import handler from "./pieChart";
import updateTodayDate from "./updateTodayDate";
import toggleDateRange from "./customDateRange";

addProcessDataEvent();
addRetrieveDataEvent();
updateTodayDate();
toggleDateRange();

document.addEventListener('retrieveDataEvent', handler);
document.addEventListener('processedDataEvent', handler);
