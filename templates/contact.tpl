<div class="contact">
    <form class="send-contact">
        <div class="form-group">
            <label for="usr">Name:</label>
            <input type="text" name="input[name]" class="form-control input" id="name">
        </div>
        <div class="form-group">
            <label for="pwd">Email:</label>
            <input type="password" name="input[email]" class="form-control input" id="email">
        </div>
        <div class="form-group">
            <label for="pwd">Re-Password:</label>
            <textarea class="form-control input" name="input[text]" rows="5" id="comment"></textarea>
        </div>
        <button type="button" class="btn btn-default" id="sendBtn">Sent</button>
        <div class="message"></div>
    </form>
    <button type="button" class="btn btn-default" id="backBtn">Back</button>
    <p class="details"><span style='color:#3e8f3e;text-align:center'>Successfuly Sent.</span></p>
    <script>
        new Contact.Sent();
    </script>
</div>
