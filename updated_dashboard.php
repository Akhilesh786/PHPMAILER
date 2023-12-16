<?php 
   error_reporting(0);
   session_start();
   if (!isset($_SESSION['emp_code']) OR empty($_SESSION)){ 
     header("Location: ../index.php");
   }
   include('../db_connect.php');
   $state=$_SESSION['state'];
   $get_user_work_query=mysqli_query($conn, "SELECT `user_work_data` FROM `ppmm_approver` WHERE `state` = 'Kashmir'");
   while($get_user_work_rows=mysqli_fetch_assoc($get_user_work_query)){
   $get_user_work_progress_data=json_decode($get_user_work_rows['user_work_data'], true); 
   foreach($get_user_work_progress_data as $key=>$val){
   if(!empty($val)){
   $aaray12[$key]+=$val;
   }else{
   $aaray12[$key]+=0;
   }
   
      }
       
    }
   date_default_timezone_set('Asia/Kolkata');
   $date= date("Y-m-d");
   
   $date1 = new DateTime($date);
   
   ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <title>Medhaj-PPMM</title>
      <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
      <link rel="stylesheet" href="font/iconsmind-s/css/iconsminds.css">
      <link rel="stylesheet" href="font/simple-line-icons/css/simple-line-icons.css">
      <link rel="stylesheet" href="css/vendor/bootstrap.min.css">
      <link rel="stylesheet" href="css/vendor/bootstrap.rtl.only.min.css">
      <link rel="stylesheet" href="css/vendor/fullcalendar.min.css">
      <link rel="stylesheet" href="css/vendor/dataTables.bootstrap4.min.css">
      <link rel="stylesheet" href="css/vendor/datatables.responsive.bootstrap4.min.css">
      <link rel="stylesheet" href="css/vendor/select2.min.css">
      <link rel="stylesheet" href="css/vendor/perfect-scrollbar.css">
      <link rel="stylesheet" href="css/vendor/glide.core.min.css">
      <link rel="stylesheet" href="css/vendor/bootstrap-stars.css">
      <link rel="stylesheet" href="css/vendor/nouislider.min.css">
      <link rel="stylesheet" href="css/vendor/bootstrap-datepicker3.min.css">
      <link rel="stylesheet" href="css/main.css">
	  <link rel="stylesheet" href="css/main.css">
	  <style>.dashboard-progress {height: 440px;}</style>
   </head>
   <body id="app-container" class="menu-default show-spinner">
      <?php include ("sidebar_one.php");?>
      
      <main>
         <div class="container-fluid">
            <div class="row">
               <div class="col-12">
                  <h1>Dashboard</h1>
                  <div class="separator mb-5"></div>
               </div>
               </div>
            </div>
			<div class="container-fluid">
				<div class="row">
				   <div class="col-12">
					<div class="card mb-4">
                     <div class="card-body">
                        <h5 class="mb-4">State</h5>
                        <div class="row">
                           <div class="col-sm-2">
                              <label>State</label> 
                              <select class="form-control " id="state" data-width="100%">
                              <option label="&nbsp;">&nbsp;</option>
                             <?php  $get_state_query=mysqli_query($conn, "SELECT * FROM `ppmm_state_discom` ORDER BY `ppmm_state_discom`.`id` ASC");
                              while($get_state_rows=mysqli_fetch_assoc($get_state_query)){ ?>
                                    <option value="<?php echo $get_state_rows["state"]; ?>"><?php echo $get_state_rows["state"]; ?></option>
                                    <?php } ?>
                              </select>
                           </div>
                           <div class="col-sm-2">
                              <label>Select Discom</label> 
                              <select class="form-control " id="discom" data-width="100%">
                                 
                              </select>
                           </div>
                           <div class="col-sm-2">
                              <label>Circle</label> 
                              <select id="circle" class="form-control " data-width="100%">
                              </select>
                           </div>
                            <div class="col-sm-2">
                              <label>district</label> 
                              <select id="district" class="form-control " data-width="100%">
                              </select>
                           </div>
                           <div class="col-sm-2" id="enabel_division">
                              <label>Division</label> 
                              <select id="division" class="form-control " data-width="100%">
                                 <option label="&nbsp;">&nbsp;</option>
                              </select>
                           </div>
                           <div class="col-sm-2">
                              <label>Sub division</label> 
                              <select id="sub_division" class="form-control " data-width="100%">
                                 <option label="&nbsp;">&nbsp;</option>
                              </select>
                           </div>
                            <div class="col-sm-2 ">
                              <label>Feeder</label> 
                              <select id="feeder" class="form-control " data-width="100%">
                                 <option label="&nbsp;">&nbsp;</option>
                              </select>
                           </div>
                        </div>
                     </div>
                  </div>
				   </div>
               </div>
			   <div class="row mb-4">
              <div class="col-lg-6 col-md-12 mb-4">
                  <div class="card">
                     <div class="card-body">
                        <h5 class="card-title">11 KV HT Re-Conductoring</h5>
                        <table class="table table-hover">
                           <thead>
                              <tr>
                                 <th scope="col">Description</th>
                                 <th scope="col">Awarded</th>
                                 <th scope="col">Surveyed</th>
                                 <th scope="col">Executed</th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <th scope="row">Dog Conductor</th>
                                 <td>..CKm</td>
                                 <td>..CKm</td>
                                 <td>..CKm</td>
                              </tr>
                              <tr>
                                 <th scope="row">120 Sqmm AB Cable</th>
                                 <td>..Km</td>
                                 <td>..Km</td>
                                 <td>..Km</td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
            <div class="col-lg-6 col-md-12 mb-4">
                  <div class="card">
                     <div class="card-body">
                        <h5 class="card-title">11 KV HT Line For HVDS</h5>
                        <table class="table table-hover">
                           <thead>
                              <tr>
                                 <th scope="col">Description</th>
                                 <th scope="col">Awarded</th>
                                 <th scope="col">Surveyed</th>
                                 <th scope="col">Executed</th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <th scope="row">Rabbit Conductor</th>
                                 <td>..CKm</td>
                                 <td>..CKm</td>
                                 <td>..CKm</td>
                              </tr>
                              <tr>
                                 <th scope="row">120 Sqmm AB Cable</th>
                                 <td>..Km</td>
                                 <td>..Km</td>
                                 <td>..Km</td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
            <div class="col-lg-6 col-md-12 mb-4">
                  <div class="card">
                     <div class="card-body">
                        <h5 class="card-title">11 KV HT Feeder Bifurcation</h5>
                        <table class="table table-hover">
                           <thead>
                              <tr>
                                 <th scope="col">Description</th>
                                 <th scope="col">Awarded</th>
                                 <th scope="col">Surveyed</th>
                                 <th scope="col">Executed</th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <th scope="row">Dog Conductor</th>
                                 <td>..CKm</td>
                                 <td>..CKm</td>
                                 <td>..CKm</td>
                              </tr>
                              <tr>
                                 <th scope="row">120 Sqmm AB Cable</th>
                                 <td>..Km</td>
                                 <td>..Km</td>
                                 <td>..Km</td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
            <div class="col-lg-6 col-md-12 mb-4">
                  <div class="card">
                     <div class="card-body">
                        <h5 class="card-title">Distribution Transformer For HVDS </h5>
                        <table class="table table-hover">
                           <thead>
                              <tr>
                                 <th scope="col">Description</th>
                                 <th scope="col">Awarded</th>
                                 <th scope="col">Surveyed</th>
                                 <th scope="col">Executed</th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <th scope="row">63 KVA</th>
                                 <td>..CKm</td>
                                 <td>..CKm</td>
                                 <td>..CKm</td>
                              </tr>
                              <tr>
                                 <th scope="row">100 KVA</th>
                                 <td>..Km</td>
                                 <td>..Km</td>
                                 <td>..Km</td>
                              </tr>
                           <tr>
                                 <th scope="row">200 KVA</th>
                                 <td>..Km</td>
                                 <td>..Km</td>
                                 <td>..Km</td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
            <div class="col-lg-6 col-md-12 mb-4">
                  <div class="card">
                     <div class="card-body">
                        <h5 class="card-title">LT A B Cabling</h5>
                        <table class="table table-hover">
                           <thead>
                              <tr>
                                 <th scope="col">Description</th>
                                 <th scope="col">Awarded</th>
                                 <th scope="col">Surveyed</th>
                                 <th scope="col">Executed</th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <th scope="row">35 Sqmm</th>
                                 <td>..Km</td>
                                 <td>..Km</td>
                                 <td>..Km</td>
                              </tr>
                              <tr>
                                 <th scope="row">70 Sqmm</th>
                                 <td>..Km</td>
                                 <td>..Km</td>
                                 <td>..Km</td>
                              </tr>
                           <tr>
                                 <th scope="row">120 Sqmm</th>
                                 <td>..Km</td>
                                 <td>..Km</td>
                                 <td>..Km</td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
            <div class="col-lg-6 col-md-12 mb-4">
                  <div class="card">
                     <div class="card-body">
                        <h5 class="card-title">LT Line For HVDS</h5>
                        <table class="table table-hover">
                           <thead>
                              <tr>
                                 <th scope="col">Description</th>
                                 <th scope="col">Awarded</th>
                                 <th scope="col">Surveyed</th>
                                 <th scope="col">Executed</th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <th scope="row">35 Sqmm AB Cable</th>
                                 <td>..CKm</td>
                                 <td>..CKm</td>
                                 <td>..CKm</td>
                              </tr>
                              <tr>
                                 <th scope="row">50 Sqmm AB Cable</th>
                                 <td>..Km</td>
                                 <td>..Km</td>
                                 <td>..Km</td>
                              </tr>
                           <tr>
                                 <th scope="row">70 Sqmm AB Cable</th>
                                 <td>..Km</td>
                                 <td>..Km</td>
                                 <td>..Km</td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
            </div>
			<div class="row">
               <div class="col-12">
                  <div class="card mb-4">
                     <div class="card-body">
                        <h5 class="mb-4">Bar Chart</h5>
                        <div class="row">
                           <div class="col-lg-6 mb-5">
                              <h6 class="mb-4">3. LT /HT Reconductoring</h6>
                              <div class="chart-container chart">
                                 <canvas id="productChart"></canvas>
                              </div>
                           </div>
                           <div class="col-lg-6 mb-5">
                              <h6 class="mb-4">4. 11 KV HT Feeder Segregation </h6>
                              <div class="chart-container chart">
                                 <canvas id="productChartNoShadow"></canvas>
                              </div>
                           </div>
						   <div class="col-lg-6 mb-5">
                              <h6 class="mb-4">5. 11 KV HT Agriculture Feeder Separation </h6>
                              <div class="chart-container chart">
                                 <canvas id="productChart1"></canvas>
                              </div>
                           </div>
						   <div class="col-lg-6 mb-5">
                              <h6 class="mb-4">6. HVDS </h6>
                              <div class="chart-container chart">
                                 <canvas id="productChartNoShadow1"></canvas>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
				  <div class="card mb-4">
                     <div class="card-body">
                        <h5 class="mb-4"> Chart</h5>
                        <div class="row">
                           <div class="col-lg-6 mb-5">
                              <h6 class="mb-4">Financial Progress </h6>
                              <div class="chart-container chart">
                                 <canvas id="categoryChart"></canvas>
                              </div>
                           </div>
                           <div class="col-lg-6 mb-5">
                              <h6 class="mb-4">PMA Payment</h6>
                              <div class="chart-container chart">
                                 <canvas id="categoryChartNoShadow"></canvas>
                              </div>
                           </div>
						   <div class="col-lg-6 mb-5">
                              <h6 class="mb-4">Material Management </h6>
                              <div class="chart-container chart">
                                 <canvas id="productChartNoShadow2"></canvas>
                              </div>
                           </div>
						   <div class="col-lg-6 mb-5">
                              <h6 class="mb-4"> NC Status (In Nos.)  </h6>
                              <div class="chart-container chart">
                                 <canvas id="productChartNoShadow3"></canvas>
                              </div>
                           </div>
						   <div class="col-lg-6 mb-5">
                              <h6 class="mb-4"> PPMM User Analysis  </h6>
                              <div class="chart-container chart">
                                 <canvas id="productChartNoShadow4"></canvas>
                              </div>
                           </div>
                         <div class="col-lg-6 mb-5">
                              <h6 class="mb-4"> Sanctioned , Awarded & Fund Received Cost (In Cr.) </h6>
                              <div class="chart-container chart">
                                 <canvas id="productChartNoShadow5"></canvas>
                              </div>
                           </div>
                         <div class="col-lg-6 mb-5">
                              <h6 class="mb-4"> Time Schedule (Months) </h6>
                              <div class="chart-container chart">
                                 <canvas id="productChartNoShadow6"></canvas>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
             </div>
            </div>
			<div class="row">
               <div class="col-lg-4 col-sm-12 mb-4">
                  <div class="card dashboard-progress">
                     <div class="position-absolute card-top-buttons"></div>
                     <div class="card-body">
                        <h5 class="card-title">LT/HT reconductring works</h5>
                        <div class="mb-4">
                           <p class="mb-2"><span>LT AB Cable 35 sqmm</span> <span class="float-right text-muted"><?php echo $aaray12[53]; ?>/<?php echo $aaray12[48]; ?></span></p>
                           <div class="progress">
                              <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $aaray12[53]; ?>" aria-valuemin="0" aria-valuemax="<?php echo $aaray12[48]; ?>"></div>
                           </div>
                        </div>
                        <div class="mb-4">
                           <p class="mb-2">LT AB Cable 50 sqmm <span class="float-right text-muted">1/8</span></p>
                           <div class="progress">
                              <div class="progress-bar" role="progressbar" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100"></div>
                           </div>
                        </div>
                        <div class="mb-4">
                           <p class="mb-2">LT AB Cable 70 sqmm<span class="float-right text-muted">2/6</span></p>
                           <div class="progress">
                              <div class="progress-bar" role="progressbar" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100"></div>
                           </div>
                        </div>
                        <div class="mb-4">
                           <p class="mb-2">LT AB Cable 120 sqmm <span class="float-right text-muted">0/8</span></p>
                           <div class="progress">
                              <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                           </div>
                        </div>
                        <div class="mb-4">
                           <p class="mb-2">120 sqmm HT AB Cable<span class="float-right text-muted">1/2</span></p>
                           <div class="progress">
                              <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                           </div>
                        </div>
                     <div class="mb-4">
                           <p class="mb-2">100 sq mm DOG conductor<span class="float-right text-muted">1/2</span></p>
                           <div class="progress">
                              <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-sm-12 mb-4">
                  <div class="card dashboard-progress">
                     <div class="position-absolute card-top-buttons"></div>
                     <div class="card-body">
                        <h5 class="card-title">11 KV HT overhead feeder Segeretion works</h5>
                        <div class="mb-4">
                           <p class="mb-2"><span>120 sqmm HT AB Cable</span> <span class="float-right text-muted">12/18</span></p>
                           <div class="progress">
                              <div class="progress-bar" role="progressbar" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                           </div>
                        </div>
                        <div class="mb-4">
                           <p class="mb-2">100 sq mm DOG conductor <span class="float-right text-muted">1/8</span></p>
                           <div class="progress">
                              <div class="progress-bar" role="progressbar" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100"></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-sm-12 mb-4">
                  <div class="card dashboard-progress">
                     <div class="position-absolute card-top-buttons"></div>
                     <div class="card-body">
                        <h5 class="card-title">11 kV Agriculture feeder seperation</h5>
                        <div class="mb-4">
                           <p class="mb-2"><span>120 sqmm HT AB Cable</span> <span class="float-right text-muted">12/18</span></p>
                           <div class="progress">
                              <div class="progress-bar" role="progressbar" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                           </div>
                        </div>
                        <div class="mb-4">
                           <p class="mb-2">100 sq mm DOG conductor <span class="float-right text-muted">1/8</span></p>
                           <div class="progress">
                              <div class="progress-bar" role="progressbar" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100"></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-sm-12 mb-4">
			   
                  <div class="card dashboard-progress">
                     <div class="position-absolute card-top-buttons"></div>
                     <div class="card-body">
                        <h5 class="card-title">High Voltage Distribution System(HVDS) DTR</h5>
                        <div class="mb-4">
                           <p class="mb-2"><span>63 KVA</span> <span class="float-right text-muted">12/18</span></p>
                           <div class="progress">
                              <div class="progress-bar" role="progressbar" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                           </div>
                        </div>
                        <div class="mb-4">
                           <p class="mb-2">100 KVA <span class="float-right text-muted">1/8</span></p>
                           <div class="progress">
                              <div class="progress-bar" role="progressbar" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100"></div>
                           </div>
                        </div>
                        <div class="mb-4">
                           <p class="mb-2">200 KVA <span class="float-right text-muted">2/6</span></p>
                           <div class="progress">
                              <div class="progress-bar" role="progressbar" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100"></div>
                           </div>
                        </div>
                      </div>
                  </div>
               </div>
			   <div class="col-lg-4 col-sm-12 mb-4">
                  <div class="card dashboard-progress">
                     <div class="position-absolute card-top-buttons"></div>
                     <div class="card-body">
                        <h5 class="card-title">High Voltage Distribution System(HVDS) HT& LT Line</h5>
                        <div class="mb-4">
                           <p class="mb-2"><span>LT AB Cable 35 sqmm</span> <span class="float-right text-muted">12/18</span></p>
                           <div class="progress">
                              <div class="progress-bar" role="progressbar" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                           </div>
                        </div>
                        <div class="mb-4">
                           <p class="mb-2">LT AB Cable 50 sqmm <span class="float-right text-muted">1/8</span></p>
                           <div class="progress">
                              <div class="progress-bar" role="progressbar" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100"></div>
                           </div>
                        </div>
                        <div class="mb-4">
                           <p class="mb-2">LT AB Cable 70 sqmm <span class="float-right text-muted">2/6</span></p>
                           <div class="progress">
                              <div class="progress-bar" role="progressbar" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100"></div>
                           </div>
                        </div>
                        <div class="mb-4">
                           <p class="mb-2">LT AB Cable 120 sqmm <span class="float-right text-muted">0/8</span></p>
                           <div class="progress">
                              <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                           </div>
                        </div>
                        <div class="mb-4">
                           <p class="mb-2">120 sqmm HT AB Cable<span class="float-right text-muted">1/2</span></p>
                           <div class="progress">
                              <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                           </div>
                        </div>
                     <div class="mb-4">
                           <p class="mb-2">100 sq mm DOG conductor<span class="float-right text-muted">1/2</span></p>
                           <div class="progress">
                              <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-sm-12 mb-4">
                  <div class="card dashboard-progress">
                     <div class="position-absolute card-top-buttons"></div>
                     <div class="card-body">
                        <h5 class="card-title">Pole</h5>
                        <div class="mb-4">
                           <p class="mb-2"><span>8 mtr</span> <span class="float-right text-muted">12/18</span></p>
                           <div class="progress">
                              <div class="progress-bar" role="progressbar" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                           </div>
                        </div>
                        <div class="mb-4">
                           <p class="mb-2">9 mtr <span class="float-right text-muted">1/8</span></p>
                           <div class="progress">
                              <div class="progress-bar" role="progressbar" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100"></div>
                           </div>
                        </div>
                        <div class="mb-4">
                           <p class="mb-2">11 mtr <span class="float-right text-muted">2/6</span></p>
                           <div class="progress">
                              <div class="progress-bar" role="progressbar" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100"></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               
            </div>
			<div class="row sortable">
               <div class="col-xl-3 col-lg-6 mb-4">
                  <div class="card">
                     
                     <div class="card-body d-flex justify-content-between align-items-center">
                        <h6 class="mb-0">ED-1st Srinagar</h6>
                        <div role="progressbar" class="progress-bar-circle position-relative" data-color="#922c88" data-trailcolor="#d7d7d7" aria-valuemax="24" aria-valuenow="5" data-show-percent="true"></div>
                     </div>
					 <div class="card-header p-3 position-relative">
						<h6 class="mb-0">Date of Award 07.06.2023</h6>
						<h6 class="mb-0">Total month 24</h6>
						<h6 class="mb-0">Lapsed Month 5</h6>
                     </div>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-6 mb-4">
                  <div class="card">
                     <div class="card-body d-flex justify-content-between align-items-center">
                        <h6 class="mb-0">ED 2nd Srinagar</h6>
                        <div role="progressbar" class="progress-bar-circle position-relative" data-color="#922c88" data-trailcolor="#d7d7d7" aria-valuemax="100" aria-valuenow="64" data-show-percent="true"></div>
                     </div>
					 <div class="card-header p-3 position-relative">
						<h6 class="mb-0">Date of Award 07.06.2023</h6>
						<h6 class="mb-0">Total month 24</h6>
						<h6 class="mb-0">Lapsed Month 5</h6>
                     </div>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-6 mb-4">
                  <div class="card">
                     <div class="card-body d-flex justify-content-between align-items-center">
                        <h6 class="mb-0">(ED-3rd Srinagar)</h6>
                        <div role="progressbar" class="progress-bar-circle position-relative" data-color="#922c88" data-trailcolor="#d7d7d7" aria-valuemax="100" aria-valuenow="75" data-show-percent="true"></div>
                     </div>
					 <div class="card-header p-3 position-relative">
						<h6 class="mb-0">Date of Award 07.06.2023</h6>
						<h6 class="mb-0">Total month 24</h6>
						<h6 class="mb-0">Lapsed Month 5</h6>
                     </div>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-6 mb-4">
                  <div class="card">
                     <div class="card-body d-flex justify-content-between align-items-center">
                        <h6 class="mb-0">(Budgam)</h6>
                        <div role="progressbar" class="progress-bar-circle position-relative" data-color="#922c88" data-trailcolor="#d7d7d7" aria-valuemax="100" aria-valuenow="32" data-show-percent="true"></div>
                     </div>
					 <div class="card-header p-3 position-relative">
						<h6 class="mb-0">Date of Award 07.06.2023</h6>
						<h6 class="mb-0">Total month 24</h6>
						<h6 class="mb-0">Lapsed Month 5</h6>
                     </div>
                  </div>
               </div>
			   <div class="col-xl-3 col-lg-6 mb-4">
                  <div class="card">
                     <div class="card-body d-flex justify-content-between align-items-center">
                        <h6 class="mb-0">(Baramulla)</h6>
                        <div role="progressbar" class="progress-bar-circle position-relative" data-color="#922c88" data-trailcolor="#d7d7d7" aria-valuemax="100" aria-valuenow="32" data-show-percent="true"></div>
                     </div>
					 <div class="card-header p-3 position-relative">
						<h6 class="mb-0">Date of Award 07.06.2023</h6>
						<h6 class="mb-0">Total month 24</h6>
						<h6 class="mb-0">Lapsed Month 5</h6>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </main>
      <footer class="page-footer">
         <div class="footer-content">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-12 col-sm-6">
                     <p class="mb-0 text-muted">Medhaj technosoft 2023</p>
                  </div>
				  </div>
            </div>
         </div>
      </footer>
      <script src="js/vendor/jquery-3.3.1.min.js"></script>
	  <script src="js/vendor/bootstrap.bundle.min.js"></script>
	  <script src="js/vendor/Chart.bundle.min.js"></script>
	  <script src="js/vendor/chartjs-plugin-datalabels.js"></script>
	  <script src="js/vendor/moment.min.js"></script>
	  <script src="js/vendor/fullcalendar.min.js"></script>
	  <script src="js/vendor/datatables.min.js"></script>
	  <script src="js/vendor/perfect-scrollbar.min.js"></script>
	  <script src="js/vendor/progressbar.min.js"></script>
	  <script src="js/vendor/jquery.barrating.min.js"></script>
	  <script src="js/vendor/select2.full.js"></script>
	  <script src="js/vendor/nouislider.min.js"></script>
	  <script src="js/vendor/bootstrap-datepicker.js"></script>
	  <script src="js/vendor/Sortable.js"></script>
	  <script src="js/vendor/mousetrap.min.js"></script>
	  <script src="js/vendor/glide.min.js"></script>
	  
    
      
<script>
	$(document).ready(function(){
		
		$("#state").change(function(){		
         $("#discom").html('');
         $("#circle").html('');
         $("#district").html('');
         $("#division").html('');
         $("#sub_division").html('');
         $("#feeder").html('');
         sessionStorage.setItem('state', "");
				var getstate = $(this).val();
            sessionStorage.setItem('state', getstate);	
            console.log(sessionStorage.getItem('state'));	
					$.ajax({
						type: 'POST',
						url: 'ajax_data.php',
						data: {state:getstate,"type":"state"},
						success: function(data){
                     $("#discom").show();
							$("#discom").html('<option label="&nbsp;">&nbsp;</option>'+data);
						}
					});
				
		});
		$("#discom").change(function(){				
				var getdiscom = $(this).val();
					$.ajax({
						type: 'POST',
						url: 'ajax_data.php',
						data: {discom:getdiscom,"type":"discom"},
						success: function(data){
                     if(data==""){
                        $("#discom").hide();
                     }else{
							$("#circle").html('<option label="&nbsp;">&nbsp;</option>'+data);
                  }
						}
					});
				
		});
      $("#circle").change(function(){				
				var getcircle = $(this).val();
            var getstate=$("#state").val();
					$.ajax({
						type: 'POST',
						url: 'ajax_data.php',
						data: {state:getstate,circle:getcircle,"type":"circle"},
						success: function(data){
							$("#district").html('<option label="&nbsp;">&nbsp;</option>'+data);
						}
					});
				
		});
      $("#district").change(function(){		
         
         $("#enabel_division").show();		
				var getdistrict = $(this).val();
					$.ajax({
						type: 'POST',
						url: 'ajax_data.php',
						data: {district:getdistrict,"type":"district"},
						success: function(data){
                     if(data){
							$("#division").html('<option label="&nbsp;">&nbsp;</option>'+data);
                      }else{
                        $("#division").trigger("change");
                        $("#enabel_division").hide();
                      }
						}
					});
				
		});
      $("#division").change(function(){		
         	
				var getsub_division = $(this).val();
            var district=$("#district").val();
					$.ajax({
						type: 'POST',
						url: 'ajax_data.php',
						data: {division:getsub_division,district:district,"type":"division"},
						success: function(data){
                     if(data){
							$("#sub_division").html('<option label="&nbsp;">&nbsp;</option>'+data);
                      }
						}
					});
				
		});
      $("#sub_division").change(function(){		
         	
				var getsub_division = $(this).val();
					$.ajax({
						type: 'POST',
						url: 'ajax_data.php',
						data: {sub_division:getsub_division,"type":"sub_division"},
						success: function(data){
                     if(data){
							$("#feeder").html('<option label="&nbsp;">&nbsp;</option>'+data);
                      }
						}
					});
				
		});

      
      
	});
</script>
<script>
   $.fn.addCommas = function(e) {
        for (var t = (e += "").split("."), a = t[0], n = t.length > 1 ? "." + t[1] : "", o = /(\d+)(\d{3})/; o.test(a);) a = a.replace(o, "$1,$2");
        return a + n
    },
    function(e) {
        e.fn.stateButton = function(t) {
            return this.length > 1 ? (this.each((function() {
                e(this).stateButton(t)
            })), this) : (this.initialize = function() {
                return this
            }, this.showSpinner = function() {
                return e(this).addClass("show-spinner"), e(this).addClass("active"), this
            }, this.hideSpinner = function() {
                return e(this).removeClass("show-spinner"), this
            }, this.showFail = function(t) {
                return e(this).addClass("show-fail"), e(this).removeClass("show-spinner"), t && e(this).find(".icon.fail").tooltip("show"), this
            }, this.showSuccess = function(t) {
                return e(this).addClass("show-success"), e(this).removeClass("show-spinner"), t && e(this).find(".icon.success").tooltip("show"), this
            }, this.reset = function() {
                this.hideTooltips(), this.hideSpinner(), e(this).removeClass("show-success"), e(this).removeClass("show-fail"), e(this).removeClass("active")
            }, this.hideTooltips = function() {
                return this.hideFailTooltip(), this.hideSuccessTooltip(), this
            }, this.showSuccessTooltip = function() {
                return e(this).find(".icon.success").tooltip("show"), this
            }, this.hideSuccessTooltip = function() {
                return e(this).find(".icon.success").tooltip("dispose"), this
            }, this.showFailTooltip = function() {
                return e(this).find(".icon.fail").tooltip("show"), this
            }, this.hideFailTooltip = function() {
                return e(this).find(".icon.fail").tooltip("dispose"), this
            }, this.initialize())
        }
    }(jQuery), $.shiftSelectable = function(e, t) {
        var a = this;
        t = $.extend({
            items: ".card"
        }, t);
        var n, o = $(e),
            i = null,
            r = o.find("input[type='checkbox']");

        function s(e, t) {
            if ($(e).prop("checked", !$(e).prop("checked")).trigger("change"), n || (n = e), n) {
                if (t) {
                    var a = r.index(e),
                        o = r.index(n);
                    r.slice(Math.min(a, o), Math.max(a, o) + 1).prop("checked", n.checked).trigger("change")
                }
                n = e
            }
            if (i) {
                var s = !1,
                    d = !0;
                r.each((function() {
                    $(this).prop("checked") ? s = !0 : d = !1
                })), s ? i.prop("indeterminate", s) : (i.prop("indeterminate", s), i.prop("checked", s)), d && (i.prop("indeterminate", !1), i.prop("checked", d))
            }
            document.activeElement.blur(), l()
        }

        function l() {
            r.each((function() {
                $(this).prop("checked") ? $(this).parents(".card").addClass("active") : $(this).parents(".card").removeClass("active")
            }))
        }
        o.data("checkAll") && (i = $("#" + o.data("checkAll"))).on("click", (function() {
            r.prop("checked", $(i).prop("checked")).trigger("change"), document.activeElement.blur(), l()
        })), o.on("click", t.items, (function(e) {
            $(e.target).is("a") || $(e.target).parent().is("a") || ($(e.target).is("input[type='checkbox']") && (e.preventDefault(), e.stopPropagation()), s($(this).find("input[type='checkbox']")[0], e.shiftKey))
        })), a.update = function() {
            r = o.find("input[type='checkbox']")
        }, a.selectAll = function() {
            i && (r.prop("checked", !0).trigger("change"), i.prop("checked", !0), i.prop("indeterminate", !1), l())
        }, a.deSelectAll = function() {
            i && (r.prop("checked", !1).trigger("change"), i.prop("checked", !1), i.prop("indeterminate", !1), l())
        }, a.rightClick = function(e) {
            var t = $(e).find("input[type='checkbox']")[0];
            $(t).prop("checked") || (a.deSelectAll(), s(t, !1))
        }
    }, $.fn.shiftSelectable = function(e) {
        return this.each((function() {
            if (null == $(this).data("shiftSelectable")) {
                var t = new $.shiftSelectable(this, e);
                $(this).data("shiftSelectable", t)
            }
        }))
    }, $.dore = function(e, t) {
        var a = {},
            n = this;
        n.settings = {};
        $(e), e = e;
        var o, i = !1;
        ! function() {
            Ce = Ce || {}, n.settings = $.extend({}, a, Ce),
                function() {
                    try {
                        localStorage.getItem("dore-direction") && (o = localStorage.getItem("dore-direction")), i = "rtl" == o && !0
                    } catch (e) {
                        i = !1
                    }
                }();
            var e = getComputedStyle(document.body),
                t = e.getPropertyValue("--theme-color-1").trim(),
                r = e.getPropertyValue("--theme-color-2").trim(),
                s = e.getPropertyValue("--theme-color-3").trim(),
                l = e.getPropertyValue("--theme-color-4").trim(),
                d = e.getPropertyValue("--theme-color-5").trim(),
                c = (e.getPropertyValue("--theme-color-6").trim(), e.getPropertyValue("--theme-color-1-10").trim()),
                p = e.getPropertyValue("--theme-color-2-10").trim(),
                u = e.getPropertyValue("--theme-color-3-10").trim(),
                h = e.getPropertyValue("--theme-color-4-10").trim(),
                m = e.getPropertyValue("--theme-color-5-10").trim(),
                g = (e.getPropertyValue("--theme-color-6-10").trim(), e.getPropertyValue("--primary-color").trim()),
                f = e.getPropertyValue("--foreground-color").trim(),
                b = e.getPropertyValue("--separator-color").trim();

            function C() {
                $(window).outerHeight();
                var e = $(window).outerWidth();
                $(".navbar").outerHeight(), parseInt($(".sub-menu .scroll").css("margin-top"), 10);
                $(".chat-app .scroll").length > 0 && me && ($(".chat-app .scroll").scrollTop($(".chat-app .scroll").prop("scrollHeight")), me.update()), e < 768 ? $("#app-container").addClass("menu-mobile") : e < 1440 ? ($("#app-container").removeClass("menu-mobile"), $("#app-container").hasClass("menu-default") && ($("#app-container").removeClass(k), $("#app-container").addClass("menu-default menu-sub-hidden"))) : ($("#app-container").removeClass("menu-mobile"), $("#app-container").hasClass("menu-default") && $("#app-container").hasClass("menu-sub-hidden") && $("#app-container").removeClass("menu-sub-hidden")), x(0, !0)
            }
            $(window).on("resize", (function(e) {
                e.originalEvent.isTrusted && C()
            })), C(), $(".search .search-icon").on("click", (function() {
                $(window).outerWidth() < 768 ? $(".search").hasClass("mobile-view") ? ($(".search").removeClass("mobile-view"), w()) : ($(".search").addClass("mobile-view"), $(".search input").focus()) : w()
            })), $(".search input").on("keyup", (function(e) {
                13 == e.which && w(), 27 == e.which && y()
            })), $(document).on("click", (function(e) {
                $(e.target).parents().hasClass("search") || y()
            })), $(".list").shiftSelectable();
            var v = 0,
                k = "menu-default menu-hidden sub-hidden main-hidden menu-sub-hidden main-show-temporary sub-show-temporary menu-mobile";

            function x(e, t, a) {
                v = e;
                var n = $("#app-container");
                if (0 != n.length) {
                    a = a || S();
                    if (0 == $(".sub-menu ul[data-link='" + a + "']").length && (2 == v || t) && $(window).outerWidth() >= 768 && B("menu-default")) return t ? ($("#app-container").removeClass(k), $("#app-container").addClass("menu-default menu-sub-hidden sub-hidden"), v = 0) : ($("#app-container").removeClass(k), $("#app-container").addClass("menu-default main-hidden menu-sub-hidden sub-hidden"), v = 0), void A();
                    if (0 == $(".sub-menu ul[data-link='" + a + "']").length && (1 == v || t) && $(window).outerWidth() >= 768 && B("menu-sub-hidden")) return t ? ($("#app-container").removeClass(k), $("#app-container").addClass("menu-sub-hidden sub-hidden"), v = 0) : ($("#app-container").removeClass(k), $("#app-container").addClass("menu-sub-hidden main-hidden sub-hidden"), v = -1), void A();
                    if (0 == $(".sub-menu ul[data-link='" + a + "']").length && (1 == v || t) && $(window).outerWidth() >= 768 && B("menu-hidden")) return t ? ($("#app-container").removeClass(k), $("#app-container").addClass("menu-hidden main-hidden sub-hidden"), v = 0) : ($("#app-container").removeClass(k), $("#app-container").addClass("menu-hidden main-show-temporary"), v = 3), void A();
                    e % 4 == 0 ? (B("menu-main-hidden") ? nextClasses = "menu-main-hidden" : B("menu-default") && B("menu-sub-hidden") ? nextClasses = "menu-default menu-sub-hidden" : B("menu-default") ? nextClasses = "menu-default" : B("menu-sub-hidden") ? nextClasses = "menu-sub-hidden" : B("menu-hidden") && (nextClasses = "menu-hidden"), v = 0) : e % 4 == 1 ? B("menu-default") && B("menu-sub-hidden") ? nextClasses = "menu-default menu-sub-hidden main-hidden sub-hidden" : B("menu-default") ? nextClasses = "menu-default sub-hidden" : B("menu-main-hidden") ? nextClasses = "menu-main-hidden menu-hidden" : B("menu-sub-hidden") ? nextClasses = "menu-sub-hidden main-hidden sub-hidden" : B("menu-hidden") && (nextClasses = "menu-hidden main-show-temporary") : e % 4 == 2 ? B("menu-main-hidden") && B("menu-hidden") ? nextClasses = "menu-main-hidden" : B("menu-default") && B("menu-sub-hidden") ? nextClasses = "menu-default menu-sub-hidden sub-hidden" : B("menu-default") ? nextClasses = "menu-default main-hidden sub-hidden" : B("menu-sub-hidden") ? nextClasses = "menu-sub-hidden sub-hidden" : B("menu-hidden") && (nextClasses = "menu-hidden main-show-temporary sub-show-temporary") : e % 4 == 3 && (B("menu-main-hidden") ? nextClasses = "menu-main-hidden menu-hidden" : B("menu-default") && B("menu-sub-hidden") ? nextClasses = "menu-default menu-sub-hidden sub-show-temporary" : B("menu-default") ? nextClasses = "menu-default sub-hidden" : B("menu-sub-hidden") ? nextClasses = "menu-sub-hidden sub-show-temporary" : B("menu-hidden") && (nextClasses = "menu-hidden main-show-temporary")), B("menu-mobile") && (nextClasses += " menu-mobile"), n.removeClass(k), n.addClass(nextClasses), A()
                }
            }

            function S() {
                var e = $(".main-menu ul li.active a").attr("href");
                return e ? e.replace("#", "") : ""
            }

            function B(e) {
                return $("#app-container").attr("class").split(" ").filter((function(e) {
                    return "" != e
                })).includes(e)
            }
            $(".menu-button").on("click", (function(e) {
                e.preventDefault(), x(++v)
            })), $(".menu-button-mobile").on("click", (function(e) {
                return e.preventDefault(), $("#app-container").removeClass("sub-show-temporary").toggleClass("main-show-temporary"), !1
            })), $(".main-menu").on("click", "a", (function(e) {
                e.preventDefault();
                var t = $(this).attr("href").replace("#", "");
                if (0 != $(".sub-menu ul[data-link='" + t + "']").length) {
                    T($(this).attr("href"));
                    $("#app-container");
                    return $("#app-container").hasClass("menu-mobile") ? $("#app-container").addClass("sub-show-temporary") : !$("#app-container").hasClass("menu-sub-hidden") || 2 != v && 0 != v ? !$("#app-container").hasClass("menu-hidden") || 1 != v && 3 != v ? !$("#app-container").hasClass("menu-default") || $("#app-container").hasClass("menu-sub-hidden") || 1 != v && 3 != v || x(0, !1, t) : x(2, !1, t) : x(3, !1, t), !1
                }
                var a = $(this).attr("target");
                null == $(this).attr("target") ? window.open(t, "_self") : window.open(t, a)
            })), $(document).on("click", (function(e) {
                if (!($(e.target).parents().hasClass("menu-button") || $(e.target).hasClass("menu-button") || $(e.target).parents().hasClass("sidebar") || $(e.target).hasClass("sidebar"))) {
                    if ($(e.target).parents("a[data-toggle='collapse']").length > 0 || "collapse" == $(e.target).attr("data-toggle")) return;
                    if ($("#app-container").hasClass("menu-sub-hidden") && 3 == v) x(S() == W ? 2 : 0);
                    else($("#app-container").hasClass("menu-main-hidden") && $("#app-container").hasClass("menu-mobile") || $("#app-container").hasClass("menu-hidden") || $("#app-container").hasClass("menu-mobile")) && x(0)
                }
            }));
            var W = "";

            function T(e) {
                if (0 != $(".main-menu").length) {
                    var t = e ? e.replace("#", "") : "";
                    if (0 == $(".sub-menu ul[data-link='" + t + "']").length) {
                        if ($("#app-container").removeClass("sub-show-temporary"), 0 == $("#app-container").length) return;
                        return v = B("menu-sub-hidden") || B("menu-hidden") ? 0 : 1, $("#app-container").addClass("sub-hidden"), $(".sub-menu").addClass("no-transition"), $("main").addClass("no-transition"), void setTimeout((function() {
                            $(".sub-menu").removeClass("no-transition"), $("main").removeClass("no-transition")
                        }), 350)
                    }
                    t != W && ($(".sub-menu ul").fadeOut(0), $(".sub-menu ul[data-link='" + t + "']").slideDown(100), $(".sub-menu .scroll").scrollTop(0), W = t)
                }
            }

            function A() {
                setTimeout((function() {
                    var e = document.createEvent("HTMLEvents");
                    e.initEvent("resize", !1, !1), window.dispatchEvent(e)
                }), 350)
            }

            function E(e) {
                var t = $(e.parents(".question"));
                t.toggleClass("edit-quesiton"), t.toggleClass("view-quesiton");
                var a = t.find(".question-collapse");
                a.hasClass("show") || (a.collapse("toggle"), t.find(".rotate-icon-click").toggleClass("rotate"))
            }
            if (T($(".main-menu ul li.active a").attr("href")), $(".app-menu-button").on("click", (function(e) {
                    e.preventDefault(), $(".app-menu").hasClass("shown") ? $(".app-menu").removeClass("shown") : $(".app-menu").addClass("shown")
                })), $(document).on("click", (function(e) {
                    $(e.target).parents().hasClass("app-menu") || $(e.target).parents().hasClass("app-menu-button") || $(e.target).hasClass("app-menu-button") || $(e.target).hasClass("app-menu") || $(".app-menu").hasClass("shown") && $(".app-menu").removeClass("shown")
                })), $(document).on("click", ".question .view-button", (function() {
                    E($(this))
                })), $(document).on("click", ".question .edit-button", (function() {
                    E($(this))
                })), $(document).on("click", ".rotate-icon-click", (function() {
                    $(this).toggleClass("rotate")
                })), "undefined" != typeof Chart) {
                Chart.defaults.global.defaultFontFamily = "'Nunito', sans-serif", Chart.defaults.LineWithShadow = Chart.defaults.line, Chart.controllers.LineWithShadow = Chart.controllers.line.extend({
                    draw: function(e) {
                        Chart.controllers.line.prototype.draw.call(this, e);
                        var t = this.chart.ctx;
                        t.save(), t.shadowColor = "rgba(0,0,0,0.15)", t.shadowBlur = 10, t.shadowOffsetX = 0, t.shadowOffsetY = 10, t.responsive = !0, t.stroke(), Chart.controllers.line.prototype.draw.apply(this, arguments), t.restore()
                    }
                }), Chart.defaults.BarWithShadow = Chart.defaults.bar, Chart.controllers.BarWithShadow = Chart.controllers.bar.extend({
                    draw: function(e) {
                        Chart.controllers.bar.prototype.draw.call(this, e);
                        var t = this.chart.ctx;
                        t.save(), t.shadowColor = "rgba(0,0,0,0.15)", t.shadowBlur = 12, t.shadowOffsetX = 5, t.shadowOffsetY = 10, t.responsive = !0, Chart.controllers.bar.prototype.draw.apply(this, arguments), t.restore()
                    }
                }), Chart.defaults.LineWithLine = Chart.defaults.line, Chart.controllers.LineWithLine = Chart.controllers.line.extend({
                    draw: function(e) {
                        if (Chart.controllers.line.prototype.draw.call(this, e), this.chart.tooltip._active && this.chart.tooltip._active.length) {
                            var t = this.chart.tooltip._active[0],
                                a = this.chart.ctx,
                                n = t.tooltipPosition().x,
                                o = this.chart.scales["y-axis-0"].top,
                                i = this.chart.scales["y-axis-0"].bottom;
                            a.save(), a.beginPath(), a.moveTo(n, o), a.lineTo(n, i), a.lineWidth = 1, a.strokeStyle = "rgba(0,0,0,0.1)", a.stroke(), a.restore()
                        }
                    }
                }), Chart.defaults.DoughnutWithShadow = Chart.defaults.doughnut, Chart.controllers.DoughnutWithShadow = Chart.controllers.doughnut.extend({
                    draw: function(e) {
                        Chart.controllers.doughnut.prototype.draw.call(this, e);
                        let t = this.chart.chart.ctx;
                        t.save(), t.shadowColor = "rgba(0,0,0,0.15)", t.shadowBlur = 10, t.shadowOffsetX = 0, t.shadowOffsetY = 10, t.responsive = !0, Chart.controllers.doughnut.prototype.draw.apply(this, arguments), t.restore()
                    }
                }), Chart.defaults.PieWithShadow = Chart.defaults.pie, Chart.controllers.PieWithShadow = Chart.controllers.pie.extend({
                    draw: function(e) {
                        Chart.controllers.pie.prototype.draw.call(this, e);
                        let t = this.chart.chart.ctx;
                        t.save(), t.shadowColor = "rgba(0,0,0,0.15)", t.shadowBlur = 10, t.shadowOffsetX = 0, t.shadowOffsetY = 10, t.responsive = !0, Chart.controllers.pie.prototype.draw.apply(this, arguments), t.restore()
                    }
                }), Chart.defaults.ScatterWithShadow = Chart.defaults.scatter, Chart.controllers.ScatterWithShadow = Chart.controllers.scatter.extend({
                    draw: function(e) {
                        Chart.controllers.scatter.prototype.draw.call(this, e);
                        let t = this.chart.chart.ctx;
                        t.save(), t.shadowColor = "rgba(0,0,0,0.2)", t.shadowBlur = 7, t.shadowOffsetX = 0, t.shadowOffsetY = 7, t.responsive = !0, Chart.controllers.scatter.prototype.draw.apply(this, arguments), t.restore()
                    }
                }), Chart.defaults.RadarWithShadow = Chart.defaults.radar, Chart.controllers.RadarWithShadow = Chart.controllers.radar.extend({
                    draw: function(e) {
                        Chart.controllers.radar.prototype.draw.call(this, e);
                        let t = this.chart.chart.ctx;
                        t.save(), t.shadowColor = "rgba(0,0,0,0.2)", t.shadowBlur = 7, t.shadowOffsetX = 0, t.shadowOffsetY = 7, t.responsive = !0, Chart.controllers.radar.prototype.draw.apply(this, arguments), t.restore()
                    }
                }), Chart.defaults.PolarWithShadow = Chart.defaults.polarArea, Chart.controllers.PolarWithShadow = Chart.controllers.polarArea.extend({
                    draw: function(e) {
                        Chart.controllers.polarArea.prototype.draw.call(this, e);
                        let t = this.chart.chart.ctx;
                        t.save(), t.shadowColor = "rgba(0,0,0,0.2)", t.shadowBlur = 10, t.shadowOffsetX = 5, t.shadowOffsetY = 10, t.responsive = !0, Chart.controllers.polarArea.prototype.draw.apply(this, arguments), t.restore()
                    }
                });
                var z = {
                    backgroundColor: f,
                    titleFontColor: g,
                    borderColor: b,
                    borderWidth: .5,
                    bodyFontColor: g,
                    bodySpacing: 10,
                    xPadding: 15,
                    yPadding: 15,
                    cornerRadius: .15,
                    displayColors: !1
                };
                if (document.getElementById("productChart1")) {
                    var j = document.getElementById("productChart1").getContext("2d");
                    new Chart(j, {
                        type: "BarWithShadow",
                        options: {
                            plugins: {
                                datalabels: {
                                    display: !1
                                }
                            },
                            responsive: !0,
                            maintainAspectRatio: !1,
                            scales: {
                                yAxes: [{
                                    gridLines: {
                                        display: !0,
                                        lineWidth: 1,
                                        color: "rgba(0,0,0,0.1)",
                                        drawBorder: !1
                                    },
                                    ticks: {
                                        beginAtZero: !0,
                                        stepSize: 1000,
                                        min: 200,
                                        max: 10000,
                                        padding: 20
                                    }
                                }],
                                xAxes: [{
                                    gridLines: {
                                        display: !1
                                    }
                                }]
                            },
                            legend: {
                                position: "bottom",
                                labels: {
                                    padding: 30,
                                    usePointStyle: !0,
                                    fontSize: 12
                                }
                            },
                            tooltips: z
                        },
                        data: {
                            labels: ["Pole(Nos.)", "Conductor(Ckm)", "ABCable(Km)"],
                            datasets: [{
                                label: "Awarded",
                                borderColor: t,
                                backgroundColor: c,
                                data: [10000, 2200, 300],
                                borderWidth: 2
                            }, {
                                label: "Surveyed",
                                borderColor: r,
                                backgroundColor: p,
                                data: [8000, 1500, 250],
                                borderWidth: 2
                            }, {
                                label: "Executed",
                                borderColor: r,
                                backgroundColor: p,
                                data: [4000, 1100, 200],
                                borderWidth: 2
                            }]
                        }
                    })
                }
                if (document.getElementById("productChart")) {
                    var j = document.getElementById("productChart").getContext("2d");
                    new Chart(j, {
                        type: "BarWithShadow",
                        options: {
                            plugins: {
                                datalabels: {
                                    display: !1
                                }
                            },
                            responsive: !0,
                            maintainAspectRatio: !1,
                            scales: {
                                yAxes: [{
                                    gridLines: {
                                        display: !0,
                                        lineWidth: 1,
                                        color: "rgba(0,0,0,0.1)",
                                        drawBorder: !1
                                    },
                                    ticks: {
                                        beginAtZero: !0,
                                        stepSize: 1000,
                                        min:200,
                                        max: 10000,
                                        padding: 20
                                    }
                                }],
                                xAxes: [{
                                    gridLines: {
                                        display: !1
                                    }
                                }]
                            },
                            legend: {
                                position: "bottom",
                                labels: {
                                    padding: 30,
                                    usePointStyle: !0,
                                    fontSize: 12
                                }
                            },
                            tooltips: z
                        },
                        data: {
                            labels: ["Pole (Nos.)", "Conductor(Ckm)", "HT AB Cable (Km)", "LT AB Cable (Km)"],
                            datasets: [{
                                label: "Awarded",
                                borderColor: t,
                                backgroundColor: c,
                                data: [10000, 2200, 300,1000],
                                borderWidth: 2
                            }, {
                                label: "Surveyed",
                                borderColor: r,
                                backgroundColor: p,
                                data: [8000, 1500, 250,800],
                                borderWidth: 2
                            }, {
                                label: "Executed",
                                borderColor: r,
                                backgroundColor: p,
                                data: [4000, 1100, 200,700],
                                borderWidth: 2
                            }]
                        }
                    })
                }
                if (document.getElementById("productChartNoShadow")) {
                    var Q = document.getElementById("productChartNoShadow").getContext("2d");
                    new Chart(Q, {
                        type: "bar",
                        options: {
                            plugins: {
                                datalabels: {
                                    display: !1
                                }
                            },
                            responsive: !0,
                            maintainAspectRatio: !1,
                            scales: {
                                yAxes: [{
                                    gridLines: {
                                        display: !0,
                                        lineWidth: 1,
                                        color: "rgba(0,0,0,0.1)",
                                        drawBorder: !1
                                    },
                                    ticks: {
                                        beginAtZero: !0,
                                        stepSize: 1000,
                                        min: 200,
                                        max: 10000,
                                        padding: 20
                                    }
                                }],
                                xAxes: [{
                                    gridLines: {
                                        display: !1
                                    }
                                }]
                            },
                            legend: {
                                position: "bottom",
                                labels: {
                                    padding: 30,
                                    usePointStyle: !0,
                                    fontSize: 12
                                }
                            },
                            tooltips: z
                        },
                        data: {
                            labels: ["Pole (Nos.)", "Conductor (Ckm) ", "AB Cable (Km)"],
                            datasets: [{
                                label: "Awarded",
                                borderColor: t,
                                backgroundColor: c,
                                data: [10000, 2200, 300],
                                borderWidth: 2
                            }, {
                                label: "Surveyed",
                                borderColor: r,
                                backgroundColor: p,
                                data: [8000, 1500, 250],
                                borderWidth: 2
                            }, {
                                label: "Executed",
                                borderColor: r,
                                backgroundColor: p,
                                data: [4000, 1100, 200],
                                borderWidth: 2
                            }]
                        }
                    })
                }
                if (document.getElementById("productChartNoShadow1")) {
                    var Q = document.getElementById("productChartNoShadow1").getContext("2d");
                    new Chart(Q, {
                        type: "bar",
                        options: {
                            plugins: {
                                datalabels: {
                                    display: !1
                                }
                            },
                            responsive: !0,
                            maintainAspectRatio: !1,
                            scales: {
                                yAxes: [{
                                    gridLines: {
                                        display: !0,
                                        lineWidth: 1,
                                        color: "rgba(0,0,0,0.1)",
                                        drawBorder: !1
                                    },
                                    ticks: {
                                        beginAtZero: !0,
                                        stepSize: 1000,
                                        min: 200,
                                        max: 10000,
                                        padding: 20
                                    }
                                }],
                                xAxes: [{
                                    gridLines: {
                                        display: !1
                                    }
                                }]
                            },
                            legend: {
                                position: "bottom",
                                labels: {
                                    padding: 30,
                                    usePointStyle: !0,
                                    fontSize: 12
                                }
                            },
                            tooltips: z
                        },
                        data: {
                            labels: ["Pole", "Conductor", "A B Cable", "Transformer"],
                            datasets: [{
                                label: "Awarded",
                                borderColor: "orange",
                                backgroundColor: c,
                                data: [10000, 2200, 300, 6000],
                                borderWidth: 2
                            }, {
                                label: "Surveyed",
                                borderColor: "red",
                                backgroundColor: p,
                                data: [8000, 1500, 250, 3500],
                                borderWidth: 2
                            }, {
                                label: "Executed",
                                borderColor: "green",
                                backgroundColor: p,
                                data: [4000, 1100, 200, 2700],
                                borderWidth: 2
                            }]
                        }
                    })
                }
                if (document.getElementById("productChartNoShadow2")) {
                    var Q = document.getElementById("productChartNoShadow2").getContext("2d");
                    new Chart(Q, {
                        type: "bar",
                        options: {
                            plugins: {
                                datalabels: {
                                    display: !1
                                }
                            },
                            responsive: !0,
                            maintainAspectRatio: !1,
                            scales: {
                                yAxes: [{
                                    gridLines: {
                                        display: !0,
                                        lineWidth: 1,
                                        color: "rgba(0,0,0,0.1)",
                                        drawBorder: !1
                                    },
                                    ticks: {
                                        beginAtZero: !0,
                                        stepSize: 10000,
                                        min: 500,
                                        max: 25000,
                                        padding: 20
                                    }
                                }],
                                xAxes: [{
                                    gridLines: {
                                        display: !1
                                    }
                                }]
                            },
                            legend: {
                                position: "bottom",
                                labels: {
                                    padding: 30,
                                    usePointStyle: !0,
                                    fontSize: 12
                                }
                            },
                            tooltips: z
                        },
                        data: {
                            labels: ["11 Mtr Pole", "9 Mtr Pole", "8 Mtr Pole", "HT AB Cabel","Dog Conductor","Rabbit Conductor","Distribution"],
                            datasets: [{
                                label: "Awarded",
                                borderColor: t,
                                backgroundColor: c,
                                data: [1000, 12500, 23000, 500,1200,900,9000],
                                borderWidth: 2
                            }, {
                                label: "Supplied",
                                borderColor: r,
                                backgroundColor: p,
                                data: [600, 8700, 17600, 300,700,400,7000],
                                borderWidth: 2
                            }]
                        }
                    })
                }
                if (document.getElementById("productChartNoShadow3")) {
                    var Q = document.getElementById("productChartNoShadow3").getContext("2d");
                    new Chart(Q, {
                        type: "bar",
                        options: {
                            plugins: {
                                datalabels: {
                                    display: !1
                                }
                            },
                            responsive: !0,
                            maintainAspectRatio: !1,
                            scales: {
                                yAxes: [{
                                    gridLines: {
                                        display: !0,
                                        lineWidth: 1,
                                        color: "rgba(0,0,0,0.1)",
                                        drawBorder: !1
                                    },
                                    ticks: {
                                        beginAtZero: !0,
                                        stepSize: 200,
                                        min: 400,
                                        max: 2500,
                                        padding: 20
                                    }
                                }],
                                xAxes: [{
                                    gridLines: {
                                        display: !1
                                    }
                                }]
                            },
                            legend: {
                                position: "bottom",
                                labels: {
                                    padding: 30,
                                    usePointStyle: !0,
                                    fontSize: 12
                                }
                            },
                            tooltips: z
                        },
                        data: {
                            labels: ["ED-1st", "ED-2nd", "ED-3rd", "Baramulla","Budgam"],
                            datasets: [{
                                label: "Total",
                                borderColor: t,
                                backgroundColor: c,
                                data: [1200, 600, 800, 2000,1000],
                                borderWidth: 2
                            }, {
                                label: "Rectified",
                                borderColor: r,
                                backgroundColor: p,
                                data: [700,200,300,1100,600],
                                borderWidth: 2
                            }, {
                                label: "Balance",
                                borderColor: r,
                                backgroundColor: p,
                                data: [500,400,500,900,400],
                                borderWidth: 2
                            }]
                        }
                    })
                }
                if (document.getElementById("productChartNoShadow4")) {
                    var Q = document.getElementById("productChartNoShadow4").getContext("2d");
                    new Chart(Q, {
                        type: "bar",
                        options: {
                            plugins: {
                                datalabels: {
                                    display: !1
                                }
                            },
                            responsive: !0,
                            maintainAspectRatio: !1,
                            scales: {
                                yAxes: [{
                                    gridLines: {
                                        display: !0,
                                        lineWidth: 1,
                                        color: "rgba(0,0,0,0.1)",
                                        drawBorder: !1
                                    },
                                    ticks: {
                                        beginAtZero: !0,
                                        stepSize: 1,
                                        min: 2,
                                        max: 10,
                                        padding: 20
                                    }
                                }],
                                xAxes: [{
                                    gridLines: {
                                        display: !1
                                    }
                                }]
                            },
                            legend: {
                                position: "bottom",
                                labels: {
                                    padding: 30,
                                    usePointStyle: !0,
                                    fontSize: 12
                                }
                            },
                            tooltips: z
                        },
                        data: {
                            labels: ["ED-1st", "ED-2nd", "ED-3rd", "Baramulla","Sopore","Tangmarg","Budgam"],
                            datasets: [{
                                label: "Total NKE",
                                borderColor: t,
                                backgroundColor: c,
                                data: [5,5,5,5,5,3,3],
                                borderWidth: 2
                            }, {
                                label: "Used",
                                borderColor: r,
                                backgroundColor: p,
                                data: [4,5,5,3,5,3,2],
                                borderWidth: 2
                            }]
                        }
                    })
                }
                if (document.getElementById("productChartNoShadow5")) {
                    var Q = document.getElementById("productChartNoShadow5").getContext("2d");
                    new Chart(Q, {
                        type: "bar",
                        options: {
                            plugins: {
                                datalabels: {
                                    display: !1
                                }
                            },
                            responsive: !0,
                            maintainAspectRatio: !1,
                            scales: {
                                yAxes: [{
                                    gridLines: {
                                        display: !0,
                                        lineWidth: 1,
                                        color: "rgba(0,0,0,0.1)",
                                        drawBorder: !1
                                    },
                                    ticks: {
                                        beginAtZero: !0,
                                        stepSize: 50,
                                        min: 50,
                                        max: 250,
                                        padding: 20
                                    }
                                }],
                                xAxes: [{
                                    gridLines: {
                                        display: !1
                                    }
                                }]
                            },
                            legend: {
                                position: "bottom",
                                labels: {
                                    padding: 30,
                                    usePointStyle: !0,
                                    fontSize: 12
                                }
                            },
                            tooltips: z
                        },
                        data: {
                            labels: ["ED-1st", "ED-2nd", "ED-3rd", "Baramulla","Budgam"],
                            datasets: [{
                                label: "Sanctioned",
                                borderColor: t,
                                backgroundColor: c,
                                data: [123,234,71,234,188],
                                borderWidth: 2
                            }, {
                                label: "Awarded",
                                borderColor: r,
                                backgroundColor: p,
                                data: [135,233,69,233,188],
                                borderWidth: 2
                            }, {
                                label: "Fund Received",
                                borderColor: r,
                                backgroundColor: p,
                                data: [0,34,12,0,0],
                                borderWidth: 2
                            }]
                        }
                    })
                }
                if (document.getElementById("productChartNoShadow6")) {
                    var Q = document.getElementById("productChartNoShadow6").getContext("2d");
                    new Chart(Q, {
                        type: "bar",
                        options: {
                            plugins: {
                                datalabels: {
                                    display: !1
                                }
                            },
                            responsive: !0,
                            maintainAspectRatio: !1,
                            scales: {
                                yAxes: [{
                                    gridLines: {
                                        display: !0,
                                        lineWidth: 1,
                                        color: "rgba(0,0,0,0.1)",
                                        drawBorder: !1
                                    },
                                    ticks: {
                                        beginAtZero: !0,
                                        stepSize: 2,
                                        min: 0,
                                        max: 30,
                                        padding: 20
                                    }
                                }],
                                xAxes: [{
                                    gridLines: {
                                        display: !1
                                    }
                                }]
                            },
                            legend: {
                                position: "bottom",
                                labels: {
                                    padding: 30,
                                    usePointStyle: !0,
                                    fontSize: 12
                                }
                            },
                            tooltips: z
                        },
                        data: {
                            labels: ["ED-1st", "ED-2nd", "ED-3rd", "Baramulla","Budgam"],
                            datasets: [{
                                label: "Targeted Months",
                                borderColor: t,
                                backgroundColor: c,
                                data: [24,24,24,24,24],
                                borderWidth: 2
                            }, {
                                label: "Lapsed Months",
                                borderColor: r,
                                backgroundColor: p,
                                data: [3,4,4,4,3],
                                borderWidth: 2
                            }]
                        }
                    })
                }
                var ee = {
                    afterDatasetsUpdate: function(e) {},
                    beforeDraw: function(e) {
                        var t = e.chartArea.right,
                            a = e.chartArea.bottom,
                            n = e.chart.ctx;
                        n.restore();
                        var o = e.data.labels[0],
                            i = e.data.datasets[0].data[0],
                            r = e.data.datasets[0],
                            s = r._meta[Object.keys(r._meta)[0]],
                            l = s.total,
                            d = parseFloat((i / l * 100).toFixed(1));
                        d = e.legend.legendItems[0].hidden ? 0 : d, e.pointAvailable && (o = e.data.labels[e.pointIndex], i = e.data.datasets[e.pointDataIndex].data[e.pointIndex], l = (s = (r = e.data.datasets[e.pointDataIndex])._meta[Object.keys(r._meta)[0]]).total, d = parseFloat((i / l * 100).toFixed(1)), d = e.legend.legendItems[e.pointIndex].hidden ? 0 : d), n.font = "36px Nunito, sans-serif", n.fillStyle = g, n.textBaseline = "middle";
                        var c = d + "%",
                            p = Math.round((t - n.measureText(c).width) / 2),
                            u = a / 2;
                        n.fillText(c, p, u), n.font = "14px Nunito, sans-serif", n.textBaseline = "middle";
                        var h = o;
                        p = Math.round((t - n.measureText(h).width) / 2), u = a / 2 - 30;
                        n.fillText(h, p, u), n.save()
                    },
                    beforeEvent: function(e, t, a) {
                        var n = e.getElementAtEvent(t)[0];
                        n && (e.pointIndex = n._index, e.pointDataIndex = n._datasetIndex, e.pointAvailable = !0)
                    }
                };
                if (document.getElementById("categoryChart")) {
                    var te = document.getElementById("categoryChart");
                    new Chart(te, {
                        plugins: [ee],
                        type: "DoughnutWithShadow",
                        data: {
                            labels: ["Budgam", "ED-1st", "ED-2nd","ED-3rd","Baramulla"],
                            datasets: [{
                                label: "",
                                borderColor: [s, r, t],
                                backgroundColor: [u, p, c],
                                borderWidth: 2,
                                data: [20, 10, 15,10,25]
                            }]
                        },
                        draw: function() {},
                        options: {
                            plugins: {
                                datalabels: {
                                    display: !1
                                }
                            },
                            responsive: !0,
                            maintainAspectRatio: !1,
                            cutoutPercentage: 80,
                            title: {
                                display: !1
                            },
                            layout: {
                                padding: {
                                    bottom: 20
                                }
                            },
                            legend: {
                                position: "bottom",
                                labels: {
                                    padding: 30,
                                    usePointStyle: !0,
                                    fontSize: 12
                                }
                            },
                            tooltips: z
                        }
                    })
                }
                if (document.getElementById("categoryChartNoShadow")) {
                    var ae = document.getElementById("categoryChartNoShadow");
                    new Chart(ae, {
                        plugins: [ee],
                        type: "doughnut",
                        data: {
                            labels: ["Received", "Balance to be Received"],
                            datasets: [{
                                label: "",
                                borderColor: [s, r, t],
                                backgroundColor: [u, p, c],
                                borderWidth: 2,
                                data: [10,90]
                            }]
                        },
                        draw: function() {},
                        options: {
                            plugins: {
                                datalabels: {
                                    display: !1
                                }
                            },
                            responsive: !0,
                            maintainAspectRatio: !1,
                            cutoutPercentage: 80,
                            title: {
                                display: !1
                            },
                            layout: {
                                padding: {
                                    bottom: 20
                                }
                            },
                            legend: {
                                position: "bottom",
                                labels: {
                                    padding: 30,
                                    usePointStyle: !0,
                                    fontSize: 12
                                }
                            },
                            tooltips: z
                        }
                    })
                }
            } 
            var me, ge = window.Cropper;
            if (void 0 !== ge) {
                function fe(e, t) {
                    var a, n = e.length;
                    for (a = 0; a < n; a++) t.call(e, e[a], a, e);
                    return e
                }
                var be = document.querySelectorAll(".cropper-preview"),
                    Ce = {
                        aspectRatio: 4 / 3,
                        preview: ".img-preview",
                        ready: function() {
                            var e = this.cloneNode();
                            e.className = "", e.style.cssText = "display: block;width: 100%;min-width: 0;min-height: 0;max-width: none;max-height: none;", fe(be, (function(t) {
                                t.appendChild(e.cloneNode())
                            }))
                        },
                        crop: function(e) {
                            var t = e.detail,
                                a = this.cropper.getImageData(),
                                n = t.width / t.height;
                            fe(be, (function(e) {
                                var o = e.getElementsByTagName("img").item(0),
                                    i = e.offsetWidth,
                                    r = i / n,
                                    s = t.width / i;
                                e.style.height = r + "px", o && (o.style.width = a.naturalWidth / s + "px", o.style.height = a.naturalHeight / s + "px", o.style.marginLeft = -t.x / s + "px", o.style.marginTop = -t.y / s + "px")
                            }))
                        },
                        zoom: function(e) {}
                    };
                if ($("#inputImage").length > 0) {
                    var we, ye = $("#inputImage")[0],
                        ve = $("#cropperImage")[0];
                    ye.onchange = function() {
                        var e, t = this.files;
                        t && t.length && (e = t[0], $("#cropperContainer").css("display", "block"), /^image\/\w+/.test(e.type) ? (uploadedImageType = e.type, uploadedImageName = e.name, ve.src = uploadedImageURL = URL.createObjectURL(e), we && we.destroy(), we = new ge(ve, Ce), ye.value = null) : window.alert("Please choose an image file."))
                    }
                }
            }
            "undefined" != typeof noUiSlider && ($("#dashboardPriceRange").length > 0 && noUiSlider.create($("#dashboardPriceRange")[0], {
                start: [800, 2100],
                connect: !0,
                tooltips: !0,
                direction: o,
                range: {
                    min: 200,
                    max: 2800
                },
                step: 10,
                format: {
                    to: function(e) {
                        return "$" + $.fn.addCommas(Math.floor(e))
                    },
                    from: function(e) {
                        return e
                    }
                }
            }), $("#doubleSlider").length > 0 && noUiSlider.create($("#doubleSlider")[0], {
                start: [800, 1200],
                connect: !0,
                tooltips: !0,
                direction: o,
                range: {
                    min: 500,
                    max: 1500
                },
                step: 10,
                format: {
                    to: function(e) {
                        return "$" + $.fn.addCommas(Math.round(e))
                    },
                    from: function(e) {
                        return e
                    }
                }
            }), $("#singleSlider").length > 0 && noUiSlider.create($("#singleSlider")[0], {
                start: 0,
                connect: !0,
                tooltips: !0,
                direction: o,
                range: {
                    min: 0,
                    max: 150
                },
                step: 1,
                format: {
                    to: function(e) {
                        return $.fn.addCommas(Math.round(e))
                    },
                    from: function(e) {
                        return e
                    }
                }
            })), $("#exampleModalContent").on("show.bs.modal", (function(e) {
                var t = $(e.relatedTarget).data("whatever"),
                    a = $(this);
                a.find(".modal-title").text("New message to " + t), a.find(".modal-body input").val(t)
            })), "undefined" != typeof PerfectScrollbar && $(".scroll").each((function() {
                if ($(this).parents(".chat-app").length > 0) {
                    var e = $(this)[0],
                        t = ($(this).find(".scroll-content"), !1);

                    function a() {
                        var a = 0;
                        $("main").length > 0 && (a += parseInt($("main").css("margin-top"))), $(".chat-input-container").length > 0 && (a += $(".chat-input-container").outerHeight(!0)), $(".chat-heading-container").length > 0 && (a += $(".chat-heading-container").outerHeight(!0)), $(".separator").length > 0 && (a += $(".separator").outerHeight(!0)), $(".chat-app .scroll").css("height", window.innerHeight - a + "px"), me && ($(".chat-app .scroll").scrollTop($(".chat-app .scroll").prop("scrollHeight")), me.update()), window.innerWidth < 576 ? (me && (me.destroy(), me = null), $(".chat-app .scroll-content > div:last-of-type").css("padding-bottom", $(".chat-input-container").outerHeight(!0) + "px"), t || (setTimeout((function() {
                            $("html, body").animate({
                                scrollTop: $(document).height() + 30
                            }, 100)
                        }), 300), t = !0)) : (me || ((me = new PerfectScrollbar(e, {
                            suppressScrollX: !0
                        })).isRtl = !1, t = !1), $(".chat-app .scroll-content > div:last-of-type").css("padding-bottom", 0))
                    }
                    return $(window).on("resize", (function(e) {
                        a()
                    })), void a()
                }
                new PerfectScrollbar($(this)[0], {
                    suppressScrollX: !0
                }).isRtl = !1
            })), $(".progress-bar").each((function() {
                $(this).css("width", $(this).attr("aria-valuenow") + "%")
            })), "undefined" != typeof ProgressBar && $(".progress-bar-circle").each((function() {
                var e = $(this).attr("aria-valuenow"),
                    a = $(this).data("color") || t,
                    n = $(this).data("trailColor") || "#d7d7d7",
                    o = $(this).attr("aria-valuemax") || 100,
                    i = $(this).data("showPercent");
                new ProgressBar.Circle(this, {
                    color: a,
                    duration: 20,
                    easing: "easeInOut",
                    strokeWidth: 4,
                    trailColor: n,
                    trailWidth: 4,
                    text: {
                        autoStyleContainer: !1
                    },
                    step: function(t, a) {
                        i ? a.setText(Math.round(100 * a.value()) + "%") : a.setText(e + "/" + o)
                    }
                }).animate(e / o)
            })), $().barrating && $(".rating").each((function() {
                var e = $(this).data("currentRating"),
                    t = $(this).data("readonly");
                $(this).barrating({
                    theme: "bootstrap-stars",
                    initialRating: e,
                    readonly: t
                })
            })), $().tagsinput && ($(".tags").tagsinput({
                cancelConfirmKeysOnEmpty: !0,
                confirmKeys: [13]
            }), $("body").on("keypress", ".bootstrap-tagsinput input", (function(e) {
                13 == e.which && (e.preventDefault(), e.stopPropagation())
            }))), "undefined" != typeof Sortable && ($(".sortable").each((function() {
                $(this).find(".handle").length > 0 ? Sortable.create($(this)[0], {
                    handle: ".handle"
                }) : Sortable.create($(this)[0])
            })), $(".sortable-survey").length > 0 && Sortable.create($(".sortable-survey")[0]));
            var $e = $("#successButton").stateButton();
            $e.on("click", (function(e) {
                e.preventDefault(), $e.showSpinner(), setTimeout((function() {
                    $e.showSuccess(!0), setTimeout((function() {
                        $e.reset()
                    }), 2e3)
                }), 3e3)
            }));

            if ("undefined" != typeof ClassicEditor && ClassicEditor.create(document.querySelector("#ckEditorClassic")).catch((function(e) {})), $("body > *").css({
                    opacity: 0
                }), setTimeout((function() {
                    $("body").removeClass("show-spinner"), $("main").addClass("default-transition"), $(".sub-menu").addClass("default-transition"), $(".main-menu").addClass("default-transition"), $(".theme-colors").addClass("default-transition"), $("body > *").animate({
                        opacity: 1
                    }, 100)
                }), 300), "undefined" != typeof Mousetrap && (Mousetrap.bind(["ctrl+down", "command+down"], (function(e) {
                    var t = $(".sub-menu li.active").next();
                    return 0 == t.length && (t = $(".sub-menu li.active").parent().children().first()), window.location.href = t.find("a").attr("href"), !1
                })), Mousetrap.bind(["ctrl+up", "command+up"], (function(e) {
                    var t = $(".sub-menu li.active").prev();
                    return 0 == t.length && (t = $(".sub-menu li.active").parent().children().last()), window.location.href = t.find("a").attr("href"), !1
                })), Mousetrap.bind(["ctrl+shift+down", "command+shift+down"], (function(e) {
                    var t = $(".main-menu li.active").next();
                    0 == t.length && (t = $(".main-menu li:first-of-type"));
                    var a = t.find("a").attr("href").replace("#", ""),
                        n = $(".sub-menu ul[data-link='" + a + "'] li:first-of-type");
                    return window.location.href = n.find("a").attr("href"), !1
                })), Mousetrap.bind(["ctrl+shift+up", "command+shift+up"], (function(e) {
                    var t = $(".main-menu li.active").prev();
                    0 == t.length && (t = $(".main-menu li:last-of-type"));
                    var a = t.find("a").attr("href").replace("#", ""),
                        n = $(".sub-menu ul[data-link='" + a + "'] li:first-of-type");
                    return window.location.href = n.find("a").attr("href"), !1
                })), $(".list") && $(".list").length > 0 && (Mousetrap.bind(["ctrl+a", "command+a"], (function(e) {
                    return $(".list").shiftSelectable().data("shiftSelectable").selectAll(), !1
                })), Mousetrap.bind(["ctrl+d", "command+d"], (function(e) {
                    return $(".list").shiftSelectable().data("shiftSelectable").deSelectAll(), !1
                })))),  $().smartWizard) {
                function Be(e) {
                    return !!$().validate && !!$(e).valid()
                }
            }
        }()
    }, $.fn.dore = function(e) {
        return this.each((function() {
            if (null == $(this).data("dore")) {
                var t = new $.dore(this, e);
                $(this).data("dore", t)
            }
        }))
    };
</script>
<script src="js/scripts.js"></script>
   </body>
</html>