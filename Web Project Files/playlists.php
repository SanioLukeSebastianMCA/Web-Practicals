<?php
    include 'includes.php';
    include 'ReadSongAlbum.php';

    if($user_status=='user_inactive'){
        header('Location: login_register_page.php?isreg=false&fromprocess=true&login_status=failed&msg=Please Login or Register to view playlists');
    }
?>

<html>
    <head>
        <link rel="icon" type="image/png" href="../images/music_icon.png">
        <title>About Us - Sargam</title>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="../css/nav_css.css">
        <link rel="stylesheet" href="../css/playlists_css.css">
        <link rel="stylesheet" href="../css/home_css.css">

        <script>
            function openPlaylist(songid, plist_foldername){
                window.open('category.php?frompage=playlists&songname_id='+songid+'&plist_foldername='+plist_foldername, '_self');
            }
        </script>
    </head>

    <body style="background:rgb(245, 240, 240)">

        <div style="background-color: rgb(112, 11, 11);">
            <?php $page="playlists"; include 'navbar.php'; ?>
        </div>

        <div id="playlist_intro_div">
            <p>&nbsp;PlayList Songs&nbsp;</p>
            <div><img src="../images/music_anim_2.gif" width="300px" height="300px" style="border-radius: 1000px;"/></div>
        </div>

        <div id="playlist_mysongs_div" style="margin-top: 40px;">

            <?php
                
                echo '
                    <p id="playlist_mysongs_title" style=" margin-top: 20px;">My Playlists</p>
                    <div id="playlist_mysongs_listdiv">
                ';

                    $playlist_array_res= mysqli_query($conn,"SELECT * FROM sargam_playlists WHERE plist_userid=".$_SESSION['uid']." GROUP BY plist_nameid");
                    $all_plistcategory_arr= mysqli_fetch_all($playlist_array_res, MYSQLI_ASSOC);

                    if(count($all_plistcategory_arr) > 0){
                        foreach($all_plistcategory_arr as $list){
                            $plist_foldername=$list['plist_foldername'];
                            $plist_nameid=$list['plist_nameid'];
                            echo '
                            <div class="playlist_mysongs_item" onclick="openPlaylist(`'.$plist_nameid.'`,`'.$plist_foldername.'`);" title="Open this playlist">
                                <img src="../images/log_reg_bg_5.png" alt="Playlist Album" class="playlist_mysongs_titleimg" />
                                <p>'.$plist_foldername.'</p>
                                <div class="playlist_mysongs_full_cover">
                                    <i class="fa fa-list-ul"></i>
                                </div>
                            </div>
                            ';
                        }
                    }

                echo "</div>";

                if(count($all_plistcategory_arr) <= 0){
                    echo "<div id='playlist_mysongs_empty_txt'><p>Your playlist is empty. Please add your favuorite songs to playlists and enjoy them.</p></div>";
                }
            ?>
            
        </div>

        <?php include 'footer.php'; ?>

    </body>

</html>