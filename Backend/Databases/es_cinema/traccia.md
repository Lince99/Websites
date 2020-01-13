# database cinema query semplici 3_12

Scrivere e salvare in un file con estensione .sql le seguenti query per interrogare il database di esempio:

ATTORI(CodAttore, Nome, AnnoNascita, Nazionalita)  
RECITA(CodAttore*, CodFilm*)  
FILM(CodFilm, Titolo, AnnoProduzione, Nazionalita, Regista, Genere)  
PROIEZIONI(CodProiezione, CodFilm*, CodSala*, Incasso, DataProiezione)  
SALE(CodSala, Posti, Nome, Citta)  

1. Il nome di tutte le sale cinematografiche di Pisa
1. Il titolo dei film di Fellini prodotti dopo il 1960
1. Il titolo dei film di fantascienza giapponesi o francesi prodotti dopo il 1990
