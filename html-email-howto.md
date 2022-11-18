# Szablon wiadomości email w html
Jak budować html email dla różnych klientów pocztowych.

## Klient pocztowy
Najfajniej działa w Thunderbird i gmail

## Jak się to robi
```sh
Najprościej używać tabelek podobno ale można i bez tabelek też sprawnie działa.
Email <body class="email-body"> dodaj klasę .email-body {display: block; padding: 0px; margin: 0px;}
Trzeba dodać <div class="email-bg"> na tło dla wiadomości: .email-bg {float: left; width: 100%; overflow: hidden; padding: 0px; margin: 0px;}
Tabelka: table {border-collapse: colapse; border-spacing: 0; border: 0px; width: 640px; max-width: 90%; margin: 50px auto;}
Tabelka row: table th, table td {padding: 0px; border:0px; vertical-align: top;}
Obrazki img, a img {display: inline-block; max-width: 100%; border: 0px;} 
Buttony koniecznie z tagiem: a.email-button {color: #09f !important; text-decoration: none;} a.email-button:hover {color: #f23 !important}
Linki a: {color: #09f !important}; a:hover {color: #5c5 !important} a:active {color: red !important} a:viited {color: purple !important}
Fonty praktycznie nie działają chyba że w Thunderbird
Fonty importować przez <link> w <head>
Najlepiej formatować style css dla każdego <taga> gdyż różnie są defaultowo sformatowane w klientach pocztowych, np. nie ma marginesów h1, p w interia.pl
Div background: url() działa tylko trzeba rozmiar diva
Można użyć <br /> w tagu <p>
Można używać flex w tabelkach
Można używać procentów dla rozmiarów, width, height, padding i margin zamiast box-sizing: border-box
Css transitions tylko w Thunderbird
Używać !important do nadpisywania
Obrazki svg przez <img src="http://your.page/twitter.svg" alt="Icon">
```

## Nie używać w Css
```sh
@import()
element:nth-child()
position: absolute
gap: 25px;
align-content: space-between;
box-sizing: border-box; nie wszędzie działa dla <img> przy transition: all .6s;
Używać można procentów dla rozmiarów, width, height, padding i margin zamiast box-sizing
```

## Nie używać w Html
```
Tagów <svg> w kodzie html
Fontów importowanych przez @import w <style> psuje formatowanie w yahoo.com
```
