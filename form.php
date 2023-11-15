<?php
session_start();

if (!isset($_SESSION['userid'])) {
  $redirectURL = 'index.php';

  // Redirect the user to the specified URL
  header('Location: ' . $redirectURL);
  exit();
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tenancy Application Form</title>
  <link rel="shortcut icon" href="src/images/icons8-house-64.png" type="image/x-icon">
  <link rel="stylesheet" href="src/css/form.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;1,300&family=Poppins:ital,wght@0,400;0,600;0,700;1,400&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
</head>

<body>
  <div class="container">

    <!-- 1 -->
    <header class="header">
      <div class="wrapper header_position">
        <div class="logo">
          <h1>ToLet</h1>
        </div>
        <div class="account_info">
          <ul>
            <li>Welcome: <?php echo $_SESSION['first_name'] . " " . $_SESSION['last_name']; ?></li>
            <li><button class="button-24" role="button"><a href="logout.php">Logout</a> </button></li>
          </ul>
        </div>
      </div>
    </header>

    <!-- progress -->
    <div class="progress-bar">
      <div class="progress-bar-fill" style="width: 0;"></div>
    </div>


    <!-- progress bar end -->

    <section class="topic">
      <h2>Personal Tenancy Application
      </h2>

      <?php
      // Redirect to thank you page if the form was successfully submitted
      if (isset($_GET['thank_you']) && $_GET['thank_you'] == '1') {
        echo '<div class="iframe"><iframe src="thankyou.html" width="1000" height="700" scrolling="no" frameborder="0"></iframe></div>';
      } else {
        // Display the form if it hasn't been submitted yet
      ?>

        <p>Fill all form field to go to next step</p>
    </section>

    <!-- form -->
    <div class="form">
      <div class="wrapper">

        <!-- Progress bar -->
        <div class="progressbar">
          <div class="progress" id="progress"></div>

          <div class="progress-step progress-step-active" data-title="Property Details"></div>
          <div class="progress-step" data-title="Personal Details"></div>
          <div class="progress-step" data-title="Employment Details"></div>
          <div class="progress-step" data-title="Consent"></div>
        </div>

        <form action="form_process.php" method="post" class="form" id="form1">
          <!-- Progress bar -->

          <!-- Step 1 -->
          <div class="form-step form-step-active box_shadow_form">

            <div class="heading">Section 1 - Property Details</div>

            <div class="formbold-mb-3">
              <label for="section1_address" class="formbold-form-label"> Address </label>
              <input type="text" name="section1_address" placeholder="Address" class="formbold-form-input formbold-mb-3" required />
            </div>

            <div class="formbold-input-flex">
              <div>
                <label for="section1_postcode" class="formbold-form-label"> Postcode </label>
                <input type="text" name="section1_postcode" class="formbold-form-input" />
              </div>
              <div>
                <label for="section1_tenancy_term" class="formbold-form-label"> Tenancy term </label>
                <input type="text" name="section1_tenancy_term" class="formbold-form-input" />
              </div>
            </div>

            <div class="formbold-input-flex">
              <div>
                <label for="section1_proposed_move" class="formbold-form-label"> Proposed move in date (DD/MM/YY)</label>
                <input type="date" name="section1_proposed_move" class="formbold-form-input" />
              </div>
              <div>
                <label for="section1_monthly_rental" class="formbold-form-label"> Monthly rental </label>
                <input type="text" name="section1_monthly_rental" placeholder="£" class="formbold-form-input" />
              </div>
            </div>

            <div class="formbold-input-flex">
              <div>
                <label for="section1_rent_share" class="formbold-form-label"> Rent Share for applicant</label>
                <input type="text" name="section1_rent_share" placeholder="£" class="formbold-form-input" />
              </div>
              <div>
                <label for="section1_nos_applicants" class="formbold-form-label"> Number of applicants </label>
                <input type="text" name="section1_nos_applicants" placeholder="Number of applicants" class="formbold-form-input" />
              </div>
            </div>

            <div class="formbold-input-flex">
              <div>
                <label for="section1_smoke" class="formbold-form-label"> Do you smoke? </label>

                <div class="formbold-radio-flex">
                  <div class="formbold-radio-group">
                    <label class="formbold-radio-label">
                      <input class="formbold-input-radio" type="radio" name="section1_smoke" value="Yes">
                      Yes
                      <span class="formbold-radio-checkmark"></span>
                    </label>
                  </div>

                  <div class="formbold-radio-group">
                    <label class="formbold-radio-label">
                      <input class="formbold-input-radio" type="radio" name="section1_smoke" value="No">
                      No
                      <span class="formbold-radio-checkmark"></span>
                    </label>
                  </div>
                </div>
              </div>

              <div>
                <label for="section1_pet" class="formbold-form-label"> Do you have pets?</label>

                <div class="formbold-radio-flex">
                  <div class="formbold-radio-group">
                    <label class="formbold-radio-label">
                      <input class="formbold-input-radio" type="radio" name="section1_pet" value="Yes">
                      Yes
                      <span class="formbold-radio-checkmark"></span>
                    </label>
                  </div>

                  <div class="formbold-radio-group">
                    <label class="formbold-radio-label">
                      <input class="formbold-input-radio" type="radio" name="section1_pet" value="No">
                      No
                      <span class="formbold-radio-checkmark"></span>
                    </label>
                  </div>
                </div>
              </div>

            </div>


            <div class="formbold-mb-3">
              <label for="section1_specify" class="formbold-form-label"> If Yes please specify </label>
              <input type="text" name="section1_specify" placeholder="If Yes please specify" class="formbold-form-input formbold-mb-3" />
            </div>


            <div class="btn-start">
              <a href="#" class="btn btn-next width-50 ml-auto button_next"><span>Next</span> <img src="src/images/icons8-forward-48.png" alt=""></a>
            </div>
          </div>

          <!--Step 2 -->
          <div class="form-step box_shadow_form">

            <div class="heading">Section 2 - Tenant’s Personal Details</div>

            <div class="formbold-input-flex">
              <div>
                <label for="section2_firstname" class="formbold-form-label"> First Name </label>
                <input type="text" name="section2_firstname" placeholder="Your first name" class="formbold-form-input" />
              </div>

              <div>
                <label for="section2_middle_name" class="formbold-form-label"> Middle Name(s) </label>
                <input type="text" name="section2_middle_name" placeholder="Your middle name" class="formbold-form-input" />
              </div>

              <div>
                <label for="section2_lastname" class="formbold-form-label"> Last Name </label>
                <input type="text" name="section2_lastname" placeholder="Your last name" class="formbold-form-input" />
              </div>
            </div>

            <div class="formbold-input-flex">
              <div>
                <label for="section2_dob" class="formbold-form-label"> Date of Birth (DD/MM/YY)</label>
                <input type="date" name="section2_dob" class="formbold-form-input" />
              </div>
              <div>
                <label for="section2_martal_status" class="formbold-form-label"> Marital status </label>
                <input type="text" name="section2_martal_status" placeholder="Marital status" class="formbold-form-input" />
              </div>
            </div>

            <div class="formbold-input-flex">
              <div>
                <label for="section2_nationality" class="formbold-form-label"> Nationality </label>
                <input type="text" name="section2_nationality" placeholder="Nationality" class="formbold-form-input" />
              </div>
              <div>
                <label for="section2_ni_number" class="formbold-form-label"> NI number </label>
                <input type="text" name="section2_ni_number" placeholder="NI number" class="formbold-form-input" />
              </div>
            </div>

            <div class="formbold-input-flex">
              <div>
                <label for="section2_email" class="formbold-form-label"> Email address </label>
                <input type="email" name="section2_email" id="email" placeholder="email@mail.com" class="formbold-form-input" />
              </div>
              <div>
                <label for="section2_phone" class="formbold-form-label"> Phone number </label>
                <input type="text" name="section2_phone" id="phone" placeholder="+44" class="formbold-form-input" />
              </div>
            </div>

            <div class="formbold-mb-3">
              <label for="section2_another_name" class="formbold-form-label"> If you have even been known by another name, please confirm it here </label>

              <input type="text" name="section2_another_name" placeholder="" class="formbold-form-input formbold-mb-3" />
            </div>

            <h5>Present Address</h5>

            <div class="formbold-mb-3">
              <label for="section2_present_address" class="formbold-form-label"> Address </label>
              <input type="text" name="section2_present_address" placeholder="Address" class="formbold-form-input formbold-mb-3" />
            </div>

            <div class="formbold-input-flex">
              <div>
                <label for="section2_postcode" class="formbold-form-label"> Postcode </label>
                <input type="text" name="section2_postcode" placeholder="Postcode" class="formbold-form-input" />
              </div>

              <div>
                <label for="section2_years" class="formbold-form-label"> Time at this address (Years) </label>
                <input type="text" name="section2_years" placeholder="Years" class="formbold-form-input" />
              </div>

              <div>
                <label for="section2_months" class="formbold-form-label">Time at this address (Months) </label>
                <input type="text" name="section2_months" placeholder="Months" class="formbold-form-input" />
              </div>
            </div>

            <div class="formbold-input-flex">
              <div>
                <label for="section2_address_status" class="formbold-form-label"> Address status (please tick one)</label>

                <div class="formbold-radio-flex">
                  <div class="formbold-radio-group">
                    <label class="formbold-radio-label">
                      <input class="formbold-input-radio" type="radio" name="section2_address_status" value="Owner">
                      Owner
                      <span class="formbold-radio-checkmark"></span>
                    </label>
                  </div>

                  <div class="formbold-radio-group">
                    <label class="formbold-radio-label">
                      <input class="formbold-input-radio" type="radio" name="section2_address_status" value="Rented">
                      Rented
                      <span class="formbold-radio-checkmark"></span>
                    </label>
                  </div>

                  <div class="formbold-radio-group">
                    <label class="formbold-radio-label">
                      <input class="formbold-input-radio" type="radio" name="section2_address_status" value="Living with Parents/ Friends">
                      Living with Parents/ Friends
                      <span class="formbold-radio-checkmark"></span>
                    </label>
                  </div>

                </div>
              </div>

              <div>

              </div>
            </div>

            <h5 class="mg_bt">Landlord / Letting Agent Details</h5>

            <div class="formbold-input-flex">
              <div>
                <label for="section2_landlord_name" class="formbold-form-label"> Name of Letting Agent/ Landlord </label>
                <input type="text" name="section2_landlord_name" placeholder="Name of Letting Agent/ Landlord" class="formbold-form-input" />
              </div>
              <div>
                <label for="section2_landlord_email" class="formbold-form-label"> Email Address </label>
                <input type="text" name="section2_landlord_email" placeholder="Email Address" class="formbold-form-input" />
              </div>
            </div>

            <div class="formbold-mb-3">
              <label for="section2_landlord_address" class="formbold-form-label"> Address </label>

              <input type="text" name="section2_landlord_address" placeholder="Street address" class="formbold-form-input formbold-mb-3" />
            </div>


            <div class="formbold-input-flex">
              <div>
                <label for="section2_landlord_postcode" class="formbold-form-label"> Postcode </label>
                <input type="text" name="section2_landlord_postcode" placeholder="Postcode" class="formbold-form-input" />
              </div>

              <div>
                <label for="section2_landlord_phone" class="formbold-form-label"> Phone Number </label>
                <input type="text" name="section2_landlord_phone" placeholder="Phone Number" class="formbold-form-input" />
              </div>
            </div>

            <div class="btns-group">
              <a href="#" class="btn btn-prev button_prev"> <img src="src/images/previous.png" alt="Previous" class="prenextBtn"> <span>Previous</span></a>
              <a href="#" class="btn btn-next width-50 ml-auto button_next"><span>Next</span> <img src="src/images/icons8-forward-48.png" alt="Next"></a>
            </div>
          </div>

          <!--Step 3 -->
          <div class="form-step box_shadow_form">

            <div class="heading">Section 3 - Employment Details</div>

            <div class="formbold-input-radio-wrapper">
              <div>
                <label for="section3_employment_status" class="formbold-form-label"> Current employment status (please tick one)</label>

                <div class="formbold-radio-flex">
                  <div class="formbold-radio-group">
                    <label class="formbold-radio-label">
                      <input class="formbold-input-radio" type="radio" name="section3_employment_status" value="Employed (FT)">
                      Employed (FT)
                      <span class="formbold-radio-checkmark"></span>
                    </label>
                  </div>

                  <div class="formbold-radio-group">
                    <label class="formbold-radio-label">
                      <input class="formbold-input-radio" type="radio" name="section3_employment_status" value="Employed (PT) ">
                      Employed (PT)
                      <span class="formbold-radio-checkmark"></span>
                    </label>
                  </div>

                  <div class="formbold-radio-group">
                    <label class="formbold-radio-label">
                      <input class="formbold-input-radio" type="radio" name="section3_employment_status" value="Unemployed">
                      Unemployed
                      <span class="formbold-radio-checkmark"></span>
                    </label>
                  </div>

                  <div class="formbold-radio-group">
                    <label class="formbold-radio-label">
                      <input class="formbold-input-radio" type="radio" name="section3_employment_status" value="Student">
                      Student
                      <span class="formbold-radio-checkmark"></span>
                    </label>
                  </div>

                  <div class="formbold-radio-group">
                    <label class="formbold-radio-label">
                      <input class="formbold-input-radio" type="radio" name="section3_employment_status" value="Self-Employed">
                      Self-Employed
                      <span class="formbold-radio-checkmark"></span>
                    </label>
                  </div>

                  <div class="formbold-radio-group">
                    <label class="formbold-radio-label">
                      <input class="formbold-input-radio" type="radio" name="section3_employment_status" value="Agency Worker">
                      Agency Worker
                      <span class="formbold-radio-checkmark"></span>
                    </label>
                  </div>

                  <div class="formbold-radio-group">
                    <label class="formbold-radio-label">
                      <input class="formbold-input-radio" type="radio" name="section3_employment_status" value="Independent Means">
                      Independent Means
                      <span class="formbold-radio-checkmark"></span>
                    </label>
                  </div>

                  <div class="formbold-radio-group">
                    <label class="formbold-radio-label">
                      <input class="formbold-input-radio" type="radio" name="section3_employment_status" value="Temp Worker">
                      Temp Worker
                      <span class="formbold-radio-checkmark"></span>
                    </label>
                  </div>

                </div>
              </div>
            </div>


            <div class="formbold-input-flex">
              <div>
                <label for="section3_company_name" class="formbold-form-label"> Name of Company</label>
                <input type="text" name="section3_company_name" placeholder="Name of Company" class="formbold-form-input" />
              </div>
              <div>
                <label for="section3_position" class="formbold-form-label"> Position </label>
                <input type="text" name="section3_position" placeholder="Position" class="formbold-form-input" />
              </div>
            </div>

            <div class="formbold-input-flex">
              <div>
                <label for="section3_company_number" class="formbold-form-label"> If Company Director, Company Number </label>
                <input type="text" name="section3_company_number" placeholder="If Company Director, Company Number" class="formbold-form-input" />
              </div>

              <div>
                <label for="section3_job_time" class="formbold-form-label"> .</label>

                <div class="formbold-radio-flex">
                  <div class="formbold-radio-group">
                    <label class="formbold-radio-label">
                      <input class="formbold-input-radio" type="radio" name="section3_job_time" value="Full Time">
                      Full Time
                      <span class="formbold-radio-checkmark"></span>
                    </label>
                  </div>

                  <div class="formbold-radio-group">
                    <label class="formbold-radio-label">
                      <input class="formbold-input-radio" type="radio" name="section3_job_time" value="Part Time">
                      Part Time
                      <span class="formbold-radio-checkmark"></span>
                    </label>
                  </div>
                </div>
              </div>

            </div>

            <div class="formbold-input-flex">
              <div>
                <label for="section3_payroll" class="formbold-form-label"> Payroll number </label>
                <input type="text" name="section3_payroll" placeholder="Payroll number" class="formbold-form-input" />
              </div>
              <div>
                <label for="section3_start_date" class="formbold-form-label"> Start date (DD/MM/YY)</label>
                <input type="date" name="section3_start_date" class="formbold-form-input" />
              </div>
              <div>
                <label for="section3_salary" class="formbold-form-label"> Gross salary </label>
                <input type="text" name="section3_salary" placeholder="Gross salary" class="formbold-form-input" />
              </div>
            </div>

            <div class="formbold-mb-3">
              <label for="section3_address" class="formbold-form-label"> Address </label>
              <input type="text" name="section3_address" placeholder="Address" class="formbold-form-input formbold-mb-3" />
            </div>

            <div class="formbold-input-flex">
              <div>
                <label for="section3_postcode" class="formbold-form-label"> Postcode </label>
                <input type="text" name="section3_postcode" placeholder="Postcode" class="formbold-form-input" />
              </div>
              <div>
                <label for="section3_reference_info" class="formbold-form-label"> Reference contact name and position</label>
                <input type="text" name="section3_reference_info" class="formbold-form-input" />
              </div>
              <div>
                <label for="section3_number" class="formbold-form-label"> Contact number </label>
                <input type="text" name="section3_number" placeholder="Contact number" class="formbold-form-input" />
              </div>
            </div>

            <div class="btns-group">
              <a href="#" class="btn btn-prev button_prev"> <img src="src/images/previous.png" alt="Previous" class="prenextBtn"> <span>Previous</span></a>
              <a href="#" class="btn btn-next width-50 ml-auto button_next"><span>Next</span> <img src="src/images/icons8-forward-48.png" alt=""></a>
            </div>
          </div>

          <!--Step 4 -->
          <div class="form-step box_shadow_form">

            <div class="heading">Section 4 - Prior Consent</div>

            <div class="formbold-mb-3">
              <div class="formbold-form-label">I agree that if the tenancy proceeds the How to Rent Guide and other important Tenancy documents may be served on me by electronic means.
              </div>
            </div>
            <!--  -->
            <div class="formbold-checkbox-wrapper">
              <label for="section4_agree" class="formbold-checkbox-label">
                <div class="formbold-relative">
                  <input type="checkbox" class="formbold-input-checkbox" name="section4_agree" />
                  <div class="formbold-checkbox-inner">
                    <span class="formbold-opacity-0">
                      <svg width="11" height="8" viewBox="0 0 11 8" fill="none" class="formbold-stroke-current">
                        <path d="M10.0915 0.951972L10.0867 0.946075L10.0813 0.940568C9.90076 0.753564 9.61034 0.753146 9.42927 0.939309L4.16201 6.22962L1.58507 3.63469C1.40401 3.44841 1.11351 3.44879 0.932892 3.63584C0.755703 3.81933 0.755703 4.10875 0.932892 4.29224L0.932878 4.29225L0.934851 4.29424L3.58046 6.95832C3.73676 7.11955 3.94983 7.2 4.1473 7.2C4.36196 7.2 4.55963 7.11773 4.71406 6.9584L10.0468 1.60234C10.2436 1.4199 10.2421 1.1339 10.0915 0.951972ZM4.2327 6.30081L4.2317 6.2998C4.23206 6.30015 4.23237 6.30049 4.23269 6.30082L4.2327 6.30081Z" stroke-width="0.4"></path>
                      </svg>
                    </span>
                  </div>
                </div>
                Please tick if you agree.
              </label>
            </div><br>

            <h5>Declaration</h5>
            <div class="formbold-mb-3">
              <div for="address" class="formbold-form-label">I understand that providing false information may lead to a tenancy being refused or early termination of any subsequent tenancy agreement.
                Northwood may use a third party referencing agent, if so you agree to being contacted by that agency, Northwood will make you aware of that company if
                used.
                Northwood or their selected third party referencing agents will hold your data securely and only use it with regard to the referencing for this tenancy
                application and future tenancy.<br>
                I have read and agree to be bound by the above terms.
              </div>
            </div>

            <h5>Signature</h5>
            <div class="formbold-mb-3">
              <div class="formbold-form-label">I hereby give my consent for any person or organisation to furnish Northwood with whatever information they require in relation to my application.
              </div>
            </div>

            <div class="formbold-input-flex">
              <div>
                <label for="section4_print_name" class="formbold-form-label"> Print Name </label>
                <input type="text" name="section4_print_name" placeholder="Name" class="formbold-form-input" />
              </div>
              <div>
                <label for="section4_date" class="formbold-form-label"> Date (DD/MM/YY)</label>
                <input type="date" name="section4_date" class="formbold-form-input" />
              </div>

            </div>

            <div class="btns-group">
              <a href="#" class="btn btn-prev button_prev"> <img src="src/images/previous.png" alt="Previous" class="prenextBtn"> <span>Previous</span></a>
              <button type="submit" form="form1" value="Submit" class="btn button_next">Submit</button>
            </div>
          </div>


        </form>

      <?php } ?>
      </div>
    </div>
    <!-- form end -->

    <footer>
      <div class="wrapper">
        <p class="footer_p">&copy; 2023 Designed and Developed by Stephen Ijeh.</p>
      </div>
    </footer>

  </div>

  <script src="src/js/form.js" defer></script>
</body>

</html>