
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Light/Dark Mode Switch</title>
    <link rel="stylesheet" href="styles/style.css">
    <style>
        .mode-c{
            display: flex;
            align-items: center;
        }
    </style>
</head>
<body>

    <div class="mode-c">
        <label class="switch">
            <input type="checkbox" id="modeSwitch">
            <span class="slider round"></span>
        </label>
    </div>

    <script>
        const modeSwitch = document.getElementById('modeSwitch');
        function toggleDarkMode() {
            document.body.classList.toggle("dark-mode");
            localStorage.setItem('web1-screen-mode', modeSwitch.checked ? 'dark-mode' : 'light-mode');
        }
        modeSwitch.addEventListener('change', toggleDarkMode);
        if (localStorage.getItem('web1-screen-mode') === 'dark-mode') {
            modeSwitch.checked = true;
            toggleDarkMode();
        }
    </script>
</body>
</html>
