function tabel(){

//buat object ajax
const xhr = new XMLHttpRequest();
xhr.onload = function(){
    if(xhr.readyState == 4 && xhr.status == 200){
        document.getElementById("refresh").innerHTML = this.responseText;
    }
}

//eksekusi ajax
xhr.open('GET','ajax/book+status.php',true);
xhr.send();
}
setInterval(function(){
    tabel();
},900);