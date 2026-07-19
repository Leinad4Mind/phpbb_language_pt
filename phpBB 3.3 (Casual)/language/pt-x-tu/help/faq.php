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
 * @Traduzido por: https://leinad4mind.top/forum - segundo as normas do Acordo Ortográfico (Versão Casual)
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

$lang = array_merge($lang, [
	'HELP_FAQ_ATTACHMENTS_ALLOWED_ANSWER'		=> 'Cada Administrador pode ativar ou desativar os tipos de anexos que desejar. Se não tens a certeza sobre o que pode ser enviado, contacta o Administrador para mais informações.',
	'HELP_FAQ_ATTACHMENTS_ALLOWED_QUESTION'	=> 'Quais os Anexos que são permitidos no Fórum?',
	'HELP_FAQ_ATTACHMENTS_OWN_ANSWER'			=> 'Para encontrares a lista dos Anexos que já enviaste para o Fórum, vai ao Painel de Controlo do Utilizador (UCP), na aba Geral clica em Anexos.',
	'HELP_FAQ_ATTACHMENTS_OWN_QUESTION'			=> 'Como posso encontrar Anexos que enviei?',

	'HELP_FAQ_BLOCK_ATTACHMENTS'	=> 'Sobre os Anexos',
	'HELP_FAQ_BLOCK_BOOKMARKS'		=> 'Sobre os Observar e Favoritos',
	'HELP_FAQ_BLOCK_FORMATTING'	=> 'Sobre os Formatos e Tipos de Tópicos',
	'HELP_FAQ_BLOCK_FRIENDS'		=> 'Sobre os Amigos e Inimigos',
	'HELP_FAQ_BLOCK_GROUPS'			=> 'Sobre os Níveis de Utilizadores e Grupos',
	'HELP_FAQ_BLOCK_ISSUES'			=> 'Sobre o Sistema phpBB3',
	'HELP_FAQ_BLOCK_LOGIN'			=> 'Questões de Login e Registo',
	'HELP_FAQ_BLOCK_PMS'				=> 'Sobre as Mensagens Privadas',
	'HELP_FAQ_BLOCK_POSTING'		=> 'Sobre as Mensagens',
	'HELP_FAQ_BLOCK_SEARCH'			=> 'Sobre a Pesquisa',
	'HELP_FAQ_BLOCK_USERSETTINGS'	=> 'Sobre as Preferências e Configurações do Utilizador',

	'HELP_FAQ_BOOKMARKS_DIFFERENCE_ANSWER'		=> 'Os Favoritos no phpBB3 são semelhantes aos favoritos do navegador. Não serás necessariamente alertado quando houver alguma atualização, mas podes depois voltar ao Tópico. Mas ao contrário disso, o Observar irá avisar-te quando houver qualquer atualização ao Tópico ou secção no Fórum pelo método ou métodos selecionados.',
	'HELP_FAQ_BOOKMARKS_DIFFERENCE_QUESTION'	=> 'Qual é a diferença existente entre Favoritos e Observar?',
	'HELP_FAQ_BOOKMARKS_FORUM_ANSWER'			=> 'Para subscreveres um fórum específico, clica no link “Observar Fórum”, na parte inferior da página, ao entrares no fórum.',
	'HELP_FAQ_BOOKMARKS_FORUM_QUESTION'			=> 'Como posso subscrever um Fórum específico?',
	'HELP_FAQ_BOOKMARKS_REMOVE_ANSWER'			=> 'Para apagares as tuas Subscrições, acede ao Painel de Controlo do Utilizador [UCP], aba Geral, opção Administrar Subscrições e segue as opções disponíveis.',
	'HELP_FAQ_BOOKMARKS_REMOVE_QUESTION'		=> 'Como posso apagar as minhas Subscrições?',
	'HELP_FAQ_BOOKMARKS_TOPIC_ANSWER'			=> 'Podes marcar como favorito ou subscrever um determinado tópico ao clicares na opção apropriada para o efeito que se encontra nas Ferramentas do Tópico, normalmente localizadas no topo ou fundo de um tópico.<br />Responder a um tópico com a opção "Notificar-me as Respostas" também irá fazer-te subscrever o tópico.',
	'HELP_FAQ_BOOKMARKS_TOPIC_QUESTION'			=> 'Como faço para subscrever um determinado tópico ou para marcá-lo como favorito?',

	'HELP_FAQ_FORMATTING_ANNOUNCEMENT_ANSWER'		=> 'Os Anúncios contêm normalmente informações importantes e devem ser lidos logo que forem publicados. Os Anúncios são automaticamente colocados no topo de cada página de cada secção. Se podes ou não utilizar essa função, depende das permissões que te foram dadas e configuradas pelo Administrador.',
	'HELP_FAQ_FORMATTING_ANNOUNCEMENT_QUESTION'	=> 'O que são Anúncios?',
	'HELP_FAQ_FORMATTING_BBOCDE_ANSWER'				=> 'O BBCode é uma implementação especial do HTML. A possibilidade de usar BBCode nas mensagens é determinada pelo Administrador do Fórum. Adicionalmente, poderás desativar o BBCode em cada mensagem, ao selecionares Desativar BBCode nesta Mensagem abaixo da caixa principal de cada mensagem. BBCode por si mesmo é similar em estilo ao HTML, as Etiquetas (TAGs) são incluídas entre parêntesis retos, como por [exemplo], em vez de &lt;exemplo&gt; proporcionando uma maior facilidade na formatação dos textos e mensagens dentro do Fórum. Para mais informações, consulta o Guia BBCode, acessível através de um atalho no Painel de Mensagens.',
	'HELP_FAQ_FORMATTING_BBOCDE_QUESTION'			=> 'O que é BBCode?',
	'HELP_FAQ_FORMATTING_GLOBAL_ANNOUNCE_ANSWER'	=> 'Os Anúncios Globais contêm normalmente informações importantes e devem ser lidos logo que forem publicados. Eles irão aparecer no topo de todas as secções e também com o teu Painel de Utilizadores. Se podes ou não utilizar essa função, depende das permissões que te foram dadas e configuradas pelo Administrador.',
	'HELP_FAQ_FORMATTING_GLOBAL_ANNOUNCE_QUESTION'	=> 'O que são Anúncios Globais?',
	'HELP_FAQ_FORMATTING_HTML_ANSWER'				=> 'Não, não é possível enviar Mensagens em HTML neste Fórum. A maioria dos formatos utilizados no HTML podem ser reproduzidos na utilização das TAGs do BBCode.',
	'HELP_FAQ_FORMATTING_HTML_QUESTION'				=> 'Posso usar HTML?',
	'HELP_FAQ_FORMATTING_ICONS_ANSWER'				=> 'Ícones de Tópicos são imagens que podem ser associados com mensagens para indicar o seu conteúdo. O uso dos ícones de tópicos dependerá das permissões escolhidas pelo administrador do fórum.',
	'HELP_FAQ_FORMATTING_ICONS_QUESTION'			=> 'O que são ícones de Tópicos?',
	'HELP_FAQ_FORMATTING_IMAGES_ANSWER'				=> 'Regra geral podes incluir imagens nas tuas Mensagens. No entanto não existe forma de as armazenar usando o phpBB. Para exibires uma imagem utiliza as TAGs BBcode [img]http://endereço.da.imagem.com[/img], (consulta o Guia de BBCode, acessível no Painel de Mensagens, para mais informações). A menos que possuas um Servidor publicamente acessível não podes exibir imagens guardadas no teu próprio PC, nem que necessitem de autenticação, como por exemplo email do Hotmail ou Yahoo, páginas protegidas por senha, etc.',
	'HELP_FAQ_FORMATTING_IMAGES_QUESTION'			=> 'Posso exibir Imagens?',
	'HELP_FAQ_FORMATTING_LOCKED_ANSWER'				=> 'Os Tópicos Bloqueados são assim colocados por um Administrador, ou Moderador de cada secção. Quando um Tópico se encontra trancado, os Utilizadores do Fórum não podem mais respondê-lo, e qualquer votação em curso, logo será finalizada. Apenas Administradores e Moderadores podem responder nestes Tópicos. Algum determinado Tópico pode ser Bloqueado por vários motivos.',
	'HELP_FAQ_FORMATTING_LOCKED_QUESTION'			=> 'O que são Tópicos Bloqueados?',
	'HELP_FAQ_FORMATTING_SMILIES_ANSWER'			=> 'As Emoções, ou Smilies, são pequenas representações gráficas que são usadas para expressar sentimentos através da utilização de poucos caracteres. :) quer dizer Feliz, :( quer dizer Triste. A lista completa de pode ser vista no formulário junto à caixa de cada mensagem. Evita o uso excessivo de Emoções, já que podem tornar uma Mensagem ilegível, podendo o Administrador ou um Moderador excluí-las ou apagar a mensagem inteira.',
	'HELP_FAQ_FORMATTING_SMILIES_QUESTION'			=> 'O que são Emoções?',
	'HELP_FAQ_FORMATTING_STICKIES_ANSWER'			=> 'Os Tópicos Fixos aparecem abaixo dos Anúncios, e apenas na primeira página de cada secção. São Tópicos com conteúdo importante e devem ser lidos logo que enviados. Da mesma forma que os Anúncios, está ao critério do Administrador determinar as permissões necessárias para enviar Tópicos Fixos em cada secção.',
	'HELP_FAQ_FORMATTING_STICKIES_QUESTION'		=> 'O que são Tópicos Fixos?',

	'HELP_FAQ_FRIENDS_BASIC_ANSWER'		=> 'Podes utilizar esta lista para organizar os outros Utilizadores do Fórum. Os Utilizadores adicionados na tua Lista de Amigos serão listados com o teu Painel de Controlo do Utilizador com acesso rápido para ver seus estados Online e para lhes enviar Mensagens Privadas. Se solicitares ao Suporte de Templates, as Mensagens enviadas por estes Utilizadores poderão aparecer em destaque. Se adicionares um Utilizador na tua Lista de Inimigos, então qualquer mensagem enviada por ele será ocultada de forma padrão.',
	'HELP_FAQ_FRIENDS_BASIC_QUESTION'	=> 'O que é a Lista de Amigos e Inimigos?',
	'HELP_FAQ_FRIENDS_MANAGE_ANSWER'		=> 'Podes adicionar Utilizadores na tua lista de duas formas. Através do Perfil de cada Utilizador, existe um atalho para os adicionares à tua lista. De maneira alternativa, podes adicionar Utilizadores diretamente escrevendo os seus Nomes de Utilizadores. Podes também apagar Utilizadores da tua lista utilizando a mesma página.',
	'HELP_FAQ_FRIENDS_MANAGE_QUESTION'	=> 'Como posso Adicionar/apagar de minha Lista de Amigos e Inimigos?',

	'HELP_FAQ_GROUPS_ADMINISTRATORS_ANSWER'		=> 'Administradores são os Utilizadores que possuem o Nível Máximo de controlo sobre todos os aspetos do Fórum. Podem controlar toda a operação das secções, incluindo criar, editar ou apagar secções, determinar permissões, expulsar Utilizadores, criar Grupos de Utilizadores ou Moderadores, etc. E ainda possuem todos os poderes de Moderador em todas as secções existentes.',
	'HELP_FAQ_GROUPS_ADMINISTRATORS_QUESTION'		=> 'O que são Administradores?',
	'HELP_FAQ_GROUPS_COLORS_ANSWER'					=> 'O Administrador do Fórum pode atribuir cores aos Utilizadores de um determinado grupo, para identificá-los diante de outros Utilizadores e grupos.',
	'HELP_FAQ_GROUPS_COLORS_QUESTION'				=> 'Por que alguns Grupos aparecem em diferentes cores?',
	'HELP_FAQ_GROUPS_DEFAULT_ANSWER'					=> 'Se és Utilizador de mais de um Grupo de Utilizadores, será determinado qual Cor e Classificação te serão atribuídos por padrão. O Administrador poderá conceder-te a opção de escolha do teu Grupo Padrão pelo Painel de Utilizadores.',
	'HELP_FAQ_GROUPS_DEFAULT_QUESTION'				=> 'O que é um Grupo Padrão?',
	'HELP_FAQ_GROUPS_MODERATORS_ANSWER'				=> 'Moderadores são os Utilizadores (ou Grupos de Utilizadores) em que seu trabalho é supervisionar diariamente o andamento das secções que lhes estejam designadas. Eles possuem o poder de editar ou apagar Mensagens, trancar, destrancar, mover e subdividir Tópicos nas secções onde são Moderadores. Geralmente os Moderadores fiscalizam Mensagens que possam ir Além do Assunto em Discussão ou o uso de material abusivo ou ofensivo.',
	'HELP_FAQ_GROUPS_MODERATORS_QUESTION'			=> 'O que são Moderadores?',
	'HELP_FAQ_GROUPS_TEAM_ANSWER'						=> 'A Equipa de Responsáveis do Fórum é uma página onde é exibida a Lista detalhada dos membros da equipa responsável pelo Fórum, incluindo Administradores e Moderadores, bem como os detalhes de cada um deles.',
	'HELP_FAQ_GROUPS_TEAM_QUESTION'					=> 'O que é a Equipa de Responsáveis do Fórum?',
	'HELP_FAQ_GROUPS_USERGROUPS_ANSWER'				=> 'Grupos de Utilizadores são uma forma dos Administradores agrupar Utilizadores. Cada Utilizador pode pertencer a Vários Grupos (isto difere da maioria dos outros tipos de Quadros de Mensagens) e a cada Grupo podem ser dados direitos de acesso individuais. Isto torna mais fácil aos Administradores destinar vários Utilizadores como Moderadores de uma determinada secção ou dar-lhes acesso a uma secção privada, etc.',
	'HELP_FAQ_GROUPS_USERGROUPS_JOIN_ANSWER'		=> 'Para te inscreveres num Grupo de Utilizadores, clica no atalho de Grupos no topo da página (dependendo do Tema em uso), podendo então ver todos os Grupos. Nem todos os Grupos possuem um acesso aberto, alguns estão fechados e alguns poderão inclusive encontrar-se invisíveis. Se o Grupo se encontrar aberto, poderás solicitar a tua inscrição clicando no botão apropriado. O Líder do Grupo de Utilizadores precisará aprovar a tua inscrição, podendo perguntar-te o motivo do mesmo. Por Favor, não insistas com um Líder de Grupo caso a tua inscrição seja recusada. Ele deverá informar-te a respeito de qualquer decisão.',
	'HELP_FAQ_GROUPS_USERGROUPS_JOIN_QUESTION'	=> 'Como me inscrevo num Grupo de Utilizadores?',
	'HELP_FAQ_GROUPS_USERGROUPS_LEAD_ANSWER'		=> 'Os Grupos de Utilizadores são inicialmente criados pelo Administrador do Fórum o qual encarrega alguém de ser responsável pelo mesmo, no caso, o Líder do Grupo. Se estás interessado em criar um Grupo de Utilizadores, deverás primeiramente contactar o Administrador, ao qual deverás contactar com uma Mensagem Privada circunstanciada.',
	'HELP_FAQ_GROUPS_USERGROUPS_LEAD_QUESTION'	=> 'Como posso ser Líder de um Grupo?',
	'HELP_FAQ_GROUPS_USERGROUPS_QUESTION'			=> 'O que são Grupos de Utilizadores?',

	'HELP_FAQ_ISSUES_ADMIN_ANSWER'			=> 'Todos os Utilizadores do Fórum podem usar o formulário “Contacta-nos”, se a opção estiver ativada.<br />Os Utilizadores podem usar o link “Equipa”.',
	'HELP_FAQ_ISSUES_ADMIN_QUESTION'			=> 'Como faço para entrar em contacto com o administrador do fórum?',
	'HELP_FAQ_ISSUES_FEATURE_ANSWER'			=> 'Este software foi escrito e licenciado pelo Grupo phpBB. Se acreditas que alguma função pode ser adicionada, ou se queres relatar um erro, por favor, visita o site <a href="https://www.phpbb.com/ideas/">phpBB Ideas Centre</a>, onde encontrarás recursos para o fazer.',
	'HELP_FAQ_ISSUES_FEATURE_QUESTION'		=> 'Por que não existe a Função X?',
	'HELP_FAQ_ISSUES_LEGAL_ANSWER'			=> 'Contacta o Administrador deste Fórum. Vê no canto superior direito da imagem, encontrarás um atalho para a lista de Utilizadores onde está o Administrador. Envia-lhe uma Mensagem Privada a expor o assunto.',
	'HELP_FAQ_ISSUES_LEGAL_QUESTION'			=> 'Contactos sobre questões abusivas e/ou ilegais relativas ao Fórum.',
	'HELP_FAQ_ISSUES_WHOIS_PHPBB_ANSWER'	=> 'Este Software é produzido, publicado e com direitos reservados pelo <a href="https://www.phpbb.com/">phpBB Limited</a>. Está disponível sob a licença GNU - General Public Licence e pode ser distribuído gratuitamente.',
	'HELP_FAQ_ISSUES_WHOIS_PHPBB_QUESTION'	=> 'Quem Escreveu o phpBB?',

	'HELP_FAQ_LOGIN_AUTO_LOGOUT_ANSWER'					=> 'Porque anteriormente assinalaste a opção Lembrar-me. Nunca assinales esta opção se usares um computador acessível a outras pessoas. Isso evita o uso abusivo por terceiros da tua conta. Para que esta opção perca efeito, da próxima vez que saíres do Fórum clica em: Sair [ Utilizador ]',
	'HELP_FAQ_LOGIN_AUTO_LOGOUT_QUESTION'				=> 'Por que entro automaticamente no Fórum?',
	'HELP_FAQ_LOGIN_CANNOT_LOGIN_ANSWER'				=> 'Já te Registaste? Deves Registar-te para poderes Entrar no Fórum. Foste expulso? Se foste expulso deverás receber uma Mensagem a informar-te da ocorrência. Se discordares das razões apontadas, contacta o Administrador. Se estás registado, não te encontras expulso e mesmo assim não consegues entrar, verifica se o teu Nome de Utilizador e Senha estão corretos. Normalmente é esse o problema. Se, mesmo assim, não encontras uma explicação para a situação, contacta o Administrador porque pode haver alguma configuração errada no Sistema.',
	'HELP_FAQ_LOGIN_CANNOT_LOGIN_ANYMORE_ANSWER'		=> 'É possível que o administrador tenha excluído o teu registo por algum motivo. Além disso, há administradores que removem registos de utilizadores que nunca colocaram mensagens, de modo a reduzir o tamanho da Base de Dados. Se isso aconteceu, tenta registar-te novamente e ser participativo no fórum.',
	'HELP_FAQ_LOGIN_CANNOT_LOGIN_ANYMORE_QUESTION'	=> 'Registei-me e já entrei anteriormente, mas agora não consigo!',
	'HELP_FAQ_LOGIN_CANNOT_LOGIN_QUESTION'				=> 'Porque não consigo entrar no Fórum?',
	'HELP_FAQ_LOGIN_CANNOT_REGISTER_ANSWER'			=> 'A COPPA (Children Online Privacy Protection Act) é uma Lei de 1998 dos EUA que exige uma autorização para guardar as informações relativas a menores de 13 anos de idade.',
	'HELP_FAQ_LOGIN_CANNOT_REGISTER_QUESTION'			=> 'Porque não me posso registar?',
	'HELP_FAQ_LOGIN_COPPA_ANSWER'							=> 'COPPA, ou Lei de Proteção da Privacidade Online Infantil de 1998,  é uma Lei dos EUA que exige uma autorização dos encarregados de educação, ou de um responsável legal, para guardar as informações relativas a menores de 13 anos de idade. Caso não saibas se isso se aplica a ti, obtém aconselhamento legal. Por favor, fica ciente de que nem o phpBB Limited nem o fundador deste fórum te pode aconselhar em termos legais, à exceção da questão “Quem devo contactar em caso de abusos e/ou assuntos legais relacionados com este fórum?”.',
	'HELP_FAQ_LOGIN_COPPA_QUESTION'						=> 'O que significa COPPA?',
	'HELP_FAQ_LOGIN_DELETE_COOKIES_ANSWER'				=> '“Apagar Cookies” apaga do teu navegador todos os cookies criados pelo phpBB3 e que servem para te manter ligado e autenticado, e permitem o pleno funcionamento das opções ativadas pelo Administrador.',
	'HELP_FAQ_LOGIN_DELETE_COOKIES_QUESTION'			=> 'Para que serve a opção “Apagar cookies”?',
	'HELP_FAQ_LOGIN_LOST_PASSWORD_ANSWER'				=> 'A tua Senha não pode ser recuperada, no entanto podes pedir uma nova. Procede como se estivesses a entrar no Fórum pela primeira vez. Clica em Entrar e em seguida em Esqueci-me da senha. Segue as instruções, e voltarás a entrar no Fórum em poucos minutos, com uma Senha nova.',
	'HELP_FAQ_LOGIN_LOST_PASSWORD_QUESTION'			=> 'Esqueci-me da minha Senha, e agora?',
	'HELP_FAQ_LOGIN_REGISTER_ANSWER'						=> 'Compete ao administrador do fórum decidir se, para poderes criar mensagens, o registo é obrigatório. No entanto, o registo dá-te acesso a ferramentas adicionais não disponíveis aos visitantes, como definir imagens de avatar, mensagens privadas, e-mail de outros utilizadores, subscrição de Grupos, etc. Leva apenas alguns minutos para te registares, daí ser recomendável que o faças.',
	'HELP_FAQ_LOGIN_REGISTER_CONFIRM_ANSWER'			=> 'Verifica se escreveste corretamente o Nome de Utilizador e a Senha. Se tens a certeza de que estão corretos, tem em atenção um de dois fatores. Se a função COPPA (Children\'s Online Privacy Protection Act) estiver ativa no Fórum e assinalaste uma idade inferior a 13 anos durante o Registo, então tens que seguir as instruções que recebeste. Se não é este o teu caso, então o teu Registo ainda não se encontra ativado. Alguns Fóruns obrigam à ativação dos novos Registos. A Ativação tanto pode ser feita pelo Administrador como pelo próprio Utilizador, que neste último caso receberá um email para esse efeito. Esta informação é fornecida aos novos Utilizadores durante o Registo. Se recebeste um email, segue as suas instruções. Se não recebeste nenhum email, pode ter sido porque escreveste incorretamente o endereço de email ou então está considerado como spam pelo teu cliente de email. Se tens a certeza que o endereço de email que forneceste é válido e correto, tenta contactar o Administrador do Fórum.',
	'HELP_FAQ_LOGIN_REGISTER_CONFIRM_QUESTION'		=> 'Registei-me mas não consigo entrar!',
	'HELP_FAQ_LOGIN_REGISTER_QUESTION'					=> 'Por que motivo tenho de me registar?',

	'HELP_FAQ_PMS_CANNOT_SEND_ANSWER'	=> 'Existem três razões para que tal possa acontecer: Não estás Registado no Fórum e/ou não te encontras Online, o Administrador terá desativado a opção de Mensagens Privadas em todo o Fórum ou impede-te por algum motivo de enviar Mensagens. Se este último é o teu caso, pergunta ao Administrador qual o motivo, caso realmente não saibas.',
	'HELP_FAQ_PMS_CANNOT_SEND_QUESTION'	=> 'Não consigo enviar Mensagens Privadas!',
	'HELP_FAQ_PMS_SPAM_ANSWER'				=> 'Embora o sistema de emails deste Fórum tenha funções de segurança que tentam detetar Utilizadores que enviam este tipo de Mensagens, lamentamos que tal tenha acontecido. Informa o Administrador do Fórum enviando uma cópia completa do email recebido, sendo muito importante que incluas os cabeçalhos (é onde se encontram os detalhes do Utilizador que enviou o email). O Administrador poderá então agir em conformidade.',
	'HELP_FAQ_PMS_SPAM_QUESTION'			=> 'Recebi de alguém neste Fórum um email com assuntos irrelevantes ou abusivos!',
	'HELP_FAQ_PMS_UNWANTED_ANSWER'		=> 'Podes apagar automaticamente Mensagens Privadas enviadas por um Utilizador usando as regras das mensagens no teu Painel de Controlo do Utilizador. Se estiveres a receber Mensagens indesejáveis por parte de algum Utilizador, denuncia as mensagens a um Moderador do Fórum para que possa proibir o determinado utilizador de enviar este tipo de Mensagens.',
	'HELP_FAQ_PMS_UNWANTED_QUESTION'		=> 'Recebo Mensagens Privadas indesejáveis!',

	'HELP_FAQ_POSTING_BUMP_ANSWER'		=> 'Clicando em Ressuscitar Tópico, quando estiveres a visualizar o mesmo, podes ressuscitar o Tópico para o topo do Fórum na primeira página. Porém, se não vires esta opção, então esta ferramenta encontra-se desativada. Também o podes fazer simplesmente respondendo ao Tópico. Entretanto, fica atento às regras do site.',
	'HELP_FAQ_POSTING_BUMP_QUESTION'		=> 'Como posso ressuscitar os meus Tópicos?',
	'HELP_FAQ_POSTING_CREATE_ANSWER'		=> 'Isso é fácil, clica no botão Novo Tópico ou Responder. Estes botões só são visíveis nas situações em que estás autorizado a fazê-lo.',
	'HELP_FAQ_POSTING_CREATE_QUESTION'	=> 'Como crio um Tópico ou respondo num Fórum?',
	'HELP_FAQ_POSTING_DRAFT_ANSWER'		=> 'Esta opção permite-te arquivar o rascunho da mensagem para a enviares mais tarde. Para o recarregares, vai ao Painel de Controlo do Utilizador [UCP] separador Geral opção Rascunhos Arquivados e segue as opções.',
	'HELP_FAQ_POSTING_DRAFT_QUESTION'	=> 'Para que serve o botão Guardar no Painel de Mensagens?',
	'HELP_FAQ_POSTING_EDIT_DELETE_ANSWER'			=> 'A menos que sejas Administrador ou Moderador, apenas podes editar ou excluir as tuas próprias mensagens. Podes editar a mensagem clicando no botão de edição. Por vezes, apenas o poderás fazer por um período limitado de tempo, após o envio da mensagem. Caso alguém já tenha respondido, encontrarás um pequeno texto abaixo da mensagem que reporta o número de vezes que a editaste, juntamente com a data e a hora. Isto não aparece apenas caso alguém não tenha respondido. Não aparecerá igualmente se um Administrador ou Moderador editarem a mensagem, embora possam deixar uma nota a informar o critério que justificou a edição. Por favor, nota que os Utilizadores normais não podem apagar uma mensagem depois de alguém já ter respondido.',
	'HELP_FAQ_POSTING_EDIT_DELETE_QUESTION'		=> 'Como posso editar ou apagar uma Mensagem?',
	'HELP_FAQ_POSTING_FORUM_RESTRICTED_ANSWER'	=> 'Alguns fóruns podem ser restringidos a alguns utilizadores ou grupos. Para veres, leres, enviares mensagem ou efetuares qualquer outra ação, poderás precisar de permissões especiais. Contacta um moderador ou administrador para te garantir o acesso.',
	'HELP_FAQ_POSTING_FORUM_RESTRICTED_QUESTION'	=> 'Porque não consigo aceder a um fórum?',
	'HELP_FAQ_POSTING_NO_ATTACHMENTS_ANSWER'		=> 'As permissões dos anexos são atribuídas por fórum, por grupo, ou por utilizador. O Administrador do Fórum pode não ter permitido anexos em determinado fórum, ou apenas deu permissões a certos grupos. Contacta-o caso não saibas o motivo pelo qual não podes adicionar anexos.',
	'HELP_FAQ_POSTING_NO_ATTACHMENTS_QUESTION'	=> 'Porque não posso adicionar anexos?',
	'HELP_FAQ_POSTING_POLL_ADD_ANSWER'			=> 'O limite de opções das votações é fixado pelo administrador do fórum. Se achas que precisas de adicionar mais opções para a tua votação do que o número permitido, contacta o administrador do fórum.',
	'HELP_FAQ_POSTING_POLL_ADD_QUESTION'		=> 'Porque não posso adicionar mais opções nas votações?',
	'HELP_FAQ_POSTING_POLL_CREATE_ANSWER'		=> 'Criar uma votação é fácil. Quando envias um Tópico novo (ou Editas a primeira mensagem de um Tópico, caso tenhas permissão para tal), encontras na parte inferior à caixa principal da mensagem um painel com o Título Adicionar Votação (se não vires isto, é porque provavelmente não tens permissão para criar Votação ou o Tópico não é de tua autoria). Deves escrever um Título para a Votação e, em seguida, escrever pelo menos Duas Opções de Voto (para adicionares uma opção de votação, escreve o que pretendes, e clica no botão Adicionar opção de Voto). Deverás também estipular um tempo limite para a Votação, sendo 0 ilimitado. Poderá acontecer existir um limite no Número de Opções de Voto, estando esse limite ao critério e configuração do Administrador.',
	'HELP_FAQ_POSTING_POLL_CREATE_QUESTION'	=> 'Como posso criar uma votação?',
	'HELP_FAQ_POSTING_POLL_EDIT_ANSWER'			=> 'Da mesma forma que as Mensagens, as votações só podem ser editadas pelo seu autor, Moderadores ou Administradores do Fórum. Para editares uma votação, clica na primeira mensagem do Tópico (esta mensagem é a que tem a votação associada ao Tópico). Caso ninguém tenha submetido voto, os seus autores podem apagar a votação ou editar as suas opções de voto. Contudo, se os Utilizadores já submeteram votos, apenas Moderadores e Administradores podem editar ou apagar essa votação. Isso é para evitar que sejam alteradas as opções de voto em votações em curso.',
	'HELP_FAQ_POSTING_POLL_EDIT_QUESTION'		=> 'Como posso editar ou apagar uma votação?',
	'HELP_FAQ_POSTING_QUEUE_ANSWER'				=> 'O Administrador pode decidir se, na secção em que estás a publicar, as Mensagens precisam de ser revisadas ou não. E também é possível que o Administrador te tenha adicionado a um Grupo de Utilizadores que precise ter as tuas Mensagens aprovadas antes de as enviares ao Fórum. Por Favor, contacta o Administrador para mais informações.',
	'HELP_FAQ_POSTING_QUEUE_QUESTION'			=> 'Do que necessita a minha Mensagem para ser Aprovada?',
	'HELP_FAQ_POSTING_REPORT_ANSWER'				=> 'Se o Administrador tiver ativado esta opção, vai até à mensagem que desejas denunciar e verás um botão que serve para denunciar Mensagens. Clicando ali, serás encaminhado às etapas necessárias para denunciares a mensagem.',
	'HELP_FAQ_POSTING_REPORT_QUESTION'			=> 'Como posso Denunciar Mensagens?',
	'HELP_FAQ_POSTING_SIGNATURE_ANSWER'			=> 'Vai ao Painel de Controlo do Utilizador [UCP] aba Perfil opção A tua assinatura, e adiciona a assinatura pretendida. Ainda no [UCP], no separador Preferências opção Mensagens enviadas seleciona Ativar sempre a Minha Assinatura. Nas tuas Mensagens podes, se assim o desejares, desativar caso a caso a opção Anexar assinatura.',
	'HELP_FAQ_POSTING_SIGNATURE_QUESTION'		=> 'Como posso adicionar uma assinatura às minhas Mensagens?',
	'HELP_FAQ_POSTING_WARNING_ANSWER'			=> 'Lê as Regras do Fórum cuidadosamente e cumpre-as rigorosamente. Por Favor, nota que esta é a decisão do Administrador do Fórum, e o phpBB Limited não tem autoridade nenhuma sobre a advertência enviada.',
	'HELP_FAQ_POSTING_WARNING_QUESTION'			=> 'Porque recebi uma Advertência?',

	'HELP_FAQ_SEARCH_BLANK_ANSWER'			=> 'A tua Pesquisa resultou em inúmeras ocorrências. Usa a Pesquisa Avançada e sê mais específico nos termos escritos e seleciona secções onde possam ser pesquisados.',
	'HELP_FAQ_SEARCH_BLANK_QUESTION'			=> 'Por que a minha Pesquisa resultou em uma página em branco!?',
	'HELP_FAQ_SEARCH_FORUM_ANSWER'			=> 'Escrevendo um Termo de Pesquisa na respetiva página localizada no Índice do Fórum, Visualizando Tópicos ou Secções. Podes aceder à Pesquisa Avançada clicando no atalho Pesquisar que se encontra disponível em todas as páginas do Fórum.',
	'HELP_FAQ_SEARCH_FORUM_QUESTION'			=> 'Como posso Pesquisar?',
	'HELP_FAQ_SEARCH_MEMBERS_ANSWER'			=> 'Entra na Página dos Utilizadores e clica no atalho Pesquisar um Utilizador. Ao selecionares, segue restritamente às opções descritas na página.',
	'HELP_FAQ_SEARCH_MEMBERS_QUESTION'		=> 'Como posso Pesquisar por Utilizadores?',
	'HELP_FAQ_SEARCH_NO_RESULT_ANSWER'		=> 'A tua Pesquisa foi provavelmente muito vaga e foram escritos muitos termos comuns que não são incluídos pelo phpBB3. Sê mais específico e utiliza as opções disponíveis com a Pesquisa Avançada.',
	'HELP_FAQ_SEARCH_NO_RESULT_QUESTION'	=> 'Por que a minha Pesquisa resultou em nenhuma ocorrência?',
	'HELP_FAQ_SEARCH_OWN_ANSWER'				=> 'As tuas próprias Mensagens podem ser exibidas clicando em Mensagens do Utilizador através do Painel de Utilizadores ou apenas pelo teu próprio Perfil. Para encontrares os teus Tópicos, utiliza a Pesquisa Avançada e preenche corretamente as opções.',
	'HELP_FAQ_SEARCH_OWN_QUESTION'			=> 'Como posso Pesquisar minhas Próprias Mensagens e Tópicos?',

	'HELP_FAQ_USERSETTINGS_AVATAR_ANSWER'				=> 'Há duas imagens que podem aparecer junto com um nome de Utilizador quando se veem as Mensagens. Uma delas pode ser uma imagem associada à sua classificação, geralmente na forma de blocos, estrelas ou pontos, indicando a quantidade de mensagens que tenha feito ou o seu estatuto no Fórum. Outra, geralmente uma imagem maior, é conhecida como um Avatar, que é normalmente única ou pertencente a cada Utilizador. Cabe ao Administrador permitir ou não o uso de Avatar e definir como podem ser usados. Se não conseguires utilizar Avatares, contacta o Administrador do Fórum.',
	'HELP_FAQ_USERSETTINGS_AVATAR_DISPLAY_ANSWER'	=> 'Há duas imagens que podem aparecer junto com um nome de Utilizador quando se veem as Mensagens. Uma delas pode ser uma imagem associada à sua classificação, geralmente na forma de blocos, estrelas ou pontos, indicando a quantidade de mensagens que tenha feito ou o seu estatuto no Fórum. Outra, geralmente uma imagem maior, é conhecida como um Avatar, que é normalmente única ou pertencente a cada Utilizador. Cabe ao Administrador permitir ou não o uso de Avatar e definir como podem ser usados. Se não conseguires utilizar Avatares, contacta o Administrador do Fórum.',
	'HELP_FAQ_USERSETTINGS_AVATAR_DISPLAY_QUESTION'	=> 'Como posso exibir uma Imagem junto ao meu Nome de Utilizador?',
	'HELP_FAQ_USERSETTINGS_AVATAR_QUESTION'			=> 'O que são as imagens ao lado do meu nome de utilizador?',
	'HELP_FAQ_USERSETTINGS_CHANGE_SETTINGS_ANSWER'	=> 'As configurações (depois do Registo) são guardadas numa Base de Dados. Para as alterares, acede ao Painel de Controlo do Utilizador [UCP], aba Perfil. Aí podes alterar os dados do teu Registo.',
	'HELP_FAQ_USERSETTINGS_CHANGE_SETTINGS_QUESTION'	=> 'Como altero as configuração do meu Perfil?',
	'HELP_FAQ_USERSETTINGS_EMAIL_LOGIN_ANSWER'		=> 'Só os Utilizadores Registados podem enviar emails através do formulário exclusivo do Fórum (se esta função se encontrar ativada). Isso evita o uso malicioso do sistema de email por Visitantes.',
	'HELP_FAQ_USERSETTINGS_EMAIL_LOGIN_QUESTION'		=> 'Quando clico no email de um Utilizador, pede-me para ligar no fórum?!',
	'HELP_FAQ_USERSETTINGS_HIDE_ONLINE_ANSWER'		=> 'No Painel de Controlo do Utilizador [UCP], aba Preferências, opção Configurações Pessoais, seleciona Sim em Ocultar o meu estado Online. Desta forma só o Administrador e os Moderadores poderão ver-te Online. Passarás a ser considerado Utilizador invisível pelo Sistema.',
	'HELP_FAQ_USERSETTINGS_HIDE_ONLINE_QUESTION'		=> 'Posso ocultar o meu Nome de Utilizador da Lista de Utilizadores Online?',
	'HELP_FAQ_USERSETTINGS_LANGUAGE_ANSWER'			=> 'Este Fórum usa o Português europeu como Idioma oficial.',
	'HELP_FAQ_USERSETTINGS_LANGUAGE_QUESTION'			=> 'O meu idioma não está na lista!',
	'HELP_FAQ_USERSETTINGS_RANK_ANSWER'					=> 'De uma forma geral, o Utilizador Normal não pode alterar diretamente a tua Classificação (as Classificações aparecem por debaixo do Nome de Utilizador nos Tópicos e no Perfil, dependendo do Tema em uso). A maior parte das Classificação existentes, indicam o Número de Mensagens enviadas ou indicam certo tipo de Utilizadores, ou seja, Moderadores e Administradores poderão ter uma Classificação Especial. Por Favor, não abuses do Fórum enviando Mensagens desnecessárias apenas para aumentares o Nível da tua Classificação, pois os Administradores ou Moderadores podem tomar alguma atitude contra ti, se considerarem que estás a ter atitudes abusivas.',
	'HELP_FAQ_USERSETTINGS_RANK_QUESTION'				=> 'O que é e como posso alterar a minha Classificação??',
	'HELP_FAQ_USERSETTINGS_SERVERTIME_ANSWER'			=> 'Se tens a certeza que o fuso horário que escolheste é a [GMT] Dublin, Edinburgh, Iceland, Lisboa, London, Casablanca é possível que seja devido à mudança de horário de Verão/Inverno.',
	'HELP_FAQ_USERSETTINGS_SERVERTIME_QUESTION'		=> 'Alterei o Fuso Horário, mas a Data e Hora continuam erradas!,',
	'HELP_FAQ_USERSETTINGS_TIMEZONE_ANSWER'			=> 'Se tens a certeza de teres definido o fuso horário corretamente e a hora continua errada, então o horário definido no relógio do servidor está incorreto. Por favor, contacta o administrador para corrigir o problema.',
	'HELP_FAQ_USERSETTINGS_TIMEZONE_QUESTION'			=> 'A Data e Hora estão erradas!',
]);
