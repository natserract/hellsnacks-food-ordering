$(document).ready(function() {
    $('#name').focus();
    $('#checkout_form').validate({
        rules: {
            provinsi: {
                required: true
            },
            kota: {
                required: true
            },
            name: {
                required: true,
                minlength: 3
            },
            email: {
                required: true,
                email: true
            },
            telepon: {
                required: true,
                minlength: 12,
                maxlength: 13,
                number: true
            },
            alamat: {
                required: true
            }
        },
        messages: {
            provinsi: {
                required: "Pilih provinsi."
            },
            kota: {
                required: "Pilih kota."
            },
            name: {
                required: "Masukkan nama lengkap.",
                minlength: "Nama Lengkap minimal 3 karakter"
            },
            email: {
                required: "Masukkan email.",
                email: "Masukkan email yang benar"
            },
            telepon: {
                required: "Masukkan no.telepon",
                minlength: "Minimal 12 angka.",
                maxlength: "Maksimal 13 angka.",
                number: "Masukkan nomor yang benar."
            },
            alamat: {
                required: "Masukkan alamat."
            }

        }
    });
});