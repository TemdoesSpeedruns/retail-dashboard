# Retail Dashboard

## Over het project

Dit project is een retailapplicatie die bedoeld is om het werk binnen verschillende filialen makkelijker te maken. Met de applicatie kunnen winkelbeheerders hun eigen filiaal beheren en kan het management de gegevens van alle filialen bekijken.

De applicatie geeft onder andere inzicht in de voorraad, verkoopcijfers, bestellingen en klachten. Ook kunnen gegevens worden weergegeven in grafieken en tabellen, zodat resultaten makkelijker te vergelijken zijn.

## Functionaliteiten

De applicatie is bedoeld om de volgende functies te ondersteunen:

- Dashboard met belangrijke informatie over het filiaal.
- Overzicht van producten en actuele voorraad.
- Waarschuwingen bij producten met een lage voorraad.
- Bestellingen plaatsen en bijhouden.
- Verkoopcijfers en winst bekijken.
- Filialen met elkaar vergelijken.
- Grafieken en tabellen voor analyses.
- Rapportages exporteren naar PDF.
- Overzicht van openstaande klachten en klantvragen.
- Aanbiedingen en acties per filiaal bekijken.
- Gebruikersaccounts aanvragen en laten goedkeuren.

## Gebruikte technologieën

| Technologie | Versie |
|---|---|
| PHP | 8.4 |
| Laravel | 12.x |
| HTML | HTML5 |
| CSS | CSS3 |
| JavaScript | ES2024 |
| Bootstrap | 5.3 |
| MySQL | 8.4 |
| Apache | 2.4 |
| Composer | 2.x |
| Node.js | 22.x |
| npm | 10.x |

## Benodigdheden

Om het project lokaal te kunnen draaien heb je de volgende programma's nodig:

- PHP 8.4
- Composer 2.x
- Node.js 22.x
- npm 10.x
- MySQL 8.4
- Laragon of een andere lokale ontwikkelomgeving
- Visual Studio Code (aanbevolen)

## Installatie

Volg de onderstaande stappen om het project lokaal op te zetten.

**1. Repository downloaden**

Clone de repository:

```bash
git clone JOUW_REPOSITORY_URL
```

Ga daarna naar de projectmap:

```bash
cd retail-dashboard
```

**2. PHP-pakketten installeren**

```bash
composer install
```

**3. Environment-bestand aanmaken**

Maak een kopie van het voorbeeldbestand:

```bash
cp .env.example .env
```

Genereer daarna een applicatiesleutel:

```bash
php artisan key:generate
```

**4. Database instellen**

Maak in MySQL een database aan met de naam:

```text
retail_dashboard
```

Pas vervolgens de databasegegevens aan in het `.env`-bestand:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=retail_dashboard
DB_USERNAME=root
DB_PASSWORD=
```

Vul indien nodig je eigen databasegebruikersnaam en wachtwoord in.

**5. Database voorbereiden**

Voer de migrations uit:

```bash
php artisan migrate
```

Als er seeders aanwezig zijn, kun je deze uitvoeren met:

```bash
php artisan db:seed
```

**6. Frontend installeren**

Installeer de benodigde packages:

```bash
npm install
```

Start daarna Vite:

```bash
npm run dev
```

**7. Applicatie starten**

Open een tweede terminal en voer uit:

```bash
php artisan serve
```

De applicatie is daarna bereikbaar via:

http://127.0.0.1:8000

## Projectstructuur

De belangrijkste mappen binnen het Laravel-project zijn:

| Map | Inhoud |
|---|---|
| `app/Models` | Modellen en database-relaties |
| `app/Http/Controllers` | Controllers voor de applicatie |
| `database/migrations` | Database-tabellen |
| `database/seeders` | Voorbeeldgegevens |
| `resources/views` | De pagina's van de applicatie |
| `routes` | Routes van de applicatie |
| `public` | Publieke bestanden zoals afbeeldingen en CSS |

## Database

De database wordt gebruikt om gegevens van de verschillende filialen op te slaan. Denk hierbij aan gebruikers, producten, voorraad, bestellingen en verkoopgegevens.

De database wordt opgebouwd aan de hand van het ERD dat voor dit project is gemaakt.

## Ontwikkeling

Dit project wordt bijgehouden via GitHub. Hier worden de broncode, technische ontwerpen en taken voor de ontwikkeling opgeslagen.

Wijzigingen worden bijgehouden met Git, zodat meerdere ontwikkelaars aan het project kunnen werken.

## Status

Het project bevindt zich momenteel in de ontwikkelfase. De technische ontwerpen en de basis van de applicatie worden verder uitgewerkt.