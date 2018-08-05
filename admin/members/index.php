<!DOCTYPE html>
<html lang="en">
<?php 
	require("../includes/connection.php"); 
	$page = "member";
?>
<head>
  <!-- Title -->
  <title>Lighthouse-Members | Uinspire</title>

  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <!-- Favicon -->
  <link rel="shortcut icon" href="../../favicon.ico">
  <!-- Google Fonts -->
  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans%3A400%2C300%2C500%2C600%2C700%7CPlayfair+Display%7CRoboto%7CRaleway%7CSpectral%7CRubik">
  <!-- CSS Global Compulsory -->
  <link rel="stylesheet" href="../../assets/vendor/bootstrap/bootstrap.min.css">
  <!-- CSS Global Icons -->
  <link rel="stylesheet" href="../../assets/vendor/icon-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="../../assets/vendor/icon-line/css/simple-line-icons.css">
  <link rel="stylesheet" href="../../assets/vendor/icon-etlinefont/style.css">
  <link rel="stylesheet" href="../../assets/vendor/icon-line-pro/style.css">
  <link rel="stylesheet" href="../../assets/vendor/icon-hs/style.css">

  <link rel="stylesheet" href="../assets/vendor/hs-admin-icons/hs-admin-icons.css">
  <link rel="stylesheet" href="../../assets/vendor/jquery-ui/themes/base/jquery-ui.min.css">
  <link rel="stylesheet" href="../../assets/vendor/animate.css">
  <link rel="stylesheet" href="../../assets/vendor/malihu-scrollbar/jquery.mCustomScrollbar.min.css">
  <link rel="stylesheet" href="../assets/vendor/bootstrap-select/css/bootstrap-select.min.css">
  <link rel="stylesheet" href="../assets/vendor/bootstrap-tagsinput/css/bootstrap-tagsinput.css">
  <link rel="stylesheet" href="../assets/vendor/flatpickr/dist/css/flatpickr.min.css">
  <link rel="stylesheet" href="../assets/vendor/chartist-js/chartist.min.css">
  <link rel="stylesheet" href="../assets/vendor/fancybox/jquery.fancybox.min.css">

  <link rel="stylesheet" href="../../assets/vendor/hamburgers/hamburgers.min.css">

  <!-- CSS Unify -->
  <link rel="stylesheet" href="../assets/css/unify-admin.css">

  <!-- CSS Customization -->
  <link rel="stylesheet" href="../../assets/css/custom.css">
</head>

<body>
  <main>
     <!-- Include header here -->
     <?php include("../includes/parts/header.php"); ?>


    <section class="container-fluid px-0 g-pt-65">
      <div class="row no-gutters g-pos-rel g-overflow-y-hidden">
         <!-- Include Sidebar Nav here -->
     <?php include("../includes/parts/sidebarnav.php"); ?>


        <div class="col g-ml-45 g-ml-0--lg g-pb-65--md">
          <!-- Breadcrumb-v1 -->
          <div class="g-hidden-sm-down g-bg-gray-light-v8 g-pa-20">
            <ul class="u-list-inline g-color-gray-dark-v6">

              <li class="list-inline-item g-mr-10">
                <a class="u-link-v5 g-color-gray-dark-v6 g-color-lightblue-v3--hover g-valign-middle" href="#!">Dashboard</a>
                <i class="hs-admin-angle-right g-font-size-12 g-color-gray-light-v6 g-valign-middle g-ml-10"></i>
              </li>

              <li class="list-inline-item">
                <span class="g-valign-middle">Lighthouse Members</span>
              </li>
            </ul>
          </div>
          <!-- End Breadcrumb-v1 -->


          <div class="g-pa-20">
            <div class="media">
              <div class="d-flex align-self-center">
                <h1 class="g-font-weight-300 g-font-size-28 g-color-black mb-0">Lighthouse Members</h1>
              </div>

              <div class="media-body align-self-center text-right">
                <a class="js-fancybox btn btn-xl u-btn-lightblue-v3 g-width-160--md g-font-size-default g-ml-10" href="#!" data-src="#new-project-form" data-speed="350" data-options='{"touch" : false}'>Add New Member
              </a>
              </div>
            </div>

            <hr class="d-flex g-brd-gray-light-v7 g-my-30">
			<div class="table-responsive g-mb-40">
			
			 <table class="table u-table--v3 g-color-black">
                <thead>
                  <tr>
                    <th class="g-px-30">
                      <div class="media">
                        <div class="d-flex align-self-center">Name</div>
                      </div>
                    </th>
                    <th class="g-px-30">
                      <div class="media">
                        <div class="d-flex align-self-center">Phone No.</div>
                      </div>
                    </th>
					<th class="g-px-30">
                      <div class="media">
                        <div class="d-flex align-self-center">Email</div>
                      </div>
                    </th>
					<th class="g-px-30">
                      <div class="media">
                        <div class="d-flex align-self-center">Address</div>
                      </div>
                    </th>
                    <th class="g-px-30">
					</th>
                  </tr>
                </thead>

                <tbody>
					<?php	
						$sql = "SELECT * FROM users LIMIT 2";
						$result = $conn->query($sql);

						if ($result->num_rows > 0) {
							// output data of each row
							while($row = $result->fetch_assoc()) {
								echo '
									<tr>
									<td class="g-px-30">
									  <div class="media">
										<div class="d-flex align-self-center">
										  <img class="g-width-36 g-height-36 rounded-circle g-mr-15" src="../assets/img-temp/130x130/img14.png" alt="Image description">
										</div>

										<div class="media-body align-self-center text-left">'. $row['firstname']. ' ' . $row['middlename'] . ' ' . $row['surname'] . '</div>
									  </div>
									</td>									
									<td class="g-px-30">
									<a class="u-link-v5 g-color-black g-color-lightblue-v4--hover" href="tel:'.$row['phoneno'].'">
									  <span class="g-hidden-sm-down">'.$row['phoneno'].'</span>
									</a>
									</td>
									<td class="g-px-30">
									<a class="u-link-v5 g-text-break-word g-color-black g-color-lightblue-v4--hover" href="mailto:'.$row['email'].'">
									  <span class="g-hidden-sm-down">'.$row['email'].'</span>
									</a>
									</td>
									<td class="g-px-30">'.$row['address'].'</td>
									<td class="g-px-30">
									<div class="d-flex align-items-center g-line-height-1">
									<a class="u-link-v5 g-color-gray-light-v6 g-color-lightblue-v4--hover g-mr-15" href="view?p='. $row['userid'] .'">
										<i class="hs-admin-view-list-alt g-font-size-18"></i>
									  </a>
									  <a class="u-link-v5 g-color-gray-light-v6 g-color-lightblue-v4--hover g-mr-15" href="edit?p='. $row['userid'] .'">
										<i class="hs-admin-pencil g-font-size-18"></i>
									  </a>
									  <a class="u-link-v5 g-color-gray-light-v6 g-color-lightblue-v4--hover" href="delete?p='. $row['userid'] .'">
										<i class="hs-admin-trash g-font-size-18"></i>
									  </a>
									</div>
								  </td>									
									</tr>
								';
							}
						} else {
							echo "0 results";
						}
						$conn->close();
					?>
                 </tbody>
              </table>
			
			</div>

           
		   </div>

          <!-- Include header here -->
		  <?php include("../includes/parts/footer.php"); ?>
        </div>
      </div>
    </section>
  </main>

  <div id="new-project-form" class="rounded-0 p-0" style="display: none; width: 790px; max-width: 100%;">
    <header class="g-bg-gray-light-v8 g-px-15 g-px-30--sm g-py-20">
      <h2 class="g-font-weight-300 g-font-size-16 g-color-black mb-0">Add New Member</h2>
    </header>

    <div class="g-pa-15 g-pa-30--sm">
      <form>
		<div class="col-md-12">
                <!-- Rounded Text Inputs -->
                <div class="g-brd-around g-brd-gray-light-v7 g-rounded-4 g-pa-15 g-pa-20--md g-mb-30">
                  			  
				  <!-- Default Input -->
                  <div class="form-group g-mb-30">
                    <label class="g-mb-10" for="inputGroup-3_1">*First Name</label>

                    <div class="g-pos-rel">
                      <span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
	                  	<i class="hs-admin-check g-absolute-centered g-font-size-default g-color-lightblue-v3"></i>
	                	</span>
                      <input class="form-control form-control-md g-brd-gray-light-v7 g-brd-gray-light-v3--focus g-rounded-20 g-px-14 g-py-10" type="text" placeholder="" id="fname" required>
                    </div>
                  </div>
                  <!-- End Default Input -->
				  <!-- Default Input -->
                  <div class="form-group g-mb-30">
                    <label class="g-mb-10" for="inputGroup-3_1">Middle Name</label>

                    <div class="g-pos-rel">
                      <span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
	                  	<i class="hs-admin-check g-absolute-centered g-font-size-default g-color-lightblue-v3"></i>
	                	</span>
                      <input class="form-control form-control-md g-brd-gray-light-v7 g-brd-gray-light-v3--focus g-rounded-20 g-px-14 g-py-10" type="text" id="mname" placeholder="">
                    </div>
                  </div>
                  <!-- End Default Input -->
				   <!-- Default Input -->
                  <div class="form-group g-mb-30">
                    <label class="g-mb-10" for="inputGroup-3_1" required>*Surname</label>

                    <div class="g-pos-rel">
                      <span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
	                  	<i class="hs-admin-check g-absolute-centered g-font-size-default g-color-lightblue-v3"></i>
	                	</span>
                      <input class="form-control form-control-md g-brd-gray-light-v7 g-brd-gray-light-v3--focus g-rounded-20 g-px-14 g-py-10" type="text" id="sname" placeholder="">
                    </div>
                  </div>
                  <!-- End Default Input -->
					 <!-- Default Select -->
                  <div class="g-mb-30">
                    <label class="g-mb-10">Gender</label>

                    <div class="form-group u-select--v3 g-pos-rel g-brd-gray-light-v7 g-rounded-25 mb-0">
                      <select class="js-select u-select--v3-select u-sibling w-100" required="required" id="gender" title="Click to Select Gender" style="display: none;">
                        <option value="Female" data-content='<span class="d-flex align-items-center w-100"></i><span>Female</span></span>'>Female
                        </option>
                        <option value="Male" data-content='<span class="d-flex align-items-center w-100"></i><span>Male</span></span>'>Male
                        </option>
                      </select>

                      <div class="d-flex align-items-center g-absolute-centered--y g-right-0 g-color-gray-light-v6 g-color-lightblue-v9--sibling-opened g-mr-15">
                        <i class="hs-admin-angle-down"></i>
                      </div>
                    </div>
                  </div>
                  <!-- End Default Select -->
				   <!-- Default Input -->
                  <div class="form-group g-mb-30">
                    <label class="g-mb-10" for="inputGroup-3_1">*Email</label>

                    <div class="g-pos-rel">
                      <span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
	                  	<i class="hs-admin-check g-absolute-centered g-font-size-default g-color-lightblue-v3"></i>
	                	</span>
                      <input class="form-control form-control-md g-brd-gray-light-v7 g-brd-gray-light-v3--focus g-rounded-20 g-px-14 g-py-10" type="text" id="email" placeholder="" required>
                    </div>
                  </div>
                  <!-- End Default Input -->
				   <!-- Default Input -->
                  <div class="form-group g-mb-30">
                    <label class="g-mb-10" for="inputGroup-3_1" >*Phone No</label>

                    <div class="g-pos-rel">
                      <span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
	                  	<i class="hs-admin-check g-absolute-centered g-font-size-default g-color-lightblue-v3"></i>
	                	</span>
                      <input class="form-control form-control-md g-brd-gray-light-v7 g-brd-gray-light-v3--focus g-rounded-20 g-px-14 g-py-10" type="text" id="phoneno" placeholder="" required>
                    </div>
                  </div>
                  <!-- End Default Input -->
				 </div>
                <!-- End Rounded Text Inputs -->

        </div>
		<div id="txtHint"><b>Person info will be listed here...</b></div>
      </form>
        <div class="d-flex">
          <button class="btn btn-xl u-btn-lightblue-v3 g-width-160--md g-font-size-14 g-mr-15" type="submit" onclick="submitUser(fname.value,mname.value,sname.value,gender.value,email.value,phoneno.value)">Submit</button>
          <button class="btn btn-xl u-btn-outline-gray-dark-v6 g-width-160--md g-font-size-14" type="reset" data-fancybox-close>Cancel</button>
        </div>

    </div>
  </div>

  <!-- JS Global Compulsory -->
  <script src="../assets/vendor/jquery/jquery.min.js"></script>
  <script src="../assets/vendor/jquery-migrate/jquery-migrate.min.js"></script>

  <script src="../../assets/vendor/popper.min.js"></script>
  <script src="../../assets/vendor/bootstrap/bootstrap.min.js"></script>

  <script src="../../assets/vendor/cookiejs/jquery.cookie.js"></script>


  <!-- jQuery UI Core -->
  <script src="../../assets/vendor/jquery-ui/jquery-ui.core.min.js"></script>


  <!-- jQuery UI Helpers -->
  <script src="../../assets/vendor/jquery-ui/ui/widgets/menu.js"></script>
  <script src="../../assets/vendor/jquery-ui/ui/widgets/mouse.js"></script>

  <!-- jQuery UI Widgets -->
  <script src="../../assets/vendor/jquery-ui/ui/widgets/slider.js"></script>

  <!-- JS Plugins Init. -->
  <script src="../../assets/vendor/appear.js"></script>
  <script src="../assets/vendor/bootstrap-select/js/bootstrap-select.min.js"></script>
  <script src="../assets/vendor/bloodhound-js/js/bloodhound.min.js"></script>
  <script src="../assets/vendor/bloodhound-js/js/typeahead.jquery.min.js"></script>
  <script src="../assets/vendor/bootstrap-tagsinput/js/bootstrap-tagsinput.min.js"></script>
  <script src="../../assets/vendor/malihu-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
  <script src="../assets/vendor/flatpickr/dist/js/flatpickr.min.js"></script>
  <script src="../assets/vendor/chartist-js/chartist.min.js"></script>
  <script src="../assets/vendor/fancybox/jquery.fancybox.min.js"></script>

  <!-- JS Unify -->
  <script src="../../assets/js/hs.core.js"></script>
  <script src="../assets/js/components/hs.side-nav.js"></script>
  <script src="../../assets/js/helpers/hs.hamburgers.js"></script>
  <script src="../../assets/js/components/hs.dropdown.js"></script>
  <script src="../../assets/js/components/hs.scrollbar.js"></script>
  <script src="../../assets/js/components/hs.slider.js"></script>
  <script src="../assets/js/components/hs.bar-chart.js"></script>
  <script src="../assets/js/components/hs.range-datepicker.js"></script>
  <script src="../../assets/js/helpers/hs.focus-state.js"></script>
  <script src="../assets/js/components/hs.file-upload.js"></script>
  <script src="../assets/js/components/hs.popup.js"></script>

  <!-- JS Custom -->
  <script src="../../assets/js/custom.js"></script>

  <!-- JS Plugins Init. -->
  <script>
    $(document).on('ready', function () {
      // initialization of custom select
      $('.js-select').selectpicker();
  
      $('.js-select').on('shown.bs.select', function (e) {
        $(this).addClass('opened');
      });
  
      $('.js-select').on('hidden.bs.select', function (e) {
        $(this).removeClass('opened');
      });
  
      // initialization of range datepicker
      $.HSCore.components.HSRangeDatepicker.init('.js-range-datepicker');
  
      // initialization of sidebar navigation component
      $.HSCore.components.HSSideNav.init('.js-side-nav');
  
      // initialization of hamburger
      $.HSCore.helpers.HSHamburgers.init('.hamburger');
  
      // initialization of charts
      $.HSCore.components.HSBarChart.init('.js-bar-chart');
  
      // initialization of HSDropdown component
      $.HSCore.components.HSDropdown.init($('[data-dropdown-target]'), {
        dropdownHideOnScroll: false,
        dropdownType: 'css-animation',
        dropdownAnimationIn: 'fadeIn',
        dropdownAnimationOut: 'fadeOut'
      });
  
      // initialization of range slider
      $.HSCore.components.HSSlider.init('#regularSlider');
  
      // initialization of tags input
      var tags = new Bloodhound({datumTokenizer: Bloodhound.tokenizers.obj.whitespace('text'), queryTokenizer: Bloodhound.tokenizers.whitespace, prefetch: '../assets/include/ajax/tags.json'});
  
      tags.initialize();
  
      var elt = $('.js-tagsinput');
  
      elt.tagsinput({
        tagClass: function (item) {
          switch (item.group) {
            case 'design':
              return 'u-tags-v1 g-color-white g-bg-teal-v2 g-bg-black--hover g-rounded-50 g-py-5 g-px-20 g-mb-10 g-mb-0--sm';
            case 'marketing':
              return 'u-tags-v1 g-color-white g-bg-lightblue-v4 g-bg-black--hover g-rounded-50 g-py-5 g-px-20 g-mb-10 g-mb-0--sm';
            case 'themes':
              return 'u-tags-v1 g-color-white g-bg-lightred-v2 g-bg-black--hover g-rounded-50 g-py-5 g-px-20 g-mb-10 g-mb-0--sm';
          }
        },
        itemValue: 'value',
        itemText: 'text',
        typeaheadjs: {
          name: 'tags',
          displayKey: 'text',
          source: tags.ttAdapter()
        }
      });
  
      elt.tagsinput('add', {
        "value": "design",
        "text": "Design",
        "group": "design"
      });
      elt.tagsinput('add', {
        "value": "marketing",
        "text": "Marketing",
        "group": "marketing"
      });
      elt.tagsinput('add', {
        "value": "unify",
        "text": "Unify",
        "group": "themes"
      });
	  
      // initialization of range datepicker
      $.HSCore.components.HSRangeDatepicker.init('#datepicker');
  
      // initialization of popups
      $.HSCore.components.HSPopup.init('.js-fancybox', {
        btnTpl: {
          smallBtn: '<button data-fancybox-close class="btn g-pos-abs g-top-25 g-right-30 g-line-height-1 g-bg-transparent g-font-size-16 g-color-gray-light-v6 g-brd-none p-0" title=""><i class="hs-admin-close"></i></button>'
        }
      });
  
      // initialization of file upload
      $.HSCore.components.HSFileUpload.init('.js-file-upload');
    });
	
	function submitUser(fname,mname,sname,gender,email,phoneno) {
    if (fname == "") {
        document.getElementById("txtHint").innerHTML = "First Name is Required!";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","submit.php?fname="+fname+"&mname="+mname+"&sname="+sname+"&gender="+gender+"&email="+email+"&phoneno="+phoneno,true);
        xmlhttp.send();
    }
}
  </script>
</body>
</html>
