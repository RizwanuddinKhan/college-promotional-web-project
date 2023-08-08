<style>
nav{
    background-image: linear-gradient(rgb(53, 226, 160), #055247);
    box-shadow: 0 5px 5px rgba(0,0,0,0.1);
    padding-left: 20px;
    display: flex;
    padding-bottom: 10px;
}
.logo{
    display: flex;
    
}
h1{
    font-size: 50px;
    font-family: old english text mt;
    margin-left: 10px;
    color: white;
    font-weight: lighter;
    margin-bottom: 10px;
    margin-top: 0px;
}
nav ul {
    font-size: medium;
    font-family: Arial, Helvetica, sans-serif;
    display: flex;
    list-style: none;
    margin: 0;
    padding: 0;
    margin-right: 0px;
    align-items: flex-end;
}
.navtabs{
    display: flex;
    align-items: right;
    align-content: right;
}
nav ul li {
    display: flex;
    margin-right: 40px;
    align-items: flex-end;
}
nav ul li a {
    color: white;
    font-weight: bold;
    transition: background-color 0.3s ease-in-out;
    text-decoration: none;
}
nav ul li a:hover {
    background-color: whitesmoke;
    color: goldenrod;
}



@media (max-width: 768px) {
  nav ul {
    flex-direction: column;
    align-items: center;
    text-align: center;
  }
  nav ul li {
    margin: 10px 0;
  }
  
  .logo h1 {
    font-size: 40px;
  }
  
  .navtabs {
    justify-content: center;
  }
}

@media (max-width: 480px) {
  nav ul li {
    margin-right: 20px;
  }

  .logo h1 {
    font-size: 30px;
  }
}

</style>

<nav>
  <div class="logo"><a href="/project file/mainpage/mainpage.php"><img src="college logo-modified.png" style="height: 100px;width: 100px;padding-left: 0px;"></a>
    <h1>Imperial University</h1>
  </div>
  <br>
  <div class="navtabs">
    <ul>
      <li><a href="/project file/admin/admin page.html">Admin Login</a></li>
      <li><a href="/project file/registration/registration.html">Registrations</a></li>
      <li><a href="/project file/events/events.php">Past Events</a></li>
      <li><a href="/project file/campus/campus.php">Campus View</a></li>
      <li><a href="/project file/link/link.html">Links and References</a></li>
    </ul>
  </div>
</nav>
