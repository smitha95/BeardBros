<?php include 'templates/header.php'; ?>
<head>
  <style media="screen">
  label {
    display: inline-block;
    width: 155px;
    text-align: right;
}
  </style>
</head>
<title>Contact</title>
<h1>Contact Us</h1>
<!--

- What other information should we request fot our contact form?
-

-->

<div class="container">
  <div class="row">
    <div class="col-xl-8 offset-xl-2 py-5">
<!-- Start contatc  Form-->
      <form id="contact-form" method="post" action="mail.php" role="form">
        <div class="messages"></div>
        <div class="controls">
<!-- General Information -->
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="form_name">Firstname *</label>
                <input id="form_name" type="text" name="name" class="form-control" placeholder="Please enter your firstname *" required="required" data-error="Firstname is required.">
                <div class="help-block with-errors"></div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="form_lastname">Lastname *</label>
                <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Please enter your lastname *" required="required" data-error="Lastname is required.">
                <div class="help-block with-errors"></div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="form_companyname">Company name</label>
                <input id="form_lastname" type="text" name="cname" class="form-control" placeholder="Please enter your company name ">
                <div class="help-block with-errors"></div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="form_email">Email *</label>
                <input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required.">
                <div class="help-block with-errors"></div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <label for="form_callreq">Phone call *</label>
              <select id="form_callreq" name="callreq" class="form-control" required="required" data-error="Please select YES or NO">
                <option value="">Please Choose an option</option>
                <option value="YES">Yes</option>
                <option value="NO">no</option>
              </select>
              <div class="help-block with-errors"></div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="form_tel">Phone number</label>
                <input id="form_tel" type="tel" name="tel" class="form-control" placeholder="Please enter your phone number">
                <div class="help-block with-errors"></div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="form_priority">Priority level*</label>
                <select id="form_priority" name="priority" class="form-control" required="required" data-error="Please specify your need.">
                  <option value="">Please Choose an option</option>
                  <option value="Low">Low</option>
                  <option value="Normal">Normal</option>
                  <option value="High">High</option>
                  <option value="Emergency">Emergency</option>
                </select>
                <div class="help-block with-errors"></div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="form_request_type">Request type*</label>
                <select id="form_request_type" name="request_type" class="form-control" required="required" data-error="Please make a selection">
                  <option value="">Please Choose an option</option>
                  <option value="General">General</option>
                  <option value="Update">Website Update</option>
                  <option value="Change">Information Change</option>
                  <option value="Addition">Information Additon</option>
                  <option value="New">New Products</option>
                </select>
                <div class="help-block with-errors"></div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label for="form_message">Message *</label>
                <textarea id="form_message" name="message" class="form-control" placeholder="Message for us *" rows="4" required="required" data-error="Please, leave us a message."></textarea>
                <div class="help-block with-errors"></div>
              </div>
            </div>
            <div class="col-md-12">
              <input type="submit" class="btn btn-success btn-send" value="Send message">
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <p class="text-muted"><strong>*</strong> These fields are required.</p>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div><br><br><br>
<?php include 'templates/footer.php'; ?>
