<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: linear-gradient(to bottom right, #6a0dad, #ff206e);
        }

        .register-card {
            max-width: 400px;
            padding: 2rem;
            border-radius: 5px;
            background: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
    <title>User Registration</title>
</head>

<body>
    <section class="section">
        <div class="container">
            <div class="card register-card">
                <div class="card-content">
                    <h2 class="title is-2 has-text-centered has-text-primary">User Registration</h2>
                    <form action="register.php" method="post">
                        <div class="field">
                            <label for="username" class="label">Username:</label>
                            <div class="control">
                                <input class="input is-small" type="text" id="username" name="username" required>
                            </div>
                        </div>

                        <div class="field">
                            <label for="email" class="label">Email:</label>
                            <div class="control">
                                <input class="input is-small" type="email" id="email" name="email" required>
                            </div>
                        </div>

                        <div class="field">
                            <label for="password" class="label">Password:</label>
                            <div class="control">
                                <input class="input is-small" type="password" id="password" name="password" required>
                            </div>
                        </div>

                        <div class="field is-grouped is-grouped-centered">
                            <div class="control">
                                <button type="submit" class="button is-primary">Register</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>

</html>



