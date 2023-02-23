function hideshow(){
    let checkBox = document.getElementById('x1');
    let checkBox2 = document.getElementById('x2');
    let checkBox3 = document.getElementById('x3');
    let checkBox4 = document.getElementById('x4');
    let checkBox5 = document.getElementById('x5');
    let checkBox6 = document.getElementById('x6');
    let checkBox7 = document.getElementById('x7');
    let checkBox8 = document.getElementById('x8');
    let text = document.getElementById("submit")
    if (checkBox.checked ||checkBox2.checked || checkBox3.checked || checkBox4.checked || checkBox5.checked || checkBox6.checked || checkBox7.checked || checkBox8.checked == true){
        text.style.display = "block";
      } else {
        text.style.display = "none";
      }
    if (checkBox.checked == true){
        document.getElementById("a1").classList.add('block');
        document.getElementById("a2").classList.add('block');
        document.getElementById("a3").classList.add('block');
        document.getElementById("a4").classList.add('block');
        document.getElementById("a5").classList.add('block');
    } else {
        document.getElementById("a1").classList.remove('block');
        document.getElementById("a2").classList.remove('block');
        document.getElementById("a3").classList.remove('block');
        document.getElementById("a4").classList.remove('block');
        document.getElementById("a5").classList.remove('block');
    }
    if (checkBox2.checked == true){
        document.getElementById("b1").classList.add('block');
        document.getElementById("b2").classList.add('block');
        document.getElementById("b3").classList.add('block');
        document.getElementById("b4").classList.add('block');
        document.getElementById("b5").classList.add('block');
    } else {
        document.getElementById("b1").classList.remove('block');
        document.getElementById("b2").classList.remove('block');
        document.getElementById("b3").classList.remove('block');
        document.getElementById("b4").classList.remove('block');
        document.getElementById("b5").classList.remove('block');
    }
    if (checkBox3.checked == true){
        document.getElementById("c1").classList.add('block');
        document.getElementById("c2").classList.add('block');
        document.getElementById("c3").classList.add('block');
        document.getElementById("c4").classList.add('block');
        document.getElementById("c5").classList.add('block');
    } else {
        document.getElementById("c1").classList.remove('block');
        document.getElementById("c2").classList.remove('block');
        document.getElementById("c3").classList.remove('block');
        document.getElementById("c4").classList.remove('block');
        document.getElementById("c5").classList.remove('block');
    }
    if (checkBox4.checked == true){
        document.getElementById("d1").classList.add('block');
        document.getElementById("d2").classList.add('block');
        document.getElementById("d3").classList.add('block');
        document.getElementById("d4").classList.add('block');
        document.getElementById("d5").classList.add('block');
    } else {
        document.getElementById("d1").classList.remove('block');
        document.getElementById("d2").classList.remove('block');
        document.getElementById("d3").classList.remove('block');
        document.getElementById("d4").classList.remove('block');
        document.getElementById("d5").classList.remove('block');
    }
    if (checkBox5.checked == true){
        document.getElementById("e1").classList.add('block');
        document.getElementById("e2").classList.add('block');
        document.getElementById("e3").classList.add('block');
        document.getElementById("e4").classList.add('block');
        document.getElementById("e5").classList.add('block');
    } else {
        document.getElementById("e1").classList.remove('block');
        document.getElementById("e2").classList.remove('block');
        document.getElementById("e3").classList.remove('block');
        document.getElementById("e4").classList.remove('block');
        document.getElementById("e5").classList.remove('block');
    }
    if (checkBox6.checked == true){
        document.getElementById("f1").classList.add('block');
        document.getElementById("f2").classList.add('block');
        document.getElementById("f3").classList.add('block');
        document.getElementById("f4").classList.add('block');
        document.getElementById("f5").classList.add('block');
    } else {
        document.getElementById("f1").classList.remove('block');
        document.getElementById("f2").classList.remove('block');
        document.getElementById("f3").classList.remove('block');
        document.getElementById("f4").classList.remove('block');
        document.getElementById("f5").classList.remove('block');
    }
    if (checkBox7.checked == true){
        document.getElementById("g1").classList.add('block');
        document.getElementById("g2").classList.add('block');
        document.getElementById("g3").classList.add('block');
        document.getElementById("g4").classList.add('block');
        document.getElementById("g5").classList.add('block');
    } else {
        document.getElementById("g1").classList.remove('block');
        document.getElementById("g2").classList.remove('block');
        document.getElementById("g3").classList.remove('block');
        document.getElementById("g4").classList.remove('block');
        document.getElementById("g5").classList.remove('block');
    }
    if (checkBox8.checked == true){
        document.getElementById("h1").classList.add('block');
        document.getElementById("h2").classList.add('block');
        document.getElementById("h3").classList.add('block');
        document.getElementById("h4").classList.add('block');
        document.getElementById("h5").classList.add('block');
    } else {
        document.getElementById("h1").classList.remove('block');
        document.getElementById("h2").classList.remove('block');
        document.getElementById("h3").classList.remove('block');
        document.getElementById("h4").classList.remove('block');
        document.getElementById("h5").classList.remove('block');
    }
}
