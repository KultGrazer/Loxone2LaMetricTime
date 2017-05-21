## Loxone 2 LaMetrics Time

Dieses Script holt sch aus Ihrem Loxone Smarthome Daten und stell diese auf Ihrer LaMetrics Time dar.

### Vorwort

In diesm Beispiel wird die gemessene Aussentemperatur "ATemp" mit einem beliebeigen Symbol auf Ihrer LaMetric Time dargestellt.

### Erforderlich

Sie benötigen für das Script:

* Eine LaMetrics Time mit bereits aktivierten Account
* Eine Webserver mit PHP und allow_url_fopen "1"
* Loxone Smart Home mit externem Zugriff über Loxone CloudDNS, einem anderen DNS-Abieter oder einer fixen IP

### 1.) Vorbereitung

a.) Erstellen Sie in Ihrer Loxone Config einen Virtuellen Status und Bezeichnen Sie den Baustein eindeutig. In diesem Beispiel "ATemp"
b.) Definieren Sie die später angezeigte Einheit. z.B.  "<v.1> °C"
c.) Verküpfen Sie den Beustein mit Ihrer Aussentemperatur.
d.) Laden Sie die Config in Ihr Smarthome
e.) Prüfen Sie ob die Aussentemperatur via Loxone Webservice als "value" dargestellt wird: http://IHREPIP:PORT/dev/sps/io/ATemp/state

### 2.) App in LaMetrics erstellen.

a.) Gehen Sie auf https://developer.lametric.com/ und lggen Sie sich mit Ihrem LaMetrics Account an.
b.) Klicken Sie auf


