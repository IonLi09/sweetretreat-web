<?php include 'inc/header.php'?>

<?php
  $name = $dob = $address = $city = $state = $zip = $tel = $date= $email = $eligible = $vet = $bgCheck = $position = $startDate = $desiredPay = $timeAvailable = $employmentType = $schoolName = $schoolLoc = $schoolYears = $schoolDegree = $employmentHist = '';

  $nameErr = $dobErr = $addressErr = $cityErr = $stateErr = $zipErr = $telErr = $date = $emailErr = $eligibleErr = $vetErr = $bgCheckErr = $positionErr = $startDateErr = $desiredPayErr = $timeAvailableErr = $employmentTypeErr = $schoolNameErr = $schoolLocErr = $schoolYearsErr = $schoolDegreeErr = $employmentHistErr = '';

  if (isset($_POST['submit'])) {
    if (empty($_POST['name'])) {
      $nameErr = 'Name is required';
    } else {
      $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }
    if (empty($_POST['dob'])) {
      $dobErr = 'Date of birth is required';
    } else {
      $dob = filter_input(INPUT_POST, 'dob', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }
    if (empty($_POST['address'])) {
      $addressErr = 'Address is required';
    } else {
      $address = filter_input(INPUT_POST, 'address', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }
    if (empty($_POST['city'])) {
      $cityErr = 'City is required';
    } else {
      $city = filter_input(INPUT_POST, 'city', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }
    if (empty($_POST['state'])) {
      $stateErr = 'State is required';
    } else {
      $state = filter_input(INPUT_POST, 'state', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }
    if (empty($_POST['zip'])) {
      $zipErr = 'Zip code is required';
    } else {
      $zip = filter_input(INPUT_POST, 'zip', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }
    if (empty($_POST['tel'])) {
      $telErr = 'Phone is required';
    } else {
      $tel = filter_input(INPUT_POST, 'tel', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }
    if (empty($_POST['date'])) {
      $dateErr = 'Date is required';
    } else {
      $date = filter_input(INPUT_POST, 'date', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }
    if (empty($_POST['email'])) {
      $emailErr = 'Email is required';
    } else {
      $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    }
    if (empty($_POST['eligible'])) {
      $eligibleErr = 'This is required';
    } else {
      $eligible = filter_input(INPUT_POST, 'eligible', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }
    if (empty($_POST['vet'])) {
      $vetErr = 'This is required';
    } else {
      $vet = filter_input(INPUT_POST, 'vet', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }
    if (empty($_POST['bgCheck'])) {
      $bgCheckErr = 'This is required';
    } else {
      $bgCheck = filter_input(INPUT_POST, 'bgCheck', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }
    if (empty($_POST['position'])) {
      $positionErr = 'Position is required';
    } else {
      $position = filter_input(INPUT_POST, 'position', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }
    if (empty($_POST['startDate'])) {
      $startDateErr = 'Start date is required';
    } else {
      $startDate = filter_input(INPUT_POST, 'startDate', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }
    if (empty($_POST['desiredPay'])) {
      $desiredPayErr = 'Desired pay is required';
    } else {
      $desiredPay = filter_input(INPUT_POST, 'desiredPay', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }
    if (empty($_POST['timeAvailable'])) {
      $timeAvailableErr = 'Time available is required';
    } else {
      $timeAvailable = filter_input(INPUT_POST, 'timeAvailable', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }
    if (empty($_POST['employmentType'])) {
      $employmentTypeErr = 'Employment type is required';
    } else {
      $employmentType = filter_input(INPUT_POST, 'employmentType', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }
    if (empty($_POST['schoolName'])) {
      $schoolNameErr = 'School name is required';
    } else {
      $schoolName = filter_input(INPUT_POST, 'schoolName', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }
    if (empty($_POST['schoolLoc'])) {
      $schoolLocErr = 'School location is required';
    } else {
      $schoolLoc = filter_input(INPUT_POST, 'schoolLoc', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }
    if (empty($_POST['schoolYears'])) {
      $schoolYearsErr = 'School years attended is required';
    } else {
      $schoolYears = filter_input(INPUT_POST, 'schoolYears', FILTER_SANITIZE_NUMBER_INT);
    }
    if (empty($_POST['schoolDegree'])) {
      $schoolDegreeErr = 'School degree is required';
    } else {
      $schoolDegree = filter_input(INPUT_POST, 'schoolDegree', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }
    if (empty($_POST['employmentHist'])) {
      $employmentHistErr = 'Employment history is required';
    } else {
      $employmentHist = filter_input(INPUT_POST, 'employmentHist', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }

    // insert into database
    if (empty($nameErr) && empty($dobErr) && empty($addressErr) && empty($cityErr) && empty($stateErr) && empty($zipErr) && empty($telErr) && empty($dateErr) && empty($emailErr) && empty($eligibleErr) && empty($vetErr) && empty($bgCheckErr) && empty($positionErr) && empty($startDateErr) && empty($desiredPayErr) && empty($timeAvailableErr) && empty($employmentTypeErr) && empty($schoolNameErr) && empty($schoolLocErr) && empty($schoolYearsErr) && empty($schoolDegreeErr) && empty($employmentHistErr)) {
      $sql = "INSERT INTO applications (name, dob, address, city, state, zip, tel, date, email, eligible, vet, bgCheck, position, startDate, desiredPay, timeAvailable, employmentType, schoolName, schoolLoc, schoolYears, schoolDegree, employmentHist) VALUES ('$name', '$dob', '$address', '$city', '$state', '$zip', '$tel', '$date', '$email', '$eligible', '$vet', '$bgCheck', '$position', '$startDate', '$desiredPay', '$timeAvailable', '$employmentType', '$schoolName', '$schoolLoc', '$schoolYears', '$schoolDegree', '$employmentHist')";

      if (mysqli_query($conn, $sql)) {
        header('Location: application-success.php');
      } else {
        echo 'Error: ' . mysqli_error($conn);
      }
    }
  }
?>

<nav class="section-nav">
  <div class="nav-bar">
    <a href="index.php" class="logo-link"
      ><img
        src="img/sweetretreat-logo.png"
        class="nav-logo"
        alt="Sweet Retreat company logo"
      />
    </a>
    <div class="nav-links">
      <a href="menu.php" class="nav-link">MENU</a>
      <a href="index.php#description-link" class="nav-link">WHAT & HOW</a>
      <a href="index.php#story-link" class="nav-link">ABOUT US</a>
      <a href="index.php#location-link" class="nav-link nav-link-location"
        >LOCATION</a
      >
      <a href="employment.php" class="nav-link">EMPLOYMENT</a>
      <a
        href="https://www.doordash.com/store/sweet-retreat-alcoa-1856628/"
        target="_blank"
        class="nav-link nav-link-order"
        >ORDER ONLINE</a
      >
    </div>
    <button class="btn-mobile-nav">
      <ion-icon name="menu-outline" class="btn-mobile-icon"></ion-icon>
      <ion-icon name="close-outline" class="btn-mobile-icon"></ion-icon>
    </button>
  </div>
</nav>
<section class='section-employment'>
    <div class='story'>
      <h1 class='heading-primary'>Join the Retreat!</h1>
      <div class='employment-area row'>
        <h2 class='description-text col'>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam ut perspiciatis illo, obcaecati ducimus ad dolorum praesentium magnam aperiam expedita. Ea praesentium eveniet alias sit molestias. Mollitia, amet dolore? Exercitationem. Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam ut perspiciatis illo, obcaecati ducimus ad dolorum praesentium magnam aperiam expedita. Ea praesentium eveniet alias sit molestias. Mollitia, amet dolore? Exercitationem.Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam ut perspiciatis illo, obcaecati ducimus ad dolorum praesentium magnam aperiam expedita. Ea praesentium eveniet alias sit molestias. Mollitia, amet dolore? Exercitationem. Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam ut perspiciatis illo, obcaecati ducimus ad dolorum praesentium magnam aperiam expedita. Ea praesentium eveniet alias sit molestias. Mollitia, amet dolore? Exercitationem.Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam ut perspiciatis illo, obcaecati ducimus ad dolorum praesentium magnam aperiam expedita. Ea praesentium eveniet alias sit molestias. Mollitia, amet dolore? Exercitationem. Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam ut perspiciatis illo, obcaecati ducimus ad dolorum praesentium magnam aperiam expedita. Ea praesentium eveniet alias sit molestias. Mollitia, amet dolore? Exercitationem.</h2>
        <form class='employment-form col' enctype="multipart/form-data" action='<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>' method='POST'>
          <h2 class='heading-secondary mb-2'>Personal Information</h2>
          <div class='form-row mb-4'>
            <div class='form-group col-md-6'>
              <label for='name'>Name:</label>
              <input class='form-control <?php echo !$nameErr?: 'is-invalid'; ?>' id='name' type='text' name='name' placeholder='First Last'>
              <div class="invalid-feedback">
                <?php echo $nameErr; ?>
              </div>
            </div>
            <div class='form-group col-md-6'>
              <label for='dob'>Date of Birth:</label>
              <input class='form-control <?php echo !$dobErr?: 'is-invalid'; ?>' id='dob' type='date' name='dob' placeholder=''>
              <div class="invalid-feedback">
                <?php echo $dobErr; ?>
              </div>
            </div>
          </div>
          <div class="form-row mb-4">
            <div class="form-group col-md-6">
              <label for='address'>Address:</label>
              <input class='form-control <?php echo !$addressErr?: 'is-invalid'; ?>' id='address' type='text' name='address' placeholder='Address'>
              <div class="invalid-feedback">
                <?php echo $addressErr; ?>
              </div>
            </div>
            <div class="form-group col-md-6">
              <label for='city'>City:</label>
              <input class='form-control <?php echo !$cityErr?: 'is-invalid'; ?>' id='city' type='text' name='city' placeholder='City'>
              <div class="invalid-feedback">
                <?php echo $cityErr; ?>
              </div>
            </div>
          </div>
          <div class="form-row mb-4">
            <div class="form-group col-md-6">
              <label for='state'>State:</label>
              <select class='form-control <?php echo !$stateErr?: 'is-invalid'; ?>' name='state' id='state'>
                <option value='' disabled selected>--Select State--</option>
                <option value="AL">Alabama</option>
                <option value="AK">Alaska</option>
                <option value="AZ">Arizona</option>
                <option value="AR">Arkansas</option>
                <option value="CA">California</option>
                <option value="CO">Colorado</option>
                <option value="CT">Connecticut</option>
                <option value="DE">Delaware</option>
                <option value="DC">District Of Columbia</option>
                <option value="FL">Florida</option>
                <option value="GA">Georgia</option>
                <option value="HI">Hawaii</option>
                <option value="ID">Idaho</option>
                <option value="IL">Illinois</option>
                <option value="IN">Indiana</option>
                <option value="IA">Iowa</option>
                <option value="KS">Kansas</option>
                <option value="KY">Kentucky</option>
                <option value="LA">Louisiana</option>
                <option value="ME">Maine</option>
                <option value="MD">Maryland</option>
                <option value="MA">Massachusetts</option>
                <option value="MI">Michigan</option>
                <option value="MN">Minnesota</option>
                <option value="MS">Mississippi</option>
                <option value="MO">Missouri</option>
                <option value="MT">Montana</option>
                <option value="NE">Nebraska</option>
                <option value="NV">Nevada</option>
                <option value="NH">New Hampshire</option>
                <option value="NJ">New Jersey</option>
                <option value="NM">New Mexico</option>
                <option value="NY">New York</option>
                <option value="NC">North Carolina</option>
                <option value="ND">North Dakota</option>
                <option value="OH">Ohio</option>
                <option value="OK">Oklahoma</option>
                <option value="OR">Oregon</option>
                <option value="PA">Pennsylvania</option>
                <option value="RI">Rhode Island</option>
                <option value="SC">South Carolina</option>
                <option value="SD">South Dakota</option>
                <option value="TN">Tennessee</option>
                <option value="TX">Texas</option>
                <option value="UT">Utah</option>
                <option value="VT">Vermont</option>
                <option value="VA">Virginia</option>
                <option value="WA">Washington</option>
                <option value="WV">West Virginia</option>
                <option value="WI">Wisconsin</option>
                <option value="WY">Wyoming</option>
              </select>
              <div class="invalid-feedback">
                <?php echo $stateErr; ?>
              </div>
            </div>
            <div class="form-group col-md-6">
              <label for='zip'>Zip:</label>
              <input class='form-control <?php echo !$zipErr?: 'is-invalid'; ?>' id='zip' type='text' name='zip' placeholder='Zip Code'>
              <div class="invalid-feedback">
                <?php echo $zipErr; ?>
              </div>
            </div>
          </div>
          <div class="form-row mb-4">
            <div class="form-group col">
              <label for='tel'>Phone:</label>
              <input class='form-control <?php echo !$telErr?: 'is-invalid'; ?>' id='tel' type='tel' name='tel' placeholder='(865) 724-1185'>
              <div class="invalid-feedback">
                <?php echo $telErr; ?>
              </div>
            </div>
            <div class="form-group col">
              <label for='date'>Date:</label>
              <input class='form-control <?php echo !$dateErr?: 'is-invalid'; ?>' id='date' type='date' name='date' placeholder='Date'>
              <div class="invalid-feedback">
                <?php echo $dateErr; ?>
              </div>
            </div>
          </div>
          <div class="form-row mb-4">
            <div class="form-group col">
              <label for='email'>Email:</label>
              <input class='form-control <?php echo !$emailErr?: 'is-invalid'; ?>' id='email' type='email' name='email' placeholder='Email'>
              <div class="invalid-feedback">
                <?php echo $emailErr; ?>
              </div>
            </div>
          </div>
          <div class="form-row mb-4">
            <p class='description-text'>Are you legally eligible to work in the US?</p>
            <div class="invalid-feedback">
                <?php echo $eligibleErr; ?>
            </div>
            <div class="form-check-inline col-md-10">
              <input class='form-check-input <?php echo !$eligibleErr?: 'is-invalid'; ?>' id='eligible' type='radio' name='eligible' value='yes'>
              <label class='form-check-label mr-5' for='eligible'>Yes</label>
              <input class='form-check-input <?php echo !$eligibleErr?: 'is-invalid'; ?>' id='eligible' type='radio' name='eligible' value='no'>
              <label class='form-check-label' for='eligible'>No</label>
            </div>
          </div>
          <div class="form-row mb-4">
            <p class='description-text'>Are you a veteran?</p>
            <div class="invalid-feedback">
                <?php echo $vetErr; ?>
            </div>
            <div class="form-check-inline col-md-10">
              <input class='form-check-input <?php echo !$vetErr?: 'is-invalid'; ?>' id='vet' type='radio' name='vet' value='yes'>
              <label class='form-check-label mr-5' for='vet'>Yes</label>
              <input class='form-check-input <?php echo !$vetErr?: 'is-invalid'; ?>' id='vet' type='radio' name='vet' value='no'>
              <label class='form-check-label' for='vet'>No</label>
            </div>
          </div>
          <div class="form-row mb-4">
            <p class='description-text'>If selected for employment, are you willing to submit to a background check?</p>
            <div class="invalid-feedback">
                <?php echo $bgCheckErr; ?>
            </div>
            <div class="form-check-inline col-md-10">
              <input class='form-check-input <?php echo !$bgCheckErr?: 'is-invalid'; ?>' id='bgCheck' type='radio' name='bgCheck' value='yes'>
              <label class='form-check-label mr-5' for='bgCheck'>Yes</label>
              <input class='form-check-input <?php echo !$bgCheckErr?: 'is-invalid'; ?>' id='bgCheck' type='radio' name='bgCheck' value='no'>
              <label class='form-check-label' for='bgCheck'>No</label>
            </div>
          </div>
          <h2 class='heading-secondary pt-5 mb-2'>Position</h2>
          <div class="form-row mb-4">
            <p class='description-text'>Position you are applying for:</p>
            <div class="invalid-feedback">
                <?php echo $positionErr; ?>
            </div>
            <div class="form-check-inline col-md-10">
              <input class='form-check-input <?php echo !$positionErr?: 'is-invalid'; ?>' id='position' type='radio' name='position' value='cashier'>
              <label class='form-check-label mr-5' for='position'>Cashier</label>
              <input class='form-check-input <?php echo !$positionErr?: 'is-invalid'; ?>' id='position' type='radio' name='position' value='roller'>
              <label class='form-check-label' for='position'>Rolled Ice Cream maker</label>
            </div>
          </div>
          <div class="form-row mb-4">
            <div class="form-group col">
              <label for='startDate'>Available Start Date:</label>
              <input class='form-control <?php echo !$startDateErr?: 'is-invalid'; ?>' id='startDate' type='date' name='startDate'>
              <div class="invalid-feedback">
                <?php echo $startDateErr; ?>
              </div>
            </div>
            <div class="form-group col">
              <label for='desiredPay'>Desired Pay ($)</label>
              <input class='form-control <?php echo !$desiredPayErr?: 'is-invalid'; ?>' id='desiredPay' type='text' name='desiredPay'>
              <div class="invalid-feedback">
                <?php echo $desiredPayErr; ?>
              </div>
            </div>
          </div>
          <div class="form-row mb-4">
            <div class="form-group col">
              <label for='timeAvailable'>Please describe the typical time availability throughout a week (Mon-Sun)</label>
              <textarea class='form-control <?php echo !$timeAvailableErr?: 'is-invalid'; ?>' id='timeAvailable' name='timeAvailable'></textarea>
              <div class="invalid-feedback">
                <?php echo $timeAvailableErr; ?>
              </div>
            </div>
          </div>
          <div class="form-row mb-4 ">
            <!-- <p class='description-text pt-4 mb-2'>Employment Desired:</p> -->
            <div class="form-group col-md-10">
              <!-- <input class='form-check-input' type='radio' name='employmentType'>
              <label class='form-check-label mr-5' for='employmentType'>Full-Time</label>
              <input class='form-check-input' type='radio' name='employmentType'>
              <label class='form-check-label mr-5' for='employmentType'>Part-Time</label>
              <input class='form-check-input' type='radio' name='employmentType'>
              <label class='form-check-label' for='employmentType'>Seasonal/Temporary</label> -->
              <label for='employmentType'>Employment Desired:</label>
              <select class='form-control <?php echo !$employmentTypeErr?: 'is-invalid'; ?>' id='employmentType' name='employmentType'>
                <option value='' disabled selected>--Select Type--</option>
                <option value='full'>Full-Time</option>
                <option value='part'>Part-Time</option>
                <option value='temp/seasonal'>Temporary / Seasonal</option>
              </select>
              <div class="invalid-feedback">
                <?php echo $employmentTypeErr; ?>
              </div>
            </div>
          </div>
          <h2 class='heading-secondary pt-4 mb-4'>Education</h2>
          <div class="form-row mb-4">
            <div class="form-group col">
              <label for='schoolName'>School Name:</label>
              <input class='form-control <?php echo !$schoolNameErr?: 'is-invalid'; ?>' id='schoolName' type='text' name='schoolName'>
              <div class="invalid-feedback">
                <?php echo $schoolNameErr; ?>
              </div>
            </div>
            <div class="form-group col">
              <label for='schoolLoc'>Location:</label>
              <input class='form-control <?php echo !$schoolLocErr?: 'is-invalid'; ?>' id='schoolLoc' type='text' name='schoolLoc'>
              <div class="invalid-feedback">
                <?php echo $schoolLocErr; ?>
              </div>
            </div>
          </div>
          <div class="form-row mb-4">
            <div class="form-group col">
              <label for='schoolYears'>Years Attended:</label>
              <input class='form-control <?php echo !$schoolYearsErr?: 'is-invalid'; ?>' id='schoolYears' type='number' name='schoolYears'>
              <div class="invalid-feedback">
                <?php echo $schoolYearsErr; ?>
              </div>
            </div>
            <div class="form-group col">
              <label for='schoolDegree'>Degree Received:</label>
              <input class='form-control <?php echo !$schoolDegreeErr?: 'is-invalid'; ?>' id='schoolDegree' type='text' name='schoolDegree'>
              <div class="invalid-feedback">
                <?php echo $schoolDegreeErr; ?>
              </div>
            </div>
          </div>
          <h2 class='heading-secondary pt-4 mb-2'>Employment History</h2>
          <!-- add uploading files -->
          <div class="form-row mb-4">
            <div class="form-group col">
              <label for='employmentHist'>Please list and describe any prior work experience below (type "no prior experience" if not applicable)</label>
              <textarea class='form-control <?php echo !$employmentHistErr?: 'is-invalid'; ?>' id='employmentHist' name='employmentHist'></textarea>
              <div class="invalid-feedback">
                <?php echo $employmentHistErr; ?>
              </div>
            </div>
          </div>
          <input class='form-control' type='submit' name='submit'>
          <!-- successful submit reveals confirmation text -->
        </form>
      </div>
    </div>
</section>
<?php include 'inc/footer.php'?>