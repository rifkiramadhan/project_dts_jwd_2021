<?php 
    // Memanggil library yang ada pada folder vendor
    require_once __DIR__ . '../../../vendor/autoload.php';

    // Menyiapkan data yang akan disimpan ke dalam tabel
    // Menghubungkan functions ke dalam file
    require '../../config/koneksi.php';

    // Membuat session start agar sessionnya berjalan
    session_start();    

    // Jika session status login tidak sama dengan true / tidak benar
    if ($_SESSION['stat_login'] != true) {

        // Maka akan dialihkan ke halaman login kembali
        header("Location: ../login.php");
    exit;
    }

    // Query data mahasiswa disimpan ke dalam variabel mahasiswa dan bentuknya array
    // ASC / Ascending (Membesar)
    // DESC / Descending (Mengecil)
    $list_peserta = mysqli_query($conn, "SELECT * FROM tb_pendaftaran");

    // Menginstansiasi library
    $mpdf = new \Mpdf\Mpdf();

    $html = '
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Laporan Calon Peserta</title>

        <!-- My Icon -->
        <link rel="shortcut icon"  href="../../img/kominfo.png" />
        
        <!-- My CSS -->
        <link rel="stylesheet" href="../../css/cetak.css">
    </head>
    <body>

        <h2>Laporan Calon Peserta</h2>
        <table border="0" cellpadding="10" cellspacing="0">
            <thead>
                <tr>
                    <th>No</th>
                    <th>ID Pendaftaran</th>
                    <th>Tahun Ajaran</th>
                    <th>Jurusan</th>
                    <th>Nama Lengkap</th>
                    <th>Nilai Ijazah</th>
                    <th>Tempat, Tanggal Lahir</th>
                    <th>Jenis Kelamin</th>
                    <th>Agama</th>
                    <th>Alamat</th>
                    <th>Status</th>
                </tr>
            </thead>
        <tbody>';

        $i = 1;
        foreach( $list_peserta as $row ) {
            $html .= '
            <tr>
                <td>'. $i++ .'</td>
                <td>'. $row['id_pendaftaran'] .'</td>
                <td>'. $row['th_ajaran'] .'</td>
                <td>'. $row['jurusan'] .'</td>
                <td>'. $row['nm_peserta'] .'</td>
                <td>'. $row['nilai'] .'</td>
                <td>'. $row['tmp_lahir'].', '.$row['tgl_lahir'] .'</td>
                <td>'. $row['jk'] .'</td>
                <td>'. $row['agama'] .'</td>
                <td>'. $row['almt_peserta'] .'</td>
                <td><span class="badge rounded-pill bg-success">Diterima</span></td>
            </tr>';
        }
    $html .= '
        </tbody>
    </table>

    </body>
    </html>';

    // Mencetak HTML ke dalam halaman PDF
    $mpdf->WriteHTML($html);
    // Bisa disingkat dengan mengetik huruf 'D' (download) / 'I' (inline)
    $mpdf->Output('daftar-mahasiswa.pdf', \Mpdf\Output\Destination::INLINE);
?>