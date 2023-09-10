<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;600;700&display=swap');

body{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Raleway', sans-serif;
    background-color: #fff;
}
a{
    text-decoration: none;
}
ul{
    list-style: none;
} 
input,button,textarea{
    border: none;
    outline: none;
}
/*****************NAVIGATION*************/

nav{
    display: flex;
    justify-content: space-around;
    align-items: center;
    left: 0;
    top: 0;
    width: 100%;
    z-index: 1;
}
nav ul{
    display: flex;
}
nav ul li a{
    height: 40px;
    line-height: 43px;
    margin: 3px;
    padding: 0 22px;
    display: flex;
    font-size: 0.73rem;
    text-transform: uppercase;
    font-weight: 500;
    letter-spacing: 1px;
    border-radius: 3px;
    transition: 0.6s ease-in-out;
    color: #ffffff;
}
nav ul li a:hover{
    background-color: #fc6f41;
    color: #fff;
    box-shadow: 5px 10px 30px rgba(252, 59, 0, 0.397);
}
.active{
    background-color: #fc6f41;
    color: #fff;
    box-shadow: 5px 10px 30px rgba(252, 59, 0, 0.397);
}
.main{
    width: 100%;
    height: 800px;
    position: relative;
    background-repeat: no-repeat;
    background-size: cover;
    background-image: url(../images/bg.jpg);
}
.main-heading{
    width: 500px;
    position: absolute;
    left: 16%;
    top: 47%;
    transform: translate(-16%,-47%);
}
.main-heading h1{
    font-size: 45px;
    margin: 0px;
    letter-spacing: 3px;
    color: #fff;
}
.main-heading p{
    color: #e2e2e2;
}
.main-btn{
    width: 120px;
    height: 40px;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: #fc6f41;
    border-radius: 10px;
    color: #fff;
    transition: 0.6s ease-in-out;
}
.main-btn:hover{
    box-shadow: 5px 10px 30px rgba(252, 59, 0, 0.397);
}

.features{
    width: 100%;
    height: 95vh;
    box-sizing: border-box;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    margin-top: -100px;
}
.feature-container{
    display: flex;
    justify-content: center;
    align-items: center;
}
.feature-box{
    background-color: #fff;
    width: 400px;
    height: 500px;
    margin: 20px;
    border-radius: 10px;
    overflow: hidden;
    position: relative;
    box-shadow:  5px 10px 30px rgba(0, 0, 0, 0.13);
}
.f-img{
    width: 100%;
    height: 63%;
}
.f-img img{
    width: 100%;
    height: 100%;
}
.f-text{
    width: 100%;
    height: 30%;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
}
.f-text h4{
    margin-top: -12px;

}

.about{
    width: 100%;
    height: 110vh;
    box-sizing: border-box;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 50px 5% 0px 5%;
    position: relative;
}
.about-img{
    width: 50%;
}
.about-img img{
    width: 500px;
}
.about-text{
    width: 45%;
    color:#000;
    text-align: right;
}
.about-text h2{
    font-size: 2.2rem;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 2px;
}
.about-text p{
    font-size: 1.1rem;
    color: #4b4b4b;
}
.about-text button{
    float: right;
}

.contact{
    width: 100%;
    display: flex;
    justify-content: center;
    flex-direction: column;
    align-items: center;
    padding: 40px 0px;
}
.contact-heading{
    text-align: center;
    margin: 40px 0px;
    margin-bottom: 80px;
}
.contact-heading h1{
    font-size: 2.2rem;
}
.contact form{
    width: 600px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
}
.contact form input,.contact form textarea{
    width: 100%;
    height: 40px;
    margin: 5px 0px;
    padding: 10px;
    background-color: #e2e2e2;
    color: #1e1e1e;
    border-radius: 5px;
}
.contact form textarea{
    height: 150px;
}
.contact-btn{
    margin-top: 40px;
}
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic Website</title>
    <link rel="stylesheet" href="css/style.css"/>
</head>
<body>
    <header class="main">
        <nav>
            <a href="#" class="logo">
                <img src="images/logo1.png"/>
            </a>

            <ul class="menu">
                <li><a href="#" class="active">Home</a></li>
                <li><a href="#">Features</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
        <div class="main-heading">
            <h1>Get ahead with Cloud Services</h1>
            <p>At Eldas, we offers Infrastructure as a Service (IaaS), Platform as a Service (PaaS), and Software as a Service (SaaS) to help businesses migrate their digital assets to the cloud.</p>
            <a class="main-btn" href="#">Contact</a>
        </div>
    </header>

    <section class="features">
        <div class="feature-container">

            <div class="feature-box">
                <div class="f-img">
                    <img src="images/iaas.jpeg"/>
                </div>
                <div class="f-text">
                    <h4>Cloud as IaaS</h4>
                    <p>IaaS allows businesses to rent computing resources, such as servers, storage, and networking, on a pay-as-you-go basis.</p>
                    <a href="#" class="main-btn">Check</a>
                </div>
            </div>

            <div class="feature-box">
                <div class="f-img">
                    <img src="images/paas1.jpeg"/>
                </div>
                <div class="f-text">
                    <h4>Cloud as PaaS</h4>
                    <p>PaaS offers a complete development and deployment environment in the cloud, including tools for building, testing, and deploying applications.</p>
                    <a href="#" class="main-btn">Check</a>
                </div>
            </div>

            <div class="feature-box">
                <div class="f-img">
                    <img src="images/saas.jpeg"/>
                </div>
                <div class="f-text">
                    <h4>Cloud as SaaS</h4>
                    <p>SaaS eliminates the need for businesses to install and maintain software on their own computers, as all software is hosted in the cloud.</p>
                    <a href="#" class="main-btn">Check</a>
                </div>
            </div>
        </div>
    </section>

    <section class="about">
        <div class="about-img">
            <img src="images/about.png">
        </div>
        <div class="about-text">
            <h2>Know more about how Cloud can be Useful</h2>
            <p>Cloud computing is a versatile technology that can offer significant benefits to businesses of all sizes. Click below to know more about how you can use Cloud to enhance your business.</p>
            <button class="main-btn">Read More</button>
        </div>
    </section>

    <footer class="contact">
        <div class="contact-heading">
            <h1>Contact Us</h1>
            <p>Wanna us enhance your business with the help of cloud?.</p>
            <p>We've got you write your query below with your contact details and we will get back to you.</p>
        </div>
        <form action="userinformation.php" method="post">
            <input type="text" name="user" placeholder="Your Full Name"/>
            <input type="email" name="email" placeholder="Your E-Mail"/>
            <textarea name="message" placeholder="Type Your Message Here.........."></textarea>
            <button class="main-btn contact-btn" type="submit">Continue</button>
        </form>
    </footer>
</body>
</html>