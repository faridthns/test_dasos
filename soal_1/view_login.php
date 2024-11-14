<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h2>Login Form</h2>
    <form id="form_login">
        <input type="text" id="username" placeholder="Username" required>
        <input type="password" id="password" placeholder="Password" required>
        <button type="submit">Login</button>
    </form>

    <p id="message"></p>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#form_login').on('submit', function() {

                const username = $("#usernamer").value;
                const password = $("#password").value;

                $.ajax({
                    url: '/controller/proses_login',
                    type: 'POST',
                    data: {
                        username : username,
                        password: password
                    },
                    dataType: 'json',
                    success: function(response) {
                        if (response.status === 'success') {
                            $('#message').text(response.message);
                            setTimeout(function() {
                                window.location.href = "/home";
                            }, 1000);
                        } else {
                            window.location.href = "/view_login";
                        }
                    }
                });
            });
        });
    </script>
</body>
</html>
