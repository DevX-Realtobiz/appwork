<div class="ui-block">
    <h3 class="ui-block-heading">Select2</h3>
    <a target="_blank" href="https://select2.github.io" class="ui-block-description">https://select2.github.io</a>

    <samp class="cui-example-code-static">
        &lt;link rel="stylesheet" href="&#123;&#123; mix('/vendor/libs/select2/select2.css') &#125;&#125;"&gt;
        &lt;script src="&#123;&#123; mix('/vendor/libs/select2/select2.js') &#125;&#125;"&gt;&lt;/script&gt;
    </samp>

    <h4 class="ui-block-heading">Examples</h4>

    <div class="cui-example cui-example-vertical-spacing">
        <select class="select2-demo form-control" style="width: 100%" data-allow-clear="true">
            <option></option>
            <option value="AK">Alaska</option>
            <option value="HI">Hawaii</option>
            <option value="CA">California</option>
            <option value="NV">Nevada</option>
            <option value="OR">Oregon</option>
            <option value="WA">Washington</option>
            <option value="AZ">Arizona</option>
            <option value="CO">Colorado</option>
            <option value="ID">Idaho</option>
            <option value="MT">Montana</option>
            <option value="NE">Nebraska</option>
            <option value="NM">New Mexico</option>
            <option value="ND">North Dakota</option>
            <option value="UT">Utah</option>
            <option value="WY">Wyoming</option>
            <option value="AL">Alabama</option>
            <option value="AR">Arkansas</option>
            <option value="IL">Illinois</option>
            <option value="IA">Iowa</option>
            <option value="KS">Kansas</option>
            <option value="KY">Kentucky</option>
            <option value="LA">Louisiana</option>
            <option value="MN">Minnesota</option>
            <option value="MS">Mississippi</option>
            <option value="MO">Missouri</option>
            <option value="OK">Oklahoma</option>
            <option value="SD">South Dakota</option>
            <option value="TX">Texas</option>
            <option value="TN">Tennessee</option>
            <option value="WI">Wisconsin</option>
            <option value="CT">Connecticut</option>
            <option value="DE">Delaware</option>
            <option value="FL">Florida</option>
            <option value="GA">Georgia</option>
            <option value="IN">Indiana</option>
            <option value="ME">Maine</option>
            <option value="MD">Maryland</option>
            <option value="MA">Massachusetts</option>
            <option value="MI">Michigan</option>
            <option value="NH">New Hampshire</option>
            <option value="NJ">New Jersey</option>
            <option value="NY">New York</option>
            <option value="NC">North Carolina</option>
            <option value="OH">Ohio</option>
            <option value="PA">Pennsylvania</option>
            <option value="RI">Rhode Island</option>
            <option value="SC">South Carolina</option>
            <option value="VT">Vermont</option>
            <option value="VA">Virginia</option>
            <option value="WV">West Virginia</option>
        </select>

        <!-- Multiple -->

        <select class="select2-demo form-control" multiple style="width: 100%">
            <optgroup label="Alaskan/Hawaiian Time Zone">
                <option value="AK">Alaska</option>
                <option value="HI">Hawaii</option>
            </optgroup>
            <optgroup label="Pacific Time Zone">
                <option value="CA">California</option>
                <option value="NV">Nevada</option>
                <option value="OR">Oregon</option>
                <option value="WA" selected>Washington</option>
            </optgroup>
            <optgroup label="Mountain Time Zone">
                <option value="AZ">Arizona</option>
                <option value="CO">Colorado</option>
                <option value="ID">Idaho</option>
                <option value="MT">Montana</option>
                <option value="NE">Nebraska</option>
                <option value="NM">New Mexico</option>
                <option value="ND">North Dakota</option>
                <option value="UT">Utah</option>
                <option value="WY">Wyoming</option>
            </optgroup>
            <optgroup label="Central Time Zone">
                <option value="AL">Alabama</option>
                <option value="AR">Arkansas</option>
                <option value="IL">Illinois</option>
                <option value="IA">Iowa</option>
                <option value="KS">Kansas</option>
                <option value="KY">Kentucky</option>
                <option value="LA">Louisiana</option>
                <option value="MN">Minnesota</option>
                <option value="MS">Mississippi</option>
                <option value="MO">Missouri</option>
                <option value="OK">Oklahoma</option>
                <option value="SD">South Dakota</option>
                <option value="TX">Texas</option>
                <option value="TN">Tennessee</option>
                <option value="WI">Wisconsin</option>
            </optgroup>
            <optgroup label="Eastern Time Zone">
                <option value="CT">Connecticut</option>
                <option value="DE">Delaware</option>
                <option value="FL">Florida</option>
                <option value="GA">Georgia</option>
                <option value="IN">Indiana</option>
                <option value="ME">Maine</option>
                <option value="MD">Maryland</option>
                <option value="MA">Massachusetts</option>
                <option value="MI">Michigan</option>
                <option value="NH" selected>New Hampshire</option>
                <option value="NJ">New Jersey</option>
                <option value="NY">New York</option>
                <option value="NC">North Carolina</option>
                <option value="OH">Ohio</option>
                <option value="PA">Pennsylvania</option>
                <option value="RI">Rhode Island</option>
                <option value="SC">South Carolina</option>
                <option value="VT">Vermont</option>
                <option value="VA">Virginia</option>
                <option value="WV">West Virginia</option>
            </optgroup>
        </select>

        <!-- Disabled -->

        <select class="select2-demo form-control" style="width: 100%" disabled>
            <option value="1">One</option>
            <option value="2" selected>Two</option>
            <option value="3">Three</option>
            <option value="4">Four</option>
        </select>

        <select class="select2-demo form-control" multiple style="width: 100%" disabled>
            <option value="1" selected>One</option>
            <option value="2" selected>Two</option>
            <option value="3">Three</option>
            <option value="4">Four</option>
        </select>

        <!-- Colors -->

        <div class="select2-primary">
            <select class="select2-demo form-control" multiple style="width: 100%">
                <option value="1" selected>One</option>
                <option value="2" selected>Two</option>
                <option value="3">Three</option>
                <option value="4">Four</option>
            </select>
        </div>

        <div class="select2-secondary">
            <select class="select2-demo form-control" multiple style="width: 100%">
                <option value="1" selected>One</option>
                <option value="2" selected>Two</option>
                <option value="3">Three</option>
                <option value="4">Four</option>
            </select>
        </div>

        <div class="select2-success">
            <select class="select2-demo form-control" multiple style="width: 100%">
                <option value="1" selected>One</option>
                <option value="2" selected>Two</option>
                <option value="3">Three</option>
                <option value="4">Four</option>
            </select>
        </div>

        <div class="select2-info">
            <select class="select2-demo form-control" multiple style="width: 100%">
                <option value="1" selected>One</option>
                <option value="2" selected>Two</option>
                <option value="3">Three</option>
                <option value="4">Four</option>
            </select>
        </div>

        <div class="select2-warning">
            <select class="select2-demo form-control" multiple style="width: 100%">
                <option value="1" selected>One</option>
                <option value="2" selected>Two</option>
                <option value="3">Three</option>
                <option value="4">Four</option>
            </select>
        </div>

        <div class="select2-danger">
            <select class="select2-demo form-control" multiple style="width: 100%">
                <option value="1" selected>One</option>
                <option value="2" selected>Two</option>
                <option value="3">Three</option>
                <option value="4">Four</option>
            </select>
        </div>

        <div class="select2-dark">
            <select class="select2-demo form-control" multiple style="width: 100%">
                <option value="1" selected>One</option>
                <option value="2" selected>Two</option>
                <option value="3">Three</option>
                <option value="4">Four</option>
            </select>
        </div>

        <!-- States -->

        <div class="is-valid">
            <select class="select2-demo form-control" multiple style="width: 100%">
                <option value="1" selected>One</option>
                <option value="2" selected>Two</option>
                <option value="3">Three</option>
                <option value="4">Four</option>
            </select>
        </div>
        <div class="is-valid">
            <select class="select2-demo form-control" style="width: 100%">
                <option value="1">One</option>
                <option value="2" selected>Two</option>
                <option value="3">Three</option>
                <option value="4">Four</option>
            </select>
        </div>

        <div class="is-invalid">
            <select class="select2-demo form-control" multiple style="width: 100%">
                <option value="1" selected>One</option>
                <option value="2" selected>Two</option>
                <option value="3">Three</option>
                <option value="4">Four</option>
            </select>
        </div>
        <div class="is-invalid">
            <select class="select2-demo form-control" style="width: 100%">
                <option value="1">One</option>
                <option value="2" selected>Two</option>
                <option value="3">Three</option>
                <option value="4">Four</option>
            </select>
        </div>

        <!-- Javascript -->
        <script>
            $(function() {
                $('.select2-demo').each(function() {
                    $(this)
                        .wrap('<div class="position-relative"></div>')
                        .select2({
                            placeholder: 'Select value',
                            dropdownParent: $(this).parent()
                        });
                })
            });
        </script>
        <!-- / Javascript -->
    </div>
</div>
