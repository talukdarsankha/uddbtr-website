<?php include("include/head.php");?>

<body style="background-image: linear-gradient(to bottom right, rgb(124, 122, 122) , rgb(51, 52, 53));">
   <!-- ?PROD Only: Google Tag Manager (noscript) (Default ThemeSelection: GTM-5DDHKGP, PixInvent: GTM-5J3LMKC) -->
   <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5DDHKGP" height="0" width="0" style="display: none; visibility: hidden"></iframe></noscript>
   <!-- End Google Tag Manager (noscript) -->
   <!-- Layout wrapper -->
   <div class="layout-wrapper layout-content-navbar  ">
      <div class="layout-container">
         <!-- Menu -->
         <!-- Menu -->
         <?php include("include/sidebar.php");?>
         <!-- / Menu -->
         <!-- Layout container -->
         <div class="layout-page">

            <style>
                  .background {
                  position: fixed;
                  top: 0;
                  bottom: 0;
                  left: 0;
                  right: 0;
                  background: url("https://vidyasheela.com/web-contents/website-components/Coming-Soon-Pages/website-under-construction-page-template-html/construction.jpg") #08093cb3;
                  background-size: cover;
                  background-repeat: no-repeat;
                  background-blend-mode: darken;
                  filter: blur(10px);
                  z-index: -1;
            }
            
            .container {
                  width: 600px;
                  margin: auto;
                  display: flex;
                  flex-direction: column;
                  align-items: center;
            }
            .top p{
                  font-size: 16px;
                  width: 160px;
                  text-align: center;
                  }
            .top {
                  display: flex;
                  align-items: center;
                  font-weight: 900;
                  margin: 10px;
            }
            
            hr {
                  width: 100px;
                  color: white;
                  border-radius: 5px;
                  margin: 0 15px
            }
            
            h1 {
                  font-size: 60px;
                  text-align: center;
                  font-weight: 500;
                  letter-spacing: 2px;
            }
            h3{
                  margin-bottom: 10px;
            }

            .social-icons {
                  margin: 20px auto;
                  display: flex;
                  flex-wrap: wrap;
                  justify-content: center;
            }
            
            a {
                  color: white;
            }
            
            i {
                  font-size: 35px;
                  margin: 10px;
            }
            
            .progress-wrapper {
                  width: 100%;
                  background: #2f2b2bc7;
                  display: flex;
                  margin-bottom: 20px;
                  border-radius: 5px;
            }
            
            .progress {
                  width: 0%;
                  height: 10px;
                  background: white;
                  border-radius: 5px;
                  display: flex;
                  justify-content: flex-end;
                  /* transition: all 0.003 ease-in; */
            }
            
            .progress span {
                  color: white;
                  position: relative;
                  top: 13px;
                  left: 25px;
                  font-weight: 800;
            }
            @media screen and (max-width:640px) {
               
                  .container{
                     width: 90%;
                  }

                  h1 {
                  font-size: 50px;
                  }

                  i {
                  font-size: 25px;
                  margin: 10px;
            }
            }
            @media screen and (max-width:400px) {
                  h1 {
                  font-size: 30px;
                  }
            }
            </style>

            <div class="background"></div>
            <div class="container">
                <div class="top">
                    <hr>
                    <p>Urban Development Department</p>
                    <hr>
                </div>
                <h1 style="color: #fff;">UNDER CONSTRUCTION</h1>
                <h3 style="color: #fff;">PROGRESS</h3>
                <div class="progress-wrapper">
                    <div class="progress"><span></span>
                </div>
                </div>
            </div>

            <!-- Content wrapper -->
               
               <!-- Footer -->
              <?php include("include/footer.php");?>
               <!-- / Footer -->
               <div class="content-backdrop fade"></div>
            </div>
            <!-- Content wrapper -->
         </div>
         <!-- / Layout page -->
      </div>
      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
      <!-- Drag Target Area To SlideIn Menu On Small Screens -->
      <div class="drag-target"></div>
   </div>
   <!-- / Layout wrapper -->
   <!-- Core JS -->
   <!-- build:js assets/vendor/js/core.js -->
   <?php include("include/javascript.php");?>

  <script src="assets/vendor/libs/flatpickr/flatpickr.js"></script>  

  <!-- Page JS -->
   <script src="assets/js/forms-pickers.js"></script>
   <script src="assets/plugins/sweetalert/sweetalert.min.js"></script>
  
</body>
</html>
<!-- beautify ignore:end -->
