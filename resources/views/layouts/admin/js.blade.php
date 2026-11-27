<script>
    function salinRekening() {
        const noRek = document.getElementById('no-rek').textContent;
        navigator.clipboard.writeText(noRek);
        alert('Nomor rekening BCA (' + noRek + ') berhasil disalin!');
    }

    document.addEventListener('DOMContentLoaded', function() {
        const namaInput = document.getElementById('nama');
        const tanggalInput = document.getElementById('tanggal');
        const paketRadios = document.querySelectorAll('input[name="paket"]');
        const jamRadios = document.querySelectorAll('input[name="jam"]');
        const paymentRadios = document.querySelectorAll('input[name="metode_pembayaran"]');

        const panelQris = document.getElementById('panel-qris');
        const panelTransfer = document.getElementById('panel-transfer');
        const panelStudio = document.getElementById('panel-studio');
        const boxUpload = document.getElementById('box-upload-bukti');
        const inputBukti = document.getElementById('bukti_pembayaran');

        if (namaInput) {
            namaInput.addEventListener('input', () => {
                document.getElementById('sum-nama').textContent = namaInput.value.trim() || '-';
            });
        }

        if (tanggalInput) {
            tanggalInput.addEventListener('change', () => {
                document.getElementById('sum-tanggal').textContent = tanggalInput.value || '-';
            });
        }

        paketRadios.forEach(radio => {
            radio.addEventListener('change', () => {
                if (radio.checked) {
                    document.getElementById('sum-paket').textContent = radio.value;
                    document.getElementById('sum-harga').textContent = radio.dataset.harga;
                }
            });
        });

        jamRadios.forEach(radio => {
            radio.addEventListener('change', () => {
                if (radio.checked) {
                    document.getElementById('sum-jam').textContent = radio.value;
                }
            });
        });

        paymentRadios.forEach(radio => {
            radio.addEventListener('change', () => {
                if (!radio.checked) return;
                document.getElementById('sum-payment').textContent = radio.value;

                panelQris.style.display = 'none';
                panelTransfer.style.display = 'none';
                panelStudio.style.display = 'none';

                if (radio.value === 'QRIS') {
                    panelQris.style.display = 'block';
                    boxUpload.style.display = 'block';
                    inputBukti.required = true;
                } else if (radio.value === 'Transfer Bank') {
                    panelTransfer.style.display = 'block';
                    boxUpload.style.display = 'block';
                    inputBukti.required = true;
                } else {
                    panelStudio.style.display = 'block';
                    boxUpload.style.display = 'none';
                    inputBukti.required = false;
                }
            });
        });
    });
</script>
