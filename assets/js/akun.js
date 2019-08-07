$(function() {
    $('#user_form').focus();
});

$(document).ready(function() {
    $("#edit_account_form").validate({
        rules: {
            email: {
                required: true,
                email: true,
                maxlength: 50
            },
            telp: {
                required: true,
                maxlength: 13,
                number: true
            },
            password: {
                required: true
            },
            alamat: {
                required: true
            }
        },
        messages: {
            email: {
                required: "Masukkan alamat email Anda.",
                email: "Harap masukkan alamat email yang benar.",
                maxlength: "Harap masukkan alamat email yang benar."
            },
            
            telp: {
                required: "Masukkan no.telepon Anda.",
                maxlength: "Harap masukkan tidak lebih dari 13 karakter.",
                number: "Masukkan nomor yang valid."
            },
            password: {
                required: "Masukkkan password."
            },
            alamat: {
                required: "Masukkan alamat Anda."
            }
           
        },
        
    });
});