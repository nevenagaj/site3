<?php include ('template/header.php');?>
      <div class="contact_main">
        <h2>Stop by to say Hi</h2>
        <div class="left">
          <div class="inner">
            <img src="img/contact.jpg" alt="about_us">
          </div>
          <div class="okvir"></div>
        </div>
        <div class="right">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
          </p>
          <div class="contact_text">
            <div class="contact_text_left">
              <span style="color: #A02534;">Address:</span> Some Street bb
              <br> 11000 Belgrade,
              <br> Serbia

            </div>
            <div class="contact_text_right">
              <span style="color: #A02534;">Email:</span> olgicinecokoladice@gmail.com <br>
              <span style="color: #A02534;">Phone:</span> +381 65 123 4567
            </div>
          </div>
          <button id="myBtn">write to us</button>
          <div id="myModal" class="modal">
          <!-- Modal content -->
          <div class="modal-content">
            <span class="close">&times;</span>
            <h3>Send Us a Message:</h3>
            <form action="action_page.php">

              <div class="first_last_name">
                <label for="fname">First & Last Name</label>
                <input type="text" id="fname" name="firstname">
              </div><br>

             <div class="emai-phone-form">
               <div class="email">
                 <label for="email">Email address</label>
                 <input type="text" id="email" name="email">
               </div>
               <div class="phone">
                 <label for="phone">Phone</label>
                 <input type="text" id="phone" name="phone">
               </div>
             </div><br>

             <div class="subject">
               <label for="subject">Subject</label><br>
               <textarea id="subject" name="subject" placeholder="Write something.."></textarea>
             </div>

             <input class="submit-msg-btn" type="submit" value="Submit">

           </form>
          </div>
        </div>

        </div>
      </div>
    </div>


<?php include 'template/footer.php';?>
