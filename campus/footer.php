
<style>
.footer{
    background-image: linear-gradient(rgb(53, 226, 160),#055247);
    color: white;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    padding: 40px;
    align-items: center;
    font-family: Arial, sans-serif;
}
.contact-div{
    display: flex;
    flex-direction: column;
    margin-right: 100px;

}
.contact-div a{
    color: white;
}

.contact-info{
    font-size: 25px;
    margin-bottom: 20px;
}

.icon{
    width: 50px;
    height:50px;
    margin-right: 10px;
}

.social-links{
    display: flex;
    
}

.social-icon{
    margin-right: 20px;
}

.social-icon a{
    display: flex;
    align-items: center;
    text-decoration: none;
    color: white;
}

.social-icon a:hover{
    color: #555;
}
@media only screen and (max-width: 768px) {
            .navtabs {
                flex-direction: column;
                align-items: center;
            }

            nav ul li {
                margin-right: 0;
            }
        }
</style>

<footer class="footer",>
    <div class="contact-div">
    <h3>Reach us at:</h3>


    <p class="contact-info"><img src="phone.png" alt="Phone" class="icon">
    +91 7058090222</p>

    
    <p class="contact-info"><img src="gmail.png" alt="Mail" class="icon">
    imperialuniversity@gmail.com</p>

    <p class="contact-info"><img src="placeholder.png" alt="Address" class="icon">
    22-1-A6 Mumbai Pune Highway , Pune-411017</p>
    </div>

    <div class="social-links">
        <div class="social-icon">
            <a href="https://www.facebook.com"><img src="facebook.png" alt="Facebook" class="icon"></a>
        </div>

        <div class="social-icon">
            <a href="https://www.instagram.com"><img src="instagram.png" alt="Instagram" class="icon"></a>
        </div>

        <div class="social-icon">
            <a href="https://www.twitter.com"><img src="twitter.png" alt="Twitter" class="icon"></a>
        </div>
    </div>
</footer>
