
<?php
include('mainnav.php');
 ?>
 <?php
 define('DB_SERVER','localhost');
 define('DB_USER','root');
 define('DB_PASS' ,'');
 define('DB_NAME', 'demos');
 $con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
 // Check connection
 if (mysqli_connect_errno())
 {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }
 ?>

 <link rel="stylesheet" href="style.css" type="text/css" />

  <div class="container">
          <div class="media-container-row">
              <div class="title col-12 col-md-8">
                  <h2 class="align-center pb-3 mbr-fonts-style display-2"><br><br>Accounts
                  </h2>
                  <h3 class="mbr-section-subtitle align-center mbr-light mbr-fonts-style display-5"></h3>

              </div>
          </div>
      </div>

     <div class="main-content">
       <center>
       <table align="center">
         <tr>
         <th>Sno.</th>
         <!--
         <th>User Id</th>
         you can delete the comment. I just think that this is not needed
         -->
         <th>User Name</th>
         <th>User Ip</th>
         <th>Login Time</th>
         <th>Logout Time</th>
         </tr>

<?php
          $query=mysqli_query($con,"select * from userLog");
         while($row=mysqli_fetch_array($query))
     {
     ?>
           <tr>
           <td><?php echo $cnt;?></td>
           <td><?php echo $row['username'];?></td>
           <!--
           <td><?php// echo $row['userId'];?></td>
           you can delete the comment. I just think that this is not needed-->
           <td><?php echo $row['userIp'];?></td>
           <?php
           echo "<td>" . date('h:i a M/d/Y' , strtotime($row['loginTime'])) . "</td>";
           ?>
           <td><?php echo $row['logoutTime'];?></td>
}
           </table>
<center>

</body>
</html>
