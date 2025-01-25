<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=0">
  <meta name="description" content="<?php echo $deskripsi ?>">
  <meta name="keywords" content="<?php echo $keyword ?>">
  <meta property="og:description" content="<?php echo $deskripsi ?>" />
  <meta property="og:image" content="<?php echo $urlweb ?>/assets/img/<?php echo $logo ?>">
  <meta property="og:type" content="website" />
  <meta property="og:url" content="<?php echo $urlweb ?>">
  <meta name="robots" content="index, follow">
  <meta name="author" content="<?php echo $urlweb ?>">
  <meta name="theme-color" content="linear-gradient(to bottom, #ebf4f9 0%, #c3c0cc 100%)">
  <meta name="msapplication-TileColor" content="linear-gradient(to bottom, #ebf4f9 0%, #c3c0cc 100%)">
  <meta name="msapplication-navbutton-color" content="linear-gradient(to bottom, #ebf4f9 0%, #c3c0cc 100%)">
  <meta name="apple-mobile-web-app-status-bar-style" content="linear-gradient(to bottom, #ebf4f9 0%, #c3c0cc 100%)">
  <!-- Favicon -->
  <link rel="icon" type="image/png" href="https://i.postimg.cc/zDdTXgNF/favicon.png">
  <meta name="robots" content="noindex, nofollow">
  <meta name="googlebot" content="noindex, nofollow">
  <meta name="googlebot-news" content="noindex">
  <!-- Canonical -->
  <link rel="canonical" href="<?php echo $urlweb ?>" />
  <!-- End Canonical -->
  <meta name="description" itemprop="description" content="<?php echo $deskripsi ?>" />
  <meta name="keywords" content="<?php echo $keyword ?>" />
  <title><?php echo $title; ?></title>
  <!-- Custom Tags -->
  <meta name="robots" content="index, follow" />
  <meta name="copyright" content="Drian">
  <meta name="rating" content="general" />
  <meta name="geo.placename" content="Indonesia" />
  <meta name="geo.country" content="ID" />
  <meta name="language" content="ID" />
  <meta name="tgn.nation" content="Indonesia" />
  <meta name="rating" content="general" />
  <meta name="author" content="Drian" />
  <!-- End Custom Tags -->
  <link rel="preload" as="font" href="themes/default/font/font-awesome/webfonts/fa-solid-900.woff2" type="font/woff2" crossorigin="anonymous">
  <link rel="preload" as="font" href="themes/default/font/font-awesome/webfonts/fa-brands-400.woff2" type="font/woff2" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="themes/default/css/global.css">
  <link rel="stylesheet" type="text/css" href="themes/default/font/font-awesome/css/all.min.css">
  <?php
  if ($warna == "abu-hitam") {
  ?>
    <link rel="stylesheet" id="templateStyle" type="text/css" href="abu-hitam/custom/css/style.css">
  <?php
  } else if ($warna == "merah-kuning") {
  ?>
    <link rel="stylesheet" id="templateStyle" type="text/css" href="merah-kuning/custom/css/style.css">
  <?php
  } else if ($warna == "biru-kuning") {
  ?>
    <link rel="stylesheet" id="templateStyle" type="text/css" href="biru-kuning/custom/css/style.css">
  <?php
  } else if ($warna == "ungu-hitam") {
  ?>
  <link rel="stylesheet" id="templateStyle" type="text/css" href="ungu-hitam/custom/css/style.css">
  <?php
  } else if ($warna == "biru-putih") {
  ?>
  <link rel="stylesheet" id="templateStyle" type="text/css" href="biru-putih/custom/css/style.css">
  <?php
  }
  ?>
  <link rel="stylesheet" type="text/css" href="themes/default/sass/custom.css">

</head>