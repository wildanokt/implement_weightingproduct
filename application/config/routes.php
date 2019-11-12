<?php
defined('BASEPATH') or exit('No direct script access allowed');

$route['hasil'] = 'Data/rekomendasi';
$route['tambah'] = 'Data/insert';
$route['update'] = 'Data/update_bobot';
$route['calculation'] = 'Data/calculation';
$route['hapus/(:num)'] = 'Data/delete/$1';

$route['default_controller'] = 'Data';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
