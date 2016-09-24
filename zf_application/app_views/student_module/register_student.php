<?php

    //Here we load model that will pull student data into this view.
    $zf_controller->Zf_loadModel("student_module", "studentsStatistics");
    
    //This is user identification code
    $identificationCode = Zf_SecureData::zf_decode_data($zf_actionData);
    
?>
    
<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
    <div class="page-content">

        <!-- BEGIN PAGE HEADER-->
        <div class="row">
            <div class="col-md-12">
                <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                <h3 class="page-title">Register New Student</h3>
                <div class="page-breadcrumb breadcrumb">
                    <i class="fa fa-home"></i> <?php Zf_BreadCrumbs::zf_load_breadcrumbs(); ?>
                </div>
                <!-- END PAGE TITLE & BREADCRUMB-->
            </div>
        </div>
        <!-- END PAGE HEADER-->

        <div class="clearfix"></div>
        <?php
            //This is the pop up indicator that shows a success or a failure in creating a new class.
            $zf_widgetFolder = "indicators"; $zf_widgetFile = "student_module_indicator.php";
            Zf_ApplicationWidgets::zf_load_widget($zf_widgetFolder, $zf_widgetFile);
        ?> 

        <!-- BEGIN INNER CONTENT -->
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 zozo_tab_wrapper">
                <div id="tabbed-nav">
                    <ul class="z-tabs-titles">
                        <li><a>Student overview</a></li>
                        <li><a><i class="fa fa-user-plus"></i> Add New Student</a></li>
                    </ul>

                    <div class="z-content-inner" style="margin-bottom: 10px !important;">
                        <div>
                            <div class="row margin-top-10">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-bottom: -10px !important;">
                                    <div class="portlet box zvs-content-blocks" style="min-height: 340px !important;">
                                        <div class="portlet-empty table-responsive" style="margin-right: 4% !important;">
                                            <div style="margin-right: 5px !important;"><?php echo $zf_generateTable; ?></div>
                                        </div>
                                    </div>          
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="row margin-top-10">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="margin-bottom: -15px !important;">
                                    <div class="portlet box zvs-content-blocks" style="min-height: 340px !important;">
                                        <div class="zvs-content-titles">
                                            <h3 class="">Gender Ratio</h3>
                                        </div>
                                        <div class="portlet-body">
                                            <div class="zvs-chart-blocks">
                                                <?php $zf_controller->zf_targetModel->AllStudentsByGenderPie(); ?>
                                            </div>
                                        </div>
                                    </div>          
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="margin-bottom: -15px !important;">
                                    <div class="portlet box zvs-content-blocks" style="min-height: 340px !important;">
                                        <div class="zvs-content-titles">
                                            <h3 class="">Class Segmentation</h3>
                                        </div>
                                        <div class="portlet-body">
                                            <div class="zvs-chart-blocks">
                                                <?php $zf_controller->zf_targetModel->AllStudentsByClassPie(); ?>
                                            </div>
                                        </div>
                                    </div>          
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="row margin-top-10">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="margin-bottom: -15px !important;">
                                    <div class="portlet box zvs-content-blocks" style="min-height: 340px !important;">
                                        <div class="zvs-content-titles">
                                            <h3 class="">Blood Groups Segmentation</h3>
                                        </div>
                                        <div class="portlet-body">
                                            <div class="zvs-chart-blocks">
                                                <?php $zf_controller->zf_targetModel->AllStudentsByBloodPie(); ?>
                                            </div>
                                        </div>
                                    </div>          
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="margin-bottom: -15px !important;">
                                    <div class="portlet box zvs-content-blocks" style="min-height: 340px !important;">
                                        <div class="zvs-content-titles">
                                            <h3 class="">Guardian Segmentation</h3>
                                        </div>
                                        <div class="portlet-body">
                                            <div class="zvs-chart-blocks" >
                                                <?php $zf_controller->zf_targetModel->AllStudentsByGuardianPie(); ?>
                                            </div>
                                        </div>
                                    </div>          
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="row margin-top-10">
                                <?php
                                    //Here we fetch all class details
                                    //$zf_controller->zf_targetModel->fetchClassDetails($identificationCode);
                                ?>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-bottom: -15px !important;">
                                    <div class="portlet box zvs-content-blocks" style="min-height: 340px !important;">
                                        <div class="portlet-body form" >
                                            <?php
                                                //This is the form for registering new student into a given school.
                                                Zf_ApplicationWidgets::zf_load_widget("student_module", "new_student_form.php");
                                            ?>
                                        </div>
                                    </div>          
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END INNER CONTENT -->

        <div class="clearfix"></div>

    </div>
</div>
<!-- END CONTENT -->
<script type="text/javascript">
    $(document).ready(function() {

        //Here we are generating the applications absolute path.
        var $absolute_path = "<?= ZF_ROOT_PATH; ?>";
        var $separator = "<?= DS; ?>";
        var $current_view = "new_student";

        StudentFormData.init($current_view, $absolute_path, $separator );


    });
</script>   


