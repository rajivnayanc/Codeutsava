<?php 
ob_start();
session_start();
include('includes/header.php') ?>


<!-- BLUE WRAP -->
<!-- ***************************************************************************************************************** -->
<div id="blue">
    <div class="container">
        <div class="row">
            <h3>Contact.</h3>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /blue -->


<!-- *****************************************************************************************************************
   CONTACT FORMS
   ***************************************************************************************************************** -->

<div class="container mtb">
    <div class="row">
        <div class="col-lg-8">
            <h4>Let us know u!</h4>
            <div class="hline"></div>
            <p>Let us know what your startup is all about by submitting the basic info about ur startup.</p>
            <div class="panel-body">
                <div class="well" align="center" div class="col-sm-10"><strong>Startup Application Form</strong></div>
                <div class="container">
                    <form class="form-horizontal" action="#" method="post" role="form" enctype="multipart/form-data">

                        <div class="form-group">
                            <label for="Startupname" class="col-sm-2 control-label" id="f"  >Startup Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="Startupname" placeholder="Enter your startup Name" name="startup_name" required>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="myTable" class="col-sm-2 control-label" id="t">Founder(s): </label>
                            <table id="myTable" class=" table table-striped table-bordered order-list">
                                <thead>
                                    <tr>
<!--
                                        <td class="col-sm-1">Name</td>
                                        <td class="col-sm-1">Email</td>
                                        <td class="col-sm-1">Phone</td>
-->
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="col-sm-1">
                                            <input type="text" name="name[]" class="form-control"placeholder="NAME" />
<!--                                        </td>-->
<!--                                        <td class="col-sm-1">-->
                                            <input type="mail" name="mail[]" class="form-control" placeholder="E-MAIL"/>
<!--                                        </td>-->
<!--                                        <td class="col-sm-1">-->
                                            <input type="text" name="phone[]" class="form-control" placeholder="Contact Number"/>
<!--                                        </td>-->
<!--                                        <td class="col-sm-1">-->
                                            <a class="deleteRow"></a>

                                        </td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="0.5" style="text-align: left;">
                                            <input type="button" class="btn btn-sm btn-block " id="addrow" value="Add more Founders" />
                                        </td>
                                    </tr>
                                    <tr>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>

                        <div class="form-group">
                            <label for="description" class="col-sm-2 control-label" id="t">Description </label>
                            <div class="col-sm-10">
                                <textarea type="text" class="form-control" id="description" rows="8" placeholder="Enter startup description here" name="startup_description" required></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email" class="col-sm-2 control-label" id="l">Startup Email ID</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="email" placeholder="Enter startup common email id" name="startup_email" required>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="number" class="col-sm-2 control-label" id="l">Startup Contact Number</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="number" placeholder="Enter contact number" name="startup_contact" required>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="proposal" class="col-sm-2 control-label" id="l">Proposal</label>
                            <div class="col-sm-10">
                                <input type="file" class="form-control" id="proposal" placeholder="Upload your proposal here" name="startup_proposal" required>
                            </div>
                        </div>
                        
                         <div class="form-group">
                            <label for="resume" class="col-sm-2 control-label" id="l">Detailed Presentation</label>
                            <div class="col-sm-10">
                                <input type="file" class="form-control" id="resume" placeholder="Upload your presentation here" name="startup_presentation" required>
                            </div>
                        </div>
                        

                        <div class="form-group">
                            <label for="category" class="col-sm-2 control-label" id="l">Category of Startup: </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="category" placeholder="Category" name="startup_category" required>
                            </div>
                        </div>

                       

                        <div class="form-group">
                            <label for="resume" class="col-sm-2 control-label" id="l">DIPP Number</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="resume" placeholder="DIPP NUMBER" name="DIPP_NUMBER">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="years" class="col-sm-2 control-label" id="l">Past Experiences</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="description" placeholder="Enter a description of past experience here" name="startup_past_experience" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="Experience" class="col-sm-2 control-label" id="l">Years of Experience</label>
                            <div class="col-sm-10">
                                <select class="form-control" id="exampleFormControlSelect1" placeholder="Enter your past years of experience here" name="startup_years_experience" required>
                                    <option>less than 1</option>
                                    <option>>1</option>
                                    <option>>5</option>
                                    <option>>10</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="Expected_seed" class="col-sm-2 control-label" id="l">Expected seed fund range</label>
                            <div class="col-sm-10">
                                <select class="form-control" id="expected_seed" placeholder="Enter the seed fund you are expecting from us" name="startup_seed_fund" required>
                                    <option>Rs.10,000-Rs.20,000</option>
                                    <option>Rs.20,000-Rs.50,000</option>
                                    <option>Rs.50,000-Rs.1 lacs</option>
                                    <option>>Rs1 lacs</option>
                                </select>

                            </div>
                        </div>

                        <div class="form-group">
                            <label for="website_links" class="col-sm-2 control-label" id="l">Website links(if any)</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="expected_seed" placeholder="Enter your website link here" name="startup_website_link">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <div class="checkbox">
                                    <label><input type="checkbox" required>Accept the terms and conditions</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-8 col-sm-">
                                <button type="submit" class="btn btn-primary" align="center" name="submit">Submit</button></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php 
    include('includes/startup_register.php');
?>



<?php include('includes/footer.php') ?>
