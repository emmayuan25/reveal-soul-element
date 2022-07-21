
drawPage();

function drawPage(){
    html2canvas(document.body, {
        onclone: function (document) {
            document.getElementById("qrcode").style.display = 'block';
        }
    }).then(function(canvas) {
        let img = new Image();
        img.onload = () => {
            document.getElementById('preview-img').append(img);
        }
        img.src = canvas.toDataURL('image/jpeg', 1.0);
    });
}