<?php
require("database/classes.php");
include("include/functions.php");
session_start();

if (isset($_SESSION['user'])) :
    $user = $_SESSION['user'];
    $receiver = isset($_REQUEST['receiver']) ? (new User)->getById((int)$_REQUEST['receiver']) : null;
    $chat_user = $receiver ?: $user;
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/contact.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>Contacts</title>
        <style>
            body {
                background-color: lightblue;
            }

            .c-list {
                text-align: center;
                padding: 0px;
                min-height: 60px;
            }

            .c-info {
                background
            }

            .title {
                padding-top: 5px;
            }

            .name {
                color: darkblue;
            }

            form.search_form input[type=text] {
                padding: 10px;
                font-size: 17px;
                border-radius: 4px;
                /* border: 1px solid #343a40 !important; */
                float: left;
                width: 80%;
                color: rgb(81, 175, 233) !important;
                /* background: #343a40 !important; */
            }
        </style>
    </head>

    <body>

        <div>
            <nav class="navbar navbar-expand-sm bg-light justify-content-center">
                <ul class="navbar-nav" style="list-style-type:none">
                    <li class="nav-item">
                        <a class="nav-link" href="home.php"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i>Back to chat</a>
                    </li>

                </ul>
            </nav>
            <br>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-offset-3 col-sm-6">
                    <div class="panel panel-default">
                        <div class="panel-heading c-list">
                            <span class="title">Contacts</span>
                            <ul class="pull-right c-controls">
                                <form class="search_form" action="">
                                    <input type="text" placeholder="Search" title="Search Parents or Teachers or a Campus" autocomplete="off" name="search_query">
                                    <button class="btn btn-primary" type="submit" name="search_btn" style="padding-left:1px;"><i class="fa fa-search"></i></button>
                                </form>
                            </ul>
                        </div>
                        <ul class="list-group" id="contact-list">
                            <?php
                            searchContact();
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </body>

    </html>
<?php else : header("location: signin.php"); ?>
<?php endif ?>