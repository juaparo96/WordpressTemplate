<form id="sunsetContactForm" class="sunset-contact-form" action="#" method="post" data-url="<?php echo admin_url('admin-ajax.php') ?>">

    <div class="form-group">
        <input class="form-control sunset-form-control" placeholder="YOUR NAME" type="text" name="name" id="name" >
        <small class="text-danger form-control-msg">Your Name is Required</small>
    </div>
    <div class="form-group">
        <input class="form-control sunset-form-control" placeholder="YOUR EMAIL" type="email" name="email" id="email" >
        <small class="text-danger form-control-msg">Your Email is Required</small>
    </div>
    <div class="form-group">
        <textarea class="form-control sunset-form-control" name="message" id="message" placeholder="Your Message" ></textarea>
        <small class="text-danger form-control-msg">A Message is Required</small>
    </div>

<div class="text-center">
  <button type="submit" class="btn btn-default btn-lg btn-sunset-form">Submit</button>
  <small class="text-info form-control-msg js-form-submission">Submission in process, please wait...</small>
  <small class="text-success form-control-msg js-form-success">Messages Successfully Submitted, Thank You!</small>
  <small class="text-danger form-control-msg js-form-error">There was a problem with the Contact Form,
please try again!</small>
</div>

</form>
