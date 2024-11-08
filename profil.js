function showTab(tabId) {
    const tabs = document.querySelectorAll('.tab-content');
    tabs.forEach(tab => {
        tab.style.display = 'none';
    });
    document.getElementById(tabId).style.display = 'block';
}

// profil.js
function showTab(tabId) {
    // Ambil semua elemen dengan kelas 'tab-content'
    const tabs = document.querySelectorAll('.tab-content');
    
    // Iterasi melalui semua tab
    tabs.forEach(tab => {
        // Jika id tab sama dengan tabId, tampilkan tab
        if (tab.id === tabId) {
            tab.style.display = 'block';
        } else {
            // Sembunyikan tab lainnya
            tab.style.display = 'none';
        }
    });
}

function openTab(event, tabId) {
    // Hapus kelas aktif dari semua tab
    const tabs = document.querySelectorAll('.tab');
    tabs.forEach(tab => tab.classList.remove('active'));
  
    // Tambahkan kelas aktif ke tab yang diklik
    event.currentTarget.classList.add('active');
  
    // Sembunyikan semua konten
    const contentBoxes = document.querySelectorAll('.content-box');
    contentBoxes.forEach(box => box.classList.remove('active-content'));
  
    // Tampilkan konten yang sesuai
    const activeContent = document.getElementById(tabId);
    activeContent.classList.add('active-content');
  }
  

// Menampilkan tab 'home' secara default saat halaman dimuat
document.addEventListener("DOMContentLoaded", function() {
    showTab('home');
});

function sendMessage(event) {
    event.preventDefault(); // Mencegah form dari pengiriman default

    // Mengambil nilai dari form
    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const message = document.getElementById('message').value;

    // Membuat pesan untuk WhatsApp
    const whatsappNumber = '6281251087547'; // Gunakan format internasional
    const whatsappMessage = `Name: ${name}\nEmail: ${email}\nMessage: ${message}`;
    const whatsappUrl = `https://api.whatsapp.com/send?phone=${whatsappNumber}&text=${encodeURIComponent(whatsappMessage)}`;

    // Mengarahkan pengguna ke WhatsApp
    window.open(whatsappUrl, '_blank');
}

console.log(`Name: ${name}, Email: ${email}, Message: ${message}`);
console.log(`WhatsApp URL: ${whatsappUrl}`);

// Fungsi untuk membuka modal dan menampilkan gambar besar
function openModal(imageSrc) {
    var modal = document.getElementById("imageModal");
    var modalImg = document.getElementById("modalImage");
    modal.style.display = "block";
    modalImg.src = imageSrc;
}

// Fungsi untuk menutup modal
function closeModal() {
    var modal = document.getElementById("imageModal");
    modal.style.display = "none";
}
