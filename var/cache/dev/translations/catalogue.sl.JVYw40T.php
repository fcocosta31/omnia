<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('sl', array (
  'validators' => 
  array (
    'This value should be false.' => 'Vrednost bi morala biti nepravilna (false).',
    'This value should be true.' => 'Vrednost bi morala biti pravilna (true).',
    'This value should be of type {{ type }}.' => 'Vrednost mora biti naslednjega tipa {{ type }}.',
    'This value should be blank.' => 'Vrednost mora biti prazna.',
    'The value you selected is not a valid choice.' => 'Vrednost, ki ste jo izbrali, ni veljavna možnost.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Izbrati morate vsaj {{ limit }} možnost.|Izbrati morate vsaj {{ limit }} možnosti.|Izbrati morate vsaj {{ limit }} možnosti.|Izbrati morate vsaj {{ limit }} možnosti.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Izberete lahko največ {{ limit }} možnost.|Izberete lahko največ {{ limit }} možnosti.|Izberete lahko največ {{ limit }} možnosti.|Izberete lahko največ {{ limit }} možnosti.',
    'One or more of the given values is invalid.' => 'Ena ali več podanih vrednosti ni veljavnih.',
    'This field was not expected.' => 'To polje ni bilo pričakovati.',
    'This field is missing.' => 'To polje manjka.',
    'This value is not a valid date.' => 'Ta vrednost ni veljaven datum.',
    'This value is not a valid datetime.' => 'Ta vrednost ni veljaven datum in čas.',
    'This value is not a valid email address.' => 'Ta vrednost ni veljaven e-poštni naslov.',
    'The file could not be found.' => 'Datoteke ni mogoče najti.',
    'The file is not readable.' => 'Datoteke ni mogoče prebrati.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Datoteka je prevelika ({{ size }} {{ suffix }}). Največja dovoljena velikost je {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Mime tip datoteke je neveljaven ({{ type }}). Dovoljeni mime tipi so {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Ta vrednost bi morala biti {{ limit }} ali manj.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Ta vrednost je predolga. Morala bi imeti {{ limit }} znak ali manj.|Ta vrednost je predolga. Morala bi imeti {{ limit }} znaka ali manj.|Ta vrednost je predolga. Morala bi imeti {{ limit }} znake ali manj.|Ta vrednost je predolga. Morala bi imeti {{ limit }} znakov ali manj.',
    'This value should be {{ limit }} or more.' => 'Ta vrednost bi morala biti {{ limit }} ali več.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Ta vrednost je prekratka. Morala bi imeti {{ limit }} znak ali več.|Ta vrednost je prekratka. Morala bi imeti {{ limit }} znaka ali več.|Ta vrednost je prekratka. Morala bi imeti {{ limit }} znake ali več.|Ta vrednost je prekratka. Morala bi imeti {{ limit }} znakov ali več.',
    'This value should not be blank.' => 'Ta vrednost ne bi smela biti prazna.',
    'This value should not be null.' => 'Ta vrednost ne bi smela biti nedefinirana (null).',
    'This value should be null.' => 'Ta vrednost bi morala biti nedefinirana (null).',
    'This value is not valid.' => 'Ta vrednost ni veljavna.',
    'This value is not a valid time.' => 'Ta vrednost ni veljaven čas.',
    'This value is not a valid URL.' => 'Ta vrednost ni veljaven URL.',
    'The two values should be equal.' => 'Ti dve vrednosti bi morali biti enaki.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Datoteka je prevelika. Največja dovoljena velikost je {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Datoteka je prevelika.',
    'The file could not be uploaded.' => 'Datoteke ni bilo mogoče naložiti.',
    'This value should be a valid number.' => 'Ta vrednost bi morala biti veljavna številka.',
    'This file is not a valid image.' => 'Ta datoteka ni veljavna slika.',
    'This is not a valid IP address.' => 'To ni veljaven IP naslov.',
    'This value is not a valid language.' => 'Ta vrednost ni veljaven jezik.',
    'This value is not a valid locale.' => 'Ta vrednost ni veljavna lokalnost.',
    'This value is not a valid country.' => 'Ta vrednost ni veljavna država.',
    'This value is already used.' => 'Ta vrednost je že uporabljena.',
    'The size of the image could not be detected.' => 'Velikosti slike ni bilo mogoče zaznati.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'Širina slike je preširoka ({{ width }}px). Največja dovoljena širina je {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'Širina slike je premajhna ({{ width }}px). Najmanjša predvidena širina je {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'Višina slike je prevelika ({{ height }}px). Največja dovoljena višina je {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'Višina slike je premajhna ({{ height }}px). Najmanjša predvidena višina je {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Ta vrednost bi morala biti trenutno uporabnikovo geslo.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Ta vrednost bi morala imeti točno {{ limit }} znak.|Ta vrednost bi morala imeti točno {{ limit }} znaka.|Ta vrednost bi morala imeti točno {{ limit }} znake.|Ta vrednost bi morala imeti točno {{ limit }} znakov.',
    'The file was only partially uploaded.' => 'Datoteka je bila le delno naložena.',
    'No file was uploaded.' => 'Nobena datoteka ni bila naložena.',
    'No temporary folder was configured in php.ini.' => 'Začasna mapa ni nastavljena v php.ini.',
    'Cannot write temporary file to disk.' => 'Začasne datoteke ni bilo mogoče zapisati na disk.',
    'A PHP extension caused the upload to fail.' => 'PHP razširitev je vzrok, da nalaganje ni uspelo.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Ta zbirka bi morala vsebovati {{ limit }} element ali več.|Ta zbirka bi morala vsebovati {{ limit }} elementa ali več.|Ta zbirka bi morala vsebovati {{ limit }} elemente ali več.|Ta zbirka bi morala vsebovati {{ limit }} elementov ali več.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Ta zbirka bi morala vsebovati {{ limit }} element ali manj.|Ta zbirka bi morala vsebovati {{ limit }} elementa ali manj.|Ta zbirka bi morala vsebovati {{ limit }} elemente ali manj.|Ta zbirka bi morala vsebovati {{ limit }} elementov ali manj.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Ta zbirka bi morala vsebovati točno {{ limit }} element.|Ta zbirka bi morala vsebovati točno {{ limit }} elementa.|Ta zbirka bi morala vsebovati točno {{ limit }} elemente.|Ta zbirka bi morala vsebovati točno {{ limit }} elementov.',
    'Invalid card number.' => 'Neveljavna številka kartice.',
    'Unsupported card type or invalid card number.' => 'Nepodprti tip kartice ali neveljavna številka kartice.',
    'This is not a valid International Bank Account Number (IBAN).' => 'To ni veljavna mednarodna številka bančnega računa (IBAN).',
    'This value is not a valid ISBN-10.' => 'Neveljavna vrednost po ISBN-10.',
    'This value is not a valid ISBN-13.' => 'Neveljavna vrednost po ISBN-13.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Neveljavna vrednost po ISBN-10 ali po ISBN-13.',
    'This value is not a valid ISSN.' => 'Neveljavna vrednost ISSN.',
    'This value is not a valid currency.' => 'Ta vrednost ni veljavna valuta.',
    'This value should be equal to {{ compared_value }}.' => 'Ta vrednost bi morala biti enaka {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Ta vrednost bi morala biti večja od {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Ta vrednost bi morala biti večja ali enaka {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Ta vrednost bi morala biti identična {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Ta vrednost bi morala biti manjša od {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Ta vrednost bi morala biti manjša ali enaka {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Ta vrednost ne bi smela biti enaka {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Ta vrednost ne bi smela biti identična {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'Razmerje slike je preveliko ({{ ratio }}). Največje dovoljeno razmerje je {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'Razmerje slike je premajhno ({{ ratio }}). Najmanjše pričakovano razmerje je {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'Slika je kvadrat ({{ width }}x{{ height }}px). Kvadratne slike niso dovoljene.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'Slika je ležeče usmerjena ({{ width }}x{{ height }}px). Ležeče usmerjene slike niso dovoljene.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'Slika je pokončno usmerjena ({{ width }}x{{ height }}px). Pokončno usmerjene slike niso dovoljene.',
    'An empty file is not allowed.' => 'Prazna datoteka ni dovoljena.',
    'The host could not be resolved.' => 'Gostitelja ni bilo mogoče prepoznati.',
    'This value does not match the expected {{ charset }} charset.' => 'Ta vrednost se ne ujema s pričakovanim naborom znakov {{ charset }}.',
    'This is not a valid Business Identifier Code (BIC).' => 'To ni veljavna identifikacijska koda podjetja (BIC).',
    'This form should not contain extra fields.' => 'Ta obrazec ne sme vsebovati dodatnih polj.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Naložena datoteka je prevelika. Prosimo, poizkusite naložiti manjšo.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'CSRF vrednost je napačna. Prosimo, ponovno pošljite obrazec.',
    'fos_user.username.already_used' => 'Uporabniško ime že obstaja.',
    'fos_user.username.blank' => 'Prosimo, vnesite uporabniško ime.',
    'fos_user.username.short' => 'Uporabniško ime je prekratko.',
    'fos_user.username.long' => 'Uporabniško ime je predolgo.',
    'fos_user.email.already_used' => 'Email že obstaja.',
    'fos_user.email.blank' => 'Prosimo, vnesite email.',
    'fos_user.email.short' => 'Email je prekratek.',
    'fos_user.email.long' => 'Email je predolg.',
    'fos_user.email.invalid' => 'Email je napačen.',
    'fos_user.password.blank' => 'Prosimo, vnesite geslo.',
    'fos_user.password.short' => 'Geslo je prekratko.',
    'fos_user.password.mismatch' => 'Vpisani gesli se ne ujemata.',
    'fos_user.new_password.blank' => 'Prosimo, vnesite novo geslo.',
    'fos_user.new_password.short' => 'Novo geslo je prekratko.',
    'fos_user.current_password.invalid' => 'Geslo je napačno.',
    'fos_user.group.blank' => 'Prosimo, vnesite ime.',
    'fos_user.group.short' => 'Ime je prekratko.',
    'fos_user.group.long' => 'Ime je predolgo.',
    'fos_group.name.already_used' => 'Ime je že v uporabi.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Prišlo je do izjeme pri preverjanju avtentikacije.',
    'Authentication credentials could not be found.' => 'Poverilnic za avtentikacijo ni bilo mogoče najti.',
    'Authentication request could not be processed due to a system problem.' => 'Zahteve za avtentikacijo ni bilo mogoče izvesti zaradi sistemske težave.',
    'Invalid credentials.' => 'Neveljavne pravice.',
    'Cookie has already been used by someone else.' => 'Piškotek je uporabil že nekdo drug.',
    'Not privileged to request the resource.' => 'Nimate privilegijev za zahtevani vir.',
    'Invalid CSRF token.' => 'Neveljaven CSRF žeton.',
    'Digest nonce has expired.' => 'Začasni žeton je potekel.',
    'No authentication provider found to support the authentication token.' => 'Ponudnika avtentikacije za podporo prijavnega žetona ni bilo mogoče najti.',
    'No session available, it either timed out or cookies are not enabled.' => 'Seja ni na voljo, ali je potekla ali pa piškotki niso omogočeni.',
    'No token could be found.' => 'Žetona ni bilo mogoče najti.',
    'Username could not be found.' => 'Uporabniškega imena ni bilo mogoče najti.',
    'Account has expired.' => 'Račun je potekel.',
    'Credentials have expired.' => 'Poverilnice so potekle.',
    'Account is disabled.' => 'Račun je onemogočen.',
    'Account is locked.' => 'Račun je zaklenjen.',
  ),
  'FOSUserBundle' => 
  array (
    'group.edit.submit' => 'Shrani',
    'group.show.name' => 'Ime skupine',
    'group.new.submit' => 'Shrani',
    'group.flash.updated' => 'Skupina je bila uspešno shranjena.',
    'group.flash.created' => 'Skupina je bila uspešno ustvarjena.',
    'group.flash.deleted' => 'Skupina je bila uspešno izbrisana.',
    'security.login.username' => 'Uporabniško ime',
    'security.login.password' => 'Geslo',
    'security.login.remember_me' => 'Zapomni si me',
    'security.login.submit' => 'Prijava',
    'profile.show.username' => 'Uporabniško ime',
    'profile.show.email' => 'Email',
    'profile.edit.submit' => 'Shrani',
    'profile.flash.updated' => 'Profil je bil uspešno shranjen.',
    'change_password.submit' => 'Spremeni geslo',
    'change_password.flash.success' => 'Geslo je bilo uspešno spremenjeno.',
    'registration.check_email' => 'Na %email% smo vam poslali sporočilo s kodo za aktivacijo. Račun aktivirate s klikom na to povezavo.',
    'registration.confirmed' => 'Pozdravljeni %username%, vaš račun je sedaj aktiviran.',
    'registration.back' => 'Nazaj na prvotno stran.',
    'registration.submit' => 'Registracija',
    'registration.flash.user_created' => 'Uporabnik je bil uspešno ustvarjen.',
    'registration.email.subject' => 'Dobrodošli %username%!',
    'registration.email.message' => 'Pozdravljeni %username%!

Za aktivacijo računa prosimo, obiščite %confirmationUrl%

Lep pozdrav,
ekipa.
',
    'resetting.request.username' => 'Uporabniško ime',
    'resetting.request.submit' => 'Spremeni geslo',
    'resetting.reset.submit' => 'Spremeni geslo',
    'resetting.flash.success' => 'Geslo je bilo uspešno spremenjeno.',
    'resetting.email.subject' => 'Sprememba gesla',
    'resetting.email.message' => 'Pozdravljeni %username%!

Za spremembo gesla prosimo, obiščite %confirmationUrl%

Lep pozdrav,
ekipa.
',
    'layout.logout' => 'Odjava',
    'layout.login' => 'Prijava',
    'layout.register' => 'Registracija',
    'layout.logged_in_as' => 'Prijavljen kot %username%',
    'form.group_name' => 'Ime skupine',
    'form.username' => 'Uporabniško ime',
    'form.email' => 'Email',
    'form.current_password' => 'Trenutno geslo',
    'form.password' => 'Geslo',
    'form.password_confirmation' => 'Preverjanje gesla',
    'form.new_password' => 'Novo geslo',
    'form.new_password_confirmation' => 'Preverjanje gesla',
  ),
));

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
$catalogue->addFallbackCatalogue($cataloguePt_BR);

return $catalogue;
