<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BINUS</title>
    <link rel="shortcut icon" href="https://binusasmg.sch.id/ppdb/logobinusa.png" type="image/x-icon">
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    background: #000000;
    color: #fff;
    font-family: "Poppins", sans-serif;
}

a {
    text-decoration: none;
}

header {
    width: 100%;
    height: 100vh;
    position: relative;
    display: flex;
    flex-direction: column;
    background: url('https://foto.data.kemdikbud.go.id/getImage/20328986/7.jpg');
    background-size: cover;
    background-position: center;
}

header:before {
    content: "";
    position: absolute;
    width: 100%;
    height: 90vh;
    bottom: 0;
    background: linear-gradient(to top, rgb(0, 0, 0), rgba(0, 0, 0, 0));
}

nav,
.header-bottom {
    display: flex;
    justify-content: space-between;
    padding: 4rem;
    position: relative;
}

.logo span{
    color: orange;
}

.logo a {
    color: #ffff;
    font-size: 3rem;
}

.btn-sign-up {
    padding: 0.8rem 1rem;
    background: #000000;
    color: #fff;
    font-weight: 600;
    border-radius: 40px;
    transition: .3s;
}

.btn-sign-up:hover {
    background-color: #fff;
    color: #000000;
    text-align: center;
}

.header-title {
    margin: auto auto;
    font-size: 4rem;
    position: relative;
    font-weight: 400;
    letter-spacing: 2px;
}

.today-date {
    font-size: 2rem;
    font-weight: 500;
}

.today-date span {
    font-size: 2.5rem;
}

.social-media {
    display: flex;
    list-style: none;
    width: 100px;
    justify-content: space-between;
    align-items: center;
}

.header-title span{
    color: orange;
}

.social-media li a {
    color: #fff;
}
</style>
<body>
    
    <!-- Header -->
    <header>

            <nav>
            
            <a href="./auth" class="btn-sign-up">Login</a> 
            <br>   
            <li><a class="btn-sign-up" href="https://www.instagram.com/smkbinanusantara_smg/">Instagram</a></li>
             </nav>

            </ul>
        </div>
    </header>

</body>
</html>