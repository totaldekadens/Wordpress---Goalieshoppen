# Wordpress---Goalieshoppen
Inlämningsuppgift 2  i  kursen Utveckling mot e-handelsplattformar

Skapa en e-handel för en sportbutik. Du väljer själv vilka produkter som ska  säljas. Motivera dina val med en kommentar i arbetsloggen. Skriv ner moment du utfört i arbetsloggen.

## Kravspecifikation:

### Barntema
Siten skall innehålla ett egenskapat barntema som:  
   * Justerar WooCommerce via krok (hook) ✅
   * Lägger till något med add_action ✅
   * Tar bort något med remove_action   ✅
   * Ersätter en WooCommerce-mallfil igenom template override. ✅
 
### Produkttyper
Skapa minst fem olika produkter för dessa produktyper (minst en produkt av varje produkttyp). OBS, minst två produktkategorier.
   * Variabla produkter ✅
   * Nedladdningsbara produkter ✅ 
   * Enkla produkter ✅
 
### Egenutvecklat tillägg
   * Utveckla ett eget plugin med valfri funktion. ✅
  
## Extern applikation (eget repo, se länk nedan)       

Skapa en fristående, extern webbapplikation med data från WordPress & WooCommerce REST API.
Denna applikation simulerar ett affärssystem (eller en mobil app).
I den första synkroniseringen ("synken") läses data in från eHandelsplattformen till affärssystemet med hjälp av WooCommerce REST API (/wp-json/wc/v3/.....). Ingen databas behövs utan data lagras i lokalt minne (local storage). Ett tips är att använda sig av Requests som är ett HTTP bibliotek för att skicka requests.
Datan visas upp på olika sidor som beskrivs nedan:
 
   * 5 produkter i två olika kategorier. ✅
     - Varje produkt behöver en produktbild, produktnamn, pris, produkt URL och en kortare beskrivning.
   * 2 kortare blogginlägg (posts).✅
   * 2 ordrar från två olika kunder. Varje order behöver: ✅
     - order id
     - status
     - totalsumma
     - datum

  
Repo: https://github.com/totaldekadens/Mini-ERP


## Sneak peak: 

### Webshop

![1  GS_frontpage_1_desktop](https://user-images.githubusercontent.com/90898648/178286908-79f46585-4c27-4cce-8a05-17a9d7286538.JPG)

![4  GS_store_2_desktop](https://user-images.githubusercontent.com/90898648/178286929-b06f6770-6387-4d89-bebb-f46868d1e503.JPG)

![5  GS_productpage_1_desktop](https://user-images.githubusercontent.com/90898648/178287126-8a387f31-9fac-4906-b41a-d52ac194e148.JPG)

### ERP
![Beställningar](https://user-images.githubusercontent.com/90898648/178287373-3a3f4970-0cdb-46ed-b0a9-29fa76563b05.JPG)

![Beställningar - kundinfo](https://user-images.githubusercontent.com/90898648/178287395-e8af7479-4a51-41bf-85ad-211510f0b0bb.JPG)

![Inlägg](https://user-images.githubusercontent.com/90898648/178287420-b4434218-ce39-4d30-8711-64ec459eaa2b.JPG)

![Produkter](https://user-images.githubusercontent.com/90898648/178287478-a07cdd2f-9567-4eda-9af6-547833329274.JPG)

![Media](https://user-images.githubusercontent.com/90898648/178287440-01c584f9-00cf-444c-94ca-6fbfca2e9f07.JPG)



