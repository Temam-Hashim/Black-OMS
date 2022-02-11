<?php
     ob_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> Black </title>

    <!-- set logo -->
      <link rel="shortcut icon" href="images/logo.png" />

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">


    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>

    <!-- Custom CSS -->
    <link href="css/blog-home.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">



<!-- toastr css -->
     <link href="css/toastr.min.css" rel="stylesheet" />
     <!-- bs css -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <!-- fontawsome css -->
    <link href="css/font-awesome.min.css" rel="stylesheet" />

    <script src="https://js.pusher.com/7.0/pusher.min.js"></script>



    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
-->


    <!-- font Awsome -->
    <link href="fontawesome/css/all.css" rel="stylesheet">

<script type="text/javascript">
    function saveScrollPostion(){
            window.onbeforeunload = function () {
            var scrollPos;
            if (typeof window.pageYOffset != 'undefined') {
                scrollPos = window.pageYOffset;
            }
            else if (typeof document.compatMode != 'undefined' && document.compatMode != 'BackCompat') {
                scrollPos = document.documentElement.scrollTop;
            }
            else if (typeof document.body != 'undefined') {
                scrollPos = document.body.scrollTop;
            }
            document.cookie = "scrollTop=" + scrollPos;
        }
        window.onload = function () {
            if (document.cookie.match(/scrollTop=([^;]+)(;|$)/) != null) {
                var arr = document.cookie.match(/scrollTop=([^;]+)(;|$)/);
                document.documentElement.scrollTop = parseInt(arr[1]);
                document.body.scrollTop = parseInt(arr[1]);
            }
        }
    }
// // keep scroll postion
//  location.hash = '#'+'like_scroll_set';

</script>

<style>
  .loader_bg{
    position:fixed;
    z-index: 999999;
    background:#fff;
    width: 100%;
    height: 100%;
  }
  .loader{
    margin-top: 15%;
    margin-left:40%;
    border: 0 solid transparent;
    border-radius:50%;
    width: 150px;
    height: 150px;
    position: absolute;
    top:calc(50vh - 75);
    left:calc(50vw - 75);
  }
  .loader:before, .loader:after{
    content:'';
    border:1rem solid #ff5733;
    border-radius:50%;
    width:inherit;
    height:inherit;
    position:absolute;
    top:0;
    left:0;
    animation: loader 2s linear infinite;
    opacity: 0;
  }
  .loader:before{
    animation-delay:.5s

  }
  @keyframes loader{
    0%{
      transform:scale(0);
      opacity: 0;
    }
    50%{
      opacity: 1;
    }
    100%{
      transform:scale(1);
      opacity: 0;
    }
  }
</style>


</head>

<body>

    <!-- loader -->
    <div class="row loader_bg">
      <div class="loader"></div>
 </div>

 <script>
   setTimeout(() => {
     $('.loader_bg').fadeToggle();
     
   }, 3000);
 </script>


