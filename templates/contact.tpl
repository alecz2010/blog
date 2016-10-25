<div class="contact">
    <form class="send-contact">
        <div class="form-group">
            <input type="text" name="input[name]" class="form-control input" placeholder="Your name" id="name">
        </div>
        <div class="form-group">
            <input type="password" name="input[email]" class="form-control input" placeholder="Your email address" id="email">
        </div>
        <div class="form-group">
            <textarea class="form-control input" name="input[text]" rows="5" placeholder="Message" id="comment"></textarea>
        </div>
        <button type="button" class="btn btn-primary" id="sendBtn">SEND</button>
        <div class="message"></div>
    </form>
    <div class="back hide">
        <img src="http://timbergrove.com/assets/xicon-contact-success-d2727d4f41f54eb503c74f3b1216056d.png.pagespeed.ic.cFVpo2R7Dn.png" style="width:200px;height:200px" />
        <br><button type="button" class="btn btn-primary" id="backBtn">BACK</button>
    </div>
    <script>
        new Contact.Sent();
    </script>
</div>
