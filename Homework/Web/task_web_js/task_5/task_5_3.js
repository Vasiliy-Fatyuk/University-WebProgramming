String.prototype.addToElement = function (HTMLtag, CSSclass) {
    return `<${ HTMLtag } class="${ CSSclass }">${ str }</${ HTMLtag }>`;
};

const str = "Привіт світ!";
renderHTML(str.addToElement("div", "title"));


function renderHTML(HTML) {
    document.getElementById('wrapp').innerHTML = HTML;
}