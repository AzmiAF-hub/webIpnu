const base = 'http://localhost:8080';

$("#signUp").on('click', function(){
    if($('#nama1').val() == '' || $('#nama2').val() == '' || $('#username').val() == '' || $('#password1').val() == ''){
        alert("Harap isi data secara lengkap terlebih dahulu !!!")
    } else if ($('#password1').val() !== $('#password2').val()) {
        alert("Password Tidak Cocok !!");
    } else if ($('#jabatan').val() == 'Pilih Jabatan') {
        alert("Pilih jabatan kepengurusan anda !!");
    } else if ($('#lembaga').val() == 'Pilih Lembaga') {
        alert("Pilih lembaga kepengurusan anda !!");
    } else if ($('#periode').val() == 'Pilih Periode') {
        alert("Pilih periode kepengurusan anda !!");
    } else {
        $.ajax({
            'url': base + '/Apis/register',
            'dataType': 'JSON',
            'type': "POST",
            'data': $("#formSignUp").serialize()
        })

        alert("Akun Telah Terdaftar\nSilahkan Hubungi Admin untuk Verifikasi Akun Anda !!!")
        window.location.href = base
    }
})

$('#signIn').on('click', function(){
    $.ajax({
        'url': base + "/Apis/login",
        // 'dataType': "JSON",
        'type': "GET",
        'data': $("#formSignIn").serialize(),
        success: function(res){
            if(res.length > 5){
                $('#msg').text(res)
            } else {
                $('#msg').text("")
                document.location.href = res
            }
        }
    })
})