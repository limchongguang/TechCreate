
<form action="contactemail.php" method="post">
        <div class="form-group formpadding">
          <input type="text" class="form-control inputheight" id="firstName" placeholder="First Name*" required>
        </div>
        <div class="form-group formpadding">
         <input type="text" class="form-control inputheight" id="lastName" placeholder="Last Name*" required>
        </div>
        <div class="form-group formpadding">
          <input type="email" class="form-control inputheight" id="email" aria-describedby="emailHelp" placeholder="Email*" required>
        </div>
        <div class="form-group formpadding">
          <input type="text" class="form-control inputheight" id="designation" placeholder="Designation/Job Title">
        </div>
        <div class="form-group formpadding">
          <input type="text" class="form-control inputheight" id="companyName" placeholder="Company Name*" required>
        </div>
        <div class="form-group formpadding">
          <select class="form-control inputheight" id="country" style="background-color: transparent; color:#999999;">
            <option>Country </option>
            <option value="BR">Brunei</option>
            <option value="CMD">Cambodia</option>
            <option value="CN">China</option>
            <option value="HK">Hong Kong</option>
            <option value="IA">India</option>
            <option value="ID">Indonesia</option>
            <option value="JP">Japan</option>
            <option value="PH">Philippines</option>
            <option value="LS">Laos</option>
            <option value="MS">Malaysia</option>
            <option value="MY">Myanmar (Burma)</option>
            <option value="SG">Singapore</option>
            <option value="TH">Thailand</option>
            <option value="UK">United Kindom(UK)</option>
            <option value="US">United States of Ameriaca (USA)</option>
            <option value="LS">Vietnam</option>
            <option value="others">Others</option>
          </select>
        </div>
        <div class="form-group formpadding">
          <select class="form-control inputheight" id="areaOfInterest" style="background-color: transparent; color:#999999;">
            <option>Area of Interest <i class="fas fa-chevron-down"></i></option>
            <option value="Payment">Fatster Payment System Engine</option>
            <option value="CyberSecurity">CyberSecurity</option>
            <option value="API">Secured API Gateway</option>
            <option value="Apps">Secure App Services</option>
            <option value="IT Infra">Hyper-Coveraged IT Infrastructure</option>
            <option value="Satellite">Satellite Services</option>
            <option value="Others">Others- Please specify in the message box below</option>
          </select>
        </div>
        <div class="form-group formpadding">
          <textarea class="form-control" id="message" placeholder="Your Message*" rows="5" style="background-color: transparent; color:white;" required></textarea>
        </div>
        <button type="submit" class="btn btn-custom2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Submit&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
      </form>
    </div>
  </div>
</div>
