const confirmDeleteBarang = id => {
  Swal.fire({
    title: 'Apakah Anda ingin menghapus barang ini ?',
    showDenyButton: true,
    confirmButtonText: `Hapus`,
    denyButtonText: `Batal`,
  }).then((result) => {
    if (result.isConfirmed) {
      Swal.fire('Barang berhasil dihapus!', '', 'success');
      location.href = `./proses/delete-barang.php?id=${id}`;
    } else if (result.isDenied) {
      Swal.fire('Barang tidak dihapus', '', 'info')
    }
  })
};

let tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
let tooltipList = tooltipTriggerList.map((tooltipTriggerEl) => {
  return new bootstrap.Tooltip(tooltipTriggerEl)
});