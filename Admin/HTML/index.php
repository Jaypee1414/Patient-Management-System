
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/style.css">
    <title>Document</title>
</head>
<body>
       <div>
         <div id="image">
            <img src="../IMG/wallpaper.jpg" alt="">
         </div>
       </div>

       <section>
                <div id="signin">
                    <img src="../IMG/logo.jpg" alt="">
                    <div id="text" class="hidden">
                        <h3>ADMIN</h3>
                    </div>
                    <div id="fillup" class="hidden">
                        <input 
                        type="text" 
                        id="Email" 
                        placeholder="Admin Email "
                        name="email"
                        >
                        <input 
                        type="password" 
                        id="password" 
                        placeholder="Admin Password"
                        name="password"
                        >
                    </div>
                     <div id="btn" class="hidden">
                            <button id="login" name="sign" type="submit">Sign In</button>
                    </div>
                </div>
       </section>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
       <script>
        $(document).ready(function() {
            const username = $('#Email');
            const password = $('#password');
        
        $('#login').on('click',function() {
          
            if (username.val() == "admin") {
                if (password.val() == "admin123") {
                    location.href='add.php';
                } else {
                    alert("Error Password");
                }
            } else {
                alert("Error Email");
            }
        })  
        })
       </script>
</body>
</html>
