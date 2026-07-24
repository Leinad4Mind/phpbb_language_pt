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

$lang = array_merge($lang, [
	'ADD_ATTACHMENT'				=> 'Anexar Ficheiro',
	'ADD_ATTACHMENT_EXPLAIN'	=> 'Se desejas anexar um ou mais Ficheiros, preenche os campos abaixo:',
	'ADD_FILE'						=> 'Adicionar o Ficheiro',
	'ADD_POLL'						=> 'Criar Votação',
	'ADD_POLL_EXPLAIN'			=> 'Se não desejas adicionar uma votação ao Tópico deixa os campos em branco.',
	'ALREADY_DELETED'				=> 'Esta Mensagem já foi apagada.',
	'ATTACH_COMMENT_NO_EMOJIS'	=> 'O comentário do anexo contém caracteres proibidos (Emoji).',
	'ATTACH_DISK_FULL'			=> 'Não existe espaço livre suficiente no servidor onde se encontra este fórum para enviar o anexo.',
	'ATTACH_QUOTA_REACHED'		=> 'A cota máxima de anexos para este painel foi alcançada.',
	'ATTACH_SIG'					=> 'Anexar a minha assinatura (podes alterar a assinatura no Painel de Controlo do Utilizador)',

	'BBCODE_A_HELP'				=> 'Anexo enviado: [attachment=]nome do Ficheiro.ext[/attachment]',
	'BBCODE_B_HELP'				=> 'Texto em Negrito: [b]texto[/b]  (alt+b)',
	'BBCODE_C_HELP'				=> 'Exibir código: [code]código[/code]  (alt+c)',
	'BBCODE_D_HELP'				=> 'Flash: [flash=width,height]http://url[/flash]',
	'BBCODE_F_HELP'				=> 'Tamanho da fonte: [size=85]texto pequeno[/size]',
	'BBCODE_IS_OFF'				=> '%sBBCode%s está <em>DESLIGADO</em>',
	'BBCODE_IS_ON'					=> '%sBBCode%s está <em>LIGADO</em>',
	'BBCODE_I_HELP'				=> 'Texto em Itálico: [i]texto[/i]  (alt+i)',
	'BBCODE_L_HELP'				=> 'Lista: [list][*]texto[/list]',
	'BBCODE_LISTITEM_HELP'		=> 'Listar Itens: [*]texto',
	'BBCODE_O_HELP'				=> 'Lista Ordenada: e.g. [list=1][*]Primeiro Ponto[/list] ou [list=a][*]Ponto a[/list]',
	'BBCODE_P_HELP'				=> 'Inserir imagem: [img]http://url_da_imagem[/img]  (alt+p)',
	'BBCODE_Q_HELP'				=> 'Citar Texto: [quote]texto[/quote]  (alt+q)',
	'BBCODE_S_HELP'				=> 'Cor da fonte: [color=red]texto[/color] ou [color=#FF0000]texto[/color]',
	'BBCODE_U_HELP'				=> 'Texto Sublinhado: [u]texto[/u]  (alt+u)',
	'BBCODE_W_HELP'				=> 'Inserir URL: [url]http://url[/url] ou [url=http://url]texto da URL[/url]  (alt+w)',
	'BBCODE_Y_HELP'				=> 'Lista: Adicionar um elemento à lista',
	'BUMP_ERROR'					=> 'Não podes ressuscitar este Tópico com uma última Mensagem tão recente.',

	'CANNOT_DELETE_REPLIED'		=> 'Não podes apagar Mensagens que não foram respondidas.',
	'CANNOT_EDIT_POST_LOCKED'	=> 'Esta Mensagem foi bloqueada. Não podes editá-la.',
	'CANNOT_EDIT_TIME'			=> 'Não podes editar ou apagar esta Mensagem.',
	'CANNOT_POST_ANNOUNCE'		=> 'Não podes criar anúncios.',
	'CANNOT_POST_STICKY'			=> 'Não podes criar Tópicos fixos.',
	'CHANGE_TOPIC_TO'				=> 'Alterar Tópico para',
	'CHARS_POST_CONTAINS'		=> [
		1	=> 'A tua mensagem tem %1$d carácter.',
		2	=> 'A tua mensagem tem %1$d caracteres.',
	],
	'CHARS_SIG_CONTAINS'		=> [
		1	=> 'A tua assinatura tem %1$d carácter.',
		2	=> 'A tua assinatura tem %1$d caracteres.',
	],
	'CLOSE_TAGS'					=> 'Fechar tags',
	'CURRENT_TOPIC'				=> 'Tópico actual',

	'DELETE_FILE'					=> 'Apagar Ficheiro',
	'DELETE_MESSAGE'				=> 'Apagar Mensagem',
	'DELETE_MESSAGE_CONFIRM'	=> 'Tens a certeza que desejas apagar esta Mensagem?',
	'DELETE_OWN_POSTS'			=> 'Só podes apagar as tuas Mensagens.',
	'DELETE_PERMANENTLY'			=> 'Eliminar',
	'DELETE_POST_CONFIRM'					=> 'Tens a certeza que desejas apagar esta mensagem?',
	'DELETE_POST_PERMANENTLY_CONFIRM'	=> 'Tens a certeza que desejas eliminar <strong>permanentemente</strong> esta mensagem?',
	'DELETE_POST_PERMANENTLY'			=> [
		1	=> 'Excluir permanentemente esta mensagem, não poderá ser depois recuperada',
		2	=> 'Excluir permanentemente %1$d mensagens, não poderão ser depois recuperadas',
	],
	'DELETE_POSTS_CONFIRM'					=> 'Tens a certeza que desejas apagar estas mensagens?',
	'DELETE_POSTS_PERMANENTLY_CONFIRM'	=> 'Tens a certeza que desejas eliminar <strong>permanentemente</strong> estas mensagens?',
	'DELETE_REASON'							=> 'Motivos para apagar',
	'DELETE_REASON_EXPLAIN'					=> 'O motivo indicado será visível pelos moderadores.',
	'DELETE_POST_WARN'						=> 'Apagar esta mensagem',
	'DELETE_TOPIC_CONFIRM'					=> 'Tens a certeza que desejas apagar este tópico?',
	'DELETE_TOPIC_PERMANENTLY'				=> [
		1	=> 'Excluir permanentemente este tópico, não poderá ser depois recuperado',
		2	=> 'Excluir permanentemente %1$d tópicos, não poderão ser depois recuperados',
	],
	'DELETE_TOPIC_PERMANENTLY_CONFIRM'	=> 'Tens a certeza que desejas eliminar <strong>permanentemente</strong> este tópico?',
	'DELETE_TOPICS_CONFIRM'					=> 'Tens a certeza que desejas apagar estes tópicos?',
	'DELETE_TOPICS_PERMANENTLY_CONFIRM'	=> 'Tens a certeza que desejas eliminar <strong>permanentemente</strong> estes tópicos?',
	'DISABLE_BBCODE'				=> 'Desactivar o BBCode',
	'DISABLE_MAGIC_URL'			=> 'Não processar as URLs automaticamente',
	'DISABLE_SMILIES'				=> 'Desactivar as Emoções',
	'DISALLOWED_CONTENT'			=> 'O envio foi rejeitado porque o ficheiro enviado foi identificado como potencialmente malicioso.',
	'DISALLOWED_EXTENSION'		=> 'A extensão %s não é permitida.',
	'DRAFT_LOADED'					=> 'Rascunho carregado, podes terminar a tua Mensagem. O rascunho será apagado ao enviares a Mensagem.',
	'DRAFT_LOADED_PM'				=> 'Rascunho carregado, podes terminar a tua Mensagem Privada. O teu rascunho será apagado ao enviares a Mensagem Privada.',
	'DRAFT_SAVED'					=> 'Rascunho guardado com sucesso.',
	'DRAFT_TITLE'					=> 'Título do rascunho',

	'EDIT_REASON'					=> 'Motivos para editar esta Mensagem',
	'EMPTY_FILEUPLOAD'			=> 'O Ficheiro enviado está vazio.',
	'EMPTY_MESSAGE'				=> 'Tens que escrever uma Mensagem.',
	'EMPTY_REMOTE_DATA'			=> 'O Ficheiro não pode ser enviado, tenta enviá-lo manualmente.',

	'FLASH_IS_OFF'					=> '[flash] está <em>DESLIGADO</em>',
	'FLASH_IS_ON'					=> '[flash] está <em>LIGADO</em>',
	'FLOOD_ERROR'					=> 'Não podes enviar uma nova Mensagem tão rapidamente. Aguarda algum tempo e tenta novamente mais tarde.',
	'FONT_COLOR'					=> 'Cor da Fonte',
	'FONT_COLOR_HIDE'				=> 'Ocultar cor da fonte',
	'FONT_HUGE'						=> 'Enorme',
	'FONT_LARGE'					=> 'Grande',
	'FONT_NORMAL'					=> 'Normal',
	'FONT_SIZE'						=> 'Tamanho da Fonte',
	'FONT_SMALL'					=> 'Pequena',
	'FONT_TINY'						=> 'Minúscula',

	'GENERAL_UPLOAD_ERROR'		=> 'Não foi possível enviar o anexo para %s.',

	'IMAGES_ARE_OFF'				=> '[img] está <em>DESLIGADO</em>',
	'IMAGES_ARE_ON'				=> '[img] está <em>LIGADO</em>',
	'INVALID_FILENAME'			=> '%s é um nome de Ficheiro Inválido.',

	'LOAD'								=> 'Carregar',
	'LOAD_DRAFT'						=> 'Carregar rascunho',
	'LOAD_DRAFT_EXPLAIN'				=> 'Selecciona o rascunho. Tem em atenção que ao seleccionares um rascunho o mesmo deixará de ficar guardado. No entanto podes voltar a guardar a mensagem, criando um novo rascunho. Podes ver, editar e apagar rascunhos no Painel de Controlo do Utilizador.',
	'LOGIN_EXPLAIN_BUMP'				=> 'Tens que ligar-te para ressuscitar Tópicos neste Fórum.',
	'LOGIN_EXPLAIN_DELETE'			=> 'Tens que ligar-te para apagar Mensagens neste Fórum.',
	'LOGIN_EXPLAIN_SOFT_DELETE'	=> 'Tens que fazer login para apagar Mensagens neste fórum.',
	'LOGIN_EXPLAIN_POST'				=> 'Tens que ligar-te para enviar Mensagens neste Fórum.',
	'LOGIN_EXPLAIN_QUOTE'			=> 'Tens que ligar-te para citar Mensagens neste Fórum.',
	'LOGIN_EXPLAIN_REPLY'			=> 'Tens que ligar-te para responder Tópicos neste Fórum.',

	'MAX_ATTACHMENT_FILESIZE'	=> 'Tamanho máximo de ficheiro por anexo: %s.',
	'MAX_FONT_SIZE_EXCEEDED'	=> 'Só podes usar tipos de letra até ao tamanho %d.',
	'MAX_FLASH_HEIGHT_EXCEEDED'	=> [
		1	=> 'O teu ficheiro flash só pode ter até %d píxel de altura.',
		2	=> 'Os teus ficheiros flash só podem ter até %d píxeis de altura.',
	],
	'MAX_FLASH_WIDTH_EXCEEDED'	=> [
		1	=> 'O teu ficheiro flash só pode ter até %d píxel de largura.',
		2	=> 'Os teus ficheiros flash só podem ter até %d píxeis de largura.',
	],
	'MAX_IMG_HEIGHT_EXCEEDED'	=> [
		1	=> 'A tua imagem só pode ter até %1$d píxel de altura.',
		2	=> 'As tuas imagens só podem ter até %1$d píxeis de altura.',
	],
	'MAX_IMG_WIDTH_EXCEEDED'	=> [
		1	=> 'A tua imagem só pode ter até %d píxel de largura.',
		2	=> 'As tuas imagens só podem ter até %d píxeis de largura.',
	],

	'MESSAGE_BODY_EXPLAIN'		=> [
		0	=> '', // zero means no limit, so we don't view a message here.
		1	=> 'Digita aqui a tua mensagem, pode conter mais do que <strong>%d</strong> carácter.',
		2	=> 'Digita aqui a tua mensagem, pode conter mais do que <strong>%d</strong> caracteres.',
	],
	'MESSAGE_DELETED'				=> 'A Mensagem foi apagada com sucesso.',
	'MORE_SMILIES'					=> 'Ver mais Emoções',

	'NOTIFY_REPLY'					=> 'Enviar-me email sempre que tiver uma nova resposta',
	'NOT_UPLOADED'					=> 'Não foi possível enviar o Ficheiro.',
	'NO_DELETE_POLL_OPTIONS'	=> 'Não podes apagar opções de votação existentes.',
	'NO_PM_ICON'					=> 'MP sem ícone',
	'NO_POLL_TITLE'				=> 'Tens que dar um Título à votação.',
	'NO_POST'						=> 'Esta Mensagem não existe.',
	'NO_POST_MODE'					=> 'Nenhum modo de Mensagem foi indicado.',
	'NO_TEMP_DIR'					=> 'A pasta temporária não pôde ser encontrada ou não tem permissões de escrita.',

	'PARTIAL_UPLOAD'				=> 'O Ficheiro foi enviado parcialmente.',
	'PHP_UPLOAD_STOPPED'			=> 'Uma extensão PHP parou o upload de ficheiros.',
	'PHP_SIZE_NA'					=> 'O Ficheiro é muito grande.<br />Não foi possível determinar o tamanho máximo definido no php.ini do PHP.',
	'PHP_SIZE_OVERRUN'			=> 'O Ficheiro é muito grande. O limite máximo é de %1$d %2$s.<br />Este tamanho é configurado no php.ini e não pode ser alterado.',
	'PLACE_INLINE'					=> 'Insere na linha',
	'POLL_DELETE'					=> 'Apagar votação',
	'POLL_FOR'						=> 'Votação expira em',
	'POLL_FOR_EXPLAIN'			=> 'Insere 0 ou deixa o campo em branco para uma votação sem tempo limite.',
	'POLL_MAX_OPTIONS'			=> 'Opções por Utilizador',
	'POLL_MAX_OPTIONS_EXPLAIN'	=> 'Este é o número de opções que cada Utilizador poderá votar.',
	'POLL_OPTIONS'					=> 'Opções da votação',
	'POLL_OPTIONS_EXPLAIN'		=> [
		1	=> 'Coloca uma opção por linha. Não podes colocar mais do que <strong>%d</strong> opção.',
		2	=> 'Coloca uma opção por linha. Não podes colocar mais do que <strong>%d</strong> opções.',
	],
	'POLL_OPTIONS_EDIT_EXPLAIN'		=> [
		1	=> 'Coloca uma opção por linha. Não podes colocar mais do que <strong>%d</strong> opção. Se adicionares ou removeres opções, os votos anteriores serão apagados.',
		2	=> 'Coloca uma opção por linha. Não podes colocar mais do que <strong>%d</strong> opções. Se adicionares ou removeres opções, os votos anteriores serão apagados.',
	],
	'POLL_QUESTION'				=> 'Pergunta da votação',
	'POLL_TITLE_TOO_LONG'		=> 'O Título da votação deve conter no máximo 100 caracteres.',
	'POLL_TITLE_COMP_TOO_LONG'	=> 'O Título da votação é muito longo, considerar remoção de BBCodes ou Emoções.',
	'POLL_VOTE_CHANGE'			=> 'Permitir mudança de voto',
	'POLL_VOTE_CHANGE_EXPLAIN'	=> 'Se seleccionado, os Utilizadores podem alterar o voto.',
	'POSTED_ATTACHMENTS'			=> 'Anexos',
	'POST_APPROVAL_NOTIFY'		=> 'Serás avisado quando for aprovado.',
	'POST_CONFIRMATION'			=> 'Confirmação da Mensagem',
	'POST_CONFIRM_EXPLAIN'		=> 'Para evitar Mensagens automáticas, o fórum exige que digites o código de confirmação. O código é mostrado na imagem abaixo. Se não consegues ver a imagem, por favor contacta o %sAdministrador%s.',
	'POST_DELETED'					=> 'A Mensagem foi apagada com sucesso.',
	'POST_EDITED'					=> 'A Mensagem foi editada com sucesso.',
	'POST_EDITED_MOD'				=> 'A Mensagem foi editada mas necessita de ser aprovada por um Moderador antes de se tornar visível. Serás avisado quando a tua Mensagem for aprovada.',
	'POST_GLOBAL'					=> 'Anúncio Global',
	'POST_ICON'						=> 'Ícone da Mensagem',
	'POST_NORMAL'					=> 'Normal',
	'POST_REVIEW'					=> 'Rever Mensagem',
	'POST_REVIEW_EDIT'			=> 'Revisão da mensagem',
	'POST_REVIEW_EDIT_EXPLAIN'	=> 'Esta mensagem foi alterada por outro utilizador enquanto estavas a editá-la. Podes rever a versão actual desta mensagem e ajustar a tua edição.',
	'POST_REVIEW_EXPLAIN'		=> 'Pelo menos uma nova Mensagem foi feita neste Tópico. Revê a tua Mensagem levando isso em conta.',
	'POST_STORED'					=> 'Esta Mensagem foi enviada com sucesso.',
	'POST_STORED_MOD'				=> 'Esta Mensagem foi enviada, mas necessita ser Aprovada.',
	'POST_TOPIC_AS'				=> 'Tipo de Tópico',
	'PROGRESS_BAR'					=> 'Barra de Progresso',

	'QUOTE_DEPTH_EXCEEDED'		=> [
		1	=> 'Só pode sobrepor %d citação.',
		2	=> 'Só pode sobrepor %d citações.',
	],
	'QUOTE_NO_NESTING'			=> 'Não podes inserir citações dentro de outra citação.',

	'REMOTE_UPLOAD_TIMEOUT'		=> 'O ficheiro seleccionado não pôde ser carregado porque o pedido excedeu o tempo.',
	'SAVE'							=> 'Guardar',
	'SAVE_DATE'						=> 'Guardar em',
	'SAVE_DRAFT'					=> 'Guardar rascunho',
	'SAVE_DRAFT_CONFIRM'			=> 'Os rascunhos guardados só incluem o assunto e o conteúdo da Mensagem. Outros elementos serão removidos. Guardar o rascunho?',
	'SMILIES'						=> 'Emoções',
	'SMILIES_ARE_OFF'				=> 'Emoções estão <em>Desligadas</em>',
	'SMILIES_ARE_ON'				=> 'Emoções estão <em>Ligadas</em>',
	'STICKY_ANNOUNCE_TIME_LIMIT'	=> 'Tempo limite do Fixo/Anúncio/Global',
	'STICK_TOPIC_FOR'				=> 'Fixar Tópico por',
	'STICK_TOPIC_FOR_EXPLAIN'	=> 'Digita 0 para manter Fixo/Anúncio/Global por tempo indeterminado. Por favor, nota que este número é relativo à data do envio da mensagem.',
	'STYLES_TIP'					=> 'Dica: Estilos podem ser aplicados a textos seleccionados.',

	'TOO_FEW_CHARS'				=> 'A Mensagem contém poucos caracteres.',
	'TOO_FEW_CHARS_LIMIT'		=> [
		1	=> 'Tens que inserir pelo menos %1$d carácter.',
		2	=> 'Tens que inserir pelo menos %1$d caracteres.',
	],
	'TOO_FEW_POLL_OPTIONS'		=> 'A votação tem que ter pelo menos duas opções.',
	'TOO_MANY_ATTACHMENTS'		=> 'Não podes adicionar outro anexo, o limite é de %d anexos.',
	'TOO_MANY_CHARS'				=> 'A Mensagem contém muitos caracteres.',
	'TOO_MANY_CHARS_LIMIT'		=> [
		1	=> 'O número máximo de caracteres permitidos é de %1$d.',
		2	=> 'O número máximo de caracteres permitidos é de %1$d.',
	],
	'TOO_MANY_POLL_OPTIONS'		=> 'Tentaste inserir muitas opções de votação.',
	'TOO_MANY_SMILIES'			=> 'A Mensagem contém muitas Emoções. O número máximo de Emoções permitidas é de %d.',
	'TOO_MANY_URLS'				=> 'A Mensagem contém muitas URLs. O número máximo de URLs permitidas é de %d.',
	'TOO_MANY_USER_OPTIONS'		=> 'Não podes especificar mais opções por Utilizador do que na votação.',
	'TOPIC_BUMPED'					=> 'O Tópico foi Ressuscitado com sucesso.',

	'UNAUTHORISED_BBCODE'		=> 'Não podes usar certos BBCodes: %s.',
	'UNSUPPORTED_CHARACTERS_MESSAGE'	=> 'A tua mensagem contém os seguintes caracteres não suportados:<br />%s',
	'UNSUPPORTED_CHARACTERS_SUBJECT'	=> 'O assunto contém os seguintes caracteres não suportados:<br />%s',
	'UPDATE_COMMENT'				=> 'Actualizar comentário',
	'URL_INVALID'					=> 'A URL indicada é inválida.',
	'URL_NOT_FOUND'				=> 'O Ficheiro indicado não foi encontrado.',
	'URL_IS_OFF'					=> '[url] está <em>Desligado</em>',
	'URL_IS_ON'						=> '[url] está <em>Ligado</em>',
	'USER_CANNOT_BUMP'			=> 'Não podes ressuscitar Tópicos neste Fórum.',
	'USER_CANNOT_DELETE'			=> 'Não podes apagar Mensagens neste Fórum.',
	'USER_CANNOT_EDIT'			=> 'Não podes editar Mensagens neste Fórum.',
	'USER_CANNOT_REPLY'			=> 'Não podes responder neste Fórum.',
	'USER_CANNOT_FORUM_POST'	=> 'Não podes utilizar estas operações porque este Fórum não as suporta.',

	'VIEW_MESSAGE'					=> '%sVer a Mensagem enviada%s',
	'VIEW_PRIVATE_MESSAGE'		=> '%sVer a Mensagem Privada enviada%s',

	'WRONG_FILESIZE'				=> 'O ficheiro é muito grande. O tamanho máximo permitido é de %1$d %2$s.',
	'WRONG_SIZE'					=> 'A imagem deve ter pelo menos %1$s de largura, %2$s de altura e, no máximo, %3$s de largura e %4$s de altura. A imagem submetida tem %5$s de largura e %6$s de altura.',
]);
