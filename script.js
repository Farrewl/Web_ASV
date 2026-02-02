window.onload = function() {
    const inputs = document.querySelectorAll('input');
    
    inputs.forEach(input => {
        input.value = '';
    });
};

function showForm(formId) {
    document.querySelectorAll('.form-box').forEach(form => form.classList.remove('active'));
    document.getElementById(formId).classList.add('active');
    
    const activeFormInputs = document.getElementById(formId).querySelectorAll('input');
    activeFormInputs.forEach(input => input.value = '');
}

// Tambahkan simulasi status di bagian bawah file script.js
document.addEventListener("DOMContentLoaded", function() {
    const statusEl = document.getElementById('status-indicator');
    
    // Hanya jalankan jika elemen ada (artinya sedang di halaman admin)
    if(statusEl) {
        // Simulasi: Setelah 2 detik, ubah dari Connecting ke Online
        setTimeout(() => {
            statusEl.textContent = "ONLINE";
            statusEl.classList.remove('connecting');
            statusEl.classList.add('online');
        }, 2000); // 2000ms = 2 detik

        // Opsional: Klik status untuk ganti-ganti (Testing purpose)
        statusEl.addEventListener('click', () => {
            if(statusEl.classList.contains('online')) {
                statusEl.className = 'status-pill disconnected';
                statusEl.textContent = "DISCONNECTED";
            } else if (statusEl.classList.contains('disconnected')) {
                statusEl.className = 'status-pill connecting';
                statusEl.textContent = "CONNECTING...";
            } else {
                statusEl.className = 'status-pill online';
                statusEl.textContent = "ONLINE";
            }
        });
    }
});