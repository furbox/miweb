<footer class="mdl-mini-footer">
  <div class="mdl-mini-footer__left-section">
    <div class="mdl-logo">Title</div>
    <ul class="mdl-mini-footer__link-list">
      <li><a href="#">Help</a></li>
      <li><a href="#">Privacy & Terms</a></li>
    </ul>
  </div>
</footer>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="./assets/templates/jquery-1.12.3.min.js" type="text/javascript"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="./assets/templates/bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
        <script src="./assets/templates/mdl/material.min.js" type="text/javascript"></script>
        <script language="Javascript">
            function confirmDel(){
                var agree = confirm("¿Realmente desea eliminarlo? ");
                if (agree){
                    return true;
                }else{
                    return false;
                }                  
                
            }
        </script>
    </body>
</html>