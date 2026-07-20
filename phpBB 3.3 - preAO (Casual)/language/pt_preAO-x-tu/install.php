<?php

/**
 *
 * This file is part of the phpBB Forum Software package.
 *
 * @copyright (c) phpBB Limited <https://www.phpbb.com>
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 * For full copyright and license information, please see
 * the docs/CREDITS.txt file.
 * @Traduzido por: https://leinad4mind.top/forum -segundo pré-Acordo Ortográfico (Versão Casual)
 */

/**
 * DO NOT CHANGE
 */
if (!defined('IN_PHPBB')) {
	exit;
}

if (empty($lang) || !is_array($lang)) {
	$lang = [];
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

// Common installer pages
$lang = array_merge($lang, [
	'INSTALL_PANEL'	=> 'Painel de Instalação',
	'SELECT_LANG'		=> 'Selecciona o idioma',

	'STAGE_INSTALL'	=> 'Instalando o phpBB',

	// Introduction page
	'INTRODUCTION_TITLE'		=> 'Introdução',
	'INTRODUCTION_BODY'		=> 'Bem-vindo ao phpBB3!<br /><br />O phpBB® é a solução de fórum em código aberto mais utilizada no mundo. O phpBB3 é a última parcela de uma linha de pacotes iniciada em 2000. Como os seus Antecessores, o phpBB3 é rico em recursos, é fácil de usar e é totalmente suportado pela equipa do phpBB. O phpBB3 melhora tudo aquilo que fez o phpBB2 popular, e adiciona recursos geralmente solicitados que não estavam presentes nas versões anteriores. Esperamos que excedas as tuas expectativas.<br /><br />Este sistema de instalação irá guiar-te através da instalação phpBB3, e a actualizar para a versão mais recente do phpBB3 de versões anteriores, bem como a conversão para phpBB3 a partir de um sistema de discussão diferente (incluindo phpBB2). Para obteres mais informações, recomendamos que leias <a href="%1$s">o guia de instalação</a>.<br /><br />Para ler a licença phpBB3 ou aprenderes sobre a obtenção de suporte e a nossa posição sobre ele, por favor, selecciona as opções respectivas no menu lateral. Para continuar, selecciona a aba apropriada acima.',

	// Support page
	'SUPPORT_TITLE'			=> 'Suporte',
	'SUPPORT_BODY'				=> 'Será fornecido gratuitamente suporte completo para a actual versão do phpBB3. Isto inclui:</p><ul><li>instalação</li><li>configuração</li><li>questões técnicas</li><li>problemas relativos a potenciais erros do software</li><li>actualização de versões Release Candidate (RC) para a última versão estável</li><li>conversão phpBB 2.0.x para phpBB3</li><li>conversão de outro software de fórum de discussão para phpBB3 (consulta o <a href="https://www.phpbb.com/community/viewforum.php?f=486">Conversores de fóruns</a>)</li></ul><p>Encorajamos os utilizadores que ainda têm versões beta do phpBB3 a converter a tua instalação para a versão mais recente.</p><h2>Extensões / Estilos</h2><p>Para questões relacionadas com extensões, por favor poste no <a href="https://www.phpbb.com/community/viewforum.php?f=451">Fórum de Extensões</a>.<br />Para questões relacionadas com estilos, por favor poste no <a href="https://www.phpbb.com/community/viewforum.php?f=471">Fórum de estilos</a>.<br /><br />Se a tua pergunta se refere a um pacote específico, por favor escreve directamente no tópico dedicado ao pacote.</p><h2>Obtendo Suporte</h2><p><a href="https://www.phpbb.com/support/">Secção de Suporte</a><br /><a href="https://www.phpbb.com/support/docs/en/3.3/ug/quickstart/">Guia rápido de iniciação</a><br /><br />Para garantires que te manténs actualizado com as últimas notícias e versões, segue-nos no <a href="https://www.twitter.com/phpbb/">Twitter</a> e no <a href="https://www.facebook.com/phpbb/">Facebook</a>.<br /><br />',

	// License
	'LICENSE_TITLE'			=> 'Licença Pública Geral',

	// Install page
	'INSTALL_INTRO'			=> 'Bem-vindo à Instalação',
	'INSTALL_INTRO_BODY'		=> 'Esta opção permite instalar o phpBB.</p><p>Durante o processo de instalação necessitarás de introduzir as configurações da tua Base de Dados. Se não as conheces, obtém-nas junto do fornecedor do Servidor de Alojamento. Necessitarás igualmente de conhecer:</p>

	<ul>
		<li>O Tipo da Base de Dados - a Base de Dados que irá utilizar.</li>
		<li>O Endereço ou DNS do teu servidor de Base de Dados - o endereço do servidor da Base de Dados.</li>
		<li>A Porta do servidor de Base de Dados - a porta do servidor da Base de Dados (geralmente não é necessário).</li>
		<li>O Nome da Base de Dados - o nome da Base de Dados no servidor.</li>
		<li>O Nome do utilizador e Senha da Base de Dados - os dados para aceder à Base de Dados.</li>
	</ul>

	<p><strong>Nota:</strong> Se a tua instalação utiliza SQLite, tens que indicar o endereço completo dos ficheiros da Base de Dados no campo DNS e deixar em branco o Nome de Utilizador e Senha. Por razões de segurança, deves certificar-te que este ficheiro da Base de Dados não esteja em locais acessíveis pela web.</p>

	<p>Bases de Dados suportadas pelo phpBB3:</p>
	<ul>
		<li>MySQL 4.1.3 ou superior (MySQLi necessário)</li>
		<li>PostgreSQL 8.3+</li>
		<li>SQLite 3.6.15+</li>
		<li>MS SQL Server 2000 ou superior (directo ou via ODBC)</li>
		<li>MS SQL Server 2005 ou superior (nativo)</li>
		<li>Oracle</li>
	</ul>

	<p>Apenas as Bases de Dados suportadas pelo teu servidor estarão disponíveis.',

	'ACP_LINK'							=> 'Aceder à <a href="%1$s">ACP</a>',

	'INSTALL_PHPBB_INSTALLED'		=> 'O phpBB já está instalado.',
	'INSTALL_PHPBB_NOT_INSTALLED'	=> 'O phpBB ainda não está instalado.',
	'INSTALL_RESTART'				=> 'Reinicia a instalação',
]);

// Requirements translation
$lang = array_merge($lang, [
	// Filesystem requirements
	'FILE_NOT_EXISTS'								=> 'Ficheiro não existe',
	'FILE_NOT_EXISTS_EXPLAIN'					=> 'Para poder instalar o phpBB o %1$s ficheiro precisa existir.',
	'FILE_NOT_EXISTS_EXPLAIN_OPTIONAL'		=> 'Recomenda-se que o ficheiro %1$s existe para uma melhor experiência do utilizador do fórum.',
	'FILE_NOT_WRITABLE'							=> 'O ficheiro não pode ser gravado',
	'FILE_NOT_WRITABLE_EXPLAIN'				=> 'Para poder instalar o phpBB, o ficheiro %1$s precisa de ter permissão de escrita.',
	'FILE_NOT_WRITABLE_EXPLAIN_OPTIONAL'	=> 'Recomenda-se que o ficheiro %1$s tenha permissão de escrita para uma melhor experiência do utilizador do fórum.',

	'DIRECTORY_NOT_EXISTS'							=> 'A pasta não existe',
	'DIRECTORY_NOT_EXISTS_EXPLAIN'				=> 'Para poder instalar o phpBB, a pasta %1$s precisa existir.',
	'DIRECTORY_NOT_EXISTS_EXPLAIN_OPTIONAL'	=> 'Recomenda-se que a pasta %1$s exista para uma melhor experiência do utilizador do fórum.',
	'DIRECTORY_NOT_WRITABLE'						=> 'A pasta não pode ser gravada',
	'DIRECTORY_NOT_WRITABLE_EXPLAIN'				=> 'Para poder instalar o phpBB, a pasta %1$s precisa ser de ter permissão de escrita.',
	'DIRECTORY_NOT_WRITABLE_EXPLAIN_OPTIONAL'	=> 'Recomenda-se que a pasta %1$s tenha permissão de escrita para uma melhor experiência do utilizador do fórum.',

	// Server requirements
	'PHP_VERSION_REQD'						=> 'Versão do PHP',
	'PHP_VERSION_REQD_EXPLAIN'				=> 'O phpBB requer PHP versão 7.2.0 ou superior.',
	'PHP_GETIMAGESIZE_SUPPORT'				=> 'A função PHP getimagesize() é necessária',
	'PHP_GETIMAGESIZE_SUPPORT_EXPLAIN'	=> 'Para que o phpBB funcione correctamente, a função getimagesize precisa estar disponível.',
	'PCRE_UTF_SUPPORT'						=> 'Suporte PCRE UTF-8',
	'PCRE_UTF_SUPPORT_EXPLAIN'				=> 'O phpBB não será executado se tua instalação PHP não for compilada com suporte UTF-8 na extensão PCRE.',
	'PHP_JSON_SUPPORT'						=> 'Suporte PHP JSON',
	'PHP_JSON_SUPPORT_EXPLAIN'				=> 'Para que o phpBB funcione correctamente, a extensão PHP JSON precisa estar disponível.',
	'PHP_MBSTRING_SUPPORT'					=> 'Suporte a PHP mbstring',
	'PHP_MBSTRING_SUPPORT_EXPLAIN'		=> 'Para que o phpBB funcione correctamente, a extensão mbstring do PHP precisa estar disponível.',
	'PHP_XML_SUPPORT'							=> 'Suporte PHP XML/DOM',
	'PHP_XML_SUPPORT_EXPLAIN'				=> 'Para que o phpBB funcione correctamente, a extensão PHP XML/DOM precisa estar disponível.',
	'PHP_SUPPORTED_DB'						=> 'Bases de dados suportadas',
	'PHP_SUPPORTED_DB_EXPLAIN'				=> 'Deves ter suporte para pelo menos uma base de dados compatível dentro do PHP. Se nenhum módulo da base de dados for mostrado como disponível, deves entrar em contacto com o teu provedor de hospedagem ou rever a documentação de instalação relevante do PHP para obter orientação.',

	'RETEST_REQUIREMENTS'	=> 'Teste de novo os requisitos',

	'STAGE_REQUIREMENTS'		=> 'Verificação de requisitos',
]);

// General error messages
$lang = array_merge($lang, [
	'INST_ERR_MISSING_DATA'		=> 'Tens que preencher todos os campos deste bloco.',

	'TIMEOUT_DETECTED_TITLE'	=> 'O instalador detectou um tempo limite',
	'TIMEOUT_DETECTED_MESSAGE'	=> 'O instalador detectou um tempo limite, podes tentar actualizar a página, o que pode levar a corrupção de dados. Sugerimos que aumentes as tuas configurações de tempo limite ou tentes usar o CLI.',
]);

// Data obtaining translations
$lang = array_merge($lang, [
	'STAGE_OBTAIN_DATA'		=> 'Definir dados de instalação',

	//
	// Admin data
	//
	'STAGE_ADMINISTRATOR'	=> 'Detalhes do Administrador',

	// Form labels
	'ADMIN_CONFIG'					=> 'Configuração de Administração',
	'ADMIN_PASSWORD'				=> 'Senha do Administrador',
	'ADMIN_PASSWORD_CONFIRM'	=> 'Confirmar senha de Administrador',
	'ADMIN_PASSWORD_EXPLAIN'	=> 'Introduz uma palavra-passe com um comprimento entre 6 e 30 caracteres.',
	'ADMIN_USERNAME'				=> 'Nome de utilizador do Administrador',
	'ADMIN_USERNAME_EXPLAIN'	=> 'Introduz um nome de utilizador com um comprimento entre 3 e 20 caracteres.',

	// Errors
	'INST_ERR_EMAIL_INVALID'		=> 'O endereço de e-mail indicado é inválido.',
	'INST_ERR_PASSWORD_MISMATCH'	=> 'As senhas introduzidas não coincidem.',
	'INST_ERR_PASSWORD_TOO_LONG'	=> 'A senha inserida é muito comprida. O tamanho máximo é de 30 caracteres.',
	'INST_ERR_PASSWORD_TOO_SHORT'	=> 'A senha inserida é muito curta. O tamanho mínimo é de 6 caracteres.',
	'INST_ERR_USER_TOO_LONG'		=> 'O nome de utilizador indicado é muito comprido. O tamanho máximo é de 20 caracteres.',
	'INST_ERR_USER_TOO_SHORT'		=> 'O nome de utilizador indicado é muito curto. O tamanho mínimo é de 3 caracteres.',

	//
	// Board data
	//
	// Form labels
	'BOARD_CONFIG'			=> 'Configuração do fórum',
	'DEFAULT_LANGUAGE'	=> 'Idioma padrão',
	'BOARD_NAME'			=> 'Título do fórum',
	'BOARD_DESCRIPTION'	=> 'Breve descrição do fórum',

	//
	// Database data
	//
	'STAGE_DATABASE'		=> 'Configurações da Base de Dados',

	// Form labels
	'DB_CONFIG'					=> 'Configuração da Base de Dados',
	'DBMS'						=> 'Tipo de Base de Dados',
	'DB_HOST'					=> 'Nome do Servidor da Base de Dados / DSN',
	'DB_HOST_EXPLAIN'			=> 'DSN significa Data Source Name e apenas é relevante para instalações ODBC. No PostgreSQL, usa localhost para ligar ao servidor local através do domínio socket UNIX e 127.0.0.1 para conectar através do TCP. Para SQLite, insere o caminho completo para o ficheiro da tua Base de Dados.',
	'DB_PORT'					=> 'Porta do Servidor da Base de Dados',
	'DB_PORT_EXPLAIN'			=> 'Só indica se o Servidor utilizar outra que não a porta padrão.',
	'DB_PASSWORD'				=> 'Senha da Base de Dados',
	'DB_NAME'					=> 'Nome da Base de Dados',
	'DB_USERNAME'				=> 'Nome de Utilizador da Base de Dados',
	'DATABASE_VERSION'		=> 'Versão da base de dados',
	'TABLE_PREFIX'				=> 'Prefixo das Tabelas na Base de Dados',
	'TABLE_PREFIX_EXPLAIN'	=> 'O prefixo deve começar com uma letra e deve conter apenas letras, números e sublinhados.',

	// Database options
	'DB_OPTION_MSSQL_ODBC'	=> 'MSSQL Server 2000+ via ODBC',
	'DB_OPTION_MSSQLNATIVE'	=> 'MSSQL Server 2005+ [ Nativo ]',
	'DB_OPTION_MYSQLI'		=> 'MySQL com Extensão MySQLi',
	'DB_OPTION_ORACLE'		=> 'Oracle',
	'DB_OPTION_POSTGRES'		=> 'PostgreSQL',
	'DB_OPTION_SQLITE3'		=> 'SQLite 3',

	// Errors
	'INST_ERR_DB'							=> 'Erro de instalação da Base de Dados',
	'INST_ERR_NO_DB'						=> 'Não foi possível carregar o módulo PHP para o tipo de Base de Dados seleccionado',
	'INST_ERR_DB_INVALID_PREFIX'		=> 'O prefixo digitado é inválido. Deve começar com uma letra e deve conter apenas letras, números e sublinhados.',
	'INST_ERR_PREFIX_TOO_LONG'			=> 'O prefixo indicado é muito comprido. O comprimento máximo é de %d caracteres.',
	'INST_ERR_DB_NO_NAME'				=> 'Deves indicar uma Base de Dados',
	'INST_ERR_DB_FORUM_PATH'			=> 'O ficheiro da Base de Dados indicado está dentro da estrutura de pastas do Fórum. Deveria pôr este ficheiro num local não acessível pela web.',
	'INST_ERR_DB_CONNECT'				=> 'Não foi possível ligar à base de dados, lê a mensagem de erro em baixo',
	'INST_ERR_DB_NO_WRITABLE'			=> 'Tanto a base de dados como as pastas do fórum devem permitir a escrita.',
	'INST_ERR_DB_NO_ERROR'				=> 'Nenhuma mensagem de erro foi reportada.',
	'INST_ERR_PREFIX'						=> 'Já existem tabelas com o prefixo indicado. Por favor, escolhe outro prefixo.',
	'INST_ERR_DB_NO_MYSQLI'				=> 'A versão do MySQL instalada nesta máquina é incompatível com a opção “MySQL com Extensão MySQLi” seleccionada. Tenta com uma outra opção “MySQL”.',
	'INST_ERR_DB_NO_SQLITE3'			=> 'A versão da extensão SQLite instalada é muito antiga, tens que actualizá-la para pelo menos 3.6.15.',
	'INST_ERR_DB_NO_ORACLE'				=> 'A versão do Oracle instalada nesta máquina exige que definas o parâmetro <var>NLS_CHARACTERSET</var> para <var>UTF8</var>. Podes actualizar a tua instalação para uma posterior à 9.2+ ou alterar o teu parâmetro.',
	'INST_ERR_DB_NO_POSTGRES'			=> 'A Base de Dados seleccionada não foi criada na codificação <var>UNICODE</var> ou <var>UTF8</var>. Tenta instalar uma Base de Dados com codificação<var>UNICODE</var> ou <var>UTF8</var>.',
	'INST_SCHEMA_FILE_NOT_WRITABLE'	=> 'O ficheiro de esquema não pode ser gravado',

	//
	// Email data
	//
	'EMAIL_CONFIG'						=> 'Configuração de e-mail',

	// Package info
	'PACKAGE_VERSION'					=> 'Versão do pacote instalado',
	'UPDATE_INCOMPLETE'				=> 'A tua instalação do phpBB não foi actualizada correctamente.',
	'UPDATE_INCOMPLETE_MORE'		=> 'Por favor, lê as informações abaixo para corrigir este erro.',
	'UPDATE_INCOMPLETE_EXPLAIN'	=> '<h1>actualização incompleta</h1>

		<p>Percebemos que a última actualização da tua instalação do phpBB não foi concluída. Visita o <a href="%1$s" title="%1$s">script database_update</a>, verifica se <em>Actualizar apenas base de dados</em> está seleccionado e clica em <strong>Enviar</strong>. Não te esqueças de apagar a pasta "install" depois de actualizar a base de dados com êxito.</p>',

	//
	// Server data
	//
	// Form labels
	'UPGRADE_INSTRUCTIONS'		=> 'Encontra-se disponível uma nova versão <strong>%1$s</strong>. Por favor, lê o <a href="%2$s" title="%2$s"><strong>anúncio de lançamento</strong></a> para saber mais sobre o que oferece e como efectuar a actualização.',
	'SERVER_CONFIG'				=> 'Configuração do servidor',
	'SCRIPT_PATH'					=> 'Pasta dos Ficheiros',
	'SCRIPT_PATH_EXPLAIN'		=> 'A pasta onde os ficheiros do phpBB estão localizados no teu servidor, (Exemplo: <samp>/phpBB3</samp>).',
]);

// Default database schema entries...
$lang = array_merge($lang, [
	'CONFIG_BOARD_EMAIL_SIG'			=> 'Atenciosamente, A Administração',
	'CONFIG_SITE_DESC'					=> 'Escreve um pequeno texto a descrever o teu Fórum',
	'CONFIG_SITENAME'						=> 'oseudomínio.com',

	'DEFAULT_INSTALL_POST'				=> '<t>Esta é uma Mensagem de exemplo, (criada automaticamente durante a instalação) do teu novo Fórum phpBB3. Podes apagar esta Mensagem, o Tópico e o Fórum quando quiseres! Se tiveres alguma dúvida, sugestão ou comentário sobre esta tradução para português europeu do phpBB3x, consulta a comunidade phpBB Leinad4Mind. Da mesma forma, podes visitar-nos, se desejares fazer alguma observação sobre esta tradução e o acordo ortográfico da língua portuguesa. Estamos a construir uma Comunidade phpBB em Portugal. O contributo de todos é importante. O nosso compromisso é ajudar quem nos procura. Responderemos a todos os contactos tão rápido quanto possível. A tua participação é o maior incentivo que nos podes dar. A tradução deste Fórum respeita o acordo ortográfico da língua portuguesa em vigor desde Janeiro de 2009.</t>',

	'FORUMS_FIRST_CATEGORY'				=> 'A minha primeira Categoria',
	'FORUMS_TEST_FORUM_DESC'			=> 'Este é um Fórum de Testes.',
	'FORUMS_TEST_FORUM_TITLE'			=> 'O meu primeiro Fórum',

	'RANKS_SITE_ADMIN_TITLE'			=> 'Administrador',
	'REPORT_WAREZ'							=> 'A mensagem denunciada contém endereços ilegais ou de software pirateado.',
	'REPORT_SPAM'							=> 'A mensagem denunciada tem apenas o propósito de anunciar um site ou um produto.',
	'REPORT_OFF_TOPIC'					=> 'A mensagem denunciada é desnecessária, e não faz sentido.',
	'REPORT_OTHER'							=> 'A mensagem denunciada não se encaixa em nenhuma outra categoria, usa o campo de descrição para especificar uma.',

	'SMILIES_ARROW'						=> 'Seta',
	'SMILIES_CONFUSED'					=> 'Confuso',
	'SMILIES_COOL'							=> 'Fixe',
	'SMILIES_CRYING'						=> 'A chorar ou muito triste',
	'SMILIES_EMARRASSED'					=> 'Envergonhado',
	'SMILIES_EVIL'							=> 'Maligno ou muito mau',
	'SMILIES_EXCLAMATION'				=> 'Exclamação',
	'SMILIES_GEEK'							=> 'Cromo',
	'SMILIES_IDEA'							=> 'Ideia',
	'SMILIES_LAUGHING'					=> 'Alegre',
	'SMILIES_MAD'							=> 'Zangado',
	'SMILIES_MR_GREEN'					=> 'Sr. Verde',
	'SMILIES_NEUTRAL'						=> 'Neutro',
	'SMILIES_QUESTION'					=> 'Pergunta',
	'SMILIES_RAZZ'							=> 'Gargalhada',
	'SMILIES_ROLLING_EYES'				=> 'Olhos rolantes',
	'SMILIES_SAD'							=> 'Triste',
	'SMILIES_SHOCKED'						=> 'Chocado',
	'SMILIES_SMILE'						=> 'Sorridente',
	'SMILIES_SURPRISED'					=> 'Surpreendido',
	'SMILIES_TWISTED_EVIL'				=> 'Muito Mau',
	'SMILIES_UBER_GEEK'					=> 'Grande Cromo',
	'SMILIES_VERY_HAPPY'					=> 'Muito Feliz',
	'SMILIES_WINK'							=> 'Piscar o olho',

	'TOPICS_TOPIC_TITLE'					=> 'Bem-vindo ao phpBB3',
]);

// Common navigation items' translation
$lang = array_merge($lang, [
	'MENU_OVERVIEW'		=> 'Visão geral',
	'MENU_INTRO'			=> 'Introdução',
	'MENU_LICENSE'			=> 'Licença',
	'MENU_SUPPORT'			=> 'Suporte',
]);

// Task names
$lang = array_merge($lang, [
	// Install filesystem
	'TASK_CREATE_CONFIG_FILE'				=> 'A criar ficheiro de configuração',

	// Install database
	'TASK_ADD_CONFIG_SETTINGS'				=> 'A adicionar definições de configuração',
	'TASK_ADD_DEFAULT_DATA'					=> 'A adicionar configurações padrão à base de dados',
	'TASK_CREATE_DATABASE_SCHEMA_FILE'	=> 'A criar ficheiro do esquema da base de dados',
	'TASK_SETUP_DATABASE'					=> 'A configurar a base de dados',
	'TASK_CREATE_TABLES'						=> 'A criar tabelas',

	// Install data
	'TASK_ADD_BOTS'				=> 'A registar bots',
	'TASK_ADD_LANGUAGES'			=> 'A instalar idiomas disponíveis',
	'TASK_ADD_MODULES'			=> 'A instalar módulos',
	'TASK_CREATE_SEARCH_INDEX'	=> 'A criar índice de pesquisa',

	// Install finish tasks
	'TASK_INSTALL_EXTENSIONS'	=> 'A instalar extensões comprimidas',
	'TASK_NOTIFY_USER'			=> 'A enviar e-mail de notificação',
	'TASK_POPULATE_MIGRATIONS'	=> 'A preencher migrações',

	// Installer general progress messages
	'INSTALLER_FINISHED'	=> 'O instalador foi concluído com êxito',
]);

// Installer's general messages
$lang = array_merge($lang, [
	'MODULE_NOT_FOUND'					=> 'Módulo não encontrado',
	'MODULE_NOT_FOUND_DESCRIPTION'	=> 'Não foi possível encontrar um módulo porque o serviço, %s, é indefinido.',

	'TASK_NOT_FOUND'						=> 'Tarefa não encontrada',
	'TASK_NOT_FOUND_DESCRIPTION'		=> 'Não foi possível encontrar uma tarefa porque o serviço, %s, é indefinido.',

	'SKIP_MODULE'	=> 'Ignorar o módulo“%s”',
	'SKIP_TASK'		=> 'Ignorar a tarefa“%s”',

	'TASK_SERVICE_INSTALLER_MISSING'	=> 'Todos os serviços de tarefa do instalador devem começar com “installer”',
	'TASK_CLASS_NOT_FOUND'				=> 'A definição do serviço da tarefa do instalador é inválida. O nome do serviço prestado“%1$s” class namespace que é esperado para “%2$s” . Para mais informações, por favor, consulta a documentação do task_interface.',

	'INSTALLER_CONFIG_NOT_WRITABLE'	=> 'O ficheiro de instalação de configuração não tem permissão de escrita.',
]);

// CLI messages
$lang = array_merge($lang, [
	'CLI_INSTALL_BOARD'				=> 'Instalar phpBB',
	'CLI_UPDATE_BOARD'				=> 'Actualizar phpBB',
	'CLI_INSTALL_SHOW_CONFIG'		=> 'Mostrar a configuração que será usada',
	'CLI_INSTALL_VALIDATE_CONFIG'	=> 'Validar um ficheiro de configuração',
	'CLI_CONFIG_FILE'					=> 'Ficheiro de configuração a ser usado',
	'MISSING_FILE'						=> 'Não é possível aceder o ficheiro %1$s',
	'MISSING_DATA'						=> 'O ficheiro de configuração está com dados em falta ou pode conter configurações inválidas.',
	'INVALID_YAML_FILE'				=> 'Não foi possível analisar o ficheiro YAML %1$s',
	'CONFIGURATION_VALID'			=> 'O ficheiro de configuração é válido',
]);

// Common updater messages
$lang = array_merge($lang, [
	'UPDATE_INSTALLATION'			=> 'Actualizar a instalação do phpBB',
	'UPDATE_INSTALLATION_EXPLAIN'	=> 'Com esta opção, é possível actualizar a instalação do phpBB para a última versão.<br />Durante o processo, todos os ficheiros serão verificados. Podes rever todas as diferenças e ficheiros antes da actualização.<br /><br />A própria actualização do ficheiro pode ser realizada de duas maneiras.</p><h2>actualização Manual</h2><p>Com esta actualização, apenas transferes a tua seleção pessoal dos ficheiros modificados, e para teres a certeza de que não perderás as modificações do teu ficheiro, deves finalizar. Depois de teres transferido este pacote, deves manualmente enviar os ficheiros para as suas respectivas pastas. Em seguida, podes fazer a verificação dos ficheiros novamente para ver se os moveste correctamente.</p><h2>actualização automática com FTP</h2><p>Este método é similar ao primeiro, mas não precisas de descarregar os ficheiros modificados e enviá-los para o servidor. Isto será executado de forma automática. Para utilizares este método, tens que saber os dados da tua conta no servidor de FTP se isso for pedido. Depois de pronto, serás redirecionado para nova verificação dos ficheiros para teres a certeza de que tudo foi actualizado correctamente.<br /><br />',
	'UPDATE_INSTRUCTIONS'			=> '

		<h1>Anúncio de lançamento</h1>

<p>Por Favor, lê o Anúncio do Lançamento Oficial da Nova Versão antes de continuares o processo de actualização, poderás encontrar informações importantes. Também encontrarás disponíveis os atalhos para transferência do pacote, bem como o registo das alterações.</p>

		<br />

<h1>Como actualizar a tua instalação com o Pacote Completo (Full Package)</h1>

<p>O método recomendado de actualizares a tua instalação é via pacote completo. Caso os ficheiros originais do phpBB tenham sido modificados na tua instalação, poderás desejar usar o pacote de actualização avançada para evitar perder essas alterações. Também podes actualizar a tua instalação por outros métodos listados no INSTALL.html. As etapas para actualizares o phpBB3 via pacote completo são as seguintes:</p>

		<ol style="margin-left: 20px; font-size: 1.1em;">
			<li><strong class="error">Backup de todos os ficheiros e da base de dados.</strong></li>
			<li>Vai à <a href="https://www.phpbb.com/downloads/" title="https://www.phpbb.com/downloads/">Página de Transferências do phpBB.com</a> e descarrega o ficheiro do "Full Package".</li>
			<li>Descompacta o ficheiro.</li>
<li>Apaga o ficheiro <code class="inline">config.php</code> e as pastas <code class="inline">/images</code>, <code class="inline">/store</code> e <code class="inline">/files</code> <em>do pacote</em> (não do teu site).</li>
<li>Vai para o ACP, Configurações do Fórum e certifica-te de que o prosilver é o estilo predefinido. Caso não seja, define o prosilver como tal.</li>
<li>Apaga as pastas <code class="inline">/vendor</code> e <code class="inline">/cache</code> da pasta raiz do fórum, no teu servidor.</li>
<li>Usando FTP ou SSH envia os ficheiros e pastas restantes (isto é, o CONTEÚDO restante da pasta phpBB3) para a pasta raiz da instalação do fórum no servidor, sobrescrevendo os ficheiros existentes. (Nota: tem cuidado para não apagares nenhuma extensão na pasta <code class="inline">/ext</code> quando fizeres o envio do novo conteúdo do phpBB3.)</li>
<li><strong><a href="%1$s" title="%1$s">Agora inicia o processo de actualização, apontando o teu navegador para a pasta de instalação</a>.</strong></li>
<li>Segue as etapas para actualizares a base de dados e deixa que seja executado até a conclusão.</li>
<li>Usando FTP ou SSH apaga a pasta <code class="inline">/install</code> da pasta raiz da instalação do fórum no servidor.<br /><br /></li>
		</ol>

<p>Agora tens um novo fórum actualizado que contém todos os teus utilizadores e mensagens. Tarefas complementares:</p>
		<ul style="margin-left: 20px; font-size: 1.1em;">
<li>Actualiza o teu pacote de idioma</li>
<li>Actualiza o teu estilo<br /><br /></li>
		</ul>

<h1>Como actualizar a tua instalação com o Pacote de Actualização Avançada</h1>

<p>O pacote de actualização Avançada é recomendado para utilizadores experientes apenas se os ficheiros originais do phpBB tenham sido modificados na tua instalação. Também podes actualizar a tua instalação usando os métodos listados no documento INSTALL.html. As etapas para actualizares o phpBB3 via pacote de actualização avançada são as seguintes:</p>

		<ol style="margin-left: 20px; font-size: 1.1em;">
			<li>Vai à <a href="https://www.phpbb.com/downloads/" title="https://www.phpbb.com/downloads/">Página de Transferências do phpBB.com</a> e descarrega o ficheiro do "Advanced Update Package".</li>
			<li>Descompacta o ficheiro.</li>
<li>Envia as pastas "install" e "vendor" descompactadas para a pasta raiz do teu phpBB (onde se encontra o ficheiro config.php).<br /><br /></li>
		</ol>

<p>Depois de enviado, o teu fórum ficará inacessível aos utilizadores normais, caso a pasta de instalação que supostamente acabaste de enviar esteja realmente presente.<br /><br />
<strong><a href="%1$s" title="%1$s">Agora inicia o Processo de actualização inserindo no teu navegador o endereço da pasta /install</a>.</strong><br />
		<br />
Em seguida serás conduzido ao longo do processo de actualização. Serás avisado quando a actualização estiver concluída.
		</p>
	',
]);

// Updater forms
$lang = array_merge($lang, [
	// Updater types
	'UPDATE_TYPE'				=> 'Tipo de actualização a ser executada',

	'UPDATE_TYPE_ALL'			=> 'Actualizar sistema de ficheiros e base de dados',
	'UPDATE_TYPE_DB_ONLY'	=> 'Actualizar apenas base de dados',

	// File updater methods
	'UPDATE_FILE_METHOD_TITLE'			=> 'Métodos de actualização de ficheiros',

	'UPDATE_FILE_METHOD'					=> 'Método do actualização de ficheiro',
	'UPDATE_FILE_METHOD_DOWNLOAD'		=> 'Transferir ficheiros modificados num só ficheiro comprimido ',
	'UPDATE_FILE_METHOD_FTP'			=> 'Actualizar ficheiros via FTP (Automático)',
	'UPDATE_FILE_METHOD_FILESYSTEM'	=> 'Actualizar ficheiros via acesso directo aos ficheiros (Automático)',

	// File updater archives
	'SELECT_DOWNLOAD_FORMAT'			=> 'Seleccionar Formato do Ficheiro para Transferência',

	// FTP settings
	'FTP_SETTINGS'							=> 'Configurações de FTP',
]);

// Requirements messages
$lang = array_merge($lang, [
	'UPDATE_FILES_NOT_FOUND'		=> 'Nenhuma pasta válida de actualização foi encontrada. Por favor, certifica-te de que enviaste os ficheiros devidos.',

	'NO_UPDATE_FILES_UP_TO_DATE'	=> 'A tua versão está actualizada. Não é necessário executar a ferramenta de actualização. Se desejas ter a certeza absoluta, verifica se enviaste correctamente os Ficheiros de actualização.',
	'OLD_UPDATE_FILES'				=> 'Os Ficheiros de actualização estão desactualizados. Os Ficheiros de actualização encontrados são do phpBB %1$s para o phpBB %2$s, mas a Última Versão do phpBB é a %3$s.',
	'INCOMPATIBLE_UPDATE_FILES'	=> 'Os ficheiros de actualização encontrados são incompatíveis com a versão do phpBB instalada. A tua versão do phpBB é da %1$s e o Ficheiro de actualização é da versão %2$s para %3$s.',
]);

// Update files
$lang = array_merge($lang, [
	'STAGE_UPDATE_FILES'		=> 'Actualizar Ficheiros',

	// Check files
	'UPDATE_CHECK_FILES'		=> 'Verificar ficheiros a actualizar',

	// Update file differ
	'FILE_DIFFER_ERROR_FILE_CANNOT_BE_READ'	=> 'O ficheiro a comparar falhou ao abrir %s.',

	'UPDATE_FILE_DIFF'		=> 'A comparar ficheiros modificados',
	'ALL_FILES_DIFFED'		=> 'Todos os ficheiros modificados foram comparados.',

	// File status
	'UPDATE_CONTINUE_FILE_UPDATE'		=> 'Actualiza ficheiros',

	'DOWNLOAD'								=> 'Transferência',
	'DOWNLOAD_CONFLICTS'					=> 'Transfira os valores em conflito para este ficheiro',
	'DOWNLOAD_CONFLICTS_EXPLAIN'		=> 'Procura por &lt;&lt;&lt; para encontrar valores em conflito',
	'DOWNLOAD_UPDATE_METHOD'			=> 'Transferir os Ficheiros modificados',
	'DOWNLOAD_UPDATE_METHOD_EXPLAIN'	=> 'Depois de transferires os Ficheiros deves descomprimi-los e enviá-los para a pasta raiz do teu phpBB. Envia os Ficheiros para os teus respectivos locais. Depois de enviares todos os Ficheiros, confere-os novamente clicando no botão abaixo.',

	'FILE_ALREADY_UP_TO_DATE'		=> 'O ficheiro já foi actualizado',
	'FILE_DIFF_NOT_ALLOWED'			=> 'O ficheiro não se encontra disponível para ser verificado',
	'FILE_USED'							=> 'A informação foi utilizada de',			// Single file
	'FILES_CONFLICT'					=> 'Ficheiros em conflito',
	'FILES_CONFLICT_EXPLAIN'		=> 'Os ficheiros seguintes apresentam alterações relativamente à versão anterior. Eventuais tentativas de alteração aos ficheiros poderiam criar conflitos. Investiga os conflitos e tenta resolvê-los manualmente ou continua a actualização ao seleccionares o método desejado. Se resolveres os conflitos manualmente, faz nova verificação aos ficheiros depois de modificados. Podes seleccionar o método desejado para todos os Ficheiros. O primeiro irá resultar num Ficheiro onde as linhas em conflito do teu Ficheiro anterior serão perdidas, e o outro irá resultar na perda das modificações no novo ficheiro.',
	'FILES_DELETED'					=> 'Ficheiros apagados',
	'FILES_DELETED_EXPLAIN'			=> 'Os seguintes ficheiros não existem na nova versão. Esses ficheiros devem ser excluídos de tua instalação.',
	'FILES_MODIFIED'					=> 'Ficheiros modificados',
	'FILES_MODIFIED_EXPLAIN'		=> 'Os ficheiros seguintes apresentam alterações relativamente à versão anterior. O novo ficheiro actualizado, resultará da fusão das modificações com o ficheiro actual.',
	'FILES_NEW'							=> 'Novos ficheiros',
	'FILES_NEW_EXPLAIN'				=> 'Os ficheiros seguintes não existem actualmente na tua instalação.',
	'FILES_NEW_CONFLICT'				=> 'Novos Ficheiros em conflito',
	'FILES_NEW_CONFLICT_EXPLAIN'	=> 'Os ficheiros seguintes são novos na nova versão do phpBB, mas já existe um ficheiro com o mesmo nome na mesma posição. O ficheiro actual será substituído pelo novo.',
	'FILES_NOT_MODIFIED'				=> 'Ficheiros não modificados',
	'FILES_NOT_MODIFIED_EXPLAIN'	=> 'Os ficheiros seguintes não necessitam de alterações.',
	'FILES_UP_TO_DATE'				=> 'Ficheiros já actualizados',
	'FILES_UP_TO_DATE_EXPLAIN'		=> 'Os ficheiros seguintes já se encontram prontos e não precisam ser actualizados.',
	'FILES_VERSION'					=> 'Versão dos Ficheiros',
	'TOGGLE_DISPLAY'					=> 'Mostrar/Ocultar lista de ficheiros',

	// File updater
	'UPDATE_UPDATING_FILES'			=> 'A actualizar ficheiros',

	'UPDATE_FILE_UPDATER_HAS_FAILED'		=> 'A actualização de ficheiros “%1$s“ falhou. O instalador irá tentar com “%2$s“.',
	'UPDATE_FILE_UPDATERS_HAVE_FAILED'	=> 'A actualização de ficheiros falhou. Não existe métodos alternativos disponíveis.',

	'UPDATE_CONTINUE_UPDATE_PROCESS'		=> 'Continuar processo de actualização',
	'UPDATE_RECHECK_UPDATE_FILES'			=> 'Verifica novamente os ficheiros',
]);

// Update database
$lang = array_merge($lang, [
	'STAGE_UPDATE_DATABASE'			=> 'Actualizar base de dados',

	'INLINE_UPDATE_SUCCESSFUL'		=> 'A Base de Dados foi actualizada com sucesso.',

	'TASK_UPDATE_EXTENSIONS'		=> 'A actualizar extensões',
]);

// Converter
$lang = array_merge($lang, [
	// Common converter messages
	'CONVERT_NOT_EXIST'			=> 'O Conversor seleccionado não existe',
	'DEV_NO_TEST_FILE'			=> 'Não foi especificado um valor para a variável ficheiro_teste no conversor. Se és utilizador deste conversor e não deverias estar a ver este erro, por favor, contacta o autor do conversor. Se és o autor do conversor, deves especificar o nome de um ficheiro que exista no Fórum de destino para que seja possível a verificação da pasta.',
	'COULD_NOT_FIND_PATH'		=> 'Não foi possível encontrar o local para o teu Fórum anterior. Por favor, verifica as tuas configurações e tenta novamente.<br />» O local especificado foi %s',
	'CONFIG_PHPBB_EMPTY'			=> 'A variável de configuração do phpBB3 para “%s” está vazia.',

	'MAKE_FOLDER_WRITABLE'		=> 'Por favor, certifica-te de que esta pasta existe e pode ser escrita pelo servidor e tenta novamente:<br />»<strong>%s</strong>.',
	'MAKE_FOLDERS_WRITABLE'		=> 'Por favor, certifica-te de que estas pastas existem e podem ser escritas pelo servidor e tenta novamente:<br />»<strong>%s</strong>.',

	'INSTALL_TEST'					=> 'Testar Novamente',

	'NO_TABLES_FOUND'				=> 'Não foi encontrada nenhuma tabela.',
	'TABLES_MISSING'				=> 'Não foi possível encontrar estas tabelas<br />» <strong>%s</strong>.',
	'CHECK_TABLE_PREFIX'			=> 'Por favor, verifica o prefixo das tabelas e tenta novamente.',

	// Conversion in progress
	'CATEGORY'						=> 'Categoria',
	'CONTINUE_CONVERT'			=> 'Continuar a conversão',
	'CONTINUE_CONVERT_BODY'		=> 'Foi detectada uma tentativa prévia de conversão. Deves escolher entre iniciar uma nova conversão ou continuar a conversão interrompida.',
	'CONVERT_NEW_CONVERSION'	=> 'Nova conversão',
	'CONTINUE_OLD_CONVERSION'	=> 'Continuar a actualização interrompida',
	'POST_ID'						=> 'ID da mensagem',

	// Start conversion
	'SUB_INTRO'						=> 'Introdução',
	'CONVERT_INTRO'				=> 'Bem-vindo ao phpBB Unified Convertor Framework',
	'CONVERT_INTRO_BODY'			=> 'Aqui é possível importar dados de outros sistemas de Fóruns (instalados). A lista seguinte mostra os módulos de conversão disponíveis. Se não existe um conversor na lista para o código de Fórum que desejas converter, por favor, verifica no nosso site onde podem estar disponíveis outros conversores.',
	'AVAILABLE_CONVERTORS'		=> 'Conversores Disponíveis',
	'NO_CONVERTORS'				=> 'Não está disponível nenhum conversor',
	'CONVERT_OPTIONS'				=> 'Opções',
	'SOFTWARE'						=> 'Software do Fórum',
	'VERSION'						=> 'Versão',
	'CONVERT'						=> 'Converter',

	// Settings
	'STAGE_SETTINGS'				=> 'Configurações',
	'TABLE_PREFIX_SAME'			=> 'O Prefixo das Tabelas tem que ser o usado pelo software que está convertendo.<br />» O prefixo de Tabela especificado foi %s',
	'DEFAULT_PREFIX_IS'			=> 'O Conversor não encontrou as tabelas com o prefixo indicado. Verifica se as informações do Fórum estão corretas. O Prefixo Padrão para a tabela %1$s é <strong>%2$s</strong>',
	'SPECIFY_OPTIONS'				=> 'Escolhe as Opções de Conversão',
	'FORUM_PATH'					=> 'Pasta do Fórum',
	'FORUM_PATH_EXPLAIN'			=> 'Este é o caminho <strong>relativo</strong> no disco para o teu antigo fórum da <strong>raiz desta instalação do phpBB3</strong>.',
	'REFRESH_PAGE'					=> 'Actualiza a página para continuar a conversão',
	'REFRESH_PAGE_EXPLAIN'		=> 'Se clicares em "Sim", o conversor irá actualizar a página para continuar a conversão até à etapa final. Se esta é uma conversão apenas de teste e para determinação de erros, clica em "Não".',

	// Conversion
	'STAGE_IN_PROGRESS'			=> 'Conversão em andamento',

	'AUTHOR_NOTES'					=> 'Notas do Autor<br />» %s',
	'STARTING_CONVERT'			=> 'Iniciando o Processo da Conversão',
	'CONFIG_CONVERT'				=> 'Convertendo a configuração',
	'DONE'							=> 'Terminado',
	'PREPROCESS_STEP'				=> 'Executando as funções de pré-processamento',
	'FILLING_TABLE'				=> 'A preencher a tabela <strong>%s</strong>',
	'FILLING_TABLES'				=> 'A preencher tabelas',
	'DB_ERR_INSERT'				=> 'Erro ao processar a query <code>INSERT</code>.',
	'DB_ERR_LAST'					=> 'Erro ao processar <var>query_last</var>.',
	'DB_ERR_QUERY_FIRST'			=> 'Erro ao executar <var>query_first</var>.',
	'DB_ERR_QUERY_FIRST_TABLE'	=> 'Erro ao executar <var>query_first</var>, %s ("%s").',
	'DB_ERR_SELECT'				=> 'Erro ao processar a query <code>SELECT</code>.',
	'STEP_PERCENT_COMPLETED'	=> 'Passo <strong>%d</strong> de <strong>%d</strong>',
	'FINAL_STEP'					=> 'Etapa Final do Processo',
	'SYNC_FORUMS'					=> 'A iniciar sincronização de Fóruns',
	'SYNC_POST_COUNT'				=> 'A sincronizar contador de Mensagens',
	'SYNC_POST_COUNT_ID'			=> 'A sincronizar contador de Mensagens para <var>entry</var> %1$s para %2$s.',
	'SYNC_TOPICS'					=> 'A iniciar sincronização de Tópicos',
	'SYNC_TOPIC_ID'				=> 'A sincronizar Tópicos a partir do <var>topic_id</var> $1%s ao $2%s.',
	'PROCESS_LAST'					=> 'Executando as últimas instruções',
	'UPDATE_TOPICS_POSTED'		=> 'Gerando informações de Tópicos enviados',
	'UPDATE_TOPICS_POSTED_ERR'	=> 'Algum erro ocorreu enquanto as informações dos Tópicos eram geradas. Podes tentar novamente esta etapa no Painel de Administração quando a conversão estiver completa.',
	'CONTINUE_LAST'				=> 'Continuar com esta actualização',
	'CLEAN_VERIFY'					=> 'A limpar e a verificar a estrutura final',
	'NOT_UNDERSTAND'				=> 'Não foi possível entender %s #%d, tabela %s ("%s")',
	'NAMING_CONFLICT'				=> 'Conflito de nomes: %s e %s são pseudónimos<br /><br />%s',

	// Finish conversion
	'CONVERT_COMPLETE'			=> 'Conversão terminada',
	'CONVERT_COMPLETE_EXPLAIN'	=> 'O teu Fórum foi convertido com sucesso para o phpBB 3.3. Já podes entrar e <a href="../">aceder ao Fórum</a>. Por favor, verifica se as configurações foram transferidos correctamente antes de activares o teu fórum. Apaga a pasta de instalação. Lembra-te que está disponível ajuda online através da <a href="https://www.phpbb.com/support/docs/en/3.3/ug/">Documentação</a> e de <a href="https://www.phpbb.com/community/viewforum.php?f=661">fóruns de suporte</a>.',

	'COLLIDING_CLEAN_USERNAME'			=> '<strong>%s</strong> é o nome de utilizador limpo para:',
	'COLLIDING_USER'						=> '» id do utilizador: <strong>%d</strong> nome de utilizador: <strong>%s</strong> (%d mensagens)',
	'COLLIDING_USERNAMES_FOUND'		=> 'Nomes de utilizador duplicados foram encontrados no teu antigo fórum. Para concluir a conversão, exclui ou renomeia esses utilizadores para que haja apenas um utilizador no teu fórum antigo para cada nome de utilizador limpo.',
	'CONV_ERR_FATAL'						=> 'Erro fatal de conversão',
	'CONV_ERROR_ATTACH_FTP_DIR'		=> 'O envio de anexos por FTP está activo no teu painel antigo. Desactiva a opção de envio por FTP, cria uma pasta válida e envia todos os ficheiros de anexos para a nova pasta. Após concluíres esta operação, reinicia o conversor.',
	'CONV_ERROR_CONFIG_EMPTY'			=> 'Não foram encontradas informações de configuração válidas para a conversão.',
	'CONV_ERROR_FORUM_ACCESS'			=> 'Não foi possível aceder às informações do Fórum.',
	'CONV_ERROR_GET_CATEGORIES'		=> 'Não foi possível adquirir as categorias.',
	'CONV_ERROR_GET_CONFIG'				=> 'Não foi possível adquirir a configuração do Fórum.',
	'CONV_ERROR_COULD_NOT_READ'		=> 'Não foi possível aceder/ler “%s”.',
	'CONV_ERROR_GROUP_ACCESS'			=> 'Não foi possível adquirir as informações de autenticação dos Grupos.',
	'CONV_ERROR_INCONSISTENT_GROUPS' => 'Foi encontrada uma inconsistência na tabela de grupos em add_bots() - tens que adicionar todos os Grupos especiais manualmente.',
	'CONV_ERROR_INSERT_BOT'				=> 'Não foi possível inserir o Bot na tabela de Utilizadores.',
	'CONV_ERROR_INSERT_BOTGROUP'		=> 'Não foi possível inserir o Bot na tabela de Bots.',
	'CONV_ERROR_INSERT_USER_GROUP'	=> 'Não foi possível inserir o utilizador na tabela user_group.',
	'CONV_ERROR_MESSAGE_PARSER'		=> 'Mensagem de Erro do Parser',
	'CONV_ERROR_NO_AVATAR_PATH'		=> 'Nota para desenvolvedores: tens que especificar $convertor[\'avatar_path\'] para usar %s.',
	'CONV_ERROR_NO_FORUM_PATH'			=> 'Não foi indicado o local relativo aos ficheiros do Fórum.',
	'CONV_ERROR_NO_GALLERY_PATH'		=> 'Nota para desenvolvedores: tens que especificar $convertor[\'avatar_gallery_path\'] para usar %s.',
	'CONV_ERROR_NO_GROUP'				=> 'Grupo "%1$s" não foi encontrado em %2$s.',
	'CONV_ERROR_NO_RANKS_PATH'			=> 'Nota: tens que especificar $convertor[\'ranks_path\'] para usar %s.',
	'CONV_ERROR_NO_SMILIES_PATH'		=> 'Nota: tens que especificar $convertor[\'smilies_path\'] para usar %s.',
	'CONV_ERROR_NO_UPLOAD_DIR'			=> 'Nota: tens que especificar $convertor[\'upload_path\'] para usar %s.',
	'CONV_ERROR_PERM_SETTING'			=> 'Não foi possível inserir ou actualizar as configurações de Permissões.',
	'CONV_ERROR_PM_COUNT'				=> 'Não foi possível seleccionar o contador das pastas de MP.',
	'CONV_ERROR_REPLACE_CATEGORY'		=> 'Não foi possível inserir um novo Fórum substituindo uma categoria antiga.',
	'CONV_ERROR_REPLACE_FORUM'			=> 'Não foi possível inserir um novo Fórum substituindo um Fórum antigo.',
	'CONV_ERROR_USER_ACCESS'			=> 'Não foi possível adquirir as informações de autenticação dos utilizadores.',
	'CONV_ERROR_WRONG_GROUP'			=> 'Erro no Grupo "%1$s" definido em %2$s.',
	'CONV_OPTIONS_BODY'					=> 'Esta página precisa do acesso ao código do Fórum. Introduz os dados da Base de Dados; o conversor não irá mexer no código actual. O acesso ao código deve ser desactivado para evitar erros.',
	'CONV_SAVED_MESSAGES'				=> 'Mensagens Guardadas',

	'PRE_CONVERT_COMPLETE'				=> 'Todos os passos da pré-conversão foram terminados com sucesso. Podes iniciar o processo de conversão. Por Favor, nota que deves ajustar algumas coisas manualmente. Depois da conversão, verifica as permissões atribuídas, reconstrua o índice de Pesquisa se necessário e verifica se os ficheiros foram copiados correctamente, como por exemplo os Avatares e as Emoções.',
]);
