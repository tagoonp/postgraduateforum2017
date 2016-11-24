<?php
class Configuration
{

  //-- Defind configuration parameter for connect database --
  public $config = array(
    'host' => 'localhost',
    'dbname' => 'postgrad2017_registration',
    'dbuser' => 'root',
    'dbpass' => '',
    'session_prefix' => 'hSews_',
    'table_prefix' => 't5iw_',
    'salt' => 'sE84654Sdd461EsiLoa1sasdWs694Z'
  );

  //-- Constructor --
  public function __construct(){
    // Code here
  }

}
