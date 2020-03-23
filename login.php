<html>
    <head>
        <title>NIMCET 2018:Dummy Design by Andi</title>

        <link rel="icon" href="./images/favicon.ico">
        <link rel="stylesheet" href="home_style.css" >
        <script src="home_script.js" ></script> 
        <style>
            #chng_pwd{
                color:white;
                margin-left:35%;
                margin-bottom:5%;
                padding:2%;
                background-color:#db6851;
                outline:none;
                font-size:20px;
                font-weight:800;
                cursor:pointer;
            }
        #profile
        {
        margin: auto;
        width: 50%;
        border: 2px solid #31708f;
        margin-top:3%;
        background-color:#ecf0f1;
        }
        table , td 
        {
            border:2px solid #9E1030;
            border-collapse:collapse;
            text-align:center;
        }
        table
        {
         margin: auto;
         text-align: right;
        }
        #profile p
        {
            text-align:center;
        }
        h1 
        {
            text-align:center;
        }
        </style>
    </head>
    <body onload="dt()">
        <!-----------------------------TOP BAR------------------------------------------------>
       <div id="top_bar"> 
           
           <span id="tdte" > </span> 
       
        <span style="float: right;margin-right: 5%;"> For Admission Year
        <span style="background-color:red;margin-left: 0%;padding-right: 1%;">2018</span></span>
       </div>
       <!-----------------------------------HEADER ----------------------------------------------->
       <header>
            <h1>NIMCET - 2018</h1>
            <br/>
            <p>NIT MCA COMMON Entrance Test</p>
       </header>
       <!-----------------------------------------Logo_Bar-------------------------------------------->
        <div id="logo_bar"> 
            <div id="engl" >National Institute Of Technology <br>Karnataka, Surathkal</div>
            <div id="pic">
                Organizing Institute
                <br><br>
                <img src="./images/nitk-t-logo.png" alt="NIT Surathkal Logo" >
            </div>
            <div id="hind">NIMCET HELPLINE NO<br>026-8975878</div>
            <div style="clear:both"></div>
        </div>
        <!-------------------------------------Navigation Bar----------------------------------------->
        <nav>
            
        <a href="index.html"> <button>  Home</button></a>
                <a href="participating.html" > <button>  Participating NITs</button></a>
                <a href="./importantdate.html" ><button>  Important Dates</button></a>
                <a href="./Documents/Information_Brouchre.pdf" target="_blank"> <button>  Information Brochure</button></a>
                <a href="./Documents/Seat_Matrix.pdf" target="_blank"> <button>  Seat Matrix</button></a>
                <a href="contactus.html" ><button>  Contact Us</button></a>
            
        </nav>
        <div id="profile">
        <?php
$connection_database_status=mysqli_connect("localhost","root","","NIMCET_DB");
if($connection_database_status)
{
    $password=$_POST['pwd'];
    $email=$_POST['email'];
    $log_in_query="SELECT * FROM student_db WHERE email='$email'";
    $query_status=mysqli_query($connection_database_status,$log_in_query);
    if($row=mysqli_fetch_array($query_status))
    {
        if($row['password']==$password)
        {
            echo "<h1 style='color:#5cb85c;'><br>PROFILE</h1><br><br>";
            echo "<table>";
            echo "<tr>";
            echo "<td>First Name</td>";
            echo "<td>".$row['fname']."</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>Last Name</td>";
            echo "<td>".$row['lname']."</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>Email id</td>";
            echo "<td>".$row['email']."</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>Mobile No.</td>";
            echo "<td>".$row['phone']."</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>State</td>";
            echo "<td>".$row['state']."</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>College</td>";
            echo "<td>".$row['college']."</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>Degree</td>";
            echo "<td>".$row['degree']."</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>Percentage</td>";
            echo "<td>".$row['percent']."</td>";
            echo "</tr>";
            echo "</table>";
            echo "<br><br>";
            echo'<a href="pwd_change.html"><button id="chng_pwd">Change Password</button></a>';
        }
        else
         {
             echo "<h1 style='color:#db6851;'><br>Wrong Credentials.</h1>";
             echo "<br><br><p><b><a href='index.html' >Try Again </a></b></p><br>";
         }
    }
    else
    {
        echo "<h1 style='color:#db6851;'><br>You Are Not Registered in Our System , Kindly Register Yourself .</h1>";
        echo "<br><br><p><b><a href='registration.html'> Register Yourself </a></b></p><br><br>";
    }
}
else
{
    echo "Required Database is Not Present On Your System .";
}
?>

        </div>
        <!------------------------------------Icon Scalinng Bar------------------------------------->
        <div id="scale_icon">
            <img src="./images/NITT.jpg" alt="NIT Tiruchirappalli" class="ic" >
            <img src="./images/NITC.jpg" alt="NIT Calicut" class="ic"  >
            <img src="./images/NITK.png" alt="NIT Surathkal" class="ic"  >
            <img src="./images/NITD.png" alt="NIT Durgapur" class="ic"  >
            <img src="./images/MANIT.png" alt="NIT Bhopal" class="ic"  >
            <img src="./images/NITJSR.png" alt="NIT Jamshedpur" class="ic"  >
            <img src="./images/NITA.jpg" alt="NIT Agartala" class="ic"  >
            <img src="./images/NITW.jpg" alt="NIT Warangal" class="ic"  >
            <img src="./images/NITR.jpg" alt="NIT Raipur" class="ic"  >
            <img src="./images/NITKKR.png" alt="NIT Kurukshetra" class="ic"  >
            <img src="./images/MNIT.jpg" alt="NIT Allahabad" class="ic"  >

        </div>
        <!------------------------------------------------ Footer ----------------------------------------------------->
        <footer>
                <div>Copyright &copy; Department of Mathematical and Computational Sciences | NITK - 2018 | #1</div>
        </footer>
    </body>
</html>
