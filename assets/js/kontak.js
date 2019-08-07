 $(document).ready(function() {
     $('#nama_lengkap').focus();
     $("#contact_form").validate({
         rules: {
             name: {
                 required: true,
                 minlength: 3
             },
             email: {
                 required: true,
                 email: true
             },
             telepon: {
                 minlength: 12,
                 maxlength: 13,
                 number: true
             },
             pesan: {
                 required: true
             }
         },
         messages: {
             name: {
                 required: "Masukkan nama lengkap.",
                 minlength: "Nama Lengkap minimal 3 karakter"
             },
             email: {
                 required: "Masukkan email.",
                 email: "Masukkan email yang benar"
             },
             telepon: {
                 minlength: "Minimal 12 angka.",
                 maxlength: "Maksimal 13 angka.",
                 number: "Masukkan nomor yang benar."
             },
             pesan: {
                 required: "Masukkan pesan."
             }
         }
     });

 });