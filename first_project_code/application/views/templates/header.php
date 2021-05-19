<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <title><?= $title?></title>
</head>
<body>

<nav class='navbar navbar-expand-lg navbar-dark bg-dark mb-2'>
  <a href="<?= base_url(). 'home' ?>" class='navbar-brand'>CILearn</a>

  <ul class='navbar-nav mr-auto'>
    <li class='nav-item'>
      <a href="<?= base_url(). 'about' ?>" class='nav-link'>About</a>
    </li>
    <li class='nav-item'>
      <a href="<?= base_url(). 'contact' ?>" class='nav-link'>Contact</a>
    </li>
    <li class='nav-item'>
      <a href="<?= base_url(). 'posts' ?>" class='nav-link'>Post</a>
    </li>
  </ul>

  <ul class="navbar-nav ml-auto">
    <li class="nav-item">
      <a href="<?= base_url(). 'posts/create' ?>" class='nav-link'>Create Post</a>
    </li>
    <li class="nav-item">
      <a href="<?= base_url(). 'login' ?>" class='nav-link'>Login</a>
    </li>
    <li class="nav-item">
      <a href="<?= base_url(). 'register' ?>" class='nav-link'>Register</a>
    </li>
  </ul>
</nav>

<div class="container">

