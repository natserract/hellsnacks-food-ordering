 $(document).ready(function() {
     $('#user_login').focus();
     $("#loginform").validate({
         rules: {
             username: {
                 required: true
             },
             password: {
                 required: true
             }
         },
         messages: {
            username: {
                 required: "Masukkan nama pengguna."
             },
             password: {
                 required: "Masukkkan password."
             }
         }
     });
 });
