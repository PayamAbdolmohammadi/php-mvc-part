# PHP MVC Part

Dies ist ein einfacher PHP-Projektteil, der auf dem **MVC (Model-View-Controller)**-Muster basiert. Ziel ist es, die Grundlagen von Composer, Autoloading und MVC-Struktur in der PHP-Entwicklung zu demonstrieren.

## 📁 Projektstruktur
php-mvc-part/
├── app/             # Controller, Models und Views

├── config/          # Konfigurationsdateien

├── public/          # Öffentlich zugänglicher Einstiegspunkt (index.php)

├── vendor/          # Von Composer verwaltete Abhängigkeiten

├── bootstrap.php    # Initialisierung und Bootstrapping

├── composer.json    # Composer Konfiguration

├── composer.lock    # Genaue Abhängigkeitsversionen

└── .htaccess        # URL-Rewriting für Apache


## 🛠️ Voraussetzungen


- PHP >= 7.4

- [Composer](https://getcomposer.org)


## 🚀 Installation


1. Repository klonen:

   ```bash

   git clone https://github.com/PayamAbdolmohammadi/php-mvc-part.git

   cd php-mvc-part

2. Composer-Abhängigkeiten installieren:


composer install


 3. Lokalen Entwicklungsserver starten:


php -S localhost:8000 -t public/

⚙️ Composer & Autoloading



Dieses Projekt nutzt Composer Autoloading (PSR-4). Im composer.json wird folgender Namespace definiert:


"autoload": {
  "psr-4": {
    "App\\": "app/"
  }
}



"autoload": {
  "psr-4": {
    "App\\": "app/"
  }
}

Nach dem Hinzufügen neuer Klassen:

composer dump-autoload


🔍 MVC-Kurzüberblick

 • Model – Interagiert mit Datenquellen (z. B. Datenbanken)
 
 • View – Präsentiert Daten für den Benutzer
 
 • Controller – Vermittelt zwischen Benutzeraktionen, Modellen und Views



📚 Ressourcen

 • Composer Dokumentation (https://getcomposer.org/doc/)
 
 • MVC Pattern – Wikipedia (https://de.wikipedia.org/wiki/Model_View_Controller)
 
 • PHP: The Right Way (https://phptherightway.com/)


⸻


👨‍💻 Autor

Payam Abdolmohammadi

📍 Stuttgart, Deutschland

📧 payamabdolmohammadii@gmail.com
