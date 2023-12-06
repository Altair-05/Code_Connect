<?php

include 'components/connect.php';

if(isset($_COOKIE['user_id'])){
   $user_id = $_COOKIE['user_id'];
}else{
   $user_id = '';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php include 'components/user_header.php'; ?>

<!-- about section starts  -->

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/about-img.svg" alt="">
      </div>

      <div class="content">
          <h3>Why choose us?</h3>
          <p>
            We, The Programming Club of IIITDMJ, are excited to extend our
            invitation to join our community of coders and tech enthusiasts. .
            Here are some of the perks of being a member of TPC: <br />
            1) Personalized mentorship from experienced coders to help guide you
            through the challenges of coding Opportunities to participate in
            Inter College competitions to test your skills and showcase your
            talent and Institute sponsors your expenditure. <br />
            2)Participation in coding competitions such as Newbie, Good To Go,
            CodeGolf, and Dev competitions like Aperta fons for Open Source and
            Hackathons Hands-on workshops to help you accelerate your skills
            <br />
          </p>
          <a href="courses.html" class="inline-btn">Our Courses</a>
        </div>
   </div>

   <div class="box-container">
        <div class="box">
          <i class="fas fa-graduation-cap"></i>
          <div>
            <h3>+2K</h3>
            <p>TPC Members</p>
          </div>
        </div>

        <div class="box">
          <i class="fas fa-user-graduate"></i>
          <div>
            <h3>+300</h3>
            <p>Brilliant Mentors</p>
          </div>
        </div>

        <div class="box">
          <i class="fas fa-chalkboard-user"></i>
          <div>
            <h3>+100</h3>
            <p>Expert Core Members</p>
          </div>
        </div>

        <div class="box">
          <i class="fas fa-briefcase"></i>
          <div>
            <h3>100%</h3>
            <p>Guidance</p>
          </div>
        </div>
      </div>

</section>

<!-- about section ends -->

<!-- reviews section starts  -->

<section class="reviews">
      <h1 class="heading">Member's Achievements</h1>

      <div class="box-container">
        <div class="box">
          <p>
            LFX'23 @OpenMainFrameProject |
            <br />
            Xiaomi Ode2Code 3.0 Winner |
            <br />
            Ex-Intern @varivas |
            <br />Student Leader @Postman | <br />GDSC Lead @IIITDMJ | Member
            @Oppia | <br />Open Source | <br />Full Stack Developer
          </p>
          <div class="student">
            <img src="images/pic-2.jpg" alt="" />
            <div>
              <h3>Priyansh Mehta</h3>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
              </div>
            </div>
          </div>
        </div>

        <div class="box">
          <p>
            Specialist @Codeforces (1466)|
            <br />Codechef 4⭐(1826)| <br />Knight @Leetcode| <br />Competitive
            Programmer <br />Full Stack Developer <br />Android Developer
            <br />open Source
          </p>
          <div class="student">
            <img src="images/pic-3.jpg" alt="" />
            <div>
              <h3>Prajjwal Rayal</h3>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
              </div>
            </div>
          </div>
        </div>

        <div class="box">
          <p>
            LSDE Intern'23 @Flipkart <br />
            Flipkart Runway'23 <br />
            Specialist @Codeforces (1466)|
            <br />Codechef 4⭐(1826)| <br />
            CSE Undergrad at IIIT Jabalpur'25 <br />Data Science enthusiasts
            <br />
            Software Developer
          </p>
          <div class="student">
            <img src="images/pic-4.jpg" alt="" />
            <div>
              <h3>Shreya</h3>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
              </div>
            </div>
          </div>
        </div>

        <div class="box">
          <p>
            CSE at IIIT Jabalpur |
            <br />
            Specialist at Codeforces | <br />Knight at Leetcode | <br />
            4 ⭐ at Codechef (1884)
            <br />Full Stack Developer <br />Final year Student
          </p>
          <div class="student">
            <img src="images/pic-5.jpg" alt="" />
            <div>
              <h3>Aishwarya Saxena</h3>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
              </div>
            </div>
          </div>
        </div>

        <div class="box">
          <p>
            Software Developer |
            <br />Summer of Bitcoin Intern 2023 @bcoin | <br />Former Web
            Development Intern @CuriousJr Edtech | <br />Former Core Member
            @GDSC IIITDMJ |<br />

            Final Year Student @IIITDMJ
          </p>
          <div class="student">
            <img src="images/pic-6.jpg" alt="" />
            <div>
              <h3>Manav Desai</h3>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
              </div>
            </div>
          </div>
        </div>

        <div class="box">
          <p>
            ICPC Regionalist'21 |
            <br />
            Expert @ Codeforces | <br />
            Backend Developer | <br />iOS Developer <br />Data Science
            Enthusiast <br />Codechef 4⭐(1826)
          </p>
          <div class="student">
            <img src="images/pic-7.jpg" alt="" />
            <div>
              <h3>Armin Patel</h3>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

<!-- reviews section ends -->










<?php include 'components/footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>
   
</body>
</html>