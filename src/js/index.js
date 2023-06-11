import addProcessDataEvent from "./submit";
import addRetrieveDataEvent from "./retrieve";
import handler from "./pieChart";

addProcessDataEvent();
addRetrieveDataEvent();

document.addEventListener('retrieveDataEvent', handler);
document.addEventListener('processedDataEvent', handler);
