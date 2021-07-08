@here, esercizio di oggi, nome repo:
laravel-comics
Create un nuovo progetto Laravel, su cui lavoreremo sia oggi che domani.
Oggi concentratevi sul layout:
create un file di layout in cui inserire la struttura comune di tutte le pagine del sito web (tag head, tag body, ...)
eventualmente includendo header e footer tramite due partials.
Create poi una rotta per visualizzare la lista di tutti i fumetti recuperati da un file inserito nella cartella config e abbellite il tutto sfruttando Sass.
Bonus: Create più pagine che condividono lo stesso layout
Nel file zip allegato ci sono sia le immagini che i dati dei fumetti
Buon Divertimento e confermate lettura :baby-yoda:

# Steps Laravel

## 1. cartella routes e definire le rotte

- definire le rotte get per le varie pagine

```php

Route::get('/news', function () {
    return view('news');
})->name('news');
```

## 2. cartella view e definere il layout

- definire il file di layout in layout/app.blade.php
- definire le views per le varie rotte ed estendere il layout principale  con extends('layout.app')
- definire con i place holder le varie sezione | @yield() @section() e @endsection

## 3. installa dependencies con npm install

```bash
npm install
npm run dev
```

Monitorare gli assets

```bash
npm run watch
```

## 4. Prendete i dati e mostrateli a schermo

## Se qualcosa non funziona e non ci sono errori riavviare server php e nmp

Ecco il link alla nuova repo, Laravel. Useremo questa da ora in poi e tutti i vari live coding che faccio la mattina li troverete in una branch separata.
https://github.com/fabiopacifici/laravel_35


La branch di oggi si chiama molisana

@here, ragaz* scusare magari non era chiaro dalla traccia ma dovere fare solo l'home page. Il design della pagina singola é per domani