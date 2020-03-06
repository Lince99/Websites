# Esercizio in preparazione all'esame
> Visitare index.php per la traccia completa

Esercizio completo con MySQL, PHP v7 e Bootstrap v4

![](header.png)

## Dipendenze

- PHP 7.2.24
- MySQL 14.14
- Apache 2.4.38

Il resto, come lo stile e il database stesso, verranno creati al primo avvio del sito nel server

## Development setup

E' richiesto un utente www-data per il database in locale, oppure cambiare il file https://github.com/Lince99/Websites/blob/master/Esercizio_esame_2013/backend/db_config.php con i dati desiderati

```sh
cd ~
mkdir Repos
cd Repos
git clone https://github.com/Lince99/Websites/tree/master/Esercizio_esame_2013
cd /var/www
sudo mkdir Esercizio_esame_2013
sudo chown $USER:$USER Esercizio_esame_2013
cd Esercizio_esame_2013
ln -s ~/Repos/Websites/Esercizio_esame_2013 .
```

Per avere dati generati per testare il database:

```bash
cd ~/Repos/Websites/Esercizio_esame_2013/backend/sql
mysql -u www-data -p
source insert_generated_data.sql
```

## Meta

Lince99

Distributed under the UnLicense license. See ``LICENSE`` for more information.

Altri progetti:  
[https://github.com/Lince99/](https://github.com/Lince99/)

## Contributing

1. Fork it (<https://github.com/Lince99/Websites>)
2. Create your feature branch (`git checkout -b feature/fooBar`)
3. Commit your changes (`git commit -am 'Add some fooBar'`)
4. Push to the branch (`git push origin feature/fooBar`)
5. Create a new Pull Request
