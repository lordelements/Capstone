                  
            // JavaScript for password length validation 
          
                 // Function to validate email format
                // function validateEmailFormat(register-email) {
                //     var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                //     if (!re.test(register-email)) {
                //     alert("Invalid email format");
                //     return false;
                //     }
                //     return true;
                // }
                // Function to check password length
                function validatePasswordLength(password) {
                    if (password.length < 8) {
                    alert("Password must be at least 8 characters long");
                    return false;
                    }
                    return true;
                }
                // Validate password length on signup form submission
                // document.getElementById("signup").addEventListener("submit", function(event) {
                //     event.preventDefault();
                //     var password = document.getElementById("password").value;
                //     if (validatePasswordLength(password)) {
                //     this.submit();
                //     }
                // });
                // Validate password length on login form submission
                // document.getElementById("login").addEventListener("submit", function(event) {
                //     event.preventDefault();
                //     var password = document.getElementById("password").value;
                //     if (validatePasswordLength(password)) {
                //     this.submit();
                //     }
                // });