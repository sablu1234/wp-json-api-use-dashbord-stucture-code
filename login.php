<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <div class="container login-container">
        <h2>Login</h2>
        <!-- Error message for invalid login credentials -->
        <div class="error-alert">Error Message</div>

        <!-- Success message for successful login -->
        <div class="success-alert">Success Message</div>

        <form method="post" action="Submit_URL">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
    </div>
</body>

</html>
