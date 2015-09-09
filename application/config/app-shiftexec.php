<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* base stuff */
#$config['nts_app_title'] = 'ShiftExec';
#$config['nts_app_url'] = 'http://www.shiftexec.com';

#$config['nts_promo_url'] = 'http://www.shiftexec.com/order/';
#$config['nts_promo_title'] = 'ShiftExec Pro';

$config['nts_app_title'] = '';
$config['nts_app_url'] = '';

$config['nts_promo_url'] = '';
$config['nts_promo_title'] = '';

$config['nts_track_setup'] = '2:2';

$config['modules'] = array(
//	'license',
	'conf',
//	'wordpress',
	'wall',
//	'notes'	=> array(
//		'relations'	=> array(
//			'timeoff_id',
//			'shift_id'
//			)
//		),
//	'shift_groups',
//	'shift_trades',
	'loginlog',
	'logaudit',
	);
