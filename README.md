# FMFInternetiniuSvetainiuKarkasai
# Namų darbo reikalavimai ir balai

## Užduočių vertinimas

| Nr. | Reikalavimai | Balai |
|-----|--------------|-------|
| **Bendri reikalavimai** | | |
| 1 | Padaryti 5 GIT commit'tai | 1 |
| 2 | Tekstai surašyti vertimų faile(-uose) | 1 |
| **Front-end dalis** | | |
| 3 | Pridėta ir panaudota JavaScript biblioteka | 0,5 |
| 4 | Pridėta ir panaudota CSS biblioteka | 0,5 |
| **Back-end dalis (konferencijos)** | | |
| 5 | Sukurtas konferencijų modelis, migracija (ir DB lentelė), Seeder | 1 |
| 6 | Konferencijų sąrašas (View, Controller metodas ir Route) | 0,5 |
| 7 | Konferencijos peržiūra (View, Controller metodas, Route) | 0,5 |
| 8 | Konferencijos kūrimo forma ir pateiktos užklausos apdorojimas (View, Controller metodai, Routes, Request) | 1 |
| 9 | Konferencijos redagavimo forma ir pateiktos užklausos apdorojimas (View, Controller metodai, Routes, Request) | 1 |
| **Back-end dalis (autentifikacija, autorizacija)** | | |
| 10 | Naudotojo autentifikacija: prisijungimo langas, prisijungimo mechanizmas, atsijungimas (View, Controller metodai, Model, Routes, Migration) | 2 |
| 11 | Naudotojo autorizacija: puslapių turinio atvaizdavimo ir prieigos apribojimas, atsižvelgiant į naudotojo statusą (prisijungęs/neprisijungęs) | 1 |
| | **Bendra balų suma:** | **10** |

*Papildomos užduotys pažymėtos aprašymo dalyje*

---

## Aprašas

**Projektas:** internetinė sistema skirta konferencijų administravimui ir atvaizdavimui.

### Sistemos naudotojų tipai

- Neprisijungęs naudotojas (svečias)
- Prisijungęs naudotojas (sistemos administratorius)

### Turinio atvaizdavimas pagal naudotojo tipą

- **Neprisijungęs naudotojas** mato tik konferencijų sąrašą ir negali atlikti jokių veiksmų su konferencijų įrašais
- **Administratorius** turi galimybę kurti, redaguoti, šalinti konferencijas

---

## Internetinės sistemos puslapiai ir elementai

### Pagrindinis puslapis – konferencijų sąrašas

**Neprisijungusiam naudotojui:**
- Atvaizduojamas konferencijų sąrašas
- Veiksmų mygtukai nėra atvaizduojami, operacijos nepasiekiamos
- *(Papildomas punktas)* Sukurti galimybę peržiūrėti konferencijos duomenis (pridėti peržiūros mygtuką)

**Administratoriui:**
- Atvaizduojami:
  - Naujos konferencijos kūrimo mygtukas
  - Konferencijų redagavimo ir šalinimo mygtukai (prie kiekvieno įrašo)
- *(Papildomas punktas)* Paspaudus šalinimo mygtuką, turi būti atvaizduojamas veiksmo patvirtinimo elementas (modal / popup / tooltip)

### Prisijungimo langas

- Naudotojo vardo (username / email) ir slaptažodžio įvedimo laukai
- Prisijungimo mygtukas

### Viršutinė internetinės sistemos navigacijos juosta (navbar)

- Atvaizduoti Logout mygtuką, jeigu naudotojas yra prisijungęs

### Konferencijos kūrimo puslapis

- Pasiekiamas tik prisijungusiam naudotojui
- Puslapio turinys – forma, susidedanti iš:
  - Antraštė (tekstinio tipo laukas)
  - Aprašas (textarea tipo laukas)
  - Konferencijos data (datos įvedimo laukas)
  - Adresas (tekstinio tipo laukas)
  - Formos patvirtinimo mygtuko (Add)
- *(Papildomas punktas)* Pridėti papildomą(-us) įvedimo lauka(-us) (pvz. dalyvių skaičius; šalies/miesto pasirinkimas)
- Laukai turi būti privalomi
- Serveris turi patikrinti ar reikšmės nėra tuščios
- Kitu atveju – grąžinti pranėšimą, kuris turi būti pavaizduojamas formoje

### Konferencijos redagavimo puslapis

- Pasiekiamas tik prisijungusiam naudotojui
- Puslapio turinys – forma su:
  - Įvedimo laukais (atkartoti iš kūrimo puslapio)
  - Formos patvirtinimo mygtuku (Update)
- Formos laukai turi būti užpildyti reikšmėmis iš duomenų bazės įrašo

### Konferencijos peržiūros puslapis *(papildomas punktas)*

- Leisti atidaryti konferencijos peržiūros puslapį neprisijungusiam naudotojui
- Galima atvaizduoti:
  - Redagavimo formą su neaktyvuotais laukais, arba
  - Savo duomenų atvaizdavimą
- Pateikimo mygtukas neatvaizduojamas
- Saugojimo operacijos nepasiekiamos

---

## Techniniai reikalavimai ir specifikacijos

### Bendri reikalavimai

- Programavimo kodas rašomas tik anglų kalba:
  - Klasių, funkcijų, kintamųjų pavadinimai
  - Kodo komentarai
  - HTML klasių pavadinimai
- CSS ir JavaScript kodai rašomi tik atitinkamuose failuose (pvz., `app.js`, `app.scss`)
- CSS ir JavaScript failai supakuojami į build failus naudojant NPM ir laravel-mix (webpack)
- Stengtis laikytis PSR (PHP Standard Recommendations) https://www.php-fig.org/psr/
- Rašyti tvarkingą programavimo kodą
- **GIT reikalavimai:**
  - Būtina daryti commits projekto vystymo metu
  - Privaloma padaryti bent vieną atšaką nuo pagrindinės šakos (main)
  - Turi būti padaryti **bent 5 commit'ai**

### Front-end dalis

Bibliotekų pridėjimui ir JavaScript, CSS failų kompiliavimui naudoti NPM.

- Pridėti bent vieną išorinę JavaScript biblioteką ir panaudoti projekte
- Pridėti bent vieną išorinę stiliaus biblioteką ir panaudoti projekte
- **Pasiūlymas:** galima panaudoti Bootstrap biblioteką puslapių stiliui

### Back-end dalis

#### Konfigūracija

- *(Papildomas punktas)* Sukonfigūruoti projekto nustatymus, kad log failai kiekvienai dienai būtų skirtingi (failo pavadinime panaudota dabartinė data)
- Sukonfigūruoti prisijungimus prie lokalios duomenų bazės

#### Routes

Realizuoti sekančių paskirčių Routes:
- Naudotojo prisijungimo lango atvaizdavimas
- Prisijungimo lango formos duomenų apdorojimas ir autentifikacija
- Naudotojo atsijungimo nuo sistemos (logout) apdorojimas
- Puslapio, su konferencijų sąrašų, atvaizdavimas
- Konferencijų kūrimo formos atvaizdavimas
- Konferencijos kūrimo formos duomenų apdorojimas
- Konferencijos redagavimo formos atvaizdavimas
- Konferencijos redagavimo formos duomenų apdorojimas
- Konferencijos šalinimo operacijos apdorojimas

#### Controllers

Sukurti du kontrolerius:
- Konferencijų kontroleris
- Autentifikacijos kontroleris

#### Views

Sukurti View failus:
- Globalus rodinys, skirtas aplikacijos globaliam šablonui (`app.blade.php`)
- Prisijungimo lango puslapio atvaizdavimas
- 4 rodiniai konferencijoms:
  - Bendro puslapio atvaizdavimui (konferencijų sąrašas)
  - Kūrimo formos aprašymas
  - Redagavimo formos aprašymas
  - Formos laukai (rodinys turi būti panaudotas kūrimo ir redagavimo formų rodinyse)

#### Request

Sukurti Request:
- Konferencijų kūrimo ir redagavimo formų duomenų taisyklėms talpinti

#### Models

Sukurti du modelius:
- Konferencijų modelis
- Naudotojo modelis

#### Migrations

Sukurti dvi migracijas:
- Konferencijų lentelės migracija
- Naudotojų lentelės migracija

#### Seeder

Sukurti Seeder:
- Konferencijų seeder

#### Vertimai

- Visi tekstai turi būti rašomi vertimų faile
- Jeigu projekte naudojama lietuvių kalba – sukurti atskirą aplankalą pavadinimą `lt` viduje `lang` katalogo