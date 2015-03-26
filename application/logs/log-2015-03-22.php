<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

DEBUG - 2015-03-22 04:05:31 --> Config Class Initialized
DEBUG - 2015-03-22 04:05:31 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:05:31 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:05:31 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:05:31 --> URI Class Initialized
DEBUG - 2015-03-22 04:05:31 --> Router Class Initialized
DEBUG - 2015-03-22 04:05:31 --> Output Class Initialized
DEBUG - 2015-03-22 04:05:31 --> Security Class Initialized
DEBUG - 2015-03-22 04:05:31 --> Input Class Initialized
DEBUG - 2015-03-22 04:05:31 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:05:31 --> Language Class Initialized
DEBUG - 2015-03-22 04:05:31 --> Loader Class Initialized
DEBUG - 2015-03-22 04:05:31 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:05:31 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:05:31 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:05:31 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:05:31 --> Database Driver Class Initialized
ERROR - 2015-03-22 04:05:31 --> Severity: Notice  --> mysql_pconnect():  D:\dev\php\web\sbm\sbm.dealer\system\database\drivers\mysql\mysql_driver.php 91
DEBUG - 2015-03-22 04:05:31 --> Controller Class Initialized
DEBUG - 2015-03-22 04:05:31 --> File loaded: application/views//admin/main.php
DEBUG - 2015-03-22 04:05:31 --> Final output sent to browser
DEBUG - 2015-03-22 04:05:31 --> Total execution time: 0.4220
DEBUG - 2015-03-22 04:05:32 --> Config Class Initialized
DEBUG - 2015-03-22 04:05:32 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:05:32 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:05:32 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:05:32 --> URI Class Initialized
DEBUG - 2015-03-22 04:05:32 --> Router Class Initialized
DEBUG - 2015-03-22 04:05:32 --> Output Class Initialized
DEBUG - 2015-03-22 04:05:32 --> Security Class Initialized
DEBUG - 2015-03-22 04:05:32 --> Input Class Initialized
DEBUG - 2015-03-22 04:05:32 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:05:32 --> Language Class Initialized
DEBUG - 2015-03-22 04:05:32 --> Loader Class Initialized
DEBUG - 2015-03-22 04:05:32 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:05:32 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:05:32 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:05:32 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:05:32 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:05:32 --> Controller Class Initialized
DEBUG - 2015-03-22 04:05:32 --> SELECT dealer_uid, concat(cmpy_nm, ' / ', dealer_nm) txt_dealer FROM om_dealer a WHERE aprv_yn = 'Y'  AND worker_seq is not null ORDER BY txt_dealer
DEBUG - 2015-03-22 04:05:32 --> File loaded: application/views//common/user/listDealerByWorker.php
DEBUG - 2015-03-22 04:05:32 --> Final output sent to browser
DEBUG - 2015-03-22 04:05:32 --> Total execution time: 0.2130
DEBUG - 2015-03-22 04:05:37 --> Config Class Initialized
DEBUG - 2015-03-22 04:05:37 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:05:37 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:05:37 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:05:37 --> URI Class Initialized
DEBUG - 2015-03-22 04:05:37 --> Router Class Initialized
DEBUG - 2015-03-22 04:05:37 --> Output Class Initialized
DEBUG - 2015-03-22 04:05:37 --> Security Class Initialized
DEBUG - 2015-03-22 04:05:37 --> Input Class Initialized
DEBUG - 2015-03-22 04:05:37 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:05:37 --> Language Class Initialized
DEBUG - 2015-03-22 04:05:37 --> Loader Class Initialized
DEBUG - 2015-03-22 04:05:37 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:05:37 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:05:37 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:05:37 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:05:37 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:05:37 --> Controller Class Initialized
DEBUG - 2015-03-22 04:05:37 --> SELECT uid, auth_grp_cd, perms_cd, usr_nm, usr_email, gender_atcd, nation_atcd, active_yn,(case when auth_grp_cd in ('SA','WD','WA','US') then (select team_atcd from om_worker where worker_uid = a.uid) end) team_atcd,(select auth_grp_dscrt from cm_auth_grp where auth_grp_cd=a.auth_grp_cd) auth_grp_dscrt FROM om_user a WHERE 1=1 AND auth_grp_cd='UD' AND uid='sofia@ubs-bg.com'
DEBUG - 2015-03-22 04:05:38 --> File loaded: application/views//common/user/ajaxLogin.php
DEBUG - 2015-03-22 04:05:38 --> Final output sent to browser
DEBUG - 2015-03-22 04:05:38 --> Total execution time: 0.2000
DEBUG - 2015-03-22 04:05:38 --> Config Class Initialized
DEBUG - 2015-03-22 04:05:38 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:05:38 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:05:38 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:05:38 --> URI Class Initialized
DEBUG - 2015-03-22 04:05:38 --> Router Class Initialized
DEBUG - 2015-03-22 04:05:38 --> Output Class Initialized
DEBUG - 2015-03-22 04:05:38 --> Security Class Initialized
DEBUG - 2015-03-22 04:05:38 --> Input Class Initialized
DEBUG - 2015-03-22 04:05:38 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:05:38 --> Language Class Initialized
DEBUG - 2015-03-22 04:05:38 --> Loader Class Initialized
DEBUG - 2015-03-22 04:05:38 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:05:38 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:05:38 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:05:38 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:05:38 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:05:38 --> Controller Class Initialized
DEBUG - 2015-03-22 04:05:38 --> File loaded: application/views//admin/main.php
DEBUG - 2015-03-22 04:05:38 --> Final output sent to browser
DEBUG - 2015-03-22 04:05:38 --> Total execution time: 0.1380
DEBUG - 2015-03-22 04:05:44 --> Config Class Initialized
DEBUG - 2015-03-22 04:05:44 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:05:44 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:05:44 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:05:44 --> URI Class Initialized
DEBUG - 2015-03-22 04:05:44 --> Router Class Initialized
DEBUG - 2015-03-22 04:05:44 --> Output Class Initialized
DEBUG - 2015-03-22 04:05:44 --> Security Class Initialized
DEBUG - 2015-03-22 04:05:44 --> Input Class Initialized
DEBUG - 2015-03-22 04:05:44 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:05:44 --> Language Class Initialized
DEBUG - 2015-03-22 04:05:44 --> Loader Class Initialized
DEBUG - 2015-03-22 04:05:44 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:05:44 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:05:44 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:05:44 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:05:44 --> Database Driver Class Initialized
ERROR - 2015-03-22 04:05:44 --> Severity: Notice  --> mysql_pconnect():  D:\dev\php\web\sbm\sbm.dealer\system\database\drivers\mysql\mysql_driver.php 91
DEBUG - 2015-03-22 04:05:44 --> Controller Class Initialized
DEBUG - 2015-03-22 04:05:44 --> File loaded: application/views//admin/order/main.php
DEBUG - 2015-03-22 04:05:44 --> Final output sent to browser
DEBUG - 2015-03-22 04:05:44 --> Total execution time: 0.2870
DEBUG - 2015-03-22 04:05:44 --> Config Class Initialized
DEBUG - 2015-03-22 04:05:44 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:05:44 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:05:44 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:05:44 --> URI Class Initialized
DEBUG - 2015-03-22 04:05:44 --> Router Class Initialized
DEBUG - 2015-03-22 04:05:44 --> Output Class Initialized
DEBUG - 2015-03-22 04:05:44 --> Security Class Initialized
DEBUG - 2015-03-22 04:05:44 --> Input Class Initialized
DEBUG - 2015-03-22 04:05:44 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:05:44 --> Language Class Initialized
DEBUG - 2015-03-22 04:05:44 --> Loader Class Initialized
DEBUG - 2015-03-22 04:05:44 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:05:44 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:05:44 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:05:44 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:05:44 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:05:44 --> Controller Class Initialized
DEBUG - 2015-03-22 04:05:44 --> File loaded: application/views//admin/order/tab01.php
DEBUG - 2015-03-22 04:05:44 --> Final output sent to browser
DEBUG - 2015-03-22 04:05:45 --> Total execution time: 0.2360
DEBUG - 2015-03-22 04:05:45 --> Config Class Initialized
DEBUG - 2015-03-22 04:05:45 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:05:45 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:05:45 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:05:45 --> URI Class Initialized
DEBUG - 2015-03-22 04:05:45 --> Router Class Initialized
DEBUG - 2015-03-22 04:05:45 --> Output Class Initialized
DEBUG - 2015-03-22 04:05:45 --> Security Class Initialized
DEBUG - 2015-03-22 04:05:45 --> Input Class Initialized
DEBUG - 2015-03-22 04:05:45 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:05:45 --> Language Class Initialized
DEBUG - 2015-03-22 04:05:45 --> Loader Class Initialized
DEBUG - 2015-03-22 04:05:45 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:05:45 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:05:45 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:05:45 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:05:45 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:05:45 --> Controller Class Initialized
DEBUG - 2015-03-22 04:05:45 --> File loaded: application/views//common/user/viewDealer.php
DEBUG - 2015-03-22 04:05:45 --> Final output sent to browser
DEBUG - 2015-03-22 04:05:45 --> Total execution time: 0.2570
DEBUG - 2015-03-22 04:05:45 --> Config Class Initialized
DEBUG - 2015-03-22 04:05:45 --> Config Class Initialized
DEBUG - 2015-03-22 04:05:45 --> Config Class Initialized
DEBUG - 2015-03-22 04:05:45 --> Config Class Initialized
DEBUG - 2015-03-22 04:05:45 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:05:45 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:05:45 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:05:45 --> Config Class Initialized
DEBUG - 2015-03-22 04:05:45 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:05:45 --> Config Class Initialized
DEBUG - 2015-03-22 04:05:45 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:05:45 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:05:45 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:05:45 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:05:45 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:05:45 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:05:45 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:05:45 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:05:45 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:05:45 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:05:45 --> URI Class Initialized
DEBUG - 2015-03-22 04:05:46 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:05:46 --> URI Class Initialized
DEBUG - 2015-03-22 04:05:46 --> URI Class Initialized
DEBUG - 2015-03-22 04:05:46 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:05:46 --> URI Class Initialized
DEBUG - 2015-03-22 04:05:46 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:05:46 --> Router Class Initialized
DEBUG - 2015-03-22 04:05:46 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:05:46 --> Router Class Initialized
DEBUG - 2015-03-22 04:05:46 --> Router Class Initialized
DEBUG - 2015-03-22 04:05:46 --> Output Class Initialized
DEBUG - 2015-03-22 04:05:46 --> URI Class Initialized
DEBUG - 2015-03-22 04:05:46 --> Output Class Initialized
DEBUG - 2015-03-22 04:05:46 --> Router Class Initialized
DEBUG - 2015-03-22 04:05:46 --> Security Class Initialized
DEBUG - 2015-03-22 04:05:46 --> URI Class Initialized
DEBUG - 2015-03-22 04:05:46 --> Output Class Initialized
DEBUG - 2015-03-22 04:05:46 --> Router Class Initialized
DEBUG - 2015-03-22 04:05:46 --> Output Class Initialized
DEBUG - 2015-03-22 04:05:46 --> Security Class Initialized
DEBUG - 2015-03-22 04:05:46 --> Router Class Initialized
DEBUG - 2015-03-22 04:05:46 --> Input Class Initialized
DEBUG - 2015-03-22 04:05:46 --> Output Class Initialized
DEBUG - 2015-03-22 04:05:46 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:05:46 --> Security Class Initialized
DEBUG - 2015-03-22 04:05:46 --> Language Class Initialized
DEBUG - 2015-03-22 04:05:46 --> Security Class Initialized
DEBUG - 2015-03-22 04:05:46 --> Output Class Initialized
DEBUG - 2015-03-22 04:05:46 --> Input Class Initialized
DEBUG - 2015-03-22 04:05:46 --> Input Class Initialized
DEBUG - 2015-03-22 04:05:46 --> Security Class Initialized
DEBUG - 2015-03-22 04:05:46 --> Security Class Initialized
DEBUG - 2015-03-22 04:05:46 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:05:46 --> Input Class Initialized
DEBUG - 2015-03-22 04:05:46 --> Loader Class Initialized
DEBUG - 2015-03-22 04:05:46 --> Input Class Initialized
DEBUG - 2015-03-22 04:05:46 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:05:46 --> Input Class Initialized
DEBUG - 2015-03-22 04:05:46 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:05:46 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:05:46 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:05:46 --> Language Class Initialized
DEBUG - 2015-03-22 04:05:46 --> Language Class Initialized
DEBUG - 2015-03-22 04:05:46 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:05:46 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:05:46 --> Language Class Initialized
DEBUG - 2015-03-22 04:05:46 --> Loader Class Initialized
DEBUG - 2015-03-22 04:05:46 --> Language Class Initialized
DEBUG - 2015-03-22 04:05:46 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:05:46 --> Loader Class Initialized
DEBUG - 2015-03-22 04:05:46 --> Loader Class Initialized
DEBUG - 2015-03-22 04:05:46 --> Language Class Initialized
DEBUG - 2015-03-22 04:05:46 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:05:46 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:05:46 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:05:46 --> Loader Class Initialized
DEBUG - 2015-03-22 04:05:46 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:05:46 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:05:46 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:05:46 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:05:46 --> Loader Class Initialized
DEBUG - 2015-03-22 04:05:46 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:05:46 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:05:46 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:05:46 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:05:46 --> Helper loaded: string_helper
ERROR - 2015-03-22 04:05:46 --> Severity: Notice  --> mysql_pconnect():  D:\dev\php\web\sbm\sbm.dealer\system\database\drivers\mysql\mysql_driver.php 91
DEBUG - 2015-03-22 04:05:46 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:05:46 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:05:46 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:05:46 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:05:46 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:05:46 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:05:46 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:05:46 --> Controller Class Initialized
ERROR - 2015-03-22 04:05:46 --> Severity: Notice  --> mysql_pconnect():  D:\dev\php\web\sbm\sbm.dealer\system\database\drivers\mysql\mysql_driver.php 91
DEBUG - 2015-03-22 04:05:46 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:05:46 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:05:46 --> File loaded: application/views//common/listModel.php
DEBUG - 2015-03-22 04:05:46 --> Config Class Initialized
DEBUG - 2015-03-22 04:05:46 --> Final output sent to browser
DEBUG - 2015-03-22 04:05:46 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:05:46 --> Total execution time: 0.6440
DEBUG - 2015-03-22 04:05:46 --> Config Class Initialized
DEBUG - 2015-03-22 04:05:46 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:05:46 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:05:46 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:05:46 --> Config Class Initialized
DEBUG - 2015-03-22 04:05:46 --> Controller Class Initialized
DEBUG - 2015-03-22 04:05:46 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:05:46 --> Controller Class Initialized
DEBUG - 2015-03-22 04:05:46 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:05:46 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:05:46 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:05:46 --> Controller Class Initialized
DEBUG - 2015-03-22 04:05:46 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:05:46 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:05:46 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:05:46 --> UTF-8 Support Enabled
ERROR - 2015-03-22 04:05:46 --> Severity: Notice  --> mysql_pconnect():  D:\dev\php\web\sbm\sbm.dealer\system\database\drivers\mysql\mysql_driver.php 91
DEBUG - 2015-03-22 04:05:46 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 04:05:46 --> File loaded: application/views//common/user/listCntry.php
DEBUG - 2015-03-22 04:05:46 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:05:46 --> Final output sent to browser
DEBUG - 2015-03-22 04:05:46 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:05:46 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:05:46 --> URI Class Initialized
DEBUG - 2015-03-22 04:05:46 --> Final output sent to browser
DEBUG - 2015-03-22 04:05:46 --> Total execution time: 0.9081
DEBUG - 2015-03-22 04:05:46 --> URI Class Initialized
DEBUG - 2015-03-22 04:05:46 --> URI Class Initialized
ERROR - 2015-03-22 04:05:46 --> Severity: Notice  --> mysql_pconnect():  D:\dev\php\web\sbm\sbm.dealer\system\database\drivers\mysql\mysql_driver.php 91
DEBUG - 2015-03-22 04:05:46 --> Router Class Initialized
DEBUG - 2015-03-22 04:05:46 --> Total execution time: 0.9431
DEBUG - 2015-03-22 04:05:46 --> Config Class Initialized
DEBUG - 2015-03-22 04:05:46 --> Router Class Initialized
DEBUG - 2015-03-22 04:05:46 --> Router Class Initialized
DEBUG - 2015-03-22 04:05:46 --> Output Class Initialized
DEBUG - 2015-03-22 04:05:46 --> Controller Class Initialized
DEBUG - 2015-03-22 04:05:46 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:05:46 --> File loaded: application/views//common/user/listUserPiNo.php
DEBUG - 2015-03-22 04:05:46 --> Config Class Initialized
DEBUG - 2015-03-22 04:05:46 --> Controller Class Initialized
DEBUG - 2015-03-22 04:05:46 --> Output Class Initialized
DEBUG - 2015-03-22 04:05:46 --> Security Class Initialized
DEBUG - 2015-03-22 04:05:46 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:05:46 --> Final output sent to browser
DEBUG - 2015-03-22 04:05:46 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:05:46 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 04:05:47 --> Output Class Initialized
DEBUG - 2015-03-22 04:05:47 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 04:05:47 --> Security Class Initialized
DEBUG - 2015-03-22 04:05:47 --> Input Class Initialized
DEBUG - 2015-03-22 04:05:47 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:05:47 --> Final output sent to browser
DEBUG - 2015-03-22 04:05:47 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:05:47 --> Total execution time: 1.0761
DEBUG - 2015-03-22 04:05:47 --> Security Class Initialized
DEBUG - 2015-03-22 04:05:47 --> Final output sent to browser
DEBUG - 2015-03-22 04:05:47 --> Input Class Initialized
DEBUG - 2015-03-22 04:05:47 --> URI Class Initialized
DEBUG - 2015-03-22 04:05:47 --> Total execution time: 1.0921
DEBUG - 2015-03-22 04:05:47 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:05:47 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:05:47 --> Config Class Initialized
DEBUG - 2015-03-22 04:05:47 --> Input Class Initialized
DEBUG - 2015-03-22 04:05:47 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:05:47 --> Total execution time: 1.1391
DEBUG - 2015-03-22 04:05:47 --> Router Class Initialized
DEBUG - 2015-03-22 04:05:47 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:05:47 --> URI Class Initialized
DEBUG - 2015-03-22 04:05:47 --> Config Class Initialized
DEBUG - 2015-03-22 04:05:47 --> Language Class Initialized
DEBUG - 2015-03-22 04:05:47 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:05:47 --> Language Class Initialized
DEBUG - 2015-03-22 04:05:47 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:05:47 --> Router Class Initialized
DEBUG - 2015-03-22 04:05:47 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:05:47 --> Config Class Initialized
DEBUG - 2015-03-22 04:05:47 --> Output Class Initialized
DEBUG - 2015-03-22 04:05:47 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:05:47 --> Output Class Initialized
DEBUG - 2015-03-22 04:05:47 --> Language Class Initialized
DEBUG - 2015-03-22 04:05:47 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:05:47 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:05:47 --> Loader Class Initialized
DEBUG - 2015-03-22 04:05:47 --> Security Class Initialized
DEBUG - 2015-03-22 04:05:47 --> Security Class Initialized
DEBUG - 2015-03-22 04:05:47 --> Loader Class Initialized
DEBUG - 2015-03-22 04:05:47 --> URI Class Initialized
DEBUG - 2015-03-22 04:05:47 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:05:47 --> Input Class Initialized
DEBUG - 2015-03-22 04:05:47 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:05:47 --> Loader Class Initialized
DEBUG - 2015-03-22 04:05:47 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:05:47 --> Input Class Initialized
DEBUG - 2015-03-22 04:05:47 --> Router Class Initialized
DEBUG - 2015-03-22 04:05:47 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:05:47 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:05:47 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:05:47 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:05:47 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:05:47 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:05:47 --> URI Class Initialized
DEBUG - 2015-03-22 04:05:47 --> Language Class Initialized
DEBUG - 2015-03-22 04:05:47 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:05:47 --> URI Class Initialized
DEBUG - 2015-03-22 04:05:47 --> Output Class Initialized
DEBUG - 2015-03-22 04:05:47 --> Router Class Initialized
DEBUG - 2015-03-22 04:05:47 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:05:47 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:05:47 --> Language Class Initialized
DEBUG - 2015-03-22 04:05:47 --> Router Class Initialized
DEBUG - 2015-03-22 04:05:47 --> Loader Class Initialized
DEBUG - 2015-03-22 04:05:47 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:05:47 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:05:47 --> Loader Class Initialized
DEBUG - 2015-03-22 04:05:47 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:05:47 --> Output Class Initialized
DEBUG - 2015-03-22 04:05:47 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:05:47 --> Security Class Initialized
DEBUG - 2015-03-22 04:05:47 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:05:47 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:05:47 --> Output Class Initialized
DEBUG - 2015-03-22 04:05:47 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:05:47 --> Security Class Initialized
DEBUG - 2015-03-22 04:05:47 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:05:47 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:05:47 --> Input Class Initialized
DEBUG - 2015-03-22 04:05:47 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:05:47 --> Input Class Initialized
DEBUG - 2015-03-22 04:05:47 --> Security Class Initialized
DEBUG - 2015-03-22 04:05:47 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:05:47 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:05:47 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:05:47 --> Input Class Initialized
DEBUG - 2015-03-22 04:05:47 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:05:47 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:05:47 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:05:47 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:05:47 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:05:47 --> Language Class Initialized
DEBUG - 2015-03-22 04:05:47 --> Language Class Initialized
DEBUG - 2015-03-22 04:05:47 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:05:47 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:05:47 --> Controller Class Initialized
DEBUG - 2015-03-22 04:05:47 --> Controller Class Initialized
DEBUG - 2015-03-22 04:05:47 --> Controller Class Initialized
DEBUG - 2015-03-22 04:05:47 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 04:05:47 --> Language Class Initialized
DEBUG - 2015-03-22 04:05:47 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 04:05:47 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 04:05:47 --> Loader Class Initialized
DEBUG - 2015-03-22 04:05:47 --> Final output sent to browser
DEBUG - 2015-03-22 04:05:47 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:05:47 --> Loader Class Initialized
DEBUG - 2015-03-22 04:05:47 --> Final output sent to browser
DEBUG - 2015-03-22 04:05:47 --> Loader Class Initialized
DEBUG - 2015-03-22 04:05:47 --> Total execution time: 1.3671
DEBUG - 2015-03-22 04:05:47 --> Controller Class Initialized
DEBUG - 2015-03-22 04:05:47 --> Final output sent to browser
DEBUG - 2015-03-22 04:05:47 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:05:47 --> Controller Class Initialized
DEBUG - 2015-03-22 04:05:47 --> Total execution time: 1.4271
DEBUG - 2015-03-22 04:05:47 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:05:48 --> Total execution time: 1.4321
DEBUG - 2015-03-22 04:05:48 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:05:48 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 04:05:48 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:05:48 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 04:05:48 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:05:48 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:05:48 --> Final output sent to browser
DEBUG - 2015-03-22 04:05:48 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:05:48 --> Final output sent to browser
DEBUG - 2015-03-22 04:05:48 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:05:48 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:05:48 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:05:48 --> Total execution time: 1.1361
DEBUG - 2015-03-22 04:05:48 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:05:48 --> Total execution time: 1.2231
DEBUG - 2015-03-22 04:05:48 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:05:48 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:05:48 --> Controller Class Initialized
DEBUG - 2015-03-22 04:05:48 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:05:48 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 04:05:48 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:05:48 --> Controller Class Initialized
DEBUG - 2015-03-22 04:05:48 --> Controller Class Initialized
DEBUG - 2015-03-22 04:05:48 --> Final output sent to browser
DEBUG - 2015-03-22 04:05:48 --> Total execution time: 1.0631
DEBUG - 2015-03-22 04:05:48 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 04:05:48 --> File loaded: application/views//common/listCodeImg.php
DEBUG - 2015-03-22 04:05:48 --> Final output sent to browser
DEBUG - 2015-03-22 04:05:48 --> Final output sent to browser
DEBUG - 2015-03-22 04:05:48 --> Total execution time: 1.1541
DEBUG - 2015-03-22 04:05:48 --> Total execution time: 1.0491
DEBUG - 2015-03-22 04:06:23 --> Config Class Initialized
DEBUG - 2015-03-22 04:06:24 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:06:24 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:06:24 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:06:24 --> URI Class Initialized
DEBUG - 2015-03-22 04:06:24 --> Router Class Initialized
DEBUG - 2015-03-22 04:06:24 --> Output Class Initialized
DEBUG - 2015-03-22 04:06:24 --> Security Class Initialized
DEBUG - 2015-03-22 04:06:24 --> Input Class Initialized
DEBUG - 2015-03-22 04:06:24 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:06:24 --> Language Class Initialized
DEBUG - 2015-03-22 04:06:24 --> Loader Class Initialized
DEBUG - 2015-03-22 04:06:24 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:06:24 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:06:24 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:06:24 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:06:24 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:06:24 --> Controller Class Initialized
DEBUG - 2015-03-22 04:06:24 --> File loaded: application/views//admin/order/crtEqpOrder.php
DEBUG - 2015-03-22 04:06:24 --> Final output sent to browser
DEBUG - 2015-03-22 04:06:24 --> Total execution time: 0.3000
DEBUG - 2015-03-22 04:06:24 --> Config Class Initialized
DEBUG - 2015-03-22 04:06:24 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:06:24 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:06:24 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:06:24 --> URI Class Initialized
DEBUG - 2015-03-22 04:06:24 --> Router Class Initialized
DEBUG - 2015-03-22 04:06:24 --> Output Class Initialized
DEBUG - 2015-03-22 04:06:24 --> Security Class Initialized
DEBUG - 2015-03-22 04:06:24 --> Input Class Initialized
DEBUG - 2015-03-22 04:06:24 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:06:24 --> Language Class Initialized
DEBUG - 2015-03-22 04:06:24 --> Loader Class Initialized
DEBUG - 2015-03-22 04:06:24 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:06:24 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:06:24 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:06:24 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:06:24 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:06:24 --> Controller Class Initialized
DEBUG - 2015-03-22 04:06:24 --> readEqpOrder:SELECT a.*, (select atcd_nm from cm_cd_attr where cd = '00B0' and atcd = a.srl_atcd) txt_srl_atcd, (select atcd_nm from cm_cd_attr where cd = '00D0' and atcd = a.rjt_pkt_tp_atcd) txt_rjt_pkt_tp_atcd, (select atcd_nm from cm_cd_attr where cd = '00E0' and atcd = a.pwr_cab_atcd) txt_pwr_cab_atcd, (select atcd_nm from cm_cd_attr where cd = '00F0' and atcd = a.shipped_by_atcd) txt_shipped_by_atcd, (select atcd_nm from cm_cd_attr where cd = '00F1' and atcd = a.courier_atcd) txt_courier_atcd, (select atcd_nm from cm_cd_attr where cd = '00G0' and atcd = a.payment_atcd) txt_payment_atcd, (select atcd_nm from cm_cd_attr where cd = '00H0' and atcd = a.incoterms_atcd) txt_incoterms_atcd, (select atcd_nm from cm_cd_attr where cd = '00L0' and atcd = a.lcd_color_atcd) txt_lcd_color_atcd, (select atcd_nm from cm_cd_attr where cd = '00M0' and atcd = a.lcd_lang_atcd) txt_lcd_lang_atcd, (select cmpy_nm from om_dealer where dealer_seq = a.dealer_seq) cmpy_nm, (select atcd_nm from cm_cd_attr where cd = '0022' and atcd = a.cntry_atcd) txt_cntry_atcd, if(mdl_cd in ('0007','0009'), concat(mdl_nm, concat('R',lan_L),if(a.lcd_color_atcd='00L00002','C','')), if(mdl_cd in ('3000'), concat(mdl_nm, concat('F',rjt_pkt_tp),''),mdl_nm)) txt_mdl_nm, DATE_FORMAT(a.delivery_dt, '%Y-%m-%d') txt_delivery_dt FROM ( SELECT a.*, b.cntry_atcd, b.dealer_seq, b.worker_seq, b.premium_rate, b.tot_amt, b.cnfm_yn, b.cnfm_dt, b.wrk_tp_atcd, b.udt_dt as order_dt, (CASE WHEN a.rjt_pkt_tp_atcd = ('00D00001') THEN 'A'  WHEN a.rjt_pkt_tp_atcd = ('00D00002') THEN 'I' END) rjt_pkt_tp, (SELECT mdl_nm FROM om_mdl WHERE mdl_cd = a.mdl_cd) mdl_nm, (SELECT if(count(*)>0,'L','') FROM om_ord_eqp_dtl where pi_no = a.pi_no and po_no = a.po_no and om_ord_eqp_dtl.atcd = '00A00001') lan_L FROM om_ord_eqp a, om_ord_inf b WHERE a.pi_no = b.pi_no AND a.pi_no = '150002bg' AND a.po_no = 27 ) a
DEBUG - 2015-03-22 04:06:24 --> SELECT b.cntry_atcd, b.dealer_seq, b.worker_seq, b.premium_rate, b.tot_amt, b.cnfm_yn, b.cnfm_dt, b.wrk_tp_atcd, a.*, (select atcd_nm from cm_cd_attr where cd = '0091' and atcd = a.currency_atch) txt_currency_atcd, (select atcd_nm from cm_cd_attr where cd = '0092' and atcd = a.serial_currency_atch) txt_serial_currency_atch, (select atcd_nm from cm_cd_attr where cd = '00A0' and atcd = a.opt_hw_atcd) txt_opt_hw_atcd, (select atcd_nm from cm_cd_attr where cd = '00C0' and atcd = a.pc_cab_atcd) txt_pc_cab_atcd FROM ( SELECT b.*,(case when b.cd='0091' then b.atcd else '' end) currency_atch,(CASE WHEN b.cd='0091' AND b.atcd_ox='O' THEN b.atcd ELSE '' END) fitness,(CASE WHEN b.cd='0091' THEN b.atcd_ox ELSE '' END) fitness_ox,(case when b.cd='0092' then b.atcd else '' end) serial_currency_atch,(CASE WHEN b.cd='0092' AND b.atcd_ox='O' THEN b.atcd ELSE '' END) srl_fitness,(CASE WHEN b.cd='0092' THEN b.atcd_ox ELSE '' END) srl_fitness_ox,(case when b.cd='00A0' then b.atcd else '' end) opt_hw_atcd,(case when b.cd='00C0' then b.atcd else '' end) pc_cab_atcd FROM om_ord_eqp a, om_ord_eqp_dtl b WHERE a.pi_no = b.pi_no AND a.po_no = b.po_no AND a.pi_no = '150002bg'		AND a.po_no = 27) a, om_ord_inf b WHERE a.pi_no = b.pi_no order by cd, atcd
DEBUG - 2015-03-22 04:06:24 --> INSERT INTO om_sndmail(pi_no, wrk_tp_atcd, sndmail_atcd, auth_grp_cd, sender_email, sender_eng_nm, title, ctnt, crt_dt, crt_uid) VALUES ('150002bg','00700110', '00700111', 'UD', 'kpbaek@localhost', (SELECT dealer_nm FROM om_dealer   WHERE dealer_uid='sofia@ubs-bg.com'), (select concat(atcd_nm,' - ',(select cmpy_nm from om_dealer where dealer_uid='sofia@ubs-bg.com')) from cm_cd_attr where cd = '0071' and atcd = '00700111'), '', now(), 'sofia@ubs-bg.com')
DEBUG - 2015-03-22 04:06:24 --> sql3:INSERT INTO om_sndmail_dtl (sndmail_seq, email_from, email_to, rcpnt_tp_atcd, snd_yn, crt_dt, crt_uid) SELECT 208, 'safe@safeleader.esy.es', (select usr_email from om_user where uid = a.dealer_uid), '00100010' rcpnt_tp_atcd, 'N', now(), 'sofia@ubs-bg.com' FROM om_dealer a, om_ord_inf b WHERE a.dealer_seq = b.dealer_seq AND b.pi_no = '150002bg' UNION SELECT 208, 'kpbaek@localhost', (select team_email from om_team where team_atcd = '00600SL0') email_to, '00100040' rcpnt_tp_atcd, 'N', now(), 'sofia@ubs-bg.com'
DEBUG - 2015-03-22 04:06:24 --> File loaded: application/views//common/crtSndMail.php
DEBUG - 2015-03-22 04:06:24 --> Final output sent to browser
DEBUG - 2015-03-22 04:06:24 --> Total execution time: 0.3370
DEBUG - 2015-03-22 04:06:24 --> Config Class Initialized
DEBUG - 2015-03-22 04:06:24 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:06:24 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:06:24 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:06:24 --> URI Class Initialized
DEBUG - 2015-03-22 04:06:24 --> Router Class Initialized
DEBUG - 2015-03-22 04:06:24 --> Output Class Initialized
DEBUG - 2015-03-22 04:06:24 --> Security Class Initialized
DEBUG - 2015-03-22 04:06:24 --> Input Class Initialized
DEBUG - 2015-03-22 04:06:24 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:06:24 --> Language Class Initialized
DEBUG - 2015-03-22 04:06:24 --> Loader Class Initialized
DEBUG - 2015-03-22 04:06:24 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:06:24 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:06:24 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:06:24 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:06:24 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:06:25 --> Controller Class Initialized
DEBUG - 2015-03-22 04:06:25 --> SELECT a.pi_no, a.sndmail_seq, a.wrk_tp_atcd, a.sender_email, a.title, a.ctnt, email_from, email_to, snd_yn, b.snd_no, b.rcpnt_tp_atcd, b.rcpnt_team_atcd,(select usr_nm from om_user where uid = a.sender_email) sender_nm,(select usr_nm from om_user where uid = b.email_to) rcpnt_nm FROM om_sndmail a, om_sndmail_dtl b WHERE a.sndmail_seq = b.sndmail_seq and a.sndmail_seq=208 and snd_yn='N'
DEBUG - 2015-03-22 04:06:25 --> File loaded: application/views//common/sndMailResult.php
DEBUG - 2015-03-22 04:06:25 --> Final output sent to browser
DEBUG - 2015-03-22 04:06:25 --> Total execution time: 0.5750
DEBUG - 2015-03-22 04:15:09 --> Config Class Initialized
DEBUG - 2015-03-22 04:15:09 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:15:09 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:15:09 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:15:09 --> URI Class Initialized
DEBUG - 2015-03-22 04:15:09 --> Router Class Initialized
DEBUG - 2015-03-22 04:15:09 --> Output Class Initialized
DEBUG - 2015-03-22 04:15:09 --> Security Class Initialized
DEBUG - 2015-03-22 04:15:09 --> Input Class Initialized
DEBUG - 2015-03-22 04:15:09 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:15:09 --> Language Class Initialized
DEBUG - 2015-03-22 04:15:09 --> Loader Class Initialized
DEBUG - 2015-03-22 04:15:09 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:15:09 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:15:09 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:15:09 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:15:09 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:15:09 --> Controller Class Initialized
DEBUG - 2015-03-22 04:15:09 --> File loaded: application/views//admin/order/main.php
DEBUG - 2015-03-22 04:15:09 --> Final output sent to browser
DEBUG - 2015-03-22 04:15:09 --> Total execution time: 0.3980
DEBUG - 2015-03-22 04:15:10 --> Config Class Initialized
DEBUG - 2015-03-22 04:15:10 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:15:10 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:15:10 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:15:10 --> URI Class Initialized
DEBUG - 2015-03-22 04:15:10 --> Router Class Initialized
DEBUG - 2015-03-22 04:15:10 --> Output Class Initialized
DEBUG - 2015-03-22 04:15:10 --> Security Class Initialized
DEBUG - 2015-03-22 04:15:10 --> Input Class Initialized
DEBUG - 2015-03-22 04:15:10 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:15:10 --> Language Class Initialized
DEBUG - 2015-03-22 04:15:10 --> Loader Class Initialized
DEBUG - 2015-03-22 04:15:10 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:15:10 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:15:10 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:15:10 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:15:10 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:15:11 --> Controller Class Initialized
DEBUG - 2015-03-22 04:15:11 --> File loaded: application/views//admin/order/tab01.php
DEBUG - 2015-03-22 04:15:11 --> Final output sent to browser
DEBUG - 2015-03-22 04:15:11 --> Total execution time: 0.3330
DEBUG - 2015-03-22 04:15:11 --> Config Class Initialized
DEBUG - 2015-03-22 04:15:11 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:15:11 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:15:11 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:15:11 --> URI Class Initialized
DEBUG - 2015-03-22 04:15:11 --> Router Class Initialized
DEBUG - 2015-03-22 04:15:11 --> Output Class Initialized
DEBUG - 2015-03-22 04:15:11 --> Security Class Initialized
DEBUG - 2015-03-22 04:15:11 --> Input Class Initialized
DEBUG - 2015-03-22 04:15:11 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:15:11 --> Language Class Initialized
DEBUG - 2015-03-22 04:15:11 --> Loader Class Initialized
DEBUG - 2015-03-22 04:15:11 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:15:11 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:15:11 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:15:11 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:15:11 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:15:11 --> Controller Class Initialized
DEBUG - 2015-03-22 04:15:11 --> File loaded: application/views//common/user/viewDealer.php
DEBUG - 2015-03-22 04:15:11 --> Final output sent to browser
DEBUG - 2015-03-22 04:15:11 --> Total execution time: 0.2880
DEBUG - 2015-03-22 04:15:11 --> Config Class Initialized
DEBUG - 2015-03-22 04:15:11 --> Config Class Initialized
DEBUG - 2015-03-22 04:15:11 --> Config Class Initialized
DEBUG - 2015-03-22 04:15:11 --> Config Class Initialized
DEBUG - 2015-03-22 04:15:11 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:15:11 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:15:11 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:15:11 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:15:11 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:15:11 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:15:12 --> Config Class Initialized
DEBUG - 2015-03-22 04:15:12 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:15:12 --> Config Class Initialized
DEBUG - 2015-03-22 04:15:12 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:15:12 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:15:12 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:15:12 --> URI Class Initialized
DEBUG - 2015-03-22 04:15:12 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:15:12 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:15:12 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:15:12 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:15:12 --> Router Class Initialized
DEBUG - 2015-03-22 04:15:12 --> URI Class Initialized
DEBUG - 2015-03-22 04:15:12 --> URI Class Initialized
DEBUG - 2015-03-22 04:15:12 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:15:12 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:15:12 --> URI Class Initialized
DEBUG - 2015-03-22 04:15:12 --> Router Class Initialized
DEBUG - 2015-03-22 04:15:12 --> Router Class Initialized
DEBUG - 2015-03-22 04:15:12 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:15:12 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:15:12 --> Router Class Initialized
DEBUG - 2015-03-22 04:15:12 --> Output Class Initialized
DEBUG - 2015-03-22 04:15:12 --> Output Class Initialized
DEBUG - 2015-03-22 04:15:12 --> Output Class Initialized
DEBUG - 2015-03-22 04:15:12 --> Output Class Initialized
DEBUG - 2015-03-22 04:15:12 --> Security Class Initialized
DEBUG - 2015-03-22 04:15:12 --> URI Class Initialized
DEBUG - 2015-03-22 04:15:12 --> URI Class Initialized
DEBUG - 2015-03-22 04:15:12 --> Security Class Initialized
DEBUG - 2015-03-22 04:15:12 --> Security Class Initialized
DEBUG - 2015-03-22 04:15:12 --> Security Class Initialized
DEBUG - 2015-03-22 04:15:12 --> Input Class Initialized
DEBUG - 2015-03-22 04:15:12 --> Router Class Initialized
DEBUG - 2015-03-22 04:15:12 --> Input Class Initialized
DEBUG - 2015-03-22 04:15:12 --> Input Class Initialized
DEBUG - 2015-03-22 04:15:12 --> Router Class Initialized
DEBUG - 2015-03-22 04:15:12 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:15:12 --> Input Class Initialized
DEBUG - 2015-03-22 04:15:12 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:15:12 --> Output Class Initialized
DEBUG - 2015-03-22 04:15:12 --> Output Class Initialized
DEBUG - 2015-03-22 04:15:12 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:15:12 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:15:12 --> Language Class Initialized
DEBUG - 2015-03-22 04:15:12 --> Security Class Initialized
DEBUG - 2015-03-22 04:15:12 --> Security Class Initialized
DEBUG - 2015-03-22 04:15:12 --> Language Class Initialized
DEBUG - 2015-03-22 04:15:12 --> Loader Class Initialized
DEBUG - 2015-03-22 04:15:12 --> Input Class Initialized
DEBUG - 2015-03-22 04:15:12 --> Language Class Initialized
DEBUG - 2015-03-22 04:15:12 --> Language Class Initialized
DEBUG - 2015-03-22 04:15:12 --> Loader Class Initialized
DEBUG - 2015-03-22 04:15:12 --> Input Class Initialized
DEBUG - 2015-03-22 04:15:12 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:15:12 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:15:12 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:15:12 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:15:12 --> Loader Class Initialized
DEBUG - 2015-03-22 04:15:12 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:15:12 --> Language Class Initialized
DEBUG - 2015-03-22 04:15:12 --> Loader Class Initialized
DEBUG - 2015-03-22 04:15:12 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:15:12 --> Language Class Initialized
DEBUG - 2015-03-22 04:15:12 --> Loader Class Initialized
DEBUG - 2015-03-22 04:15:12 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:15:12 --> Loader Class Initialized
DEBUG - 2015-03-22 04:15:12 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:15:12 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:15:12 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:15:12 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:15:12 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:15:12 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:15:12 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:15:12 --> Config Class Initialized
DEBUG - 2015-03-22 04:15:12 --> Controller Class Initialized
DEBUG - 2015-03-22 04:15:12 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:15:12 --> Config Class Initialized
DEBUG - 2015-03-22 04:15:12 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:15:12 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:15:12 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:15:12 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:15:12 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:15:12 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:15:12 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:15:12 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:15:12 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:15:12 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:15:12 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 04:15:12 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:15:12 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:15:12 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:15:12 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:15:12 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:15:13 --> Controller Class Initialized
DEBUG - 2015-03-22 04:15:13 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:15:13 --> Final output sent to browser
DEBUG - 2015-03-22 04:15:13 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:15:13 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:15:13 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:15:13 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:15:13 --> Total execution time: 1.1391
DEBUG - 2015-03-22 04:15:13 --> Controller Class Initialized
DEBUG - 2015-03-22 04:15:13 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:15:13 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:15:13 --> File loaded: application/views//common/listModel.php
DEBUG - 2015-03-22 04:15:13 --> URI Class Initialized
DEBUG - 2015-03-22 04:15:13 --> URI Class Initialized
DEBUG - 2015-03-22 04:15:13 --> Final output sent to browser
DEBUG - 2015-03-22 04:15:13 --> Config Class Initialized
DEBUG - 2015-03-22 04:15:13 --> Controller Class Initialized
DEBUG - 2015-03-22 04:15:13 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:15:13 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:15:13 --> Controller Class Initialized
DEBUG - 2015-03-22 04:15:13 --> Router Class Initialized
DEBUG - 2015-03-22 04:15:13 --> Total execution time: 1.3201
DEBUG - 2015-03-22 04:15:13 --> Router Class Initialized
DEBUG - 2015-03-22 04:15:13 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 04:15:13 --> Output Class Initialized
DEBUG - 2015-03-22 04:15:13 --> Controller Class Initialized
DEBUG - 2015-03-22 04:15:13 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:15:13 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 04:15:13 --> Security Class Initialized
DEBUG - 2015-03-22 04:15:13 --> Config Class Initialized
DEBUG - 2015-03-22 04:15:13 --> Final output sent to browser
DEBUG - 2015-03-22 04:15:13 --> Final output sent to browser
DEBUG - 2015-03-22 04:15:13 --> File loaded: application/views//common/user/listUserPiNo.php
DEBUG - 2015-03-22 04:15:13 --> Output Class Initialized
DEBUG - 2015-03-22 04:15:13 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:15:13 --> Input Class Initialized
DEBUG - 2015-03-22 04:15:13 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:15:13 --> Total execution time: 1.4401
DEBUG - 2015-03-22 04:15:13 --> Total execution time: 1.4151
DEBUG - 2015-03-22 04:15:13 --> Final output sent to browser
DEBUG - 2015-03-22 04:15:13 --> Security Class Initialized
DEBUG - 2015-03-22 04:15:13 --> URI Class Initialized
DEBUG - 2015-03-22 04:15:13 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:15:13 --> Total execution time: 1.6431
DEBUG - 2015-03-22 04:15:13 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:15:13 --> Config Class Initialized
DEBUG - 2015-03-22 04:15:13 --> Router Class Initialized
DEBUG - 2015-03-22 04:15:13 --> Input Class Initialized
DEBUG - 2015-03-22 04:15:13 --> Config Class Initialized
DEBUG - 2015-03-22 04:15:13 --> Config Class Initialized
DEBUG - 2015-03-22 04:15:13 --> File loaded: application/views//common/user/listCntry.php
DEBUG - 2015-03-22 04:15:13 --> Language Class Initialized
DEBUG - 2015-03-22 04:15:13 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:15:13 --> Output Class Initialized
DEBUG - 2015-03-22 04:15:13 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:15:13 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:15:13 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:15:13 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:15:13 --> Loader Class Initialized
DEBUG - 2015-03-22 04:15:13 --> Security Class Initialized
DEBUG - 2015-03-22 04:15:13 --> Final output sent to browser
DEBUG - 2015-03-22 04:15:13 --> URI Class Initialized
DEBUG - 2015-03-22 04:15:13 --> Language Class Initialized
DEBUG - 2015-03-22 04:15:13 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:15:13 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:15:13 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:15:13 --> Total execution time: 1.8461
DEBUG - 2015-03-22 04:15:13 --> Router Class Initialized
DEBUG - 2015-03-22 04:15:13 --> Loader Class Initialized
DEBUG - 2015-03-22 04:15:13 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:15:13 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:15:13 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:15:13 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:15:13 --> Output Class Initialized
DEBUG - 2015-03-22 04:15:13 --> Input Class Initialized
DEBUG - 2015-03-22 04:15:13 --> Config Class Initialized
DEBUG - 2015-03-22 04:15:13 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:15:13 --> URI Class Initialized
DEBUG - 2015-03-22 04:15:13 --> Security Class Initialized
DEBUG - 2015-03-22 04:15:14 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:15:14 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:15:14 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:15:14 --> Router Class Initialized
DEBUG - 2015-03-22 04:15:14 --> URI Class Initialized
DEBUG - 2015-03-22 04:15:14 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:15:14 --> URI Class Initialized
DEBUG - 2015-03-22 04:15:14 --> Language Class Initialized
DEBUG - 2015-03-22 04:15:14 --> Input Class Initialized
DEBUG - 2015-03-22 04:15:14 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:15:14 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:15:14 --> Router Class Initialized
DEBUG - 2015-03-22 04:15:14 --> Router Class Initialized
DEBUG - 2015-03-22 04:15:14 --> Output Class Initialized
DEBUG - 2015-03-22 04:15:14 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:15:14 --> Loader Class Initialized
DEBUG - 2015-03-22 04:15:14 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:15:14 --> Output Class Initialized
DEBUG - 2015-03-22 04:15:14 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:15:14 --> Security Class Initialized
DEBUG - 2015-03-22 04:15:14 --> Language Class Initialized
DEBUG - 2015-03-22 04:15:14 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:15:14 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:15:14 --> Output Class Initialized
DEBUG - 2015-03-22 04:15:14 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:15:14 --> URI Class Initialized
DEBUG - 2015-03-22 04:15:14 --> Loader Class Initialized
DEBUG - 2015-03-22 04:15:14 --> Security Class Initialized
DEBUG - 2015-03-22 04:15:14 --> Input Class Initialized
DEBUG - 2015-03-22 04:15:14 --> Security Class Initialized
DEBUG - 2015-03-22 04:15:14 --> Router Class Initialized
DEBUG - 2015-03-22 04:15:14 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:15:14 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:15:14 --> Controller Class Initialized
DEBUG - 2015-03-22 04:15:14 --> Input Class Initialized
DEBUG - 2015-03-22 04:15:14 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:15:14 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:15:14 --> Input Class Initialized
DEBUG - 2015-03-22 04:15:14 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:15:14 --> Output Class Initialized
DEBUG - 2015-03-22 04:15:14 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:15:14 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 04:15:14 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:15:14 --> Language Class Initialized
DEBUG - 2015-03-22 04:15:14 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:15:14 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:15:14 --> Final output sent to browser
DEBUG - 2015-03-22 04:15:14 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:15:14 --> Security Class Initialized
DEBUG - 2015-03-22 04:15:14 --> Language Class Initialized
DEBUG - 2015-03-22 04:15:14 --> Language Class Initialized
DEBUG - 2015-03-22 04:15:14 --> Total execution time: 1.8121
DEBUG - 2015-03-22 04:15:14 --> Controller Class Initialized
DEBUG - 2015-03-22 04:15:14 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:15:14 --> Loader Class Initialized
DEBUG - 2015-03-22 04:15:14 --> Input Class Initialized
DEBUG - 2015-03-22 04:15:14 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:15:14 --> Loader Class Initialized
DEBUG - 2015-03-22 04:15:14 --> Loader Class Initialized
DEBUG - 2015-03-22 04:15:14 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 04:15:14 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:15:14 --> Final output sent to browser
DEBUG - 2015-03-22 04:15:14 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:15:14 --> Controller Class Initialized
DEBUG - 2015-03-22 04:15:14 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:15:14 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:15:14 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:15:14 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:15:14 --> Total execution time: 1.9261
DEBUG - 2015-03-22 04:15:14 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:15:14 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 04:15:14 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:15:14 --> Language Class Initialized
DEBUG - 2015-03-22 04:15:14 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:15:14 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:15:14 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:15:14 --> Final output sent to browser
DEBUG - 2015-03-22 04:15:14 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:15:14 --> Controller Class Initialized
DEBUG - 2015-03-22 04:15:14 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:15:14 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 04:15:14 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:15:14 --> Loader Class Initialized
DEBUG - 2015-03-22 04:15:14 --> Final output sent to browser
DEBUG - 2015-03-22 04:15:15 --> Total execution time: 1.5761
DEBUG - 2015-03-22 04:15:15 --> Total execution time: 1.6201
DEBUG - 2015-03-22 04:15:15 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:15:15 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:15:15 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:15:15 --> Controller Class Initialized
DEBUG - 2015-03-22 04:15:15 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:15:15 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 04:15:15 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:15:15 --> Controller Class Initialized
DEBUG - 2015-03-22 04:15:15 --> Final output sent to browser
DEBUG - 2015-03-22 04:15:15 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:15:15 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:15:15 --> Total execution time: 1.5981
DEBUG - 2015-03-22 04:15:15 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 04:15:15 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:15:15 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:15:15 --> Final output sent to browser
DEBUG - 2015-03-22 04:15:15 --> Controller Class Initialized
DEBUG - 2015-03-22 04:15:15 --> Controller Class Initialized
DEBUG - 2015-03-22 04:15:15 --> Total execution time: 1.6211
DEBUG - 2015-03-22 04:15:15 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 04:15:15 --> File loaded: application/views//common/listCodeImg.php
DEBUG - 2015-03-22 04:15:15 --> Final output sent to browser
DEBUG - 2015-03-22 04:15:15 --> Final output sent to browser
DEBUG - 2015-03-22 04:15:15 --> Total execution time: 1.6741
DEBUG - 2015-03-22 04:15:15 --> Total execution time: 1.4001
DEBUG - 2015-03-22 04:15:25 --> Config Class Initialized
DEBUG - 2015-03-22 04:15:25 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:15:25 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:15:25 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:15:25 --> URI Class Initialized
DEBUG - 2015-03-22 04:15:25 --> Router Class Initialized
DEBUG - 2015-03-22 04:15:25 --> Output Class Initialized
DEBUG - 2015-03-22 04:15:25 --> Security Class Initialized
DEBUG - 2015-03-22 04:15:25 --> Input Class Initialized
DEBUG - 2015-03-22 04:15:25 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:15:25 --> Language Class Initialized
DEBUG - 2015-03-22 04:15:25 --> Loader Class Initialized
DEBUG - 2015-03-22 04:15:25 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:15:25 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:15:25 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:15:25 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:15:25 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:15:25 --> Controller Class Initialized
DEBUG - 2015-03-22 04:15:26 --> File loaded: application/views//admin/order/crtEqpOrder.php
DEBUG - 2015-03-22 04:15:26 --> Final output sent to browser
DEBUG - 2015-03-22 04:15:26 --> Total execution time: 0.4060
DEBUG - 2015-03-22 04:15:26 --> Config Class Initialized
DEBUG - 2015-03-22 04:15:26 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:15:26 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:15:26 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:15:26 --> URI Class Initialized
DEBUG - 2015-03-22 04:15:26 --> Router Class Initialized
DEBUG - 2015-03-22 04:15:26 --> Output Class Initialized
DEBUG - 2015-03-22 04:15:26 --> Security Class Initialized
DEBUG - 2015-03-22 04:15:26 --> Input Class Initialized
DEBUG - 2015-03-22 04:15:26 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:15:26 --> Language Class Initialized
DEBUG - 2015-03-22 04:15:26 --> Loader Class Initialized
DEBUG - 2015-03-22 04:15:26 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:15:26 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:15:26 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:15:26 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:15:26 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:15:26 --> Controller Class Initialized
DEBUG - 2015-03-22 04:15:26 --> readEqpOrder:SELECT a.*, (select atcd_nm from cm_cd_attr where cd = '00B0' and atcd = a.srl_atcd) txt_srl_atcd, (select atcd_nm from cm_cd_attr where cd = '00D0' and atcd = a.rjt_pkt_tp_atcd) txt_rjt_pkt_tp_atcd, (select atcd_nm from cm_cd_attr where cd = '00E0' and atcd = a.pwr_cab_atcd) txt_pwr_cab_atcd, (select atcd_nm from cm_cd_attr where cd = '00F0' and atcd = a.shipped_by_atcd) txt_shipped_by_atcd, (select atcd_nm from cm_cd_attr where cd = '00F1' and atcd = a.courier_atcd) txt_courier_atcd, (select atcd_nm from cm_cd_attr where cd = '00G0' and atcd = a.payment_atcd) txt_payment_atcd, (select atcd_nm from cm_cd_attr where cd = '00H0' and atcd = a.incoterms_atcd) txt_incoterms_atcd, (select atcd_nm from cm_cd_attr where cd = '00L0' and atcd = a.lcd_color_atcd) txt_lcd_color_atcd, (select atcd_nm from cm_cd_attr where cd = '00M0' and atcd = a.lcd_lang_atcd) txt_lcd_lang_atcd, (select cmpy_nm from om_dealer where dealer_seq = a.dealer_seq) cmpy_nm, (select atcd_nm from cm_cd_attr where cd = '0022' and atcd = a.cntry_atcd) txt_cntry_atcd, if(mdl_cd in ('0007','0009'), concat(mdl_nm, concat('R',lan_L),if(a.lcd_color_atcd='00L00002','C','')), if(mdl_cd in ('3000'), concat(mdl_nm, concat('F',rjt_pkt_tp),''),mdl_nm)) txt_mdl_nm, DATE_FORMAT(a.delivery_dt, '%Y-%m-%d') txt_delivery_dt FROM ( SELECT a.*, b.cntry_atcd, b.dealer_seq, b.worker_seq, b.premium_rate, b.tot_amt, b.cnfm_yn, b.cnfm_dt, b.wrk_tp_atcd, b.udt_dt as order_dt, (CASE WHEN a.rjt_pkt_tp_atcd = ('00D00001') THEN 'A'  WHEN a.rjt_pkt_tp_atcd = ('00D00002') THEN 'I' END) rjt_pkt_tp, (SELECT mdl_nm FROM om_mdl WHERE mdl_cd = a.mdl_cd) mdl_nm, (SELECT if(count(*)>0,'L','') FROM om_ord_eqp_dtl where pi_no = a.pi_no and po_no = a.po_no and om_ord_eqp_dtl.atcd = '00A00001') lan_L FROM om_ord_eqp a, om_ord_inf b WHERE a.pi_no = b.pi_no AND a.pi_no = '150003bg' AND a.po_no = 28 ) a
DEBUG - 2015-03-22 04:15:26 --> SELECT b.cntry_atcd, b.dealer_seq, b.worker_seq, b.premium_rate, b.tot_amt, b.cnfm_yn, b.cnfm_dt, b.wrk_tp_atcd, a.*, (select atcd_nm from cm_cd_attr where cd = '0091' and atcd = a.currency_atch) txt_currency_atcd, (select atcd_nm from cm_cd_attr where cd = '0092' and atcd = a.serial_currency_atch) txt_serial_currency_atch, (select atcd_nm from cm_cd_attr where cd = '00A0' and atcd = a.opt_hw_atcd) txt_opt_hw_atcd, (select atcd_nm from cm_cd_attr where cd = '00C0' and atcd = a.pc_cab_atcd) txt_pc_cab_atcd FROM ( SELECT b.*,(case when b.cd='0091' then b.atcd else '' end) currency_atch,(CASE WHEN b.cd='0091' AND b.atcd_ox='O' THEN b.atcd ELSE '' END) fitness,(CASE WHEN b.cd='0091' THEN b.atcd_ox ELSE '' END) fitness_ox,(case when b.cd='0092' then b.atcd else '' end) serial_currency_atch,(CASE WHEN b.cd='0092' AND b.atcd_ox='O' THEN b.atcd ELSE '' END) srl_fitness,(CASE WHEN b.cd='0092' THEN b.atcd_ox ELSE '' END) srl_fitness_ox,(case when b.cd='00A0' then b.atcd else '' end) opt_hw_atcd,(case when b.cd='00C0' then b.atcd else '' end) pc_cab_atcd FROM om_ord_eqp a, om_ord_eqp_dtl b WHERE a.pi_no = b.pi_no AND a.po_no = b.po_no AND a.pi_no = '150003bg'		AND a.po_no = 28) a, om_ord_inf b WHERE a.pi_no = b.pi_no order by cd, atcd
DEBUG - 2015-03-22 04:15:26 --> INSERT INTO om_sndmail(pi_no, wrk_tp_atcd, sndmail_atcd, auth_grp_cd, sender_email, sender_eng_nm, title, ctnt, crt_dt, crt_uid) VALUES ('150003bg','00700110', '00700111', 'UD', 'kpbaek@localhost', (SELECT dealer_nm FROM om_dealer   WHERE dealer_uid='sofia@ubs-bg.com'), (select concat(atcd_nm,' - ',(select cmpy_nm from om_dealer where dealer_uid='sofia@ubs-bg.com')) from cm_cd_attr where cd = '0071' and atcd = '00700111'), '', now(), 'sofia@ubs-bg.com')
DEBUG - 2015-03-22 04:15:26 --> sql3:INSERT INTO om_sndmail_dtl (sndmail_seq, email_from, email_to, rcpnt_tp_atcd, snd_yn, crt_dt, crt_uid) SELECT 209, 'safe@safeleader.esy.es', (select usr_email from om_user where uid = a.dealer_uid), '00100010' rcpnt_tp_atcd, 'N', now(), 'sofia@ubs-bg.com' FROM om_dealer a, om_ord_inf b WHERE a.dealer_seq = b.dealer_seq AND b.pi_no = '150003bg' UNION SELECT 209, 'kpbaek@localhost', (select team_email from om_team where team_atcd = '00600SL0') email_to, '00100040' rcpnt_tp_atcd, 'N', now(), 'sofia@ubs-bg.com'
DEBUG - 2015-03-22 04:15:26 --> File loaded: application/views//common/crtSndMail.php
DEBUG - 2015-03-22 04:15:26 --> Final output sent to browser
DEBUG - 2015-03-22 04:15:26 --> Total execution time: 0.4510
DEBUG - 2015-03-22 04:15:26 --> Config Class Initialized
DEBUG - 2015-03-22 04:15:26 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:15:26 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:15:26 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:15:26 --> URI Class Initialized
DEBUG - 2015-03-22 04:15:26 --> Router Class Initialized
DEBUG - 2015-03-22 04:15:26 --> Output Class Initialized
DEBUG - 2015-03-22 04:15:26 --> Security Class Initialized
DEBUG - 2015-03-22 04:15:26 --> Input Class Initialized
DEBUG - 2015-03-22 04:15:26 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:15:26 --> Language Class Initialized
DEBUG - 2015-03-22 04:15:26 --> Loader Class Initialized
DEBUG - 2015-03-22 04:15:26 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:15:26 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:15:26 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:15:26 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:15:26 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:15:26 --> Controller Class Initialized
DEBUG - 2015-03-22 04:15:26 --> SELECT a.pi_no, a.sndmail_seq, a.wrk_tp_atcd, a.sender_email, a.title, a.ctnt, email_from, email_to, snd_yn, b.snd_no, b.rcpnt_tp_atcd, b.rcpnt_team_atcd,(select usr_nm from om_user where uid = a.sender_email) sender_nm,(select usr_nm from om_user where uid = b.email_to) rcpnt_nm FROM om_sndmail a, om_sndmail_dtl b WHERE a.sndmail_seq = b.sndmail_seq and a.sndmail_seq=209 and snd_yn='N'
DEBUG - 2015-03-22 04:15:27 --> File loaded: application/views//common/sndMailResult.php
DEBUG - 2015-03-22 04:15:27 --> Final output sent to browser
DEBUG - 2015-03-22 04:15:27 --> Total execution time: 0.6830
DEBUG - 2015-03-22 04:18:41 --> Config Class Initialized
DEBUG - 2015-03-22 04:18:41 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:18:41 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:18:41 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:18:41 --> URI Class Initialized
DEBUG - 2015-03-22 04:18:41 --> Router Class Initialized
DEBUG - 2015-03-22 04:18:41 --> Output Class Initialized
DEBUG - 2015-03-22 04:18:41 --> Security Class Initialized
DEBUG - 2015-03-22 04:18:41 --> Input Class Initialized
DEBUG - 2015-03-22 04:18:41 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:18:41 --> Language Class Initialized
DEBUG - 2015-03-22 04:18:41 --> Loader Class Initialized
DEBUG - 2015-03-22 04:18:41 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:18:41 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:18:41 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:18:41 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:18:41 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:18:41 --> Controller Class Initialized
DEBUG - 2015-03-22 04:18:41 --> File loaded: application/views//admin/order/main.php
DEBUG - 2015-03-22 04:18:41 --> Final output sent to browser
DEBUG - 2015-03-22 04:18:41 --> Total execution time: 0.4050
DEBUG - 2015-03-22 04:18:41 --> Config Class Initialized
DEBUG - 2015-03-22 04:18:41 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:18:41 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:18:41 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:18:41 --> URI Class Initialized
DEBUG - 2015-03-22 04:18:42 --> Router Class Initialized
DEBUG - 2015-03-22 04:18:42 --> Output Class Initialized
DEBUG - 2015-03-22 04:18:42 --> Security Class Initialized
DEBUG - 2015-03-22 04:18:42 --> Input Class Initialized
DEBUG - 2015-03-22 04:18:42 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:18:42 --> Language Class Initialized
DEBUG - 2015-03-22 04:18:42 --> Loader Class Initialized
DEBUG - 2015-03-22 04:18:42 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:18:42 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:18:42 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:18:42 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:18:42 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:18:42 --> Controller Class Initialized
DEBUG - 2015-03-22 04:18:42 --> File loaded: application/views//admin/order/tab01.php
DEBUG - 2015-03-22 04:18:42 --> Final output sent to browser
DEBUG - 2015-03-22 04:18:42 --> Total execution time: 0.4140
DEBUG - 2015-03-22 04:18:42 --> Config Class Initialized
DEBUG - 2015-03-22 04:18:42 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:18:42 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:18:42 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:18:42 --> URI Class Initialized
DEBUG - 2015-03-22 04:18:42 --> Router Class Initialized
DEBUG - 2015-03-22 04:18:42 --> Output Class Initialized
DEBUG - 2015-03-22 04:18:42 --> Security Class Initialized
DEBUG - 2015-03-22 04:18:42 --> Input Class Initialized
DEBUG - 2015-03-22 04:18:42 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:18:42 --> Language Class Initialized
DEBUG - 2015-03-22 04:18:42 --> Loader Class Initialized
DEBUG - 2015-03-22 04:18:42 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:18:42 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:18:42 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:18:42 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:18:42 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:18:42 --> Controller Class Initialized
DEBUG - 2015-03-22 04:18:42 --> File loaded: application/views//common/user/viewDealer.php
DEBUG - 2015-03-22 04:18:43 --> Final output sent to browser
DEBUG - 2015-03-22 04:18:43 --> Total execution time: 0.4630
DEBUG - 2015-03-22 04:18:43 --> Config Class Initialized
DEBUG - 2015-03-22 04:18:43 --> Config Class Initialized
DEBUG - 2015-03-22 04:18:43 --> Config Class Initialized
DEBUG - 2015-03-22 04:18:43 --> Config Class Initialized
DEBUG - 2015-03-22 04:18:43 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:18:43 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:18:43 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:18:43 --> Config Class Initialized
DEBUG - 2015-03-22 04:18:43 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:18:43 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:18:43 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:18:43 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:18:43 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:18:43 --> Config Class Initialized
DEBUG - 2015-03-22 04:18:43 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:18:43 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:18:43 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:18:43 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:18:43 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:18:43 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:18:43 --> URI Class Initialized
DEBUG - 2015-03-22 04:18:43 --> URI Class Initialized
DEBUG - 2015-03-22 04:18:43 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:18:43 --> URI Class Initialized
DEBUG - 2015-03-22 04:18:43 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:18:43 --> Router Class Initialized
DEBUG - 2015-03-22 04:18:43 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:18:43 --> Router Class Initialized
DEBUG - 2015-03-22 04:18:43 --> Router Class Initialized
DEBUG - 2015-03-22 04:18:43 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:18:43 --> Output Class Initialized
DEBUG - 2015-03-22 04:18:43 --> Output Class Initialized
DEBUG - 2015-03-22 04:18:43 --> URI Class Initialized
DEBUG - 2015-03-22 04:18:43 --> URI Class Initialized
DEBUG - 2015-03-22 04:18:43 --> Output Class Initialized
DEBUG - 2015-03-22 04:18:43 --> URI Class Initialized
DEBUG - 2015-03-22 04:18:43 --> Security Class Initialized
DEBUG - 2015-03-22 04:18:43 --> Security Class Initialized
DEBUG - 2015-03-22 04:18:43 --> Router Class Initialized
DEBUG - 2015-03-22 04:18:43 --> Security Class Initialized
DEBUG - 2015-03-22 04:18:43 --> Router Class Initialized
DEBUG - 2015-03-22 04:18:43 --> Router Class Initialized
DEBUG - 2015-03-22 04:18:43 --> Input Class Initialized
DEBUG - 2015-03-22 04:18:43 --> Input Class Initialized
DEBUG - 2015-03-22 04:18:43 --> Output Class Initialized
DEBUG - 2015-03-22 04:18:43 --> Output Class Initialized
DEBUG - 2015-03-22 04:18:43 --> Output Class Initialized
DEBUG - 2015-03-22 04:18:43 --> Input Class Initialized
DEBUG - 2015-03-22 04:18:43 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:18:43 --> Security Class Initialized
DEBUG - 2015-03-22 04:18:43 --> Security Class Initialized
DEBUG - 2015-03-22 04:18:43 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:18:43 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:18:43 --> Language Class Initialized
DEBUG - 2015-03-22 04:18:43 --> Input Class Initialized
DEBUG - 2015-03-22 04:18:43 --> Input Class Initialized
DEBUG - 2015-03-22 04:18:43 --> Security Class Initialized
DEBUG - 2015-03-22 04:18:43 --> Language Class Initialized
DEBUG - 2015-03-22 04:18:43 --> Loader Class Initialized
DEBUG - 2015-03-22 04:18:43 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:18:43 --> Language Class Initialized
DEBUG - 2015-03-22 04:18:43 --> Loader Class Initialized
DEBUG - 2015-03-22 04:18:43 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:18:43 --> Input Class Initialized
DEBUG - 2015-03-22 04:18:43 --> Loader Class Initialized
DEBUG - 2015-03-22 04:18:43 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:18:43 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:18:43 --> Language Class Initialized
DEBUG - 2015-03-22 04:18:43 --> Language Class Initialized
DEBUG - 2015-03-22 04:18:43 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:18:43 --> Config Class Initialized
DEBUG - 2015-03-22 04:18:43 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:18:43 --> Config Class Initialized
DEBUG - 2015-03-22 04:18:43 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:18:43 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:18:43 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:18:43 --> Loader Class Initialized
DEBUG - 2015-03-22 04:18:44 --> Language Class Initialized
DEBUG - 2015-03-22 04:18:44 --> Loader Class Initialized
DEBUG - 2015-03-22 04:18:44 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:18:44 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:18:44 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:18:44 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:18:44 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:18:44 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:18:44 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:18:44 --> Loader Class Initialized
DEBUG - 2015-03-22 04:18:44 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:18:44 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:18:44 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:18:44 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:18:44 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:18:44 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:18:44 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:18:44 --> URI Class Initialized
DEBUG - 2015-03-22 04:18:44 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:18:44 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:18:44 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:18:44 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:18:44 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:18:44 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:18:44 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:18:44 --> Router Class Initialized
DEBUG - 2015-03-22 04:18:44 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:18:44 --> URI Class Initialized
DEBUG - 2015-03-22 04:18:44 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:18:44 --> Controller Class Initialized
DEBUG - 2015-03-22 04:18:44 --> Controller Class Initialized
DEBUG - 2015-03-22 04:18:44 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:18:44 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:18:44 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:18:44 --> Output Class Initialized
DEBUG - 2015-03-22 04:18:44 --> Controller Class Initialized
DEBUG - 2015-03-22 04:18:44 --> Router Class Initialized
DEBUG - 2015-03-22 04:18:44 --> Config Class Initialized
DEBUG - 2015-03-22 04:18:44 --> File loaded: application/views//common/user/listCntry.php
DEBUG - 2015-03-22 04:18:44 --> Config Class Initialized
DEBUG - 2015-03-22 04:18:44 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 04:18:44 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:18:44 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:18:44 --> Security Class Initialized
DEBUG - 2015-03-22 04:18:44 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:18:44 --> File loaded: application/views//common/listModel.php
DEBUG - 2015-03-22 04:18:44 --> Final output sent to browser
DEBUG - 2015-03-22 04:18:44 --> Output Class Initialized
DEBUG - 2015-03-22 04:18:44 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:18:44 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:18:44 --> Final output sent to browser
DEBUG - 2015-03-22 04:18:44 --> Controller Class Initialized
DEBUG - 2015-03-22 04:18:44 --> Input Class Initialized
DEBUG - 2015-03-22 04:18:44 --> Controller Class Initialized
DEBUG - 2015-03-22 04:18:44 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:18:44 --> Final output sent to browser
DEBUG - 2015-03-22 04:18:44 --> Total execution time: 1.5251
DEBUG - 2015-03-22 04:18:44 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:18:44 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 04:18:44 --> Security Class Initialized
DEBUG - 2015-03-22 04:18:44 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:18:44 --> Total execution time: 1.5721
DEBUG - 2015-03-22 04:18:44 --> Controller Class Initialized
DEBUG - 2015-03-22 04:18:44 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:18:44 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 04:18:44 --> Final output sent to browser
DEBUG - 2015-03-22 04:18:44 --> Language Class Initialized
DEBUG - 2015-03-22 04:18:44 --> Input Class Initialized
DEBUG - 2015-03-22 04:18:44 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:18:44 --> File loaded: application/views//common/user/listUserPiNo.php
DEBUG - 2015-03-22 04:18:44 --> Config Class Initialized
DEBUG - 2015-03-22 04:18:44 --> Config Class Initialized
DEBUG - 2015-03-22 04:18:44 --> Total execution time: 1.5941
DEBUG - 2015-03-22 04:18:44 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:18:44 --> Total execution time: 1.5591
DEBUG - 2015-03-22 04:18:44 --> Final output sent to browser
DEBUG - 2015-03-22 04:18:44 --> URI Class Initialized
DEBUG - 2015-03-22 04:18:44 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:18:44 --> Final output sent to browser
DEBUG - 2015-03-22 04:18:44 --> Loader Class Initialized
DEBUG - 2015-03-22 04:18:44 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:18:44 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:18:45 --> URI Class Initialized
DEBUG - 2015-03-22 04:18:45 --> Config Class Initialized
DEBUG - 2015-03-22 04:18:45 --> Config Class Initialized
DEBUG - 2015-03-22 04:18:45 --> Total execution time: 1.7661
DEBUG - 2015-03-22 04:18:45 --> Router Class Initialized
DEBUG - 2015-03-22 04:18:45 --> Language Class Initialized
DEBUG - 2015-03-22 04:18:45 --> Total execution time: 1.8211
DEBUG - 2015-03-22 04:18:45 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:18:45 --> Router Class Initialized
DEBUG - 2015-03-22 04:18:45 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:18:45 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:18:45 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:18:45 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:18:45 --> Output Class Initialized
DEBUG - 2015-03-22 04:18:45 --> Loader Class Initialized
DEBUG - 2015-03-22 04:18:45 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:18:45 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:18:45 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:18:45 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:18:45 --> Output Class Initialized
DEBUG - 2015-03-22 04:18:45 --> Security Class Initialized
DEBUG - 2015-03-22 04:18:45 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:18:45 --> URI Class Initialized
DEBUG - 2015-03-22 04:18:45 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:18:45 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:18:45 --> URI Class Initialized
DEBUG - 2015-03-22 04:18:45 --> Security Class Initialized
DEBUG - 2015-03-22 04:18:45 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:18:45 --> Input Class Initialized
DEBUG - 2015-03-22 04:18:45 --> Router Class Initialized
DEBUG - 2015-03-22 04:18:45 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:18:45 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:18:45 --> Router Class Initialized
DEBUG - 2015-03-22 04:18:45 --> Input Class Initialized
DEBUG - 2015-03-22 04:18:45 --> URI Class Initialized
DEBUG - 2015-03-22 04:18:45 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:18:45 --> Output Class Initialized
DEBUG - 2015-03-22 04:18:45 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:18:45 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:18:45 --> URI Class Initialized
DEBUG - 2015-03-22 04:18:45 --> Security Class Initialized
DEBUG - 2015-03-22 04:18:45 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:18:45 --> Router Class Initialized
DEBUG - 2015-03-22 04:18:45 --> Output Class Initialized
DEBUG - 2015-03-22 04:18:45 --> Language Class Initialized
DEBUG - 2015-03-22 04:18:45 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:18:45 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:18:45 --> Language Class Initialized
DEBUG - 2015-03-22 04:18:45 --> Input Class Initialized
DEBUG - 2015-03-22 04:18:45 --> Router Class Initialized
DEBUG - 2015-03-22 04:18:45 --> Output Class Initialized
DEBUG - 2015-03-22 04:18:45 --> Security Class Initialized
DEBUG - 2015-03-22 04:18:45 --> Loader Class Initialized
DEBUG - 2015-03-22 04:18:45 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:18:46 --> Loader Class Initialized
DEBUG - 2015-03-22 04:18:46 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:18:46 --> Controller Class Initialized
DEBUG - 2015-03-22 04:18:46 --> Output Class Initialized
DEBUG - 2015-03-22 04:18:46 --> Security Class Initialized
DEBUG - 2015-03-22 04:18:46 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:18:46 --> Controller Class Initialized
DEBUG - 2015-03-22 04:18:46 --> Input Class Initialized
DEBUG - 2015-03-22 04:18:46 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 04:18:46 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:18:46 --> Language Class Initialized
DEBUG - 2015-03-22 04:18:46 --> Security Class Initialized
DEBUG - 2015-03-22 04:18:46 --> Input Class Initialized
DEBUG - 2015-03-22 04:18:46 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 04:18:46 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:18:46 --> Final output sent to browser
DEBUG - 2015-03-22 04:18:46 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:18:46 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:18:46 --> Loader Class Initialized
DEBUG - 2015-03-22 04:18:46 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:18:46 --> Input Class Initialized
DEBUG - 2015-03-22 04:18:46 --> Final output sent to browser
DEBUG - 2015-03-22 04:18:46 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:18:46 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:18:46 --> Language Class Initialized
DEBUG - 2015-03-22 04:18:46 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:18:46 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:18:46 --> Total execution time: 2.3541
DEBUG - 2015-03-22 04:18:46 --> Language Class Initialized
DEBUG - 2015-03-22 04:18:46 --> Total execution time: 2.4351
DEBUG - 2015-03-22 04:18:46 --> Language Class Initialized
DEBUG - 2015-03-22 04:18:46 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:18:46 --> Loader Class Initialized
DEBUG - 2015-03-22 04:18:46 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:18:46 --> Loader Class Initialized
DEBUG - 2015-03-22 04:18:46 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:18:46 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:18:46 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:18:46 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:18:46 --> Loader Class Initialized
DEBUG - 2015-03-22 04:18:46 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:18:46 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:18:46 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:18:46 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:18:46 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:18:46 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:18:46 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:18:46 --> Controller Class Initialized
DEBUG - 2015-03-22 04:18:46 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:18:46 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:18:46 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:18:46 --> Controller Class Initialized
DEBUG - 2015-03-22 04:18:46 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:18:46 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:18:46 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 04:18:46 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:18:46 --> Controller Class Initialized
DEBUG - 2015-03-22 04:18:46 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 04:18:46 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:18:46 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:18:46 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:18:47 --> Final output sent to browser
DEBUG - 2015-03-22 04:18:47 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 04:18:47 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:18:47 --> Controller Class Initialized
DEBUG - 2015-03-22 04:18:47 --> Final output sent to browser
DEBUG - 2015-03-22 04:18:47 --> Total execution time: 2.4841
DEBUG - 2015-03-22 04:18:47 --> Final output sent to browser
DEBUG - 2015-03-22 04:18:47 --> Controller Class Initialized
DEBUG - 2015-03-22 04:18:47 --> Total execution time: 2.2261
DEBUG - 2015-03-22 04:18:47 --> Controller Class Initialized
DEBUG - 2015-03-22 04:18:47 --> Total execution time: 2.5271
DEBUG - 2015-03-22 04:18:47 --> File loaded: application/views//common/listCodeImg.php
DEBUG - 2015-03-22 04:18:47 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 04:18:47 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 04:18:47 --> Final output sent to browser
DEBUG - 2015-03-22 04:18:47 --> Final output sent to browser
DEBUG - 2015-03-22 04:18:47 --> Final output sent to browser
DEBUG - 2015-03-22 04:18:47 --> Total execution time: 2.3901
DEBUG - 2015-03-22 04:18:47 --> Total execution time: 2.2521
DEBUG - 2015-03-22 04:18:47 --> Total execution time: 2.2111
DEBUG - 2015-03-22 04:18:58 --> Config Class Initialized
DEBUG - 2015-03-22 04:18:58 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:18:58 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:18:58 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:18:58 --> URI Class Initialized
DEBUG - 2015-03-22 04:18:58 --> Router Class Initialized
DEBUG - 2015-03-22 04:18:58 --> Output Class Initialized
DEBUG - 2015-03-22 04:18:58 --> Security Class Initialized
DEBUG - 2015-03-22 04:18:58 --> Input Class Initialized
DEBUG - 2015-03-22 04:18:58 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:18:58 --> Language Class Initialized
DEBUG - 2015-03-22 04:18:58 --> Loader Class Initialized
DEBUG - 2015-03-22 04:18:58 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:18:58 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:18:58 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:18:58 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:18:58 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:18:58 --> Controller Class Initialized
DEBUG - 2015-03-22 04:18:58 --> File loaded: application/views//admin/order/crtEqpOrder.php
DEBUG - 2015-03-22 04:18:58 --> Final output sent to browser
DEBUG - 2015-03-22 04:18:58 --> Total execution time: 0.5640
DEBUG - 2015-03-22 04:18:58 --> Config Class Initialized
DEBUG - 2015-03-22 04:18:58 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:18:58 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:18:58 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:18:58 --> URI Class Initialized
DEBUG - 2015-03-22 04:18:58 --> Router Class Initialized
DEBUG - 2015-03-22 04:18:58 --> Output Class Initialized
DEBUG - 2015-03-22 04:18:58 --> Security Class Initialized
DEBUG - 2015-03-22 04:18:58 --> Input Class Initialized
DEBUG - 2015-03-22 04:18:58 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:18:59 --> Language Class Initialized
DEBUG - 2015-03-22 04:18:59 --> Loader Class Initialized
DEBUG - 2015-03-22 04:18:59 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:18:59 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:18:59 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:18:59 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:18:59 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:18:59 --> Controller Class Initialized
DEBUG - 2015-03-22 04:18:59 --> readEqpOrder:SELECT a.*, (select atcd_nm from cm_cd_attr where cd = '00B0' and atcd = a.srl_atcd) txt_srl_atcd, (select atcd_nm from cm_cd_attr where cd = '00D0' and atcd = a.rjt_pkt_tp_atcd) txt_rjt_pkt_tp_atcd, (select atcd_nm from cm_cd_attr where cd = '00E0' and atcd = a.pwr_cab_atcd) txt_pwr_cab_atcd, (select atcd_nm from cm_cd_attr where cd = '00F0' and atcd = a.shipped_by_atcd) txt_shipped_by_atcd, (select atcd_nm from cm_cd_attr where cd = '00F1' and atcd = a.courier_atcd) txt_courier_atcd, (select atcd_nm from cm_cd_attr where cd = '00G0' and atcd = a.payment_atcd) txt_payment_atcd, (select atcd_nm from cm_cd_attr where cd = '00H0' and atcd = a.incoterms_atcd) txt_incoterms_atcd, (select atcd_nm from cm_cd_attr where cd = '00L0' and atcd = a.lcd_color_atcd) txt_lcd_color_atcd, (select atcd_nm from cm_cd_attr where cd = '00M0' and atcd = a.lcd_lang_atcd) txt_lcd_lang_atcd, (select cmpy_nm from om_dealer where dealer_seq = a.dealer_seq) cmpy_nm, (select atcd_nm from cm_cd_attr where cd = '0022' and atcd = a.cntry_atcd) txt_cntry_atcd, if(mdl_cd in ('0007','0009'), concat(mdl_nm, concat('R',lan_L),if(a.lcd_color_atcd='00L00002','C','')), if(mdl_cd in ('3000'), concat(mdl_nm, concat('F',rjt_pkt_tp),''),mdl_nm)) txt_mdl_nm, DATE_FORMAT(a.delivery_dt, '%Y-%m-%d') txt_delivery_dt FROM ( SELECT a.*, b.cntry_atcd, b.dealer_seq, b.worker_seq, b.premium_rate, b.tot_amt, b.cnfm_yn, b.cnfm_dt, b.wrk_tp_atcd, b.udt_dt as order_dt, (CASE WHEN a.rjt_pkt_tp_atcd = ('00D00001') THEN 'A'  WHEN a.rjt_pkt_tp_atcd = ('00D00002') THEN 'I' END) rjt_pkt_tp, (SELECT mdl_nm FROM om_mdl WHERE mdl_cd = a.mdl_cd) mdl_nm, (SELECT if(count(*)>0,'L','') FROM om_ord_eqp_dtl where pi_no = a.pi_no and po_no = a.po_no and om_ord_eqp_dtl.atcd = '00A00001') lan_L FROM om_ord_eqp a, om_ord_inf b WHERE a.pi_no = b.pi_no AND a.pi_no = '150004bg' AND a.po_no = 29 ) a
DEBUG - 2015-03-22 04:18:59 --> SELECT b.cntry_atcd, b.dealer_seq, b.worker_seq, b.premium_rate, b.tot_amt, b.cnfm_yn, b.cnfm_dt, b.wrk_tp_atcd, a.*, (select atcd_nm from cm_cd_attr where cd = '0091' and atcd = a.currency_atch) txt_currency_atcd, (select atcd_nm from cm_cd_attr where cd = '0092' and atcd = a.serial_currency_atch) txt_serial_currency_atch, (select atcd_nm from cm_cd_attr where cd = '00A0' and atcd = a.opt_hw_atcd) txt_opt_hw_atcd, (select atcd_nm from cm_cd_attr where cd = '00C0' and atcd = a.pc_cab_atcd) txt_pc_cab_atcd FROM ( SELECT b.*,(case when b.cd='0091' then b.atcd else '' end) currency_atch,(CASE WHEN b.cd='0091' AND b.atcd_ox='O' THEN b.atcd ELSE '' END) fitness,(CASE WHEN b.cd='0091' THEN b.atcd_ox ELSE '' END) fitness_ox,(case when b.cd='0092' then b.atcd else '' end) serial_currency_atch,(CASE WHEN b.cd='0092' AND b.atcd_ox='O' THEN b.atcd ELSE '' END) srl_fitness,(CASE WHEN b.cd='0092' THEN b.atcd_ox ELSE '' END) srl_fitness_ox,(case when b.cd='00A0' then b.atcd else '' end) opt_hw_atcd,(case when b.cd='00C0' then b.atcd else '' end) pc_cab_atcd FROM om_ord_eqp a, om_ord_eqp_dtl b WHERE a.pi_no = b.pi_no AND a.po_no = b.po_no AND a.pi_no = '150004bg'		AND a.po_no = 29) a, om_ord_inf b WHERE a.pi_no = b.pi_no order by cd, atcd
DEBUG - 2015-03-22 04:18:59 --> INSERT INTO om_sndmail(pi_no, wrk_tp_atcd, sndmail_atcd, auth_grp_cd, sender_email, sender_eng_nm, title, ctnt, crt_dt, crt_uid) VALUES ('150004bg','00700110', '00700111', 'UD', 'kpbaek@localhost', (SELECT dealer_nm FROM om_dealer   WHERE dealer_uid='sofia@ubs-bg.com'), (select concat(atcd_nm,' - ',(select cmpy_nm from om_dealer where dealer_uid='sofia@ubs-bg.com')) from cm_cd_attr where cd = '0071' and atcd = '00700111'), '', now(), 'sofia@ubs-bg.com')
DEBUG - 2015-03-22 04:18:59 --> sql3:INSERT INTO om_sndmail_dtl (sndmail_seq, email_from, email_to, rcpnt_tp_atcd, snd_yn, crt_dt, crt_uid) SELECT 210, 'safe@safeleader.esy.es', (select usr_email from om_user where uid = a.dealer_uid), '00100010' rcpnt_tp_atcd, 'N', now(), 'sofia@ubs-bg.com' FROM om_dealer a, om_ord_inf b WHERE a.dealer_seq = b.dealer_seq AND b.pi_no = '150004bg' UNION SELECT 210, 'kpbaek@localhost', (select team_email from om_team where team_atcd = '00600SL0') email_to, '00100040' rcpnt_tp_atcd, 'N', now(), 'sofia@ubs-bg.com'
DEBUG - 2015-03-22 04:18:59 --> File loaded: application/views//common/crtSndMail.php
DEBUG - 2015-03-22 04:18:59 --> Final output sent to browser
DEBUG - 2015-03-22 04:18:59 --> Total execution time: 0.6480
DEBUG - 2015-03-22 04:18:59 --> Config Class Initialized
DEBUG - 2015-03-22 04:18:59 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:18:59 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:18:59 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:18:59 --> URI Class Initialized
DEBUG - 2015-03-22 04:18:59 --> Router Class Initialized
DEBUG - 2015-03-22 04:18:59 --> Output Class Initialized
DEBUG - 2015-03-22 04:18:59 --> Security Class Initialized
DEBUG - 2015-03-22 04:18:59 --> Input Class Initialized
DEBUG - 2015-03-22 04:18:59 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:18:59 --> Language Class Initialized
DEBUG - 2015-03-22 04:18:59 --> Loader Class Initialized
DEBUG - 2015-03-22 04:18:59 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:18:59 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:18:59 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:18:59 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:18:59 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:18:59 --> Controller Class Initialized
DEBUG - 2015-03-22 04:18:59 --> SELECT a.pi_no, a.sndmail_seq, a.wrk_tp_atcd, a.sender_email, a.title, a.ctnt, email_from, email_to, snd_yn, b.snd_no, b.rcpnt_tp_atcd, b.rcpnt_team_atcd,(select usr_nm from om_user where uid = a.sender_email) sender_nm,(select usr_nm from om_user where uid = b.email_to) rcpnt_nm FROM om_sndmail a, om_sndmail_dtl b WHERE a.sndmail_seq = b.sndmail_seq and a.sndmail_seq=210 and snd_yn='N'
DEBUG - 2015-03-22 04:19:00 --> File loaded: application/views//common/sndMailResult.php
DEBUG - 2015-03-22 04:19:00 --> Final output sent to browser
DEBUG - 2015-03-22 04:19:00 --> Total execution time: 0.6940
DEBUG - 2015-03-22 04:20:52 --> Config Class Initialized
DEBUG - 2015-03-22 04:20:52 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:20:52 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:20:52 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:20:52 --> URI Class Initialized
DEBUG - 2015-03-22 04:20:52 --> Router Class Initialized
DEBUG - 2015-03-22 04:20:52 --> Output Class Initialized
DEBUG - 2015-03-22 04:20:52 --> Security Class Initialized
DEBUG - 2015-03-22 04:20:52 --> Input Class Initialized
DEBUG - 2015-03-22 04:20:52 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:20:52 --> Language Class Initialized
DEBUG - 2015-03-22 04:20:52 --> Loader Class Initialized
DEBUG - 2015-03-22 04:20:52 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:20:52 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:20:52 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:20:52 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:20:52 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:20:52 --> Controller Class Initialized
DEBUG - 2015-03-22 04:20:52 --> File loaded: application/views//admin/order/main.php
DEBUG - 2015-03-22 04:20:52 --> Final output sent to browser
DEBUG - 2015-03-22 04:20:52 --> Total execution time: 0.5460
DEBUG - 2015-03-22 04:20:53 --> Config Class Initialized
DEBUG - 2015-03-22 04:20:53 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:20:53 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:20:53 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:20:53 --> URI Class Initialized
DEBUG - 2015-03-22 04:20:53 --> Router Class Initialized
DEBUG - 2015-03-22 04:20:53 --> Output Class Initialized
DEBUG - 2015-03-22 04:20:53 --> Security Class Initialized
DEBUG - 2015-03-22 04:20:53 --> Input Class Initialized
DEBUG - 2015-03-22 04:20:53 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:20:53 --> Language Class Initialized
DEBUG - 2015-03-22 04:20:53 --> Loader Class Initialized
DEBUG - 2015-03-22 04:20:53 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:20:53 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:20:53 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:20:53 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:20:53 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:20:53 --> Controller Class Initialized
DEBUG - 2015-03-22 04:20:53 --> File loaded: application/views//admin/order/tab01.php
DEBUG - 2015-03-22 04:20:53 --> Final output sent to browser
DEBUG - 2015-03-22 04:20:53 --> Total execution time: 0.4640
DEBUG - 2015-03-22 04:20:53 --> Config Class Initialized
DEBUG - 2015-03-22 04:20:53 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:20:53 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:20:53 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:20:53 --> URI Class Initialized
DEBUG - 2015-03-22 04:20:54 --> Router Class Initialized
DEBUG - 2015-03-22 04:20:54 --> Output Class Initialized
DEBUG - 2015-03-22 04:20:54 --> Security Class Initialized
DEBUG - 2015-03-22 04:20:54 --> Input Class Initialized
DEBUG - 2015-03-22 04:20:54 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:20:54 --> Language Class Initialized
DEBUG - 2015-03-22 04:20:54 --> Loader Class Initialized
DEBUG - 2015-03-22 04:20:54 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:20:54 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:20:54 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:20:54 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:20:54 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:20:54 --> Controller Class Initialized
DEBUG - 2015-03-22 04:20:54 --> File loaded: application/views//common/user/viewDealer.php
DEBUG - 2015-03-22 04:20:54 --> Final output sent to browser
DEBUG - 2015-03-22 04:20:54 --> Total execution time: 0.5820
DEBUG - 2015-03-22 04:20:54 --> Config Class Initialized
DEBUG - 2015-03-22 04:20:54 --> Config Class Initialized
DEBUG - 2015-03-22 04:20:54 --> Config Class Initialized
DEBUG - 2015-03-22 04:20:54 --> Config Class Initialized
DEBUG - 2015-03-22 04:20:54 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:20:54 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:20:54 --> Config Class Initialized
DEBUG - 2015-03-22 04:20:54 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:20:54 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:20:54 --> Config Class Initialized
DEBUG - 2015-03-22 04:20:54 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:20:54 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:20:54 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:20:54 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:20:54 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:20:54 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:20:54 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:20:54 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:20:54 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:20:54 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:20:54 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:20:54 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:20:54 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:20:54 --> URI Class Initialized
DEBUG - 2015-03-22 04:20:54 --> URI Class Initialized
DEBUG - 2015-03-22 04:20:54 --> URI Class Initialized
DEBUG - 2015-03-22 04:20:54 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:20:54 --> URI Class Initialized
DEBUG - 2015-03-22 04:20:54 --> URI Class Initialized
DEBUG - 2015-03-22 04:20:54 --> Router Class Initialized
DEBUG - 2015-03-22 04:20:55 --> Router Class Initialized
DEBUG - 2015-03-22 04:20:55 --> Router Class Initialized
DEBUG - 2015-03-22 04:20:55 --> Router Class Initialized
DEBUG - 2015-03-22 04:20:55 --> URI Class Initialized
DEBUG - 2015-03-22 04:20:55 --> Router Class Initialized
DEBUG - 2015-03-22 04:20:55 --> Output Class Initialized
DEBUG - 2015-03-22 04:20:55 --> Output Class Initialized
DEBUG - 2015-03-22 04:20:55 --> Output Class Initialized
DEBUG - 2015-03-22 04:20:55 --> Security Class Initialized
DEBUG - 2015-03-22 04:20:55 --> Output Class Initialized
DEBUG - 2015-03-22 04:20:55 --> Output Class Initialized
DEBUG - 2015-03-22 04:20:55 --> Security Class Initialized
DEBUG - 2015-03-22 04:20:55 --> Input Class Initialized
DEBUG - 2015-03-22 04:20:55 --> Router Class Initialized
DEBUG - 2015-03-22 04:20:55 --> Security Class Initialized
DEBUG - 2015-03-22 04:20:55 --> Security Class Initialized
DEBUG - 2015-03-22 04:20:55 --> Security Class Initialized
DEBUG - 2015-03-22 04:20:55 --> Input Class Initialized
DEBUG - 2015-03-22 04:20:55 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:20:55 --> Output Class Initialized
DEBUG - 2015-03-22 04:20:55 --> Input Class Initialized
DEBUG - 2015-03-22 04:20:55 --> Config Class Initialized
DEBUG - 2015-03-22 04:20:55 --> Config Class Initialized
DEBUG - 2015-03-22 04:20:55 --> Input Class Initialized
DEBUG - 2015-03-22 04:20:55 --> Input Class Initialized
DEBUG - 2015-03-22 04:20:55 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:20:55 --> Security Class Initialized
DEBUG - 2015-03-22 04:20:55 --> Language Class Initialized
DEBUG - 2015-03-22 04:20:55 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:20:55 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:20:55 --> Input Class Initialized
DEBUG - 2015-03-22 04:20:55 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:20:55 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:20:55 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:20:55 --> Loader Class Initialized
DEBUG - 2015-03-22 04:20:55 --> Language Class Initialized
DEBUG - 2015-03-22 04:20:55 --> Language Class Initialized
DEBUG - 2015-03-22 04:20:55 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:20:55 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:20:55 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:20:55 --> Language Class Initialized
DEBUG - 2015-03-22 04:20:55 --> Language Class Initialized
DEBUG - 2015-03-22 04:20:55 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:20:55 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:20:55 --> Loader Class Initialized
DEBUG - 2015-03-22 04:20:55 --> Loader Class Initialized
DEBUG - 2015-03-22 04:20:55 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:20:55 --> Language Class Initialized
DEBUG - 2015-03-22 04:20:55 --> Loader Class Initialized
DEBUG - 2015-03-22 04:20:55 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:20:55 --> Loader Class Initialized
DEBUG - 2015-03-22 04:20:55 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:20:55 --> Loader Class Initialized
DEBUG - 2015-03-22 04:20:55 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:20:55 --> URI Class Initialized
DEBUG - 2015-03-22 04:20:55 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:20:55 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:20:55 --> URI Class Initialized
DEBUG - 2015-03-22 04:20:55 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:20:55 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:20:55 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:20:56 --> Router Class Initialized
DEBUG - 2015-03-22 04:20:56 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:20:56 --> Config Class Initialized
DEBUG - 2015-03-22 04:20:56 --> Config Class Initialized
DEBUG - 2015-03-22 04:20:56 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:20:56 --> Router Class Initialized
DEBUG - 2015-03-22 04:20:56 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:20:56 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:20:56 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:20:56 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:20:56 --> Output Class Initialized
DEBUG - 2015-03-22 04:20:56 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:20:56 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:20:56 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:20:56 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:20:56 --> Output Class Initialized
DEBUG - 2015-03-22 04:20:56 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:20:56 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:20:56 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:20:56 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:20:56 --> Security Class Initialized
DEBUG - 2015-03-22 04:20:56 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:20:56 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:20:56 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:20:56 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:20:56 --> Security Class Initialized
DEBUG - 2015-03-22 04:20:56 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:20:56 --> Controller Class Initialized
DEBUG - 2015-03-22 04:20:56 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:20:56 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:20:56 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:20:56 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:20:56 --> Controller Class Initialized
DEBUG - 2015-03-22 04:20:56 --> Input Class Initialized
DEBUG - 2015-03-22 04:20:56 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:20:56 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:20:56 --> Input Class Initialized
DEBUG - 2015-03-22 04:20:56 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:20:56 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 04:20:56 --> Controller Class Initialized
DEBUG - 2015-03-22 04:20:56 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 04:20:56 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:20:56 --> Controller Class Initialized
DEBUG - 2015-03-22 04:20:56 --> Config Class Initialized
DEBUG - 2015-03-22 04:20:56 --> URI Class Initialized
DEBUG - 2015-03-22 04:20:56 --> Config Class Initialized
DEBUG - 2015-03-22 04:20:56 --> Language Class Initialized
DEBUG - 2015-03-22 04:20:56 --> Final output sent to browser
DEBUG - 2015-03-22 04:20:56 --> Final output sent to browser
DEBUG - 2015-03-22 04:20:56 --> Router Class Initialized
DEBUG - 2015-03-22 04:20:56 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:20:56 --> File loaded: application/views//common/listModel.php
DEBUG - 2015-03-22 04:20:56 --> File loaded: application/views//common/user/listUserPiNo.php
DEBUG - 2015-03-22 04:20:56 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:20:56 --> Loader Class Initialized
DEBUG - 2015-03-22 04:20:56 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:20:56 --> Total execution time: 1.9091
DEBUG - 2015-03-22 04:20:56 --> Controller Class Initialized
DEBUG - 2015-03-22 04:20:56 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:20:56 --> Final output sent to browser
DEBUG - 2015-03-22 04:20:56 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:20:56 --> Final output sent to browser
DEBUG - 2015-03-22 04:20:56 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:20:56 --> Total execution time: 2.0641
DEBUG - 2015-03-22 04:20:56 --> Controller Class Initialized
DEBUG - 2015-03-22 04:20:56 --> Total execution time: 2.1111
DEBUG - 2015-03-22 04:20:56 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:20:56 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 04:20:56 --> Config Class Initialized
DEBUG - 2015-03-22 04:20:56 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:20:56 --> File loaded: application/views//common/user/listCntry.php
DEBUG - 2015-03-22 04:20:56 --> Final output sent to browser
DEBUG - 2015-03-22 04:20:56 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:20:56 --> URI Class Initialized
DEBUG - 2015-03-22 04:20:56 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:20:56 --> Total execution time: 2.0041
DEBUG - 2015-03-22 04:20:56 --> Final output sent to browser
DEBUG - 2015-03-22 04:20:56 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:20:56 --> Config Class Initialized
DEBUG - 2015-03-22 04:20:56 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:20:56 --> Language Class Initialized
DEBUG - 2015-03-22 04:20:56 --> Output Class Initialized
DEBUG - 2015-03-22 04:20:56 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:20:56 --> Total execution time: 2.1481
DEBUG - 2015-03-22 04:20:56 --> URI Class Initialized
DEBUG - 2015-03-22 04:20:56 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:20:56 --> Router Class Initialized
DEBUG - 2015-03-22 04:20:56 --> Total execution time: 1.9391
DEBUG - 2015-03-22 04:20:56 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:20:56 --> Router Class Initialized
DEBUG - 2015-03-22 04:20:56 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:20:56 --> Security Class Initialized
DEBUG - 2015-03-22 04:20:56 --> Loader Class Initialized
DEBUG - 2015-03-22 04:20:56 --> Output Class Initialized
DEBUG - 2015-03-22 04:20:56 --> URI Class Initialized
DEBUG - 2015-03-22 04:20:56 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:20:56 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:20:56 --> Output Class Initialized
DEBUG - 2015-03-22 04:20:56 --> Input Class Initialized
DEBUG - 2015-03-22 04:20:57 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:20:57 --> URI Class Initialized
DEBUG - 2015-03-22 04:20:57 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:20:57 --> Security Class Initialized
DEBUG - 2015-03-22 04:20:57 --> Router Class Initialized
DEBUG - 2015-03-22 04:20:57 --> URI Class Initialized
DEBUG - 2015-03-22 04:20:57 --> Controller Class Initialized
DEBUG - 2015-03-22 04:20:57 --> Security Class Initialized
DEBUG - 2015-03-22 04:20:57 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:20:57 --> Router Class Initialized
DEBUG - 2015-03-22 04:20:57 --> Output Class Initialized
DEBUG - 2015-03-22 04:20:57 --> Router Class Initialized
DEBUG - 2015-03-22 04:20:57 --> Input Class Initialized
DEBUG - 2015-03-22 04:20:57 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:20:57 --> Language Class Initialized
DEBUG - 2015-03-22 04:20:57 --> Input Class Initialized
DEBUG - 2015-03-22 04:20:57 --> Output Class Initialized
DEBUG - 2015-03-22 04:20:57 --> Security Class Initialized
DEBUG - 2015-03-22 04:20:57 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 04:20:57 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:20:57 --> Output Class Initialized
DEBUG - 2015-03-22 04:20:57 --> Loader Class Initialized
DEBUG - 2015-03-22 04:20:57 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:20:57 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:20:57 --> Final output sent to browser
DEBUG - 2015-03-22 04:20:57 --> Input Class Initialized
DEBUG - 2015-03-22 04:20:57 --> Language Class Initialized
DEBUG - 2015-03-22 04:20:57 --> Security Class Initialized
DEBUG - 2015-03-22 04:20:57 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:20:57 --> Security Class Initialized
DEBUG - 2015-03-22 04:20:57 --> Language Class Initialized
DEBUG - 2015-03-22 04:20:57 --> Total execution time: 2.0501
DEBUG - 2015-03-22 04:20:57 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:20:57 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:20:57 --> Loader Class Initialized
DEBUG - 2015-03-22 04:20:57 --> Input Class Initialized
DEBUG - 2015-03-22 04:20:57 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:20:57 --> Loader Class Initialized
DEBUG - 2015-03-22 04:20:57 --> Input Class Initialized
DEBUG - 2015-03-22 04:20:57 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:20:57 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:20:57 --> Language Class Initialized
DEBUG - 2015-03-22 04:20:57 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:20:57 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:20:57 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:20:57 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:20:57 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:20:57 --> Loader Class Initialized
DEBUG - 2015-03-22 04:20:57 --> Controller Class Initialized
DEBUG - 2015-03-22 04:20:57 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:20:57 --> Language Class Initialized
DEBUG - 2015-03-22 04:20:57 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:20:57 --> Language Class Initialized
DEBUG - 2015-03-22 04:20:58 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:20:58 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:20:58 --> Loader Class Initialized
DEBUG - 2015-03-22 04:20:58 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:20:58 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 04:20:58 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:20:58 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:20:58 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:20:58 --> Loader Class Initialized
DEBUG - 2015-03-22 04:20:58 --> Final output sent to browser
DEBUG - 2015-03-22 04:20:58 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:20:58 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:20:58 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:20:58 --> Controller Class Initialized
DEBUG - 2015-03-22 04:20:58 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:20:58 --> Total execution time: 2.8312
DEBUG - 2015-03-22 04:20:58 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:20:58 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:20:58 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:20:58 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 04:20:58 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:20:58 --> Controller Class Initialized
DEBUG - 2015-03-22 04:20:58 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:20:58 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:20:58 --> Final output sent to browser
DEBUG - 2015-03-22 04:20:58 --> Controller Class Initialized
DEBUG - 2015-03-22 04:20:58 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:20:58 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 04:20:58 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:20:58 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:20:58 --> Total execution time: 2.4491
DEBUG - 2015-03-22 04:20:58 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 04:20:58 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:20:58 --> Final output sent to browser
DEBUG - 2015-03-22 04:20:58 --> Controller Class Initialized
DEBUG - 2015-03-22 04:20:58 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:20:58 --> Final output sent to browser
DEBUG - 2015-03-22 04:20:58 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:20:58 --> Total execution time: 2.1031
DEBUG - 2015-03-22 04:20:58 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 04:20:58 --> Total execution time: 2.6572
DEBUG - 2015-03-22 04:20:58 --> Controller Class Initialized
DEBUG - 2015-03-22 04:20:58 --> Final output sent to browser
DEBUG - 2015-03-22 04:20:58 --> Controller Class Initialized
DEBUG - 2015-03-22 04:20:58 --> File loaded: application/views//common/listCodeImg.php
DEBUG - 2015-03-22 04:20:58 --> Total execution time: 2.1631
DEBUG - 2015-03-22 04:20:58 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 04:20:58 --> Final output sent to browser
DEBUG - 2015-03-22 04:20:58 --> Final output sent to browser
DEBUG - 2015-03-22 04:20:58 --> Total execution time: 2.2801
DEBUG - 2015-03-22 04:20:59 --> Total execution time: 2.4781
DEBUG - 2015-03-22 04:21:07 --> Config Class Initialized
DEBUG - 2015-03-22 04:21:07 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:21:07 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:21:07 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:21:07 --> URI Class Initialized
DEBUG - 2015-03-22 04:21:07 --> Router Class Initialized
DEBUG - 2015-03-22 04:21:07 --> Output Class Initialized
DEBUG - 2015-03-22 04:21:07 --> Security Class Initialized
DEBUG - 2015-03-22 04:21:07 --> Input Class Initialized
DEBUG - 2015-03-22 04:21:07 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:21:07 --> Language Class Initialized
DEBUG - 2015-03-22 04:21:07 --> Loader Class Initialized
DEBUG - 2015-03-22 04:21:07 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:21:07 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:21:07 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:21:07 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:21:07 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:21:07 --> Controller Class Initialized
DEBUG - 2015-03-22 04:21:07 --> File loaded: application/views//admin/order/crtEqpOrder.php
DEBUG - 2015-03-22 04:21:07 --> Final output sent to browser
DEBUG - 2015-03-22 04:21:07 --> Total execution time: 0.5550
DEBUG - 2015-03-22 04:21:07 --> Config Class Initialized
DEBUG - 2015-03-22 04:21:08 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:21:08 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:21:08 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:21:08 --> URI Class Initialized
DEBUG - 2015-03-22 04:21:08 --> Router Class Initialized
DEBUG - 2015-03-22 04:21:08 --> Output Class Initialized
DEBUG - 2015-03-22 04:21:08 --> Security Class Initialized
DEBUG - 2015-03-22 04:21:08 --> Input Class Initialized
DEBUG - 2015-03-22 04:21:08 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:21:08 --> Language Class Initialized
DEBUG - 2015-03-22 04:21:08 --> Loader Class Initialized
DEBUG - 2015-03-22 04:21:08 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:21:08 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:21:08 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:21:08 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:21:08 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:21:08 --> Controller Class Initialized
DEBUG - 2015-03-22 04:21:08 --> readEqpOrder:SELECT a.*, (select atcd_nm from cm_cd_attr where cd = '00B0' and atcd = a.srl_atcd) txt_srl_atcd, (select atcd_nm from cm_cd_attr where cd = '00D0' and atcd = a.rjt_pkt_tp_atcd) txt_rjt_pkt_tp_atcd, (select atcd_nm from cm_cd_attr where cd = '00E0' and atcd = a.pwr_cab_atcd) txt_pwr_cab_atcd, (select atcd_nm from cm_cd_attr where cd = '00F0' and atcd = a.shipped_by_atcd) txt_shipped_by_atcd, (select atcd_nm from cm_cd_attr where cd = '00F1' and atcd = a.courier_atcd) txt_courier_atcd, (select atcd_nm from cm_cd_attr where cd = '00G0' and atcd = a.payment_atcd) txt_payment_atcd, (select atcd_nm from cm_cd_attr where cd = '00H0' and atcd = a.incoterms_atcd) txt_incoterms_atcd, (select atcd_nm from cm_cd_attr where cd = '00L0' and atcd = a.lcd_color_atcd) txt_lcd_color_atcd, (select atcd_nm from cm_cd_attr where cd = '00M0' and atcd = a.lcd_lang_atcd) txt_lcd_lang_atcd, (select cmpy_nm from om_dealer where dealer_seq = a.dealer_seq) cmpy_nm, (select atcd_nm from cm_cd_attr where cd = '0022' and atcd = a.cntry_atcd) txt_cntry_atcd, if(mdl_cd in ('0007','0009'), concat(mdl_nm, concat('R',lan_L),if(a.lcd_color_atcd='00L00002','C','')), if(mdl_cd in ('3000'), concat(mdl_nm, concat('F',rjt_pkt_tp),''),mdl_nm)) txt_mdl_nm, DATE_FORMAT(a.delivery_dt, '%Y-%m-%d') txt_delivery_dt FROM ( SELECT a.*, b.cntry_atcd, b.dealer_seq, b.worker_seq, b.premium_rate, b.tot_amt, b.cnfm_yn, b.cnfm_dt, b.wrk_tp_atcd, b.udt_dt as order_dt, (CASE WHEN a.rjt_pkt_tp_atcd = ('00D00001') THEN 'A'  WHEN a.rjt_pkt_tp_atcd = ('00D00002') THEN 'I' END) rjt_pkt_tp, (SELECT mdl_nm FROM om_mdl WHERE mdl_cd = a.mdl_cd) mdl_nm, (SELECT if(count(*)>0,'L','') FROM om_ord_eqp_dtl where pi_no = a.pi_no and po_no = a.po_no and om_ord_eqp_dtl.atcd = '00A00001') lan_L FROM om_ord_eqp a, om_ord_inf b WHERE a.pi_no = b.pi_no AND a.pi_no = '150005bg' AND a.po_no = 30 ) a
DEBUG - 2015-03-22 04:21:08 --> SELECT b.cntry_atcd, b.dealer_seq, b.worker_seq, b.premium_rate, b.tot_amt, b.cnfm_yn, b.cnfm_dt, b.wrk_tp_atcd, a.*, (select atcd_nm from cm_cd_attr where cd = '0091' and atcd = a.currency_atch) txt_currency_atcd, (select atcd_nm from cm_cd_attr where cd = '0092' and atcd = a.serial_currency_atch) txt_serial_currency_atch, (select atcd_nm from cm_cd_attr where cd = '00A0' and atcd = a.opt_hw_atcd) txt_opt_hw_atcd, (select atcd_nm from cm_cd_attr where cd = '00C0' and atcd = a.pc_cab_atcd) txt_pc_cab_atcd FROM ( SELECT b.*,(case when b.cd='0091' then b.atcd else '' end) currency_atch,(CASE WHEN b.cd='0091' AND b.atcd_ox='O' THEN b.atcd ELSE '' END) fitness,(CASE WHEN b.cd='0091' THEN b.atcd_ox ELSE '' END) fitness_ox,(case when b.cd='0092' then b.atcd else '' end) serial_currency_atch,(CASE WHEN b.cd='0092' AND b.atcd_ox='O' THEN b.atcd ELSE '' END) srl_fitness,(CASE WHEN b.cd='0092' THEN b.atcd_ox ELSE '' END) srl_fitness_ox,(case when b.cd='00A0' then b.atcd else '' end) opt_hw_atcd,(case when b.cd='00C0' then b.atcd else '' end) pc_cab_atcd FROM om_ord_eqp a, om_ord_eqp_dtl b WHERE a.pi_no = b.pi_no AND a.po_no = b.po_no AND a.pi_no = '150005bg'		AND a.po_no = 30) a, om_ord_inf b WHERE a.pi_no = b.pi_no order by cd, atcd
DEBUG - 2015-03-22 04:21:08 --> INSERT INTO om_sndmail(pi_no, wrk_tp_atcd, sndmail_atcd, auth_grp_cd, sender_email, sender_eng_nm, title, ctnt, crt_dt, crt_uid) VALUES ('150005bg','00700110', '00700111', 'UD', 'kpbaek@localhost', (SELECT dealer_nm FROM om_dealer   WHERE dealer_uid='sofia@ubs-bg.com'), (select concat(atcd_nm,' - ',(select cmpy_nm from om_dealer where dealer_uid='sofia@ubs-bg.com')) from cm_cd_attr where cd = '0071' and atcd = '00700111'), '', now(), 'sofia@ubs-bg.com')
DEBUG - 2015-03-22 04:21:08 --> sql3:INSERT INTO om_sndmail_dtl (sndmail_seq, email_from, email_to, rcpnt_tp_atcd, snd_yn, crt_dt, crt_uid) SELECT 211, 'safe@safeleader.esy.es', (select usr_email from om_user where uid = a.dealer_uid), '00100010' rcpnt_tp_atcd, 'N', now(), 'sofia@ubs-bg.com' FROM om_dealer a, om_ord_inf b WHERE a.dealer_seq = b.dealer_seq AND b.pi_no = '150005bg' UNION SELECT 211, 'kpbaek@localhost', (select team_email from om_team where team_atcd = '00600SL0') email_to, '00100040' rcpnt_tp_atcd, 'N', now(), 'sofia@ubs-bg.com'
DEBUG - 2015-03-22 04:21:08 --> File loaded: application/views//common/crtSndMail.php
DEBUG - 2015-03-22 04:21:08 --> Final output sent to browser
DEBUG - 2015-03-22 04:21:08 --> Total execution time: 0.6650
DEBUG - 2015-03-22 04:21:08 --> Config Class Initialized
DEBUG - 2015-03-22 04:21:08 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:21:08 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:21:08 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:21:08 --> URI Class Initialized
DEBUG - 2015-03-22 04:21:08 --> Router Class Initialized
DEBUG - 2015-03-22 04:21:08 --> Output Class Initialized
DEBUG - 2015-03-22 04:21:08 --> Security Class Initialized
DEBUG - 2015-03-22 04:21:08 --> Input Class Initialized
DEBUG - 2015-03-22 04:21:08 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:21:09 --> Language Class Initialized
DEBUG - 2015-03-22 04:21:09 --> Loader Class Initialized
DEBUG - 2015-03-22 04:21:09 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:21:09 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:21:09 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:21:09 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:21:09 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:21:09 --> Controller Class Initialized
DEBUG - 2015-03-22 04:21:09 --> SELECT a.pi_no, a.sndmail_seq, a.wrk_tp_atcd, a.sender_email, a.title, a.ctnt, email_from, email_to, snd_yn, b.snd_no, b.rcpnt_tp_atcd, b.rcpnt_team_atcd,(select usr_nm from om_user where uid = a.sender_email) sender_nm,(select usr_nm from om_user where uid = b.email_to) rcpnt_nm FROM om_sndmail a, om_sndmail_dtl b WHERE a.sndmail_seq = b.sndmail_seq and a.sndmail_seq=211 and snd_yn='N'
DEBUG - 2015-03-22 04:21:09 --> File loaded: application/views//common/sndMailResult.php
DEBUG - 2015-03-22 04:21:09 --> Final output sent to browser
DEBUG - 2015-03-22 04:21:09 --> Total execution time: 0.7440
DEBUG - 2015-03-22 04:23:54 --> Config Class Initialized
DEBUG - 2015-03-22 04:23:54 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:23:54 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:23:54 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:23:54 --> URI Class Initialized
DEBUG - 2015-03-22 04:23:54 --> Router Class Initialized
DEBUG - 2015-03-22 04:23:54 --> Output Class Initialized
DEBUG - 2015-03-22 04:23:54 --> Security Class Initialized
DEBUG - 2015-03-22 04:23:54 --> Input Class Initialized
DEBUG - 2015-03-22 04:23:54 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:23:54 --> Language Class Initialized
DEBUG - 2015-03-22 04:23:54 --> Loader Class Initialized
DEBUG - 2015-03-22 04:23:54 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:23:54 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:23:54 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:23:54 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:23:54 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:23:54 --> Controller Class Initialized
DEBUG - 2015-03-22 04:23:54 --> File loaded: application/views//admin/order/main.php
DEBUG - 2015-03-22 04:23:54 --> Final output sent to browser
DEBUG - 2015-03-22 04:23:54 --> Total execution time: 0.7020
DEBUG - 2015-03-22 04:23:55 --> Config Class Initialized
DEBUG - 2015-03-22 04:23:55 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:23:55 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:23:55 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:23:55 --> URI Class Initialized
DEBUG - 2015-03-22 04:23:55 --> Router Class Initialized
DEBUG - 2015-03-22 04:23:55 --> Output Class Initialized
DEBUG - 2015-03-22 04:23:55 --> Security Class Initialized
DEBUG - 2015-03-22 04:23:55 --> Input Class Initialized
DEBUG - 2015-03-22 04:23:55 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:23:55 --> Language Class Initialized
DEBUG - 2015-03-22 04:23:55 --> Loader Class Initialized
DEBUG - 2015-03-22 04:23:55 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:23:55 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:23:55 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:23:55 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:23:55 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:23:55 --> Controller Class Initialized
DEBUG - 2015-03-22 04:23:55 --> File loaded: application/views//admin/order/tab01.php
DEBUG - 2015-03-22 04:23:55 --> Final output sent to browser
DEBUG - 2015-03-22 04:23:55 --> Total execution time: 0.5870
DEBUG - 2015-03-22 04:23:56 --> Config Class Initialized
DEBUG - 2015-03-22 04:23:56 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:23:56 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:23:56 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:23:56 --> URI Class Initialized
DEBUG - 2015-03-22 04:23:56 --> Router Class Initialized
DEBUG - 2015-03-22 04:23:56 --> Output Class Initialized
DEBUG - 2015-03-22 04:23:56 --> Security Class Initialized
DEBUG - 2015-03-22 04:23:56 --> Input Class Initialized
DEBUG - 2015-03-22 04:23:56 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:23:56 --> Language Class Initialized
DEBUG - 2015-03-22 04:23:56 --> Loader Class Initialized
DEBUG - 2015-03-22 04:23:56 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:23:56 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:23:56 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:23:56 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:23:56 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:23:56 --> Controller Class Initialized
DEBUG - 2015-03-22 04:23:56 --> File loaded: application/views//common/user/viewDealer.php
DEBUG - 2015-03-22 04:23:56 --> Final output sent to browser
DEBUG - 2015-03-22 04:23:56 --> Total execution time: 0.5900
DEBUG - 2015-03-22 04:23:56 --> Config Class Initialized
DEBUG - 2015-03-22 04:23:56 --> Config Class Initialized
DEBUG - 2015-03-22 04:23:56 --> Config Class Initialized
DEBUG - 2015-03-22 04:23:56 --> Config Class Initialized
DEBUG - 2015-03-22 04:23:56 --> Config Class Initialized
DEBUG - 2015-03-22 04:23:56 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:23:56 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:23:56 --> Config Class Initialized
DEBUG - 2015-03-22 04:23:56 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:23:56 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:23:56 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:23:56 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:23:56 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:23:56 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:23:56 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:23:56 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:23:56 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:23:56 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:23:56 --> URI Class Initialized
DEBUG - 2015-03-22 04:23:56 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:23:56 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:23:57 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:23:57 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:23:57 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:23:57 --> Router Class Initialized
DEBUG - 2015-03-22 04:23:57 --> URI Class Initialized
DEBUG - 2015-03-22 04:23:57 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:23:57 --> URI Class Initialized
DEBUG - 2015-03-22 04:23:57 --> Output Class Initialized
DEBUG - 2015-03-22 04:23:57 --> URI Class Initialized
DEBUG - 2015-03-22 04:23:57 --> Security Class Initialized
DEBUG - 2015-03-22 04:23:57 --> Router Class Initialized
DEBUG - 2015-03-22 04:23:57 --> Router Class Initialized
DEBUG - 2015-03-22 04:23:57 --> Input Class Initialized
DEBUG - 2015-03-22 04:23:57 --> URI Class Initialized
DEBUG - 2015-03-22 04:23:57 --> URI Class Initialized
DEBUG - 2015-03-22 04:23:57 --> Router Class Initialized
DEBUG - 2015-03-22 04:23:57 --> Output Class Initialized
DEBUG - 2015-03-22 04:23:57 --> Security Class Initialized
DEBUG - 2015-03-22 04:23:57 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:23:57 --> Output Class Initialized
DEBUG - 2015-03-22 04:23:57 --> Router Class Initialized
DEBUG - 2015-03-22 04:23:57 --> Router Class Initialized
DEBUG - 2015-03-22 04:23:57 --> Output Class Initialized
DEBUG - 2015-03-22 04:23:57 --> Input Class Initialized
DEBUG - 2015-03-22 04:23:57 --> Language Class Initialized
DEBUG - 2015-03-22 04:23:57 --> Security Class Initialized
DEBUG - 2015-03-22 04:23:57 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:23:57 --> Output Class Initialized
DEBUG - 2015-03-22 04:23:57 --> Security Class Initialized
DEBUG - 2015-03-22 04:23:57 --> Output Class Initialized
DEBUG - 2015-03-22 04:23:57 --> Loader Class Initialized
DEBUG - 2015-03-22 04:23:57 --> Language Class Initialized
DEBUG - 2015-03-22 04:23:57 --> Input Class Initialized
DEBUG - 2015-03-22 04:23:57 --> Security Class Initialized
DEBUG - 2015-03-22 04:23:57 --> Input Class Initialized
DEBUG - 2015-03-22 04:23:57 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:23:57 --> Config Class Initialized
DEBUG - 2015-03-22 04:23:57 --> Config Class Initialized
DEBUG - 2015-03-22 04:23:57 --> Security Class Initialized
DEBUG - 2015-03-22 04:23:57 --> Loader Class Initialized
DEBUG - 2015-03-22 04:23:57 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:23:57 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:23:57 --> Input Class Initialized
DEBUG - 2015-03-22 04:23:57 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:23:57 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:23:57 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:23:57 --> Input Class Initialized
DEBUG - 2015-03-22 04:23:57 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:23:57 --> Language Class Initialized
DEBUG - 2015-03-22 04:23:58 --> Language Class Initialized
DEBUG - 2015-03-22 04:23:58 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:23:58 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:23:58 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:23:58 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:23:58 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:23:58 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:23:58 --> Loader Class Initialized
DEBUG - 2015-03-22 04:23:58 --> Loader Class Initialized
DEBUG - 2015-03-22 04:23:58 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:23:58 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:23:58 --> Language Class Initialized
DEBUG - 2015-03-22 04:23:58 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:23:58 --> Language Class Initialized
DEBUG - 2015-03-22 04:23:58 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:23:58 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:23:58 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:23:58 --> URI Class Initialized
DEBUG - 2015-03-22 04:23:58 --> URI Class Initialized
DEBUG - 2015-03-22 04:23:58 --> Loader Class Initialized
DEBUG - 2015-03-22 04:23:58 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:23:58 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:23:58 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:23:58 --> Loader Class Initialized
DEBUG - 2015-03-22 04:23:58 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:23:58 --> Router Class Initialized
DEBUG - 2015-03-22 04:23:58 --> Router Class Initialized
DEBUG - 2015-03-22 04:23:58 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:23:58 --> Config Class Initialized
DEBUG - 2015-03-22 04:23:58 --> Config Class Initialized
DEBUG - 2015-03-22 04:23:58 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:23:58 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:23:58 --> Controller Class Initialized
DEBUG - 2015-03-22 04:23:58 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:23:58 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:23:58 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:23:58 --> Controller Class Initialized
DEBUG - 2015-03-22 04:23:58 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:23:58 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:23:58 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:23:58 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:23:58 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:23:58 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:23:58 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:23:58 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:23:58 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:23:58 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:23:58 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:23:58 --> Controller Class Initialized
DEBUG - 2015-03-22 04:23:58 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:23:58 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:23:58 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:23:59 --> Controller Class Initialized
DEBUG - 2015-03-22 04:23:59 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:23:59 --> URI Class Initialized
DEBUG - 2015-03-22 04:23:59 --> URI Class Initialized
DEBUG - 2015-03-22 04:23:59 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:23:59 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:23:59 --> Router Class Initialized
DEBUG - 2015-03-22 04:23:59 --> Router Class Initialized
DEBUG - 2015-03-22 04:23:59 --> Controller Class Initialized
DEBUG - 2015-03-22 04:23:59 --> Controller Class Initialized
DEBUG - 2015-03-22 04:23:59 --> Output Class Initialized
DEBUG - 2015-03-22 04:23:59 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 04:23:59 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 04:23:59 --> Config Class Initialized
DEBUG - 2015-03-22 04:23:59 --> File loaded: application/views//common/listModel.php
DEBUG - 2015-03-22 04:23:59 --> Config Class Initialized
DEBUG - 2015-03-22 04:23:59 --> Output Class Initialized
DEBUG - 2015-03-22 04:23:59 --> Output Class Initialized
DEBUG - 2015-03-22 04:23:59 --> Output Class Initialized
DEBUG - 2015-03-22 04:23:59 --> File loaded: application/views//common/user/listCntry.php
DEBUG - 2015-03-22 04:23:59 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 04:23:59 --> Security Class Initialized
DEBUG - 2015-03-22 04:23:59 --> Final output sent to browser
DEBUG - 2015-03-22 04:23:59 --> Final output sent to browser
DEBUG - 2015-03-22 04:23:59 --> Final output sent to browser
DEBUG - 2015-03-22 04:23:59 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:23:59 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:23:59 --> Security Class Initialized
DEBUG - 2015-03-22 04:23:59 --> Security Class Initialized
DEBUG - 2015-03-22 04:23:59 --> Final output sent to browser
DEBUG - 2015-03-22 04:23:59 --> Input Class Initialized
DEBUG - 2015-03-22 04:23:59 --> Input Class Initialized
DEBUG - 2015-03-22 04:23:59 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:23:59 --> Final output sent to browser
DEBUG - 2015-03-22 04:23:59 --> Security Class Initialized
DEBUG - 2015-03-22 04:23:59 --> Total execution time: 2.6272
DEBUG - 2015-03-22 04:23:59 --> Total execution time: 2.6702
DEBUG - 2015-03-22 04:23:59 --> Total execution time: 2.6051
DEBUG - 2015-03-22 04:23:59 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:23:59 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:23:59 --> Total execution time: 2.7422
DEBUG - 2015-03-22 04:23:59 --> Input Class Initialized
DEBUG - 2015-03-22 04:23:59 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:23:59 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:23:59 --> Total execution time: 2.8762
DEBUG - 2015-03-22 04:23:59 --> Input Class Initialized
DEBUG - 2015-03-22 04:23:59 --> Config Class Initialized
DEBUG - 2015-03-22 04:23:59 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:23:59 --> Language Class Initialized
DEBUG - 2015-03-22 04:23:59 --> Config Class Initialized
DEBUG - 2015-03-22 04:23:59 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:23:59 --> URI Class Initialized
DEBUG - 2015-03-22 04:23:59 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:23:59 --> Language Class Initialized
DEBUG - 2015-03-22 04:23:59 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:23:59 --> File loaded: application/views//common/user/listUserPiNo.php
DEBUG - 2015-03-22 04:23:59 --> Loader Class Initialized
DEBUG - 2015-03-22 04:23:59 --> URI Class Initialized
DEBUG - 2015-03-22 04:23:59 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:24:00 --> Language Class Initialized
DEBUG - 2015-03-22 04:24:00 --> Router Class Initialized
DEBUG - 2015-03-22 04:24:00 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:24:00 --> Final output sent to browser
DEBUG - 2015-03-22 04:24:00 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:24:00 --> Loader Class Initialized
DEBUG - 2015-03-22 04:24:00 --> Language Class Initialized
DEBUG - 2015-03-22 04:24:00 --> Router Class Initialized
DEBUG - 2015-03-22 04:24:00 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:24:00 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:24:00 --> Loader Class Initialized
DEBUG - 2015-03-22 04:24:00 --> Total execution time: 3.4292
DEBUG - 2015-03-22 04:24:00 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:24:00 --> Output Class Initialized
DEBUG - 2015-03-22 04:24:00 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:24:00 --> Loader Class Initialized
DEBUG - 2015-03-22 04:24:00 --> URI Class Initialized
DEBUG - 2015-03-22 04:24:00 --> Output Class Initialized
DEBUG - 2015-03-22 04:24:00 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:24:00 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:24:00 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:24:00 --> Security Class Initialized
DEBUG - 2015-03-22 04:24:00 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:24:00 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:24:00 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:24:00 --> Security Class Initialized
DEBUG - 2015-03-22 04:24:00 --> URI Class Initialized
DEBUG - 2015-03-22 04:24:00 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:24:00 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:24:00 --> Router Class Initialized
DEBUG - 2015-03-22 04:24:00 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:24:00 --> Input Class Initialized
DEBUG - 2015-03-22 04:24:00 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:24:00 --> Router Class Initialized
DEBUG - 2015-03-22 04:24:00 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:24:00 --> Input Class Initialized
DEBUG - 2015-03-22 04:24:00 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:24:00 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:24:00 --> Output Class Initialized
DEBUG - 2015-03-22 04:24:00 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:24:00 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:24:00 --> Output Class Initialized
DEBUG - 2015-03-22 04:24:00 --> Security Class Initialized
DEBUG - 2015-03-22 04:24:00 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:24:00 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:24:00 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:24:00 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:24:01 --> Language Class Initialized
DEBUG - 2015-03-22 04:24:01 --> Language Class Initialized
DEBUG - 2015-03-22 04:24:01 --> Security Class Initialized
DEBUG - 2015-03-22 04:24:01 --> Controller Class Initialized
DEBUG - 2015-03-22 04:24:01 --> Loader Class Initialized
DEBUG - 2015-03-22 04:24:01 --> Controller Class Initialized
DEBUG - 2015-03-22 04:24:01 --> Loader Class Initialized
DEBUG - 2015-03-22 04:24:01 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:24:01 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 04:24:01 --> Input Class Initialized
DEBUG - 2015-03-22 04:24:01 --> Input Class Initialized
DEBUG - 2015-03-22 04:24:01 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:24:01 --> Controller Class Initialized
DEBUG - 2015-03-22 04:24:01 --> Controller Class Initialized
DEBUG - 2015-03-22 04:24:01 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 04:24:01 --> Final output sent to browser
DEBUG - 2015-03-22 04:24:01 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:24:01 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:24:01 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:24:01 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:24:01 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 04:24:01 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 04:24:01 --> Final output sent to browser
DEBUG - 2015-03-22 04:24:01 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:24:01 --> Final output sent to browser
DEBUG - 2015-03-22 04:24:01 --> Total execution time: 2.6382
DEBUG - 2015-03-22 04:24:01 --> Language Class Initialized
DEBUG - 2015-03-22 04:24:01 --> Total execution time: 3.6162
DEBUG - 2015-03-22 04:24:01 --> Final output sent to browser
DEBUG - 2015-03-22 04:24:01 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:24:01 --> Language Class Initialized
DEBUG - 2015-03-22 04:24:01 --> Total execution time: 3.6322
DEBUG - 2015-03-22 04:24:01 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:24:01 --> Loader Class Initialized
DEBUG - 2015-03-22 04:24:01 --> Loader Class Initialized
DEBUG - 2015-03-22 04:24:01 --> Total execution time: 2.7892
DEBUG - 2015-03-22 04:24:01 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:24:01 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:24:01 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:24:01 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:24:01 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:24:01 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:24:01 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:24:01 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:24:01 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:24:01 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:24:01 --> Controller Class Initialized
DEBUG - 2015-03-22 04:24:01 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:24:01 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:24:01 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:24:01 --> Controller Class Initialized
DEBUG - 2015-03-22 04:24:01 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:24:01 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 04:24:02 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 04:24:02 --> Controller Class Initialized
DEBUG - 2015-03-22 04:24:02 --> Controller Class Initialized
DEBUG - 2015-03-22 04:24:02 --> Final output sent to browser
DEBUG - 2015-03-22 04:24:02 --> Final output sent to browser
DEBUG - 2015-03-22 04:24:02 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 04:24:02 --> File loaded: application/views//common/listCodeImg.php
DEBUG - 2015-03-22 04:24:02 --> Total execution time: 2.7972
DEBUG - 2015-03-22 04:24:02 --> Total execution time: 2.3131
DEBUG - 2015-03-22 04:24:02 --> Final output sent to browser
DEBUG - 2015-03-22 04:24:02 --> Final output sent to browser
DEBUG - 2015-03-22 04:24:02 --> Total execution time: 2.3601
DEBUG - 2015-03-22 04:24:02 --> Total execution time: 2.9302
DEBUG - 2015-03-22 04:24:12 --> Config Class Initialized
DEBUG - 2015-03-22 04:24:12 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:24:12 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:24:12 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:24:12 --> URI Class Initialized
DEBUG - 2015-03-22 04:24:12 --> Router Class Initialized
DEBUG - 2015-03-22 04:24:12 --> Output Class Initialized
DEBUG - 2015-03-22 04:24:12 --> Security Class Initialized
DEBUG - 2015-03-22 04:24:12 --> Input Class Initialized
DEBUG - 2015-03-22 04:24:12 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:24:12 --> Language Class Initialized
DEBUG - 2015-03-22 04:24:12 --> Loader Class Initialized
DEBUG - 2015-03-22 04:24:12 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:24:12 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:24:12 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:24:12 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:24:13 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:24:13 --> Controller Class Initialized
DEBUG - 2015-03-22 04:24:13 --> File loaded: application/views//admin/order/crtEqpOrder.php
DEBUG - 2015-03-22 04:24:13 --> Final output sent to browser
DEBUG - 2015-03-22 04:24:13 --> Total execution time: 0.6300
DEBUG - 2015-03-22 04:24:13 --> Config Class Initialized
DEBUG - 2015-03-22 04:24:13 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:24:13 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:24:13 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:24:13 --> URI Class Initialized
DEBUG - 2015-03-22 04:24:13 --> Router Class Initialized
DEBUG - 2015-03-22 04:24:13 --> Output Class Initialized
DEBUG - 2015-03-22 04:24:13 --> Security Class Initialized
DEBUG - 2015-03-22 04:24:13 --> Input Class Initialized
DEBUG - 2015-03-22 04:24:13 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:24:13 --> Language Class Initialized
DEBUG - 2015-03-22 04:24:13 --> Loader Class Initialized
DEBUG - 2015-03-22 04:24:13 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:24:13 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:24:13 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:24:13 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:24:13 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:24:13 --> Controller Class Initialized
DEBUG - 2015-03-22 04:24:13 --> readEqpOrder:SELECT a.*, (select atcd_nm from cm_cd_attr where cd = '00B0' and atcd = a.srl_atcd) txt_srl_atcd, (select atcd_nm from cm_cd_attr where cd = '00D0' and atcd = a.rjt_pkt_tp_atcd) txt_rjt_pkt_tp_atcd, (select atcd_nm from cm_cd_attr where cd = '00E0' and atcd = a.pwr_cab_atcd) txt_pwr_cab_atcd, (select atcd_nm from cm_cd_attr where cd = '00F0' and atcd = a.shipped_by_atcd) txt_shipped_by_atcd, (select atcd_nm from cm_cd_attr where cd = '00F1' and atcd = a.courier_atcd) txt_courier_atcd, (select atcd_nm from cm_cd_attr where cd = '00G0' and atcd = a.payment_atcd) txt_payment_atcd, (select atcd_nm from cm_cd_attr where cd = '00H0' and atcd = a.incoterms_atcd) txt_incoterms_atcd, (select atcd_nm from cm_cd_attr where cd = '00L0' and atcd = a.lcd_color_atcd) txt_lcd_color_atcd, (select atcd_nm from cm_cd_attr where cd = '00M0' and atcd = a.lcd_lang_atcd) txt_lcd_lang_atcd, (select cmpy_nm from om_dealer where dealer_seq = a.dealer_seq) cmpy_nm, (select atcd_nm from cm_cd_attr where cd = '0022' and atcd = a.cntry_atcd) txt_cntry_atcd, if(mdl_cd in ('0007','0009'), concat(mdl_nm, concat('R',lan_L),if(a.lcd_color_atcd='00L00002','C','')), if(mdl_cd in ('3000'), concat(mdl_nm, concat('F',rjt_pkt_tp),''),mdl_nm)) txt_mdl_nm, DATE_FORMAT(a.delivery_dt, '%Y-%m-%d') txt_delivery_dt FROM ( SELECT a.*, b.cntry_atcd, b.dealer_seq, b.worker_seq, b.premium_rate, b.tot_amt, b.cnfm_yn, b.cnfm_dt, b.wrk_tp_atcd, b.udt_dt as order_dt, (CASE WHEN a.rjt_pkt_tp_atcd = ('00D00001') THEN 'A'  WHEN a.rjt_pkt_tp_atcd = ('00D00002') THEN 'I' END) rjt_pkt_tp, (SELECT mdl_nm FROM om_mdl WHERE mdl_cd = a.mdl_cd) mdl_nm, (SELECT if(count(*)>0,'L','') FROM om_ord_eqp_dtl where pi_no = a.pi_no and po_no = a.po_no and om_ord_eqp_dtl.atcd = '00A00001') lan_L FROM om_ord_eqp a, om_ord_inf b WHERE a.pi_no = b.pi_no AND a.pi_no = '150006bg' AND a.po_no = 31 ) a
DEBUG - 2015-03-22 04:24:13 --> SELECT b.cntry_atcd, b.dealer_seq, b.worker_seq, b.premium_rate, b.tot_amt, b.cnfm_yn, b.cnfm_dt, b.wrk_tp_atcd, a.*, (select atcd_nm from cm_cd_attr where cd = '0091' and atcd = a.currency_atch) txt_currency_atcd, (select atcd_nm from cm_cd_attr where cd = '0092' and atcd = a.serial_currency_atch) txt_serial_currency_atch, (select atcd_nm from cm_cd_attr where cd = '00A0' and atcd = a.opt_hw_atcd) txt_opt_hw_atcd, (select atcd_nm from cm_cd_attr where cd = '00C0' and atcd = a.pc_cab_atcd) txt_pc_cab_atcd FROM ( SELECT b.*,(case when b.cd='0091' then b.atcd else '' end) currency_atch,(CASE WHEN b.cd='0091' AND b.atcd_ox='O' THEN b.atcd ELSE '' END) fitness,(CASE WHEN b.cd='0091' THEN b.atcd_ox ELSE '' END) fitness_ox,(case when b.cd='0092' then b.atcd else '' end) serial_currency_atch,(CASE WHEN b.cd='0092' AND b.atcd_ox='O' THEN b.atcd ELSE '' END) srl_fitness,(CASE WHEN b.cd='0092' THEN b.atcd_ox ELSE '' END) srl_fitness_ox,(case when b.cd='00A0' then b.atcd else '' end) opt_hw_atcd,(case when b.cd='00C0' then b.atcd else '' end) pc_cab_atcd FROM om_ord_eqp a, om_ord_eqp_dtl b WHERE a.pi_no = b.pi_no AND a.po_no = b.po_no AND a.pi_no = '150006bg'		AND a.po_no = 31) a, om_ord_inf b WHERE a.pi_no = b.pi_no order by cd, atcd
DEBUG - 2015-03-22 04:24:13 --> INSERT INTO om_sndmail(pi_no, wrk_tp_atcd, sndmail_atcd, auth_grp_cd, sender_email, sender_eng_nm, title, ctnt, crt_dt, crt_uid) VALUES ('150006bg','00700110', '00700111', 'UD', 'kpbaek@localhost', (SELECT dealer_nm FROM om_dealer   WHERE dealer_uid='sofia@ubs-bg.com'), (select concat(atcd_nm,' - ',(select cmpy_nm from om_dealer where dealer_uid='sofia@ubs-bg.com')) from cm_cd_attr where cd = '0071' and atcd = '00700111'), '', now(), 'sofia@ubs-bg.com')
DEBUG - 2015-03-22 04:24:13 --> sql3:INSERT INTO om_sndmail_dtl (sndmail_seq, email_from, email_to, rcpnt_tp_atcd, snd_yn, crt_dt, crt_uid) SELECT 212, 'safe@safeleader.esy.es', (select usr_email from om_user where uid = a.dealer_uid), '00100010' rcpnt_tp_atcd, 'N', now(), 'sofia@ubs-bg.com' FROM om_dealer a, om_ord_inf b WHERE a.dealer_seq = b.dealer_seq AND b.pi_no = '150006bg' UNION SELECT 212, 'kpbaek@localhost', (select team_email from om_team where team_atcd = '00600SL0') email_to, '00100040' rcpnt_tp_atcd, 'N', now(), 'sofia@ubs-bg.com'
DEBUG - 2015-03-22 04:24:13 --> File loaded: application/views//common/crtSndMail.php
DEBUG - 2015-03-22 04:24:13 --> Final output sent to browser
DEBUG - 2015-03-22 04:24:13 --> Total execution time: 0.7740
DEBUG - 2015-03-22 04:24:14 --> Config Class Initialized
DEBUG - 2015-03-22 04:24:14 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:24:14 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:24:14 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:24:14 --> URI Class Initialized
DEBUG - 2015-03-22 04:24:14 --> Router Class Initialized
DEBUG - 2015-03-22 04:24:14 --> Output Class Initialized
DEBUG - 2015-03-22 04:24:14 --> Security Class Initialized
DEBUG - 2015-03-22 04:24:14 --> Input Class Initialized
DEBUG - 2015-03-22 04:24:14 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:24:14 --> Language Class Initialized
DEBUG - 2015-03-22 04:24:14 --> Loader Class Initialized
DEBUG - 2015-03-22 04:24:14 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:24:14 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:24:14 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:24:14 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:24:14 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:24:14 --> Controller Class Initialized
DEBUG - 2015-03-22 04:24:14 --> SELECT a.pi_no, a.sndmail_seq, a.wrk_tp_atcd, a.sender_email, a.title, a.ctnt, email_from, email_to, snd_yn, b.snd_no, b.rcpnt_tp_atcd, b.rcpnt_team_atcd,(select usr_nm from om_user where uid = a.sender_email) sender_nm,(select usr_nm from om_user where uid = b.email_to) rcpnt_nm FROM om_sndmail a, om_sndmail_dtl b WHERE a.sndmail_seq = b.sndmail_seq and a.sndmail_seq=212 and snd_yn='N'
DEBUG - 2015-03-22 04:24:14 --> File loaded: application/views//common/sndMailResult.php
DEBUG - 2015-03-22 04:24:14 --> Final output sent to browser
DEBUG - 2015-03-22 04:24:14 --> Total execution time: 0.7800
DEBUG - 2015-03-22 04:28:35 --> Config Class Initialized
DEBUG - 2015-03-22 04:28:35 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:28:35 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:28:35 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:28:35 --> URI Class Initialized
DEBUG - 2015-03-22 04:28:35 --> Router Class Initialized
DEBUG - 2015-03-22 04:28:35 --> Output Class Initialized
DEBUG - 2015-03-22 04:28:35 --> Security Class Initialized
DEBUG - 2015-03-22 04:28:35 --> Input Class Initialized
DEBUG - 2015-03-22 04:28:35 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:28:35 --> Language Class Initialized
DEBUG - 2015-03-22 04:28:35 --> Loader Class Initialized
DEBUG - 2015-03-22 04:28:35 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:28:35 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:28:35 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:28:35 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:28:35 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:28:35 --> Controller Class Initialized
DEBUG - 2015-03-22 04:28:35 --> File loaded: application/views//admin/order/main.php
DEBUG - 2015-03-22 04:28:36 --> Final output sent to browser
DEBUG - 2015-03-22 04:28:36 --> Total execution time: 0.6270
DEBUG - 2015-03-22 04:28:36 --> Config Class Initialized
DEBUG - 2015-03-22 04:28:36 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:28:36 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:28:36 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:28:36 --> URI Class Initialized
DEBUG - 2015-03-22 04:28:36 --> Router Class Initialized
DEBUG - 2015-03-22 04:28:36 --> Output Class Initialized
DEBUG - 2015-03-22 04:28:36 --> Security Class Initialized
DEBUG - 2015-03-22 04:28:36 --> Input Class Initialized
DEBUG - 2015-03-22 04:28:36 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:28:36 --> Language Class Initialized
DEBUG - 2015-03-22 04:28:36 --> Loader Class Initialized
DEBUG - 2015-03-22 04:28:36 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:28:36 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:28:36 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:28:36 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:28:36 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:28:36 --> Controller Class Initialized
DEBUG - 2015-03-22 04:28:36 --> File loaded: application/views//admin/order/tab01.php
DEBUG - 2015-03-22 04:28:36 --> Final output sent to browser
DEBUG - 2015-03-22 04:28:36 --> Total execution time: 0.6670
DEBUG - 2015-03-22 04:28:37 --> Config Class Initialized
DEBUG - 2015-03-22 04:28:37 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:28:37 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:28:37 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:28:37 --> URI Class Initialized
DEBUG - 2015-03-22 04:28:37 --> Router Class Initialized
DEBUG - 2015-03-22 04:28:37 --> Output Class Initialized
DEBUG - 2015-03-22 04:28:37 --> Security Class Initialized
DEBUG - 2015-03-22 04:28:37 --> Input Class Initialized
DEBUG - 2015-03-22 04:28:37 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:28:37 --> Language Class Initialized
DEBUG - 2015-03-22 04:28:37 --> Loader Class Initialized
DEBUG - 2015-03-22 04:28:37 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:28:37 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:28:37 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:28:37 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:28:37 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:28:37 --> Controller Class Initialized
DEBUG - 2015-03-22 04:28:37 --> File loaded: application/views//common/user/viewDealer.php
DEBUG - 2015-03-22 04:28:37 --> Final output sent to browser
DEBUG - 2015-03-22 04:28:37 --> Total execution time: 0.6960
DEBUG - 2015-03-22 04:28:37 --> Config Class Initialized
DEBUG - 2015-03-22 04:28:37 --> Config Class Initialized
DEBUG - 2015-03-22 04:28:37 --> Config Class Initialized
DEBUG - 2015-03-22 04:28:38 --> Config Class Initialized
DEBUG - 2015-03-22 04:28:38 --> Config Class Initialized
DEBUG - 2015-03-22 04:28:38 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:28:38 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:28:38 --> Config Class Initialized
DEBUG - 2015-03-22 04:28:38 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:28:38 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:28:38 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:28:38 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:28:38 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:28:38 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:28:38 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:28:38 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:28:38 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:28:38 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:28:38 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:28:38 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:28:38 --> URI Class Initialized
DEBUG - 2015-03-22 04:28:38 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:28:38 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:28:38 --> Router Class Initialized
DEBUG - 2015-03-22 04:28:38 --> URI Class Initialized
DEBUG - 2015-03-22 04:28:38 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:28:38 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:28:38 --> URI Class Initialized
DEBUG - 2015-03-22 04:28:38 --> Output Class Initialized
DEBUG - 2015-03-22 04:28:38 --> URI Class Initialized
DEBUG - 2015-03-22 04:28:38 --> Router Class Initialized
DEBUG - 2015-03-22 04:28:38 --> URI Class Initialized
DEBUG - 2015-03-22 04:28:38 --> URI Class Initialized
DEBUG - 2015-03-22 04:28:38 --> Router Class Initialized
DEBUG - 2015-03-22 04:28:38 --> Security Class Initialized
DEBUG - 2015-03-22 04:28:38 --> Output Class Initialized
DEBUG - 2015-03-22 04:28:38 --> Router Class Initialized
DEBUG - 2015-03-22 04:28:38 --> Router Class Initialized
DEBUG - 2015-03-22 04:28:38 --> Router Class Initialized
DEBUG - 2015-03-22 04:28:38 --> Input Class Initialized
DEBUG - 2015-03-22 04:28:38 --> Security Class Initialized
DEBUG - 2015-03-22 04:28:38 --> Output Class Initialized
DEBUG - 2015-03-22 04:28:38 --> Output Class Initialized
DEBUG - 2015-03-22 04:28:38 --> Config Class Initialized
DEBUG - 2015-03-22 04:28:38 --> Config Class Initialized
DEBUG - 2015-03-22 04:28:38 --> Output Class Initialized
DEBUG - 2015-03-22 04:28:38 --> Output Class Initialized
DEBUG - 2015-03-22 04:28:38 --> Input Class Initialized
DEBUG - 2015-03-22 04:28:38 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:28:38 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:28:38 --> Security Class Initialized
DEBUG - 2015-03-22 04:28:38 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:28:39 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:28:39 --> Language Class Initialized
DEBUG - 2015-03-22 04:28:39 --> Security Class Initialized
DEBUG - 2015-03-22 04:28:39 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:28:39 --> Loader Class Initialized
DEBUG - 2015-03-22 04:28:39 --> Security Class Initialized
DEBUG - 2015-03-22 04:28:39 --> Security Class Initialized
DEBUG - 2015-03-22 04:28:39 --> Language Class Initialized
DEBUG - 2015-03-22 04:28:39 --> Input Class Initialized
DEBUG - 2015-03-22 04:28:39 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:28:39 --> Input Class Initialized
DEBUG - 2015-03-22 04:28:39 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:28:39 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:28:39 --> Input Class Initialized
DEBUG - 2015-03-22 04:28:39 --> Input Class Initialized
DEBUG - 2015-03-22 04:28:39 --> Loader Class Initialized
DEBUG - 2015-03-22 04:28:39 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:28:39 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:28:39 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:28:39 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:28:39 --> URI Class Initialized
DEBUG - 2015-03-22 04:28:39 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:28:39 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:28:39 --> Language Class Initialized
DEBUG - 2015-03-22 04:28:39 --> Language Class Initialized
DEBUG - 2015-03-22 04:28:39 --> Language Class Initialized
DEBUG - 2015-03-22 04:28:39 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:28:39 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:28:39 --> Router Class Initialized
DEBUG - 2015-03-22 04:28:39 --> URI Class Initialized
DEBUG - 2015-03-22 04:28:39 --> Config Class Initialized
DEBUG - 2015-03-22 04:28:39 --> Config Class Initialized
DEBUG - 2015-03-22 04:28:39 --> Language Class Initialized
DEBUG - 2015-03-22 04:28:39 --> Loader Class Initialized
DEBUG - 2015-03-22 04:28:39 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:28:39 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:28:39 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:28:39 --> Loader Class Initialized
DEBUG - 2015-03-22 04:28:39 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:28:39 --> Output Class Initialized
DEBUG - 2015-03-22 04:28:39 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:28:39 --> Loader Class Initialized
DEBUG - 2015-03-22 04:28:39 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:28:39 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:28:39 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:28:39 --> Security Class Initialized
DEBUG - 2015-03-22 04:28:39 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:28:39 --> Controller Class Initialized
DEBUG - 2015-03-22 04:28:39 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:28:39 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:28:39 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:28:39 --> Router Class Initialized
DEBUG - 2015-03-22 04:28:39 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:28:39 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:28:39 --> Input Class Initialized
DEBUG - 2015-03-22 04:28:39 --> Loader Class Initialized
DEBUG - 2015-03-22 04:28:39 --> File loaded: application/views//common/user/listUserPiNo.php
DEBUG - 2015-03-22 04:28:39 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:28:39 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:28:39 --> URI Class Initialized
DEBUG - 2015-03-22 04:28:39 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:28:39 --> Config Class Initialized
DEBUG - 2015-03-22 04:28:39 --> Config Class Initialized
DEBUG - 2015-03-22 04:28:39 --> Output Class Initialized
DEBUG - 2015-03-22 04:28:39 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:28:40 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:28:40 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:28:40 --> URI Class Initialized
DEBUG - 2015-03-22 04:28:40 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:28:40 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:28:40 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:28:40 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:28:40 --> Final output sent to browser
DEBUG - 2015-03-22 04:28:40 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:28:40 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:28:40 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:28:40 --> Router Class Initialized
DEBUG - 2015-03-22 04:28:40 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:28:40 --> Total execution time: 2.0371
DEBUG - 2015-03-22 04:28:40 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:28:40 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:28:40 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:28:40 --> Language Class Initialized
DEBUG - 2015-03-22 04:28:40 --> Controller Class Initialized
DEBUG - 2015-03-22 04:28:40 --> Router Class Initialized
DEBUG - 2015-03-22 04:28:40 --> Security Class Initialized
DEBUG - 2015-03-22 04:28:40 --> Config Class Initialized
DEBUG - 2015-03-22 04:28:40 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:28:40 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:28:40 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:28:40 --> Loader Class Initialized
DEBUG - 2015-03-22 04:28:40 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:28:40 --> Controller Class Initialized
DEBUG - 2015-03-22 04:28:40 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:28:40 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:28:40 --> File loaded: application/views//common/listModel.php
DEBUG - 2015-03-22 04:28:40 --> Output Class Initialized
DEBUG - 2015-03-22 04:28:40 --> Controller Class Initialized
DEBUG - 2015-03-22 04:28:40 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:28:40 --> Output Class Initialized
DEBUG - 2015-03-22 04:28:40 --> Input Class Initialized
DEBUG - 2015-03-22 04:28:40 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:28:40 --> Final output sent to browser
DEBUG - 2015-03-22 04:28:40 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:28:40 --> Security Class Initialized
DEBUG - 2015-03-22 04:28:40 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 04:28:40 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:28:40 --> Security Class Initialized
DEBUG - 2015-03-22 04:28:40 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:28:40 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:28:40 --> Total execution time: 2.2471
DEBUG - 2015-03-22 04:28:40 --> Final output sent to browser
DEBUG - 2015-03-22 04:28:40 --> Controller Class Initialized
DEBUG - 2015-03-22 04:28:40 --> Controller Class Initialized
DEBUG - 2015-03-22 04:28:40 --> Input Class Initialized
DEBUG - 2015-03-22 04:28:40 --> Input Class Initialized
DEBUG - 2015-03-22 04:28:40 --> Language Class Initialized
DEBUG - 2015-03-22 04:28:40 --> Total execution time: 2.1101
DEBUG - 2015-03-22 04:28:40 --> File loaded: application/views//common/user/listCntry.php
DEBUG - 2015-03-22 04:28:40 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:28:40 --> URI Class Initialized
DEBUG - 2015-03-22 04:28:40 --> URI Class Initialized
DEBUG - 2015-03-22 04:28:40 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:28:40 --> Final output sent to browser
DEBUG - 2015-03-22 04:28:40 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 04:28:40 --> Config Class Initialized
DEBUG - 2015-03-22 04:28:40 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:28:40 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 04:28:40 --> Loader Class Initialized
DEBUG - 2015-03-22 04:28:40 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:28:40 --> Language Class Initialized
DEBUG - 2015-03-22 04:28:40 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:28:40 --> Router Class Initialized
DEBUG - 2015-03-22 04:28:40 --> Router Class Initialized
DEBUG - 2015-03-22 04:28:40 --> Total execution time: 2.3061
DEBUG - 2015-03-22 04:28:40 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:28:40 --> Final output sent to browser
DEBUG - 2015-03-22 04:28:40 --> Final output sent to browser
DEBUG - 2015-03-22 04:28:40 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:28:40 --> URI Class Initialized
DEBUG - 2015-03-22 04:28:40 --> Language Class Initialized
DEBUG - 2015-03-22 04:28:40 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:28:40 --> Output Class Initialized
DEBUG - 2015-03-22 04:28:40 --> Output Class Initialized
DEBUG - 2015-03-22 04:28:40 --> Loader Class Initialized
DEBUG - 2015-03-22 04:28:40 --> Total execution time: 2.2741
DEBUG - 2015-03-22 04:28:40 --> Total execution time: 2.2561
DEBUG - 2015-03-22 04:28:40 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:28:40 --> Router Class Initialized
DEBUG - 2015-03-22 04:28:40 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:28:40 --> Security Class Initialized
DEBUG - 2015-03-22 04:28:40 --> Security Class Initialized
DEBUG - 2015-03-22 04:28:40 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:28:40 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:28:40 --> Loader Class Initialized
DEBUG - 2015-03-22 04:28:40 --> Output Class Initialized
DEBUG - 2015-03-22 04:28:40 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:28:40 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:28:40 --> Input Class Initialized
DEBUG - 2015-03-22 04:28:40 --> Controller Class Initialized
DEBUG - 2015-03-22 04:28:40 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:28:40 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:28:40 --> Input Class Initialized
DEBUG - 2015-03-22 04:28:40 --> URI Class Initialized
DEBUG - 2015-03-22 04:28:40 --> Security Class Initialized
DEBUG - 2015-03-22 04:28:40 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:28:40 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:28:40 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 04:28:40 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:28:40 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:28:40 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:28:40 --> Router Class Initialized
DEBUG - 2015-03-22 04:28:40 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:28:40 --> Input Class Initialized
DEBUG - 2015-03-22 04:28:40 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:28:40 --> Language Class Initialized
DEBUG - 2015-03-22 04:28:40 --> Final output sent to browser
DEBUG - 2015-03-22 04:28:40 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:28:40 --> Controller Class Initialized
DEBUG - 2015-03-22 04:28:40 --> Output Class Initialized
DEBUG - 2015-03-22 04:28:41 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:28:41 --> Language Class Initialized
DEBUG - 2015-03-22 04:28:41 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:28:41 --> Loader Class Initialized
DEBUG - 2015-03-22 04:28:41 --> Total execution time: 2.1951
DEBUG - 2015-03-22 04:28:41 --> Security Class Initialized
DEBUG - 2015-03-22 04:28:41 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 04:28:41 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:28:41 --> Loader Class Initialized
DEBUG - 2015-03-22 04:28:41 --> Language Class Initialized
DEBUG - 2015-03-22 04:28:41 --> Controller Class Initialized
DEBUG - 2015-03-22 04:28:41 --> Input Class Initialized
DEBUG - 2015-03-22 04:28:41 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:28:41 --> Final output sent to browser
DEBUG - 2015-03-22 04:28:41 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:28:41 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:28:41 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:28:41 --> Loader Class Initialized
DEBUG - 2015-03-22 04:28:41 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 04:28:41 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:28:41 --> Total execution time: 2.6292
DEBUG - 2015-03-22 04:28:41 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:28:41 --> Controller Class Initialized
DEBUG - 2015-03-22 04:28:41 --> Language Class Initialized
DEBUG - 2015-03-22 04:28:41 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:28:41 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:28:41 --> Final output sent to browser
DEBUG - 2015-03-22 04:28:41 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 04:28:41 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:28:41 --> Final output sent to browser
DEBUG - 2015-03-22 04:28:41 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:28:41 --> Loader Class Initialized
DEBUG - 2015-03-22 04:28:41 --> Total execution time: 2.2601
DEBUG - 2015-03-22 04:28:41 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:28:41 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:28:41 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:28:41 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:28:41 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:28:41 --> Total execution time: 2.3411
DEBUG - 2015-03-22 04:28:41 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:28:42 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:28:42 --> Controller Class Initialized
DEBUG - 2015-03-22 04:28:42 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:28:42 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:28:42 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 04:28:42 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:28:42 --> Controller Class Initialized
DEBUG - 2015-03-22 04:28:42 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:28:42 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:28:42 --> Final output sent to browser
DEBUG - 2015-03-22 04:28:42 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 04:28:42 --> Controller Class Initialized
DEBUG - 2015-03-22 04:28:42 --> Total execution time: 2.2121
DEBUG - 2015-03-22 04:28:42 --> Controller Class Initialized
DEBUG - 2015-03-22 04:28:42 --> File loaded: application/views//common/listCodeImg.php
DEBUG - 2015-03-22 04:28:42 --> Final output sent to browser
DEBUG - 2015-03-22 04:28:42 --> Final output sent to browser
DEBUG - 2015-03-22 04:28:42 --> Total execution time: 2.5051
DEBUG - 2015-03-22 04:28:42 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 04:28:42 --> Total execution time: 2.1691
DEBUG - 2015-03-22 04:28:42 --> Final output sent to browser
DEBUG - 2015-03-22 04:28:42 --> Total execution time: 2.6942
DEBUG - 2015-03-22 04:28:57 --> Config Class Initialized
DEBUG - 2015-03-22 04:28:57 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:28:57 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:28:57 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:28:57 --> URI Class Initialized
DEBUG - 2015-03-22 04:28:57 --> Router Class Initialized
DEBUG - 2015-03-22 04:28:57 --> Output Class Initialized
DEBUG - 2015-03-22 04:28:57 --> Security Class Initialized
DEBUG - 2015-03-22 04:28:57 --> Input Class Initialized
DEBUG - 2015-03-22 04:28:57 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:28:57 --> Language Class Initialized
DEBUG - 2015-03-22 04:28:58 --> Loader Class Initialized
DEBUG - 2015-03-22 04:28:58 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:28:58 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:28:58 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:28:58 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:28:58 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:28:58 --> Controller Class Initialized
DEBUG - 2015-03-22 04:28:58 --> File loaded: application/views//admin/order/crtEqpOrder.php
DEBUG - 2015-03-22 04:28:58 --> Final output sent to browser
DEBUG - 2015-03-22 04:28:58 --> Total execution time: 0.8590
DEBUG - 2015-03-22 04:28:58 --> Config Class Initialized
DEBUG - 2015-03-22 04:28:58 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:28:58 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:28:58 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:28:58 --> URI Class Initialized
DEBUG - 2015-03-22 04:28:58 --> Router Class Initialized
DEBUG - 2015-03-22 04:28:58 --> Output Class Initialized
DEBUG - 2015-03-22 04:28:58 --> Security Class Initialized
DEBUG - 2015-03-22 04:28:58 --> Input Class Initialized
DEBUG - 2015-03-22 04:28:58 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:28:58 --> Language Class Initialized
DEBUG - 2015-03-22 04:28:58 --> Loader Class Initialized
DEBUG - 2015-03-22 04:28:58 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:28:58 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:28:58 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:28:58 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:28:59 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:28:59 --> Controller Class Initialized
DEBUG - 2015-03-22 04:28:59 --> readEqpOrder:SELECT a.*, (select atcd_nm from cm_cd_attr where cd = '00B0' and atcd = a.srl_atcd) txt_srl_atcd, (select atcd_nm from cm_cd_attr where cd = '00D0' and atcd = a.rjt_pkt_tp_atcd) txt_rjt_pkt_tp_atcd, (select atcd_nm from cm_cd_attr where cd = '00E0' and atcd = a.pwr_cab_atcd) txt_pwr_cab_atcd, (select atcd_nm from cm_cd_attr where cd = '00F0' and atcd = a.shipped_by_atcd) txt_shipped_by_atcd, (select atcd_nm from cm_cd_attr where cd = '00F1' and atcd = a.courier_atcd) txt_courier_atcd, (select atcd_nm from cm_cd_attr where cd = '00G0' and atcd = a.payment_atcd) txt_payment_atcd, (select atcd_nm from cm_cd_attr where cd = '00H0' and atcd = a.incoterms_atcd) txt_incoterms_atcd, (select atcd_nm from cm_cd_attr where cd = '00L0' and atcd = a.lcd_color_atcd) txt_lcd_color_atcd, (select atcd_nm from cm_cd_attr where cd = '00M0' and atcd = a.lcd_lang_atcd) txt_lcd_lang_atcd, (select cmpy_nm from om_dealer where dealer_seq = a.dealer_seq) cmpy_nm, (select atcd_nm from cm_cd_attr where cd = '0022' and atcd = a.cntry_atcd) txt_cntry_atcd, if(mdl_cd in ('0007','0009'), concat(mdl_nm, concat('R',lan_L),if(a.lcd_color_atcd='00L00002','C','')), if(mdl_cd in ('3000'), concat(mdl_nm, concat('F',rjt_pkt_tp),''),mdl_nm)) txt_mdl_nm, DATE_FORMAT(a.delivery_dt, '%Y-%m-%d') txt_delivery_dt FROM ( SELECT a.*, b.cntry_atcd, b.dealer_seq, b.worker_seq, b.premium_rate, b.tot_amt, b.cnfm_yn, b.cnfm_dt, b.wrk_tp_atcd, b.udt_dt as order_dt, (CASE WHEN a.rjt_pkt_tp_atcd = ('00D00001') THEN 'A'  WHEN a.rjt_pkt_tp_atcd = ('00D00002') THEN 'I' END) rjt_pkt_tp, (SELECT mdl_nm FROM om_mdl WHERE mdl_cd = a.mdl_cd) mdl_nm, (SELECT if(count(*)>0,'L','') FROM om_ord_eqp_dtl where pi_no = a.pi_no and po_no = a.po_no and om_ord_eqp_dtl.atcd = '00A00001') lan_L FROM om_ord_eqp a, om_ord_inf b WHERE a.pi_no = b.pi_no AND a.pi_no = '150007bg' AND a.po_no = 32 ) a
DEBUG - 2015-03-22 04:28:59 --> SELECT b.cntry_atcd, b.dealer_seq, b.worker_seq, b.premium_rate, b.tot_amt, b.cnfm_yn, b.cnfm_dt, b.wrk_tp_atcd, a.*, (select atcd_nm from cm_cd_attr where cd = '0091' and atcd = a.currency_atch) txt_currency_atcd, (select atcd_nm from cm_cd_attr where cd = '0092' and atcd = a.serial_currency_atch) txt_serial_currency_atch, (select atcd_nm from cm_cd_attr where cd = '00A0' and atcd = a.opt_hw_atcd) txt_opt_hw_atcd, (select atcd_nm from cm_cd_attr where cd = '00C0' and atcd = a.pc_cab_atcd) txt_pc_cab_atcd FROM ( SELECT b.*,(case when b.cd='0091' then b.atcd else '' end) currency_atch,(CASE WHEN b.cd='0091' AND b.atcd_ox='O' THEN b.atcd ELSE '' END) fitness,(CASE WHEN b.cd='0091' THEN b.atcd_ox ELSE '' END) fitness_ox,(case when b.cd='0092' then b.atcd else '' end) serial_currency_atch,(CASE WHEN b.cd='0092' AND b.atcd_ox='O' THEN b.atcd ELSE '' END) srl_fitness,(CASE WHEN b.cd='0092' THEN b.atcd_ox ELSE '' END) srl_fitness_ox,(case when b.cd='00A0' then b.atcd else '' end) opt_hw_atcd,(case when b.cd='00C0' then b.atcd else '' end) pc_cab_atcd FROM om_ord_eqp a, om_ord_eqp_dtl b WHERE a.pi_no = b.pi_no AND a.po_no = b.po_no AND a.pi_no = '150007bg'		AND a.po_no = 32) a, om_ord_inf b WHERE a.pi_no = b.pi_no order by cd, atcd
DEBUG - 2015-03-22 04:28:59 --> INSERT INTO om_sndmail(pi_no, wrk_tp_atcd, sndmail_atcd, auth_grp_cd, sender_email, sender_eng_nm, title, ctnt, crt_dt, crt_uid) VALUES ('150007bg','00700110', '00700111', 'UD', 'kpbaek@localhost', (SELECT dealer_nm FROM om_dealer   WHERE dealer_uid='sofia@ubs-bg.com'), (select concat(atcd_nm,' - ',(select cmpy_nm from om_dealer where dealer_uid='sofia@ubs-bg.com')) from cm_cd_attr where cd = '0071' and atcd = '00700111'), '', now(), 'sofia@ubs-bg.com')
DEBUG - 2015-03-22 04:28:59 --> sql3:INSERT INTO om_sndmail_dtl (sndmail_seq, email_from, email_to, rcpnt_tp_atcd, snd_yn, crt_dt, crt_uid) SELECT 213, 'safe@safeleader.esy.es', (select usr_email from om_user where uid = a.dealer_uid), '00100010' rcpnt_tp_atcd, 'N', now(), 'sofia@ubs-bg.com' FROM om_dealer a, om_ord_inf b WHERE a.dealer_seq = b.dealer_seq AND b.pi_no = '150007bg' UNION SELECT 213, 'kpbaek@localhost', (select team_email from om_team where team_atcd = '00600SL0') email_to, '00100040' rcpnt_tp_atcd, 'N', now(), 'sofia@ubs-bg.com'
DEBUG - 2015-03-22 04:28:59 --> File loaded: application/views//common/crtSndMail.php
DEBUG - 2015-03-22 04:28:59 --> Final output sent to browser
DEBUG - 2015-03-22 04:28:59 --> Total execution time: 0.8781
DEBUG - 2015-03-22 04:28:59 --> Config Class Initialized
DEBUG - 2015-03-22 04:28:59 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:28:59 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:28:59 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:28:59 --> URI Class Initialized
DEBUG - 2015-03-22 04:28:59 --> Router Class Initialized
DEBUG - 2015-03-22 04:28:59 --> Output Class Initialized
DEBUG - 2015-03-22 04:28:59 --> Security Class Initialized
DEBUG - 2015-03-22 04:28:59 --> Input Class Initialized
DEBUG - 2015-03-22 04:28:59 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:28:59 --> Language Class Initialized
DEBUG - 2015-03-22 04:28:59 --> Loader Class Initialized
DEBUG - 2015-03-22 04:28:59 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:28:59 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:28:59 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:28:59 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:29:00 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:29:00 --> Controller Class Initialized
DEBUG - 2015-03-22 04:29:00 --> SELECT a.pi_no, a.sndmail_seq, a.wrk_tp_atcd, a.sender_email, a.title, a.ctnt, email_from, email_to, snd_yn, b.snd_no, b.rcpnt_tp_atcd, b.rcpnt_team_atcd,(select usr_nm from om_user where uid = a.sender_email) sender_nm,(select usr_nm from om_user where uid = b.email_to) rcpnt_nm FROM om_sndmail a, om_sndmail_dtl b WHERE a.sndmail_seq = b.sndmail_seq and a.sndmail_seq=213 and snd_yn='N'
DEBUG - 2015-03-22 04:29:00 --> File loaded: application/views//common/sndMailResult.php
DEBUG - 2015-03-22 04:29:00 --> Final output sent to browser
DEBUG - 2015-03-22 04:29:00 --> Total execution time: 0.9081
DEBUG - 2015-03-22 04:29:35 --> Config Class Initialized
DEBUG - 2015-03-22 04:29:35 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:29:35 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:29:35 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:29:35 --> URI Class Initialized
DEBUG - 2015-03-22 04:29:36 --> Router Class Initialized
DEBUG - 2015-03-22 04:29:36 --> Output Class Initialized
DEBUG - 2015-03-22 04:29:36 --> Security Class Initialized
DEBUG - 2015-03-22 04:29:36 --> Input Class Initialized
DEBUG - 2015-03-22 04:29:36 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:29:36 --> Language Class Initialized
DEBUG - 2015-03-22 04:29:36 --> Loader Class Initialized
DEBUG - 2015-03-22 04:29:36 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:29:36 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:29:36 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:29:36 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:29:36 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:29:36 --> Controller Class Initialized
DEBUG - 2015-03-22 04:29:36 --> File loaded: application/views//admin/order/main.php
DEBUG - 2015-03-22 04:29:36 --> Final output sent to browser
DEBUG - 2015-03-22 04:29:36 --> Total execution time: 0.8600
DEBUG - 2015-03-22 04:29:36 --> Config Class Initialized
DEBUG - 2015-03-22 04:29:37 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:29:37 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:29:37 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:29:37 --> URI Class Initialized
DEBUG - 2015-03-22 04:29:37 --> Router Class Initialized
DEBUG - 2015-03-22 04:29:37 --> Output Class Initialized
DEBUG - 2015-03-22 04:29:37 --> Security Class Initialized
DEBUG - 2015-03-22 04:29:37 --> Input Class Initialized
DEBUG - 2015-03-22 04:29:37 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:29:37 --> Language Class Initialized
DEBUG - 2015-03-22 04:29:37 --> Loader Class Initialized
DEBUG - 2015-03-22 04:29:37 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:29:37 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:29:37 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:29:37 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:29:37 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:29:37 --> Controller Class Initialized
DEBUG - 2015-03-22 04:29:37 --> File loaded: application/views//admin/order/tab01.php
DEBUG - 2015-03-22 04:29:37 --> Final output sent to browser
DEBUG - 2015-03-22 04:29:37 --> Total execution time: 0.7450
DEBUG - 2015-03-22 04:29:37 --> Config Class Initialized
DEBUG - 2015-03-22 04:29:37 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:29:37 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:29:38 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:29:38 --> URI Class Initialized
DEBUG - 2015-03-22 04:29:38 --> Router Class Initialized
DEBUG - 2015-03-22 04:29:38 --> Output Class Initialized
DEBUG - 2015-03-22 04:29:38 --> Security Class Initialized
DEBUG - 2015-03-22 04:29:38 --> Input Class Initialized
DEBUG - 2015-03-22 04:29:38 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:29:38 --> Language Class Initialized
DEBUG - 2015-03-22 04:29:38 --> Loader Class Initialized
DEBUG - 2015-03-22 04:29:38 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:29:38 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:29:38 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:29:38 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:29:38 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:29:38 --> Controller Class Initialized
DEBUG - 2015-03-22 04:29:38 --> File loaded: application/views//common/user/viewDealer.php
DEBUG - 2015-03-22 04:29:38 --> Final output sent to browser
DEBUG - 2015-03-22 04:29:38 --> Total execution time: 0.7350
DEBUG - 2015-03-22 04:29:38 --> Config Class Initialized
DEBUG - 2015-03-22 04:29:38 --> Config Class Initialized
DEBUG - 2015-03-22 04:29:38 --> Config Class Initialized
DEBUG - 2015-03-22 04:29:38 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:29:38 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:29:38 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:29:38 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:29:38 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:29:38 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:29:38 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:29:38 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:29:38 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:29:38 --> URI Class Initialized
DEBUG - 2015-03-22 04:29:38 --> Config Class Initialized
DEBUG - 2015-03-22 04:29:39 --> URI Class Initialized
DEBUG - 2015-03-22 04:29:39 --> URI Class Initialized
DEBUG - 2015-03-22 04:29:39 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:29:39 --> Config Class Initialized
DEBUG - 2015-03-22 04:29:39 --> Router Class Initialized
DEBUG - 2015-03-22 04:29:39 --> Router Class Initialized
DEBUG - 2015-03-22 04:29:39 --> Config Class Initialized
DEBUG - 2015-03-22 04:29:39 --> Router Class Initialized
DEBUG - 2015-03-22 04:29:39 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:29:39 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:29:39 --> Output Class Initialized
DEBUG - 2015-03-22 04:29:39 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:29:39 --> Output Class Initialized
DEBUG - 2015-03-22 04:29:39 --> Output Class Initialized
DEBUG - 2015-03-22 04:29:39 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:29:39 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:29:39 --> Security Class Initialized
DEBUG - 2015-03-22 04:29:39 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:29:39 --> Security Class Initialized
DEBUG - 2015-03-22 04:29:39 --> Security Class Initialized
DEBUG - 2015-03-22 04:29:39 --> Input Class Initialized
DEBUG - 2015-03-22 04:29:39 --> URI Class Initialized
DEBUG - 2015-03-22 04:29:39 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:29:39 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:29:39 --> Input Class Initialized
DEBUG - 2015-03-22 04:29:39 --> Input Class Initialized
DEBUG - 2015-03-22 04:29:39 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:29:39 --> Router Class Initialized
DEBUG - 2015-03-22 04:29:39 --> URI Class Initialized
DEBUG - 2015-03-22 04:29:39 --> URI Class Initialized
DEBUG - 2015-03-22 04:29:39 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:29:39 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:29:39 --> Language Class Initialized
DEBUG - 2015-03-22 04:29:39 --> Loader Class Initialized
DEBUG - 2015-03-22 04:29:39 --> Output Class Initialized
DEBUG - 2015-03-22 04:29:39 --> Router Class Initialized
DEBUG - 2015-03-22 04:29:39 --> Router Class Initialized
DEBUG - 2015-03-22 04:29:39 --> Language Class Initialized
DEBUG - 2015-03-22 04:29:39 --> Language Class Initialized
DEBUG - 2015-03-22 04:29:39 --> Security Class Initialized
DEBUG - 2015-03-22 04:29:39 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:29:39 --> Output Class Initialized
DEBUG - 2015-03-22 04:29:40 --> Output Class Initialized
DEBUG - 2015-03-22 04:29:40 --> Loader Class Initialized
DEBUG - 2015-03-22 04:29:40 --> Loader Class Initialized
DEBUG - 2015-03-22 04:29:40 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:29:40 --> Input Class Initialized
DEBUG - 2015-03-22 04:29:40 --> Security Class Initialized
DEBUG - 2015-03-22 04:29:40 --> Security Class Initialized
DEBUG - 2015-03-22 04:29:40 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:29:40 --> Config Class Initialized
DEBUG - 2015-03-22 04:29:40 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:29:40 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:29:40 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:29:40 --> Input Class Initialized
DEBUG - 2015-03-22 04:29:40 --> Config Class Initialized
DEBUG - 2015-03-22 04:29:40 --> Input Class Initialized
DEBUG - 2015-03-22 04:29:40 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:29:40 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:29:40 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:29:40 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:29:40 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:29:40 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:29:40 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:29:40 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:29:40 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:29:40 --> Language Class Initialized
DEBUG - 2015-03-22 04:29:40 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:29:40 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:29:40 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:29:40 --> Language Class Initialized
DEBUG - 2015-03-22 04:29:40 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:29:40 --> Language Class Initialized
DEBUG - 2015-03-22 04:29:40 --> Config Class Initialized
DEBUG - 2015-03-22 04:29:40 --> Loader Class Initialized
DEBUG - 2015-03-22 04:29:40 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:29:40 --> Loader Class Initialized
DEBUG - 2015-03-22 04:29:40 --> URI Class Initialized
DEBUG - 2015-03-22 04:29:40 --> Controller Class Initialized
DEBUG - 2015-03-22 04:29:40 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:29:40 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:29:40 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:29:40 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:29:40 --> Router Class Initialized
DEBUG - 2015-03-22 04:29:40 --> File loaded: application/views//common/user/listCntry.php
DEBUG - 2015-03-22 04:29:40 --> Loader Class Initialized
DEBUG - 2015-03-22 04:29:40 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:29:40 --> URI Class Initialized
DEBUG - 2015-03-22 04:29:40 --> Config Class Initialized
DEBUG - 2015-03-22 04:29:40 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:29:40 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:29:40 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:29:40 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:29:40 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:29:40 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:29:40 --> Output Class Initialized
DEBUG - 2015-03-22 04:29:40 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:29:40 --> Controller Class Initialized
DEBUG - 2015-03-22 04:29:40 --> Final output sent to browser
DEBUG - 2015-03-22 04:29:41 --> Router Class Initialized
DEBUG - 2015-03-22 04:29:41 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:29:41 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:29:41 --> Controller Class Initialized
DEBUG - 2015-03-22 04:29:41 --> URI Class Initialized
DEBUG - 2015-03-22 04:29:41 --> File loaded: application/views//common/listModel.php
DEBUG - 2015-03-22 04:29:41 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:29:41 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:29:41 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:29:41 --> Output Class Initialized
DEBUG - 2015-03-22 04:29:41 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:29:41 --> Security Class Initialized
DEBUG - 2015-03-22 04:29:41 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:29:41 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:29:41 --> URI Class Initialized
DEBUG - 2015-03-22 04:29:41 --> Total execution time: 2.2111
DEBUG - 2015-03-22 04:29:41 --> Final output sent to browser
DEBUG - 2015-03-22 04:29:41 --> Security Class Initialized
DEBUG - 2015-03-22 04:29:41 --> Router Class Initialized
DEBUG - 2015-03-22 04:29:41 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:29:41 --> Input Class Initialized
DEBUG - 2015-03-22 04:29:41 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:29:41 --> Config Class Initialized
DEBUG - 2015-03-22 04:29:41 --> Config Class Initialized
DEBUG - 2015-03-22 04:29:41 --> Controller Class Initialized
DEBUG - 2015-03-22 04:29:41 --> Router Class Initialized
DEBUG - 2015-03-22 04:29:41 --> File loaded: application/views//common/user/listUserPiNo.php
DEBUG - 2015-03-22 04:29:41 --> Total execution time: 2.3521
DEBUG - 2015-03-22 04:29:41 --> Config Class Initialized
DEBUG - 2015-03-22 04:29:41 --> Input Class Initialized
DEBUG - 2015-03-22 04:29:41 --> Output Class Initialized
DEBUG - 2015-03-22 04:29:41 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:29:41 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:29:41 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:29:41 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:29:41 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 04:29:41 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:29:41 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:29:41 --> Output Class Initialized
DEBUG - 2015-03-22 04:29:41 --> Final output sent to browser
DEBUG - 2015-03-22 04:29:41 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:29:41 --> Security Class Initialized
DEBUG - 2015-03-22 04:29:41 --> Config Class Initialized
DEBUG - 2015-03-22 04:29:41 --> Language Class Initialized
DEBUG - 2015-03-22 04:29:41 --> Controller Class Initialized
DEBUG - 2015-03-22 04:29:41 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:29:41 --> Final output sent to browser
DEBUG - 2015-03-22 04:29:42 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:29:42 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:29:42 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:29:42 --> Total execution time: 3.0272
DEBUG - 2015-03-22 04:29:42 --> Security Class Initialized
DEBUG - 2015-03-22 04:29:42 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:29:42 --> Controller Class Initialized
DEBUG - 2015-03-22 04:29:42 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:29:42 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:29:42 --> URI Class Initialized
DEBUG - 2015-03-22 04:29:42 --> Loader Class Initialized
DEBUG - 2015-03-22 04:29:42 --> Input Class Initialized
DEBUG - 2015-03-22 04:29:42 --> Total execution time: 2.9502
DEBUG - 2015-03-22 04:29:42 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 04:29:42 --> Language Class Initialized
DEBUG - 2015-03-22 04:29:42 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:29:42 --> Input Class Initialized
DEBUG - 2015-03-22 04:29:42 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 04:29:42 --> URI Class Initialized
DEBUG - 2015-03-22 04:29:42 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:29:42 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:29:42 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:29:42 --> Router Class Initialized
DEBUG - 2015-03-22 04:29:42 --> URI Class Initialized
DEBUG - 2015-03-22 04:29:42 --> Loader Class Initialized
DEBUG - 2015-03-22 04:29:42 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:29:42 --> Final output sent to browser
DEBUG - 2015-03-22 04:29:42 --> Router Class Initialized
DEBUG - 2015-03-22 04:29:42 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:29:42 --> Language Class Initialized
DEBUG - 2015-03-22 04:29:42 --> Final output sent to browser
DEBUG - 2015-03-22 04:29:42 --> Router Class Initialized
DEBUG - 2015-03-22 04:29:42 --> Total execution time: 3.4432
DEBUG - 2015-03-22 04:29:42 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:29:42 --> URI Class Initialized
DEBUG - 2015-03-22 04:29:42 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:29:42 --> Output Class Initialized
DEBUG - 2015-03-22 04:29:42 --> Language Class Initialized
DEBUG - 2015-03-22 04:29:42 --> Output Class Initialized
DEBUG - 2015-03-22 04:29:42 --> Total execution time: 3.4542
DEBUG - 2015-03-22 04:29:42 --> Loader Class Initialized
DEBUG - 2015-03-22 04:29:42 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:29:42 --> Output Class Initialized
DEBUG - 2015-03-22 04:29:42 --> Security Class Initialized
DEBUG - 2015-03-22 04:29:42 --> Router Class Initialized
DEBUG - 2015-03-22 04:29:42 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:29:42 --> Security Class Initialized
DEBUG - 2015-03-22 04:29:42 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:29:42 --> Input Class Initialized
DEBUG - 2015-03-22 04:29:42 --> Loader Class Initialized
DEBUG - 2015-03-22 04:29:42 --> Output Class Initialized
DEBUG - 2015-03-22 04:29:42 --> Security Class Initialized
DEBUG - 2015-03-22 04:29:42 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:29:42 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:29:42 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:29:42 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:29:42 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:29:42 --> Security Class Initialized
DEBUG - 2015-03-22 04:29:42 --> Input Class Initialized
DEBUG - 2015-03-22 04:29:42 --> Input Class Initialized
DEBUG - 2015-03-22 04:29:42 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:29:42 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:29:42 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:29:42 --> Language Class Initialized
DEBUG - 2015-03-22 04:29:43 --> Input Class Initialized
DEBUG - 2015-03-22 04:29:43 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:29:43 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:29:43 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:29:43 --> Controller Class Initialized
DEBUG - 2015-03-22 04:29:43 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:29:43 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:29:43 --> Loader Class Initialized
DEBUG - 2015-03-22 04:29:43 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:29:43 --> Language Class Initialized
DEBUG - 2015-03-22 04:29:43 --> Language Class Initialized
DEBUG - 2015-03-22 04:29:43 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:29:43 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 04:29:43 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:29:43 --> Language Class Initialized
DEBUG - 2015-03-22 04:29:43 --> Controller Class Initialized
DEBUG - 2015-03-22 04:29:43 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:29:43 --> Loader Class Initialized
DEBUG - 2015-03-22 04:29:43 --> Loader Class Initialized
DEBUG - 2015-03-22 04:29:43 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:29:43 --> Final output sent to browser
DEBUG - 2015-03-22 04:29:43 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:29:43 --> Loader Class Initialized
DEBUG - 2015-03-22 04:29:43 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 04:29:43 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:29:43 --> Total execution time: 3.3642
DEBUG - 2015-03-22 04:29:43 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:29:43 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:29:43 --> Controller Class Initialized
DEBUG - 2015-03-22 04:29:43 --> Final output sent to browser
DEBUG - 2015-03-22 04:29:43 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:29:43 --> Controller Class Initialized
DEBUG - 2015-03-22 04:29:43 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 04:29:44 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:29:44 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:29:44 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:29:44 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:29:44 --> Total execution time: 3.7332
DEBUG - 2015-03-22 04:29:44 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:29:44 --> Final output sent to browser
DEBUG - 2015-03-22 04:29:44 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:29:44 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:29:44 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:29:44 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 04:29:44 --> Total execution time: 3.2982
DEBUG - 2015-03-22 04:29:44 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:29:44 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:29:44 --> Final output sent to browser
DEBUG - 2015-03-22 04:29:44 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:29:44 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:29:44 --> Total execution time: 3.2602
DEBUG - 2015-03-22 04:29:44 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:29:44 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:29:44 --> Controller Class Initialized
DEBUG - 2015-03-22 04:29:44 --> Controller Class Initialized
DEBUG - 2015-03-22 04:29:44 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 04:29:44 --> Controller Class Initialized
DEBUG - 2015-03-22 04:29:44 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:29:44 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 04:29:44 --> File loaded: application/views//common/listCodeImg.php
DEBUG - 2015-03-22 04:29:44 --> Final output sent to browser
DEBUG - 2015-03-22 04:29:44 --> Final output sent to browser
DEBUG - 2015-03-22 04:29:44 --> Final output sent to browser
DEBUG - 2015-03-22 04:29:44 --> Controller Class Initialized
DEBUG - 2015-03-22 04:29:44 --> Total execution time: 2.6982
DEBUG - 2015-03-22 04:29:44 --> Total execution time: 3.1562
DEBUG - 2015-03-22 04:29:44 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 04:29:44 --> Total execution time: 3.1682
DEBUG - 2015-03-22 04:29:44 --> Final output sent to browser
DEBUG - 2015-03-22 04:29:44 --> Total execution time: 3.1872
DEBUG - 2015-03-22 04:29:53 --> Config Class Initialized
DEBUG - 2015-03-22 04:29:53 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:29:53 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:29:53 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:29:53 --> URI Class Initialized
DEBUG - 2015-03-22 04:29:53 --> Router Class Initialized
DEBUG - 2015-03-22 04:29:53 --> Output Class Initialized
DEBUG - 2015-03-22 04:29:54 --> Security Class Initialized
DEBUG - 2015-03-22 04:29:54 --> Input Class Initialized
DEBUG - 2015-03-22 04:29:54 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:29:54 --> Language Class Initialized
DEBUG - 2015-03-22 04:29:54 --> Loader Class Initialized
DEBUG - 2015-03-22 04:29:54 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:29:54 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:29:54 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:29:54 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:29:54 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:29:54 --> Controller Class Initialized
DEBUG - 2015-03-22 04:29:54 --> File loaded: application/views//admin/order/crtEqpOrder.php
DEBUG - 2015-03-22 04:29:54 --> Final output sent to browser
DEBUG - 2015-03-22 04:29:54 --> Total execution time: 0.8851
DEBUG - 2015-03-22 04:29:54 --> Config Class Initialized
DEBUG - 2015-03-22 04:29:54 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:29:54 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:29:54 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:29:54 --> URI Class Initialized
DEBUG - 2015-03-22 04:29:54 --> Router Class Initialized
DEBUG - 2015-03-22 04:29:54 --> Output Class Initialized
DEBUG - 2015-03-22 04:29:55 --> Security Class Initialized
DEBUG - 2015-03-22 04:29:55 --> Input Class Initialized
DEBUG - 2015-03-22 04:29:55 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:29:55 --> Language Class Initialized
DEBUG - 2015-03-22 04:29:55 --> Loader Class Initialized
DEBUG - 2015-03-22 04:29:55 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:29:55 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:29:55 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:29:55 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:29:55 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:29:55 --> Controller Class Initialized
DEBUG - 2015-03-22 04:29:55 --> readEqpOrder:SELECT a.*, (select atcd_nm from cm_cd_attr where cd = '00B0' and atcd = a.srl_atcd) txt_srl_atcd, (select atcd_nm from cm_cd_attr where cd = '00D0' and atcd = a.rjt_pkt_tp_atcd) txt_rjt_pkt_tp_atcd, (select atcd_nm from cm_cd_attr where cd = '00E0' and atcd = a.pwr_cab_atcd) txt_pwr_cab_atcd, (select atcd_nm from cm_cd_attr where cd = '00F0' and atcd = a.shipped_by_atcd) txt_shipped_by_atcd, (select atcd_nm from cm_cd_attr where cd = '00F1' and atcd = a.courier_atcd) txt_courier_atcd, (select atcd_nm from cm_cd_attr where cd = '00G0' and atcd = a.payment_atcd) txt_payment_atcd, (select atcd_nm from cm_cd_attr where cd = '00H0' and atcd = a.incoterms_atcd) txt_incoterms_atcd, (select atcd_nm from cm_cd_attr where cd = '00L0' and atcd = a.lcd_color_atcd) txt_lcd_color_atcd, (select atcd_nm from cm_cd_attr where cd = '00M0' and atcd = a.lcd_lang_atcd) txt_lcd_lang_atcd, (select cmpy_nm from om_dealer where dealer_seq = a.dealer_seq) cmpy_nm, (select atcd_nm from cm_cd_attr where cd = '0022' and atcd = a.cntry_atcd) txt_cntry_atcd, if(mdl_cd in ('0007','0009'), concat(mdl_nm, concat('R',lan_L),if(a.lcd_color_atcd='00L00002','C','')), if(mdl_cd in ('3000'), concat(mdl_nm, concat('F',rjt_pkt_tp),''),mdl_nm)) txt_mdl_nm, DATE_FORMAT(a.delivery_dt, '%Y-%m-%d') txt_delivery_dt FROM ( SELECT a.*, b.cntry_atcd, b.dealer_seq, b.worker_seq, b.premium_rate, b.tot_amt, b.cnfm_yn, b.cnfm_dt, b.wrk_tp_atcd, b.udt_dt as order_dt, (CASE WHEN a.rjt_pkt_tp_atcd = ('00D00001') THEN 'A'  WHEN a.rjt_pkt_tp_atcd = ('00D00002') THEN 'I' END) rjt_pkt_tp, (SELECT mdl_nm FROM om_mdl WHERE mdl_cd = a.mdl_cd) mdl_nm, (SELECT if(count(*)>0,'L','') FROM om_ord_eqp_dtl where pi_no = a.pi_no and po_no = a.po_no and om_ord_eqp_dtl.atcd = '00A00001') lan_L FROM om_ord_eqp a, om_ord_inf b WHERE a.pi_no = b.pi_no AND a.pi_no = '150008bg' AND a.po_no = 33 ) a
DEBUG - 2015-03-22 04:29:55 --> SELECT b.cntry_atcd, b.dealer_seq, b.worker_seq, b.premium_rate, b.tot_amt, b.cnfm_yn, b.cnfm_dt, b.wrk_tp_atcd, a.*, (select atcd_nm from cm_cd_attr where cd = '0091' and atcd = a.currency_atch) txt_currency_atcd, (select atcd_nm from cm_cd_attr where cd = '0092' and atcd = a.serial_currency_atch) txt_serial_currency_atch, (select atcd_nm from cm_cd_attr where cd = '00A0' and atcd = a.opt_hw_atcd) txt_opt_hw_atcd, (select atcd_nm from cm_cd_attr where cd = '00C0' and atcd = a.pc_cab_atcd) txt_pc_cab_atcd FROM ( SELECT b.*,(case when b.cd='0091' then b.atcd else '' end) currency_atch,(CASE WHEN b.cd='0091' AND b.atcd_ox='O' THEN b.atcd ELSE '' END) fitness,(CASE WHEN b.cd='0091' THEN b.atcd_ox ELSE '' END) fitness_ox,(case when b.cd='0092' then b.atcd else '' end) serial_currency_atch,(CASE WHEN b.cd='0092' AND b.atcd_ox='O' THEN b.atcd ELSE '' END) srl_fitness,(CASE WHEN b.cd='0092' THEN b.atcd_ox ELSE '' END) srl_fitness_ox,(case when b.cd='00A0' then b.atcd else '' end) opt_hw_atcd,(case when b.cd='00C0' then b.atcd else '' end) pc_cab_atcd FROM om_ord_eqp a, om_ord_eqp_dtl b WHERE a.pi_no = b.pi_no AND a.po_no = b.po_no AND a.pi_no = '150008bg'		AND a.po_no = 33) a, om_ord_inf b WHERE a.pi_no = b.pi_no order by cd, atcd
DEBUG - 2015-03-22 04:29:55 --> INSERT INTO om_sndmail(pi_no, wrk_tp_atcd, sndmail_atcd, auth_grp_cd, sender_email, sender_eng_nm, title, ctnt, crt_dt, crt_uid) VALUES ('150008bg','00700110', '00700111', 'UD', 'kpbaek@localhost', (SELECT dealer_nm FROM om_dealer   WHERE dealer_uid='sofia@ubs-bg.com'), (select concat(atcd_nm,' - ',(select cmpy_nm from om_dealer where dealer_uid='sofia@ubs-bg.com')) from cm_cd_attr where cd = '0071' and atcd = '00700111'), '', now(), 'sofia@ubs-bg.com')
DEBUG - 2015-03-22 04:29:55 --> sql3:INSERT INTO om_sndmail_dtl (sndmail_seq, email_from, email_to, rcpnt_tp_atcd, snd_yn, crt_dt, crt_uid) SELECT 214, 'safe@safeleader.esy.es', (select usr_email from om_user where uid = a.dealer_uid), '00100010' rcpnt_tp_atcd, 'N', now(), 'sofia@ubs-bg.com' FROM om_dealer a, om_ord_inf b WHERE a.dealer_seq = b.dealer_seq AND b.pi_no = '150008bg' UNION SELECT 214, 'kpbaek@localhost', (select team_email from om_team where team_atcd = '00600SL0') email_to, '00100040' rcpnt_tp_atcd, 'N', now(), 'sofia@ubs-bg.com'
DEBUG - 2015-03-22 04:29:55 --> File loaded: application/views//common/crtSndMail.php
DEBUG - 2015-03-22 04:29:55 --> Final output sent to browser
DEBUG - 2015-03-22 04:29:55 --> Total execution time: 1.0471
DEBUG - 2015-03-22 04:29:55 --> Config Class Initialized
DEBUG - 2015-03-22 04:29:55 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:29:55 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:29:55 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:29:55 --> URI Class Initialized
DEBUG - 2015-03-22 04:29:56 --> Router Class Initialized
DEBUG - 2015-03-22 04:29:56 --> Output Class Initialized
DEBUG - 2015-03-22 04:29:56 --> Security Class Initialized
DEBUG - 2015-03-22 04:29:56 --> Input Class Initialized
DEBUG - 2015-03-22 04:29:56 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:29:56 --> Language Class Initialized
DEBUG - 2015-03-22 04:29:56 --> Loader Class Initialized
DEBUG - 2015-03-22 04:29:56 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:29:56 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:29:56 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:29:56 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:29:56 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:29:56 --> Controller Class Initialized
DEBUG - 2015-03-22 04:29:56 --> SELECT a.pi_no, a.sndmail_seq, a.wrk_tp_atcd, a.sender_email, a.title, a.ctnt, email_from, email_to, snd_yn, b.snd_no, b.rcpnt_tp_atcd, b.rcpnt_team_atcd,(select usr_nm from om_user where uid = a.sender_email) sender_nm,(select usr_nm from om_user where uid = b.email_to) rcpnt_nm FROM om_sndmail a, om_sndmail_dtl b WHERE a.sndmail_seq = b.sndmail_seq and a.sndmail_seq=214 and snd_yn='N'
DEBUG - 2015-03-22 04:29:56 --> File loaded: application/views//common/sndMailResult.php
DEBUG - 2015-03-22 04:29:56 --> Final output sent to browser
DEBUG - 2015-03-22 04:29:56 --> Total execution time: 0.9991
DEBUG - 2015-03-22 04:31:43 --> Config Class Initialized
DEBUG - 2015-03-22 04:31:44 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:31:44 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:31:44 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:31:44 --> URI Class Initialized
DEBUG - 2015-03-22 04:31:44 --> Router Class Initialized
DEBUG - 2015-03-22 04:31:44 --> Output Class Initialized
DEBUG - 2015-03-22 04:31:44 --> Security Class Initialized
DEBUG - 2015-03-22 04:31:44 --> Input Class Initialized
DEBUG - 2015-03-22 04:31:44 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:31:44 --> Language Class Initialized
DEBUG - 2015-03-22 04:31:44 --> Loader Class Initialized
DEBUG - 2015-03-22 04:31:44 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:31:44 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:31:44 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:31:44 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:31:44 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:31:44 --> Controller Class Initialized
DEBUG - 2015-03-22 04:31:44 --> File loaded: application/views//admin/order/main.php
DEBUG - 2015-03-22 04:31:44 --> Final output sent to browser
DEBUG - 2015-03-22 04:31:44 --> Total execution time: 0.8841
DEBUG - 2015-03-22 04:31:45 --> Config Class Initialized
DEBUG - 2015-03-22 04:31:45 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:31:45 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:31:45 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:31:45 --> URI Class Initialized
DEBUG - 2015-03-22 04:31:45 --> Router Class Initialized
DEBUG - 2015-03-22 04:31:45 --> Output Class Initialized
DEBUG - 2015-03-22 04:31:45 --> Security Class Initialized
DEBUG - 2015-03-22 04:31:45 --> Input Class Initialized
DEBUG - 2015-03-22 04:31:45 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:31:45 --> Language Class Initialized
DEBUG - 2015-03-22 04:31:45 --> Loader Class Initialized
DEBUG - 2015-03-22 04:31:45 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:31:45 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:31:45 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:31:45 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:31:45 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:31:45 --> Controller Class Initialized
DEBUG - 2015-03-22 04:31:45 --> File loaded: application/views//admin/order/tab01.php
DEBUG - 2015-03-22 04:31:45 --> Final output sent to browser
DEBUG - 2015-03-22 04:31:46 --> Total execution time: 0.8230
DEBUG - 2015-03-22 04:31:46 --> Config Class Initialized
DEBUG - 2015-03-22 04:31:46 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:31:46 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:31:46 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:31:46 --> URI Class Initialized
DEBUG - 2015-03-22 04:31:46 --> Router Class Initialized
DEBUG - 2015-03-22 04:31:46 --> Output Class Initialized
DEBUG - 2015-03-22 04:31:46 --> Security Class Initialized
DEBUG - 2015-03-22 04:31:46 --> Input Class Initialized
DEBUG - 2015-03-22 04:31:46 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:31:46 --> Language Class Initialized
DEBUG - 2015-03-22 04:31:46 --> Loader Class Initialized
DEBUG - 2015-03-22 04:31:46 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:31:46 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:31:46 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:31:46 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:31:46 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:31:46 --> Controller Class Initialized
DEBUG - 2015-03-22 04:31:47 --> File loaded: application/views//common/user/viewDealer.php
DEBUG - 2015-03-22 04:31:47 --> Final output sent to browser
DEBUG - 2015-03-22 04:31:47 --> Total execution time: 0.8110
DEBUG - 2015-03-22 04:31:47 --> Config Class Initialized
DEBUG - 2015-03-22 04:31:47 --> Config Class Initialized
DEBUG - 2015-03-22 04:31:47 --> Config Class Initialized
DEBUG - 2015-03-22 04:31:47 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:31:47 --> Config Class Initialized
DEBUG - 2015-03-22 04:31:47 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:31:47 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:31:47 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:31:47 --> Config Class Initialized
DEBUG - 2015-03-22 04:31:47 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:31:47 --> Config Class Initialized
DEBUG - 2015-03-22 04:31:47 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:31:47 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:31:47 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:31:47 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:31:47 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:31:47 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:31:47 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:31:47 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:31:47 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:31:47 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:31:47 --> URI Class Initialized
DEBUG - 2015-03-22 04:31:47 --> URI Class Initialized
DEBUG - 2015-03-22 04:31:47 --> URI Class Initialized
DEBUG - 2015-03-22 04:31:47 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:31:47 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:31:47 --> URI Class Initialized
DEBUG - 2015-03-22 04:31:47 --> Router Class Initialized
DEBUG - 2015-03-22 04:31:47 --> Router Class Initialized
DEBUG - 2015-03-22 04:31:47 --> Router Class Initialized
DEBUG - 2015-03-22 04:31:47 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:31:47 --> Router Class Initialized
DEBUG - 2015-03-22 04:31:47 --> URI Class Initialized
DEBUG - 2015-03-22 04:31:47 --> Output Class Initialized
DEBUG - 2015-03-22 04:31:47 --> Output Class Initialized
DEBUG - 2015-03-22 04:31:48 --> URI Class Initialized
DEBUG - 2015-03-22 04:31:48 --> Output Class Initialized
DEBUG - 2015-03-22 04:31:48 --> Security Class Initialized
DEBUG - 2015-03-22 04:31:48 --> Router Class Initialized
DEBUG - 2015-03-22 04:31:48 --> Output Class Initialized
DEBUG - 2015-03-22 04:31:48 --> Router Class Initialized
DEBUG - 2015-03-22 04:31:48 --> Security Class Initialized
DEBUG - 2015-03-22 04:31:48 --> Input Class Initialized
DEBUG - 2015-03-22 04:31:48 --> Security Class Initialized
DEBUG - 2015-03-22 04:31:48 --> Output Class Initialized
DEBUG - 2015-03-22 04:31:48 --> Output Class Initialized
DEBUG - 2015-03-22 04:31:48 --> Security Class Initialized
DEBUG - 2015-03-22 04:31:48 --> Input Class Initialized
DEBUG - 2015-03-22 04:31:48 --> Input Class Initialized
DEBUG - 2015-03-22 04:31:48 --> Security Class Initialized
DEBUG - 2015-03-22 04:31:48 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:31:48 --> Input Class Initialized
DEBUG - 2015-03-22 04:31:48 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:31:48 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:31:48 --> Security Class Initialized
DEBUG - 2015-03-22 04:31:48 --> Config Class Initialized
DEBUG - 2015-03-22 04:31:48 --> Config Class Initialized
DEBUG - 2015-03-22 04:31:48 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:31:48 --> Language Class Initialized
DEBUG - 2015-03-22 04:31:48 --> Input Class Initialized
DEBUG - 2015-03-22 04:31:48 --> Language Class Initialized
DEBUG - 2015-03-22 04:31:48 --> Language Class Initialized
DEBUG - 2015-03-22 04:31:48 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:31:48 --> Loader Class Initialized
DEBUG - 2015-03-22 04:31:48 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:31:48 --> Input Class Initialized
DEBUG - 2015-03-22 04:31:48 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:31:48 --> Loader Class Initialized
DEBUG - 2015-03-22 04:31:48 --> Language Class Initialized
DEBUG - 2015-03-22 04:31:49 --> Loader Class Initialized
DEBUG - 2015-03-22 04:31:49 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:31:49 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:31:49 --> Config Class Initialized
DEBUG - 2015-03-22 04:31:49 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:31:49 --> Config Class Initialized
DEBUG - 2015-03-22 04:31:49 --> Language Class Initialized
DEBUG - 2015-03-22 04:31:49 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:31:49 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:31:49 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:31:49 --> Loader Class Initialized
DEBUG - 2015-03-22 04:31:49 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:31:49 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:31:49 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:31:49 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:31:49 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:31:49 --> Loader Class Initialized
DEBUG - 2015-03-22 04:31:49 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:31:49 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:31:49 --> Language Class Initialized
DEBUG - 2015-03-22 04:31:49 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:31:49 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:31:49 --> URI Class Initialized
DEBUG - 2015-03-22 04:31:49 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:31:49 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:31:49 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:31:49 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:31:49 --> Loader Class Initialized
DEBUG - 2015-03-22 04:31:49 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:31:49 --> Router Class Initialized
DEBUG - 2015-03-22 04:31:49 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:31:49 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:31:49 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:31:49 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:31:49 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:31:49 --> URI Class Initialized
DEBUG - 2015-03-22 04:31:49 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:31:49 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:31:49 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:31:49 --> URI Class Initialized
DEBUG - 2015-03-22 04:31:49 --> Output Class Initialized
DEBUG - 2015-03-22 04:31:49 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:31:49 --> URI Class Initialized
DEBUG - 2015-03-22 04:31:49 --> Router Class Initialized
DEBUG - 2015-03-22 04:31:49 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:31:49 --> Config Class Initialized
DEBUG - 2015-03-22 04:31:49 --> Config Class Initialized
DEBUG - 2015-03-22 04:31:50 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:31:50 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:31:50 --> Router Class Initialized
DEBUG - 2015-03-22 04:31:50 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:31:50 --> Security Class Initialized
DEBUG - 2015-03-22 04:31:50 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:31:50 --> Router Class Initialized
DEBUG - 2015-03-22 04:31:50 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:31:50 --> Output Class Initialized
DEBUG - 2015-03-22 04:31:50 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:31:50 --> Controller Class Initialized
DEBUG - 2015-03-22 04:31:50 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:31:50 --> Controller Class Initialized
DEBUG - 2015-03-22 04:31:50 --> Controller Class Initialized
DEBUG - 2015-03-22 04:31:50 --> Output Class Initialized
DEBUG - 2015-03-22 04:31:50 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:31:50 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:31:50 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:31:50 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:31:50 --> Input Class Initialized
DEBUG - 2015-03-22 04:31:50 --> Output Class Initialized
DEBUG - 2015-03-22 04:31:50 --> File loaded: application/views//common/user/listCntry.php
DEBUG - 2015-03-22 04:31:50 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:31:50 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:31:50 --> Security Class Initialized
DEBUG - 2015-03-22 04:31:50 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:31:50 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:31:50 --> Controller Class Initialized
DEBUG - 2015-03-22 04:31:50 --> Input Class Initialized
DEBUG - 2015-03-22 04:31:50 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:31:50 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:31:50 --> File loaded: application/views//common/listModel.php
DEBUG - 2015-03-22 04:31:50 --> Security Class Initialized
DEBUG - 2015-03-22 04:31:50 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 04:31:50 --> Controller Class Initialized
DEBUG - 2015-03-22 04:31:50 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:31:50 --> URI Class Initialized
DEBUG - 2015-03-22 04:31:50 --> Language Class Initialized
DEBUG - 2015-03-22 04:31:50 --> Final output sent to browser
DEBUG - 2015-03-22 04:31:50 --> URI Class Initialized
DEBUG - 2015-03-22 04:31:50 --> Security Class Initialized
DEBUG - 2015-03-22 04:31:50 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:31:50 --> Language Class Initialized
DEBUG - 2015-03-22 04:31:50 --> Final output sent to browser
DEBUG - 2015-03-22 04:31:50 --> Loader Class Initialized
DEBUG - 2015-03-22 04:31:50 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 04:31:50 --> Router Class Initialized
DEBUG - 2015-03-22 04:31:50 --> Total execution time: 3.3622
DEBUG - 2015-03-22 04:31:50 --> Controller Class Initialized
DEBUG - 2015-03-22 04:31:50 --> Total execution time: 3.2692
DEBUG - 2015-03-22 04:31:50 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:31:50 --> Loader Class Initialized
DEBUG - 2015-03-22 04:31:50 --> Final output sent to browser
DEBUG - 2015-03-22 04:31:50 --> Final output sent to browser
DEBUG - 2015-03-22 04:31:50 --> File loaded: application/views//common/user/listUserPiNo.php
DEBUG - 2015-03-22 04:31:50 --> Config Class Initialized
DEBUG - 2015-03-22 04:31:50 --> Router Class Initialized
DEBUG - 2015-03-22 04:31:50 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 04:31:50 --> Final output sent to browser
DEBUG - 2015-03-22 04:31:50 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:31:50 --> Total execution time: 3.3292
DEBUG - 2015-03-22 04:31:50 --> Input Class Initialized
DEBUG - 2015-03-22 04:31:50 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:31:50 --> Total execution time: 3.2722
DEBUG - 2015-03-22 04:31:50 --> Config Class Initialized
DEBUG - 2015-03-22 04:31:50 --> Input Class Initialized
DEBUG - 2015-03-22 04:31:50 --> Output Class Initialized
DEBUG - 2015-03-22 04:31:50 --> Output Class Initialized
DEBUG - 2015-03-22 04:31:50 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:31:50 --> Total execution time: 3.4092
DEBUG - 2015-03-22 04:31:50 --> Final output sent to browser
DEBUG - 2015-03-22 04:31:50 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:31:50 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:31:50 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:31:50 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:31:51 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:31:51 --> Security Class Initialized
DEBUG - 2015-03-22 04:31:51 --> Security Class Initialized
DEBUG - 2015-03-22 04:31:51 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:31:51 --> Total execution time: 3.3702
DEBUG - 2015-03-22 04:31:51 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:31:51 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:31:51 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:31:51 --> Language Class Initialized
DEBUG - 2015-03-22 04:31:51 --> Language Class Initialized
DEBUG - 2015-03-22 04:31:51 --> Input Class Initialized
DEBUG - 2015-03-22 04:31:51 --> Input Class Initialized
DEBUG - 2015-03-22 04:31:51 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:31:51 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:31:51 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:31:51 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:31:51 --> Loader Class Initialized
DEBUG - 2015-03-22 04:31:51 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:31:51 --> Loader Class Initialized
DEBUG - 2015-03-22 04:31:51 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:31:51 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:31:51 --> URI Class Initialized
DEBUG - 2015-03-22 04:31:51 --> Controller Class Initialized
DEBUG - 2015-03-22 04:31:51 --> URI Class Initialized
DEBUG - 2015-03-22 04:31:51 --> Language Class Initialized
DEBUG - 2015-03-22 04:31:51 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:31:51 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:31:51 --> Language Class Initialized
DEBUG - 2015-03-22 04:31:51 --> Router Class Initialized
DEBUG - 2015-03-22 04:31:52 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 04:31:52 --> Router Class Initialized
DEBUG - 2015-03-22 04:31:52 --> Controller Class Initialized
DEBUG - 2015-03-22 04:31:52 --> Loader Class Initialized
DEBUG - 2015-03-22 04:31:52 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:31:52 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:31:52 --> Loader Class Initialized
DEBUG - 2015-03-22 04:31:52 --> Output Class Initialized
DEBUG - 2015-03-22 04:31:52 --> Final output sent to browser
DEBUG - 2015-03-22 04:31:52 --> Output Class Initialized
DEBUG - 2015-03-22 04:31:52 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 04:31:52 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:31:52 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:31:52 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:31:52 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:31:52 --> Security Class Initialized
DEBUG - 2015-03-22 04:31:52 --> Total execution time: 3.7162
DEBUG - 2015-03-22 04:31:52 --> Security Class Initialized
DEBUG - 2015-03-22 04:31:52 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:31:52 --> Final output sent to browser
DEBUG - 2015-03-22 04:31:52 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:31:52 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:31:52 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:31:52 --> Input Class Initialized
DEBUG - 2015-03-22 04:31:52 --> Input Class Initialized
DEBUG - 2015-03-22 04:31:52 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:31:52 --> Total execution time: 4.0622
DEBUG - 2015-03-22 04:31:52 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:31:52 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:31:52 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:31:52 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:31:52 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:31:53 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:31:53 --> Controller Class Initialized
DEBUG - 2015-03-22 04:31:53 --> Controller Class Initialized
DEBUG - 2015-03-22 04:31:53 --> Language Class Initialized
DEBUG - 2015-03-22 04:31:53 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:31:53 --> Language Class Initialized
DEBUG - 2015-03-22 04:31:53 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:31:53 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 04:31:53 --> Loader Class Initialized
DEBUG - 2015-03-22 04:31:53 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 04:31:53 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:31:53 --> Loader Class Initialized
DEBUG - 2015-03-22 04:31:53 --> Controller Class Initialized
DEBUG - 2015-03-22 04:31:53 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:31:53 --> Final output sent to browser
DEBUG - 2015-03-22 04:31:53 --> Final output sent to browser
DEBUG - 2015-03-22 04:31:53 --> Controller Class Initialized
DEBUG - 2015-03-22 04:31:53 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:31:53 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:31:53 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 04:31:53 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 04:31:53 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:31:53 --> Total execution time: 4.3562
DEBUG - 2015-03-22 04:31:53 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:31:53 --> Final output sent to browser
DEBUG - 2015-03-22 04:31:53 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:31:53 --> Final output sent to browser
DEBUG - 2015-03-22 04:31:53 --> Total execution time: 4.3222
DEBUG - 2015-03-22 04:31:53 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:31:53 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:31:53 --> Total execution time: 3.8682
DEBUG - 2015-03-22 04:31:53 --> Total execution time: 3.9062
DEBUG - 2015-03-22 04:31:54 --> Controller Class Initialized
DEBUG - 2015-03-22 04:31:54 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:31:54 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:31:54 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 04:31:54 --> Controller Class Initialized
DEBUG - 2015-03-22 04:31:54 --> Final output sent to browser
DEBUG - 2015-03-22 04:31:54 --> Total execution time: 3.8002
DEBUG - 2015-03-22 04:31:54 --> File loaded: application/views//common/listCodeImg.php
DEBUG - 2015-03-22 04:31:54 --> Final output sent to browser
DEBUG - 2015-03-22 04:31:54 --> Total execution time: 3.8602
DEBUG - 2015-03-22 04:32:07 --> Config Class Initialized
DEBUG - 2015-03-22 04:32:07 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:32:07 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:32:07 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:32:07 --> URI Class Initialized
DEBUG - 2015-03-22 04:32:07 --> Router Class Initialized
DEBUG - 2015-03-22 04:32:07 --> Output Class Initialized
DEBUG - 2015-03-22 04:32:07 --> Security Class Initialized
DEBUG - 2015-03-22 04:32:07 --> Input Class Initialized
DEBUG - 2015-03-22 04:32:07 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:32:07 --> Language Class Initialized
DEBUG - 2015-03-22 04:32:07 --> Loader Class Initialized
DEBUG - 2015-03-22 04:32:07 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:32:07 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:32:07 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:32:08 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:32:08 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:32:08 --> Controller Class Initialized
DEBUG - 2015-03-22 04:32:08 --> File loaded: application/views//admin/order/crtEqpOrder.php
DEBUG - 2015-03-22 04:32:08 --> Final output sent to browser
DEBUG - 2015-03-22 04:32:08 --> Total execution time: 0.9351
DEBUG - 2015-03-22 04:32:08 --> Config Class Initialized
DEBUG - 2015-03-22 04:32:08 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:32:08 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:32:08 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:32:08 --> URI Class Initialized
DEBUG - 2015-03-22 04:32:08 --> Router Class Initialized
DEBUG - 2015-03-22 04:32:08 --> Output Class Initialized
DEBUG - 2015-03-22 04:32:08 --> Security Class Initialized
DEBUG - 2015-03-22 04:32:08 --> Input Class Initialized
DEBUG - 2015-03-22 04:32:08 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:32:08 --> Language Class Initialized
DEBUG - 2015-03-22 04:32:08 --> Loader Class Initialized
DEBUG - 2015-03-22 04:32:08 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:32:08 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:32:08 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:32:08 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:32:09 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:32:09 --> Controller Class Initialized
DEBUG - 2015-03-22 04:32:09 --> readEqpOrder:SELECT a.*, (select atcd_nm from cm_cd_attr where cd = '00B0' and atcd = a.srl_atcd) txt_srl_atcd, (select atcd_nm from cm_cd_attr where cd = '00D0' and atcd = a.rjt_pkt_tp_atcd) txt_rjt_pkt_tp_atcd, (select atcd_nm from cm_cd_attr where cd = '00E0' and atcd = a.pwr_cab_atcd) txt_pwr_cab_atcd, (select atcd_nm from cm_cd_attr where cd = '00F0' and atcd = a.shipped_by_atcd) txt_shipped_by_atcd, (select atcd_nm from cm_cd_attr where cd = '00F1' and atcd = a.courier_atcd) txt_courier_atcd, (select atcd_nm from cm_cd_attr where cd = '00G0' and atcd = a.payment_atcd) txt_payment_atcd, (select atcd_nm from cm_cd_attr where cd = '00H0' and atcd = a.incoterms_atcd) txt_incoterms_atcd, (select atcd_nm from cm_cd_attr where cd = '00L0' and atcd = a.lcd_color_atcd) txt_lcd_color_atcd, (select atcd_nm from cm_cd_attr where cd = '00M0' and atcd = a.lcd_lang_atcd) txt_lcd_lang_atcd, (select cmpy_nm from om_dealer where dealer_seq = a.dealer_seq) cmpy_nm, (select atcd_nm from cm_cd_attr where cd = '0022' and atcd = a.cntry_atcd) txt_cntry_atcd, if(mdl_cd in ('0007','0009'), concat(mdl_nm, concat('R',lan_L),if(a.lcd_color_atcd='00L00002','C','')), if(mdl_cd in ('3000'), concat(mdl_nm, concat('F',rjt_pkt_tp),''),mdl_nm)) txt_mdl_nm, DATE_FORMAT(a.delivery_dt, '%Y-%m-%d') txt_delivery_dt FROM ( SELECT a.*, b.cntry_atcd, b.dealer_seq, b.worker_seq, b.premium_rate, b.tot_amt, b.cnfm_yn, b.cnfm_dt, b.wrk_tp_atcd, b.udt_dt as order_dt, (CASE WHEN a.rjt_pkt_tp_atcd = ('00D00001') THEN 'A'  WHEN a.rjt_pkt_tp_atcd = ('00D00002') THEN 'I' END) rjt_pkt_tp, (SELECT mdl_nm FROM om_mdl WHERE mdl_cd = a.mdl_cd) mdl_nm, (SELECT if(count(*)>0,'L','') FROM om_ord_eqp_dtl where pi_no = a.pi_no and po_no = a.po_no and om_ord_eqp_dtl.atcd = '00A00001') lan_L FROM om_ord_eqp a, om_ord_inf b WHERE a.pi_no = b.pi_no AND a.pi_no = '150009bg' AND a.po_no = 34 ) a
DEBUG - 2015-03-22 04:32:09 --> SELECT b.cntry_atcd, b.dealer_seq, b.worker_seq, b.premium_rate, b.tot_amt, b.cnfm_yn, b.cnfm_dt, b.wrk_tp_atcd, a.*, (select atcd_nm from cm_cd_attr where cd = '0091' and atcd = a.currency_atch) txt_currency_atcd, (select atcd_nm from cm_cd_attr where cd = '0092' and atcd = a.serial_currency_atch) txt_serial_currency_atch, (select atcd_nm from cm_cd_attr where cd = '00A0' and atcd = a.opt_hw_atcd) txt_opt_hw_atcd, (select atcd_nm from cm_cd_attr where cd = '00C0' and atcd = a.pc_cab_atcd) txt_pc_cab_atcd FROM ( SELECT b.*,(case when b.cd='0091' then b.atcd else '' end) currency_atch,(CASE WHEN b.cd='0091' AND b.atcd_ox='O' THEN b.atcd ELSE '' END) fitness,(CASE WHEN b.cd='0091' THEN b.atcd_ox ELSE '' END) fitness_ox,(case when b.cd='0092' then b.atcd else '' end) serial_currency_atch,(CASE WHEN b.cd='0092' AND b.atcd_ox='O' THEN b.atcd ELSE '' END) srl_fitness,(CASE WHEN b.cd='0092' THEN b.atcd_ox ELSE '' END) srl_fitness_ox,(case when b.cd='00A0' then b.atcd else '' end) opt_hw_atcd,(case when b.cd='00C0' then b.atcd else '' end) pc_cab_atcd FROM om_ord_eqp a, om_ord_eqp_dtl b WHERE a.pi_no = b.pi_no AND a.po_no = b.po_no AND a.pi_no = '150009bg'		AND a.po_no = 34) a, om_ord_inf b WHERE a.pi_no = b.pi_no order by cd, atcd
DEBUG - 2015-03-22 04:32:09 --> INSERT INTO om_sndmail(pi_no, wrk_tp_atcd, sndmail_atcd, auth_grp_cd, sender_email, sender_eng_nm, title, ctnt, crt_dt, crt_uid) VALUES ('150009bg','00700110', '00700111', 'UD', 'kpbaek@localhost', (SELECT dealer_nm FROM om_dealer   WHERE dealer_uid='sofia@ubs-bg.com'), (select concat(atcd_nm,' - ',(select cmpy_nm from om_dealer where dealer_uid='sofia@ubs-bg.com')) from cm_cd_attr where cd = '0071' and atcd = '00700111'), '', now(), 'sofia@ubs-bg.com')
DEBUG - 2015-03-22 04:32:09 --> sql3:INSERT INTO om_sndmail_dtl (sndmail_seq, email_from, email_to, rcpnt_tp_atcd, snd_yn, crt_dt, crt_uid) SELECT 215, 'safe@safeleader.esy.es', (select usr_email from om_user where uid = a.dealer_uid), '00100010' rcpnt_tp_atcd, 'N', now(), 'sofia@ubs-bg.com' FROM om_dealer a, om_ord_inf b WHERE a.dealer_seq = b.dealer_seq AND b.pi_no = '150009bg' UNION SELECT 215, 'kpbaek@localhost', (select team_email from om_team where team_atcd = '00600SL0') email_to, '00100040' rcpnt_tp_atcd, 'N', now(), 'sofia@ubs-bg.com'
DEBUG - 2015-03-22 04:32:09 --> File loaded: application/views//common/crtSndMail.php
DEBUG - 2015-03-22 04:32:09 --> Final output sent to browser
DEBUG - 2015-03-22 04:32:09 --> Total execution time: 1.0931
DEBUG - 2015-03-22 04:32:09 --> Config Class Initialized
DEBUG - 2015-03-22 04:32:09 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:32:09 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:32:09 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:32:09 --> URI Class Initialized
DEBUG - 2015-03-22 04:32:09 --> Router Class Initialized
DEBUG - 2015-03-22 04:32:09 --> Output Class Initialized
DEBUG - 2015-03-22 04:32:09 --> Security Class Initialized
DEBUG - 2015-03-22 04:32:09 --> Input Class Initialized
DEBUG - 2015-03-22 04:32:09 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:32:10 --> Language Class Initialized
DEBUG - 2015-03-22 04:32:10 --> Loader Class Initialized
DEBUG - 2015-03-22 04:32:10 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:32:10 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:32:10 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:32:10 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:32:10 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:32:10 --> Controller Class Initialized
DEBUG - 2015-03-22 04:32:10 --> sql3:SELECT a.pi_no, a.sndmail_seq, a.wrk_tp_atcd, a.sender_email, a.title, a.ctnt, email_from, email_to, snd_yn, b.snd_no, b.rcpnt_tp_atcd, b.rcpnt_team_atcd,(select usr_nm from om_user where uid = a.sender_email) sender_nm,(select usr_nm from om_user where uid = b.email_to) rcpnt_nm FROM om_sndmail a, om_sndmail_dtl b WHERE a.sndmail_seq = b.sndmail_seq and a.sndmail_seq=215 and snd_yn='N'
DEBUG - 2015-03-22 04:32:10 --> dealer:SBM->
DEBUG - 2015-03-22 04:32:10 --> File loaded: application/views//common/sndMailResult.php
DEBUG - 2015-03-22 04:32:10 --> Final output sent to browser
DEBUG - 2015-03-22 04:32:10 --> Total execution time: 1.1711
DEBUG - 2015-03-22 04:36:36 --> Config Class Initialized
DEBUG - 2015-03-22 04:36:36 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:36:36 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:36:36 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:36:36 --> URI Class Initialized
DEBUG - 2015-03-22 04:36:36 --> Router Class Initialized
DEBUG - 2015-03-22 04:36:36 --> Output Class Initialized
DEBUG - 2015-03-22 04:36:36 --> Security Class Initialized
DEBUG - 2015-03-22 04:36:36 --> Input Class Initialized
DEBUG - 2015-03-22 04:36:37 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:36:37 --> Language Class Initialized
DEBUG - 2015-03-22 04:36:37 --> Loader Class Initialized
DEBUG - 2015-03-22 04:36:37 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:36:37 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:36:37 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:36:37 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:36:37 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:36:37 --> Controller Class Initialized
DEBUG - 2015-03-22 04:36:37 --> File loaded: application/views//admin/order/main.php
DEBUG - 2015-03-22 04:36:37 --> Final output sent to browser
DEBUG - 2015-03-22 04:36:37 --> Total execution time: 1.0111
DEBUG - 2015-03-22 04:36:37 --> Config Class Initialized
DEBUG - 2015-03-22 04:36:37 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:36:37 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:36:37 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:36:38 --> URI Class Initialized
DEBUG - 2015-03-22 04:36:38 --> Router Class Initialized
DEBUG - 2015-03-22 04:36:38 --> Output Class Initialized
DEBUG - 2015-03-22 04:36:38 --> Security Class Initialized
DEBUG - 2015-03-22 04:36:38 --> Input Class Initialized
DEBUG - 2015-03-22 04:36:38 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:36:38 --> Language Class Initialized
DEBUG - 2015-03-22 04:36:38 --> Loader Class Initialized
DEBUG - 2015-03-22 04:36:38 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:36:38 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:36:38 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:36:38 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:36:38 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:36:38 --> Controller Class Initialized
DEBUG - 2015-03-22 04:36:38 --> File loaded: application/views//admin/order/tab01.php
DEBUG - 2015-03-22 04:36:38 --> Final output sent to browser
DEBUG - 2015-03-22 04:36:38 --> Total execution time: 0.9221
DEBUG - 2015-03-22 04:36:38 --> Config Class Initialized
DEBUG - 2015-03-22 04:36:38 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:36:39 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:36:39 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:36:39 --> URI Class Initialized
DEBUG - 2015-03-22 04:36:39 --> Router Class Initialized
DEBUG - 2015-03-22 04:36:39 --> Output Class Initialized
DEBUG - 2015-03-22 04:36:39 --> Security Class Initialized
DEBUG - 2015-03-22 04:36:39 --> Input Class Initialized
DEBUG - 2015-03-22 04:36:39 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:36:39 --> Language Class Initialized
DEBUG - 2015-03-22 04:36:39 --> Loader Class Initialized
DEBUG - 2015-03-22 04:36:39 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:36:39 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:36:39 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:36:39 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:36:39 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:36:39 --> Controller Class Initialized
DEBUG - 2015-03-22 04:36:39 --> File loaded: application/views//common/user/viewDealer.php
DEBUG - 2015-03-22 04:36:39 --> Final output sent to browser
DEBUG - 2015-03-22 04:36:39 --> Total execution time: 0.9171
DEBUG - 2015-03-22 04:36:40 --> Config Class Initialized
DEBUG - 2015-03-22 04:36:40 --> Config Class Initialized
DEBUG - 2015-03-22 04:36:40 --> Config Class Initialized
DEBUG - 2015-03-22 04:36:40 --> Config Class Initialized
DEBUG - 2015-03-22 04:36:40 --> Config Class Initialized
DEBUG - 2015-03-22 04:36:40 --> Config Class Initialized
DEBUG - 2015-03-22 04:36:40 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:36:40 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:36:40 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:36:40 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:36:40 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:36:40 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:36:40 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:36:40 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:36:40 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:36:40 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:36:40 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:36:40 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:36:40 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:36:40 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:36:40 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:36:40 --> URI Class Initialized
DEBUG - 2015-03-22 04:36:40 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:36:40 --> Router Class Initialized
DEBUG - 2015-03-22 04:36:40 --> URI Class Initialized
DEBUG - 2015-03-22 04:36:40 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:36:40 --> URI Class Initialized
DEBUG - 2015-03-22 04:36:40 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:36:40 --> URI Class Initialized
DEBUG - 2015-03-22 04:36:40 --> Output Class Initialized
DEBUG - 2015-03-22 04:36:40 --> URI Class Initialized
DEBUG - 2015-03-22 04:36:40 --> Router Class Initialized
DEBUG - 2015-03-22 04:36:40 --> Router Class Initialized
DEBUG - 2015-03-22 04:36:40 --> Config Class Initialized
DEBUG - 2015-03-22 04:36:40 --> Config Class Initialized
DEBUG - 2015-03-22 04:36:40 --> Security Class Initialized
DEBUG - 2015-03-22 04:36:40 --> URI Class Initialized
DEBUG - 2015-03-22 04:36:40 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:36:40 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:36:40 --> Router Class Initialized
DEBUG - 2015-03-22 04:36:40 --> Input Class Initialized
DEBUG - 2015-03-22 04:36:40 --> Router Class Initialized
DEBUG - 2015-03-22 04:36:40 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:36:40 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:36:40 --> Output Class Initialized
DEBUG - 2015-03-22 04:36:40 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:36:40 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:36:40 --> Output Class Initialized
DEBUG - 2015-03-22 04:36:40 --> Output Class Initialized
DEBUG - 2015-03-22 04:36:40 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:36:40 --> Output Class Initialized
DEBUG - 2015-03-22 04:36:40 --> URI Class Initialized
DEBUG - 2015-03-22 04:36:41 --> Language Class Initialized
DEBUG - 2015-03-22 04:36:41 --> Security Class Initialized
DEBUG - 2015-03-22 04:36:41 --> Security Class Initialized
DEBUG - 2015-03-22 04:36:41 --> Security Class Initialized
DEBUG - 2015-03-22 04:36:41 --> Router Class Initialized
DEBUG - 2015-03-22 04:36:41 --> URI Class Initialized
DEBUG - 2015-03-22 04:36:41 --> Router Class Initialized
DEBUG - 2015-03-22 04:36:41 --> Security Class Initialized
DEBUG - 2015-03-22 04:36:41 --> Loader Class Initialized
DEBUG - 2015-03-22 04:36:41 --> Input Class Initialized
DEBUG - 2015-03-22 04:36:41 --> Input Class Initialized
DEBUG - 2015-03-22 04:36:41 --> Input Class Initialized
DEBUG - 2015-03-22 04:36:41 --> Output Class Initialized
DEBUG - 2015-03-22 04:36:41 --> Config Class Initialized
DEBUG - 2015-03-22 04:36:41 --> Config Class Initialized
DEBUG - 2015-03-22 04:36:41 --> Router Class Initialized
DEBUG - 2015-03-22 04:36:41 --> Output Class Initialized
DEBUG - 2015-03-22 04:36:41 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:36:41 --> Input Class Initialized
DEBUG - 2015-03-22 04:36:41 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:36:41 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:36:41 --> Security Class Initialized
DEBUG - 2015-03-22 04:36:41 --> Security Class Initialized
DEBUG - 2015-03-22 04:36:41 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:36:41 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:36:41 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:36:41 --> Output Class Initialized
DEBUG - 2015-03-22 04:36:41 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:36:41 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:36:41 --> Language Class Initialized
DEBUG - 2015-03-22 04:36:41 --> Input Class Initialized
DEBUG - 2015-03-22 04:36:41 --> Language Class Initialized
DEBUG - 2015-03-22 04:36:41 --> Input Class Initialized
DEBUG - 2015-03-22 04:36:41 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:36:42 --> Language Class Initialized
DEBUG - 2015-03-22 04:36:42 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:36:42 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:36:42 --> Security Class Initialized
DEBUG - 2015-03-22 04:36:42 --> Language Class Initialized
DEBUG - 2015-03-22 04:36:42 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:36:42 --> Loader Class Initialized
DEBUG - 2015-03-22 04:36:42 --> Loader Class Initialized
DEBUG - 2015-03-22 04:36:42 --> Config Class Initialized
DEBUG - 2015-03-22 04:36:42 --> Config Class Initialized
DEBUG - 2015-03-22 04:36:42 --> Language Class Initialized
DEBUG - 2015-03-22 04:36:42 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:36:42 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:36:42 --> Loader Class Initialized
DEBUG - 2015-03-22 04:36:42 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:36:42 --> Loader Class Initialized
DEBUG - 2015-03-22 04:36:42 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:36:42 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:36:42 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:36:42 --> Input Class Initialized
DEBUG - 2015-03-22 04:36:42 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:36:42 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:36:42 --> Language Class Initialized
DEBUG - 2015-03-22 04:36:42 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:36:42 --> URI Class Initialized
DEBUG - 2015-03-22 04:36:42 --> Loader Class Initialized
DEBUG - 2015-03-22 04:36:42 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:36:42 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:36:42 --> Router Class Initialized
DEBUG - 2015-03-22 04:36:42 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:36:42 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:36:42 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:36:42 --> URI Class Initialized
DEBUG - 2015-03-22 04:36:42 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:36:42 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:36:42 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:36:42 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:36:42 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:36:42 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:36:42 --> Loader Class Initialized
DEBUG - 2015-03-22 04:36:42 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:36:42 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:36:42 --> Router Class Initialized
DEBUG - 2015-03-22 04:36:42 --> Output Class Initialized
DEBUG - 2015-03-22 04:36:42 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:36:42 --> Language Class Initialized
DEBUG - 2015-03-22 04:36:42 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:36:42 --> Controller Class Initialized
DEBUG - 2015-03-22 04:36:42 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:36:42 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:36:43 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:36:43 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:36:43 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:36:43 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:36:43 --> Output Class Initialized
DEBUG - 2015-03-22 04:36:43 --> Security Class Initialized
DEBUG - 2015-03-22 04:36:43 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:36:43 --> Loader Class Initialized
DEBUG - 2015-03-22 04:36:43 --> URI Class Initialized
DEBUG - 2015-03-22 04:36:43 --> URI Class Initialized
DEBUG - 2015-03-22 04:36:43 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 04:36:43 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:36:43 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:36:43 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:36:43 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:36:43 --> Security Class Initialized
DEBUG - 2015-03-22 04:36:43 --> Input Class Initialized
DEBUG - 2015-03-22 04:36:43 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:36:43 --> Controller Class Initialized
DEBUG - 2015-03-22 04:36:43 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:36:43 --> Router Class Initialized
DEBUG - 2015-03-22 04:36:43 --> Router Class Initialized
DEBUG - 2015-03-22 04:36:43 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:36:43 --> Final output sent to browser
DEBUG - 2015-03-22 04:36:43 --> Controller Class Initialized
DEBUG - 2015-03-22 04:36:43 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:36:43 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:36:43 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:36:44 --> Input Class Initialized
DEBUG - 2015-03-22 04:36:44 --> File loaded: application/views//common/user/listCntry.php
DEBUG - 2015-03-22 04:36:44 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:36:44 --> Output Class Initialized
DEBUG - 2015-03-22 04:36:44 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:36:44 --> Output Class Initialized
DEBUG - 2015-03-22 04:36:44 --> Controller Class Initialized
DEBUG - 2015-03-22 04:36:44 --> Total execution time: 3.8632
DEBUG - 2015-03-22 04:36:44 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:36:44 --> Controller Class Initialized
DEBUG - 2015-03-22 04:36:44 --> Controller Class Initialized
DEBUG - 2015-03-22 04:36:44 --> Final output sent to browser
DEBUG - 2015-03-22 04:36:44 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:36:44 --> Security Class Initialized
DEBUG - 2015-03-22 04:36:44 --> Language Class Initialized
DEBUG - 2015-03-22 04:36:44 --> Security Class Initialized
DEBUG - 2015-03-22 04:36:44 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:36:44 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 04:36:44 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:36:44 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 04:36:44 --> Total execution time: 4.3572
DEBUG - 2015-03-22 04:36:44 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 04:36:44 --> Config Class Initialized
DEBUG - 2015-03-22 04:36:44 --> Input Class Initialized
DEBUG - 2015-03-22 04:36:44 --> Input Class Initialized
DEBUG - 2015-03-22 04:36:44 --> Language Class Initialized
DEBUG - 2015-03-22 04:36:44 --> Final output sent to browser
DEBUG - 2015-03-22 04:36:44 --> Loader Class Initialized
DEBUG - 2015-03-22 04:36:44 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:36:44 --> Controller Class Initialized
DEBUG - 2015-03-22 04:36:44 --> Final output sent to browser
DEBUG - 2015-03-22 04:36:44 --> Final output sent to browser
DEBUG - 2015-03-22 04:36:44 --> File loaded: application/views//common/user/listUserPiNo.php
DEBUG - 2015-03-22 04:36:44 --> Config Class Initialized
DEBUG - 2015-03-22 04:36:44 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:36:45 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:36:45 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:36:45 --> Loader Class Initialized
DEBUG - 2015-03-22 04:36:45 --> Total execution time: 4.7983
DEBUG - 2015-03-22 04:36:45 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:36:45 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:36:45 --> File loaded: application/views//common/listModel.php
DEBUG - 2015-03-22 04:36:45 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:36:45 --> Total execution time: 4.1182
DEBUG - 2015-03-22 04:36:45 --> Final output sent to browser
DEBUG - 2015-03-22 04:36:45 --> Total execution time: 4.8733
DEBUG - 2015-03-22 04:36:45 --> Language Class Initialized
DEBUG - 2015-03-22 04:36:45 --> Language Class Initialized
DEBUG - 2015-03-22 04:36:45 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:36:45 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:36:45 --> Controller Class Initialized
DEBUG - 2015-03-22 04:36:45 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:36:45 --> Final output sent to browser
DEBUG - 2015-03-22 04:36:45 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:36:45 --> Total execution time: 5.4013
DEBUG - 2015-03-22 04:36:45 --> Loader Class Initialized
DEBUG - 2015-03-22 04:36:45 --> Loader Class Initialized
DEBUG - 2015-03-22 04:36:45 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:36:45 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 04:36:45 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:36:45 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:36:45 --> Total execution time: 5.7273
DEBUG - 2015-03-22 04:36:45 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:36:45 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:36:46 --> URI Class Initialized
DEBUG - 2015-03-22 04:36:46 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:36:46 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:36:46 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:36:46 --> URI Class Initialized
DEBUG - 2015-03-22 04:36:46 --> Final output sent to browser
DEBUG - 2015-03-22 04:36:46 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:36:46 --> Router Class Initialized
DEBUG - 2015-03-22 04:36:46 --> Total execution time: 5.4763
DEBUG - 2015-03-22 04:36:46 --> Router Class Initialized
DEBUG - 2015-03-22 04:36:46 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:36:46 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:36:46 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:36:46 --> Output Class Initialized
DEBUG - 2015-03-22 04:36:46 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:36:46 --> Output Class Initialized
DEBUG - 2015-03-22 04:36:46 --> Controller Class Initialized
DEBUG - 2015-03-22 04:36:46 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:36:46 --> Security Class Initialized
DEBUG - 2015-03-22 04:36:46 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:36:46 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:36:46 --> Security Class Initialized
DEBUG - 2015-03-22 04:36:46 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 04:36:46 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:36:46 --> Input Class Initialized
DEBUG - 2015-03-22 04:36:47 --> Final output sent to browser
DEBUG - 2015-03-22 04:36:47 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:36:47 --> Input Class Initialized
DEBUG - 2015-03-22 04:36:47 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:36:47 --> Total execution time: 5.6773
DEBUG - 2015-03-22 04:36:47 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:36:47 --> Controller Class Initialized
DEBUG - 2015-03-22 04:36:47 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:36:47 --> Language Class Initialized
DEBUG - 2015-03-22 04:36:47 --> Language Class Initialized
DEBUG - 2015-03-22 04:36:47 --> Controller Class Initialized
DEBUG - 2015-03-22 04:36:47 --> Controller Class Initialized
DEBUG - 2015-03-22 04:36:47 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 04:36:47 --> Loader Class Initialized
DEBUG - 2015-03-22 04:36:47 --> Loader Class Initialized
DEBUG - 2015-03-22 04:36:47 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 04:36:47 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 04:36:47 --> Final output sent to browser
DEBUG - 2015-03-22 04:36:47 --> Final output sent to browser
DEBUG - 2015-03-22 04:36:47 --> Final output sent to browser
DEBUG - 2015-03-22 04:36:47 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:36:47 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:36:47 --> Total execution time: 6.0763
DEBUG - 2015-03-22 04:36:47 --> Total execution time: 5.4713
DEBUG - 2015-03-22 04:36:47 --> Total execution time: 5.5283
DEBUG - 2015-03-22 04:36:47 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:36:47 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:36:47 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:36:47 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:36:47 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:36:48 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:36:48 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:36:48 --> Controller Class Initialized
DEBUG - 2015-03-22 04:36:48 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 04:36:48 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:36:48 --> Final output sent to browser
DEBUG - 2015-03-22 04:36:48 --> Total execution time: 3.5702
DEBUG - 2015-03-22 04:36:48 --> Controller Class Initialized
DEBUG - 2015-03-22 04:36:48 --> File loaded: application/views//common/listCodeImg.php
DEBUG - 2015-03-22 04:36:48 --> Final output sent to browser
DEBUG - 2015-03-22 04:36:48 --> Total execution time: 3.4632
DEBUG - 2015-03-22 04:36:57 --> Config Class Initialized
DEBUG - 2015-03-22 04:36:57 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:36:57 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:36:57 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:36:57 --> URI Class Initialized
DEBUG - 2015-03-22 04:36:57 --> Router Class Initialized
DEBUG - 2015-03-22 04:36:57 --> Output Class Initialized
DEBUG - 2015-03-22 04:36:57 --> Security Class Initialized
DEBUG - 2015-03-22 04:36:57 --> Input Class Initialized
DEBUG - 2015-03-22 04:36:57 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:36:57 --> Language Class Initialized
DEBUG - 2015-03-22 04:36:57 --> Loader Class Initialized
DEBUG - 2015-03-22 04:36:57 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:36:57 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:36:57 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:36:57 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:36:57 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:36:58 --> Controller Class Initialized
DEBUG - 2015-03-22 04:36:58 --> File loaded: application/views//admin/order/crtEqpOrder.php
DEBUG - 2015-03-22 04:36:58 --> Final output sent to browser
DEBUG - 2015-03-22 04:36:58 --> Total execution time: 0.9891
DEBUG - 2015-03-22 04:36:58 --> Config Class Initialized
DEBUG - 2015-03-22 04:36:58 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:36:58 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:36:58 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:36:58 --> URI Class Initialized
DEBUG - 2015-03-22 04:36:58 --> Router Class Initialized
DEBUG - 2015-03-22 04:36:58 --> Output Class Initialized
DEBUG - 2015-03-22 04:36:58 --> Security Class Initialized
DEBUG - 2015-03-22 04:36:58 --> Input Class Initialized
DEBUG - 2015-03-22 04:36:58 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:36:58 --> Language Class Initialized
DEBUG - 2015-03-22 04:36:58 --> Loader Class Initialized
DEBUG - 2015-03-22 04:36:58 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:36:58 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:36:58 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:36:59 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:36:59 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:36:59 --> Controller Class Initialized
DEBUG - 2015-03-22 04:36:59 --> readEqpOrder:SELECT a.*, (select atcd_nm from cm_cd_attr where cd = '00B0' and atcd = a.srl_atcd) txt_srl_atcd, (select atcd_nm from cm_cd_attr where cd = '00D0' and atcd = a.rjt_pkt_tp_atcd) txt_rjt_pkt_tp_atcd, (select atcd_nm from cm_cd_attr where cd = '00E0' and atcd = a.pwr_cab_atcd) txt_pwr_cab_atcd, (select atcd_nm from cm_cd_attr where cd = '00F0' and atcd = a.shipped_by_atcd) txt_shipped_by_atcd, (select atcd_nm from cm_cd_attr where cd = '00F1' and atcd = a.courier_atcd) txt_courier_atcd, (select atcd_nm from cm_cd_attr where cd = '00G0' and atcd = a.payment_atcd) txt_payment_atcd, (select atcd_nm from cm_cd_attr where cd = '00H0' and atcd = a.incoterms_atcd) txt_incoterms_atcd, (select atcd_nm from cm_cd_attr where cd = '00L0' and atcd = a.lcd_color_atcd) txt_lcd_color_atcd, (select atcd_nm from cm_cd_attr where cd = '00M0' and atcd = a.lcd_lang_atcd) txt_lcd_lang_atcd, (select cmpy_nm from om_dealer where dealer_seq = a.dealer_seq) cmpy_nm, (select atcd_nm from cm_cd_attr where cd = '0022' and atcd = a.cntry_atcd) txt_cntry_atcd, if(mdl_cd in ('0007','0009'), concat(mdl_nm, concat('R',lan_L),if(a.lcd_color_atcd='00L00002','C','')), if(mdl_cd in ('3000'), concat(mdl_nm, concat('F',rjt_pkt_tp),''),mdl_nm)) txt_mdl_nm, DATE_FORMAT(a.delivery_dt, '%Y-%m-%d') txt_delivery_dt FROM ( SELECT a.*, b.cntry_atcd, b.dealer_seq, b.worker_seq, b.premium_rate, b.tot_amt, b.cnfm_yn, b.cnfm_dt, b.wrk_tp_atcd, b.udt_dt as order_dt, (CASE WHEN a.rjt_pkt_tp_atcd = ('00D00001') THEN 'A'  WHEN a.rjt_pkt_tp_atcd = ('00D00002') THEN 'I' END) rjt_pkt_tp, (SELECT mdl_nm FROM om_mdl WHERE mdl_cd = a.mdl_cd) mdl_nm, (SELECT if(count(*)>0,'L','') FROM om_ord_eqp_dtl where pi_no = a.pi_no and po_no = a.po_no and om_ord_eqp_dtl.atcd = '00A00001') lan_L FROM om_ord_eqp a, om_ord_inf b WHERE a.pi_no = b.pi_no AND a.pi_no = '150010bg' AND a.po_no = 35 ) a
DEBUG - 2015-03-22 04:36:59 --> SELECT b.cntry_atcd, b.dealer_seq, b.worker_seq, b.premium_rate, b.tot_amt, b.cnfm_yn, b.cnfm_dt, b.wrk_tp_atcd, a.*, (select atcd_nm from cm_cd_attr where cd = '0091' and atcd = a.currency_atch) txt_currency_atcd, (select atcd_nm from cm_cd_attr where cd = '0092' and atcd = a.serial_currency_atch) txt_serial_currency_atch, (select atcd_nm from cm_cd_attr where cd = '00A0' and atcd = a.opt_hw_atcd) txt_opt_hw_atcd, (select atcd_nm from cm_cd_attr where cd = '00C0' and atcd = a.pc_cab_atcd) txt_pc_cab_atcd FROM ( SELECT b.*,(case when b.cd='0091' then b.atcd else '' end) currency_atch,(CASE WHEN b.cd='0091' AND b.atcd_ox='O' THEN b.atcd ELSE '' END) fitness,(CASE WHEN b.cd='0091' THEN b.atcd_ox ELSE '' END) fitness_ox,(case when b.cd='0092' then b.atcd else '' end) serial_currency_atch,(CASE WHEN b.cd='0092' AND b.atcd_ox='O' THEN b.atcd ELSE '' END) srl_fitness,(CASE WHEN b.cd='0092' THEN b.atcd_ox ELSE '' END) srl_fitness_ox,(case when b.cd='00A0' then b.atcd else '' end) opt_hw_atcd,(case when b.cd='00C0' then b.atcd else '' end) pc_cab_atcd FROM om_ord_eqp a, om_ord_eqp_dtl b WHERE a.pi_no = b.pi_no AND a.po_no = b.po_no AND a.pi_no = '150010bg'		AND a.po_no = 35) a, om_ord_inf b WHERE a.pi_no = b.pi_no order by cd, atcd
DEBUG - 2015-03-22 04:36:59 --> INSERT INTO om_sndmail(pi_no, wrk_tp_atcd, sndmail_atcd, auth_grp_cd, sender_email, sender_eng_nm, title, ctnt, crt_dt, crt_uid) VALUES ('150010bg','00700110', '00700111', 'UD', 'kpbaek@localhost', (SELECT dealer_nm FROM om_dealer   WHERE dealer_uid='sofia@ubs-bg.com'), (select concat(atcd_nm,' - ',(select cmpy_nm from om_dealer where dealer_uid='sofia@ubs-bg.com')) from cm_cd_attr where cd = '0071' and atcd = '00700111'), '', now(), 'sofia@ubs-bg.com')
DEBUG - 2015-03-22 04:36:59 --> sql3:INSERT INTO om_sndmail_dtl (sndmail_seq, email_from, email_to, rcpnt_tp_atcd, snd_yn, crt_dt, crt_uid) SELECT 216, 'safe@safeleader.esy.es', (select usr_email from om_user where uid = a.dealer_uid), '00100010' rcpnt_tp_atcd, 'N', now(), 'sofia@ubs-bg.com' FROM om_dealer a, om_ord_inf b WHERE a.dealer_seq = b.dealer_seq AND b.pi_no = '150010bg' UNION SELECT 216, 'kpbaek@localhost', (select team_email from om_team where team_atcd = '00600SL0') email_to, '00100040' rcpnt_tp_atcd, 'N', now(), 'sofia@ubs-bg.com'
DEBUG - 2015-03-22 04:36:59 --> File loaded: application/views//common/crtSndMail.php
DEBUG - 2015-03-22 04:36:59 --> Final output sent to browser
DEBUG - 2015-03-22 04:36:59 --> Total execution time: 1.1931
DEBUG - 2015-03-22 04:36:59 --> Config Class Initialized
DEBUG - 2015-03-22 04:36:59 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:36:59 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:36:59 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:36:59 --> URI Class Initialized
DEBUG - 2015-03-22 04:36:59 --> Router Class Initialized
DEBUG - 2015-03-22 04:36:59 --> Output Class Initialized
DEBUG - 2015-03-22 04:36:59 --> Security Class Initialized
DEBUG - 2015-03-22 04:36:59 --> Input Class Initialized
DEBUG - 2015-03-22 04:37:00 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:37:00 --> Language Class Initialized
DEBUG - 2015-03-22 04:37:00 --> Loader Class Initialized
DEBUG - 2015-03-22 04:37:00 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:37:00 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:37:00 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:37:00 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:37:00 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:37:00 --> Controller Class Initialized
DEBUG - 2015-03-22 04:37:00 --> sql3:SELECT a.pi_no, a.sndmail_seq, a.wrk_tp_atcd, a.sender_email, a.title, a.ctnt, email_from, email_to, snd_yn, b.snd_no, b.rcpnt_tp_atcd, b.rcpnt_team_atcd,(select usr_nm from om_user where uid = a.sender_email) sender_nm,(select usr_nm from om_user where uid = b.email_to) rcpnt_nm FROM om_sndmail a, om_sndmail_dtl b WHERE a.sndmail_seq = b.sndmail_seq and a.sndmail_seq=216 and snd_yn='N'
DEBUG - 2015-03-22 04:37:00 --> dealer:SBM->
DEBUG - 2015-03-22 04:37:00 --> File loaded: application/views//common/sndMailResult.php
DEBUG - 2015-03-22 04:37:00 --> Final output sent to browser
DEBUG - 2015-03-22 04:37:00 --> Total execution time: 1.1621
DEBUG - 2015-03-22 04:41:28 --> Config Class Initialized
DEBUG - 2015-03-22 04:41:28 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:41:28 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:41:28 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:41:28 --> URI Class Initialized
DEBUG - 2015-03-22 04:41:28 --> Router Class Initialized
DEBUG - 2015-03-22 04:41:29 --> Output Class Initialized
DEBUG - 2015-03-22 04:41:29 --> Security Class Initialized
DEBUG - 2015-03-22 04:41:29 --> Input Class Initialized
DEBUG - 2015-03-22 04:41:29 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:41:29 --> Language Class Initialized
DEBUG - 2015-03-22 04:41:29 --> Loader Class Initialized
DEBUG - 2015-03-22 04:41:29 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:41:29 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:41:29 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:41:29 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:41:29 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:41:29 --> Controller Class Initialized
DEBUG - 2015-03-22 04:41:29 --> File loaded: application/views//admin/order/main.php
DEBUG - 2015-03-22 04:41:29 --> Final output sent to browser
DEBUG - 2015-03-22 04:41:29 --> Total execution time: 1.0511
DEBUG - 2015-03-22 04:41:30 --> Config Class Initialized
DEBUG - 2015-03-22 04:41:30 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:41:30 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:41:30 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:41:30 --> URI Class Initialized
DEBUG - 2015-03-22 04:41:30 --> Router Class Initialized
DEBUG - 2015-03-22 04:41:30 --> Output Class Initialized
DEBUG - 2015-03-22 04:41:30 --> Security Class Initialized
DEBUG - 2015-03-22 04:41:30 --> Input Class Initialized
DEBUG - 2015-03-22 04:41:30 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:41:30 --> Language Class Initialized
DEBUG - 2015-03-22 04:41:30 --> Loader Class Initialized
DEBUG - 2015-03-22 04:41:30 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:41:30 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:41:30 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:41:30 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:41:30 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:41:30 --> Controller Class Initialized
DEBUG - 2015-03-22 04:41:30 --> File loaded: application/views//admin/order/tab01.php
DEBUG - 2015-03-22 04:41:31 --> Final output sent to browser
DEBUG - 2015-03-22 04:41:31 --> Total execution time: 1.0121
DEBUG - 2015-03-22 04:41:31 --> Config Class Initialized
DEBUG - 2015-03-22 04:41:31 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:41:31 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:41:31 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:41:31 --> URI Class Initialized
DEBUG - 2015-03-22 04:41:31 --> Router Class Initialized
DEBUG - 2015-03-22 04:41:31 --> Output Class Initialized
DEBUG - 2015-03-22 04:41:31 --> Security Class Initialized
DEBUG - 2015-03-22 04:41:31 --> Input Class Initialized
DEBUG - 2015-03-22 04:41:31 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:41:31 --> Language Class Initialized
DEBUG - 2015-03-22 04:41:31 --> Loader Class Initialized
DEBUG - 2015-03-22 04:41:32 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:41:32 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:41:32 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:41:32 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:41:32 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:41:32 --> Controller Class Initialized
DEBUG - 2015-03-22 04:41:32 --> File loaded: application/views//common/user/viewDealer.php
DEBUG - 2015-03-22 04:41:32 --> Final output sent to browser
DEBUG - 2015-03-22 04:41:32 --> Total execution time: 1.0551
DEBUG - 2015-03-22 04:41:32 --> Config Class Initialized
DEBUG - 2015-03-22 04:41:32 --> Config Class Initialized
DEBUG - 2015-03-22 04:41:32 --> Config Class Initialized
DEBUG - 2015-03-22 04:41:32 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:41:32 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:41:32 --> Config Class Initialized
DEBUG - 2015-03-22 04:41:32 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:41:32 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:41:32 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:41:32 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:41:32 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:41:32 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:41:32 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:41:32 --> Config Class Initialized
DEBUG - 2015-03-22 04:41:32 --> URI Class Initialized
DEBUG - 2015-03-22 04:41:32 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:41:32 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:41:32 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:41:32 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:41:33 --> Config Class Initialized
DEBUG - 2015-03-22 04:41:33 --> Router Class Initialized
DEBUG - 2015-03-22 04:41:33 --> URI Class Initialized
DEBUG - 2015-03-22 04:41:33 --> URI Class Initialized
DEBUG - 2015-03-22 04:41:33 --> URI Class Initialized
DEBUG - 2015-03-22 04:41:33 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:41:33 --> Router Class Initialized
DEBUG - 2015-03-22 04:41:33 --> Output Class Initialized
DEBUG - 2015-03-22 04:41:33 --> Router Class Initialized
DEBUG - 2015-03-22 04:41:33 --> Router Class Initialized
DEBUG - 2015-03-22 04:41:33 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:41:33 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:41:33 --> Security Class Initialized
DEBUG - 2015-03-22 04:41:33 --> Output Class Initialized
DEBUG - 2015-03-22 04:41:33 --> Output Class Initialized
DEBUG - 2015-03-22 04:41:33 --> URI Class Initialized
DEBUG - 2015-03-22 04:41:33 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:41:33 --> Output Class Initialized
DEBUG - 2015-03-22 04:41:33 --> Security Class Initialized
DEBUG - 2015-03-22 04:41:33 --> Input Class Initialized
DEBUG - 2015-03-22 04:41:33 --> Router Class Initialized
DEBUG - 2015-03-22 04:41:33 --> Security Class Initialized
DEBUG - 2015-03-22 04:41:33 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:41:33 --> Security Class Initialized
DEBUG - 2015-03-22 04:41:33 --> Input Class Initialized
DEBUG - 2015-03-22 04:41:33 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:41:33 --> Input Class Initialized
DEBUG - 2015-03-22 04:41:33 --> Output Class Initialized
DEBUG - 2015-03-22 04:41:33 --> URI Class Initialized
DEBUG - 2015-03-22 04:41:33 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:41:33 --> Input Class Initialized
DEBUG - 2015-03-22 04:41:33 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:41:33 --> Language Class Initialized
DEBUG - 2015-03-22 04:41:33 --> Security Class Initialized
DEBUG - 2015-03-22 04:41:33 --> Router Class Initialized
DEBUG - 2015-03-22 04:41:34 --> Language Class Initialized
DEBUG - 2015-03-22 04:41:34 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:41:34 --> Config Class Initialized
DEBUG - 2015-03-22 04:41:34 --> Loader Class Initialized
DEBUG - 2015-03-22 04:41:34 --> Loader Class Initialized
DEBUG - 2015-03-22 04:41:34 --> Input Class Initialized
DEBUG - 2015-03-22 04:41:34 --> Config Class Initialized
DEBUG - 2015-03-22 04:41:34 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:41:34 --> Language Class Initialized
DEBUG - 2015-03-22 04:41:34 --> Language Class Initialized
DEBUG - 2015-03-22 04:41:34 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:41:34 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:41:34 --> Output Class Initialized
DEBUG - 2015-03-22 04:41:34 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:41:34 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:41:34 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:41:34 --> Loader Class Initialized
DEBUG - 2015-03-22 04:41:34 --> Loader Class Initialized
DEBUG - 2015-03-22 04:41:34 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:41:34 --> Language Class Initialized
DEBUG - 2015-03-22 04:41:34 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:41:34 --> Security Class Initialized
DEBUG - 2015-03-22 04:41:34 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:41:34 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:41:34 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:41:34 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:41:34 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:41:34 --> Loader Class Initialized
DEBUG - 2015-03-22 04:41:34 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:41:34 --> Input Class Initialized
DEBUG - 2015-03-22 04:41:34 --> Config Class Initialized
DEBUG - 2015-03-22 04:41:34 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:41:34 --> Config Class Initialized
DEBUG - 2015-03-22 04:41:34 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:41:34 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:41:34 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:41:34 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:41:34 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:41:34 --> URI Class Initialized
DEBUG - 2015-03-22 04:41:34 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:41:34 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:41:35 --> URI Class Initialized
DEBUG - 2015-03-22 04:41:35 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:41:35 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:41:35 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:41:35 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:41:35 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:41:35 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:41:35 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:41:35 --> Router Class Initialized
DEBUG - 2015-03-22 04:41:35 --> Language Class Initialized
DEBUG - 2015-03-22 04:41:35 --> Router Class Initialized
DEBUG - 2015-03-22 04:41:35 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:41:35 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:41:35 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:41:35 --> Config Class Initialized
DEBUG - 2015-03-22 04:41:35 --> Config Class Initialized
DEBUG - 2015-03-22 04:41:35 --> Controller Class Initialized
DEBUG - 2015-03-22 04:41:35 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:41:35 --> Controller Class Initialized
DEBUG - 2015-03-22 04:41:35 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:41:35 --> Output Class Initialized
DEBUG - 2015-03-22 04:41:35 --> Loader Class Initialized
DEBUG - 2015-03-22 04:41:35 --> Output Class Initialized
DEBUG - 2015-03-22 04:41:35 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:41:35 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:41:35 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:41:35 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:41:35 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 04:41:35 --> URI Class Initialized
DEBUG - 2015-03-22 04:41:35 --> Final output sent to browser
DEBUG - 2015-03-22 04:41:35 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:41:35 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:41:35 --> File loaded: application/views//common/listModel.php
DEBUG - 2015-03-22 04:41:35 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:41:35 --> URI Class Initialized
DEBUG - 2015-03-22 04:41:35 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:41:35 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:41:35 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:41:35 --> Final output sent to browser
DEBUG - 2015-03-22 04:41:35 --> Security Class Initialized
DEBUG - 2015-03-22 04:41:35 --> Total execution time: 3.3152
DEBUG - 2015-03-22 04:41:35 --> Controller Class Initialized
DEBUG - 2015-03-22 04:41:35 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:41:36 --> Security Class Initialized
DEBUG - 2015-03-22 04:41:36 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:41:36 --> Controller Class Initialized
DEBUG - 2015-03-22 04:41:36 --> Controller Class Initialized
DEBUG - 2015-03-22 04:41:36 --> Router Class Initialized
DEBUG - 2015-03-22 04:41:36 --> Router Class Initialized
DEBUG - 2015-03-22 04:41:36 --> Total execution time: 3.2062
DEBUG - 2015-03-22 04:41:36 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:41:36 --> Output Class Initialized
DEBUG - 2015-03-22 04:41:36 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:41:36 --> URI Class Initialized
DEBUG - 2015-03-22 04:41:36 --> Security Class Initialized
DEBUG - 2015-03-22 04:41:36 --> Router Class Initialized
DEBUG - 2015-03-22 04:41:36 --> Input Class Initialized
DEBUG - 2015-03-22 04:41:36 --> Input Class Initialized
DEBUG - 2015-03-22 04:41:36 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:41:36 --> Output Class Initialized
DEBUG - 2015-03-22 04:41:36 --> Language Class Initialized
DEBUG - 2015-03-22 04:41:36 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:41:36 --> Loader Class Initialized
DEBUG - 2015-03-22 04:41:36 --> Security Class Initialized
DEBUG - 2015-03-22 04:41:36 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:41:36 --> File loaded: application/views//common/user/listCntry.php
DEBUG - 2015-03-22 04:41:36 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 04:41:36 --> Config Class Initialized
DEBUG - 2015-03-22 04:41:36 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:41:36 --> Final output sent to browser
DEBUG - 2015-03-22 04:41:36 --> Output Class Initialized
DEBUG - 2015-03-22 04:41:36 --> Input Class Initialized
DEBUG - 2015-03-22 04:41:36 --> Language Class Initialized
DEBUG - 2015-03-22 04:41:36 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:41:36 --> Config Class Initialized
DEBUG - 2015-03-22 04:41:36 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:41:36 --> Input Class Initialized
DEBUG - 2015-03-22 04:41:36 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:41:36 --> URI Class Initialized
DEBUG - 2015-03-22 04:41:36 --> Total execution time: 3.7472
DEBUG - 2015-03-22 04:41:36 --> Final output sent to browser
DEBUG - 2015-03-22 04:41:36 --> Security Class Initialized
DEBUG - 2015-03-22 04:41:36 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:41:36 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:41:36 --> Loader Class Initialized
DEBUG - 2015-03-22 04:41:36 --> Controller Class Initialized
DEBUG - 2015-03-22 04:41:36 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:41:36 --> Router Class Initialized
DEBUG - 2015-03-22 04:41:36 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:41:36 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:41:36 --> Input Class Initialized
DEBUG - 2015-03-22 04:41:36 --> Total execution time: 3.7102
DEBUG - 2015-03-22 04:41:36 --> Language Class Initialized
DEBUG - 2015-03-22 04:41:36 --> File loaded: application/views//common/user/listUserPiNo.php
DEBUG - 2015-03-22 04:41:36 --> Loader Class Initialized
DEBUG - 2015-03-22 04:41:36 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:41:36 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 04:41:37 --> Output Class Initialized
DEBUG - 2015-03-22 04:41:37 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:41:37 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:41:37 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:41:37 --> Language Class Initialized
DEBUG - 2015-03-22 04:41:37 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:41:37 --> Final output sent to browser
DEBUG - 2015-03-22 04:41:37 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:41:37 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:41:37 --> Final output sent to browser
DEBUG - 2015-03-22 04:41:37 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:41:37 --> Security Class Initialized
DEBUG - 2015-03-22 04:41:37 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:41:37 --> URI Class Initialized
DEBUG - 2015-03-22 04:41:37 --> Loader Class Initialized
DEBUG - 2015-03-22 04:41:37 --> Language Class Initialized
DEBUG - 2015-03-22 04:41:37 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:41:37 --> Total execution time: 4.8493
DEBUG - 2015-03-22 04:41:37 --> Controller Class Initialized
DEBUG - 2015-03-22 04:41:37 --> Total execution time: 4.6073
DEBUG - 2015-03-22 04:41:37 --> Input Class Initialized
DEBUG - 2015-03-22 04:41:38 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:41:38 --> Router Class Initialized
DEBUG - 2015-03-22 04:41:38 --> URI Class Initialized
DEBUG - 2015-03-22 04:41:38 --> Loader Class Initialized
DEBUG - 2015-03-22 04:41:38 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:41:38 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:41:38 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 04:41:38 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:41:38 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:41:38 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:41:38 --> Router Class Initialized
DEBUG - 2015-03-22 04:41:38 --> Output Class Initialized
DEBUG - 2015-03-22 04:41:38 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:41:38 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:41:38 --> Final output sent to browser
DEBUG - 2015-03-22 04:41:38 --> Language Class Initialized
DEBUG - 2015-03-22 04:41:38 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:41:38 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:41:38 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:41:38 --> Security Class Initialized
DEBUG - 2015-03-22 04:41:38 --> Output Class Initialized
DEBUG - 2015-03-22 04:41:39 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:41:39 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:41:39 --> Total execution time: 4.4633
DEBUG - 2015-03-22 04:41:39 --> Loader Class Initialized
DEBUG - 2015-03-22 04:41:39 --> Controller Class Initialized
DEBUG - 2015-03-22 04:41:39 --> Controller Class Initialized
DEBUG - 2015-03-22 04:41:39 --> Input Class Initialized
DEBUG - 2015-03-22 04:41:39 --> Security Class Initialized
DEBUG - 2015-03-22 04:41:39 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:41:39 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 04:41:39 --> Input Class Initialized
DEBUG - 2015-03-22 04:41:39 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:41:39 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:41:39 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:41:39 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 04:41:39 --> Final output sent to browser
DEBUG - 2015-03-22 04:41:39 --> Controller Class Initialized
DEBUG - 2015-03-22 04:41:39 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:41:39 --> Final output sent to browser
DEBUG - 2015-03-22 04:41:39 --> Language Class Initialized
DEBUG - 2015-03-22 04:41:39 --> Language Class Initialized
DEBUG - 2015-03-22 04:41:39 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:41:39 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:41:39 --> Total execution time: 5.1413
DEBUG - 2015-03-22 04:41:39 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 04:41:39 --> Total execution time: 4.0602
DEBUG - 2015-03-22 04:41:39 --> Loader Class Initialized
DEBUG - 2015-03-22 04:41:39 --> Loader Class Initialized
DEBUG - 2015-03-22 04:41:39 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:41:39 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:41:39 --> Final output sent to browser
DEBUG - 2015-03-22 04:41:39 --> Controller Class Initialized
DEBUG - 2015-03-22 04:41:39 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:41:39 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:41:39 --> Total execution time: 5.0633
DEBUG - 2015-03-22 04:41:39 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:41:40 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 04:41:40 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:41:40 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:41:40 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:41:40 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:41:40 --> Final output sent to browser
DEBUG - 2015-03-22 04:41:40 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:41:40 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:41:40 --> Controller Class Initialized
DEBUG - 2015-03-22 04:41:40 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:41:40 --> Total execution time: 5.5023
DEBUG - 2015-03-22 04:41:40 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:41:40 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 04:41:40 --> Controller Class Initialized
DEBUG - 2015-03-22 04:41:40 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:41:40 --> Final output sent to browser
DEBUG - 2015-03-22 04:41:40 --> File loaded: application/views//common/listCodeImg.php
DEBUG - 2015-03-22 04:41:40 --> Controller Class Initialized
DEBUG - 2015-03-22 04:41:40 --> Total execution time: 5.2893
DEBUG - 2015-03-22 04:41:40 --> Final output sent to browser
DEBUG - 2015-03-22 04:41:40 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 04:41:40 --> Total execution time: 4.4923
DEBUG - 2015-03-22 04:41:40 --> Final output sent to browser
DEBUG - 2015-03-22 04:41:41 --> Total execution time: 4.6923
DEBUG - 2015-03-22 04:41:49 --> Config Class Initialized
DEBUG - 2015-03-22 04:41:49 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:41:49 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:41:49 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:41:49 --> URI Class Initialized
DEBUG - 2015-03-22 04:41:49 --> Router Class Initialized
DEBUG - 2015-03-22 04:41:49 --> Output Class Initialized
DEBUG - 2015-03-22 04:41:49 --> Security Class Initialized
DEBUG - 2015-03-22 04:41:49 --> Input Class Initialized
DEBUG - 2015-03-22 04:41:49 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:41:49 --> Language Class Initialized
DEBUG - 2015-03-22 04:41:49 --> Loader Class Initialized
DEBUG - 2015-03-22 04:41:49 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:41:49 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:41:49 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:41:49 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:41:50 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:41:50 --> Controller Class Initialized
DEBUG - 2015-03-22 04:41:50 --> File loaded: application/views//admin/order/crtEqpOrder.php
DEBUG - 2015-03-22 04:41:50 --> Final output sent to browser
DEBUG - 2015-03-22 04:41:50 --> Total execution time: 1.0631
DEBUG - 2015-03-22 04:41:50 --> Config Class Initialized
DEBUG - 2015-03-22 04:41:50 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:41:50 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:41:50 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:41:50 --> URI Class Initialized
DEBUG - 2015-03-22 04:41:50 --> Router Class Initialized
DEBUG - 2015-03-22 04:41:50 --> Output Class Initialized
DEBUG - 2015-03-22 04:41:50 --> Security Class Initialized
DEBUG - 2015-03-22 04:41:50 --> Input Class Initialized
DEBUG - 2015-03-22 04:41:50 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:41:50 --> Language Class Initialized
DEBUG - 2015-03-22 04:41:50 --> Loader Class Initialized
DEBUG - 2015-03-22 04:41:51 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:41:51 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:41:51 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:41:51 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:41:51 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:41:51 --> Controller Class Initialized
DEBUG - 2015-03-22 04:41:51 --> readEqpOrder:SELECT a.*, (select atcd_nm from cm_cd_attr where cd = '00B0' and atcd = a.srl_atcd) txt_srl_atcd, (select atcd_nm from cm_cd_attr where cd = '00D0' and atcd = a.rjt_pkt_tp_atcd) txt_rjt_pkt_tp_atcd, (select atcd_nm from cm_cd_attr where cd = '00E0' and atcd = a.pwr_cab_atcd) txt_pwr_cab_atcd, (select atcd_nm from cm_cd_attr where cd = '00F0' and atcd = a.shipped_by_atcd) txt_shipped_by_atcd, (select atcd_nm from cm_cd_attr where cd = '00F1' and atcd = a.courier_atcd) txt_courier_atcd, (select atcd_nm from cm_cd_attr where cd = '00G0' and atcd = a.payment_atcd) txt_payment_atcd, (select atcd_nm from cm_cd_attr where cd = '00H0' and atcd = a.incoterms_atcd) txt_incoterms_atcd, (select atcd_nm from cm_cd_attr where cd = '00L0' and atcd = a.lcd_color_atcd) txt_lcd_color_atcd, (select atcd_nm from cm_cd_attr where cd = '00M0' and atcd = a.lcd_lang_atcd) txt_lcd_lang_atcd, (select cmpy_nm from om_dealer where dealer_seq = a.dealer_seq) cmpy_nm, (select atcd_nm from cm_cd_attr where cd = '0022' and atcd = a.cntry_atcd) txt_cntry_atcd, if(mdl_cd in ('0007','0009'), concat(mdl_nm, concat('R',lan_L),if(a.lcd_color_atcd='00L00002','C','')), if(mdl_cd in ('3000'), concat(mdl_nm, concat('F',rjt_pkt_tp),''),mdl_nm)) txt_mdl_nm, DATE_FORMAT(a.delivery_dt, '%Y-%m-%d') txt_delivery_dt FROM ( SELECT a.*, b.cntry_atcd, b.dealer_seq, b.worker_seq, b.premium_rate, b.tot_amt, b.cnfm_yn, b.cnfm_dt, b.wrk_tp_atcd, b.udt_dt as order_dt, (CASE WHEN a.rjt_pkt_tp_atcd = ('00D00001') THEN 'A'  WHEN a.rjt_pkt_tp_atcd = ('00D00002') THEN 'I' END) rjt_pkt_tp, (SELECT mdl_nm FROM om_mdl WHERE mdl_cd = a.mdl_cd) mdl_nm, (SELECT if(count(*)>0,'L','') FROM om_ord_eqp_dtl where pi_no = a.pi_no and po_no = a.po_no and om_ord_eqp_dtl.atcd = '00A00001') lan_L FROM om_ord_eqp a, om_ord_inf b WHERE a.pi_no = b.pi_no AND a.pi_no = '150011bg' AND a.po_no = 36 ) a
DEBUG - 2015-03-22 04:41:51 --> SELECT b.cntry_atcd, b.dealer_seq, b.worker_seq, b.premium_rate, b.tot_amt, b.cnfm_yn, b.cnfm_dt, b.wrk_tp_atcd, a.*, (select atcd_nm from cm_cd_attr where cd = '0091' and atcd = a.currency_atch) txt_currency_atcd, (select atcd_nm from cm_cd_attr where cd = '0092' and atcd = a.serial_currency_atch) txt_serial_currency_atch, (select atcd_nm from cm_cd_attr where cd = '00A0' and atcd = a.opt_hw_atcd) txt_opt_hw_atcd, (select atcd_nm from cm_cd_attr where cd = '00C0' and atcd = a.pc_cab_atcd) txt_pc_cab_atcd FROM ( SELECT b.*,(case when b.cd='0091' then b.atcd else '' end) currency_atch,(CASE WHEN b.cd='0091' AND b.atcd_ox='O' THEN b.atcd ELSE '' END) fitness,(CASE WHEN b.cd='0091' THEN b.atcd_ox ELSE '' END) fitness_ox,(case when b.cd='0092' then b.atcd else '' end) serial_currency_atch,(CASE WHEN b.cd='0092' AND b.atcd_ox='O' THEN b.atcd ELSE '' END) srl_fitness,(CASE WHEN b.cd='0092' THEN b.atcd_ox ELSE '' END) srl_fitness_ox,(case when b.cd='00A0' then b.atcd else '' end) opt_hw_atcd,(case when b.cd='00C0' then b.atcd else '' end) pc_cab_atcd FROM om_ord_eqp a, om_ord_eqp_dtl b WHERE a.pi_no = b.pi_no AND a.po_no = b.po_no AND a.pi_no = '150011bg'		AND a.po_no = 36) a, om_ord_inf b WHERE a.pi_no = b.pi_no order by cd, atcd
DEBUG - 2015-03-22 04:41:51 --> INSERT INTO om_sndmail(pi_no, wrk_tp_atcd, sndmail_atcd, auth_grp_cd, sender_email, sender_eng_nm, title, ctnt, crt_dt, crt_uid) VALUES ('150011bg','00700110', '00700111', 'UD', 'kpbaek@localhost', (SELECT dealer_nm FROM om_dealer   WHERE dealer_uid='sofia@ubs-bg.com'), (select concat(atcd_nm,' - ',(select cmpy_nm from om_dealer where dealer_uid='sofia@ubs-bg.com')) from cm_cd_attr where cd = '0071' and atcd = '00700111'), '', now(), 'sofia@ubs-bg.com')
DEBUG - 2015-03-22 04:41:51 --> sql3:INSERT INTO om_sndmail_dtl (sndmail_seq, email_from, email_to, rcpnt_tp_atcd, snd_yn, crt_dt, crt_uid) SELECT 217, 'safe@safeleader.esy.es', (select usr_email from om_user where uid = a.dealer_uid), '00100010' rcpnt_tp_atcd, 'N', now(), 'sofia@ubs-bg.com' FROM om_dealer a, om_ord_inf b WHERE a.dealer_seq = b.dealer_seq AND b.pi_no = '150011bg' UNION SELECT 217, 'kpbaek@localhost', (select team_email from om_team where team_atcd = '00600SL0') email_to, '00100040' rcpnt_tp_atcd, 'N', now(), 'sofia@ubs-bg.com'
DEBUG - 2015-03-22 04:41:51 --> File loaded: application/views//common/crtSndMail.php
DEBUG - 2015-03-22 04:41:51 --> Final output sent to browser
DEBUG - 2015-03-22 04:41:51 --> Total execution time: 1.3351
DEBUG - 2015-03-22 04:41:51 --> Config Class Initialized
DEBUG - 2015-03-22 04:41:51 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:41:51 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:41:51 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:41:52 --> URI Class Initialized
DEBUG - 2015-03-22 04:41:52 --> Router Class Initialized
DEBUG - 2015-03-22 04:41:52 --> Output Class Initialized
DEBUG - 2015-03-22 04:41:52 --> Security Class Initialized
DEBUG - 2015-03-22 04:41:52 --> Input Class Initialized
DEBUG - 2015-03-22 04:41:52 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:41:52 --> Language Class Initialized
DEBUG - 2015-03-22 04:41:52 --> Loader Class Initialized
DEBUG - 2015-03-22 04:41:52 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:41:52 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:41:52 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:41:52 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:41:52 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:41:52 --> Controller Class Initialized
DEBUG - 2015-03-22 04:41:52 --> sql3:SELECT a.pi_no, a.sndmail_seq, a.wrk_tp_atcd, a.sender_email, a.title, a.ctnt, email_from, email_to, snd_yn, b.snd_no, b.rcpnt_tp_atcd, b.rcpnt_team_atcd,(select usr_nm from om_user where uid = a.sender_email) sender_nm,(select usr_nm from om_user where uid = b.email_to) rcpnt_nm FROM om_sndmail a, om_sndmail_dtl b WHERE a.sndmail_seq = b.sndmail_seq and a.sndmail_seq=217 and snd_yn='N'
DEBUG - 2015-03-22 04:41:52 --> dealer:SBM->
DEBUG - 2015-03-22 04:41:53 --> File loaded: application/views//common/sndMailResult.php
DEBUG - 2015-03-22 04:41:53 --> Final output sent to browser
DEBUG - 2015-03-22 04:41:53 --> Total execution time: 1.3741
DEBUG - 2015-03-22 04:42:28 --> Config Class Initialized
DEBUG - 2015-03-22 04:42:28 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:42:28 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:42:28 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:42:28 --> URI Class Initialized
DEBUG - 2015-03-22 04:42:28 --> Router Class Initialized
DEBUG - 2015-03-22 04:42:28 --> Output Class Initialized
DEBUG - 2015-03-22 04:42:28 --> Security Class Initialized
DEBUG - 2015-03-22 04:42:28 --> Input Class Initialized
DEBUG - 2015-03-22 04:42:28 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:42:28 --> Language Class Initialized
DEBUG - 2015-03-22 04:42:28 --> Loader Class Initialized
DEBUG - 2015-03-22 04:42:28 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:42:28 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:42:28 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:42:28 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:42:29 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:42:29 --> Controller Class Initialized
DEBUG - 2015-03-22 04:42:29 --> File loaded: application/views//admin/order/main.php
DEBUG - 2015-03-22 04:42:29 --> Final output sent to browser
DEBUG - 2015-03-22 04:42:29 --> Total execution time: 1.0961
DEBUG - 2015-03-22 04:42:29 --> Config Class Initialized
DEBUG - 2015-03-22 04:42:29 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:42:29 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:42:29 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:42:29 --> URI Class Initialized
DEBUG - 2015-03-22 04:42:29 --> Router Class Initialized
DEBUG - 2015-03-22 04:42:29 --> Output Class Initialized
DEBUG - 2015-03-22 04:42:29 --> Security Class Initialized
DEBUG - 2015-03-22 04:42:29 --> Input Class Initialized
DEBUG - 2015-03-22 04:42:29 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:42:29 --> Language Class Initialized
DEBUG - 2015-03-22 04:42:30 --> Loader Class Initialized
DEBUG - 2015-03-22 04:42:30 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:42:30 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:42:30 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:42:30 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:42:30 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:42:30 --> Controller Class Initialized
DEBUG - 2015-03-22 04:42:30 --> File loaded: application/views//admin/order/tab01.php
DEBUG - 2015-03-22 04:42:30 --> Final output sent to browser
DEBUG - 2015-03-22 04:42:30 --> Total execution time: 1.1511
DEBUG - 2015-03-22 04:42:30 --> Config Class Initialized
DEBUG - 2015-03-22 04:42:30 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:42:31 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:42:31 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:42:31 --> URI Class Initialized
DEBUG - 2015-03-22 04:42:31 --> Router Class Initialized
DEBUG - 2015-03-22 04:42:31 --> Output Class Initialized
DEBUG - 2015-03-22 04:42:31 --> Security Class Initialized
DEBUG - 2015-03-22 04:42:31 --> Input Class Initialized
DEBUG - 2015-03-22 04:42:31 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:42:31 --> Language Class Initialized
DEBUG - 2015-03-22 04:42:31 --> Loader Class Initialized
DEBUG - 2015-03-22 04:42:31 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:42:31 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:42:31 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:42:31 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:42:31 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:42:31 --> Controller Class Initialized
DEBUG - 2015-03-22 04:42:31 --> File loaded: application/views//common/user/viewDealer.php
DEBUG - 2015-03-22 04:42:32 --> Final output sent to browser
DEBUG - 2015-03-22 04:42:32 --> Total execution time: 1.1471
DEBUG - 2015-03-22 04:42:32 --> Config Class Initialized
DEBUG - 2015-03-22 04:42:32 --> Config Class Initialized
DEBUG - 2015-03-22 04:42:32 --> Config Class Initialized
DEBUG - 2015-03-22 04:42:32 --> Config Class Initialized
DEBUG - 2015-03-22 04:42:32 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:42:32 --> Config Class Initialized
DEBUG - 2015-03-22 04:42:32 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:42:32 --> Config Class Initialized
DEBUG - 2015-03-22 04:42:32 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:42:32 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:42:32 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:42:32 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:42:32 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:42:32 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:42:32 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:42:32 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:42:32 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:42:32 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:42:32 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:42:32 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:42:32 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:42:32 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:42:32 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:42:32 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:42:33 --> URI Class Initialized
DEBUG - 2015-03-22 04:42:33 --> URI Class Initialized
DEBUG - 2015-03-22 04:42:33 --> URI Class Initialized
DEBUG - 2015-03-22 04:42:33 --> URI Class Initialized
DEBUG - 2015-03-22 04:42:33 --> URI Class Initialized
DEBUG - 2015-03-22 04:42:33 --> Router Class Initialized
DEBUG - 2015-03-22 04:42:33 --> URI Class Initialized
DEBUG - 2015-03-22 04:42:33 --> Router Class Initialized
DEBUG - 2015-03-22 04:42:33 --> Router Class Initialized
DEBUG - 2015-03-22 04:42:33 --> Router Class Initialized
DEBUG - 2015-03-22 04:42:33 --> Router Class Initialized
DEBUG - 2015-03-22 04:42:33 --> Output Class Initialized
DEBUG - 2015-03-22 04:42:33 --> Output Class Initialized
DEBUG - 2015-03-22 04:42:33 --> Router Class Initialized
DEBUG - 2015-03-22 04:42:33 --> Output Class Initialized
DEBUG - 2015-03-22 04:42:33 --> Output Class Initialized
DEBUG - 2015-03-22 04:42:33 --> Output Class Initialized
DEBUG - 2015-03-22 04:42:33 --> Security Class Initialized
DEBUG - 2015-03-22 04:42:33 --> Security Class Initialized
DEBUG - 2015-03-22 04:42:33 --> Config Class Initialized
DEBUG - 2015-03-22 04:42:33 --> Config Class Initialized
DEBUG - 2015-03-22 04:42:33 --> Output Class Initialized
DEBUG - 2015-03-22 04:42:33 --> Security Class Initialized
DEBUG - 2015-03-22 04:42:33 --> Security Class Initialized
DEBUG - 2015-03-22 04:42:33 --> Security Class Initialized
DEBUG - 2015-03-22 04:42:33 --> Input Class Initialized
DEBUG - 2015-03-22 04:42:33 --> Input Class Initialized
DEBUG - 2015-03-22 04:42:33 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:42:33 --> Security Class Initialized
DEBUG - 2015-03-22 04:42:33 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:42:34 --> Input Class Initialized
DEBUG - 2015-03-22 04:42:34 --> Input Class Initialized
DEBUG - 2015-03-22 04:42:34 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:42:34 --> Input Class Initialized
DEBUG - 2015-03-22 04:42:34 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:42:34 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:42:34 --> Input Class Initialized
DEBUG - 2015-03-22 04:42:34 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:42:34 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:42:34 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:42:34 --> Language Class Initialized
DEBUG - 2015-03-22 04:42:34 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:42:34 --> Language Class Initialized
DEBUG - 2015-03-22 04:42:34 --> Config Class Initialized
DEBUG - 2015-03-22 04:42:34 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:42:34 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:42:34 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:42:34 --> Config Class Initialized
DEBUG - 2015-03-22 04:42:34 --> Language Class Initialized
DEBUG - 2015-03-22 04:42:34 --> Language Class Initialized
DEBUG - 2015-03-22 04:42:34 --> Loader Class Initialized
DEBUG - 2015-03-22 04:42:34 --> Loader Class Initialized
DEBUG - 2015-03-22 04:42:34 --> Language Class Initialized
DEBUG - 2015-03-22 04:42:34 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:42:34 --> URI Class Initialized
DEBUG - 2015-03-22 04:42:34 --> Language Class Initialized
DEBUG - 2015-03-22 04:42:34 --> URI Class Initialized
DEBUG - 2015-03-22 04:42:34 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:42:34 --> Config Class Initialized
DEBUG - 2015-03-22 04:42:34 --> Loader Class Initialized
DEBUG - 2015-03-22 04:42:34 --> Config Class Initialized
DEBUG - 2015-03-22 04:42:34 --> Loader Class Initialized
DEBUG - 2015-03-22 04:42:34 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:42:35 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:42:35 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:42:35 --> Loader Class Initialized
DEBUG - 2015-03-22 04:42:35 --> Router Class Initialized
DEBUG - 2015-03-22 04:42:35 --> Loader Class Initialized
DEBUG - 2015-03-22 04:42:35 --> Router Class Initialized
DEBUG - 2015-03-22 04:42:35 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:42:35 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:42:35 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:42:35 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:42:35 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:42:35 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:42:35 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:42:35 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:42:35 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:42:35 --> Output Class Initialized
DEBUG - 2015-03-22 04:42:35 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:42:35 --> Output Class Initialized
DEBUG - 2015-03-22 04:42:35 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:42:35 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:42:35 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:42:35 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:42:35 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:42:35 --> URI Class Initialized
DEBUG - 2015-03-22 04:42:35 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:42:35 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:42:35 --> Security Class Initialized
DEBUG - 2015-03-22 04:42:35 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:42:35 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:42:36 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:42:36 --> Security Class Initialized
DEBUG - 2015-03-22 04:42:36 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:42:36 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:42:36 --> URI Class Initialized
DEBUG - 2015-03-22 04:42:36 --> Router Class Initialized
DEBUG - 2015-03-22 04:42:36 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:42:36 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:42:36 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:42:36 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:42:36 --> Input Class Initialized
DEBUG - 2015-03-22 04:42:36 --> URI Class Initialized
DEBUG - 2015-03-22 04:42:36 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:42:36 --> Input Class Initialized
DEBUG - 2015-03-22 04:42:36 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:42:36 --> Router Class Initialized
DEBUG - 2015-03-22 04:42:36 --> URI Class Initialized
DEBUG - 2015-03-22 04:42:36 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:42:36 --> Output Class Initialized
DEBUG - 2015-03-22 04:42:36 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:42:36 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:42:37 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:42:37 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:42:37 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:42:37 --> Router Class Initialized
DEBUG - 2015-03-22 04:42:37 --> Router Class Initialized
DEBUG - 2015-03-22 04:42:37 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:42:37 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:42:37 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:42:37 --> Output Class Initialized
DEBUG - 2015-03-22 04:42:37 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:42:37 --> Security Class Initialized
DEBUG - 2015-03-22 04:42:37 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:42:37 --> Output Class Initialized
DEBUG - 2015-03-22 04:42:37 --> Controller Class Initialized
DEBUG - 2015-03-22 04:42:37 --> Controller Class Initialized
DEBUG - 2015-03-22 04:42:37 --> Language Class Initialized
DEBUG - 2015-03-22 04:42:37 --> Output Class Initialized
DEBUG - 2015-03-22 04:42:37 --> Language Class Initialized
DEBUG - 2015-03-22 04:42:37 --> Controller Class Initialized
DEBUG - 2015-03-22 04:42:37 --> Security Class Initialized
DEBUG - 2015-03-22 04:42:37 --> Controller Class Initialized
DEBUG - 2015-03-22 04:42:37 --> Security Class Initialized
DEBUG - 2015-03-22 04:42:37 --> Controller Class Initialized
DEBUG - 2015-03-22 04:42:37 --> Controller Class Initialized
DEBUG - 2015-03-22 04:42:37 --> File loaded: application/views//common/listModel.php
DEBUG - 2015-03-22 04:42:37 --> Input Class Initialized
DEBUG - 2015-03-22 04:42:37 --> File loaded: application/views//common/user/listCntry.php
DEBUG - 2015-03-22 04:42:37 --> Input Class Initialized
DEBUG - 2015-03-22 04:42:37 --> Final output sent to browser
DEBUG - 2015-03-22 04:42:37 --> Loader Class Initialized
DEBUG - 2015-03-22 04:42:37 --> Loader Class Initialized
DEBUG - 2015-03-22 04:42:37 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:42:37 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:42:37 --> Security Class Initialized
DEBUG - 2015-03-22 04:42:37 --> Input Class Initialized
DEBUG - 2015-03-22 04:42:37 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 04:42:37 --> Total execution time: 5.5643
DEBUG - 2015-03-22 04:42:37 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:42:37 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 04:42:37 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 04:42:38 --> Final output sent to browser
DEBUG - 2015-03-22 04:42:38 --> Language Class Initialized
DEBUG - 2015-03-22 04:42:38 --> Input Class Initialized
DEBUG - 2015-03-22 04:42:38 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:42:38 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:42:38 --> Final output sent to browser
DEBUG - 2015-03-22 04:42:38 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:42:38 --> Final output sent to browser
DEBUG - 2015-03-22 04:42:38 --> Final output sent to browser
DEBUG - 2015-03-22 04:42:38 --> Total execution time: 5.8213
DEBUG - 2015-03-22 04:42:38 --> Total execution time: 5.9163
DEBUG - 2015-03-22 04:42:38 --> Config Class Initialized
DEBUG - 2015-03-22 04:42:38 --> Language Class Initialized
DEBUG - 2015-03-22 04:42:38 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:42:38 --> Loader Class Initialized
DEBUG - 2015-03-22 04:42:38 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:42:38 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:42:38 --> Total execution time: 5.7823
DEBUG - 2015-03-22 04:42:38 --> Language Class Initialized
DEBUG - 2015-03-22 04:42:38 --> Total execution time: 5.9663
DEBUG - 2015-03-22 04:42:38 --> File loaded: application/views//common/user/listUserPiNo.php
DEBUG - 2015-03-22 04:42:38 --> Config Class Initialized
DEBUG - 2015-03-22 04:42:38 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:42:38 --> Loader Class Initialized
DEBUG - 2015-03-22 04:42:38 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:42:39 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:42:39 --> Language Class Initialized
DEBUG - 2015-03-22 04:42:39 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:42:39 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:42:39 --> Loader Class Initialized
DEBUG - 2015-03-22 04:42:39 --> Final output sent to browser
DEBUG - 2015-03-22 04:42:39 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:42:39 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:42:39 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:42:39 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:42:39 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:42:39 --> Loader Class Initialized
DEBUG - 2015-03-22 04:42:39 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:42:39 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:42:39 --> Total execution time: 7.0014
DEBUG - 2015-03-22 04:42:39 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:42:39 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:42:39 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:42:39 --> Controller Class Initialized
DEBUG - 2015-03-22 04:42:39 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:42:39 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:42:39 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:42:39 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:42:39 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:42:39 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:42:39 --> URI Class Initialized
DEBUG - 2015-03-22 04:42:40 --> Controller Class Initialized
DEBUG - 2015-03-22 04:42:40 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:42:40 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 04:42:40 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:42:40 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:42:40 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:42:40 --> URI Class Initialized
DEBUG - 2015-03-22 04:42:40 --> Final output sent to browser
DEBUG - 2015-03-22 04:42:40 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:42:40 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 04:42:40 --> Router Class Initialized
DEBUG - 2015-03-22 04:42:40 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:42:40 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:42:40 --> Router Class Initialized
DEBUG - 2015-03-22 04:42:40 --> Total execution time: 6.6234
DEBUG - 2015-03-22 04:42:40 --> Final output sent to browser
DEBUG - 2015-03-22 04:42:40 --> Controller Class Initialized
DEBUG - 2015-03-22 04:42:40 --> Controller Class Initialized
DEBUG - 2015-03-22 04:42:40 --> Output Class Initialized
DEBUG - 2015-03-22 04:42:40 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:42:40 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:42:40 --> Output Class Initialized
DEBUG - 2015-03-22 04:42:40 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 04:42:40 --> Total execution time: 6.8384
DEBUG - 2015-03-22 04:42:40 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 04:42:40 --> Final output sent to browser
DEBUG - 2015-03-22 04:42:40 --> Security Class Initialized
DEBUG - 2015-03-22 04:42:40 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:42:40 --> Security Class Initialized
DEBUG - 2015-03-22 04:42:40 --> Controller Class Initialized
DEBUG - 2015-03-22 04:42:40 --> Final output sent to browser
DEBUG - 2015-03-22 04:42:40 --> Total execution time: 6.4304
DEBUG - 2015-03-22 04:42:41 --> Controller Class Initialized
DEBUG - 2015-03-22 04:42:41 --> Input Class Initialized
DEBUG - 2015-03-22 04:42:41 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 04:42:41 --> Total execution time: 6.0433
DEBUG - 2015-03-22 04:42:41 --> Input Class Initialized
DEBUG - 2015-03-22 04:42:41 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:42:41 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 04:42:41 --> Final output sent to browser
DEBUG - 2015-03-22 04:42:41 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:42:41 --> Language Class Initialized
DEBUG - 2015-03-22 04:42:41 --> Final output sent to browser
DEBUG - 2015-03-22 04:42:41 --> Total execution time: 6.8584
DEBUG - 2015-03-22 04:42:41 --> Language Class Initialized
DEBUG - 2015-03-22 04:42:41 --> Loader Class Initialized
DEBUG - 2015-03-22 04:42:41 --> Total execution time: 6.6334
DEBUG - 2015-03-22 04:42:41 --> Loader Class Initialized
DEBUG - 2015-03-22 04:42:41 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:42:41 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:42:41 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:42:41 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:42:41 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:42:41 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:42:41 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:42:41 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:42:41 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:42:42 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:42:42 --> Controller Class Initialized
DEBUG - 2015-03-22 04:42:42 --> Controller Class Initialized
DEBUG - 2015-03-22 04:42:42 --> File loaded: application/views//common/listCodeImg.php
DEBUG - 2015-03-22 04:42:42 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 04:42:42 --> Final output sent to browser
DEBUG - 2015-03-22 04:42:42 --> Final output sent to browser
DEBUG - 2015-03-22 04:42:42 --> Total execution time: 3.4132
DEBUG - 2015-03-22 04:42:42 --> Total execution time: 3.9142
DEBUG - 2015-03-22 04:42:52 --> Config Class Initialized
DEBUG - 2015-03-22 04:42:52 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:42:52 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:42:52 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:42:52 --> URI Class Initialized
DEBUG - 2015-03-22 04:42:52 --> Router Class Initialized
DEBUG - 2015-03-22 04:42:52 --> Output Class Initialized
DEBUG - 2015-03-22 04:42:52 --> Security Class Initialized
DEBUG - 2015-03-22 04:42:52 --> Input Class Initialized
DEBUG - 2015-03-22 04:42:53 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:42:53 --> Language Class Initialized
DEBUG - 2015-03-22 04:42:53 --> Loader Class Initialized
DEBUG - 2015-03-22 04:42:53 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:42:53 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:42:53 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:42:53 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:42:53 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:42:53 --> Controller Class Initialized
DEBUG - 2015-03-22 04:42:53 --> File loaded: application/views//admin/order/crtEqpOrder.php
DEBUG - 2015-03-22 04:42:53 --> Final output sent to browser
DEBUG - 2015-03-22 04:42:53 --> Total execution time: 1.1781
DEBUG - 2015-03-22 04:42:53 --> Config Class Initialized
DEBUG - 2015-03-22 04:42:53 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:42:53 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:42:53 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:42:54 --> URI Class Initialized
DEBUG - 2015-03-22 04:42:54 --> Router Class Initialized
DEBUG - 2015-03-22 04:42:54 --> Output Class Initialized
DEBUG - 2015-03-22 04:42:54 --> Security Class Initialized
DEBUG - 2015-03-22 04:42:54 --> Input Class Initialized
DEBUG - 2015-03-22 04:42:54 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:42:54 --> Language Class Initialized
DEBUG - 2015-03-22 04:42:54 --> Loader Class Initialized
DEBUG - 2015-03-22 04:42:54 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:42:54 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:42:54 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:42:54 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:42:54 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:42:54 --> Controller Class Initialized
DEBUG - 2015-03-22 04:42:54 --> readEqpOrder:SELECT a.*, (select atcd_nm from cm_cd_attr where cd = '00B0' and atcd = a.srl_atcd) txt_srl_atcd, (select atcd_nm from cm_cd_attr where cd = '00D0' and atcd = a.rjt_pkt_tp_atcd) txt_rjt_pkt_tp_atcd, (select atcd_nm from cm_cd_attr where cd = '00E0' and atcd = a.pwr_cab_atcd) txt_pwr_cab_atcd, (select atcd_nm from cm_cd_attr where cd = '00F0' and atcd = a.shipped_by_atcd) txt_shipped_by_atcd, (select atcd_nm from cm_cd_attr where cd = '00F1' and atcd = a.courier_atcd) txt_courier_atcd, (select atcd_nm from cm_cd_attr where cd = '00G0' and atcd = a.payment_atcd) txt_payment_atcd, (select atcd_nm from cm_cd_attr where cd = '00H0' and atcd = a.incoterms_atcd) txt_incoterms_atcd, (select atcd_nm from cm_cd_attr where cd = '00L0' and atcd = a.lcd_color_atcd) txt_lcd_color_atcd, (select atcd_nm from cm_cd_attr where cd = '00M0' and atcd = a.lcd_lang_atcd) txt_lcd_lang_atcd, (select cmpy_nm from om_dealer where dealer_seq = a.dealer_seq) cmpy_nm, (select atcd_nm from cm_cd_attr where cd = '0022' and atcd = a.cntry_atcd) txt_cntry_atcd, if(mdl_cd in ('0007','0009'), concat(mdl_nm, concat('R',lan_L),if(a.lcd_color_atcd='00L00002','C','')), if(mdl_cd in ('3000'), concat(mdl_nm, concat('F',rjt_pkt_tp),''),mdl_nm)) txt_mdl_nm, DATE_FORMAT(a.delivery_dt, '%Y-%m-%d') txt_delivery_dt FROM ( SELECT a.*, b.cntry_atcd, b.dealer_seq, b.worker_seq, b.premium_rate, b.tot_amt, b.cnfm_yn, b.cnfm_dt, b.wrk_tp_atcd, b.udt_dt as order_dt, (CASE WHEN a.rjt_pkt_tp_atcd = ('00D00001') THEN 'A'  WHEN a.rjt_pkt_tp_atcd = ('00D00002') THEN 'I' END) rjt_pkt_tp, (SELECT mdl_nm FROM om_mdl WHERE mdl_cd = a.mdl_cd) mdl_nm, (SELECT if(count(*)>0,'L','') FROM om_ord_eqp_dtl where pi_no = a.pi_no and po_no = a.po_no and om_ord_eqp_dtl.atcd = '00A00001') lan_L FROM om_ord_eqp a, om_ord_inf b WHERE a.pi_no = b.pi_no AND a.pi_no = '150012bg' AND a.po_no = 37 ) a
DEBUG - 2015-03-22 04:42:54 --> SELECT b.cntry_atcd, b.dealer_seq, b.worker_seq, b.premium_rate, b.tot_amt, b.cnfm_yn, b.cnfm_dt, b.wrk_tp_atcd, a.*, (select atcd_nm from cm_cd_attr where cd = '0091' and atcd = a.currency_atch) txt_currency_atcd, (select atcd_nm from cm_cd_attr where cd = '0092' and atcd = a.serial_currency_atch) txt_serial_currency_atch, (select atcd_nm from cm_cd_attr where cd = '00A0' and atcd = a.opt_hw_atcd) txt_opt_hw_atcd, (select atcd_nm from cm_cd_attr where cd = '00C0' and atcd = a.pc_cab_atcd) txt_pc_cab_atcd FROM ( SELECT b.*,(case when b.cd='0091' then b.atcd else '' end) currency_atch,(CASE WHEN b.cd='0091' AND b.atcd_ox='O' THEN b.atcd ELSE '' END) fitness,(CASE WHEN b.cd='0091' THEN b.atcd_ox ELSE '' END) fitness_ox,(case when b.cd='0092' then b.atcd else '' end) serial_currency_atch,(CASE WHEN b.cd='0092' AND b.atcd_ox='O' THEN b.atcd ELSE '' END) srl_fitness,(CASE WHEN b.cd='0092' THEN b.atcd_ox ELSE '' END) srl_fitness_ox,(case when b.cd='00A0' then b.atcd else '' end) opt_hw_atcd,(case when b.cd='00C0' then b.atcd else '' end) pc_cab_atcd FROM om_ord_eqp a, om_ord_eqp_dtl b WHERE a.pi_no = b.pi_no AND a.po_no = b.po_no AND a.pi_no = '150012bg'		AND a.po_no = 37) a, om_ord_inf b WHERE a.pi_no = b.pi_no order by cd, atcd
DEBUG - 2015-03-22 04:42:55 --> INSERT INTO om_sndmail(pi_no, wrk_tp_atcd, sndmail_atcd, auth_grp_cd, sender_email, sender_eng_nm, title, ctnt, crt_dt, crt_uid) VALUES ('150012bg','00700110', '00700111', 'UD', 'kpbaek@localhost', (SELECT dealer_nm FROM om_dealer   WHERE dealer_uid='sofia@ubs-bg.com'), (select concat(atcd_nm,' - ',(select cmpy_nm from om_dealer where dealer_uid='sofia@ubs-bg.com')) from cm_cd_attr where cd = '0071' and atcd = '00700111'), '', now(), 'sofia@ubs-bg.com')
DEBUG - 2015-03-22 04:42:55 --> sql3:INSERT INTO om_sndmail_dtl (sndmail_seq, email_from, email_to, rcpnt_tp_atcd, snd_yn, crt_dt, crt_uid) SELECT 218, 'safe@safeleader.esy.es', (select usr_email from om_user where uid = a.dealer_uid), '00100010' rcpnt_tp_atcd, 'N', now(), 'sofia@ubs-bg.com' FROM om_dealer a, om_ord_inf b WHERE a.dealer_seq = b.dealer_seq AND b.pi_no = '150012bg' UNION SELECT 218, 'kpbaek@localhost', (select team_email from om_team where team_atcd = '00600SL0') email_to, '00100040' rcpnt_tp_atcd, 'N', now(), 'sofia@ubs-bg.com'
DEBUG - 2015-03-22 04:42:55 --> File loaded: application/views//common/crtSndMail.php
DEBUG - 2015-03-22 04:42:55 --> Final output sent to browser
DEBUG - 2015-03-22 04:42:55 --> Total execution time: 1.4231
DEBUG - 2015-03-22 04:42:55 --> Config Class Initialized
DEBUG - 2015-03-22 04:42:55 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:42:55 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:42:55 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:42:55 --> URI Class Initialized
DEBUG - 2015-03-22 04:42:55 --> Router Class Initialized
DEBUG - 2015-03-22 04:42:55 --> Output Class Initialized
DEBUG - 2015-03-22 04:42:55 --> Security Class Initialized
DEBUG - 2015-03-22 04:42:55 --> Input Class Initialized
DEBUG - 2015-03-22 04:42:55 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:42:56 --> Language Class Initialized
DEBUG - 2015-03-22 04:42:56 --> Loader Class Initialized
DEBUG - 2015-03-22 04:42:56 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:42:56 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:42:56 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:42:56 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:42:56 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:42:56 --> Controller Class Initialized
DEBUG - 2015-03-22 04:42:56 --> sql3:SELECT a.pi_no, a.sndmail_seq, a.wrk_tp_atcd, a.sender_email, a.title, a.ctnt, email_from, email_to, snd_yn, b.snd_no, b.rcpnt_tp_atcd, b.rcpnt_team_atcd,(select usr_nm from om_user where uid = a.sender_email) sender_nm,(select usr_nm from om_user where uid = b.email_to) rcpnt_nm FROM om_sndmail a, om_sndmail_dtl b WHERE a.sndmail_seq = b.sndmail_seq and a.sndmail_seq=218 and snd_yn='N'
DEBUG - 2015-03-22 04:42:56 --> dealer:SBM->
DEBUG - 2015-03-22 04:42:56 --> File loaded: application/views//common/sndMailResult.php
DEBUG - 2015-03-22 04:42:56 --> Final output sent to browser
DEBUG - 2015-03-22 04:42:56 --> Total execution time: 1.4661
DEBUG - 2015-03-22 04:45:56 --> Config Class Initialized
DEBUG - 2015-03-22 04:45:56 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:45:56 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:45:56 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:45:56 --> URI Class Initialized
DEBUG - 2015-03-22 04:45:56 --> Router Class Initialized
DEBUG - 2015-03-22 04:45:56 --> Output Class Initialized
DEBUG - 2015-03-22 04:45:56 --> Security Class Initialized
DEBUG - 2015-03-22 04:45:56 --> Input Class Initialized
DEBUG - 2015-03-22 04:45:56 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:45:56 --> Language Class Initialized
DEBUG - 2015-03-22 04:45:56 --> Loader Class Initialized
DEBUG - 2015-03-22 04:45:56 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:45:56 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:45:56 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:45:57 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:45:57 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:45:57 --> Controller Class Initialized
DEBUG - 2015-03-22 04:45:57 --> File loaded: application/views//admin/order/main.php
DEBUG - 2015-03-22 04:45:57 --> Final output sent to browser
DEBUG - 2015-03-22 04:45:57 --> Total execution time: 1.1801
DEBUG - 2015-03-22 04:45:57 --> Config Class Initialized
DEBUG - 2015-03-22 04:45:57 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:45:57 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:45:57 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:45:57 --> URI Class Initialized
DEBUG - 2015-03-22 04:45:57 --> Router Class Initialized
DEBUG - 2015-03-22 04:45:58 --> Output Class Initialized
DEBUG - 2015-03-22 04:45:58 --> Security Class Initialized
DEBUG - 2015-03-22 04:45:58 --> Input Class Initialized
DEBUG - 2015-03-22 04:45:58 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:45:58 --> Language Class Initialized
DEBUG - 2015-03-22 04:45:58 --> Loader Class Initialized
DEBUG - 2015-03-22 04:45:58 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:45:58 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:45:58 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:45:58 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:45:58 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:45:58 --> Controller Class Initialized
DEBUG - 2015-03-22 04:45:58 --> File loaded: application/views//admin/order/tab01.php
DEBUG - 2015-03-22 04:45:58 --> Final output sent to browser
DEBUG - 2015-03-22 04:45:58 --> Total execution time: 1.1601
DEBUG - 2015-03-22 04:45:59 --> Config Class Initialized
DEBUG - 2015-03-22 04:45:59 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:45:59 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:45:59 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:45:59 --> URI Class Initialized
DEBUG - 2015-03-22 04:45:59 --> Router Class Initialized
DEBUG - 2015-03-22 04:45:59 --> Output Class Initialized
DEBUG - 2015-03-22 04:45:59 --> Security Class Initialized
DEBUG - 2015-03-22 04:45:59 --> Input Class Initialized
DEBUG - 2015-03-22 04:45:59 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:45:59 --> Language Class Initialized
DEBUG - 2015-03-22 04:45:59 --> Loader Class Initialized
DEBUG - 2015-03-22 04:45:59 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:45:59 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:45:59 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:46:00 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:46:00 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:46:00 --> Controller Class Initialized
DEBUG - 2015-03-22 04:46:00 --> File loaded: application/views//common/user/viewDealer.php
DEBUG - 2015-03-22 04:46:00 --> Final output sent to browser
DEBUG - 2015-03-22 04:46:00 --> Total execution time: 1.2041
DEBUG - 2015-03-22 04:46:00 --> Config Class Initialized
DEBUG - 2015-03-22 04:46:00 --> Config Class Initialized
DEBUG - 2015-03-22 04:46:00 --> Config Class Initialized
DEBUG - 2015-03-22 04:46:00 --> Config Class Initialized
DEBUG - 2015-03-22 04:46:00 --> Config Class Initialized
DEBUG - 2015-03-22 04:46:00 --> Config Class Initialized
DEBUG - 2015-03-22 04:46:00 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:46:00 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:46:00 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:46:00 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:46:00 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:46:00 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:46:00 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:46:00 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:46:00 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:46:00 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:46:01 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:46:01 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:46:01 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:46:01 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:46:01 --> Config Class Initialized
DEBUG - 2015-03-22 04:46:01 --> Config Class Initialized
DEBUG - 2015-03-22 04:46:01 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:46:01 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:46:01 --> URI Class Initialized
DEBUG - 2015-03-22 04:46:01 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:46:01 --> URI Class Initialized
DEBUG - 2015-03-22 04:46:01 --> URI Class Initialized
DEBUG - 2015-03-22 04:46:01 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:46:01 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:46:01 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:46:01 --> Config Class Initialized
DEBUG - 2015-03-22 04:46:01 --> Config Class Initialized
DEBUG - 2015-03-22 04:46:01 --> URI Class Initialized
DEBUG - 2015-03-22 04:46:01 --> Router Class Initialized
DEBUG - 2015-03-22 04:46:01 --> Router Class Initialized
DEBUG - 2015-03-22 04:46:01 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:46:01 --> URI Class Initialized
DEBUG - 2015-03-22 04:46:02 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:46:02 --> Router Class Initialized
DEBUG - 2015-03-22 04:46:02 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:46:02 --> URI Class Initialized
DEBUG - 2015-03-22 04:46:02 --> Output Class Initialized
DEBUG - 2015-03-22 04:46:02 --> Router Class Initialized
DEBUG - 2015-03-22 04:46:02 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:46:02 --> Output Class Initialized
DEBUG - 2015-03-22 04:46:02 --> Config Class Initialized
DEBUG - 2015-03-22 04:46:02 --> Router Class Initialized
DEBUG - 2015-03-22 04:46:02 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:46:02 --> Config Class Initialized
DEBUG - 2015-03-22 04:46:02 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:46:02 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:46:02 --> Output Class Initialized
DEBUG - 2015-03-22 04:46:02 --> Router Class Initialized
DEBUG - 2015-03-22 04:46:02 --> Security Class Initialized
DEBUG - 2015-03-22 04:46:02 --> Output Class Initialized
DEBUG - 2015-03-22 04:46:02 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:46:02 --> Security Class Initialized
DEBUG - 2015-03-22 04:46:02 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:46:02 --> Output Class Initialized
DEBUG - 2015-03-22 04:46:02 --> URI Class Initialized
DEBUG - 2015-03-22 04:46:02 --> URI Class Initialized
DEBUG - 2015-03-22 04:46:02 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:46:02 --> Security Class Initialized
DEBUG - 2015-03-22 04:46:02 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:46:02 --> Output Class Initialized
DEBUG - 2015-03-22 04:46:02 --> Input Class Initialized
DEBUG - 2015-03-22 04:46:02 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:46:03 --> Input Class Initialized
DEBUG - 2015-03-22 04:46:03 --> Security Class Initialized
DEBUG - 2015-03-22 04:46:03 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:46:03 --> Security Class Initialized
DEBUG - 2015-03-22 04:46:03 --> Router Class Initialized
DEBUG - 2015-03-22 04:46:03 --> Router Class Initialized
DEBUG - 2015-03-22 04:46:03 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:46:03 --> Input Class Initialized
DEBUG - 2015-03-22 04:46:03 --> Security Class Initialized
DEBUG - 2015-03-22 04:46:03 --> URI Class Initialized
DEBUG - 2015-03-22 04:46:03 --> URI Class Initialized
DEBUG - 2015-03-22 04:46:03 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:46:03 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:46:03 --> Input Class Initialized
DEBUG - 2015-03-22 04:46:03 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:46:03 --> Input Class Initialized
DEBUG - 2015-03-22 04:46:03 --> Output Class Initialized
DEBUG - 2015-03-22 04:46:03 --> Output Class Initialized
DEBUG - 2015-03-22 04:46:03 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:46:03 --> Input Class Initialized
DEBUG - 2015-03-22 04:46:03 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:46:03 --> Router Class Initialized
DEBUG - 2015-03-22 04:46:03 --> Router Class Initialized
DEBUG - 2015-03-22 04:46:03 --> Language Class Initialized
DEBUG - 2015-03-22 04:46:03 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:46:03 --> Language Class Initialized
DEBUG - 2015-03-22 04:46:03 --> URI Class Initialized
DEBUG - 2015-03-22 04:46:03 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:46:03 --> Security Class Initialized
DEBUG - 2015-03-22 04:46:04 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:46:04 --> Security Class Initialized
DEBUG - 2015-03-22 04:46:04 --> URI Class Initialized
DEBUG - 2015-03-22 04:46:04 --> Output Class Initialized
DEBUG - 2015-03-22 04:46:04 --> Language Class Initialized
DEBUG - 2015-03-22 04:46:04 --> Output Class Initialized
DEBUG - 2015-03-22 04:46:04 --> Language Class Initialized
DEBUG - 2015-03-22 04:46:04 --> Loader Class Initialized
DEBUG - 2015-03-22 04:46:04 --> Loader Class Initialized
DEBUG - 2015-03-22 04:46:04 --> Router Class Initialized
DEBUG - 2015-03-22 04:46:04 --> Language Class Initialized
DEBUG - 2015-03-22 04:46:04 --> Language Class Initialized
DEBUG - 2015-03-22 04:46:04 --> Input Class Initialized
DEBUG - 2015-03-22 04:46:04 --> Security Class Initialized
DEBUG - 2015-03-22 04:46:04 --> Security Class Initialized
DEBUG - 2015-03-22 04:46:04 --> Router Class Initialized
DEBUG - 2015-03-22 04:46:04 --> Input Class Initialized
DEBUG - 2015-03-22 04:46:04 --> Loader Class Initialized
DEBUG - 2015-03-22 04:46:04 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:46:04 --> Loader Class Initialized
DEBUG - 2015-03-22 04:46:04 --> Input Class Initialized
DEBUG - 2015-03-22 04:46:04 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:46:04 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:46:04 --> Loader Class Initialized
DEBUG - 2015-03-22 04:46:04 --> Output Class Initialized
DEBUG - 2015-03-22 04:46:04 --> Loader Class Initialized
DEBUG - 2015-03-22 04:46:04 --> Input Class Initialized
DEBUG - 2015-03-22 04:46:04 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:46:04 --> Output Class Initialized
DEBUG - 2015-03-22 04:46:04 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:46:05 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:46:05 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:46:05 --> Language Class Initialized
DEBUG - 2015-03-22 04:46:05 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:46:05 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:46:05 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:46:05 --> Loader Class Initialized
DEBUG - 2015-03-22 04:46:05 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:46:05 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:46:05 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:46:05 --> Security Class Initialized
DEBUG - 2015-03-22 04:46:05 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:46:05 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:46:05 --> Language Class Initialized
DEBUG - 2015-03-22 04:46:05 --> Security Class Initialized
DEBUG - 2015-03-22 04:46:05 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:46:05 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:46:05 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:46:05 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:46:05 --> Language Class Initialized
DEBUG - 2015-03-22 04:46:05 --> Loader Class Initialized
DEBUG - 2015-03-22 04:46:05 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:46:05 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:46:05 --> Language Class Initialized
DEBUG - 2015-03-22 04:46:05 --> Input Class Initialized
DEBUG - 2015-03-22 04:46:05 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:46:05 --> Input Class Initialized
DEBUG - 2015-03-22 04:46:05 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:46:05 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:46:05 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:46:05 --> Loader Class Initialized
DEBUG - 2015-03-22 04:46:06 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:46:06 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:46:06 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:46:06 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:46:06 --> Loader Class Initialized
DEBUG - 2015-03-22 04:46:06 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:46:06 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:46:06 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:46:06 --> Controller Class Initialized
DEBUG - 2015-03-22 04:46:06 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:46:06 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:46:06 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:46:06 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:46:06 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:46:06 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:46:06 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:46:06 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:46:06 --> Language Class Initialized
DEBUG - 2015-03-22 04:46:06 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:46:06 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 04:46:06 --> Language Class Initialized
DEBUG - 2015-03-22 04:46:06 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:46:06 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:46:06 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:46:06 --> Controller Class Initialized
DEBUG - 2015-03-22 04:46:07 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:46:07 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:46:07 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:46:07 --> Controller Class Initialized
DEBUG - 2015-03-22 04:46:07 --> Final output sent to browser
DEBUG - 2015-03-22 04:46:07 --> Loader Class Initialized
DEBUG - 2015-03-22 04:46:07 --> Loader Class Initialized
DEBUG - 2015-03-22 04:46:07 --> Controller Class Initialized
DEBUG - 2015-03-22 04:46:07 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:46:07 --> File loaded: application/views//common/user/listUserPiNo.php
DEBUG - 2015-03-22 04:46:07 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:46:07 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:46:07 --> Controller Class Initialized
DEBUG - 2015-03-22 04:46:07 --> Total execution time: 6.5934
DEBUG - 2015-03-22 04:46:07 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 04:46:07 --> Controller Class Initialized
DEBUG - 2015-03-22 04:46:07 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:46:07 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:46:07 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:46:07 --> Controller Class Initialized
DEBUG - 2015-03-22 04:46:07 --> Final output sent to browser
DEBUG - 2015-03-22 04:46:07 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:46:07 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:46:07 --> File loaded: application/views//common/listModel.php
DEBUG - 2015-03-22 04:46:07 --> Config Class Initialized
DEBUG - 2015-03-22 04:46:07 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:46:07 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 04:46:07 --> Final output sent to browser
DEBUG - 2015-03-22 04:46:07 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:46:08 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:46:08 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 04:46:08 --> Total execution time: 7.1854
DEBUG - 2015-03-22 04:46:08 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:46:08 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:46:08 --> Final output sent to browser
DEBUG - 2015-03-22 04:46:08 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:46:08 --> Controller Class Initialized
DEBUG - 2015-03-22 04:46:08 --> Final output sent to browser
DEBUG - 2015-03-22 04:46:08 --> Total execution time: 7.4284
DEBUG - 2015-03-22 04:46:08 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:46:08 --> Final output sent to browser
DEBUG - 2015-03-22 04:46:08 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:46:08 --> File loaded: application/views//common/user/listCntry.php
DEBUG - 2015-03-22 04:46:08 --> Config Class Initialized
DEBUG - 2015-03-22 04:46:08 --> Controller Class Initialized
DEBUG - 2015-03-22 04:46:08 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:46:08 --> Total execution time: 7.7194
DEBUG - 2015-03-22 04:46:08 --> Controller Class Initialized
DEBUG - 2015-03-22 04:46:08 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 04:46:08 --> Total execution time: 7.1444
DEBUG - 2015-03-22 04:46:08 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:46:08 --> Total execution time: 7.8795
DEBUG - 2015-03-22 04:46:08 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:46:08 --> Final output sent to browser
DEBUG - 2015-03-22 04:46:09 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:46:09 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 04:46:09 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:46:09 --> Final output sent to browser
DEBUG - 2015-03-22 04:46:09 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:46:09 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 04:46:09 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:46:09 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:46:09 --> Total execution time: 8.3915
DEBUG - 2015-03-22 04:46:09 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:46:09 --> Final output sent to browser
DEBUG - 2015-03-22 04:46:09 --> Total execution time: 7.8324
DEBUG - 2015-03-22 04:46:09 --> URI Class Initialized
DEBUG - 2015-03-22 04:46:09 --> Final output sent to browser
DEBUG - 2015-03-22 04:46:09 --> Controller Class Initialized
DEBUG - 2015-03-22 04:46:09 --> Controller Class Initialized
DEBUG - 2015-03-22 04:46:09 --> URI Class Initialized
DEBUG - 2015-03-22 04:46:10 --> Router Class Initialized
DEBUG - 2015-03-22 04:46:10 --> Total execution time: 7.7144
DEBUG - 2015-03-22 04:46:10 --> Total execution time: 7.8354
DEBUG - 2015-03-22 04:46:10 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 04:46:10 --> Output Class Initialized
DEBUG - 2015-03-22 04:46:10 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 04:46:10 --> Final output sent to browser
DEBUG - 2015-03-22 04:46:10 --> Router Class Initialized
DEBUG - 2015-03-22 04:46:10 --> Final output sent to browser
DEBUG - 2015-03-22 04:46:10 --> Security Class Initialized
DEBUG - 2015-03-22 04:46:10 --> Total execution time: 7.8404
DEBUG - 2015-03-22 04:46:10 --> Output Class Initialized
DEBUG - 2015-03-22 04:46:10 --> Total execution time: 7.9415
DEBUG - 2015-03-22 04:46:10 --> Input Class Initialized
DEBUG - 2015-03-22 04:46:10 --> Security Class Initialized
DEBUG - 2015-03-22 04:46:10 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:46:10 --> Input Class Initialized
DEBUG - 2015-03-22 04:46:10 --> Language Class Initialized
DEBUG - 2015-03-22 04:46:10 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:46:10 --> Loader Class Initialized
DEBUG - 2015-03-22 04:46:10 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:46:10 --> Language Class Initialized
DEBUG - 2015-03-22 04:46:10 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:46:10 --> Loader Class Initialized
DEBUG - 2015-03-22 04:46:10 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:46:10 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:46:10 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:46:10 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:46:11 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:46:11 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:46:11 --> Controller Class Initialized
DEBUG - 2015-03-22 04:46:11 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 04:46:11 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:46:11 --> Final output sent to browser
DEBUG - 2015-03-22 04:46:11 --> Total execution time: 3.3982
DEBUG - 2015-03-22 04:46:11 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:46:11 --> Controller Class Initialized
DEBUG - 2015-03-22 04:46:11 --> File loaded: application/views//common/listCodeImg.php
DEBUG - 2015-03-22 04:46:11 --> Final output sent to browser
DEBUG - 2015-03-22 04:46:11 --> Total execution time: 2.9682
DEBUG - 2015-03-22 04:46:19 --> Config Class Initialized
DEBUG - 2015-03-22 04:46:19 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:46:19 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:46:19 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:46:19 --> URI Class Initialized
DEBUG - 2015-03-22 04:46:19 --> Router Class Initialized
DEBUG - 2015-03-22 04:46:19 --> Output Class Initialized
DEBUG - 2015-03-22 04:46:19 --> Security Class Initialized
DEBUG - 2015-03-22 04:46:19 --> Input Class Initialized
DEBUG - 2015-03-22 04:46:19 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:46:19 --> Language Class Initialized
DEBUG - 2015-03-22 04:46:19 --> Loader Class Initialized
DEBUG - 2015-03-22 04:46:19 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:46:20 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:46:20 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:46:20 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:46:20 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:46:20 --> Controller Class Initialized
DEBUG - 2015-03-22 04:46:20 --> File loaded: application/views//admin/order/crtEqpOrder.php
DEBUG - 2015-03-22 04:46:20 --> Final output sent to browser
DEBUG - 2015-03-22 04:46:20 --> Total execution time: 1.3241
DEBUG - 2015-03-22 04:46:20 --> Config Class Initialized
DEBUG - 2015-03-22 04:46:20 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:46:20 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:46:20 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:46:20 --> URI Class Initialized
DEBUG - 2015-03-22 04:46:20 --> Router Class Initialized
DEBUG - 2015-03-22 04:46:21 --> Output Class Initialized
DEBUG - 2015-03-22 04:46:21 --> Security Class Initialized
DEBUG - 2015-03-22 04:46:21 --> Input Class Initialized
DEBUG - 2015-03-22 04:46:21 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:46:21 --> Language Class Initialized
DEBUG - 2015-03-22 04:46:21 --> Loader Class Initialized
DEBUG - 2015-03-22 04:46:21 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:46:21 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:46:21 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:46:21 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:46:21 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:46:21 --> Controller Class Initialized
DEBUG - 2015-03-22 04:46:21 --> readEqpOrder:SELECT a.*, (select atcd_nm from cm_cd_attr where cd = '00B0' and atcd = a.srl_atcd) txt_srl_atcd, (select atcd_nm from cm_cd_attr where cd = '00D0' and atcd = a.rjt_pkt_tp_atcd) txt_rjt_pkt_tp_atcd, (select atcd_nm from cm_cd_attr where cd = '00E0' and atcd = a.pwr_cab_atcd) txt_pwr_cab_atcd, (select atcd_nm from cm_cd_attr where cd = '00F0' and atcd = a.shipped_by_atcd) txt_shipped_by_atcd, (select atcd_nm from cm_cd_attr where cd = '00F1' and atcd = a.courier_atcd) txt_courier_atcd, (select atcd_nm from cm_cd_attr where cd = '00G0' and atcd = a.payment_atcd) txt_payment_atcd, (select atcd_nm from cm_cd_attr where cd = '00H0' and atcd = a.incoterms_atcd) txt_incoterms_atcd, (select atcd_nm from cm_cd_attr where cd = '00L0' and atcd = a.lcd_color_atcd) txt_lcd_color_atcd, (select atcd_nm from cm_cd_attr where cd = '00M0' and atcd = a.lcd_lang_atcd) txt_lcd_lang_atcd, (select cmpy_nm from om_dealer where dealer_seq = a.dealer_seq) cmpy_nm, (select atcd_nm from cm_cd_attr where cd = '0022' and atcd = a.cntry_atcd) txt_cntry_atcd, if(mdl_cd in ('0007','0009'), concat(mdl_nm, concat('R',lan_L),if(a.lcd_color_atcd='00L00002','C','')), if(mdl_cd in ('3000'), concat(mdl_nm, concat('F',rjt_pkt_tp),''),mdl_nm)) txt_mdl_nm, DATE_FORMAT(a.delivery_dt, '%Y-%m-%d') txt_delivery_dt FROM ( SELECT a.*, b.cntry_atcd, b.dealer_seq, b.worker_seq, b.premium_rate, b.tot_amt, b.cnfm_yn, b.cnfm_dt, b.wrk_tp_atcd, b.udt_dt as order_dt, (CASE WHEN a.rjt_pkt_tp_atcd = ('00D00001') THEN 'A'  WHEN a.rjt_pkt_tp_atcd = ('00D00002') THEN 'I' END) rjt_pkt_tp, (SELECT mdl_nm FROM om_mdl WHERE mdl_cd = a.mdl_cd) mdl_nm, (SELECT if(count(*)>0,'L','') FROM om_ord_eqp_dtl where pi_no = a.pi_no and po_no = a.po_no and om_ord_eqp_dtl.atcd = '00A00001') lan_L FROM om_ord_eqp a, om_ord_inf b WHERE a.pi_no = b.pi_no AND a.pi_no = '150013bg' AND a.po_no = 38 ) a
DEBUG - 2015-03-22 04:46:21 --> SELECT b.cntry_atcd, b.dealer_seq, b.worker_seq, b.premium_rate, b.tot_amt, b.cnfm_yn, b.cnfm_dt, b.wrk_tp_atcd, a.*, (select atcd_nm from cm_cd_attr where cd = '0091' and atcd = a.currency_atch) txt_currency_atcd, (select atcd_nm from cm_cd_attr where cd = '0092' and atcd = a.serial_currency_atch) txt_serial_currency_atch, (select atcd_nm from cm_cd_attr where cd = '00A0' and atcd = a.opt_hw_atcd) txt_opt_hw_atcd, (select atcd_nm from cm_cd_attr where cd = '00C0' and atcd = a.pc_cab_atcd) txt_pc_cab_atcd FROM ( SELECT b.*,(case when b.cd='0091' then b.atcd else '' end) currency_atch,(CASE WHEN b.cd='0091' AND b.atcd_ox='O' THEN b.atcd ELSE '' END) fitness,(CASE WHEN b.cd='0091' THEN b.atcd_ox ELSE '' END) fitness_ox,(case when b.cd='0092' then b.atcd else '' end) serial_currency_atch,(CASE WHEN b.cd='0092' AND b.atcd_ox='O' THEN b.atcd ELSE '' END) srl_fitness,(CASE WHEN b.cd='0092' THEN b.atcd_ox ELSE '' END) srl_fitness_ox,(case when b.cd='00A0' then b.atcd else '' end) opt_hw_atcd,(case when b.cd='00C0' then b.atcd else '' end) pc_cab_atcd FROM om_ord_eqp a, om_ord_eqp_dtl b WHERE a.pi_no = b.pi_no AND a.po_no = b.po_no AND a.pi_no = '150013bg'		AND a.po_no = 38) a, om_ord_inf b WHERE a.pi_no = b.pi_no order by cd, atcd
DEBUG - 2015-03-22 04:46:21 --> INSERT INTO om_sndmail(pi_no, wrk_tp_atcd, sndmail_atcd, auth_grp_cd, sender_email, sender_eng_nm, title, ctnt, crt_dt, crt_uid) VALUES ('150013bg','00700110', '00700111', 'UD', 'kpbaek@localhost', (SELECT dealer_nm FROM om_dealer   WHERE dealer_uid='sofia@ubs-bg.com'), (select concat(atcd_nm,' - ',(select cmpy_nm from om_dealer where dealer_uid='sofia@ubs-bg.com')) from cm_cd_attr where cd = '0071' and atcd = '00700111'), '', now(), 'sofia@ubs-bg.com')
DEBUG - 2015-03-22 04:46:21 --> sql3:INSERT INTO om_sndmail_dtl (sndmail_seq, email_from, email_to, rcpnt_tp_atcd, snd_yn, crt_dt, crt_uid) SELECT 219, 'safe@safeleader.esy.es', (select usr_email from om_user where uid = a.dealer_uid), '00100010' rcpnt_tp_atcd, 'N', now(), 'sofia@ubs-bg.com' FROM om_dealer a, om_ord_inf b WHERE a.dealer_seq = b.dealer_seq AND b.pi_no = '150013bg' UNION SELECT 219, 'kpbaek@localhost', (select team_email from om_team where team_atcd = '00600SL0') email_to, '00100040' rcpnt_tp_atcd, 'N', now(), 'sofia@ubs-bg.com'
DEBUG - 2015-03-22 04:46:22 --> File loaded: application/views//common/crtSndMail.php
DEBUG - 2015-03-22 04:46:22 --> Final output sent to browser
DEBUG - 2015-03-22 04:46:22 --> Total execution time: 1.5501
DEBUG - 2015-03-22 04:46:22 --> Config Class Initialized
DEBUG - 2015-03-22 04:46:22 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:46:22 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:46:22 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:46:22 --> URI Class Initialized
DEBUG - 2015-03-22 04:46:22 --> Router Class Initialized
DEBUG - 2015-03-22 04:46:22 --> Output Class Initialized
DEBUG - 2015-03-22 04:46:22 --> Security Class Initialized
DEBUG - 2015-03-22 04:46:22 --> Input Class Initialized
DEBUG - 2015-03-22 04:46:22 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:46:22 --> Language Class Initialized
DEBUG - 2015-03-22 04:46:22 --> Loader Class Initialized
DEBUG - 2015-03-22 04:46:23 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:46:23 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:46:23 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:46:23 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:46:23 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:46:23 --> Controller Class Initialized
DEBUG - 2015-03-22 04:46:23 --> sql3:SELECT a.pi_no, a.sndmail_seq, a.wrk_tp_atcd, a.sender_email, a.title, a.ctnt, email_from, email_to, snd_yn, b.snd_no, b.rcpnt_tp_atcd, b.rcpnt_team_atcd,(select usr_nm from om_user where uid = a.sender_email) sender_nm,(select usr_nm from om_user where uid = b.email_to) rcpnt_nm FROM om_sndmail a, om_sndmail_dtl b WHERE a.sndmail_seq = b.sndmail_seq and a.sndmail_seq=219 and snd_yn='N'
DEBUG - 2015-03-22 04:46:23 --> File loaded: application/views//common/sndMailResult.php
DEBUG - 2015-03-22 04:46:23 --> Final output sent to browser
DEBUG - 2015-03-22 04:46:23 --> Total execution time: 1.3511
DEBUG - 2015-03-22 04:53:13 --> Config Class Initialized
DEBUG - 2015-03-22 04:53:13 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:53:13 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:53:13 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:53:13 --> URI Class Initialized
DEBUG - 2015-03-22 04:53:14 --> Router Class Initialized
DEBUG - 2015-03-22 04:53:14 --> Output Class Initialized
DEBUG - 2015-03-22 04:53:14 --> Security Class Initialized
DEBUG - 2015-03-22 04:53:14 --> Input Class Initialized
DEBUG - 2015-03-22 04:53:14 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:53:14 --> Language Class Initialized
DEBUG - 2015-03-22 04:53:14 --> Loader Class Initialized
DEBUG - 2015-03-22 04:53:14 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:53:14 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:53:14 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:53:14 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:53:14 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:53:14 --> Controller Class Initialized
DEBUG - 2015-03-22 04:53:14 --> File loaded: application/views//admin/order/main.php
DEBUG - 2015-03-22 04:53:14 --> Final output sent to browser
DEBUG - 2015-03-22 04:53:14 --> Total execution time: 1.3351
DEBUG - 2015-03-22 04:53:15 --> Config Class Initialized
DEBUG - 2015-03-22 04:53:15 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:53:15 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:53:15 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:53:15 --> URI Class Initialized
DEBUG - 2015-03-22 04:53:15 --> Router Class Initialized
DEBUG - 2015-03-22 04:53:15 --> Output Class Initialized
DEBUG - 2015-03-22 04:53:15 --> Security Class Initialized
DEBUG - 2015-03-22 04:53:15 --> Input Class Initialized
DEBUG - 2015-03-22 04:53:15 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:53:15 --> Language Class Initialized
DEBUG - 2015-03-22 04:53:16 --> Loader Class Initialized
DEBUG - 2015-03-22 04:53:16 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:53:16 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:53:16 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:53:16 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:53:16 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:53:16 --> Controller Class Initialized
DEBUG - 2015-03-22 04:53:16 --> File loaded: application/views//admin/order/tab01.php
DEBUG - 2015-03-22 04:53:16 --> Final output sent to browser
DEBUG - 2015-03-22 04:53:16 --> Total execution time: 1.3271
DEBUG - 2015-03-22 04:53:17 --> Config Class Initialized
DEBUG - 2015-03-22 04:53:17 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:53:17 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:53:17 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:53:17 --> URI Class Initialized
DEBUG - 2015-03-22 04:53:17 --> Router Class Initialized
DEBUG - 2015-03-22 04:53:17 --> Output Class Initialized
DEBUG - 2015-03-22 04:53:17 --> Security Class Initialized
DEBUG - 2015-03-22 04:53:17 --> Input Class Initialized
DEBUG - 2015-03-22 04:53:17 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:53:17 --> Language Class Initialized
DEBUG - 2015-03-22 04:53:17 --> Loader Class Initialized
DEBUG - 2015-03-22 04:53:17 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:53:17 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:53:17 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:53:17 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:53:18 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:53:18 --> Controller Class Initialized
DEBUG - 2015-03-22 04:53:18 --> File loaded: application/views//common/user/viewDealer.php
DEBUG - 2015-03-22 04:53:18 --> Final output sent to browser
DEBUG - 2015-03-22 04:53:18 --> Total execution time: 1.2611
DEBUG - 2015-03-22 04:53:18 --> Config Class Initialized
DEBUG - 2015-03-22 04:53:18 --> Config Class Initialized
DEBUG - 2015-03-22 04:53:18 --> Config Class Initialized
DEBUG - 2015-03-22 04:53:18 --> Config Class Initialized
DEBUG - 2015-03-22 04:53:18 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:53:18 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:53:18 --> Config Class Initialized
DEBUG - 2015-03-22 04:53:18 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:53:18 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:53:18 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:53:18 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:53:18 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:53:18 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:53:18 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:53:18 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:53:18 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:53:18 --> URI Class Initialized
DEBUG - 2015-03-22 04:53:19 --> URI Class Initialized
DEBUG - 2015-03-22 04:53:19 --> URI Class Initialized
DEBUG - 2015-03-22 04:53:19 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:53:19 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:53:19 --> Router Class Initialized
DEBUG - 2015-03-22 04:53:19 --> Router Class Initialized
DEBUG - 2015-03-22 04:53:19 --> Router Class Initialized
DEBUG - 2015-03-22 04:53:19 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:53:19 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:53:19 --> Output Class Initialized
DEBUG - 2015-03-22 04:53:19 --> Output Class Initialized
DEBUG - 2015-03-22 04:53:19 --> Config Class Initialized
DEBUG - 2015-03-22 04:53:19 --> URI Class Initialized
DEBUG - 2015-03-22 04:53:19 --> Output Class Initialized
DEBUG - 2015-03-22 04:53:19 --> URI Class Initialized
DEBUG - 2015-03-22 04:53:19 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:53:19 --> Security Class Initialized
DEBUG - 2015-03-22 04:53:19 --> Security Class Initialized
DEBUG - 2015-03-22 04:53:19 --> Router Class Initialized
DEBUG - 2015-03-22 04:53:19 --> Security Class Initialized
DEBUG - 2015-03-22 04:53:19 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:53:19 --> Router Class Initialized
DEBUG - 2015-03-22 04:53:19 --> Input Class Initialized
DEBUG - 2015-03-22 04:53:19 --> Input Class Initialized
DEBUG - 2015-03-22 04:53:19 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:53:19 --> Input Class Initialized
DEBUG - 2015-03-22 04:53:19 --> Output Class Initialized
DEBUG - 2015-03-22 04:53:19 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:53:19 --> URI Class Initialized
DEBUG - 2015-03-22 04:53:19 --> Output Class Initialized
DEBUG - 2015-03-22 04:53:19 --> Language Class Initialized
DEBUG - 2015-03-22 04:53:19 --> Router Class Initialized
DEBUG - 2015-03-22 04:53:20 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:53:20 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:53:20 --> Security Class Initialized
DEBUG - 2015-03-22 04:53:20 --> Security Class Initialized
DEBUG - 2015-03-22 04:53:20 --> Loader Class Initialized
DEBUG - 2015-03-22 04:53:20 --> Output Class Initialized
DEBUG - 2015-03-22 04:53:20 --> Language Class Initialized
DEBUG - 2015-03-22 04:53:20 --> Language Class Initialized
DEBUG - 2015-03-22 04:53:20 --> Input Class Initialized
DEBUG - 2015-03-22 04:53:20 --> Input Class Initialized
DEBUG - 2015-03-22 04:53:20 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:53:20 --> Security Class Initialized
DEBUG - 2015-03-22 04:53:20 --> Loader Class Initialized
DEBUG - 2015-03-22 04:53:20 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:53:20 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:53:20 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:53:20 --> Input Class Initialized
DEBUG - 2015-03-22 04:53:20 --> Loader Class Initialized
DEBUG - 2015-03-22 04:53:20 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:53:20 --> Language Class Initialized
DEBUG - 2015-03-22 04:53:20 --> Config Class Initialized
DEBUG - 2015-03-22 04:53:20 --> Language Class Initialized
DEBUG - 2015-03-22 04:53:20 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:53:20 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:53:20 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:53:20 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:53:20 --> Loader Class Initialized
DEBUG - 2015-03-22 04:53:20 --> Loader Class Initialized
DEBUG - 2015-03-22 04:53:20 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:53:20 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:53:20 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:53:20 --> Language Class Initialized
DEBUG - 2015-03-22 04:53:20 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:53:20 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:53:21 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:53:21 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:53:21 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:53:21 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:53:21 --> Loader Class Initialized
DEBUG - 2015-03-22 04:53:21 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:53:21 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:53:21 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:53:21 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:53:21 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:53:21 --> Config Class Initialized
DEBUG - 2015-03-22 04:53:21 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:53:21 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:53:21 --> Controller Class Initialized
DEBUG - 2015-03-22 04:53:21 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:53:21 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:53:21 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:53:21 --> URI Class Initialized
DEBUG - 2015-03-22 04:53:21 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:53:21 --> Controller Class Initialized
DEBUG - 2015-03-22 04:53:21 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:53:21 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:53:21 --> File loaded: application/views//common/listModel.php
DEBUG - 2015-03-22 04:53:21 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:53:21 --> Controller Class Initialized
DEBUG - 2015-03-22 04:53:21 --> Config Class Initialized
DEBUG - 2015-03-22 04:53:21 --> Router Class Initialized
DEBUG - 2015-03-22 04:53:21 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:53:21 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:53:21 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:53:21 --> Final output sent to browser
DEBUG - 2015-03-22 04:53:22 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:53:22 --> File loaded: application/views//common/user/listCntry.php
DEBUG - 2015-03-22 04:53:22 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:53:22 --> Final output sent to browser
DEBUG - 2015-03-22 04:53:22 --> Output Class Initialized
DEBUG - 2015-03-22 04:53:22 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:53:22 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:53:22 --> Controller Class Initialized
DEBUG - 2015-03-22 04:53:22 --> Total execution time: 3.3972
DEBUG - 2015-03-22 04:53:22 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:53:22 --> URI Class Initialized
DEBUG - 2015-03-22 04:53:22 --> Total execution time: 3.7982
DEBUG - 2015-03-22 04:53:22 --> Config Class Initialized
DEBUG - 2015-03-22 04:53:22 --> Security Class Initialized
DEBUG - 2015-03-22 04:53:22 --> Controller Class Initialized
DEBUG - 2015-03-22 04:53:22 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:53:22 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 04:53:22 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:53:22 --> File loaded: application/views//common/user/listUserPiNo.php
DEBUG - 2015-03-22 04:53:22 --> Router Class Initialized
DEBUG - 2015-03-22 04:53:22 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:53:22 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 04:53:22 --> Controller Class Initialized
DEBUG - 2015-03-22 04:53:22 --> Input Class Initialized
DEBUG - 2015-03-22 04:53:22 --> Final output sent to browser
DEBUG - 2015-03-22 04:53:22 --> Config Class Initialized
DEBUG - 2015-03-22 04:53:22 --> Config Class Initialized
DEBUG - 2015-03-22 04:53:22 --> Config Class Initialized
DEBUG - 2015-03-22 04:53:22 --> Config Class Initialized
DEBUG - 2015-03-22 04:53:22 --> URI Class Initialized
DEBUG - 2015-03-22 04:53:22 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:53:22 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:53:22 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:53:22 --> Final output sent to browser
DEBUG - 2015-03-22 04:53:22 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:53:22 --> Total execution time: 4.3422
DEBUG - 2015-03-22 04:53:22 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:53:22 --> Output Class Initialized
DEBUG - 2015-03-22 04:53:22 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:53:22 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:53:22 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:53:22 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:53:22 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:53:22 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:53:22 --> URI Class Initialized
DEBUG - 2015-03-22 04:53:22 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:53:22 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 04:53:22 --> Security Class Initialized
DEBUG - 2015-03-22 04:53:22 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:53:22 --> URI Class Initialized
DEBUG - 2015-03-22 04:53:22 --> Final output sent to browser
DEBUG - 2015-03-22 04:53:22 --> URI Class Initialized
DEBUG - 2015-03-22 04:53:22 --> Router Class Initialized
DEBUG - 2015-03-22 04:53:22 --> Router Class Initialized
DEBUG - 2015-03-22 04:53:22 --> URI Class Initialized
DEBUG - 2015-03-22 04:53:22 --> Input Class Initialized
DEBUG - 2015-03-22 04:53:22 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:53:22 --> Total execution time: 3.6032
DEBUG - 2015-03-22 04:53:22 --> Router Class Initialized
DEBUG - 2015-03-22 04:53:22 --> Router Class Initialized
DEBUG - 2015-03-22 04:53:22 --> Output Class Initialized
DEBUG - 2015-03-22 04:53:22 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:53:22 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:53:22 --> Security Class Initialized
DEBUG - 2015-03-22 04:53:22 --> Output Class Initialized
DEBUG - 2015-03-22 04:53:22 --> Output Class Initialized
DEBUG - 2015-03-22 04:53:22 --> Output Class Initialized
DEBUG - 2015-03-22 04:53:22 --> URI Class Initialized
DEBUG - 2015-03-22 04:53:22 --> Language Class Initialized
DEBUG - 2015-03-22 04:53:22 --> Input Class Initialized
DEBUG - 2015-03-22 04:53:22 --> Security Class Initialized
DEBUG - 2015-03-22 04:53:22 --> Router Class Initialized
DEBUG - 2015-03-22 04:53:22 --> Security Class Initialized
DEBUG - 2015-03-22 04:53:22 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:53:22 --> Security Class Initialized
DEBUG - 2015-03-22 04:53:22 --> Language Class Initialized
DEBUG - 2015-03-22 04:53:22 --> Input Class Initialized
DEBUG - 2015-03-22 04:53:22 --> Output Class Initialized
DEBUG - 2015-03-22 04:53:22 --> Input Class Initialized
DEBUG - 2015-03-22 04:53:22 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:53:22 --> Loader Class Initialized
DEBUG - 2015-03-22 04:53:22 --> Input Class Initialized
DEBUG - 2015-03-22 04:53:22 --> Loader Class Initialized
DEBUG - 2015-03-22 04:53:22 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:53:22 --> Language Class Initialized
DEBUG - 2015-03-22 04:53:22 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:53:22 --> Security Class Initialized
DEBUG - 2015-03-22 04:53:22 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:53:23 --> Language Class Initialized
DEBUG - 2015-03-22 04:53:23 --> Loader Class Initialized
DEBUG - 2015-03-22 04:53:23 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:53:23 --> Router Class Initialized
DEBUG - 2015-03-22 04:53:23 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:53:23 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:53:23 --> Final output sent to browser
DEBUG - 2015-03-22 04:53:23 --> Total execution time: 4.4963
DEBUG - 2015-03-22 04:53:23 --> Language Class Initialized
DEBUG - 2015-03-22 04:53:23 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:53:23 --> Input Class Initialized
DEBUG - 2015-03-22 04:53:23 --> Language Class Initialized
DEBUG - 2015-03-22 04:53:23 --> Output Class Initialized
DEBUG - 2015-03-22 04:53:23 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:53:23 --> Loader Class Initialized
DEBUG - 2015-03-22 04:53:23 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:53:23 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:53:23 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:53:23 --> Total execution time: 4.7203
DEBUG - 2015-03-22 04:53:23 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:53:23 --> Loader Class Initialized
DEBUG - 2015-03-22 04:53:23 --> Loader Class Initialized
DEBUG - 2015-03-22 04:53:23 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:53:23 --> Security Class Initialized
DEBUG - 2015-03-22 04:53:23 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:53:23 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:53:23 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:53:23 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:53:23 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:53:23 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:53:23 --> Input Class Initialized
DEBUG - 2015-03-22 04:53:23 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:53:23 --> Controller Class Initialized
DEBUG - 2015-03-22 04:53:23 --> Language Class Initialized
DEBUG - 2015-03-22 04:53:23 --> Controller Class Initialized
DEBUG - 2015-03-22 04:53:23 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:53:23 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:53:23 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 04:53:23 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:53:23 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:53:23 --> Loader Class Initialized
DEBUG - 2015-03-22 04:53:23 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:53:23 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:53:23 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 04:53:23 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:53:23 --> Controller Class Initialized
DEBUG - 2015-03-22 04:53:23 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:53:23 --> Language Class Initialized
DEBUG - 2015-03-22 04:53:23 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:53:24 --> Final output sent to browser
DEBUG - 2015-03-22 04:53:24 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:53:24 --> Final output sent to browser
DEBUG - 2015-03-22 04:53:24 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:53:24 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:53:24 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:53:24 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 04:53:24 --> Total execution time: 1.1721
DEBUG - 2015-03-22 04:53:24 --> Loader Class Initialized
DEBUG - 2015-03-22 04:53:24 --> Final output sent to browser
DEBUG - 2015-03-22 04:53:24 --> Total execution time: 1.1621
DEBUG - 2015-03-22 04:53:24 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:53:24 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:53:24 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:53:24 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:53:24 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:53:24 --> Total execution time: 2.9022
DEBUG - 2015-03-22 04:53:24 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:53:24 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:53:24 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:53:24 --> Controller Class Initialized
DEBUG - 2015-03-22 04:53:24 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:53:24 --> Controller Class Initialized
DEBUG - 2015-03-22 04:53:24 --> Controller Class Initialized
DEBUG - 2015-03-22 04:53:24 --> Controller Class Initialized
DEBUG - 2015-03-22 04:53:24 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 04:53:24 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 04:53:24 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:53:24 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 04:53:24 --> Final output sent to browser
DEBUG - 2015-03-22 04:53:24 --> Final output sent to browser
DEBUG - 2015-03-22 04:53:25 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:53:25 --> File loaded: application/views//common/listCodeImg.php
DEBUG - 2015-03-22 04:53:25 --> Final output sent to browser
DEBUG - 2015-03-22 04:53:25 --> Total execution time: 2.0601
DEBUG - 2015-03-22 04:53:25 --> Total execution time: 4.3062
DEBUG - 2015-03-22 04:53:25 --> Controller Class Initialized
DEBUG - 2015-03-22 04:53:25 --> Final output sent to browser
DEBUG - 2015-03-22 04:53:25 --> Total execution time: 2.6512
DEBUG - 2015-03-22 04:53:25 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 04:53:25 --> Total execution time: 2.2561
DEBUG - 2015-03-22 04:53:25 --> Final output sent to browser
DEBUG - 2015-03-22 04:53:25 --> Total execution time: 3.4692
DEBUG - 2015-03-22 04:53:41 --> Config Class Initialized
DEBUG - 2015-03-22 04:53:41 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:53:42 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:53:42 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:53:42 --> URI Class Initialized
DEBUG - 2015-03-22 04:53:42 --> Router Class Initialized
DEBUG - 2015-03-22 04:53:42 --> Output Class Initialized
DEBUG - 2015-03-22 04:53:42 --> Security Class Initialized
DEBUG - 2015-03-22 04:53:42 --> Input Class Initialized
DEBUG - 2015-03-22 04:53:42 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:53:42 --> Language Class Initialized
DEBUG - 2015-03-22 04:53:42 --> Loader Class Initialized
DEBUG - 2015-03-22 04:53:42 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:53:42 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:53:42 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:53:43 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:53:43 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:53:43 --> Controller Class Initialized
DEBUG - 2015-03-22 04:53:43 --> File loaded: application/views//admin/order/crtEqpOrder.php
DEBUG - 2015-03-22 04:53:43 --> Final output sent to browser
DEBUG - 2015-03-22 04:53:43 --> Total execution time: 1.3731
DEBUG - 2015-03-22 04:53:43 --> Config Class Initialized
DEBUG - 2015-03-22 04:53:43 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:53:43 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:53:43 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:53:43 --> URI Class Initialized
DEBUG - 2015-03-22 04:53:44 --> Router Class Initialized
DEBUG - 2015-03-22 04:53:44 --> Output Class Initialized
DEBUG - 2015-03-22 04:53:44 --> Security Class Initialized
DEBUG - 2015-03-22 04:53:44 --> Input Class Initialized
DEBUG - 2015-03-22 04:53:44 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:53:44 --> Language Class Initialized
DEBUG - 2015-03-22 04:53:44 --> Loader Class Initialized
DEBUG - 2015-03-22 04:53:44 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:53:44 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:53:44 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:53:44 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:53:44 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:53:44 --> Controller Class Initialized
DEBUG - 2015-03-22 04:53:44 --> readEqpOrder:SELECT a.*, (select atcd_nm from cm_cd_attr where cd = '00B0' and atcd = a.srl_atcd) txt_srl_atcd, (select atcd_nm from cm_cd_attr where cd = '00D0' and atcd = a.rjt_pkt_tp_atcd) txt_rjt_pkt_tp_atcd, (select atcd_nm from cm_cd_attr where cd = '00E0' and atcd = a.pwr_cab_atcd) txt_pwr_cab_atcd, (select atcd_nm from cm_cd_attr where cd = '00F0' and atcd = a.shipped_by_atcd) txt_shipped_by_atcd, (select atcd_nm from cm_cd_attr where cd = '00F1' and atcd = a.courier_atcd) txt_courier_atcd, (select atcd_nm from cm_cd_attr where cd = '00G0' and atcd = a.payment_atcd) txt_payment_atcd, (select atcd_nm from cm_cd_attr where cd = '00H0' and atcd = a.incoterms_atcd) txt_incoterms_atcd, (select atcd_nm from cm_cd_attr where cd = '00L0' and atcd = a.lcd_color_atcd) txt_lcd_color_atcd, (select atcd_nm from cm_cd_attr where cd = '00M0' and atcd = a.lcd_lang_atcd) txt_lcd_lang_atcd, (select cmpy_nm from om_dealer where dealer_seq = a.dealer_seq) cmpy_nm, (select atcd_nm from cm_cd_attr where cd = '0022' and atcd = a.cntry_atcd) txt_cntry_atcd, if(mdl_cd in ('0007','0009'), concat(mdl_nm, concat('R',lan_L),if(a.lcd_color_atcd='00L00002','C','')), if(mdl_cd in ('3000'), concat(mdl_nm, concat('F',rjt_pkt_tp),''),mdl_nm)) txt_mdl_nm, DATE_FORMAT(a.delivery_dt, '%Y-%m-%d') txt_delivery_dt FROM ( SELECT a.*, b.cntry_atcd, b.dealer_seq, b.worker_seq, b.premium_rate, b.tot_amt, b.cnfm_yn, b.cnfm_dt, b.wrk_tp_atcd, b.udt_dt as order_dt, (CASE WHEN a.rjt_pkt_tp_atcd = ('00D00001') THEN 'A'  WHEN a.rjt_pkt_tp_atcd = ('00D00002') THEN 'I' END) rjt_pkt_tp, (SELECT mdl_nm FROM om_mdl WHERE mdl_cd = a.mdl_cd) mdl_nm, (SELECT if(count(*)>0,'L','') FROM om_ord_eqp_dtl where pi_no = a.pi_no and po_no = a.po_no and om_ord_eqp_dtl.atcd = '00A00001') lan_L FROM om_ord_eqp a, om_ord_inf b WHERE a.pi_no = b.pi_no AND a.pi_no = '150014bg' AND a.po_no = 39 ) a
DEBUG - 2015-03-22 04:53:44 --> SELECT b.cntry_atcd, b.dealer_seq, b.worker_seq, b.premium_rate, b.tot_amt, b.cnfm_yn, b.cnfm_dt, b.wrk_tp_atcd, a.*, (select atcd_nm from cm_cd_attr where cd = '0091' and atcd = a.currency_atch) txt_currency_atcd, (select atcd_nm from cm_cd_attr where cd = '0092' and atcd = a.serial_currency_atch) txt_serial_currency_atch, (select atcd_nm from cm_cd_attr where cd = '00A0' and atcd = a.opt_hw_atcd) txt_opt_hw_atcd, (select atcd_nm from cm_cd_attr where cd = '00C0' and atcd = a.pc_cab_atcd) txt_pc_cab_atcd FROM ( SELECT b.*,(case when b.cd='0091' then b.atcd else '' end) currency_atch,(CASE WHEN b.cd='0091' AND b.atcd_ox='O' THEN b.atcd ELSE '' END) fitness,(CASE WHEN b.cd='0091' THEN b.atcd_ox ELSE '' END) fitness_ox,(case when b.cd='0092' then b.atcd else '' end) serial_currency_atch,(CASE WHEN b.cd='0092' AND b.atcd_ox='O' THEN b.atcd ELSE '' END) srl_fitness,(CASE WHEN b.cd='0092' THEN b.atcd_ox ELSE '' END) srl_fitness_ox,(case when b.cd='00A0' then b.atcd else '' end) opt_hw_atcd,(case when b.cd='00C0' then b.atcd else '' end) pc_cab_atcd FROM om_ord_eqp a, om_ord_eqp_dtl b WHERE a.pi_no = b.pi_no AND a.po_no = b.po_no AND a.pi_no = '150014bg'		AND a.po_no = 39) a, om_ord_inf b WHERE a.pi_no = b.pi_no order by cd, atcd
DEBUG - 2015-03-22 04:53:45 --> INSERT INTO om_sndmail(pi_no, wrk_tp_atcd, sndmail_atcd, auth_grp_cd, sender_email, sender_eng_nm, title, ctnt, crt_dt, crt_uid) VALUES ('150014bg','00700110', '00700111', 'UD', 'kpbaek@localhost', (SELECT dealer_nm FROM om_dealer   WHERE dealer_uid='sofia@ubs-bg.com'), (select concat(atcd_nm,' - ',(select cmpy_nm from om_dealer where dealer_uid='sofia@ubs-bg.com')) from cm_cd_attr where cd = '0071' and atcd = '00700111'), '', now(), 'sofia@ubs-bg.com')
DEBUG - 2015-03-22 04:53:45 --> sql3:INSERT INTO om_sndmail_dtl (sndmail_seq, email_from, email_to, rcpnt_tp_atcd, snd_yn, crt_dt, crt_uid) SELECT 220, 'safe@safeleader.esy.es', (select usr_email from om_user where uid = a.dealer_uid), '00100010' rcpnt_tp_atcd, 'N', now(), 'sofia@ubs-bg.com' FROM om_dealer a, om_ord_inf b WHERE a.dealer_seq = b.dealer_seq AND b.pi_no = '150014bg' UNION SELECT 220, 'kpbaek@localhost', (select team_email from om_team where team_atcd = '00600SL0') email_to, '00100040' rcpnt_tp_atcd, 'N', now(), 'sofia@ubs-bg.com'
DEBUG - 2015-03-22 04:53:45 --> File loaded: application/views//common/crtSndMail.php
DEBUG - 2015-03-22 04:53:45 --> Final output sent to browser
DEBUG - 2015-03-22 04:53:45 --> Total execution time: 1.8401
DEBUG - 2015-03-22 04:53:45 --> Config Class Initialized
DEBUG - 2015-03-22 04:53:45 --> Hooks Class Initialized
DEBUG - 2015-03-22 04:53:45 --> Utf8 Class Initialized
DEBUG - 2015-03-22 04:53:45 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 04:53:45 --> URI Class Initialized
DEBUG - 2015-03-22 04:53:45 --> Router Class Initialized
DEBUG - 2015-03-22 04:53:45 --> Output Class Initialized
DEBUG - 2015-03-22 04:53:45 --> Security Class Initialized
DEBUG - 2015-03-22 04:53:45 --> Input Class Initialized
DEBUG - 2015-03-22 04:53:46 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 04:53:46 --> Language Class Initialized
DEBUG - 2015-03-22 04:53:46 --> Loader Class Initialized
DEBUG - 2015-03-22 04:53:46 --> Helper loaded: form_helper
DEBUG - 2015-03-22 04:53:46 --> Helper loaded: language_helper
DEBUG - 2015-03-22 04:53:46 --> Helper loaded: string_helper
DEBUG - 2015-03-22 04:53:46 --> Helper loaded: url_helper
DEBUG - 2015-03-22 04:53:46 --> Database Driver Class Initialized
DEBUG - 2015-03-22 04:53:46 --> Controller Class Initialized
DEBUG - 2015-03-22 04:53:46 --> sql3:SELECT a.pi_no, a.sndmail_seq, a.wrk_tp_atcd, a.sender_email, a.title, a.ctnt, email_from, email_to, snd_yn, b.snd_no, b.rcpnt_tp_atcd, b.rcpnt_team_atcd,(select usr_nm from om_user where uid = a.sender_email) sender_nm,(select usr_nm from om_user where uid = b.email_to) rcpnt_nm FROM om_sndmail a, om_sndmail_dtl b WHERE a.sndmail_seq = b.sndmail_seq and a.sndmail_seq=220 and snd_yn='N'
DEBUG - 2015-03-22 04:53:46 --> File loaded: application/views//common/sndMailResult.php
DEBUG - 2015-03-22 04:53:46 --> Final output sent to browser
DEBUG - 2015-03-22 04:53:46 --> Total execution time: 1.4911
DEBUG - 2015-03-22 05:43:58 --> Config Class Initialized
DEBUG - 2015-03-22 05:43:58 --> Hooks Class Initialized
DEBUG - 2015-03-22 05:43:58 --> Utf8 Class Initialized
DEBUG - 2015-03-22 05:43:58 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 05:43:58 --> URI Class Initialized
DEBUG - 2015-03-22 05:43:59 --> Router Class Initialized
DEBUG - 2015-03-22 05:43:59 --> Output Class Initialized
DEBUG - 2015-03-22 05:43:59 --> Security Class Initialized
DEBUG - 2015-03-22 05:43:59 --> Input Class Initialized
DEBUG - 2015-03-22 05:43:59 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 05:43:59 --> Language Class Initialized
DEBUG - 2015-03-22 05:43:59 --> Loader Class Initialized
DEBUG - 2015-03-22 05:43:59 --> Helper loaded: form_helper
DEBUG - 2015-03-22 05:43:59 --> Helper loaded: language_helper
DEBUG - 2015-03-22 05:43:59 --> Helper loaded: string_helper
DEBUG - 2015-03-22 05:43:59 --> Helper loaded: url_helper
DEBUG - 2015-03-22 05:43:59 --> Database Driver Class Initialized
DEBUG - 2015-03-22 05:43:59 --> Controller Class Initialized
DEBUG - 2015-03-22 05:44:00 --> File loaded: application/views//admin/main.php
DEBUG - 2015-03-22 05:44:00 --> Final output sent to browser
DEBUG - 2015-03-22 05:44:00 --> Total execution time: 1.4391
DEBUG - 2015-03-22 05:44:15 --> Config Class Initialized
DEBUG - 2015-03-22 05:44:15 --> Hooks Class Initialized
DEBUG - 2015-03-22 05:44:15 --> Utf8 Class Initialized
DEBUG - 2015-03-22 05:44:15 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 05:44:15 --> URI Class Initialized
DEBUG - 2015-03-22 05:44:16 --> Router Class Initialized
DEBUG - 2015-03-22 05:44:16 --> Output Class Initialized
DEBUG - 2015-03-22 05:44:16 --> Security Class Initialized
DEBUG - 2015-03-22 05:44:16 --> Input Class Initialized
DEBUG - 2015-03-22 05:44:16 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 05:44:16 --> Language Class Initialized
DEBUG - 2015-03-22 05:44:16 --> Loader Class Initialized
DEBUG - 2015-03-22 05:44:16 --> Helper loaded: form_helper
DEBUG - 2015-03-22 05:44:16 --> Helper loaded: language_helper
DEBUG - 2015-03-22 05:44:16 --> Helper loaded: string_helper
DEBUG - 2015-03-22 05:44:16 --> Helper loaded: url_helper
DEBUG - 2015-03-22 05:44:16 --> Database Driver Class Initialized
DEBUG - 2015-03-22 05:44:16 --> Controller Class Initialized
DEBUG - 2015-03-22 05:44:16 --> File loaded: application/views//common/user/logout.php
DEBUG - 2015-03-22 05:44:16 --> Final output sent to browser
DEBUG - 2015-03-22 05:44:17 --> Total execution time: 1.3551
DEBUG - 2015-03-22 05:44:17 --> Config Class Initialized
DEBUG - 2015-03-22 05:44:17 --> Hooks Class Initialized
DEBUG - 2015-03-22 05:44:17 --> Utf8 Class Initialized
DEBUG - 2015-03-22 05:44:17 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 05:44:17 --> URI Class Initialized
DEBUG - 2015-03-22 05:44:17 --> Router Class Initialized
DEBUG - 2015-03-22 05:44:17 --> No URI present. Default controller set.
DEBUG - 2015-03-22 05:44:17 --> Output Class Initialized
DEBUG - 2015-03-22 05:44:17 --> Security Class Initialized
DEBUG - 2015-03-22 05:44:17 --> Input Class Initialized
DEBUG - 2015-03-22 05:44:17 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 05:44:18 --> Language Class Initialized
DEBUG - 2015-03-22 05:44:18 --> Loader Class Initialized
DEBUG - 2015-03-22 05:44:18 --> Helper loaded: form_helper
DEBUG - 2015-03-22 05:44:18 --> Helper loaded: language_helper
DEBUG - 2015-03-22 05:44:18 --> Helper loaded: string_helper
DEBUG - 2015-03-22 05:44:18 --> Helper loaded: url_helper
DEBUG - 2015-03-22 05:44:18 --> Database Driver Class Initialized
DEBUG - 2015-03-22 05:44:18 --> Controller Class Initialized
DEBUG - 2015-03-22 05:44:18 --> File loaded: application/views//admin/main.php
DEBUG - 2015-03-22 05:44:18 --> Final output sent to browser
DEBUG - 2015-03-22 05:44:18 --> Total execution time: 1.4311
DEBUG - 2015-03-22 05:44:27 --> Config Class Initialized
DEBUG - 2015-03-22 05:44:27 --> Hooks Class Initialized
DEBUG - 2015-03-22 05:44:27 --> Utf8 Class Initialized
DEBUG - 2015-03-22 05:44:28 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 05:44:28 --> URI Class Initialized
DEBUG - 2015-03-22 05:44:28 --> Router Class Initialized
DEBUG - 2015-03-22 05:44:28 --> Output Class Initialized
DEBUG - 2015-03-22 05:44:28 --> Security Class Initialized
DEBUG - 2015-03-22 05:44:28 --> Input Class Initialized
DEBUG - 2015-03-22 05:44:28 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 05:44:28 --> Language Class Initialized
DEBUG - 2015-03-22 05:44:28 --> Loader Class Initialized
DEBUG - 2015-03-22 05:44:28 --> Helper loaded: form_helper
DEBUG - 2015-03-22 05:44:28 --> Helper loaded: language_helper
DEBUG - 2015-03-22 05:44:28 --> Helper loaded: string_helper
DEBUG - 2015-03-22 05:44:28 --> Helper loaded: url_helper
DEBUG - 2015-03-22 05:44:28 --> Database Driver Class Initialized
DEBUG - 2015-03-22 05:44:29 --> Controller Class Initialized
DEBUG - 2015-03-22 05:44:29 --> SELECT uid, auth_grp_cd, perms_cd, usr_nm, usr_email, gender_atcd, nation_atcd, active_yn,(case when auth_grp_cd in ('SA','WD','WA','US') then (select team_atcd from om_worker where worker_uid = a.uid) end) team_atcd,(select auth_grp_dscrt from cm_auth_grp where auth_grp_cd=a.auth_grp_cd) auth_grp_dscrt FROM om_user a WHERE 1=1 AND uid='kpbaek@sbmkorea.com' AND pswd='sbm123'
DEBUG - 2015-03-22 05:44:29 --> File loaded: application/views//common/user/ajaxLogin.php
DEBUG - 2015-03-22 05:44:29 --> Final output sent to browser
DEBUG - 2015-03-22 05:44:29 --> Total execution time: 1.4871
DEBUG - 2015-03-22 05:44:29 --> Config Class Initialized
DEBUG - 2015-03-22 05:44:29 --> Hooks Class Initialized
DEBUG - 2015-03-22 05:44:29 --> Utf8 Class Initialized
DEBUG - 2015-03-22 05:44:29 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 05:44:29 --> URI Class Initialized
DEBUG - 2015-03-22 05:44:29 --> Router Class Initialized
DEBUG - 2015-03-22 05:44:29 --> Output Class Initialized
DEBUG - 2015-03-22 05:44:29 --> Security Class Initialized
DEBUG - 2015-03-22 05:44:30 --> Input Class Initialized
DEBUG - 2015-03-22 05:44:30 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 05:44:30 --> Language Class Initialized
DEBUG - 2015-03-22 05:44:30 --> Loader Class Initialized
DEBUG - 2015-03-22 05:44:30 --> Helper loaded: form_helper
DEBUG - 2015-03-22 05:44:30 --> Helper loaded: language_helper
DEBUG - 2015-03-22 05:44:30 --> Helper loaded: string_helper
DEBUG - 2015-03-22 05:44:30 --> Helper loaded: url_helper
DEBUG - 2015-03-22 05:44:30 --> Database Driver Class Initialized
DEBUG - 2015-03-22 05:44:30 --> Controller Class Initialized
DEBUG - 2015-03-22 05:44:30 --> File loaded: application/views//admin/main.php
DEBUG - 2015-03-22 05:44:30 --> Final output sent to browser
DEBUG - 2015-03-22 05:44:30 --> Total execution time: 1.3561
DEBUG - 2015-03-22 05:44:31 --> Config Class Initialized
DEBUG - 2015-03-22 05:44:31 --> Hooks Class Initialized
DEBUG - 2015-03-22 05:44:31 --> Utf8 Class Initialized
DEBUG - 2015-03-22 05:44:31 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 05:44:31 --> URI Class Initialized
DEBUG - 2015-03-22 05:44:31 --> Router Class Initialized
DEBUG - 2015-03-22 05:44:31 --> Output Class Initialized
DEBUG - 2015-03-22 05:44:31 --> Security Class Initialized
DEBUG - 2015-03-22 05:44:31 --> Input Class Initialized
DEBUG - 2015-03-22 05:44:31 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 05:44:31 --> Language Class Initialized
DEBUG - 2015-03-22 05:44:31 --> Loader Class Initialized
DEBUG - 2015-03-22 05:44:31 --> Helper loaded: form_helper
DEBUG - 2015-03-22 05:44:32 --> Helper loaded: language_helper
DEBUG - 2015-03-22 05:44:32 --> Helper loaded: string_helper
DEBUG - 2015-03-22 05:44:32 --> Helper loaded: url_helper
DEBUG - 2015-03-22 05:44:32 --> Database Driver Class Initialized
DEBUG - 2015-03-22 05:44:32 --> Controller Class Initialized
DEBUG - 2015-03-22 05:44:32 --> SELECT dealer_uid, concat(cmpy_nm, ' / ', dealer_nm) txt_dealer FROM om_dealer a WHERE aprv_yn = 'Y'  AND worker_seq is not null ORDER BY txt_dealer
DEBUG - 2015-03-22 05:44:32 --> File loaded: application/views//common/user/listDealerByWorker.php
DEBUG - 2015-03-22 05:44:32 --> Final output sent to browser
DEBUG - 2015-03-22 05:44:32 --> Total execution time: 1.3781
DEBUG - 2015-03-22 05:44:41 --> Config Class Initialized
DEBUG - 2015-03-22 05:44:41 --> Hooks Class Initialized
DEBUG - 2015-03-22 05:44:41 --> Utf8 Class Initialized
DEBUG - 2015-03-22 05:44:41 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 05:44:41 --> URI Class Initialized
DEBUG - 2015-03-22 05:44:41 --> Router Class Initialized
DEBUG - 2015-03-22 05:44:41 --> Output Class Initialized
DEBUG - 2015-03-22 05:44:41 --> Security Class Initialized
DEBUG - 2015-03-22 05:44:42 --> Input Class Initialized
DEBUG - 2015-03-22 05:44:42 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 05:44:42 --> Language Class Initialized
DEBUG - 2015-03-22 05:44:42 --> Loader Class Initialized
DEBUG - 2015-03-22 05:44:42 --> Helper loaded: form_helper
DEBUG - 2015-03-22 05:44:42 --> Helper loaded: language_helper
DEBUG - 2015-03-22 05:44:42 --> Helper loaded: string_helper
DEBUG - 2015-03-22 05:44:42 --> Helper loaded: url_helper
DEBUG - 2015-03-22 05:44:42 --> Database Driver Class Initialized
DEBUG - 2015-03-22 05:44:42 --> Controller Class Initialized
DEBUG - 2015-03-22 05:44:42 --> SELECT uid, auth_grp_cd, perms_cd, usr_nm, usr_email, gender_atcd, nation_atcd, active_yn,(case when auth_grp_cd in ('SA','WD','WA','US') then (select team_atcd from om_worker where worker_uid = a.uid) end) team_atcd,(select auth_grp_dscrt from cm_auth_grp where auth_grp_cd=a.auth_grp_cd) auth_grp_dscrt FROM om_user a WHERE 1=1 AND auth_grp_cd='UD' AND uid='sofia@ubs-bg.com'
DEBUG - 2015-03-22 05:44:42 --> File loaded: application/views//common/user/ajaxLogin.php
DEBUG - 2015-03-22 05:44:42 --> Final output sent to browser
DEBUG - 2015-03-22 05:44:42 --> Total execution time: 1.3941
DEBUG - 2015-03-22 05:44:43 --> Config Class Initialized
DEBUG - 2015-03-22 05:44:43 --> Hooks Class Initialized
DEBUG - 2015-03-22 05:44:43 --> Utf8 Class Initialized
DEBUG - 2015-03-22 05:44:43 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 05:44:43 --> URI Class Initialized
DEBUG - 2015-03-22 05:44:43 --> Router Class Initialized
DEBUG - 2015-03-22 05:44:43 --> Output Class Initialized
DEBUG - 2015-03-22 05:44:43 --> Security Class Initialized
DEBUG - 2015-03-22 05:44:43 --> Input Class Initialized
DEBUG - 2015-03-22 05:44:43 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 05:44:43 --> Language Class Initialized
DEBUG - 2015-03-22 05:44:43 --> Loader Class Initialized
DEBUG - 2015-03-22 05:44:43 --> Helper loaded: form_helper
DEBUG - 2015-03-22 05:44:43 --> Helper loaded: language_helper
DEBUG - 2015-03-22 05:44:43 --> Helper loaded: string_helper
DEBUG - 2015-03-22 05:44:44 --> Helper loaded: url_helper
DEBUG - 2015-03-22 05:44:44 --> Database Driver Class Initialized
DEBUG - 2015-03-22 05:44:44 --> Controller Class Initialized
DEBUG - 2015-03-22 05:44:44 --> File loaded: application/views//admin/main.php
DEBUG - 2015-03-22 05:44:44 --> Final output sent to browser
DEBUG - 2015-03-22 05:44:44 --> Total execution time: 1.3081
DEBUG - 2015-03-22 05:44:46 --> Config Class Initialized
DEBUG - 2015-03-22 05:44:46 --> Hooks Class Initialized
DEBUG - 2015-03-22 05:44:46 --> Utf8 Class Initialized
DEBUG - 2015-03-22 05:44:46 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 05:44:46 --> URI Class Initialized
DEBUG - 2015-03-22 05:44:46 --> Router Class Initialized
DEBUG - 2015-03-22 05:44:46 --> Output Class Initialized
DEBUG - 2015-03-22 05:44:46 --> Security Class Initialized
DEBUG - 2015-03-22 05:44:46 --> Input Class Initialized
DEBUG - 2015-03-22 05:44:46 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 05:44:46 --> Language Class Initialized
DEBUG - 2015-03-22 05:44:46 --> Loader Class Initialized
DEBUG - 2015-03-22 05:44:46 --> Helper loaded: form_helper
DEBUG - 2015-03-22 05:44:47 --> Helper loaded: language_helper
DEBUG - 2015-03-22 05:44:47 --> Helper loaded: string_helper
DEBUG - 2015-03-22 05:44:47 --> Helper loaded: url_helper
DEBUG - 2015-03-22 05:44:47 --> Database Driver Class Initialized
DEBUG - 2015-03-22 05:44:47 --> Controller Class Initialized
DEBUG - 2015-03-22 05:44:47 --> File loaded: application/views//admin/order/main.php
DEBUG - 2015-03-22 05:44:47 --> Final output sent to browser
DEBUG - 2015-03-22 05:44:47 --> Total execution time: 1.4291
DEBUG - 2015-03-22 05:44:47 --> Config Class Initialized
DEBUG - 2015-03-22 05:44:47 --> Hooks Class Initialized
DEBUG - 2015-03-22 05:44:47 --> Utf8 Class Initialized
DEBUG - 2015-03-22 05:44:48 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 05:44:48 --> URI Class Initialized
DEBUG - 2015-03-22 05:44:48 --> Router Class Initialized
DEBUG - 2015-03-22 05:44:48 --> Output Class Initialized
DEBUG - 2015-03-22 05:44:48 --> Security Class Initialized
DEBUG - 2015-03-22 05:44:48 --> Input Class Initialized
DEBUG - 2015-03-22 05:44:48 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 05:44:48 --> Language Class Initialized
DEBUG - 2015-03-22 05:44:48 --> Loader Class Initialized
DEBUG - 2015-03-22 05:44:48 --> Helper loaded: form_helper
DEBUG - 2015-03-22 05:44:48 --> Helper loaded: language_helper
DEBUG - 2015-03-22 05:44:48 --> Helper loaded: string_helper
DEBUG - 2015-03-22 05:44:48 --> Helper loaded: url_helper
DEBUG - 2015-03-22 05:44:48 --> Database Driver Class Initialized
DEBUG - 2015-03-22 05:44:48 --> Controller Class Initialized
DEBUG - 2015-03-22 05:44:49 --> File loaded: application/views//admin/order/tab01.php
DEBUG - 2015-03-22 05:44:49 --> Final output sent to browser
DEBUG - 2015-03-22 05:44:49 --> Total execution time: 1.3271
DEBUG - 2015-03-22 05:44:49 --> Config Class Initialized
DEBUG - 2015-03-22 05:44:49 --> Hooks Class Initialized
DEBUG - 2015-03-22 05:44:49 --> Utf8 Class Initialized
DEBUG - 2015-03-22 05:44:49 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 05:44:49 --> URI Class Initialized
DEBUG - 2015-03-22 05:44:49 --> Router Class Initialized
DEBUG - 2015-03-22 05:44:49 --> Output Class Initialized
DEBUG - 2015-03-22 05:44:50 --> Security Class Initialized
DEBUG - 2015-03-22 05:44:50 --> Input Class Initialized
DEBUG - 2015-03-22 05:44:50 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 05:44:50 --> Language Class Initialized
DEBUG - 2015-03-22 05:44:50 --> Loader Class Initialized
DEBUG - 2015-03-22 05:44:50 --> Helper loaded: form_helper
DEBUG - 2015-03-22 05:44:50 --> Helper loaded: language_helper
DEBUG - 2015-03-22 05:44:50 --> Helper loaded: string_helper
DEBUG - 2015-03-22 05:44:50 --> Helper loaded: url_helper
DEBUG - 2015-03-22 05:44:50 --> Database Driver Class Initialized
DEBUG - 2015-03-22 05:44:50 --> Controller Class Initialized
DEBUG - 2015-03-22 05:44:50 --> File loaded: application/views//common/user/viewDealer.php
DEBUG - 2015-03-22 05:44:50 --> Final output sent to browser
DEBUG - 2015-03-22 05:44:50 --> Total execution time: 1.3551
DEBUG - 2015-03-22 05:44:51 --> Config Class Initialized
DEBUG - 2015-03-22 05:44:51 --> Config Class Initialized
DEBUG - 2015-03-22 05:44:51 --> Config Class Initialized
DEBUG - 2015-03-22 05:44:51 --> Hooks Class Initialized
DEBUG - 2015-03-22 05:44:51 --> Hooks Class Initialized
DEBUG - 2015-03-22 05:44:51 --> Config Class Initialized
DEBUG - 2015-03-22 05:44:51 --> Hooks Class Initialized
DEBUG - 2015-03-22 05:44:51 --> Utf8 Class Initialized
DEBUG - 2015-03-22 05:44:51 --> Utf8 Class Initialized
DEBUG - 2015-03-22 05:44:51 --> Hooks Class Initialized
DEBUG - 2015-03-22 05:44:51 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 05:44:51 --> Config Class Initialized
DEBUG - 2015-03-22 05:44:51 --> Utf8 Class Initialized
DEBUG - 2015-03-22 05:44:51 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 05:44:51 --> Config Class Initialized
DEBUG - 2015-03-22 05:44:51 --> Utf8 Class Initialized
DEBUG - 2015-03-22 05:44:51 --> URI Class Initialized
DEBUG - 2015-03-22 05:44:51 --> URI Class Initialized
DEBUG - 2015-03-22 05:44:51 --> Hooks Class Initialized
DEBUG - 2015-03-22 05:44:51 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 05:44:51 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 05:44:51 --> Hooks Class Initialized
DEBUG - 2015-03-22 05:44:51 --> Router Class Initialized
DEBUG - 2015-03-22 05:44:51 --> Router Class Initialized
DEBUG - 2015-03-22 05:44:51 --> Utf8 Class Initialized
DEBUG - 2015-03-22 05:44:51 --> URI Class Initialized
DEBUG - 2015-03-22 05:44:51 --> URI Class Initialized
DEBUG - 2015-03-22 05:44:51 --> Utf8 Class Initialized
DEBUG - 2015-03-22 05:44:51 --> Output Class Initialized
DEBUG - 2015-03-22 05:44:51 --> Output Class Initialized
DEBUG - 2015-03-22 05:44:52 --> Router Class Initialized
DEBUG - 2015-03-22 05:44:52 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 05:44:52 --> Router Class Initialized
DEBUG - 2015-03-22 05:44:52 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 05:44:52 --> Security Class Initialized
DEBUG - 2015-03-22 05:44:52 --> Security Class Initialized
DEBUG - 2015-03-22 05:44:52 --> Output Class Initialized
DEBUG - 2015-03-22 05:44:52 --> URI Class Initialized
DEBUG - 2015-03-22 05:44:52 --> Output Class Initialized
DEBUG - 2015-03-22 05:44:52 --> URI Class Initialized
DEBUG - 2015-03-22 05:44:52 --> Input Class Initialized
DEBUG - 2015-03-22 05:44:52 --> Input Class Initialized
DEBUG - 2015-03-22 05:44:52 --> Security Class Initialized
DEBUG - 2015-03-22 05:44:52 --> Router Class Initialized
DEBUG - 2015-03-22 05:44:52 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 05:44:52 --> Security Class Initialized
DEBUG - 2015-03-22 05:44:52 --> Router Class Initialized
DEBUG - 2015-03-22 05:44:52 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 05:44:52 --> Output Class Initialized
DEBUG - 2015-03-22 05:44:52 --> Language Class Initialized
DEBUG - 2015-03-22 05:44:52 --> Input Class Initialized
DEBUG - 2015-03-22 05:44:53 --> Output Class Initialized
DEBUG - 2015-03-22 05:44:53 --> Input Class Initialized
DEBUG - 2015-03-22 05:44:53 --> Security Class Initialized
DEBUG - 2015-03-22 05:44:53 --> Language Class Initialized
DEBUG - 2015-03-22 05:44:53 --> Loader Class Initialized
DEBUG - 2015-03-22 05:44:53 --> Input Class Initialized
DEBUG - 2015-03-22 05:44:53 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 05:44:53 --> Security Class Initialized
DEBUG - 2015-03-22 05:44:53 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 05:44:53 --> Loader Class Initialized
DEBUG - 2015-03-22 05:44:53 --> Helper loaded: form_helper
DEBUG - 2015-03-22 05:44:53 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 05:44:53 --> Language Class Initialized
DEBUG - 2015-03-22 05:44:53 --> Language Class Initialized
DEBUG - 2015-03-22 05:44:53 --> Input Class Initialized
DEBUG - 2015-03-22 05:44:53 --> Helper loaded: form_helper
DEBUG - 2015-03-22 05:44:53 --> Helper loaded: language_helper
DEBUG - 2015-03-22 05:44:53 --> Language Class Initialized
DEBUG - 2015-03-22 05:44:53 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 05:44:53 --> Helper loaded: string_helper
DEBUG - 2015-03-22 05:44:53 --> Helper loaded: language_helper
DEBUG - 2015-03-22 05:44:53 --> Loader Class Initialized
DEBUG - 2015-03-22 05:44:53 --> Loader Class Initialized
DEBUG - 2015-03-22 05:44:53 --> Loader Class Initialized
DEBUG - 2015-03-22 05:44:53 --> Language Class Initialized
DEBUG - 2015-03-22 05:44:54 --> Helper loaded: url_helper
DEBUG - 2015-03-22 05:44:54 --> Helper loaded: string_helper
DEBUG - 2015-03-22 05:44:54 --> Helper loaded: form_helper
DEBUG - 2015-03-22 05:44:54 --> Helper loaded: form_helper
DEBUG - 2015-03-22 05:44:54 --> Helper loaded: form_helper
DEBUG - 2015-03-22 05:44:54 --> Loader Class Initialized
DEBUG - 2015-03-22 05:44:54 --> Config Class Initialized
DEBUG - 2015-03-22 05:44:54 --> Database Driver Class Initialized
DEBUG - 2015-03-22 05:44:54 --> Helper loaded: url_helper
DEBUG - 2015-03-22 05:44:54 --> Helper loaded: language_helper
DEBUG - 2015-03-22 05:44:54 --> Helper loaded: language_helper
DEBUG - 2015-03-22 05:44:54 --> Helper loaded: string_helper
DEBUG - 2015-03-22 05:44:54 --> Helper loaded: language_helper
DEBUG - 2015-03-22 05:44:54 --> Helper loaded: form_helper
DEBUG - 2015-03-22 05:44:54 --> Hooks Class Initialized
DEBUG - 2015-03-22 05:44:54 --> Config Class Initialized
DEBUG - 2015-03-22 05:44:54 --> Utf8 Class Initialized
DEBUG - 2015-03-22 05:44:54 --> Hooks Class Initialized
DEBUG - 2015-03-22 05:44:54 --> Controller Class Initialized
DEBUG - 2015-03-22 05:44:54 --> Database Driver Class Initialized
DEBUG - 2015-03-22 05:44:54 --> Helper loaded: string_helper
DEBUG - 2015-03-22 05:44:54 --> Helper loaded: url_helper
DEBUG - 2015-03-22 05:44:54 --> Helper loaded: string_helper
DEBUG - 2015-03-22 05:44:54 --> Helper loaded: language_helper
DEBUG - 2015-03-22 05:44:54 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 05:44:54 --> Utf8 Class Initialized
DEBUG - 2015-03-22 05:44:55 --> Controller Class Initialized
DEBUG - 2015-03-22 05:44:55 --> Database Driver Class Initialized
DEBUG - 2015-03-22 05:44:55 --> Config Class Initialized
DEBUG - 2015-03-22 05:44:55 --> Config Class Initialized
DEBUG - 2015-03-22 05:44:55 --> Helper loaded: url_helper
DEBUG - 2015-03-22 05:44:55 --> Helper loaded: string_helper
DEBUG - 2015-03-22 05:44:55 --> URI Class Initialized
DEBUG - 2015-03-22 05:44:55 --> Helper loaded: url_helper
DEBUG - 2015-03-22 05:44:55 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 05:44:55 --> File loaded: application/views//common/user/listUserPiNo.php
DEBUG - 2015-03-22 05:44:55 --> Hooks Class Initialized
DEBUG - 2015-03-22 05:44:55 --> Database Driver Class Initialized
DEBUG - 2015-03-22 05:44:55 --> Controller Class Initialized
DEBUG - 2015-03-22 05:44:55 --> Hooks Class Initialized
DEBUG - 2015-03-22 05:44:55 --> Helper loaded: url_helper
DEBUG - 2015-03-22 05:44:55 --> Router Class Initialized
DEBUG - 2015-03-22 05:44:55 --> Final output sent to browser
DEBUG - 2015-03-22 05:44:55 --> Database Driver Class Initialized
DEBUG - 2015-03-22 05:44:55 --> URI Class Initialized
DEBUG - 2015-03-22 05:44:55 --> Config Class Initialized
DEBUG - 2015-03-22 05:44:55 --> Config Class Initialized
DEBUG - 2015-03-22 05:44:55 --> Utf8 Class Initialized
DEBUG - 2015-03-22 05:44:55 --> Controller Class Initialized
DEBUG - 2015-03-22 05:44:55 --> Utf8 Class Initialized
DEBUG - 2015-03-22 05:44:55 --> Total execution time: 4.5493
DEBUG - 2015-03-22 05:44:55 --> Database Driver Class Initialized
DEBUG - 2015-03-22 05:44:55 --> Controller Class Initialized
DEBUG - 2015-03-22 05:44:55 --> Router Class Initialized
DEBUG - 2015-03-22 05:44:55 --> Output Class Initialized
DEBUG - 2015-03-22 05:44:56 --> Hooks Class Initialized
DEBUG - 2015-03-22 05:44:56 --> Hooks Class Initialized
DEBUG - 2015-03-22 05:44:56 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 05:44:56 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 05:44:56 --> File loaded: application/views//common/user/listCntry.php
DEBUG - 2015-03-22 05:44:56 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 05:44:56 --> Config Class Initialized
DEBUG - 2015-03-22 05:44:56 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 05:44:56 --> Controller Class Initialized
DEBUG - 2015-03-22 05:44:56 --> Utf8 Class Initialized
DEBUG - 2015-03-22 05:44:56 --> Output Class Initialized
DEBUG - 2015-03-22 05:44:56 --> Security Class Initialized
DEBUG - 2015-03-22 05:44:56 --> Final output sent to browser
DEBUG - 2015-03-22 05:44:56 --> Final output sent to browser
DEBUG - 2015-03-22 05:44:56 --> URI Class Initialized
DEBUG - 2015-03-22 05:44:56 --> Utf8 Class Initialized
DEBUG - 2015-03-22 05:44:56 --> URI Class Initialized
DEBUG - 2015-03-22 05:44:56 --> Final output sent to browser
DEBUG - 2015-03-22 05:44:56 --> Hooks Class Initialized
DEBUG - 2015-03-22 05:44:56 --> File loaded: application/views//common/listModel.php
DEBUG - 2015-03-22 05:44:56 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 05:44:56 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 05:44:56 --> Security Class Initialized
DEBUG - 2015-03-22 05:44:56 --> Input Class Initialized
DEBUG - 2015-03-22 05:44:56 --> Total execution time: 5.0963
DEBUG - 2015-03-22 05:44:56 --> Total execution time: 5.3163
DEBUG - 2015-03-22 05:44:56 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 05:44:56 --> Router Class Initialized
DEBUG - 2015-03-22 05:44:57 --> Total execution time: 5.5173
DEBUG - 2015-03-22 05:44:57 --> Router Class Initialized
DEBUG - 2015-03-22 05:44:57 --> Utf8 Class Initialized
DEBUG - 2015-03-22 05:44:57 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 05:44:57 --> Final output sent to browser
DEBUG - 2015-03-22 05:44:57 --> URI Class Initialized
DEBUG - 2015-03-22 05:44:57 --> Final output sent to browser
DEBUG - 2015-03-22 05:44:57 --> Input Class Initialized
DEBUG - 2015-03-22 05:44:57 --> Config Class Initialized
DEBUG - 2015-03-22 05:44:57 --> URI Class Initialized
DEBUG - 2015-03-22 05:44:57 --> Output Class Initialized
DEBUG - 2015-03-22 05:44:57 --> Language Class Initialized
DEBUG - 2015-03-22 05:44:57 --> Output Class Initialized
DEBUG - 2015-03-22 05:44:57 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 05:44:57 --> Total execution time: 5.7553
DEBUG - 2015-03-22 05:44:57 --> Router Class Initialized
DEBUG - 2015-03-22 05:44:57 --> Total execution time: 6.2124
DEBUG - 2015-03-22 05:44:57 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 05:44:57 --> Hooks Class Initialized
DEBUG - 2015-03-22 05:44:57 --> Router Class Initialized
DEBUG - 2015-03-22 05:44:57 --> Security Class Initialized
DEBUG - 2015-03-22 05:44:58 --> Security Class Initialized
DEBUG - 2015-03-22 05:44:58 --> URI Class Initialized
DEBUG - 2015-03-22 05:44:58 --> Loader Class Initialized
DEBUG - 2015-03-22 05:44:58 --> Output Class Initialized
DEBUG - 2015-03-22 05:44:58 --> Language Class Initialized
DEBUG - 2015-03-22 05:44:58 --> Utf8 Class Initialized
DEBUG - 2015-03-22 05:44:58 --> Output Class Initialized
DEBUG - 2015-03-22 05:44:58 --> Input Class Initialized
DEBUG - 2015-03-22 05:44:58 --> Input Class Initialized
DEBUG - 2015-03-22 05:44:58 --> Router Class Initialized
DEBUG - 2015-03-22 05:44:58 --> Helper loaded: form_helper
DEBUG - 2015-03-22 05:44:58 --> Security Class Initialized
DEBUG - 2015-03-22 05:44:58 --> Loader Class Initialized
DEBUG - 2015-03-22 05:44:58 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 05:44:58 --> Security Class Initialized
DEBUG - 2015-03-22 05:44:58 --> Helper loaded: language_helper
DEBUG - 2015-03-22 05:44:58 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 05:44:58 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 05:44:58 --> Output Class Initialized
DEBUG - 2015-03-22 05:44:59 --> Input Class Initialized
DEBUG - 2015-03-22 05:44:59 --> URI Class Initialized
DEBUG - 2015-03-22 05:44:59 --> Input Class Initialized
DEBUG - 2015-03-22 05:44:59 --> Helper loaded: form_helper
DEBUG - 2015-03-22 05:44:59 --> Security Class Initialized
DEBUG - 2015-03-22 05:44:59 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 05:44:59 --> Helper loaded: string_helper
DEBUG - 2015-03-22 05:44:59 --> Language Class Initialized
DEBUG - 2015-03-22 05:44:59 --> Language Class Initialized
DEBUG - 2015-03-22 05:44:59 --> Language Class Initialized
DEBUG - 2015-03-22 05:44:59 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 05:44:59 --> Router Class Initialized
DEBUG - 2015-03-22 05:44:59 --> Loader Class Initialized
DEBUG - 2015-03-22 05:44:59 --> Loader Class Initialized
DEBUG - 2015-03-22 05:44:59 --> Helper loaded: url_helper
DEBUG - 2015-03-22 05:44:59 --> Helper loaded: language_helper
DEBUG - 2015-03-22 05:44:59 --> Loader Class Initialized
DEBUG - 2015-03-22 05:44:59 --> Input Class Initialized
DEBUG - 2015-03-22 05:44:59 --> Language Class Initialized
DEBUG - 2015-03-22 05:44:59 --> Helper loaded: form_helper
DEBUG - 2015-03-22 05:44:59 --> Helper loaded: form_helper
DEBUG - 2015-03-22 05:44:59 --> Output Class Initialized
DEBUG - 2015-03-22 05:44:59 --> Database Driver Class Initialized
DEBUG - 2015-03-22 05:44:59 --> Helper loaded: string_helper
DEBUG - 2015-03-22 05:44:59 --> Helper loaded: form_helper
DEBUG - 2015-03-22 05:44:59 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 05:44:59 --> Loader Class Initialized
DEBUG - 2015-03-22 05:44:59 --> Helper loaded: language_helper
DEBUG - 2015-03-22 05:44:59 --> Helper loaded: language_helper
DEBUG - 2015-03-22 05:44:59 --> Security Class Initialized
DEBUG - 2015-03-22 05:44:59 --> Helper loaded: url_helper
DEBUG - 2015-03-22 05:44:59 --> Helper loaded: language_helper
DEBUG - 2015-03-22 05:44:59 --> Language Class Initialized
DEBUG - 2015-03-22 05:45:00 --> Helper loaded: string_helper
DEBUG - 2015-03-22 05:45:00 --> Helper loaded: form_helper
DEBUG - 2015-03-22 05:45:00 --> Controller Class Initialized
DEBUG - 2015-03-22 05:45:00 --> Helper loaded: string_helper
DEBUG - 2015-03-22 05:45:00 --> Input Class Initialized
DEBUG - 2015-03-22 05:45:00 --> Database Driver Class Initialized
DEBUG - 2015-03-22 05:45:00 --> Helper loaded: string_helper
DEBUG - 2015-03-22 05:45:00 --> Loader Class Initialized
DEBUG - 2015-03-22 05:45:00 --> Helper loaded: url_helper
DEBUG - 2015-03-22 05:45:00 --> Helper loaded: language_helper
DEBUG - 2015-03-22 05:45:00 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 05:45:00 --> Helper loaded: url_helper
DEBUG - 2015-03-22 05:45:00 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 05:45:00 --> Helper loaded: url_helper
DEBUG - 2015-03-22 05:45:00 --> Database Driver Class Initialized
DEBUG - 2015-03-22 05:45:00 --> Helper loaded: form_helper
DEBUG - 2015-03-22 05:45:00 --> Helper loaded: string_helper
DEBUG - 2015-03-22 05:45:00 --> Final output sent to browser
DEBUG - 2015-03-22 05:45:00 --> Controller Class Initialized
DEBUG - 2015-03-22 05:45:00 --> Controller Class Initialized
DEBUG - 2015-03-22 05:45:00 --> Database Driver Class Initialized
DEBUG - 2015-03-22 05:45:00 --> Language Class Initialized
DEBUG - 2015-03-22 05:45:00 --> Database Driver Class Initialized
DEBUG - 2015-03-22 05:45:00 --> Helper loaded: language_helper
DEBUG - 2015-03-22 05:45:00 --> Helper loaded: url_helper
DEBUG - 2015-03-22 05:45:01 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 05:45:01 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 05:45:01 --> Total execution time: 6.4584
DEBUG - 2015-03-22 05:45:01 --> Controller Class Initialized
DEBUG - 2015-03-22 05:45:01 --> Loader Class Initialized
DEBUG - 2015-03-22 05:45:01 --> Helper loaded: string_helper
DEBUG - 2015-03-22 05:45:01 --> Database Driver Class Initialized
DEBUG - 2015-03-22 05:45:01 --> Final output sent to browser
DEBUG - 2015-03-22 05:45:01 --> Controller Class Initialized
DEBUG - 2015-03-22 05:45:01 --> Final output sent to browser
DEBUG - 2015-03-22 05:45:01 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 05:45:01 --> Total execution time: 6.0823
DEBUG - 2015-03-22 05:45:01 --> Helper loaded: form_helper
DEBUG - 2015-03-22 05:45:01 --> Helper loaded: url_helper
DEBUG - 2015-03-22 05:45:01 --> Controller Class Initialized
DEBUG - 2015-03-22 05:45:01 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 05:45:01 --> Final output sent to browser
DEBUG - 2015-03-22 05:45:01 --> Database Driver Class Initialized
DEBUG - 2015-03-22 05:45:01 --> Total execution time: 6.9284
DEBUG - 2015-03-22 05:45:01 --> Helper loaded: language_helper
DEBUG - 2015-03-22 05:45:01 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 05:45:01 --> Final output sent to browser
DEBUG - 2015-03-22 05:45:01 --> Total execution time: 6.5924
DEBUG - 2015-03-22 05:45:02 --> Helper loaded: string_helper
DEBUG - 2015-03-22 05:45:02 --> Controller Class Initialized
DEBUG - 2015-03-22 05:45:02 --> Final output sent to browser
DEBUG - 2015-03-22 05:45:02 --> Total execution time: 6.2144
DEBUG - 2015-03-22 05:45:02 --> Helper loaded: url_helper
DEBUG - 2015-03-22 05:45:02 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 05:45:02 --> Total execution time: 6.4484
DEBUG - 2015-03-22 05:45:02 --> Database Driver Class Initialized
DEBUG - 2015-03-22 05:45:02 --> Final output sent to browser
DEBUG - 2015-03-22 05:45:02 --> Controller Class Initialized
DEBUG - 2015-03-22 05:45:02 --> Total execution time: 6.2304
DEBUG - 2015-03-22 05:45:02 --> File loaded: application/views//common/listCodeImg.php
DEBUG - 2015-03-22 05:45:02 --> Final output sent to browser
DEBUG - 2015-03-22 05:45:02 --> Total execution time: 5.2773
DEBUG - 2015-03-22 05:45:23 --> Config Class Initialized
DEBUG - 2015-03-22 05:45:23 --> Hooks Class Initialized
DEBUG - 2015-03-22 05:45:24 --> Utf8 Class Initialized
DEBUG - 2015-03-22 05:45:24 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 05:45:24 --> URI Class Initialized
DEBUG - 2015-03-22 05:45:24 --> Router Class Initialized
DEBUG - 2015-03-22 05:45:24 --> Output Class Initialized
DEBUG - 2015-03-22 05:45:24 --> Security Class Initialized
DEBUG - 2015-03-22 05:45:24 --> Input Class Initialized
DEBUG - 2015-03-22 05:45:24 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 05:45:24 --> Language Class Initialized
DEBUG - 2015-03-22 05:45:24 --> Loader Class Initialized
DEBUG - 2015-03-22 05:45:24 --> Helper loaded: form_helper
DEBUG - 2015-03-22 05:45:24 --> Helper loaded: language_helper
DEBUG - 2015-03-22 05:45:24 --> Helper loaded: string_helper
DEBUG - 2015-03-22 05:45:24 --> Helper loaded: url_helper
DEBUG - 2015-03-22 05:45:25 --> Database Driver Class Initialized
DEBUG - 2015-03-22 05:45:25 --> Controller Class Initialized
DEBUG - 2015-03-22 05:45:25 --> File loaded: application/views//admin/order/crtEqpOrder.php
DEBUG - 2015-03-22 05:45:25 --> Final output sent to browser
DEBUG - 2015-03-22 05:45:25 --> Total execution time: 1.4401
DEBUG - 2015-03-22 05:45:25 --> Config Class Initialized
DEBUG - 2015-03-22 05:45:25 --> Hooks Class Initialized
DEBUG - 2015-03-22 05:45:25 --> Utf8 Class Initialized
DEBUG - 2015-03-22 05:45:25 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 05:45:25 --> URI Class Initialized
DEBUG - 2015-03-22 05:45:25 --> Router Class Initialized
DEBUG - 2015-03-22 05:45:25 --> Output Class Initialized
DEBUG - 2015-03-22 05:45:26 --> Security Class Initialized
DEBUG - 2015-03-22 05:45:26 --> Input Class Initialized
DEBUG - 2015-03-22 05:45:26 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 05:45:26 --> Language Class Initialized
DEBUG - 2015-03-22 05:45:26 --> Loader Class Initialized
DEBUG - 2015-03-22 05:45:26 --> Helper loaded: form_helper
DEBUG - 2015-03-22 05:45:26 --> Helper loaded: language_helper
DEBUG - 2015-03-22 05:45:26 --> Helper loaded: string_helper
DEBUG - 2015-03-22 05:45:26 --> Helper loaded: url_helper
DEBUG - 2015-03-22 05:45:26 --> Database Driver Class Initialized
DEBUG - 2015-03-22 05:45:26 --> Controller Class Initialized
DEBUG - 2015-03-22 05:45:26 --> readEqpOrder:SELECT a.*, (select atcd_nm from cm_cd_attr where cd = '00B0' and atcd = a.srl_atcd) txt_srl_atcd, (select atcd_nm from cm_cd_attr where cd = '00D0' and atcd = a.rjt_pkt_tp_atcd) txt_rjt_pkt_tp_atcd, (select atcd_nm from cm_cd_attr where cd = '00E0' and atcd = a.pwr_cab_atcd) txt_pwr_cab_atcd, (select atcd_nm from cm_cd_attr where cd = '00F0' and atcd = a.shipped_by_atcd) txt_shipped_by_atcd, (select atcd_nm from cm_cd_attr where cd = '00F1' and atcd = a.courier_atcd) txt_courier_atcd, (select atcd_nm from cm_cd_attr where cd = '00G0' and atcd = a.payment_atcd) txt_payment_atcd, (select atcd_nm from cm_cd_attr where cd = '00H0' and atcd = a.incoterms_atcd) txt_incoterms_atcd, (select atcd_nm from cm_cd_attr where cd = '00L0' and atcd = a.lcd_color_atcd) txt_lcd_color_atcd, (select atcd_nm from cm_cd_attr where cd = '00M0' and atcd = a.lcd_lang_atcd) txt_lcd_lang_atcd, (select cmpy_nm from om_dealer where dealer_seq = a.dealer_seq) cmpy_nm, (select atcd_nm from cm_cd_attr where cd = '0022' and atcd = a.cntry_atcd) txt_cntry_atcd, if(mdl_cd in ('0007','0009'), concat(mdl_nm, concat('R',lan_L),if(a.lcd_color_atcd='00L00002','C','')), if(mdl_cd in ('3000'), concat(mdl_nm, concat('F',rjt_pkt_tp),''),mdl_nm)) txt_mdl_nm, DATE_FORMAT(a.delivery_dt, '%Y-%m-%d') txt_delivery_dt FROM ( SELECT a.*, b.cntry_atcd, b.dealer_seq, b.worker_seq, b.premium_rate, b.tot_amt, b.cnfm_yn, b.cnfm_dt, b.wrk_tp_atcd, b.udt_dt as order_dt, (CASE WHEN a.rjt_pkt_tp_atcd = ('00D00001') THEN 'A'  WHEN a.rjt_pkt_tp_atcd = ('00D00002') THEN 'I' END) rjt_pkt_tp, (SELECT mdl_nm FROM om_mdl WHERE mdl_cd = a.mdl_cd) mdl_nm, (SELECT if(count(*)>0,'L','') FROM om_ord_eqp_dtl where pi_no = a.pi_no and po_no = a.po_no and om_ord_eqp_dtl.atcd = '00A00001') lan_L FROM om_ord_eqp a, om_ord_inf b WHERE a.pi_no = b.pi_no AND a.pi_no = '150015bg' AND a.po_no = 40 ) a
DEBUG - 2015-03-22 05:45:26 --> SELECT b.cntry_atcd, b.dealer_seq, b.worker_seq, b.premium_rate, b.tot_amt, b.cnfm_yn, b.cnfm_dt, b.wrk_tp_atcd, a.*, (select atcd_nm from cm_cd_attr where cd = '0091' and atcd = a.currency_atch) txt_currency_atcd, (select atcd_nm from cm_cd_attr where cd = '0092' and atcd = a.serial_currency_atch) txt_serial_currency_atch, (select atcd_nm from cm_cd_attr where cd = '00A0' and atcd = a.opt_hw_atcd) txt_opt_hw_atcd, (select atcd_nm from cm_cd_attr where cd = '00C0' and atcd = a.pc_cab_atcd) txt_pc_cab_atcd FROM ( SELECT b.*,(case when b.cd='0091' then b.atcd else '' end) currency_atch,(CASE WHEN b.cd='0091' AND b.atcd_ox='O' THEN b.atcd ELSE '' END) fitness,(CASE WHEN b.cd='0091' THEN b.atcd_ox ELSE '' END) fitness_ox,(case when b.cd='0092' then b.atcd else '' end) serial_currency_atch,(CASE WHEN b.cd='0092' AND b.atcd_ox='O' THEN b.atcd ELSE '' END) srl_fitness,(CASE WHEN b.cd='0092' THEN b.atcd_ox ELSE '' END) srl_fitness_ox,(case when b.cd='00A0' then b.atcd else '' end) opt_hw_atcd,(case when b.cd='00C0' then b.atcd else '' end) pc_cab_atcd FROM om_ord_eqp a, om_ord_eqp_dtl b WHERE a.pi_no = b.pi_no AND a.po_no = b.po_no AND a.pi_no = '150015bg'		AND a.po_no = 40) a, om_ord_inf b WHERE a.pi_no = b.pi_no order by cd, atcd
DEBUG - 2015-03-22 05:45:26 --> INSERT INTO om_sndmail(pi_no, wrk_tp_atcd, sndmail_atcd, auth_grp_cd, sender_email, sender_eng_nm, title, ctnt, crt_dt, crt_uid) VALUES ('150015bg','00700110', '00700111', 'UD', 'kpbaek@localhost', (SELECT dealer_nm FROM om_dealer   WHERE dealer_uid='sofia@ubs-bg.com'), (select concat(atcd_nm,' - ',(select cmpy_nm from om_dealer where dealer_uid='sofia@ubs-bg.com')) from cm_cd_attr where cd = '0071' and atcd = '00700111'), '', now(), 'sofia@ubs-bg.com')
DEBUG - 2015-03-22 05:45:27 --> sql3:INSERT INTO om_sndmail_dtl (sndmail_seq, email_from, email_to, rcpnt_tp_atcd, snd_yn, crt_dt, crt_uid) SELECT 221, 'safe@safeleader.esy.es', (select usr_email from om_user where uid = a.dealer_uid), '00100010' rcpnt_tp_atcd, 'N', now(), 'sofia@ubs-bg.com' FROM om_dealer a, om_ord_inf b WHERE a.dealer_seq = b.dealer_seq AND b.pi_no = '150015bg' UNION SELECT 221, 'kpbaek@localhost', (select team_email from om_team where team_atcd = '00600SL0') email_to, '00100040' rcpnt_tp_atcd, 'N', now(), 'sofia@ubs-bg.com'
DEBUG - 2015-03-22 05:45:27 --> File loaded: application/views//common/crtSndMail.php
DEBUG - 2015-03-22 05:45:27 --> Final output sent to browser
DEBUG - 2015-03-22 05:45:27 --> Total execution time: 1.7071
DEBUG - 2015-03-22 05:45:27 --> Config Class Initialized
DEBUG - 2015-03-22 05:45:27 --> Hooks Class Initialized
DEBUG - 2015-03-22 05:45:27 --> Utf8 Class Initialized
DEBUG - 2015-03-22 05:45:27 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 05:45:27 --> URI Class Initialized
DEBUG - 2015-03-22 05:45:27 --> Router Class Initialized
DEBUG - 2015-03-22 05:45:27 --> Output Class Initialized
DEBUG - 2015-03-22 05:45:27 --> Security Class Initialized
DEBUG - 2015-03-22 05:45:27 --> Input Class Initialized
DEBUG - 2015-03-22 05:45:28 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 05:45:28 --> Language Class Initialized
DEBUG - 2015-03-22 05:45:28 --> Loader Class Initialized
DEBUG - 2015-03-22 05:45:28 --> Helper loaded: form_helper
DEBUG - 2015-03-22 05:45:28 --> Helper loaded: language_helper
DEBUG - 2015-03-22 05:45:28 --> Helper loaded: string_helper
DEBUG - 2015-03-22 05:45:28 --> Helper loaded: url_helper
DEBUG - 2015-03-22 05:45:28 --> Database Driver Class Initialized
DEBUG - 2015-03-22 05:45:28 --> Controller Class Initialized
DEBUG - 2015-03-22 05:45:28 --> sql3:SELECT a.pi_no, a.sndmail_seq, a.wrk_tp_atcd, a.sender_email, a.title, a.ctnt, email_from, email_to, snd_yn, b.snd_no, b.rcpnt_tp_atcd, b.rcpnt_team_atcd,(select usr_nm from om_user where uid = a.sender_email) sender_nm,(select usr_nm from om_user where uid = b.email_to) rcpnt_nm FROM om_sndmail a, om_sndmail_dtl b WHERE a.sndmail_seq = b.sndmail_seq and a.sndmail_seq=221 and snd_yn='N'
DEBUG - 2015-03-22 05:45:28 --> File loaded: application/views//common/sndMailResult.php
DEBUG - 2015-03-22 05:45:28 --> Final output sent to browser
DEBUG - 2015-03-22 05:45:28 --> Total execution time: 1.5831
DEBUG - 2015-03-22 05:46:24 --> Config Class Initialized
DEBUG - 2015-03-22 05:46:24 --> Hooks Class Initialized
DEBUG - 2015-03-22 05:46:24 --> Utf8 Class Initialized
DEBUG - 2015-03-22 05:46:24 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 05:46:24 --> URI Class Initialized
DEBUG - 2015-03-22 05:46:24 --> Router Class Initialized
DEBUG - 2015-03-22 05:46:24 --> Output Class Initialized
DEBUG - 2015-03-22 05:46:24 --> Security Class Initialized
DEBUG - 2015-03-22 05:46:24 --> Input Class Initialized
DEBUG - 2015-03-22 05:46:24 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 05:46:24 --> Language Class Initialized
DEBUG - 2015-03-22 05:46:25 --> Loader Class Initialized
DEBUG - 2015-03-22 05:46:25 --> Helper loaded: form_helper
DEBUG - 2015-03-22 05:46:25 --> Helper loaded: language_helper
DEBUG - 2015-03-22 05:46:25 --> Helper loaded: string_helper
DEBUG - 2015-03-22 05:46:25 --> Helper loaded: url_helper
DEBUG - 2015-03-22 05:46:25 --> Database Driver Class Initialized
DEBUG - 2015-03-22 05:46:25 --> Controller Class Initialized
DEBUG - 2015-03-22 05:46:25 --> File loaded: application/views//admin/order/main.php
DEBUG - 2015-03-22 05:46:25 --> Final output sent to browser
DEBUG - 2015-03-22 05:46:25 --> Total execution time: 1.4921
DEBUG - 2015-03-22 05:46:25 --> Config Class Initialized
DEBUG - 2015-03-22 05:46:26 --> Hooks Class Initialized
DEBUG - 2015-03-22 05:46:26 --> Utf8 Class Initialized
DEBUG - 2015-03-22 05:46:26 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 05:46:26 --> URI Class Initialized
DEBUG - 2015-03-22 05:46:26 --> Router Class Initialized
DEBUG - 2015-03-22 05:46:26 --> Output Class Initialized
DEBUG - 2015-03-22 05:46:26 --> Security Class Initialized
DEBUG - 2015-03-22 05:46:26 --> Input Class Initialized
DEBUG - 2015-03-22 05:46:26 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 05:46:26 --> Language Class Initialized
DEBUG - 2015-03-22 05:46:26 --> Loader Class Initialized
DEBUG - 2015-03-22 05:46:26 --> Helper loaded: form_helper
DEBUG - 2015-03-22 05:46:26 --> Helper loaded: language_helper
DEBUG - 2015-03-22 05:46:26 --> Helper loaded: string_helper
DEBUG - 2015-03-22 05:46:27 --> Helper loaded: url_helper
DEBUG - 2015-03-22 05:46:27 --> Database Driver Class Initialized
DEBUG - 2015-03-22 05:46:27 --> Controller Class Initialized
DEBUG - 2015-03-22 05:46:27 --> File loaded: application/views//admin/order/tab01.php
DEBUG - 2015-03-22 05:46:27 --> Final output sent to browser
DEBUG - 2015-03-22 05:46:27 --> Total execution time: 1.4341
DEBUG - 2015-03-22 05:46:27 --> Config Class Initialized
DEBUG - 2015-03-22 05:46:27 --> Hooks Class Initialized
DEBUG - 2015-03-22 05:46:27 --> Utf8 Class Initialized
DEBUG - 2015-03-22 05:46:27 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 05:46:28 --> URI Class Initialized
DEBUG - 2015-03-22 05:46:28 --> Router Class Initialized
DEBUG - 2015-03-22 05:46:28 --> Output Class Initialized
DEBUG - 2015-03-22 05:46:28 --> Security Class Initialized
DEBUG - 2015-03-22 05:46:28 --> Input Class Initialized
DEBUG - 2015-03-22 05:46:28 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 05:46:28 --> Language Class Initialized
DEBUG - 2015-03-22 05:46:28 --> Loader Class Initialized
DEBUG - 2015-03-22 05:46:28 --> Helper loaded: form_helper
DEBUG - 2015-03-22 05:46:28 --> Helper loaded: language_helper
DEBUG - 2015-03-22 05:46:28 --> Helper loaded: string_helper
DEBUG - 2015-03-22 05:46:28 --> Helper loaded: url_helper
DEBUG - 2015-03-22 05:46:28 --> Database Driver Class Initialized
DEBUG - 2015-03-22 05:46:28 --> Controller Class Initialized
DEBUG - 2015-03-22 05:46:29 --> File loaded: application/views//common/user/viewDealer.php
DEBUG - 2015-03-22 05:46:29 --> Final output sent to browser
DEBUG - 2015-03-22 05:46:29 --> Total execution time: 1.4291
DEBUG - 2015-03-22 05:46:29 --> Config Class Initialized
DEBUG - 2015-03-22 05:46:29 --> Config Class Initialized
DEBUG - 2015-03-22 05:46:29 --> Config Class Initialized
DEBUG - 2015-03-22 05:46:29 --> Config Class Initialized
DEBUG - 2015-03-22 05:46:29 --> Hooks Class Initialized
DEBUG - 2015-03-22 05:46:29 --> Hooks Class Initialized
DEBUG - 2015-03-22 05:46:29 --> Config Class Initialized
DEBUG - 2015-03-22 05:46:29 --> Hooks Class Initialized
DEBUG - 2015-03-22 05:46:29 --> Hooks Class Initialized
DEBUG - 2015-03-22 05:46:29 --> Config Class Initialized
DEBUG - 2015-03-22 05:46:29 --> Utf8 Class Initialized
DEBUG - 2015-03-22 05:46:29 --> Utf8 Class Initialized
DEBUG - 2015-03-22 05:46:29 --> Hooks Class Initialized
DEBUG - 2015-03-22 05:46:29 --> Utf8 Class Initialized
DEBUG - 2015-03-22 05:46:29 --> Utf8 Class Initialized
DEBUG - 2015-03-22 05:46:29 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 05:46:29 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 05:46:29 --> URI Class Initialized
DEBUG - 2015-03-22 05:46:29 --> URI Class Initialized
DEBUG - 2015-03-22 05:46:29 --> Router Class Initialized
DEBUG - 2015-03-22 05:46:29 --> Router Class Initialized
DEBUG - 2015-03-22 05:46:29 --> Hooks Class Initialized
DEBUG - 2015-03-22 05:46:29 --> Utf8 Class Initialized
DEBUG - 2015-03-22 05:46:29 --> Output Class Initialized
DEBUG - 2015-03-22 05:46:29 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 05:46:29 --> Output Class Initialized
DEBUG - 2015-03-22 05:46:29 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 05:46:29 --> Security Class Initialized
DEBUG - 2015-03-22 05:46:30 --> URI Class Initialized
DEBUG - 2015-03-22 05:46:30 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 05:46:30 --> Utf8 Class Initialized
DEBUG - 2015-03-22 05:46:30 --> Router Class Initialized
DEBUG - 2015-03-22 05:46:30 --> Security Class Initialized
DEBUG - 2015-03-22 05:46:30 --> Input Class Initialized
DEBUG - 2015-03-22 05:46:30 --> URI Class Initialized
DEBUG - 2015-03-22 05:46:30 --> URI Class Initialized
DEBUG - 2015-03-22 05:46:30 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 05:46:30 --> Output Class Initialized
DEBUG - 2015-03-22 05:46:30 --> Router Class Initialized
DEBUG - 2015-03-22 05:46:30 --> Input Class Initialized
DEBUG - 2015-03-22 05:46:30 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 05:46:30 --> Config Class Initialized
DEBUG - 2015-03-22 05:46:30 --> Router Class Initialized
DEBUG - 2015-03-22 05:46:30 --> URI Class Initialized
DEBUG - 2015-03-22 05:46:30 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 05:46:30 --> Config Class Initialized
DEBUG - 2015-03-22 05:46:30 --> Language Class Initialized
DEBUG - 2015-03-22 05:46:30 --> Output Class Initialized
DEBUG - 2015-03-22 05:46:30 --> Security Class Initialized
DEBUG - 2015-03-22 05:46:30 --> Hooks Class Initialized
DEBUG - 2015-03-22 05:46:30 --> Output Class Initialized
DEBUG - 2015-03-22 05:46:30 --> Hooks Class Initialized
DEBUG - 2015-03-22 05:46:30 --> Router Class Initialized
DEBUG - 2015-03-22 05:46:31 --> Language Class Initialized
DEBUG - 2015-03-22 05:46:31 --> Security Class Initialized
DEBUG - 2015-03-22 05:46:31 --> Loader Class Initialized
DEBUG - 2015-03-22 05:46:31 --> Input Class Initialized
DEBUG - 2015-03-22 05:46:31 --> Utf8 Class Initialized
DEBUG - 2015-03-22 05:46:31 --> Security Class Initialized
DEBUG - 2015-03-22 05:46:31 --> Utf8 Class Initialized
DEBUG - 2015-03-22 05:46:31 --> Output Class Initialized
DEBUG - 2015-03-22 05:46:31 --> Loader Class Initialized
DEBUG - 2015-03-22 05:46:31 --> Input Class Initialized
DEBUG - 2015-03-22 05:46:31 --> Helper loaded: form_helper
DEBUG - 2015-03-22 05:46:31 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 05:46:31 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 05:46:31 --> Input Class Initialized
DEBUG - 2015-03-22 05:46:31 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 05:46:31 --> Security Class Initialized
DEBUG - 2015-03-22 05:46:31 --> Helper loaded: form_helper
DEBUG - 2015-03-22 05:46:31 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 05:46:31 --> Helper loaded: language_helper
DEBUG - 2015-03-22 05:46:31 --> URI Class Initialized
DEBUG - 2015-03-22 05:46:31 --> Config Class Initialized
DEBUG - 2015-03-22 05:46:31 --> Config Class Initialized
DEBUG - 2015-03-22 05:46:31 --> Language Class Initialized
DEBUG - 2015-03-22 05:46:31 --> URI Class Initialized
DEBUG - 2015-03-22 05:46:31 --> Router Class Initialized
DEBUG - 2015-03-22 05:46:31 --> Hooks Class Initialized
DEBUG - 2015-03-22 05:46:31 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 05:46:32 --> Hooks Class Initialized
DEBUG - 2015-03-22 05:46:32 --> Input Class Initialized
DEBUG - 2015-03-22 05:46:32 --> Helper loaded: language_helper
DEBUG - 2015-03-22 05:46:32 --> Language Class Initialized
DEBUG - 2015-03-22 05:46:32 --> Helper loaded: string_helper
DEBUG - 2015-03-22 05:46:32 --> Loader Class Initialized
DEBUG - 2015-03-22 05:46:32 --> Output Class Initialized
DEBUG - 2015-03-22 05:46:32 --> Router Class Initialized
DEBUG - 2015-03-22 05:46:32 --> Utf8 Class Initialized
DEBUG - 2015-03-22 05:46:32 --> Language Class Initialized
DEBUG - 2015-03-22 05:46:32 --> Utf8 Class Initialized
DEBUG - 2015-03-22 05:46:32 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 05:46:32 --> Helper loaded: string_helper
DEBUG - 2015-03-22 05:46:32 --> Loader Class Initialized
DEBUG - 2015-03-22 05:46:32 --> Helper loaded: form_helper
DEBUG - 2015-03-22 05:46:32 --> Config Class Initialized
DEBUG - 2015-03-22 05:46:32 --> Config Class Initialized
DEBUG - 2015-03-22 05:46:32 --> Security Class Initialized
DEBUG - 2015-03-22 05:46:32 --> Helper loaded: url_helper
DEBUG - 2015-03-22 05:46:32 --> Output Class Initialized
DEBUG - 2015-03-22 05:46:32 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 05:46:32 --> Loader Class Initialized
DEBUG - 2015-03-22 05:46:32 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 05:46:32 --> Language Class Initialized
DEBUG - 2015-03-22 05:46:32 --> Helper loaded: url_helper
DEBUG - 2015-03-22 05:46:32 --> Helper loaded: form_helper
DEBUG - 2015-03-22 05:46:32 --> Hooks Class Initialized
DEBUG - 2015-03-22 05:46:32 --> Helper loaded: language_helper
DEBUG - 2015-03-22 05:46:32 --> Hooks Class Initialized
DEBUG - 2015-03-22 05:46:32 --> Input Class Initialized
DEBUG - 2015-03-22 05:46:33 --> Database Driver Class Initialized
DEBUG - 2015-03-22 05:46:33 --> Security Class Initialized
DEBUG - 2015-03-22 05:46:33 --> URI Class Initialized
DEBUG - 2015-03-22 05:46:33 --> Helper loaded: form_helper
DEBUG - 2015-03-22 05:46:33 --> Loader Class Initialized
DEBUG - 2015-03-22 05:46:33 --> URI Class Initialized
DEBUG - 2015-03-22 05:46:33 --> Database Driver Class Initialized
DEBUG - 2015-03-22 05:46:33 --> Helper loaded: language_helper
DEBUG - 2015-03-22 05:46:33 --> Helper loaded: string_helper
DEBUG - 2015-03-22 05:46:33 --> Router Class Initialized
DEBUG - 2015-03-22 05:46:33 --> Utf8 Class Initialized
DEBUG - 2015-03-22 05:46:33 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 05:46:33 --> Controller Class Initialized
DEBUG - 2015-03-22 05:46:33 --> Utf8 Class Initialized
DEBUG - 2015-03-22 05:46:33 --> Helper loaded: form_helper
DEBUG - 2015-03-22 05:46:33 --> Helper loaded: language_helper
DEBUG - 2015-03-22 05:46:33 --> Input Class Initialized
DEBUG - 2015-03-22 05:46:33 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 05:46:33 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 05:46:33 --> Helper loaded: language_helper
DEBUG - 2015-03-22 05:46:33 --> Helper loaded: url_helper
DEBUG - 2015-03-22 05:46:33 --> Router Class Initialized
DEBUG - 2015-03-22 05:46:33 --> Output Class Initialized
DEBUG - 2015-03-22 05:46:33 --> Helper loaded: string_helper
DEBUG - 2015-03-22 05:46:33 --> Final output sent to browser
DEBUG - 2015-03-22 05:46:33 --> Controller Class Initialized
DEBUG - 2015-03-22 05:46:33 --> Helper loaded: string_helper
DEBUG - 2015-03-22 05:46:33 --> URI Class Initialized
DEBUG - 2015-03-22 05:46:33 --> Output Class Initialized
DEBUG - 2015-03-22 05:46:33 --> Security Class Initialized
DEBUG - 2015-03-22 05:46:33 --> Helper loaded: url_helper
DEBUG - 2015-03-22 05:46:33 --> Helper loaded: string_helper
DEBUG - 2015-03-22 05:46:33 --> Language Class Initialized
DEBUG - 2015-03-22 05:46:33 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 05:46:33 --> Database Driver Class Initialized
DEBUG - 2015-03-22 05:46:33 --> Database Driver Class Initialized
DEBUG - 2015-03-22 05:46:33 --> Helper loaded: url_helper
DEBUG - 2015-03-22 05:46:33 --> Total execution time: 4.2912
DEBUG - 2015-03-22 05:46:33 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 05:46:33 --> Router Class Initialized
DEBUG - 2015-03-22 05:46:33 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 05:46:33 --> Input Class Initialized
DEBUG - 2015-03-22 05:46:33 --> Security Class Initialized
DEBUG - 2015-03-22 05:46:33 --> Database Driver Class Initialized
DEBUG - 2015-03-22 05:46:33 --> Output Class Initialized
DEBUG - 2015-03-22 05:46:33 --> Final output sent to browser
DEBUG - 2015-03-22 05:46:33 --> Language Class Initialized
DEBUG - 2015-03-22 05:46:33 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 05:46:33 --> Config Class Initialized
DEBUG - 2015-03-22 05:46:33 --> Security Class Initialized
DEBUG - 2015-03-22 05:46:33 --> URI Class Initialized
DEBUG - 2015-03-22 05:46:33 --> Total execution time: 4.3252
DEBUG - 2015-03-22 05:46:33 --> Controller Class Initialized
DEBUG - 2015-03-22 05:46:33 --> Hooks Class Initialized
DEBUG - 2015-03-22 05:46:34 --> Input Class Initialized
DEBUG - 2015-03-22 05:46:34 --> Input Class Initialized
DEBUG - 2015-03-22 05:46:34 --> Helper loaded: url_helper
DEBUG - 2015-03-22 05:46:34 --> Router Class Initialized
DEBUG - 2015-03-22 05:46:34 --> Controller Class Initialized
DEBUG - 2015-03-22 05:46:34 --> Config Class Initialized
DEBUG - 2015-03-22 05:46:34 --> Controller Class Initialized
DEBUG - 2015-03-22 05:46:34 --> Language Class Initialized
DEBUG - 2015-03-22 05:46:34 --> Loader Class Initialized
DEBUG - 2015-03-22 05:46:34 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 05:46:34 --> Loader Class Initialized
DEBUG - 2015-03-22 05:46:34 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 05:46:34 --> Utf8 Class Initialized
DEBUG - 2015-03-22 05:46:34 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 05:46:34 --> Final output sent to browser
DEBUG - 2015-03-22 05:46:34 --> Hooks Class Initialized
DEBUG - 2015-03-22 05:46:34 --> Database Driver Class Initialized
DEBUG - 2015-03-22 05:46:34 --> Output Class Initialized
DEBUG - 2015-03-22 05:46:34 --> Helper loaded: form_helper
DEBUG - 2015-03-22 05:46:35 --> Loader Class Initialized
DEBUG - 2015-03-22 05:46:35 --> Language Class Initialized
DEBUG - 2015-03-22 05:46:35 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 05:46:35 --> File loaded: application/views//common/user/listCntry.php
DEBUG - 2015-03-22 05:46:35 --> Helper loaded: form_helper
DEBUG - 2015-03-22 05:46:35 --> Language Class Initialized
DEBUG - 2015-03-22 05:46:35 --> Total execution time: 5.1803
DEBUG - 2015-03-22 05:46:35 --> Utf8 Class Initialized
DEBUG - 2015-03-22 05:46:35 --> Controller Class Initialized
DEBUG - 2015-03-22 05:46:35 --> Helper loaded: language_helper
DEBUG - 2015-03-22 05:46:35 --> Security Class Initialized
DEBUG - 2015-03-22 05:46:35 --> Loader Class Initialized
DEBUG - 2015-03-22 05:46:35 --> Final output sent to browser
DEBUG - 2015-03-22 05:46:35 --> Helper loaded: language_helper
DEBUG - 2015-03-22 05:46:35 --> URI Class Initialized
DEBUG - 2015-03-22 05:46:35 --> Helper loaded: form_helper
DEBUG - 2015-03-22 05:46:35 --> Loader Class Initialized
DEBUG - 2015-03-22 05:46:35 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 05:46:35 --> Helper loaded: string_helper
DEBUG - 2015-03-22 05:46:35 --> Total execution time: 6.0543
DEBUG - 2015-03-22 05:46:35 --> Helper loaded: form_helper
DEBUG - 2015-03-22 05:46:35 --> Helper loaded: string_helper
DEBUG - 2015-03-22 05:46:35 --> Input Class Initialized
DEBUG - 2015-03-22 05:46:35 --> Router Class Initialized
DEBUG - 2015-03-22 05:46:35 --> Helper loaded: language_helper
DEBUG - 2015-03-22 05:46:35 --> Helper loaded: form_helper
DEBUG - 2015-03-22 05:46:35 --> Helper loaded: url_helper
DEBUG - 2015-03-22 05:46:35 --> URI Class Initialized
DEBUG - 2015-03-22 05:46:36 --> File loaded: application/views//common/listModel.php
DEBUG - 2015-03-22 05:46:36 --> Helper loaded: url_helper
DEBUG - 2015-03-22 05:46:36 --> File loaded: application/views//common/user/listUserPiNo.php
DEBUG - 2015-03-22 05:46:36 --> Final output sent to browser
DEBUG - 2015-03-22 05:46:36 --> Helper loaded: language_helper
DEBUG - 2015-03-22 05:46:36 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 05:46:36 --> Output Class Initialized
DEBUG - 2015-03-22 05:46:36 --> Helper loaded: string_helper
DEBUG - 2015-03-22 05:46:36 --> Helper loaded: language_helper
DEBUG - 2015-03-22 05:46:36 --> Database Driver Class Initialized
DEBUG - 2015-03-22 05:46:36 --> Router Class Initialized
DEBUG - 2015-03-22 05:46:36 --> Final output sent to browser
DEBUG - 2015-03-22 05:46:36 --> Database Driver Class Initialized
DEBUG - 2015-03-22 05:46:36 --> Total execution time: 7.1504
DEBUG - 2015-03-22 05:46:36 --> Helper loaded: string_helper
DEBUG - 2015-03-22 05:46:37 --> Security Class Initialized
DEBUG - 2015-03-22 05:46:37 --> Language Class Initialized
DEBUG - 2015-03-22 05:46:37 --> Helper loaded: url_helper
DEBUG - 2015-03-22 05:46:37 --> Helper loaded: string_helper
DEBUG - 2015-03-22 05:46:37 --> Controller Class Initialized
DEBUG - 2015-03-22 05:46:37 --> Output Class Initialized
DEBUG - 2015-03-22 05:46:37 --> Total execution time: 7.3094
DEBUG - 2015-03-22 05:46:37 --> Controller Class Initialized
DEBUG - 2015-03-22 05:46:37 --> Helper loaded: url_helper
DEBUG - 2015-03-22 05:46:37 --> Input Class Initialized
DEBUG - 2015-03-22 05:46:37 --> Database Driver Class Initialized
DEBUG - 2015-03-22 05:46:37 --> Loader Class Initialized
DEBUG - 2015-03-22 05:46:37 --> Helper loaded: url_helper
DEBUG - 2015-03-22 05:46:37 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 05:46:37 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 05:46:37 --> Security Class Initialized
DEBUG - 2015-03-22 05:46:37 --> Database Driver Class Initialized
DEBUG - 2015-03-22 05:46:37 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 05:46:37 --> Helper loaded: form_helper
DEBUG - 2015-03-22 05:46:37 --> Database Driver Class Initialized
DEBUG - 2015-03-22 05:46:37 --> Controller Class Initialized
DEBUG - 2015-03-22 05:46:37 --> Final output sent to browser
DEBUG - 2015-03-22 05:46:37 --> Final output sent to browser
DEBUG - 2015-03-22 05:46:37 --> Input Class Initialized
DEBUG - 2015-03-22 05:46:37 --> Controller Class Initialized
DEBUG - 2015-03-22 05:46:37 --> Language Class Initialized
DEBUG - 2015-03-22 05:46:37 --> Helper loaded: language_helper
DEBUG - 2015-03-22 05:46:38 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 05:46:38 --> Controller Class Initialized
DEBUG - 2015-03-22 05:46:38 --> Total execution time: 7.2454
DEBUG - 2015-03-22 05:46:38 --> Total execution time: 7.5154
DEBUG - 2015-03-22 05:46:38 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 05:46:38 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 05:46:38 --> Final output sent to browser
DEBUG - 2015-03-22 05:46:38 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 05:46:38 --> Loader Class Initialized
DEBUG - 2015-03-22 05:46:38 --> Helper loaded: string_helper
DEBUG - 2015-03-22 05:46:38 --> Language Class Initialized
DEBUG - 2015-03-22 05:46:38 --> Final output sent to browser
DEBUG - 2015-03-22 05:46:38 --> Total execution time: 6.5984
DEBUG - 2015-03-22 05:46:38 --> Final output sent to browser
DEBUG - 2015-03-22 05:46:38 --> Helper loaded: form_helper
DEBUG - 2015-03-22 05:46:38 --> Helper loaded: url_helper
DEBUG - 2015-03-22 05:46:38 --> Loader Class Initialized
DEBUG - 2015-03-22 05:46:38 --> Total execution time: 6.1103
DEBUG - 2015-03-22 05:46:38 --> Total execution time: 6.8894
DEBUG - 2015-03-22 05:46:38 --> Helper loaded: language_helper
DEBUG - 2015-03-22 05:46:38 --> Database Driver Class Initialized
DEBUG - 2015-03-22 05:46:38 --> Helper loaded: form_helper
DEBUG - 2015-03-22 05:46:39 --> Helper loaded: string_helper
DEBUG - 2015-03-22 05:46:39 --> Controller Class Initialized
DEBUG - 2015-03-22 05:46:39 --> Helper loaded: language_helper
DEBUG - 2015-03-22 05:46:39 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 05:46:39 --> Helper loaded: url_helper
DEBUG - 2015-03-22 05:46:39 --> Final output sent to browser
DEBUG - 2015-03-22 05:46:39 --> Helper loaded: string_helper
DEBUG - 2015-03-22 05:46:39 --> Database Driver Class Initialized
DEBUG - 2015-03-22 05:46:39 --> Total execution time: 6.8784
DEBUG - 2015-03-22 05:46:39 --> Helper loaded: url_helper
DEBUG - 2015-03-22 05:46:39 --> Controller Class Initialized
DEBUG - 2015-03-22 05:46:39 --> Database Driver Class Initialized
DEBUG - 2015-03-22 05:46:39 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 05:46:39 --> Controller Class Initialized
DEBUG - 2015-03-22 05:46:39 --> Final output sent to browser
DEBUG - 2015-03-22 05:46:39 --> File loaded: application/views//common/listCodeImg.php
DEBUG - 2015-03-22 05:46:39 --> Total execution time: 5.8293
DEBUG - 2015-03-22 05:46:39 --> Final output sent to browser
DEBUG - 2015-03-22 05:46:40 --> Total execution time: 5.7023
DEBUG - 2015-03-22 05:46:54 --> Config Class Initialized
DEBUG - 2015-03-22 05:46:54 --> Hooks Class Initialized
DEBUG - 2015-03-22 05:46:54 --> Utf8 Class Initialized
DEBUG - 2015-03-22 05:46:54 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 05:46:54 --> URI Class Initialized
DEBUG - 2015-03-22 05:46:55 --> Router Class Initialized
DEBUG - 2015-03-22 05:46:55 --> Output Class Initialized
DEBUG - 2015-03-22 05:46:55 --> Security Class Initialized
DEBUG - 2015-03-22 05:46:55 --> Input Class Initialized
DEBUG - 2015-03-22 05:46:55 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 05:46:55 --> Language Class Initialized
DEBUG - 2015-03-22 05:46:55 --> Loader Class Initialized
DEBUG - 2015-03-22 05:46:55 --> Helper loaded: form_helper
DEBUG - 2015-03-22 05:46:55 --> Helper loaded: language_helper
DEBUG - 2015-03-22 05:46:55 --> Helper loaded: string_helper
DEBUG - 2015-03-22 05:46:55 --> Helper loaded: url_helper
DEBUG - 2015-03-22 05:46:55 --> Database Driver Class Initialized
DEBUG - 2015-03-22 05:46:55 --> Controller Class Initialized
DEBUG - 2015-03-22 05:46:56 --> File loaded: application/views//admin/order/crtEqpOrder.php
DEBUG - 2015-03-22 05:46:56 --> Final output sent to browser
DEBUG - 2015-03-22 05:46:56 --> Total execution time: 1.4531
DEBUG - 2015-03-22 05:46:56 --> Config Class Initialized
DEBUG - 2015-03-22 05:46:56 --> Hooks Class Initialized
DEBUG - 2015-03-22 05:46:56 --> Utf8 Class Initialized
DEBUG - 2015-03-22 05:46:56 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 05:46:56 --> URI Class Initialized
DEBUG - 2015-03-22 05:46:56 --> Router Class Initialized
DEBUG - 2015-03-22 05:46:56 --> Output Class Initialized
DEBUG - 2015-03-22 05:46:56 --> Security Class Initialized
DEBUG - 2015-03-22 05:46:56 --> Input Class Initialized
DEBUG - 2015-03-22 05:46:56 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 05:46:57 --> Language Class Initialized
DEBUG - 2015-03-22 05:46:57 --> Loader Class Initialized
DEBUG - 2015-03-22 05:46:57 --> Helper loaded: form_helper
DEBUG - 2015-03-22 05:46:57 --> Helper loaded: language_helper
DEBUG - 2015-03-22 05:46:57 --> Helper loaded: string_helper
DEBUG - 2015-03-22 05:46:57 --> Helper loaded: url_helper
DEBUG - 2015-03-22 05:46:57 --> Database Driver Class Initialized
DEBUG - 2015-03-22 05:46:57 --> Controller Class Initialized
DEBUG - 2015-03-22 05:46:57 --> readEqpOrder:SELECT a.*, (select atcd_nm from cm_cd_attr where cd = '00B0' and atcd = a.srl_atcd) txt_srl_atcd, (select atcd_nm from cm_cd_attr where cd = '00D0' and atcd = a.rjt_pkt_tp_atcd) txt_rjt_pkt_tp_atcd, (select atcd_nm from cm_cd_attr where cd = '00E0' and atcd = a.pwr_cab_atcd) txt_pwr_cab_atcd, (select atcd_nm from cm_cd_attr where cd = '00F0' and atcd = a.shipped_by_atcd) txt_shipped_by_atcd, (select atcd_nm from cm_cd_attr where cd = '00F1' and atcd = a.courier_atcd) txt_courier_atcd, (select atcd_nm from cm_cd_attr where cd = '00G0' and atcd = a.payment_atcd) txt_payment_atcd, (select atcd_nm from cm_cd_attr where cd = '00H0' and atcd = a.incoterms_atcd) txt_incoterms_atcd, (select atcd_nm from cm_cd_attr where cd = '00L0' and atcd = a.lcd_color_atcd) txt_lcd_color_atcd, (select atcd_nm from cm_cd_attr where cd = '00M0' and atcd = a.lcd_lang_atcd) txt_lcd_lang_atcd, (select cmpy_nm from om_dealer where dealer_seq = a.dealer_seq) cmpy_nm, (select atcd_nm from cm_cd_attr where cd = '0022' and atcd = a.cntry_atcd) txt_cntry_atcd, if(mdl_cd in ('0007','0009'), concat(mdl_nm, concat('R',lan_L),if(a.lcd_color_atcd='00L00002','C','')), if(mdl_cd in ('3000'), concat(mdl_nm, concat('F',rjt_pkt_tp),''),mdl_nm)) txt_mdl_nm, DATE_FORMAT(a.delivery_dt, '%Y-%m-%d') txt_delivery_dt FROM ( SELECT a.*, b.cntry_atcd, b.dealer_seq, b.worker_seq, b.premium_rate, b.tot_amt, b.cnfm_yn, b.cnfm_dt, b.wrk_tp_atcd, b.udt_dt as order_dt, (CASE WHEN a.rjt_pkt_tp_atcd = ('00D00001') THEN 'A'  WHEN a.rjt_pkt_tp_atcd = ('00D00002') THEN 'I' END) rjt_pkt_tp, (SELECT mdl_nm FROM om_mdl WHERE mdl_cd = a.mdl_cd) mdl_nm, (SELECT if(count(*)>0,'L','') FROM om_ord_eqp_dtl where pi_no = a.pi_no and po_no = a.po_no and om_ord_eqp_dtl.atcd = '00A00001') lan_L FROM om_ord_eqp a, om_ord_inf b WHERE a.pi_no = b.pi_no AND a.pi_no = '150016bg' AND a.po_no = 41 ) a
DEBUG - 2015-03-22 05:46:57 --> SELECT b.cntry_atcd, b.dealer_seq, b.worker_seq, b.premium_rate, b.tot_amt, b.cnfm_yn, b.cnfm_dt, b.wrk_tp_atcd, a.*, (select atcd_nm from cm_cd_attr where cd = '0091' and atcd = a.currency_atch) txt_currency_atcd, (select atcd_nm from cm_cd_attr where cd = '0092' and atcd = a.serial_currency_atch) txt_serial_currency_atch, (select atcd_nm from cm_cd_attr where cd = '00A0' and atcd = a.opt_hw_atcd) txt_opt_hw_atcd, (select atcd_nm from cm_cd_attr where cd = '00C0' and atcd = a.pc_cab_atcd) txt_pc_cab_atcd FROM ( SELECT b.*,(case when b.cd='0091' then b.atcd else '' end) currency_atch,(CASE WHEN b.cd='0091' AND b.atcd_ox='O' THEN b.atcd ELSE '' END) fitness,(CASE WHEN b.cd='0091' THEN b.atcd_ox ELSE '' END) fitness_ox,(case when b.cd='0092' then b.atcd else '' end) serial_currency_atch,(CASE WHEN b.cd='0092' AND b.atcd_ox='O' THEN b.atcd ELSE '' END) srl_fitness,(CASE WHEN b.cd='0092' THEN b.atcd_ox ELSE '' END) srl_fitness_ox,(case when b.cd='00A0' then b.atcd else '' end) opt_hw_atcd,(case when b.cd='00C0' then b.atcd else '' end) pc_cab_atcd FROM om_ord_eqp a, om_ord_eqp_dtl b WHERE a.pi_no = b.pi_no AND a.po_no = b.po_no AND a.pi_no = '150016bg'		AND a.po_no = 41) a, om_ord_inf b WHERE a.pi_no = b.pi_no order by cd, atcd
DEBUG - 2015-03-22 05:46:57 --> INSERT INTO om_sndmail(pi_no, wrk_tp_atcd, sndmail_atcd, auth_grp_cd, sender_email, sender_eng_nm, title, ctnt, crt_dt, crt_uid) VALUES ('150016bg','00700110', '00700111', 'UD', 'kpbaek@localhost', (SELECT dealer_nm FROM om_dealer   WHERE dealer_uid='sofia@ubs-bg.com'), (select concat(atcd_nm,' - ',(select cmpy_nm from om_dealer where dealer_uid='sofia@ubs-bg.com')) from cm_cd_attr where cd = '0071' and atcd = '00700111'), '', now(), 'sofia@ubs-bg.com')
DEBUG - 2015-03-22 05:46:57 --> sql3:INSERT INTO om_sndmail_dtl (sndmail_seq, email_from, email_to, rcpnt_tp_atcd, snd_yn, crt_dt, crt_uid) SELECT 222, 'safe@safeleader.esy.es', (select usr_email from om_user where uid = a.dealer_uid), '00100010' rcpnt_tp_atcd, 'N', now(), 'sofia@ubs-bg.com' FROM om_dealer a, om_ord_inf b WHERE a.dealer_seq = b.dealer_seq AND b.pi_no = '150016bg' UNION SELECT 222, 'kpbaek@localhost', (select team_email from om_team where team_atcd = '00600SL0') email_to, '00100040' rcpnt_tp_atcd, 'N', now(), 'sofia@ubs-bg.com'
DEBUG - 2015-03-22 05:46:58 --> File loaded: application/views//common/crtSndMail.php
DEBUG - 2015-03-22 05:46:58 --> Final output sent to browser
DEBUG - 2015-03-22 05:46:58 --> Total execution time: 1.8361
DEBUG - 2015-03-22 05:46:58 --> Config Class Initialized
DEBUG - 2015-03-22 05:46:58 --> Hooks Class Initialized
DEBUG - 2015-03-22 05:46:58 --> Utf8 Class Initialized
DEBUG - 2015-03-22 05:46:58 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 05:46:58 --> URI Class Initialized
DEBUG - 2015-03-22 05:46:58 --> Router Class Initialized
DEBUG - 2015-03-22 05:46:58 --> Output Class Initialized
DEBUG - 2015-03-22 05:46:58 --> Security Class Initialized
DEBUG - 2015-03-22 05:46:58 --> Input Class Initialized
DEBUG - 2015-03-22 05:46:58 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 05:46:59 --> Language Class Initialized
DEBUG - 2015-03-22 05:46:59 --> Loader Class Initialized
DEBUG - 2015-03-22 05:46:59 --> Helper loaded: form_helper
DEBUG - 2015-03-22 05:46:59 --> Helper loaded: language_helper
DEBUG - 2015-03-22 05:46:59 --> Helper loaded: string_helper
DEBUG - 2015-03-22 05:46:59 --> Helper loaded: url_helper
DEBUG - 2015-03-22 05:46:59 --> Database Driver Class Initialized
DEBUG - 2015-03-22 05:46:59 --> Controller Class Initialized
DEBUG - 2015-03-22 05:46:59 --> sql3:SELECT a.pi_no, a.sndmail_seq, a.wrk_tp_atcd, a.sender_email, a.title, a.ctnt, email_from, email_to, snd_yn, b.snd_no, b.rcpnt_tp_atcd, b.rcpnt_team_atcd,(select usr_nm from om_user where uid = a.sender_email) sender_nm,(select usr_nm from om_user where uid = b.email_to) rcpnt_nm FROM om_sndmail a, om_sndmail_dtl b WHERE a.sndmail_seq = b.sndmail_seq and a.sndmail_seq=222 and snd_yn='N'
DEBUG - 2015-03-22 05:46:59 --> File loaded: application/views//common/sndMailResult.php
DEBUG - 2015-03-22 05:46:59 --> Final output sent to browser
DEBUG - 2015-03-22 05:47:00 --> Total execution time: 1.6951
DEBUG - 2015-03-22 05:50:23 --> Config Class Initialized
DEBUG - 2015-03-22 05:50:23 --> Hooks Class Initialized
DEBUG - 2015-03-22 05:50:23 --> Utf8 Class Initialized
DEBUG - 2015-03-22 05:50:23 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 05:50:23 --> URI Class Initialized
DEBUG - 2015-03-22 05:50:23 --> Router Class Initialized
DEBUG - 2015-03-22 05:50:23 --> Output Class Initialized
DEBUG - 2015-03-22 05:50:23 --> Security Class Initialized
DEBUG - 2015-03-22 05:50:23 --> Input Class Initialized
DEBUG - 2015-03-22 05:50:23 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 05:50:23 --> Language Class Initialized
DEBUG - 2015-03-22 05:50:24 --> Loader Class Initialized
DEBUG - 2015-03-22 05:50:24 --> Helper loaded: form_helper
DEBUG - 2015-03-22 05:50:24 --> Helper loaded: language_helper
DEBUG - 2015-03-22 05:50:24 --> Helper loaded: string_helper
DEBUG - 2015-03-22 05:50:24 --> Helper loaded: url_helper
DEBUG - 2015-03-22 05:50:24 --> Database Driver Class Initialized
DEBUG - 2015-03-22 05:50:24 --> Controller Class Initialized
DEBUG - 2015-03-22 05:50:24 --> File loaded: application/views//admin/order/main.php
DEBUG - 2015-03-22 05:50:24 --> Final output sent to browser
DEBUG - 2015-03-22 05:50:24 --> Total execution time: 1.5721
DEBUG - 2015-03-22 05:50:24 --> Config Class Initialized
DEBUG - 2015-03-22 05:50:25 --> Hooks Class Initialized
DEBUG - 2015-03-22 05:50:25 --> Utf8 Class Initialized
DEBUG - 2015-03-22 05:50:25 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 05:50:25 --> URI Class Initialized
DEBUG - 2015-03-22 05:50:25 --> Router Class Initialized
DEBUG - 2015-03-22 05:50:25 --> Output Class Initialized
DEBUG - 2015-03-22 05:50:25 --> Security Class Initialized
DEBUG - 2015-03-22 05:50:25 --> Input Class Initialized
DEBUG - 2015-03-22 05:50:25 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 05:50:25 --> Language Class Initialized
DEBUG - 2015-03-22 05:50:25 --> Loader Class Initialized
DEBUG - 2015-03-22 05:50:25 --> Helper loaded: form_helper
DEBUG - 2015-03-22 05:50:26 --> Helper loaded: language_helper
DEBUG - 2015-03-22 05:50:26 --> Helper loaded: string_helper
DEBUG - 2015-03-22 05:50:26 --> Helper loaded: url_helper
DEBUG - 2015-03-22 05:50:26 --> Database Driver Class Initialized
DEBUG - 2015-03-22 05:50:26 --> Controller Class Initialized
DEBUG - 2015-03-22 05:50:26 --> File loaded: application/views//admin/order/tab01.php
DEBUG - 2015-03-22 05:50:26 --> Final output sent to browser
DEBUG - 2015-03-22 05:50:26 --> Total execution time: 1.5041
DEBUG - 2015-03-22 05:50:26 --> Config Class Initialized
DEBUG - 2015-03-22 05:50:26 --> Hooks Class Initialized
DEBUG - 2015-03-22 05:50:26 --> Utf8 Class Initialized
DEBUG - 2015-03-22 05:50:27 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 05:50:27 --> URI Class Initialized
DEBUG - 2015-03-22 05:50:27 --> Router Class Initialized
DEBUG - 2015-03-22 05:50:27 --> Output Class Initialized
DEBUG - 2015-03-22 05:50:27 --> Security Class Initialized
DEBUG - 2015-03-22 05:50:27 --> Input Class Initialized
DEBUG - 2015-03-22 05:50:27 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 05:50:27 --> Language Class Initialized
DEBUG - 2015-03-22 05:50:27 --> Loader Class Initialized
DEBUG - 2015-03-22 05:50:27 --> Helper loaded: form_helper
DEBUG - 2015-03-22 05:50:27 --> Helper loaded: language_helper
DEBUG - 2015-03-22 05:50:27 --> Helper loaded: string_helper
DEBUG - 2015-03-22 05:50:28 --> Helper loaded: url_helper
DEBUG - 2015-03-22 05:50:28 --> Database Driver Class Initialized
DEBUG - 2015-03-22 05:50:28 --> Controller Class Initialized
DEBUG - 2015-03-22 05:50:28 --> File loaded: application/views//common/user/viewDealer.php
DEBUG - 2015-03-22 05:50:28 --> Final output sent to browser
DEBUG - 2015-03-22 05:50:28 --> Total execution time: 1.5481
DEBUG - 2015-03-22 05:50:28 --> Config Class Initialized
DEBUG - 2015-03-22 05:50:28 --> Config Class Initialized
DEBUG - 2015-03-22 05:50:28 --> Config Class Initialized
DEBUG - 2015-03-22 05:50:28 --> Config Class Initialized
DEBUG - 2015-03-22 05:50:28 --> Hooks Class Initialized
DEBUG - 2015-03-22 05:50:28 --> Hooks Class Initialized
DEBUG - 2015-03-22 05:50:28 --> Hooks Class Initialized
DEBUG - 2015-03-22 05:50:28 --> Config Class Initialized
DEBUG - 2015-03-22 05:50:28 --> Hooks Class Initialized
DEBUG - 2015-03-22 05:50:28 --> Config Class Initialized
DEBUG - 2015-03-22 05:50:28 --> Utf8 Class Initialized
DEBUG - 2015-03-22 05:50:28 --> Hooks Class Initialized
DEBUG - 2015-03-22 05:50:28 --> Utf8 Class Initialized
DEBUG - 2015-03-22 05:50:28 --> Utf8 Class Initialized
DEBUG - 2015-03-22 05:50:29 --> Hooks Class Initialized
DEBUG - 2015-03-22 05:50:29 --> Utf8 Class Initialized
DEBUG - 2015-03-22 05:50:29 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 05:50:29 --> Utf8 Class Initialized
DEBUG - 2015-03-22 05:50:29 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 05:50:29 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 05:50:29 --> Utf8 Class Initialized
DEBUG - 2015-03-22 05:50:29 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 05:50:29 --> URI Class Initialized
DEBUG - 2015-03-22 05:50:29 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 05:50:29 --> URI Class Initialized
DEBUG - 2015-03-22 05:50:29 --> URI Class Initialized
DEBUG - 2015-03-22 05:50:29 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 05:50:29 --> URI Class Initialized
DEBUG - 2015-03-22 05:50:29 --> Router Class Initialized
DEBUG - 2015-03-22 05:50:29 --> Router Class Initialized
DEBUG - 2015-03-22 05:50:29 --> Router Class Initialized
DEBUG - 2015-03-22 05:50:29 --> URI Class Initialized
DEBUG - 2015-03-22 05:50:29 --> URI Class Initialized
DEBUG - 2015-03-22 05:50:29 --> Router Class Initialized
DEBUG - 2015-03-22 05:50:29 --> Output Class Initialized
DEBUG - 2015-03-22 05:50:29 --> Output Class Initialized
DEBUG - 2015-03-22 05:50:29 --> Output Class Initialized
DEBUG - 2015-03-22 05:50:30 --> Router Class Initialized
DEBUG - 2015-03-22 05:50:30 --> Router Class Initialized
DEBUG - 2015-03-22 05:50:30 --> Output Class Initialized
DEBUG - 2015-03-22 05:50:30 --> Security Class Initialized
DEBUG - 2015-03-22 05:50:30 --> Security Class Initialized
DEBUG - 2015-03-22 05:50:30 --> Security Class Initialized
DEBUG - 2015-03-22 05:50:30 --> Output Class Initialized
DEBUG - 2015-03-22 05:50:30 --> Output Class Initialized
DEBUG - 2015-03-22 05:50:30 --> Security Class Initialized
DEBUG - 2015-03-22 05:50:30 --> Input Class Initialized
DEBUG - 2015-03-22 05:50:30 --> Config Class Initialized
DEBUG - 2015-03-22 05:50:30 --> Config Class Initialized
DEBUG - 2015-03-22 05:50:30 --> Input Class Initialized
DEBUG - 2015-03-22 05:50:30 --> Input Class Initialized
DEBUG - 2015-03-22 05:50:30 --> Security Class Initialized
DEBUG - 2015-03-22 05:50:30 --> Security Class Initialized
DEBUG - 2015-03-22 05:50:30 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 05:50:30 --> Input Class Initialized
DEBUG - 2015-03-22 05:50:30 --> Hooks Class Initialized
DEBUG - 2015-03-22 05:50:30 --> Hooks Class Initialized
DEBUG - 2015-03-22 05:50:30 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 05:50:30 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 05:50:30 --> Input Class Initialized
DEBUG - 2015-03-22 05:50:31 --> Input Class Initialized
DEBUG - 2015-03-22 05:50:31 --> Language Class Initialized
DEBUG - 2015-03-22 05:50:31 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 05:50:31 --> Utf8 Class Initialized
DEBUG - 2015-03-22 05:50:31 --> Utf8 Class Initialized
DEBUG - 2015-03-22 05:50:31 --> Language Class Initialized
DEBUG - 2015-03-22 05:50:31 --> Language Class Initialized
DEBUG - 2015-03-22 05:50:31 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 05:50:31 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 05:50:31 --> Config Class Initialized
DEBUG - 2015-03-22 05:50:31 --> Config Class Initialized
DEBUG - 2015-03-22 05:50:31 --> Loader Class Initialized
DEBUG - 2015-03-22 05:50:31 --> Language Class Initialized
DEBUG - 2015-03-22 05:50:31 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 05:50:31 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 05:50:31 --> Loader Class Initialized
DEBUG - 2015-03-22 05:50:31 --> Config Class Initialized
DEBUG - 2015-03-22 05:50:31 --> Config Class Initialized
DEBUG - 2015-03-22 05:50:31 --> Loader Class Initialized
DEBUG - 2015-03-22 05:50:31 --> Language Class Initialized
DEBUG - 2015-03-22 05:50:31 --> Language Class Initialized
DEBUG - 2015-03-22 05:50:32 --> Helper loaded: form_helper
DEBUG - 2015-03-22 05:50:32 --> Hooks Class Initialized
DEBUG - 2015-03-22 05:50:32 --> Hooks Class Initialized
DEBUG - 2015-03-22 05:50:32 --> Loader Class Initialized
DEBUG - 2015-03-22 05:50:32 --> URI Class Initialized
DEBUG - 2015-03-22 05:50:32 --> Helper loaded: form_helper
DEBUG - 2015-03-22 05:50:32 --> Hooks Class Initialized
DEBUG - 2015-03-22 05:50:32 --> Hooks Class Initialized
DEBUG - 2015-03-22 05:50:32 --> URI Class Initialized
DEBUG - 2015-03-22 05:50:32 --> Helper loaded: form_helper
DEBUG - 2015-03-22 05:50:32 --> Loader Class Initialized
DEBUG - 2015-03-22 05:50:32 --> Loader Class Initialized
DEBUG - 2015-03-22 05:50:32 --> Helper loaded: language_helper
DEBUG - 2015-03-22 05:50:32 --> Router Class Initialized
DEBUG - 2015-03-22 05:50:32 --> Helper loaded: form_helper
DEBUG - 2015-03-22 05:50:32 --> Utf8 Class Initialized
DEBUG - 2015-03-22 05:50:32 --> Utf8 Class Initialized
DEBUG - 2015-03-22 05:50:32 --> Utf8 Class Initialized
DEBUG - 2015-03-22 05:50:32 --> Utf8 Class Initialized
DEBUG - 2015-03-22 05:50:32 --> Helper loaded: language_helper
DEBUG - 2015-03-22 05:50:32 --> Helper loaded: language_helper
DEBUG - 2015-03-22 05:50:32 --> Router Class Initialized
DEBUG - 2015-03-22 05:50:32 --> Helper loaded: form_helper
DEBUG - 2015-03-22 05:50:32 --> Helper loaded: string_helper
DEBUG - 2015-03-22 05:50:33 --> Helper loaded: form_helper
DEBUG - 2015-03-22 05:50:33 --> Output Class Initialized
DEBUG - 2015-03-22 05:50:33 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 05:50:33 --> Helper loaded: language_helper
DEBUG - 2015-03-22 05:50:33 --> Security Class Initialized
DEBUG - 2015-03-22 05:50:33 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 05:50:33 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 05:50:33 --> Input Class Initialized
DEBUG - 2015-03-22 05:50:33 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 05:50:33 --> Helper loaded: string_helper
DEBUG - 2015-03-22 05:50:33 --> Helper loaded: language_helper
DEBUG - 2015-03-22 05:50:33 --> Helper loaded: string_helper
DEBUG - 2015-03-22 05:50:33 --> Output Class Initialized
DEBUG - 2015-03-22 05:50:33 --> Helper loaded: language_helper
DEBUG - 2015-03-22 05:50:33 --> Helper loaded: url_helper
DEBUG - 2015-03-22 05:50:33 --> URI Class Initialized
DEBUG - 2015-03-22 05:50:33 --> Helper loaded: string_helper
DEBUG - 2015-03-22 05:50:33 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 05:50:33 --> URI Class Initialized
DEBUG - 2015-03-22 05:50:33 --> URI Class Initialized
DEBUG - 2015-03-22 05:50:33 --> URI Class Initialized
DEBUG - 2015-03-22 05:50:33 --> Helper loaded: string_helper
DEBUG - 2015-03-22 05:50:33 --> Helper loaded: url_helper
DEBUG - 2015-03-22 05:50:33 --> Helper loaded: url_helper
DEBUG - 2015-03-22 05:50:33 --> Database Driver Class Initialized
DEBUG - 2015-03-22 05:50:34 --> Security Class Initialized
DEBUG - 2015-03-22 05:50:34 --> Helper loaded: string_helper
DEBUG - 2015-03-22 05:50:34 --> Language Class Initialized
DEBUG - 2015-03-22 05:50:34 --> Router Class Initialized
DEBUG - 2015-03-22 05:50:34 --> Router Class Initialized
DEBUG - 2015-03-22 05:50:34 --> Helper loaded: url_helper
DEBUG - 2015-03-22 05:50:34 --> Input Class Initialized
DEBUG - 2015-03-22 05:50:34 --> Loader Class Initialized
DEBUG - 2015-03-22 05:50:34 --> Output Class Initialized
DEBUG - 2015-03-22 05:50:34 --> Output Class Initialized
DEBUG - 2015-03-22 05:50:34 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 05:50:34 --> Helper loaded: form_helper
DEBUG - 2015-03-22 05:50:34 --> Database Driver Class Initialized
DEBUG - 2015-03-22 05:50:34 --> Security Class Initialized
DEBUG - 2015-03-22 05:50:34 --> Helper loaded: url_helper
DEBUG - 2015-03-22 05:50:34 --> Router Class Initialized
DEBUG - 2015-03-22 05:50:34 --> Router Class Initialized
DEBUG - 2015-03-22 05:50:34 --> Database Driver Class Initialized
DEBUG - 2015-03-22 05:50:34 --> Database Driver Class Initialized
DEBUG - 2015-03-22 05:50:34 --> Controller Class Initialized
DEBUG - 2015-03-22 05:50:34 --> Helper loaded: language_helper
DEBUG - 2015-03-22 05:50:34 --> Controller Class Initialized
DEBUG - 2015-03-22 05:50:34 --> Input Class Initialized
DEBUG - 2015-03-22 05:50:34 --> Database Driver Class Initialized
DEBUG - 2015-03-22 05:50:34 --> Output Class Initialized
DEBUG - 2015-03-22 05:50:34 --> Output Class Initialized
DEBUG - 2015-03-22 05:50:34 --> Controller Class Initialized
DEBUG - 2015-03-22 05:50:34 --> Controller Class Initialized
DEBUG - 2015-03-22 05:50:34 --> File loaded: application/views//common/user/listCntry.php
DEBUG - 2015-03-22 05:50:34 --> Helper loaded: string_helper
DEBUG - 2015-03-22 05:50:34 --> Security Class Initialized
DEBUG - 2015-03-22 05:50:34 --> File loaded: application/views//common/listModel.php
DEBUG - 2015-03-22 05:50:34 --> Security Class Initialized
DEBUG - 2015-03-22 05:50:34 --> Final output sent to browser
DEBUG - 2015-03-22 05:50:34 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 05:50:34 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 05:50:34 --> Controller Class Initialized
DEBUG - 2015-03-22 05:50:34 --> Helper loaded: url_helper
DEBUG - 2015-03-22 05:50:34 --> Final output sent to browser
DEBUG - 2015-03-22 05:50:34 --> Input Class Initialized
DEBUG - 2015-03-22 05:50:34 --> Total execution time: 5.6793
DEBUG - 2015-03-22 05:50:34 --> Helper loaded: url_helper
DEBUG - 2015-03-22 05:50:34 --> Language Class Initialized
DEBUG - 2015-03-22 05:50:34 --> Input Class Initialized
DEBUG - 2015-03-22 05:50:34 --> Final output sent to browser
DEBUG - 2015-03-22 05:50:34 --> Total execution time: 5.6953
DEBUG - 2015-03-22 05:50:34 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 05:50:34 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 05:50:34 --> File loaded: application/views//common/user/listUserPiNo.php
DEBUG - 2015-03-22 05:50:34 --> Database Driver Class Initialized
DEBUG - 2015-03-22 05:50:34 --> Config Class Initialized
DEBUG - 2015-03-22 05:50:34 --> Database Driver Class Initialized
DEBUG - 2015-03-22 05:50:34 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 05:50:34 --> Loader Class Initialized
DEBUG - 2015-03-22 05:50:34 --> Total execution time: 5.4003
DEBUG - 2015-03-22 05:50:34 --> Final output sent to browser
DEBUG - 2015-03-22 05:50:34 --> Language Class Initialized
DEBUG - 2015-03-22 05:50:34 --> Final output sent to browser
DEBUG - 2015-03-22 05:50:34 --> Hooks Class Initialized
DEBUG - 2015-03-22 05:50:34 --> Config Class Initialized
DEBUG - 2015-03-22 05:50:34 --> Controller Class Initialized
DEBUG - 2015-03-22 05:50:34 --> Controller Class Initialized
DEBUG - 2015-03-22 05:50:34 --> Security Class Initialized
DEBUG - 2015-03-22 05:50:34 --> Language Class Initialized
DEBUG - 2015-03-22 05:50:34 --> Total execution time: 5.7533
DEBUG - 2015-03-22 05:50:34 --> Utf8 Class Initialized
DEBUG - 2015-03-22 05:50:34 --> Helper loaded: form_helper
DEBUG - 2015-03-22 05:50:34 --> Hooks Class Initialized
DEBUG - 2015-03-22 05:50:34 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 05:50:34 --> Loader Class Initialized
DEBUG - 2015-03-22 05:50:34 --> Language Class Initialized
DEBUG - 2015-03-22 05:50:34 --> Total execution time: 5.7093
DEBUG - 2015-03-22 05:50:34 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 05:50:34 --> Final output sent to browser
DEBUG - 2015-03-22 05:50:34 --> Input Class Initialized
DEBUG - 2015-03-22 05:50:34 --> Helper loaded: language_helper
DEBUG - 2015-03-22 05:50:34 --> Utf8 Class Initialized
DEBUG - 2015-03-22 05:50:34 --> Loader Class Initialized
DEBUG - 2015-03-22 05:50:34 --> Helper loaded: form_helper
DEBUG - 2015-03-22 05:50:34 --> Loader Class Initialized
DEBUG - 2015-03-22 05:50:34 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 05:50:34 --> URI Class Initialized
DEBUG - 2015-03-22 05:50:34 --> Total execution time: 3.7102
DEBUG - 2015-03-22 05:50:34 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 05:50:34 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 05:50:34 --> Helper loaded: string_helper
DEBUG - 2015-03-22 05:50:34 --> Helper loaded: form_helper
DEBUG - 2015-03-22 05:50:34 --> Helper loaded: form_helper
DEBUG - 2015-03-22 05:50:34 --> Helper loaded: language_helper
DEBUG - 2015-03-22 05:50:34 --> Final output sent to browser
DEBUG - 2015-03-22 05:50:34 --> Router Class Initialized
DEBUG - 2015-03-22 05:50:34 --> Language Class Initialized
DEBUG - 2015-03-22 05:50:34 --> Helper loaded: language_helper
DEBUG - 2015-03-22 05:50:34 --> URI Class Initialized
DEBUG - 2015-03-22 05:50:35 --> Helper loaded: url_helper
DEBUG - 2015-03-22 05:50:35 --> Helper loaded: language_helper
DEBUG - 2015-03-22 05:50:35 --> Helper loaded: string_helper
DEBUG - 2015-03-22 05:50:35 --> Total execution time: 6.0503
DEBUG - 2015-03-22 05:50:35 --> Output Class Initialized
DEBUG - 2015-03-22 05:50:35 --> Helper loaded: string_helper
DEBUG - 2015-03-22 05:50:35 --> Router Class Initialized
DEBUG - 2015-03-22 05:50:35 --> Loader Class Initialized
DEBUG - 2015-03-22 05:50:35 --> Database Driver Class Initialized
DEBUG - 2015-03-22 05:50:35 --> Helper loaded: string_helper
DEBUG - 2015-03-22 05:50:35 --> Helper loaded: url_helper
DEBUG - 2015-03-22 05:50:35 --> Security Class Initialized
DEBUG - 2015-03-22 05:50:35 --> Helper loaded: url_helper
DEBUG - 2015-03-22 05:50:35 --> Output Class Initialized
DEBUG - 2015-03-22 05:50:35 --> Helper loaded: form_helper
DEBUG - 2015-03-22 05:50:35 --> Input Class Initialized
DEBUG - 2015-03-22 05:50:35 --> Controller Class Initialized
DEBUG - 2015-03-22 05:50:35 --> Helper loaded: url_helper
DEBUG - 2015-03-22 05:50:35 --> Database Driver Class Initialized
DEBUG - 2015-03-22 05:50:35 --> Database Driver Class Initialized
DEBUG - 2015-03-22 05:50:35 --> Security Class Initialized
DEBUG - 2015-03-22 05:50:36 --> Helper loaded: language_helper
DEBUG - 2015-03-22 05:50:36 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 05:50:36 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 05:50:36 --> Database Driver Class Initialized
DEBUG - 2015-03-22 05:50:36 --> Controller Class Initialized
DEBUG - 2015-03-22 05:50:36 --> Input Class Initialized
DEBUG - 2015-03-22 05:50:36 --> Helper loaded: string_helper
DEBUG - 2015-03-22 05:50:36 --> Controller Class Initialized
DEBUG - 2015-03-22 05:50:36 --> Language Class Initialized
DEBUG - 2015-03-22 05:50:36 --> Final output sent to browser
DEBUG - 2015-03-22 05:50:36 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 05:50:36 --> Controller Class Initialized
DEBUG - 2015-03-22 05:50:36 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 05:50:36 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 05:50:36 --> Helper loaded: url_helper
DEBUG - 2015-03-22 05:50:36 --> Loader Class Initialized
DEBUG - 2015-03-22 05:50:36 --> Total execution time: 4.9033
DEBUG - 2015-03-22 05:50:36 --> Final output sent to browser
DEBUG - 2015-03-22 05:50:36 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 05:50:36 --> Final output sent to browser
DEBUG - 2015-03-22 05:50:36 --> Language Class Initialized
DEBUG - 2015-03-22 05:50:36 --> Database Driver Class Initialized
DEBUG - 2015-03-22 05:50:36 --> Helper loaded: form_helper
DEBUG - 2015-03-22 05:50:36 --> Total execution time: 6.0553
DEBUG - 2015-03-22 05:50:36 --> Final output sent to browser
DEBUG - 2015-03-22 05:50:37 --> Total execution time: 5.0073
DEBUG - 2015-03-22 05:50:37 --> Loader Class Initialized
DEBUG - 2015-03-22 05:50:37 --> Controller Class Initialized
DEBUG - 2015-03-22 05:50:37 --> Total execution time: 5.3213
DEBUG - 2015-03-22 05:50:37 --> Helper loaded: language_helper
DEBUG - 2015-03-22 05:50:37 --> Helper loaded: form_helper
DEBUG - 2015-03-22 05:50:37 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 05:50:37 --> Helper loaded: string_helper
DEBUG - 2015-03-22 05:50:37 --> Helper loaded: language_helper
DEBUG - 2015-03-22 05:50:37 --> Final output sent to browser
DEBUG - 2015-03-22 05:50:37 --> Helper loaded: url_helper
DEBUG - 2015-03-22 05:50:37 --> Helper loaded: string_helper
DEBUG - 2015-03-22 05:50:37 --> Total execution time: 5.9633
DEBUG - 2015-03-22 05:50:37 --> Database Driver Class Initialized
DEBUG - 2015-03-22 05:50:37 --> Helper loaded: url_helper
DEBUG - 2015-03-22 05:50:37 --> Controller Class Initialized
DEBUG - 2015-03-22 05:50:37 --> Database Driver Class Initialized
DEBUG - 2015-03-22 05:50:37 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 05:50:37 --> Controller Class Initialized
DEBUG - 2015-03-22 05:50:37 --> Final output sent to browser
DEBUG - 2015-03-22 05:50:38 --> File loaded: application/views//common/listCodeImg.php
DEBUG - 2015-03-22 05:50:38 --> Total execution time: 3.7252
DEBUG - 2015-03-22 05:50:38 --> Final output sent to browser
DEBUG - 2015-03-22 05:50:38 --> Total execution time: 3.8202
DEBUG - 2015-03-22 05:50:47 --> Config Class Initialized
DEBUG - 2015-03-22 05:50:47 --> Hooks Class Initialized
DEBUG - 2015-03-22 05:50:47 --> Utf8 Class Initialized
DEBUG - 2015-03-22 05:50:47 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 05:50:47 --> URI Class Initialized
DEBUG - 2015-03-22 05:50:47 --> Router Class Initialized
DEBUG - 2015-03-22 05:50:47 --> Output Class Initialized
DEBUG - 2015-03-22 05:50:47 --> Security Class Initialized
DEBUG - 2015-03-22 05:50:47 --> Input Class Initialized
DEBUG - 2015-03-22 05:50:47 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 05:50:47 --> Language Class Initialized
DEBUG - 2015-03-22 05:50:48 --> Loader Class Initialized
DEBUG - 2015-03-22 05:50:48 --> Helper loaded: form_helper
DEBUG - 2015-03-22 05:50:48 --> Helper loaded: language_helper
DEBUG - 2015-03-22 05:50:48 --> Helper loaded: string_helper
DEBUG - 2015-03-22 05:50:48 --> Helper loaded: url_helper
DEBUG - 2015-03-22 05:50:48 --> Database Driver Class Initialized
DEBUG - 2015-03-22 05:50:48 --> Controller Class Initialized
DEBUG - 2015-03-22 05:50:48 --> File loaded: application/views//admin/order/crtEqpOrder.php
DEBUG - 2015-03-22 05:50:48 --> Final output sent to browser
DEBUG - 2015-03-22 05:50:48 --> Total execution time: 1.6581
DEBUG - 2015-03-22 05:50:48 --> Config Class Initialized
DEBUG - 2015-03-22 05:50:48 --> Hooks Class Initialized
DEBUG - 2015-03-22 05:50:49 --> Utf8 Class Initialized
DEBUG - 2015-03-22 05:50:49 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 05:50:49 --> URI Class Initialized
DEBUG - 2015-03-22 05:50:49 --> Router Class Initialized
DEBUG - 2015-03-22 05:50:49 --> Output Class Initialized
DEBUG - 2015-03-22 05:50:49 --> Security Class Initialized
DEBUG - 2015-03-22 05:50:49 --> Input Class Initialized
DEBUG - 2015-03-22 05:50:49 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 05:50:49 --> Language Class Initialized
DEBUG - 2015-03-22 05:50:49 --> Loader Class Initialized
DEBUG - 2015-03-22 05:50:49 --> Helper loaded: form_helper
DEBUG - 2015-03-22 05:50:49 --> Helper loaded: language_helper
DEBUG - 2015-03-22 05:50:50 --> Helper loaded: string_helper
DEBUG - 2015-03-22 05:50:50 --> Helper loaded: url_helper
DEBUG - 2015-03-22 05:50:50 --> Database Driver Class Initialized
DEBUG - 2015-03-22 05:50:50 --> Controller Class Initialized
DEBUG - 2015-03-22 05:50:50 --> readEqpOrder:SELECT a.*, (select atcd_nm from cm_cd_attr where cd = '00B0' and atcd = a.srl_atcd) txt_srl_atcd, (select atcd_nm from cm_cd_attr where cd = '00D0' and atcd = a.rjt_pkt_tp_atcd) txt_rjt_pkt_tp_atcd, (select atcd_nm from cm_cd_attr where cd = '00E0' and atcd = a.pwr_cab_atcd) txt_pwr_cab_atcd, (select atcd_nm from cm_cd_attr where cd = '00F0' and atcd = a.shipped_by_atcd) txt_shipped_by_atcd, (select atcd_nm from cm_cd_attr where cd = '00F1' and atcd = a.courier_atcd) txt_courier_atcd, (select atcd_nm from cm_cd_attr where cd = '00G0' and atcd = a.payment_atcd) txt_payment_atcd, (select atcd_nm from cm_cd_attr where cd = '00H0' and atcd = a.incoterms_atcd) txt_incoterms_atcd, (select atcd_nm from cm_cd_attr where cd = '00L0' and atcd = a.lcd_color_atcd) txt_lcd_color_atcd, (select atcd_nm from cm_cd_attr where cd = '00M0' and atcd = a.lcd_lang_atcd) txt_lcd_lang_atcd, (select cmpy_nm from om_dealer where dealer_seq = a.dealer_seq) cmpy_nm, (select atcd_nm from cm_cd_attr where cd = '0022' and atcd = a.cntry_atcd) txt_cntry_atcd, if(mdl_cd in ('0007','0009'), concat(mdl_nm, concat('R',lan_L),if(a.lcd_color_atcd='00L00002','C','')), if(mdl_cd in ('3000'), concat(mdl_nm, concat('F',rjt_pkt_tp),''),mdl_nm)) txt_mdl_nm, DATE_FORMAT(a.delivery_dt, '%Y-%m-%d') txt_delivery_dt FROM ( SELECT a.*, b.cntry_atcd, b.dealer_seq, b.worker_seq, b.premium_rate, b.tot_amt, b.cnfm_yn, b.cnfm_dt, b.wrk_tp_atcd, b.udt_dt as order_dt, (CASE WHEN a.rjt_pkt_tp_atcd = ('00D00001') THEN 'A'  WHEN a.rjt_pkt_tp_atcd = ('00D00002') THEN 'I' END) rjt_pkt_tp, (SELECT mdl_nm FROM om_mdl WHERE mdl_cd = a.mdl_cd) mdl_nm, (SELECT if(count(*)>0,'L','') FROM om_ord_eqp_dtl where pi_no = a.pi_no and po_no = a.po_no and om_ord_eqp_dtl.atcd = '00A00001') lan_L FROM om_ord_eqp a, om_ord_inf b WHERE a.pi_no = b.pi_no AND a.pi_no = '150017bg' AND a.po_no = 42 ) a
DEBUG - 2015-03-22 05:50:50 --> SELECT b.cntry_atcd, b.dealer_seq, b.worker_seq, b.premium_rate, b.tot_amt, b.cnfm_yn, b.cnfm_dt, b.wrk_tp_atcd, a.*, (select atcd_nm from cm_cd_attr where cd = '0091' and atcd = a.currency_atch) txt_currency_atcd, (select atcd_nm from cm_cd_attr where cd = '0092' and atcd = a.serial_currency_atch) txt_serial_currency_atch, (select atcd_nm from cm_cd_attr where cd = '00A0' and atcd = a.opt_hw_atcd) txt_opt_hw_atcd, (select atcd_nm from cm_cd_attr where cd = '00C0' and atcd = a.pc_cab_atcd) txt_pc_cab_atcd FROM ( SELECT b.*,(case when b.cd='0091' then b.atcd else '' end) currency_atch,(CASE WHEN b.cd='0091' AND b.atcd_ox='O' THEN b.atcd ELSE '' END) fitness,(CASE WHEN b.cd='0091' THEN b.atcd_ox ELSE '' END) fitness_ox,(case when b.cd='0092' then b.atcd else '' end) serial_currency_atch,(CASE WHEN b.cd='0092' AND b.atcd_ox='O' THEN b.atcd ELSE '' END) srl_fitness,(CASE WHEN b.cd='0092' THEN b.atcd_ox ELSE '' END) srl_fitness_ox,(case when b.cd='00A0' then b.atcd else '' end) opt_hw_atcd,(case when b.cd='00C0' then b.atcd else '' end) pc_cab_atcd FROM om_ord_eqp a, om_ord_eqp_dtl b WHERE a.pi_no = b.pi_no AND a.po_no = b.po_no AND a.pi_no = '150017bg'		AND a.po_no = 42) a, om_ord_inf b WHERE a.pi_no = b.pi_no order by cd, atcd
DEBUG - 2015-03-22 05:50:50 --> INSERT INTO om_sndmail(pi_no, wrk_tp_atcd, sndmail_atcd, auth_grp_cd, sender_email, sender_eng_nm, title, ctnt, crt_dt, crt_uid) VALUES ('150017bg','00700110', '00700111', 'UD', 'kpbaek@localhost', (SELECT dealer_nm FROM om_dealer   WHERE dealer_uid='sofia@ubs-bg.com'), (select concat(atcd_nm,' - ',(select cmpy_nm from om_dealer where dealer_uid='sofia@ubs-bg.com')) from cm_cd_attr where cd = '0071' and atcd = '00700111'), '', now(), 'sofia@ubs-bg.com')
DEBUG - 2015-03-22 05:50:50 --> sql3:INSERT INTO om_sndmail_dtl (sndmail_seq, email_from, email_to, rcpnt_tp_atcd, snd_yn, crt_dt, crt_uid) SELECT 223, 'safe@safeleader.esy.es', (select usr_email from om_user where uid = a.dealer_uid), '00100010' rcpnt_tp_atcd, 'N', now(), 'sofia@ubs-bg.com' FROM om_dealer a, om_ord_inf b WHERE a.dealer_seq = b.dealer_seq AND b.pi_no = '150017bg' UNION SELECT 223, 'kpbaek@localhost', (select team_email from om_team where team_atcd = '00600SL0') email_to, '00100040' rcpnt_tp_atcd, 'N', now(), 'sofia@ubs-bg.com'
DEBUG - 2015-03-22 05:50:50 --> File loaded: application/views//common/crtSndMail.php
DEBUG - 2015-03-22 05:50:50 --> Final output sent to browser
DEBUG - 2015-03-22 05:50:50 --> Total execution time: 1.9101
DEBUG - 2015-03-22 05:50:50 --> Config Class Initialized
DEBUG - 2015-03-22 05:50:51 --> Hooks Class Initialized
DEBUG - 2015-03-22 05:50:51 --> Utf8 Class Initialized
DEBUG - 2015-03-22 05:50:51 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 05:50:51 --> URI Class Initialized
DEBUG - 2015-03-22 05:50:51 --> Router Class Initialized
DEBUG - 2015-03-22 05:50:51 --> Output Class Initialized
DEBUG - 2015-03-22 05:50:51 --> Security Class Initialized
DEBUG - 2015-03-22 05:50:51 --> Input Class Initialized
DEBUG - 2015-03-22 05:50:51 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 05:50:51 --> Language Class Initialized
DEBUG - 2015-03-22 05:50:51 --> Loader Class Initialized
DEBUG - 2015-03-22 05:50:52 --> Helper loaded: form_helper
DEBUG - 2015-03-22 05:50:52 --> Helper loaded: language_helper
DEBUG - 2015-03-22 05:50:52 --> Helper loaded: string_helper
DEBUG - 2015-03-22 05:50:52 --> Helper loaded: url_helper
DEBUG - 2015-03-22 05:50:52 --> Database Driver Class Initialized
DEBUG - 2015-03-22 05:50:52 --> Controller Class Initialized
DEBUG - 2015-03-22 05:50:52 --> sql3:SELECT a.pi_no, a.sndmail_seq, a.wrk_tp_atcd, a.sender_email, a.title, a.ctnt, email_from, email_to, snd_yn, b.snd_no, b.rcpnt_tp_atcd, b.rcpnt_team_atcd,(select usr_nm from om_user where uid = a.sender_email) sender_nm,(select usr_nm from om_user where uid = b.email_to) rcpnt_nm FROM om_sndmail a, om_sndmail_dtl b WHERE a.sndmail_seq = b.sndmail_seq and a.sndmail_seq=223 and snd_yn='N'
DEBUG - 2015-03-22 05:50:52 --> File loaded: application/views//common/sndMailResult.php
DEBUG - 2015-03-22 05:50:52 --> Final output sent to browser
DEBUG - 2015-03-22 05:50:52 --> Total execution time: 1.7851
DEBUG - 2015-03-22 06:00:19 --> Config Class Initialized
DEBUG - 2015-03-22 06:00:19 --> Hooks Class Initialized
DEBUG - 2015-03-22 06:00:19 --> Utf8 Class Initialized
DEBUG - 2015-03-22 06:00:19 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 06:00:20 --> URI Class Initialized
DEBUG - 2015-03-22 06:00:20 --> Router Class Initialized
DEBUG - 2015-03-22 06:00:20 --> Output Class Initialized
DEBUG - 2015-03-22 06:00:20 --> Security Class Initialized
DEBUG - 2015-03-22 06:00:20 --> Input Class Initialized
DEBUG - 2015-03-22 06:00:20 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 06:00:20 --> Language Class Initialized
DEBUG - 2015-03-22 06:00:20 --> Loader Class Initialized
DEBUG - 2015-03-22 06:00:20 --> Helper loaded: form_helper
DEBUG - 2015-03-22 06:00:20 --> Helper loaded: language_helper
DEBUG - 2015-03-22 06:00:20 --> Helper loaded: string_helper
DEBUG - 2015-03-22 06:00:20 --> Helper loaded: url_helper
DEBUG - 2015-03-22 06:00:21 --> Database Driver Class Initialized
DEBUG - 2015-03-22 06:00:21 --> Controller Class Initialized
DEBUG - 2015-03-22 06:00:21 --> File loaded: application/views//admin/order/main.php
DEBUG - 2015-03-22 06:00:21 --> Final output sent to browser
DEBUG - 2015-03-22 06:00:21 --> Total execution time: 1.6441
DEBUG - 2015-03-22 06:00:21 --> Config Class Initialized
DEBUG - 2015-03-22 06:00:21 --> Hooks Class Initialized
DEBUG - 2015-03-22 06:00:21 --> Utf8 Class Initialized
DEBUG - 2015-03-22 06:00:22 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 06:00:22 --> URI Class Initialized
DEBUG - 2015-03-22 06:00:22 --> Router Class Initialized
DEBUG - 2015-03-22 06:00:22 --> Output Class Initialized
DEBUG - 2015-03-22 06:00:22 --> Security Class Initialized
DEBUG - 2015-03-22 06:00:22 --> Input Class Initialized
DEBUG - 2015-03-22 06:00:22 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 06:00:22 --> Language Class Initialized
DEBUG - 2015-03-22 06:00:22 --> Loader Class Initialized
DEBUG - 2015-03-22 06:00:22 --> Helper loaded: form_helper
DEBUG - 2015-03-22 06:00:22 --> Helper loaded: language_helper
DEBUG - 2015-03-22 06:00:22 --> Helper loaded: string_helper
DEBUG - 2015-03-22 06:00:23 --> Helper loaded: url_helper
DEBUG - 2015-03-22 06:00:23 --> Database Driver Class Initialized
DEBUG - 2015-03-22 06:00:23 --> Controller Class Initialized
DEBUG - 2015-03-22 06:00:23 --> File loaded: application/views//admin/order/tab01.php
DEBUG - 2015-03-22 06:00:23 --> Final output sent to browser
DEBUG - 2015-03-22 06:00:23 --> Total execution time: 1.6081
DEBUG - 2015-03-22 06:00:23 --> Config Class Initialized
DEBUG - 2015-03-22 06:00:23 --> Hooks Class Initialized
DEBUG - 2015-03-22 06:00:23 --> Utf8 Class Initialized
DEBUG - 2015-03-22 06:00:23 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 06:00:23 --> URI Class Initialized
DEBUG - 2015-03-22 06:00:24 --> Router Class Initialized
DEBUG - 2015-03-22 06:00:24 --> Output Class Initialized
DEBUG - 2015-03-22 06:00:24 --> Security Class Initialized
DEBUG - 2015-03-22 06:00:24 --> Input Class Initialized
DEBUG - 2015-03-22 06:00:24 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 06:00:24 --> Language Class Initialized
DEBUG - 2015-03-22 06:00:24 --> Loader Class Initialized
DEBUG - 2015-03-22 06:00:24 --> Helper loaded: form_helper
DEBUG - 2015-03-22 06:00:24 --> Helper loaded: language_helper
DEBUG - 2015-03-22 06:00:24 --> Helper loaded: string_helper
DEBUG - 2015-03-22 06:00:24 --> Helper loaded: url_helper
DEBUG - 2015-03-22 06:00:24 --> Database Driver Class Initialized
DEBUG - 2015-03-22 06:00:25 --> Controller Class Initialized
DEBUG - 2015-03-22 06:00:25 --> File loaded: application/views//common/user/viewDealer.php
DEBUG - 2015-03-22 06:00:25 --> Final output sent to browser
DEBUG - 2015-03-22 06:00:25 --> Total execution time: 1.6011
DEBUG - 2015-03-22 06:00:25 --> Config Class Initialized
DEBUG - 2015-03-22 06:00:25 --> Config Class Initialized
DEBUG - 2015-03-22 06:00:25 --> Config Class Initialized
DEBUG - 2015-03-22 06:00:25 --> Hooks Class Initialized
DEBUG - 2015-03-22 06:00:25 --> Config Class Initialized
DEBUG - 2015-03-22 06:00:25 --> Hooks Class Initialized
DEBUG - 2015-03-22 06:00:25 --> Hooks Class Initialized
DEBUG - 2015-03-22 06:00:25 --> Utf8 Class Initialized
DEBUG - 2015-03-22 06:00:25 --> Utf8 Class Initialized
DEBUG - 2015-03-22 06:00:25 --> Config Class Initialized
DEBUG - 2015-03-22 06:00:25 --> Config Class Initialized
DEBUG - 2015-03-22 06:00:25 --> Hooks Class Initialized
DEBUG - 2015-03-22 06:00:25 --> Utf8 Class Initialized
DEBUG - 2015-03-22 06:00:25 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 06:00:25 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 06:00:25 --> Hooks Class Initialized
DEBUG - 2015-03-22 06:00:26 --> Hooks Class Initialized
DEBUG - 2015-03-22 06:00:26 --> Utf8 Class Initialized
DEBUG - 2015-03-22 06:00:26 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 06:00:26 --> URI Class Initialized
DEBUG - 2015-03-22 06:00:26 --> Utf8 Class Initialized
DEBUG - 2015-03-22 06:00:26 --> URI Class Initialized
DEBUG - 2015-03-22 06:00:26 --> Utf8 Class Initialized
DEBUG - 2015-03-22 06:00:26 --> Router Class Initialized
DEBUG - 2015-03-22 06:00:26 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 06:00:26 --> URI Class Initialized
DEBUG - 2015-03-22 06:00:26 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 06:00:26 --> Router Class Initialized
DEBUG - 2015-03-22 06:00:26 --> Config Class Initialized
DEBUG - 2015-03-22 06:00:26 --> Config Class Initialized
DEBUG - 2015-03-22 06:00:26 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 06:00:26 --> Output Class Initialized
DEBUG - 2015-03-22 06:00:26 --> Hooks Class Initialized
DEBUG - 2015-03-22 06:00:26 --> URI Class Initialized
DEBUG - 2015-03-22 06:00:26 --> Output Class Initialized
DEBUG - 2015-03-22 06:00:26 --> Router Class Initialized
DEBUG - 2015-03-22 06:00:26 --> URI Class Initialized
DEBUG - 2015-03-22 06:00:26 --> Hooks Class Initialized
DEBUG - 2015-03-22 06:00:27 --> URI Class Initialized
DEBUG - 2015-03-22 06:00:27 --> Utf8 Class Initialized
DEBUG - 2015-03-22 06:00:27 --> Security Class Initialized
DEBUG - 2015-03-22 06:00:27 --> Router Class Initialized
DEBUG - 2015-03-22 06:00:27 --> Security Class Initialized
DEBUG - 2015-03-22 06:00:27 --> Output Class Initialized
DEBUG - 2015-03-22 06:00:27 --> Router Class Initialized
DEBUG - 2015-03-22 06:00:27 --> Config Class Initialized
DEBUG - 2015-03-22 06:00:27 --> Utf8 Class Initialized
DEBUG - 2015-03-22 06:00:27 --> Router Class Initialized
DEBUG - 2015-03-22 06:00:27 --> Config Class Initialized
DEBUG - 2015-03-22 06:00:27 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 06:00:27 --> Input Class Initialized
DEBUG - 2015-03-22 06:00:27 --> Security Class Initialized
DEBUG - 2015-03-22 06:00:27 --> Output Class Initialized
DEBUG - 2015-03-22 06:00:27 --> Input Class Initialized
DEBUG - 2015-03-22 06:00:27 --> Output Class Initialized
DEBUG - 2015-03-22 06:00:27 --> Output Class Initialized
DEBUG - 2015-03-22 06:00:27 --> Hooks Class Initialized
DEBUG - 2015-03-22 06:00:27 --> Config Class Initialized
DEBUG - 2015-03-22 06:00:27 --> Config Class Initialized
DEBUG - 2015-03-22 06:00:27 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 06:00:27 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 06:00:27 --> Hooks Class Initialized
DEBUG - 2015-03-22 06:00:28 --> URI Class Initialized
DEBUG - 2015-03-22 06:00:28 --> Security Class Initialized
DEBUG - 2015-03-22 06:00:28 --> Input Class Initialized
DEBUG - 2015-03-22 06:00:28 --> Security Class Initialized
DEBUG - 2015-03-22 06:00:28 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 06:00:28 --> Security Class Initialized
DEBUG - 2015-03-22 06:00:28 --> Utf8 Class Initialized
DEBUG - 2015-03-22 06:00:28 --> URI Class Initialized
DEBUG - 2015-03-22 06:00:28 --> Router Class Initialized
DEBUG - 2015-03-22 06:00:28 --> Input Class Initialized
DEBUG - 2015-03-22 06:00:28 --> Hooks Class Initialized
DEBUG - 2015-03-22 06:00:28 --> Hooks Class Initialized
DEBUG - 2015-03-22 06:00:28 --> Language Class Initialized
DEBUG - 2015-03-22 06:00:28 --> Utf8 Class Initialized
DEBUG - 2015-03-22 06:00:28 --> Input Class Initialized
DEBUG - 2015-03-22 06:00:28 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 06:00:28 --> Language Class Initialized
DEBUG - 2015-03-22 06:00:28 --> Output Class Initialized
DEBUG - 2015-03-22 06:00:28 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 06:00:28 --> Input Class Initialized
DEBUG - 2015-03-22 06:00:28 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 06:00:28 --> Router Class Initialized
DEBUG - 2015-03-22 06:00:29 --> Utf8 Class Initialized
DEBUG - 2015-03-22 06:00:29 --> Language Class Initialized
DEBUG - 2015-03-22 06:00:29 --> Utf8 Class Initialized
DEBUG - 2015-03-22 06:00:29 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 06:00:29 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 06:00:29 --> Language Class Initialized
DEBUG - 2015-03-22 06:00:29 --> Loader Class Initialized
DEBUG - 2015-03-22 06:00:29 --> Loader Class Initialized
DEBUG - 2015-03-22 06:00:29 --> Security Class Initialized
DEBUG - 2015-03-22 06:00:29 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 06:00:29 --> URI Class Initialized
DEBUG - 2015-03-22 06:00:29 --> Output Class Initialized
DEBUG - 2015-03-22 06:00:29 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 06:00:29 --> Loader Class Initialized
DEBUG - 2015-03-22 06:00:29 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 06:00:29 --> URI Class Initialized
DEBUG - 2015-03-22 06:00:29 --> Language Class Initialized
DEBUG - 2015-03-22 06:00:29 --> Loader Class Initialized
DEBUG - 2015-03-22 06:00:29 --> Helper loaded: form_helper
DEBUG - 2015-03-22 06:00:29 --> Input Class Initialized
DEBUG - 2015-03-22 06:00:29 --> Helper loaded: form_helper
DEBUG - 2015-03-22 06:00:29 --> Language Class Initialized
DEBUG - 2015-03-22 06:00:29 --> Router Class Initialized
DEBUG - 2015-03-22 06:00:29 --> URI Class Initialized
DEBUG - 2015-03-22 06:00:29 --> Security Class Initialized
DEBUG - 2015-03-22 06:00:30 --> Router Class Initialized
DEBUG - 2015-03-22 06:00:30 --> URI Class Initialized
DEBUG - 2015-03-22 06:00:30 --> Helper loaded: form_helper
DEBUG - 2015-03-22 06:00:30 --> Loader Class Initialized
DEBUG - 2015-03-22 06:00:30 --> Helper loaded: form_helper
DEBUG - 2015-03-22 06:00:31 --> Helper loaded: language_helper
DEBUG - 2015-03-22 06:00:31 --> Loader Class Initialized
DEBUG - 2015-03-22 06:00:31 --> Helper loaded: language_helper
DEBUG - 2015-03-22 06:00:31 --> Input Class Initialized
DEBUG - 2015-03-22 06:00:31 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 06:00:31 --> Output Class Initialized
DEBUG - 2015-03-22 06:00:31 --> Router Class Initialized
DEBUG - 2015-03-22 06:00:31 --> Security Class Initialized
DEBUG - 2015-03-22 06:00:31 --> Router Class Initialized
DEBUG - 2015-03-22 06:00:31 --> Helper loaded: language_helper
DEBUG - 2015-03-22 06:00:31 --> Helper loaded: form_helper
DEBUG - 2015-03-22 06:00:31 --> Helper loaded: language_helper
DEBUG - 2015-03-22 06:00:31 --> Helper loaded: string_helper
DEBUG - 2015-03-22 06:00:31 --> Helper loaded: form_helper
DEBUG - 2015-03-22 06:00:31 --> Helper loaded: string_helper
DEBUG - 2015-03-22 06:00:31 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 06:00:31 --> Output Class Initialized
DEBUG - 2015-03-22 06:00:31 --> Output Class Initialized
DEBUG - 2015-03-22 06:00:31 --> Input Class Initialized
DEBUG - 2015-03-22 06:00:31 --> Output Class Initialized
DEBUG - 2015-03-22 06:00:31 --> Language Class Initialized
DEBUG - 2015-03-22 06:00:31 --> Helper loaded: language_helper
DEBUG - 2015-03-22 06:00:31 --> Helper loaded: string_helper
DEBUG - 2015-03-22 06:00:31 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 06:00:31 --> Loader Class Initialized
DEBUG - 2015-03-22 06:00:31 --> Helper loaded: language_helper
DEBUG - 2015-03-22 06:00:31 --> Helper loaded: url_helper
DEBUG - 2015-03-22 06:00:31 --> Helper loaded: form_helper
DEBUG - 2015-03-22 06:00:31 --> Database Driver Class Initialized
DEBUG - 2015-03-22 06:00:31 --> Helper loaded: language_helper
DEBUG - 2015-03-22 06:00:31 --> Helper loaded: string_helper
DEBUG - 2015-03-22 06:00:31 --> Language Class Initialized
DEBUG - 2015-03-22 06:00:31 --> Security Class Initialized
DEBUG - 2015-03-22 06:00:31 --> Controller Class Initialized
DEBUG - 2015-03-22 06:00:31 --> Security Class Initialized
DEBUG - 2015-03-22 06:00:31 --> Helper loaded: url_helper
DEBUG - 2015-03-22 06:00:31 --> Security Class Initialized
DEBUG - 2015-03-22 06:00:31 --> Helper loaded: string_helper
DEBUG - 2015-03-22 06:00:32 --> Language Class Initialized
DEBUG - 2015-03-22 06:00:32 --> Helper loaded: string_helper
DEBUG - 2015-03-22 06:00:32 --> Helper loaded: url_helper
DEBUG - 2015-03-22 06:00:32 --> Helper loaded: url_helper
DEBUG - 2015-03-22 06:00:32 --> Input Class Initialized
DEBUG - 2015-03-22 06:00:32 --> Helper loaded: string_helper
DEBUG - 2015-03-22 06:00:32 --> Loader Class Initialized
DEBUG - 2015-03-22 06:00:32 --> File loaded: application/views//common/listModel.php
DEBUG - 2015-03-22 06:00:32 --> Input Class Initialized
DEBUG - 2015-03-22 06:00:32 --> Database Driver Class Initialized
DEBUG - 2015-03-22 06:00:32 --> Input Class Initialized
DEBUG - 2015-03-22 06:00:32 --> Helper loaded: url_helper
DEBUG - 2015-03-22 06:00:32 --> Loader Class Initialized
DEBUG - 2015-03-22 06:00:32 --> Database Driver Class Initialized
DEBUG - 2015-03-22 06:00:32 --> Helper loaded: url_helper
DEBUG - 2015-03-22 06:00:32 --> Database Driver Class Initialized
DEBUG - 2015-03-22 06:00:32 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 06:00:32 --> Helper loaded: url_helper
DEBUG - 2015-03-22 06:00:32 --> Final output sent to browser
DEBUG - 2015-03-22 06:00:32 --> Helper loaded: form_helper
DEBUG - 2015-03-22 06:00:32 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 06:00:32 --> Database Driver Class Initialized
DEBUG - 2015-03-22 06:00:32 --> Controller Class Initialized
DEBUG - 2015-03-22 06:00:32 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 06:00:32 --> Helper loaded: form_helper
DEBUG - 2015-03-22 06:00:33 --> Controller Class Initialized
DEBUG - 2015-03-22 06:00:33 --> Database Driver Class Initialized
DEBUG - 2015-03-22 06:00:33 --> Controller Class Initialized
DEBUG - 2015-03-22 06:00:33 --> Language Class Initialized
DEBUG - 2015-03-22 06:00:33 --> Total execution time: 7.3024
DEBUG - 2015-03-22 06:00:33 --> Database Driver Class Initialized
DEBUG - 2015-03-22 06:00:33 --> Language Class Initialized
DEBUG - 2015-03-22 06:00:33 --> Helper loaded: language_helper
DEBUG - 2015-03-22 06:00:33 --> Controller Class Initialized
DEBUG - 2015-03-22 06:00:33 --> File loaded: application/views//common/user/listCntry.php
DEBUG - 2015-03-22 06:00:33 --> Language Class Initialized
DEBUG - 2015-03-22 06:00:33 --> Helper loaded: language_helper
DEBUG - 2015-03-22 06:00:33 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 06:00:33 --> Loader Class Initialized
DEBUG - 2015-03-22 06:00:33 --> Controller Class Initialized
DEBUG - 2015-03-22 06:00:33 --> Loader Class Initialized
DEBUG - 2015-03-22 06:00:33 --> Config Class Initialized
DEBUG - 2015-03-22 06:00:33 --> Controller Class Initialized
DEBUG - 2015-03-22 06:00:33 --> Helper loaded: string_helper
DEBUG - 2015-03-22 06:00:34 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 06:00:34 --> Final output sent to browser
DEBUG - 2015-03-22 06:00:34 --> Helper loaded: form_helper
DEBUG - 2015-03-22 06:00:34 --> Final output sent to browser
DEBUG - 2015-03-22 06:00:34 --> Helper loaded: string_helper
DEBUG - 2015-03-22 06:00:34 --> Loader Class Initialized
DEBUG - 2015-03-22 06:00:34 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 06:00:34 --> Helper loaded: form_helper
DEBUG - 2015-03-22 06:00:34 --> Hooks Class Initialized
DEBUG - 2015-03-22 06:00:34 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 06:00:34 --> Total execution time: 8.4235
DEBUG - 2015-03-22 06:00:34 --> Helper loaded: language_helper
DEBUG - 2015-03-22 06:00:34 --> Helper loaded: url_helper
DEBUG - 2015-03-22 06:00:34 --> Final output sent to browser
DEBUG - 2015-03-22 06:00:34 --> Final output sent to browser
DEBUG - 2015-03-22 06:00:34 --> Helper loaded: url_helper
DEBUG - 2015-03-22 06:00:34 --> Total execution time: 8.8295
DEBUG - 2015-03-22 06:00:34 --> Helper loaded: form_helper
DEBUG - 2015-03-22 06:00:34 --> Utf8 Class Initialized
DEBUG - 2015-03-22 06:00:34 --> Helper loaded: language_helper
DEBUG - 2015-03-22 06:00:35 --> Final output sent to browser
DEBUG - 2015-03-22 06:00:35 --> Helper loaded: string_helper
DEBUG - 2015-03-22 06:00:35 --> Database Driver Class Initialized
DEBUG - 2015-03-22 06:00:35 --> Total execution time: 8.8715
DEBUG - 2015-03-22 06:00:35 --> Config Class Initialized
DEBUG - 2015-03-22 06:00:35 --> Database Driver Class Initialized
DEBUG - 2015-03-22 06:00:35 --> File loaded: application/views//common/user/listUserPiNo.php
DEBUG - 2015-03-22 06:00:35 --> Helper loaded: language_helper
DEBUG - 2015-03-22 06:00:35 --> Total execution time: 9.1545
DEBUG - 2015-03-22 06:00:35 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 06:00:35 --> Helper loaded: string_helper
DEBUG - 2015-03-22 06:00:35 --> Total execution time: 8.4545
DEBUG - 2015-03-22 06:00:35 --> Helper loaded: url_helper
DEBUG - 2015-03-22 06:00:35 --> Controller Class Initialized
DEBUG - 2015-03-22 06:00:35 --> Hooks Class Initialized
DEBUG - 2015-03-22 06:00:35 --> Controller Class Initialized
DEBUG - 2015-03-22 06:00:35 --> Helper loaded: string_helper
DEBUG - 2015-03-22 06:00:35 --> Final output sent to browser
DEBUG - 2015-03-22 06:00:35 --> URI Class Initialized
DEBUG - 2015-03-22 06:00:35 --> Helper loaded: url_helper
DEBUG - 2015-03-22 06:00:36 --> Database Driver Class Initialized
DEBUG - 2015-03-22 06:00:36 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 06:00:36 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 06:00:36 --> Utf8 Class Initialized
DEBUG - 2015-03-22 06:00:36 --> Helper loaded: url_helper
DEBUG - 2015-03-22 06:00:36 --> Total execution time: 10.4506
DEBUG - 2015-03-22 06:00:36 --> Router Class Initialized
DEBUG - 2015-03-22 06:00:36 --> Final output sent to browser
DEBUG - 2015-03-22 06:00:36 --> Database Driver Class Initialized
DEBUG - 2015-03-22 06:00:36 --> Final output sent to browser
DEBUG - 2015-03-22 06:00:36 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 06:00:36 --> Controller Class Initialized
DEBUG - 2015-03-22 06:00:36 --> Database Driver Class Initialized
DEBUG - 2015-03-22 06:00:36 --> Output Class Initialized
DEBUG - 2015-03-22 06:00:36 --> Total execution time: 9.7546
DEBUG - 2015-03-22 06:00:36 --> Total execution time: 9.0605
DEBUG - 2015-03-22 06:00:36 --> URI Class Initialized
DEBUG - 2015-03-22 06:00:36 --> Controller Class Initialized
DEBUG - 2015-03-22 06:00:36 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 06:00:36 --> Controller Class Initialized
DEBUG - 2015-03-22 06:00:36 --> Security Class Initialized
DEBUG - 2015-03-22 06:00:36 --> Router Class Initialized
DEBUG - 2015-03-22 06:00:36 --> Final output sent to browser
DEBUG - 2015-03-22 06:00:37 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 06:00:37 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 06:00:37 --> Input Class Initialized
DEBUG - 2015-03-22 06:00:37 --> Final output sent to browser
DEBUG - 2015-03-22 06:00:37 --> Output Class Initialized
DEBUG - 2015-03-22 06:00:37 --> Total execution time: 9.1535
DEBUG - 2015-03-22 06:00:37 --> Final output sent to browser
DEBUG - 2015-03-22 06:00:37 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 06:00:37 --> Total execution time: 9.4905
DEBUG - 2015-03-22 06:00:37 --> Language Class Initialized
DEBUG - 2015-03-22 06:00:37 --> Security Class Initialized
DEBUG - 2015-03-22 06:00:37 --> Total execution time: 9.9056
DEBUG - 2015-03-22 06:00:37 --> Loader Class Initialized
DEBUG - 2015-03-22 06:00:37 --> Input Class Initialized
DEBUG - 2015-03-22 06:00:37 --> Helper loaded: form_helper
DEBUG - 2015-03-22 06:00:37 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 06:00:37 --> Helper loaded: language_helper
DEBUG - 2015-03-22 06:00:37 --> Language Class Initialized
DEBUG - 2015-03-22 06:00:37 --> Helper loaded: string_helper
DEBUG - 2015-03-22 06:00:37 --> Loader Class Initialized
DEBUG - 2015-03-22 06:00:37 --> Helper loaded: url_helper
DEBUG - 2015-03-22 06:00:38 --> Helper loaded: form_helper
DEBUG - 2015-03-22 06:00:38 --> Database Driver Class Initialized
DEBUG - 2015-03-22 06:00:38 --> Helper loaded: language_helper
DEBUG - 2015-03-22 06:00:38 --> Controller Class Initialized
DEBUG - 2015-03-22 06:00:38 --> Helper loaded: string_helper
DEBUG - 2015-03-22 06:00:38 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 06:00:38 --> Helper loaded: url_helper
DEBUG - 2015-03-22 06:00:38 --> Final output sent to browser
DEBUG - 2015-03-22 06:00:38 --> Database Driver Class Initialized
DEBUG - 2015-03-22 06:00:38 --> Total execution time: 4.4603
DEBUG - 2015-03-22 06:00:38 --> Controller Class Initialized
DEBUG - 2015-03-22 06:00:38 --> File loaded: application/views//common/listCodeImg.php
DEBUG - 2015-03-22 06:00:38 --> Final output sent to browser
DEBUG - 2015-03-22 06:00:38 --> Total execution time: 3.5712
DEBUG - 2015-03-22 06:00:50 --> Config Class Initialized
DEBUG - 2015-03-22 06:00:50 --> Hooks Class Initialized
DEBUG - 2015-03-22 06:00:50 --> Utf8 Class Initialized
DEBUG - 2015-03-22 06:00:50 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 06:00:50 --> URI Class Initialized
DEBUG - 2015-03-22 06:00:50 --> Router Class Initialized
DEBUG - 2015-03-22 06:00:50 --> Output Class Initialized
DEBUG - 2015-03-22 06:00:50 --> Security Class Initialized
DEBUG - 2015-03-22 06:00:51 --> Input Class Initialized
DEBUG - 2015-03-22 06:00:51 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 06:00:51 --> Language Class Initialized
DEBUG - 2015-03-22 06:00:51 --> Loader Class Initialized
DEBUG - 2015-03-22 06:00:51 --> Helper loaded: form_helper
DEBUG - 2015-03-22 06:00:51 --> Helper loaded: language_helper
DEBUG - 2015-03-22 06:00:51 --> Helper loaded: string_helper
DEBUG - 2015-03-22 06:00:51 --> Helper loaded: url_helper
DEBUG - 2015-03-22 06:00:51 --> Database Driver Class Initialized
DEBUG - 2015-03-22 06:00:51 --> Controller Class Initialized
DEBUG - 2015-03-22 06:00:51 --> File loaded: application/views//admin/order/crtEqpOrder.php
DEBUG - 2015-03-22 06:00:51 --> Final output sent to browser
DEBUG - 2015-03-22 06:00:52 --> Total execution time: 1.6941
DEBUG - 2015-03-22 06:00:52 --> Config Class Initialized
DEBUG - 2015-03-22 06:00:52 --> Hooks Class Initialized
DEBUG - 2015-03-22 06:00:52 --> Utf8 Class Initialized
DEBUG - 2015-03-22 06:00:52 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 06:00:52 --> URI Class Initialized
DEBUG - 2015-03-22 06:00:52 --> Router Class Initialized
DEBUG - 2015-03-22 06:00:52 --> Output Class Initialized
DEBUG - 2015-03-22 06:00:52 --> Security Class Initialized
DEBUG - 2015-03-22 06:00:52 --> Input Class Initialized
DEBUG - 2015-03-22 06:00:52 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 06:00:53 --> Language Class Initialized
DEBUG - 2015-03-22 06:00:53 --> Loader Class Initialized
DEBUG - 2015-03-22 06:00:53 --> Helper loaded: form_helper
DEBUG - 2015-03-22 06:00:53 --> Helper loaded: language_helper
DEBUG - 2015-03-22 06:00:53 --> Helper loaded: string_helper
DEBUG - 2015-03-22 06:00:53 --> Helper loaded: url_helper
DEBUG - 2015-03-22 06:00:53 --> Database Driver Class Initialized
DEBUG - 2015-03-22 06:00:53 --> Controller Class Initialized
DEBUG - 2015-03-22 06:00:53 --> readEqpOrder:SELECT a.*, (select atcd_nm from cm_cd_attr where cd = '00B0' and atcd = a.srl_atcd) txt_srl_atcd, (select atcd_nm from cm_cd_attr where cd = '00D0' and atcd = a.rjt_pkt_tp_atcd) txt_rjt_pkt_tp_atcd, (select atcd_nm from cm_cd_attr where cd = '00E0' and atcd = a.pwr_cab_atcd) txt_pwr_cab_atcd, (select atcd_nm from cm_cd_attr where cd = '00F0' and atcd = a.shipped_by_atcd) txt_shipped_by_atcd, (select atcd_nm from cm_cd_attr where cd = '00F1' and atcd = a.courier_atcd) txt_courier_atcd, (select atcd_nm from cm_cd_attr where cd = '00G0' and atcd = a.payment_atcd) txt_payment_atcd, (select atcd_nm from cm_cd_attr where cd = '00H0' and atcd = a.incoterms_atcd) txt_incoterms_atcd, (select atcd_nm from cm_cd_attr where cd = '00L0' and atcd = a.lcd_color_atcd) txt_lcd_color_atcd, (select atcd_nm from cm_cd_attr where cd = '00M0' and atcd = a.lcd_lang_atcd) txt_lcd_lang_atcd, (select cmpy_nm from om_dealer where dealer_seq = a.dealer_seq) cmpy_nm, (select atcd_nm from cm_cd_attr where cd = '0022' and atcd = a.cntry_atcd) txt_cntry_atcd, if(mdl_cd in ('0007','0009'), concat(mdl_nm, concat('R',lan_L),if(a.lcd_color_atcd='00L00002','C','')), if(mdl_cd in ('3000'), concat(mdl_nm, concat('F',rjt_pkt_tp),''),mdl_nm)) txt_mdl_nm, DATE_FORMAT(a.delivery_dt, '%Y-%m-%d') txt_delivery_dt FROM ( SELECT a.*, b.cntry_atcd, b.dealer_seq, b.worker_seq, b.premium_rate, b.tot_amt, b.cnfm_yn, b.cnfm_dt, b.wrk_tp_atcd, b.udt_dt as order_dt, (CASE WHEN a.rjt_pkt_tp_atcd = ('00D00001') THEN 'A'  WHEN a.rjt_pkt_tp_atcd = ('00D00002') THEN 'I' END) rjt_pkt_tp, (SELECT mdl_nm FROM om_mdl WHERE mdl_cd = a.mdl_cd) mdl_nm, (SELECT if(count(*)>0,'L','') FROM om_ord_eqp_dtl where pi_no = a.pi_no and po_no = a.po_no and om_ord_eqp_dtl.atcd = '00A00001') lan_L FROM om_ord_eqp a, om_ord_inf b WHERE a.pi_no = b.pi_no AND a.pi_no = '150018bg' AND a.po_no = 43 ) a
DEBUG - 2015-03-22 06:00:53 --> SELECT b.cntry_atcd, b.dealer_seq, b.worker_seq, b.premium_rate, b.tot_amt, b.cnfm_yn, b.cnfm_dt, b.wrk_tp_atcd, a.*, (select atcd_nm from cm_cd_attr where cd = '0091' and atcd = a.currency_atch) txt_currency_atcd, (select atcd_nm from cm_cd_attr where cd = '0092' and atcd = a.serial_currency_atch) txt_serial_currency_atch, (select atcd_nm from cm_cd_attr where cd = '00A0' and atcd = a.opt_hw_atcd) txt_opt_hw_atcd, (select atcd_nm from cm_cd_attr where cd = '00C0' and atcd = a.pc_cab_atcd) txt_pc_cab_atcd FROM ( SELECT b.*,(case when b.cd='0091' then b.atcd else '' end) currency_atch,(CASE WHEN b.cd='0091' AND b.atcd_ox='O' THEN b.atcd ELSE '' END) fitness,(CASE WHEN b.cd='0091' THEN b.atcd_ox ELSE '' END) fitness_ox,(case when b.cd='0092' then b.atcd else '' end) serial_currency_atch,(CASE WHEN b.cd='0092' AND b.atcd_ox='O' THEN b.atcd ELSE '' END) srl_fitness,(CASE WHEN b.cd='0092' THEN b.atcd_ox ELSE '' END) srl_fitness_ox,(case when b.cd='00A0' then b.atcd else '' end) opt_hw_atcd,(case when b.cd='00C0' then b.atcd else '' end) pc_cab_atcd FROM om_ord_eqp a, om_ord_eqp_dtl b WHERE a.pi_no = b.pi_no AND a.po_no = b.po_no AND a.pi_no = '150018bg'		AND a.po_no = 43) a, om_ord_inf b WHERE a.pi_no = b.pi_no order by cd, atcd
DEBUG - 2015-03-22 06:00:53 --> INSERT INTO om_sndmail(pi_no, wrk_tp_atcd, sndmail_atcd, auth_grp_cd, sender_email, sender_eng_nm, title, ctnt, crt_dt, crt_uid) VALUES ('150018bg','00700110', '00700111', 'UD', 'kpbaek@localhost', (SELECT dealer_nm FROM om_dealer   WHERE dealer_uid='sofia@ubs-bg.com'), (select concat(atcd_nm,' - ',(select cmpy_nm from om_dealer where dealer_uid='sofia@ubs-bg.com')) from cm_cd_attr where cd = '0071' and atcd = '00700111'), '', now(), 'sofia@ubs-bg.com')
DEBUG - 2015-03-22 06:00:54 --> sql3:INSERT INTO om_sndmail_dtl (sndmail_seq, email_from, email_to, rcpnt_tp_atcd, snd_yn, crt_dt, crt_uid) SELECT 224, 'safe@safeleader.esy.es', (select usr_email from om_user where uid = a.dealer_uid), '00100010' rcpnt_tp_atcd, 'N', now(), 'sofia@ubs-bg.com' FROM om_dealer a, om_ord_inf b WHERE a.dealer_seq = b.dealer_seq AND b.pi_no = '150018bg' UNION SELECT 224, 'kpbaek@localhost', (select team_email from om_team where team_atcd = '00600SL0') email_to, '00100040' rcpnt_tp_atcd, 'N', now(), 'sofia@ubs-bg.com'
DEBUG - 2015-03-22 06:00:54 --> File loaded: application/views//common/crtSndMail.php
DEBUG - 2015-03-22 06:00:54 --> Final output sent to browser
DEBUG - 2015-03-22 06:00:54 --> Total execution time: 2.0211
DEBUG - 2015-03-22 06:00:54 --> Config Class Initialized
DEBUG - 2015-03-22 06:00:54 --> Hooks Class Initialized
DEBUG - 2015-03-22 06:00:54 --> Utf8 Class Initialized
DEBUG - 2015-03-22 06:00:54 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 06:00:54 --> URI Class Initialized
DEBUG - 2015-03-22 06:00:54 --> Router Class Initialized
DEBUG - 2015-03-22 06:00:54 --> Output Class Initialized
DEBUG - 2015-03-22 06:00:55 --> Security Class Initialized
DEBUG - 2015-03-22 06:00:55 --> Input Class Initialized
DEBUG - 2015-03-22 06:00:55 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 06:00:55 --> Language Class Initialized
DEBUG - 2015-03-22 06:00:55 --> Loader Class Initialized
DEBUG - 2015-03-22 06:00:55 --> Helper loaded: form_helper
DEBUG - 2015-03-22 06:00:55 --> Helper loaded: language_helper
DEBUG - 2015-03-22 06:00:55 --> Helper loaded: string_helper
DEBUG - 2015-03-22 06:00:55 --> Helper loaded: url_helper
DEBUG - 2015-03-22 06:00:55 --> Database Driver Class Initialized
DEBUG - 2015-03-22 06:00:55 --> Controller Class Initialized
DEBUG - 2015-03-22 06:00:55 --> sql3:SELECT a.pi_no, a.sndmail_seq, a.wrk_tp_atcd, a.sender_email, a.title, a.ctnt, email_from, email_to, snd_yn, b.snd_no, b.rcpnt_tp_atcd, b.rcpnt_team_atcd,(select usr_nm from om_user where uid = a.sender_email) sender_nm,(select usr_nm from om_user where uid = b.email_to) rcpnt_nm FROM om_sndmail a, om_sndmail_dtl b WHERE a.sndmail_seq = b.sndmail_seq and a.sndmail_seq=224 and snd_yn='N'
DEBUG - 2015-03-22 06:00:56 --> File loaded: application/views//common/sndMailResult.php
DEBUG - 2015-03-22 06:00:56 --> Final output sent to browser
DEBUG - 2015-03-22 06:00:56 --> Total execution time: 1.8321
DEBUG - 2015-03-22 06:03:41 --> Config Class Initialized
DEBUG - 2015-03-22 06:03:41 --> Hooks Class Initialized
DEBUG - 2015-03-22 06:03:41 --> Utf8 Class Initialized
DEBUG - 2015-03-22 06:03:42 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 06:03:42 --> URI Class Initialized
DEBUG - 2015-03-22 06:03:42 --> Router Class Initialized
DEBUG - 2015-03-22 06:03:42 --> Output Class Initialized
DEBUG - 2015-03-22 06:03:42 --> Security Class Initialized
DEBUG - 2015-03-22 06:03:42 --> Input Class Initialized
DEBUG - 2015-03-22 06:03:42 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 06:03:42 --> Language Class Initialized
DEBUG - 2015-03-22 06:03:42 --> Loader Class Initialized
DEBUG - 2015-03-22 06:03:42 --> Helper loaded: form_helper
DEBUG - 2015-03-22 06:03:42 --> Helper loaded: language_helper
DEBUG - 2015-03-22 06:03:43 --> Helper loaded: string_helper
DEBUG - 2015-03-22 06:03:43 --> Helper loaded: url_helper
DEBUG - 2015-03-22 06:03:43 --> Database Driver Class Initialized
DEBUG - 2015-03-22 06:03:43 --> Controller Class Initialized
DEBUG - 2015-03-22 06:03:43 --> File loaded: application/views//admin/order/main.php
DEBUG - 2015-03-22 06:03:43 --> Final output sent to browser
DEBUG - 2015-03-22 06:03:43 --> Total execution time: 1.7351
DEBUG - 2015-03-22 06:03:43 --> Config Class Initialized
DEBUG - 2015-03-22 06:03:43 --> Hooks Class Initialized
DEBUG - 2015-03-22 06:03:43 --> Utf8 Class Initialized
DEBUG - 2015-03-22 06:03:44 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 06:03:44 --> URI Class Initialized
DEBUG - 2015-03-22 06:03:44 --> Router Class Initialized
DEBUG - 2015-03-22 06:03:44 --> Output Class Initialized
DEBUG - 2015-03-22 06:03:44 --> Security Class Initialized
DEBUG - 2015-03-22 06:03:44 --> Input Class Initialized
DEBUG - 2015-03-22 06:03:44 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 06:03:44 --> Language Class Initialized
DEBUG - 2015-03-22 06:03:44 --> Loader Class Initialized
DEBUG - 2015-03-22 06:03:44 --> Helper loaded: form_helper
DEBUG - 2015-03-22 06:03:44 --> Helper loaded: language_helper
DEBUG - 2015-03-22 06:03:45 --> Helper loaded: string_helper
DEBUG - 2015-03-22 06:03:45 --> Helper loaded: url_helper
DEBUG - 2015-03-22 06:03:45 --> Database Driver Class Initialized
DEBUG - 2015-03-22 06:03:45 --> Controller Class Initialized
DEBUG - 2015-03-22 06:03:45 --> File loaded: application/views//admin/order/tab01.php
DEBUG - 2015-03-22 06:03:45 --> Final output sent to browser
DEBUG - 2015-03-22 06:03:45 --> Total execution time: 1.6821
DEBUG - 2015-03-22 06:03:45 --> Config Class Initialized
DEBUG - 2015-03-22 06:03:45 --> Hooks Class Initialized
DEBUG - 2015-03-22 06:03:45 --> Utf8 Class Initialized
DEBUG - 2015-03-22 06:03:46 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 06:03:46 --> URI Class Initialized
DEBUG - 2015-03-22 06:03:46 --> Router Class Initialized
DEBUG - 2015-03-22 06:03:46 --> Output Class Initialized
DEBUG - 2015-03-22 06:03:46 --> Security Class Initialized
DEBUG - 2015-03-22 06:03:46 --> Input Class Initialized
DEBUG - 2015-03-22 06:03:46 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 06:03:46 --> Language Class Initialized
DEBUG - 2015-03-22 06:03:46 --> Loader Class Initialized
DEBUG - 2015-03-22 06:03:46 --> Helper loaded: form_helper
DEBUG - 2015-03-22 06:03:46 --> Helper loaded: language_helper
DEBUG - 2015-03-22 06:03:47 --> Helper loaded: string_helper
DEBUG - 2015-03-22 06:03:47 --> Helper loaded: url_helper
DEBUG - 2015-03-22 06:03:47 --> Database Driver Class Initialized
DEBUG - 2015-03-22 06:03:47 --> Controller Class Initialized
DEBUG - 2015-03-22 06:03:47 --> File loaded: application/views//common/user/viewDealer.php
DEBUG - 2015-03-22 06:03:47 --> Final output sent to browser
DEBUG - 2015-03-22 06:03:47 --> Total execution time: 1.7081
DEBUG - 2015-03-22 06:03:47 --> Config Class Initialized
DEBUG - 2015-03-22 06:03:47 --> Config Class Initialized
DEBUG - 2015-03-22 06:03:47 --> Config Class Initialized
DEBUG - 2015-03-22 06:03:47 --> Config Class Initialized
DEBUG - 2015-03-22 06:03:47 --> Hooks Class Initialized
DEBUG - 2015-03-22 06:03:47 --> Config Class Initialized
DEBUG - 2015-03-22 06:03:47 --> Config Class Initialized
DEBUG - 2015-03-22 06:03:47 --> Hooks Class Initialized
DEBUG - 2015-03-22 06:03:47 --> Hooks Class Initialized
DEBUG - 2015-03-22 06:03:47 --> Hooks Class Initialized
DEBUG - 2015-03-22 06:03:47 --> Hooks Class Initialized
DEBUG - 2015-03-22 06:03:48 --> Hooks Class Initialized
DEBUG - 2015-03-22 06:03:48 --> Utf8 Class Initialized
DEBUG - 2015-03-22 06:03:48 --> Utf8 Class Initialized
DEBUG - 2015-03-22 06:03:48 --> Utf8 Class Initialized
DEBUG - 2015-03-22 06:03:48 --> Utf8 Class Initialized
DEBUG - 2015-03-22 06:03:48 --> Utf8 Class Initialized
DEBUG - 2015-03-22 06:03:48 --> Utf8 Class Initialized
DEBUG - 2015-03-22 06:03:48 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 06:03:48 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 06:03:48 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 06:03:48 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 06:03:48 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 06:03:48 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 06:03:48 --> URI Class Initialized
DEBUG - 2015-03-22 06:03:48 --> URI Class Initialized
DEBUG - 2015-03-22 06:03:48 --> URI Class Initialized
DEBUG - 2015-03-22 06:03:48 --> Config Class Initialized
DEBUG - 2015-03-22 06:03:48 --> Config Class Initialized
DEBUG - 2015-03-22 06:03:48 --> URI Class Initialized
DEBUG - 2015-03-22 06:03:48 --> URI Class Initialized
DEBUG - 2015-03-22 06:03:48 --> URI Class Initialized
DEBUG - 2015-03-22 06:03:48 --> Router Class Initialized
DEBUG - 2015-03-22 06:03:49 --> Router Class Initialized
DEBUG - 2015-03-22 06:03:49 --> Router Class Initialized
DEBUG - 2015-03-22 06:03:49 --> Hooks Class Initialized
DEBUG - 2015-03-22 06:03:49 --> Hooks Class Initialized
DEBUG - 2015-03-22 06:03:49 --> Router Class Initialized
DEBUG - 2015-03-22 06:03:49 --> Router Class Initialized
DEBUG - 2015-03-22 06:03:49 --> Router Class Initialized
DEBUG - 2015-03-22 06:03:49 --> Output Class Initialized
DEBUG - 2015-03-22 06:03:49 --> Output Class Initialized
DEBUG - 2015-03-22 06:03:49 --> Output Class Initialized
DEBUG - 2015-03-22 06:03:49 --> Config Class Initialized
DEBUG - 2015-03-22 06:03:49 --> Config Class Initialized
DEBUG - 2015-03-22 06:03:49 --> Utf8 Class Initialized
DEBUG - 2015-03-22 06:03:49 --> Utf8 Class Initialized
DEBUG - 2015-03-22 06:03:49 --> Output Class Initialized
DEBUG - 2015-03-22 06:03:49 --> Output Class Initialized
DEBUG - 2015-03-22 06:03:49 --> Output Class Initialized
DEBUG - 2015-03-22 06:03:49 --> Security Class Initialized
DEBUG - 2015-03-22 06:03:49 --> Security Class Initialized
DEBUG - 2015-03-22 06:03:49 --> Security Class Initialized
DEBUG - 2015-03-22 06:03:49 --> Hooks Class Initialized
DEBUG - 2015-03-22 06:03:49 --> Config Class Initialized
DEBUG - 2015-03-22 06:03:49 --> Config Class Initialized
DEBUG - 2015-03-22 06:03:50 --> Hooks Class Initialized
DEBUG - 2015-03-22 06:03:50 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 06:03:50 --> Security Class Initialized
DEBUG - 2015-03-22 06:03:50 --> Security Class Initialized
DEBUG - 2015-03-22 06:03:50 --> Security Class Initialized
DEBUG - 2015-03-22 06:03:50 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 06:03:50 --> Input Class Initialized
DEBUG - 2015-03-22 06:03:50 --> Input Class Initialized
DEBUG - 2015-03-22 06:03:50 --> Input Class Initialized
DEBUG - 2015-03-22 06:03:50 --> Utf8 Class Initialized
DEBUG - 2015-03-22 06:03:50 --> Hooks Class Initialized
DEBUG - 2015-03-22 06:03:50 --> Hooks Class Initialized
DEBUG - 2015-03-22 06:03:50 --> Utf8 Class Initialized
DEBUG - 2015-03-22 06:03:50 --> URI Class Initialized
DEBUG - 2015-03-22 06:03:50 --> Input Class Initialized
DEBUG - 2015-03-22 06:03:50 --> Input Class Initialized
DEBUG - 2015-03-22 06:03:50 --> Input Class Initialized
DEBUG - 2015-03-22 06:03:50 --> URI Class Initialized
DEBUG - 2015-03-22 06:03:50 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 06:03:50 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 06:03:50 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 06:03:50 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 06:03:51 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 06:03:51 --> Utf8 Class Initialized
DEBUG - 2015-03-22 06:03:51 --> Utf8 Class Initialized
DEBUG - 2015-03-22 06:03:51 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 06:03:51 --> Router Class Initialized
DEBUG - 2015-03-22 06:03:51 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 06:03:51 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 06:03:51 --> Language Class Initialized
DEBUG - 2015-03-22 06:03:51 --> Language Class Initialized
DEBUG - 2015-03-22 06:03:51 --> Router Class Initialized
DEBUG - 2015-03-22 06:03:51 --> Language Class Initialized
DEBUG - 2015-03-22 06:03:51 --> URI Class Initialized
DEBUG - 2015-03-22 06:03:51 --> URI Class Initialized
DEBUG - 2015-03-22 06:03:51 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 06:03:51 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 06:03:51 --> Language Class Initialized
DEBUG - 2015-03-22 06:03:51 --> Output Class Initialized
DEBUG - 2015-03-22 06:03:51 --> Language Class Initialized
DEBUG - 2015-03-22 06:03:51 --> Language Class Initialized
DEBUG - 2015-03-22 06:03:52 --> Loader Class Initialized
DEBUG - 2015-03-22 06:03:52 --> Loader Class Initialized
DEBUG - 2015-03-22 06:03:52 --> Output Class Initialized
DEBUG - 2015-03-22 06:03:52 --> Loader Class Initialized
DEBUG - 2015-03-22 06:03:52 --> Router Class Initialized
DEBUG - 2015-03-22 06:03:52 --> Router Class Initialized
DEBUG - 2015-03-22 06:03:52 --> URI Class Initialized
DEBUG - 2015-03-22 06:03:52 --> URI Class Initialized
DEBUG - 2015-03-22 06:03:52 --> Security Class Initialized
DEBUG - 2015-03-22 06:03:52 --> Loader Class Initialized
DEBUG - 2015-03-22 06:03:52 --> Loader Class Initialized
DEBUG - 2015-03-22 06:03:52 --> Loader Class Initialized
DEBUG - 2015-03-22 06:03:52 --> Helper loaded: form_helper
DEBUG - 2015-03-22 06:03:52 --> Helper loaded: form_helper
DEBUG - 2015-03-22 06:03:52 --> Security Class Initialized
DEBUG - 2015-03-22 06:03:52 --> Helper loaded: form_helper
DEBUG - 2015-03-22 06:03:52 --> Output Class Initialized
DEBUG - 2015-03-22 06:03:53 --> Input Class Initialized
DEBUG - 2015-03-22 06:03:53 --> Output Class Initialized
DEBUG - 2015-03-22 06:03:53 --> Router Class Initialized
DEBUG - 2015-03-22 06:03:53 --> Router Class Initialized
DEBUG - 2015-03-22 06:03:53 --> Helper loaded: language_helper
DEBUG - 2015-03-22 06:03:53 --> Helper loaded: form_helper
DEBUG - 2015-03-22 06:03:53 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 06:03:53 --> Helper loaded: string_helper
DEBUG - 2015-03-22 06:03:53 --> Helper loaded: form_helper
DEBUG - 2015-03-22 06:03:53 --> Helper loaded: form_helper
DEBUG - 2015-03-22 06:03:53 --> Output Class Initialized
DEBUG - 2015-03-22 06:03:53 --> Helper loaded: language_helper
DEBUG - 2015-03-22 06:03:53 --> Input Class Initialized
DEBUG - 2015-03-22 06:03:53 --> Helper loaded: language_helper
DEBUG - 2015-03-22 06:03:53 --> Security Class Initialized
DEBUG - 2015-03-22 06:03:53 --> Helper loaded: url_helper
DEBUG - 2015-03-22 06:03:53 --> Helper loaded: language_helper
DEBUG - 2015-03-22 06:03:53 --> Helper loaded: language_helper
DEBUG - 2015-03-22 06:03:53 --> Security Class Initialized
DEBUG - 2015-03-22 06:03:53 --> Helper loaded: string_helper
DEBUG - 2015-03-22 06:03:53 --> Helper loaded: string_helper
DEBUG - 2015-03-22 06:03:53 --> Helper loaded: string_helper
DEBUG - 2015-03-22 06:03:53 --> Helper loaded: string_helper
DEBUG - 2015-03-22 06:03:53 --> Input Class Initialized
DEBUG - 2015-03-22 06:03:53 --> Helper loaded: url_helper
DEBUG - 2015-03-22 06:03:53 --> Helper loaded: url_helper
DEBUG - 2015-03-22 06:03:53 --> Helper loaded: url_helper
DEBUG - 2015-03-22 06:03:53 --> Helper loaded: url_helper
DEBUG - 2015-03-22 06:03:53 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 06:03:53 --> Security Class Initialized
DEBUG - 2015-03-22 06:03:53 --> Database Driver Class Initialized
DEBUG - 2015-03-22 06:03:53 --> Language Class Initialized
DEBUG - 2015-03-22 06:03:53 --> Language Class Initialized
DEBUG - 2015-03-22 06:03:53 --> Helper loaded: language_helper
DEBUG - 2015-03-22 06:03:53 --> Controller Class Initialized
DEBUG - 2015-03-22 06:03:53 --> Input Class Initialized
DEBUG - 2015-03-22 06:03:53 --> Output Class Initialized
DEBUG - 2015-03-22 06:03:53 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 06:03:53 --> Database Driver Class Initialized
DEBUG - 2015-03-22 06:03:53 --> Input Class Initialized
DEBUG - 2015-03-22 06:03:53 --> Database Driver Class Initialized
DEBUG - 2015-03-22 06:03:53 --> Database Driver Class Initialized
DEBUG - 2015-03-22 06:03:53 --> Helper loaded: string_helper
DEBUG - 2015-03-22 06:03:53 --> File loaded: application/views//common/user/listUserPiNo.php
DEBUG - 2015-03-22 06:03:53 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 06:03:53 --> Security Class Initialized
DEBUG - 2015-03-22 06:03:53 --> Language Class Initialized
DEBUG - 2015-03-22 06:03:53 --> Controller Class Initialized
DEBUG - 2015-03-22 06:03:53 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 06:03:53 --> Database Driver Class Initialized
DEBUG - 2015-03-22 06:03:53 --> Helper loaded: url_helper
DEBUG - 2015-03-22 06:03:53 --> Controller Class Initialized
DEBUG - 2015-03-22 06:03:53 --> Final output sent to browser
DEBUG - 2015-03-22 06:03:53 --> Language Class Initialized
DEBUG - 2015-03-22 06:03:53 --> Input Class Initialized
DEBUG - 2015-03-22 06:03:53 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 06:03:53 --> Total execution time: 5.7443
DEBUG - 2015-03-22 06:03:53 --> Loader Class Initialized
DEBUG - 2015-03-22 06:03:53 --> Loader Class Initialized
DEBUG - 2015-03-22 06:03:53 --> Controller Class Initialized
DEBUG - 2015-03-22 06:03:53 --> Loader Class Initialized
DEBUG - 2015-03-22 06:03:53 --> File loaded: application/views//common/user/listCntry.php
DEBUG - 2015-03-22 06:03:53 --> Controller Class Initialized
DEBUG - 2015-03-22 06:03:53 --> Config Class Initialized
DEBUG - 2015-03-22 06:03:53 --> Loader Class Initialized
DEBUG - 2015-03-22 06:03:53 --> Language Class Initialized
DEBUG - 2015-03-22 06:03:53 --> Hooks Class Initialized
DEBUG - 2015-03-22 06:03:53 --> Final output sent to browser
DEBUG - 2015-03-22 06:03:53 --> Helper loaded: form_helper
DEBUG - 2015-03-22 06:03:53 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 06:03:53 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 06:03:53 --> Final output sent to browser
DEBUG - 2015-03-22 06:03:53 --> Helper loaded: form_helper
DEBUG - 2015-03-22 06:03:53 --> Helper loaded: form_helper
DEBUG - 2015-03-22 06:03:53 --> Database Driver Class Initialized
DEBUG - 2015-03-22 06:03:53 --> Helper loaded: form_helper
DEBUG - 2015-03-22 06:03:53 --> Loader Class Initialized
DEBUG - 2015-03-22 06:03:53 --> Total execution time: 5.7963
DEBUG - 2015-03-22 06:03:53 --> Utf8 Class Initialized
DEBUG - 2015-03-22 06:03:53 --> File loaded: application/views//common/listModel.php
DEBUG - 2015-03-22 06:03:53 --> Helper loaded: language_helper
DEBUG - 2015-03-22 06:03:53 --> Total execution time: 5.8663
DEBUG - 2015-03-22 06:03:53 --> Final output sent to browser
DEBUG - 2015-03-22 06:03:53 --> Language Class Initialized
DEBUG - 2015-03-22 06:03:53 --> Helper loaded: language_helper
DEBUG - 2015-03-22 06:03:54 --> Helper loaded: language_helper
DEBUG - 2015-03-22 06:03:54 --> Helper loaded: language_helper
DEBUG - 2015-03-22 06:03:54 --> Controller Class Initialized
DEBUG - 2015-03-22 06:03:54 --> Config Class Initialized
DEBUG - 2015-03-22 06:03:54 --> Final output sent to browser
DEBUG - 2015-03-22 06:03:54 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 06:03:54 --> Helper loaded: string_helper
DEBUG - 2015-03-22 06:03:54 --> Helper loaded: form_helper
DEBUG - 2015-03-22 06:03:54 --> Total execution time: 6.1103
DEBUG - 2015-03-22 06:03:54 --> Loader Class Initialized
DEBUG - 2015-03-22 06:03:54 --> Helper loaded: string_helper
DEBUG - 2015-03-22 06:03:54 --> Helper loaded: string_helper
DEBUG - 2015-03-22 06:03:54 --> Helper loaded: string_helper
DEBUG - 2015-03-22 06:03:54 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 06:03:54 --> Hooks Class Initialized
DEBUG - 2015-03-22 06:03:54 --> Total execution time: 6.7554
DEBUG - 2015-03-22 06:03:54 --> URI Class Initialized
DEBUG - 2015-03-22 06:03:54 --> Helper loaded: url_helper
DEBUG - 2015-03-22 06:03:55 --> Helper loaded: language_helper
DEBUG - 2015-03-22 06:03:55 --> Helper loaded: form_helper
DEBUG - 2015-03-22 06:03:55 --> Helper loaded: url_helper
DEBUG - 2015-03-22 06:03:55 --> Helper loaded: url_helper
DEBUG - 2015-03-22 06:03:55 --> Helper loaded: url_helper
DEBUG - 2015-03-22 06:03:55 --> Final output sent to browser
DEBUG - 2015-03-22 06:03:55 --> Utf8 Class Initialized
DEBUG - 2015-03-22 06:03:55 --> Database Driver Class Initialized
DEBUG - 2015-03-22 06:03:55 --> Router Class Initialized
DEBUG - 2015-03-22 06:03:55 --> Controller Class Initialized
DEBUG - 2015-03-22 06:03:55 --> Database Driver Class Initialized
DEBUG - 2015-03-22 06:03:55 --> Helper loaded: string_helper
DEBUG - 2015-03-22 06:03:55 --> Helper loaded: language_helper
DEBUG - 2015-03-22 06:03:55 --> Database Driver Class Initialized
DEBUG - 2015-03-22 06:03:55 --> Database Driver Class Initialized
DEBUG - 2015-03-22 06:03:55 --> Total execution time: 7.4494
DEBUG - 2015-03-22 06:03:55 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 06:03:55 --> Output Class Initialized
DEBUG - 2015-03-22 06:03:55 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 06:03:56 --> Helper loaded: url_helper
DEBUG - 2015-03-22 06:03:56 --> Controller Class Initialized
DEBUG - 2015-03-22 06:03:56 --> Helper loaded: string_helper
DEBUG - 2015-03-22 06:03:56 --> Controller Class Initialized
DEBUG - 2015-03-22 06:03:56 --> Controller Class Initialized
DEBUG - 2015-03-22 06:03:56 --> URI Class Initialized
DEBUG - 2015-03-22 06:03:56 --> Security Class Initialized
DEBUG - 2015-03-22 06:03:56 --> Final output sent to browser
DEBUG - 2015-03-22 06:03:56 --> Database Driver Class Initialized
DEBUG - 2015-03-22 06:03:56 --> Helper loaded: url_helper
DEBUG - 2015-03-22 06:03:56 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 06:03:56 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 06:03:56 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 06:03:56 --> Router Class Initialized
DEBUG - 2015-03-22 06:03:56 --> Input Class Initialized
DEBUG - 2015-03-22 06:03:56 --> Total execution time: 7.4624
DEBUG - 2015-03-22 06:03:56 --> Database Driver Class Initialized
DEBUG - 2015-03-22 06:03:56 --> Controller Class Initialized
DEBUG - 2015-03-22 06:03:57 --> Final output sent to browser
DEBUG - 2015-03-22 06:03:57 --> Final output sent to browser
DEBUG - 2015-03-22 06:03:57 --> Final output sent to browser
DEBUG - 2015-03-22 06:03:57 --> Output Class Initialized
DEBUG - 2015-03-22 06:03:57 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 06:03:57 --> Controller Class Initialized
DEBUG - 2015-03-22 06:03:57 --> Total execution time: 7.5074
DEBUG - 2015-03-22 06:03:57 --> Security Class Initialized
DEBUG - 2015-03-22 06:03:57 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 06:03:57 --> Total execution time: 7.1834
DEBUG - 2015-03-22 06:03:57 --> Total execution time: 8.2105
DEBUG - 2015-03-22 06:03:57 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 06:03:57 --> Input Class Initialized
DEBUG - 2015-03-22 06:03:57 --> Final output sent to browser
DEBUG - 2015-03-22 06:03:57 --> Language Class Initialized
DEBUG - 2015-03-22 06:03:58 --> Final output sent to browser
DEBUG - 2015-03-22 06:03:58 --> Total execution time: 8.3295
DEBUG - 2015-03-22 06:03:58 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 06:03:58 --> Loader Class Initialized
DEBUG - 2015-03-22 06:03:58 --> Total execution time: 8.0255
DEBUG - 2015-03-22 06:03:58 --> Language Class Initialized
DEBUG - 2015-03-22 06:03:58 --> Helper loaded: form_helper
DEBUG - 2015-03-22 06:03:58 --> Loader Class Initialized
DEBUG - 2015-03-22 06:03:58 --> Helper loaded: language_helper
DEBUG - 2015-03-22 06:03:58 --> Helper loaded: form_helper
DEBUG - 2015-03-22 06:03:58 --> Helper loaded: string_helper
DEBUG - 2015-03-22 06:03:58 --> Helper loaded: language_helper
DEBUG - 2015-03-22 06:03:58 --> Helper loaded: url_helper
DEBUG - 2015-03-22 06:03:58 --> Helper loaded: string_helper
DEBUG - 2015-03-22 06:03:58 --> Helper loaded: url_helper
DEBUG - 2015-03-22 06:03:58 --> Database Driver Class Initialized
DEBUG - 2015-03-22 06:03:58 --> Controller Class Initialized
DEBUG - 2015-03-22 06:03:58 --> Database Driver Class Initialized
DEBUG - 2015-03-22 06:03:58 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 06:03:58 --> Controller Class Initialized
DEBUG - 2015-03-22 06:03:59 --> Final output sent to browser
DEBUG - 2015-03-22 06:03:59 --> File loaded: application/views//common/listCodeImg.php
DEBUG - 2015-03-22 06:03:59 --> Total execution time: 5.5233
DEBUG - 2015-03-22 06:03:59 --> Final output sent to browser
DEBUG - 2015-03-22 06:03:59 --> Total execution time: 4.9283
DEBUG - 2015-03-22 06:04:33 --> Config Class Initialized
DEBUG - 2015-03-22 06:04:33 --> Hooks Class Initialized
DEBUG - 2015-03-22 06:04:33 --> Utf8 Class Initialized
DEBUG - 2015-03-22 06:04:33 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 06:04:33 --> URI Class Initialized
DEBUG - 2015-03-22 06:04:33 --> Router Class Initialized
DEBUG - 2015-03-22 06:04:34 --> Output Class Initialized
DEBUG - 2015-03-22 06:04:34 --> Security Class Initialized
DEBUG - 2015-03-22 06:04:34 --> Input Class Initialized
DEBUG - 2015-03-22 06:04:34 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 06:04:34 --> Language Class Initialized
DEBUG - 2015-03-22 06:04:34 --> Loader Class Initialized
DEBUG - 2015-03-22 06:04:34 --> Helper loaded: form_helper
DEBUG - 2015-03-22 06:04:34 --> Helper loaded: language_helper
DEBUG - 2015-03-22 06:04:34 --> Helper loaded: string_helper
DEBUG - 2015-03-22 06:04:34 --> Helper loaded: url_helper
DEBUG - 2015-03-22 06:04:34 --> Database Driver Class Initialized
DEBUG - 2015-03-22 06:04:35 --> Controller Class Initialized
DEBUG - 2015-03-22 06:04:35 --> File loaded: application/views//admin/order/crtEqpOrder.php
DEBUG - 2015-03-22 06:04:35 --> Final output sent to browser
DEBUG - 2015-03-22 06:04:35 --> Total execution time: 1.6971
DEBUG - 2015-03-22 06:04:35 --> Config Class Initialized
DEBUG - 2015-03-22 06:04:35 --> Hooks Class Initialized
DEBUG - 2015-03-22 06:04:35 --> Utf8 Class Initialized
DEBUG - 2015-03-22 06:04:35 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 06:04:35 --> URI Class Initialized
DEBUG - 2015-03-22 06:04:35 --> Router Class Initialized
DEBUG - 2015-03-22 06:04:35 --> Output Class Initialized
DEBUG - 2015-03-22 06:04:35 --> Security Class Initialized
DEBUG - 2015-03-22 06:04:36 --> Input Class Initialized
DEBUG - 2015-03-22 06:04:36 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 06:04:36 --> Language Class Initialized
DEBUG - 2015-03-22 06:04:36 --> Loader Class Initialized
DEBUG - 2015-03-22 06:04:36 --> Helper loaded: form_helper
DEBUG - 2015-03-22 06:04:36 --> Helper loaded: language_helper
DEBUG - 2015-03-22 06:04:36 --> Helper loaded: string_helper
DEBUG - 2015-03-22 06:04:36 --> Helper loaded: url_helper
DEBUG - 2015-03-22 06:04:36 --> Database Driver Class Initialized
DEBUG - 2015-03-22 06:04:36 --> Controller Class Initialized
DEBUG - 2015-03-22 06:04:36 --> readEqpOrder:SELECT a.*, (select atcd_nm from cm_cd_attr where cd = '00B0' and atcd = a.srl_atcd) txt_srl_atcd, (select atcd_nm from cm_cd_attr where cd = '00D0' and atcd = a.rjt_pkt_tp_atcd) txt_rjt_pkt_tp_atcd, (select atcd_nm from cm_cd_attr where cd = '00E0' and atcd = a.pwr_cab_atcd) txt_pwr_cab_atcd, (select atcd_nm from cm_cd_attr where cd = '00F0' and atcd = a.shipped_by_atcd) txt_shipped_by_atcd, (select atcd_nm from cm_cd_attr where cd = '00F1' and atcd = a.courier_atcd) txt_courier_atcd, (select atcd_nm from cm_cd_attr where cd = '00G0' and atcd = a.payment_atcd) txt_payment_atcd, (select atcd_nm from cm_cd_attr where cd = '00H0' and atcd = a.incoterms_atcd) txt_incoterms_atcd, (select atcd_nm from cm_cd_attr where cd = '00L0' and atcd = a.lcd_color_atcd) txt_lcd_color_atcd, (select atcd_nm from cm_cd_attr where cd = '00M0' and atcd = a.lcd_lang_atcd) txt_lcd_lang_atcd, (select cmpy_nm from om_dealer where dealer_seq = a.dealer_seq) cmpy_nm, (select atcd_nm from cm_cd_attr where cd = '0022' and atcd = a.cntry_atcd) txt_cntry_atcd, if(mdl_cd in ('0007','0009'), concat(mdl_nm, concat('R',lan_L),if(a.lcd_color_atcd='00L00002','C','')), if(mdl_cd in ('3000'), concat(mdl_nm, concat('F',rjt_pkt_tp),''),mdl_nm)) txt_mdl_nm, DATE_FORMAT(a.delivery_dt, '%Y-%m-%d') txt_delivery_dt FROM ( SELECT a.*, b.cntry_atcd, b.dealer_seq, b.worker_seq, b.premium_rate, b.tot_amt, b.cnfm_yn, b.cnfm_dt, b.wrk_tp_atcd, b.udt_dt as order_dt, (CASE WHEN a.rjt_pkt_tp_atcd = ('00D00001') THEN 'A'  WHEN a.rjt_pkt_tp_atcd = ('00D00002') THEN 'I' END) rjt_pkt_tp, (SELECT mdl_nm FROM om_mdl WHERE mdl_cd = a.mdl_cd) mdl_nm, (SELECT if(count(*)>0,'L','') FROM om_ord_eqp_dtl where pi_no = a.pi_no and po_no = a.po_no and om_ord_eqp_dtl.atcd = '00A00001') lan_L FROM om_ord_eqp a, om_ord_inf b WHERE a.pi_no = b.pi_no AND a.pi_no = '150019bg' AND a.po_no = 44 ) a
DEBUG - 2015-03-22 06:04:37 --> SELECT b.cntry_atcd, b.dealer_seq, b.worker_seq, b.premium_rate, b.tot_amt, b.cnfm_yn, b.cnfm_dt, b.wrk_tp_atcd, a.*, (select atcd_nm from cm_cd_attr where cd = '0091' and atcd = a.currency_atch) txt_currency_atcd, (select atcd_nm from cm_cd_attr where cd = '0092' and atcd = a.serial_currency_atch) txt_serial_currency_atch, (select atcd_nm from cm_cd_attr where cd = '00A0' and atcd = a.opt_hw_atcd) txt_opt_hw_atcd, (select atcd_nm from cm_cd_attr where cd = '00C0' and atcd = a.pc_cab_atcd) txt_pc_cab_atcd FROM ( SELECT b.*,(case when b.cd='0091' then b.atcd else '' end) currency_atch,(CASE WHEN b.cd='0091' AND b.atcd_ox='O' THEN b.atcd ELSE '' END) fitness,(CASE WHEN b.cd='0091' THEN b.atcd_ox ELSE '' END) fitness_ox,(case when b.cd='0092' then b.atcd else '' end) serial_currency_atch,(CASE WHEN b.cd='0092' AND b.atcd_ox='O' THEN b.atcd ELSE '' END) srl_fitness,(CASE WHEN b.cd='0092' THEN b.atcd_ox ELSE '' END) srl_fitness_ox,(case when b.cd='00A0' then b.atcd else '' end) opt_hw_atcd,(case when b.cd='00C0' then b.atcd else '' end) pc_cab_atcd FROM om_ord_eqp a, om_ord_eqp_dtl b WHERE a.pi_no = b.pi_no AND a.po_no = b.po_no AND a.pi_no = '150019bg'		AND a.po_no = 44) a, om_ord_inf b WHERE a.pi_no = b.pi_no order by cd, atcd
DEBUG - 2015-03-22 06:04:37 --> INSERT INTO om_sndmail(pi_no, wrk_tp_atcd, sndmail_atcd, auth_grp_cd, sender_email, sender_eng_nm, title, ctnt, crt_dt, crt_uid) VALUES ('150019bg','00700110', '00700111', 'UD', 'kpbaek@localhost', (SELECT dealer_nm FROM om_dealer   WHERE dealer_uid='sofia@ubs-bg.com'), (select concat(atcd_nm,' - ',(select cmpy_nm from om_dealer where dealer_uid='sofia@ubs-bg.com')) from cm_cd_attr where cd = '0071' and atcd = '00700111'), '', now(), 'sofia@ubs-bg.com')
DEBUG - 2015-03-22 06:04:37 --> sql3:INSERT INTO om_sndmail_dtl (sndmail_seq, email_from, email_to, rcpnt_tp_atcd, snd_yn, crt_dt, crt_uid) SELECT 225, 'safe@safeleader.esy.es', (select usr_email from om_user where uid = a.dealer_uid), '00100010' rcpnt_tp_atcd, 'N', now(), 'sofia@ubs-bg.com' FROM om_dealer a, om_ord_inf b WHERE a.dealer_seq = b.dealer_seq AND b.pi_no = '150019bg' UNION SELECT 225, 'kpbaek@localhost', (select team_email from om_team where team_atcd = '00600SL0') email_to, '00100040' rcpnt_tp_atcd, 'N', now(), 'sofia@ubs-bg.com'
DEBUG - 2015-03-22 06:04:37 --> File loaded: application/views//common/crtSndMail.php
DEBUG - 2015-03-22 06:04:37 --> Final output sent to browser
DEBUG - 2015-03-22 06:04:37 --> Total execution time: 2.0311
DEBUG - 2015-03-22 06:04:37 --> Config Class Initialized
DEBUG - 2015-03-22 06:04:37 --> Hooks Class Initialized
DEBUG - 2015-03-22 06:04:37 --> Utf8 Class Initialized
DEBUG - 2015-03-22 06:04:37 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 06:04:37 --> URI Class Initialized
DEBUG - 2015-03-22 06:04:37 --> Router Class Initialized
DEBUG - 2015-03-22 06:04:38 --> Output Class Initialized
DEBUG - 2015-03-22 06:04:38 --> Security Class Initialized
DEBUG - 2015-03-22 06:04:38 --> Input Class Initialized
DEBUG - 2015-03-22 06:04:38 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 06:04:38 --> Language Class Initialized
DEBUG - 2015-03-22 06:04:38 --> Loader Class Initialized
DEBUG - 2015-03-22 06:04:38 --> Helper loaded: form_helper
DEBUG - 2015-03-22 06:04:38 --> Helper loaded: language_helper
DEBUG - 2015-03-22 06:04:38 --> Helper loaded: string_helper
DEBUG - 2015-03-22 06:04:38 --> Helper loaded: url_helper
DEBUG - 2015-03-22 06:04:38 --> Database Driver Class Initialized
DEBUG - 2015-03-22 06:04:39 --> Controller Class Initialized
DEBUG - 2015-03-22 06:04:39 --> sql3:SELECT a.pi_no, a.sndmail_seq, a.wrk_tp_atcd, a.sender_email, a.title, a.ctnt, email_from, email_to, snd_yn, b.snd_no, b.rcpnt_tp_atcd, b.rcpnt_team_atcd,(select usr_nm from om_user where uid = a.sender_email) sender_nm,(select usr_nm from om_user where uid = b.email_to) rcpnt_nm FROM om_sndmail a, om_sndmail_dtl b WHERE a.sndmail_seq = b.sndmail_seq and a.sndmail_seq=225 and snd_yn='N'
DEBUG - 2015-03-22 06:04:39 --> File loaded: application/views//common/sndMailResult.php
DEBUG - 2015-03-22 06:04:39 --> Final output sent to browser
DEBUG - 2015-03-22 06:04:39 --> Total execution time: 1.8521
DEBUG - 2015-03-22 06:07:29 --> Config Class Initialized
DEBUG - 2015-03-22 06:07:29 --> Hooks Class Initialized
DEBUG - 2015-03-22 06:07:29 --> Utf8 Class Initialized
DEBUG - 2015-03-22 06:07:29 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 06:07:29 --> URI Class Initialized
DEBUG - 2015-03-22 06:07:29 --> Router Class Initialized
DEBUG - 2015-03-22 06:07:29 --> Output Class Initialized
DEBUG - 2015-03-22 06:07:29 --> Security Class Initialized
DEBUG - 2015-03-22 06:07:29 --> Input Class Initialized
DEBUG - 2015-03-22 06:07:29 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 06:07:29 --> Language Class Initialized
DEBUG - 2015-03-22 06:07:30 --> Loader Class Initialized
DEBUG - 2015-03-22 06:07:30 --> Helper loaded: form_helper
DEBUG - 2015-03-22 06:07:30 --> Helper loaded: language_helper
DEBUG - 2015-03-22 06:07:30 --> Helper loaded: string_helper
DEBUG - 2015-03-22 06:07:30 --> Helper loaded: url_helper
DEBUG - 2015-03-22 06:07:30 --> Database Driver Class Initialized
DEBUG - 2015-03-22 06:07:30 --> Controller Class Initialized
DEBUG - 2015-03-22 06:07:30 --> File loaded: application/views//admin/order/main.php
DEBUG - 2015-03-22 06:07:30 --> Final output sent to browser
DEBUG - 2015-03-22 06:07:30 --> Total execution time: 1.7251
DEBUG - 2015-03-22 06:07:31 --> Config Class Initialized
DEBUG - 2015-03-22 06:07:31 --> Hooks Class Initialized
DEBUG - 2015-03-22 06:07:31 --> Utf8 Class Initialized
DEBUG - 2015-03-22 06:07:31 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 06:07:31 --> URI Class Initialized
DEBUG - 2015-03-22 06:07:31 --> Router Class Initialized
DEBUG - 2015-03-22 06:07:31 --> Output Class Initialized
DEBUG - 2015-03-22 06:07:31 --> Security Class Initialized
DEBUG - 2015-03-22 06:07:31 --> Input Class Initialized
DEBUG - 2015-03-22 06:07:31 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 06:07:32 --> Language Class Initialized
DEBUG - 2015-03-22 06:07:32 --> Loader Class Initialized
DEBUG - 2015-03-22 06:07:32 --> Helper loaded: form_helper
DEBUG - 2015-03-22 06:07:32 --> Helper loaded: language_helper
DEBUG - 2015-03-22 06:07:32 --> Helper loaded: string_helper
DEBUG - 2015-03-22 06:07:32 --> Helper loaded: url_helper
DEBUG - 2015-03-22 06:07:32 --> Database Driver Class Initialized
DEBUG - 2015-03-22 06:07:32 --> Controller Class Initialized
DEBUG - 2015-03-22 06:07:32 --> File loaded: application/views//admin/order/tab01.php
DEBUG - 2015-03-22 06:07:32 --> Final output sent to browser
DEBUG - 2015-03-22 06:07:32 --> Total execution time: 1.6791
DEBUG - 2015-03-22 06:07:33 --> Config Class Initialized
DEBUG - 2015-03-22 06:07:33 --> Hooks Class Initialized
DEBUG - 2015-03-22 06:07:33 --> Utf8 Class Initialized
DEBUG - 2015-03-22 06:07:33 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 06:07:33 --> URI Class Initialized
DEBUG - 2015-03-22 06:07:33 --> Router Class Initialized
DEBUG - 2015-03-22 06:07:33 --> Output Class Initialized
DEBUG - 2015-03-22 06:07:33 --> Security Class Initialized
DEBUG - 2015-03-22 06:07:33 --> Input Class Initialized
DEBUG - 2015-03-22 06:07:33 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 06:07:33 --> Language Class Initialized
DEBUG - 2015-03-22 06:07:34 --> Loader Class Initialized
DEBUG - 2015-03-22 06:07:34 --> Helper loaded: form_helper
DEBUG - 2015-03-22 06:07:34 --> Helper loaded: language_helper
DEBUG - 2015-03-22 06:07:34 --> Helper loaded: string_helper
DEBUG - 2015-03-22 06:07:34 --> Helper loaded: url_helper
DEBUG - 2015-03-22 06:07:34 --> Database Driver Class Initialized
DEBUG - 2015-03-22 06:07:34 --> Controller Class Initialized
DEBUG - 2015-03-22 06:07:34 --> File loaded: application/views//common/user/viewDealer.php
DEBUG - 2015-03-22 06:07:34 --> Final output sent to browser
DEBUG - 2015-03-22 06:07:34 --> Total execution time: 1.7121
DEBUG - 2015-03-22 06:07:34 --> Config Class Initialized
DEBUG - 2015-03-22 06:07:35 --> Config Class Initialized
DEBUG - 2015-03-22 06:07:35 --> Config Class Initialized
DEBUG - 2015-03-22 06:07:35 --> Config Class Initialized
DEBUG - 2015-03-22 06:07:35 --> Config Class Initialized
DEBUG - 2015-03-22 06:07:35 --> Config Class Initialized
DEBUG - 2015-03-22 06:07:35 --> Hooks Class Initialized
DEBUG - 2015-03-22 06:07:35 --> Hooks Class Initialized
DEBUG - 2015-03-22 06:07:35 --> Hooks Class Initialized
DEBUG - 2015-03-22 06:07:35 --> Hooks Class Initialized
DEBUG - 2015-03-22 06:07:35 --> Utf8 Class Initialized
DEBUG - 2015-03-22 06:07:35 --> Hooks Class Initialized
DEBUG - 2015-03-22 06:07:35 --> Hooks Class Initialized
DEBUG - 2015-03-22 06:07:35 --> Utf8 Class Initialized
DEBUG - 2015-03-22 06:07:35 --> Config Class Initialized
DEBUG - 2015-03-22 06:07:35 --> Config Class Initialized
DEBUG - 2015-03-22 06:07:35 --> Utf8 Class Initialized
DEBUG - 2015-03-22 06:07:35 --> Utf8 Class Initialized
DEBUG - 2015-03-22 06:07:35 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 06:07:35 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 06:07:35 --> Utf8 Class Initialized
DEBUG - 2015-03-22 06:07:35 --> Utf8 Class Initialized
DEBUG - 2015-03-22 06:07:36 --> Config Class Initialized
DEBUG - 2015-03-22 06:07:36 --> Config Class Initialized
DEBUG - 2015-03-22 06:07:36 --> Hooks Class Initialized
DEBUG - 2015-03-22 06:07:36 --> Hooks Class Initialized
DEBUG - 2015-03-22 06:07:36 --> Hooks Class Initialized
DEBUG - 2015-03-22 06:07:36 --> Hooks Class Initialized
DEBUG - 2015-03-22 06:07:36 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 06:07:36 --> URI Class Initialized
DEBUG - 2015-03-22 06:07:36 --> Utf8 Class Initialized
DEBUG - 2015-03-22 06:07:36 --> URI Class Initialized
DEBUG - 2015-03-22 06:07:36 --> Utf8 Class Initialized
DEBUG - 2015-03-22 06:07:36 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 06:07:36 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 06:07:36 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 06:07:36 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 06:07:36 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 06:07:36 --> Router Class Initialized
DEBUG - 2015-03-22 06:07:36 --> Router Class Initialized
DEBUG - 2015-03-22 06:07:36 --> URI Class Initialized
DEBUG - 2015-03-22 06:07:36 --> URI Class Initialized
DEBUG - 2015-03-22 06:07:36 --> Utf8 Class Initialized
DEBUG - 2015-03-22 06:07:36 --> Utf8 Class Initialized
DEBUG - 2015-03-22 06:07:36 --> URI Class Initialized
DEBUG - 2015-03-22 06:07:36 --> URI Class Initialized
DEBUG - 2015-03-22 06:07:36 --> URI Class Initialized
DEBUG - 2015-03-22 06:07:36 --> Config Class Initialized
DEBUG - 2015-03-22 06:07:36 --> Config Class Initialized
DEBUG - 2015-03-22 06:07:36 --> URI Class Initialized
DEBUG - 2015-03-22 06:07:36 --> Hooks Class Initialized
DEBUG - 2015-03-22 06:07:36 --> Output Class Initialized
DEBUG - 2015-03-22 06:07:36 --> Output Class Initialized
DEBUG - 2015-03-22 06:07:36 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 06:07:36 --> Router Class Initialized
DEBUG - 2015-03-22 06:07:36 --> Router Class Initialized
DEBUG - 2015-03-22 06:07:36 --> Router Class Initialized
DEBUG - 2015-03-22 06:07:36 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 06:07:36 --> Router Class Initialized
DEBUG - 2015-03-22 06:07:36 --> Utf8 Class Initialized
DEBUG - 2015-03-22 06:07:36 --> Hooks Class Initialized
DEBUG - 2015-03-22 06:07:37 --> Router Class Initialized
DEBUG - 2015-03-22 06:07:37 --> URI Class Initialized
DEBUG - 2015-03-22 06:07:37 --> Output Class Initialized
DEBUG - 2015-03-22 06:07:37 --> URI Class Initialized
DEBUG - 2015-03-22 06:07:37 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 06:07:37 --> Output Class Initialized
DEBUG - 2015-03-22 06:07:37 --> Output Class Initialized
DEBUG - 2015-03-22 06:07:37 --> Utf8 Class Initialized
DEBUG - 2015-03-22 06:07:37 --> URI Class Initialized
DEBUG - 2015-03-22 06:07:37 --> Router Class Initialized
DEBUG - 2015-03-22 06:07:37 --> Router Class Initialized
DEBUG - 2015-03-22 06:07:37 --> Router Class Initialized
DEBUG - 2015-03-22 06:07:37 --> Output Class Initialized
DEBUG - 2015-03-22 06:07:37 --> Security Class Initialized
DEBUG - 2015-03-22 06:07:37 --> Security Class Initialized
DEBUG - 2015-03-22 06:07:37 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 06:07:37 --> Output Class Initialized
DEBUG - 2015-03-22 06:07:37 --> Router Class Initialized
DEBUG - 2015-03-22 06:07:37 --> Output Class Initialized
DEBUG - 2015-03-22 06:07:37 --> Output Class Initialized
DEBUG - 2015-03-22 06:07:37 --> Security Class Initialized
DEBUG - 2015-03-22 06:07:37 --> Input Class Initialized
DEBUG - 2015-03-22 06:07:37 --> Security Class Initialized
DEBUG - 2015-03-22 06:07:37 --> Output Class Initialized
DEBUG - 2015-03-22 06:07:37 --> Input Class Initialized
DEBUG - 2015-03-22 06:07:37 --> Security Class Initialized
DEBUG - 2015-03-22 06:07:37 --> URI Class Initialized
DEBUG - 2015-03-22 06:07:37 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 06:07:37 --> Security Class Initialized
DEBUG - 2015-03-22 06:07:37 --> Security Class Initialized
DEBUG - 2015-03-22 06:07:37 --> Output Class Initialized
DEBUG - 2015-03-22 06:07:37 --> Input Class Initialized
DEBUG - 2015-03-22 06:07:37 --> Security Class Initialized
DEBUG - 2015-03-22 06:07:37 --> Input Class Initialized
DEBUG - 2015-03-22 06:07:37 --> Router Class Initialized
DEBUG - 2015-03-22 06:07:37 --> Language Class Initialized
DEBUG - 2015-03-22 06:07:37 --> Input Class Initialized
DEBUG - 2015-03-22 06:07:37 --> Input Class Initialized
DEBUG - 2015-03-22 06:07:37 --> Input Class Initialized
DEBUG - 2015-03-22 06:07:37 --> Output Class Initialized
DEBUG - 2015-03-22 06:07:37 --> Loader Class Initialized
DEBUG - 2015-03-22 06:07:37 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 06:07:37 --> Security Class Initialized
DEBUG - 2015-03-22 06:07:37 --> Security Class Initialized
DEBUG - 2015-03-22 06:07:37 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 06:07:37 --> Security Class Initialized
DEBUG - 2015-03-22 06:07:37 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 06:07:37 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 06:07:37 --> Security Class Initialized
DEBUG - 2015-03-22 06:07:37 --> Helper loaded: form_helper
DEBUG - 2015-03-22 06:07:37 --> Language Class Initialized
DEBUG - 2015-03-22 06:07:37 --> Input Class Initialized
DEBUG - 2015-03-22 06:07:37 --> Input Class Initialized
DEBUG - 2015-03-22 06:07:37 --> Language Class Initialized
DEBUG - 2015-03-22 06:07:37 --> Input Class Initialized
DEBUG - 2015-03-22 06:07:37 --> Language Class Initialized
DEBUG - 2015-03-22 06:07:37 --> Language Class Initialized
DEBUG - 2015-03-22 06:07:37 --> Input Class Initialized
DEBUG - 2015-03-22 06:07:37 --> Helper loaded: language_helper
DEBUG - 2015-03-22 06:07:37 --> Loader Class Initialized
DEBUG - 2015-03-22 06:07:37 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 06:07:37 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 06:07:37 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 06:07:37 --> Loader Class Initialized
DEBUG - 2015-03-22 06:07:37 --> Loader Class Initialized
DEBUG - 2015-03-22 06:07:37 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 06:07:37 --> Loader Class Initialized
DEBUG - 2015-03-22 06:07:37 --> Language Class Initialized
DEBUG - 2015-03-22 06:07:37 --> Helper loaded: string_helper
DEBUG - 2015-03-22 06:07:37 --> Language Class Initialized
DEBUG - 2015-03-22 06:07:37 --> Helper loaded: form_helper
DEBUG - 2015-03-22 06:07:37 --> Language Class Initialized
DEBUG - 2015-03-22 06:07:37 --> Helper loaded: form_helper
DEBUG - 2015-03-22 06:07:37 --> Helper loaded: form_helper
DEBUG - 2015-03-22 06:07:37 --> Helper loaded: url_helper
DEBUG - 2015-03-22 06:07:37 --> Helper loaded: language_helper
DEBUG - 2015-03-22 06:07:37 --> Helper loaded: language_helper
DEBUG - 2015-03-22 06:07:37 --> Loader Class Initialized
DEBUG - 2015-03-22 06:07:37 --> Loader Class Initialized
DEBUG - 2015-03-22 06:07:37 --> Loader Class Initialized
DEBUG - 2015-03-22 06:07:37 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 06:07:37 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 06:07:37 --> Input Class Initialized
DEBUG - 2015-03-22 06:07:37 --> Language Class Initialized
DEBUG - 2015-03-22 06:07:37 --> Language Class Initialized
DEBUG - 2015-03-22 06:07:37 --> Language Class Initialized
DEBUG - 2015-03-22 06:07:37 --> Helper loaded: string_helper
DEBUG - 2015-03-22 06:07:37 --> Helper loaded: language_helper
DEBUG - 2015-03-22 06:07:37 --> Helper loaded: string_helper
DEBUG - 2015-03-22 06:07:37 --> Helper loaded: form_helper
DEBUG - 2015-03-22 06:07:37 --> Helper loaded: form_helper
DEBUG - 2015-03-22 06:07:37 --> Database Driver Class Initialized
DEBUG - 2015-03-22 06:07:37 --> Helper loaded: url_helper
DEBUG - 2015-03-22 06:07:37 --> Helper loaded: form_helper
DEBUG - 2015-03-22 06:07:37 --> Controller Class Initialized
DEBUG - 2015-03-22 06:07:37 --> Database Driver Class Initialized
DEBUG - 2015-03-22 06:07:37 --> File loaded: application/views//common/listModel.php
DEBUG - 2015-03-22 06:07:37 --> Helper loaded: language_helper
DEBUG - 2015-03-22 06:07:37 --> Final output sent to browser
DEBUG - 2015-03-22 06:07:37 --> Controller Class Initialized
DEBUG - 2015-03-22 06:07:37 --> Total execution time: 2.3181
DEBUG - 2015-03-22 06:07:37 --> Helper loaded: string_helper
DEBUG - 2015-03-22 06:07:37 --> Config Class Initialized
DEBUG - 2015-03-22 06:07:37 --> Helper loaded: language_helper
DEBUG - 2015-03-22 06:07:37 --> Helper loaded: form_helper
DEBUG - 2015-03-22 06:07:37 --> Helper loaded: url_helper
DEBUG - 2015-03-22 06:07:37 --> Helper loaded: string_helper
DEBUG - 2015-03-22 06:07:37 --> Helper loaded: language_helper
DEBUG - 2015-03-22 06:07:37 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 06:07:37 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 06:07:37 --> Loader Class Initialized
DEBUG - 2015-03-22 06:07:37 --> Loader Class Initialized
DEBUG - 2015-03-22 06:07:37 --> Loader Class Initialized
DEBUG - 2015-03-22 06:07:37 --> Hooks Class Initialized
DEBUG - 2015-03-22 06:07:37 --> Helper loaded: language_helper
DEBUG - 2015-03-22 06:07:37 --> Helper loaded: url_helper
DEBUG - 2015-03-22 06:07:37 --> Helper loaded: string_helper
DEBUG - 2015-03-22 06:07:37 --> Database Driver Class Initialized
DEBUG - 2015-03-22 06:07:37 --> Helper loaded: url_helper
DEBUG - 2015-03-22 06:07:38 --> Helper loaded: string_helper
DEBUG - 2015-03-22 06:07:38 --> Final output sent to browser
DEBUG - 2015-03-22 06:07:38 --> Language Class Initialized
DEBUG - 2015-03-22 06:07:38 --> Helper loaded: form_helper
DEBUG - 2015-03-22 06:07:38 --> Helper loaded: form_helper
DEBUG - 2015-03-22 06:07:38 --> Helper loaded: form_helper
DEBUG - 2015-03-22 06:07:38 --> Utf8 Class Initialized
DEBUG - 2015-03-22 06:07:38 --> Helper loaded: string_helper
DEBUG - 2015-03-22 06:07:38 --> Controller Class Initialized
DEBUG - 2015-03-22 06:07:38 --> Database Driver Class Initialized
DEBUG - 2015-03-22 06:07:38 --> Helper loaded: url_helper
DEBUG - 2015-03-22 06:07:38 --> Database Driver Class Initialized
DEBUG - 2015-03-22 06:07:38 --> Helper loaded: url_helper
DEBUG - 2015-03-22 06:07:38 --> Total execution time: 2.9642
DEBUG - 2015-03-22 06:07:38 --> Helper loaded: language_helper
DEBUG - 2015-03-22 06:07:38 --> Helper loaded: language_helper
DEBUG - 2015-03-22 06:07:38 --> Loader Class Initialized
DEBUG - 2015-03-22 06:07:38 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 06:07:38 --> Helper loaded: language_helper
DEBUG - 2015-03-22 06:07:38 --> Database Driver Class Initialized
DEBUG - 2015-03-22 06:07:38 --> Helper loaded: url_helper
DEBUG - 2015-03-22 06:07:38 --> Config Class Initialized
DEBUG - 2015-03-22 06:07:38 --> URI Class Initialized
DEBUG - 2015-03-22 06:07:38 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 06:07:38 --> Helper loaded: form_helper
DEBUG - 2015-03-22 06:07:38 --> Helper loaded: string_helper
DEBUG - 2015-03-22 06:07:38 --> Controller Class Initialized
DEBUG - 2015-03-22 06:07:38 --> Hooks Class Initialized
DEBUG - 2015-03-22 06:07:38 --> Controller Class Initialized
DEBUG - 2015-03-22 06:07:38 --> Database Driver Class Initialized
DEBUG - 2015-03-22 06:07:38 --> Router Class Initialized
DEBUG - 2015-03-22 06:07:38 --> Final output sent to browser
DEBUG - 2015-03-22 06:07:38 --> Helper loaded: language_helper
DEBUG - 2015-03-22 06:07:38 --> Helper loaded: url_helper
DEBUG - 2015-03-22 06:07:38 --> Utf8 Class Initialized
DEBUG - 2015-03-22 06:07:38 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 06:07:39 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 06:07:39 --> Output Class Initialized
DEBUG - 2015-03-22 06:07:39 --> Total execution time: 2.7172
DEBUG - 2015-03-22 06:07:39 --> Controller Class Initialized
DEBUG - 2015-03-22 06:07:39 --> Helper loaded: string_helper
DEBUG - 2015-03-22 06:07:39 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 06:07:39 --> Final output sent to browser
DEBUG - 2015-03-22 06:07:39 --> Security Class Initialized
DEBUG - 2015-03-22 06:07:39 --> Database Driver Class Initialized
DEBUG - 2015-03-22 06:07:39 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 06:07:39 --> Final output sent to browser
DEBUG - 2015-03-22 06:07:39 --> URI Class Initialized
DEBUG - 2015-03-22 06:07:39 --> Total execution time: 3.3412
DEBUG - 2015-03-22 06:07:39 --> Helper loaded: url_helper
DEBUG - 2015-03-22 06:07:39 --> Final output sent to browser
DEBUG - 2015-03-22 06:07:39 --> Total execution time: 2.2121
DEBUG - 2015-03-22 06:07:39 --> Input Class Initialized
DEBUG - 2015-03-22 06:07:39 --> Router Class Initialized
DEBUG - 2015-03-22 06:07:39 --> Total execution time: 3.3422
DEBUG - 2015-03-22 06:07:39 --> Controller Class Initialized
DEBUG - 2015-03-22 06:07:39 --> Output Class Initialized
DEBUG - 2015-03-22 06:07:39 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 06:07:39 --> Helper loaded: string_helper
DEBUG - 2015-03-22 06:07:39 --> Helper loaded: string_helper
DEBUG - 2015-03-22 06:07:39 --> Database Driver Class Initialized
DEBUG - 2015-03-22 06:07:39 --> Controller Class Initialized
DEBUG - 2015-03-22 06:07:39 --> Database Driver Class Initialized
DEBUG - 2015-03-22 06:07:39 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 06:07:39 --> Security Class Initialized
DEBUG - 2015-03-22 06:07:39 --> Language Class Initialized
DEBUG - 2015-03-22 06:07:39 --> Helper loaded: url_helper
DEBUG - 2015-03-22 06:07:39 --> Helper loaded: url_helper
DEBUG - 2015-03-22 06:07:39 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 06:07:39 --> Controller Class Initialized
DEBUG - 2015-03-22 06:07:39 --> Controller Class Initialized
DEBUG - 2015-03-22 06:07:39 --> Final output sent to browser
DEBUG - 2015-03-22 06:07:39 --> Final output sent to browser
DEBUG - 2015-03-22 06:07:39 --> Input Class Initialized
DEBUG - 2015-03-22 06:07:40 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 06:07:40 --> Loader Class Initialized
DEBUG - 2015-03-22 06:07:40 --> Database Driver Class Initialized
DEBUG - 2015-03-22 06:07:40 --> Database Driver Class Initialized
DEBUG - 2015-03-22 06:07:40 --> Total execution time: 3.4442
DEBUG - 2015-03-22 06:07:40 --> Total execution time: 4.8043
DEBUG - 2015-03-22 06:07:40 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 06:07:40 --> File loaded: application/views//common/user/listCntry.php
DEBUG - 2015-03-22 06:07:40 --> Final output sent to browser
DEBUG - 2015-03-22 06:07:40 --> Controller Class Initialized
DEBUG - 2015-03-22 06:07:40 --> Helper loaded: form_helper
DEBUG - 2015-03-22 06:07:40 --> Controller Class Initialized
DEBUG - 2015-03-22 06:07:40 --> Language Class Initialized
DEBUG - 2015-03-22 06:07:40 --> Final output sent to browser
DEBUG - 2015-03-22 06:07:40 --> Total execution time: 3.3942
DEBUG - 2015-03-22 06:07:40 --> Helper loaded: language_helper
DEBUG - 2015-03-22 06:07:40 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 06:07:40 --> Loader Class Initialized
DEBUG - 2015-03-22 06:07:40 --> Total execution time: 5.4443
DEBUG - 2015-03-22 06:07:40 --> Final output sent to browser
DEBUG - 2015-03-22 06:07:40 --> Helper loaded: string_helper
DEBUG - 2015-03-22 06:07:40 --> Helper loaded: form_helper
DEBUG - 2015-03-22 06:07:41 --> File loaded: application/views//common/user/listUserPiNo.php
DEBUG - 2015-03-22 06:07:41 --> Total execution time: 5.8103
DEBUG - 2015-03-22 06:07:41 --> Helper loaded: url_helper
DEBUG - 2015-03-22 06:07:41 --> Final output sent to browser
DEBUG - 2015-03-22 06:07:41 --> Helper loaded: language_helper
DEBUG - 2015-03-22 06:07:41 --> Database Driver Class Initialized
DEBUG - 2015-03-22 06:07:41 --> Total execution time: 6.2264
DEBUG - 2015-03-22 06:07:41 --> Helper loaded: string_helper
DEBUG - 2015-03-22 06:07:41 --> Controller Class Initialized
DEBUG - 2015-03-22 06:07:41 --> Helper loaded: url_helper
DEBUG - 2015-03-22 06:07:41 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 06:07:41 --> Database Driver Class Initialized
DEBUG - 2015-03-22 06:07:41 --> Final output sent to browser
DEBUG - 2015-03-22 06:07:41 --> Controller Class Initialized
DEBUG - 2015-03-22 06:07:41 --> Total execution time: 4.3833
DEBUG - 2015-03-22 06:07:41 --> File loaded: application/views//common/listCodeImg.php
DEBUG - 2015-03-22 06:07:42 --> Final output sent to browser
DEBUG - 2015-03-22 06:07:42 --> Total execution time: 3.1372
DEBUG - 2015-03-22 06:07:50 --> Config Class Initialized
DEBUG - 2015-03-22 06:07:50 --> Hooks Class Initialized
DEBUG - 2015-03-22 06:07:50 --> Utf8 Class Initialized
DEBUG - 2015-03-22 06:07:50 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 06:07:50 --> URI Class Initialized
DEBUG - 2015-03-22 06:07:50 --> Router Class Initialized
DEBUG - 2015-03-22 06:07:51 --> Output Class Initialized
DEBUG - 2015-03-22 06:07:51 --> Security Class Initialized
DEBUG - 2015-03-22 06:07:51 --> Input Class Initialized
DEBUG - 2015-03-22 06:07:51 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 06:07:51 --> Language Class Initialized
DEBUG - 2015-03-22 06:07:51 --> Loader Class Initialized
DEBUG - 2015-03-22 06:07:51 --> Helper loaded: form_helper
DEBUG - 2015-03-22 06:07:51 --> Helper loaded: language_helper
DEBUG - 2015-03-22 06:07:51 --> Helper loaded: string_helper
DEBUG - 2015-03-22 06:07:51 --> Helper loaded: url_helper
DEBUG - 2015-03-22 06:07:51 --> Database Driver Class Initialized
DEBUG - 2015-03-22 06:07:52 --> Controller Class Initialized
DEBUG - 2015-03-22 06:07:52 --> File loaded: application/views//admin/order/crtEqpOrder.php
DEBUG - 2015-03-22 06:07:52 --> Final output sent to browser
DEBUG - 2015-03-22 06:07:52 --> Total execution time: 1.6751
DEBUG - 2015-03-22 06:07:52 --> Config Class Initialized
DEBUG - 2015-03-22 06:07:52 --> Hooks Class Initialized
DEBUG - 2015-03-22 06:07:52 --> Utf8 Class Initialized
DEBUG - 2015-03-22 06:07:52 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 06:07:52 --> URI Class Initialized
DEBUG - 2015-03-22 06:07:52 --> Router Class Initialized
DEBUG - 2015-03-22 06:07:52 --> Output Class Initialized
DEBUG - 2015-03-22 06:07:53 --> Security Class Initialized
DEBUG - 2015-03-22 06:07:53 --> Input Class Initialized
DEBUG - 2015-03-22 06:07:53 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 06:07:53 --> Language Class Initialized
DEBUG - 2015-03-22 06:07:53 --> Loader Class Initialized
DEBUG - 2015-03-22 06:07:53 --> Helper loaded: form_helper
DEBUG - 2015-03-22 06:07:53 --> Helper loaded: language_helper
DEBUG - 2015-03-22 06:07:53 --> Helper loaded: string_helper
DEBUG - 2015-03-22 06:07:53 --> Helper loaded: url_helper
DEBUG - 2015-03-22 06:07:53 --> Database Driver Class Initialized
DEBUG - 2015-03-22 06:07:53 --> Controller Class Initialized
DEBUG - 2015-03-22 06:07:53 --> readEqpOrder:SELECT a.*, (select atcd_nm from cm_cd_attr where cd = '00B0' and atcd = a.srl_atcd) txt_srl_atcd, (select atcd_nm from cm_cd_attr where cd = '00D0' and atcd = a.rjt_pkt_tp_atcd) txt_rjt_pkt_tp_atcd, (select atcd_nm from cm_cd_attr where cd = '00E0' and atcd = a.pwr_cab_atcd) txt_pwr_cab_atcd, (select atcd_nm from cm_cd_attr where cd = '00F0' and atcd = a.shipped_by_atcd) txt_shipped_by_atcd, (select atcd_nm from cm_cd_attr where cd = '00F1' and atcd = a.courier_atcd) txt_courier_atcd, (select atcd_nm from cm_cd_attr where cd = '00G0' and atcd = a.payment_atcd) txt_payment_atcd, (select atcd_nm from cm_cd_attr where cd = '00H0' and atcd = a.incoterms_atcd) txt_incoterms_atcd, (select atcd_nm from cm_cd_attr where cd = '00L0' and atcd = a.lcd_color_atcd) txt_lcd_color_atcd, (select atcd_nm from cm_cd_attr where cd = '00M0' and atcd = a.lcd_lang_atcd) txt_lcd_lang_atcd, (select cmpy_nm from om_dealer where dealer_seq = a.dealer_seq) cmpy_nm, (select atcd_nm from cm_cd_attr where cd = '0022' and atcd = a.cntry_atcd) txt_cntry_atcd, if(mdl_cd in ('0007','0009'), concat(mdl_nm, concat('R',lan_L),if(a.lcd_color_atcd='00L00002','C','')), if(mdl_cd in ('3000'), concat(mdl_nm, concat('F',rjt_pkt_tp),''),mdl_nm)) txt_mdl_nm, DATE_FORMAT(a.delivery_dt, '%Y-%m-%d') txt_delivery_dt FROM ( SELECT a.*, b.cntry_atcd, b.dealer_seq, b.worker_seq, b.premium_rate, b.tot_amt, b.cnfm_yn, b.cnfm_dt, b.wrk_tp_atcd, b.udt_dt as order_dt, (CASE WHEN a.rjt_pkt_tp_atcd = ('00D00001') THEN 'A'  WHEN a.rjt_pkt_tp_atcd = ('00D00002') THEN 'I' END) rjt_pkt_tp, (SELECT mdl_nm FROM om_mdl WHERE mdl_cd = a.mdl_cd) mdl_nm, (SELECT if(count(*)>0,'L','') FROM om_ord_eqp_dtl where pi_no = a.pi_no and po_no = a.po_no and om_ord_eqp_dtl.atcd = '00A00001') lan_L FROM om_ord_eqp a, om_ord_inf b WHERE a.pi_no = b.pi_no AND a.pi_no = '150020bg' AND a.po_no = 45 ) a
DEBUG - 2015-03-22 06:07:54 --> SELECT b.cntry_atcd, b.dealer_seq, b.worker_seq, b.premium_rate, b.tot_amt, b.cnfm_yn, b.cnfm_dt, b.wrk_tp_atcd, a.*, (select atcd_nm from cm_cd_attr where cd = '0091' and atcd = a.currency_atch) txt_currency_atcd, (select atcd_nm from cm_cd_attr where cd = '0092' and atcd = a.serial_currency_atch) txt_serial_currency_atch, (select atcd_nm from cm_cd_attr where cd = '00A0' and atcd = a.opt_hw_atcd) txt_opt_hw_atcd, (select atcd_nm from cm_cd_attr where cd = '00C0' and atcd = a.pc_cab_atcd) txt_pc_cab_atcd FROM ( SELECT b.*,(case when b.cd='0091' then b.atcd else '' end) currency_atch,(CASE WHEN b.cd='0091' AND b.atcd_ox='O' THEN b.atcd ELSE '' END) fitness,(CASE WHEN b.cd='0091' THEN b.atcd_ox ELSE '' END) fitness_ox,(case when b.cd='0092' then b.atcd else '' end) serial_currency_atch,(CASE WHEN b.cd='0092' AND b.atcd_ox='O' THEN b.atcd ELSE '' END) srl_fitness,(CASE WHEN b.cd='0092' THEN b.atcd_ox ELSE '' END) srl_fitness_ox,(case when b.cd='00A0' then b.atcd else '' end) opt_hw_atcd,(case when b.cd='00C0' then b.atcd else '' end) pc_cab_atcd FROM om_ord_eqp a, om_ord_eqp_dtl b WHERE a.pi_no = b.pi_no AND a.po_no = b.po_no AND a.pi_no = '150020bg'		AND a.po_no = 45) a, om_ord_inf b WHERE a.pi_no = b.pi_no order by cd, atcd
DEBUG - 2015-03-22 06:07:54 --> INSERT INTO om_sndmail(pi_no, wrk_tp_atcd, sndmail_atcd, auth_grp_cd, sender_email, sender_eng_nm, title, ctnt, crt_dt, crt_uid) VALUES ('150020bg','00700110', '00700111', 'UD', 'kpbaek@localhost', (SELECT dealer_nm FROM om_dealer   WHERE dealer_uid='sofia@ubs-bg.com'), (select concat(atcd_nm,' - ',(select cmpy_nm from om_dealer where dealer_uid='sofia@ubs-bg.com')) from cm_cd_attr where cd = '0071' and atcd = '00700111'), '', now(), 'sofia@ubs-bg.com')
DEBUG - 2015-03-22 06:07:54 --> sql3:INSERT INTO om_sndmail_dtl (sndmail_seq, email_from, email_to, rcpnt_tp_atcd, snd_yn, crt_dt, crt_uid) SELECT 226, 'safe@safeleader.esy.es', a.dealer_uid, '00100010' rcpnt_tp_atcd, 'N', now(), 'sofia@ubs-bg.com' FROM om_dealer a, om_ord_inf b WHERE a.dealer_seq = b.dealer_seq AND b.pi_no = '150020bg' UNION SELECT 226, 'kpbaek@localhost', (select team_email from om_team where team_atcd = '00600SL0') email_to, '00100040' rcpnt_tp_atcd, 'N', now(), 'sofia@ubs-bg.com'
DEBUG - 2015-03-22 06:07:54 --> File loaded: application/views//common/crtSndMail.php
DEBUG - 2015-03-22 06:07:54 --> Final output sent to browser
DEBUG - 2015-03-22 06:07:54 --> Total execution time: 2.0031
DEBUG - 2015-03-22 06:07:54 --> Config Class Initialized
DEBUG - 2015-03-22 06:07:54 --> Hooks Class Initialized
DEBUG - 2015-03-22 06:07:54 --> Utf8 Class Initialized
DEBUG - 2015-03-22 06:07:54 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 06:07:54 --> URI Class Initialized
DEBUG - 2015-03-22 06:07:54 --> Router Class Initialized
DEBUG - 2015-03-22 06:07:55 --> Output Class Initialized
DEBUG - 2015-03-22 06:07:55 --> Security Class Initialized
DEBUG - 2015-03-22 06:07:55 --> Input Class Initialized
DEBUG - 2015-03-22 06:07:55 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 06:07:55 --> Language Class Initialized
DEBUG - 2015-03-22 06:07:55 --> Loader Class Initialized
DEBUG - 2015-03-22 06:07:55 --> Helper loaded: form_helper
DEBUG - 2015-03-22 06:07:55 --> Helper loaded: language_helper
DEBUG - 2015-03-22 06:07:55 --> Helper loaded: string_helper
DEBUG - 2015-03-22 06:07:55 --> Helper loaded: url_helper
DEBUG - 2015-03-22 06:07:55 --> Database Driver Class Initialized
DEBUG - 2015-03-22 06:07:56 --> Controller Class Initialized
DEBUG - 2015-03-22 06:07:56 --> sql3:SELECT a.pi_no, a.sndmail_seq, a.wrk_tp_atcd, a.sender_email, a.title, a.ctnt, email_from, email_to, snd_yn, b.snd_no, b.rcpnt_tp_atcd, b.rcpnt_team_atcd,(select usr_nm from om_user where uid = a.sender_email) sender_nm,(select usr_nm from om_user where uid = b.email_to) rcpnt_nm FROM om_sndmail a, om_sndmail_dtl b WHERE a.sndmail_seq = b.sndmail_seq and a.sndmail_seq=226 and snd_yn='N'
DEBUG - 2015-03-22 06:07:56 --> File loaded: application/views//common/sndMailResult.php
DEBUG - 2015-03-22 06:07:56 --> Final output sent to browser
DEBUG - 2015-03-22 06:07:56 --> Total execution time: 1.8261
DEBUG - 2015-03-22 06:14:06 --> Config Class Initialized
DEBUG - 2015-03-22 06:14:06 --> Hooks Class Initialized
DEBUG - 2015-03-22 06:14:06 --> Utf8 Class Initialized
DEBUG - 2015-03-22 06:14:06 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 06:14:06 --> URI Class Initialized
DEBUG - 2015-03-22 06:14:06 --> Router Class Initialized
DEBUG - 2015-03-22 06:14:06 --> Output Class Initialized
DEBUG - 2015-03-22 06:14:06 --> Security Class Initialized
DEBUG - 2015-03-22 06:14:06 --> Input Class Initialized
DEBUG - 2015-03-22 06:14:06 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 06:14:07 --> Language Class Initialized
DEBUG - 2015-03-22 06:14:07 --> Loader Class Initialized
DEBUG - 2015-03-22 06:14:07 --> Helper loaded: form_helper
DEBUG - 2015-03-22 06:14:07 --> Helper loaded: language_helper
DEBUG - 2015-03-22 06:14:07 --> Helper loaded: string_helper
DEBUG - 2015-03-22 06:14:07 --> Helper loaded: url_helper
DEBUG - 2015-03-22 06:14:07 --> Database Driver Class Initialized
DEBUG - 2015-03-22 06:14:07 --> Controller Class Initialized
DEBUG - 2015-03-22 06:14:07 --> File loaded: application/views//admin/order/main.php
DEBUG - 2015-03-22 06:14:07 --> Final output sent to browser
DEBUG - 2015-03-22 06:14:07 --> Total execution time: 1.7171
DEBUG - 2015-03-22 06:14:08 --> Config Class Initialized
DEBUG - 2015-03-22 06:14:08 --> Hooks Class Initialized
DEBUG - 2015-03-22 06:14:08 --> Utf8 Class Initialized
DEBUG - 2015-03-22 06:14:08 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 06:14:08 --> URI Class Initialized
DEBUG - 2015-03-22 06:14:08 --> Router Class Initialized
DEBUG - 2015-03-22 06:14:08 --> Output Class Initialized
DEBUG - 2015-03-22 06:14:08 --> Security Class Initialized
DEBUG - 2015-03-22 06:14:08 --> Input Class Initialized
DEBUG - 2015-03-22 06:14:08 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 06:14:09 --> Language Class Initialized
DEBUG - 2015-03-22 06:14:09 --> Loader Class Initialized
DEBUG - 2015-03-22 06:14:09 --> Helper loaded: form_helper
DEBUG - 2015-03-22 06:14:09 --> Helper loaded: language_helper
DEBUG - 2015-03-22 06:14:09 --> Helper loaded: string_helper
DEBUG - 2015-03-22 06:14:09 --> Helper loaded: url_helper
DEBUG - 2015-03-22 06:14:09 --> Database Driver Class Initialized
DEBUG - 2015-03-22 06:14:09 --> Controller Class Initialized
DEBUG - 2015-03-22 06:14:09 --> File loaded: application/views//admin/order/tab01.php
DEBUG - 2015-03-22 06:14:09 --> Final output sent to browser
DEBUG - 2015-03-22 06:14:09 --> Total execution time: 1.6531
DEBUG - 2015-03-22 06:14:10 --> Config Class Initialized
DEBUG - 2015-03-22 06:14:10 --> Hooks Class Initialized
DEBUG - 2015-03-22 06:14:10 --> Utf8 Class Initialized
DEBUG - 2015-03-22 06:14:10 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 06:14:10 --> URI Class Initialized
DEBUG - 2015-03-22 06:14:10 --> Router Class Initialized
DEBUG - 2015-03-22 06:14:10 --> Output Class Initialized
DEBUG - 2015-03-22 06:14:10 --> Security Class Initialized
DEBUG - 2015-03-22 06:14:10 --> Input Class Initialized
DEBUG - 2015-03-22 06:14:10 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 06:14:11 --> Language Class Initialized
DEBUG - 2015-03-22 06:14:11 --> Loader Class Initialized
DEBUG - 2015-03-22 06:14:11 --> Helper loaded: form_helper
DEBUG - 2015-03-22 06:14:11 --> Helper loaded: language_helper
DEBUG - 2015-03-22 06:14:11 --> Helper loaded: string_helper
DEBUG - 2015-03-22 06:14:11 --> Helper loaded: url_helper
DEBUG - 2015-03-22 06:14:11 --> Database Driver Class Initialized
DEBUG - 2015-03-22 06:14:11 --> Controller Class Initialized
DEBUG - 2015-03-22 06:14:11 --> File loaded: application/views//common/user/viewDealer.php
DEBUG - 2015-03-22 06:14:11 --> Final output sent to browser
DEBUG - 2015-03-22 06:14:11 --> Total execution time: 1.6611
DEBUG - 2015-03-22 06:14:12 --> Config Class Initialized
DEBUG - 2015-03-22 06:14:12 --> Config Class Initialized
DEBUG - 2015-03-22 06:14:12 --> Config Class Initialized
DEBUG - 2015-03-22 06:14:12 --> Config Class Initialized
DEBUG - 2015-03-22 06:14:12 --> Config Class Initialized
DEBUG - 2015-03-22 06:14:12 --> Config Class Initialized
DEBUG - 2015-03-22 06:14:12 --> Hooks Class Initialized
DEBUG - 2015-03-22 06:14:12 --> Hooks Class Initialized
DEBUG - 2015-03-22 06:14:12 --> Hooks Class Initialized
DEBUG - 2015-03-22 06:14:12 --> Hooks Class Initialized
DEBUG - 2015-03-22 06:14:12 --> Hooks Class Initialized
DEBUG - 2015-03-22 06:14:12 --> Hooks Class Initialized
DEBUG - 2015-03-22 06:14:12 --> Utf8 Class Initialized
DEBUG - 2015-03-22 06:14:12 --> Utf8 Class Initialized
DEBUG - 2015-03-22 06:14:12 --> Utf8 Class Initialized
DEBUG - 2015-03-22 06:14:12 --> Utf8 Class Initialized
DEBUG - 2015-03-22 06:14:12 --> Utf8 Class Initialized
DEBUG - 2015-03-22 06:14:12 --> Utf8 Class Initialized
DEBUG - 2015-03-22 06:14:12 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 06:14:12 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 06:14:13 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 06:14:13 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 06:14:13 --> URI Class Initialized
DEBUG - 2015-03-22 06:14:13 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 06:14:13 --> Config Class Initialized
DEBUG - 2015-03-22 06:14:13 --> Config Class Initialized
DEBUG - 2015-03-22 06:14:13 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 06:14:13 --> URI Class Initialized
DEBUG - 2015-03-22 06:14:13 --> URI Class Initialized
DEBUG - 2015-03-22 06:14:13 --> URI Class Initialized
DEBUG - 2015-03-22 06:14:13 --> Router Class Initialized
DEBUG - 2015-03-22 06:14:13 --> Hooks Class Initialized
DEBUG - 2015-03-22 06:14:13 --> URI Class Initialized
DEBUG - 2015-03-22 06:14:13 --> Hooks Class Initialized
DEBUG - 2015-03-22 06:14:13 --> Router Class Initialized
DEBUG - 2015-03-22 06:14:13 --> URI Class Initialized
DEBUG - 2015-03-22 06:14:13 --> Router Class Initialized
DEBUG - 2015-03-22 06:14:13 --> Router Class Initialized
DEBUG - 2015-03-22 06:14:13 --> Output Class Initialized
DEBUG - 2015-03-22 06:14:13 --> Utf8 Class Initialized
DEBUG - 2015-03-22 06:14:13 --> Router Class Initialized
DEBUG - 2015-03-22 06:14:13 --> Utf8 Class Initialized
DEBUG - 2015-03-22 06:14:13 --> Output Class Initialized
DEBUG - 2015-03-22 06:14:13 --> Config Class Initialized
DEBUG - 2015-03-22 06:14:13 --> Config Class Initialized
DEBUG - 2015-03-22 06:14:13 --> Output Class Initialized
DEBUG - 2015-03-22 06:14:13 --> Router Class Initialized
DEBUG - 2015-03-22 06:14:13 --> Security Class Initialized
DEBUG - 2015-03-22 06:14:14 --> Output Class Initialized
DEBUG - 2015-03-22 06:14:14 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 06:14:14 --> Output Class Initialized
DEBUG - 2015-03-22 06:14:14 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 06:14:14 --> Hooks Class Initialized
DEBUG - 2015-03-22 06:14:14 --> Security Class Initialized
DEBUG - 2015-03-22 06:14:14 --> Hooks Class Initialized
DEBUG - 2015-03-22 06:14:14 --> Security Class Initialized
DEBUG - 2015-03-22 06:14:14 --> Output Class Initialized
DEBUG - 2015-03-22 06:14:14 --> Input Class Initialized
DEBUG - 2015-03-22 06:14:14 --> Security Class Initialized
DEBUG - 2015-03-22 06:14:14 --> URI Class Initialized
DEBUG - 2015-03-22 06:14:14 --> URI Class Initialized
DEBUG - 2015-03-22 06:14:14 --> Utf8 Class Initialized
DEBUG - 2015-03-22 06:14:14 --> Input Class Initialized
DEBUG - 2015-03-22 06:14:14 --> Security Class Initialized
DEBUG - 2015-03-22 06:14:14 --> Config Class Initialized
DEBUG - 2015-03-22 06:14:14 --> Utf8 Class Initialized
DEBUG - 2015-03-22 06:14:14 --> Input Class Initialized
DEBUG - 2015-03-22 06:14:14 --> Security Class Initialized
DEBUG - 2015-03-22 06:14:14 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 06:14:14 --> Router Class Initialized
DEBUG - 2015-03-22 06:14:14 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 06:14:15 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 06:14:15 --> Input Class Initialized
DEBUG - 2015-03-22 06:14:15 --> Router Class Initialized
DEBUG - 2015-03-22 06:14:15 --> Input Class Initialized
DEBUG - 2015-03-22 06:14:15 --> Config Class Initialized
DEBUG - 2015-03-22 06:14:15 --> Hooks Class Initialized
DEBUG - 2015-03-22 06:14:15 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 06:14:15 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 06:14:15 --> Language Class Initialized
DEBUG - 2015-03-22 06:14:15 --> Output Class Initialized
DEBUG - 2015-03-22 06:14:15 --> URI Class Initialized
DEBUG - 2015-03-22 06:14:15 --> Input Class Initialized
DEBUG - 2015-03-22 06:14:15 --> Language Class Initialized
DEBUG - 2015-03-22 06:14:15 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 06:14:15 --> Hooks Class Initialized
DEBUG - 2015-03-22 06:14:15 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 06:14:15 --> Output Class Initialized
DEBUG - 2015-03-22 06:14:15 --> URI Class Initialized
DEBUG - 2015-03-22 06:14:15 --> Utf8 Class Initialized
DEBUG - 2015-03-22 06:14:15 --> Router Class Initialized
DEBUG - 2015-03-22 06:14:15 --> Language Class Initialized
DEBUG - 2015-03-22 06:14:15 --> Security Class Initialized
DEBUG - 2015-03-22 06:14:15 --> Loader Class Initialized
DEBUG - 2015-03-22 06:14:15 --> Output Class Initialized
DEBUG - 2015-03-22 06:14:16 --> Utf8 Class Initialized
DEBUG - 2015-03-22 06:14:16 --> Loader Class Initialized
DEBUG - 2015-03-22 06:14:16 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 06:14:16 --> Input Class Initialized
DEBUG - 2015-03-22 06:14:16 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 06:14:16 --> Language Class Initialized
DEBUG - 2015-03-22 06:14:16 --> Language Class Initialized
DEBUG - 2015-03-22 06:14:16 --> Helper loaded: form_helper
DEBUG - 2015-03-22 06:14:16 --> Language Class Initialized
DEBUG - 2015-03-22 06:14:16 --> Loader Class Initialized
DEBUG - 2015-03-22 06:14:16 --> Security Class Initialized
DEBUG - 2015-03-22 06:14:16 --> Loader Class Initialized
DEBUG - 2015-03-22 06:14:16 --> Helper loaded: form_helper
DEBUG - 2015-03-22 06:14:16 --> Router Class Initialized
DEBUG - 2015-03-22 06:14:16 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 06:14:16 --> URI Class Initialized
DEBUG - 2015-03-22 06:14:16 --> Security Class Initialized
DEBUG - 2015-03-22 06:14:16 --> Loader Class Initialized
DEBUG - 2015-03-22 06:14:16 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 06:14:16 --> Helper loaded: language_helper
DEBUG - 2015-03-22 06:14:16 --> Language Class Initialized
DEBUG - 2015-03-22 06:14:16 --> Helper loaded: form_helper
DEBUG - 2015-03-22 06:14:16 --> Input Class Initialized
DEBUG - 2015-03-22 06:14:16 --> Helper loaded: form_helper
DEBUG - 2015-03-22 06:14:16 --> Loader Class Initialized
DEBUG - 2015-03-22 06:14:16 --> Loader Class Initialized
DEBUG - 2015-03-22 06:14:16 --> Helper loaded: language_helper
DEBUG - 2015-03-22 06:14:16 --> Output Class Initialized
DEBUG - 2015-03-22 06:14:16 --> Helper loaded: language_helper
DEBUG - 2015-03-22 06:14:16 --> Helper loaded: form_helper
DEBUG - 2015-03-22 06:14:16 --> URI Class Initialized
DEBUG - 2015-03-22 06:14:16 --> Router Class Initialized
DEBUG - 2015-03-22 06:14:16 --> Input Class Initialized
DEBUG - 2015-03-22 06:14:16 --> Helper loaded: language_helper
DEBUG - 2015-03-22 06:14:16 --> Helper loaded: form_helper
DEBUG - 2015-03-22 06:14:16 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 06:14:17 --> Helper loaded: string_helper
DEBUG - 2015-03-22 06:14:17 --> Helper loaded: form_helper
DEBUG - 2015-03-22 06:14:17 --> Helper loaded: string_helper
DEBUG - 2015-03-22 06:14:17 --> Security Class Initialized
DEBUG - 2015-03-22 06:14:17 --> Helper loaded: string_helper
DEBUG - 2015-03-22 06:14:17 --> Helper loaded: language_helper
DEBUG - 2015-03-22 06:14:17 --> Router Class Initialized
DEBUG - 2015-03-22 06:14:17 --> Output Class Initialized
DEBUG - 2015-03-22 06:14:17 --> Helper loaded: language_helper
DEBUG - 2015-03-22 06:14:17 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 06:14:17 --> Helper loaded: string_helper
DEBUG - 2015-03-22 06:14:17 --> Language Class Initialized
DEBUG - 2015-03-22 06:14:17 --> Helper loaded: url_helper
DEBUG - 2015-03-22 06:14:17 --> Helper loaded: language_helper
DEBUG - 2015-03-22 06:14:17 --> Helper loaded: url_helper
DEBUG - 2015-03-22 06:14:17 --> Helper loaded: string_helper
DEBUG - 2015-03-22 06:14:17 --> Helper loaded: url_helper
DEBUG - 2015-03-22 06:14:17 --> Input Class Initialized
DEBUG - 2015-03-22 06:14:17 --> Output Class Initialized
DEBUG - 2015-03-22 06:14:17 --> Helper loaded: string_helper
DEBUG - 2015-03-22 06:14:17 --> Security Class Initialized
DEBUG - 2015-03-22 06:14:18 --> Language Class Initialized
DEBUG - 2015-03-22 06:14:18 --> Helper loaded: url_helper
DEBUG - 2015-03-22 06:14:18 --> Loader Class Initialized
DEBUG - 2015-03-22 06:14:18 --> Database Driver Class Initialized
DEBUG - 2015-03-22 06:14:18 --> Helper loaded: string_helper
DEBUG - 2015-03-22 06:14:18 --> Helper loaded: url_helper
DEBUG - 2015-03-22 06:14:18 --> Database Driver Class Initialized
DEBUG - 2015-03-22 06:14:18 --> Helper loaded: url_helper
DEBUG - 2015-03-22 06:14:18 --> Database Driver Class Initialized
DEBUG - 2015-03-22 06:14:18 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 06:14:18 --> Security Class Initialized
DEBUG - 2015-03-22 06:14:18 --> Input Class Initialized
DEBUG - 2015-03-22 06:14:18 --> Loader Class Initialized
DEBUG - 2015-03-22 06:14:18 --> Database Driver Class Initialized
DEBUG - 2015-03-22 06:14:18 --> Helper loaded: form_helper
DEBUG - 2015-03-22 06:14:18 --> Controller Class Initialized
DEBUG - 2015-03-22 06:14:18 --> Helper loaded: url_helper
DEBUG - 2015-03-22 06:14:18 --> Database Driver Class Initialized
DEBUG - 2015-03-22 06:14:18 --> Controller Class Initialized
DEBUG - 2015-03-22 06:14:18 --> Database Driver Class Initialized
DEBUG - 2015-03-22 06:14:18 --> Controller Class Initialized
DEBUG - 2015-03-22 06:14:18 --> Language Class Initialized
DEBUG - 2015-03-22 06:14:18 --> Input Class Initialized
DEBUG - 2015-03-22 06:14:19 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 06:14:19 --> Controller Class Initialized
DEBUG - 2015-03-22 06:14:19 --> Helper loaded: form_helper
DEBUG - 2015-03-22 06:14:19 --> Controller Class Initialized
DEBUG - 2015-03-22 06:14:19 --> Helper loaded: language_helper
DEBUG - 2015-03-22 06:14:19 --> File loaded: application/views//common/user/listUserPiNo.php
DEBUG - 2015-03-22 06:14:19 --> Database Driver Class Initialized
DEBUG - 2015-03-22 06:14:19 --> Controller Class Initialized
DEBUG - 2015-03-22 06:14:19 --> File loaded: application/views//common/listModel.php
DEBUG - 2015-03-22 06:14:19 --> Loader Class Initialized
DEBUG - 2015-03-22 06:14:19 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 06:14:19 --> Language Class Initialized
DEBUG - 2015-03-22 06:14:19 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 06:14:19 --> Helper loaded: language_helper
DEBUG - 2015-03-22 06:14:19 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 06:14:19 --> Helper loaded: string_helper
DEBUG - 2015-03-22 06:14:19 --> Final output sent to browser
DEBUG - 2015-03-22 06:14:19 --> Controller Class Initialized
DEBUG - 2015-03-22 06:14:19 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 06:14:19 --> Final output sent to browser
DEBUG - 2015-03-22 06:14:20 --> Helper loaded: form_helper
DEBUG - 2015-03-22 06:14:20 --> Language Class Initialized
DEBUG - 2015-03-22 06:14:20 --> Final output sent to browser
DEBUG - 2015-03-22 06:14:20 --> Loader Class Initialized
DEBUG - 2015-03-22 06:14:20 --> Total execution time: 7.9085
DEBUG - 2015-03-22 06:14:20 --> Helper loaded: language_helper
DEBUG - 2015-03-22 06:14:20 --> Helper loaded: url_helper
DEBUG - 2015-03-22 06:14:20 --> Loader Class Initialized
DEBUG - 2015-03-22 06:14:20 --> Total execution time: 8.0875
DEBUG - 2015-03-22 06:14:20 --> File loaded: application/views//common/user/listCntry.php
DEBUG - 2015-03-22 06:14:20 --> Helper loaded: string_helper
DEBUG - 2015-03-22 06:14:20 --> Database Driver Class Initialized
DEBUG - 2015-03-22 06:14:20 --> Helper loaded: form_helper
DEBUG - 2015-03-22 06:14:20 --> Helper loaded: string_helper
DEBUG - 2015-03-22 06:14:20 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 06:14:20 --> Final output sent to browser
DEBUG - 2015-03-22 06:14:20 --> Final output sent to browser
DEBUG - 2015-03-22 06:14:20 --> Helper loaded: form_helper
DEBUG - 2015-03-22 06:14:20 --> Total execution time: 7.9045
DEBUG - 2015-03-22 06:14:20 --> Final output sent to browser
DEBUG - 2015-03-22 06:14:20 --> Helper loaded: language_helper
DEBUG - 2015-03-22 06:14:20 --> Config Class Initialized
DEBUG - 2015-03-22 06:14:20 --> Helper loaded: url_helper
DEBUG - 2015-03-22 06:14:20 --> Helper loaded: url_helper
DEBUG - 2015-03-22 06:14:20 --> Final output sent to browser
DEBUG - 2015-03-22 06:14:20 --> Controller Class Initialized
DEBUG - 2015-03-22 06:14:20 --> Config Class Initialized
DEBUG - 2015-03-22 06:14:20 --> Total execution time: 8.1885
DEBUG - 2015-03-22 06:14:21 --> Helper loaded: language_helper
DEBUG - 2015-03-22 06:14:21 --> Total execution time: 8.2515
DEBUG - 2015-03-22 06:14:21 --> Hooks Class Initialized
DEBUG - 2015-03-22 06:14:21 --> Helper loaded: string_helper
DEBUG - 2015-03-22 06:14:21 --> Total execution time: 8.3835
DEBUG - 2015-03-22 06:14:21 --> Total execution time: 7.7174
DEBUG - 2015-03-22 06:14:21 --> Database Driver Class Initialized
DEBUG - 2015-03-22 06:14:21 --> Database Driver Class Initialized
DEBUG - 2015-03-22 06:14:21 --> Controller Class Initialized
DEBUG - 2015-03-22 06:14:21 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 06:14:21 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 06:14:21 --> Hooks Class Initialized
DEBUG - 2015-03-22 06:14:21 --> Utf8 Class Initialized
DEBUG - 2015-03-22 06:14:21 --> Helper loaded: string_helper
DEBUG - 2015-03-22 06:14:21 --> Helper loaded: url_helper
DEBUG - 2015-03-22 06:14:21 --> Final output sent to browser
DEBUG - 2015-03-22 06:14:21 --> Final output sent to browser
DEBUG - 2015-03-22 06:14:21 --> Utf8 Class Initialized
DEBUG - 2015-03-22 06:14:21 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 06:14:21 --> Controller Class Initialized
DEBUG - 2015-03-22 06:14:21 --> Database Driver Class Initialized
DEBUG - 2015-03-22 06:14:22 --> Helper loaded: url_helper
DEBUG - 2015-03-22 06:14:22 --> Total execution time: 7.9405
DEBUG - 2015-03-22 06:14:22 --> Total execution time: 8.7365
DEBUG - 2015-03-22 06:14:22 --> URI Class Initialized
DEBUG - 2015-03-22 06:14:22 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 06:14:22 --> Controller Class Initialized
DEBUG - 2015-03-22 06:14:22 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 06:14:22 --> Database Driver Class Initialized
DEBUG - 2015-03-22 06:14:22 --> Router Class Initialized
DEBUG - 2015-03-22 06:14:22 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 06:14:22 --> Final output sent to browser
DEBUG - 2015-03-22 06:14:22 --> URI Class Initialized
DEBUG - 2015-03-22 06:14:22 --> Final output sent to browser
DEBUG - 2015-03-22 06:14:22 --> Controller Class Initialized
DEBUG - 2015-03-22 06:14:22 --> Output Class Initialized
DEBUG - 2015-03-22 06:14:22 --> Total execution time: 8.7535
DEBUG - 2015-03-22 06:14:22 --> Router Class Initialized
DEBUG - 2015-03-22 06:14:22 --> Total execution time: 7.9345
DEBUG - 2015-03-22 06:14:22 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 06:14:23 --> Security Class Initialized
DEBUG - 2015-03-22 06:14:23 --> Output Class Initialized
DEBUG - 2015-03-22 06:14:23 --> Final output sent to browser
DEBUG - 2015-03-22 06:14:23 --> Input Class Initialized
DEBUG - 2015-03-22 06:14:23 --> Security Class Initialized
DEBUG - 2015-03-22 06:14:23 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 06:14:23 --> Total execution time: 7.9475
DEBUG - 2015-03-22 06:14:23 --> Input Class Initialized
DEBUG - 2015-03-22 06:14:23 --> Language Class Initialized
DEBUG - 2015-03-22 06:14:23 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 06:14:23 --> Loader Class Initialized
DEBUG - 2015-03-22 06:14:23 --> Language Class Initialized
DEBUG - 2015-03-22 06:14:23 --> Helper loaded: form_helper
DEBUG - 2015-03-22 06:14:23 --> Loader Class Initialized
DEBUG - 2015-03-22 06:14:23 --> Helper loaded: language_helper
DEBUG - 2015-03-22 06:14:23 --> Helper loaded: form_helper
DEBUG - 2015-03-22 06:14:23 --> Helper loaded: string_helper
DEBUG - 2015-03-22 06:14:23 --> Helper loaded: language_helper
DEBUG - 2015-03-22 06:14:23 --> Helper loaded: url_helper
DEBUG - 2015-03-22 06:14:23 --> Helper loaded: string_helper
DEBUG - 2015-03-22 06:14:23 --> Helper loaded: url_helper
DEBUG - 2015-03-22 06:14:23 --> Database Driver Class Initialized
DEBUG - 2015-03-22 06:14:24 --> Database Driver Class Initialized
DEBUG - 2015-03-22 06:14:24 --> Controller Class Initialized
DEBUG - 2015-03-22 06:14:24 --> Controller Class Initialized
DEBUG - 2015-03-22 06:14:24 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 06:14:24 --> File loaded: application/views//common/listCodeImg.php
DEBUG - 2015-03-22 06:14:24 --> Final output sent to browser
DEBUG - 2015-03-22 06:14:24 --> Total execution time: 3.7852
DEBUG - 2015-03-22 06:14:24 --> Final output sent to browser
DEBUG - 2015-03-22 06:14:24 --> Total execution time: 3.7182
DEBUG - 2015-03-22 06:14:33 --> Config Class Initialized
DEBUG - 2015-03-22 06:14:34 --> Hooks Class Initialized
DEBUG - 2015-03-22 06:14:34 --> Utf8 Class Initialized
DEBUG - 2015-03-22 06:14:34 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 06:14:34 --> URI Class Initialized
DEBUG - 2015-03-22 06:14:34 --> Router Class Initialized
DEBUG - 2015-03-22 06:14:34 --> Output Class Initialized
DEBUG - 2015-03-22 06:14:34 --> Security Class Initialized
DEBUG - 2015-03-22 06:14:34 --> Input Class Initialized
DEBUG - 2015-03-22 06:14:34 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 06:14:34 --> Language Class Initialized
DEBUG - 2015-03-22 06:14:34 --> Loader Class Initialized
DEBUG - 2015-03-22 06:14:35 --> Helper loaded: form_helper
DEBUG - 2015-03-22 06:14:35 --> Helper loaded: language_helper
DEBUG - 2015-03-22 06:14:35 --> Helper loaded: string_helper
DEBUG - 2015-03-22 06:14:35 --> Helper loaded: url_helper
DEBUG - 2015-03-22 06:14:35 --> Database Driver Class Initialized
DEBUG - 2015-03-22 06:14:35 --> Controller Class Initialized
DEBUG - 2015-03-22 06:14:35 --> File loaded: application/views//admin/order/crtEqpOrder.php
DEBUG - 2015-03-22 06:14:35 --> Final output sent to browser
DEBUG - 2015-03-22 06:14:35 --> Total execution time: 1.6921
DEBUG - 2015-03-22 06:14:35 --> Config Class Initialized
DEBUG - 2015-03-22 06:14:35 --> Hooks Class Initialized
DEBUG - 2015-03-22 06:14:35 --> Utf8 Class Initialized
DEBUG - 2015-03-22 06:14:36 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 06:14:36 --> URI Class Initialized
DEBUG - 2015-03-22 06:14:36 --> Router Class Initialized
DEBUG - 2015-03-22 06:14:36 --> Output Class Initialized
DEBUG - 2015-03-22 06:14:36 --> Security Class Initialized
DEBUG - 2015-03-22 06:14:36 --> Input Class Initialized
DEBUG - 2015-03-22 06:14:36 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 06:14:36 --> Language Class Initialized
DEBUG - 2015-03-22 06:14:36 --> Loader Class Initialized
DEBUG - 2015-03-22 06:14:36 --> Helper loaded: form_helper
DEBUG - 2015-03-22 06:14:36 --> Helper loaded: language_helper
DEBUG - 2015-03-22 06:14:37 --> Helper loaded: string_helper
DEBUG - 2015-03-22 06:14:37 --> Helper loaded: url_helper
DEBUG - 2015-03-22 06:14:37 --> Database Driver Class Initialized
DEBUG - 2015-03-22 06:14:37 --> Controller Class Initialized
DEBUG - 2015-03-22 06:14:37 --> readEqpOrder:SELECT a.*, (select atcd_nm from cm_cd_attr where cd = '00B0' and atcd = a.srl_atcd) txt_srl_atcd, (select atcd_nm from cm_cd_attr where cd = '00D0' and atcd = a.rjt_pkt_tp_atcd) txt_rjt_pkt_tp_atcd, (select atcd_nm from cm_cd_attr where cd = '00E0' and atcd = a.pwr_cab_atcd) txt_pwr_cab_atcd, (select atcd_nm from cm_cd_attr where cd = '00F0' and atcd = a.shipped_by_atcd) txt_shipped_by_atcd, (select atcd_nm from cm_cd_attr where cd = '00F1' and atcd = a.courier_atcd) txt_courier_atcd, (select atcd_nm from cm_cd_attr where cd = '00G0' and atcd = a.payment_atcd) txt_payment_atcd, (select atcd_nm from cm_cd_attr where cd = '00H0' and atcd = a.incoterms_atcd) txt_incoterms_atcd, (select atcd_nm from cm_cd_attr where cd = '00L0' and atcd = a.lcd_color_atcd) txt_lcd_color_atcd, (select atcd_nm from cm_cd_attr where cd = '00M0' and atcd = a.lcd_lang_atcd) txt_lcd_lang_atcd, (select cmpy_nm from om_dealer where dealer_seq = a.dealer_seq) cmpy_nm, (select atcd_nm from cm_cd_attr where cd = '0022' and atcd = a.cntry_atcd) txt_cntry_atcd, if(mdl_cd in ('0007','0009'), concat(mdl_nm, concat('R',lan_L),if(a.lcd_color_atcd='00L00002','C','')), if(mdl_cd in ('3000'), concat(mdl_nm, concat('F',rjt_pkt_tp),''),mdl_nm)) txt_mdl_nm, DATE_FORMAT(a.delivery_dt, '%Y-%m-%d') txt_delivery_dt FROM ( SELECT a.*, b.cntry_atcd, b.dealer_seq, b.worker_seq, b.premium_rate, b.tot_amt, b.cnfm_yn, b.cnfm_dt, b.wrk_tp_atcd, b.udt_dt as order_dt, (CASE WHEN a.rjt_pkt_tp_atcd = ('00D00001') THEN 'A'  WHEN a.rjt_pkt_tp_atcd = ('00D00002') THEN 'I' END) rjt_pkt_tp, (SELECT mdl_nm FROM om_mdl WHERE mdl_cd = a.mdl_cd) mdl_nm, (SELECT if(count(*)>0,'L','') FROM om_ord_eqp_dtl where pi_no = a.pi_no and po_no = a.po_no and om_ord_eqp_dtl.atcd = '00A00001') lan_L FROM om_ord_eqp a, om_ord_inf b WHERE a.pi_no = b.pi_no AND a.pi_no = '150021bg' AND a.po_no = 46 ) a
DEBUG - 2015-03-22 06:14:37 --> SELECT b.cntry_atcd, b.dealer_seq, b.worker_seq, b.premium_rate, b.tot_amt, b.cnfm_yn, b.cnfm_dt, b.wrk_tp_atcd, a.*, (select atcd_nm from cm_cd_attr where cd = '0091' and atcd = a.currency_atch) txt_currency_atcd, (select atcd_nm from cm_cd_attr where cd = '0092' and atcd = a.serial_currency_atch) txt_serial_currency_atch, (select atcd_nm from cm_cd_attr where cd = '00A0' and atcd = a.opt_hw_atcd) txt_opt_hw_atcd, (select atcd_nm from cm_cd_attr where cd = '00C0' and atcd = a.pc_cab_atcd) txt_pc_cab_atcd FROM ( SELECT b.*,(case when b.cd='0091' then b.atcd else '' end) currency_atch,(CASE WHEN b.cd='0091' AND b.atcd_ox='O' THEN b.atcd ELSE '' END) fitness,(CASE WHEN b.cd='0091' THEN b.atcd_ox ELSE '' END) fitness_ox,(case when b.cd='0092' then b.atcd else '' end) serial_currency_atch,(CASE WHEN b.cd='0092' AND b.atcd_ox='O' THEN b.atcd ELSE '' END) srl_fitness,(CASE WHEN b.cd='0092' THEN b.atcd_ox ELSE '' END) srl_fitness_ox,(case when b.cd='00A0' then b.atcd else '' end) opt_hw_atcd,(case when b.cd='00C0' then b.atcd else '' end) pc_cab_atcd FROM om_ord_eqp a, om_ord_eqp_dtl b WHERE a.pi_no = b.pi_no AND a.po_no = b.po_no AND a.pi_no = '150021bg'		AND a.po_no = 46) a, om_ord_inf b WHERE a.pi_no = b.pi_no order by cd, atcd
DEBUG - 2015-03-22 06:14:37 --> INSERT INTO om_sndmail(pi_no, wrk_tp_atcd, sndmail_atcd, auth_grp_cd, sender_email, sender_eng_nm, title, ctnt, crt_dt, crt_uid) VALUES ('150021bg','00700110', '00700111', 'UD', 'kpbaek@localhost', (SELECT dealer_nm FROM om_dealer   WHERE dealer_uid='sofia@ubs-bg.com'), (select concat(atcd_nm,' - ',(select cmpy_nm from om_dealer where dealer_uid='sofia@ubs-bg.com')) from cm_cd_attr where cd = '0071' and atcd = '00700111'), '', now(), 'sofia@ubs-bg.com')
DEBUG - 2015-03-22 06:14:37 --> sql3:INSERT INTO om_sndmail_dtl (sndmail_seq, email_from, email_to, rcpnt_tp_atcd, snd_yn, crt_dt, crt_uid) SELECT 227, 'safe@safeleader.esy.es', a.dealer_uid, '00100010' rcpnt_tp_atcd, 'N', now(), 'sofia@ubs-bg.com' FROM om_dealer a, om_ord_inf b WHERE a.dealer_seq = b.dealer_seq AND b.pi_no = '150021bg' UNION SELECT 227, 'kpbaek@localhost', (select team_email from om_team where team_atcd = '00600SL0') email_to, '00100040' rcpnt_tp_atcd, 'N', now(), 'sofia@ubs-bg.com'
DEBUG - 2015-03-22 06:14:37 --> File loaded: application/views//common/crtSndMail.php
DEBUG - 2015-03-22 06:14:37 --> Final output sent to browser
DEBUG - 2015-03-22 06:14:37 --> Total execution time: 2.0451
DEBUG - 2015-03-22 06:14:38 --> Config Class Initialized
DEBUG - 2015-03-22 06:14:38 --> Hooks Class Initialized
DEBUG - 2015-03-22 06:14:38 --> Utf8 Class Initialized
DEBUG - 2015-03-22 06:14:38 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 06:14:38 --> URI Class Initialized
DEBUG - 2015-03-22 06:14:38 --> Router Class Initialized
DEBUG - 2015-03-22 06:14:38 --> Output Class Initialized
DEBUG - 2015-03-22 06:14:38 --> Security Class Initialized
DEBUG - 2015-03-22 06:14:38 --> Input Class Initialized
DEBUG - 2015-03-22 06:14:38 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 06:14:39 --> Language Class Initialized
DEBUG - 2015-03-22 06:14:39 --> Loader Class Initialized
DEBUG - 2015-03-22 06:14:39 --> Helper loaded: form_helper
DEBUG - 2015-03-22 06:14:39 --> Helper loaded: language_helper
DEBUG - 2015-03-22 06:14:39 --> Helper loaded: string_helper
DEBUG - 2015-03-22 06:14:39 --> Helper loaded: url_helper
DEBUG - 2015-03-22 06:14:39 --> Database Driver Class Initialized
DEBUG - 2015-03-22 06:14:39 --> Controller Class Initialized
DEBUG - 2015-03-22 06:14:39 --> sql3:SELECT a.pi_no, a.sndmail_seq, a.wrk_tp_atcd, a.sender_email, a.title, a.ctnt, email_from, email_to, snd_yn, b.snd_no, b.rcpnt_tp_atcd, b.rcpnt_team_atcd,(select usr_nm from om_user where uid = a.sender_email) sender_nm,(select usr_nm from om_user where uid = b.email_to) rcpnt_nm FROM om_sndmail a, om_sndmail_dtl b WHERE a.sndmail_seq = b.sndmail_seq and a.sndmail_seq=227 and snd_yn='N'
DEBUG - 2015-03-22 06:14:39 --> File loaded: application/views//common/sndMailResult.php
DEBUG - 2015-03-22 06:14:40 --> Final output sent to browser
DEBUG - 2015-03-22 06:14:40 --> Total execution time: 1.9881
DEBUG - 2015-03-22 06:16:41 --> Config Class Initialized
DEBUG - 2015-03-22 06:16:41 --> Hooks Class Initialized
DEBUG - 2015-03-22 06:16:41 --> Utf8 Class Initialized
DEBUG - 2015-03-22 06:16:42 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 06:16:42 --> URI Class Initialized
DEBUG - 2015-03-22 06:16:42 --> Router Class Initialized
DEBUG - 2015-03-22 06:16:42 --> Output Class Initialized
DEBUG - 2015-03-22 06:16:42 --> Security Class Initialized
DEBUG - 2015-03-22 06:16:42 --> Input Class Initialized
DEBUG - 2015-03-22 06:16:42 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 06:16:42 --> Language Class Initialized
DEBUG - 2015-03-22 06:16:42 --> Loader Class Initialized
DEBUG - 2015-03-22 06:16:42 --> Helper loaded: form_helper
DEBUG - 2015-03-22 06:16:43 --> Helper loaded: language_helper
DEBUG - 2015-03-22 06:16:43 --> Helper loaded: string_helper
DEBUG - 2015-03-22 06:16:43 --> Helper loaded: url_helper
DEBUG - 2015-03-22 06:16:43 --> Database Driver Class Initialized
DEBUG - 2015-03-22 06:16:43 --> Controller Class Initialized
DEBUG - 2015-03-22 06:16:43 --> File loaded: application/views//admin/order/main.php
DEBUG - 2015-03-22 06:16:43 --> Final output sent to browser
DEBUG - 2015-03-22 06:16:43 --> Total execution time: 1.8161
DEBUG - 2015-03-22 06:16:44 --> Config Class Initialized
DEBUG - 2015-03-22 06:16:44 --> Hooks Class Initialized
DEBUG - 2015-03-22 06:16:44 --> Utf8 Class Initialized
DEBUG - 2015-03-22 06:16:44 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 06:16:44 --> URI Class Initialized
DEBUG - 2015-03-22 06:16:44 --> Router Class Initialized
DEBUG - 2015-03-22 06:16:44 --> Output Class Initialized
DEBUG - 2015-03-22 06:16:44 --> Security Class Initialized
DEBUG - 2015-03-22 06:16:44 --> Input Class Initialized
DEBUG - 2015-03-22 06:16:44 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 06:16:45 --> Language Class Initialized
DEBUG - 2015-03-22 06:16:45 --> Loader Class Initialized
DEBUG - 2015-03-22 06:16:45 --> Helper loaded: form_helper
DEBUG - 2015-03-22 06:16:45 --> Helper loaded: language_helper
DEBUG - 2015-03-22 06:16:45 --> Helper loaded: string_helper
DEBUG - 2015-03-22 06:16:45 --> Helper loaded: url_helper
DEBUG - 2015-03-22 06:16:45 --> Database Driver Class Initialized
DEBUG - 2015-03-22 06:16:45 --> Controller Class Initialized
DEBUG - 2015-03-22 06:16:45 --> File loaded: application/views//admin/order/tab01.php
DEBUG - 2015-03-22 06:16:45 --> Final output sent to browser
DEBUG - 2015-03-22 06:16:45 --> Total execution time: 1.7401
DEBUG - 2015-03-22 06:16:46 --> Config Class Initialized
DEBUG - 2015-03-22 06:16:46 --> Hooks Class Initialized
DEBUG - 2015-03-22 06:16:46 --> Utf8 Class Initialized
DEBUG - 2015-03-22 06:16:46 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 06:16:46 --> URI Class Initialized
DEBUG - 2015-03-22 06:16:46 --> Router Class Initialized
DEBUG - 2015-03-22 06:16:46 --> Output Class Initialized
DEBUG - 2015-03-22 06:16:46 --> Security Class Initialized
DEBUG - 2015-03-22 06:16:46 --> Input Class Initialized
DEBUG - 2015-03-22 06:16:46 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 06:16:47 --> Language Class Initialized
DEBUG - 2015-03-22 06:16:47 --> Loader Class Initialized
DEBUG - 2015-03-22 06:16:47 --> Helper loaded: form_helper
DEBUG - 2015-03-22 06:16:47 --> Helper loaded: language_helper
DEBUG - 2015-03-22 06:16:47 --> Helper loaded: string_helper
DEBUG - 2015-03-22 06:16:47 --> Helper loaded: url_helper
DEBUG - 2015-03-22 06:16:47 --> Database Driver Class Initialized
DEBUG - 2015-03-22 06:16:47 --> Controller Class Initialized
DEBUG - 2015-03-22 06:16:47 --> File loaded: application/views//common/user/viewDealer.php
DEBUG - 2015-03-22 06:16:47 --> Final output sent to browser
DEBUG - 2015-03-22 06:16:47 --> Total execution time: 1.7611
DEBUG - 2015-03-22 06:16:48 --> Config Class Initialized
DEBUG - 2015-03-22 06:16:48 --> Config Class Initialized
DEBUG - 2015-03-22 06:16:48 --> Config Class Initialized
DEBUG - 2015-03-22 06:16:48 --> Hooks Class Initialized
DEBUG - 2015-03-22 06:16:48 --> Config Class Initialized
DEBUG - 2015-03-22 06:16:48 --> Config Class Initialized
DEBUG - 2015-03-22 06:16:48 --> Hooks Class Initialized
DEBUG - 2015-03-22 06:16:48 --> Hooks Class Initialized
DEBUG - 2015-03-22 06:16:48 --> Config Class Initialized
DEBUG - 2015-03-22 06:16:48 --> Utf8 Class Initialized
DEBUG - 2015-03-22 06:16:48 --> Hooks Class Initialized
DEBUG - 2015-03-22 06:16:48 --> Hooks Class Initialized
DEBUG - 2015-03-22 06:16:48 --> Utf8 Class Initialized
DEBUG - 2015-03-22 06:16:48 --> Utf8 Class Initialized
DEBUG - 2015-03-22 06:16:48 --> Hooks Class Initialized
DEBUG - 2015-03-22 06:16:48 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 06:16:48 --> Utf8 Class Initialized
DEBUG - 2015-03-22 06:16:48 --> Utf8 Class Initialized
DEBUG - 2015-03-22 06:16:48 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 06:16:48 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 06:16:48 --> URI Class Initialized
DEBUG - 2015-03-22 06:16:48 --> Utf8 Class Initialized
DEBUG - 2015-03-22 06:16:49 --> Router Class Initialized
DEBUG - 2015-03-22 06:16:49 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 06:16:49 --> Output Class Initialized
DEBUG - 2015-03-22 06:16:49 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 06:16:49 --> Security Class Initialized
DEBUG - 2015-03-22 06:16:49 --> URI Class Initialized
DEBUG - 2015-03-22 06:16:49 --> URI Class Initialized
DEBUG - 2015-03-22 06:16:49 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 06:16:49 --> URI Class Initialized
DEBUG - 2015-03-22 06:16:49 --> URI Class Initialized
DEBUG - 2015-03-22 06:16:49 --> Input Class Initialized
DEBUG - 2015-03-22 06:16:49 --> Router Class Initialized
DEBUG - 2015-03-22 06:16:49 --> Router Class Initialized
DEBUG - 2015-03-22 06:16:49 --> URI Class Initialized
DEBUG - 2015-03-22 06:16:49 --> Router Class Initialized
DEBUG - 2015-03-22 06:16:49 --> Router Class Initialized
DEBUG - 2015-03-22 06:16:49 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 06:16:49 --> Output Class Initialized
DEBUG - 2015-03-22 06:16:49 --> Output Class Initialized
DEBUG - 2015-03-22 06:16:49 --> Router Class Initialized
DEBUG - 2015-03-22 06:16:49 --> Output Class Initialized
DEBUG - 2015-03-22 06:16:49 --> Output Class Initialized
DEBUG - 2015-03-22 06:16:49 --> Language Class Initialized
DEBUG - 2015-03-22 06:16:50 --> Security Class Initialized
DEBUG - 2015-03-22 06:16:50 --> Security Class Initialized
DEBUG - 2015-03-22 06:16:50 --> Output Class Initialized
DEBUG - 2015-03-22 06:16:50 --> Security Class Initialized
DEBUG - 2015-03-22 06:16:50 --> Security Class Initialized
DEBUG - 2015-03-22 06:16:50 --> Security Class Initialized
DEBUG - 2015-03-22 06:16:50 --> Loader Class Initialized
DEBUG - 2015-03-22 06:16:50 --> Input Class Initialized
DEBUG - 2015-03-22 06:16:50 --> Input Class Initialized
DEBUG - 2015-03-22 06:16:50 --> Input Class Initialized
DEBUG - 2015-03-22 06:16:50 --> Input Class Initialized
DEBUG - 2015-03-22 06:16:50 --> Config Class Initialized
DEBUG - 2015-03-22 06:16:50 --> Helper loaded: form_helper
DEBUG - 2015-03-22 06:16:50 --> Input Class Initialized
DEBUG - 2015-03-22 06:16:50 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 06:16:50 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 06:16:50 --> Hooks Class Initialized
DEBUG - 2015-03-22 06:16:50 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 06:16:50 --> Helper loaded: language_helper
DEBUG - 2015-03-22 06:16:50 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 06:16:50 --> Language Class Initialized
DEBUG - 2015-03-22 06:16:50 --> Language Class Initialized
DEBUG - 2015-03-22 06:16:50 --> Utf8 Class Initialized
DEBUG - 2015-03-22 06:16:50 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 06:16:50 --> Language Class Initialized
DEBUG - 2015-03-22 06:16:50 --> Helper loaded: string_helper
DEBUG - 2015-03-22 06:16:50 --> Loader Class Initialized
DEBUG - 2015-03-22 06:16:51 --> Language Class Initialized
DEBUG - 2015-03-22 06:16:51 --> Loader Class Initialized
DEBUG - 2015-03-22 06:16:51 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 06:16:51 --> Loader Class Initialized
DEBUG - 2015-03-22 06:16:51 --> Language Class Initialized
DEBUG - 2015-03-22 06:16:51 --> Helper loaded: url_helper
DEBUG - 2015-03-22 06:16:51 --> Helper loaded: form_helper
DEBUG - 2015-03-22 06:16:51 --> Loader Class Initialized
DEBUG - 2015-03-22 06:16:51 --> Helper loaded: form_helper
DEBUG - 2015-03-22 06:16:51 --> URI Class Initialized
DEBUG - 2015-03-22 06:16:51 --> Helper loaded: form_helper
DEBUG - 2015-03-22 06:16:51 --> Helper loaded: language_helper
DEBUG - 2015-03-22 06:16:51 --> Loader Class Initialized
DEBUG - 2015-03-22 06:16:51 --> Helper loaded: form_helper
DEBUG - 2015-03-22 06:16:51 --> Config Class Initialized
DEBUG - 2015-03-22 06:16:51 --> Helper loaded: language_helper
DEBUG - 2015-03-22 06:16:51 --> Router Class Initialized
DEBUG - 2015-03-22 06:16:51 --> Helper loaded: language_helper
DEBUG - 2015-03-22 06:16:51 --> Helper loaded: string_helper
DEBUG - 2015-03-22 06:16:51 --> Helper loaded: form_helper
DEBUG - 2015-03-22 06:16:51 --> Hooks Class Initialized
DEBUG - 2015-03-22 06:16:51 --> Helper loaded: language_helper
DEBUG - 2015-03-22 06:16:51 --> Config Class Initialized
DEBUG - 2015-03-22 06:16:51 --> Database Driver Class Initialized
DEBUG - 2015-03-22 06:16:52 --> Config Class Initialized
DEBUG - 2015-03-22 06:16:52 --> Config Class Initialized
DEBUG - 2015-03-22 06:16:52 --> Helper loaded: string_helper
DEBUG - 2015-03-22 06:16:52 --> Utf8 Class Initialized
DEBUG - 2015-03-22 06:16:52 --> Helper loaded: string_helper
DEBUG - 2015-03-22 06:16:52 --> Hooks Class Initialized
DEBUG - 2015-03-22 06:16:52 --> Hooks Class Initialized
DEBUG - 2015-03-22 06:16:52 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 06:16:52 --> Output Class Initialized
DEBUG - 2015-03-22 06:16:52 --> Helper loaded: string_helper
DEBUG - 2015-03-22 06:16:52 --> Helper loaded: url_helper
DEBUG - 2015-03-22 06:16:52 --> Helper loaded: language_helper
DEBUG - 2015-03-22 06:16:52 --> Hooks Class Initialized
DEBUG - 2015-03-22 06:16:52 --> Helper loaded: url_helper
DEBUG - 2015-03-22 06:16:52 --> Helper loaded: url_helper
DEBUG - 2015-03-22 06:16:52 --> Utf8 Class Initialized
DEBUG - 2015-03-22 06:16:52 --> Controller Class Initialized
DEBUG - 2015-03-22 06:16:52 --> Config Class Initialized
DEBUG - 2015-03-22 06:16:52 --> Utf8 Class Initialized
DEBUG - 2015-03-22 06:16:52 --> URI Class Initialized
DEBUG - 2015-03-22 06:16:52 --> Security Class Initialized
DEBUG - 2015-03-22 06:16:52 --> Helper loaded: string_helper
DEBUG - 2015-03-22 06:16:52 --> Helper loaded: url_helper
DEBUG - 2015-03-22 06:16:52 --> Database Driver Class Initialized
DEBUG - 2015-03-22 06:16:52 --> Database Driver Class Initialized
DEBUG - 2015-03-22 06:16:52 --> Utf8 Class Initialized
DEBUG - 2015-03-22 06:16:52 --> Database Driver Class Initialized
DEBUG - 2015-03-22 06:16:53 --> Hooks Class Initialized
DEBUG - 2015-03-22 06:16:53 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 06:16:53 --> File loaded: application/views//common/user/listUserPiNo.php
DEBUG - 2015-03-22 06:16:53 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 06:16:53 --> Router Class Initialized
DEBUG - 2015-03-22 06:16:53 --> Input Class Initialized
DEBUG - 2015-03-22 06:16:53 --> Helper loaded: url_helper
DEBUG - 2015-03-22 06:16:53 --> Database Driver Class Initialized
DEBUG - 2015-03-22 06:16:53 --> Controller Class Initialized
DEBUG - 2015-03-22 06:16:53 --> Controller Class Initialized
DEBUG - 2015-03-22 06:16:53 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 06:16:53 --> URI Class Initialized
DEBUG - 2015-03-22 06:16:53 --> Utf8 Class Initialized
DEBUG - 2015-03-22 06:16:53 --> Final output sent to browser
DEBUG - 2015-03-22 06:16:53 --> URI Class Initialized
DEBUG - 2015-03-22 06:16:53 --> Output Class Initialized
DEBUG - 2015-03-22 06:16:53 --> Controller Class Initialized
DEBUG - 2015-03-22 06:16:53 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 06:16:53 --> Controller Class Initialized
DEBUG - 2015-03-22 06:16:53 --> Database Driver Class Initialized
DEBUG - 2015-03-22 06:16:53 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 06:16:53 --> Router Class Initialized
DEBUG - 2015-03-22 06:16:54 --> File loaded: application/views//common/listModel.php
DEBUG - 2015-03-22 06:16:54 --> URI Class Initialized
DEBUG - 2015-03-22 06:16:54 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 06:16:54 --> Total execution time: 5.6113
DEBUG - 2015-03-22 06:16:54 --> Router Class Initialized
DEBUG - 2015-03-22 06:16:54 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 06:16:54 --> Security Class Initialized
DEBUG - 2015-03-22 06:16:54 --> Language Class Initialized
DEBUG - 2015-03-22 06:16:54 --> Controller Class Initialized
DEBUG - 2015-03-22 06:16:54 --> Final output sent to browser
DEBUG - 2015-03-22 06:16:54 --> Final output sent to browser
DEBUG - 2015-03-22 06:16:54 --> Output Class Initialized
DEBUG - 2015-03-22 06:16:54 --> URI Class Initialized
DEBUG - 2015-03-22 06:16:54 --> Router Class Initialized
DEBUG - 2015-03-22 06:16:54 --> Output Class Initialized
DEBUG - 2015-03-22 06:16:54 --> Final output sent to browser
DEBUG - 2015-03-22 06:16:54 --> Security Class Initialized
DEBUG - 2015-03-22 06:16:54 --> Total execution time: 6.5124
DEBUG - 2015-03-22 06:16:54 --> File loaded: application/views//common/user/listCntry.php
DEBUG - 2015-03-22 06:16:54 --> Total execution time: 6.5614
DEBUG - 2015-03-22 06:16:54 --> Input Class Initialized
DEBUG - 2015-03-22 06:16:54 --> Input Class Initialized
DEBUG - 2015-03-22 06:16:54 --> Total execution time: 6.2574
DEBUG - 2015-03-22 06:16:54 --> Security Class Initialized
DEBUG - 2015-03-22 06:16:54 --> Final output sent to browser
DEBUG - 2015-03-22 06:16:54 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 06:16:54 --> Loader Class Initialized
DEBUG - 2015-03-22 06:16:54 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 06:16:54 --> Total execution time: 6.7864
DEBUG - 2015-03-22 06:16:54 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 06:16:54 --> Config Class Initialized
DEBUG - 2015-03-22 06:16:54 --> Config Class Initialized
DEBUG - 2015-03-22 06:16:54 --> Input Class Initialized
DEBUG - 2015-03-22 06:16:54 --> Output Class Initialized
DEBUG - 2015-03-22 06:16:54 --> Final output sent to browser
DEBUG - 2015-03-22 06:16:54 --> Router Class Initialized
DEBUG - 2015-03-22 06:16:54 --> Hooks Class Initialized
DEBUG - 2015-03-22 06:16:54 --> Language Class Initialized
DEBUG - 2015-03-22 06:16:54 --> Security Class Initialized
DEBUG - 2015-03-22 06:16:54 --> Hooks Class Initialized
DEBUG - 2015-03-22 06:16:54 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 06:16:54 --> Helper loaded: form_helper
DEBUG - 2015-03-22 06:16:54 --> Utf8 Class Initialized
DEBUG - 2015-03-22 06:16:54 --> Language Class Initialized
DEBUG - 2015-03-22 06:16:54 --> Total execution time: 6.5774
DEBUG - 2015-03-22 06:16:54 --> Loader Class Initialized
DEBUG - 2015-03-22 06:16:54 --> Helper loaded: language_helper
DEBUG - 2015-03-22 06:16:54 --> Loader Class Initialized
DEBUG - 2015-03-22 06:16:54 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 06:16:55 --> Output Class Initialized
DEBUG - 2015-03-22 06:16:55 --> Language Class Initialized
DEBUG - 2015-03-22 06:16:55 --> Input Class Initialized
DEBUG - 2015-03-22 06:16:55 --> Utf8 Class Initialized
DEBUG - 2015-03-22 06:16:55 --> Helper loaded: form_helper
DEBUG - 2015-03-22 06:16:55 --> Helper loaded: string_helper
DEBUG - 2015-03-22 06:16:55 --> Helper loaded: form_helper
DEBUG - 2015-03-22 06:16:55 --> URI Class Initialized
DEBUG - 2015-03-22 06:16:55 --> Security Class Initialized
DEBUG - 2015-03-22 06:16:55 --> Helper loaded: url_helper
DEBUG - 2015-03-22 06:16:55 --> Loader Class Initialized
DEBUG - 2015-03-22 06:16:55 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 06:16:55 --> UTF-8 Support Enabled
DEBUG - 2015-03-22 06:16:55 --> Helper loaded: language_helper
DEBUG - 2015-03-22 06:16:55 --> Helper loaded: language_helper
DEBUG - 2015-03-22 06:16:55 --> Router Class Initialized
DEBUG - 2015-03-22 06:16:55 --> Input Class Initialized
DEBUG - 2015-03-22 06:16:55 --> Database Driver Class Initialized
DEBUG - 2015-03-22 06:16:55 --> Helper loaded: form_helper
DEBUG - 2015-03-22 06:16:55 --> Language Class Initialized
DEBUG - 2015-03-22 06:16:55 --> Helper loaded: string_helper
DEBUG - 2015-03-22 06:16:56 --> URI Class Initialized
DEBUG - 2015-03-22 06:16:56 --> Helper loaded: string_helper
DEBUG - 2015-03-22 06:16:56 --> Output Class Initialized
DEBUG - 2015-03-22 06:16:56 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 06:16:56 --> Controller Class Initialized
DEBUG - 2015-03-22 06:16:56 --> Helper loaded: language_helper
DEBUG - 2015-03-22 06:16:56 --> Loader Class Initialized
DEBUG - 2015-03-22 06:16:56 --> Helper loaded: url_helper
DEBUG - 2015-03-22 06:16:56 --> Router Class Initialized
DEBUG - 2015-03-22 06:16:56 --> Helper loaded: url_helper
DEBUG - 2015-03-22 06:16:56 --> Security Class Initialized
DEBUG - 2015-03-22 06:16:56 --> Language Class Initialized
DEBUG - 2015-03-22 06:16:56 --> Helper loaded: string_helper
DEBUG - 2015-03-22 06:16:56 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 06:16:56 --> Helper loaded: form_helper
DEBUG - 2015-03-22 06:16:56 --> Database Driver Class Initialized
DEBUG - 2015-03-22 06:16:56 --> Output Class Initialized
DEBUG - 2015-03-22 06:16:56 --> Database Driver Class Initialized
DEBUG - 2015-03-22 06:16:56 --> Input Class Initialized
DEBUG - 2015-03-22 06:16:56 --> Loader Class Initialized
DEBUG - 2015-03-22 06:16:56 --> Final output sent to browser
DEBUG - 2015-03-22 06:16:56 --> Helper loaded: url_helper
DEBUG - 2015-03-22 06:16:57 --> Helper loaded: language_helper
DEBUG - 2015-03-22 06:16:57 --> Helper loaded: form_helper
DEBUG - 2015-03-22 06:16:57 --> Controller Class Initialized
DEBUG - 2015-03-22 06:16:57 --> Total execution time: 6.2384
DEBUG - 2015-03-22 06:16:57 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 06:16:57 --> Controller Class Initialized
DEBUG - 2015-03-22 06:16:57 --> Security Class Initialized
DEBUG - 2015-03-22 06:16:57 --> Helper loaded: language_helper
DEBUG - 2015-03-22 06:16:57 --> Database Driver Class Initialized
DEBUG - 2015-03-22 06:16:57 --> Helper loaded: string_helper
DEBUG - 2015-03-22 06:16:57 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 06:16:57 --> Language Class Initialized
DEBUG - 2015-03-22 06:16:57 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 06:16:57 --> Input Class Initialized
DEBUG - 2015-03-22 06:16:57 --> Helper loaded: string_helper
DEBUG - 2015-03-22 06:16:57 --> Controller Class Initialized
DEBUG - 2015-03-22 06:16:57 --> Helper loaded: url_helper
DEBUG - 2015-03-22 06:16:57 --> Final output sent to browser
DEBUG - 2015-03-22 06:16:57 --> Loader Class Initialized
DEBUG - 2015-03-22 06:16:57 --> Final output sent to browser
DEBUG - 2015-03-22 06:16:57 --> Helper loaded: url_helper
DEBUG - 2015-03-22 06:16:57 --> Global POST and COOKIE data sanitized
DEBUG - 2015-03-22 06:16:57 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 06:16:57 --> Database Driver Class Initialized
DEBUG - 2015-03-22 06:16:58 --> Database Driver Class Initialized
DEBUG - 2015-03-22 06:16:58 --> Total execution time: 5.8613
DEBUG - 2015-03-22 06:16:58 --> Helper loaded: form_helper
DEBUG - 2015-03-22 06:16:58 --> Total execution time: 5.6883
DEBUG - 2015-03-22 06:16:58 --> Language Class Initialized
DEBUG - 2015-03-22 06:16:58 --> Controller Class Initialized
DEBUG - 2015-03-22 06:16:58 --> Final output sent to browser
DEBUG - 2015-03-22 06:16:58 --> Controller Class Initialized
DEBUG - 2015-03-22 06:16:58 --> Helper loaded: language_helper
DEBUG - 2015-03-22 06:16:58 --> Loader Class Initialized
DEBUG - 2015-03-22 06:16:58 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 06:16:58 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 06:16:58 --> Total execution time: 6.2034
DEBUG - 2015-03-22 06:16:58 --> Helper loaded: form_helper
DEBUG - 2015-03-22 06:16:58 --> Helper loaded: string_helper
DEBUG - 2015-03-22 06:16:58 --> Final output sent to browser
DEBUG - 2015-03-22 06:16:58 --> Helper loaded: language_helper
DEBUG - 2015-03-22 06:16:58 --> Final output sent to browser
DEBUG - 2015-03-22 06:16:58 --> Total execution time: 6.2184
DEBUG - 2015-03-22 06:16:58 --> Helper loaded: url_helper
DEBUG - 2015-03-22 06:16:58 --> Helper loaded: string_helper
DEBUG - 2015-03-22 06:16:59 --> Helper loaded: url_helper
DEBUG - 2015-03-22 06:16:59 --> Database Driver Class Initialized
DEBUG - 2015-03-22 06:16:59 --> Total execution time: 6.8484
DEBUG - 2015-03-22 06:16:59 --> Database Driver Class Initialized
DEBUG - 2015-03-22 06:16:59 --> Controller Class Initialized
DEBUG - 2015-03-22 06:16:59 --> Controller Class Initialized
DEBUG - 2015-03-22 06:16:59 --> File loaded: application/views//common/listCodeImg.php
DEBUG - 2015-03-22 06:16:59 --> File loaded: application/views//common/listCode.php
DEBUG - 2015-03-22 06:16:59 --> Final output sent to browser
DEBUG - 2015-03-22 06:16:59 --> Final output sent to browser
DEBUG - 2015-03-22 06:16:59 --> Total execution time: 4.5773
DEBUG - 2015-03-22 06:16:59 --> Total execution time: 4.6273
