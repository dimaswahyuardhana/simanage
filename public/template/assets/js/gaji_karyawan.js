$(document).ready(function () {
    // Tangkap perubahan pada elemen <select>
    $('#selectKaryawan').change(function () {
        // Dapatkan ID Karyawan yang dipilih
        var selectedId = $(this).val();

        // Cari Karyawan yang sesuai dengan ID yang dipilih dari $dataKaryawan
        var selectedKaryawan = $.grep(dataKaryawan, function (karyawan) {
            return karyawan.id == selectedId;
        });

        // Perbarui nilai elemen HTML dengan data Karyawan yang sesuai
        $('#namaKaryawan').text(selectedKaryawan[0].name);
        $('#emailKaryawan').text(selectedKaryawan[0].email);
        $('#teleponKaryawan').text(selectedKaryawan[0].telepon);
        $('#alamatKaryawan').text(selectedKaryawan[0].alamat);
        $('#jabatanKaryawan').text(selectedKaryawan[0].jabatan.jabatan);
        $('#gajiKaryawan').text(selectedKaryawan[0].jabatan.gaji);

        // Hitung jumlah Hadir, Izin, Sakit, dan Alpha
        var jumlahHadir = 0;
        var jumlahIzin = 0;
        var jumlahSakit = 0;
        var jumlahAlpha = 0;

        selectedKaryawan[0].absents.forEach(function (absent) {
            if (absent.status === 'Hadir') {
                jumlahHadir++;
            } else if (absent.status === 'Izin') {
                jumlahIzin++;
            } else if (absent.status === 'Sakit') {
                jumlahSakit++;
            } else if (absent.status === 'Alpha') {
                jumlahAlpha++;
            }
        });

        // Perbarui nilai elemen HTML dengan jumlah Hadir, Izin, Sakit, dan Alpha
        $('#jumlahHadir').text(jumlahHadir);
        $('#jumlahIzin').text(jumlahIzin);
        $('#jumlahSakit').text(jumlahSakit);
        $('#jumlahAlpha').text(jumlahAlpha);

        // Isi nilai namaKaryawanInput ke dalam input hidden
        $('#namaKaryawanInput').val(selectedKaryawan[0].name);

        // Isi nilai gajiKaryawanInput ke dalam input hidden
        $('#gajiKaryawanInput').val(selectedKaryawan[0].jabatan.gaji);

        // Isi nilai jumlahHadirInput ke dalam input hidden
        $('#jumlahHadirInput').val(jumlahHadir);

        // Isi nilai jumlahIzinInput ke dalam input hidden
        $('#jumlahIzinInput').val(jumlahIzin);

        // Isi nilai jumlahSakitInput ke dalam input hidden
        $('#jumlahSakitInput').val(jumlahSakit);

        // Isi nilai jumlahAlphaInput ke dalam input hidden
        $('#jumlahAlphaInput').val(jumlahAlpha);

        // Isi nilai idUserInput ke dalam input hidden
        $('#idUserInput').val(selectedKaryawan[0].id);
    });
});
