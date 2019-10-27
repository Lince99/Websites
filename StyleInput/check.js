var val0 = 0;
var val1 = 0;
var tot = 0;

function equazione() {
    var a, b, c, delta, ris0, ris1;

    a = document.getElementById('eq0').value;
    a = eval(a);
    b = document.getElementById('eq1').value;
    b = eval(b);
    c = document.getElementById('eq2').value;
    c = eval(c);

    delta = Math.pow(b,2) - (4*a*c);
    if(delta < 0) {
        document.getElementById('ris_eq0').innerHTML = "Non esistono soluzioni";
        document.getElementById('ris_eq1').innerHTML = "";
    }
    else if(delta == 0){
        ris0 = ((-1)*b+Math.sqrt(delta)) / (2*a);
        if(isNaN(ris0)) {
            document.getElementById('ris_eq0').innerHTML = "Input non valido";
            document.getElementById('ris_eq1').innerHTML = "!";
        }
        else {
            document.getElementById('ris_eq0').innerHTML = ris0.toFixed(2);
            document.getElementById('ris_eq1').innerHTML = "";
        }
    }
    else {
        ris0 = ((-1)*b+Math.sqrt(delta)) / (2*a);
        ris1 = ((-1)*b-Math.sqrt(delta)) / (2*a);
        if(isNaN(ris0) || isNaN(ris1)) {
            document.getElementById('ris_eq0').innerHTML = "Input non valido";
            document.getElementById('ris_eq1').innerHTML = "!";
        }
        else {
            document.getElementById('ris_eq0').innerHTML = ris0.toFixed(2);
            document.getElementById('ris_eq1').innerHTML = ris1.toFixed(2);
        }
    }
}
