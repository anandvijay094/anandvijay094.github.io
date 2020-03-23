<html>
    <head>
        <title>NIMCET 2018:Dummy Design by Andi</title>

        <link rel="icon" href="./images/favicon.ico">
        <link rel="stylesheet" href="home_style.css" >
        <script src="home_script.js" ></script> 
        <style>

        #reg
        {
        margin: auto;
        width: 50%;
        border: 2px solid #31708f;
        margin-top:3%;
        background-color:#ecf0f1;
        }
        #reg p
        {
            text-align:center;
        }
        #reg h1 
        {
            text-align:center;
            color:#006E51;
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
        <div id="reg">
        <?php
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$phone=$_POST['phn'];
$state=$_POST['state'];
$degree=$_POST['degree'];
$college=$_POST['college'];
$percent=$_POST['prcnt'];
$password=$_POST['pwd'];
$connection_database_status=mysqli_connect("localhost","root","","NIMCET_DB");
if($connection_database_status)
{
 $Insert_Query="INSERT INTO student_db VALUES('$fname','$lname','$email','$password','$phone','$state','$college','$degree',$percent)";
 $query_stats=mysqli_query($connection_database_status,$Insert_Query);
 if($query_stats)
    {
        echo "<br><h1>You are Sucessfully Registered .</h1><br>";
        echo "<p><b><a href='index.html'>Kindly Log In Here</a></b></p><br>";
    }
else 
{
    echo "<br><h1>Some Error Occured</h1><br>";
    echo "<p><b>Kindly Bear With Us</b></p><br>";
}
}
else
    echo "Required Database is Not Available On Your System.";
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
