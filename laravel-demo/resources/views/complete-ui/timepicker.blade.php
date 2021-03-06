<div class="ui-block">
    <h3 class="ui-block-heading">jQuery Timepicker</h3>
    <a target="_blank" href="https://github.com/jonthornton/jquery-timepicker" class="ui-block-description">https://github.com/jonthornton/jquery-timepicker</a>

    <samp class="cui-example-code-static">
        &lt;link rel="stylesheet" href="&#123;&#123; mix('/vendor/libs/timepicker/timepicker.css') &#125;&#125;"&gt;
        &lt;script src="&#123;&#123; mix('/vendor/libs/timepicker/timepicker.js') &#125;&#125;"&gt;&lt;/script&gt;
    </samp>

    <h4 class="ui-block-heading">Examples</h4>

    <div class="cui-example cui-example-vertical-spacing">
        <input type="text" id="timepicker-example-1" class="form-control">

        <input type="text" id="timepicker-example-2" class="form-control">

        <input type="text" id="timepicker-example-3" class="form-control">

        <div class="row">
            <div class="col">
                <input type="text" id="timepicker-example-4" class="form-control">
            </div>
            <div class="col">
                <input type="text" id="timepicker-example-5" class="form-control">
            </div>
        </div>

        <input type="text" id="timepicker-example-6" class="form-control">

        <!-- Javascript -->
        <script>
            $(function() {
                var isRtl = $('body').attr('dir') === 'rtl' || $('html').attr('dir') === 'rtl';

                $('#timepicker-example-1').timepicker({
                    scrollDefault: 'now',
                    orientation: (isRtl ? 'r' : 'l')
                });

                $('#timepicker-example-2').timepicker({
                    minTime: '2:00pm',
                    maxTime: '11:30pm',
                    showDuration: true,
                    orientation: (isRtl ? 'r' : 'l')
                });

                $('#timepicker-example-3').timepicker({
                    disableTimeRanges: [
                        ['1am', '2am'],
                        ['3am', '4:01am']
                    ],
                    orientation: (isRtl ? 'r' : 'l')
                });

                $('#timepicker-example-4').timepicker({
                    'timeFormat': 'H:i:s',
                    orientation: (isRtl ? 'r' : 'l')
                });
                $('#timepicker-example-5').timepicker({
                    'timeFormat': 'h:i A',
                    orientation: (isRtl ? 'r' : 'l')
                });

                $('#timepicker-example-6').timepicker({
                    'step': 15,
                    orientation: (isRtl ? 'r' : 'l')
                });
            });
        </script>
        <!-- / Javascript -->
    </div>
</div>
