<?php
require("../includes/connection.php"); 

$meetingdate = $_GET['meetingdate'];
$topic = $_GET['topic'];
$timestarted = $_GET['timestarted'];
$timeended = $_GET['timeended'];



$sql = "INSERT INTO reports(topic, meetingdate, timestarted, timeended) VALUES ('$topic','$meetingdate','$timestarted','$timeended')";


if ($conn->query($sql) === TRUE) {
	$last_id = $conn->insert_id;
	$sql = "SELECT * FROM users LIMIT 2";
						$result = $conn->query($sql);

						if ($result->num_rows > 0) {
							// output data of each row
							$rowcount = 1;
							$tbody ="";
							while($row = $result->fetch_assoc()) {
								$tbody .= '
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
									<label class="form-check-inline u-check mx-0 mb-0">
										<input class="g-hidden-xs-up g-pos-abs g-top-0 g-right-0" id="member'.$rowcount.'" value="'.$row['userid'].'" name="members" type="checkbox" onchange="memattend(this.value,this.checked,lastid.value,meetingdate.value)">
										<div class="u-check-icon-radio-v8">
										  <i class="fa" data-check-icon=""></i>
										</div>
									  </label>
									</td>		
									</tr>
								';
								$rowcount++;
							}
							
						} else {
							$tbody .= "0 results";
						}						
					
    $next="New record created successfully <br><br>";
	$next .='
	<form id="reportform">
	<input type="text" value="'.$last_id.'" id="lastid" hidden>
	<input type="text" value="'.$meetingdate.'" id="meetingdate" hidden>
		<div class="col-md-12">
                <!-- Rounded Text Inputs -->
                <div class="g-brd-around g-brd-gray-light-v7 g-rounded-4 g-pa-15 g-pa-20--md g-mb-30">
                  			  
				   <div class="g-pa-20">
	<div class="form-group g-mb-15">
                    <label class="g-mb-10" for="inputGroup-3_1">ATTENDANCE</label>
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
                        <div class="d-flex align-self-center">Present</div>
                      </div>
                    </th>
                  </tr>
                </thead>

                <tbody>'.$tbody.'
                 </tbody>
              </table>
			  </div>
			  <!-- End Default Input -->
				  </div>
				  
				 </div>
                <!-- End Rounded Text Inputs -->

        </div>
		<div id="txtHint"><b>info will be displayed here...</b></div>
      </form>
        <div class="d-flex">
		   <button class="btn btn-xl u-btn-outline-gray-dark-v6 g-width-160--md g-font-size-14 g-mr-15" type="reset" data-fancybox-close disabled>Previous</button>
		  <button class="btn btn-xl u-btn-lightblue-v3 g-width-160--md g-font-size-14 g-mr-15" type="submit" onclick="submitUser(topic.value,meetingdate.value,timestarted.value,timeended.value)">Next</button>
        </div>
	';
	echo $next;
	
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
	echo '
		 <form id="reportform">
		<div class="col-md-12">
                <!-- Rounded Text Inputs -->
                <div class="g-brd-around g-brd-gray-light-v7 g-rounded-4 g-pa-15 g-pa-20--md g-mb-30">
                  			  
				   <div class="g-pa-20">
					
					<!-- Default Input -->
                  <div class="form-group g-mb-30">
                    <label class="g-mb-10" for="inputGroup-3_1">Topic</label>

                    <div class="g-pos-rel">
                      <span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
	                  	<i class="hs-admin-check g-absolute-centered g-font-size-default g-color-lightblue-v3"></i>
	                	</span>
                      <input class="form-control form-control-md g-brd-gray-light-v7 g-brd-gray-light-v3--focus g-rounded-20 g-px-14 g-py-10" type="text" id="topic" placeholder="">
                    </div>
                  </div>
                  <!-- End Default Input -->
				  <label class="g-mb-10" for="inputGroup-3_1">Lighthouse Meeting Date</label>

					<div class="g-brd-around g-brd-gray-light-v7 g-rounded-4 g-pa-20 g-mb-30">
					  <div class="form-group mb-0 g-max-width-600">
						<div id="datepickerWrapper" class="u-datepicker-right u-datepicker--v3 g-pos-rel w-100 g-cursor-pointer g-brd-around g-brd-gray-light-v7 g-rounded-4">
						  <input class="js-range-datepicker g-bg-transparent g-font-size-12 g-font-size-default--md g-color-gray-dark-v6 g-pr-80 g-pl-15 g-py-9" type="text" placeholder="Select Date" data-rp-wrapper="#datepickerWrapper" data-rp-date-format="Y-m-d" id="meetingdate">
						  <div class="d-flex align-items-center g-absolute-centered--y g-right-0 g-color-gray-light-v6 g-color-lightblue-v9--sibling-opened g-mr-15">
							<i class="hs-admin-calendar g-font-size-18 g-mr-10"></i>
							<i class="hs-admin-angle-down"></i>
						  </div>
						</div>
					  </div>
					</div>
				  <!-- Default Input -->
                  <div class="form-group g-mb-15">
                    <label class="g-mb-10" for="inputGroup-3_1">Time Started</label>

                    <div class="g-pos-rel">
                      <span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
	                  	<i class="hs-admin-check g-absolute-centered g-font-size-default g-color-lightblue-v3"></i>
	                	</span>
                      <input class="form-control form-control-md g-brd-gray-light-v7 g-brd-gray-light-v3--focus g-rounded-20 g-px-14 g-py-10" type="time" id="timestarted" placeholder="6:00pm">
                    </div>
					<label class="g-mb-10" for="inputGroup-3_1">Time Ended</label>

                    <div class="g-pos-rel">
                      <span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
	                  	<i class="hs-admin-check g-absolute-centered g-font-size-default g-color-lightblue-v3"></i>
	                	</span>
                      <input class="form-control form-control-md g-brd-gray-light-v7 g-brd-gray-light-v3--focus g-rounded-20 g-px-14 g-py-10" type="time" id="timeended" placeholder="7:30pm">
                    </div>
                  </div>
                  <!-- End Default Input -->
				  
				  
			
                  <!-- End Default Input -->
				  </div>
				  
				 </div>
                <!-- End Rounded Text Inputs -->

        </div>
		<div id="txtHint"><b>info will be displayed here...</b></div>
		
      </form>
        <div class="d-flex">
		   <button class="btn btn-xl u-btn-outline-gray-dark-v6 g-width-160--md g-font-size-14 g-mr-15" type="reset" data-fancybox-close>Close</button>
		  <button class="btn btn-xl u-btn-lightblue-v3 g-width-160--md g-font-size-14 g-mr-15" type="submit" onclick="submitUser(topic.value,meetingdate.value,timestarted.value,timeended.value)">Next</button>
        </div>
	';
}

$conn->close();