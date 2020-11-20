<?php
require("database/classes.php");
include("include/functions.php");
session_start();

if (isset($_SESSION['user'])) :
    $user = $_SESSION['user'];
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/profile.css">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
        <title>Profile</title>
    </head>

    <body>
        <div class="container">
            <div>
                <br>
                <br>
                <br>
                <a href="home.php">
                    <button class="btn btn-default search-icon" name="search_user" type="submit">
                        <span class="fa fa-home font-weight-bold"></span>
                        Home
                    </button>
                </a>
                <br>
                <a href="contact.php">
                    <button class="btn btn-default search-icon" name="search_user" type="submit">
                        <i class="fas fa-address-book"></i>
                        Contacts
                    </button>
                </a>
                <br>
                <a href="profile.php">
                    <button class="btn btn-default search-icon" name="search_user" type="submit">
                        <i class="fas fa-user-alt"></i>
                        Profile
                    </button>
                </a>
                <br>
                <a href="upload_files.php">
                    <button class="btn btn-default search-icon" name="search_user" type="submit">
                        <i class="fas fa-download"></i>
                        Upload Files
                    </button>
                </a>
                <a href="download_files.php">
                    <button class="btn btn-default search-icon" name="search_user" type="submit">
                        <i class="fas fa-download"></i>
                        Download Files
                    </button>
                </a>
            </div>
            <h2 class="fieldset-title">Personal Info <i class="fas fa-user-alt"></i></h2>
            <div class="view-account">
                <section class="module">
                    <div class="module-inner">
                        <div class="content-panel">
                            <form class="form-horizontal" method="post" enctype="multipart/form-data">
                                <fieldset class="fieldset">
                                    <h3 class="fieldset-title">Change Profile Picture</h3>
                                    <div class="form-group avatar">
                                        <figure class="figure col-md-2 col-sm-3 col-xs-12">
                                            <?php showProfilePic(); ?>
                                        </figure>
                                        <!-- upload files -->
                                        <div class="form-inline col-md-10 col-sm-9 col-xs-12">
                                            <label id='update_profile'>
                                                Select Profile Picture
                                                <hr>
                                                <input type="file" class="upload-input" name="uploadedFile" />
                                                <hr>
                                            </label>

                                            <input type="submit" name="uploadBtn" class="btn" value="Upload" />
                                        </div>
                                        <br>
                                    </div>

                                </fieldset>
                            </form>

                            <form class="form-horizontal" method="post" enctype="multipart/form-data">
                                <fieldset class="fieldset">
                                    <div class="form-group">
                                        <br>
                                        <label class="col-md-2 col-sm-3 col-xs-12 control-label">Fullname</label>
                                        <div class="col-md-10 col-sm-9 col-xs-12">
                                            <input type="text" class="form-control" name="fullname" placeholder="new username">
                                            <!-- <input type="text" class="form-control" name="fullname" value=" //$user->fullname; "> -->
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <br>
                                        <label class="col-md-2 col-sm-3 col-xs-12 control-label">Password</label>
                                        <div class="col-md-10 col-sm-9 col-xs-12">
                                            <input type="text" class="form-control" name="password" placeholder="new password">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label class="col-md-2  col-sm-3 col-xs-12 control-label">Email</label>
                                        <div class="col-md-10 col-sm-9 col-xs-12">
                                            <input type="email" class="form-control" name="email" placeholder="new email">
                                            <!-- <input type="email" class="form-control" name="email" value="//$user->email; "> -->
                                            <br>
                                            <input class="btn" type="submit" name="update_user_profile" value="Update Profile">
                                            <br>
                                            <hr>
                                            <a href="contact.php" class="bt" role="button">Chat to someone <i class="fas fa-address-book"></i></a>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>

                            <?php
                            updateUserProfile();

                            updateProfilePicture();

                            ?>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </body>

    </html>

<?php else : header("location: signin.php"); ?>
<?php endif ?>