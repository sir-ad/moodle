<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = getenv('psql');
$CFG->dblibrary = 'native';
$CFG->dbhost    = getenv('ec2-3-215-83-17.compute-1.amazonaws.com');
$CFG->dbname    = getenv('devscfca42dbt');
$CFG->dbuser    = getenv('pvdkapietrljpa');
$CFG->dbpass    = getenv('674ef7246388066e5359fd4ea35475b09d9aec932b06d631c3e4e42e5ca71388');
$CFG->prefix    = 'mdl_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => getenv('5432'),
  'dbsocket' => '',
);

$CFG->wwwroot   = getenv('https://moodlekm.herokuapp.com/');
$CFG->dataroot  = getenv(try /tmp);
$CFG->admin     = 'admin';

$CFG->directorypermissions = 0777;

require_once(__DIR__ . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
