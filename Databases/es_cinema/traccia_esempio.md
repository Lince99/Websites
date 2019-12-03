# QUERYDB Cinema 2

Facendo riferimento allo schema relazionale della base di dati cinema http://www.e-fermi.it/moodle27/mod/assign/view.php?id=8321 e script creazione scrivere in SQL le seguenti interrogazioni:

1. I titolo dei film dello stesso regista di “Casablanca”
1. Il titolo ed il genere dei film proiettati il giorno di Natale 2004
1. Il titolo dei film in cui recitano M. Mastroianni e S.Loren
1. I titoli dei film che non sono mai stati proiettati a Pisa
1. I titoli dei film che sono stati proiettati solo a Pisa
1. I titoli dei film che non hanno mai avuto una proiezione con incasso superiore a 500 €
1. I titoli dei film le cui proiezioni hanno sempre ottenuto un incasso superiore a 500 €
1. Il nome degli attori italiani che non hanno mai recitato in film di Fellini  
1. Il titolo dei film di Fellini in cui non recitano attori italiani
1. Il titolo dei film senza attori
1. Gli attori che prima del 1960 (AnnoProduzione < 1960) hanno recitato solo nei film di Fellini
1. Gli attori che hanno recitato in film di Fellini solo prima del 1960  
1. Per ogni città, il numero di sale con più di 60 posti
1. Per ogni regista, il numero di film diretti dopo il 1990
1. Per ogni regista, l’incasso totale di tutte le proiezioni dei suoi film
1. Per ogni film di S.Spielberg, il titolo del film, il numero totale di proiezioni a Pisa e l’incasso totale
1. Per ogni regista e per ogni attore, il numero di film del regista con l’attore
1. Il regista ed il titolo dei film in cui recitano meno di 6 attori
1. Per ogni film prodotto dopo il 2000, il codice, il titolo e l’incasso totale di tutte le sue proiezioni
1. Il numero di attori dei film in cui appaiono solo attori nati prima del 1970
1. Per ogni film di fantascienza, il titolo e l’incasso totale di tutte le sue proiezioni
1. Per ogni film di fantascienza il titolo e l’incasso totale di tutte le sue proiezioni successive al 1/1/2001
1. Per ogni film di fantascienza che non è mai stato proiettato prima del 1/1/2001 il titolo e l’incasso totale di tutte le sue proiezioni
1. Per ogni sala di Pisa, che nel mese di gennaio 2005 ha incassato più di 20000 €, il nome della
1. sala e l’incasso totale (sempre del mese di gennaio 2005)
1. I titoli dei film che non sono mai stati proiettati a Pisa
1. I titoli dei film che sono stati proiettati solo a Pisa
1. I titoli dei film dei quali non vi è mai stata una proiezione con incasso superiore a 500 €
1. I titoli dei film le cui proiezioni hanno sempre ottenuto un incasso superiore a 500 €
1. Il nome degli attori italiani che non hanno mai recitato in film di Fellini
1. Il titolo dei film di Fellini in cui non recitano attori italiani
1. Il titolo dei film senza attori
1. Gli attori che prima del 1960 hanno recitato solo nei film di Fellini
1. Gli attori che hanno recitato in film di Fellini solo prima del 1960

**Nota: si possono usare le funzioni aggregate anche nella clausola HAVING**

---

### Alcuni esempi di soluzione delle query più complesse:

13 - Per ogni città, il numero di sale con più di 60 posti
```sql

SELECT s.Città, count(*)
FROM Sale s
WHERE s.Posti > 60
GROUP BY s.Città
```

14 - Per ogni regista, il numero di film diretti dopo il 1990

```sql
SELECT f.Regista, count(*)
FROM Film f
WHERE f.AnnoProduzione > 1990
GROUP BY f.Regista
```

15- Per ogni regista, l’incasso totale di tutte le proiezioni dei suoi film

```sql
SELECT f.Regista, sum(p.Incasso) as IncassoTotale
FROM Film f, Proiezioni p
WHERE f.CodFilm = p.CodFilm
GROUP BY f.Regista
```

16- Per ogni film di S.Spielberg, il titolo del film, il numero totale di proiezioni a Pisa e l’incasso totale (sempre a Pisa)

```sql
SELECT f.Titolo, count(*) as NumeroProiezioni, sum(p.Incasso) as IncassoTotale
FROM Film f, Proiezioni p, Sale s
WHERE f.CodFilm = p.CodFilm and p.CodSala=s.CodSala and f.Regista = ‘S.Spielberg’ and s.Città = ‘Pisa’
GROUP BY f.CodFilm, f.Titolo
```

17- Per ogni regista e per ogni attore, il numero di film del regista con l’attore

```sql
SELECT f.Regista, a.Nome, count(*) as NumeroFilm
FROM Attori a, Recita r, Film f
WHERE a.CodAttore=r.CodAttore and rCodFilm = f.CodFilm
GROUP BY f.Regista, a.CodAttore, a.Nome
```

18 - Il regista ed il titolo dei film in cui recitano meno di 6 attori

```sql
SELECT f.Regista, f.Titolo
FROM Film f, Recita r
WHERE f.CodFilm = r.CodFilm
GROUP BY f.CodFilm, f.Titolo, f.Regista
HAVING count(*) < 6
```

(notare che questa interrogazione non restituisce i film in cui non recita alcun attore)

oppure

```sql
SELECT f.Regista, f.Titolo
FROM Film f
WHERE 6 > (SELECT count (*)
FROM Recita r
WHERE f.CodFilm = r.CodFilm)
```

19- Per ogni film prodotto dopo il 2000, il codice, il titolo e l’incasso totale di tutte le sue proiezioni

```sql
SELECT f.CodFilm, f.Titolo, sum (f.Incasso) as IncasssoTotale
FROM Film f, Proiezioni p
WHERE f.AnnoProduzione > 2000 and f.CodFilm = p.CodFilm
GROUP BY f.CodFilm, f.Titolo
```

20 – Il numero di attori dei film in cui appaiono solo attori nati prima del 1970

```sql
SELECT f.Titolo, count(*) as NumeroAttori
FROM Attori a, Recita r, Film f
WHERE a.CodAttore=r.CodAttore and r.CodFilm = f.CodFilm
GROUP BY f.CodFilm, f.Titolo
HAVING max(a.AnnoNascita) < 1970
```

21- Per ogni film di fantascienza, il titolo e l’incasso totale di tutte le sue proiezioni

```sql
SELECT f.Titolo, sum(p.Incasso) as IncassoTotale
FROM Film f, Proiezioni p
WHERE f.Genere=”Fantascienza”and f..CodFilm = p.CodFilm
GROUP BY f.CodFilm, f.Titolo
```

22- Per ogni film di fantascienza il titolo e l’incasso totale di tutte le sue proiezioni successive al 1/1/01

```sql
SELECT f.Titolo, sum(p.Incasso) as IncassoTotale
FROM Film f, Proiezioni p
WHERE f.Genere=”Fantascienza”and f..CodFilm = p.CodFilm and p.Data > 1/1/01
GROUP BY f.CodFilm, f.Titolo
```

23- Per ogni film di fantascienza che non è mai stato proiettato prima del 1/1/01 il titolo e l’incasso totale di tutte le sue proiezioni

```sql
SELECT f.Titolo, sum(p.Incasso) as IncassoTotale
FROM Film f, Proiezioni p
WHERE f.Genere=”Fantascienza”and f..CodF=p.CodF
GROUP BY f.CodFilm, f.Titolo
HAVING min(p.Data) > = 1/1/01
```

24- Per ogni sala di Pisa, che nel mese di gennaio 2005 ha incassato più di 20000 €, il nome della sala e l’incasso totale (sempre del mese di gennaio 2005)

```sql
SELECT s.Nome, sum(P.Incasso)
FROM Sala s , Proiezioni p
WHERE p.CodSala=s.CodSala and s.Citta = 'Pisa' and p.DataProiezione between 1/1/05 and 31/1/05
GROUP BY s.CodSala, s.Nome
HAVING sum(p.Incasso) > 20.000
```

25- I titoli dei film che non sono mai stati proiettati a Pisa

```sql
SELECT f.Titolo
FROM Film f
WHERE not exists (SELECT * FROM Proiezioni p, Sala s
                                WHERE s.Città=”Pisa” and f.CodFilm=p.CodFilm and p.CodSala =s.CodSala)
```

oppure

```sql
SELECT f.Titolo
FROM Film f
WHERE “Pisa” not in (SELECT s.Città
FROM Proiezioni p, Sala s
WHERE f.CodFilm = p.CodFilm and p.CodSala =s.CodS)
```

26- I titoli dei film che sono stati proiettati solo a Pisa

```sql
SELECT f.Titolo FROM Film f
WHERE not exists (SELECT * FROM Proiezioni, Sala
                               WHERE Città< > ”Pisa” and f.CodFilm = p.CodFilm and p.CodSala = s.CodSala)
```

oppure

```sql
SELECT f.Titolo
FROM Film f
WHERE “Pisa” = All (SELECT s.Città
                                 FROM Proiezioni, Sala
                                 WHERE f.CodFilm = p.CodFilm and p.CodSala = s.CodSala)
```

27- I titoli dei film che non hanno mai avuto una proiezione con incasso superiore a 500 €

```sql
SELECT f.Titolo
FROM Film f
WHERE Not Exists (SELECT *
                                FROM Proiezioni
                                WHERE Incasso > 500 and f.CodFilm = p.CodFilm)
```

oppure

```sql
SELECT f.Titolo
FROM Film f
WHERE 500 > = All (SELECT p.Incasso
                                 FROM Proiezioni p
                                 WHERE f.CodFilm =p.CodFilm)
```

28- I titoli dei film le cui proiezioni hanno sempre ottenuto un incasso superiore a 500 €

```sql
SELECT f.Titolo
FROM Film f
WHERE Not Exists (SELECT *
                                FROM Proiezioni
                                WHERE Incasso < = 500 and f.CodF=p.CodF)
```

oppure

```sql
SELECT f.Titolo
FROM Film f
WHERE 500 < = (SELECT min(p.Incasso)
                                FROM Proiezioni p
                                    WHERE f.CodFilm = p.CodFilm)
```

29- Il nome degli attori italiani che non hanno mai recitato in film di Fellini

```sql
SELECT a.Nome
FROM Attori a
WHERE a.Nazionalità = “Italiana” and Not Exists (SELECT *
                                                                               FROM Film f, Recita r
                                                                               WHERE f.CodFilm = r.CodFilm and r.CodAttore = a.CodAttore and f.Regista = “Fellini”)
```

30- Il titolo dei film di Fellini in cui non recitano attori italiani

```sql
SELECT f.Titolo
FROM Film f
WHERE f.Regista = “Fellini” and Not Exists (SELECT *
                                                                      FROM Attori a, Recita r
                                                                      WHERE f.CodFilm = r.CodFilm and r.CodAttore = a.CodAttore and a.Nazionalità = “Italiana”)
```

31- Il titolo dei film senza attori

```sql
SELECT f.Titolo
FROM Film f
WHERE Not Exists (SELECT *
                                FROM Recita r
                                WHERE f.CodFilm = r.CodFilm)
```

32- Gli attori che prima del 1960 (AnnoProduzione < 1960) hanno recitato solo nei film di Fellini

```sql
SELECT a.Nome
FROM Attori a
WHERE Not Exists (SELECT *
                                FROM Film f, Recita r
                                WHERE f.CodFilm = r.CodFilm and r.CodAttore = a.CodAttore and f.AnnoProduzione < 1960 and f.Regista <> “Fellini”)
```

33- Gli attori che hanno recitato in film di Fellini solo prima del 1960

```sql
SELECT a.Nome
FROM Attori a
WHERE Not Exists (SELECT *
                                FROM Film f, Recita r
                                WHERE f.CodFilm = r.CodFilm and r.CodAttore = a.CodAttore and f.AnnoProduzione > 1960 and f.Regista = “Fellini”)
```
