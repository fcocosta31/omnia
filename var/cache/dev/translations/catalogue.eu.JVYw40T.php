<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('eu', array (
  'validators' => 
  array (
    'This value should be false.' => 'Balio hau faltsua izan beharko litzateke.',
    'This value should be true.' => 'Balio hau egia izan beharko litzateke.',
    'This value should be of type {{ type }}.' => 'Balio hau {{ type }} motakoa izan beharko litzateke.',
    'This value should be blank.' => 'Balio hau hutsik egon beharko litzateke.',
    'The value you selected is not a valid choice.' => 'Hautatu duzun balioa ez da aukera egoki bat.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Gutxienez aukera {{ limit }} hautatu behar duzu.|Gutxienez {{ limit }} aukera hautatu behar dituzu.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Gehienez aukera {{ limit }} hautatu behar duzu.|Gehienez {{ limit }} aukera hautatu behar dituzu.',
    'One or more of the given values is invalid.' => 'Emandako balioetatik gutxienez bat ez da egokia.',
    'This field was not expected.' => 'Eremu hau ez zen espero.',
    'This field is missing.' => 'Eremu hau falta da.',
    'This value is not a valid date.' => 'Balio hau ez da data egoki bat.',
    'This value is not a valid datetime.' => 'Balio hau ez da data-ordu egoki bat.',
    'This value is not a valid email address.' => 'Balio hau ez da posta elektroniko egoki bat.',
    'The file could not be found.' => 'Ezin izan da fitxategia aurkitu.',
    'The file is not readable.' => 'Fitxategia ez da irakurgarria.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Fitxategia handiegia da ({{ size }} {{ suffix }}). Baimendutako tamaina handiena {{ limit }} {{ suffix }} da.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Fitxategiaren mime mota ez da egokia ({{ type }}). Hauek dira baimendutako mime motak: {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Balio hau gehienez {{ limit }} izan beharko litzateke.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Balio hau luzeegia da. Gehienez karaktere {{ limit }} eduki beharko luke.|Balio hau luzeegia da. Gehienez {{ limit }} karaktere eduki beharko lituzke.',
    'This value should be {{ limit }} or more.' => 'Balio hau gutxienez {{ limit }} izan beharko litzateke.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Balio hau motzegia da. Karaktere {{ limit }} gutxienez eduki beharko luke.|Balio hau motzegia da. Gutxienez {{ limit }} karaktere eduki beharko lituzke.',
    'This value should not be blank.' => 'Balio hau ez litzateke hutsik egon behar.',
    'This value should not be null.' => 'Balio hau ez litzateke nulua izan behar.',
    'This value should be null.' => 'Balio hau nulua izan beharko litzateke.',
    'This value is not valid.' => 'Balio hau ez da egokia.',
    'This value is not a valid time.' => 'Balio hau ez da ordu egoki bat.',
    'This value is not a valid URL.' => 'Balio hau ez da baliabideen kokatzaile uniforme (URL) egoki bat.',
    'The two values should be equal.' => 'Bi balioak berdinak izan beharko lirateke.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Fitxategia handiegia da. Baimendutako tamaina handiena {{ limit }} {{ suffix }} da.',
    'The file is too large.' => 'Fitxategia handiegia da.',
    'The file could not be uploaded.' => 'Ezin izan da fitxategia igo.',
    'This value should be a valid number.' => 'Balio hau zenbaki egoki bat izan beharko litzateke.',
    'This file is not a valid image.' => 'Fitxategi hau ez da irudi egoki bat.',
    'This is not a valid IP address.' => 'Honako hau ez da IP helbide egoki bat.',
    'This value is not a valid language.' => 'Balio hau ez da hizkuntza egoki bat.',
    'This value is not a valid locale.' => 'Balio hau ez da kokapen egoki bat.',
    'This value is not a valid country.' => 'Balio hau ez da herrialde egoki bat.',
    'This value is already used.' => 'Balio hau jadanik erabilia izan da.',
    'The size of the image could not be detected.' => 'Ezin izan da irudiaren tamaina detektatu.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'Irudiaren zabalera handiegia da ({{ width }}px). Onartutako gehienezko zabalera {{ max_width }}px dira.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'Irudiaren zabalera txikiegia da ({{ width }}px). Onartutako gutxieneko zabalera {{ min_width }}px dira.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'Irudiaren altuera handiegia da ({{ height }}px). Onartutako gehienezko altuera {{ max_height }}px dira.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'Irudiaren altuera txikiegia da ({{ height }}px). Onartutako gutxieneko altuera {{ min_height }}px dira.',
    'This value should be the user\'s current password.' => 'Balio hau uneko erabiltzailearen pasahitza izan beharko litzateke.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Balio honek zehazki karaktere {{ limit }} izan beharko luke.|Balio honek zehazki {{ limit }} karaktere izan beharko lituzke.',
    'The file was only partially uploaded.' => 'Fitxategiaren zati bat bakarrik igo da.',
    'No file was uploaded.' => 'Ez da fitxategirik igo.',
    'No temporary folder was configured in php.ini.' => 'Ez da aldi baterako karpetarik konfiguratu php.ini fitxategian.',
    'Cannot write temporary file to disk.' => 'Ezin izan da aldi baterako fitxategia diskoan idatzi.',
    'A PHP extension caused the upload to fail.' => 'PHP luzapen batek igoeraren hutsa eragin du.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Bilduma honek gutxienez elementu {{ limit }} eduki beharko luke.|Bilduma honek gutxienez {{ limit }} elementu eduki beharko lituzke.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Bilduma honek gehienez elementu {{ limit }} eduki beharko luke.|Bilduma honek gehienez {{ limit }} elementu eduki beharko lituzke.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Bilduma honek zehazki elementu {{ limit }} eduki beharko luke.|Bilduma honek zehazki {{ limit }} elementu eduki beharko lituzke.',
    'Invalid card number.' => 'Txartel zenbaki baliogabea.',
    'Unsupported card type or invalid card number.' => 'Txartel mota onartezina edo txartel zenbaki baliogabea.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Hau ez da baliozko banku internazionaleko kontu zenbaki (IBAN) bat.',
    'This value is not a valid ISBN-10.' => 'Balio hau ez da onartutako ISBN-10 bat.',
    'This value is not a valid ISBN-13.' => 'Balio hau ez da onartutako ISBN-13 bat.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Balio hau ez da onartutako ISBN-10 edo ISBN-13 bat.',
    'This value is not a valid ISSN.' => 'Balio hau ez da onartutako ISSN bat.',
    'This value is not a valid currency.' => 'Balio hau ez da baliozko moneta bat.',
    'This value should be equal to {{ compared_value }}.' => 'Balio hau {{ compared_value }}-(r)en berbera izan beharko litzateke.',
    'This value should be greater than {{ compared_value }}.' => 'Balio hau {{ compared_value }} baino handiagoa izan beharko litzateke.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Balio hau {{ compared_value }}-(r)en berdina edota handiagoa izan beharko litzateke.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Balio hau {{ compared_value_type }} {{ compared_value }}-(r)en berbera izan beharko litzateke.',
    'This value should be less than {{ compared_value }}.' => 'Balio hau {{ compared_value }} baino txikiagoa izan beharko litzateke.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Balio hau {{ compared_value }}-(r)en berdina edota txikiagoa izan beharko litzateke.',
    'This value should not be equal to {{ compared_value }}.' => 'Balio hau ez litzateke {{ compared_value }}-(r)en berdina izan behar.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Balio hau ez litzateke {{ compared_value_type }} {{ compared_value }}-(r)en berbera izan behar.',
    'Error' => 'Errore',
    'This form should not contain extra fields.' => 'Formulario honek ez luke aparteko eremurik eduki behar.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Igotako fitxategia handiegia da. Mesedez saiatu fitxategi txikiago bat igotzen.',
    'The CSRF token is invalid.' => 'CSRF tokena ez da egokia.',
    'fos_user.username.already_used' => 'Erabiltzaile izena hori erabiltzen da dagoeneko.',
    'fos_user.username.blank' => 'Sartu erabiltzaile izena mesedez.',
    'fos_user.username.short' => 'Erabiltzaile izena motzegia da.',
    'fos_user.username.long' => 'Erabiltzaile izena luzeegia da.',
    'fos_user.email.already_used' => 'E-posta helbide hori erabiltzen da dagoeneko.',
    'fos_user.email.blank' => 'Sarty E-posta helbidea mesedez.',
    'fos_user.email.short' => 'E-posta helbidea motzegia da.',
    'fos_user.email.long' => 'E-posta helbidea luzeegia da.',
    'fos_user.email.invalid' => 'E-posta helbidea ez da zuzena.',
    'fos_user.password.blank' => 'Sartu pasahitza mesedez.',
    'fos_user.password.short' => 'Pasahitza motzegia da.',
    'fos_user.password.mismatch' => 'Bi pasahitzek ez dute bat egiten.',
    'fos_user.new_password.blank' => 'Sartu pasahitz berria mesedez.',
    'fos_user.new_password.short' => 'Pasahitz berria motzegia da.',
    'fos_user.current_password.invalid' => 'Sartutako pasahitza ez da baliagarria.',
    'fos_user.group.blank' => 'Sartu izena mesedez.',
    'fos_user.group.short' => 'Izena motzegia da.',
    'fos_user.group.long' => 'Izena luzeegia da.',
  ),
  'FOSUserBundle' => 
  array (
    'group.edit.submit' => 'Taldea eguneratu',
    'group.show.name' => 'Taldearen izena',
    'group.new.submit' => 'Taldea sortu',
    'group.flash.updated' => 'Taldea eguneratua izan da.',
    'group.flash.created' => 'Taldea sortua izan da.',
    'group.flash.deleted' => 'Taldea ezabatua izan da.',
    'security.login.username' => 'Erabiltzaile izena',
    'security.login.password' => 'Pasahitza',
    'security.login.remember_me' => 'Oroitu',
    'security.login.submit' => 'Sartu',
    'profile.show.username' => 'Erabiltzaile izena',
    'profile.show.email' => 'E-posta',
    'profile.edit.submit' => 'Erabiltzailea eguneratu',
    'profile.flash.updated' => 'Perfila eguneratua izan da.',
    'change_password.submit' => 'Pasahitza aldatu',
    'change_password.flash.success' => 'Pasahitz ongi eguneratu da.',
    'registration.check_email' => 'E-posta bat bidali da %email% helbidera. Kontua aktibatzeko klik egin beharreko esteka zehazten da.',
    'registration.confirmed' => 'Zorionak %username%, zure kontua aktibatua dago.',
    'registration.back' => 'Itzuli.',
    'registration.submit' => 'Izena eman',
    'registration.flash.user_created' => 'Erabiltzailea ongi sortu da.',
    'registration.email.subject' => 'Ongi etorri %username%!',
    'registration.email.message' => 'Kaixo %username%!

Kontuaren balidazioazioarekin jarraitzeko - ireki ondoko orria: %confirmationUrl%

Esteka hau behin baino ez erabili daiteke zure kontua balidatzeko.

Adeitasunez,
Taldea.
',
    'resetting.check_email' => 'E-posta bat bidali da zure helbidera. Pasahitza berreskuratzeko estekan klik egin behar duzu bertan.
Oharra: Behin %tokenLifetime% horduro bakarrik ezka dezakezu pasahitz berria.

E-posta ez baduzu jasotzen, begira ezazu zure zabor-postan edo saiatu berriro.
',
    'resetting.request.username' => 'Erabiltzaile izena',
    'resetting.request.submit' => 'Pasahitza berreskuratu',
    'resetting.reset.submit' => 'Pasahitza aldatu',
    'resetting.flash.success' => 'Pasahitza ongi aldatu da.',
    'resetting.email.subject' => 'Pasahitza berrezarri',
    'resetting.email.message' => 'Kaixo %username%!

Pasahitza berrezartzeko egin klik esteka honetan: %confirmationUrl%

Adeitasunez,
Taldea.
',
    'layout.logout' => 'Irten',
    'layout.login' => 'Sartu',
    'layout.register' => 'Izena eman',
    'layout.logged_in_as' => '%username% bezala konektatua',
    'form.group_name' => 'Taldearen izena',
    'form.username' => 'Erabiltzaile izena',
    'form.email' => 'E-posta',
    'form.current_password' => 'Oraingo pasahitza',
    'form.password' => 'Pasahitza',
    'form.password_confirmation' => 'Errepikatu pasahitza',
    'form.new_password' => 'Pasahitz berria',
    'form.new_password_confirmation' => 'Errepikatu pasahitza',
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
