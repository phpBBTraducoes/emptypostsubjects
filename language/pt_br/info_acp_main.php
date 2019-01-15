<?php
/**
*
* @package phpBB Extension - martin emptypostsubjects
* @copyright (c) 2018 Martin ( https://github.com/Mar-tin-G )
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
* Brazilian Portuguese translation by eunaumtenhoid [2019][ver 1.0.0] (https://github.com/phpBBTraducoes)
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'ACP_EMPTYPOSTSUBJECTS_TITLE'													=> 'Assuntos de post vazios',
	'ACP_EMPTYPOSTSUBJECTS_SETTINGS'												=> 'Configuracões',
	'ACP_EMPTYPOSTSUBJECTS_SETTING_SAVED'											=> 'As configurações foram salvas com sucesso!',
	'ACP_EMPTYPOSTSUBJECTS_REPLY'													=> 'Assunto do post vazio na resposta',
	'ACP_EMPTYPOSTSUBJECTS_REPLY_EXPLAIN'											=> 'Esvazia o campo \'Assunto\' no editor de postagem ao responder a um tópico.',
	'ACP_EMPTYPOSTSUBJECTS_QUICK_REPLY'												=> 'Assunto do post vazio na resposta rápida',
	'ACP_EMPTYPOSTSUBJECTS_QUICK_REPLY_EXPLAIN'										=> 'Esvazia o campo \'Assunto\' no editor de resposta rápida ao visualizar um tópico.',
	'ACP_EMPTYPOSTSUBJECTS_LAST_POST'												=> 'Exibir o link do último post',
	'ACP_EMPTYPOSTSUBJECTS_LAST_POST_EXPLAIN'										=> 'Personalize qual texto o link\'Última post\' no índice do fórum é exibido.',
	'ACP_EMPTYPOSTSUBJECTS_OPTION_' . EMPTYPOSTSUBJECTS_POST_SUBJECT				=> 'assunto do post',
	'ACP_EMPTYPOSTSUBJECTS_OPTION_' . EMPTYPOSTSUBJECTS_TOPIC_TITLE					=> 'título do tópico que contém o post',
	'ACP_EMPTYPOSTSUBJECTS_OPTION_' . EMPTYPOSTSUBJECTS_POST_SUBJECT_IF_NOT_EMPTY	=> 'assunto do post se não estiver vazia, título do tópico em contrário',
	'ACP_EMPTYPOSTSUBJECTS_SEARCH'													=> 'Exibição de títulos de resultados de pesquisa',
	'ACP_EMPTYPOSTSUBJECTS_SEARCH_EXPLAIN'											=> 'Personalize o texto que os títulos no resultado da pesquisa exibem.',
));
