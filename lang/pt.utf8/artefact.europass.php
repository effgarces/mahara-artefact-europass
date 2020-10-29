<?php
/**
 *
 * @package    mahara
 * @subpackage artefact-europass
 * @author     Gregor Anzelj
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL
 * @copyright  (C) 2009-2019 Gregor Anzelj, gregor.anzelj@gmail.com
 *
 */

defined('INTERNAL') || die();

$string['pluginname'] = 'Europass';

$string['europass'] = 'Europass';
$string['europassartefactsaved'] = 'Curriculum vitae Europass guardado com sucesso';
$string['europassexportgenerated'] = 'Por favor aguarde enquanto a sua exportação está a se gerada...';

$string['languagesaved'] = 'Idioma guardado com sucesso';
$string['languagesavefailed'] = 'Ocorreu uma falha ao guardar o idioma';
$string['languagedeleteconfirm'] = 'Tem a certeza que deseja eliminar este idioma?';
$string['languagedeleted'] = 'Idioma eliminado com sucesso';
$string['languagediploma'] = 'Diploma de idioma';
$string['languageexperience'] = 'Experiência linguistica';
$string['languagediplomadeleteconfirm'] = 'Tem a certeza que deseja eliminar este diploma de idioma?';
$string['languageexperiencedeleteconfirm'] = 'Tem a certeza que deseja eliminar esta experiência linguistica?';
$string['languagediplomadeleted'] = 'Diploma de idioma eliminado com sucesso';
$string['languageexperiencedeleted'] = 'Experiência linguistica eliminada com sucesso';
$string['languagediplomasaved'] = 'Diploma de idioma guardado com sucesso';
$string['languagediplomasavefailed'] = 'Ocorreu uma falha ao guardar o diploma de idioma';
$string['languageexperiencesaved'] = 'Experiência linguistica guardada com sucesso';
$string['languageexperiencesavefailed'] = 'Ocorreu uma falha ao guardar a experiência linguistica';

// Export data from Mahara to Europass form...
$string['exporteuropass'] = 'Exportar Europass';
$string['exportstep1'] = '1 - Selecionar documento(s)';
$string['attach'] = 'Anexos';
$string['selectlocale'] = 'Idioma';
$string['exportstep2'] = '2 - Selecionar formato';
$string['selectdateformatdesc'] = 'Formato de data utilizado na exportação';
$string['selectdateformatdesc2'] = 'As datas são localizadas de acordo com o idioma selecionado.';
$string['dateformat-numeric-medium'] = '31/1/2005';
$string['dateformat-numeric-long'] = '31/01/2005';
$string['dateformat-text-short'] = '31 Jan 2005';
$string['dateformat-text-long'] = '31 Janeiro 2005';
$string['exportfile'] = 'Ficheiro';
$string['pdf'] = 'Adobe® PDF + Europass XML';
$string['doc'] = 'Microsoft® Word';
$string['odt'] = 'OpenDocument';
$string['html'] = 'HTML';
$string['xml'] = 'Europass XML';
$string['exportstep3'] = '3 - Exportar';
$string['generateexport'] = 'Exportar';
$string['generateexportdesc'] = 'Gerar o documento Europass e descarregá-lo no seu computador.';
$string['generaloptions'] = 'Opções de exportação gerais';
$string['includelogo'] = 'Incluir o logotipo Europass?';

// Import data from Europass XML to Mahara...
$string['importeuropass'] = 'Importar Europass';
$string['importstep1'] = '1 - Importar ficheiro e opções';
//$string['selectfile&options'] = 'Upload Europass XML file and select import options';
$string['importstep2'] = '2 - Importar';
//$string['execute'] = 'Execute import';
$string['executeimport'] = 'Importar';
$string['importfile'] = 'Ficheiro Europass XML';
$string['importfiledesc'] = 'Selecione um ficheiro Europass XML válido para importar no Mahara';
$string['notvalidxmlfile'] = 'O ficheiro submetido não é um ficheiro XML válido.';
$string['importoptions'] = 'O que importar?';
$string['importoptionsdesc'] = 'Campos de perfil trancados não serão alterados/atualizados';
$string['nocheckedoptions'] = 'Tem que escolher pelo menos uma opção para importar.';
$string['fieldnotimported'] = 'Campo "%s" não importado.';
$string['lockedfieldnotimported'] = 'Campo trancado "%s" não importado.';
$string['languagecodemissing'] = 'Campo "%s" não importado. O código de idioma está em falta.';
$string['importdate'] = 'Importar datas como';
$string['europassimportexecuted'] = 'Os dados do Europass XML foram importados com sucesso no Mahara.';
$string['elementsaved'] = 'Elemento Europass guardado com sucesso.';
$string['deleteelementconfirm'] = 'Tem a certeza que deseja eliminar este elemento europass?';
$string['elementdeletedsuccessfully'] = 'Elemento Europass eliminado com sucesso.';

// Europass ESP
$string['skillsfolder'] = 'Passaporte de competências';
$string['skillsfolderdesc'] = 'Ficheiros para documentar as competência Europass';
$string['skillsfolderupload'] = 'Submeter ficheiro';
$string['skillsfolderuploadnotice'] = 'Cria o teu Passaporte de competências para juntar documentos como o Passaporte de Idioma, Suplemento de certificado, cópias de diplomas ou certificados, atestados de emprego, etc.';
$string['skillsfolderuploadmaxsize'] = '(Tamanho máximo de envio 2.5 MB. Os documentos submetidos no seu Passaporte de competências deverão estar no formato PNG, JPEG ou PDF.)';
$string['filenotaccepted'] = 'O ficheiro enviado deverá ser um ficheiro PNG, JPEG ou PDF.';
$string['fileuploadcomplete'] = 'Envio do documento concluído.';
$string['deletefile'] = 'Eliminar documento';
$string['deletefileconfirm'] = 'Tem a certeza que deseja eliminar este documento?';
$string['filechangedsuccessfully'] = 'Documento alterado com sucesso.';
$string['filedeletedsuccessfully'] = 'Documento eliminado com sucesso.';
$string['editfile'] = 'Editar documento';
$string['profilepicinclude'] = 'Incluir foto de perfil?';

// Included strings for labels, countries, languages and nationalities
// ===================================================================

// Europass GUI form tabs
$string['ecv-tab'] = 'CV Europass';
$string['esp-tab'] = 'Passaporte de competências';
$string['elp-tab'] = 'Passaporte de idiomas';
$string['copyright'] = '© União Europeia e Concelho da Europa, 2004 - ';

// Europass CV - STEP 1
$string['identification'] = 'Informação pessoal';
$string['identification-birthdate'] = 'Data de nascimento';
$string['identification-birthplace'] = 'Local de nascimento';
$string['identification-lastname'] = 'Último nome(s)';
$string['identification-firstname'] = 'Nome(s) próprio(s)';
$string['identification-addressLine'] = 'Endereço';
$string['identification-municipality'] = 'Cidade';
$string['identification-postalCode'] = 'Código postal';
$string['identification-country'] = 'País';
$string['identification-contactinfo-telephone'] = 'Telefone(s)';
$string['identification-contactinfo-mobile'] = 'Telemóvel	';
$string['identification-contactinfo-fax'] = 'Fax';
$string['identification-contactinfo-email'] = 'E-mail(s)';
$string['identification-nationality'] = 'Nacionalidade';
$string['identification-gender'] = 'Género';

// Europass CV - STEP 3
$string['workexperience'] = 'Experiência profissionall';

// Europass CV - STEP 4
$string['education'] = 'Educação e Formação';

// Europass CV - STEP 5
$string['mothertongue'] = 'Língua materna';
$string['otherlanguage'] = 'Outra língua';

$string['language-understanding'] = 'Compreender';
$string['language-speaking'] = 'Falar';
$string['language-writing'] = 'Escrever';
$string['language-foreign-listening'] = 'Compreensão oral';
$string['language-foreign-reading'] = 'Leitura';
$string['language-foreign-spokeninteraction'] = 'Interação oral';
$string['language-foreign-spokenproduction'] = 'Produção oral';
$string['language-foreign-writing'] = 'Escrever';
$string['language-foreign-CEF-level'] = 'Nível no Quadro Europeu Comum de Referência para Línguas (QECR)';

$string['language-foreign-level.A1'] = 'A1 - Utilizador básico';
$string['language-foreign-level.A2'] = 'A2 - Utilizador Básico';
$string['language-foreign-level.B1'] = 'B1 - Utilizador independente';
$string['language-foreign-level.B2'] = 'B2 - Utilizador independente';
$string['language-foreign-level.C1'] = 'C1 - Utilizador competente';
$string['language-foreign-level.C2'] = 'C2 - Utilizador competente';

// Europass CV - STEP 6
$string['drivinglicence'] = 'Cartão de condução';
$string['categories'] = 'Categorias';

$string['skills'] = 'Personal skills';
$string['socialskill'] = 'Competências sociais e de comunicação';
$string['organisationalskill'] = 'Competências de gestão e liderança';
$string['technicalskill'] = 'Competências profissionais';
$string['otherskill'] = 'Outras competências';
$string['additionalinfo'] = 'Informação adicional';
$string['category'] = 'Categoria';

$string['digitalcompetence'] = 'Competência digital';
$string['digitalcompetence-other'] = 'Outras competências digitais';
$string['digitalcompetence-information'] = 'Processamento de informação';
$string['digitalcompetence-communication'] = 'Comunicação';
$string['digitalcompetence-contentcreation'] = 'Criação de conteúdos';
$string['digitalcompetence-safety'] = 'Segurança';
$string['digitalcompetence-problemsolving'] = 'Resolução de problemas';
$string['digitalcompetence-DIGCOMP-level'] = 'Competência digital (DIGCOMP)';

$string['digitalcompetence-level.A'] = 'Utilizador básico (A)';
$string['digitalcompetence-level.B'] = 'Utilizador independente (B)';
$string['digitalcompetence-level.C'] = 'Utilizador competente (C)';

$string['honors_awards'] = 'Distinções e prémios';
$string['publications'] = 'Publicações';
$string['presentations'] = 'Apresentações';
$string['citations'] = 'Citações';
$string['projects'] = 'Projetos';
$string['memberships'] = 'Redes e associações';
$string['seminars'] = 'Seminários';
$string['conferences'] = 'Conferências';
$string['references'] = 'Recomendações';
$string['courses'] = 'Cursos';
$string['certifications'] = 'Certificações';

// Europass LP - STEP 2
$string['self-assessment'] = 'Auto-avaliação de competências linguísticas';
$string['language-diplomas'] = 'Certificados e diplomas';
$string['diploma-title'] = 'Título';
$string['diploma-awardingBody'] = 'Organização prestadora';
$string['diploma-date'] = 'Data';
$string['diploma-level'] = 'Nível';
$string['language-experiences'] = 'Experiência linguística e intercultural';
$string['experiences-description'] = 'Descrição';
$string['experiences-period'] = 'Duração';
$string['experiences-period-from'] = 'A partir de';
$string['experiences-period-to'] = 'Até';

// List of supported locales in which Europass can be exported...
// The names of languages are localized - there's no need for translation!
$string['locale.bg_BG'] = 'български (bg)';
$string['locale.cs_CZ'] = 'čeština (cs)';
$string['locale.da_DK'] = 'dansk (da)';
$string['locale.de_DE'] = 'Deutsch (de)';
$string['locale.et_EE'] = 'eesti keel (et)';
$string['locale.el_GR'] = 'ελληνικά (el)';
$string['locale.en_GB'] = 'English (en)';
$string['locale.es_ES'] = 'español (es)';
$string['locale.fi_FI'] = 'suomi (fi)';
$string['locale.fr_FR'] = 'français (fr)';
$string['locale.hr_HR'] = 'hrvatski (hr)';
$string['locale.hu_HU'] = 'Magyar (hu)';
$string['locale.is_IS'] = 'íslenska (is)';
$string['locale.it_IT'] = 'italiano (it)';
$string['locale.lt_LT'] = 'lietuvių kalba (lt)';
$string['locale.lv_LV'] = 'latviešu valoda (lv)';
$string['locale.mk_MK'] = 'македонски (mk)';
$string['locale.mt_MT'] = 'Malti (mt)';
$string['locale.nl_NL'] = 'Nederlands (nl)';
$string['locale.no_NO'] = 'Norsk (no)';
$string['locale.pl_PL'] = 'polski (pl)';
$string['locale.pt_PT'] = 'português (pt)';
$string['locale.ro_RO'] = 'română (ro)';
$string['locale.sk_SK'] = 'slovenčina (sk)';
$string['locale.sl_SI'] = 'slovenščina (sl)';
$string['locale.sv_SE'] = 'svenska (sv)';
$string['locale.tr_TR'] = 'türkçe (tr)';

include_once('artefact.europass.countries.php');
include_once('artefact.europass.languages.php');
include_once('artefact.europass.nationalities.php');
