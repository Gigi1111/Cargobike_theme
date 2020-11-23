<div class="cover-container d-flex mx-auto flex-column" id="header-sm">
            <!-- brand -->
            <!-- <div class="masthead">
                <div class="inner">
                    <div class="logo"></div>
                    <h3 class="masthead-brand">CargoBike</h3>
                </div>
            </div> -->

            <div class="cover-inner">
                <div class="cover-text cover-text-sm">
                    <form action="/bikes" method="post">
                        <label for="search">
                            <h3>bikes available during</h3></label>
                        <br>
                        <input type="text" name="daterange" id="daterange" value=" <?php echo $_POST["daterange"]; ?>" />
                        <input type="submit" class="btn btn-success" id=”searchsubmit” value="Search Again"/>
                </div>
            </div>


        <script>
        $(function() {
            $('input[name="daterange"]').daterangepicker({
                opens: 'left',
                showDropdowns: true,
                minDate: moment(),
                maxDate: moment().add(1, 'years'),
                showCustomRangeLabel: false,
                locale: {
                    format: 'MMM D, YYYY'
                }
            }, function(start, end, label) {
                console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
            });
        });
        // $(function() {
        //     // default range is today + 30 days
        //     var defaultRange = "" + moment().format('MMM D, YYYY') + " - " + moment().add(30, "days").format('MMM D, YYYY');
        //     $('input[name="daterange"]').val(defaultRange);
        //     $('.drp-buttons').css("display","none");
        // });
        </script>
    </div>