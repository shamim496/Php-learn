<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Shamim Hasan</title>
    <link rel="stylesheet" href="assets/css/uikit.min.css"/>
    <link rel="stylesheet" href="assets/css/style.css"/>
  </head>
  <body>
    <section class="uk-section uk-section-default uk-section-xlarge">
        <div class="uk-container uk-container-expand">
            <div class="uk-grid-expand uk-flex uk-flex-middle" uk-grid>
                <div class="uk-width-2-5@m">
                   <h2 class="uk-3 uk-text-bold">Layout Boxed Example</h2>
                   <div class="uk-text-meta">
                       Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae omnis possimus sapiente velit provident hic asperiores deleniti nemo architecto repudiandae.
                   </div>
                </div>
                <div class="uk-width-3-5@m">
                    <div class="uk-grid-expand uk-grid-match uk-child-width-1-4@m uk-child-width-1-2" uk-grid>

                        <?php

                        for($i=1;$i<8;$i++){
                        ?>
                        <div>
                            <div class="uk-card uk-card-body uk-card-default uk-card-hover">
                                <img src="imgs/block/<?php echo $i; ?>.jpg" alt="">
                            </div>
                        </div>
                        <?php
                      }

                      ?>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="uk-section uk-section-default uk-section-xlarge">
        <div class="uk-container uk-container-expand">
            <div class="uk-grid-expand uk-flex uk-flex-middle" uk-grid>
                <div class="uk-width-1-5@m">
                   <h2 class="uk-3 uk-text-bold">Layout Boxed Example</h2>
                   <div class="uk-text-meta">
                       Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae omnis possimus sapiente velit provident hic asperiores deleniti nemo architecto repudiandae.
                   </div>
                </div>
                <div class="uk-width-4-5@m">
                    <div class="uk-grid-expand uk-grid-match uk-child-width-1-3@m uk-child-width-1-2" uk-grid>

                        <?php

                        for($i=1;$i<=3;$i++){
                        ?>
                        <div>
                            <div class="uk-card uk-card-default uk-card-small uk-card-body uk-card-hover">
                                <img src="imgs/block/s<?php echo $i; ?>.jpg" alt="">
                                <div class="uk-text-meta">
                                   Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae omnis possimus sapiente velit provident hic
                                   asperiores deleniti nemo architecto repudiandae.
                                </div>
                            </div>
                        </div>
                        <?php
                      }

                    ?>

                    </div>
                </div>
            </div>
        </div>
    </section>

     <section class="uk-section uk-section-default uk-section-xlarge">
        <div class="uk-container uk-container-expand">
            <div class="uk-grid-expand uk-flex uk-flex-middle" uk-grid>

                <div class="uk-width-1-1@m">
                    <div class="uk-grid-expand uk-grid-match uk-child-width-1-3@m uk-child-width-1-2" uk-grid>

                        <?php

                        for($i=1;$i<=3;$i++){
                        ?>
                        <div>
                            <div class="uk-card uk-card-default uk-card-small uk-card-body uk-card-hover">
                                <img src="imgs/block/h<?php echo $i; ?>.jpg" alt="">
                                <h1 class="uk-heading-small uk-margin-small-top uk-text-large">This is Tittle <?php echo $i; ?></h1>
                                <div class="uk-text-meta">
                                   Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae omnis possimus sapiente velit provident hic
                                   asperiores deleniti nemo architecto repudiandae.
                                </div>
                                <div class="uk-margin-medium-top">
                                  <a href="#" class="uk-button uk-button-muted uk-padding-remove-left">Read more <span uk-icon="arrow-right"></span></a>
                                </div>


                                <ul class="uk-subnav uk-subnav-divider">
                                  <li class="uk-active"><a href="#">Selim Rana</a></li>
                                  <li>September 26, 2017</li>
                                  <li><span>0</span></li>
                                </ul>

                                </div>

                        </div>
                        <?php
                      }

                      ?>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="uk-section uk-section-default uk-section-xlarge uk-padding-remove">
      <div class="uk-container uk-container-expand">
        <div class="uk-grid uk-child-width-1-2@m uk-flex uk-flex-middle">
          <div>
           <img src="imgs/block/2.jpg">
            </div>
          <div>
            <h2 class="uk-heading-title">
              lorem ipsum dolor sit amet,
            </h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </p>
              <hr>
             <div class="uk-post-grid-meta uk-subnav uk-flex-middle uk-margin-small-top uk-padding-remove-horizontal">
              <span class="uk-post-grid-author">
                <a href="#">Selim Rana</a></span>
                <span class="uk-post-grid-date">September 26, 2017</span>
                <span class="uk-post-grid-comments uk-icon">
                  <span class="uk-icon uk-margin-large-right" uk-icon="comment">0</span>
                </span>
              </div>
          </div>
        </div>
      </div>
    </section>


    <section class="uk-section uk-section-default uk-section-xlarge uk-padding-remove">
      <div class="uk-container uk-container-expand">
        <div class="uk-grid uk-child-width-1-2@m uk-flex uk-flex-middle">
          <div class="uk-padding">
            <h2 class="uk-heading-title">
              lorem ipsum dolor sit amet,
            </h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </p>
              <hr>
             <div class="uk-post-grid-meta uk-subnav uk-flex-middle uk-margin-small-top uk-padding-remove-horizontal">
              <span class="uk-post-grid-author">
                <a href="#">Selim Rana</a></span>
                <span class="uk-post-grid-date">September 26, 2017</span>
                <span class="uk-post-grid-comments uk-icon">
                  <span class="uk-icon uk-margin-large-right" uk-icon="comment">0</span>
                </span>
              </div>
          </div>

          <div class="uk-padding-remove-left">
            <img src="imgs/block/2.jpg">
          </div>

        </div>
      </div>
    </section>


    <section class="uk-section uk-section-default uk-section-xlarge bdt-block-section">
      <div class="uk-container uk-container-expand">
        <div class="uk-card uk-card-body uk-card-default uk-transition-toggle">
         <div class=" uk-overflow-hidden">
            <img class="uk-transition-scale-down uk-transition-opaque" src="imgs/block/l1.jpg" alt="">
          </div>
         <div class="uk-text-center uk-padding">
           <h2>A CLOSER LOOK AT ADWORDS’ UPDATE TO KEYWORD</h2>
         </div>
         <p class="uk-text-meta">
           Phasellus justo lacus, mattis at elit eu, laoreet vestibulum mi. Fusce consectetur nec ligula non fermentum. Nullam dictum erat eget eros luctus porta. Sed sit amet nisl a ante ultrices pulvinar ac vulputate nulla. Quisque ac iaculis dolor. Nullam ut
         </p>
         <div class="uk-margin-medium-top uk-text-center">
          <a href="#" class="uk-button uk-button-muted uk-margin-center">Read more
            <span uk-icon="arrow-right"></span>
          </a>
         </div>
           <hr>
         <div class="uk-text-center uk-flex-middle uk-margin-small-top">
            <span class="uk-post-grid-author">
              <a href="#">Selim Rana</a></span>
              <span class="uk-post-grid-date">September 26, 2017</span>
              <span class="uk-post-grid-comments uk-icon">
              <span class="uk-icon uk-margin-large-right" uk-icon="comment">0</span>
            </span>
          </div>
        </div>
      </div>
    </section>



    <section class="uk-section uk-section-default uk-section-xlarge bdt-section">
      <div class="uk-container">
       <div class="uk-grid uk-grid-expand uk-child-width-1-3@m uk-flex uk-flex-middle uk-grid">
        <div class="uk-card uk-card-body uk-background-secondary uk-border-rounded bdt-bg-card">
         <h4 class="uk-light">A LOT OF COMPONENTS</h4>
         <p>
           All components are available in PSD’s and Sketch, making it simple for you to find any of the pack’s components and add pieces to your layout with a simple drag and drop. Each component is placed in its own group, and named appropriately.
         </p>
       </div>
        <div class="uk-card uk-card-body bdt-bg-red bdt-bg-card">
         <h4>A LOT OF COMPONENTS</h4>
         <p>
           All components are available in PSD’s and Sketch, making it simple for you to find any of the pack’s components and add pieces to your layout with a simple drag and drop. Each component is placed in its own group, and named appropriately.
         </p>
       </div>
      <div class="uk-card uk-card-body bdt-bg-blue bdt-bg-card">
         <h4>A LOT OF COMPONENTS</h4>
         <p>
           All components are available in PSD’s and Sketch, making it simple for you to find any of the pack’s components and add pieces to your layout with a simple drag and drop. Each component is placed in its own group, and named appropriately.
         </p>
       </div>
     </div>
    </div>
    </section>

    <section class="uk-section uk-section-default uk-section-xlarge bdt-last-section">
      <div class="uk-container uk-container-small">
        <div class="uk-grid uk-grid-expand uk-child-width-1-5@m uk-grid">
          <div class="uk-card uk-card-body uk-background-muted">
            <img src="imgs/block/8.jpg" alt="">
          </div>
          <div class="uk-card uk-card-body uk-background-muted">
            <img src="imgs/block/8.jpg" alt="">
          </div>
          <div class="uk-card uk-card-body uk-background-muted">
            <img src="imgs/block/8.jpg" alt="">
          </div>
          <div class="uk-card uk-card-body uk-background-muted">
            <img src="imgs/block/8.jpg" alt="">
          </div>
          <div class="uk-card uk-card-body uk-background-muted">
            <img src="imgs/block/8.jpg" alt="">
          </div>
        </div>
      </div>
    </section>

    <section class="uk-section uk-background-muted uk-padding-medium uk-section-xlarge">
      <div class="uk-container uk-container-expand">
        <div class="uk-child-width-1-2 uk-flex uk-flex-middle"  uk-grid>
          <div class="uk-padding">
          <h2 class="uk-heading-title">
            Many Useful Components
          </h2>
          <p class="uk-text-meta">
            All components are available in PSD’s and Sketch, making it simple for you to find any of the pack’s components and add pieces to your layout with a simple drag and drop. Each component is placed in its own group, and named appropriately.
          </p>
          <div class="uk-margin-medium-top uk-animation-toggle">
          <a href="#" class="uk-button uk-button-default uk-button-large uk-border-rounded uk-animation-scale-up uk-transform-origin-bottom-center">
            SEE ALL FEATURES
          </a>
         </div>
       </div>
          <div class="uk-padding-remove-left uk-overflow-hidden bdt-img-wrapper">
            <img class="uk-width-1-1" src="imgs/block/2.jpg">
          </div>
        </div>
      </div>
    </section>


    <section class="uk-section uk-background-muted uk-padding-medium uk-section-xlarge">
      <div class="uk-container uk-container-expand">
        <h2 class="uk-heading-title uk-text-center uk-text-bold">
          The Rapture Startup will help to create <br> awesome websites for your projects
        </h2>
        <hr>
        <p class="uk-text-meta uk-text-center">
          CREATE OUR BEAUTIFUL APP
        </p>
        <div class="uk-text-center uk-animation-toggle">
          <a href="#" class="uk-button uk-button-default uk-button-large uk-animation-scale-up uk-transform-origin-bottom-center uk-margin-right bdt-bg-button">
           APP STORE
          </a>
          <a href="#" class="uk-button uk-button-default uk-button-large uk-animation-scale-up uk-transform-origin-bottom-center bdt-bg-button1">
           READ MORE
          </a>
        </div>
      </div>
    </section>


    <section class="uk-section uk-section-default uk-section-large">
      <div class="uk-container uk-container-medium">
          <h2 class="uk-heading-title uk-text-center uk-text-bold">
            Get Started In 60 Seconds
          </h2>
           <p class="uk-text-meta uk-text-center">
              All components are available in PSD’s and Sketch, making it simple for you to find any of the pack’s
             <br>components and add pieces to your layout with a simple drag and drop. Each component is placed in its
             <br>own group, and named appropriately.
           </p>
       <div class="uk-grid uk-grid-expand uk-child-width-1-2@m uk-flex uk-flex-middle" uk-grid>
          <div class="uk-card uk-card-body">
            <img class="" src="imgs/3D.jpg">
          </div>

            <div class="uk-grid-large uk-child-width-1-1" uk-grid>
              <div class="uk-panel uk-width-1-1">
                <div class="uk-card uk-card-body uk-card-hover">
                  <img class="bdt-bgi-image" src="imgs/Group.png">
                  <h2 class="uk-heading-title">
                    Group Building
                  </h2>
                <p class="uk-text-meta">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.
                </p>
                </div>
              </div>
              <div class="uk-panel uk-width-1-1">
                <div class="uk-card uk-card-body uk-card-hover">
                  <img class="bdt-bgi-image" src="imgs//Huge.png">
                  <h2 class="uk-heading-title">
                    Group Building
                  </h2>
                  <p class="uk-text-meta">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.
                  </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <section class="uk-section uk-section-default uk-section-large">
      <div class="uk-container uk-container-medium">
        <div class="uk-grid uk-child-width-1-3 uk-flex uk-flex-middle" uk-grid>
          <div class="">
            <div class="uk-card uk-card-body uk-card-hover bdt-custom-border">
               <div class="uk-text-center bdt-icon-img-wrapper">
                 <img class="bdt-bgi-image" src="imgs/flight.png">
               </div>
               <h2 class="uk-heading-title uk-text-center">
                 Icon Box Heading
               </h2>
               <p class="uk-text-meta uk-text-center">
                 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctusnec ullamcorper.
               </p>
            </div>
          </div>
           <div class="">
            <div class="uk-card uk-card-body uk-card-hover bdt-custom-border">
              <div class="uk-text-center bdt-icon-img-wrapper">
                 <img class="bdt-bgi-image" src="imgs/hotel.png">
               </div>
               <h2 class="uk-heading-title uk-text-center">
                 Icon Box Heading
               </h2>
               <p class="uk-text-meta uk-text-center">
                 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctusnec ullamcorper.
               </p>
            </div>
          </div>
          <div class="">
            <div class="uk-card uk-card-body uk-card-hover bdt-custom-border">
              <div class="uk-text-center bdt-icon-img-wrapper">
                 <img class="bdt-bgi-image" src="imgs/basket.png">
               </div>
               <h2 class="uk-heading-title uk-text-center">
                 Icon Box Heading
               </h2>
               <p class="uk-text-meta uk-text-center">
                 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctusnec ullamcorper.
               </p>
            </div>
          </div>



          <div class="">
            <div class="uk-card uk-card-body uk-card-hover bdt-custom-border">
               <div class="uk-text-center bdt-icon-img-wrapper">
                 <img class="bdt-bgi-imager" src="imgs/camera.png">
               </div>
               <h2 class="uk-heading-title uk-text-center">
                 Icon Box Heading
               </h2>
               <p class="uk-text-meta uk-text-center">
                 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctusnec ullamcorper.
               </p>
            </div>
          </div>
           <div class="">
            <div class="uk-card uk-card-body uk-card-hover bdt-custom-border">
              <div class="uk-text-center bdt-icon-img-wrapper">
                 <img class="bdt-bgi-image" src="imgs/direction.png">
               </div>
               <h2 class="uk-heading-title uk-text-center">
                 Icon Box Heading
               </h2>
               <p class="uk-text-meta uk-text-center">
                 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctusnec ullamcorper.
               </p>
            </div>
          </div>
          <div class="">
            <div class="uk-card uk-card-body uk-card-hover bdt-custom-border">
              <div class="uk-text-center bdt-icon-img-wrapper">
                 <img class="bdt-bgi-image" src="imgs/backpack.png">
               </div>
               <h2 class="uk-heading-title uk-text-center">
                 Icon Box Heading
               </h2>
               <p class="uk-text-meta uk-text-center">
                 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctusnec ullamcorper.
               </p>
            </div>
          </div>
        </div>
      </div>
    </section>


    <section class="uk-section uk-section-default uk-section-large uk-background-secondary">
      <div class="uk-container uk-container-medium">
        <div class="uk-grid uk-child-width-1-5">
          <div>
            <div class="bdt-site-logo uk-margin-auto">
              <img src="imgs/Huge.png">
            </div>
          </div>

           <div>
            <ul class="uk-list uk-list-large uk-text-center uk-light">
                <li>List item 1</li>
                <li>List item 2</li>
                <li>List item 3</li>
            </ul>
          </div>

           <div>
            <ul class="uk-list uk-list-large uk-text-center uk-light">
                <li>List item 1</li>
                <li>List item 2</li>
                <li>List item 3</li>
            </ul>
          </div>

           <div>
            <ul class="uk-list uk-list-large uk-text-center uk-light">
                <li>List item 1</li>
                <li>List item 2</li>
                <li>List item 3</li>
            </ul>
          </div>

           <div>
            <ul class="uk-list uk-list-large uk-text-center uk-light">
                <li>List item 1</li>
                <li>List item 2</li>
                <li>List item 3</li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <section class="uk-section uk-section-default uk-section-large">
      <div class="uk-container uk-container-medium">
        <ul class="uk-grid uk-child-width-1-2@m" uk-grid>
          <li class="uk-padding-small">
            <div class="uk-grid">
              <div class="uk-width-1-5">
                <img src="imgs/bg9.jpg">
              </div>
              <div class="uk-width-4-5">
                  <h4 class="uk-heading-title uk-text-bold uk-margin-remove">
                    A Closer Look at AdWords’ Update to <br> Keyword
                  </h4>
               <div class="">
                <span>
                  May 27, 2018
                </span>
                <span>
                  Company updates
                </span>
              </div>
             </div>
            </div>
            <hr class=" uk-margin-medium-top">
          </li>




          <li class="uk-padding-small">
            <div class="uk-grid">
              <div class="uk-width-1-5">
                <img src="imgs/bg.jpg">
              </div>
              <div class="uk-width-4-5">
                  <h4 class="uk-heading-title uk-text-bold uk-margin-remove">
                    Save Time and Effort with Facebook Saved Audiences
                  </h4>
                <span class="">
                  May 27, 2018
                </span>
                <span>
                  Company updates
                </span>
              </div>
            </div>
             <hr class=" uk-margin-medium-top">
          </li>



          <li class="uk-padding-small">
            <div class="uk-grid">
              <div class="uk-width-1-5">
                <img src="imgs/bg.jpg">
              </div>
              <div class="uk-width-4-5">
                  <h4 class="uk-heading-title uk-text-bold uk-margin-remove">
                    Responsive Web Design: The Answer of Today and Tomorrow
                  </h4>
                <span class="">
                  May 27, 2018
                </span>
                <span>
                  Company updates
                </span>
              </div>
            </div>
          </li>


          <li class="uk-padding-small">
            <div class="uk-grid">
              <div class="uk-width-1-5">
                <img src="imgs/bg9.jpg">
              </div>
              <div class="uk-width-4-5">
                  <h4 class="uk-heading-title uk-text-bold uk-margin-remove">
                   Are Comparison Shopping Engines Game Changers
                  </h4>
                <span class="">
                  September 26, 2020
                </span>
                <span>
                  Company updates
                </span>
              </div>
            </div>
          </li>


        </ul>
      </div>
    </section>


    <section class="uk-section uk-section-secondary  uk-section-large">
      <div class="uk-container uk-container-medium">
        <ul class="uk-grid uk-child-width-1-3@m" uk-grid>
          <li class="">
            <h3 class="uk-margin-medium-bottom">Recent Post</h3>
            <div class="uk-grid uk-grid-small bdt-padding-remove">
              <div class="uk-width-auto">
                <img class="bdt-border-radius" src="imgs/bg9.jpg">
              </div>
              <div class="uk-width-expand">
                <h4 class="bdt-font-size uk-text-bold uk-margin-remove">
                  Responsive Web Design: The Answer of Today and Tomorrow
                </h4>
                <div class="uk-subnav uk-margin-small-top uk-flex-middle">
                  <span>january 26, 2021</span><span>Events</span>
                </div>
              </div>
            </div>
           <hr class=" uk-margin-medium-top">
          </li>


           <li class="">
            <h3 class="uk-margin-medium-bottom">Blog Post</h3>
            <div class="uk-grid uk-grid-small bdt-padding-remove">
              <div class="uk-width-auto">
                <img class="bdt-border-radius" src="imgs/bg9.jpg">
              </div>
              <div class="uk-width-expand">
                <h4 class="bdt-font-size uk-heading-title uk-text-bold uk-margin-remove">
                  Responsive Web Design: The Answer of Today and Tomorrow
                </h4>
                <div class="uk-subnav uk-margin-small-top uk-flex-middle">
                  <span>january 26, 2021</span><span>Events</span>
                </div>
              </div>
            </div>
           <hr class=" uk-margin-medium-top">
          </li>



           <li class="">
            <h3 class="uk-margin-medium-bottom">Popular Post</h3>
            <div class="uk-grid uk-grid-small bdt-padding-remove">
              <div class="uk-width-auto">
                <img class="bdt-border-radius" src="imgs/bg9.jpg">
              </div>
              <div class="uk-width-expand">
                <h4 class="bdt-font-size uk-heading-title uk-text-bold uk-margin-remove">
                  Responsive Web Design: The Answer of Today and Tomorrow
                </h4>
                <div class="uk-subnav uk-margin-small-top uk-flex-middle">
                  <span>january 26, 2021</span><span>Events</span>
                </div>
              </div>
            </div>
           <hr class=" uk-margin-medium-top">
          </li>


           <li class="">
            <div class="uk-grid uk-grid-small bdt-padding-remove">
              <div class="uk-width-auto">
                <img class="bdt-border-radius" src="imgs/bg9.jpg">
              </div>
              <div class="uk-width-expand">
                <h4 class="bdt-font-size uk-heading-title uk-text-bold uk-margin-remove">
                  New Objectives Launched for Instagram Stories
                </h4>
                <div class="uk-subnav uk-margin-small-top uk-flex-middle">
                  <span>january 26, 2021</span><span>Events</span>
                </div>
              </div>
            </div>
          </li>


           <li class="">
            <div class="uk-grid uk-grid-small bdt-padding-remove">
              <div class="uk-width-auto">
                <img class="bdt-border-radius" src="imgs/bg9.jpg">
              </div>
              <div class="uk-width-expand">
                <h4 class="bdt-font-size uk-heading-title uk-text-bold uk-margin-remove">
                 New Objectives Launched for Instagram Stories
                </h4>
                <div class="uk-subnav uk-margin-small-top uk-flex-middle">
                  <span>january 26, 2021</span><span>Events</span>
                </div>
              </div>
            </div>
          </li>


           <li class="">
            <div class="uk-grid uk-grid-small bdt-padding-remove">
              <div class="uk-width-auto">
                <img class="bdt-border-radius" src="imgs/bg9.jpg">
              </div>
              <div class="uk-width-expand">
                <h4 class="bdt-font-size uk-heading-title uk-text-bold uk-margin-remove">
                  New Objectives Launched for Instagram Stories
                </h4>
                <div class="uk-subnav uk-margin-small-top uk-flex-middle">
                  <span>january 26, 2021</span>
                  <span>Events</span>
                </div>
              </div>
            </div>
          </li>

        </ul>
      </div>
    </section>


    <section class="uk-section uk-section-default uk-section-large">
      <div class="uk-container uk-container-medium">
        <ul class="uk-grid uk-child-width-1-3" uk-grid>
          <li>
            <div class="uk-grid uk-grid-small">
              <div class="uk-width-auto">
                <img class="bdt-border-radius2" src="imgs/nature.jpg">
              </div>
              <div class="uk-width-expand">
                <h4 class="uk-heading-title uk-text-bold uk-margin-remove">
                  National Forest between into The Road
                </h4>
              <div class="">
                <span>February 28, 2021</span>
                <span>Nature</span>
              </div>
             </div>
            </div>
            <hr class="uk-margin-medium-top">
           </li>


           <li>
            <div class="uk-grid uk-grid-small">
              <div class="uk-width-auto">
                <img class="bdt-border-radius2" src="imgs/Fruit.jpg">
              </div>
              <div class="uk-width-expand">
                <h4 class="uk-heading-title uk-text-bold uk-margin-remove">
                  Pick Fruit the First Season! from Fruit Trees
                </h4>
              <div class="">
                <span>February 28, 2021</span>
                <span>Nature</span>
              </div>
             </div>
            </div>
            <hr class="uk-margin-medium-top">
           </li>


           <li>
            <div class="uk-grid uk-grid-small">
              <div class="uk-width-auto">
                <img class="bdt-border-radius2" src="imgs/Sun.jpg">
              </div>
              <div class="uk-width-expand">
                <h4 class="uk-heading-title uk-text-bold uk-margin-remove">
                  Sunset Moment Till Sun Touches The Sea
                </h4>
              <div class="">
                <span>February 28, 2021</span>
                <span>Nature</span>
              </div>
             </div>
            </div>
            <hr class="uk-margin-medium-top">
           </li>


           <li>
            <div class="uk-grid uk-grid-small">
              <div class="uk-width-auto">
                <img class="bdt-border-radius2" src="imgs/Green Hill.jpg">
              </div>
              <div class="uk-width-expand">
                <h4 class="uk-heading-title uk-text-bold uk-margin-remove">
                  Hills Scenery with Green Grass and Trees
                </h4>
              <div class="">
                <span>February 28, 2021</span>
                <span>Nature</span>
              </div>
             </div>
            </div>
           </li>


           <li>
            <div class="uk-grid uk-grid-small">
              <div class="uk-width-auto">
                <img class="bdt-border-radius2" src="imgs/Area.jpg">
              </div>
              <div class="uk-width-expand">
                <h4 class="uk-heading-title uk-text-bold uk-margin-remove">
                  A Forest is a Large Area Dominated by Trees
                </h4>
              <div class="">
                <span>February 28, 2021</span>
                <span>Nature</span>
              </div>
             </div>
            </div>
           </li>


           <li>
            <div class="uk-grid uk-grid-small">
              <div class="uk-width-auto">
                <img class="bdt-border-radius2" src="imgs/Narrow Water.jpg">
              </div>
              <div class="uk-width-expand">
                <h4 class="uk-heading-title uk-text-bold uk-margin-remove">
                  Narrow Water Way Between two Hill
                </h4>
              <div class="">
                <span>February 28, 2021</span>
                <span>Nature</span>
              </div>
             </div>
            </div>
           </li>

        </ul>
      </div>
    </section>



    <section class="uk section uk-section-default uk-section-large">
      <div class="uk-container uk-container-medium">
        <div class="uk-grid uk-child-width-1-2" uk-grid>
          <div class="">
            <img src="imgs/coding-knowledge.svg">
          </div>
          <div class="uk-padding-remove-right">
            <h4 style="color: #20e2ad">Desgin Like A Boss</h4>
            <h1 class="">
              Coding knowledge <br>
              <span style="color: #20e2ad; font-weight: 600;'">
                Not Required!
              </span>
            </h1>
            <p class="uk-text-meta">
              <span style="color:#20e2ad">
                <strong>Element Pack Pro</strong>
              </span>
              <span>
                makes you present dynamic desgin with mixing of your mindset. It's dones't matter, if you coding knowledge is poor? If you want to make an eye-catching site,so Element Pack Pro will power-ups you.
              </span>
            </p>
          </div>
        </div>
      </div>
    </section>



    <section class="uk-section uk-section-secondary uk-section-xlarge bdt-shamim">
      <div class="uk-container uk-container-small">
        <div class="uk-grid uk-child-width-1-4">
          <div>
            <ul class="uk-list uk-list-large uk-list-center uk-light">
              <li>Check Ready Footer</li>
              <li>Browse All Pages</li>
              <li>View All Blocks</li>
              <li>Ready Made Header</li>
            </ul>
          </div>

          <div>
            <ul class="uk-list uk-list-large uk-list-center uk-light">
              <li>My Account</li>
              <li>Request Support</li>
              <li>Video Tutorial Library</li>
              <li>Pre-Sales Questions</li>
            </ul>
          </div>

           <div>
            <ul class="uk-list uk-list-large uk-list-center uk-light">
              <li>Contact Us</li>
              <li>Affiliate</li>
              <li>Terms of Use</li>
              <li>Privacy Policy</li>
            </ul>
          </div>

           <div>
            <ul class="uk-list uk-list-large uk-list-center uk-light">
              <li>Social Media</li>

              <li><span class="uk-margin-remove">Join on Facebook and check Our YouTube Channel for latest videos.</span></li>
              <li><span>Copyright © 2021 BdThemes.
                        All Rights Reserved. Site built with Element Pack & Rooten Theme.</span></li>
            </ul>
          </div>


        </div>
      </div>
    </section>



    <section class="uk-section uk-section-default uk-section-xlarge">
      <div class="uk-container uk-container-medium">
        <div class="uk-grid uk-child-width-1-3@m uk-grid-match" uk-grid>

          <div class="">
            <div class="uk-card uk-card-body bdt-custom-border-radius">
              <div class="bdt-testiminol-img-wrapper uk-align-left">
                <img src="imgs/block/03.jpg">
              </div>
              <div class="uk-light uk-align-left">
                  <h3 class="uk-text-bold sha-heading-wrapper">A. Xavi Alonso</h3>
                  <span>Amcor Ltd, Australia</span>
                  <p>Amcor Limited is a global packaging company. It develops and produces flexible packaging, rigid containers, specialty cartons, closures and services for</p>
             </div>
            </div>
          </div>

          <div class="">
            <div class="uk-card uk-card-body bdt-custom-border-radius">
              <div class="bdt-testiminol-img-wrapper">
                <img src="imgs/block/05.jpg">
              </div>
              <div class="uk-text-center uk-light">
                  <h3 class="uk-text-bold sha-heading-wrapper">G. Fabian Felix</h3>
                  <span>Amarin Corp plc</span>
                  <p>Welcome therapeutics to improve cardiovascular health. Amarin Corporation plc is a biopharmaceutical company focused on the commercialization.</p>
             </div>
            </div>
          </div>


          <div class="">
          <div class="uk-card uk-card-body bdt-custom-border-radius">
            <div class="bdt-testiminol-img-wrapper uk-align-right">
              <img src="imgs/block/02.jpg">
            </div>
            <div class="uk-light uk-align-right sha-text-container">
                <h3 class="uk-text-bold sha-heading-wrapper">H. Gabriel Danny</h3>
                <span>New York Soft Firm</span>
                <p>Free on-line system for planning, accounting and analysis of our system makes it possible to avoid errors in business planning and</p>
           </div>
          </div>
        </div>



         <div class="">
          <div class="uk-card uk-card-body bdt-custom-border-radius">
            <div class="bdt-testiminol-img-wrapper uk-align-left">
              <img src="imgs/block/01.jpg">
            </div>
            <div class="uk-light uk-align-left">
                <h3 class="uk-text-bold sha-heading-wrapper">Imelda M. Jefferson</h3>
                <span>North Wilkesboro</span>
                <p>Website testimonials can be displayed in different ways. Hopefully these examples will give you some ideas that can be useful for your</p>
           </div>
          </div>
        </div>


         <div class="">
          <div class="uk-card uk-card-body bdt-custom-border-radius">
            <div class="bdt-testiminol-img-wrapper">
              <img src="imgs/block/13.jpg">
            </div>
            <div class="uk-text-center uk-light">
                <h3 class="uk-text-bold sha-heading-wrapper">Maryanne M. Flowers</h3>
                <span>Clearwater</span>
                <p>For websites and online businesses testimonials can be even more useful than traditional businesses because visitors are often skeptical or</p>
           </div>
          </div>
        </div>


         <div class="">
          <div class="uk-card uk-card-body bdt-custom-border-radius">
            <div class="bdt-testiminol-img-wrapper uk-align-right">
              <img src="imgs/block/12.jpg">
            </div>
            <div class="uk-light uk-align-right sha-text-container">
                <h3 class="uk-text-bold sha-heading-wrapper">Deborah B. Vargas</h3>
                <span>Hayward</span>
                <p>We appreciated the ability for hands-on testing during our analysis phase. We love the ability to pay & go and</p>
           </div>
          </div>
        </div>

      </div>
    </div>
  </section>


        <section class="uk-section uk-section-default uk-section-xlarge">
          <div class="uk-container uk-container-medium">
            <div class="uk-grid uk-child-width-1-6@m uk-child-width-1-5@s uk-child-width-1-4@m uk-child-width-1-3@m uk-child-width-1-5@xl uk-grid-match" uk-grid>

              <div>
              <div class="">
                <div class="uk-card uk-card-body uk-card-hover sha-widget-container">
                  <div class="">
                    <img class="sha-img-icon-wrapper" src="imgs/advance.svg">
                  </div>
                  <h3 class="uk-margin-remove-top sha-advance-icon-box-title">
                    <span>Adv Progress Bar</span>
                  </h3>
                </div>
              </div>
            </div>

              <div class="">
                <div class="uk-card uk-card-body uk-card-hover sha-widget-container">
                  <div class="">
                    <img class="sha-img-icon-wrapper" src="imgs/bread.svg">
                  </div>
                  <h3 class="uk-margin-remove-top sha-advance-icon-box-title">
                    <span>Breadcrumbs</span>
                  </h3>
                </div>
              </div>

              <div class="">
                <div class="uk-card uk-card-body uk-card-hover sha-widget-container">
                  <div class="">
                    <img class="sha-img-icon-wrapper" src="imgs/interactive.svg">
                  </div>
                  <h3 class="uk-margin-remove-top sha-advance-icon-box-title">
                    <span>interactive Card</span>
                  </h3>
                </div>
              </div>


               <div class="">
                <div class="uk-card uk-card-body uk-card-hover sha-widget-container">
                  <div class="">
                    <img class="sha-img-icon-wrapper" src="imgs/divider.svg">
                  </div>
                  <h3 class="uk-margin-remove-top sha-advance-icon-box-title">
                    <span>Advanced Divider</span>
                  </h3>
                </div>
              </div>


              <div class="">
                <div class="uk-card uk-card-body uk-card-hover sha-widget-container">
                  <div class="">
                    <img class="sha-img-icon-wrapper" src="imgs/glass.svg">
                  </div>
                  <h3 class="uk-margin-remove-top sha-advance-icon-box-title">
                    <span>Backdrop Filter</span>
                  </h3>
                </div>
              </div>


               <div class="">
                <div class="uk-card uk-card-body uk-card-hover sha-widget-container">
                  <div class="">
                    <img class="sha-img-icon-wrapper" src="imgs/hover.svg">
                  </div>
                  <h3 class="uk-margin-remove-top sha-advance-icon-box-title">
                    <span>Honer Video</span>
                  </h3>
                </div>
              </div>


              <div class="">
                <div class="uk-card uk-card-body uk-card-hover sha-widget-container">
                  <div class="">
                    <img class="sha-img-icon-wrapper" src="imgs/fancy.svg">
                  </div>
                  <h3 class="uk-margin-remove-top sha-advance-icon-box-title">
                    <span>Fancy Icon</span>
                  </h3>
                </div>
              </div>


              <div class="">
                <div class="uk-card uk-card-body uk-card-hover sha-widget-container">
                  <div class="">
                    <img class="sha-img-icon-wrapper" src="imgs/image.svg">
                  </div>
                  <h3 class="uk-margin-remove-top sha-advance-icon-box-title">
                    <span>Image Accordion</span>
                  </h3>
                </div>
              </div>


              <div class="">
                <div class="uk-card uk-card-body uk-card-hover sha-widget-container">
                  <div class="">
                    <img class="sha-img-icon-wrapper" src="imgs/step.svg">
                  </div>
                  <h3 class="uk-margin-remove-top sha-advance-icon-box-title">
                    <span>Step Flow</span>
                  </h3>
                </div>
              </div>


              <div class="">
                <div class="uk-card uk-card-body uk-card-hover sha-widget-container">
                  <div class="">
                    <img class="sha-img-icon-wrapper" src="imgs/vertical.svg">
                  </div>
                  <h3 class="uk-margin-remove-top sha-advance-icon-box-title">
                    <span>Vertical Menu</span>
                  </h3>
                </div>
              </div>


              <div class="">
                <div class="uk-card uk-card-body uk-card-hover sha-widget-container">
                  <div class="">
                    <img class="sha-img-icon-wrapper" src="imgs/expand.svg">
                  </div>
                  <h3 class="uk-margin-remove-top sha-advance-icon-box-title">
                    <span>Image Expand</span>
                  </h3>
                </div>
              </div>


              <div class="">
                <div class="uk-card uk-card-body uk-card-hover sha-widget-container">
                  <div class="">
                    <img class="sha-img-icon-wrapper" src="imgs/time.svg">
                  </div>
                  <h3 class="uk-margin-remove-top sha-advance-icon-box-title">
                    <span>Timezone</span>
                  </h3>
                </div>
              </div>
            </div>
          </div>
              <button class="sha-button-wrapper">Take a Look 131 Wedgets</button>
        </section>


        <section class="uk-section uk-section-default uk-section-large">
          <div class="uk-container uk-container-medium">
            <div class="uk-grid uk-child-width-1-3@m uk-grid-match" uk-grid>
              <div>
                <div class="uk-card uk-card-body uk-card-primary sha-card-widget-container">
                  <div>
                    <img class="sha-imgs-wrapper" src="imgs/block/03.jpg">
                    <div class="sha-heading-title-wrapper">
                      <h3 class="sha-heading-text-wrapper">
                        A. Xavi Alonso
                      </h3>
                      <span>Amcor Ltd, Australia</span>
                    </div>
                  </div>
                  <p class="sha-grid-text">Amcor Limited is a global packaging company. It develops and produces flexible packaging, rigid containers, specialty cartons, closures and services for food, Join LinkedIn today for free.</p>
                </div>
              </div>


              <div>
                <div class="uk-card uk-card-body uk-card-primary sha-card-widget-container">
                  <div>
                    <img class="sha-imgs-wrapper" src="imgs/block/02.jpg">
                    <div class="sha-heading-title-wrapper">
                      <h3 class="sha-heading-text-wrapper">
                       G. Fabian Felix
                      </h3>
                      <span>Amarin Corp plc</span>
                    </div>
                  </div>
                  <p class="sha-grid-text">Welcome therapeutics to improve cardiovascular health. Amarin Corporation plc is a biopharmaceutical company focused on the commercialization.</p>
                </div>
              </div>


              <div>
                <div class="uk-card uk-card-body uk-card-primary sha-card-widget-container">
                  <div>
                    <img class="sha-imgs-wrapper" src="imgs/block/05.jpg">
                    <div class="sha-heading-title-wrapper">
                      <h3 class="sha-heading-text-wrapper">
                       H. Gabriel Danny
                      </h3>
                      <span>New York Soft Firm</span>
                    </div>
                  </div>
                  <p class="sha-grid-text">Free on-line system for planning, accounting and analysis of our system makes it possible to avoid errors in business planning and accounting. Green Land Blue Planet and</p>
                </div>
              </div>

              <div>
                <div class="uk-card uk-card-body uk-card-primary sha-card-widget-container">
                  <div>
                    <img class="sha-imgs-wrapper" src="imgs/block/01.jpg">
                    <div class="sha-heading-title-wrapper">
                      <h3 class="sha-heading-text-wrapper">
                        Imelda M. Jefferson
                      </h3>
                      <span>North Wilkesboro</span>
                    </div>
                  </div>
                  <p class="sha-grid-text">Website testimonials can be displayed in different ways. Hopefully these examples will give you some ideas that can be useful for your own projects. Here you’ll find.</p>
                </div>
              </div>


             <div>
                <div class="uk-card uk-card-body uk-card-primary sha-card-widget-container">
                  <div>
                    <img class="sha-imgs-wrapper" src="imgs/block/12.jpg">
                    <div class="sha-heading-title-wrapper">
                      <h3 class="sha-heading-text-wrapper">
                       Maryanne M.Flowers
                      </h3>
                      <span>Clearwater</span>
                    </div>
                  </div>
                  <p class="sha-grid-text">For websites and online businesses testimonials can be even more useful than traditional businesses because visitors are often skeptical or hesitant to trust someone online.</p>
                </div>
              </div>


              <div>
                <div class="uk-card uk-card-body uk-card-primary sha-card-widget-container">
                  <div>
                    <img class="sha-imgs-wrapper" src="imgs/block/13.jpg">
                    <div class="sha-heading-title-wrapper">
                      <h3 class="sha-heading-text-wrapper">
                       Deborah B. Vargas
                      </h3>
                      <span>Hayward</span>
                    </div>
                  </div>
                  <p class="sha-grid-text">We appreciated the ability for hands-on testing during our analysis phase. We love the ability to pay & go and appreciate no startup/monthly fees.</p>
                </div>
              </div>
            </div>
          </div>
        </section>


        <section class="uk-section uk-section-default uk-section-xlarge">
          <div class="uk-container uk-container-medium">
            <div class="uk-grid uk-child-width-1-2@m" uk-grid>
              <div class="sha-photo-frame-list-container">
                <div class="uk-grid uk-grid-small">
                  <div class="uk-width-auto">
                     <img class="sha-photo-frame-img" src="imgs/product Shopping.jpg">
                  </div>
                  <div class="uk-width-expand sha-photo-frame-heading-tile">
                    <h4 class="sha-photo-frame-heading-text">Products Shopping Bag</h4>
                    <p class="sha-photo-frame-excerpt">A collection of textile samples lay spread out on the table - Samsa was a</p>
                    <span class="uk-text-meta sha-icon-text">accessories</span>
                  </div>
                </div>
              </div>

               <div class="sha-photo-frame-list-container">
                <div class="uk-grid uk-grid-small">
                  <div class="uk-width-auto">
                     <img class="sha-photo-frame-img" src="imgs/photo frame.jpg">
                  </div>
                  <div class="uk-width-expand sha-photo-frame-heading-tile">
                    <h4 class="sha-photo-frame-heading-text">Photo Frame Album</h4>
                    <p class="sha-photo-frame-excerpt">Morning when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed</p>
                    <span class="uk-text-meta sha-icon-text">accessories</span>
                  </div>
                </div>
              </div>

              <div class="sha-photo-frame-list-container">
                <div class="uk-grid uk-grid-small">
                  <div class="uk-width-auto">
                     <img class="sha-photo-frame-img" src="imgs/back paper.jpg">
                  </div>
                  <div class="uk-width-expand sha-photo-frame-heading-tile">
                    <h4 class="sha-photo-frame-heading-text">Black Paper Box</h4>
                    <p class="sha-photo-frame-excerpt">Even the all-powerful Pointing has no control about the blind texts it is an almost</p>
                    <span class="uk-text-meta sha-icon-text">bagpack</span>
                  </div>
                </div>
              </div>

               <div class="sha-photo-frame-list-container">
                <div class="uk-grid uk-grid-small">
                  <div class="uk-width-auto">
                     <img class="sha-photo-frame-img" src="imgs/wood photo.jpg">
                  </div>
                  <div class="uk-width-expand sha-photo-frame-heading-tile">
                    <h4 class="sha-photo-frame-heading-text">Wood Photo Frame</h4>
                    <p class="sha-photo-frame-excerpt">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there</p>
                    <span class="uk-text-meta sha-icon-text">bagpack</span>
                  </div>
                </div>
              </div>

               <div class="sha-photo-frame-list-container">
                <div class="uk-grid uk-grid-small">
                  <div class="uk-width-auto">
                     <img class="sha-photo-frame-img" src="imgs/offset paper.jpg">
                  </div>
                  <div class="uk-width-expand sha-photo-frame-heading-tile">
                    <h4 class="sha-photo-frame-heading-text">Offset Paper Mockup</h4>
                    <p class="sha-photo-frame-excerpt">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of</p>
                    <span class="uk-text-meta sha-icon-text">marketing</span>
                  </div>
                </div>
              </div>

               <div class="sha-photo-frame-list-container">
                <div class="uk-grid uk-grid-small">
                  <div class="uk-width-auto">
                     <img class="sha-photo-frame-img" src="imgs/white paper.jpg">
                  </div>
                  <div class="uk-width-expand sha-photo-frame-heading-tile">
                    <h4 class="sha-photo-frame-heading-text">White Paper Mockup</h4>
                    <p class="sha-photo-frame-excerpt">Text didn’t listen. She packed her seven versalia, put her initial into the belt and</p>
                    <span class="uk-text-meta sha-icon-text">marketing</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>


        <section class="uk-section uk-section-default uk-section-xlarge">
          <div class="uk-container uk-container-medium">
            <div class="uk-grid uk-child-width-1-3@m" uk-grid>
              <div class="sha-mockup-container">
                <div class="uk-grid uk-grid-small">
                  <div class="sha-mockup-img-wrapper">
                    <img class="sha-mockup-img" src="imgs/product Shopping.jpg">
                  </div>
                  <div class="sha-mockup-content">
                    <h4 class="sha-mockup-title">Products Shopping Bag</h4>
                    <span>accessories</span>
                  </div>
                </div>
              </div>

              <div class="sha-mockup-container">
                <div class="uk-grid uk-grid-small">
                  <div class="sha-mockup-img-wrapper">
                    <img class="sha-mockup-img" src="imgs/photo frame.jpg">
                  </div>
                  <div class="sha-mockup-content">
                    <h4 class="sha-mockup-title">Photo Frame Album</h4>
                    <span>accessories</span>
                  </div>
                </div>
              </div>

              <div class="sha-mockup-container">
                <div class="uk-grid uk-grid-small">
                  <div class="sha-mockup-img-wrapper">
                    <img class="sha-mockup-img" src="imgs/back paper.jpg">
                  </div>
                  <div class="sha-mockup-content">
                    <h4 class="sha-mockup-title">Black Paper Box</h4>
                    <span>bagpack</span>
                  </div>
                </div>
              </div>

              <div class="sha-mockup-container">
                <div class="uk-grid uk-grid-small">
                  <div class="sha-mockup-img-wrapper">
                    <img class="sha-mockup-img" src="imgs/wood photo.jpg">
                  </div>
                  <div class="sha-mockup-content">
                    <h4 class="sha-mockup-title">Wood Photo Frame</h4>
                    <span>bagpack</span>
                  </div>
                </div>
              </div>

              <div class="sha-mockup-container">
                <div class="uk-grid uk-grid-small">
                  <div class="sha-mockup-img-wrapper">
                    <img class="sha-mockup-img" src="imgs/offset paper.jpg">
                  </div>
                  <div class="sha-mockup-content">
                    <h4 class="sha-mockup-title">Offset Paper Mockup</h4>
                    <span>marketing</span>
                  </div>
                </div>
              </div>

              <div class="sha-mockup-container">
                <div class="uk-grid uk-grid-small">
                  <div class="sha-mockup-img-wrapper">
                    <img class="sha-mockup-img" src="imgs/white paper.jpg">
                  </div>
                  <div class="sha-mockup-content">
                    <h4 class="sha-mockup-title">White Paper Mockup</h4>
                    <span>marketing</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>


        <section class="uk-section uk-section-default uk-section-xlarge">
          <div class="uk-container uk-container-medium">
            <div class="uk-grid uk-child-width-1-2@m" uk-grid>
              <div class="sha-paper-container">
                <div class="uk-grid uk-grid-small sha-paper-grid">
                  <div class="sha-paper-img-wrapper">
                    <img class="sha-paper-img" src="imgs/product Shopping.jpg">
                  </div>
                  <div class="sha-paper-content">
                    <h4 class="sha-paper-title">Products Shopping Bag</h4>
                    <p class="sha-paper-excerpt">A collection of textile samples lay spread out on the table - Samsa was a</p>
                    <span class="sha-paper-button">accessories</span>
                  </div>
                </div>
              </div>

              <div class="sha-paper-container">
                <div class="uk-grid uk-grid-small sha-paper-grid">
                  <div class="sha-paper-img-wrapper">
                    <img class="sha-paper-img" src="imgs/photo frame.jpg">
                  </div>
                  <div class="sha-paper-content">
                    <h4 class="sha-paper-title">Photo Frame Album</h4>
                    <p class="sha-paper-excerpt">Morning when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed</p>
                    <span class="sha-paper-button">accessories</span>
                  </div>
                </div>
              </div>

              <div class="sha-paper-container">
                <div class="uk-grid uk-grid-small sha-paper-grid">
                  <div class="sha-paper-img-wrapper">
                    <img class="sha-paper-img" src="imgs/back paper.jpg">
                  </div>
                  <div class="sha-paper-content">
                    <h4 class="sha-paper-title">Black Paper Box</h4>
                    <p class="sha-paper-excerpt">Even the all-powerful Pointing has no control about the blind texts it is an almost</p>
                    <span class="sha-paper-button">bagpack</span>
                  </div>
                </div>
              </div>

              <div class="sha-paper-container">
                <div class="uk-grid uk-grid-small sha-paper-grid">
                  <div class="sha-paper-img-wrapper">
                    <img class="sha-paper-img" src="imgs/wood photo.jpg">
                  </div>
                  <div class="sha-paper-content">
                    <h4 class="sha-paper-title">Wood Photo Frame</h4>
                    <p class="sha-paper-excerpt">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there</p>
                    <span class="sha-paper-button">bagpack</span>
                  </div>
                </div>
              </div>

               <div class="sha-paper-container">
                <div class="uk-grid uk-grid-small sha-paper-grid">
                  <div class="sha-paper-img-wrapper">
                    <img class="sha-paper-img" src="imgs/offset paper.jpg">
                  </div>
                  <div class="sha-paper-content">
                    <h4 class="sha-paper-title">Offset Paper Mockup</h4>
                    <p class="sha-paper-excerpt">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of</p>
                    <span class="sha-paper-button">marketing</span>
                  </div>
                </div>
              </div>

              <div class="sha-paper-container">
                <div class="uk-grid uk-grid-small sha-paper-grid">
                  <div class="sha-paper-img-wrapper">
                    <img class="sha-paper-img" src="imgs/white paper.jpg">
                  </div>
                  <div class="sha-paper-content">
                    <h4 class="sha-paper-title">White Paper Mockup</h4>
                    <p class="sha-paper-excerpt">A Text didn’t listen. She packed her seven versalia, put her initial into the belt and</p>
                    <span class="sha-paper-button">marketing</span>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </section>


    <script src="assets/js/uikit.min.js"></script>
    <script src="assets/js/uikit-icons.min.js"></script>
  </body>
</html>


