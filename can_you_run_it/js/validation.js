const validation = new JustValidate("#signup");

validation
    .addField("#Nickname", [
        {
            rule: "required"
        }
    ])
    .addField("#Email", [
        {
            rule: "required"
        },
        {
            rule: "email"
        },
        {
            validator: (value) => () => {
                return fetch("Assets/parts/Validate-Email.php?email=" + encodeURIComponent(value))
                       .then(function(response) {
                           return response.json();
                       })
                       .then(function(json) {
                           return json.available;
                       });
            },
            errorMessage: "Email is already taken"
        }
    ])
    .addField("#Password", [
        {
            rule: "required"
        },
        {
            rule: "password"
        }
    ])
    .addField("#Password_confirmation", [
        {
            validator: (value, fields) => {
                return value === fields["#Password"].elem.value;
            },
            errorMessage: "Passwords should match"
        }
    ])
    .onSuccess((event) => {
        document.getElementById("signup").submit();
    });
    
    