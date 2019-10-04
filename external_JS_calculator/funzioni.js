// esempio di file con funzioni e codice Javascript
// NOTA: salvarlo in formato .js e non inserire i tag <script> al suo
// interno, servono solo se il codice è inserito in un file .html

var a;
var b;
var risultato;

function get_values() {
    a = document.getElementById('valore1').value;
    a = eval(a);
    if(isNaN(a))
        a = 0;
    b = document.getElementById('valore2').value;
    b = eval(b);
    if(isNaN(b))
        b = 0;
}

function somma() {
   get_values();
   risultato = a + b;
   document.getElementById("risultato").value = risultato;
   risultato = "";
}

function sottrazione() {
   get_values();
   risultato = a - b;
   document.getElementById("risultato").value = risultato;
   risultato = "";
}

function divisione() {
   get_values();
   risultato = a - b;
   document.getElementById("risultato").value = risultato;
   risultato = "";
}

function moltiplicazione() {
    get_values();
    risultato = a * b;
    document.getElementById('risultato').value = risultato;
    risultato = "";
}

function divisione() {
    get_values();
    if(b == 0)
        document.getElementById('risultato').value = "Division by 0";
    else {
        risultato = a / b;
        document.getElementById('risultato').value = risultato;
        risultato = "";
    }
}

function potenza() {
    get_values();
    if(a == 0 && b == 0)
		risultato = "Undefined";
	else
		risultato = Math.pow(a,b);
    document.getElementById('risultato').value = risultato;
    risultato = "";
}

function arrotonda() {
    get_values();
    risultato = a.toFixed(b);
    document.getElementById('risultato').value = risultato;
    risultato = "";
}

function radice_quadrata() {
    get_values();
    risultato = "a="+Math.sqrt(a)+" b="+Math.sqrt(b);
    document.getElementById('risultato').value = risultato;
    risultato = "";
}
