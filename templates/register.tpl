{strip}
    <form class="register">
        <div class="form-group">
            <label for="usr">Username:</label>
            <input type="text" name="username" class="form-control" id="usr">
        </div>
        <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" name="password" class="form-control" id="pwd">
        </div>
        <div class="form-group">
            <label for="pwd">Re-Password:</label>
            <input type="password" name="repassword" class="form-control" id="pwd">
        </div>
        <button type="button" class="btn btn-default" id="registerBtn">Register</button>
    </form>
    <script>
        new Generic.Insert();
    </script>
{/strip}
