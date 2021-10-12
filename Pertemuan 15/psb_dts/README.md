# Studi Kasus
## Sistem Pendaftaran Siswa Baru Online Sederhana (DTS VSGA)

## Sumber Daya Pengembangan Aplikasi
- [x] Frontend          : HTML dan CSS
- [x] Backend           : PHP 7/8
- [x] Text Editor       : Visual Studio Code (Boleh yang lain juga, misalnya Notepad++, Sublime Text, dll)
- [x] Database Server   : XAMPP Versi 7.2

## User
- [x] Calon Siswa / Pendaftar
- [x] Admin / Panitia

## Database
- [x] db_psb

# Table
## tb_pendaftaran
===============================================================
1. id_pendaftaran   | char (10) primary key
2. tgl_daftar       | date
3. th_ajaran        | varchar (9)
4. jurusan          | varchar (50)
5. nm_peserta       | varchar (50)
6. tmpt_lahir       | varchar (50)
7. tgl_lahir        | date
8. jk               | enum ('Laki-laki', 'Perempuan')
9. agama            | varchar (15)
10. almt_peserta    | text

## tb_admin
===============================================================
1. id_admin         | int (11) primary key auto increment
2. nm_admin         | varchar (50)
3. username         | varchar (50)
4. password         | varchar (100)

## Format ID Pendaftaran P202000001
- [x] P        	: Singkatan dari pendaftaran
- [x] 2021     	: Tahun user mendaftar
- [x] 1		    : Nomor urut pendaftaran

## Format ID
- [x] Format ID Admin 1, 2, 3, 4, ... dst

## Menu Calon Siswa
- [x] Pendaftaran (Daftar, Print)

## Menu Admin
- [x] Data Peserta (Detail, Hapus, Print)
- [x] Keluar

## Referensi UI Bootstrap
- [x] [Bootstrap Online](https://getbootstrap.com/docs/5.1/getting-started/introduction/#starter-template)
- [x] [Bootstrap Offline](https://getbootstrap.com/docs/5.1/getting-started/download/)

## Referensi Sweet Alert 2
- [x] [Sweet Alert 2 Documentation](https://sweetalert2.github.io/#download)
- [x] [Sweet Alert 2 Download](https://www.jsdelivr.com/package/npm/sweetalert2)

## Referensi Data Tables
- [x] [Data Tables](https://datatables.net/examples/basic_init/zero_configuration.html)
- [x] [Data Tables Bootstrap 5](https://datatables.net/examples/styling/bootstrap5.html)

## Hosting Project Data Siswa Peserta Digitalent
- [x] [Hosting Aplikasi](https://pnj-jwd-rifram.000webhostapp.com/)

## Repository Full Project Pelatihan VSGA 2021
- [x] [Repository Project](https://github.com/rifkiramadhan/project_dts_jwd_2021)

