==== Studi Kasus => Sistem Pendaftaran Siswa Baru Online Sederhana (DTS VSGA) ====

- Frontend          : HTML dan CSS
- Backend           : PHP 7/8
- Text Editor       : Visual Studio Code (Boleh yang lain juga, misalnya Notepad++, Sublime Text, dll)
- Database Server   : XAMPP Versi 7.2

- User  :
1. Calon Siswa / Pendaftar
2. Admin / Panitia

- Database => db_psb
- Table :

# tb_pendaftaran
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

$ tb_admin
===============================================================
1. id_admin         | int (11) primary key auto increment
2. nm_admin         | varchar (50)
3. username         | varchar (50)
4. password         | varchar (100)

- Format ID Pendaftaran P202000001
1. P        : Singkatan dari pendaftaran
2. 2020     : Tahung user mendaftar
3. 00001    : Nomor urut pendaftaran

- Format ID Admin 1, 2, 3, 4, ... dst

- Menu Calon Siswa
1. Pendaftaran (Daftar, Print)

- Menu Admin
1. Data Peserta (Detail, Hapus, Print)
2. Keluar

- Referensi UI Bootstrap
1. Link: https://getbootstrap.com/docs/5.1/getting-started/introduction/#starter-template
2. Link: https://getbootstrap.com/docs/5.1/getting-started/download/ (Download Compiled CSS and JS)

- Referensi Sweet Alert 2
1. Link: https://sweetalert2.github.io/#download
2. Link: https://www.jsdelivr.com/package/npm/sweetalert2 (Download)

- Referensi Data Tables
1. Link: https://datatables.net/examples/basic_init/zero_configuration.html
2. Link: https://datatables.net/examples/styling/bootstrap5.html

- Cara Hosting Geratis
1. Link: https://www.youtube.com/watch?v=bebAIPaEJtM&list=PLwc5D4ma310TBkIBvKh9tqizU9svje_0e&index=4

- Cara Hosting Berbayar
2. Link: https://www.youtube.com/watch?v=eQL12Oe_Y6s&list=PLwc5D4ma310TBkIBvKh9tqizU9svje_0e&index=5