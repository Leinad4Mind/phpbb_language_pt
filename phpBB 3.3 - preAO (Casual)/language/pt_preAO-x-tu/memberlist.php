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
	'ABOUT_USER'				=> 'Perfil',
	'ACTIVE_IN_FORUM'			=> 'Fórum mais activo',
	'ACTIVE_IN_TOPIC'			=> 'Tópico mais activo',
	'ADD_FOE'					=> 'Adicionar como inimigo',
	'ADD_FRIEND'				=> 'Adicionar como amigo',
	'AFTER'						=> 'Depois',

	'ALL'							=> 'Todos',

	'BEFORE'						=> 'Antes',

	'CC_SENDER'					=> 'Enviar-me cópia deste email.',
	'CONTACT_ADMIN'			=> 'Contacta o Administrador',

	'DEST_LANG'					=> 'Linguagem',
	'DEST_LANG_EXPLAIN'		=> 'Selecciona a linguagem apropriada (se activada) para o destinatário desta mensagem.',

	'EDIT_PROFILE'				=> 'Editar Perfil',

	'EMAIL_BODY_EXPLAIN'		=> 'Esta mensagem será enviada como texto puro, não inclua qualquer código HTML ou BBCODE. O endereço de resposta desta mensagem é o teu endereço de email.',
	'EMAIL_DISABLED'			=> 'Todas as funções de email foram desactivadas.',
	'EMAIL_SENT'				=> 'O email foi enviado.',
	'EMAIL_TOPIC_EXPLAIN'	=> 'Esta mensagem será enviada como texto puro, não inclua qualquer código HTML ou BBCODE. As informações daquele Tópico serão incluídas na mensagem. O endereço de resposta desta mensagem é o teu endereço de email.',
	'EMPTY_ADDRESS_EMAIL'	=> 'Tens que indicar um endereço de email válido como destinatário.',
	'EMPTY_MESSAGE_EMAIL'	=> 'Tens que indicar uma mensagem para ser enviada no email.',
	'EMPTY_MESSAGE_IM'		=> 'Tens que inserir a mensagem para ser enviada.',
	'EMPTY_NAME_EMAIL'		=> 'Tens que indicar o nome real do destinatário.',
	'EMPTY_SENDER_EMAIL'		=> 'Tens que fornecer um endereço de email válido.',
	'EMPTY_SENDER_NAME'		=> 'Tens que fornecer um nome.',
	'EMPTY_SUBJECT_EMAIL'	=> 'Indica um assunto para o email',
	'EQUAL_TO'					=> 'Igual a',

	'FIND_USERNAME_EXPLAIN'	=> 'Utiliza este formulário para procurar Utilizadores. Não é necessário preencher todos os campos. Para dados parciais utiliza o *. Se indicares uma data, usa o formato <kbd>YYYY-MM-DD</kbd> ex. <samp>2004-02-29</samp>. Nas caixas de selecção escreve um ou mais nomes de utilizador (são aceites vários Utilizadores).',
	'FLOOD_EMAIL_LIMIT'		=> 'Não podes enviar novo email tão rapidamente. Aguarda algum tempo e tenta novamente mais tarde.',

	'GROUP_LEADER'				=> 'Líder do Grupo',

	'HIDE_MEMBER_SEARCH'		=> 'Ocultar as opções de pesquisa dos Utilizadores',

	'IM_ADD_CONTACT'			=> 'Adicionar contacto',
	'IM_DOWNLOAD_APP'			=> 'Transferir Aplicativo',
	'IM_JABBER'					=> 'Os Utilizadores podem ter seleccionado não receber mensagens instantâneas não solicitadas.',
	'IM_JABBER_SUBJECT'		=> 'Esta é uma mensagem automática, por favor, não respondas! Mensagem enviada pelo Utilizador %1$s em %2$s.',
	'IM_MESSAGE'				=> 'A tua mensagem',
	'IM_NAME'					=> 'O teu nome',
	'IM_NO_DATA'				=> 'Não existe informação de contacto para este utilizador.',
	'IM_NO_JABBER'				=> 'Enviar mensagens Jabber não é suportado neste Servidor. Tens que ter um cliente Jabber instalado no teu sistema para contactar o destinatário.',
	'IM_RECIPIENT'				=> 'Destinatário',
	'IM_SEND'					=> 'Enviar Mensagem',
	'IM_SEND_MESSAGE'			=> 'Enviar Mensagem',
	'IM_SENT_JABBER'			=> 'A tua mensagem para %1$s foi enviada com sucesso.',
	'IM_USER'					=> 'Enviar uma mensagem instantânea',

	'LAST_ACTIVE'				=> 'Última vez activo',
	'LESS_THAN'					=> 'Menor que',
	'LIST_USERS'				=> [
		1	=> '%d utilizador',
		2	=> '%d utilizadores',
	],
	'LOGIN_EXPLAIN_TEAM'				=> 'Tens que estar registado e ligado para ver os membros da Equipa de Responsáveis do Fórum.',
	'LOGIN_EXPLAIN_MEMBERLIST'		=> 'Tens que estar registado e ligado para ver a lista de Utilizadores.',
	'LOGIN_EXPLAIN_SEARCHUSER'		=> 'Tens que estar registado e ligado para pesquisar Utilizadores.',
	'LOGIN_EXPLAIN_VIEWPROFILE'	=> 'Tens que estar registado e ligado para ver Perfis.',

	'MANAGE_GROUP'				=> 'Gerir Grupo',
	'MORE_THAN'					=> 'Maior que',

	'NO_CONTACT_FORM'			=> 'O formulário de contacto do administrador foi desactivado.',
	'NO_CONTACT_PAGE'			=> 'A página de contacto do administrador foi desactivada.',
	'NO_EMAIL'					=> 'Não estás autorizado a enviar email a este Utilizador.',
	'NO_VIEW_USERS'			=> 'Não estás autorizado a ver a lista de Utilizadores ou Perfis.',

	'ORDER'						=> 'Ordenar',
	'OTHER'						=> 'Outro',

	'POST_IP'					=> 'Enviado do IP/Domínio',

	'REAL_NAME'					=> 'Nome do destinatário',
	'RECIPIENT'					=> 'Destinatário',
	'REMOVE_FOE'				=> 'Apagar dos inimigos',
	'REMOVE_FRIEND'			=> 'Apagar dos amigos',

	'SELECT_MARKED'			=> 'Seleccionar marcados',
	'SELECT_SORT_METHOD'		=> 'Seleccionar método de ordenação',
	'SENDER_EMAIL_ADDRESS'	=> 'O teu endereço de email',
	'SENDER_NAME'				=> 'O teu nome',
	'SEND_ICQ_MESSAGE'		=> 'Enviar Mensagem ICQ',
	'SEND_IM'					=> 'A enviar Mensagem instantânea',
	'SEND_JABBER_MESSAGE'	=> 'Enviar Mensagem Jabber',
	'SEND_MESSAGE'				=> 'Mensagem',
	'SEND_YIM_MESSAGE'		=> 'Enviar Mensagem YIM',
	'SORT_EMAIL'				=> 'Email',
	'SORT_LAST_ACTIVE'		=> 'Último activo',
	'SORT_POST_COUNT'			=> 'Número de Mensagens',

	'USERNAME_BEGINS_WITH'	=> 'Nomes de Utilizadores iniciados por:',
	'USER_ADMIN'				=> 'Administrar Utilizador',
	'USER_BAN'					=> 'Expulsar',
	'USER_FORUM'				=> 'Estatísticas do Utilizador',
	'USER_LAST_REMINDED'		=> [
		0						=> 'Não há nenhum lembrete',
		1						=> 'Foi enviado %1$d lembrete<br />» %2$s',
		2						=> 'Foram enviados %1$d lembretes<br />» %2$s',
	],
	'USER_ONLINE'				=> 'Online',
	'USER_PRESENCE'			=> 'Presença no Fórum',
	'USERS_PER_PAGE'			=> 'Utilizadores por página',

	'VIEWING_PROFILE'				=> 'Perfil de: %s',
	'VIEW_FACEBOOK_PROFILE'		=> 'Ver perfil do Facebook',
	'VIEW_SKYPE_PROFILE'			=> 'Ver perfil do Skype',
	'VIEW_TWITTER_PROFILE'		=> 'Ver perfil do Twitter',
	'VIEW_YOUTUBE_PROFILE'		=> 'Ver perfil YouTube',
]);
