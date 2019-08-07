//Get Focus
$(function() {
    $('#user_form').focus();
});

//Form Validation 

$(document).ready(function() {
    $("#signup-form").validate({
        rules: {
            username: {
                required: true,
                minlength: 2,
                maxlength: 20
            },
            email: {
                required: true,
                email: true,
                maxlength: 50
            },
            password: {
                required: true,
                minlength: 5,
                maxlength: 32
            },
            confirm_password: {
                required: true,
                minlength: 5,
                maxlength: 32,
                equalTo: "#pass_form"
            },
            telp: {
                required: true,
                maxlength: 13,
                number: true
            },
            alamat: {
                required: true
            }
        },
        messages: {
            username: {
                required: "Masukkan nama pengguna Anda.",
                minlength: "Nama pengguna Anda harus terdiri dari minimal 2 karakter.",
                maxlength: "Nama pengguna Anda harus terdiri dari maksimal 20 karakter."
            },
            email: {
                required: "Masukkan alamat email Anda.",
                email: "Harap masukkan alamat email yang benar.",
                maxlength: "Harap masukkan alamat email yang benar."
            },
            password: {
                required: "Masukkan kata sandi Anda.",
                minlength: "Kata sandi Anda harus minimal 5 karakter.",
                maxlength: "Kata sandi Anda maksimal 32 karakter."

            },
            confirm_password: {
                required: "Masukkan kata sandi Anda.",
                minlength: "Kata sandi Anda harus minimal 5 karakter.",
                maxlength: "Kata sandi Anda maksimal 32 karakter.",
                equalTo: "Mohon masukkan kata sandi yang sama seperti di atas."
            },
            telp: {
                required: "Masukkan no.telepon Anda.",
                maxlength: "Harap masukkan tidak lebih dari 13 karakter.",
                number: "Masukkan nomor yang valid."
            },
            alamat: {
                required: "Masukkan alamat Anda."
            }

        }
    });
});

$(document).ready(function(){
    $('.alert').fadeTo(3000, 500).slideUp(500);
});
 
