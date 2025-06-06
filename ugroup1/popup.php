
  <style>
    /* Overlay background */
    #popupOverlay {
      display: none; /* hidden by default */
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100vh;
      background-color: rgba(1, 1, 1, 0.92); /* blue background */
      z-index: 9999;
      justify-content: center;
      align-items: center;
    }
    
    #popupOverlay .widget-box.service-details-help {
        background: url(assets/images/ugroup/consultant2.png) center / cover;
        padding:50px;
    }
    
    #popupOverlay .widget-box.service-details-help::before {
        background: rgba(6, 50, 50, 0.8);
    }
    
    .service-sidebar{
        max-width:450px;
    }
    
    /* Form container */
    .popupForm {
      background-color: white;
      padding: 30px;
      border-radius: 8px;
      position: relative;
      max-width: 400px;
      width: 90%;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
    }

    /* Close button */
    .closeBtn {
      position: absolute;
      top: 10px;
      right: 15px;
      background: transparent;
      border: none;
      font-size: 25px;
      cursor: pointer;
      color: #fff;
      background:red;
    }

    .popupForm input, .popupForm button {
      width: 100%;
      padding: 10px;
      margin-top: 10px;
      font-size: 16px;
    }
    
   
    #popupOverlay .closeBtn:hover {
      background-color: red;
      color: #fff;
    }
  </style>


  <div id="popupOverlay">
      <button class="closeBtn" onclick="closePopup()">×</button>
       <div class="service-sidebar">
    <div class="widget-box service-details-help">
                                    <div class="service-details-content">
                                        <div class="title-area text-center">
                                            <div class="sub-title"><span><i class="asterisk"></i></span>CONTACT</div>
                                            <h2 class="sec-title">Get in 
                                            Touch</h2>
                                        </div>
                                        
                                        <form id="contact_form" class="contact_form mt-5" action="#" method="post">
                                            <div class="form-group">
                                                <input type="text" id="fullName" name="name" placeholder="Your Name *" required autocomplete="on">
                                            </div>
                                            <div class="form-group">
                                                <input type="email" id="userEmail" name="email" placeholder="Enter Your E-Mail *" required autocomplete="on">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" id="phone" name="phone" placeholder="Phone No *" required autocomplete="on">
                                            </div>
                                            <button type="submit" class="theme-btn mt-5"  data-loading-text="Please wait...">
                                                <span class="link-effect">
                                                    <span class="btn-title">Send Now</span>
                                                </span><i class="fa-regular fa-arrow-right-long"></i>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
  </div>

  <script>
    // Show popup after 60 seconds
    window.onload = function() {
      setTimeout(() => {
        document.getElementById("popupOverlay").style.display = "flex";
      }, 5000); // 5,000 ms = 5sec
    };

    function closePopup() {
      document.getElementById("popupOverlay").style.display = "none";
    }
  </script>

