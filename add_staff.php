<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logistic Tracking System</title>
    <link rel="stylesheet" type="text/css" href="styling.css"></link>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

    
</head>
<body>
       
<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}
?>

  
   <script>

     //after openeing navigation bar these tasks will be done
    function openNav() {
      
        document.getElementById("menu").style.width = "220px";
        document.getElementById("main").style.minWidth="81.6vw";
        document.getElementById("header").style.minWidth="10vw"; 
        document.getElementById("footer").style.minWidth="10vw"; 

      
       
        
      
       
        document.getElementById("user").style.display="block";
        for(var i=0 ; i<9 ; i++)
        {
         document.getElementsByClassName('text')[i].style.display='inline';
        }
      }
       //after openeing navigation bar these tasks will be done
   
     //after closing navigation bar these tasks will be done
      
      function closeNav() {
        document.getElementById("menu").style.width = "80px"; 
         document.getElementById("main").style.minWidth="100vw";
        document.getElementById("header").style.minWidth="5vw";

       
        
        

        document.getElementById("user").style.display="none";
        for(var i=0 ; i<9 ; i++)
        {
         document.getElementsByClassName('text')[i].style.display='none';
        }
      
      }
      //after closing navigation bar these tasks will be done


     //opens or close the navigation
      function myFun(e){
        if(e.name != 'Click'){
           e.name = "Click";
           closeNav();
        }
        else if(e.name == 'Click'){
           e.name = "Unclick";
           openNav();
           
       }
       //opens or close the navigation
      }

     //opens and close branches dropdown
                    
       function Branches(e){
        if(e.name != 'Click'){
           e.name = "Click";

           dropdownb();
        }
        else if(e.name == 'Click'){
           e.name = "Unclick";
           dropupb();
           
       }
      }

      function dropdownb(){
      

      for(var k=0;k<2;k++){
        document.getElementsByClassName('display')[k].style. transition='all 0.3s linear'; 
        document.getElementsByClassName('display')[k].style.display='block'; 
      
       

        
      } 
    }

     function dropupb(){
      for(var k=0;k<2;k++){
        document.getElementsByClassName('display')[k].style.display='none'; 
      }
    }
    
      //opens and close branches dropdown
      


       //opens and close Employee drop down
       function Branchstaff(e){
        if(e.name != 'Click'){
           e.name = "Click";

           dropdownbs();
        }
        else if(e.name == 'Click'){
           e.name = "Unclick";
           dropupbs();
           
       }
      }

      function dropdownbs(){
      
      for(var j=2;j<4;j++){
        document.getElementsByClassName('display')[j].style.display='block'; 
      } 
    }

     function dropupbs(){
      for(var j=2;j<4;j++){
        document.getElementsByClassName('display')[j].style.display='none'; 
      }
    }
    //opens and close Employee drop down


    //OPENS AND CLOSE DELIVERY PERSON DROP DOWN
    function dp(e){
        if(e.name != 'Click'){
           e.name = "Click";

           dropdowndp();
        }
        else if(e.name == 'Click'){
           e.name = "Unclick";
           dropupdp();
           
       }
      }
    
      function dropdowndp(){
      
      
        document.getElementsByClassName('display')[4].style.display='block'; 
        document.getElementsByClassName('display')[5].style.display='block'; 
        
    }

     function dropupdp(){
      document.getElementsByClassName('display')[4].style.display='none'; 
        document.getElementsByClassName('display')[5].style.display='none';
 
    }

    //OPENS AND CLOSE DELIVERY PERSON DROP DOWN
           //opens and close customers drop down
           function customers(e){
        if(e.name != 'Click'){
           e.name = "Click";

           dropdownbc();
        }
        else if(e.name == 'Click'){
           e.name = "Unclick";
           dropupbc();
           
       }
      }

      function dropdownbc(){
      
      for(var j=6;j<8;j++){
        document.getElementsByClassName('display')[j].style.display='block'; 
      } 
    }

     function dropupbc(){
      for(var j=6;j<8;j++){
        document.getElementsByClassName('display')[j].style.display='none'; 
      }
    }
    //opens and close customers drop down

               //opens and close vehicles drop down
               function vehicles(e){
        if(e.name != 'Click'){
           e.name = "Click";

           dropdownbv();
        }
        else if(e.name == 'Click'){
           e.name = "Unclick";
           dropupbv();
           
       }
      }

      function dropdownbv(){
      
      for(var j=8;j<10;j++){
        document.getElementsByClassName('display')[j].style.display='block'; 
      } 
    }

     function dropupbv(){
      for(var j=8;j<10;j++){
        document.getElementsByClassName('display')[j].style.display='none'; 
      }
    }
    //opens and close vehicles drop down

             //opens and close parcels drop down
             function parcels(e){
        if(e.name != 'Click'){
           e.name = "Click";

           dropdownbp();
        }
        else if(e.name == 'Click'){
           e.name = "Unclick";
           dropupbp();
           
       }
      }

      function dropdownbp(){
      
      for(var j=10;j<12;j++){
        document.getElementsByClassName('display')[j].style.display='block'; 
      } 
    }

     function dropupbp(){
      for(var j=10;j<12;j++){
        document.getElementsByClassName('display')[j].style.display='none'; 
      }
    }
    //opens and close parcels drop down


       function logout(e){
        if(e.name != 'Click'){
           e.name = "Click";

           dropdownl();
        }
        else if(e.name == 'Click'){
           e.name = "Unclick";
           dropupl();
           
       }         
      }

      function dropdownl(){
        document.getElementById("lo").style.display="block";
      }

      function dropupl(){
        document.getElementById("lo").style.display="none";

      }

      function click_form(selectObj){
        // get the index of the selected option 
 var idx = selectObj.selectedIndex; 
 // get the value of the selected option 
 var which = selectObj.options[idx].value; 
 cList = countryLists[which]; 
 document.getElementsName('st_name').style.display='inline_block'; 

       }
    
      




</script>
    <!--CREATES A PAGE WITH GRID-->
    <div class="container" >

      <!--CREATES A HEADER-->
      <div class="style" id="header">
        <!--CREATES A HEADER IN CONTAINER-->

         <!--CREATES A HAMBURGER MENU BUTTON IN HEADER-->
           <span class=" fas fa-bars fa-2x" style="position:relative; top: 10; left:10;" onclick="myFun(this)" >
               
           </span> 
          <!--CREATES A HAMBURGER MENU BUTTON IN HEADER-->
        
            <!--CREATES A USER ICON IN HEADER -->
         <span onclick="logout(this)">
         
          <span  class=" fas fa-user-tie fa-2x " style="float: right; margin-left: 30px; margin-right: 20px;margin-top: 9px;" > <!--position: relative;top: 10; left: 900;-->
          <?php echo htmlspecialchars($_SESSION["username"]); ?><span class=" fa fa-angle-down ml-2" style="position: relative; top: 1;">
           </span>
         </span>
         <!--<img src="user.png" alt="" height="30px" width="30px" class="img" style="left: 1030; top: 8;">-->  
         
                              
         
           
          <!-- <img src="right-arrow.png" class="ar-h-w" style="left: 950; top: -8;">-->
         
            
             
         <!--CREATES A USER ICON IN HEADER --> 
            
     
 
         <!--CREATES A NOTIFICATION BUTTON IN HEADER-->
          <span class="fas fa-bell fa-2x"style="float:right ;margin-top: 10px;"></span> <!--position: relative; left: 850; top: 10;-->
        <!--CREATES A NOTIFICATION BUTTON IN HEADER-->

       
           
           

      </div>
  
        <!--CREATES A HEADER IN CONTAINER-->

        <!--CREATES A NAVIGATION MENU IN CONTAINER-->
        <div class="style" id="menu" >

           
            <!--SHOWS LTS ICON AND LTS IN MENU-->
            <div id="icon">
                 <a href=""> 
                   <span class="fas fa-shipping-fast" style="font-size: 50px; margin-top: 20px;margin-left: 5px;"></span>
                <!--<img src="icon.png" alt="image not found" width="50px" height="50px" id="logo">-->   
                  </a>  
                 <div class="text" > <b >LTS</b></div>
            </div>
            <!--SHOWS LTS ICON AND LTS IN MENU-->

           
             <!--SHOWS USER ICON AND WELCOME USER IN MENU-->
            <div id="user">
              <span class="fas fa-user-tie fa-3x img"></span>
             <!-- <img class="img" src="C:\Users\Khazeena_Junaid\Documents\logistic\user.png" alt="image not found" height="70px" width="60px">-->  
              
           
                <span class="clr">Welcome,</span>
                <h2 class="fsuser">
                <?php echo htmlspecialchars($_SESSION["username"]); ?></h2>
                          
            </div>
            <!--SHOWS USER ICON AND WELCOME USER IN MENU-->
   
            <br>
        
        
            <!--SHOWS DASHBOARD ICON AND DASHBOARD IN MENU-->
            <div class="elements" > 
              
              <span class="fas fa-tachometer-alt h-and-w fa-fw fa-2x"  onclick="location.href='dashboard.php';">
               
              </span>
              <div class="text" > 
                <a href="#">
                  <b  style="font-size: 16px;" onclick="location.href = 'dashboard.php';">
                    Dashboard
                  </b>
                </a>
              
            </div>

            </div>       

            
            <!--SHOWS DASHBOARD ICON AND DASHBOARD IN MENU-->
          


        
            
            <!--SHOWS BRANCHES ICON AND BRANCHES IN MENU-->
            <div class="elements" > 
              
              <span class="fas fa-building h-and-w fa-fw fa-2x"  onclick="Branches(this)">
               
              </span>
              <div class=" text" > 
                <a href="#">
                  <b  style="font-size: 16px;" onclick="Branches(this)">
                    Branches
                  </b>
                </a>
                  
                
                <span class="fa fa-angle-down ml-2 ar-h-w " onclick="Branches(this)" style="left: 40px;" >
                 
                </span>
              
            </div>
           
               <div class="display">
                <a href="add_new_branch.php"  class="fas fa-angle-right" style="position: relative; left: 40;">
                  <span class="elements" class="br-dd" >
                    <b style="position: relative; left: 26;" >Add new</b>
                  </span>
                 </a>
                 </div>
                
               
                 <div class="display" >
                  <a href="list_all_branches.php"  class="fas fa-angle-right" style="position: relative; left: 40;">
                    <span class="elements" class="br-dd">
                      <b style="position: relative; left: 26;">List All</b>
                    </span>
                   </a>
                   
                   </div>
                

            </div>       
          
                
            <!--SHOWS BRANCHES ICON AND BRANCHES IN MENU-->

            <div class="elements" > 
              
              <span class="fas fa-users h-and-w fa-fw fa-2x"  onclick="Branchstaff(this)">
               
              </span>
              <div class=" text" > 
                <a href="#">
                  <b style="font-size: 16px;" onclick="Branchstaff(this)">
                    Employee
                  </b>
                </a>
                  
                
                <span class="fa fa-angle-down ml-2 ar-h-w " onclick="Branchstaff(this)" style="left: 37px;" >
                 
                </span>
              
            </div>
           
              


              <div class="display" >
                <a href="add_staff.php"  class="fas fa-angle-right" style="position: relative; left: 40;">
                  <span class="elements" class="br-dd">
                    <b style="position: relative; left: 26;">Add new</b>
                  </span>
                 </a>
                 
                 </div>
               
                 <div class="display" >
                  <a href="list_staff.php"  class="fas fa-angle-right" style="position: relative; left: 40;">
                    <span class="elements" class="br-dd">
                      <b style="position: relative; left: 26;">List All</b>
                    </span>
                   </a>
                   
                   </div>
                

            </div>      
            
             <!--DELIVERY PERSON-->
             <div class="elements" > 
              
              <span class="fas fa-users h-and-w fa-fw fa-2x"   onclick="dp(this)">
               
              </span>
              <div class=" text" > 
                <a href="#">
                  <b style="font-size: 16px;" onclick="dp(this)">
                   Courier
                  </b>
                </a>
                  
                
                <span class="fa fa-angle-down ml-2 ar-h-w " onclick="dp(this)" style="left: 50px;" >
                 
                </span>
              
            </div>
           
              


              <div class="display" >
                <a href="add_dp.php"class="fas fa-angle-right"  style="position: relative; left: 40;" class="br-dd">              
                  <span class="elements" >
                  <b style="position: relative; left: 26;"  >Add new</b>
                  </span>
                </a>

                 </div>

                 <div class="display" >
                  <a href="list_dp.php"  class="fas fa-angle-right" style="position: relative; left: 40;">
                    <span class="elements" class="br-dd">
                      <b style="position: relative; left: 26;">List All</b>
                    </span>
                   </a>
                   
                   </div>
                

            </div>       

            <!--DELIVERY PERSON-->

          
             <!--customers-->

            <div class="elements" > 
              
              <span class="fas fa-user-alt h-and-w fa-fw fa-2x"  onclick="customers(this)">
               
              </span>
              <div class='text' > 
                <a href="#">
                  <b  style="font-size: 16px;" onclick="customers(this)">
                    Customers
                  </b>
                </a>
                  
                
                <span class="fa fa-angle-down ml-2 ar-h-w " onclick="customers(this)" style="left: 31px;" >
                 
                </span>
              
            </div>
           
              


              <div class="display" >
                <a href="add_customer.php"  class="fas fa-angle-right" style="position: relative; left: 40;">
                  <span class="elements" class="br-dd">
                    <b style="position: relative; left: 26;">Add new</b>
                  </span>
                 </a>
                 
                 </div>
               
                 <div class="display" >
                  <a href="list_customers.php"  class="fas fa-angle-right" style="position: relative; left: 40;">
                    <span class="elements" class="br-dd">
                      <b style="position: relative; left: 26;">List All</b>
                    </span>
                   </a>
                   
                   </div>
                

            </div>       
<!--customers-->



<!--vehicles-->
<div class="elements" > 
              
  <span class="fas fa-car h-and-w fa-fw fa-2x"  onclick="vehicles(this)">
   
  </span>
  <div class="text" > 
    <a href="#">
      <b  style="font-size: 16px;" onclick="vehicles(this)">
        Vehicles
      </b>
    </a>
      
    
    <span class="fa fa-angle-down ml-2 ar-h-w " onclick="vehicles(this)" style="left: 49px;" >
     
    </span>
  
</div>

  


  <div class="display" >
    <a href="add_vehicle.php"  class="fas fa-angle-right" style="position: relative; left: 40;">
      <span class="elements" class="br-dd">
        <b style="position: relative; left: 26;">Add new</b>
      </span>
     </a>
     
     </div>
   
     <div class="display" >
      <a href="list_vehicle.php"  class="fas fa-angle-right" style="position: relative; left: 40;">
        <span class="elements" class="br-dd">
          <b style="position: relative; left: 26;">List All</b>
        </span>
       </a>
       
       </div>
    

</div>       
<!--vehicles-->
    
<div class="elements" > 
              
  <span class="fas fa-boxes h-and-w fa-fw fa-2x"  onclick="parcels(this)">
   
  </span>
  <div class=" text" > 
    <a href="#">
      <b  style="font-size: 16px;" onclick="parcels(this)">
        Parcels
      </b>
    </a>
      
    
    <span class="fa fa-angle-down ml-2 ar-h-w " onclick="parcels(this)" style="left: 54px;" >
     
    </span>
  
</div>

  


  <div class="display" >
    <a href="add_parcel.php"  class="fas fa-angle-right" style="position: relative; left: 40;">
      <span class="elements" class="br-dd">
        <b style="position: relative; left: 26;">Add new</b>
      </span>
     </a>
     
     </div>
   
     <div class="display" >
      <a href="list_parcels.php"  class="fas fa-angle-right" style="position: relative; left: 40;">
        <span class="elements" class="br-dd">
          <b style="position: relative; left: 26;">List All</b>
        </span>
       </a>
       
       </div>
    

</div>       

            

            <!--SHOWS TRACK PARCELS ICON AND TRACK PARCELS IN MENU-->
            <div class="elements" > 
              
              <span class="fas fa-search-location h-and-w fa-fw fa-2x"  onclick="location.href='track_parcel.php';">
               
              </span>
              <div class=" text" > 
                <a href="#">
                  <b  style="font-size: 16px;"  onclick="location.href='track_parcel.php';"  >
                    Track Parcel
                  </b>
                </a>
              
            </div>

            </div>       

            <!--SHOWS TRACK PARCELS ICON AND TRACK PARCELS IN MENU-->

            <!--SHOWS REPORTS ICON AND REPORTS IN MENU-->
 <!--           <div class="elements" > 
              
              <span class="fas fa-file-invoice h-and-w fa-fw fa-2x"  onclick="Branchstaff(this)">
               
              </span>
              <div class="text" > 
                <a href="#">
                  <b  style="font-size: 16px;" onclick="Branchstaff(this)">
                    Reports
                  </b>
                </a>
              
            </div>

            </div>       
-->
        
          </div>
        <!--CREATES A NAVIGATION MENU IN CONTAINER-->

       
      
        <!--CREATES MAIN IN CONTAINER-->
    
        <div id="main">
         <div> <a href="logout.php">
          <button class="fas fa-sign-out-alt elements" id="lo"  >
            Log Out
          
          </button>
    </a>
    </div>
        <h1 style="font-weight:normal;">New Staff</h1>
           <hr style="border-color:rgba(0,123,255,255);">
           
           <br>
 
           <form action="st_database.php" method="post"  style="background-color:white; margin: 25px 25px; border:1px solid grey; box-shadow:10px 10px 10px 10px grey;" >
              
           <br>
                
                <label for="labels" style="margin:10px 10px 10px 10px;"> <b> Full Name</b></label>
                <label   style="margin:10px 10px 20px 440px;" > <b>Branch</b> </label>
                <br>
                <input  type="text" name="st_name" style="margin:10px 18px 10px 10px; height:40px;width:47%" class="inputs">
                <select name="br_code" style="margin:10px 21px 10px 10px; height:40px; width:47%" >
                  <?php
                        $conn = mysqli_connect("localhost", "root", "", "lts_db");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql_s = "SELECT br_code FROM branches";
 
$result = $conn->query($sql_s);


if ($result->num_rows > 0 ) {
// output data of each row
while($row = $result->fetch_assoc() ) {
echo "
<option>" . $row["br_code"]. "</option>";
}
echo "</option>";
} else { echo " No results"; }
$conn->close();

                  ?>
                </select >
                <br>
 
                <label for="labels"   style="margin:10px 10px 10px 10px;"> <b> Email</b></label>
                <label for="labels" style="margin:10px 10px 10px 473px;"> <b> Password</b></label>
                <br>
                <input type="text"  name="st_email"  style="margin:10px 18px 10px 10px; height:40px; width:47%" class="inputs">
                <input type="password"  name="st_password" style="margin:10px 10px 10px 11px; height:40px; width:47%" class="inputs">
                <br>
                <label for="labels" style="margin:10px 10px 10px 10px;"> <b> Phone#</b></label>
                <label for="labels"   style="margin:10px 10px 10px 463px;"> <b>CNIC </b></label>
                <br>
                <input type="number"name="st_phone"  style="margin:10px 18px 10px 10px; height:40px; width:47%" class="inputs">
                <input type="number"name="st_cnic"  style="margin:10px 10px 10px 11px; height:40px; width:47%" class="inputs">
                <br>
                <label for="labels"   style="margin:10px 10px 10px 10px;"> <b> Address</b></label>
                <label for="labels"   style="margin:10px 10px 10px 458px;"> <b> Gender</b></label>
                <br>
                <input type="text"  name="st_address"style="margin:10px 18px 10px 10px;height:40px; width:47%" class="inputs">
                <SELEct name="st_gender" style="margin:10px 18px 10px 10px; height:40px; width:47%">
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                </SELEct>
                <br>
                
 
 <label for="labels"   style="margin:10px 10px 10px 10px;"> <b> Salary</b></label>
 <label for="labels" style="margin:10px 10px 10px 469px;"> <b> Date of birth</b></label>
 <br>
 <input type="number"  name="st_salary"  style="margin:10px 18px 10px 10px; height:40px; width:47%" class="inputs">
 <input type="date"  name="st_dob" style="margin:10px 10px 10px 12px; height:40px; width:47%" class="inputs">
    
              <br>

 
                <button style="background-color:rgba(0,123,255,255); height:40px; width:120px; border=0px;margin-left: 400px; margin-bottom:10px;">Save</button>
                <button style="background-color:grey; height:40px; width:120px; border=0px; margin-left:10px">Cancel</button>
                <br>
          
           </form>

           
          
            
          
             
         
         
         </div>
 
        <!--CREATES MAIN IN CONTAINER-->
      


       <!--CREATES FOOTER IN CONTAINER-->
       <div  id="footer">
        <b id="right-center">
        Logistic Tracking System
        <b>
     </div>
         <!--CREATES FOOTER IN CONTAINER-->


    </div>
    <!--CREATES A PAGE WITH GRID-->
   
</body>
</html>