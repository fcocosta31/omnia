<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('sr_Latn', array (
  'validators' => 
  array (
    'This value should be false.' => 'Vrednost treba da bude netačna.',
    'This value should be true.' => 'Vrednost treba da bude tačna.',
    'This value should be of type {{ type }}.' => 'Vrednost treba da bude tipa {{ type }}.',
    'This value should be blank.' => 'Vrednost treba da bude prazna.',
    'The value you selected is not a valid choice.' => 'Vrednost treba da bude jedna od ponuđenih.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Izaberite bar {{ limit }} mogućnost.|Izaberite bar {{ limit }} mogućnosti.|Izaberite bar {{ limit }} mogućnosti.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Izaberite najviše {{ limit }} mogućnost.|Izaberite najviše {{ limit }} mogućnosti.|Izaberite najviše {{ limit }} mogućnosti.',
    'One or more of the given values is invalid.' => 'Jedna ili više vrednosti je nevalidna.',
    'This field was not expected.' => 'Ovo polje ne očekuje.',
    'This field is missing.' => 'Ovo polje nedostaje.',
    'This value is not a valid date.' => 'Vrednost nije validan datum.',
    'This value is not a valid datetime.' => 'Vrednost nije validan datum-vreme.',
    'This value is not a valid email address.' => 'Vrednost nije validna adresa elektronske pošte.',
    'The file could not be found.' => 'Datoteka ne može biti pronađena.',
    'The file is not readable.' => 'Datoteka nije čitljiva.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Datoteka je prevelika ({{ size }} {{ suffix }}). Najveća dozvoljena veličina je {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Mime tip datoteke nije validan ({{ type }}). Dozvoljeni mime tipovi su {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Vrednost treba da bude {{ limit }} ili manje.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Vrednost je predugačka. Treba da ima {{ limit }} karakter ili manje.|Vrednost je predugačka. Treba da ima {{ limit }} karaktera ili manje.|Vrednost je predugačka. Treba da ima {{ limit }} karaktera ili manje.',
    'This value should be {{ limit }} or more.' => 'Vrednost treba da bude {{ limit }} ili više.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Vrednost je prekratka. Treba da ima {{ limit }} karakter ili više.|Vrednost je prekratka. Treba da ima {{ limit }} karaktera ili više.|Vrednost je prekratka. Treba da ima {{ limit }} karaktera ili više.',
    'This value should not be blank.' => 'Vrednost ne treba da bude prazna.',
    'This value should not be null.' => 'Vrednost ne treba da bude null.',
    'This value should be null.' => 'Vrednost treba da bude null.',
    'This value is not valid.' => 'Vrednost je nevalidna.',
    'This value is not a valid time.' => 'Vrednost nije validno vreme.',
    'This value is not a valid URL.' => 'Vrednost nije validan URL.',
    'The two values should be equal.' => 'Obe vrednosti treba da budu jednake.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Datoteka je prevelika. Najveća dozvoljena veličina je {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Datoteka je prevelika.',
    'The file could not be uploaded.' => 'Datoteka ne može biti otpremljena.',
    'This value should be a valid number.' => 'Vrednost treba da bude validan broj.',
    'This file is not a valid image.' => 'Ova datoteka nije validna slika.',
    'This is not a valid IP address.' => 'Ovo nije validna IP adresa.',
    'This value is not a valid language.' => 'Vrednost nije validan jezik.',
    'This value is not a valid locale.' => 'Vrednost nije validan lokal.',
    'This value is not a valid country.' => 'Vrednost nije validna zemlja.',
    'This value is already used.' => 'Vrednost je već iskorišćena.',
    'The size of the image could not be detected.' => 'Veličina slike ne može biti određena.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'Širina slike je prevelika ({{ width }}px). Najeća dozvoljena širina je {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'Širina slike je premala ({{ width }}px). Najmanja dozvoljena širina je {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'Visina slike je prevelika ({{ height }}px). Najeća dozvoljena visina je {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'Visina slike je premala ({{ height }}px). Najmanja dozvoljena visina je {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Vrednost treba da bude trenutna korisnička lozinka.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Vrednost treba da ima tačno {{ limit }} karakter.|Vrednost treba da ima tačno {{ limit }} karaktera.|Vrednost treba da ima tačno {{ limit }} karaktera.',
    'The file was only partially uploaded.' => 'Datoteka je samo parcijalno otpremljena.',
    'No file was uploaded.' => 'Datoteka nije otpremljena.',
    'No temporary folder was configured in php.ini.' => 'Privremeni direktorijum nije konfigurisan u php.ini.',
    'Cannot write temporary file to disk.' => 'Nemoguće pisanje privremene datoteke na disk.',
    'A PHP extension caused the upload to fail.' => 'PHP ekstenzija je prouzrokovala neuspeh otpremanja datoteke.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Ova kolekcija treba da sadrži {{ limit }} ili više elemenata.|Ova kolekcija treba da sadrži {{ limit }} ili više elemenata.|Ova kolekcija treba da sadrži {{ limit }} ili više elemenata.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Ova kolekcija treba da sadrži {{ limit }} ili manje elemenata.|Ova kolekcija treba da sadrži {{ limit }} ili manje elemenata.|Ova kolekcija treba da sadrži {{ limit }} ili manje elemenata.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Ova kolekcija treba da sadrži tačno {{ limit }} element.|Ova kolekcija treba da sadrži tačno {{ limit }} elementa.|Ova kolekcija treba da sadrži tačno {{ limit }} elemenata.',
    'Invalid card number.' => 'Nevalidan broj kartice.',
    'Unsupported card type or invalid card number.' => 'Nevalidan broj kartice ili tip kartice nije podržan.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Ovo nije validan međunarodni broj bankovnog računa (IBAN).',
    'This value is not a valid ISBN-10.' => 'Ovo nije validan ISBN-10.',
    'This value is not a valid ISBN-13.' => 'Ovo nije validan ISBN-13.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Ovo nije validan ISBN-10 ili ISBN-13.',
    'This value is not a valid ISSN.' => 'Ovo nije validan ISSN.',
    'This value is not a valid currency.' => 'Ovo nije validna valuta.',
    'This value should be equal to {{ compared_value }}.' => 'Ova vrednost treba da bude {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Ova vrednost treba da bude veća od {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Ova vrednost treba da bude veća ili jednaka {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Ova vrednost treba da bude identična sa {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Ova vrednost treba da bude manja od {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Ova vrednost treba da bude manja ili jednaka {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Ova vrednost ne treba da bude jednaka {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Ova vrednost ne treba da bude identična sa {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'Razmera ove slike je prevelika ({{ ratio }}). Maksimalna dozvoljena razmera je {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'Razmera ove slike je premala ({{ ratio }}). Minimalna očekivana razmera je {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'Slika je kvadratna ({{ width }}x{{ height }}px). Kvadratne slike nisu dozvoljene.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'Slika je orijentacije pejzaža ({{ width }}x{{ height }}px). Pejzažna orijentacija slika nije dozvoljena.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'Slika je orijantacije portreta ({{ width }}x{{ height }}px). Portretna orijentacija slika nije dozvoljena.',
    'This form should not contain extra fields.' => 'Ovaj formular ne treba da sadrži dodatna polja.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Otpremljena datoteka je bila prevelika. Molim pokušajte otpremanje manje datoteke.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'CSRF vrednost je nevalidna. Pokušajte ponovo.',
    'fos_user.username.already_used' => 'Korisničko ime već postoji.',
    'fos_user.username.blank' => 'Molimo, unesite korisničko ime.',
    'fos_user.username.short' => 'Korisničko ime je prekratko.',
    'fos_user.username.long' => 'Korisničko ime je predugo.',
    'fos_user.email.already_used' => 'Adresa e-pošte već postoji.',
    'fos_user.email.blank' => 'Molimo, unesite adresu e-pošte.',
    'fos_user.email.short' => 'Adresa e-pošte je prekratka.',
    'fos_user.email.long' => 'Adresa e-pošte je preduga.',
    'fos_user.email.invalid' => 'Adresa e-pošte nije validna.',
    'fos_user.password.blank' => 'Molimo, unesite lozinku.',
    'fos_user.password.short' => 'Lozinka je prekratka.',
    'fos_user.new_password.blank' => 'Molimo, unesite novu lozinku.',
    'fos_user.new_password.short' => 'Nova lozinka je prekratka.',
    'fos_user.current_password.invalid' => 'Lozinka nije validna.',
    'fos_user.group.blank' => 'Molimo unesite naziv.',
    'fos_user.group.short' => 'Naziv je prekratak.',
    'fos_user.group.long' => 'Naziv je predug.',
    'fos_group.name.already_used' => 'Ovo ime već postoji.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Izuzetak pri autentifikaciji.',
    'Authentication credentials could not be found.' => 'Autentifikacioni podaci nisu pronađeni.',
    'Authentication request could not be processed due to a system problem.' => 'Zahtev za autentifikaciju ne može biti obrađen zbog sistemskih problema.',
    'Invalid credentials.' => 'Nevalidni podaci za autentifikaciju.',
    'Cookie has already been used by someone else.' => 'Kolačić je već iskorišćen od strane nekog drugog.',
    'Not privileged to request the resource.' => 'Nemate prava pristupa ovom resursu.',
    'Invalid CSRF token.' => 'Nevalidan CSRF token.',
    'Digest nonce has expired.' => 'Vreme kriptografskog ključa je isteklo.',
    'No authentication provider found to support the authentication token.' => 'Autentifikacioni provajder za podršku tokena nije pronađen.',
    'No session available, it either timed out or cookies are not enabled.' => 'Sesija nije dostupna, istekla je ili su kolačići isključeni.',
    'No token could be found.' => 'Token ne može biti pronađen.',
    'Username could not be found.' => 'Korisničko ime ne može biti pronađeno.',
    'Account has expired.' => 'Nalog je istekao.',
    'Credentials have expired.' => 'Podaci za autentifikaciju su istekli.',
    'Account is disabled.' => 'Nalog je onemogućen.',
    'Account is locked.' => 'Nalog je zaključan.',
  ),
  'FOSUserBundle' => 
  array (
    'group.edit.submit' => 'Ažuriraj grupu',
    'group.show.name' => 'Naziv grupe',
    'group.new.submit' => 'Kreiraj grupu',
    'group.flash.updated' => 'Grupa je ažurirana.',
    'group.flash.created' => 'Grupa je kreirana.',
    'group.flash.deleted' => 'Grupa je obrisana.',
    'security.login.username' => 'Korisničko ime',
    'security.login.password' => 'Lozinka',
    'security.login.remember_me' => 'Zapamti me',
    'security.login.submit' => 'Prijavi se',
    'profile.show.username' => 'Korisničko ime',
    'profile.show.email' => 'Adresa e-pošte',
    'profile.edit.submit' => 'Ažuriraj',
    'profile.flash.updated' => 'Profil je ažuriran.',
    'change_password.submit' => 'Izmeni lozinku',
    'change_password.flash.success' => 'Lozinka je izmenjena.',
    'registration.check_email' => 'Poruka je poslata na adresu %email%. Ona sadrži aktivacioni link koji morate kliknuti da bi aktivirali Vaš nalog.',
    'registration.confirmed' => 'Čestitamo %username%, Vaš nalog je sada aktivan.',
    'registration.back' => 'Nazad na prethodnu stranu.',
    'registration.submit' => 'Registruj se',
    'registration.flash.user_created' => 'Korisnički nalog je uspešno kreiran.',
    'registration.email.subject' => 'Dobrodošli %username%!',
    'registration.email.message' => 'Zdravo %username%!

Da bi aktivirali Vaš nalog posetite %confirmationUrl%

Ovaj link možete upotrebiti samo jednom da biste potvrdili Vaš nalog.

S poštovanjem,
tim sajta.
',
    'resetting.check_email' => 'Poruka je poslata na adresu %email%. Ona sadrži link koji morate kliknuti da bi resetovali Vašu lozinku.',
    'resetting.request.username' => 'Korisničko ime ili adresa e-pošte',
    'resetting.request.submit' => 'Resetuj lozinku',
    'resetting.reset.submit' => 'Izmeni lozinku',
    'resetting.flash.success' => 'Lozinka je uspešno resetovana.',
    'resetting.email.subject' => 'Resetovanje lozinke',
    'resetting.email.message' => 'Zdravo %username%!

Da bi resetovali Vašu lozinku posetite %confirmationUrl%

S poštovanjem,
tim sajta.
',
    'layout.logout' => 'Odjavljivanje',
    'layout.login' => 'Prijavljivanje',
    'layout.register' => 'Registracija',
    'layout.logged_in_as' => 'Prijavljen kao %username%',
    'form.group_name' => 'Naziv grupe',
    'form.username' => 'Korisničko ime',
    'form.email' => 'Adresa e-pošte',
    'form.current_password' => 'Trenutna lozinka',
    'form.password' => 'Lozinka',
    'form.password_confirmation' => 'Potvrda lozinke',
    'form.new_password' => 'Nova lozinka',
    'form.new_password_confirmation' => 'Potvrda lozinke',
  ),
));

$catalogueSr = new MessageCatalogue('sr', array (
));
$catalogue->addFallbackCatalogue($catalogueSr);
$cataloguePt_BR = new MessageCatalogue('pt_BR', array (
  'validators' => 
  array (
    'This value should be false.' => 'Este valor deve ser falso.',
    'This value should be true.' => 'Este valor deve ser verdadeiro.',
    'This value should be of type {{ type }}.' => 'Este valor deve ser do tipo {{ type }}.',
    'This value should be blank.' => 'Este valor deve ser vazio.',
    'The value you selected is not a valid choice.' => 'O valor selecionado não é uma opção válida.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Você deve selecionar, no mínimo, {{ limit }} opção.|Você deve selecionar, no mínimo, {{ limit }} opções.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Você deve selecionar, no máximo, {{ limit }} opção.|Você deve selecionar, no máximo, {{ limit }} opções.',
    'One or more of the given values is invalid.' => 'Um ou mais valores informados são inválidos.',
    'This field was not expected.' => 'Este campo não era esperado.',
    'This field is missing.' => 'Este campo está ausente.',
    'This value is not a valid date.' => 'Este valor não é uma data válida.',
    'This value is not a valid datetime.' => 'Este valor não é uma data e hora válida.',
    'This value is not a valid email address.' => 'Este valor não é um endereço de e-mail válido.',
    'The file could not be found.' => 'O arquivo não foi encontrado.',
    'The file is not readable.' => 'O arquivo não pode ser lido.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'O arquivo é muito grande ({{ size }} {{ suffix }}). O tamanho máximo permitido é {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'O tipo mime do arquivo é inválido ({{ type }}). Os tipos mime permitidos são {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Este valor deve ser {{ limit }} ou menos.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Este valor é muito longo. Deve ter {{ limit }} caractere ou menos.|Este valor é muito longo. Deve ter {{ limit }} caracteres ou menos.',
    'This value should be {{ limit }} or more.' => 'Este valor deve ser {{ limit }} ou mais.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Este valor é muito curto. Deve ter {{ limit }} caractere ou mais.|Este valor é muito curto. Deve ter {{ limit }} caracteres ou mais.',
    'This value should not be blank.' => 'Este valor não deve ser vazio.',
    'This value should not be null.' => 'Este valor não deve ser nulo.',
    'This value should be null.' => 'Este valor deve ser nulo.',
    'This value is not valid.' => 'Este valor não é válido.',
    'This value is not a valid time.' => 'Este valor não é uma hora válida.',
    'This value is not a valid URL.' => 'Este valor não é uma URL válida.',
    'The two values should be equal.' => 'Os dois valores devem ser iguais.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'O arquivo é muito grande. O tamanho máximo permitido é de {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'O arquivo é muito grande.',
    'The file could not be uploaded.' => 'O arquivo não pode ser enviado.',
    'This value should be a valid number.' => 'Este valor deve ser um número válido.',
    'This file is not a valid image.' => 'Este arquivo não é uma imagem válida.',
    'This is not a valid IP address.' => 'Este não é um endereço de IP válido.',
    'This value is not a valid language.' => 'Este valor não é um idioma válido.',
    'This value is not a valid locale.' => 'Este valor não é uma localidade válida.',
    'This value is not a valid country.' => 'Este valor não é um país válido.',
    'This value is already used.' => 'Este valor já está sendo usado.',
    'The size of the image could not be detected.' => 'O tamanho da imagem não pode ser detectado.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'A largura da imagem é muito grande ({{ width }}px). A largura máxima permitida é de {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'A largura da imagem é muito pequena ({{ width }}px). A largura mínima esperada é de {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'A altura da imagem é muito grande ({{ height }}px). A altura máxima permitida é de {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'A altura da imagem é muito pequena ({{ height }}px). A altura mínima esperada é de {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Este valor deve ser a senha atual do usuário.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Este valor deve ter exatamente {{ limit }} caractere.|Este valor deve ter exatamente {{ limit }} caracteres.',
    'The file was only partially uploaded.' => 'O arquivo foi enviado apenas parcialmente.',
    'No file was uploaded.' => 'Nenhum arquivo foi enviado.',
    'No temporary folder was configured in php.ini.' => 'Nenhum diretório temporário foi configurado no php.ini.',
    'Cannot write temporary file to disk.' => 'Não foi possível escrever o arquivo temporário no disco.',
    'A PHP extension caused the upload to fail.' => 'Uma extensão PHP fez com que o envio falhasse.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Esta coleção deve conter {{ limit }} elemento ou mais.|Esta coleção deve conter {{ limit }} elementos ou mais.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Esta coleção deve conter {{ limit }} elemento ou menos.|Esta coleção deve conter {{ limit }} elementos ou menos.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Esta coleção deve conter exatamente {{ limit }} elemento.|Esta coleção deve conter exatamente {{ limit }} elementos.',
    'Invalid card number.' => 'Número de cartão inválido.',
    'Unsupported card type or invalid card number.' => 'Tipo de cartão não suportado ou número de cartão inválido.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Este não é um Número Internacional de Conta Bancária (IBAN) válido.',
    'This value is not a valid ISBN-10.' => 'Este valor não é um ISBN-10 válido.',
    'This value is not a valid ISBN-13.' => 'Este valor não é um ISBN-13 válido.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Este valor não é um ISBN-10 e nem um ISBN-13 válido.',
    'This value is not a valid ISSN.' => 'Este valor não é um ISSN válido.',
    'This value is not a valid currency.' => 'Este não é um valor monetário válido.',
    'This value should be equal to {{ compared_value }}.' => 'Este valor deve ser igual a {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Este valor deve ser maior que {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Este valor deve ser maior ou igual a {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Este valor deve ser idêntico a {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Este valor deve ser menor que {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Este valor deve ser menor ou igual a {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Este valor não deve ser igual a {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Este valor não deve ser idêntico a {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'A proporção da imagem é muito grande ({{ ratio }}). A proporção máxima permitida é {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'A proporção da imagem é muito pequena ({{ ratio }}). A proporção mínima esperada é {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'A imagem está num formato quadrado ({{ width }}x{{ height }}px). Imagens com formato quadrado não são permitidas.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'A imagem está orientada à paisagem ({{ width }}x{{ height }}px). Imagens orientadas à paisagem não são permitidas.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'A imagem está orientada ao retrato ({{ width }}x{{ height }}px). Imagens orientadas ao retrato não são permitidas.',
    'An empty file is not allowed.' => 'Arquivo vazio não é permitido.',
    'The host could not be resolved.' => 'O host não pôde ser resolvido.',
    'This value does not match the expected {{ charset }} charset.' => 'Este valor não corresponde ao charset {{ charset }} esperado.',
    'This is not a valid Business Identifier Code (BIC).' => 'Este não é um Código Identificador Bancário (BIC) válido.',
    'This form should not contain extra fields.' => 'Este formulário não deve conter campos adicionais.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'O arquivo enviado é muito grande. Por favor, tente enviar um arquivo menor.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'O token CSRF é inválido. Por favor, tente reenviar o formulário.',
    'fos_user.username.already_used' => 'Este nome de usuário já está sendo usado.',
    'fos_user.username.blank' => 'É necessário preencher o nome de usuário.',
    'fos_user.username.short' => 'Este de usuário é muito curto.',
    'fos_user.username.long' => 'Este de usuário é muito longo.',
    'fos_user.email.already_used' => 'Este email já está sendo usado.',
    'fos_user.email.blank' => 'É necessário preencher o email.',
    'fos_user.email.short' => 'Este email é muito curto.',
    'fos_user.email.long' => 'Este email é muito longo.',
    'fos_user.email.invalid' => 'Este email é inválido.',
    'fos_user.password.blank' => 'É necessário preencher sua senha.',
    'fos_user.password.short' => 'Esta senha é muito curta.',
    'fos_user.password.mismatch' => 'As senhas não correspondem.',
    'fos_user.new_password.blank' => 'É necessário preencher a nova senha.',
    'fos_user.new_password.short' => 'A nova senha é muito curta.',
    'fos_user.current_password.invalid' => 'A senha está incorreta.',
    'fos_user.group.blank' => 'É necessário preencher o nome.',
    'fos_user.group.short' => 'O nome é muito curto.',
    'fos_user.group.long' => 'O nome é muito longo.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Uma exceção ocorreu durante a autenticação.',
    'Authentication credentials could not be found.' => 'As credenciais de autenticação não foram encontradas.',
    'Authentication request could not be processed due to a system problem.' => 'A autenticação não pôde ser concluída devido a um problema no sistema.',
    'Invalid credentials.' => 'Credenciais inválidas.',
    'Cookie has already been used by someone else.' => 'Este cookie já está em uso.',
    'Not privileged to request the resource.' => 'Não possui privilégios o bastante para requisitar este recurso.',
    'Invalid CSRF token.' => 'Token CSRF inválido.',
    'Digest nonce has expired.' => 'Digest nonce expirado.',
    'No authentication provider found to support the authentication token.' => 'Nenhum provedor de autenticação encontrado para suportar o token de autenticação.',
    'No session available, it either timed out or cookies are not enabled.' => 'Nenhuma sessão disponível, ela expirou ou os cookies estão desativados.',
    'No token could be found.' => 'Nenhum token foi encontrado.',
    'Username could not be found.' => 'Nome de usuário não encontrado.',
    'Account has expired.' => 'A conta está expirada.',
    'Credentials have expired.' => 'As credenciais estão expiradas.',
    'Account is disabled.' => 'Conta desativada.',
    'Account is locked.' => 'A conta está travada.',
  ),
  'FOSUserBundle' => 
  array (
    'group.edit.submit' => 'Atualizar Grupo',
    'group.show.name' => 'Nome do Grupo',
    'group.new.submit' => 'Criar Grupo',
    'group.flash.updated' => 'O grupo foi atualizado.',
    'group.flash.created' => 'O grupo foi criado.',
    'group.flash.deleted' => 'O grupo foi removido.',
    'security.login.username' => 'Usuário',
    'security.login.password' => 'Senha',
    'security.login.remember_me' => 'Permanecer conectado',
    'security.login.submit' => 'Entrar',
    'profile.show.username' => 'Usuário',
    'profile.show.email' => 'Email',
    'profile.edit.submit' => 'Atualizar',
    'profile.flash.updated' => 'O perfil foi atualizado.',
    'change_password.submit' => 'Alterar senha',
    'change_password.flash.success' => 'A senha foi alterada.',
    'registration.check_email' => 'Um email foi enviado para o endereço %email%. Para ativar a sua conta, clique no link na mensagem.',
    'registration.confirmed' => 'Parabéns, %username%. A sua conta foi ativada.',
    'registration.back' => 'Retornar para a página de origem.',
    'registration.submit' => 'Registrar',
    'registration.flash.user_created' => 'O usuário foi criado com sucesso.',
    'registration.email.subject' => 'Bem-vindo(a), %username%!',
    'registration.email.message' => 'Olá, %username%!

Para completar a validação da sua conta, clique no link: %confirmationUrl%

Atenciosamente,
a Equipe.
',
    'resetting.check_email' => 'Um email foi enviado. Ele contem um link que deve ser acessado para resetar sua senha.
Nota: Você apenas poderá requisitar uma nova senha dentro de %tokenLifetime% horas.

Se você não receber sua senha, cheque sua pasta de spam ou tente novamente.
',
    'resetting.request.username' => 'Usuário ou email',
    'resetting.request.submit' => 'Recuperar senha',
    'resetting.reset.submit' => 'Alterar senha',
    'resetting.flash.success' => 'A senha foi redefinida com sucesso.',
    'resetting.email.subject' => 'Redefinir senha',
    'resetting.email.message' => 'Olá, %username%!

Para redefinir sua senha, clique no link: %confirmationUrl%

Atenciosamente,
a Equipe.
',
    'layout.logout' => 'Sair',
    'layout.login' => 'Entrar',
    'layout.register' => 'Registrar',
    'layout.logged_in_as' => 'Conectado como %username%',
    'form.group_name' => 'Nome do Grupo',
    'form.username' => 'Usuário',
    'form.email' => 'Email',
    'form.current_password' => 'Senha atual',
    'form.password' => 'Senha',
    'form.password_confirmation' => 'Repita a senha',
    'form.new_password' => 'Nova senha',
    'form.new_password_confirmation' => 'Repita a nova senha',
  ),
  'KnpPaginatorBundle' => 
  array (
    'label_previous' => 'Anterior',
    'label_next' => 'Próximo',
  ),
));
$catalogueSr->addFallbackCatalogue($cataloguePt_BR);

return $catalogue;
