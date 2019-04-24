<div class="ui-block">
    <h3 class="ui-block-heading">Minicolors</h3>
    <a target="_blank" href="https://github.com/claviska/jquery-minicolors" class="ui-block-description">https://github.com/claviska/jquery-minicolors</a>

    <div class="no-ie10" data-name="Minicolors"></div>

    <samp class="cui-example-code-static">
        &lt;link rel="stylesheet" href="&#123;&#123; mix('/vendor/libs/minicolors/minicolors.css') &#125;&#125;"&gt;
        &lt;script src="&#123;&#123; mix('/vendor/libs/minicolors/minicolors.js') &#125;&#125;"&gt;&lt;/script&gt;
    </samp>

    <h4 class="ui-block-heading">Examples</h4>

    <div class="cui-example cui-example-vertical-spacing">
        <input type="text" id="minicolors-hue" class="form-control" value="#ff6161">

        <input type="text" id="minicolors-saturation" class="form-control" value="#0088cc">

        <input type="text" id="minicolors-wheel" class="form-control" value="#ff99ee">

        <input type="text" id="minicolors-opacity" class="form-control" value="#766fa8" data-opacity=".5">

        <input type="text" id="minicolors-brightness" class="form-control" value="#00ffff">

        <input type="hidden" id="minicolors-hidden" class="form-control" value="#db913d">

        <!-- Javascript -->
        <script>
            $(function() {
                var isRtl = $('body').attr('dir') === 'rtl' || $('html').attr('dir') === 'rtl';

                $('#minicolors-hue').minicolors({
                    control:  'hue',
                    position: 'bottom ' + (isRtl ? 'right' : 'left'),
                });

                $('#minicolors-saturation').minicolors({
                    control:  'saturation',
                    position: 'bottom ' + (isRtl ? 'left' : 'right'),
                });

                $('#minicolors-wheel').minicolors({
                    control:  'wheel',
                    position: 'top ' + (isRtl ? 'left' : 'right'),
                });

                $('#minicolors-opacity').minicolors({
                    control: 'wheel',
                    opacity: true,
                    position: 'bottom ' + (isRtl ? 'right' : 'left'),
                });

                $('#minicolors-brightness').minicolors({
                    control:  'brightness',
                    position: 'top ' + (isRtl ? 'right' : 'left'),
                });

                $('#minicolors-hidden').minicolors({
                    position: 'bottom ' + (isRtl ? 'right' : 'left'),
                });
            });
        </script>
        <!-- / Javascript -->
    </div>
</div>
