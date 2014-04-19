<?php

// * Database time and PHP time should always be the same.
// * See: http://www.php.net/manual/en/timezones.php for zones
// * If time zones differ, you can use the settings below to rectify
//   the problem, but this is an expensive operation, as the setting
//   is changed each time the page loads. You should probably use the
//   setting "date.timezone" in php.ini.
//const CONFIG_DATE_DEFAULT_TIMEZONE = 'Australia/Sydney';
//date_default_timezone_set(CONFIG_DATE_DEFAULT_TIMEZONE);

// paths below must end in a "/" !
const CONFIG_PATH_BASE = '/var/www/mellivora/';
// don't change these definitions unless you know what you're doing
define('CONFIG_PATH_INCLUDE', CONFIG_PATH_BASE . 'include/');
define('CONFIG_PATH_THIRDPARTY', CONFIG_PATH_BASE . 'include/thirdparty/');
define('CONFIG_PATH_CONFIG', CONFIG_PATH_BASE . 'include/config/');
define('CONFIG_PATH_FILE_WRITABLE', CONFIG_PATH_BASE . 'writable/');
define('CONFIG_PATH_FILE_UPLOAD', CONFIG_PATH_FILE_WRITABLE . 'upload/');
define('CONFIG_PATH_CACHE', CONFIG_PATH_FILE_WRITABLE . 'cache/');

// database settings
require(CONFIG_PATH_CONFIG . 'db.inc.php');

// general site settings
const CONFIG_SITE_NAME = 'Mellivora';
const CONFIG_SITE_SLOGAN = 'Mellivora, the CTF engine';
const CONFIG_SITE_DESCRIPTION = '';
const CONFIG_SITE_URL = 'https://localhost/';
const CONFIG_SITE_ADMIN_RELPATH = 'admin/';
define('CONFIG_SITE_ADMIN_URL', CONFIG_SITE_URL . CONFIG_SITE_ADMIN_RELPATH);
define('CONFIG_SITE_LOGO', CONFIG_SITE_URL . 'img/favicon.png');

// redirects:
const CONFIG_INDEX_REDIRECT_TO = 'home'; // from index.php
const CONFIG_LOGIN_REDIRECT_TO = 'home'; // after login
const CONFIG_REGISTER_REDIRECT_TO = 'home'; // after successful account registration

// team names longer than 40 chars may break page layout
const CONFIG_MIN_TEAM_NAME_LENGTH = 2;
const CONFIG_MAX_TEAM_NAME_LENGTH = 40;
const CONFIG_ACCOUNTS_SIGNUP_ALLOWED = true;
const CONFIG_ACCOUNTS_DEFAULT_ENABLED = true;
const CONFIG_ACCOUNTS_EMAIL_PASSWORD_ON_SIGNUP = true;

// is site SSL compatible? if true, ssl will be forced on certain pages
const CONFIG_SSL_COMPAT = false;

// maximum file upload size
const CONFIG_MAX_FILE_UPLOAD_SIZE = 5242880;

// user classes
const CONFIG_UC_USER = 0;
const CONFIG_UC_MODERATOR = 100;

// email stuff
const CONFIG_EMAIL_USE_SMTP = false;
const CONFIG_EMAIL_FROM_EMAIL = 'you@localhost';
const CONFIG_EMAIL_FROM_NAME = 'Mellivora CTF';
// blank for same as "FROM"
const CONFIG_EMAIL_REPLYTO_EMAIL = '';
const CONFIG_EMAIL_REPLYTO_NAME = '';
// options:
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
const CONFIG_EMAIL_SMTP_DEBUG_LEVEL = 2;
const CONFIG_EMAIL_SMTP_HOST = 'smtp.gmail.com';
const CONFIG_EMAIL_SMTP_PORT = 587;
const CONFIG_EMAIL_SMTP_SECURITY = 'tls';
// require SMTP authentication?
const CONFIG_EMAIL_SMTP_AUTH = true;
const CONFIG_EMAIL_SMTP_USER = 'you@gmail.com';
const CONFIG_EMAIL_SMTP_PASSWORD = '';

// enable re-captcha on signup and various public forms
const CONFIG_RECAPTCHA_ENABLE = false;
const CONFIG_RECAPTCHA_PUBLIC_KEY = '';
const CONFIG_RECAPTCHA_PRIVATE_KEY = '';

// cache times
const CONFIG_CACHE_TIME_SCORES = 0;
const CONFIG_CACHE_TIME_HOME = 0;
const CONFIG_CACHE_TIME_USER = 0;
const CONFIG_CACHE_TIME_CHALLENGE = 0;
const CONFIG_CACHE_TIME_HINTS = 0;