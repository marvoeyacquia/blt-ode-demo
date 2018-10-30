<?php
// DO NOT MODIFY THIS FILE.
// This file was created by the drush acquia-update command. Changes will be
// lost the next time drush acquia-update runs.

if (!isset($drush_major_version)) {
  $drush_version_components = explode('.', DRUSH_VERSION);
  $drush_major_version = $drush_version_components[0];
}
// Site cddemo11, environment dev.
$aliases['dev'] = array(
  'root' => '/var/www/html/cddemo11.dev/docroot',
  'ac-site' => 'cddemo11',
  'ac-env' => 'dev',
  'ac-realm' => 'prod',
  'uri' => 'cddemo11dev.prod.acquia-sites.com',
  'remote-host' => 'cddemo11dev.ssh.prod.acquia-sites.com',
  'remote-user' => 'cddemo11.dev',
  'path-aliases' => array(
    '%drush-script' => 'drush' . $drush_major_version,
  ),
);
$aliases['dev.livedev'] = array(
  'parent' => '@cddemo11.dev',
  'root' => '/mnt/gfs/cddemo11.dev/livedev/docroot',
);

if (!isset($drush_major_version)) {
  $drush_version_components = explode('.', DRUSH_VERSION);
  $drush_major_version = $drush_version_components[0];
}
// Site cddemo11, environment ode35.
$aliases['ode35'] = array(
  'root' => '/var/www/html/cddemo11.ode35/docroot',
  'ac-site' => 'cddemo11',
  'ac-env' => 'ode35',
  'ac-realm' => 'prod',
  'uri' => 'cddemo11ode35.prod.acquia-sites.com',
  'remote-host' => 'cddemo11ode35.ssh.prod.acquia-sites.com',
  'remote-user' => 'cddemo11.ode35',
  'path-aliases' => array(
    '%drush-script' => 'drush' . $drush_major_version,
  ),
);
$aliases['ode35.livedev'] = array(
  'parent' => '@cddemo11.ode35',
  'root' => '/mnt/gfs/cddemo11.ode35/livedev/docroot',
);

if (!isset($drush_major_version)) {
  $drush_version_components = explode('.', DRUSH_VERSION);
  $drush_major_version = $drush_version_components[0];
}
// Site cddemo11, environment prod.
$aliases['prod'] = array(
  'root' => '/var/www/html/cddemo11.prod/docroot',
  'ac-site' => 'cddemo11',
  'ac-env' => 'prod',
  'ac-realm' => 'prod',
  'uri' => 'cddemo11.prod.acquia-sites.com',
  'remote-host' => 'cddemo11.ssh.prod.acquia-sites.com',
  'remote-user' => 'cddemo11.prod',
  'path-aliases' => array(
    '%drush-script' => 'drush' . $drush_major_version,
  ),
);
$aliases['prod.livedev'] = array(
  'parent' => '@cddemo11.prod',
  'root' => '/mnt/gfs/cddemo11.prod/livedev/docroot',
);

if (!isset($drush_major_version)) {
  $drush_version_components = explode('.', DRUSH_VERSION);
  $drush_major_version = $drush_version_components[0];
}
// Site cddemo11, environment test.
$aliases['test'] = array(
  'root' => '/var/www/html/cddemo11.test/docroot',
  'ac-site' => 'cddemo11',
  'ac-env' => 'test',
  'ac-realm' => 'prod',
  'uri' => 'cddemo11stg.prod.acquia-sites.com',
  'remote-host' => 'cddemo11stg.ssh.prod.acquia-sites.com',
  'remote-user' => 'cddemo11.test',
  'path-aliases' => array(
    '%drush-script' => 'drush' . $drush_major_version,
  ),
);
$aliases['test.livedev'] = array(
  'parent' => '@cddemo11.test',
  'root' => '/mnt/gfs/cddemo11.test/livedev/docroot',
);
