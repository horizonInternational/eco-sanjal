<div class="row"  id="pagesearch" style = "background-image: url('<?php echo Yii::$app->request->baseUrl; ?>/common/assets/uploads/images/6.jpg'); min-height: 170px;" >
    <div class = "search-form " style="margin-top: 50px;">
        <div class = "container">
            <form action = "" method = "get">
                <div class = "form-row align-items-center">
                    <div class = "col-sm-3">
                        <input type = "text" class = "form-control" placeholder = "Departure">
                    </div>
                    <div class = "col-sm-3">
                        <input type = "text" class = "form-control" placeholder = "Destination">
                    </div>
                    <div class = "col-sm-3">
                        <input type = "text" class = "form-control" placeholder = "Checkin">
                    </div>
                    <div class = "col-sm-2">
                        <input type = "text" class = "form-control" placeholder = "Seats">
                    </div>
                    <div class = "col-auto">
                        <button type = "submit" class = "btn btn-primary">Submit</button>
                    </div>
                </div>

                <div class = "clearfix"></div>
                <div class = "form-row">
                    <div class = "col-sm-12">
                        <div class = "form-check">
                            <input class = "form-check-input" type = "checkbox" id = "autoSizingCheck2">
                            <label class = "form-check-label" for = "autoSizingCheck2">
                                I Need a Return Ticket too.
                            </label>
                        </div>
                    </div>

                </div>

            </form>
        </div>
    </div>
</div>
