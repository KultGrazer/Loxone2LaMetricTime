## Loxone 2 LaMetric Time

Dieses Script holt sich aus Ihrem Loxone Smarthome Daten und stell diese auf Ihrer LaMetric Time dar.

### Vorwort

In diesm Beispiel wird die gemessene Aussentemperatur "ATemp" mit einem beliebeigen Symbol auf Ihrer LaMetric Time dargestellt.

### Erforderlich

Sie benötigen für das Script:

* Eine LaMetric Time mit bereits aktivierten Account.
* Eine Webserver mit PHP und *allow_url_fopen "1"*
* Loxone Smart Home mit externem Zugriff über Loxone CloudDNS, einem anderen DNS-Abieter oder einer fixen IP.

### 1. Vorbereitung

1. Erstellen Sie in Ihrer Loxone Config einen *Virtuellen Status* und Bezeichnen Sie den Baustein eindeutig. In diesem Beispiel "ATemp"
2. Definieren Sie die später angezeigte Einheit. z.B. "<v.1>°"
3. Verknüpfen Sie den Baustein mit Ihrer Aussentemperatur.
4. Laden Sie die Config in Ihr Miniserver.
5. Prüfen Sie ob die Aussentemperatur via Loxone Webservice als "value" in der Loxone-XML-Datei dargestellt wird: http://MiniserverIP:PORT/dev/sps/io/ATemp/state

### 2. App in LaMetric erstellen.

1. Gehen Sie auf https://developer.lametric.com/ und loggen Sie sich mit Ihrem LaMetric-Account ein.
2. Klicken Sie auf **CREATE** um eine neue App zu erstellen.
3. Wählen sie **INDICATOR APP** und Klicken Sie **CREATE**
4. Wählen Sie ein Logo aus.
5. Blindtext einfügen, z.B. "24.1°"
6. Wählen Sie *Communication Type* **PULL**
7. Wählen Sie als *Poll frequency* **1 min** oder höher, um Ihren Miniserver nicht zu überlasten.

Sie erhalten jetzt das benötigte *Data format* welches das Design Ihrer Darstellung definiert.

### 3. PHP-Datei vorbereiten.

1. Öffen Sie die *getdate.php* Datei mit einem Editor (z.B. Notepad++)
2. Ergänzen Sie **$username**, **$password** und **$url** mit Ihren Miniserver Daten.
3. Kopieren Sie das *Data format* aus der zuvor Angelegten App von Anfang bis Anfang Ihres Blindtextes und ergänzen Sie diesem im ersten echo-Abschnitt zwischen den Klammern (""). 
4. Kopieren Sie das *Data format* aus der zuvor Angelegten App von Ende Ihres Blindtextes bis zum Ende der Daten und ergänzen Sie diese im dritten echo-Abschnitt zwischen den Klammern (""). 
5. Die Absätze werden nicht benötigt und können gelöscht werden.
6. Vergewissen Sie sich nun das die PHP-Echo Klammern (") am Anfang und am Ende des Strings vorhanden sind und setzen Sie vor jedem (") aus dem *Data format* einen Backslasch damit diese bei der Ausgabe dargestellt werden. Aus (") wird (\\")
7. Laden Sie die Datei auf Ihren Webserver und Rufen sie die via z.B. (http://www.ihreseite.at/getdate.php) auf.
8. Sie sollten eine Ausgabe erhalten, welcher der zuvor erstellen *Data format* ident ist und Ihre Aussentemperatur enthält. Absätze sind nicht nötigt.

### 4. App in LaMetrics finalisieren.

1. Ergänzen Sie *URL to get data from* mit Ihrer Url z.B. (http://www.ihreseite.at/getdate.php) und prüfen Sie die Korrektheit mit **VALIDATE**. Wenn alles geklappt hat, erscheint der Rahmen grün.
2. Klicken Sie **NEXT** und definieren Sie die Store-Infos wie *App name* und *Short description*.
3. Lassen sie **PRIVATE APP** angehackt, damit Ihre App nicht im Stroe erscheint.
4. Klicken Sie **SAVE** und prüfen Sie in der Darstelleung, ob Ihre Daten übernommen werden.
5. Wenn alles funktioniert, klicken Sie auf **PUBLISH**. Ihre App wird nun geprüft und sollte innerhalb weniger Minuten freigegeben werden.

### 5. App in der LaMetrics App hinzufügen.

1. Sobald die App freigebene ist, können Sie Ihre App in der iOS- oder Android-App *LaMetric Time* mit dem Filter *Privat* finden und hinzufügen.


