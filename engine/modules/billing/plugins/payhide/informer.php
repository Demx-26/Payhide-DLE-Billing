<?php	if( ! defined( 'BILLING_MODULE' ) ) die( "Hacking attempt!" );
/**
 * DLE Billing
 *
 * @link          https://github.com/mr-Evgen/dle-billing-module
 * @author        dle-billing.ru <evgeny.tc@gmail.com>
 * @copyright     Copyright (c) 2012-2017, mr_Evgen
 */

$this->LQuery->DbWhere( array(
								"history_plugin = 'payhide' " => 1,
								"history_date > " .  mktime(0,0,0) => 1,
								"history_minus > 0" => 1
						) );

return $this->TopInformerView(
	"?mod=billing&c=payhide",
	$this->lang['main_news'],
	$this->LQuery->DbGetHistoryNum(),
	"Открыли доступ",
	"icon-lock"
);
?>
