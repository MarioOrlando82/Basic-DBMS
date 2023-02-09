
function validasi(){
    let email = document.getElementById("email").value
    let password = document.getElementById("password").value
    let confirmpassword = document.getElementById("confirmpassword").value

    //EMAIL
    if(email == ""){
        alert("Email harus diisi!")
        return false;
    }else if(email.split("@").length > 2 || email.split("@").length == 1){
        alert("Email wajib untuk memiliki satu @")
        return false
    }else if(!email.split("@")[1].includes(".")){
        alert("Email wajib untuk memiliki . setelah @")
        return false
    }

    //PASSWORD
    if(password == ""){
        alert("Password harus diisi!")
        return false;
    }
    if(password.length < 8){
        alert("Password membutuhkan minimal 8 karakter!")
        return false;
    }
    if(password.search (/[A-Z]/) < 0){
        alert("Password membutuhkan setidaknya 1 huruf kapital!")
        return false;
    }
    if(password.search (/[0-9]/) < 0){
        alert("Password membutuhkan setidaknya 1 angka!")
        return false;
    }

    //CONFIRM PASSWORD
    if(confirmpassword == ""){
        alert("Konfirmasi password harus diisi")
        return false;
    }
    if(confirmpassword != password){
        alert("Konfimasi password dengan password tidak sesuai")
        return false;
    }
    alert("Anda telah berhasil registrasi!")
    return true;

}

function show(){
    document.getElementById('menuham').style.display = "inline-block";
}


function show(){
    if(menuham.style.display !== 'none'){
        menuham.style.display = 'none';
    } else {
        menuham.style.display = 'inline-block';
    }
}