// Pratinjau status deteksi langsung saat mengetik confidence score
document.addEventListener('DOMContentLoaded', function () {
    var input = document.getElementById('confidence_score');
    var preview = document.getElementById('preview-status');

    if (input && preview) {
        var update = function () {
            var v = parseInt(input.value, 10);
            if (isNaN(v)) { preview.textContent = ''; return; }
            if (v < 50) {
                preview.textContent = 'Status: Tidak Pasti';
                preview.style.color = '#2471a3';
            } else if (v <= 80) {
                preview.textContent = 'Status: Indikasi Hama';
                preview.style.color = '#b9770e';
            } else {
                preview.textContent = 'Status: Hama Terkonfirmasi';
                preview.style.color = '#c0392b';
            }
        };
        input.addEventListener('input', update);
        update();
    }
});
