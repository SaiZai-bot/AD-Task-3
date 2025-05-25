<?php
function footer() {
    ?>

    <footer class = "site-footer">
        <div class = "footer-container">
            <div class = "footer-about">
                <h4>About Us</h4>
                <p>Welcome to our hotel room schedule site. We provide the best rooms at best price</p>
            </div>
            
            <div class = "footer-link">
                <nav>
                    <a>About</a> |
                    <a>Contact</a> |
                    <a>Privacy Policy</a>
                </nav>
            </div>

            <div class = "footer-contact">
                <h4>Contact</h4>
                <p>Email: 202310159@fit.edu.ph</p>
                <p>Phone: +63297359166</p>
            </div>
        </div>
        <div class = "footer-container">
            <p>&copy; <?php echo date ("Y"); ?> Hotel Website. All right reserved.</p>
        </div>
    </footer>

    </body>
    </html>
    
    <?php
}

?>