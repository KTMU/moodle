<?php 

function distro_get_config() {

    $config = new stdClass();

    $config->installername = 'Moodle Windows Installer';
    $config->installerversion = '20121203';
    $config->packname = 'Xampp Lite';
    $config->packversion = '1.7.4';
    $config->webname = 'Apache';
    $config->webversion = '2.2.17';
    $config->phpname = 'PHP';
    $config->phpversion = '5.3.5 (VC6 X86 32bit) + PEAR ';
    $config->dbname = 'MySQL';
    $config->dbversion = '5.5.8 (Community Server)';
    $config->moodlerelease = '2.5.1+ (Build: 20130726)';
    $config->moodleversion = '2013051401.06';
    $config->dbtype='mysqli';
    $config->dbhost='localhost';
    $config->dbuser='root';

    return $config;
}

function distro_pre_create_db($database, $dbhost, $dbuser, $dbpass, $dbname, $prefix, $dboptions, $distro) {

/// We need to change the database password in windows installer, only if != ''
    if ($dbpass !== '') {
        try {
            if ($database->connect($dbhost, $dbuser, '', 'mysql', $prefix, $dboptions)) {
                $sql = "UPDATE user SET password=password(?) WHERE user='root'";
                $params = array($dbpass);
                $database->execute($sql, $params);
                $sql = "flush privileges";
                $database->execute($sql);
            }
        } catch (Exception $ignore) {
        }
    }
}
?>
