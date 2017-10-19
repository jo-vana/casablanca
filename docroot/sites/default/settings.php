<?php
$databases['default']['default'] = array (
  'database' => 'drupal',
  'username' => 'drupal',
  'password' => 'drupal',
  'prefix' => '',
  'host' => 'mariadb',
  'port' => '3306',
  'namespace' => 'Drupal\\Core\\Database\\Driver\\mysql',
  'driver' => 'mysql',
);
$settings['hash_salt'] = 'iTDVk72OBcPE14xFzgcl28ai4sWBmWeuCCl8ftfrT3Mg1raFrCSp7inZY_RFyaLwz0iy5eWUoA';
$settings['install_profile'] = 'standard';
$config_directories['sync'] = 'sites/default/files/config__f0vk2SGjhLlfW_l-907iHf7o7hv2nn5sQzE8eT7eZk7fMWwu-w8e-49xopXdEw3KyMx5RbyLQ/sync';
$settings['container_yamls'][] = DRUPAL_ROOT . '/sites/development.services.yml';
$settings['cache']['bins']['render'] = 'cache.backend.null';
$settings['cache']['bins']['dynamic_page_cache'] = 'cache.backend.null';