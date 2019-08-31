<?PHP

$plugin_lang = array
(
	'off' => "Оплата приостановлена",
	'need_money' => "Недостаточно средств, Вам необходимо <a href='../../../pay/main/sum/%s' target='_blank' onClick='javascript: window.close();'>полнить баланс</a> на %s %s",
	'already' => "Вы уже оплатили доступ к данному контенту<br /><br /><a href=\"javascript: window.opener.location.reload(); window.close();\">закрыть окно</a>",
	'balance_desc' => "Оплата доступа на <a href=\"%s\">странице</a>",
	'balance_ok' => "Оплата выполнена - доступ открыт<br /><br /><a href=\"javascript: window.opener.location.reload(); window.close();\">закрыть окно</a>",
	'balance_log' => "К Вашей <a href=\"%s\">публикации</a> получен доступ для <a href=\"/user/%s\">%s</a>",
	'error_hash' => "Hash данные не совпадают!",
	'page' => "Страница",
	'timeFull' => "Навсегда",
	'timeTo' => "До ",
	'error' => "Внимание",
	'replay' => "Оплачено",
	'access_post' => "Статья &laquo;<a href=\"%s\" target=\"_blank\">%s</a>&raquo;",
	'access_page' => "Раздел на <a href=\"%s\" target=\"_blank\">странице</a>",
	'settigns' => "Настройки",

	'form_off' => "Временно недоступно",
	'form_error_tpl' => "Шаблон /billing/plugins/payhide/form.tpl недоступен",

	'title' => "Оплата скрытого текста",
	'user' => "Пользователь",
	'paypage' => "Оплатил",
	'gentags' => "Генератор тегов",
	'summa' => "Сумма",
	'ok' => "Выполнено",
	'remove' => "Выбранные доступы удалены",
	'remove_bad' => "Неверный hash",
	'remove_desc' => "Удалить доступ",
	'autor' => "Партнер",
	'percent' => "Доля автора:",
	'percent_desc' => "Если доступ открыт на странице поста, автору новости может быть начисле указанный процент от суммы платежа",
	'time' => "Доступ открыт",

	'tag_1' => "Ключ тега:",
	'tag_1d' => "Используйте только латинские буквы и цифры, без пробелов",
	'tag_1d7' => "<span class=\"help-button\" data-rel=\"popover\" data-trigger=\"hover\" data-placement=\"right\" data-content=\"Возможна группировка нескольких платный тегов под одним ключом.\nВ этом случае, оплачивая один тег, пользователь получает доступ ко всей группе\" data-original-title=\"\" title=\"\">?</span>",
	'tag_2' => "Цена доступа:",
	'tag_2d' => "Укажите требуемую к оплате сумму для открытия содержимого тега",
	'tag_3' => "Время доступа:",
	'tag_3d' => "После оплаты, у пользователя будет указанное количество <b>минут</b> доступа к содержимому тега.<br> Указывать необязательно",
	'tag_4' => "Открыть доступ:",
	'tag_4d' => "Группы для которых не требуется оплата",
	'tag_5' => "Код для вставки:",
	'tag_5d' => "Вы можете вставить данных код в любой шаблон сайта, либо в саму статью",
	'tag_6' => "Уникален для каждой статьи:",
	'tag_6d' => "Независимо от указанного ключа, для каждого отдельного поста, требуется оплата доступа. <br />Только для страницы просмотра полной и краткой новости, автор новости получит указанный процент",
	'tag_form' => "Скрытый текст",
	'tag_error' => "<b>Цена доступа</b> - обязательный параметр",
	'key_error' => "<b>Ключ тега</b> - обязательный параметр",
	'key_time' => " мин.",
	'tag_autor' => "Открыть доступ автору:",
	'tag_autor_desc' => "Открыть содержимое тега автору статьи, на странице которой расположен тег",
	'tag_theme' => "Шаблон закрытого тега:",
	'tag_theme_desc' => "Название файла шаблона для закрытого тега<br>По умолчанию: /templates/Default/billing/plugins/payhide/<b>closed</b>.tpl",
	'tag_theme_open' => "Шаблон открытого тега:",
	'tag_theme_open_desc' => "Название файла шаблона для открытого тега<br>По умолчанию: /templates/Default/billing/plugins/payhide/<b>open</b>.tpl"
);

?>
