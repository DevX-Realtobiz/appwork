<div class="ui-block">
    <h3 class="ui-block-heading">Vanilla Text Mask</h3>
    <a target="_blank" href="https://github.com/text-mask/text-mask/tree/master/vanilla#readme" class="ui-block-description">https://github.com/text-mask/text-mask/tree/master/vanilla#readme</a>

    <samp class="cui-example-code-static">
        &lt;script src="&#123;&#123; mix('/vendor/libs/vanilla-text-mask/vanilla-text-mask.js') &#125;&#125;"&gt;&lt;/script&gt;
        &lt;script src="&#123;&#123; mix('/vendor/libs/vanilla-text-mask/text-mask-addons.js') &#125;&#125;"&gt;&lt;/script&gt;
    </samp>

    <h4 class="ui-block-heading">Examples</h4>

    <div class="cui-example cui-example-vertical-spacing-sm">
        <input type="text" id="text-mask-phone" class="form-control" placeholder="(___) ___-____">

        <input type="text" id="text-mask-number" class="form-control" placeholder="$">

        <input type="text" id="text-mask-email" class="form-control" placeholder=" @ .">

        <input type="text" id="text-mask-date" class="form-control" placeholder="__/__/____">

        <!-- Javascript -->
        <script>
            $(function() {
                // Phone
                //

                vanillaTextMask.maskInput({
                    inputElement: $('#text-mask-phone')[0],
                    mask: ['(', /[1-9]/, /\d/, /\d/, ')', ' ', /\d/, /\d/, /\d/, '-', /\d/, /\d/, /\d/, /\d/]
                });

                // Number
                //

                vanillaTextMask.maskInput({
                    inputElement: $('#text-mask-number')[0],
                    mask: textMaskAddons.createNumberMask({
                        prefix: '$'
                    })
                });

                // Email
                //

                vanillaTextMask.maskInput({
                    inputElement: $('#text-mask-email')[0],
                    mask: textMaskAddons.emailMask
                });

                // Date
                //

                vanillaTextMask.maskInput({
                    inputElement: $('#text-mask-date')[0],
                    mask: [/\d/, /\d/, '/', /\d/, /\d/, '/', /\d/, /\d/, /\d/, /\d/],
                    pipe: textMaskAddons.createAutoCorrectedDatePipe('mm/dd/yyyy')
                });
            });
        </script>
        <!-- / Javascript -->
    </div>
</div>
