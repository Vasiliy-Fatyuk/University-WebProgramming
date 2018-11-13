let HTML = "";
const numberArray = [9, 4, 4, 2, 1, 3, 5];
const charArray = ['b', 'z', 'g', 't', 'a', 'u', 'q'];


addToHtml(addDivTag("Початковий масив: "));
addToHtml(addDivTag(renderArray(numberArray)));
addToHtml(addDivTag("Сортування за спаданням: "));
addToHtml(addDivTag(renderArray(sortNumberArrayAsIncrease(numberArray))));
addToHtml(addDivTag("Сортування за зростанням: "));
addToHtml(addDivTag(renderArray(sortNumberArrayAsDecrease(numberArray))));

addToHtml(addDivTag("&nbsp;"));
addToHtml(addDivTag("&nbsp;"));

addToHtml(addDivTag("Початковий масив"));
addToHtml(addDivTag(renderArray(charArray)));
addToHtml(addDivTag("Сортування за спаданням: "));
addToHtml(addDivTag(renderArray(sortCharsArrayAsIncrease(charArray))));
addToHtml(addDivTag("Сортування за зростанням: "));
addToHtml(addDivTag(renderArray(sortCharsArrayAsDecrease(charArray))));

renderHTML();


function addToHtml(string) {
    HTML += string;
}
function addDivTag(string) {
    let result = "<div>";
    result += string;
    result += "</div>";
    return result;
}
function renderArray(array) {
    let result = "";
    for (i=0; i<array.length; i++) {
        result += array[i];
        result += " ";
    }
    return result;
}
function renderHTML() {
    document.getElementById('wrapp').innerHTML = HTML;
}

function sortNumberArrayAsDecrease(array) {
    return array.sort((value1, value2) => {
        if (value1 > value2) return 1;
        else return -1;
    });
}
function sortNumberArrayAsIncrease(array) {
    return array.sort((value1, value2) => {
        if (value1 < value2) return 1;
        else return -1;
    });
}
function sortCharsArrayAsIncrease(array) {
    return array.sort().reverse();
}
function sortCharsArrayAsDecrease(array) {
    return array.sort();
}
