<?php

define('THEME', preg_replace('/https?\:\/\/(.+?)\//', '/', get_bloginfo('template_directory')));
define('PATH', get_template_directory() );
define('SITE', preg_replace('/https?\:\/\/(.+?)\//', '/', get_home_url() ) );
define('HOME', preg_replace('/https?\:\/\/(.+?)\//', '/', get_home_url("home")  ) );

require PATH . '/inc/theme-init.php';
require PATH . '/inc/theme-acf.php';
require PATH . '/inc/theme-helper.php';
require PATH . '/inc/theme-post-types.php';
require PATH . '/inc/theme-core.php';
require PATH . '/inc/admin/admin-dashboard.php';

require PATH . '/inc/navs.php';
require PATH . '/inc/breadcrumbs.php';
require PATH . '/inc/form-function.php';











































 

















