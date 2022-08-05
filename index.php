<?php

session_start();

// if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!==true)
// {
//     header("location: sign-in.php");
// }

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Khana Khazana</title>
    <link rel="shortcut icon" href="khana-khazana-logo.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="CSS/style.css">
</head>



<body>

    <div class="container">


    <div class="top-menu">
        <img src="khana-khazana-logo.png" alt="name" class="logo" >
        <div class="sign-in-sign-up-btn">

      

             <button  class="btn" id="sign-in">

             Sign in
            
            </button>

            <button class="btn" id="sign-up">

            <?php 

               echo "Sign up"

            ?>

            </button>

          

        </div>
    </div>


    <section class="comp-info">
       <div class="comp-info-container">

        <div class="lit-disc">
            <h3>Food you love,delivered to you</h3>

            <div class="grid-system">
                <div class="grid-items">
                    <img src="https://cdn-icons.flaticon.com/png/512/3274/premium/3274083.png?token=exp=1659603996~hmac=f718e4c8512c6b68c1b07acdd5cd820c" alt="">
                    <h4>Choose your favorite meal</h4>
                </div>
                <div class="grid-items">
                    <img src="https://cdn-icons-png.flaticon.com/512/2558/2558162.png" alt="">
                    <h4>Place an order</h4>
                </div>
                <div class="grid-items">
                    <img src="https://cdn-icons.flaticon.com/png/512/5126/premium/5126437.png?token=exp=1659603951~hmac=b6f446cb10332106220298a1ee2588b2" alt="">
                    <h4>Enjoy your favorite meal!</h4>
                </div>
            </div>

          
        
        </div>

        <div class="logo-img">
            <img src="" alt="">

        </div>

<div class="lit-disc-2">
    <p class="lit-disc-1">
    Khana Khazana Order is an online food ordering service that is launched by Popular restaurant finder Khana Khazana. The food delivery
    service in India operating from all major cities. With huge popularity in a quick span of time, Khana Khazana is the biggest
    rival for Swiggy in India.
    </p>
</div>
  

       </div>
        <div class="download-app">
        
            <div class="item">
                <img src="https://cdn-icons.flaticon.com/png/512/1240/premium/1240942.png?token=exp=1659604042~hmac=ac7c3d81966bc73e8a7ecae8167784d0"
                    alt="" class="apple">
        
                <div class="bit-in">
                    <p>Availabe On</p>
                    <h1>App Store</h1>
                </div>
        
            </div>
        
            <div class="item">
                <img src="https://cdn-icons-png.flaticon.com/512/1077/1077054.png" class="playstore" alt="">
                <div class="bit-in">
                    <p>Availabe On</p>
                    <h1>Play Store</h1>
                </div>
            </div>
        
        </div>

    </section>



    <section class="food-items-cards">

        <div class="food-item-container">
            <div class="food-item-img" id="food-item-img-1">
                <img src="https://res.cloudinary.com/swiggy/image/upload/fl_lossy,f_auto,q_auto,w_520,h_520/rng/md/carousel/production/pneknawbadtvceqzwiep"  class="food-card-img" alt="">
            </div>
            <div class="food-item-img" id="food-item-img-2">
                <img src="https://res.cloudinary.com/swiggy/image/upload/fl_lossy,f_auto,q_auto,w_520,h_520/rng/md/carousel/production/zpkkdkmvlj5cuvqbc50t" class="food-card-img" alt="">

            </div>
            <div class="food-item-img" id="food-item-img-3">
                <img src="https://res.cloudinary.com/swiggy/image/upload/fl_lossy,f_auto,q_auto,w_520,h_520/rng/md/carousel/production/awurei8ypqkafoqay9ym" class="food-card-img" alt="">

            </div>
            <div class="food-item-img" id="food-item-img-4">
                <img src="https://res.cloudinary.com/swiggy/image/upload/fl_lossy,f_auto,q_auto,w_520,h_520/rng/md/carousel/production/s5ug2key6e2sptaxku5v" class="food-card-img" alt="">

            </div>

        </div>


       
    </section>


    <section class="food-card-section">

        <div class="restorants">
            <h1>Restaurants</h1>
            <div class="inputs">
                <input type="search" placeholder="Search by name....." name="search" id="search-item">
            </div>
        </div>
        <div class="menu-items">
            <button class="menu-btn">
                <a href="#" class="menu-links">All</a>
            </button>
            <button class="menu-btn">
                <a href="#" class="menu-links">Pizza</a>
            </button>
            <button class="menu-btn">
                <a href="#" class="menu-links">Burgers</a>
            </button>
            <button class="menu-btn">
                <a href="#" class="menu-links">Sushi</a>
            </button>
            <button class="menu-btn">
                <a href="#" class="menu-links">Breakfast</a>
            </button>
        </div>
  
        <hr>
        <br>
        <br>
        <br>


        <div class="all-food-items">

         <div class="foods-items" id="foods-items-1">
            <img src="https://res.cloudinary.com/swiggy/image/upload/fl_lossy,f_auto,q_auto,w_508,h_320,c_fill/zsnajbevj0m107kya94j" alt="">
            <h2>Pondo King</h2>
            <p>Chinese, Asian, Pan-Asian, Thai</p>

            <div class="ratings">
                <span class="rate"> &#9733 4.3</span>
                <span>34 MINS</span>
                <span>$10 FOR TWO</span>
            </div>
            <p class="offer-item">
        &#10026 50% off | Use WELCOME50
    </p>
     <div>
    <a href="#">QUICK VIEW</a>
    </div>

         </div>
         <div class="foods-items" id="foods-items-2">
            <img src="https://res.cloudinary.com/swiggy/image/upload/fl_lossy,f_auto,q_auto,w_508,h_320,c_fill/mkc4yu4audsj2bfb20hj" alt="">
            <h2>Burger King</h2>
            <p>American, Fast Food</p>
            
            <div class="ratings">
                <span class="rate"> &#9733 4.5</span>
                <span>34 MINS</span>
                <span>$10 FOR TWO</span>
            </div>
            <p class="offer-item">
                &#10026 50% off | Use WELCOME50
            </p>
            <div>
                <a href="#">QUICK VIEW</a>
            </div>
         </div>
         <div class="foods-items" id="foods-items-3">
            <img src="https://res.cloudinary.com/swiggy/image/upload/fl_lossy,f_auto,q_auto,w_508,h_320,c_fill/dkwugklsoybpclurilio" alt="">
            <h2>McDonald's</h2>
            <p>Burgers, Beverages, Cafe, Desserts</p>
            
            <div class="ratings">
                <span class="rate"> &#9733 4.1</span>
                <span>30 MINS</span>
                <span>$14 FOR TWO</span>
            </div>
            <p class="offer-item">
                &#10026 50% off | Use WELCOME50
            </p>
            <div>
                <a href="#">QUICK VIEW</a>
            </div>
         </div>
         <div class="foods-items" id="foods-items-4">
            <img src="https://res.cloudinary.com/swiggy/image/upload/fl_lossy,f_auto,q_auto,w_508,h_320,c_fill/zlg9ivz8tsouustzf2r4" alt="">
            <h2>Meraki</h2>
            <p>Chinese, Thai, Burmese, Pan-Asian, Asian</p>
            
            <div class="ratings">
                <span class="rate"> &#9733 4.3</span>
                <span>20 MINS</span>
                <span>$10 FOR TWO</span>
            </div>
            <p class="offer-item">
                &#10026 50% off | Use WELCOME50
            </p>
            <div>
                <a href="#">QUICK VIEW</a>
            </div>
         </div>
         <div class="foods-items" id="foods-items-5">
            <img src="https://res.cloudinary.com/swiggy/image/upload/fl_lossy,f_auto,q_auto,w_508,h_320,c_fill/snmmme6sxl8e7g4dswj4" alt="">
            <h2>Mamledar Missal - Thane</h2>
            <p>Snacks</p>
            
            <div class="ratings">
                <span class="rate"> &#9733 4.2</span>
                <span>24 MINS</span>
                <span>$13 FOR TWO</span>
            </div>
            <p class="offer-item">
                &#10026 50% off | Use WELCOME50
            </p>
            <div>
                <a href="#">QUICK VIEW</a>
            </div>
         </div>
         <div class="foods-items" id="foods-items-6">
            <img src="https://res.cloudinary.com/swiggy/image/upload/fl_lossy,f_auto,q_auto,w_508,h_320,c_fill/dhfhimxobhmp6mlqgjit" alt="">
            <h2>Silly Chilly</h2>
            <p>Chinese, Fast Food</p>
            
            <div class="ratings">
                <span class="rate"> &#9733 4.4</span>
                <span>32 MINS</span>
                <span>$15 FOR TWO</span>
            </div>
            <p class="offer-item">
                &#10026 50% off | Use WELCOME50
            </p>
            <div>
                <a href="#">QUICK VIEW</a>
            </div>
         </div>
         <div class="foods-items" id="foods-items-7">
            <img src="https://res.cloudinary.com/swiggy/image/upload/fl_lossy,f_auto,q_auto,w_508,h_320,c_fill/kmumwh3z0jshvu2byv7v" alt="">
            <h2>Nothing But Chicken</h2>
            <p>Salads, Fast Food</p>
            
            <div class="ratings">
                <span class="rate"> &#9733 4.1</span>
                <span>30 MINS</span>
                <span>$20 FOR TWO</span>
            </div>
            <p class="offer-item">
                &#10026 50% off | Use WELCOME50
            </p>
            <div>
                <a href="#">QUICK VIEW</a>
            </div>
         </div>
         <div class="foods-items" id="foods-items-8">
            <img src="https://res.cloudinary.com/swiggy/image/upload/fl_lossy,f_auto,q_auto,w_508,h_320,c_fill/rgcqhmezbfrkn0zmhbgo" alt="">
            <h2>Veggies</h2>
            <p>South Indian, North Indian, Chinese, Fast Food, Snacks, Beverages</p>
            
            <div class="ratings">
                <span class="rate"> &#9733 4.2</span>
                <span>33 MINS</span>
                <span>$20 FOR TWO</span>
            </div>
            <p class="offer-item">
                &#10026 50% off | Use WELCOME50
            </p>
            <div>
                <a href="#">QUICK VIEW</a>
            </div>
         </div>
         <div class="foods-items" id="foods-items-9">
            <img src="https://res.cloudinary.com/swiggy/image/upload/fl_lossy,f_auto,q_auto,w_508,h_320,c_fill/uuxpp88ht7hlpuwizbnv" alt="">
            <h2>Chinese Wok (Wok Express)</h2>
            <p>Chinese, Asian, Tibetan , Desserts</p>
            
            <div class="ratings">
                <span class="rate"> &#9733 4.5</span>
                <span>24 MINS</span>
                <span>$10 FOR TWO</span>
            </div>
            <p class="offer-item">
                &#10026 50% off | Use WELCOME50
            </p>
            <div>
                <a href="#">QUICK VIEW</a>
            </div>
         </div>
         <div class="foods-items" id="foods-items-10">
            <img src="https://res.cloudinary.com/swiggy/image/upload/fl_lossy,f_auto,q_auto,w_508,h_320,c_fill/qgcv70aphw9ok6i6wvyj" alt="">
            <h2>Behrouz Biryani</h2>
            <p>Biryani, Mughlai, Lucknowi, Hyderabadi, Kebabs, North Indian, Persian, Desserts</p>
            
            <div class="ratings">
                <span class="rate"> &#9733 4.0</span>
                <span>44 MINS</span>
                <span>$17 FOR TWO</span>
            </div>
            <p class="offer-item">
                &#10026 50% off | Use WELCOME50
            </p>
        <div>
            <a href="#">QUICK VIEW</a>
        </div>
         </div>
         <div class="foods-items" id="foods-items-11">
            <img src="https://res.cloudinary.com/swiggy/image/upload/fl_lossy,f_auto,q_auto,w_508,h_320,c_fill/re8ytd8w3l5riyq0t6po" alt="">
            <h2>Pizza Hut</h2>
            <p>Pizzas</p>
            
            <div class="ratings">
                <span class="rate"> &#9733 4.2</span>
                <span>30 MINS</span>
                <span>$11 FOR TWO</span>
            </div>
            <p class="offer-item">
                &#10026 50% off | Use WELCOME50
            </p>
            <div>
                <a href="#">QUICK VIEW</a>
            </div>
         </div>
         <div class="foods-items" id="foods-items-12">
            <img src="https://res.cloudinary.com/swiggy/image/upload/fl_lossy,f_auto,q_auto,w_508,h_320,c_fill/exlpcaclxqylo9ih0xjb" alt="">
            <h2>Oye Kiddan</h2>
            <p>North Indian</p>
            
            <div class="ratings">
                <span class="rate"> &#9733 4.2</span>
                <span>30 MINS</span>
                <span>$19 FOR TWO</span>
            </div>
            <p class="offer-item">
                &#10026 50% off | Use WELCOME50
            </p>
            <div>
                <a href="#">QUICK VIEW</a>
            </div>
         </div>
         <div class="foods-items" id="foods-items-13">
            <img src="https://res.cloudinary.com/swiggy/image/upload/fl_lossy,f_auto,q_auto,w_508,h_320,c_fill/d66rtfs6wn2dwad2zryc" alt="">
            <h2>Pondo King</h2>
            <p>Chinese, Asian, Pan-Asian, Thai, Oriental, Burmese, Street Food, Indonesian</p>
            
            <div class="ratings">
                <span class="rate"> &#9733 4.4</span>
                <span>34 MINS</span>
                <span>$10 FOR TWO</span>
            </div>
            <p class="offer-item">
                &#10026 50% off | Use WELCOME50
            </p>
        <div>
            <a href="#">QUICK VIEW</a>
        </div>
         </div>
         <div class="foods-items" id="foods-items-14">
            <img src="https://res.cloudinary.com/swiggy/image/upload/fl_lossy,f_auto,q_auto,w_508,h_320,c_fill/p7vgnb62rjrcihjr4abv" alt="">
            <h2>Charcoal Eats - Biryani & Beyond</h2>
            <p>Biryani, North Indian, Mughlai, Afghani, Hyderabadi , Kebabs</p>
            
            <div class="ratings">
                <span class="rate"> &#9733 4.2</span>
                <span>34 MINS</span>
                <span>$9 FOR TWO</span>
            </div>
            <p class="offer-item">
                &#10026 50% off | Use WELCOME50
            </p>
            <div>
                <a href="#">QUICK VIEW</a>
            </div>
         </div>
         <div class="foods-items" id="foods-items-15">
            <img src="https://res.cloudinary.com/swiggy/image/upload/fl_lossy,f_auto,q_auto,w_508,h_320,c_fill/lsqzoymxve4rpvokitw1" alt="">
        <h2>Utsav Restaurant - Viviana</h2>
        <p>North Indian, Chinese, South Indian, Continental</p>
        
        <div class="ratings">
            <span class="rate"> &#9733 4.1</span>
            <span>32 MINS</span>
            <span>$20 FOR TWO</span>
        </div>
            <p class="offer-item">
                &#10026 50% off | Use WELCOME50
            </p>
            <div>
                <a href="#">QUICK VIEW</a>
            </div>
         </div>
         <div class="foods-items" id="foods-items-16">
            <img src="https://res.cloudinary.com/swiggy/image/upload/fl_lossy,f_auto,q_auto,w_508,h_320,c_fill/qy4vsvsddxkovhtgwjb6" alt="">
            <h2>Prashant Corner</h2>
            <p>Street Food, Chaat, Snacks, Desserts, Sweets, Beverages</p>
            
            <div class="ratings">
                <span class="rate"> &#9733 4.3</span>
                <span>24 MINS</span>
                <span>$18 FOR TWO</span>
            </div>
            <p class="offer-item">
                &#10026 50% off | Use WELCOME50
            </p>
            
            <div>
                <a href="#">QUICK VIEW</a>
            </div>
         </div>


        </div>






    </section>

































































    </div>

    <!-- javascript scripting the file -->

    <script src="JS/index.js"></script>
    
</body>
</html>