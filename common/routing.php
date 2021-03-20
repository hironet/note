<?php
$category= isset($_GET['c']) ? $_GET['c'] : 'top';
$page= isset($_GET['p']) ? $_GET['p'] : 'list';
switch ($category) {
  case 'top':
    include_once(__DIR__ . '/../contents/top.php');
    break;
  case 'windows':
    switch ($page) {
      case 'list':
        include_once(__DIR__ . '/../contents/windows/list.php');
        break;
      default:
        include_once(__DIR__ . '/../contents/404.php');
        break;
    }
    break;
  case 'macos':
    switch ($page) {
      case 'list':
        include_once(__DIR__ . '/../contents/macos/list.php');
        break;
      default:
        include_once(__DIR__ . '/../contents/404.php');
        break;
    }
    break;
  case 'linux':
    switch ($page) {
      case 'list':
        include_once(__DIR__ . '/../contents/linux/list.php');
        break;
      default:
        include_once(__DIR__ . '/../contents/404.php');
        break;
    }
    break;
  case 'docker':
    switch ($page) {
      case 'list':
        include_once(__DIR__ . '/../contents/docker/list.php');
        break;
      default:
        include_once(__DIR__ . '/../contents/404.php');
        break;
    }
    break;
  case 'nginx':
    switch ($page) {
      case 'list':
        include_once(__DIR__ . '/../contents/nginx/list.php');
        break;
      default:
        include_once(__DIR__ . '/../contents/404.php');
        break;
    }
    break;
  case 'apache':
    switch ($page) {
      case 'list':
        include_once(__DIR__ . '/../contents/apache/list.php');
        break;
      default:
        include_once(__DIR__ . '/../contents/404.php');
        break;
    }
    break;
  case 'mysql':
    switch ($page) {
      case 'list':
        include_once(__DIR__ . '/../contents/mysql/list.php');
        break;
      default:
        include_once(__DIR__ . '/../contents/404.php');
        break;
    }
    break;
  case 'wordpress':
    switch ($page) {
      case 'list':
        include_once(__DIR__ . '/../contents/wordpress/list.php');
        break;
      default:
        include_once(__DIR__ . '/../contents/404.php');
        break;
    }
    break;
  case 'vim':
    switch ($page) {
      case 'list':
        include_once(__DIR__ . '/../contents/vim/list.php');
        break;
      default:
        include_once(__DIR__ . '/../contents/404.php');
        break;
    }
    break;
  case 'vscode':
    switch ($page) {
      case 'list':
        include_once(__DIR__ . '/../contents/vscode/list.php');
        break;
      default:
        include_once(__DIR__ . '/../contents/404.php');
        break;
    }
    break;
  case 'office':
    switch ($page) {
      case 'list':
        include_once(__DIR__ . '/../contents/office/list.php');
        break;
      default:
        include_once(__DIR__ . '/../contents/404.php');
        break;
    }
    break;
  case 'git':
    switch ($page) {
      case 'list':
        include_once(__DIR__ . '/../contents/git/list.php');
        break;
      default:
        include_once(__DIR__ . '/../contents/404.php');
        break;
    }
    break;
  case 'vagrant':
    switch ($page) {
      case 'list':
        include_once(__DIR__ . '/../contents/vagrant/list.php');
        break;
      default:
        include_once(__DIR__ . '/../contents/404.php');
        break;
    }
    break;
  case 'wireshark':
    switch ($page) {
      case 'list':
        include_once(__DIR__ . '/../contents/wireshark/list.php');
        break;
      default:
        include_once(__DIR__ . '/../contents/404.php');
        break;
    }
    break;
  case 'html':
    switch ($page) {
      case 'list':
        include_once(__DIR__ . '/../contents/html/list.php');
        break;
      default:
        include_once(__DIR__ . '/../contents/404.php');
        break;
    }
    break;
  case 'javascript':
    switch ($page) {
      case 'list':
        include_once(__DIR__ . '/../contents/javascript/list.php');
        break;
      default:
        include_once(__DIR__ . '/../contents/404.php');
        break;
    }
    break;
  case 'php':
    switch ($page) {
      case 'list':
        include_once(__DIR__ . '/../contents/php/list.php');
        break;
      default:
        include_once(__DIR__ . '/../contents/404.php');
        break;
    }
    break;
  case 'ruby':
    switch ($page) {
      case 'list':
        include_once(__DIR__ . '/../contents/ruby/list.php');
        break;
      default:
        include_once(__DIR__ . '/../contents/404.php');
        break;
    }
    break;
  case 'bash':
    switch ($page) {
      case 'list':
        include_once(__DIR__ . '/../contents/bash/list.php');
        break;
      default:
        include_once(__DIR__ . '/../contents/404.php');
        break;
    }
    break;
  default:
    include_once(__DIR__ . '/../contents/404.php');
    break;
}
