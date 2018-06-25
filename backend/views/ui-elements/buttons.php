<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 18-6-22
 * Time: 下午2:19
 */
?>

<section class="panel">
    <header class="panel-heading">
        Default Buttons
        <span class="tools pull-right">
                    <a class="fa fa-chevron-down" href="javascript:;"></a>
                    <a class="fa fa-times" href="javascript:;"></a>
                </span>
    </header>
    <div class="panel-body">
        <p>Use any of the available button classes to quickly create a styled button.</p>
        <button class="btn btn-default" type="button">Default</button>
        <button class="btn btn-primary" type="button">Primary</button>
        <button class="btn btn-success" type="button">Success</button>
        <button class="btn btn-info" type="button">Info</button>
        <button class="btn btn-warning" type="button">Warning</button>
        <button class="btn btn-danger" type="button">Danger</button>
        <button class="btn btn-link" type="button">Link</button>
    </div>
</section>

<div class="row">
    <div class="col-md-6">
        <section class="panel">
            <header class="panel-heading">
                Buttons Sizes
                <span class="tools pull-right">
                                <a class="fa fa-chevron-down" href="javascript:;"></a>
                                <a class="fa fa-times" href="javascript:;"></a>
                            </span>
            </header>
            <div class="panel-body">
                <p>Fancy larger or smaller buttons? Add <code>.btn-lg</code>, <code>.btn-sm</code>, or <code>.btn-xs</code> for additional sizes.</p>
                <div class=" ">
                    <p>
                        <button class="btn btn-primary btn-lg" type="button">Large button</button>
                        <button class="btn btn-default btn-lg" type="button">Large button</button>
                    </p>
                    <p>
                        <button class="btn btn-primary" type="button">Default button</button>
                        <button class="btn btn-info" type="button">Default button</button>
                        <button class="btn btn-default" type="button">Default button</button>
                    </p>
                    <p>
                        <button class="btn btn-primary btn-sm" type="button">Small button</button>
                        <button class="btn btn-default btn-sm" type="button">Small button</button>
                        <button class="btn btn-danger btn-sm" type="button">Small button</button>
                    </p>
                    <p>
                        <button class="btn btn-primary btn-xs" type="button">Extra small button</button>
                        <button class="btn btn-default btn-xs" type="button">Extra small button</button>
                    </p>
                    <p>
                        <button class="btn btn-info btn-xs" type="button">Extra small button</button>
                        <button class="btn btn-success btn-xs" type="button">Extra small button</button>
                        <button class="btn btn-warning btn-xs" type="button">Extra small button</button>
                    </p>
                </div>
            </div>
        </section>
    </div>
    <div class="col-md-6">
        <section class="panel">
            <header class="panel-heading">
                block level buttons
                <span class="tools pull-right">
                                <a class="fa fa-chevron-down" href="javascript:;"></a>
                                <a class="fa fa-times" href="javascript:;"></a>
                            </span>
            </header>
            <div class="panel-body">
                <p>Create block level buttons&mdash;those that span the full width of a parent&mdash; by adding <code>.btn-block</code>.</p>
                <p>
                    <button class="btn btn-success btn-lg btn-block" type="button">Block level button</button>
                    <button class="btn btn-warning btn-block" type="button">Block level button</button>
                    <button class="btn btn-danger btn-xs btn-block" type="button">Block level button</button>
                </p>
                <div class="highlight"><pre><code class="html"><span class="nt">&lt;button</span> <span class="na">type=</span><span class="s">"button"</span> <span class="na">class=</span><span class="s">"btn btn-primary btn-lg btn-block"</span><span class="nt">&gt;</span>Block level button<span class="nt">&lt;/button&gt;</span>
                            </code></pre></div>
            </div>
        </section>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <section class="panel">
            <header class="panel-heading">
                Disabled Buttons
                <span class="tools pull-right">
                                <a class="fa fa-chevron-down" href="javascript:;"></a>
                                <a class="fa fa-times" href="javascript:;"></a>
                            </span>
            </header>
            <div class="panel-body">
                <p>Add the <code>disabled</code> attribute to <code>&lt;button&gt;</code> buttons.</p>
                <button disabled="disabled" class="btn btn-primary " type="button">Primary button</button>
                <button disabled="disabled" class="btn btn-default " type="button">Button</button>
            </div>
        </section>
    </div>
    <div class="col-md-6">
        <section class="panel">
            <header class="panel-heading">
                Button tags
                <span class="tools pull-right">
                                <a class="fa fa-chevron-down" href="javascript:;"></a>
                                <a class="fa fa-times" href="javascript:;"></a>
                            </span>
            </header>
            <div class="panel-body">
                <p>Use the button classes on an <code>&lt;a&gt;</code>, <code>&lt;button&gt;</code>, or <code>&lt;input&gt;</code> element.</p>
                <form>
                    <a role="button" href="#" class="btn btn-primary">Link</a>
                    <button type="submit" class="btn btn-primary">Button</button>
                    <input type="button" value="Input" class="btn btn-primary">
                    <input type="submit" value="Submit" class="btn btn-primary">
                </form>
            </div>
        </section>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <section class="panel">
            <header class="panel-heading">
                Buttons Groups
                <span class="tools pull-right">
                                <a class="fa fa-chevron-down" href="javascript:;"></a>
                                <a class="fa fa-times" href="javascript:;"></a>
                            </span>
            </header>
            <div class="panel-body">
                <p>Wrap a series of buttons with <code>.btn</code> in <code>.btn-group</code>.</p>
                <div style="margin: 9px 0 5px;" class="btn-group">
                    <button class="btn btn-default" type="button">Left</button>
                    <button class="btn btn-default" type="button">Middle</button>
                    <button class="btn btn-default" type="button">Right</button>
                </div>
                <div style="margin: 9px 0 5px;" class="btn-group">
                    <button class="btn btn-primary" type="button">Left</button>
                    <button class="btn btn-primary" type="button">Middle</button>
                    <button class="btn btn-primary" type="button">Right</button>
                </div>
                <h4>Button toolbar</h4>
                <p>Combine sets of <code>&lt;div class="btn-group"&gt;</code> into a <code>&lt;div class="btn-toolbar"&gt;</code> for more complex components.</p>
                <div>
                    <div style="margin: 0;" role="toolbar" class="btn-toolbar">
                        <div class="btn-group">
                            <button class="btn btn-default" type="button">1</button>
                            <button class="btn btn-default" type="button">2</button>
                            <button class="btn btn-default" type="button">3</button>
                            <button class="btn btn-default" type="button">4</button>
                        </div>
                        <div class="btn-group">
                            <button class="btn btn-default" type="button">5</button>
                            <button class="btn btn-default" type="button">6</button>
                            <button class="btn btn-default" type="button">7</button>
                        </div>
                        <div class="btn-group">
                            <button class="btn btn-default" type="button">8</button>
                        </div>
                    </div>
                </div>
                <h4>Nesting</h4>
                <p>Place a <code>.btn-group</code> within another <code>.btn-group</code> when you want dropdown menus mixed with a series of buttons.</p>
                <div>
                    <div class="btn-group">
                        <button class="btn btn-default" type="button">1</button>
                        <button class="btn btn-default" type="button">2</button>

                        <div class="btn-group">
                            <button data-toggle="dropdown" class="btn btn-default dropdown-toggle" type="button" id="btnGroupDrop1">
                                Dropdown
                                <span class="caret"></span>
                            </button>
                            <ul aria-labelledby="btnGroupDrop1" role="menu" class="dropdown-menu">
                                <li><a href="#">Dropdown link</a></li>
                                <li><a href="#">Dropdown link</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="btn-group">
                        <button class="btn btn-success" type="button">1</button>
                        <button class="btn btn-success" type="button">2</button>

                        <div class="btn-group">
                            <button data-toggle="dropdown" class="btn btn-success dropdown-toggle" type="button" id="btnGroupDrop1">
                                Dropdown
                                <span class="caret"></span>
                            </button>
                            <ul aria-labelledby="btnGroupDrop1" role="menu" class="dropdown-menu">
                                <li><a href="#">Dropdown link</a></li>
                                <li><a href="#">Dropdown link</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <div class="row">
            <div class="col-md-12">
                <section class="panel">
                    <header class="panel-heading">
                        Button dropdowns
                        <span class="tools pull-right">
                                        <a href="javascript:;" class="fa fa-chevron-down"></a>
                                        <a href="javascript:;" class="fa fa-times"></a>
                                     </span>
                    </header>
                    <div class="panel-body">
                        <p>Turn a button into a dropdown toggle with some basic markup changes.</p>
                        <div>
                            <div class="btn-group">
                                <button data-toggle="dropdown" class="btn btn-default dropdown-toggle" type="button">Default <span class="caret"></span></button>
                                <ul role="menu" class="dropdown-menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                </ul>
                            </div><!-- /btn-group -->
                            <div class="btn-group">
                                <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle" type="button">Primary <span class="caret"></span></button>
                                <ul role="menu" class="dropdown-menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                </ul>
                            </div><!-- /btn-group -->
                            <div class="btn-group">
                                <button data-toggle="dropdown" class="btn btn-success dropdown-toggle" type="button">Success <span class="caret"></span></button>
                                <ul role="menu" class="dropdown-menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                </ul>
                            </div><!-- /btn-group -->
                            <div class="btn-group">
                                <button data-toggle="dropdown" class="btn btn-info dropdown-toggle" type="button">Info <span class="caret"></span></button>
                                <ul role="menu" class="dropdown-menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                </ul>
                            </div><!-- /btn-group -->
                            <div class="btn-group">
                                <button data-toggle="dropdown" class="btn btn-warning dropdown-toggle" type="button">Warning <span class="caret"></span></button>
                                <ul role="menu" class="dropdown-menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                </ul>
                            </div><!-- /btn-group -->

                        </div>
                    </div>
                </section>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <section class="panel">
                    <header class="panel-heading">
                        Split button dropdowns
                        <span class="tools pull-right">
                                        <a href="javascript:;" class="fa fa-chevron-down"></a>
                                        <a href="javascript:;" class="fa fa-times"></a>
                                     </span>
                    </header>
                    <div class="panel-body">
                        <p>Similarly, create split button dropdowns with the same markup changes, only with a separate button.</p>
                        <div>
                            <div class="btn-group">
                                <button class="btn btn-default" type="button">Default</button>
                                <button data-toggle="dropdown" class="btn btn-default dropdown-toggle" type="button">
                                    <span class="caret"></span>
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <ul role="menu" class="dropdown-menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                </ul>
                            </div><!-- /btn-group -->
                            <div class="btn-group">
                                <button class="btn btn-primary" type="button">Primary</button>
                                <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle" type="button">
                                    <span class="caret"></span>
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <ul role="menu" class="dropdown-menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                </ul>
                            </div><!-- /btn-group -->
                            <div class="btn-group">
                                <button class="btn btn-success" type="button">Success</button>
                                <button data-toggle="dropdown" class="btn btn-success dropdown-toggle" type="button">
                                    <span class="caret"></span>
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <ul role="menu" class="dropdown-menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                </ul>
                            </div><!-- /btn-group -->
                            <div class="btn-group">
                                <button class="btn btn-info" type="button">Info</button>
                                <button data-toggle="dropdown" class="btn btn-info dropdown-toggle" type="button">
                                    <span class="caret"></span>
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <ul role="menu" class="dropdown-menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                </ul>
                            </div><!-- /btn-group -->
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <section class="panel">
                    <header class="panel-heading">
                        Sizing button dropdowns
                        <span class="tools pull-right">
                                        <a href="javascript:;" class="fa fa-chevron-down"></a>
                                        <a href="javascript:;" class="fa fa-times"></a>
                                     </span>
                    </header>
                    <div class="panel-body">
                        <p>Button dropdowns work with buttons of all sizes.</p>
                        <div>
                            <p role="toolbar" class="btn-toolbar">
                            <div class="btn-group">
                                <button data-toggle="dropdown" type="button" class="btn btn-default btn-lg dropdown-toggle">
                                    Large button <span class="caret"></span>
                                </button>
                                <ul role="menu" class="dropdown-menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                </ul>
                            </div><!-- /btn-group -->
                            <div class="btn-group">
                                <button data-toggle="dropdown" type="button" class="btn btn-success btn-lg dropdown-toggle">
                                    Large button <span class="caret"></span>
                                </button>
                                <ul role="menu" class="dropdown-menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                </ul>
                            </div><!-- /btn-group -->
                            </p><!-- /btn-toolbar -->
                            <p role="toolbar" class="btn-toolbar">
                            <div class="btn-group">
                                <button data-toggle="dropdown" type="button" class="btn btn-default btn-sm dropdown-toggle">
                                    Small button <span class="caret"></span>
                                </button>
                                <ul role="menu" class="dropdown-menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                </ul>
                            </div><!-- /btn-group -->
                            <div class="btn-group">
                                <button data-toggle="dropdown" type="button" class="btn btn-warning btn-sm dropdown-toggle">
                                    Small button <span class="caret"></span>
                                </button>
                                <ul role="menu" class="dropdown-menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                </ul>
                            </div><!-- /btn-group -->
                            <div class="btn-group">
                                <button data-toggle="dropdown" type="button" class="btn btn-info btn-sm dropdown-toggle">
                                    Small button <span class="caret"></span>
                                </button>
                                <ul role="menu" class="dropdown-menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                </ul>
                            </div><!-- /btn-group -->
                            </p><!-- /btn-toolbar -->
                            <p role="toolbar" class="btn-toolbar">
                            <div class="btn-group">
                                <button data-toggle="dropdown" type="button" class="btn btn-default btn-xs dropdown-toggle">
                                    Extra small button <span class="caret"></span>
                                </button>
                                <ul role="menu" class="dropdown-menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                </ul>
                            </div><!-- /btn-group -->
                            <div class="btn-group">
                                <button data-toggle="dropdown" type="button" class="btn btn-info btn-xs dropdown-toggle">
                                    Extra small button <span class="caret"></span>
                                </button>
                                <ul role="menu" class="dropdown-menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                </ul>
                            </div><!-- /btn-group -->
                            <div class="btn-group">
                                <button data-toggle="dropdown" type="button" class="btn btn-danger btn-xs dropdown-toggle">
                                    Extra small button <span class="caret"></span>
                                </button>
                                <ul role="menu" class="dropdown-menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                </ul>
                            </div><!-- /btn-group -->
                            </p><!-- /btn-toolbar -->
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <section class="panel">
            <header class="panel-heading">
                Buttons Groups Sizing
                <span class="tools pull-right">
                                <a class="fa fa-chevron-down" href="javascript:;"></a>
                                <a class="fa fa-times" href="javascript:;"></a>
                            </span>
            </header>
            <div class="panel-body">
                <p>Instead of applying button sizing classes to every button in a group, just add <code>.btn-group-*</code> to the <code>.btn-group</code>.</p>
                <p role="toolbar" class="btn-toolbar">
                <div class="btn-group btn-group-lg">
                    <button class="btn btn-default" type="button">Left</button>
                    <button class="btn btn-default" type="button">Middle</button>
                    <button class="btn btn-default" type="button">Right</button>
                </div>
                </p>
                <p role="toolbar" class="btn-toolbar">
                <div class="btn-group">
                    <button class="btn btn-default" type="button">Left</button>
                    <button class="btn btn-default" type="button">Middle</button>
                    <button class="btn btn-default" type="button">Right</button>
                </div>
                </p>
                <p role="toolbar" class="btn-toolbar">
                <div class="btn-group btn-group-sm">
                    <button class="btn btn-default" type="button">Left</button>
                    <button class="btn btn-default" type="button">Middle</button>
                    <button class="btn btn-default" type="button">Right</button>
                </div>
                </p>
                <p role="toolbar" class="btn-toolbar">
                <div class="btn-group btn-group-xs">
                    <button class="btn btn-default" type="button">Left</button>
                    <button class="btn btn-default" type="button">Middle</button>
                    <button class="btn btn-default" type="button">Right</button>
                </div>
                </p>
            </div>
        </section>

        <div class="row">
            <div class="col-md-12">
                <section class="panel">
                    <header class="panel-heading">
                        Justified Button groups
                        <span class="tools pull-right">
                                        <a class="fa fa-chevron-down" href="javascript:;"></a>
                                        <a class="fa fa-times" href="javascript:;"></a>
                                     </span>
                    </header>
                    <div class="panel-body">
                        <p>Just wrap a series of <code>.btn</code>s in <code>.btn-group.btn-group-justified</code>.</p>
                        <div class="btn-group btn-group-justified">
                            <a href="#" class="btn btn-success">Left</a>
                            <a href="#" class="btn btn-info">Middle</a>
                            <a href="#" class="btn btn-danger">Right</a>
                        </div>
                    </div>
                </section>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <section class="panel">
                    <header class="panel-heading">
                        Buttons With Icon
                        <span class="tools pull-right">
                                        <a class="fa fa-chevron-down" href="javascript:;"></a>
                                        <a class="fa fa-times" href="javascript:;"></a>
                                     </span>
                    </header>
                    <div class="panel-body">
                        <p>
                            <button class="btn btn-primary" type="button"><i class="fa fa-cloud"></i> Cloud</button>
                            <button class="btn btn-success" type="button"><i class="fa fa-eye"></i> View </button>
                            <button class="btn btn-info " type="button"><i class="fa fa-refresh"></i> Update</button>
                            <button class="btn btn-default " type="button"><i class="fa fa-cloud-upload"></i> Upload</button>
                            <button class="btn btn-warning" data-toggle="button">
                                <i class="fa fa-thumbs-up "></i>
                                89
                            </button>
                        </p>
                        <p>
                            <button class="btn btn-default" data-toggle="button">
                                <i class="fa fa-book"></i>
                            </button>
                            <button class="btn btn-default" data-toggle="button">
                                <i class="fa fa-cogs"></i>
                            </button>
                            <button class="btn btn-default" data-toggle="button">
                                <i class="fa fa-list"></i>
                            </button>
                            <button class="btn btn-default" data-toggle="button">
                                <i class="fa fa-desktop"></i>
                            </button>
                            <button class="btn btn-default" data-toggle="button">
                                <i class="fa fa-file"></i>
                            </button>
                            <button class="btn btn-default" data-toggle="button">
                                <i class="fa fa-lemon-o"></i>
                            </button>
                            <button class="btn btn-default" data-toggle="button">
                                <i class="fa fa-lock"></i>
                            </button>
                            <button class="btn btn-default" data-toggle="button">
                                <i class="fa fa-male"></i>
                            </button>
                            <button class="btn btn-default" data-toggle="button">
                                <i class="fa fa-map-marker"></i>
                            </button>
                        </p>


                        <div class="">
                            <button class="btn btn-block btn-primary" type="button"> <span class="pull-left"><i class="fa fa-facebook"></i></span> <span class="bold">Login with Facebook</span></button>
                            <button class="btn btn-block btn-info" type="button"> <span class="pull-left"><i class="fa fa-twitter"></i></span> <span class="bold">Login with Twitter</span></button>
                            <button class="btn btn-block btn-danger" type="button"> <span class="pull-left"><i class="fa fa-google-plus"></i></span> <span class="bold">Login with Google +</span></button>
                            <button class="btn btn-block btn-default" type="button"> <span class="pull-left"><i class="fa fa-flickr"></i></span> <span class="bold">Login with Flickr</span></button>
                        </div>
                    </div>
                </section>

            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <section class="panel">
                    <header class="panel-heading">
                        Star Rating Example
                        <span class="tools pull-right">
                                        <a class="fa fa-chevron-down" href="javascript:;"></a>
                                        <a class="fa fa-times" href="javascript:;"></a>
                                     </span>
                    </header>
                    <div class="panel-body">
                              <span class="rating">
                                  <span class="star"></span>
                                  <span class="star"></span>
                                  <span class="star"></span>
                                  <span class="star"></span>
                                  <span class="star"></span>
                              </span>
                    </div>
                </section>
            </div>
        </div>

    </div>
</div>
