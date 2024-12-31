function toggleForm() {
    const loginForm = document.getElementById("login-form");
    const registerForm = document.getElementById("register-form");
    const toggleLink = document.getElementById("toggle-link");

    if (loginForm.classList.contains("hidden")) {
    loginForm.classList.remove("hidden");
    registerForm.classList.add("hidden");
    toggleLink.textContent = "Don't have an account? Sign Up";
    } else {
    loginForm.classList.add("hidden");
    registerForm.classList.remove("hidden");
    toggleLink.textContent = "Already have an account? Sign In";
    }
}