function serverRequestAndSetAnswerValue() {
    const xhttp = new XMLHttpRequest();
    xhttp.open("GET", "server_5_2.php", true);
    xhttp.send();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            renderGalerry();
            for (let item in JSON.parse(this.response)) {
                setImageInGallery(item);
            }
        }
    };
}

function renderGalerry() {
    let html = `<div id="main-photo"><img src="../../../img/img4.jpg"></div>`;
    html += `<div id="photo-changes"></div>`;
    document.getElementById('gallery').innerHTML = html;
}

function setImageInGallery(imgSrc) {
    let html = document.getElementById('photo-changes').innerHTML;
    html +=`<img src="${imgSrc}" onclick="changeMainPhoto(src)">`;
    document.getElementById('photo-changes').innerHTML = html;
}

function changeMainPhoto(src) {
    let element = document.getElementById('main-photo');
    element.innerHTML = `<img src="${src}">`;
}

serverRequestAndSetAnswerValue();
