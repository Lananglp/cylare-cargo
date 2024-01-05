import Swal from 'sweetalert2';

document.getElementById('deleteButton').addEventListener('click', function() {
    // Menampilkan SweetAlert2
    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {
            // Tambahkan logika hapus item di sini
            Swal.fire(
                'Deleted!',
                'Your item has been deleted.',
                'success'
            );
        }
    });
});
























function loginNow() {
    Swal.fire({
        title: 'Ops. . .',
        text: 'Login first to enter the item page !',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Login now',
        cancelButtonText: 'Later'
    }).then((result) => {
        if (result.isConfirmed) {
            document.getElementById('login-now').submit();
        } else {
            Swal.fire('Batal', 'Penghapusan semua data dibatalkan', 'info');
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
            Swal.fire('Batal', 'Penghapusan data dibatalkan', 'info');
        }
    });
}

function konfirmasiHapusAll() {
    Swal.fire({
        title: 'Konfirmasi Hapus',
        text: 'Apakah Anda yakin ingin menghapus semua data ini?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Iya',
        cancelButtonText: 'Tidak'
    }).then((result) => {
        if (result.isConfirmed) {
            document.getElementById('hapus-form-semua').submit();
        } else {
            Swal.fire('Batal', 'Penghapusan semua data dibatalkan', 'info');
        }
    });
}