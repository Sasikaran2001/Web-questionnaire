<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ToCyber</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <link href="style.css" rel="stylesheet" />
  </head>
  <body>
    <?php
      require('data base/conn.php');
      ini_set('display_errors',0);
    session_start();
    if(isset($_POST['uname'])) {
    // general information start
      $username=stripcslashes($_REQUEST['uname']);
      $username=mysqli_real_escape_string($mysqli,$username);
      $business_name=stripcslashes($_REQUEST['bname']);
      $business_name=mysqli_real_escape_string($mysqli,$business_name);
      $email=stripcslashes($_REQUEST['email']);
      $email=mysqli_real_escape_string($mysqli,$email);
      $contact_number=stripcslashes($_REQUEST['phone']);
      $contact_number=mysqli_real_escape_string($mysqli,$contact_number);
      $address=stripcslashes($_REQUEST['address']);
      $address=mysqli_real_escape_string($mysqli,$address);
      date_default_timezone_set("Asia/kolkata");
      $trn_date=date("Y-m-d H:i:s");
      // general information end

            // Reply user's email start
            $company_mail="connect@zewoke.co.uk";
            $subject="Someone has approached us";
            $subject2="Your message was sent to ToBranding";
            $message="Hai,
            We've got your response. We appriciate your time spent in filling our questionnaire so that we can get to know your surface level needs. We'll shortly get back to you!";
            $message2="Name:". $username ." "."
            Number:" . $contact_number;
            $header="From: $email";
            $header2="From: $company_mail";
            $action= mail($company_mail, $subject,$message2,$header);
            $action2=mail($email,$subject2,$message,$header2);
      
            // Reply user's email end
      // site information start
      $domain_name=stripcslashes($_REQUEST['dname']);
      $domain_name=mysqli_real_escape_string($mysqli,$domain_name);
      $like_site=stripcslashes($_REQUEST['like_site']);
      $like_site=mysqli_real_escape_string($mysqli,$like_site);
      $dislike_site=stripcslashes($_REQUEST['dislike_site']);
      $dislike_site=mysqli_real_escape_string($mysqli,$dislike_site);
      $have_domain=stripcslashes($_REQUEST['have_domain']);
      $have_domain=mysqli_real_escape_string($mysqli,$have_domain);
      $who_have_domain=stripcslashes($_REQUEST['who_have_domain']);
      $who_have_domain=mysqli_real_escape_string($mysqli,$who_have_domain);
      $have_webhost=stripcslashes($_REQUEST['have_webhost']);
      $have_webhost=mysqli_real_escape_string($mysqli,$have_webhost);
      $who_have_webhost=stripcslashes($_REQUEST['who_have_webhost']);
      $who_have_webhost=mysqli_real_escape_string($mysqli,$who_have_webhost);
      // site information end

      // blog information start
      $have_blog=stripcslashes($_REQUEST['have_blog']);
      $have_blog=mysqli_real_escape_string($mysqli,$have_blog);
      $using_platform=stripcslashes($_REQUEST['using_platform']);
      $using_platform=mysqli_real_escape_string($mysqli,$using_platform);
      $have_newsletter=stripcslashes($_REQUEST['have_newsletter']);
      $have_newsletter=mysqli_real_escape_string($mysqli,$have_newsletter);
      $you_want_newsletter=stripcslashes($_REQUEST['you_want_newsletter']);
      $you_want_newsletter=mysqli_real_escape_string($mysqli,$you_want_newsletter);
      $partcipate_socialmedia=$_REQUEST['participate_socialmedia'];
      if(!$partcipate_socialmedia) {
        $partcipate_socialmedia1=0;
      }else{
      $partcipate_socialmedia1=implode(',',$partcipate_socialmedia);
      $partcipate_socialmedia1=mysqli_real_escape_string($mysqli,$partcipate_socialmedia1);
      }
      // blog information end

       //  Design information start
            $have_logo=stripcslashes($_REQUEST['have_logo']);
            $have_logo=mysqli_real_escape_string($mysqli,$have_logo);
            $create_logo=stripcslashes($_REQUEST['create_logo']);
            $create_logo=mysqli_real_escape_string($mysqli,$create_logo);
            $like_specified_color=stripcslashes($_REQUEST['like_specified_color']);
            $like_specified_color=mysqli_real_escape_string($mysqli,$like_specified_color);
            $dislike_specified_color=stripcslashes($_REQUEST['dislike_specified_color']);
            $dislike_specified_color=mysqli_real_escape_string($mysqli,$dislike_specified_color);
            $do_you_like_add_web=stripcslashes($_REQUEST['do_you_like_add_web']);
            $do_you_like_add_web=mysqli_real_escape_string($mysqli,$do_you_like_add_web);
            $custom_design=$_REQUEST['custom_design'];
            if(!$custom_design) {
              $custom_design1=0;
            }else{
            $custom_design1=implode(',',$custom_design);
            $custom_design1=mysqli_real_escape_string($mysqli,$custom_design1);
            }
            // Design information end

       //Objective information start
       $purpose_website=stripcslashes($_REQUEST['purpose_website']);
       $purpose_website=mysqli_real_escape_string($mysqli,$purpose_website);
       $target_audience=stripcslashes($_REQUEST['target_audience']);
       $target_audience=mysqli_real_escape_string($mysqli,$target_audience);
       $main_call_action=stripcslashes($_REQUEST['main_call_action']);
       $main_call_action=mysqli_real_escape_string($mysqli,$main_call_action);
       $need_pages=$_REQUEST['need_pages'];
       if(!$need_pages) {
        $need_pages1=0;
      }else{
       $need_pages1=implode(',',$need_pages);
       $need_pages1=mysqli_real_escape_string($mysqli,$need_pages1);
      }
       $you_providing_content=stripcslashes($_REQUEST['you_providing_content']);
       $you_providing_content=mysqli_real_escape_string($mysqli,$you_providing_content);
       $content_copywrite=stripcslashes($_REQUEST['content_copywrite']);
       $content_copywrite=mysqli_real_escape_string($mysqli,$content_copywrite);
       $you_providing_image=stripcslashes($_REQUEST['you_providing_image']);
       $you_providing_image=mysqli_real_escape_string($mysqli,$you_providing_image);
       // Objective information end
      
      // Ecommerce information start
      $selling_products_your_website=stripcslashes($_REQUEST['selling_products_your_website']);
      $selling_products_your_website=mysqli_real_escape_string($mysqli,$selling_products_your_website);
      $type_of_products=stripcslashes($_REQUEST['type_of_products']);
      $type_of_products=mysqli_real_escape_string($mysqli,$type_of_products);
      $currently_use_payment_gateway=stripcslashes($_REQUEST['currently_use_payment_gateway']);
      $currently_use_payment_gateway=mysqli_real_escape_string($mysqli,$currently_use_payment_gateway);
      // Ecommerce information end

      // SEO information start
      $interested_our_advanced_seo=stripcslashes($_REQUEST['interested_our_advanced_seo']);
      $interested_our_advanced_seo=mysqli_real_escape_string($mysqli,$interested_our_advanced_seo);
      $getting_monthly_internet_visibility=stripcslashes($_REQUEST['getting_monthly_internet_visibility']);
      $getting_monthly_internet_visibility=mysqli_real_escape_string($mysqli,$getting_monthly_internet_visibility);
      // SEO information end

      // Maintanance information start
      $do_you_want_future_change=stripcslashes($_REQUEST['do_you_want_future_change']);
      $do_you_want_future_change=mysqli_real_escape_string($mysqli,$do_you_want_future_change);
      $often_require_updates=stripcslashes($_REQUEST['often_require_updates']);
      $often_require_updates=mysqli_real_escape_string($mysqli,$often_require_updates);
      $train_your_employee_updates=stripcslashes($_REQUEST['train_your_employee_updates']);
      $train_your_employee_updates=mysqli_real_escape_string($mysqli,$train_your_employee_updates);
      $tell_us_about_website=stripcslashes($_REQUEST['tell_us_about_website']);
      $tell_us_about_website=mysqli_real_escape_string($mysqli,$tell_us_about_website);
      // Maintanance information end

      $query="INSERT into `client_info`(username,business_name,email,contact_number,address,trn_date,domain_name,what_like_your_site,what_dislike_your_site,have_domain,who_have_domain,have_webhost,who_have_webhost,have_blog,using_platform_for_blog,have_newsletter,do_you_want_newsletter,participate_socialmedia,do_you_have_logo,we_will_create_logo,like_add_specified_colors,dislike_specified_colors,do_you_like_add_your_website,want_custom_design,purpose_of_website,target_audience,main_calltoaction_on_the_home_page,needed_pages,you_like_provide_content,provide_a_quote_for_copywriting_services,you_provide_images,selling_products_your_website,type_of_products,currently_use_payment_gateway,interested_our_advanced_seo,quote_for_montly_internet_visibilty,do_you_want_future_change,often_require_updates,train_your_employee_for_updates,tell_us_about_your_website) VALUES('$username','$business_name','$email','$contact_number','$address','$trn_date','$domain_name','$like_site','$dislike_site','$have_domain','$who_have_domain','$have_webhost','$who_have_webhost','$have_blog','$using_platform','$have_newsletter','$you_want_newsletter','$partcipate_socialmedia1','$have_logo','$create_logo','$like_specified_color','$dislike_specified_color','$do_you_like_add_web','$custom_design1','$purpose_website','$target_audience','$main_call_action','$need_pages1','$you_providing_content','$content_copywrite','$you_providing_image','$selling_products_your_website','$type_of_products','$currently_use_payment_gateway','$interested_our_advanced_seo','$getting_monthly_internet_visibility','$do_you_want_future_change','$often_require_updates','$train_your_employee_updates','$tell_us_about_website')";
      $result=mysqli_query($mysqli,$query) or die (mysqli_error($mysqli));
      if($result) {
        ?><div class="d-flex justify-content-center mt-5">
        <div class='mt-5 px-5 text-center user-alert container-opacity py-5'><h2 id="demo" class=''></h2><a class="btn btn-outline-light border-3 fs-4" href="https://calendly.com/sujita-g/consulting ">Fix Your Oppointment</a></div></div>
<script>

var txt;
if (confirm("Want to talk more? Fix an oppointment with us!")) {
txt = "Thank you! We appriciate the time<br> you spent filling our form.";
} else {
txt = "Thank you! We appriciate the time<br> you spent filling our form.<br> You'll soon hear it back from us!";
}
document.getElementById("demo").innerHTML = txt;
</script>

<?php
}else{
echo"0";
}
}else{
      ?> 
    <section class="bg-top">
    <section class="container rounded-4 container-opacity px-5">
      <div class="d-flex justify-content-center flex-wrap py-4">
      <div class="display-4 fw-normal col-lg-6 col-12 text-start">Web Questionnaire</div>
      <div class="col-lg-6 col-12 text-end pt-lg-0 pt-md-0 pt-4"><img class="col-md-4 col-6" src="img/logo.png"></div>
      </div>
      
    <form action="" method="post" name="main-form">
        <div class="py-3">
          <!-- General questions start -->
          <section class="border-dark border-bottom border-2 py-2">
            <div class="fs-2 fw-bold py-3">Genral Information</div>
            <!-- single question start -->
            <div class="py-2 row form-group fs-4">
                <div class="col-md-6 fw-normal"> <label for="uname">Name:</label></div>
                <div class="col-md-6 text-start"><input type="text" id="uname" name="uname" placeholder="Enter your name" required></div>
              </div>
              <!-- single question end -->

               <!-- single question start -->
              <div class="py-2 row form-group fs-4">
                <div class="col-md-6 fw-normal "><label for="bname">Business Name:</label></div>
                <div class="col-md-6 text-start"><input type="text" id="bname" name="bname" placeholder=""></div>
              </div>
              <!-- single question end -->

               <!-- single question start -->
              <div class="py-2 row form-group fs-4">
                <div class="col-md-6 fw-normal "><label for="phone">Contact Number:</label></div>
                <div class="col-md-6 text-start"><input type="number" id="phone" name="phone" placeholder="" required></div>
              </div>
              <!-- single question end -->

               <!-- single question start -->
              <div class="py-2 row form-group fs-4">
                <div class="col-md-6 fw-normal "><label for="email">Contact Email:</label></div>
                <div class="col-md-6 text-start"><input type="email" id="email" name="email" placeholder="" required></div>
              </div>
              <!-- single question end -->

               <!-- single question start -->
              <div class="py-2 row form-group fs-4">
                <div class="col-md-6 fw-normal "><label for="address">Address:</label></div>
                <div class="col-md-6 text-start"><textarea name="address" id="address" rows="4" cols="28"></textarea> </div>
              </div>
            </section>
            <!-- single question end -->
             <!-- General questions end -->
    <!-- Site questions start -->              
            <section class="border-2 border-bottom border-dark py-3">
              <div class="fs-2 fw-bold py-3">If you have a current site</div>
               <!-- single question start -->
              <div class="py-2 row form-group fs-4">
                <div class="col-md-6 fw-normal "><label for="dname">What’s the domain name<br>(URL/webaddress)?</label></div>
                <div class="col-md-6 text-start"><input type="text" id="dname" name="dname" placeholder=""></div>
              </div>
              <!-- single question end -->

               <!-- single question start -->
                <div class="py-2 row form-group fs-4">
                  <div class="col-md-6 fw-normal "><label for="like_site">What do you like about your site?<br> (Bespecific– colors, images, overall<br>feeling, navigationbar location,
                    etc.)</label></div>
                    <div class="col-md-6 text-start"><textarea name="like_site" id="like_site" rows="3" cols="28"></textarea> </div>
                </div>
                <!-- single question end -->

                 <!-- single question start -->
                <div class="py-2 row form-group fs-4">
                  <div class="col-md-6 fw-normal "><label for="dislike_site">What do you dislike about it?</label></div>
                  <div class="col-md-6 text-start"><textarea name="dislike_site" id="dislike_site" rows="3" cols="28"></textarea> </div>
                </div>
                <!-- single question end -->

                 <!-- single question start -->
                  <div class="py-2 row form-group fs-4">
                    <div class="col-md-6 fw-normal "><label for="have_domain">Do you have a domain name/URL registered?</label></div>
                    <div class="col-md-6 text-start form-group"><label class="input-radio">Yes
                      <input type="radio" name="have_domain" value="Yes">
                      <span class="checkmark"></span>
                    </label>
                    <label class="input-radio">No
                      <input type="radio" name="have_domain" value="No">
                      <span class="checkmark"></span>
                    </label>
                  </label>
                  <label class="input-radio">Not Sure
                    <input type="radio" name="have_domain" value="Not Sure">
                    <span class="checkmark"></span>
                  </label></div>
              </div>
              <!-- single question end -->

               <!-- single question start -->
              <div class="py-2 row form-group fs-4">
                <div class="col-md-6 fw-normal "><label for="who_have_domain">If so, with whom? (ex.GoDaddy)</label></div>
                <div class="col-md-6 text-start"><input type="text" id="who_have_domain" name="who_have_domain" placeholder=""></div>
          </div>
          <!-- single question end -->

           <!-- single question start -->
          <div class="py-2 row form-group fs-4">
            <div class="col-md-6 fw-normal "><label for="have_webhost">Do you have a web host?</label></div>
            <div class="col-md-6 text-start"><label class="input-radio">Yes
              <input type="radio" name="have_webhost" value="Yes">
              <span class="checkmark"></span>
            </label>
            <label class="input-radio">No
              <input type="radio" name="have_webhost" value="No">
              <span class="checkmark"></span>
            </label>
          </label>
          <label class="input-radio">Not Sure
            <input type="radio" name="have_webhost" value="Not Sure">
            <span class="checkmark"></span>
          </label></div>
      </div>
      <!-- single question end -->

       <!-- single question start -->
               <div class="py-2 row form-group fs-4">
                <div class="col-md-6 fw-normal "><label for="who_have_webhost">If so, with whom?(ex.webhost)</label></div>
                <div class="col-md-6 text-start"><input type="text" id="who_have_webhost" name="who_have_webhost" placeholder=""></div>
          </div>
          <!-- single question end -->
   <!-- Site questions end -->  
            </section>
            <!-- Blog information start -->
            <section class="border-2 border-bottom border-dark py-3">
              <div class="fs-2 fw-bold py-3">Blog Information</div>
             <!-- single question start -->
             <div class="py-2 row form-group fs-4">
                    <div class="col-md-6 fw-normal "><label for="have_blog">Do youhave a currentblog?</label></div>
                    <div class="col-md-6 text-start form-group"><label class="input-radio">Yes
                      <input type="radio" name="have_blog" value="Yes">
                      <span class="checkmark"></span>
                    </label>
                    <label class="input-radio">No
                      <input type="radio" name="have_blog" value="No">
                      <span class="checkmark"></span>
                    </label>
                  </label>
                  <label class="input-radio">Not Sure
                    <input type="radio" name="have_blog" value="Not Sure">
                    <span class="checkmark"></span>
                  </label></div>
              </div>
              <!-- single question end -->
               <!-- single question start -->
               <div class="py-2 row form-group fs-4">
                <div class="col-md-6 fw-normal "><label for="using_platform">If so, what plat form is it using? (Ex:
                  WordPress,Blogger)</label></div>
                <div class="col-md-6 text-start"><input type="text" id="using_platform" name="using_platform" placeholder=""></div>
          </div>
          <!-- single question end -->
                        <!-- single question start -->
                        <div class="py-2 row form-group fs-4">
                    <div class="col-md-6 fw-normal "><label for="have_newsletter">Do you currently use an email
newsletter /marketing service?
</label></div>
                    <div class="col-md-6 text-start form-group"><label class="input-radio">Yes
                      <input type="radio" name="have_newsletter" value="Yes">
                      <span class="checkmark"></span>
                    </label>
                    <label class="input-radio">No
                      <input type="radio" name="have_newsletter" value="No">
                      <span class="checkmark"></span>
                    </label>
                  </label>
                  <label class="input-radio">Not Sure
                    <input type="radio" name="have_newsletter" value="Not Sure">
                    <span class="checkmark"></span>
                  </label></div>
              </div>
              <!-- single question end -->
        <!-- single question start -->
          <div class="py-2 row form-group fs-4">
            <div class="col-md-6 fw-normal "><label for="you_want_newsletter">If not, do you want an email
newsletter hereafter?</label></div>
                    <div class="col-md-6 text-start form-group"><label class="input-radio">Yes
                      <input type="radio" name="you_want_newsletter" value="Yes">
                      <span class="checkmark"></span>
                    </label>
                    <label class="input-radio">No
                      <input type="radio" name="you_want_newsletter" value="No">
                      <span class="checkmark"></span>
                    </label>
                  </label>
                  <label class="input-radio">Not Sure
                    <input type="radio" name="you_want_newsletter" value="Not Sure">
                    <span class="checkmark"></span>
                  </label>
                </div>
              </div>
              <!-- single question end -->
              <!-- single question start -->
                  <div class="py-2 row form-group fs-4">
                    <div class="col-md-6 fw-normal "><label for="participate_socialmedia">Do you participate in social media?
                    </label></div>
                    <div class="col-md-6 text-start form-group"><label class="input-radio">Facebook
                      <input type="checkbox" name="participate_socialmedia[]" value="Facebook">
                      <span class="checkmark"></span>
                    </label>
                    <label class="input-radio">Instagram
                      <input type="checkbox" name="participate_socialmedia[]" value="Instagram">
                      <span class="checkmark"></span>
                    </label>
                  </label>
                  <label class="input-radio">LinkedIn 
                    <input type="checkbox" name="participate_socialmedia[]" value="LinkedIn">
                    <span class="checkmark"></span>
                  </label>
                  <label class="input-radio">Twitter
                    <input type="checkbox" name="participate_socialmedia[]" value="Twitter">
                    <span class="checkmark"></span>
                  </label>
                  <label class="input-radio">Youtube
                    <input type="checkbox" name="participate_socialmedia[]" value="Youtube">
                    <span class="checkmark"></span>
                  </label>
                  <label class="input-radio">Not Sure
                    <input type="checkbox" name="participate_socialmedia[]" value="Not Sure">
                    <span class="checkmark"></span>
                  </label>
                </div>
              </div>
              <!-- single question end -->

              </section>
               <!-- Blog information end -->
                 <!-- Design information start -->
            <section class="border-2 border-bottom border-dark py-3">
              <div class="fs-2 fw-bold py-3">Design and Look</div>
                     <!-- single question start -->
          <div class="py-2 row form-group fs-4">
            <div class="col-md-6 fw-normal "><label for="have_logo">Do you have a business logo? </label></div>
                    <div class="col-md-6 text-start form-group"><label class="input-radio">Yes
                      <input type="radio" name="have_logo" value="Yes">
                      <span class="checkmark"></span>
                    </label>
                    <label class="input-radio">No
                      <input type="radio" name="have_logo" value="No">
                      <span class="checkmark"></span>
                    </label>
                  </label>
                  <label class="input-radio">Not Sure
                    <input type="radio" name="have_logo" value="Not Sure">
                    <span class="checkmark"></span>
                  </label>
                </div>
              </div>
              <!-- single question end -->
        <!-- single question start -->
        <div class="py-2 row form-group fs-4">
            <div class="col-md-6 fw-normal "><label for="create_logo">If not,would you like us to create one for you ($150)?</label></div>
                    <div class="col-md-6 text-start form-group"><label class="input-radio">Yes
                      <input type="radio" name="create_logo" value="Yes">
                      <span class="checkmark"></span>
                    </label>
                    <label class="input-radio">No
                      <input type="radio" name="create_logo" value="No">
                      <span class="checkmark"></span>
                    </label>
                  </label>
                  <label class="input-radio">Not Sure
                    <input type="radio" name="create_logo" value="Not Sure">
                    <span class="checkmark"></span>
                  </label>
                </div>
              </div>
              <!-- single question end -->
  <!-- single question start -->
  <div class="py-2 row form-group fs-4">
                  <div class="col-md-6 fw-normal "><label for="like_specified_color">Are there any specific colors you’d like used on your website?</label></div>
                    <div class="col-md-6 text-start"><textarea name="like_specified_color" id="like_specified_color" rows="3" cols="28"></textarea> </div>
                </div>
                <!-- single question end -->
                   <!-- single question start -->
                <div class="py-2 row form-group fs-4">
                  <div class="col-md-6 fw-normal "><label for="dislike_specified_color">Are there any colors you don’t want used on your website? (Ex: similar to a competitor)</label></div>
                    <div class="col-md-6 text-start"><textarea name="dislike_specified_color" id="dislike_specified_color" rows="3" cols="28"></textarea> </div>
                </div>
                <!-- single question end -->
                   <!-- single question start -->
                <div class="py-2 row form-group fs-4">
                  <div class="col-md-6 fw-normal "><label for="do_you_like_add_web">What kind of feeling do you want your website to have?</label></div>
                    <div class="col-md-6 text-start"><textarea name="do_you_like_add_web" id="do_you_like_add_web" rows="3" cols="28"></textarea> </div>
                </div>
                <!-- single question end -->
                               <!-- single question start -->
                               <div class="py-2 row form-group fs-4">
                    <div class="col-md-6 fw-normal "><label for="custom_design[]">All our websites are custom designed to your specifications. Please check any of the boxes you think meet your stylistic needs or suggest some of you own.
                    </label></div>
                    <div class="col-md-6 text-start form-group"><label class="input-radio">Corparate
                      <input type="checkbox" name="custom_design[]" value="Corparate">
                      <span class="checkmark"></span>
                    </label>
                    <label class="input-radio">High tech
                      <input type="checkbox" name="custom_design[]" value="High tech">
                      <span class="checkmark"></span>
                    </label>
                  </label>
                  <label class="input-radio">Clean
                    <input type="checkbox" name="custom_design[]" value="Clean">
                    <span class="checkmark"></span>
                  </label>
                  <label class="input-radio">Bold
                    <input type="checkbox" name="custom_design[]" value="Bold">
                    <span class="checkmark"></span>
                  </label>
                  <label class="input-radio">Minimalist
                    <input type="checkbox" name="custom_design[]" value="Minimalist">
                    <span class="checkmark"></span>
                  </label>
                  <label class="input-radio">Whimsical
                    <input type="checkbox" name="custom_design[]" value="Whimsical">
                    <span class="checkmark"></span>
                  </label>
                  <label class="input-radio">Edgy
                    <input type="checkbox" name="custom_design[]" value="Edgy">
                    <span class="checkmark"></span>
                  </label>
                  <label class="input-radio">Fun
                    <input type="checkbox" name="custom_design[]" value="Fun">
                    <span class="checkmark"></span>
                  </label>
                  <label class="input-radio">Masculine
                    <input type="checkbox" name="custom_design[]" value="Masculine">
                    <span class="checkmark"></span>
                  </label>
                  <label class="input-radio">Feminine
                    <input type="checkbox" name="custom_design[]" value="Feminine">
                    <span class="checkmark"></span>
                  </label>
                  <label class="input-radio">Colorful
                    <input type="checkbox" name="custom_design[]" value="Colorful">
                    <span class="checkmark"></span>
                  </label>
                  <label class="input-radio">Natural
                    <input type="checkbox" name="custom_design[]" value="Natural">
                    <span class="checkmark"></span>
                  </label>
                  
                </div>
              </div>
              <!-- single question end -->
              </section>
              <!-- Design information end -->
             
                            <!-- Blog information start -->
            <section class="border-2 border-bottom border-dark py-3">
              <div class="fs-2 fw-bold py-3">Objectives& Content </div>
                                 <!-- single question start -->
                                 <div class="py-2 row form-group fs-4">
                  <div class="col-md-6 fw-normal "><label for="purpose_website">What is the purpose of your website?</label></div>
                    <div class="col-md-6 text-start"><textarea name="purpose_website" id="purpose_website" rows="3" cols="28"></textarea> </div>
                </div>
                <!-- single question end -->
                                    <!-- single question start -->
                <div class="py-2 row form-group fs-4">
                  <div class="col-md-6 fw-normal "><label for="target_audience">Who is your target audience? (Be specific)</label></div>
                    <div class="col-md-6 text-start"><textarea name="target_audience" id="target_audience" rows="3" cols="28"></textarea> </div>
                </div>
                <!-- single question end -->
              <!-- single question start -->
                <div class="py-2 row form-group fs-4">
                  <div class="col-md-6 fw-normal "><label for="main_call_action">What should the main call to action on the home page be? (Ex: Call Now, SignUp for a Newsletter) </label></div>
                    <div class="col-md-6 text-start"><textarea name="main_call_action" id="main_call_action" rows="3" cols="28"></textarea> </div>
                </div>
                <!-- single question end -->
                 <!-- single question start -->
                   <div class="py-2 row form-group fs-4">
                    <div class="col-md-6 fw-normal "><label for="need_pages[]">Which pages do you think your website will need?</label></div>
                    <div class="col-md-6 text-start form-group"><label class="input-radio">Home
                      <input type="checkbox" name="need_pages[]" value="Home">
                      <span class="checkmark"></span>
                    </label>
                    <label class="input-radio">Services
                      <input type="checkbox" name="need_pages[]" value="Services">
                      <span class="checkmark"></span>
                    </label>
                  </label>
                  <label class="input-radio">About
                    <input type="checkbox" name="need_pages[]" value="About">
                    <span class="checkmark"></span>
                  </label>
                  <label class="input-radio">Contact
                    <input type="checkbox" name="need_pages[]" value="Contact">
                    <span class="checkmark"></span>
                  </label>
                  <label class="input-radio">Blog
                    <input type="checkbox" name="need_pages[]" value="Blog">
                    <span class="checkmark"></span>
                  </label>
                  <label class="input-radio">Portfolio
                    <input type="checkbox" name="need_pages[]" value="Portfolio">
                    <span class="checkmark"></span>
                  </label>
                  <label class="input-radio">News
                    <input type="checkbox" name="need_pages[]" value="News">
                    <span class="checkmark"></span>
                  </label>
                  <label class="input-radio">Insights
                    <input type="checkbox" name="need_pages[]" value="Natural">
                    <span class="checkmark"></span>
                  </label>
                  <label class="input-radio">Gallery
                    <input type="checkbox" name="need_pages[]" value="Gallery">
                    <span class="checkmark"></span>
                  </label>
                  <label class="input-radio">Terms
                    <input type="checkbox" name="need_pages[]" value="Feminine">
                    <span class="checkmark"></span>
                  </label>
                  <label class="input-radio">Products
                    <input type="checkbox" name="need_pages[]" value="Products">
                    <span class="checkmark"></span>
                  </label>
                  <label class="input-radio">Projects
                    <input type="checkbox" name="need_pages[]" value="Projects">
                    <span class="checkmark"></span>
                  </label>
                </div>
              </div>
              <!-- single question end -->
                       <!-- single question start -->
        <div class="py-2 row form-group fs-4">
            <div class="col-md-6 fw-normal"><label for="you_providing_content">Will you be providing the content(text) for the website?</label></div>
                    <div class="col-md-6 text-start form-group"><label class="input-radio">Yes
                      <input type="radio" name="you_providing_content" value="Yes">
                      <span class="checkmark"></span>
                    </label>
                    <label class="input-radio">No
                      <input type="radio" name="you_providing_content" value="No">
                      <span class="checkmark"></span>
                    </label>
                  </label>
                  <label class="input-radio">Not Sure
                    <input type="radio" name="you_providing_content" value="Not Sure">
                    <span class="checkmark"></span>
                  </label>
                </div>
              </div>
              <!-- single question end -->
                       <!-- single question start -->
        <div class="py-2 row form-group fs-4">
            <div class="col-md-6 fw-normal "><label for="content_copywrite">If not,would you like us to provide a
 quote for copy writing services? </label></div>
                    <div class="col-md-6 text-start form-group"><label class="input-radio">Yes
                      <input type="radio" name="content_copywrite" value="Yes">
                      <span class="checkmark"></span>
                    </label>
                    <label class="input-radio">No
                      <input type="radio" name="content_copywrite" value="No">
                      <span class="checkmark"></span>
                    </label>
                  </label>
                  <label class="input-radio">Not Sure
                    <input type="radio" name="content_copywrite" value="Not Sure">
                    <span class="checkmark"></span>
                  </label>
                </div>
              </div>
              <!-- single question end -->
                       <!-- single question start -->
        <div class="py-2 row form-group fs-4">
            <div class="col-md-6 fw-normal "><label for="you_providing_images">Will you be providing any images/photos?</label></div>
                    <div class="col-md-6 text-start form-group"><label class="input-radio">Yes
                      <input type="radio" name="you_providing_image" value="Yes">
                      <span class="checkmark"></span>
                    </label>
                    <label class="input-radio">No
                      <input type="radio" name="you_providing_image" value="No">
                      <span class="checkmark"></span>
                    </label>
                  </label>
                  <label class="input-radio">Not Sure
                    <input type="radio" name="you_providing_image" value="Not Sure">
                    <span class="checkmark"></span>
                  </label>
                </div>
              </div>
              <!-- single question end -->
            </section>
            <!-- Design information end -->
             <!--Ecommerce information start  -->
            <section class="border-2 border-bottom border-dark py-3">
              <div class="fs-2 fw-bold py-3">Ecommerce</div>
                                     <!-- single question start -->
        <div class="py-2 row form-group fs-4">
            <div class="col-md-6 fw-normal "><label for="selling_products_your_website">Do you plan on selling productsor services through your website?</label></div>
                    <div class="col-md-6 text-start form-group"><label class="input-radio">Yes
                      <input type="radio" name="selling_products_your_website" value="Yes">
                      <span class="checkmark"></span>
                    </label>
                    <label class="input-radio">No
                      <input type="radio" name="selling_products_your_website" value="No">
                      <span class="checkmark"></span>
                    </label>
                  </label>
                  <label class="input-radio">Not Sure
                    <input type="radio" name="selling_products_your_website" value="Not Sure">
                    <span class="checkmark"></span>
                  </label>
                </div>
              </div>
              <!-- single question end -->
                      <!-- single question start -->
                      <div class="py-2 row form-group fs-4">
                <div class="col-md-6 fw-normal "><label for="type_of_products">If so,what type of products/ services?
                </label></div>
                <div class="col-md-6 text-start"><input type="text" id="type_of_products" name="type_of_products" placeholder=""></div>
          </div>
          <!-- single question end -->
 <!-- single question start -->
                  <div class="py-2 row form-group fs-4">
                <div class="col-md-6 fw-normal "><label for="currently_use_payment_gateway">Do you currently use amerchant account and payment gateway? (Ex:Authorize.net)</label></div>
                <div class="col-md-6 text-start"><input type="text" id="currently_use_payment_gateway" name="currently_use_payment_gateway" placeholder=""></div>
          </div>
          <!-- single question end -->
                </section>
              <!-- Ecommerce information end -->
                            <!--SEO information start  -->
            <section class="border-2 border-bottom border-dark py-3">
              <div class="fs-2 fw-bold py-3">Search Engine Optimization</div>
      <!-- single question start -->
        <div class="py-2 row form-group fs-4">
            <div class="col-md-6 fw-normal "><label for="interested_our_advanced_seo">Are you interested in purchasing our Advanced SEO External Backlink package($250)?</label></div>
                    <div class="col-md-6 text-start form-group"><label class="input-radio">Yes
                      <input type="radio" name="interested_our_advanced_seo" value="Yes">
                      <span class="checkmark"></span>
                    </label>
                    <label class="input-radio">No
                      <input type="radio" name="interested_our_advanced_seo" value="No">
                      <span class="checkmark"></span>
                    </label>
                  </label>
                  <label class="input-radio">Not Sure
                    <input type="radio" name="interested_our_advanced_seo" value="Not Sure">
                    <span class="checkmark"></span>
                  </label>
                </div>
              </div>
              <!-- single question end -->
                     <!-- single question start -->
        <div class="py-2 row form-group fs-4">
            <div class="col-md-6 fw-normal "><label for="getting_monthly_internet_visibility">Are you interested in getting a quote for Monthly Internet Visibility / SEO?</label></div>
                    <div class="col-md-6 text-start form-group"><label class="input-radio">Yes
                      <input type="radio" name="getting_monthly_internet_visibility" value="Yes">
                      <span class="checkmark"></span>
                    </label>
                    <label class="input-radio">No
                      <input type="radio" name="getting_monthly_internet_visibility" value="No">
                      <span class="checkmark"></span>
                    </label>
                  </label>
                  <label class="input-radio">Not Sure
                    <input type="radio" name="getting_monthly_internet_visibility" value="Not Sure">
                    <span class="checkmark"></span>
                  </label>
                </div>
              </div>
              <!-- single question end -->
               </section>
                <!-- SEO information end -->
         <!--Maintanace information start  -->
            <section class="border-2 border-bottom border-dark py-3">
              <div class="fs-2 fw-bold py-3">Maintenance & Updates</div>
                                   <!-- single question start -->
        <div class="py-2 row form-group fs-4">
            <div class="col-md-6 fw-normal "><label for="do_you_want_future_change">Do you want us to handle the maintenance and future changes to your website so you don’t have to? ($30/hour)</label></div>
                    <div class="col-md-6 text-start form-group"><label class="input-radio">Yes
                      <input type="radio" name="do_you_want_future_change" value="Yes">
                      <span class="checkmark"></span>
                    </label>
                    <label class="input-radio">No
                      <input type="radio" name="do_you_want_future_change" value="No">
                      <span class="checkmark"></span>
                    </label>
                  </label>
                  <label class="input-radio">Not Sure
                    <input type="radio" name="do_you_want_future_change" value="Not Sure">
                    <span class="checkmark"></span>
                  </label>
                </div>
              </div>
              <!-- single question end -->
                                    <!-- single question start -->
        <div class="py-2 row form-group fs-4">
            <div class="col-md-6 fw-normal "><label for="often_require_updates">How often would you require updates?</label></div>
                    <div class="col-md-6 text-start form-group"><label class="input-radio">Daily
                      <input type="radio" name="often_require_updates" value="Daily">
                      <span class="checkmark"></span>
                    </label>
                    <label class="input-radio">Weekly
                      <input type="radio" name="often_require_updates" value="Weekly">
                      <span class="checkmark"></span>
                    </label>
                    <label class="input-radio">Monthly
                      <input type="radio" name="often_require_updates" value="Mothly">
                      <span class="checkmark"></span>
                    </label>
                    <label class="input-radio">Yearly
                      <input type="radio" name="often_require_updates" value="Yearly">
                      <span class="checkmark"></span>
                    </label>
                  </label>
                  <label class="input-radio">On-demand
                    <input type="radio" name="often_require_updates" value="On-demand">
                    <span class="checkmark"></span>
                  </label>
                </div>
              </div>
              <!-- single question end -->
                                    <!-- single question start -->
        <div class="py-2 row form-group fs-4">
            <div class="col-md-6 fw-normal "><label for="train_your_employee_updates">Do you require us to train your employee for updates?</label></div>
                    <div class="col-md-6 text-start form-group"><label class="input-radio">Yes
                      <input type="radio" name="train_your_employee_updates" value="Yes">
                      <span class="checkmark"></span>
                    </label>
                    <label class="input-radio">No
                      <input type="radio" name="train_your_employee_updates" value="No">
                      <span class="checkmark"></span>
                    </label>
                  </label>
                  <label class="input-radio">Not Sure
                    <input type="radio" name="train_your_employee_updates" value="Not Sure">
                    <span class="checkmark"></span>
                  </label>
                </div>
              </div>
              <!-- single question end -->
                </section>
         <!--Maintanace information start  -->
         <section class="border-2 border-bottom border-dark py-5">
          <!-- single question start -->
            <div class="py-2 row form-group fs-4">
                  <div class="col-md-6 fw-normal "><label for="tell_us_about_website">What else would you like to tell us about your website?</label></div>
                    <div class="col-md-6 text-start"><textarea name="tell_us_about_website" id="tell_us_about_website" rows="3" cols="28"></textarea> </div>
                </div>
                <!-- single question end -->
                </section>
              <div class="text-center my-3"> <button class=" btn btn-outline-dark border-3 fs-4" type="submit" name="submit" value="Submit">Submit</button></div>
          </div>
      </form>
                </section>
      <?php $mysqli -> close(); } ?>
    
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
