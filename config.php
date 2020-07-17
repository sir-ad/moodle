<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = getenv('psql');
$CFG->dblibrary = 'native';
$CFG->dbhost    = getenv('ec2-50-19-26-235.compute-1.amazonaws.com');
$CFG->dbname    = getenv('db0ickl8j6raeh');
$CFG->dbuser    = getenv('qocdypjuvdyyhm');
$CFG->dbpass    = getenv('1be77f5ddad4c8f157e1aa554d953cb8447ed8232e7247a460296f11819c8f0a');
$CFG->prefix    = 'mdl_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => getenv('5432'),
  'dbsocket' => '',
);

$CFG->wwwroot   = getenv('http://moodlek.herokuapp.com/');
$CFG->dataroot  = getenv('postgres://qocdypjuvdyyhm:1be77f5ddad4c8f157e1aa554d953cb8447ed8232e7247a460296f11819c8f0a@ec2-50-19-26-235.compute-1.amazonaws.com:5432/db0ickl8j6raeh');
$CFG->admin     = 'admin';

$CFG->directorypermissions = 0777;

require_once(__DIR__ . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
