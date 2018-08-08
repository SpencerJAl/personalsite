{% extends 'base.php' %}

{% block content %}
<?php include('email.php'); ?>
<div id="content-info">
    <h1>Contact</h1>
    <p>Want to contact Alexander for jobs? Fill in this contact form below and he will get back to within 48 hours</p>
      <form id="contact-form" action="" method="post">
       <div class="input-field">
        <input type="text" id="name" name="name" placeholder="Your Name" class="validate" required>
        <label>Name</label>
       </div> 
       <div class="input-field">
        <input type="email" id="email" name="email" placeholder="Your E-mail" class="validate" required>
        <label>E-mail</label>
       </div> 
       <div class="input-field">
        <input type="text" id="message" name="message" placeholder="Your Message" class="validate" required>
        <label>Your Message</label>
       </div>
       <br>
       <div class="input-field"></div>
        <input type="submit" class="btn" id="submit" value="Submit Message">
       </div>
     </form>
    </div>
</div>
{% endblock %}