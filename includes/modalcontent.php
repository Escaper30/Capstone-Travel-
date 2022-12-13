
<!-- modal testing -->
<div id="myModal" class="modal">

<!-- Modal content -->
<div class="modal-content">
  <div class="modal-header">
  <H3 class=modal_color>Welcome to VOYAGER <b><?php echo $user["fname"];  ?></b>&#9973;</h3>
    <a class="close">&#10006;</a>
  
  </div>
  <div class="modal-body">
    <h5>Welocome to the VOYAGER customer portal!</h5>
    <p>Here you can Add, Delete, Update Travel Stories, that further helps to other travelers to make<br>
    there journey memorable</p>
    <br>
    <a href="user_profile.php" class="primary-btn"><?php echo $user["fname"];  ?>'s Portal<span class="arrow_right"></span></a>
   
  </div>
  <div class="modal-footer">
    <h3></h3>
  </div>
</div>

</div>
<!-- modal testing ends -->
