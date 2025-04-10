<<<<<<< HEAD
﻿<style type="text/css">


/* show newscontact1 when screen is more than 680 pixels wide */
@media screen and (min-width: 681px) {
    #newscontact1 { display: ; }   #newscontact2 { display: none ; }  
}

/* show newscontact2 when screen is less than 680 pixels wide */
@media screen and (max-width: 680px) {
    #newscontact1 { display: none; }   #newscontact2 { display:  ; }  
}
</style>

<div id="newscontact1">


<table> 
<td>


<div id="news">
  <?php include($_SERVER['DOCUMENT_ROOT']."/newsfeed.php"); ?>
  </div>
</td>
<td> <div id="contact">
  <?php include($_SERVER['DOCUMENT_ROOT']."/contact2.php"); ?>
  </div>
  </td>
</table>  

</div>


<div id="newscontact2">



<div id="news">
  <?php include($_SERVER['DOCUMENT_ROOT']."/newsfeed.php"); ?>
  </div>
 <div id="contact">
  <?php include($_SERVER['DOCUMENT_ROOT']."/contact2.php"); ?>
  </div>
   

=======
﻿<style type="text/css">


/* show newscontact1 when screen is more than 680 pixels wide */
@media screen and (min-width: 681px) {
    #newscontact1 { display: ; }   #newscontact2 { display: none ; }  
}

/* show newscontact2 when screen is less than 680 pixels wide */
@media screen and (max-width: 680px) {
    #newscontact1 { display: none; }   #newscontact2 { display:  ; }  
}
</style>

<div id="newscontact1">


<table> 
<td>


<div id="news">
  <?php include($_SERVER['DOCUMENT_ROOT']."/newsfeed.php"); ?>
  </div>
</td>
<td> <div id="contact">
  <?php include($_SERVER['DOCUMENT_ROOT']."/contact2.php"); ?>
  </div>
  </td>
</table>  

</div>


<div id="newscontact2">



<div id="news">
  <?php include($_SERVER['DOCUMENT_ROOT']."/newsfeed.php"); ?>
  </div>
 <div id="contact">
  <?php include($_SERVER['DOCUMENT_ROOT']."/contact2.php"); ?>
  </div>
   

>>>>>>> 8c82a25a7dc13de4870a706773ea7e0c4b0008ac
</div>