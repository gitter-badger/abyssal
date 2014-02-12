
        <div id="main" class="content">
            <div class="contact-container">
	            <h3>Get in Touch</h3>
				<h4>Abyssal 1 : 0853 1060 2422</h4>
                <h4>Abyssal 2 : 0878 7878 1001</h4>

                <p>If you have something in mind about us or our product, feel free to drop me a mail or directly message us. Happily if you are just passing by and simply want to say hello, then you are more than welcome.  </p>
				<h5>Thanks for your visit!!</h5>
            	<?php echo form_open("contact/post_message"); ?>
                	<input type="text" placeholder="name" name='name'>
                    <input type="text" placeholder="email" name='email'>
                    <input type="text" placeholder="phone" name='phone'>
                    <textarea name='message' placeholder="send u a message"></textarea>
                    <input type="submit" value="send" class="button button-mid button-red">
                <?php echo form_close(); ?>
            </div>
            <div class="clear-fix"></div>
        </div>
    