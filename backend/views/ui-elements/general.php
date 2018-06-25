<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 18-6-22
 * Time: 下午2:15
 */
?>

<div class="row">
    <div class="col-md-12">
        <!--breadcrumbs start -->
        <ul class="breadcrumb panel">
            <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
            <li><a href="#">Dashboard</a></li>
            <li class="active">Current page</li>
        </ul>
        <!--breadcrumbs end -->
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <!--notification start-->
        <section class="panel">
            <header class="panel-heading">
                Alerts
                <span class="tools pull-right">
                                <a class="fa fa-chevron-down" href="javascript:;"></a>

                                <a class="fa fa-times" href="javascript:;"></a>
                            </span>
            </header>
            <div class="panel-body">
                <p>Wrap any text and an optional dismiss button in <code>.alert</code> and one of the four contextual classes (e.g., <code>.alert-success</code>) for basic alert messages.</p>
                <div class="alert alert-success alert-block fade in">
                    <button type="button" class="close close-sm" data-dismiss="alert">
                        <i class="fa fa-times"></i>
                    </button>
                    <h4>
                        <i class="icon-ok-sign"></i>
                        Success!
                    </h4>
                    <p>Best check yo self, you're not looking too good...</p>
                </div>

                <div class="alert alert-success fade in">
                    <button type="button" class="close close-sm" data-dismiss="alert">
                        <i class="fa fa-times"></i>
                    </button>
                    <strong>Well done!</strong> You successfully read this important alert message.
                </div>
                <div class="alert alert-info fade in">
                    <button type="button" class="close close-sm" data-dismiss="alert">
                        <i class="fa fa-times"></i>
                    </button>
                    <strong>Heads up!</strong> This alert needs your attention, but it's not super important.
                </div>
                <div class="alert alert-warning fade in">
                    <button type="button" class="close close-sm" data-dismiss="alert">
                        <i class="fa fa-times"></i>
                    </button>
                    <strong>Warning!</strong> Best check yo self, you're not looking too good.
                </div>
                <div class="alert alert-block alert-danger fade in">
                    <button type="button" class="close close-sm" data-dismiss="alert">
                        <i class="fa fa-times"></i>
                    </button>
                    <strong>Oh snap!</strong> Change a few things up and try submitting again.
                </div>

                <div class="highlight">
<pre>
<code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-success"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-info"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-warning"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"alert alert-danger"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
</code>
</pre>
                </div>

            </div>
        </section>
        <!--notification end-->
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <section class="panel">
            <div class="carousel slide auto panel-body" id="c-slide">
                <ol class="carousel-indicators out">
                    <li data-target="#c-slide" data-slide-to="0" class="active"></li>
                    <li data-target="#c-slide" data-slide-to="1" class=""></li>
                    <li data-target="#c-slide" data-slide-to="2" class=""></li>
                </ol>
                <div class="carousel-inner">
                    <div class="item text-center active">
                        <h3>AdminEx is an Awesome Dashboard</h3>
                        <p>Awesome admin template</p>
                        <small class="text-muted">Based on Latest Bootstrap 3.1.0</small>
                    </div>
                    <div class="item text-center">
                        <h3>Well Organized</h3>
                        <p>Awesome admin template</p>
                        <small class="text-muted">Huge UI Elements</small>
                    </div>
                    <div class="item text-center">
                        <h3>Well Documentation</h3>
                        <p>Awesome admin template</p>
                        <small class="text-muted">Very Easy to Use</small>
                    </div>
                </div>
                <a class="left carousel-control" href="#c-slide" data-slide="prev">
                    <i class="fa fa-angle-left"></i>
                </a>
                <a class="right carousel-control" href="#c-slide" data-slide="next">
                    <i class="fa fa-angle-right"></i>
                </a>
            </div>
        </section>
        <div class="row">
            <div class="col-md-12">
                <!--pagination start-->
                <section class="panel">
                    <header class="panel-heading">
                        Initail Collaps bar
                        <span class="tools pull-right">
                                        <a class="fa fa-chevron-up" href="javascript:;"></a>

                                        <a class="fa fa-times" href="javascript:;"></a>
                                    </span>
                    </header>
                    <div style="display: none;" class="panel-body">
                        contents goes here
                    </div>
                </section>
                <!--pagination end-->
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <!--gritter notification start-->
                <section class="panel">
                    <header class="panel-heading">
                        Notifications (Gritter)
                        <span class="tools pull-right">
                                        <a class="fa fa-chevron-down" href="javascript:;"></a>
                                        <a class="fa fa-times" href="javascript:;"></a>
                                    </span>
                    </header>
                    <div class="panel-body">
                        <p class="text-muted">Click on below buttons to check it out.</p>
                        <a href="javascript:;" class="btn btn-default btn-sm" id="add-regular">Regular</a>
                        <a href="javascript:;" class="btn btn-success  btn-sm" id="add-sticky">Sticky</a>
                        <a href="javascript:;" class="btn btn-info  btn-sm" id="add-without-image">Imageless</a>

                        <a href="javascript:;" class="btn btn-warning  btn-sm" id="add-gritter-light">Light</a>
                        <a href="javascript:;" class="btn btn-primary  btn-sm" id="add-max">Max of 3</a>
                        <a href="#" class="btn btn-danger  btn-sm" id="remove-all">Remove all</a>
                    </div>
                </section>
                <!--gritter notification end-->
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <!--tooltips start-->
                <section class="panel">
                    <div class="panel-body btn-gap">
                        <button data-original-title="Tooltip on top" type="button" class="btn btn-default tooltips" data-toggle="tooltip" data-placement="top" title="">Tooltip on top</button>

                        <button data-original-title="Tooltip on left" type="button" class="btn btn-default tooltips" data-toggle="tooltip" data-placement="left" title=""> left</button>

                        <button type="button" class="btn btn-default tooltips" data-toggle="tooltip " data-placement="bottom" title="" data-original-title="Tooltip on bottom"> bottom</button>

                        <button type="button" class="btn btn-default tooltips" data-toggle="tooltip" data-placement="right" title="" data-original-title="Tooltip on right"> right</button>
                    </div>
                </section>
                <!--tooltips end-->
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <!--popover start-->
                <section class="panel">
                    <div class="panel-body btn-gap">
                        <button class="btn btn-info popovers" data-trigger="hover" data-placement="top" data-content="And here's some amazing content. It's very engaging. right?" data-original-title="Popovers in top">Popover on Top</button>

                        <button class="btn btn-info popovers" data-trigger="hover" data-placement="bottom" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="Popovers in bottom">Bottom</button>

                        <button class="btn btn-info popovers" data-trigger="hover" data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="Popovers in right">Right</button>

                        <button class="btn btn-info popovers" data-trigger="hover" data-placement="left" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="Popovers in left">Left</button>
                    </div>
                </section>
                <!--popover end-->
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <!--modal start-->
                <section class="panel">
                    <header class="panel-heading">
                        Modal Dialogs
                        <span class="tools pull-right">
                                        <a class="fa fa-chevron-down" href="javascript:;"></a>

                                        <a class="fa fa-times" href="javascript:;"></a>
                                    </span>
                    </header>
                    <div class="panel-body">
                        <a href="#myModal" data-toggle="modal" class="btn btn-success">
                            Dialog
                        </a>
                        <a href="#myModal2" data-toggle="modal" class="btn btn-warning">
                            Confirm
                        </a>
                        <a href="#myModal3" data-toggle="modal" class="btn btn-danger">
                            Alert !
                        </a>
                        <!-- Modal -->
                        <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                        <h4 class="modal-title">Modal Tittle</h4>
                                    </div>
                                    <div class="modal-body">

                                        Body goes here...

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-success">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- modal -->
                        <!-- Modal -->
                        <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal2" class="modal fade">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                        <h4 class="modal-title">Modal Tittle</h4>
                                    </div>
                                    <div class="modal-body">

                                        Body goes here...

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-warning"> Confirm</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- modal -->
                        <!-- Modal -->
                        <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal3" class="modal fade">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                        <h4 class="modal-title">Modal Tittle</h4>
                                    </div>
                                    <div class="modal-body">

                                        Body goes here...

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger"> Ok</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- modal -->

                    </div>
                </section>
                <!--modal end-->
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <!--pagination start-->
                <section class="panel">
                    <header class="panel-heading">
                        Pagination
                        <span class="tools pull-right">
                                <a class="fa fa-chevron-down" href="javascript:;"></a>

                                <a class="fa fa-times" href="javascript:;"></a>
                            </span>
                    </header>
                    <div class="panel-body">
                        <h4>Sizing</h4>
                        <p>Fancy larger or smaller pagination? Add <code>.pagination-lg</code> or <code>.pagination-sm</code> for additional sizes.</p>

                        <div>
                            <ul class="pagination pagination-lg">
                                <li><a href="#">«</a></li>
                                <li><a href="#">1</a></li>
                                <li class="active"><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#">»</a></li>
                            </ul>
                        </div>
                        <div class="">
                            <ul class="pagination">
                                <li><a href="#">«</a></li>
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li class="active"><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#">»</a></li>
                            </ul>
                        </div>
                        <div>
                            <ul class="pagination pagination-sm">
                                <li><a href="#">«</a></li>
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li class="active"><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#">»</a></li>
                            </ul>
                        </div>



                    </div>

                </section>
                <section class="panel">
                    <div class="panel-body">
                        <div>
                            <h4>Default example</h4>

                            <ul class="pager">
                                <li><a href="#">Previous</a></li>
                                <li><a href="#">Next</a></li>
                            </ul>
                        </div>
                        <hr>
                        <div>
                            <h4>Aligned links</h4>
                            <ul class="pager">
                                <li class="previous"><a href="#">← Older</a></li>
                                <li class="next"><a href="#">Newer →</a></li>
                            </ul>
                        </div>
                        <hr>
                        <div>
                            <h4>Optional disabled state</h4>
                            <p>Pager links also use the general <code>.disabled</code> utility class from the pagination.</p>
                            <ul class="pager">
                                <li class="previous disabled"><a href="#">← Older</a></li>
                                <li class="next"><a href="#">Newer →</a></li>
                            </ul>
                        </div>
                    </div>
                </section>
                <!--pagination end-->
            </div>
        </div>

    </div>
    <div class="col-md-6">
        <div class="row">
            <div class="col-md-12">
                <!--label and badge start-->
                <section class="panel">
                    <header class="panel-heading">
                        Labels & badge
                        <span class="tools pull-right">
                                        <a href="javascript:;" class="fa fa-chevron-down"></a>
                                        <a href="javascript:;" class="fa fa-times"></a>
                                    </span>
                    </header>
                    <div class="panel-body">
                        <p class="text-muted text-center">Add any of the below mentioned modifier classes to change the appearance of a label.</p>
                        <p class="text-center">
                            <span class="label label-default">Default</span>
                            <span class="label label-primary">Primary</span>
                            <span class="label label-success">Success</span>
                            <span class="label label-info">Info</span>
                            <span class="label label-warning">Warning</span>
                            <span class="label label-danger">Danger</span>
                        </p>
                        <div class="highlight"><pre><code class="html"><span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"label label-default"</span><span class="nt">&gt;</span>Default<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"label label-primary"</span><span class="nt">&gt;</span>Primary<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"label label-success"</span><span class="nt">&gt;</span>Success<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"label label-warning"</span><span class="nt">&gt;</span>Warning<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"label label-danger"</span><span class="nt">&gt;</span>Danger<span class="nt">&lt;/span&gt;</span>
</code></pre></div>
                        <br>
                        <p class="text-muted text-center">Easily highlight new or unread items by adding a <code>&lt;span class="badge"&gt;</code> to links, Bootstrap navs, and more.</p>
                        <p class="m-bot-none text-center">
                            <span class="badge">5</span>
                            <span class="badge badge-primary">10</span>
                            <span class="badge badge-success">15</span>
                            <span class="badge badge-info">20</span>
                            <span class="badge badge-inverse">25</span>
                            <span class="badge badge-warning">30</span>
                            <span class="badge badge-important">35</span>
                        </p>
                    </div>
                </section>
                <!--label and badge end-->
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <!--progress bar start-->
                <section class="panel">
                    <header class="panel-heading">
                        Basic Progress Bars
                        <span class="tools pull-right">
                                        <a class="fa fa-chevron-down" href="javascript:;"></a>

                                        <a class="fa fa-times" href="javascript:;"></a>
                                    </span>
                    </header>
                    <div class="panel-body">
                        <div class="progress progress-xs">
                            <div style="width: 60%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="60" role="progressbar" class="progress-bar">
                                <span class="sr-only">60% Complete</span>
                            </div>
                        </div>
                        <div class="progress progress-xs">
                            <div style="width: 40%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="40" role="progressbar" class="progress-bar progress-bar-success">
                                <span class="sr-only">40% Complete (success)</span>
                            </div>
                        </div>
                        <div class="progress progress-xs">
                            <div style="width: 20%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="20" role="progressbar" class="progress-bar progress-bar-info">
                                <span class="sr-only">20% Complete</span>
                            </div>
                        </div>
                        <div class="progress progress-xs">
                            <div style="width: 60%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="60" role="progressbar" class="progress-bar progress-bar-warning">
                                <span class="sr-only">60% Complete (warning)</span>
                            </div>
                        </div>
                        <div class="progress progress-xs">
                            <div style="width: 80%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="80" role="progressbar" class="progress-bar progress-bar-danger">
                                <span class="sr-only">80% Complete</span>
                            </div>
                        </div>
                        <p>Default progress bar code example.</p>
                        <div class="highlight"><pre><code class="html"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"progress-bar"</span> <span class="na">role=</span><span class="s">"progressbar"</span> <span class="na">aria-valuenow=</span><span class="s">"60"</span> <span class="na">aria-valuemin=</span><span class="s">"0"</span> <span class="na">aria-valuemax=</span><span class="s">"100"</span> <span class="na">style=</span><span class="s">"width: 60%;"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"sr-only"</span><span class="nt">&gt;</span>60% Complete<span class="nt">&lt;/span&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
</code></pre></div>
                        <h4>With label</h4>
                        <p>Remove the <code>.sr-only</code> class from within the progress bar to show a visible percentage. For low percentages, consider adding a <code>min-width</code> to ensure the label's text is fully visible.</p>
                        <div class="progress">
                            <div style="width: 60%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="60" role="progressbar" class="progress-bar">
                                60%
                            </div>
                        </div>
                        <h4>
                            Stacked Progress Bars
                        </h4>
                        <p>Place multiple bars into the same <code>.progress</code> to stack them.</p>
                        <div class="progress progress-sm">
                            <div style="width: 35%" class="progress-bar progress-bar-success">
                                <span class="sr-only">35% Complete (success)</span>
                            </div>
                            <div style="width: 20%" class="progress-bar progress-bar-warning">
                                <span class="sr-only">20% Complete (warning)</span>
                            </div>
                            <div style="width: 10%" class="progress-bar progress-bar-danger">
                                <span class="sr-only">10% Complete (danger)</span>
                            </div>
                        </div>
                    </div>
                </section>
                <!--progress bar end-->

            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <!--progress bar start-->
                <section class="panel">
                    <header class="panel-heading">
                        Striped Progress Bars
                        <span class="tools pull-right">
                                        <a class="fa fa-chevron-down" href="javascript:;"></a>

                                        <a class="fa fa-times" href="javascript:;"></a>
                                    </span>
                    </header>
                    <div class="panel-body">
                        <div class="progress progress-striped progress-sm">
                            <div style="width: 40%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="40" role="progressbar" class="progress-bar progress-bar-success">
                                <span class="sr-only">40% Complete (success)</span>
                            </div>
                        </div>
                        <div class="progress progress-striped progress-sm">
                            <div style="width: 20%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="20" role="progressbar" class="progress-bar progress-bar-info">
                                <span class="sr-only">20% Complete</span>
                            </div>
                        </div>
                        <div class="progress progress-striped progress-sm">
                            <div style="width: 60%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="60" role="progressbar" class="progress-bar progress-bar-warning">
                                <span class="sr-only">60% Complete (warning)</span>
                            </div>
                        </div>
                        <div class="progress progress-striped progress-sm">
                            <div style="width: 80%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="80" role="progressbar" class="progress-bar progress-bar-danger">
                                <span class="sr-only">80% Complete (danger)</span>
                            </div>
                        </div>
                        <h4>
                            Animated Progress Bars
                        </h4>
                        <p>Add <code>.active</code> to <code>.progress-striped</code> to animate the stripes right to left. Not available in IE9 and below.</p>
                        <div class="progress progress-striped active progress-sm">
                            <div style="width: 45%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="45" role="progressbar" class="progress-bar progress-bar-success">
                                <span class="sr-only">45% Complete</span>
                            </div>
                        </div>
                    </div>
                </section>
                <!--progress bar end-->
            </div>
        </div>
    </div>
</div>

