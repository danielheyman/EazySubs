<?php
/**
*
* mcp [Bulgarian]
*
* @package language
* @version $Id: mcp.php 8940 2008-09-26 11:25:04Z nacholibre $
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
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

$lang = array_merge($lang, array(
	'ACTION'				=> 'Действие',
	'ACTION_NOTE'			=> 'Действие/Бележка',
	'ADD_FEEDBACK'			=> 'Добави обратна връзка',
	'ADD_FEEDBACK_EXPLAIN'	=> 'Ако искате да сигнализиране трябва да попълните всички полета. Използвайте само текст, HTML, BBCode и други не са позволени.',
	'ADD_WARNING'			=> 'Добави предупреждение',
	'ADD_WARNING_EXPLAIN'	=> 'За да качите нивото на предупреждение попълнете формата. Използвайте само текст, HTML, BBCode и други не са позволени.',
	'ALL_ENTRIES'			=> 'Всички',
	'ALL_NOTES_DELETED'		=> 'Бележките са успешно изтрити',
	'ALL_REPORTS'			=> 'Всички сигнали',
	'ALREADY_REPORTED'		=> 'Това мнение вече е било сигнализирано',
	'ALREADY_REPORTED_PM'	=> 'Това лично съобщение е вече докладвано.',
	'ALREADY_WARNED'		=> 'Това мнение вече има предупреждение',
	'APPROVE'				=> 'Одобри',
	'APPROVE_POST'			=> 'Одобри мнението',
	'APPROVE_POST_CONFIRM'	=> 'Сигурен ли си, че искаш да одобриш мнението?',
	'APPROVE_POSTS'			=> 'Одобри мненията',
	'APPROVE_POSTS_CONFIRM'	=> 'Сигурен ли си, че искаш да одобриш мненията?',

	'CANNOT_MOVE_SAME_FORUM'=> 'Не може да преместиш тема на същото място',
	'CANNOT_WARN_ANONYMOUS'	=> 'Не може да предупреждаваш нерегистрирани потребители',
	'CANNOT_WARN_SELF'		=> 'Не може да предупреждаваш себе си',
	'CAN_LEAVE_BLANK'		=> 'Може да оставиш празно.',
	'CHANGE_POSTER'			=> 'Промени автор',
	'CLOSE_PM_REPORT'		=> 'Затворен ЛС доклад',
	'CLOSE_PM_REPORT_CONFIRM'	=> 'Сигурен ли сте, че искате да затворите избраният доклад?',
	'CLOSE_PM_REPORTS'		=> 'Затворени ЛС доклади',
	'CLOSE_PM_REPORTS_CONFIRM'	=> 'Сигурен ли сте, че искате да завторите избраните доклади?',
	'CLOSE_REPORT'			=> 'Премахни доклад',
	'CLOSE_REPORT_CONFIRM'	=> 'Сигурен ли си, че искаш да премахнеш доклада?',
	'CLOSE_REPORTS'			=> 'Затвори',
	'CLOSE_REPORTS_CONFIRM'	=> 'Сигурен ли си, че искаш да премахнеш докладите?',
	'DELETE_PM_REPORT'			=> 'Изтрито лично съобщение доклад',
	'DELETE_PM_REPORT_CONFIRM'	=> 'Сигурен ли сте, че искате да изтриете въпросният доклад?',
	'DELETE_PM_REPORTS'			=> 'Изтрити лични съобщения доклади',
	'DELETE_PM_REPORTS_CONFIRM'	=> 'Сигурен ли сте, че искате да изтриете въпросните доклади?',

	'DELETE_POSTS'				=> 'Изтрий мненията',
	'DELETE_POSTS_CONFIRM'		=> 'Сигурен ли си, че искаш да изтриеш тези мнения?',
	'DELETE_POST_CONFIRM'		=> 'Сигурен ли си, че искаш да изтриеш това мнение?',
	'DELETE_REPORT'				=> 'Изтрий доклада',
	'DELETE_REPORT_CONFIRM'		=> 'Сигурен ли си, че искаш да изтриеш доклада?',
	'DELETE_REPORTS'			=> 'Изтрий',
	'DELETE_REPORTS_CONFIRM'	=> 'Сигурен ли си, че искаш да изтриеш докладите?',
	'DELETE_SHADOW_TOPIC'		=> 'Изтрий темата',
	'DELETE_TOPICS'				=> 'Изтрий избраните теми',
	'DELETE_TOPICS_CONFIRM'		=> 'Сигурен ли си, че искаш да изтриеш тези теми?',
	'DELETE_TOPIC_CONFIRM'		=> 'Сигурен ли си, че искаш да изтриеш тази тема?',
	'DISAPPROVE'				=> 'Пропусни',
	'DISAPPROVE_REASON'			=> 'Причина за пропускане',
	'DISAPPROVE_POST'			=> 'Пропусни мнението',
	'DISAPPROVE_POST_CONFIRM'	=> 'Сигурен ли си, че не искаш да одобриш това мнение?',
	'DISAPPROVE_POSTS'			=> 'Пропусни мненията',
	'DISAPPROVE_POSTS_CONFIRM'	=> 'Сигурен ли си, че не искаш да одобриш тези мнения?',
	'DISPLAY_LOG'				=> 'Покажи от миналия',
	'DISPLAY_OPTIONS'			=> 'Покажи опции',

	'EMPTY_REPORT'					=> 'Трябва да въведеш описание',
	'EMPTY_TOPICS_REMOVED_WARNING'	=> 'Едната от темите е изтрита',

	'FEEDBACK'				=> 'Обратна връзка',
	'FORK'					=> 'Копирай',
	'FORK_TOPIC'			=> 'Копирай темата',
	'FORK_TOPIC_CONFIRM'	=> 'Сигурен ли си, че искаш да копираш темата?',
	'FORK_TOPICS'			=> 'Копирай избраните теми',
	'FORK_TOPICS_CONFIRM'	=> 'Сигурен ли си, че искаш да копираш избраните теми?',
	'FORUM_DESC'			=> 'Описание',
	'FORUM_NAME'			=> 'Име на форума',
	'FORUM_NOT_EXIST'		=> 'Форума не съществува',
	'FORUM_NOT_POSTABLE'	=> 'Във форума не може да се пише',
	'FORUM_STATUS'			=> 'Статус',
	'FORUM_STYLE'			=> 'Стил',

	'GLOBAL_ANNOUNCEMENT'	=> 'Съобщение',

	'IP_INFO'				=> 'IP адрес информация',
	'IPS_POSTED_FROM'		=> 'IP адрес на потребителя',

	'LATEST_LOGS'				=> 'Последните 5 действия',
	'LATEST_REPORTED'			=> 'Последните 5 доклада',
	'LATEST_REPORTED_PMS'		=> 'Последните 5 ЛС доклада',
	'LATEST_UNAPPROVED'			=> 'Последните 5 неодобрени мнения',
	'LATEST_WARNING_TIME'		=> 'Последните предупреждения',
	'LATEST_WARNINGS'			=> 'Последните 5 предупреждения',
	'LEAVE_SHADOW'				=> 'Остави темата',
	'LIST_REPORT'				=> '1 доклад',
	'LIST_REPORTS'				=> '%d доклада',
	'LOCK'						=> 'Заключи',
	'LOCK_POST_POST'			=> 'Заключи мнението',
	'LOCK_POST_POST_CONFIRM'	=> 'Сигурен ли си, че отказваш промените?',
	'LOCK_POST_POSTS'			=> 'Заключи избраните мнения',
	'LOCK_POST_POSTS_CONFIRM'	=> 'Сигурен ли си, че отказваш промените?',
	'LOCK_TOPIC_CONFIRM'		=> 'Сигурен ли си, че искаш да заключиш тази тема?',
	'LOCK_TOPICS'				=> 'Заключи избраните теми',
	'LOCK_TOPICS_CONFIRM'		=> 'Сигурен ли си, че искаш да заключиш всички избрани теми?',
	'LOGS_CURRENT_TOPIC'		=> 'Настоящ лог:',
	'LOGIN_EXPLAIN_MCP'			=> 'Трябва да влезеш.',
	'LOGVIEW_VIEWTOPIC'			=> 'Виж темата',
	'LOGVIEW_VIEWLOGS'			=> 'Виж лога на темата',
	'LOGVIEW_VIEWFORUM'			=> 'Виж форума',
	'LOOKUP_ALL'				=> 'Провери IP адресите',
	'LOOKUP_IP'					=> 'Провери IP адреса',

	'MARKED_NOTES_DELETED'		=> 'Успешно са изтрити всички маркирани бележки',

	'MCP_ADD'						=> 'Добави предупреждение',

	'MCP_BAN'					=> 'Ban',
	'MCP_BAN_EMAILS'			=> 'Email',
	'MCP_BAN_IPS'				=> 'IP адрес',
	'MCP_BAN_USERNAMES'			=> 'Потребителско име',

	'MCP_LOGS'						=> 'Последни действия',
	'MCP_LOGS_FRONT'				=> 'Индекс',
	'MCP_LOGS_FORUM_VIEW'			=> 'Логове на форум',
	'MCP_LOGS_TOPIC_VIEW'			=> 'Логове на тема',

	'MCP_MAIN'						=> 'Главно',
	'MCP_MAIN_FORUM_VIEW'			=> 'Виж форум',
	'MCP_MAIN_FRONT'				=> 'Индекс',
	'MCP_MAIN_POST_DETAILS'			=> 'Детайли за мнение',
	'MCP_MAIN_TOPIC_VIEW'			=> 'Виж тема',
	'MCP_MAKE_ANNOUNCEMENT'			=> 'Направи темата Важна',
	'MCP_MAKE_ANNOUNCEMENT_CONFIRM'	=> 'Сигурен ли си, че искаш да промениш темата на “Важна”?',
	'MCP_MAKE_ANNOUNCEMENTS'		=> 'Направи темите Важни',
	'MCP_MAKE_ANNOUNCEMENTS_CONFIRM'=> 'Сигурен ли си, че искаш да промениш избраните теми на “Важни”?',
	'MCP_MAKE_GLOBAL'				=> 'Направи темата Съобщение',
	'MCP_MAKE_GLOBAL_CONFIRM'		=> 'Сигурен ли си, че искаш да промениш темата на “Съобщение”?',
	'MCP_MAKE_GLOBALS'				=> 'Направи темите Съобщение',
	'MCP_MAKE_GLOBALS_CONFIRM'		=> 'Сигурен ли си, че искаш да промениш избраните теми на “Съобщения”?',
	'MCP_MAKE_STICKY'				=> 'Закачи темата',
	'MCP_MAKE_STICKY_CONFIRM'		=> 'Сигурен ли си, че искаш да промениш темата на “Закачена”?',
	'MCP_MAKE_STICKIES'				=> 'Закачи темите',
	'MCP_MAKE_STICKIES_CONFIRM'		=> 'Сигурен ли си, че искаш да промениш избраните теми на “Закачени”?',
	'MCP_MAKE_NORMAL'				=> 'Направи темата Нормална',
	'MCP_MAKE_NORMAL_CONFIRM'		=> 'Сигурен ли си, че искаш да промениш темата на “Стандартна”?',
	'MCP_MAKE_NORMALS'				=> 'Направи темите Нормални',
	'MCP_MAKE_NORMALS_CONFIRM'		=> 'Сигурен ли си, че искаш да промениш избраните теми на “Стандартни”?',

	'MCP_NOTES'						=> 'Потребителски бележки',
	'MCP_NOTES_FRONT'				=> 'Индекс',
	'MCP_NOTES_USER'				=> 'Детайли на потребителя',

	'MCP_POST_REPORTS'				=> 'Сигнализирай за грешки в това мнение',
	
	'MCP_PM_REPORTS'				=> 'Докладвани лични съобщения',
	'MCP_PM_REPORT_DETAILS'			=> 'Детайли',
	'MCP_PM_REPORTS_CLOSED'			=> 'Затворени доклади',
	'MCP_PM_REPORTS_CLOSED_EXPLAIN'	=> 'Списък с всички ЛС доклади, които са решени.',
	'MCP_PM_REPORTS_OPEN'			=> 'Отворени доклади',
	'MCP_PM_REPORTS_OPEN_EXPLAIN'	=> 'Списък с всички ЛС доклади, които все още са отворени.',

	'MCP_REPORTS'					=> 'Сигнали',
	'MCP_REPORT_DETAILS'			=> 'Докладвай детайли',
	'MCP_REPORTS_CLOSED'			=> 'Затворени доклади',
	'MCP_REPORTS_CLOSED_EXPLAIN'	=> 'Това е списък от всички предишни доклади, които са били разрешени',
	'MCP_REPORTS_OPEN'				=> 'Отворени доклади',
	'MCP_REPORTS_OPEN_EXPLAIN'		=> 'Това е списък от всички доклади, които все още не са разрешени',

	'MCP_QUEUE'								=> 'Модерация',
	'MCP_QUEUE_APPROVE_DETAILS'				=> 'Одобри детайлите',
	'MCP_QUEUE_UNAPPROVED_POSTS'			=> 'Мнения чакащи одобрение',
	'MCP_QUEUE_UNAPPROVED_POSTS_EXPLAIN'	=> 'Това е списък от всички мнения, които трябва да бъдат одобрени за да са видими за всички потребители',
	'MCP_QUEUE_UNAPPROVED_TOPICS'			=> 'Теми чакащи одобрение',
	'MCP_QUEUE_UNAPPROVED_TOPICS_EXPLAIN'	=> 'Това е списък от всички теми, които трябва да бъдат одобрени за да са видими за всички потребители',

	'MCP_VIEW_USER'			=> 'Виж предупрежденията на потребител',

	'MCP_WARN'				=> 'Предупреждения',
	'MCP_WARN_FRONT'		=> 'Индекс',
	'MCP_WARN_LIST'			=> 'Списък с предупреждения',
	'MCP_WARN_POST'			=> 'Предупреждение на мнение',
	'MCP_WARN_USER'			=> 'Добави предупреждение',

	'MERGE_POSTS'			=> 'Съедини мненията',
	'MERGE_POSTS_CONFIRM'	=> 'Сигурен ли си, че искаш да съединиш избраните мнения?',
	'MERGE_TOPIC_EXPLAIN'	=> 'Като използваш формата долу, можеш да съединяваш мнения с теми. Мнението няма да бъде пренаредено.<br />Моля, въведете ID или описание на темата и натиснете "Избери"',
	'MERGE_TOPIC_ID'		=> 'Идентификационен номер',
    'MERGE_TOPICS'			=> 'Слей темите',
	'MERGE_TOPICS_CONFIRM'	=> 'Сигурен ли сте, че искате да слеете избраните теми?',
	'MODERATE_FORUM'		=> 'Модерирай форума',
	'MODERATE_TOPIC'		=> 'Модерирай темата',
	'MODERATE_POST'			=> 'Модерирай мнението',
	'MOD_OPTIONS'			=> 'Модераторски опции',
	'MORE_INFO'				=> 'Повече информация',
	'MOST_WARNINGS'			=> 'Потребителите с най-много предупреждения',
	'MOVE_TOPIC_CONFIRM'	=> 'Сигурен ли си, че искаш да преместиш темата?',
	'MOVE_TOPICS'			=> 'Премести избраните теми',
	'MOVE_TOPICS_CONFIRM'	=> 'Сигурен ли си, че искаш да преместиш темите?',

	'NOTIFY_POSTER_APPROVAL'		=> 'Сигнализирай на подателя за одобрение?',
	'NOTIFY_POSTER_DISAPPROVAL'		=> 'Сигнализирай на подателя за пропускане?',
	'NOTIFY_USER_WARN'				=> 'Уведоми потребителя за поставеното предупреждение.',
	'NOT_MODERATOR'					=> 'Вие не сте модератор на този форум',
	'NO_DESTINATION_FORUM'			=> 'Избери форум за описание',
	'NO_DESTINATION_FORUM_FOUND'	=> 'Няма форум на разположение .',
	'NO_ENTRIES'					=> 'Няма логове в този период',
	'NO_FEEDBACK'					=> 'Няма обратна връзка на този потребител',
	'NO_FINAL_TOPIC_SELECTED'		=> 'Трябва да изберете тема за съединяване с мненията',
	'NO_MATCHES_FOUND'				=> 'Няма намерени резултати',
	'NO_POST'						=> 'Трябва да изберете мнение, за което ще предупредите потребителя',
	'NO_POST_REPORT'				=> 'Мнението не беше докладвано.',
	'NO_POST_SELECTED'				=> 'Трябва да изберете поне едно мнение',
	'NO_REASON_DISAPPROVAL'			=> 'Дайте причина за пропускането',
	'NO_REPORT'						=> 'Няма намерен репорт',
	'NO_REPORTS'					=> 'Няма намерени доклади',	
	'NO_REPORT_SELECTED'			=> 'Трябва да избереш поне един доклад.',
	'NO_TOPIC_ICON'					=> 'без',
	'NO_TOPIC_SELECTED'				=> 'Трябва да изберете поне една тема',
	'NO_TOPICS_QUEUE'				=> 'Няма теми за одобряване',

	'ONLY_TOPIC'			=> 'Само тема “%s”',
	'OTHER_USERS'			=> 'Потребители пишещи от този IP адрес',
	'PM_REPORT_CLOSED_SUCCESS'	=> 'Избраните доклади са затворени успешно.',
	'PM_REPORT_DELETED_SUCCESS'	=> 'Избраните доклади са изтрити успешно.',
	'PM_REPORTED_SUCCESS'		=> 'Личното съобщение е докладвано успешно.',
	'PM_REPORT_TOTAL'			=> 'Общо има <strong>едно</strong> лично съобщение за преглед.',
 	'PM_REPORTS_CLOSED_SUCCESS'	=> 'Избраните ЛС Доклади бяха успешно затворени.',
 	'PM_REPORTS_DELETED_SUCCESS'=> 'Избраните ЛС Доклади бяха успешно изтрити.',
	'PM_REPORTS_TOTAL'			=> 'Общо има <strong>%d</strong> лични съобщение за преглед.',
	'PM_REPORTS_ZERO_TOTAL'		=> 'Няма лични съобщения за преглед.',
	'PM_REPORT_DETAILS'			=> 'Детайли',

	'POSTER'					=> 'Подател',
	'POSTS_APPROVED_SUCCESS'	=> 'Избраните мнения бяха одобрени',
	'POSTS_DELETED_SUCCESS'		=> 'Избраните мнения бяха успешно изтрити',
	'POSTS_DISAPPROVED_SUCCESS'	=> 'Избраните мнения бяха успешно пропуснати',
	'POSTS_LOCKED_SUCCESS'		=> 'Избраните мнения бяха заключени',
	'POSTS_MERGED_SUCCESS'		=> 'Избраните мнения бяха съединени',
	'POSTS_UNLOCKED_SUCCESS'	=> 'Избраните мнения бяха отключени',
	'POSTS_PER_PAGE'			=> 'Мнения на страница',
	'POSTS_PER_PAGE_EXPLAIN'	=> '(Настрой на 0 за да видиш всички мнения)',
	'POST_APPROVED_SUCCESS'		=> 'Избраното мнение беше одобрено',
	'POST_DELETED_SUCCESS'		=> 'Избраното мнение беше изтрито',
	'POST_DISAPPROVED_SUCCESS'	=> 'Избраното мнение беше пропуснато',
	'POST_LOCKED_SUCCESS'		=> 'Мнението беше заключено',
	'POST_NOT_EXIST'			=> 'Мнението не съществува',
	'POST_REPORTED_SUCCESS'		=> 'Мнението беше успешно докладвано',
	'POST_UNLOCKED_SUCCESS'		=> 'Мнението беше отключено',

	'READ_USERNOTES'			=> 'Потребителски бележки',
	'READ_WARNINGS'				=> 'Потребителски предупреждения',
	'REPORTER'					=> 'Подател',
	'REPORTED'					=> 'Докладвано',
	'REPORTED_BY'				=> 'Докладвано от',
	'REPORTED_ON_DATE'			=> 'на',
	'REPORTS_CLOSED_SUCCESS'	=> 'Избраните доклади бяха затворени успешно.',
	'REPORTS_DELETED_SUCCESS'	=> 'Избраните доклади бяха изтрити успешно.',
	'REPORTS_TOTAL'				=> 'Общо <strong>%d</strong> доклада за преглед',
	'REPORTS_ZERO_TOTAL'		=> 'Няма нови доклади',
	'REPORT_CLOSED'				=> 'Доклада беше затворен успешно.',
	'REPORT_CLOSED_SUCCESS'		=> 'Избраните доклади бяха успешно затворени.',
	'REPORT_DELETED_SUCCESS'	=> 'Избраните доклади бяха успешно изтрити.',
	'REPORT_DETAILS'			=> 'Детайли на доклада',
	'REPORT_MESSAGE'			=> 'Докладвай съобщението',
	'REPORT_MESSAGE_EXPLAIN'	=> 'Използвай тази форма за да сигнализираш за това лично съобщение на администратора.',
	'REPORT_NOTIFY'				=> 'Уведоми ме',
	'REPORT_NOTIFY_EXPLAIN'		=> '',
	'REPORT_POST_EXPLAIN'		=> 'Използвай тази форма за да сигнализираш за мненията на администратор или модератор.',
	'REPORT_REASON'				=> 'Причина на доклада',
	'REPORT_TIME'				=> 'Време',
	'REPORT_TOTAL'				=> 'Общо <strong>1</strong> доклад за преглед',
	'RESYNC'					=> 'Пренастрой',
	'RETURN_MESSAGE'			=> '%sВърни се към съобщението%s',
	'RETURN_NEW_FORUM'			=> '%sВърни се към форума%s',
	'RETURN_NEW_TOPIC'			=> '%sВърни се към темата%s',
	'RETURN_PM'					=> '%sВърни се към лични съобщения%s',
	'RETURN_POST'				=> '%sВърни се към мнението%s',
	'RETURN_QUEUE'				=> '%sВърни се към квотата%s',
	'RETURN_REPORTS'			=> '%sВърни се към докладите%s',
	'RETURN_TOPIC_SIMPLE'		=> '%sВърни се към темата%s',

	'SEARCH_POSTS_BY_USER'				=> 'Търси мнения на',
	'SELECT_ACTION'						=> 'Избери действие',
	'SELECT_FORUM_GLOBAL_ANNOUNCEMENT'	=> 'Избери форум, във който "Съобщението" да се показва.',
	'SELECT_FORUM_GLOBAL_ANNOUNCEMENTS'	=> 'Една или няколко от избраните теми вече са "Съобщения". Избери форум в който искаш да се показват.',
	'SELECT_MERGE'						=> 'Избери за сливане',
	'SELECT_TOPICS_FROM'				=> 'Избери теми от',
	'SELECT_TOPIC'						=> 'Избери тема',
	'SELECT_USER'						=> 'Избери потребител',
	'SORT_ACTION'						=> 'Лог действия',
	'SORT_DATE'							=> 'Дата',
	'SORT_IP'							=> 'IP Адрес',
	'SORT_WARNINGS'						=> 'Предупреждения',
	'SPLIT_AFTER'						=> 'Раздели избраното мнението',
	'SPLIT_FORUM'						=> 'Форум за нова тема',
	'SPLIT_POSTS'						=> 'Раздели избраните мнения',
	'SPLIT_SUBJECT'						=> 'Заглавие на новата тема',
	'SPLIT_TOPIC_ALL'					=> 'Раздели темите от избраните мнения',
	'SPLIT_TOPIC_ALL_CONFIRM'			=> 'Сигурен ли си, че искаш да разделиш мненията?',
	'SPLIT_TOPIC_BEYOND'				=> 'Раздели темата на избраното мнение',
	'SPLIT_TOPIC_BEYOND_CONFIRM'		=> 'Сигурен ли си, че искаш да разделиш темата на избраното мнение?',
	'SPLIT_TOPIC_EXPLAIN'				=> 'Като използвайте формата долу можете да разделите тема на две.',

	'THIS_PM_IP'				=> 'IP за това лично съобщение',
	'THIS_POST_IP'				=> 'IP за това мнение',
	'TOPICS_APPROVED_SUCCESS'	=> 'Избраните теми бяха одобрени',
	'TOPICS_DELETED_SUCCESS'	=> 'Избраните теми бяха успешно изтрити',
	'TOPICS_DISAPPROVED_SUCCESS'=> 'Избраните теми бяха успешно пропуснати',
	'TOPICS_FORKED_SUCCESS'		=> 'Избраните теми бяха успешно копирани',
	'TOPICS_LOCKED_SUCCESS'		=> 'Избраните теми бяха заключени',
	'TOPICS_MOVED_SUCCESS'		=> 'Избраните теми бяха преместени успешно',
	'TOPICS_RESYNC_SUCCESS'		=> 'Избраните теми бяха пренаредени успешно',
	'TOPICS_TYPE_CHANGED'		=> 'Типа на темите беше променен успешно.',
	'TOPICS_UNLOCKED_SUCCESS'	=> 'Избраните теми бяха отключени',
	'TOPIC_APPROVED_SUCCESS'	=> 'Избраната тема беше одобрена',
	'TOPIC_DELETED_SUCCESS'		=> 'Избраната тема беше изтрита',
	'TOPIC_DISAPPROVED_SUCCESS'	=> 'Избраната тема беше пропусната',
	'TOPIC_FORKED_SUCCESS'		=> 'Избраната тема беше копирана успешно',
	'TOPIC_LOCKED_SUCCESS'		=> 'Избраната тема беше заключена',
	'TOPIC_MOVED_SUCCESS'		=> 'Избраната тема беше преместена успешно',
	'TOPIC_NOT_EXIST'			=> 'Темата не съществува',
	'TOPIC_RESYNC_SUCCESS'		=> 'Избраната тема беше пренаредена',
	'TOPIC_SPLIT_SUCCESS'		=> 'Избраната тема беше разделена успешно',
	'TOPIC_TIME'				=> 'Време на темата',
	'TOPIC_TYPE_CHANGED'		=> 'Типа на темата беше променен успешно.',
	'TOPIC_UNLOCKED_SUCCESS'	=> 'Избраната тема беше отключена успешно',
	'TOTAL_WARNINGS'			=> 'Общо предупреждения',

	'UNAPPROVED_POSTS_TOTAL'		=> 'Общо <strong>%d</strong> мнения чакат одобрение',
	'UNAPPROVED_POSTS_ZERO_TOTAL'	=> 'Няма',
	'UNAPPROVED_POST_TOTAL'			=> 'Общо <strong>1</strong> мнение чака одобрение',
	'UNLOCK'						=> 'Отключи',
	'UNLOCK_POST'					=> 'Отключи мнението',
	'UNLOCK_POST_EXPLAIN'			=> 'Позволи промяна',
	'UNLOCK_POST_POST'				=> 'Отключи мнението',
	'UNLOCK_POST_POST_CONFIRM'		=> 'Сигурен ли си, че искаш да позволиш променянето на това мнение?',
	'UNLOCK_POST_POSTS'				=> 'Отключи избраните мнения',
	'UNLOCK_POST_POSTS_CONFIRM'		=> 'Сигурен ли си, че искаш да позволиш променянето на тази мнения?',
	'UNLOCK_TOPIC'					=> 'Отключи темата',
	'UNLOCK_TOPIC_CONFIRM'			=> 'Сигурен ли си, че искаш да отключиш темата?',
	'UNLOCK_TOPICS'					=> 'Отключи избраните теми',
	'UNLOCK_TOPICS_CONFIRM'			=> 'Сигурен ли си, че искаш да отключиш всички избрани теми?',
	'USER_CANNOT_POST'				=> 'Не можеш да пишеш в този форум',
	'USER_CANNOT_REPORT'			=> 'Не може да докладваш за мнения в този форум',
	'USER_FEEDBACK_ADDED'			=> 'Обратната връзка е добавена успешно.',
	'USER_WARNING_ADDED'			=> 'Потребителя е предупреден успешно.',

	'VIEW_DETAILS'			=> 'Детайли',
	'VIEW_PM'				=> 'Виж личното съобщение',
	'VIEW_POST'				=> 'Виж мнението',

	'WARNED_USERS'			=> 'Предупредени потребители',
	'WARNED_USERS_EXPLAIN'	=> 'Това е списък на потребителите с изтекли предупреждения',
	'WARNING_PM_BODY'		=> 'Следващите предупреждения са направени от администратор или модератор на форума.[quote]%s[/quote]',
	'WARNING_PM_SUBJECT'	=> 'Форум предупреждения',
	'WARNING_POST_DEFAULT'	=> 'Това е предупреждение направено от теб: %s',
	'WARNINGS_ZERO_TOTAL'	=> 'Няма предупреждения',

	'YOU_SELECTED_TOPIC'	=> 'Ти избра тема номер %d: %s',

	'report_reasons'		=> array(
		'TITLE'	=> array(
			'WAREZ'		=> 'Warez',
			'SPAM'		=> 'Спам',
			'OFF_TOPIC'	=> 'Офтопик',
			'OTHER'		=> 'Друго'
		),
		'DESCRIPTION' => array(
			'WAREZ'		=> 'Мнението съдържа нелегални връзки',
			'SPAM'		=> 'Единствената цел на мнението е реклама',
			'OFF_TOPIC'	=> 'Мнението не е свързано с естеството на темата',
			'OTHER'		=> 'Няма създадена категория, моля използвайте описанието'
		)
	),
));

?>