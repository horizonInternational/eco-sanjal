<?php
    $this->title = Yii::$app->params['system_name'] . ' | Settings';
    //$this->registerJsFile(Yii::$app->request->baseUrl . '/assets/');
?>
<div class = "container-fluid">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class = "row page-titles">
        <div class = "col-md-12 align-self-center">
            <h3 class = "text-themecolor m-b-0 m-t-0">Website Settings</h3>
            <ol class = "breadcrumb">
                <li class = "breadcrumb-item">
                    <a href = "<?php echo Yii::$app->request->baseUrl; ?>">Home</a>
                </li>
                <li class = "breadcrumb-item active">Website Settings</li>
            </ol>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <div class = "row">
        <div class = "col-md-12">
            <div class = "card">
                <!-- Nav tabs -->
                <ul class = "nav nav-tabs customtab" role = "tablist">
                    <li class = "nav-item">
                        <a class = "nav-link active" data-toggle = "tab" href = "#about-page" role = "tab"><span class = "hidden-sm-up">
                                <i class = "mdi mdi-account"></i>
                            </span> <span class = "hidden-xs-down">About Page</span></a>
                    </li>
                    <li class = "nav-item">
                        <a class = "nav-link" data-toggle = "tab" href = "#contact-info" role = "tab"><span class = "hidden-sm-up">
                                <i class = "mdi mdi-pin"></i>
                            </span> <span class = "hidden-xs-down">Contact Info</span></a>
                    </li>
                    <li class = "nav-item">
                        <a class = "nav-link" data-toggle = "tab" href = "#social-media" role = "tab"><span class = "hidden-sm-up">
                                <i class = "mdi mdi-facebook"></i>
                            </span> <span class = "hidden-xs-down">Social Media</span></a>
                    </li>
                </ul>
                <!-- Tab panes -->
                <div class = "tab-content">
                    <div class = "tab-pane active" id = "about-page" role = "tabpanel">
                        <div class = "p-20">
                            <h3>Best Clean Tab ever</h3>
                            <h4>you can use it with the small code</h4>
                            <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a.</p>
                        </div>
                    </div>
                    <div class = "tab-pane  p-20" id = "contact-info" role = "tabpanel">2</div>
                    <div class = "tab-pane p-20" id = "social-media" role = "tabpanel">3</div>
                </div>
            </div>
        </div>
    </div>

</div>