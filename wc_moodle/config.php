<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = 'mariadb';
$CFG->dblibrary = 'native';
$CFG->dbhost    = '192.168.100.50:33069';
//$CFG->dbhost    = 'rocmysql02.unne.local';
$CFG->dbname    = 'campusdch';
$CFG->dbuser    = 'campusdch';
$CFG->dbpass    = '1GqpY6rieJ';
$CFG->prefix    = 'mdldch_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => '',
  'dbsocket' => '',
  'dbcollation' => 'utf8_general_ci',
);

$CFG->wwwroot   = 'http://campusderecho.com';
//$CFG->wwwroot   = 'http://campus.dch.unne.edu.ar';
$CFG->dataroot  = '/home/nfs/moodledata';
$CFG->admin     = 'admin';

$CFG->directorypermissions = 0777;

require_once(__DIR__ . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
