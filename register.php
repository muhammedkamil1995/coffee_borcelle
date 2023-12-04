<?php include 'includes/session.php'; ?>

<link rel="stylesheet" href="core/sign.css">

<body>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



    <div class="container">
        <div class="tabs">
            <ul>
                <a id="logo" href="index.php"><img src="imag/Borcelle1.png" alt="Logo"></a>
                <li id="registerTab"><a href="./">Home</a></li>
                <li id="loginTab">
                    <a href="login.php">Login</a>
                    <div class="social-icons">
                        <a href="#" class="social-icon"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-github"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-codepen"></i></a>
                    </div>
                </li>
            </ul>
        </div>
        <div class="forms">
            <div class="register">

                <div class='callout callout-success text-center d-none' id="success-div">
                    <p style='color: green;' id="success"></p>
                </div>

                <p>Sign up free within seconds.</p>
                <form method=" POST" name="registerForm" id="registerForm">
                    <!-- Your registration form fields -->
                    <div class="form__row">
                        <span id="firstNameError"></span>
                        <input class="field" name="firstname" required type="text" placeholder="First Name" />
                    </div>


                    <div class=" form__row">
                        <span id="lastNameError"></span>
                        <input class="field" name="lastname" required type="text" placeholder="Last Name" />
                    </div>

                    <div class="form__row">
                        <span id="userNameError"></span>
                        <input class="field" name="username" required type="text" placeholder="Username" />
                    </div>

                    <div class="form__row">
                        <span id="emailError"></span>
                        <input class="field" name="email" required type="email" placeholder="Email" />
                    </div>

                    <div class="form__row">
                        <span id="passwordError"></span>
                        <input id="p1" class="field" name="password" required type="password" placeholder="Password" />
                    </div>

                    <div class="form__row">
                        <span id="password2Error"></span>
                        <input id="p2" class="field" name="confirm_password" required type="password"
                            placeholder="Rewrite Password" />
                    </div>
                    <input type="hidden" name="honeypot" value="">
                    <div class="form__row">
                        <input type="submit" id="submitBtn" name="signup" value="Sign Up" />
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const firstName = document.getElementsByName('firstname')[0]
    const lastName = document.getElementsByName('lastname')[0]
    const userName = document.getElementsByName('username')[0]
    const email = document.getElementsByName('email')[0]
    const honeypot = document.getElementsByName('honeypot')[0]
    const password = document.getElementsByName('password')[0]
    const confirmPassword = document.getElementsByName('confirm_password')[0]
    const submitBtn = document.getElementById('submitBtn')

    const firstNameError = document.getElementById('firstNameError')
    const lastNameError = document.getElementById('lastNameError')
    const userNameError = document.getElementById('userNameError')
    const emailError = document.getElementById('emailError')
    const passwordError = document.getElementById('passwordError')
    const password2Error = document.getElementById('password2Error')

    const successDiv = document.getElementById('success-div')
    const success = document.getElementById('success')
    const form = document.getElementById('registerForm')

    const regex = /^[a-zA-Z]+$/
    const usernameregex = /^[a-zA-Z0-9_@-]{3,20}$/
    const emailregex = /^([a-zA-Z0-9_\.\-])+@[a-zA-Z0-9\-]+\.[a-zA-Z]{2,}$/
    const passwordregex = /^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{6,24}$/

    submitBtn.addEventListener('click', (e) => {
        e.preventDefault()
        if (firstName.value.length < 3 || firstName.value.length > 20) {
            firstNameError.textContent = "first name must be within 3 to 20 characters"
            firstNameError.style.color = 'red'
            return
        } else if (!firstName.value.match(regex)) {
            firstNameError.textContent = "first name must be letters only"
            firstNameError.style.color = 'red'
            return
        } else {
            firstNameError.textContent = ""
        }

        if (lastName.value.length < 3 || lastName.value.length > 20) {
            lastNameError.textContent = "last name must be within 3 to 20 characters"
            lastNameError.style.color = 'red'
            return
        } else if (!lastName.value.match(regex)) {
            lastNameError.textContent = "last name must be letters only"
            lastNameError.style.color = 'red'
            return
        } else {
            lastNameError.textContent = ""
        }

        if (userName.value.length < 3 || userName.value.length > 20) {
            userNameError.textContent = "username must be within 3 to 20 characters"
            userNameError.style.color = 'red'
            return
        } else if (!userName.value.match(usernameregex)) {
            userNameError.textContent =
                "username must include letters, numbers and character like _@ only"
            userNameError.style.color = 'red'
            return
        } else {
            userNameError.textContent = ""
        }

        if (email.value.length < 5 || email.value.length > 150) {
            emailError.textContent = "email must be within 5 to 150 characters"
            emailError.style.color = 'red'
            return
        } else if (!email.value.match(emailregex)) {
            emailError.textContent = "email is not valid"
            emailError.style.color = 'red'
            return
        } else {
            emailError.textContent = ""
        }

        if (password.value.length < 6 || password.value.length > 30) {
            passwordError.textContent = "password must be within 6 to 30 characters"
            passwordError.style.color = 'red'
            return
        } else if (!password.value.match(passwordregex)) {
            passwordError.textContent =
                "Passwords must contain at least one uppercase, lowercase, number, and characters "
            passwordError.style.color = 'red'
            return
        } else {
            passwordError.textContent = ""
        }

        if (confirmPassword.value.length < 6 || confirmPassword.value.length > 30) {
            password2Error.textContent = "confirm Password must be within 6 to 30 characters"
            password2Error.style.color = 'red'
            return
        } else {
            password2Error.textContent = ""
        }

        if (confirmPassword.value !== password.value) {
            password2Error.textContent = "confirm Password must be same with password"
            password2Error.style.color = 'red'
            return
        } else {
            password2Error.textContent = ""
        }

        if (firstName.value !== "" && lastName.value !== "" && userName.value !== "" && email.value !==
            "" && password.value !== "" && honeypot.value === "") {
            submitBtn.disabled = true
            submitBtn.style.opacity = '0.5'
            form.setAttribute('disabled', 'disabled')
            fetch('signup.php', {
                    method: 'POST',
                    body: JSON.stringify({
                        firstname: firstName.value,
                        lastname: lastName.value,
                        username: userName.value,
                        email: email.value,
                        password: password.value,
                        action: 'signup'
                    }),
                    headers: {
                        'Content-Type': 'application/json'
                    }
                })
                .then(res => res.json())
                .then(data => {
                    submitBtn.disabled = false
                    submitBtn.style.opacity = '1'
                    console.log(data)
                    if (data.success) {
                        successDiv.removeAttribute('d-none')
                        success.textContent = data.message
                        form.reset()
                        form.removeAttribute('disabled')
                        setTimeout(() => {
                            successDiv.classList.add('d-none');
                            success.textContent = ''
                        }, 5000)
                    } else {
                        if (data.errors.first_name) {
                            firstNameError.textContent = data.errors.first_name
                            firstNameError.style.color = 'red'
                        }

                        if (data.errors.last_name) {
                            lastNameError.textContent = data.errors.last_name
                            lastNameError.style.color = 'red'
                        }

                        if (data.errors.email) {
                            emailError.textContent = data.errors.email
                            emailError.style.color = 'red'
                        }

                        if (data.errors.username) {
                            userNameError.textContent = data.errors.username
                            userNameError.style.color = 'red'
                        }

                        if (data.errors.password) {
                            passwordError.textContent = data.errors.password
                            passwordError.style.color = 'red'
                        }
                    }
                })
        }
    })
})
</script>

</html>