
<?php require "E:\wamp64\www\project file\header.php";
$conn = mysqli_connect("localhost", "root", "", "collegeproject"); 
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql1 = "SELECT COUNT(college_id) FROM branding"; 
$sql2 = "SELECT COUNT(college_id) FROM gusto"; 
$sql3 = "SELECT COUNT(college_id) FROM champ"; 
$sql4 = "SELECT COUNT(college_id) FROM care"; 

$result1 = mysqli_query($conn, $sql1);
$result2 = mysqli_query($conn, $sql2);
$result3 = mysqli_query($conn, $sql3);
$result4 = mysqli_query($conn, $sql4);

if (!$result1 && !$result2 && !$result3 && !$result4) {
    die("Error running query: " . mysqli_error($conn));
}

$row1 = mysqli_fetch_array($result1, MYSQLI_ASSOC);
$row2 = mysqli_fetch_array($result2, MYSQLI_ASSOC);
$row3 = mysqli_fetch_array($result3, MYSQLI_ASSOC);
$row4 = mysqli_fetch_array($result4, MYSQLI_ASSOC);

$brandingr = $row1['COUNT(college_id)'];
$gustor = $row2['COUNT(college_id)'];
$champr = $row3['COUNT(college_id)'];
$carer = $row4['COUNT(college_id)'];


mysqli_close($conn);
?>
<link rel=stylesheet type="text/css" href="adminpanel.css">
<div class="maincard"><div class="card">
    <h3 class="card__title">Branding
    </h3>

    <p class="card__content">Total number of participations:<?php echo $brandingr; ?></p>
    <div class="card__date">Click to see the list </div>
    <div class="card__arrow">
        <a href="brandinglistsql.php"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" height="15" width="15">
            <path fill="#fff" d="M13.4697 17.9697C13.1768 18.2626 13.1768 18.7374 13.4697 19.0303C13.7626 19.3232 14.2374 19.3232 14.5303 19.0303L20.3232 13.2374C21.0066 12.554 21.0066 11.446 20.3232 10.7626L14.5303 4.96967C14.2374 4.67678 13.7626 4.67678 13.4697 4.96967C13.1768 5.26256 13.1768 5.73744 13.4697 6.03033L18.6893 11.25H4C3.58579 11.25 3.25 11.5858 3.25 12C3.25 12.4142 3.58579 12.75 4 12.75H18.6893L13.4697 17.9697Z"></path>
        </svg></a>
    </div>
</div>
<div class="card">
    <h3 class="card__title">Gusto
    </h3>
    <p class="card__content">Total number of participations:<?php echo $gustor; ?></p>
    <div class="card__date">
    Click to see the list    </div>
    <div class="card__arrow">
    <a href="gustolist.php">  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" height="15" width="15">
            <path fill="#fff" d="M13.4697 17.9697C13.1768 18.2626 13.1768 18.7374 13.4697 19.0303C13.7626 19.3232 14.2374 19.3232 14.5303 19.0303L20.3232 13.2374C21.0066 12.554 21.0066 11.446 20.3232 10.7626L14.5303 4.96967C14.2374 4.67678 13.7626 4.67678 13.4697 4.96967C13.1768 5.26256 13.1768 5.73744 13.4697 6.03033L18.6893 11.25H4C3.58579 11.25 3.25 11.5858 3.25 12C3.25 12.4142 3.58579 12.75 4 12.75H18.6893L13.4697 17.9697Z"></path>
        </svg></a>
    </div>
</div>
<div class="card">
    <h3 class="card__title">Champ's Club
    </h3>
    <p class="card__content">Total number of participations:<?php echo $champr; ?></p>
    <div class="card__date">
    Click to see the list    </div>
    <div class="card__arrow">
    <a href="champlist.php"> <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" height="15" width="15">
            <path fill="#fff" d="M13.4697 17.9697C13.1768 18.2626 13.1768 18.7374 13.4697 19.0303C13.7626 19.3232 14.2374 19.3232 14.5303 19.0303L20.3232 13.2374C21.0066 12.554 21.0066 11.446 20.3232 10.7626L14.5303 4.96967C14.2374 4.67678 13.7626 4.67678 13.4697 4.96967C13.1768 5.26256 13.1768 5.73744 13.4697 6.03033L18.6893 11.25H4C3.58579 11.25 3.25 11.5858 3.25 12C3.25 12.4142 3.58579 12.75 4 12.75H18.6893L13.4697 17.9697Z"></path>
        </svg></a>
    </div>
</div>
<div class="card">
    <h3 class="card__title">Care Club</h3>
    <p class="card__content">Total number of participations:<?php echo $carer; ?></p>
    <div class="card__date">
    Click to see the list    </div>
    <div class="card__arrow">
    <a href="carelist.php"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" height="15" width="15">
            <path fill="#fff" d="M13.4697 17.9697C13.1768 18.2626 13.1768 18.7374 13.4697 19.0303C13.7626 19.3232 14.2374 19.3232 14.5303 19.0303L20.3232 13.2374C21.0066 12.554 21.0066 11.446 20.3232 10.7626L14.5303 4.96967C14.2374 4.67678 13.7626 4.67678 13.4697 4.96967C13.1768 5.26256 13.1768 5.73744 13.4697 6.03033L18.6893 11.25H4C3.58579 11.25 3.25 11.5858 3.25 12C3.25 12.4142 3.58579 12.75 4 12.75H18.6893L13.4697 17.9697Z"></path>
        </svg></a>
    </div>
</div>
</div>
<footer>
<?php include "./footer.php"?>
</footer>