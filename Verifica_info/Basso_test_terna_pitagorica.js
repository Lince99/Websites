/*Basso Nicola 5^AI*/

function verifica_valori() {
    var a = document.getElementById('a').value;
    var b = document.getElementById('b').value;
    var c = document.getElementById('c').value;
    var result = 0;

    if(isNaN(a) || isNaN(b) || isNaN(c))
        result = 0;
    else if((Math.pow(a, 2) + Math.pow(b, 2)) == Math.pow(c, 2))
        result = 1;
    else
        result = 0;

    //stampa il risultato
    if(result == 0) {
        document.getElementById('ris').value = "NO";
        document.getElementById('ris').style.background = 'red';
    }
    else {
        document.getElementById('ris').value = "SI";
        document.getElementById('ris').style.background = 'green';
    }
}
