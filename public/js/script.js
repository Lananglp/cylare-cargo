const sr = ScrollReveal ({
    distance: '25px',
    duration: 1000,
    reset: true
});

sr.reveal('.js-animation-1', {delay: 100, origin:'left'});
sr.reveal('.js-animation-2', {delay: 100, origin:'right'});
sr.reveal('.js-animation-3', {delay: 250, origin:'top'});
sr.reveal('.js-animation-4', {delay: 500, origin:'left'});
sr.reveal('.js-animation-5', {delay: 750, origin:'bottom'});
sr.reveal('.js-animation-6', {delay: 1000, origin:'right'});
sr.reveal('.js-animation-7', {delay: 1500, origin:'left'});
sr.reveal('.js-animation-8', {delay: 1500, origin:'right'});
sr.reveal('.js-animation-9', {delay: 500, origin:'right'});
sr.reveal('.js-animation-10', {delay: 750, distance:'0px'});

// items/index
sr.reveal('.I-js-1-left', {delay: 100, origin:'left'});
sr.reveal('.I-js-1-right', {delay: 250, origin:'right'});
sr.reveal('.I-js-1-center', {delay: 500, distance:'0px'});
sr.reveal('.I-js-2-left', {delay: 750, origin:'left'});
sr.reveal('.I-js-2-right', {delay: 1000, origin:'right'});
sr.reveal('.I-js-3-left', {delay: 1250, origin:'left'});
sr.reveal('.I-js-3-right', {delay: 1500, origin:'right'});

// login
sr.reveal('.L-js-1-left', {delay: 200, origin:'left'});
sr.reveal('.L-js-1-right', {delay: 200, origin:'right'});
sr.reveal('.L-js-1-center', {delay: 400, distance:'0px'});
sr.reveal('.L-js-2-center', {delay: 600, distance:'0px'});
sr.reveal('.L-js-3-center', {delay: 800, distance:'0px'});
sr.reveal('.L-js-4-center', {delay: 1000, distance:'0px'});
sr.reveal('.L-js-5-center', {delay: 1200, distance:'0px'});
sr.reveal('.L-js-6-center', {delay: 1400, distance:'0px'});
sr.reveal('.L-js-7-center', {delay: 1500, distance:'0px'});

$(document).ready(function(){
    $('#tombol-simpan').click(function(){
        alert('Data berhasil disimpan!');
    });
});

function simpanData() {
    Swal.fire({
        icon: 'success',
        title: 'Data berhasil disimpan!',
        showConfirmButton: false,
        timer: 1500
    });
}

function loginNow() {
    Swal.fire({
        title: 'you are not logged in',
        text: 'login first to proceed to the Manage items page.',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Login now',
        cancelButtonText: 'Later'
    }).then((result) => {
        if (result.isConfirmed) {
            document.getElementById('login-now').submit();
        } else {
            Swal.fire('login canceled', 'Login immediately to manage items', 'warning');
        }
    });
}

function itemsDelete() {
    Swal.fire({
        title: 'Warning!',
        text: 'Are you sure you want to delete this data?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Delete',
        cancelButtonText: 'Cancel'
    }).then((result) => {
        if (result.isConfirmed) {
            document.getElementById('items-delete').submit();
        } else {
            Swal.fire('Oke', 'you cancel the data deletion', 'warning');
        }
    });
}

function konfirmasiHapus(id) {
    Swal.fire({
        title: 'Konfirmasi Hapus',
        text: 'Apakah Anda yakin ingin menghapus data ini?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Iya',
        cancelButtonText: 'Tidak'
    }).then((result) => {
        if (result.isConfirmed) {
            document.getElementById('hapus-form' + id).submit();
        } else {
            Swal.fire('Batal', 'Penghapusan data dibatalkan', 'warning');
        }
    });
}

function konfirmasiHapusAll() {
    Swal.fire({
        title: 'Konfirmasi Hapus Semua',
        text: 'Apakah Anda yakin ingin menghapus semua data ini?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Iya',
        cancelButtonText: 'Tidak'
    }).then((result) => {
        if (result.isConfirmed) {
            document.getElementById('hapus-form-semua').submit();
        } else {
            Swal.fire('Batal', 'Penghapusan semua data dibatalkan', 'warning');
        }
    });
}