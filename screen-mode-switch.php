
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Light/Dark Mode Switch</title>
    <link rel="stylesheet" href="styles/style.css">
    <style>
        .mode-c,
        .switc
        {
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
        }
        .switc{
            width: 30px;
            height: 30px;
            border-radius: 50%;
        }
        .switc input{
            width: 0;
            height: 0;
        }
    </style>
</head>
<body>

<div class="mode-c">
    <label class="switc">
        <input type="checkbox" id="modeSwitch">
        <span><i id="icon" class="fa-solid"></i></span>
    </label>
</div>

<script>
    const icon = document.getElementById('icon');
    const modeSwitch = document.getElementById('modeSwitch');
    function toggleDarkMode() {
        const inputs = document.querySelectorAll("input");
        const anchors =document.querySelectorAll("a");
        const icons = document.querySelectorAll("i");
        const textAreas =document.querySelectorAll("textarea");
        textAreas.forEach((textArea)=>{
            textArea.classList.toggle("dark-mode");
        })
        icons.forEach(icon =>{
            icon.classList.toggle(".anchor-mode");
        })
        anchors.forEach(anchor =>{
            anchor.classList.toggle(".anchor-mode");
        })
        inputs.forEach(input => {
            input.classList.toggle("dark-mode");
        });
        document.body.classList.toggle("dark-mode");

        localStorage.setItem('web1-screen-mode', modeSwitch.checked ? 'dark-mode' : 'light-mode');
        if (modeSwitch.checked) {
            icon.classList.remove("fa-moon");
            icon.classList.add("fa-sun");
        } else {
            icon.classList.remove("fa-sun");
            icon.classList.add("fa-moon");
        }
    }

    modeSwitch.addEventListener('change', toggleDarkMode);
    if (localStorage.getItem('web1-screen-mode') === 'dark-mode') {
        modeSwitch.checked = true;
        icon.classList.remove("fa-moon");
        icon.classList.add("fa-sun");
        toggleDarkMode();
    } else {
        icon.classList.remove("fa-sun");
        icon.classList.add("fa-moon");
    }
</script>

</body>
</html>
