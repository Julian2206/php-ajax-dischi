<?php


//$database = "https://flynn.boolean.careers/exercises/api/array/music";


$database = [
    [
        'title' => 'New Jersey',
        'author' => 'Bon Jovi',
        'genre' => 'Rock',
        'year' => 1988,
        'poster' => 'https://images-na.ssl-images-amazon.com/images/I/51sBr4IWDwL.jpg',
    ],

    [
        'title' => 'Live at Wembley 86',
        'author' => 'Queen',
        'genre' => 'Pop',
        'year' => 1992,
        'poster' => 'https://img.discogs.com/vknPDdrqRbT92pNRX0W4I5N91jg=/fit-in/300x300/filters:strip_icc():format(jpeg):mode_rgb():quality(40)/discogs-images/R-1246953-1448927086-6590.jpeg.jpg'
    ],

    [
        'title' => 'Ten\'s Summoner\'s <pre> Tales </pre>',
        'author' => 'Sting',
        'genre' => 'Pop',
        'year' => 1993,
        'poster' => 'https://images-na.ssl-images-amazon.com/images/I/41JD3CW65HL.jpg'
    ],

    [
        'title' => 'Bad',
        'author' => 'Michael Jackson',
        'genre' => 'Pop',
        'year' => 1987,
        'poster' => 'https://m.media-amazon.com/images/I/71K9CbNZPsL._SS500_.jpg'
    ],

    [
        'title' => 'Brave new World',
        'author' => 'Iron Maiden',
        'genre' => 'Metal',
        'year' => 2000,
        'poster' => 'https://images-na.ssl-images-amazon.com/images/I/810nSIQOLiL._SY355_.jpg'
    ],

    [
        'title' => 'One more car, <pre> one more raider </pre>',
        'author' => 'Eric Clapton',
        'genre' => 'Rock',
        'year' => 2002,
        'poster' => 'https://upload.wikimedia.org/wikipedia/en/9/97/Eric_Clapton_OMCOMR.jpg'
    ],

    [
        'title' => 'Made in Japan',
        'author' => 'Deep Purple',
        'genre' => 'Rock',
        'year' => 1972,
        'poster' => 'https://images-na.ssl-images-amazon.com/images/I/51rggtPgmRL.jpg'
    ],

    [
        'title' => 'And Justice for All"',
        'author' => 'Metallica',
        'genre' => 'Metal',
        'year' => 1988,
        'poster' => 'https://images-na.ssl-images-amazon.com/images/I/81r3FVfNG3L._SY355_.jpg'
    ],


];



//var_dump($data);




/* Stampare a schermo una decina di dischi musicali (vedi screenshot).
Utilizziamo: Html, CSS, VueJS (importato tramite CDN), axios, PHP
Prima Versione:
Stampiamo i dischi solo con l’utilizzo di PHP, 
che stampa direttamente i dischi in pagina: al caricamento della pagina ci saranno tutti i dischi.
Seconda Versione:
Attraverso l’utilizzo di axios: 
al caricamento della pagina axios chiederà, attraverso una chiamata api, i dischi a php e li stamperà attraverso vue.
Prima Milestone: recuperare la lista dei dischi tramite una chiamata axios 
e stampare la lista dei titoli degli album all'interno di una lista non numerata <ul>
Seconda Milestone: per ogni disco, stampare una card con tutte le informazioni
Bonus:
Attraverso un’altra chiamata api, filtrare gli album per genere lato backend.
Consigli del giorno:
Per semplicità utilizzate vue tramite la cdn e non utilizzate i componenti: 
non è il focus di questo esercizio :occhiolino:
Create  una cartella separata per ciascuna delle due versioni: 
una conterrà l'index.php, l'altra conterrà l'index.html e il file main.js. 
Il foglio di stile style.css sarà nella root dell'esercizio, in comune per entrambi gli index
Volendo, anche il file con i dati dei dischi potrebbe trovarsi nella 
root dell'esercizio ed essere in comune per entrambe le versioni. 
Ci sarà però bisogno di aggiungere un controllo per distinguere quando 
il file viene incluso tramite php o richiesto da una chiamata api
 */