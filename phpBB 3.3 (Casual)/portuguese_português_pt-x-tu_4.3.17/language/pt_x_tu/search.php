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
	'ALL_AVAILABLE'				=> 'Tudo disponível',
	'ALL_RESULTS'					=> 'Todos os Resultados',

	'DISPLAY_RESULTS'				=> 'Mostrar resultados ',

	'FOUND_SEARCH_MATCHES'		=> [
		1	=> 'A pesquisa encontrou %d resultado',
		2	=> 'A pesquisa encontrou %d resultados',
	],
	'FOUND_MORE_SEARCH_MATCHES'		=> [
		1	=> 'Foi encontrado mais do que %d resultado',
		2	=> 'Foram encontrados mais do que %d resultados',
	],

	'GLOBAL'							=> 'Anúncio Global',

	'IGNORED_TERMS'				=> 'ignorado',
	'IGNORED_TERMS_EXPLAIN'		=> 'As seguintes palavras foram ignoradas na procura: <strong>%s</strong>.',

	'JUMP_TO_POST'					=> 'Ir para a mensagem',

	'LOGIN_EXPLAIN_EGOSEARCH'		=> 'É necessário que estejas registado para visualizares os Tópicos.',
	'LOGIN_EXPLAIN_UNREADSEARCH'	=> 'É necessário que estejas registado e autenticado para ver as tuas mensagens lidas.',
	'LOGIN_EXPLAIN_NEWPOSTS'		=> 'É necessário que estejas registado e autenticado para ver novas mensagens desde a tua última visita.',

	'MAX_NUM_SEARCH_KEYWORDS_REFINE'	=> [
		1	=> 'Especificaste muitas palavras para a pesquisa. Por favor, não introduzas mais do que %1$d palavra.',
		2	=> 'Especificaste muitas palavras para a pesquisa. Por favor, não introduzas mais do que %1$d palavras.',
	],

	'NO_KEYWORDS'					=> 'Tens que especificar pelo menos uma palavra para a pesquisa. Cada palavra tem que conter no mínimo %s caracteres e não pode conter mais do que %s caracteres.',
	'NO_RECENT_SEARCHES'			=> 'Sem procuras recentes',
	'NO_SEARCH'						=> 'Não estás autorizado a usar a pesquisa.',
	'NO_SEARCH_RESULTS'			=> 'Não foi encontrado nenhum resultado.',
	'NO_SEARCH_LOAD'				=> 'Desculpe, mas não pode usar, de momento, a pesquisa. O servidor encontra-se sobrecarregado. Por favor, tenta novamente mais tarde.',
	'NO_SEARCH_TIME'		=> [
		1	=> 'Neste momento não é possível usar a pesquisa. Por favor, tenta novamente daqui a %d segundo.',
		2	=> 'Neste momento não é possível usar a pesquisa. Por favor, tenta novamente daqui a %d segundos.',
	],
	'NO_SEARCH_UNREADS'			=> 'Desculpe, mas a pesquisa de novas mensagens foi desativada neste Fórum.',
	'WORD_IN_NO_POST'				=> 'Não foi encontrado nenhum resultado para esta palavra: %s.',
	'WORDS_IN_NO_POST'			=> 'Não foi encontrado nenhum resultado para estas palavras: %s.',

	'POST_CHARACTERS'				=> 'caracteres da Mensagem',
	'PHRASE_SEARCH_DISABLED'	=> 'A pesquisa por palavra exacta não é suportada neste Fórum.',

	'RECENT_SEARCHES'				=> 'Pesquisas recentes',
	'RESULT_DAYS'					=> 'Limitar resultados anteriores',
	'RESULT_SORT'					=> 'Organizar resultados por',
	'RETURN_FIRST'					=> 'Mostrar os primeiros',
	'RETURN_FIRST_EXPLAIN'		=> 'Define como 0 para exibir a mensagem inteira.',
	'GO_TO_SEARCH_ADV'			=> 'Pesquisa avançada',

	'SEARCHED_FOR'					=> 'Termo usado na pesquisa',
	'SEARCHED_TOPIC'				=> 'Pesquisar por Tópicos',
	'SEARCHED_QUERY'				=> 'Questão pesquisada',
	'SEARCH_ALL_TERMS'			=> 'Pesquisar por todos os termos',
	'SEARCH_ANY_TERMS'			=> 'Pesquisar por qualquer termo',
	'SEARCH_AUTHOR'				=> 'Pesquisar por autor',
	'SEARCH_AUTHOR_EXPLAIN'		=> 'Usa * para resultados parciais',
	'SEARCH_FIRST_POST'			=> 'Apenas a primeira Mensagem dos Tópicos',
	'SEARCH_FORUMS'				=> 'Pesquisar nos Fóruns',
	'SEARCH_FORUMS_EXPLAIN'		=> 'Seleciona o Fórum ou os Fóruns em que desejas pesquisar. Para ser mais rápido, seleciona o Fórum principal do Sub-fórum e marca a opção de pesquisar em Sub-fórum.',
	'SEARCH_IN_RESULTS'			=> 'Pesquisar estes resultados',
	'SEARCH_KEYWORDS_EXPLAIN'	=> 'Coloca <strong>+</strong> em frente das palavras que têm que ser encontradas e coloca <strong>-</strong> nas que <strong>não</strong> têm que ser encontradas. Faz uma lista de palavras separadas por <strong>|</strong>. Usa o <strong>*</strong> para resultados parciais.',
	'SEARCH_MSG_ONLY'				=> 'Apenas no conteúdo das Mensagens',
	'SEARCH_OPTIONS'				=> 'Opções de pesquisa',
	'SEARCH_QUERY'					=> 'Pesquisar',
	'SEARCH_SUBFORUMS'			=> 'Pesquisar nos Sub-fóruns',
	'SEARCH_TITLE_MSG'			=> 'Pesquisar Títulos e conteúdo dos Tópicos',
	'SEARCH_TITLE_ONLY'			=> 'Pesquisar só nos Títulos dos Tópicos',
	'SEARCH_WITHIN'				=> 'Pesquisar com',
	'SORT_ASCENDING'				=> 'Crescente',
	'SORT_AUTHOR'					=> 'Autor',
	'SORT_DESCENDING'				=> 'Decrescente',
	'SORT_FORUM'					=> 'Fórum',
	'SORT_POST_SUBJECT'			=> 'Assunto da mensagem',
	'SORT_TIME'						=> 'Submetido em',
	'SPHINX_SEARCH_FAILED'		=> 'A pesquisa falhou: %s',
	'SPHINX_SEARCH_FAILED_LOG'	=> 'Desculpe, a pesquisa não pôde ser executada. Mais informações sobre esta falha foram registadas no log de erros.',

	'TOO_FEW_AUTHOR_CHARS'	=> [
		1	=> 'Tens que especificar pelo menos %d carácter dos nomes dos autores.',
		2	=> 'Tens que especificar pelo menos %d caracteres dos nomes dos autores.',
	],
]);
