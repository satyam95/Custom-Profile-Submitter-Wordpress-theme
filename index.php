<?php get_header(); ?>
    <section class="home_banner_area">
        <div class="container box_1620">
           	<div class="banner_inner">
                <div class="wp6_content">
							    
                    <h3>Please Submit Your Profile....</h3>

                    <div class="form_div">
                     
                        <form name="form" method="post" enctype="multipart/form-data" class="needs-validation" novalidate>

                            <h5>Personal Information</h5>

                            <div class="form_div_inner">

                            <input type="hidden" name="ispost" value="1" />

                                <div class="form-group row validate-me">
                                    <label for="inputName3" class="col-sm-2 col-form-label">Name<span class="clr_required">*</span></label>
                                    <div class="col-sm-10">
                                    <input type="text" class="form-control" name="inputName3" placeholder="Name" required>
                                    <div class="invalid-feedback">
                                        Please choose a username. 
                                    </div>
                                    </div>
                                </div>
                                
                                <fieldset class="form-group validate-me">
                                    <div class="row">
                                    <legend class="col-form-label col-sm-2 pt-0">Gender<span class="clr_required">*</span></legend>
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="Male" required>
                                        <label class="form-check-label" for="gridRadios1">
                                            Male
                                        </label>
                                        </div>
                                        <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="Female" required>
                                        <label class="form-check-label" for="gridRadios2">
                                            Female
                                        </label>
                                            <div class="invalid-feedback">
                                            Please choose a Gender. 
                                            </div>
                                        </div>
                                        
                                    </div>
                                    </div>
                                </fieldset>

                                <div class="form-group row validate-me">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email<span class="clr_required">*</span></label>
                                    <div class="col-sm-10">
                                    <input type="email" class="form-control" name="inputEmail3" placeholder="Email" required>
                                        <div class="invalid-feedback">
                                        Please enter email. 
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Phone Number</label>
                                    <div class="col-sm-10">
                                    <input type="tel" class="form-control" name="inputPhone3" placeholder="Phone Number">
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label for="inputState3" class="col-sm-2 col-form-label">State</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="inputState3">
                                            <option value="Andhra Pradesh">Andhra Pradesh</option>
                                            <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                            <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                            <option value="Assam">Assam</option>
                                            <option value="Bihar">Bihar</option>
                                            <option value="Chandigarh">Chandigarh</option>
                                            <option value="Chhattisgarh">Chhattisgarh</option>
                                            <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                                            <option value="Daman and Diu">Daman and Diu</option>
                                            <option value="Delhi">Delhi</option>
                                            <option value="Lakshadweep">Lakshadweep</option>
                                            <option value="Puducherry">Puducherry</option>
                                            <option value="Goa">Goa</option>
                                            <option value="Gujarat">Gujarat</option>
                                            <option value="Haryana">Haryana</option>
                                            <option value="Himachal Pradesh">Himachal Pradesh</option>
                                            <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                            <option value="Jharkhand">Jharkhand</option>
                                            <option value="Karnataka">Karnataka</option>
                                            <option value="Kerala">Kerala</option>
                                            <option value="Madhya Pradesh">Madhya Pradesh</option>
                                            <option value="Maharashtra">Maharashtra</option>
                                            <option value="Manipur">Manipur</option>
                                            <option value="Meghalaya">Meghalaya</option>
                                            <option value="Mizoram">Mizoram</option>
                                            <option value="Nagaland">Nagaland</option>
                                            <option value="Odisha">Odisha</option>
                                            <option value="Punjab">Punjab</option>
                                            <option value="Rajasthan">Rajasthan</option>
                                            <option value="Sikkim">Sikkim</option>
                                            <option value="Tamil Nadu">Tamil Nadu</option>
                                            <option value="Telangana">Telangana</option>
                                            <option value="Tripura">Tripura</option>
                                            <option value="Uttar Pradesh">Uttar Pradesh</option>
                                            <option value="Uttarakhand">Uttarakhand</option>
                                            <option value="West Bengal">West Bengal</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row validate-me">
                                    <label for="inputCity3" class="col-sm-2 col-form-label">City<span class="clr_required">*</span></label>
                                    <div class="col-sm-10">
                                    <input type="text" class="form-control" name="inputCity3" placeholder="City" required>
                                        <div class="invalid-feedback">
                                        Please enter city. 
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="inputPhoto3" class="col-sm-2 col-form-label">Profile Picture</label>
                                    <div class="col-sm-10">
                                    <input type="file" class="form-control-file" id="thumbnail" name="thumbnail">
                                    </div>
                                </div>  

                            </div>

                            <h5>Education</h5>

                            <div class="form_div_inner">

                                <div class="form-group row validate-me">
                                    <label for="inputGraduation3" class="col-sm-2 col-form-label">Graduation<span class="clr_required">*</span></label>
                                    <div class="col-sm-10">
                                    <input type="text" class="form-control" name="inputGraduation3" placeholder="Graduation" required>
                                        <div class="invalid-feedback">
                                        Please enter Graduation. 
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label for="inputPercentage3" class="col-sm-2 col-form-label">Graduation Grade / Percentage</label>
                                    <div class="col-sm-10">
                                    <input type="text" class="form-control" name="inputPercentage3" placeholder="Graduation Grade / Percentage">
                                    </div>
                                </div>

                                <div class="form-group row validate-me">
                                    <label for="inputYear3" class="col-sm-2 col-form-label">Graduation Year<span class="clr_required">*</span></label>
                                    <div class="col-sm-10">
                                    <select class="form-control" name="inputYear3" required>
                                        <option value="">Select the year</option>
                                        <option value="2020">2020</option>
                                        <option value="2019">2019</option>
                                        <option value="2018">2018</option>
                                        <option value="2017">2017</option>
                                        <option value="2016">2016</option>
                                    </select>
                                        <div class="invalid-feedback">
                                        Please enter Graduation Year. 
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row validate-me">
                                    <label for="inputSpecialisation3" class="col-sm-2 col-form-label">Specialisation<span class="clr_required">*</span></label>
                                    <div class="col-sm-10">
                                    <input type="text" class="form-control" name="inputSpecialisation3" placeholder="Specialisation" required>
                                        <div class="invalid-feedback">
                                        Please enter Specialisation. 
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row validate-me">
                                    <label for="inputCollege3" class="col-sm-2 col-form-label">College / University<span class="clr_required">*</span></label>
                                    <div class="col-sm-10">
                                    <input type="text" class="form-control" name="inputCollege3" placeholder="College Name.." required>
                                    <div class="invalid-feedback">
                                        Please enter College / University. 
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <h5>Skills</h5>

                                <div class="form_div_inner">

                                <div class="form-group row validate-me">
                                    <label for="inputPrimary3" class="col-sm-2 col-form-label">Primary Skill<span class="clr_required">*</span></label>
                                    <div class="col-sm-10">
                                    <input type="text" class="form-control" name="inputPrimary3" placeholder="Primary Skill" required>
                                    <div class="invalid-feedback">
                                        Please enter Primary Skill. 
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="inputSecondary3" class="col-sm-2 col-form-label">Secondary Skill</label>
                                    <div class="col-sm-10">
                                    <input type="text" class="form-control" name="inputSecondary3" placeholder="Secondary Skill">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="inputCertifications3" class="col-sm-2 col-form-label">Certifications</label>
                                    <div class="col-sm-10">
                                    <input type="text" class="form-control" name="inputCertifications3" placeholder="Certifications">
                                    </div>
                                </div>

                                </div>

                            <h5>Pitch</h5>

                                <div class="form_div_inner">

                                <div class="form-group row validate-me">
                                    <label for="inputPitch3" class="col-sm-2 col-form-label">Why should we consider you?<span class="clr_required">*</span></label>
                                    <div class="col-sm-10">
                                    <textarea class="form-control" name="inputPitch3" placeholder="Your Answer..." rows="5" required></textarea>
                                    <div class="invalid-feedback">
                                        Please enter your Pitch. 
                                        </div>
                                    </div>
                                </div>

                                </div>
                                
                            <div class="form-group row">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>

                        </form>
                    
                    </div>

                </div>
			</div>
        </div>
    </section>
<?php get_footer(); ?>
    