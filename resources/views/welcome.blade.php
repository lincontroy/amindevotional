@extends('layouts.main')
@section('content')

<style>

/* Styling for the Subscribe Section */
.subscribe-section {
  text-align: center;
  padding: 40px;
  background-color: #f1f1f1;
  border-radius: 8px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  margin: 20px auto;
  max-width: 800px;
}

.subscribe-section h2 {
  font-size: 32px;
  font-weight: bold;
  color: #333;
  margin-bottom: 10px;
}

.subscribe-section p {
  font-size: 20px;
  color: #555;
  margin-bottom: 20px;
}

.subscribe-button {
  font-size: 18px;
  padding: 10px 20px;
  background-color: #2d6a4f;
  color: white;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  transition: background-color 0.3s;
}

.subscribe-button:hover {
  background-color: #1e4f38;
}

/* Styling for the Popups */
.popup {
  display: none;
  position: fixed;
  z-index: 1;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: rgba(0, 0, 0, 0.5);
  padding-top: 60px;
}

.popup-content {
  background-color: #fff;
  margin: auto;
  padding: 20px;
  border-radius: 8px;
  width: 60%;
  max-width: 500px;
}

.close-btn {
  color: #aaa;
  font-size: 28px;
  font-weight: bold;
  position: absolute;
  top: 10px;
  right: 25px;
}

.close-btn:hover,
.close-btn:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
}

.popup h3 {
  font-size: 24px;
  font-weight: bold;
  color: #333;
}

.popup form input {
  width: 100%;
  padding: 10px;
  margin: 10px 0;
  border: 1px solid #ccc;
  border-radius: 5px;
}

.popup form button {
  background-color: #2d6a4f;
  color: white;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

.popup form button:hover {
  background-color: #1e4f38;
}


.word-of-the-year-section {
  text-align: center;
  padding: 40px;
  background-color: #f9f9f9;
  border-radius: 8px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  margin: 20px auto;
  max-width: 800px;
}

.word-of-the-year-section h2 {
  font-size: 32px;
  font-weight: bold;
  color: #333;
  margin-bottom: 20px;
}

.year-of-growth {
  font-size: 24px;
  font-weight: bold;
  color: #2d6a4f; /* Green color for growth */
  margin-bottom: 20px;
}

.bible-verse {
  font-size: 20px;
  font-style: italic;
  color: #555;
  background-color: #e0f7fa; /* Light blue background for the verse */
  padding: 15px;
  border-left: 5px solid #2d6a4f; /* Green left border to highlight the verse */
  margin: 0 auto;
  width: 80%;
}

.bible-reference {
  font-size: 18px;
  color: #2d6a4f; /* Green color for the reference */
  font-weight: bold;
  display: block;
  margin-top: 10px;
}



.connect-with-us-section {
  text-align: center;
  padding: 40px;
  background-color: #f4f4f4;
  border-radius: 8px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  margin: 20px auto;
  max-width: 800px;
}

.connect-with-us-section h2 {
  font-size: 32px;
  font-weight: bold;
  color: #333;
  margin-bottom: 10px;
}

.connect-with-us-section p {
  font-size: 16px;
  color: #555;
  margin-bottom: 20px;
}

.social-media-links {
  display: flex;
  justify-content: center;
  gap: 15px;
  flex-wrap: wrap;
}

.social-icon {
  font-size: 18px;
  padding: 10px 20px;
  background-color: #007BFF;
  color: white;
  text-decoration: none;
  border-radius: 5px;
  transition: background-color 0.3s;
  display: inline-block;
}

.social-icon:hover {
  background-color: #0056b3;
}

/* Specific styles for each social media icon (optional) */
.social-icon.facebook {
  background-color: #3b5998;
}

.social-icon.x {
  background-color: #1da1f2;
}

.social-icon.instagram {
  background-color: #e4405f;
}

.social-icon.telegram {
  background-color: #0088cc;
}

.social-icon.whatsapp {
  background-color: #25d366;
}

.social-icon.youtube {
  background-color: #ff0000;
}


.our-books-section {
  text-align: center;
  padding: 40px;
  background-color: #f4f4f4;
  border-radius: 8px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  margin: 20px auto;
  max-width: 800px;
}

.our-books-section h2 {
  font-size: 32px;
  font-weight: bold;
  color: #333;
  margin-bottom: 10px;
}

.our-books-section p {
  font-size: 16px;
  color: #555;
  margin-bottom: 20px;
}

.take-me-there-button {
  font-size: 18px;
  padding: 10px 20px;
  background-color: #007BFF;
  color: white;
  text-decoration: none;
  border-radius: 5px;
  transition: background-color 0.3s;
}

.take-me-there-button:hover {
  background-color: #0056b3;
}


/* Carousel container styling */
.carousel-container {
  position: relative;
  max-width: 600px;
  margin: auto;
  overflow: hidden;
  border-radius: 8px;
  box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
}

/* Title styling */
.carousel-title {
  font-size: 28px;
  font-weight: bold;
  margin-bottom: 8px;
  position: absolute; /* position it on top of the image */
  top: 10%; /* You can adjust this to position it where you like */
  left: 50%;
  transform: translateX(-50%);
  color: #fff; /* white text color */
  z-index: 2; /* Ensure title is above the image */
}

/* Individual slide styling */
.carousel-slide {
  display: none;
  position: relative;
}

/* Image styling */
.carousel-slide img {
  width: 100%;
  height: auto;
}

/* Text overlay styling */
.carousel-text {
  position: absolute;
  bottom: 20%;
  left: 50%;
  transform: translateX(-50%);
  color: #fff;
  font-size: 14px;
  text-align: center;
  background-color: rgba(0, 0, 0, 0.5);
  padding: 10px 20px;
  border-radius: 5px;
  width: 80%;
  z-index: 1; /* Ensure text is below the title */
}

/* Navigation buttons */
.carousel-button {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.3s;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

.carousel-button.prev {
  left: 0;
  background-color: rgba(0, 0, 0, 0.5);
}

.carousel-button.next {
  right: 0;
  background-color: rgba(0, 0, 0, 0.5);
}

/* Slide indicators */
.carousel-indicators {
  text-align: center;
  position: absolute;
  bottom: 10px;
  width: 100%;
}

.carousel-indicators span {
  cursor: pointer;
  height: 10px;
  width: 10px;
  margin: 0 4px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.3s ease;
}

.carousel-indicators span.active {
  background-color: #717171;
}
</style>
<section id="top" class="pa-hero pa-centered-section pa-full-height pa-image-back pushable-content"
    style="background-image: url(assets/images/hero-background.jpg);">

    <div class="pa-absolute-fill pa-gradient-back-v1"></div>

    <div class="container pa-hero-content text-center">
        <div class="row pa-hero-logo">
            <div class="col-12">
                <!-- <img alt="" src="assets/images/hero-logo.png"> -->
                <div id="particles-js"></div>
            </div>
        </div>
        <div class="row pa-hero-typed-text">
            <div class="col-12">
                <div class="typed-text">
                    <span class="animated-text-effect">
                        <!-- <span class="typed-cursor">|</span> -->
                    </span>
                </div>
            </div>
        </div>
    </div>

</section>
<!-- /.pa-hero -->


<!-- CTA Section
	================================================== -->
<!-- <section class="pa-cta-v1" data-parallax="scroll" data-speed="0.2" data-image-src="assets/images/8.jpg">

    <div class="container">
        <h1 class="pa-h1-v1 pa-bright fadeInLeftDelay03Duration10"><strong>A Minute Jesus Devotional</strong></h1>
        <h4 class="pa-h4-v1 pa-bright fadeInLeftDelay03Duration10">A Minute Jesus Devotional is a Family of Believers
            with a Passion to Know God and walk in His Ways and in the manifestation of His Power!</h4>
        <div class="mt-4"></div>

    </div>

</section> -->
<!-- /.pa-cta-v1 -->


<!-- Portfolio Section
	================================================== -->
<!-- <section id="portfolio" class="pa-portfolio">
    <div class="container-fluid">
        <div class="row pa-row-max2560">
            <div class="col-12 col-sm-6 col-lg-3 p-0">
                <div class="pa-portfolio-thumb m-0 text-center fadeInDelay00Duration10"
                    style="background-image: url(assets/images/1.jpeg);">
                    <div class="pa-portfolio-thumb-background-overlay"></div>
                    <div class="pa-portfolio-thumb-deco-1"></div>
                    <div class="pa-portfolio-thumb-deco-2"></div>
                    <div class="pa-portfolio-thumb-centered-content w-100">
                        <a href="" class="pa-portfolio-thumb-icon-link">
                            <span class="pa-portfolio-thumb-hover-icon"><i class="fa fa-eye"></i></span>
                        </a>
                        <a href="">
                            <h4 class="pa-portfolio-thumb-heading">Amazing Hover Effect</h4>
                        </a>
                        <p class="pa-portfolio-thumb-desc">Pure CSS Instant Hover</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-3 p-0">
                <div class="pa-portfolio-thumb m-0 text-center fadeInDelay00Duration10"
                    style="background-image: url(assets/images/2.jpeg);">
                    <div class="pa-portfolio-thumb-background-overlay"></div>
                    <div class="pa-portfolio-thumb-deco-1"></div>
                    <div class="pa-portfolio-thumb-deco-2"></div>
                    <div class="pa-portfolio-thumb-centered-content w-100">
                        <a href="" class="pa-portfolio-thumb-icon-link">
                            <span class="pa-portfolio-thumb-hover-icon"><i class="fa fa-eye"></i></span>
                        </a>
                        <a href="">
                            <h4 class="pa-portfolio-thumb-heading">Superb Image Styles</h4>
                        </a>
                        <p class="pa-portfolio-thumb-desc">Pure CSS Instant Hover</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-3 p-0">
                <div class="pa-portfolio-thumb m-0 text-center fadeInDelay00Duration10"
                    style="background-image: url(assets/images/3.jpeg);">
                    <div class="pa-portfolio-thumb-background-overlay"></div>
                    <div class="pa-portfolio-thumb-deco-1"></div>
                    <div class="pa-portfolio-thumb-deco-2"></div>
                    <div class="pa-portfolio-thumb-centered-content w-100">
                        <a href="" class="pa-portfolio-thumb-icon-link">
                            <span class="pa-portfolio-thumb-hover-icon"><i class="fa fa-eye"></i></span>
                        </a>
                        <a href="">
                            <h4 class="pa-portfolio-thumb-heading">Particle Design Theme</h4>
                        </a>
                        <p class="pa-portfolio-thumb-desc">Pure CSS Instant Hover</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-3 p-0">
                <div class="pa-portfolio-thumb m-0 text-center fadeInDelay00Duration10"
                    style="background-image: url(assets/images/4.jpeg);">
                    <div class="pa-portfolio-thumb-background-overlay"></div>
                    <div class="pa-portfolio-thumb-deco-1"></div>
                    <div class="pa-portfolio-thumb-deco-2"></div>
                    <div class="pa-portfolio-thumb-centered-content w-100">
                        <a href="" class="pa-portfolio-thumb-icon-link">
                            <span class="pa-portfolio-thumb-hover-icon"><i class="fa fa-eye"></i></span>
                        </a>
                        <a href="">
                            <h4 class="pa-portfolio-thumb-heading">Thumb Hover Superb</h4>
                        </a>
                        <p class="pa-portfolio-thumb-desc">Pure CSS Instant Hover</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- /.pa-portfolio -->


<!-- About Us Section
	================================================== -->
<section id="about-us" class="pa-about-us pa-standard-section pa-bright text-center">

    <div class="container">
        <div class="row">
            <div class="col-12 col-xl-10 offset-xl-1">

                <h1 class="pa-h1-v2 pa-dark fadeInDelay00Duration10"><strong>Our Vision is to Know God and Make Him Known - John 17:3</strong> 
                </h1>
              
                <a href="/about" class="btn btn-primary mt-3">Read More</a>
            </div>
        </div>

        <!-- Bottom Images -->

    </div>

</section>


<section id="about-us" class="pa-about-us pa-standard-section pa-bright text-center">

    <div class="container">
        <div class="row">
            <div class="col-12 col-xl-10 offset-xl-1">

                <h1 class="pa-h1-v2 pa-dark fadeInDelay00Duration10"><strong>Our Mission is To Save, Disciple, Mentor and Empower Nations - Matthew 28:19-20</strong> 
                </h1>
              
                <a href="/about" class="btn btn-primary mt-3">Read More</a>
            </div>
        </div>

        <!-- Bottom Images -->

    </div>

</section>

<section id="about-us" class="pa-about-us pa-standard-section pa-bright text-center">
<div class="word-of-the-year-section">
  <h2>Our Word Of The Year</h2>
  <p class="year-of-growth">2024 is Our Year of Growth</p>
  <blockquote class="bible-verse">
    "And Jesus Grew in wisdom and in stature, finding favor with God and Man." <br> 
    <span class="bible-reference">Luke 2:52</span>
  </blockquote>
</div>

</section>


<section id="about-us" class="pa-about-us pa-standard-section pa-bright text-center">

    <div class="container">
        <div class="row">
            <div class="col-12 col-xl-10 offset-xl-1">

                <h1 class="pa-h1-v2 pa-dark fadeInDelay00Duration10"><strong>Verse of The Day </strong> 
                </h1>

                <p>
                The "Verse of the Day" provides a daily Bible verse for inspiration and reflection, encouraging a moment of connection with scripture. It offers a simple, focused way to gain wisdom and guidance, helping individuals start or end their day with spiritual encouragement. Many find these daily verses to be uplifting and relevant, bringing a sense of peace and purpose to their lives.</p>
              
                <a href="/verseoftheday" class="btn btn-primary mt-3">Read More</a>
            </div>

            <div class="col-12 col-xl-10 offset-xl-1">

                <h1 class="pa-h1-v2 pa-dark fadeInDelay00Duration10"><strong>Promise of The Day</strong> 
                </h1>

                <p>
                The "Promise of the Day" highlights a daily scripture verse that reflects God’s promises, offering hope and reassurance. Each promise serves as a reminder of His faithfulness, love, and guidance. By focusing on a specific promise each day, individuals find encouragement to trust in God's word and strength to face life’s challenges with confidence. This simple daily reflection inspires peace, faith, and renewed hope, helping people carry God's promises into their everyday lives.</p>
              
                <a href="/promiseoftheday" class="btn btn-primary mt-3">Read More</a>
            </div>

            <div class="col-12 col-xl-10 offset-xl-1">

                <h1 class="pa-h1-v2 pa-dark fadeInDelay00Duration10"><strong>Psalm of The Day</strong> 
                </h1>

                <p>
                The "Psalm of the Day" provides a daily verse or passage from the Book of Psalms, offering words of comfort, praise, or reflection. Known for its poetic expressions of faith, gratitude, and trust in God, each psalm speaks to the heart and soul. Reflecting on a psalm daily can bring peace, strength, and a deeper sense of God’s presence, inspiring gratitude and resilience in life’s journey. It’s a moment to pause, connect with timeless words, and find spiritual renewal for the day ahead.</p>
              
                <a href="/promiseoftheday" class="btn btn-primary mt-3">Read More</a>
            </div>

            <div class="col-12 col-xl-10 offset-xl-1">

                <h1 class="pa-h1-v2 pa-dark fadeInDelay00Duration10"><strong>Proverb Of the Day </strong> 
                </h1>

                <p>
                The "Proverb of the Day" presents a daily verse from the Book of Proverbs, offering wisdom and guidance for practical living. Each proverb provides insight on topics like integrity, kindness, humility, and discipline. By reflecting on a single verse each day, individuals can gain clarity and direction, applying timeless principles to modern challenges. This daily practice encourages a thoughtful approach to life, fostering personal growth and a deeper understanding of wise, meaningful living.</p>
              
                <a href="/proverboftheday" class="btn btn-primary mt-3">Read More</a>
            </div>


        </div>

        <!-- Bottom Images -->

    </div>

</section>



<section id="about-us" class="pa-about-us pa-standard-section pa-bright text-center">
<h1 class="pa-h1-v2 pa-dark fadeInDelay00Duration10"><strong>Activities </strong> 
</h1>
<div class="carousel-container">
  <!-- Slide 1 -->
  <div class="carousel-slide">
    <img src="assets/images/disc.jpg" alt="Image 1">
    <div class="carousel-title">Discipleship class</div>
    <div class="carousel-text">Discipleship activities focus on deepening faith through scripture study, prayer, mentorship, and fellowship. These practices help individuals grow spiritually, build supportive relationships, and live out their beliefs daily.</div>
    <button class="carousel-button prev" onclick="changeSlide(-1)">❮ Prev</button>
    <button class="carousel-button next" onclick="changeSlide(1)">Next ❯</button>
  </div>

  <!-- Slide 2 -->
  <div class="carousel-slide">
    <img src="assets/images/prayer.jpg" alt="Image 2">
    <div class="carousel-title">Prayer Class </div>
    <div class="carousel-text">A Prayer Class is a learning experience designed to help individuals develop and deepen their prayer life. It provides guidance on the different types of prayer, the importance of prayer in one’s spiritual journey, and how to cultivate a meaningful and effective prayer practice.</div>
    <button class="carousel-button prev" onclick="changeSlide(-1)">❮ Prev</button>
    <button class="carousel-button next" onclick="changeSlide(1)">Next ❯</button>
  </div>

  <!-- Slide 3 -->
  <div class="carousel-slide">
    <img src="assets/images/bible.jpg" alt="Image 3">
    <div class="carousel-title">Bible Study Sessions  </div>
    <div class="carousel-text">Bible study sessions are an essential part of spiritual growth for individuals and groups, where participants come together to explore and understand the teachings of the Bible. These sessions allow believers to gain deeper insight into Scripture, strengthen their faith, and learn how to apply biblical principles to their daily lives.</div>
    <button class="carousel-button prev" onclick="changeSlide(-1)">❮ Prev</button>
    <button class="carousel-button next" onclick="changeSlide(1)">Next ❯</button>
  </div>

  <!-- Slide 3 -->
  <div class="carousel-slide">
    <img src="assets/images/testify.jfif" alt="Image 3">
    <div class="carousel-title">I Testify  </div>
    <div class="carousel-text">"I Testify" is a powerful expression of personal faith, where individuals share their experiences and affirm the work of God in their lives. It’s a declaration of what God has done, how He has transformed lives, and the hope that He continues to bring. Through personal testimonies, people can inspire others, offer encouragement, and bring glory to God.</div>
    <button class="carousel-button prev" onclick="changeSlide(-1)">❮ Prev</button>
    <button class="carousel-button next" onclick="changeSlide(1)">Next ❯</button>
  </div>

  <!-- Slide 3 -->
  <div class="carousel-slide">
    <img src="assets/images/mdp.jpeg" alt="Image 3">
    <div class="carousel-title">Midnight prayers </div>
    <div class="carousel-text">Midnight prayers are a special time set aside for spiritual reflection, intercession, and seeking God’s presence in the quiet of the night. Rooted in biblical tradition, this practice of praying at midnight often symbolizes a moment of spiritual alertness and intensity, where believers draw closer to God through focused and fervent prayer.</div>
    <button class="carousel-button prev" onclick="changeSlide(-1)">❮ Prev</button>
    <button class="carousel-button next" onclick="changeSlide(1)">Next ❯</button>
  </div>

  <!-- Slide 3 -->
  <div class="carousel-slide">
    <img src="assets/images/mdp.jpeg" alt="Image 3">
    <div class="carousel-title">Morning Glory Prayers</div>
    <div class="carousel-text">Morning Glory Prayers are a beautiful way to start the day with gratitude, worship, and a renewed sense of purpose. These prayers are often recited in the early morning hours, before the day’s activities begin, allowing believers to center their hearts on God and seek His guidance and strength for the day ahead.</div>
    <button class="carousel-button prev" onclick="changeSlide(-1)">❮ Prev</button>
    <button class="carousel-button next" onclick="changeSlide(1)">Next ❯</button>
  </div>

  <!-- Slide 3 -->
  <div class="carousel-slide">
    <img src="assets/images/mdp.jpeg" alt="Image 3">
    <div class="carousel-title">Noon Day Prayers</div>
    <div class="carousel-text">Noon Day Prayers are an intentional time of reflection, renewal, and connection with God during the middle of the day. It’s an opportunity to pause from the busyness and demands of daily life, re-center one’s heart, and seek God’s presence for the remainder of the day. In some Christian traditions, noon is a significant time for prayer, recalling moments when Jesus, during His earthly ministry, prayed or was active in significant ways at noon.</div>
    <button class="carousel-button prev" onclick="changeSlide(-1)">❮ Prev</button>
    <button class="carousel-button next" onclick="changeSlide(1)">Next ❯</button>
  </div>

  <!-- Slide 3 -->
  <div class="carousel-slide">
    <img src="assets/images/mdp.jpeg" alt="Image 3">
    <div class="carousel-title">Evening Hour Of Prayer </div>
    <div class="carousel-text">The Evening Hour of Prayer is a sacred moment for believers to pause at the end of the day, reflecting on God’s goodness and seeking His peace before the night. It is a time for gratitude, reflection, and surrender, offering the day’s experiences to God and seeking His protection and guidance for the night ahead.</div>
    <button class="carousel-button prev" onclick="changeSlide(-1)">❮ Prev</button>
    <button class="carousel-button next" onclick="changeSlide(1)">Next ❯</button>
  </div>


   <!-- Slide 3 -->
   <div class="carousel-slide">
    <img src="assets/images/mdp.jpeg" alt="Image 3">
    <div class="carousel-title">Hourly Prayer Watches  </div>
    <div class="carousel-text">Hourly Prayer Watches are designated times throughout the day and night when believers commit to praying and interceding at specific hours. This practice encourages continuous communion with God, focusing on different aspects of life, personal growth, and the needs of others. Rooted in biblical tradition, it is a way to dedicate each hour of the day and night to God's service, fostering a deeper spiritual connection.</div>
    <button class="carousel-button prev" onclick="changeSlide(-1)">❮ Prev</button>
    <button class="carousel-button next" onclick="changeSlide(1)">Next ❯</button>
  </div>

   <!-- Slide 3 -->
   <div class="carousel-slide">
    <img src="assets/images/mdp.jpeg" alt="Image 3">
    <div class="carousel-title">The Watchers Prayer Vigil  </div>
    <div class="carousel-text">The Watchers Prayer Vigil is a dedicated time of continuous prayer, often held over a set period, where believers commit to praying in shifts or "watches" for specific needs, interceding on behalf of individuals, communities, and the world. This prayer vigil is rooted in the biblical tradition of "watching and praying," as seen in passages like Matthew 26:41, where Jesus urged His disciples to "watch and pray" to avoid temptation. It is a time for focused, persistent prayer, often held during critical moments, special events, or times of spiritual warfare.</div>
    <button class="carousel-button prev" onclick="changeSlide(-1)">❮ Prev</button>
    <button class="carousel-button next" onclick="changeSlide(1)">Next ❯</button>
  </div>

   <!-- Slide 3 -->
   <div class="carousel-slide">
    <img src="assets/images/mdp.jpeg" alt="Image 3">
    <div class="carousel-title">Sermon of The Day  </div>
    <div class="carousel-text">The Sermon of the Day serves as a timely and relevant message delivered to the congregation, providing biblical insight, spiritual encouragement, and practical applications for daily life. Rooted in the Scriptures, it speaks to the current needs of the community, addressing life challenges, deepening faith, and guiding believers on their Christian journey.</div>
    <button class="carousel-button prev" onclick="changeSlide(-1)">❮ Prev</button>
    <button class="carousel-button next" onclick="changeSlide(1)">Next ❯</button>
  </div>

  <div class="carousel-slide">
    <img src="assets/images/mdp.jpeg" alt="Image 3">
    <div class="carousel-title">Praise and Worship Session of The Day </div>
    <div class="carousel-text">The Praise and Worship Session of the Day is a dedicated time for the congregation to come together in adoration and gratitude before God. It is an opportunity for believers to express their love, honor, and reverence through music, song, and prayer, inviting the presence of the Holy Spirit to fill the place and transform hearts. Praise and worship are powerful tools that not only bring glory to God but also help believers experience a deeper connection with Him.</div>
    <button class="carousel-button prev" onclick="changeSlide(-1)">❮ Prev</button>
    <button class="carousel-button next" onclick="changeSlide(1)">Next ❯</button>
  </div>
  <div class="carousel-slide">
    <img src="assets/images/mdp.jpeg" alt="Image 3">
    <div class="carousel-title">The Discipline of Fasting   </div>
    <div class="carousel-text">Fasting is a powerful spiritual discipline in which believers voluntarily abstain from food, drink, or certain activities for a set period of time, focusing on prayer, reflection, and seeking God’s presence. Rooted in biblical tradition, fasting is not only an act of self-denial but a way to grow closer to God, deepen one’s faith, and experience spiritual renewal.</div>
    <button class="carousel-button prev" onclick="changeSlide(-1)">❮ Prev</button>
    <button class="carousel-button next" onclick="changeSlide(1)">Next ❯</button>
  </div>


  <!-- Slide indicators -->
  <div class="carousel-indicators">
    <span onclick="showSlide(1)" class="active"></span>
    <span onclick="showSlide(2)"></span>
    <span onclick="showSlide(3)"></span>
    <span onclick="showSlide(4)"></span>
    <span onclick="showSlide(5)"></span>
    <span onclick="showSlide(6)"></span>
    <span onclick="showSlide(7)"></span>
    <span onclick="showSlide(8)"></span>
    <span onclick="showSlide(9)"></span>
    <span onclick="showSlide(10)"></span>
    <span onclick="showSlide(11)"></span>
    <span onclick="showSlide(11)"></span>
  </div>
</div>
</section>

<section id="about-us" class="pa-about-us pa-standard-section pa-bright text-center">
<div class="our-books-section">
  <h2>Our Books</h2>
  <p>Gain access to our library of books and explore a world of knowledge and inspiration.</p>
  <a href="/our-books" class="take-me-there-button">Take Me There</a>
</div>
</section>


<section id="about-us" class="pa-about-us pa-standard-section pa-bright text-center">
<div class="subscribe-section">
  <h2>Subscribe to Our Listing</h2>
  <p>Receive Daily Devotional in your email or WhatsApp</p>
  <button class="subscribe-button" onclick="openSubscribePopup()">Subscribe Now</button>
</div>

<!-- Popup Form -->
<div id="subscribe-popup" class="popup">
  <div class="popup-content">
    <span class="close-btn" onclick="closeSubscribePopup()">&times;</span>
    <h3>Subscribe to Our Daily Devotional</h3>
    <form id="subscribe-form">
      <input type="text" id="name" placeholder="Your Name" required><br>
      <input type="email" id="email" placeholder="Your Email Address" required><br>
      <input type="tel" id="phone" placeholder="Your Phone Number (with country code)" required><br>
      
      <label>Select Subscription Method:</label><br>
      <input type="radio" id="emailOnly" name="subscription" value="email" checked>Email Only<br>
      <input type="radio" id="whatsappOnly" name="subscription" value="whatsapp">WhatsApp Only<br>
      <input type="radio" id="both" name="subscription" value="both">Both Email & WhatsApp<br><br>
      
      <button type="submit" onclick="submitForm(event)">Submit</button>
    </form>
  </div>
</div>

<!-- Thank You Popup -->
<div id="thank-you-popup" class="popup">
  <div class="popup-content">
    <span class="close-btn" onclick="closeThankYouPopup()">&times;</span>
    <h3>Thank You!</h3>
    <p>Your subscription has been successfully received. You will start receiving daily devotionals soon.</p>
  </div>
</div>

</section>



<section id="about-us" class="pa-about-us pa-standard-section pa-bright text-center">
<div class="connect-with-us-section">
  <h2>Connect With Us</h2>
  <p>Connect with us on all our social media platforms: Facebook, X, Instagram, Telegram, WhatsApp, YouTube.</p>
  <div class="social-media-links">
    <a href="https://facebook.com" class="social-icon facebook" target="_blank">Facebook</a>
    <a href="https://twitter.com" class="social-icon x" target="_blank">X</a>
    <a href="https://instagram.com" class="social-icon instagram" target="_blank">Instagram</a>
    <a href="https://telegram.org" class="social-icon telegram" target="_blank">Telegram</a>
    <a href="https://wa.me" class="social-icon whatsapp" target="_blank">WhatsApp</a>
    <a href="https://youtube.com" class="social-icon youtube" target="_blank">YouTube</a>
  </div>
</div>

</section>

<!-- Quote Section
	================================================== -->
<section class="pa-quote" data-parallax="scroll" data-speed="0.2" data-image-src="assets/images/quote-background.jpg"
    style="position: relative; z-index: 2;">

    <div class="container text-center">
        <div class="row">
            <div class="col-12 col-xl-10 offset-xl-1">
                <h2 class="pa-h2-quote pa-bright fadeInDelay03Duration10">That They May Know Him, The One True God and
                    Jesus Christ Whom Thou Hast Sent</h2>

            </div>
        </div>
    </div>

</section>
<!-- /.pa-quote -->


<!-- Contact Us Section
	================================================== -->
<section id="contact-us" class="pa-contact-us" data-parallax="scroll" data-speed="0"
    data-image-src="assets/images/contact-hero.jpg">

    <div class="container">
        <!-- Section Header -->
        <div class="row text-center">
            <div class="col-12 col-xl-10 offset-xl-1">
                <h1 class="pa-h1-v2 pa-bright fadeInDelay00Duration10">Let's <strong>Connect</strong></h1>
                <p class="pa-p-v1 pa-white fadeInDelay03Duration10">It is a Place of Daily Enlightenment and Growth by
                    The Word of God, The Ministry of Prayer, Fellowship and Service. We get to Know God's Ways, His
                    Character and His Divine Power!
                </p>
                <div class="pt-0 pt-sm-3 pt-md-3 pt-lg-4 pt-xl-5"></div>
            </div>
        </div>
    </div>

</section>

<script>
  let currentSlide = 1;
  showSlide(currentSlide);

  // Function to change slides with navigation buttons
  function changeSlide(n) {
    showSlide(currentSlide += n);
  }

  // Function to display a specific slide
  function showSlide(n) {
    const slides = document.querySelectorAll(".carousel-slide");
    const indicators = document.querySelectorAll(".carousel-indicators span");

    if (n > slides.length) currentSlide = 1;
    if (n < 1) currentSlide = slides.length;

    slides.forEach(slide => slide.style.display = "none");
    indicators.forEach(ind => ind.classList.remove("active"));

    slides[currentSlide - 1].style.display = "block";
    indicators[currentSlide - 1].classList.add("active");
  }

  // Function to open the subscribe popup
function openSubscribePopup() {
  document.getElementById('subscribe-popup').style.display = 'block';
}

// Function to close the subscribe popup
function closeSubscribePopup() {
  document.getElementById('subscribe-popup').style.display = 'none';
}

// Function to submit the form and show thank you popup
function submitForm(event) {
  event.preventDefault(); // Prevent form submission

  // Get form data (name, email, phone, and subscription preference)
  let name = document.getElementById('name').value;
  let email = document.getElementById('email').value;
  let phone = document.getElementById('phone').value;
  let subscription = document.querySelector('input[name="subscription"]:checked').value;

  // Display thank you popup
  document.getElementById('subscribe-popup').style.display = 'none';
  document.getElementById('thank-you-popup').style.display = 'block';

  // Optionally, you can send the form data to a server or handle it here
  console.log(`Name: ${name}, Email: ${email}, Phone: ${phone}, Subscription: ${subscription}`);
}

// Function to close the thank you popup
function closeThankYouPopup() {
  document.getElementById('thank-you-popup').style.display = 'none';
}

</script>
@endsection
