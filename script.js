// --- 1. LOGIKA LOGIN & LOGOUT ---
const loginForm = document.getElementById('auth-login');
if (loginForm) {
    loginForm.addEventListener('submit', function(e) {
        e.preventDefault();
        const user = document.getElementById('login-username').value;
        const pass = document.getElementById('login-password').value;

        if (user === 'aterkia' && pass === 'asv123') {
            localStorage.setItem('role', 'admin');
            window.location.href = 'admin.html';
        } else {
            localStorage.setItem('role', 'user');
            localStorage.setItem('username', user);
            window.location.href = 'user.html';
        }
    });
}

function logout() {
    localStorage.removeItem('role');
    localStorage.removeItem('username');
    window.location.href = 'index.html'; // Pastikan file ini namanya index.html
}

// --- 2. SINKRONISASI GLOBAL (Nama & Warna) ---
function syncSettings() {
    const savedName = localStorage.getItem("globalShipName") || "Aterolas";
    const savedColor = localStorage.getItem("globalThemeColor") || "#0c53ec";

    document.querySelectorAll(".logo").forEach(el => {
        const isAdmin = el.querySelector('.logo-admin');
        el.innerHTML = `${savedName} ${isAdmin ? '<span class="logo-admin">Admin</span>' : ''}`;
    });

    document.querySelectorAll(".c1-box").forEach(el => {
        el.style.backgroundColor = savedColor;
    });
}

// --- 3. ADMIN PANEL (Draggable & Global Edit) ---
const adminPanel = document.getElementById("adminPanel");
const adminHeader = document.getElementById("adminPanelHeader");

if (adminHeader && adminPanel) {
    let isDragging = false, offset = [0, 0];
    adminHeader.onmousedown = (e) => {
        isDragging = true;
        offset = [adminPanel.offsetLeft - e.clientX, adminPanel.offsetTop - e.clientY];
    };
    document.onmousemove = (e) => {
        if (!isDragging) return;
        adminPanel.style.left = (e.clientX + offset[0]) + "px";
        adminPanel.style.top = (e.clientY + offset[1]) + "px";
        adminPanel.style.right = 'auto';
    };
    document.onmouseup = () => isDragging = false;
}

function toggleMinimize() {
    const panel = document.getElementById("adminPanel");
    const btn = document.querySelector(".min-btn");
    
    panel.classList.toggle("minimized");
    
    // Ubah icon tombolnya
    if (panel.classList.contains("minimized")) {
        btn.innerHTML = "⚙️"; // Icon gear saat kecil
    } else {
        btn.innerHTML = "-";
    }
}

function applyGlobalSettings() {
    const name = document.getElementById("editShipName").value;
    const color = document.getElementById("editThemeColor").value;
    if (name) localStorage.setItem("globalShipName", name);
    localStorage.setItem("globalThemeColor", color);
    syncSettings();
    alert("Pengaturan Berhasil Diterapkan!");
}

// --- 4. INTERAKSI CONTENT-1 & 2 KE MIDDLE ---
function updateMiddle(title, value) {
    const display = document.getElementById("display-content");
    if(display) {
        display.innerHTML = `
            <h2 style="color: #0c53ec; margin-bottom:10px;">${title}</h2>
            <div style="font-size: 3rem; font-weight: bold;">${value}</div>
            <p style="color: #666; margin-top:10px;">Status: <span style="color:green">Aktif</span></p>
        `;
    }
}

document.querySelectorAll('.c1-box').forEach(box => {
    box.onclick = () => {
        const title = box.querySelector('span').innerText;
        updateMiddle(title, (Math.random() * 50).toFixed(2));
    };
});

// --- 5. OTOMATISASI CONTENT-2 (STREAMING STATUS) ---
function autoShowStreaming() {
    const labels = ["Maps", "Trajectory", "Computer Vision", "Photo"];
    const boxes = document.querySelectorAll('.c2-box');
    
    boxes.forEach((box, index) => {
        // Cek jika label belum ada, baru tambahkan
        if (!box.querySelector('.streaming-label')) {
            const labelDiv = document.createElement('div');
            labelDiv.className = 'streaming-label';
            labelDiv.innerHTML = `${labels[index]}: <span style="color:#00ff00">ACTIVE</span>`;
            box.appendChild(labelDiv);
        }
    });

    // Ubah indicator status jadi Online
    const statusPill = document.getElementById('status-indicator');
    if (statusPill) {
        statusPill.className = 'status-pill online';
        statusPill.innerText = 'Connected';
    }
}

// Tambahkan autoShowStreaming ke dalam window.onload
window.onload = () => {
    syncSettings();
    autoShowStreaming(); // Langsung muncul saat buka halaman
};

// --- Perbaikan applyGlobalSettings agar tetap sinkron ---
function applyGlobalSettings() {
    const name = document.getElementById("editShipName").value;
    const color = document.getElementById("editThemeColor").value;
    if (name) localStorage.setItem("globalShipName", name);
    localStorage.setItem("globalThemeColor", color);
    syncSettings();
    
    // Opsional: Langsung sembunyikan panel setelah apply
    toggleMinimize();
    alert("Pengaturan Berhasil Diterapkan!");
}

// --- 6. MODAL GAMBAR ---
const modal = document.getElementById("imageModal");
const shipTrigger = document.getElementById("shipTrigger");
if (shipTrigger) {
    shipTrigger.onclick = () => {
        modal.style.display = "flex";
        document.getElementById("imgFull").src = shipTrigger.src;
    };
}
const closeModal = document.querySelector(".close-modal");
if(closeModal) closeModal.onclick = () => modal.style.display = "none";

window.onload = syncSettings;