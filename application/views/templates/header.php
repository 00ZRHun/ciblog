<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>ciBlog</title>
		<!-- <link rel="stylesheet" href="https://bootswatch.com/flatly/bootstrap.min.css"> -->
		
		<!-- <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="./assets/css/style.css"> -->	
		<link rel="stylesheet" href="<?php echo base_url('/assets/css/bootstrap.min.css'); ?>">
		<link rel="stylesheet" href="<?php echo base_url('/assets/css/style.css'); ?>">	
		<!-- <link rel="stylesheet" href="{{ asset('./assets/css/bootstrap.min.css') }}">
		<link rel="stylesheet" href="{{ asset('./assets/css/style.css') }}"> -->

		<!-- CKEditor -->
		<script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
	</head>
	<body>

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	<a class="navbar-brand" href="<?= base_url(''); ?>">ciBlog</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbarColor02">
		<ul class="navbar-nav mr-auto navbar-left">
			<li class="nav-item active">
				<a class="nav-link" href="<?= base_url(''); ?>">Home <span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<? echo base_url(); ?>about">About</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<? echo base_url(); ?>posts">Blog</a>
			</li>
		</ul>
		<ul class="navbar-nav mr-auto navbar-right">
			<li class="nav-item">
				<a class="nav-link" href="<? echo base_url(); ?>posts/create">Create Post</a>
			</li>
		</ul>
		<!-- <form class="form-inline my-2 my-lg-0">
		<input class="form-control mr-sm-2" type="text" placeholder="Search">
		<button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
		</form> -->
	</div>
	</nav>

			<div class="container">
