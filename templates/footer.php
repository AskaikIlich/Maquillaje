<footer id="contact">
         <div class="footer">            
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                        <p>© 2023 Todos los derechos reservados. <a href="http://intranet.vtv.gov.ve/">Venezolana de TeleVisión</a></p>
                     </div> 
                  </div>
               </div>
         </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="../js/jquery.min.js"></script>
      <script src="../js/popper.min.js"></script>
      <script src="../js/bootstrap.bundle.min.js"></script>
      <script src="../js/jquery-3.0.0.min.js"></script>
      <!-- sidebar -->
      <script src="../js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="../js/custom.js"></script>
      <script>
         $('a[href^="#"]').on('click', function(event) {
         
          var target = $(this.getAttribute('href'));
         
          if( target.length ) {
              event.preventDefault();
              $('html, body').stop().animate({
                  scrollTop: target.offset().top
              }, 2000);
          }
         
         });
      </script>
     
   </body>
</html>
