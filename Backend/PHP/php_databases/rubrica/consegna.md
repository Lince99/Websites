# Rubrica con connessione al database

Realizzare una applicazione con un'interfaccia che consenta di inserire i dati di una rubrica telefonica:
- ID
- nome
- cognome
- indirizzo
- telefono
- ecc...

per poi visualizzarli e cancellarli.

---

Relativamente alla cancellazione di un record e relativi messaggi utente sull'esito dell'operazione, dopo aver lanciato la query da codice PHP, utilizzare la funzione _mysqli_affected_rows_ che restituisce il numero di record interessati dalla query appena eseguita:
1. se restituisce il valore 0, la cancellazione non è avvenuta.
1. se restituisce altro allora ha avuto successo


## Database

Utente (ID, nome, cognome, indirizzo, telefono, dataNascita, email)

PK = Utente.ID
