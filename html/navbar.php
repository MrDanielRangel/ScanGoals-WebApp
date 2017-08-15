


<ul>
    <li <?php if($activePage == "home"){echo "class='active'";}?>><a href="home.php">Home</a></li>
    <li <?php if($activePage == "journal"){echo "class='active'";}?>><a href="journal.php">Journal</a></li>
    <li <?php if($activePage == "videos"){echo "class='active'";}?>><a href="videos.php">Videos</a></li>
    <li <?php if($activePage == "profile"){echo "class='active'";}?>><a href="profile.php">Profile</a></li>
    <li <?php if($activePage == "contact"){echo "class='active'";}?>><a href="contact.php">Contact Us</a></li>

    <!--if session-->
    <?php if(isset($_SESSION['login_user'])){echo "<li><a href='../include/logout.php'>Logout</a></li>";}?>


</ul>