var val0 = 0;
var val1 = 0;
var tot = 0;

function get_values() {
    val0 = document.getElementById('val0').value;
    val0 = eval(val0);
    val1 = document.getElementById('val1').value;
    val1 = eval(val1);
}

function somma() {
    get_values();
    tot = val0 + val1;
    document.getElementById('ris').innerHTML = tot;
}

function sottrazione() {
    get_values();
    tot = val0 - val1;
    document.getElementById('ris').innerHTML = tot;
}

function moltiplicazione() {
    get_values();
    tot = val0 * val1;
    document.getElementById('ris').innerHTML = tot;
}

function divisione() {
    get_values();
    if(val1 == 0)
        document.getElementById('ris').innerHTML = "Division by 0";
    else {
        tot = val0 / val1;
        document.getElementById('ris').innerHTML = tot;
    }
}

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
        document.getElementById('ris_eq0').innerHTML = "Impossibile calcolare il Delta";
        document.getElementById('ris_eq1').innerHTML = "";
    }
    else if(delta == 0){
        ris0 = ((-1)*b+Math.sqrt(delta)) / (2*a);
        Math.floor(ris0,)
        document.getElementById('ris_eq0').innerHTML = ris0;
        document.getElementById('ris_eq1').innerHTML = "";
    }
    else {
        ris0 = ((-1)*b+Math.sqrt(delta)) / (2*a);
        ris1 = ((-1)*b-Math.sqrt(delta)) / (2*a);
        document.getElementById('ris_eq0').innerHTML = ris0;
        document.getElementById('ris_eq1').innerHTML = ris1;
    }
}
