<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="{{asset('css/style.css')}}">

  <title>HASH TECHIE OFFICIAL</title>
</head>
<body>
    <section>
        <div class="form-box">
            <div class="form-value">
                <form action="{{route('postLogin')}}" class="fade-in-up">
                    <h2>Login</h2>
                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="email" name="email" placeholder="Email" required>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" name="password" placeholder="Password" required>
                    </div>
                    <input type="hidden" name="role" value="0">
                    <button>Login</button>
                </form>
            </div>
        </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>
