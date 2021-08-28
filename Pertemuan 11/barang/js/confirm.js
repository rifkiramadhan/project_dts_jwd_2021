const confirmDeleteBarang = id => {
  if (confirm('Apakah kamu yakin menghapus barang ini?'))
    location.href = `./proses/delete-barang.php?id=${id}`;
}
