/**
 * Params must be strings
 * @param startString   'YYYY-mm-dd'
 * @param endString     'YYYY-mm-dd'
 * @returns {boolean}
 */
export function isValidDateOrder(startString, endString) {
    if(startString == '' || endString == '') {
        return true;
    }
    let startArray = startString.split('-');
    let endArray = endString.split('-');
    let startDate = new Date(startArray[0], startArray[1], startArray[2]);
    let endDate = new Date(endArray[0], endArray[1], endArray[2]);
    return (startDate <= endDate || endDate >= startDate);
}