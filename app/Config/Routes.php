<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Pages::index');
$routes->post('login', 'Index::auth');
$routes->get('Pages', 'Pages::index');
$routes->get('anggota', 'Pages::anggota');
$routes->get('pegawai', 'Pages::pegawai');
$routes->get('pokok', 'Pages::simpanan_pokok');
$routes->get('wajib', 'Pages::simpanan_wajib');
$routes->get('sukarela', 'Pages::simpanan_sukarela');
$routes->get('tambah_list', 'Pages::tambah_list');
$routes->post('save_list', 'Pages::save_list');
$routes->get('tambah_anggota', 'Pages::tambah_anggota');
$routes->post('save_anggota', 'Pages::save_anggota');
$routes->get('tambah_pegawai', 'Pages::tambah_pegawai');
$routes->post('save_pegawai', 'Pages::save_pegawai');
$routes->get('tambah_pokok', 'Pages::tambah_pokok');
$routes->post('save_pokok', 'Pages::save_pokok');
$routes->get('tambah_wajib', 'Pages::tambah_wajib');
$routes->post('save_wajib', 'Pages::save_wajib');
$routes->get('tambah_sukarela', 'Pages::tambah_sukarela');
$routes->post('save_sukarela', 'Pages::save_sukarela');

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
