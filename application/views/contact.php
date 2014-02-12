
        <div id="main" class="content">
            <div class="contact-container">
	            <h3>Get in Touch</h3>
				<p>If you have an enquiry regarding an exciting new project, or would like to discuss any future projects you may have in mind, feel free to drop me a mail. Equally, if you are just passing by and simply want to say hello, then you are more than welcome.For project enquiries please use the Quote Form.</p>
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
    