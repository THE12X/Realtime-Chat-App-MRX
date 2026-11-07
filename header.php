<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Realtime Chat Application MRX</title>
  <link rel="stylesheet" href="style.css">
  <!-- Font Awesome 4.7.0 CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script>
    // 1. Immediately apply saved theme on load to prevent white screen flash
    (function() {
      const savedTheme = localStorage.getItem("theme") || "light";
      if (savedTheme === "dark") {
        document.documentElement.setAttribute("data-theme", "dark");
      }
    })();

    // 2. Global event listener for theme toggle button across all pages
    document.addEventListener("DOMContentLoaded", () => {
      const toggleBtn = document.getElementById("theme-toggle");
      const currentTheme = localStorage.getItem("theme") || "light";
      
      if (toggleBtn) {
        toggleBtn.textContent = currentTheme === "dark" ? "☀️" : "🌙";
        toggleBtn.addEventListener("click", () => {
          let theme = document.documentElement.getAttribute("data-theme");
          if (theme === "dark") {
            document.documentElement.setAttribute("data-theme", "light");
            localStorage.setItem("theme", "light");
            toggleBtn.textContent = "🌙";
          } else {
            document.documentElement.setAttribute("data-theme", "dark");
            localStorage.setItem("theme", "dark");
            toggleBtn.textContent = "☀️";
          }
        });
      }
    });
  </script>
</head>