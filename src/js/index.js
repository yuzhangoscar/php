import addProcessDataEvent from "./submit";
import addRetrieveDataEvent from "./retrieve";
import handler from "./pieChart";
import updateTodayDate from "./updateTodayDate";

addProcessDataEvent();
addRetrieveDataEvent();
updateTodayDate();

document.addEventListener('retrieveDataEvent', handler);
document.addEventListener('processedDataEvent', handler);
