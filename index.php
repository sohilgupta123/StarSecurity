<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <?php include_once 'php/head.php'; ?>
    <body>
        <?php include_once 'php/navbar.php'; ?>
        <div class="slider">
            <ul class="slides">
                <li>
                    <img src="images/bg1.jpg"> <!-- random image -->
                    <div class="caption center-align">
                        <h3 class="headding">For All of Your Security Needs!</h3>
                        <h5 class="subHeadding light">Professional discretion security for a changing world.</h5>
                    </div>
                </li>
                <li>
                    <img src="images/bg2.jpg"> <!-- random image -->
                    <div class="caption left-align">
                        <h3 class="headding">Enabling businesses by Managed Technologies.</h3>
                        <h5 class="subHeadding light">Always Alert in Your Service.</h5>
                    </div>
                </li>                
            </ul>
        </div>
        <div class="row">
            <div class="col s12 l3">
                <div class="feature-icon">
                    <i class="strength-icon material-icons">fitness_center</i>
                </div>
                <div class="feature-title">SECURITY TRAINING</div>
                <div class="feature-description">Our every employee is trained by the very best, No challenge big enough. With any hesitation, our employees can outperform any obstetrical when the situation demands it.</div>

            </div>
            <div class="col s12 l3">
                <div class="feature-icon">
                    <i class="strength-icon material-icons">security</i>
                </div>
                <div class="feature-title">MANUAL GUARDING</div>


                <div class="feature-description">Our Security Squad consists of the very best.  All the assignments are accepted only after careful examination of the case and all our efforts are made to produce the results to the satisfaction of the clients.</div>
            </div>
            <div class="col s12 l3">
                <div class="feature-icon">
                    <i class="strength-icon material-icons">supervisor_account</i>
                </div>
                <div class="feature-title">SUPERVISOR</div>
                <div class="feature-description">A security supervisor monitors his staff by patrolling with them by auto or on foot. The supervisor is also responsible for monitoring the electronic surveillance equipment used on the premises.</div>                        
            </div>
            <div class="col s12 l3">
                <div class="feature-icon">
                    <i class="strength-icon material-icons">filter_vintage</i>
                </div>
                <div class="feature-title">HORTICULTURE SERVICES</div>
                <div class="feature-description">Our essential duties of horticulture services include plants and Garden Maintainance. Additional services involve Pest Control, Comprehensive Ground maintenance, and irrigation facilities.
                </div>
            </div>                
        </div >
        <div class="col s12 m8 offset-m2 l6 offset-l3">
            <div class="card-panel grey lighten-5 z-depth-1">
                <div class="row valign-wrapper">
                    <div class="col s2">
                        <img src="a/star-security.jpg" alt="" class="responsive-img"> <!-- notice the "circle" class -->
                    </div>
                    <div class="col s6">
                        <!-- <span class="black-text">
                            This is a square image. Add the "circle" class to it to make it appear circular.
                        </span> -->
                        <h3 class="headding">HELLO THERE!</h3>
                        <h5 class="subHeadding light">Trouble In Paradise? We can Help.</h5>
                        <p>We introduce ourselves as the best Security and Placement Service provider at Udaipur,Pratapgarh,Dungarpur,Rajsamand and Banswara with a team of highly experienced and trained and dedicated Operatives. We take care of all types of Security,Placement, Horticultures and Event Managent issues in all sectors.</p>
                    </div>
                </div>
            </div>
        </div>
        <?php include_once 'php/footer.php'; ?>
        <?php include_once 'php/scripts.php'; ?>
        <script>
            $(document).ready(function () {
                $('.slider').slider();
            });
        </script>
    </body>
</html>
