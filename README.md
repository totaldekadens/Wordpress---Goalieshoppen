# Wordpress---Goalieshoppen
Inlämningsuppgift 2  i  kursen Utveckling mot e-handelsplattformar

Skapa en e-handel för en sportbutik. Du väljer själv vilka produkter som ska  säljas. Motivera dina val med en kommentar i arbetsloggen. Skriv ner moment du utfört i arbetsloggen.

## Kravspecifikation:

### Barntema - PHP-kod
Siten skall innehålla ett egenskapat barntema som:  
* Justerar WooCommerce via krok (hook) 
* Lägger till något med add_action
* Tar bort något med remove_action  
* Ersätter en WooCommerce-mallfil igenom template override.
 
### Produkttyper - Wordpress/Woocommerce
Skapa minst fem olika produkter för dessa produktyper (minst en produkt av varje produkttyp). OBS, minst två produktkategorier.
* Variabla produkter  
* Nedladdningsbara produkter  
* Enkla produkter
 
### Egenutvecklat tillägg - PHP-kod
Utveckla ett eget plugin med valfri funktion.
 
## Extern applikation - PHP-kod         Eget Repo:  
Skapa en fristående, extern webbapplikation med data från WordPress & WooCommerce REST API.
Denna applikation simulerar ett affärssystem (eller en mobil app).
I den första synkroniseringen ("synken") läses data in från eHandelsplattformen till affärssystemet med hjälp av WooCommerce REST API (/wp-json/wc/v3/.....). Ingen databas behövs utan data lagras i lokalt minne (local storage). Ett tips är att använda sig av Requests som är ett HTTP bibliotek för att skicka requests.
Datan visas upp på olika sidor som beskrivs nedan:
 
* 5 produkter i två olika kategorier. 
Varje produkt behöver en produktbild, produktnamn, pris, produkt URL och en kortare beskrivning.
* 2 kortare blogginlägg (posts).
* 2 ordrar från två olika kunder. Varje order behöver:
        - order id
        - status
        - totalsumma
        - datum
