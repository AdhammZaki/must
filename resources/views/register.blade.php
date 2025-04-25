<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auth Form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Montserrat:400,800');

        * {
            box-sizing: border-box;
        }

        body {
            background: #f6f5f7;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            font-family: 'Montserrat', sans-serif;
            height: 100vh;
            margin: -20px 0 50px;
        }

        h1 {
            font-weight: bold;
            margin: 0;
        }

        p {
            font-size: 14px;
            font-weight: 100;
            line-height: 20px;
            letter-spacing: 0.5px;
            margin: 20px 0 30px;
        }

        span {
            font-size: 12px;
        }

        a {
            color: #333;
            font-size: 14px;
            text-decoration: none;
            margin: 15px 0;
        }

        button {
            border-radius: 20px;
            border: 1px solid #FF4B2B;
            background-color: #FF4B2B;
            color: #FFFFFF;
            font-size: 12px;
            font-weight: bold;
            padding: 12px 45px;
            letter-spacing: 1px;
            text-transform: uppercase;
            transition: transform 80ms ease-in;
        }

        button:active {
            transform: scale(0.95);
        }

        button:focus {
            outline: none;
        }

        button.ghost {
            background-color: transparent;
            border-color: #FFFFFF;
        }

        form {
            background-color: #FFFFFF;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            padding: 0 50px;
            height: 100%;
            text-align: center;
        }

        input {
            background-color: #eee;
            border: none;
            padding: 12px 15px;
            margin: 8px 0;
            width: 100%;
        }

        .container {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 14px 28px rgba(0,0,0,0.25), 
                    0 10px 10px rgba(0,0,0,0.22);
            position: relative;
            overflow: hidden;
            width: 768px;
            max-width: 100%;
            min-height: 480px;
        }

        .form-container {
            position: absolute;
            top: 0;
            height: 100%;
            transition: all 0.6s ease-in-out;
        }

        .sign-in-container {
            left: 0;
            width: 50%;
            z-index: 2;
        }

        .container.right-panel-active .sign-in-container {
            transform: translateX(100%);
        }

        .sign-up-container {
            left: 0;
            width: 50%;
            opacity: 0;
            z-index: 1;
        }

        .container.right-panel-active .sign-up-container {
            transform: translateX(100%);
            opacity: 1;
            z-index: 5;
            animation: show 0.6s;
        }

        @keyframes show {
            0%, 49.99% {
                opacity: 0;
                z-index: 1;
            }
            
            50%, 100% {
                opacity: 1;
                z-index: 5;
            }
        }

        .overlay-container {
            position: absolute;
            top: 0;
            left: 50%;
            width: 50%;
            height: 100%;
            overflow: hidden;
            transition: transform 0.6s ease-in-out;
            z-index: 100;
        }

        .container.right-panel-active .overlay-container{
            transform: translateX(-100%);
        }

        .overlay {
            background: #FF416C;
            background: -webkit-linear-gradient(to right, #FF4B2B, #FF416C);
            background: linear-gradient(to right, #FF4B2B, #FF416C);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: 0 0;
            color: #FFFFFF;
            position: relative;
            left: -100%;
            height: 100%;
            width: 200%;
            transform: translateX(0);
            transition: transform 0.6s ease-in-out;
        }

        .container.right-panel-active .overlay {
            transform: translateX(50%);
        }

        .overlay-panel {
            position: absolute;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            padding: 0 40px;
            text-align: center;
            top: 0;
            height: 100%;
            width: 50%;
            transform: translateX(0);
            transition: transform 0.6s ease-in-out;
        }

        .overlay-left {
            transform: translateX(-20%);
        }

        .container.right-panel-active .overlay-left {
            transform: translateX(0);
        }

        .overlay-right {
            right: 0;
            transform: translateX(0);
        }

        .container.right-panel-active .overlay-right {
            transform: translateX(20%);
        }

        .social-container {
            margin: 20px 0;
        }

        .social-container a {
            border: 1px solid #DDDDDD;
            border-radius: 50%;
            display: inline-flex;
            justify-content: center;
            align-items: center;
            margin: 0 5px;
            height: 40px;
            width: 40px;
        }

        .error-message {
            color: red;
            font-size: 12px;
            margin-top: -5px;
            margin-bottom: 5px;
            width: 100%;
            text-align: left;
            display: none;
        }

        .success-message {
            color: green;
            font-size: 14px;
            margin: 10px 0;
            display: none;
        }

        @media (max-width: 768px) {
            .container {
                width: 100%;
                height: 100%;
                border-radius: 0;
            }
            
            .sign-in-container,
            .sign-up-container {
                width: 100%;
            }
            
            .overlay-container {
                display: none;
            }
            
            .container.right-panel-active .sign-in-container,
            .container.right-panel-active .sign-up-container {
                transform: none;
            }
        }
    </style>
</head>
<body>
    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form id="registerForm">
                <h1>Create Account</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <span>or use your email for registration</span>
                <input type="text" id="regName" placeholder="Name" required />
                <span class="error-message" id="nameError"></span>
                <input type="email" id="regEmail" placeholder="Email" required />
                <span class="error-message" id="emailError"></span>
                <input type="password" id="regPassword" placeholder="Password" required />
                <span class="error-message" id="passwordError"></span>
                <input type="password" id="regConfirmPassword" placeholder="Confirm Password" required />
                <span class="error-message" id="confirmPasswordError"></span>
                <div class="success-message" id="registerSuccess"></div>
                <button type="submit">Sign Up</button>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form id="loginForm">
                <h1>Sign in</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <span>or use your account</span>
                <input type="email" id="loginEmail" placeholder="Email" required />
                <span class="error-message" id="loginEmailError"></span>
                <input type="password" id="loginPassword" placeholder="Password" required />
                <span class="error-message" id="loginPasswordError"></span>
                <div class="success-message" id="loginSuccess"></div>
                <a href="#">Forgot your password?</a>
                <button type="submit">Sign In</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Welcome Back!</h1>
                    <p>To keep connected with us please login with your personal info</p>
                    <button class="ghost" id="signIn">Sign In</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Hello, Friend!</h1>
                    <p>Enter your personal details and start journey with us</p>
                    <button class="ghost" id="signUp">Sign Up</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const signUpButton = document.getElementById('signUp');
            const signInButton = document.getElementById('signIn');
            const container = document.getElementById('container');
            const registerForm = document.getElementById('registerForm');
            const loginForm = document.getElementById('loginForm');

            // Initialize users array in localStorage if it doesn't exist
            if (!localStorage.getItem('users')) {
                localStorage.setItem('users', JSON.stringify([]));
            }

            // Toggle between sign in and sign up forms
            signUpButton.addEventListener('click', () => {
                container.classList.add("right-panel-active");
            });

            signInButton.addEventListener('click', () => {
                container.classList.remove("right-panel-active");
            });

            // Register form validation
            registerForm.addEventListener('submit', function(e) {
                e.preventDefault();
                let isValid = true;

                // Reset messages
                document.querySelectorAll('#registerForm .error-message').forEach(el => {
                    el.style.display = 'none';
                });
                document.getElementById('registerSuccess').style.display = 'none';

                // Name validation
                const name = document.getElementById('regName').value.trim();
                if (name.length < 3) {
                    document.getElementById('nameError').textContent = 'Name must be at least 3 characters';
                    document.getElementById('nameError').style.display = 'block';
                    isValid = false;
                }

                // Email validation
                const email = document.getElementById('regEmail').value.trim();
                if (!validateEmail(email)) {
                    document.getElementById('emailError').textContent = 'Please enter a valid email';
                    document.getElementById('emailError').style.display = 'block';
                    isValid = false;
                }

                // Check if email already exists
                const users = JSON.parse(localStorage.getItem('users'));
                if (users.some(user => user.email === email)) {
                    document.getElementById('emailError').textContent = 'Email already registered';
                    document.getElementById('emailError').style.display = 'block';
                    isValid = false;
                }

                // Password validation
                const password = document.getElementById('regPassword').value;
                if (password.length < 6) {
                    document.getElementById('passwordError').textContent = 'Password must be at least 6 characters';
                    document.getElementById('passwordError').style.display = 'block';
                    isValid = false;
                }

                // Confirm password validation
                const confirmPassword = document.getElementById('regConfirmPassword').value;
                if (password !== confirmPassword) {
                    document.getElementById('confirmPasswordError').textContent = 'Passwords do not match';
                    document.getElementById('confirmPasswordError').style.display = 'block';
                    isValid = false;
                }

                if (isValid) {
                    // Create user object
                    const user = {
                        name: name,
                        email: email,
                        password: password
                    };

                    // Add to users array
                    const updatedUsers = [...users, user];
                    localStorage.setItem('users', JSON.stringify(updatedUsers));

                    // Show success message
                    document.getElementById('registerSuccess').textContent = 'Registration successful! You can now login.';
                    document.getElementById('registerSuccess').style.display = 'block';
                    
                    // Reset form and switch to login
                    setTimeout(() => {
                        registerForm.reset();
                        container.classList.remove("right-panel-active");
                        document.getElementById('registerSuccess').style.display = 'none';
                    }, 2000);
                }
            });

            // Login form validation
            loginForm.addEventListener('submit', function(e) {
                e.preventDefault();
                let isValid = true;

                // Reset messages
                document.querySelectorAll('#loginForm .error-message').forEach(el => {
                    el.style.display = 'none';
                });
                document.getElementById('loginSuccess').style.display = 'none';

                // Email validation
                const email = document.getElementById('loginEmail').value.trim();
                if (!validateEmail(email)) {
                    document.getElementById('loginEmailError').textContent = 'Please enter a valid email';
                    document.getElementById('loginEmailError').style.display = 'block';
                    isValid = false;
                }

                // Password validation
                const password = document.getElementById('loginPassword').value;
                if (password.length === 0) {
                    document.getElementById('loginPasswordError').textContent = 'Password is required';
                    document.getElementById('loginPasswordError').style.display = 'block';
                    isValid = false;
                }

                if (isValid) {
                    // Check credentials
                    const users = JSON.parse(localStorage.getItem('users'));
                    const user = users.find(user => user.email === email && user.password === password);

                    if (user) {
                        // Login successful
                        document.getElementById('loginSuccess').textContent = `Welcome back, ${user.name}!`;
                        document.getElementById('loginSuccess').style.display = 'block';
                        
                        // Store logged in user
                        localStorage.setItem('currentUser', JSON.stringify(user));
                        
                        // Redirect to dashboard or home page after 1 second
                        setTimeout(() => {
                            // window.location.href = 'dashboard.html'; // Uncomment and create this page
                            alert(`Welcome ${user.name}! You are now logged in.`);
                            loginForm.reset();
                        }, 1000);
                    } else {
                        document.getElementById('loginPasswordError').textContent = 'Invalid email or password';
                        document.getElementById('loginPasswordError').style.display = 'block';
                    }
                }
            });

            // Email validation helper function
            function validateEmail(email) {
                const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                return re.test(email);
            }

            // Check if user is already logged in
            if (localStorage.getItem('currentUser')) {
                const user = JSON.parse(localStorage.getItem('currentUser'));
                alert(`Welcome back ${user.name}! You are already logged in.`);
                // window.location.href = 'dashboard.html'; // Redirect to dashboard if already logged in
            }
        });
    </script>
</body>
</html>