<?php
?>
<!DOCTYPE html>
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8" />
        <title>Vector Maps</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="Preview page of Metronic Admin Theme #2 for interactive vector map samples" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/global/plugins/bootstrap-toastr/toastr.min.css" rel="stylesheet" type="text/css"/>
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="assets/global/css/components-md.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="assets/global/css/plugins-md.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css" rel="stylesheet" type="text/css" />


        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="assets/layouts/layout2/css/layout.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/layouts/layout2/css/themes/blue.min.css" rel="stylesheet" type="text/css" id="style_color" />
        <link href="assets/layouts/layout2/css/custom.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/custom/css/custom.css" rel="stylesheet" type="text/css" />
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" />
        
        <link href="assets/jvector/jquery-jvectormap-2.0.3.css" rel="stylesheet" type="text/css" />
        
    </head>
    <!-- END HEAD -->
    <body class="page-container-bg-solid page-md">
        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">
                    
                    <div class="row">
                        <div class="col-md-6 col-sm-6" style="height: 100vh">
                            <div class="portlet light portlet-fit" >
                                <div class="portlet-body">
                                    <div class="lg-map-wrapper" id="map" style="height:47vh; background-color: #afcbfe"></div>
                                    <div style="height:2vh"></div>
                                    <div class="lg-map-wrapper" id="county_map" style="height:47vh; background-color: #afcbfe"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="portlet light" style="height: 100vh">
                                <div class="portlet-title" >
                                    <div class="caption font-green-haze">
                                        <i class="icon-settings font-green-haze"></i>
                                        <span class="caption-subject bold uppercase"> Information</span>
                                    </div>
                                    
                                    <div class="actions" >
                                        <a class="btn btn-circle btn-icon-only btn-default fullscreen" href="javascript:;" data-original-title="" title=""> </a>
                                    </div>
                                    <div class="search-form search-form-expanded">
                                        <div class="input-group">
                                            <input id="search_txt" type="text" class="form-control" placeholder="Search..." name="search">
                                            <span class="input-group-btn">
                                                <a  class="btn">
                                                    <i class="icon-magnifier"></i>
                                                </a>
                                            </span>
                                        </div>
                                        <div id="search_area" style="display: none">
                                        <table class="table table-striped table-bordered table-hover table-header-fixed" id="search_table" >
                                            <thead style="display:none">
                                                <tr class="">
                                                    <th style="display: none"> id   </th>
                                                    <th> State </th>
                                                    <th> County / City </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                    </div>

                                </div>
                                <div class="portlet-body form">
                                    <div class="tabbable-line">
                                        <ul class="nav nav-tabs ">
                                            <li class="active" id="state_tab">
                                                <a href="#state" data-toggle="tab"> State </a>
                                            </li>
                                            <li id="county_tab">
                                                <a href="#county" data-toggle="tab"> County </a>
                                            </li>
                                            <li id="city_tab">
                                                <a href="#city" data-toggle="tab"> City </a>
                                            </li>
                                            
                                        </ul>
                                        <div class="tab-content">

                                            <div class="tab-pane active" id="state" style="height: 85vh; overflow-y: scroll; overflow-x: hidden">

                                            </div>
                                            
                                            <div class="tab-pane" id="county" style="height: 85vh; overflow-y: scroll; overflow-x: hidden">
                                                <div class="row" style="margin-bottom: 10px">
                                                    <a  class="btn btn-sm white add_ct_btn" style="float: right" data-toggle="modal"  href="#add_ct_md"> ADD
                                                        <i class="fa fa-plus"></i>
                                                    </a>
                                                </div>
                                                <div id="county_content">

                                                </div>
                                                
                                            </div>
                                            
                                            <div class="tab-pane" id="city" style="height: 85vh; overflow-y: scroll; overflow-x: hidden">
                                                <div class="row" style="margin-bottom: 10px">
                                                    <a  class="btn btn-sm white add_ct_btn" style="float: right" data-toggle="modal"  href="#add_ct_md"> ADD
                                                        <i class="fa fa-plus"></i>
                                                    </a>
                                                </div>
                                                <div  id="city_content">

                                                </div>
                                            </div>
                                            
                                            <div class="modal fade draggable-modal" id="add_ct_md" tabindex="-1" role="basic" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                                            <h4 class="modal-title">Add County/City Information</h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form class="form-horizontal" role="form">
                                                                <div class="form-body">

                                                                    <div class="form-group">
                                                                        <label class="col-md-3 control-label">Name:</label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" class="form-control" id="add_ct_name">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="col-md-3 control-label">Other_Id</label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" class="form-control" id="add_ct_other_id">
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label class="col-md-3 control-label">Building Code</label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" class="form-control" id="add_ct_bcode">
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label class="col-md-3 control-label">Tia-222</label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" class="form-control" id="add_ct_tia">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="col-md-3 control-label">Windspeed_f</label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" class="form-control" id="add_ct_windspeed_f">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="col-md-3 control-label">Special_locale</label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" class="form-control" id="add_ct_special_locale">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="col-md-4 control-label">Windspeed_g_or_local</label>
                                                                        <div class="col-md-8">
                                                                            <input type="text" class="form-control" id="add_ct_windspeed_local">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="col-md-3 control-label">Note</label>
                                                                        <div class="col-md-9">
                                                                            <textarea class="form-control" rows="3" id="add_ct_note"></textarea>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="col-md-3 control-label">Contact:</label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" class="form-control" id="add_ct_contact">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="col-md-3 control-label" >Email</label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" class="form-control" id="add_ct_email">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="col-md-3 control-label">Phone</label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" class="form-control" id="add_ct_phone">
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </form>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn dark btn-outline" data-dismiss="modal">Close</button>
                                                            <button type="button" class="btn green" id="add_ct_save_btn">Save</button>
                                                        </div>
                                                    </div>
                                                    <!-- /.modal-content -->
                                                </div>
                                                <!-- /.modal-dialog -->
                                            </div>
                                            <div class="modal fade draggable-modal" id="update_ct_md" tabindex="-1" role="basic" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                                            <h4 class="modal-title">Update County/City Information</h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form class="form-horizontal" role="form">
                                                                <div class="form-body">
                                                                    <input type="text" style="display: none" id="update_ct_id">
                                                                    <div class="form-group">
                                                                        <label class="col-md-3 control-label">Name:</label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" class="form-control" id="update_ct_name">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="col-md-3 control-label">Other_Id</label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" class="form-control" id="update_ct_other_id">
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label class="col-md-3 control-label">Building Code</label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" class="form-control" id="update_ct_bcode">
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label class="col-md-3 control-label">TIA_222</label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" class="form-control" id="update_ct_tia">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="col-md-3 control-label">Windspeed_f</label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" class="form-control" id="update_ct_windspeed_f">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="col-md-3 control-label">Special_locale</label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" class="form-control" id="update_ct_special_locale">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="col-md-4 control-label">Windspeed_g_or_local</label>
                                                                        <div class="col-md-8">
                                                                            <input type="text" class="form-control" id="update_ct_windspeed_local">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="col-md-3 control-label">Note</label>
                                                                        <div class="col-md-9">
                                                                            <textarea class="form-control" rows="3" id="update_ct_note"></textarea>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="col-md-3 control-label">Contact:</label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" class="form-control" id="update_ct_contact">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="col-md-3 control-label" >Email</label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" class="form-control" id="update_ct_email">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="col-md-3 control-label">Phone</label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" class="form-control" id="update_ct_phone">
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </form>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn dark btn-outline" data-dismiss="modal">Close</button>
                                                            <button type="button" class="btn green" id="update_ct_save_btn">Save</button>
                                                        </div>
                                                    </div>
                                                    <!-- /.modal-content -->
                                                </div>
                                                <!-- /.modal-dialog -->
                                            </div>
                                            <div class="modal fade draggable-modal" id="update_state_md" tabindex="-1" role="basic" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                                            <h4 class="modal-title">Update State Information</h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form class="form-horizontal" role="form">
                                                                <div class="form-body">
                                                                    
                                                                    <div class="form-group">
                                                                        <label class="col-md-3 control-label">Hyperlink</label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" class="form-control" id="update_state_hyperlink">
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label class="col-md-3 control-label">TIA_222</label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" class="form-control" id="update_state_tia">
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label class="col-md-3 control-label">Building Code</label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" class="form-control" id="update_state_bcode">
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label class="col-md-3 control-label">Note</label>
                                                                        <div class="col-md-9">
                                                                            <textarea class="form-control" rows="3"  id="update_state_note"></textarea>
                                                                        </div>
                                                                    </div>
                                                                   
                                                                    <div class="form-group">
                                                                        <label class="col-md-3 control-label">Contact</label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" class="form-control" id="update_state_contact">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="col-md-3 control-label">Email</label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" class="form-control" id="update_state_email">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="col-md-3 control-label">Phone</label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" class="form-control" id="update_state_phone">
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </form>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn dark btn-outline" data-dismiss="modal">Close</button>
                                                            <button type="button" class="btn green" id="update_state_save_btn">Save</button>
                                                        </div>
                                                    </div>
                                                    <!-- /.modal-content -->
                                                </div>
                                                <!-- /.modal-dialog -->
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END CONTAINER -->
        
        <!-- BEGIN CORE PLUGINS -->
        <script src="assets/global/plugins/jquery.min.js" type="text/javascript"></script>
        <!-- <script src="https://code.jquery.com/jquery-3.2.1.min.js" type="text/javascript"></script>-->
        <script src="assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/bootstrap-toastr/toastr.min.js" type="text/javascript"></script>
        <script src="assets/jvector/jquery-jvectormap-2.0.3.min.js" type="text/javascript"></script>
        <script src="assets/jvector/jquery-jvectormap-us_aea.min.js" type="text/javascript"></script>
        <script src="assets/jvector/us/all-data.js" type="text/javascript"></script>

        
        
        <script src="assets/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
        <script src="assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>
        <script src="assets/global/scripts/app.min.js" type="text/javascript"></script>
        
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="assets/layouts/layout2/scripts/layout.min.js" type="text/javascript"></script>
        <script src="assets/layouts/layout2/scripts/demo.min.js" type="text/javascript"></script>
        <script src="assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
        <script src="assets/layouts/global/scripts/quick-nav.min.js" type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->

        <script src="assets/custom/js/custom.js" type="text/javascript"></script>
        
    </body>
</html>