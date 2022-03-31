<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="jspdf.min.js"></script>
    <script src="signature_pad.min.js"></script>
    <script src="cfra.js"></script>
</head>

<body>
    <div class="container mt-4">
      
                <form id="form">

                   
                      <h4> REQUEST FOR INFORMATION FROM PREVIOUS EMPLOYER
                        </h4>

                     <!-- Bloque 1-->

                    <div class="row mb-4">
                             <div class="col-md-8">
                            <label for="nombre" class="form-label">Name of Driver Applicant</label>
                            <input type="text" class="form-control" id="nombre">
                        </div>

                         <div class="col-md-4">
                            <label for="nombre1" class="form-label">Social Security No</label>
                            <input type="text" class="form-control" id="nombre1">
                        </div>

                         <div class="col-md-4">
                            <label for="nombre2" class="form-label">Social Security No</label>
                            <input type="text" class="form-control" id="nombre2">
                        </div>
                      
                    </div>

                       <div class="row mb-4">

                        <div class="col-md-5">
                            <label for="nombre12" class="form-label">CDL#</label>
                            <input type="text" class="form-control" id="nombre12">
                        </div>

                         <div class="col-md-5">
                            <label for="nombre3" class="form-label">CDL#</label>
                            <input type="text" class="form-control" id="nombre3">
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                            <label for="state" class="required">State</label><br>
                            <select name="state" size="1" class="required form-control" id="state">
                                <option value="">-- PLEASE SELECT --</option>
                                

                                <optgroup label="US States">
                        
                                            <option value="AL">Alabama</option>
                                        
                                            <option value="AK">Alaska</option>
                                        
                                            <option value="AZ">Arizona</option>
                                        
                                            <option value="AR">Arkansas</option>
                                        
                                            <option value="CA">California</option>
                                        
                                            <option value="CO">Colorado</option>
                                        
                                            <option value="CT">Connecticut</option>
                                        
                                            <option value="DE">Delaware</option>
                                        
                                            <option value="DC">District of Columbia</option>
                                        
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
                        
                                        </optgroup>
                                        </select>
                                        </div>
                                    </div>

                                <div class="col-md-4">
                                <label for="nombre4" class="form-label">ZIP</label>
                                <input type="text" class="form-control" id="nombre4">
                                </div>
                                          
                            </div>


                      <!-- Bloque 2-->
                    
                     <div class="row mb-4">
                        <div class="col-md-8">
                            <label for="nombre5" class="form-label">Previous Employer</label>
                            <input type="text" class="form-control" id="nombre5">
                        </div>

                         <div class="col-md-4">
                            <label for="nombre6" class="form-label">Previous Employer</label>
                            <input type="text" class="form-control" id="nombre6">
                        </div>

                    </div>


                     <div class="row mb-4">
                             <div class="col-md-3">
                            <label for="fe1" class="form-label">Employed from</label>
                            <input type="date" class="form-control" name="txtfecha1" id="txtfecha1" value="<?php echo date("Y-m-d")?>" placeholder="Introduce una fecha" >
                        </div>

                         <div class="col-md-6">
                            <p>FMCSR Rule 391.21 (B) (2) requires date of birth on application</p>
                            
                        </div>
                    </div>

                     <p>List additional addresses of residency for the past three (3) years:</p>

                       <div class="row mb-4">
                             <div class="col-md-5">
                            <label for="nombre7" class="form-label">Address</label>
                            <input type="text" class="form-control" id="nombre7">
                        </div>

                          <div class="col-md-3">
                            <label for="nombre8" class="form-label">City</label>
                            <input type="text" class="form-control" id="nombre8">
                        </div>

                          <div class="col-md-4">
                            <div class="form-group">
                            <label for="nombre9" class="required">State</label><br>
                            <select name="nombre9" size="1" class="required form-control" id="nombre9">
                                <option value="">-- PLEASE STATE --</option>
                                

                                <optgroup label="US States">
                        
                                            <option value="AL">Alabama</option>
                                        
                                            <option value="AK">Alaska</option>
                                        
                                            <option value="AZ">Arizona</option>
                                        
                                            <option value="AR">Arkansas</option>
                                        
                                            <option value="CA">California</option>
                                        
                                            <option value="CO">Colorado</option>
                                        
                                            <option value="CT">Connecticut</option>
                                        
                                            <option value="DE">Delaware</option>
                                        
                                            <option value="DC">District of Columbia</option>
                                        
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
                        
                                        </optgroup>
                                        </select>
                                        </div>
                                    </div>
                    </div>

                       <div class="row mb-4">
                             <div class="col-md-3">
                            <label for="nombre10" class="form-label">ZIP</label>
                            <input type="text" class="form-control" id="nombre10">
                        </div>

                         <div class="col-md-9">
                            <label for="nombre11" class="form-label">How Long?</label>
                            <input type="text" class="form-control" id="nombre11">
                        </div>

                      
                    </div>

                         <div class="row mb-4">
                             <div class="col-md-5">
                            <label for="nombre13" class="form-label">Address</label>
                            <input type="text" class="form-control" id="nombre13">
                        </div>

                          <div class="col-md-3">
                            <label for="nombre14" class="form-label">City</label>
                            <input type="text" class="form-control" id="nombre14">
                        </div>

                          <div class="col-md-4">
                            <div class="form-group">
                            <label for="nombre15" class="required">State</label><br>
                            <select name="nombre15" size="1" class="required form-control" id="nombre15">
                                <option value="">-- PLEASE STATE --</option>
                                

                                <optgroup label="US States">
                        
                                            <option value="AL">Alabama</option>
                                        
                                            <option value="AK">Alaska</option>
                                        
                                            <option value="AZ">Arizona</option>
                                        
                                            <option value="AR">Arkansas</option>
                                        
                                            <option value="CA">California</option>
                                        
                                            <option value="CO">Colorado</option>
                                        
                                            <option value="CT">Connecticut</option>
                                        
                                            <option value="DE">Delaware</option>
                                        
                                            <option value="DC">District of Columbia</option>
                                        
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
                        
                                        </optgroup>
                                        </select>
                                        </div>
                                    </div>
                    </div>

                       <div class="row mb-4">
                             <div class="col-md-3">
                            <label for="nombre16" class="form-label">ZIP</label>
                            <input type="text" class="form-control" id="nombre16">
                        </div>

                         <div class="col-md-9">
                            <label for="nombre17" class="form-label">How Long?</label>
                            <input type="text" class="form-control" id="nombre17">
                        </div>

                      
                    </div>

                         <div class="row mb-4">
                             <div class="col-md-5">
                            <label for="nombre18" class="form-label">Address</label>
                            <input type="text" class="form-control" id="nombre18">
                        </div>

                          <div class="col-md-3">
                            <label for="nombre20" class="form-label">City</label>
                            <input type="text" class="form-control" id="nombre20">
                        </div>

                         <div class="col-md-4">
                            <div class="form-group">
                            <label for="nombre21" class="required">State</label><br>
                            <select name="nombre21" size="1" class="required form-control" id="nombre21">
                                <option value="">-- PLEASE STATE --</option>
                                

                                <optgroup label="US States">
                        
                                            <option value="AL">Alabama</option>
                                        
                                            <option value="AK">Alaska</option>
                                        
                                            <option value="AZ">Arizona</option>
                                        
                                            <option value="AR">Arkansas</option>
                                        
                                            <option value="CA">California</option>
                                        
                                            <option value="CO">Colorado</option>
                                        
                                            <option value="CT">Connecticut</option>
                                        
                                            <option value="DE">Delaware</option>
                                        
                                            <option value="DC">District of Columbia</option>
                                        
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
                        
                                        </optgroup>
                                        </select>
                                        </div>
                                    </div>
                    </div>

                       <div class="row mb-4">
                             <div class="col-md-3">
                            <label for="nombre24" class="form-label">ZIP</label>
                            <input type="text" class="form-control" id="nombre24">
                        </div>

                         <div class="col-md-9">
                            <label for="nombre25" class="form-label">How Long?</label>
                            <input type="text" class="form-control" id="nombre25">
                        </div>

                    </div>
                    

                    <!-- Bloque 2-->

                        <div class="row mb-4">
                        <div class="col-md-12">
                            <div>
                                <label for="" class="form-label">Have you ever been known by any name, other than the one appearing on this application?</label>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="hijos1" class="form-check-input" id="hijos1-si" value="1">
                                    <label for="hijos1-si" class="form-check-label">Yes</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="hijos1" class="form-check-input" id="hijos1-no" value="0"
                                        checked>
                                    <label for="hijos1-no" class="form-check-label">No</label>
                                </div>
                            </div>
                        </div>

                        </div>

                        <div class="row mb-4">
                            <div class="col-md-9">
                            <label for="nombre27" class="form-label">If yes, by what name?</label>
                            <input type="text" class="form-control" id="nombre27">
                        </div>
                    
                        </div>


                               <div class="row mb-4">
                        <div class="col-md-12">
                            <div>
                                <label for="" class="form-label">Have you ever been known by any name, other than the one appearing on this application?</label>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="hijos2" class="form-check-input" id="hijos2-si" value="1">
                                    <label for="hijos2-si" class="form-check-label">Yes</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="hijos2" class="form-check-input" id="hijos2-no" value="0"
                                        checked>
                                    <label for="hijos2-no" class="form-check-label">No</label>
                                </div>
                            </div>
                        </div>

                        </div>

                        <div class="row mb-4">
                            <div class="col-md-9">
                            <label for="nombre28" class="form-label">If yes, explain?</label>
                            <input type="text" class="form-control" id="nombre28">
                        </div>
                    
                        </div>


                        <div class="row mb-4">
                        <div class="col-md-12">
                            <div>
                                <label for="" class="form-label">Have you tested positive or refused to test on any DOT drug or alcohol test during the pastfive (5) years, including any pre-employment test for any company to which you applied, but did not obtain work?</label>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="hijos3" class="form-check-input" id="hijos3-si" value="1">
                                    <label for="hijos3-si" class="form-check-label">Yes</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="hijos3" class="form-check-input" id="hijos3-no" value="0"
                                        checked>
                                    <label for="hijos3-no" class="form-check-label">No</label>
                                </div>
                            </div>
                        </div>

                        </div>

                        <div class="row mb-4">
                        <div class="col-md-12">
                            <div>
                                <label for="" class="form-label">Have you tested positive or refused to test on any DOT drug or alcohol test during the pastfive (5) years, including any pre-employment test for any company to which you applied, but did not obtain work?</label>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="hijos4" class="form-check-input" id="hijos4-si" value="1">
                                    <label for="hijos4-si" class="form-check-label">Yes</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="hijos4" class="form-check-input" id="hijos4-no" value="0"
                                        checked>
                                    <label for="hijos4-no" class="form-check-label">No</label>
                                </div>
                            </div>
                        </div>

                        </div>


                        <div class="row mb-4">
                        <div class="col-md-5">
                            <div>
                                <label for="" class="form-label">Are you a U.S. citizen?</label>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="hijos5" class="form-check-input" id="hijos5-si" value="1">
                                    <label for="hijos5-si" class="form-check-label">Yes</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="hijos5" class="form-check-input" id="hijos5-no" value="0"
                                        checked>
                                    <label for="hijos5-no" class="form-check-label">No</label>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-7">
                            <div>
                                <label for="" class="form-label">If no, do you have a legal right to remain in the U.S.?</label>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="hijos6" class="form-check-input" id="hijos6-si" value="1">
                                    <label for="hijos6-si" class="form-check-label">Yes</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="hijos6" class="form-check-input" id="hijos6-no" value="0"
                                        checked>
                                    <label for="hijos6-no" class="form-check-label">No</label>
                                </div>
                            </div>
                        </div>

                        </div>

                         <div class="row mb-4">
                        <div class="col-md-12">
                            <div>
                                <label for="" class="form-label">Do you have a current legal work permit?</label>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="hijos7" class="form-check-input" id="hijos7-si" value="1">
                                    <label for="hijos7-si" class="form-check-label">Yes</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="hijos7" class="form-check-input" id="hijos7-no" value="0"
                                        checked>
                                    <label for="hijos7-no" class="form-check-label">No</label>
                                </div>
                            </div>
                        </div>

                        </div>

                          <p>Personal features for security purposes only:</p>

                        <div class="row mb-4">
                             <div class="col-md-3">
                            <label for="nombre29" class="form-label">Height</label>
                            <input type="text" class="form-control" id="nombre29">
                        </div>

                          <div class="col-md-3">
                            <label for="nombre30" class="form-label">Weight</label>
                            <input type="text" class="form-control" id="nombre30">
                        </div>

                          <div class="col-md-3">
                            <label for="nombre31" class="form-label">Hair Color</label>
                            <input type="text" class="form-control" id="nombre31">
                        </div>

                        <div class="col-md-3">
                            <label for="nombre32" class="form-label">Eye Color</label>
                            <input type="text" class="form-control" id="nombre32">
                        </div>

                    </div>

                     <div class="row mb-4">
                             <div class="col-md-3">
                            <label for="chk1" class="form-label">Male</label>
                            <input type="checkbox" id="chk1" >
                        </div>

                           <div class="col-md-4">
                            <label for="chk2" class="form-label">Female</label>
                            <input type="checkbox" id="chk2" >
                        </div>
                     
                    </div>

                    <h3>EMERGENCY CONTACT INFORMATION;</h3>


                     <div class="row mb-4">
                             <div class="col-md-7">
                            <label for="nombre33" class="form-label">Name</label>
                            <input type="text" class="form-control" id="nombre33">
                        </div>

                          <div class="col-md-4">
                            <label for="nombre34" class="form-label">Relationship</label>
                            <input type="text" class="form-control" id="nombre34">
                        </div>

                    </div>

                      <div class="row mb-4">
                             <div class="col-md-7">
                            <label for="nombre35" class="form-label">Address</label>
                            <input type="text" class="form-control" id="nombre35">
                        </div>

                          <div class="col-md-4">
                            <label for="nombre36" class="form-label">City</label>
                            <input type="text" class="form-control" id="nombre36">
                        </div>

                    </div>

                     <div class="row mb-4">

                        <div class="col-md-5">
                            <div class="form-group">
                            <label for="state2" class="required">State</label><br>
                            <select name="state2" size="1" class="required form-control" id="state2">
                                <option value="">-- PLEASE STATE --</option>
                                

                                <optgroup label="US States">
                        
                                            <option value="AL">Alabama</option>
                                        
                                            <option value="AK">Alaska</option>
                                        
                                            <option value="AZ">Arizona</option>
                                        
                                            <option value="AR">Arkansas</option>
                                        
                                            <option value="CA">California</option>
                                        
                                            <option value="CO">Colorado</option>
                                        
                                            <option value="CT">Connecticut</option>
                                        
                                            <option value="DE">Delaware</option>
                                        
                                            <option value="DC">District of Columbia</option>
                                        
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
                        
                                        </optgroup>
                                        </select>
                                        </div>
                                    </div>

                                <div class="col-md-4">
                                <label for="nombre37" class="form-label">ZIP</label>
                                <input type="text" class="form-control" id="nombre37">
                                </div>
                                          
                            </div>

                             <div class="row mb-4">
                             <div class="col-md-4">
                            <label for="nombre38" class="form-label">Telephone #1</label>
                            <input type="text" class="form-control" id="nombre38">
                        </div>

                          <div class="col-md-4">
                            <label for="nombre39" class="form-label">Telephone #2</label>
                            <input type="text" class="form-control" id="nombre39">
                        </div>

                    </div>

                     <div class="row mb-4">
                        <div class="col-md-12">
                            <div>
                                <label for="" class="form-label">Was driver involved in any DOT Accidents per 49CFR 390.5 during the previous three (3) years?</label>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="discapacidad" class="form-check-input" id="discapacidad-si" value="1">
                                    <label for="discapacidad-si" class="form-check-label">Yes</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="discapacidad" class="form-check-input" id="discapacidad-no" value="0"
                                        checked>
                                    <label for="discapacidad-no" class="form-check-label">No</label>
                                </div>
                            </div>
                        </div>
                        </div>

                        <div class="row mb-4">
                             <div class="col-md-4">
                            <label for="nombre41" class="form-label">If yes, where?</label>
                            <input type="text" class="form-control" id="nombre41">
                        </div>
                         </div>

                       <div class="row mb-4">
                            <div class="col-md-3">
                            <label for="fe2" class="form-label">Dates: From</label>
                            <input type="date" class="form-control" name="txtfecha2" id="txtfecha2" value="<?php echo date("Y-m-d")?>" placeholder="Introduce una fecha" >
                        </div>

                          <div class="col-md-3">
                            <label for="fe3" class="form-label">to</label>
                            <input type="date" class="form-control" name="txtfecha3" id="txtfecha3" value="<?php echo date("Y-m-d")?>" placeholder="Introduce una fecha" >
                        </div>

                        </div>

                    <div class="row mb-4">
                         <div class="col-md-12">
                            <label for="nombre40" class="form-label">Who referred you?</label>
                            <input type="text" class="form-control" id="nombre40">
                        </div>
                    </div>
                    
                    <button type="submit" class="btn btn-primary mb-4">Generar PDF</button>

                </form>
           
        
    </div>

</body>

</html>