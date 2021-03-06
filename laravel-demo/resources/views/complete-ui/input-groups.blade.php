<div class="ui-block">
    <h3 class="ui-block-heading">Input groups</h3>

    <h4 class="ui-block-heading">Example</h4>

    <div class="cui-example cui-example-vertical-spacing-sm">
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text">@</div>
            </div>
            <input type="text" class="form-control" placeholder="Username">
        </div>

        <div class="input-group">
            <input type="text" class="form-control" placeholder="Recipient's username">
            <div class="input-group-append">
                <div class="input-group-text">@example.com</div>
            </div>
        </div>

        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text">https://example.com/users/</div>
            </div>
            <input type="text" class="form-control">
        </div>

        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text">$</div>
            </div>
            <input type="text" class="form-control">
            <div class="input-group-append">
                <div class="input-group-text">.00</div>
            </div>
        </div>

        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text">$</div>
                <span class="input-group-text">0.00</span>
            </div>
            <input type="text" class="form-control">
        </div>
    </div>

    <h4 class="ui-block-heading">Sizing</h4>

    <div class="cui-example cui-example-vertical-spacing-sm">
        <div class="input-group input-group-lg">
            <div class="input-group-prepend">
                <span class="input-group-text">@</span>
            </div>
            <input type="text" class="form-control" placeholder="Username">
        </div>

        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">@</span>
            </div>
            <input type="text" class="form-control" placeholder="Username">
        </div>

        <div class="input-group input-group-sm">
            <div class="input-group-prepend">
                <span class="input-group-text">@</span>
            </div>
            <input type="text" class="form-control" placeholder="Username">
        </div>
    </div>

    <h4 class="ui-block-heading">Checkbox and radio addons</h4>

    <div class="cui-example">
        <div class="row">
            <div class="col-md">

                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <input type="checkbox">
                            </div>
                        </div>
                        <input type="text" class="form-control">
                    </div>
                </div>

            </div>
            <div class="col-md">

                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <input type="radio">
                            </div>
                        </div>
                        <input type="text" class="form-control">
                    </div>
                </div>

            </div>
            <div class="w-100"></div>
            <div class="col-md">

                <!-- Custom checkbox -->
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <label class="custom-control custom-checkbox px-2 m-0">
                                    <input type="checkbox" class="custom-control-input">
                                    <span class="custom-control-label"></span>
                                </label>
                            </div>
                        </div>
                        <input type="text" class="form-control">
                    </div>
                </div>

            </div>
            <div class="col-md">

                <!-- Custom radio -->
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <label class="custom-control custom-radio px-2 m-0">
                                    <input type="radio" class="custom-control-input">
                                    <span class="custom-control-label"></span>
                                </label>
                            </div>
                        </div>
                        <input type="text" class="form-control">
                    </div>
                </div>

            </div>
        </div>
    </div>

    <h4 class="ui-block-heading">Custom select</h4>

    <div class="cui-example cui-example-vertical-spacing-sm">
        <div class="input-group">
            <select class="custom-select flex-grow-1">
                <option>Select...</option>
                <option>One</option>
                <option>Two</option>
                <option>Three</option>
            </select>
            <span class="input-group-append">
                <button class="btn btn-secondary" type="button">Go!</button>
            </span>
        </div>

        <div class="input-group">
            <input type="text" class="form-control" placeholder="Search for...">
            <select class="custom-select">
                <option>Select...</option>
                <option>One</option>
                <option>Two</option>
                <option>Three</option>
            </select>
            <span class="input-group-append">
                <button class="btn btn-secondary" type="button">Go!</button>
            </span>
        </div>

        <div class="input-group">
            <select class="custom-select">
                <option>Select...</option>
                <option>One</option>
                <option>Two</option>
                <option>Three</option>
            </select>
            <input type="text" class="form-control" placeholder="Search for...">
            <span class="input-group-append">
                <button class="btn btn-secondary" type="button">Go!</button>
            </span>
        </div>

        <div class="input-group">
            <span class="input-group-prepend">
                <button class="btn btn-secondary" type="button">Go!</button>
            </span>
            <input type="text" class="form-control" placeholder="Search for...">
            <select class="custom-select">
                <option>Select...</option>
                <option>One</option>
                <option>Two</option>
                <option>Three</option>
            </select>
        </div>
    </div>

    <h4 class="ui-block-heading">Multiple addons</h4>

    <div class="cui-example">
        <div class="row">
            <div class="col-md">

                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <input type="checkbox">
                            </div>
                            <div class="input-group-text">$</div>
                        </div>
                        <input type="text" class="form-control">
                    </div>
                </div>

            </div>
            <div class="col-md">

                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">$</div>
                            <div class="input-group-text">0.00</div>
                        </div>
                        <input type="text" class="form-control">
                    </div>
                </div>

            </div>
        </div>
    </div>

    <h4 class="ui-block-heading">Button addons</h4>

    <div class="cui-example">
        <div class="row">
            <div class="col-md">

                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-prepend">
                            <button class="btn btn-secondary" type="button">Go!</button>
                        </span>
                        <input type="text" class="form-control" placeholder="Search for...">
                    </div>
                </div>

            </div>
            <div class="col-md">

                <div class="form-group">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-append">
                            <button class="btn btn-secondary" type="button">Go!</button>
                        </span>
                    </div>
                </div>

            </div>
            <div class="w-100"></div>
            <div class="col-md">

                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-prepend">
                            <button class="btn btn-secondary" type="button">Hate it</button>
                        </span>
                        <input type="text" class="form-control" placeholder="Product name">
                        <span class="input-group-append">
                            <button class="btn btn-secondary" type="button">Love it</button>
                        </span>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <h4 class="ui-block-heading">Buttons with dropdowns</h4>

    <div class="cui-example" id="button-dropdown-input-group-demo">
        <div class="row">
            <div class="col-md">

                <div class="input-group">
                    <div class="input-group-prepend">
                        <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown">Action</button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="javascript:void(0)">Action</a>
                            <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                            <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                            <div role="separator" class="dropdown-divider"></div>
                            <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                        </div>
                    </div>
                    <input type="text" class="form-control">
                </div>

            </div>
            <div class="col-md">

                <div class="input-group">
                    <input type="text" class="form-control">
                    <div class="input-group-append">
                        <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown">Action</button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="javascript:void(0)">Action</a>
                            <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                            <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                            <div role="separator" class="dropdown-divider"></div>
                            <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Javascript -->
        <script>
            $(function() {
                if ($('html').attr('dir') === 'rtl' || $('body').attr('dir') === 'rtl') {
                    $('#button-dropdown-input-group-demo .dropdown-menu-right').removeClass('dropdown-menu-right').addClass('rtled');
                    $('#button-dropdown-input-group-demo .dropdown-menu:not(.rtled)').addClass('dropdown-menu-right');
                }
            });
        </script>
        <!-- / Javascript -->
    </div>

    <h4 class="ui-block-heading">Segmented buttons</h4>

    <div class="cui-example" id="segmented-button-dropdown-input-group-demo">
        <div class="row">
            <div class="col-md">

                <div class="input-group">
                    <div class="input-group-prepend">
                        <button type="button" class="btn btn-secondary">Action</button>
                        <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown"></button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="javascript:void(0)">Action</a>
                            <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                            <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                            <div role="separator" class="dropdown-divider"></div>
                            <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                        </div>
                    </div>
                    <input type="text" class="form-control">
                </div>

            </div>
            <div class="col-md">

                <div class="input-group">
                    <input type="text" class="form-control">
                    <div class="input-group-append">
                        <button type="button" class="btn btn-secondary">Action</button>
                        <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown"></button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="javascript:void(0)">Action</a>
                            <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                            <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                            <div role="separator" class="dropdown-divider"></div>
                            <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Javascript -->
        <script>
            $(function() {
                if ($('html').attr('dir') === 'rtl' || $('body').attr('dir') === 'rtl') {
                    $('#segmented-button-dropdown-input-group-demo .dropdown-menu-right').removeClass('dropdown-menu-right').addClass('rtled');
                    $('#segmented-button-dropdown-input-group-demo .dropdown-menu:not(.rtled)').addClass('dropdown-menu-right');
                }
            });
        </script>
        <!-- / Javascript -->
    </div>
</div>
