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

document.addEventListener("DOMContentLoaded", function() {
    const statusEl = document.getElementById('status-indicator');
    
    if(statusEl) {
        setTimeout(() => {
            statusEl.textContent = "ONLINE";
            statusEl.classList.remove('connecting');
            statusEl.classList.add('online');
        }, 2000);

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