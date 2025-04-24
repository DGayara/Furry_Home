// Registration
document.getElementById('registerForm').addEventListener('submit', function (e) {
    e.preventDefault();
    const formData = new FormData(this);
    formData.append("action", "register");

    fetch("register.php", {
        method: "POST",
        body: formData
    }).then(res => res.text())
      .then(response => {
          if (response.startsWith("success:")) {
              alert("Registration successful! Please log in.");
              const loginTab = document.querySelector('#login-tab');
              bootstrap.Tab.getOrCreateInstance(loginTab).show();
          } else {
              alert(response.replace("error:", ""));
          }
      });
});

// Login
document.getElementById('loginForm').addEventListener('submit', function (e) {
    e.preventDefault();
    const formData = new FormData(this);
    formData.append("action", "login");

    fetch("register.php", {
        method: "POST",
        body: formData
    }).then(res => res.text())
      .then(response => {
          if (response.startsWith("success:")) {
              window.location.href = "H1.html";
          } else {
              alert(response.replace("error:", ""));
          }
      });
});
