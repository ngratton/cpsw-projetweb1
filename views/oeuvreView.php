<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $oeuvre['album_titres']; ?> | Gabriel Forion - Compositeur</title>
    <link rel="stylesheet" href="./styles/styles.min.css">
    <link rel="stylesheet" href="./styles/oeuvre-styles.min.css">
	<script type="module">
		import App from "./src/js.js";
		App.load().then(() => App.main());
	</script>
	<script type="module">
		import Oeuvrepage from "./src/oeuvre-js.js";
		Oeuvrepage.load().then(() => Oeuvrepage.main());
	</script>
</head>
<body>
    <?php include("./views/header-public.php"); ?>
    <header>
        <div class="header-bg" id="accueil-header">
            <div class="conteneur page-header">
                <h1>MUSIQUE</h1>
            </div>
        </div>
    </header>
    <main>
        <section id="oeuvre">
            <div class="conteneur">
                <div class="oeuvre-filariane">
                    <a href="./">Accueil</a>
                    <span class="filariane-fleche"> > </span>
                    <a href="./musique.php">Musique</a>
                    <span class="filariane-fleche"> > </span>
                    <span class="filariane-categorie"><?php echo $oeuvre['type_nom_plur']; ?></span>
                    <span class="filariane-fleche"> > </span>
                    <span class="filariane-titreoeuvre"><?php echo $oeuvre['album_titres']; ?></span>
                </div>
                <h2><?php echo $oeuvre['album_titres']; ?></h2>
                <div class="oeuvre-presentation">
                    <div class="oeuvre-art">
                        <img src="<?php echo $oeuvre['album_img_path']; ?>" alt="Madam Razzal">
                    </div>
                    <div class="oeuvre-desc carte">
                        <div class="oeuvre-type-container">
                            <span class="oeuvre-type"><?php echo $oeuvre['type_nom']; ?></span>
                        </div>
                        <div class="oeuvre-desc-container">
                            <span class="oeuvre-desc-tag">Titre</span>
                            <span class="oeuvre-desc-value"><?php echo $oeuvre['album_titres']; ?></span>
                        </div>
                        <div class="oeuvre-desc-container">
                            <span class="oeuvre-desc-tag">Date de sortie</span>
                            <span class="oeuvre-desc-value"><?php echo $oeuvre['album_dates']; ?></span>
                        </div>
                        <div class="oeuvre-desc-container">
                            <span class="oeuvre-desc-tag">Étiquette</span>
                            <span class="oeuvre-desc-value"><?php echo $oeuvre['etiquette']; ?></span>
                        </div>
                        <div class="oeuvre-desc-txt">
                            <?php echo $oeuvre['album_desc']; ?>
                        </div>

                    </div>
                </div>
            </div>
            <div class="conteneur flex-conteneur">
                <div class="carte flex-2x1">
                    <h3>ACHETER L'ALBUM</h3>
                    <div class="oeuvre-stores">
                        <!-- Bandcamp -->
                        <?php if ($oeuvre['bandcamp_link'] != "" || $oeuvre['bandcamp_link'] != NULL) { ?>
                            <a href="<?php echo $oeuvre['bandcamp_link']; ?>" class="liens-img">
                                <svg id="oeuvre-stores-bandcamp" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 47.21"><title>oeuvre-stores-bandcamp</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><g id="Bandcamp"><path class="cls-1" d="M63,0h5.67V13.78h.21a9.32,9.32,0,0,1,7.75-4.27c8.21,0,12.19,6.46,12.19,14.32,0,7.24-3.53,14.06-11.23,14.06-3.52,0-7.29-.88-9-4.46h-.11v3.65H63ZM75.92,14.2c-4.83,0-7.3,3.8-7.3,9.52,0,5.42,2.68,9.48,7.3,9.48,5.24,0,7.2-4.79,7.2-9.48,0-4.89-2.47-9.52-7.2-9.52"/><path class="cls-1" d="M274.15,10.33h5.47v3.45h.15c1.62-3,4.73-4.27,8.05-4.27C296,9.51,300,16,300,23.84c0,7.24-3.52,14.06-11.22,14.06-3.33,0-6.89-1.25-8.71-4.27h-.25V47.21h-5.67V10.33Zm12.91,3.87c-4.83,0-7.29,3.8-7.29,9.52,0,5.42,2.67,9.48,7.29,9.48,5.24,0,7.2-4.79,7.2-9.48,0-4.89-2.47-9.52-7.2-9.52"/><path class="cls-1" d="M133.24,9.51a9.26,9.26,0,0,0-8.11,4.79l-.1-.11V10.33h-5.26V33.26l-3.89,0c-1.08,0-1.38-.57-1.38-2v-14c0-5.65-5.36-7.79-10.46-7.79-5.76,0-11.47,2-11.87,8.94h5.75c.26-2.91,2.53-4.26,5.76-4.26,2.33,0,5.41.57,5.41,3.63,0,3.48-3.69,3-7.83,3.8C96.41,22.18,91.2,23.27,91.2,30c0,5.25,4.25,7.84,9,7.84,3.09,0,6.77-1,9-3.26.45,2.43,2.12,3.26,4.44,3.26,1,0,2.78-.36,11.8-.67v-.05h0V21.19c0-4,2.46-7.09,6.27-7.09,3.37,0,5,1.83,5.07,6V37.08h5.68V18.68c0-6-3.58-9.17-9.22-9.17m-24.42,18.6c0,3.75-3.92,5.1-6.44,5.1-2,0-5.29-.78-5.29-3.44,0-3.13,2.22-4.07,4.69-4.48s5.28-.41,7-1.63Z"/><path class="cls-1" d="M172,37.28h-5.47V33.63h0c-1.51,3-4.79,4.27-8.06,4.27-8.2,0-12.18-6.31-12.18-14.38,0-9.73,5.59-14,11.28-14,3.27,0,6.89,1.25,8.66,4.27h.12V0H172V37.28Zm-12.8-4.07c5.13,0,7.29-4.84,7.29-9.52,0-5.94-2.77-9.48-7.2-9.48C154,14.21,152,19.16,152,24c0,4.64,2.21,9.22,7.2,9.22"/><path class="cls-1" d="M194.93,19.26a5.62,5.62,0,0,0-6-5.11c-3,0-7.23,1.64-7.23,9.9,0,4.52,1.93,9.31,7,9.31,3.36,0,5.7-2.31,6.26-6.21h5.8c-1.07,7.05-5.29,11-12.06,11-8.24,0-12.77-6.05-12.77-14,0-8.22,4.33-14.65,13-14.65,6.1,0,11.3,3.16,11.85,9.85h-5.8Z"/><path class="cls-1" d="M260.33,9.5A9.32,9.32,0,0,0,252.18,14c-1.16-3.06-4.13-4.48-7.3-4.48a8.64,8.64,0,0,0-8,4.48h-.2V10.33H231.4V33.26l-3.89,0c-1.07,0-1.38-.57-1.38-2v-14c0-5.65-5.3-7.79-10.35-7.79-5.7,0-11.35,2-11.75,8.94h5.7c.25-2.91,2.5-4.26,5.7-4.26,2.3,0,5.35.57,5.35,3.63,0,3.48-3.65,3-7.75,3.8-4.8.57-9.95,1.66-9.95,8.35,0,5.25,4.2,7.84,8.86,7.84,3.05,0,6.69-1,8.95-3.26.44,2.43,2.09,3.26,4.4,3.26.94,0,2.74-.36,11.58-.67v-.05h.2V21.18c0-4.48,2.67-7,5.64-7,3.48,0,4.58,2,4.69,5.68v17.4h5.68V21.5c0-4.53,1.67-7.18,5.57-7.18,4.51,0,4.76,3,4.76,7.24V37.08h5.67V18.58c0-6.57-3.22-9.07-8.71-9.07m-39.91,18.6c0,3.75-3.93,5.1-6.45,5.1-2,0-5.28-.78-5.28-3.44,0-3.13,2.22-4.07,4.68-4.48s5.29-.41,7.05-1.63Z"/><polygon class="cls-2" points="43.01 37.08 0 37.08 20.09 0 63.1 0 43.01 37.08"/></g></g></g></svg>
                            </a>
                        <?php } ?>
                        <!-- iTunes Store -->
                        <?php if ($oeuvre['itunes_link'] != "" || $oeuvre['itunes_link'] != NULL) { ?>
                            <a href="<?php echo $oeuvre['itunes_link']; ?>" class="liens-img">
                                <svg id="oeuvre-stores-itunes" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 300 61.26"><defs><linearGradient id="linear-gradient" x1="30.63" x2="30.63" y2="61.26" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#ef4db7"/><stop offset="1" stop-color="#c643fd"/></linearGradient></defs><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><g id="iTunes"><path id="Shape" d="M75.34,16.53A2.64,2.64,0,1,1,78,19.11,2.6,2.6,0,0,1,75.34,16.53Zm.35,5.81h4.54V44.42H75.69Zm16.6,22.09V18.19H83V14.14h23.24v4.05H97V44.42h-4.7Zm32.9,0h-4.35v-3.8h-.1c-1.26,2.64-3.46,4-6.84,4-4.81,0-7.75-3.11-7.75-8.17V22.35h4.54V35.63c0,3.36,1.59,5.14,4.72,5.14s5.24-2.26,5.24-5.71V22.35h4.54V44.43Zm4.46-22.09H134V26.1h.11c1.32-2.64,3.55-4,6.95-4,4.87,0,7.65,3.13,7.65,8.19V44.42h-4.55V31.16c0-3.32-1.53-5.17-4.72-5.17s-5.23,2.31-5.23,5.71V44.42h-4.53V22.34ZM172,37.94c-.61,4-4.51,6.76-9.51,6.76-6.42,0-10.41-4.31-10.41-11.21s4-11.42,10.22-11.42,9.95,4.2,9.95,10.89v1.56H156.63v.27c0,3.78,2.37,6.25,5.94,6.25,2.52,0,4.49-1.19,5.1-3.1Zm-15.32-6.59h11c-.11-3.38-2.27-5.61-5.42-5.61S156.88,28,156.65,31.35ZM184,22.09c4.9,0,8.4,2.71,8.5,6.61H188.2c-.18-1.95-1.84-3.15-4.36-3.15s-4.1,1.14-4.1,2.86c0,1.32,1.09,2.2,3.38,2.77l3.72.86c4.45,1.07,6.13,2.7,6.13,5.94,0,4-3.78,6.72-9.18,6.72-5.2,0-8.71-2.67-9-6.7h4.49c.32,2.12,2,3.25,4.76,3.25s4.41-1.11,4.41-2.87c0-1.37-.84-2.1-3.15-2.69l-3.94-1c-4-1-6-3-6-6.06C175.32,24.76,178.82,22.09,184,22.09ZM209,36c.34,3,3.25,5,7.25,5,3.81,0,6.56-2,6.56-4.68,0-2.35-1.66-3.76-5.58-4.72l-3.92-.95c-5.56-1.34-8.15-3.94-8.15-8.16,0-5.23,4.56-8.82,11-8.82s10.79,3.59,10.94,8.82h-4.58c-.27-3-2.77-4.85-6.42-4.85S210,19.44,210,22.13c0,2.14,1.59,3.4,5.5,4.37l3.34.81c6.21,1.48,8.79,4,8.79,8.4,0,5.67-4.51,9.22-11.69,9.22-6.72,0-11.25-3.47-11.54-8.94H209Zm28.13-18.87v5.22h4.2v3.59h-4.2V38.1c0,1.89.84,2.77,2.69,2.77a14.4,14.4,0,0,0,1.49-.1v3.57a13.06,13.06,0,0,1-2.52.2c-4.47,0-6.21-1.68-6.21-6V25.93H229.4V22.34h3.21V17.11h4.55Zm6.06,16.26c0-6.94,4.1-11.31,10.48-11.31s10.47,4.37,10.47,11.31S260.12,44.7,253.7,44.7,243.22,40.35,243.22,33.38Zm16.34,0c0-4.76-2.19-7.57-5.86-7.57s-5.86,2.83-5.86,7.57S250,41,253.7,41,259.56,38.17,259.56,33.38Zm8.1-11H272V26.1h.11a5.25,5.25,0,0,1,5.3-4,7.21,7.21,0,0,1,1.56.17v4.24a6.28,6.28,0,0,0-2-.28c-2.91,0-4.72,2-4.72,5.08v13.1h-4.53V22.34Zm32.09,15.6c-.61,4-4.52,6.76-9.51,6.76-6.42,0-10.41-4.31-10.41-11.21s4-11.42,10.22-11.42S300,26.27,300,33v1.56H284.41v.27c0,3.78,2.37,6.25,5.93,6.25,2.52,0,4.5-1.19,5.11-3.1Zm-15.32-6.59h11c-.1-3.38-2.26-5.61-5.41-5.61S284.66,28,284.43,31.35Z"/><path class="cls-1" d="M46.14,61.23a25.9,25.9,0,0,0,4-.35A13.61,13.61,0,0,0,54,59.62a12.73,12.73,0,0,0,3.26-2.37A13.11,13.11,0,0,0,59.62,54a14,14,0,0,0,1.26-3.83,28.59,28.59,0,0,0,.35-4c0-.61,0-1.23,0-1.85V17c0-.61,0-1.23,0-1.85a28.58,28.58,0,0,0-.35-4,13.67,13.67,0,0,0-1.26-3.83A13.11,13.11,0,0,0,57.25,4,12.67,12.67,0,0,0,54,1.65,13.3,13.3,0,0,0,50.17.39a26,26,0,0,0-4-.35c-.61,0-1.23,0-1.85,0H17L15.12,0a28.72,28.72,0,0,0-4,.35A13.94,13.94,0,0,0,7.27,1.64,13.35,13.35,0,0,0,4,4,12.87,12.87,0,0,0,1.65,7.27,13.26,13.26,0,0,0,.39,11.1a27.05,27.05,0,0,0-.36,4c0,.62,0,1.23,0,1.85s0,1.17,0,1.76V44.29c0,.62,0,1.24,0,1.85a28.72,28.72,0,0,0,.35,4A13.67,13.67,0,0,0,1.64,54,13.11,13.11,0,0,0,4,57.25a12.91,12.91,0,0,0,3.26,2.37,13.61,13.61,0,0,0,3.82,1.26,26,26,0,0,0,4,.35c.61,0,1.23,0,1.85,0H44.29C44.91,61.25,45.53,61.25,46.14,61.23Z"/><polygon class="cls-2" points="24.73 23.39 21.09 34.59 24.57 37.12 30.62 41.51 40.15 34.59 36.51 23.39 24.73 23.39"/><path class="cls-3" d="M52.53,25.52A2.79,2.79,0,0,0,53,25l.05-.07a1.26,1.26,0,0,0,.19-.41.73.73,0,0,0,0-.39.66.66,0,0,0-.22-.31,1,1,0,0,0-.4-.22l-.08,0a2.85,2.85,0,0,0-.71-.12c-.7,0-1.4-.06-2.11-.06H36.51l3.63,11.2h0L50.86,26.8C51.43,26.39,52,26,52.53,25.52Z"/><path class="cls-4" d="M16.62,50.77a.82.82,0,0,0,.36.13,1.3,1.3,0,0,0,.46-.06l.08,0a3,3,0,0,0,.64-.32c.59-.38,1.17-.78,1.74-1.19l10.72-7.79-6.05-4.39L21.1,34.59h0L17,47.19c-.21.67-.41,1.34-.6,2a2.83,2.83,0,0,0-.1.71V50a1.25,1.25,0,0,0,.08.45A.83.83,0,0,0,16.62,50.77Z"/><path class="cls-5" d="M11.48,23.39q-1.05,0-2.1.06a2.85,2.85,0,0,0-.71.12l-.08,0a1.08,1.08,0,0,0-.41.22.68.68,0,0,0-.22.7,1.26,1.26,0,0,0,.19.41l0,.07a3.09,3.09,0,0,0,.5.52c.55.44,1.11.87,1.68,1.28l10.71,7.79,3.64-11.2Z"/><path class="cls-6" d="M44.24,47.18l-4.1-12.59h0l-9.52,6.92,10.72,7.78c.56.42,1.14.81,1.74,1.2a3,3,0,0,0,.64.32l.08,0a1.27,1.27,0,0,0,.46.06.63.63,0,0,0,.36-.13.69.69,0,0,0,.23-.3,1.34,1.34,0,0,0,.09-.46v-.08a2.57,2.57,0,0,0-.11-.72C44.65,48.53,44.46,47.85,44.24,47.18Z"/><path class="cls-7" d="M32.41,10.79c-.21-.67-.45-1.33-.7-2a3.22,3.22,0,0,0-.33-.64l-.06-.07A1.2,1.2,0,0,0,31,7.79a.68.68,0,0,0-.74,0,1.2,1.2,0,0,0-.33.31l-.05.07a3,3,0,0,0-.34.64c-.25.65-.49,1.31-.7,2l-4.1,12.6H36.51Z"/></g></g></g></svg>
                            </a>
                        <?php } ?>
                        <!-- Amazon -->
                        <?php if ($oeuvre['amazon_link'] != "" || $oeuvre['amazon_link'] != NULL) { ?>
                            <a href="<?php echo $oeuvre['amazon_link']; ?>" class="liens-img">
                                <svg id="oeuvre-stores-amazon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 90.2"><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><g id="Amazon"><path id="path8" class="cls-1" d="M185.88,70.48c-17.45,12.86-42.73,19.72-64.5,19.72A116.73,116.73,0,0,1,42.57,60.13c-1.63-1.47-.17-3.49,1.79-2.34A158.59,158.59,0,0,0,123.21,78.7a156.78,156.78,0,0,0,60.14-12.3c3-1.25,5.42,1.94,2.53,4.08"/><path id="path10" class="cls-1" d="M193.13,62.18c-2.22-2.85-14.74-1.34-20.36-.68-1.71.21-2-1.28-.43-2.35,10-7,26.34-5,28.24-2.64s-.49,18.77-9.86,26.6c-1.44,1.2-2.81.56-2.17-1,2.1-5.25,6.82-17,4.58-19.89"/><path id="path12" class="cls-2" d="M173.31,9.6V2.92A1.68,1.68,0,0,1,175,1.2h30.46a1.68,1.68,0,0,1,1.74,1.72V8.76c0,1-.82,2.27-2.26,4.29l-15.58,22.6c5.79-.15,11.9.73,17.15,3.73A3.13,3.13,0,0,1,208.13,42v7.22c0,1-1.09,2.16-2.24,1.56a35.09,35.09,0,0,0-32.22,0c-1.06.58-2.16-.57-2.16-1.57V42.39a8.25,8.25,0,0,1,1.12-4.69l18.3-26.29h-16a1.69,1.69,0,0,1-1.76-1.72"/><path id="path14" class="cls-2" d="M61.62,52.24H52.46a1.75,1.75,0,0,1-1.64-1.59V2.91A1.74,1.74,0,0,1,52.59,1.2h8.57a1.75,1.75,0,0,1,1.67,1.59V9H63C65.26,3,69.51.15,75.24.15S84.7,3,87.31,9a13.72,13.72,0,0,1,23.61-3.62c2.94,4,2.34,9.86,2.34,15V50.51a1.76,1.76,0,0,1-1.79,1.73h-9.15a1.76,1.76,0,0,1-1.66-1.73V25.24c0-2,.18-7-.25-8.94-.69-3.2-2.75-4.11-5.41-4.11A6.11,6.11,0,0,0,89.5,16.1c-1,2.41-.86,6.43-.86,9.14V50.51a1.75,1.75,0,0,1-1.77,1.73H77.39a1.75,1.75,0,0,1-1.65-1.73l0-25.27c0-5.32.87-13.15-5.65-13.15s-6.34,7.63-6.34,13.15V50.45a1.76,1.76,0,0,1-1.79,1.72"/><path id="path16" class="cls-2" d="M233.49.19c13.79,0,21.25,11.84,21.25,26.89,0,14.55-8.25,26.09-21.25,26.09-13.54,0-20.91-11.84-20.91-26.6S220,.19,233.49.19m.08,9.73c-6.85,0-7.28,9.33-7.28,15.15s-.09,18.27,7.2,18.27S241,33.3,241,27.19c0-4-.17-8.84-1.39-12.65-1-3.32-3.12-4.62-6.07-4.62"/><path id="path18" class="cls-2" d="M272.68,52.24h-9.44a1.77,1.77,0,0,1-1.67-1.73V2.76a1.76,1.76,0,0,1,1.78-1.56h8.59a1.78,1.78,0,0,1,1.65,1.33V9.9h.17c2.63-6.51,6.32-9.62,12.82-9.62,4.21,0,8.33,1.5,11,5.61C300,9.71,300,16.12,300,20.73v30a1.81,1.81,0,0,1-1.81,1.51h-9.46a1.76,1.76,0,0,1-1.64-1.51V24.83c0-5.21.6-12.84-5.79-12.84A6,6,0,0,0,276,15.8a21.23,21.23,0,0,0-1.47,9V50.45a1.78,1.78,0,0,1-1.82,1.72"/><path id="path28" class="cls-2" d="M148.69,29.4c0,3.61.09,6.63-1.74,9.85a7.56,7.56,0,0,1-6.43,4.22c-3.57,0-5.66-2.72-5.66-6.73,0-7.92,7.1-9.36,13.83-9.36v2m9.57,22.36a1.92,1.92,0,0,1-2.17.22,22.55,22.55,0,0,1-5.28-6.13c-5,5.15-8.62,6.69-15.16,6.69-7.75,0-13.76-4.78-13.76-14.34a15.63,15.63,0,0,1,9.8-15c5-2.2,12-2.58,17.3-3.19V18.81c0-2.19.17-4.78-1.13-6.66a6.11,6.11,0,0,0-5.16-2.4c-3.5,0-6.62,1.8-7.38,5.53A1.94,1.94,0,0,1,133.71,17l-8.91-1a1.62,1.62,0,0,1-1.37-1.93C125.47,3.26,135.25,0,144,0c4.47,0,10.32,1.19,13.85,4.58,4.48,4.18,4.05,9.75,4.05,15.82V34.73c0,4.31,1.78,6.2,3.47,8.53a1.74,1.74,0,0,1,0,2.44c-1.88,1.57-5.22,4.48-7.05,6.11l0,0"/><path id="path30" class="cls-2" d="M27.1,29.4c0,3.61.09,6.63-1.74,9.85-1.48,2.61-3.81,4.22-6.43,4.22-3.57,0-5.64-2.72-5.64-6.73,0-7.92,7.09-9.36,13.81-9.36v2m9.27,22.36A1.92,1.92,0,0,1,34.2,52c-3.05-2.54-3.59-3.71-5.28-6.13-5,5.15-8.61,6.69-15.16,6.69C6,52.56,0,47.78,0,38.22a15.63,15.63,0,0,1,9.81-15c5-2.2,12-2.58,17.29-3.19V18.81c0-2.19.17-4.78-1.11-6.66a6.16,6.16,0,0,0-5.16-2.4c-3.51,0-6.64,1.8-7.4,5.53A1.94,1.94,0,0,1,11.84,17L2.91,16a1.63,1.63,0,0,1-1.37-1.93C3.6,3.26,13.36,0,22.11,0,26.58,0,32.43,1.19,36,4.58c4.48,4.18,4,9.75,4,15.82V34.73c0,4.31,1.78,6.2,3.47,8.53a1.73,1.73,0,0,1,0,2.44c-1.88,1.57-5.21,4.48-7.05,6.11l0,0"/></g></g></g></svg>                                
                            </a>
                        <?php } ?>
                    </div>
                </div>

                <div class="carte flex-2x1">
                    <h3>PISTES</h3>
                    <div class="oeuvre-liste-pistes">

                    <?php foreach ($pistes AS $piste) { ?>
                        <div class="oeuvre-piste">
                            <span class="titre-piste"><?php echo $piste['piste_no']; ?>. <?php echo $piste['piste_titre']; ?></span>
                            <div class="piste-temps-play">
                                <span class="piste-temps"><?php echo $piste['piste_temps']; ?></span>

                                <?php if ($piste['piste_audio_path'] != "" || $piste['piste_audio_path'] != NULL) { ?>
                                    <span id="piste-play" class="piste-play">
                                        <svg id="btn-play" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM7 6l8 4-8 4V6z"/></svg>
                                    </span>
                                    <audio id="lecteur-audio" controls hidden>
                                        <source src="<?php echo $piste['piste_audio_path']; ?>" type="audio/mpeg">
                                    </audio>
                                <?php } else { ?>
                                    <span class="piste-disabled">
                                        <svg id="btn-play" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM7 6l8 4-8 4V6z"/></svg>
                                    </span>
                                <?php } ?>

                            </div>
                        </div>
                    <?php } ?>
                        
                    </div>
                </div>
            </div>
        </section>
    </main>
    <div class="conteneur">
        <?php include("./views/footer-public.php"); ?>
    </div>
</body>
</html>