<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Limitless - Responsive Web Application Kit by Eugene Kopyov</title>

    <!-- Global stylesheets -->
    <link
      href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900"
      rel="stylesheet"
      type="text/css"
    />
    <link
      href="assets/css/icons/icomoon/styles.css"
      rel="stylesheet"
      type="text/css"
    />
    <link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/colors.css" rel="stylesheet" type="text/css" />
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script
      type="text/javascript"
      src="assets/js/plugins/loaders/pace.min.js"
    ></script>
    <script
      type="text/javascript"
      src="assets/js/core/libraries/jquery.min.js"
    ></script>
    <script
      type="text/javascript"
      src="assets/js/core/libraries/bootstrap.min.js"
    ></script>
    <script
      type="text/javascript"
      src="assets/js/plugins/loaders/blockui.min.js"
    ></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script
      type="text/javascript"
      src="assets/js/plugins/visualization/d3/d3.min.js"
    ></script>
    <script
      type="text/javascript"
      src="assets/js/plugins/visualization/d3/d3_tooltip.js"
    ></script>
    <script
      type="text/javascript"
      src="assets/js/plugins/forms/styling/switchery.min.js"
    ></script>
    <script
      type="text/javascript"
      src="assets/js/plugins/forms/styling/uniform.min.js"
    ></script>
    <script
      type="text/javascript"
      src="assets/js/plugins/forms/selects/bootstrap_multiselect.js"
    ></script>
    <script
      type="text/javascript"
      src="assets/js/plugins/ui/moment/moment.min.js"
    ></script>
    <script
      type="text/javascript"
      src="assets/js/plugins/pickers/daterangepicker.js"
    ></script>

    <script type="text/javascript" src="assets/js/core/app.js"></script>
    <script type="text/javascript" src="assets/js/pages/dashboard.js"></script>
    <!-- /theme JS files -->
  </head>

  <body>
    <!-- Main navbar -->
    <div class="navbar navbar-inverse">
      <div class="navbar-header">
        <a class="navbar-brand" href="index.html"
          >School Management System</a>

        <ul class="nav navbar-nav visible-xs-block">
          <li>
            <a data-toggle="collapse" data-target="#navbar-mobile"
              ><i class="icon-tree5"></i
            ></a>
          </li>
          <li>
            <a class="sidebar-mobile-main-toggle"
              ><i class="icon-paragraph-justify3"></i
            ></a>
          </li>
        </ul>
      </div>

      <div class="navbar-collapse collapse" id="navbar-mobile">
        <ul class="nav navbar-nav">
          <li>
            <a class="sidebar-control sidebar-main-toggle hidden-xs"
              ><i class="icon-paragraph-justify3"></i
            ></a>
          </li>

          <!-- <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="icon-git-compare"></i>
              <span class="visible-xs-inline-block position-right"
                >Git updates</span
              >
              <span class="badge bg-warning-400">9</span>
            </a>

            <div class="dropdown-menu dropdown-content">
              <div class="dropdown-content-heading">
                Git updates
                <ul class="icons-list">
                  <li>
                    <a href="#"><i class="icon-sync"></i></a>
                  </li>
                </ul>
              </div>

              <ul class="media-list dropdown-content-body width-350">
                <li class="media">
                  <div class="media-left">
                    <a
                      href="#"
                      class="
                        btn
                        border-primary
                        text-primary
                        btn-flat btn-rounded btn-icon btn-sm
                      "
                      ><i class="icon-git-pull-request"></i
                    ></a>
                  </div>

                  <div class="media-body">
                    Drop the IE <a href="#">specific hacks</a> for temporal
                    inputs
                    <div class="media-annotation">4 minutes ago</div>
                  </div>
                </li>

                <li class="media">
                  <div class="media-left">
                    <a
                      href="#"
                      class="
                        btn
                        border-warning
                        text-warning
                        btn-flat btn-rounded btn-icon btn-sm
                      "
                      ><i class="icon-git-commit"></i
                    ></a>
                  </div>

                  <div class="media-body">
                    Add full font overrides for popovers and tooltips
                    <div class="media-annotation">36 minutes ago</div>
                  </div>
                </li>

                <li class="media">
                  <div class="media-left">
                    <a
                      href="#"
                      class="
                        btn
                        border-info
                        text-info
                        btn-flat btn-rounded btn-icon btn-sm
                      "
                      ><i class="icon-git-branch"></i
                    ></a>
                  </div>

                  <div class="media-body">
                    <a href="#">Chris Arney</a> created a new
                    <span class="text-semibold">Design</span> branch
                    <div class="media-annotation">2 hours ago</div>
                  </div>
                </li>

                <li class="media">
                  <div class="media-left">
                    <a
                      href="#"
                      class="
                        btn
                        border-success
                        text-success
                        btn-flat btn-rounded btn-icon btn-sm
                      "
                      ><i class="icon-git-merge"></i
                    ></a>
                  </div>

                  <div class="media-body">
                    <a href="#">Eugene Kopyov</a> merged
                    <span class="text-semibold">Master</span> and
                    <span class="text-semibold">Dev</span> branches
                    <div class="media-annotation">Dec 18, 18:36</div>
                  </div>
                </li>

                <li class="media">
                  <div class="media-left">
                    <a
                      href="#"
                      class="
                        btn
                        border-primary
                        text-primary
                        btn-flat btn-rounded btn-icon btn-sm
                      "
                      ><i class="icon-git-pull-request"></i
                    ></a>
                  </div>

                  <div class="media-body">
                    Have Carousel ignore keyboard events
                    <div class="media-annotation">Dec 12, 05:46</div>
                  </div>
                </li>
              </ul>

              <div class="dropdown-content-footer">
                <a href="#" data-popup="tooltip" title="All activity"
                  ><i class="icon-menu display-block"></i
                ></a>
              </div>
            </div>
          </li> -->
        </ul>

        <!-- <p class="navbar-text"><span class="label bg-success">Online</span></p> -->

        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown language-switch">
            <a class="dropdown-toggle" data-toggle="dropdown">
              <img
                src="assets/images/flags/gb.png"
                class="position-left"
                alt=""
              />
              English
              <span class="caret"></span>
            </a>

            <ul class="dropdown-menu">
             
             
              <li>
                <a class="english"
                  ><img src="assets/images/flags/gb.png" alt="" /> English</a
                >
              </li>
              <li>
                <a class="espana"
                  ><img src="assets/images/flags/es.png" alt="" /> España</a
                >
              </li>
              <li>
                <a class="russian"
                  ><img src="assets/images/flags/ru.png" alt="" /> Русский</a
                >
              </li>
            </ul>
          </li>

          <li class="dropdown">
            <!-- <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="icon-bubbles4"></i>
              <span class="visible-xs-inline-block position-right"
                >Messages</span
              >
              <span class="badge bg-warning-400">2</span>
            </a> -->

            <div class="dropdown-menu dropdown-content width-350">
              

              <ul class="media-list dropdown-content-body">
                <li class="media">
                  <div class="media-left">
                    <img
                      src="assets/images/placeholder.jpg"
                      class="img-circle img-sm"
                      alt=""
                    />
                    <span class="badge bg-danger-400 media-badge">5</span>
                  </div>

                  <div class="media-body">
                    <a href="#" class="media-heading">
                      <span class="text-semibold">James Alexander</span>
                      <span class="media-annotation pull-right">04:58</span>
                    </a>

                    <span class="text-muted"
                      >who knows, maybe that would be the best thing for
                      me...</span
                    >
                  </div>
                </li>

                <li class="media">
                  <div class="media-left">
                    <img
                      src="assets/images/placeholder.jpg"
                      class="img-circle img-sm"
                      alt=""
                    />
                    <span class="badge bg-danger-400 media-badge">4</span>
                  </div>

                  <div class="media-body">
                    <a href="#" class="media-heading">
                      <span class="text-semibold">Margo Baker</span>
                      <span class="media-annotation pull-right">12:16</span>
                    </a>

                    <span class="text-muted"
                      >That was something he was unable to do because...</span
                    >
                  </div>
                </li>

                <li class="media">
                  <div class="media-left">
                    <img
                      src="assets/images/placeholder.jpg"
                      class="img-circle img-sm"
                      alt=""
                    />
                  </div>
                  <div class="media-body">
                    <a href="#" class="media-heading">
                      <span class="text-semibold">Jeremy Victorino</span>
                      <span class="media-annotation pull-right">22:48</span>
                    </a>

                    <span class="text-muted"
                      >But that would be extremely strained and
                      suspicious...</span
                    >
                  </div>
                </li>

                <li class="media">
                  <div class="media-left">
                    <img
                      src="assets/images/placeholder.jpg"
                      class="img-circle img-sm"
                      alt=""
                    />
                  </div>
                  <div class="media-body">
                    <a href="#" class="media-heading">
                      <span class="text-semibold">Beatrix Diaz</span>
                      <span class="media-annotation pull-right">Tue</span>
                    </a>

                    <span class="text-muted"
                      >What a strenuous career it is that I've chosen...</span
                    >
                  </div>
                </li>

                <li class="media">
                  <div class="media-left">
                    <img
                      src="assets/images/placeholder.jpg"
                      class="img-circle img-sm"
                      alt=""
                    />
                  </div>
                  <div class="media-body">
                    <a href="#" class="media-heading">
                      <span class="text-semibold">Richard Vango</span>
                      <span class="media-annotation pull-right">Mon</span>
                    </a>

                    <span class="text-muted"
                      >Other travelling salesmen live a life of luxury...</span
                    >
                  </div>
                </li>
              </ul>

              <div class="dropdown-content-footer">
                <a href="#" data-popup="tooltip" title="All messages"
                  ><i class="icon-menu display-block"></i
                ></a>
              </div>
            </div>
          </li>

          <li class="dropdown dropdown-user">
            <a class="dropdown-toggle" data-toggle="dropdown">
              <!-- <img src="assets/images/placeholder.jpg" alt="" /> -->
              <span>Admin</span>
              <i class="caret"></i>
            </a>

            <ul class="dropdown-menu dropdown-menu-right">
              <li>
                <a href="#"><i class="icon-user-plus"></i> My profile</a>
              </li>
              
              <li>
                <a href="#"
                  ><span class="badge bg-teal-400 pull-right">17</span>
                  <i class="icon-comment-discussion"></i> Messages</a
                >
              </li>
              <li class="divider"></li>
              <!-- <li>
                <a href="#"><i class="icon-cog5"></i> Account settings</a>
              </li> -->
              <li>
                <a href="#"><i class="icon-switch2"></i> Logout</a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
    <!-- /main navbar -->

    <!-- Page container -->
    <div class="page-container">
      <!-- Page content -->
      <div class="page-content">
        <!-- Main sidebar -->
        <div class="sidebar sidebar-main">
          <div class="sidebar-content">
            <!-- User menu -->
            <div class="sidebar-user">
              <div class="category-content">
                <div class="media">
                  <a href="#" class="media-left"
                    ><img
                      src="assets/images/placeholder.jpg"
                      class="img-circle img-sm"
                      alt=""
                  /></a>
                  <div class="media-body">
                    <span class="media-heading text-semibold"
                      >Admin</span
                    >
                    <div class="text-size-mini text-muted">
                      <i class="icon-pin text-size-small"></i> &nbsp;Farid Town Sahiwal,
                      Pakistan
                    </div>
                  </div>

                  <div class="media-right media-middle">
                    <ul class="icons-list">
                      <li>
                        <a href="#"><i class="icon-cog3"></i></a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <!-- /user menu -->

            <!-- Main navigation -->
            <div class="sidebar-category sidebar-category-visible">
              <div class="category-content no-padding">
                <ul class="navigation navigation-main navigation-accordion">
                  <!-- Main -->
                  <li class="navigation-header">
                    <span>Main</span>
                    <i class="icon-menu" title="Main pages"></i>
                  </li>
                  <li class="active">
                    <a href="index.html"
                      ><i class="icon-home4"></i> <span>Dashboard</span></a
                    >
                  </li>
                  <li>
                    <a href="#"
                      ><i class="icon-stack2"></i> <span>Users</span></a
                    >
                    <ul>
                      <li>
                        <a href="layout_navbar_fixed.html">Fixed navbar</a>
                      </li>
                      <li>
                        <a href="layout_navbar_sidebar_fixed.html"
                          >Fixed navbar &amp; sidebar</a
                        >
                      </li>
                      <li>
                        <a href="layout_sidebar_fixed_native.html"
                          >Fixed sidebar native scroll</a
                        >
                      </li>
                      
                    </ul>
                  </li>

                  <li>
                    <a href="#"
                      ><i class="icon-stack2"></i> <span>Add New</span></a
                    >
                    <ul>
                      <li>
                        <a href="layout_navbar_fixed.html">Fixed navbar</a>
                      </li>
                      <li>
                        <a href="layout_navbar_sidebar_fixed.html"
                          >Fixed navbar &amp; sidebar</a
                        >
                      </li>
                      <li>
                        <a href="layout_sidebar_fixed_native.html"
                          >Fixed sidebar native scroll</a
                        >
                      </li>
                      
                    </ul>
                  </li>
                 
                 
                
                 
                  <!-- /main -->

                  <!-- Forms -->
                  <li class="navigation-header">
                    <span>Forms</span> <i class="icon-menu" title="Forms"></i>
                  </li>
                  <li>
                    <a href="#"
                      ><i class="icon-pencil3"></i>
                      <span>Form components</span></a
                    >
                    <ul>
                      <li><a href="form_inputs_basic.html">Basic inputs</a></li>
                      <li>
                        <a href="form_checkboxes_radios.html"
                          >Checkboxes &amp; radios</a
                        >
                      </li>
                     
                       
                      </li>
                      <li>
                        <a href="form_floating_labels.html">Floating labels</a>
                      </li>
                      <li>
                        <a href="#">Selects</a>
                        
                      </li>
                      <li><a href="form_tag_inputs.html">Tag inputs</a></li>
                      <li>
                        <a href="form_dual_listboxes.html">Dual Listboxes</a>
                      </li>
                      <li><a href="form_editable.html">Editable forms</a></li>
                      <li><a href="form_validation.html">Validation</a></li>
                      <li><a href="form_inputs_grid.html">Inputs grid</a></li>
                    </ul>
                  </li>
                  
                 
                  <li>
                    <a href="#"
                      ><i class="icon-spell-check"></i> <span>Editors</span></a
                    >
                    <ul>
                      <li>
                        <a href="editor_summernote.html">Summernote editor</a>
                      </li>
                      <li><a href="editor_ckeditor.html">CKEditor</a></li>
                      <li>
                        <a href="editor_wysihtml5.html">WYSIHTML5 editor</a>
                      </li>
                      <li><a href="editor_code.html">Code editor</a></li>
                    </ul>
                  </li>
                  
                 
                  <!-- /forms -->
            
                  <!-- /appearance -->

                  <!-- Layout -->
                  <li class="navigation-header">
                    <span>Layout</span>
                    <i class="icon-menu" title="Layout options"></i>
                  </li>
                   <li>
                    <a href="#"
                      ><i class="icon-menu3"></i> <span>Navbars</span></a
                    >
                    <ul>
                      <li><a href="navbar_single.html">Single navbar</a></li>
                      <li>
                        <a href="#">Multiple navbars</a>
                        <ul>
                          <li>
                            <a href="navbar_multiple_navbar_navbar.html"
                              >Navbar + navbar</a
                            >
                          </li>
                          <li>
                            <a href="navbar_multiple_navbar_header.html"
                              >Navbar + header</a
                            >
                          </li>
                          <li>
                            <a href="navbar_multiple_header_navbar.html"
                              >Header + navbar</a
                            >
                          </li>
                          <li>
                            <a href="navbar_multiple_top_bottom.html"
                              >Top + bottom</a
                            >
                          </li>
                        </ul>
                      </li>
                      <li><a href="navbar_colors.html">Color options</a></li>
                      <li><a href="navbar_sizes.html">Sizing options</a></li>
                      <li><a href="navbar_hideable.html">Hide on scroll</a></li>
                      <li>
                        <a href="navbar_components.html">Navbar components</a>
                      </li>
                    </ul>
                  </li>
                  <li>
                    <a href="#"
                      ><i class="icon-tree5"></i> <span>Menu levels</span></a
                    >
                    <ul>
                      <li>
                        <a href="#"><i class="icon-IE"></i> Second level</a>
                      </li>
                      <li>
                        <a href="#"
                          ><i class="icon-firefox"></i> Second level with
                          child</a
                        >
                        <ul>
                          <li>
                            <a href="#"
                              ><i class="icon-android"></i> Third level</a
                            >
                          </li>
                          <li>
                            <a href="#"
                              ><i class="icon-apple2"></i> Third level with
                              child</a
                            >
                            <ul>
                              <li>
                                <a href="#"
                                  ><i class="icon-html5"></i> Fourth level</a
                                >
                              </li>
                              <li>
                                <a href="#"
                                  ><i class="icon-css3"></i> Fourth level</a
                                >
                              </li>
                            </ul>
                          </li>
                          <li>
                            <a href="#"
                              ><i class="icon-windows"></i> Third level</a
                            >
                          </li>
                        </ul>
                      </li>
                      <li>
                        <a href="#"><i class="icon-chrome"></i> Second level</a>
                      </li>
                    </ul>
                  </li>
                  <!-- /layout -->

                  <!-- Extensions -->
                  
                  <!-- /extensions -->

                  <!-- Tables -->
                  <li class="navigation-header">
                    <span>Tables</span> <i class="icon-menu" title="Tables"></i>
                  </li>
                 
                  
               
                 
                
                  <!-- /tables -->

                  <!-- Page kits -->
                 
                 
                  
                  <li>
                    <a href="#"
                      ><i class="icon-people"></i> <span>User pages</span></a
                    >
                    
                  </li>
                  <li>
                    <a href="#"
                      ><i class="icon-cube3"></i>
                      <span>Application pages</span></a
                    >
                    <ul>
                      <li>
                        <a href="#">Task manager</a>
                        <ul>
                          <li>
                            <a href="task_manager_grid.html">Task grid</a>
                          </li>
                          <li>
                            <a href="task_manager_list.html">Task list</a>
                          </li>
                          <li>
                            <a href="task_manager_detailed.html"
                              >Task detailed</a
                            >
                          </li>
                        </ul>
                      </li>
                      <li>
                        <a href="#">Inbox</a>
                        <ul>
                          <li><a href="mail_list.html">Mail list</a></li>
                          <li>
                            <a href="mail_list_detached.html"
                              >Mail list (detached)</a
                            >
                          </li>
                          <li><a href="mail_read.html">Read mail</a></li>
                          <li><a href="mail_write.html">Write mail</a></li>
                          <li class="navigation-divider"></li>
                          <li><a href="chat_layouts.html">Chat layouts</a></li>
                          <li><a href="chat_options.html">Chat options</a></li>
                        </ul>
                      </li>
                      <li>
                        <a href="#">Search</a>
                        <ul>
                          <li>
                            <a href="search_basic.html">Basic search results</a>
                          </li>
                          <li>
                            <a href="search_users.html">User search results</a>
                          </li>
                          <li>
                            <a href="search_images.html"
                              >Image search results</a
                            >
                          </li>
                          <li>
                            <a href="search_videos.html"
                              >Video search results</a
                            >
                          </li>
                        </ul>
                      </li>
                      <li>
                        <a href="#">Job search</a>
                        <ul>
                          <li><a href="job_list_cards.html">Cards view</a></li>
                          <li><a href="job_list_panel.html">Panel view</a></li>
                          <li><a href="job_detailed.html">Job detailed</a></li>
                          <li><a href="job_apply.html">Apply</a></li>
                        </ul>
                      </li>
                      <li>
                        <a href="#">Learning</a>
                        <ul>
                          <li><a href="learning_list.html">List view</a></li>
                          <li><a href="learning_grid.html">Grid view</a></li>
                          <li>
                            <a href="learning_detailed.html">Detailed course</a>
                          </li>
                        </ul>
                      </li>
                      <li>
                        <a href="#">Ecommerce set</a>
                        <ul>
                          <li>
                            <a href="ecommerce_product_list.html"
                              >Product list</a
                            >
                          </li>
                          <li>
                            <a href="ecommerce_product_grid.html"
                              >Product grid</a
                            >
                          </li>
                          <li>
                            <a href="ecommerce_orders_history.html"
                              >Orders history</a
                            >
                          </li>
                          <li>
                            <a href="ecommerce_customers.html">Customers</a>
                          </li>
                          <li>
                            <a href="ecommerce_pricing.html">Pricing tables</a>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <!-- /page kits -->
                </ul>
              </div>
            </div>
            <!-- /main navigation -->
          </div>
        </div>
        <!-- /main sidebar -->

        <!-- Main content -->
        <div class="content-wrapper">
          <!-- Page header -->
          <div class="page-header page-header-default">
            <div class="page-header-content">
              <div class="page-title">
                <h4>
                  <i class="icon-arrow-left52 position-left"></i>
                  <span class="text-semibold">Home</span> - Dashboard
                </h4>
              </div>

             
            </div>

            <div class="breadcrumb-line">
              <ul class="breadcrumb">
                <li>
                  <a href="index.html"
                    ><i class="icon-home2 position-left"></i> Home</a
                  >
                </li>
                <li class="active">Dashboard</li>
              </ul>

              <ul class="breadcrumb-elements">
                <li>
                  <a href="#"
                    ><i class="icon-comment-discussion position-left"></i>
                    Support</a
                  >
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="icon-gear position-left"></i>
                    Settings
                    <span class="caret"></span>
                  </a>

                 
                </li>
              </ul>
            </div>
          </div>
          <!-- /page header -->

          <!-- Content area -->

          <div class="content">
            <!-- Main charts -->
            <div class="row">
              <div class="col-lg-7">
                <!-- Traffic sources -->
                <div class="panel panel-flat">
                  <div class="panel-heading">
                    <h6 class="panel-title">Traffic sources</h6>
                    <div class="heading-elements">
                      <form class="heading-form" action="#">
                        <div class="form-group">
                          <label
                            class="
                              checkbox-inline checkbox-switchery checkbox-right
                              switchery-xs
                            "
                          >
                            <input
                              type="checkbox"
                              class="switch"
                              checked="checked"
                            />
                            Live update:
                          </label>
                        </div>
                      </form>
                    </div>
                  </div>

                  <div class="container-fluid">
                    <div class="row">
                      <div class="col-lg-4">
                        <ul class="list-inline text-center">
                          <li>
                            <a
                              href="#"
                              class="
                                btn
                                border-teal
                                text-teal
                                btn-flat btn-rounded btn-icon btn-xs
                                valign-text-bottom
                              "
                              ><i class="icon-plus3"></i
                            ></a>
                          </li>
                          <li class="text-left">
                            <div class="text-semibold">New visitors</div>
                            <div class="text-muted">2,349 avg</div>
                          </li>
                        </ul>

                        <div class="col-lg-10 col-lg-offset-1">
                          <div class="content-group" id="new-visitors"></div>
                        </div>
                      </div>

                      <div class="col-lg-4">
                        <ul class="list-inline text-center">
                          <li>
                            <a
                              href="#"
                              class="
                                btn
                                border-warning-400
                                text-warning-400
                                btn-flat btn-rounded btn-icon btn-xs
                                valign-text-bottom
                              "
                              ><i class="icon-watch2"></i
                            ></a>
                          </li>
                          <li class="text-left">
                            <div class="text-semibold">New sessions</div>
                            <div class="text-muted">08:20 avg</div>
                          </li>
                        </ul>

                        <div class="col-lg-10 col-lg-offset-1">
                          <div class="content-group" id="new-sessions"></div>
                        </div>
                      </div>

                      <div class="col-lg-4">
                        <ul class="list-inline text-center">
                          <li>
                            <a
                              href="#"
                              class="
                                btn
                                border-indigo-400
                                text-indigo-400
                                btn-flat btn-rounded btn-icon btn-xs
                                valign-text-bottom
                              "
                              ><i class="icon-people"></i
                            ></a>
                          </li>
                          <li class="text-left">
                            <div class="text-semibold">Total online</div>
                            <div class="text-muted">
                              <span
                                class="status-mark border-success position-left"
                              ></span>
                              5,378 avg
                            </div>
                          </li>
                        </ul>

                        <div class="col-lg-10 col-lg-offset-1">
                          <div class="content-group" id="total-online"></div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="position-relative" id="traffic-sources"></div>
                </div>
                <!-- /traffic sources -->
              </div>

              <div class="col-lg-5">
                <!-- Sales stats -->
                <div class="panel panel-flat">
                  <div class="panel-heading">
                    <h6 class="panel-title">Sales statistics</h6>
                    <div class="heading-elements">
                      <form class="heading-form" action="#">
                        <div class="form-group">
                          <select
                            class="change-date select-sm"
                            id="select_date"
                          >
                            <optgroup
                              label="<i class='icon-watch pull-right'></i> Time period"
                            >
                              <option value="val1">June, 29 - July, 5</option>
                              <option value="val2">June, 22 - June 28</option>
                              <option value="val3" selected="selected">
                                June, 15 - June, 21
                              </option>
                              <option value="val4">June, 8 - June, 14</option>
                            </optgroup>
                          </select>
                        </div>
                      </form>
                    </div>
                  </div>

                  <div class="container-fluid">
                    <div class="row text-center">
                      <div class="col-md-4">
                        <div class="content-group">
                          <h5 class="text-semibold no-margin">
                            <i
                              class="icon-calendar5 position-left text-slate"
                            ></i>
                            5,689
                          </h5>
                          <span class="text-muted text-size-small"
                            >orders weekly</span
                          >
                        </div>
                      </div>

                      <div class="col-md-4">
                        <div class="content-group">
                          <h5 class="text-semibold no-margin">
                            <i
                              class="icon-calendar52 position-left text-slate"
                            ></i>
                            32,568
                          </h5>
                          <span class="text-muted text-size-small"
                            >orders monthly</span
                          >
                        </div>
                      </div>

                      <div class="col-md-4">
                        <div class="content-group">
                          <h5 class="text-semibold no-margin">
                            <i class="icon-cash3 position-left text-slate"></i>
                            $23,464
                          </h5>
                          <span class="text-muted text-size-small"
                            >average revenue</span
                          >
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="content-group-sm" id="app_sales"></div>
                  <div id="monthly-sales-stats"></div>
                </div>
                <!-- /sales stats -->
              </div>
            </div>
            <!-- /main charts -->

            <!-- Dashboard content -->
            <div class="row">
              <div class="col-lg-8">
                <!-- Marketing campaigns -->
                <!-- <div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">Marketing campaigns</h6>
									<div class="heading-elements">
										<span class="label bg-success heading-text">28 active</span>
										<ul class="icons-list">
					                		<li class="dropdown">
					                			<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i> <span class="caret"></span></a>
												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="#"><i class="icon-sync"></i> Update data</a></li>
													<li><a href="#"><i class="icon-list-unordered"></i> Detailed log</a></li>
													<li><a href="#"><i class="icon-pie5"></i> Statistics</a></li>
													<li class="divider"></li>
													<li><a href="#"><i class="icon-cross3"></i> Clear list</a></li>
												</ul>
					                		</li>
					                	</ul>
				                	</div>
								</div>

								<div class="table-responsive">
									<table class="table table-lg text-nowrap">
										<tbody>
											<tr>
												<td class="col-md-5">
													<div class="media-left">
														<div id="campaigns-donut"></div>
													</div>

													<div class="media-left">
														<h5 class="text-semibold no-margin">38,289 <small class="text-success text-size-base"><i class="icon-arrow-up12"></i> (+16.2%)</small></h5>
														<ul class="list-inline list-inline-condensed no-margin">
															<li>
																<span class="status-mark border-success"></span>
															</li>
															<li>
																<span class="text-muted">May 12, 12:30 am</span>
															</li>
														</ul>
													</div>
												</td>

												<td class="col-md-5">
													<div class="media-left">
														<div id="campaign-status-pie"></div>
													</div>

													<div class="media-left">
														<h5 class="text-semibold no-margin">2,458 <small class="text-danger text-size-base"><i class="icon-arrow-down12"></i> (- 4.9%)</small></h5>
														<ul class="list-inline list-inline-condensed no-margin">
															<li>
																<span class="status-mark border-danger"></span>
															</li>
															<li>
																<span class="text-muted">Jun 4, 4:00 am</span>
															</li>
														</ul>
													</div>
												</td>

												<td class="text-right col-md-2">
													<a href="#" class="btn bg-indigo-300"><i class="icon-statistics position-left"></i> View report</a>
												</td>
											</tr>
										</tbody>
									</table>	
								</div>

								<div class="table-responsive">
									<table class="table text-nowrap">
										<thead>
											<tr>
												<th>Campaign</th>
												<th class="col-md-2">Client</th>
												<th class="col-md-2">Changes</th>
												<th class="col-md-2">Budget</th>
												<th class="col-md-2">Status</th>
												<th class="text-center" style="width: 20px;"><i class="icon-arrow-down12"></i></th>
											</tr>
										</thead>
										<tbody>
											<tr class="active border-double">
												<td colspan="5">Today</td>
												<td class="text-right">
													<span class="progress-meter" id="today-progress" data-progress="30"></span>
												</td>
											</tr>
											<tr>
												<td>
													<div class="media-left media-middle">
														<a href="#"><img src="assets/images/brands/facebook.png" class="img-circle img-xs" alt=""></a>
													</div>
													<div class="media-left">
														<div class=""><a href="#" class="text-default text-semibold">Facebook</a></div>
														<div class="text-muted text-size-small">
															<span class="status-mark border-blue position-left"></span>
															02:00 - 03:00
														</div>
													</div>
												</td>
												<td><span class="text-muted">Mintlime</span></td>
												<td><span class="text-success-600"><i class="icon-stats-growth2 position-left"></i> 2.43%</span></td>
												<td><h6 class="text-semibold">$5,489</h6></td>
												<td><span class="label bg-blue">Active</span></td>
												<td class="text-center">
													<ul class="icons-list">
														<li class="dropdown">
															<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>
															<ul class="dropdown-menu dropdown-menu-right">
																<li><a href="#"><i class="icon-file-stats"></i> View statement</a></li>
																<li><a href="#"><i class="icon-file-text2"></i> Edit campaign</a></li>
																<li><a href="#"><i class="icon-file-locked"></i> Disable campaign</a></li>
																<li class="divider"></li>
																<li><a href="#"><i class="icon-gear"></i> Settings</a></li>
															</ul>
														</li>
													</ul>
												</td>
											</tr>
											<tr>
												<td>
													<div class="media-left media-middle">
														<a href="#"><img src="assets/images/brands/youtube.png" class="img-circle img-xs" alt=""></a>
													</div>
													<div class="media-left">
														<div class=""><a href="#" class="text-default text-semibold">Youtube videos</a></div>
														<div class="text-muted text-size-small">
															<span class="status-mark border-danger position-left"></span>
															13:00 - 14:00
														</div>
													</div>
												</td>
												<td><span class="text-muted">CDsoft</span></td>
												<td><span class="text-success-600"><i class="icon-stats-growth2 position-left"></i> 3.12%</span></td>
												<td><h6 class="text-semibold">$2,592</h6></td>
												<td><span class="label bg-danger">Closed</span></td>
												<td class="text-center">
													<ul class="icons-list">
														<li class="dropdown">
															<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>
															<ul class="dropdown-menu dropdown-menu-right">
																<li><a href="#"><i class="icon-file-stats"></i> View statement</a></li>
																<li><a href="#"><i class="icon-file-text2"></i> Edit campaign</a></li>
																<li><a href="#"><i class="icon-file-locked"></i> Disable campaign</a></li>
																<li class="divider"></li>
																<li><a href="#"><i class="icon-gear"></i> Settings</a></li>
															</ul>
														</li>
													</ul>
												</td>
											</tr>
											<tr>
												<td>
													<div class="media-left media-middle">
														<a href="#"><img src="assets/images/brands/spotify.png" class="img-circle img-xs" alt=""></a>
													</div>
													<div class="media-left">
														<div class=""><a href="#" class="text-default text-semibold">Spotify ads</a></div>
														<div class="text-muted text-size-small">
															<span class="status-mark border-grey-400 position-left"></span>
															10:00 - 11:00
														</div>
													</div>
												</td>
												<td><span class="text-muted">Diligence</span></td>
												<td><span class="text-danger"><i class="icon-stats-decline2 position-left"></i> - 8.02%</span></td>
												<td><h6 class="text-semibold">$1,268</h6></td>
												<td><span class="label bg-grey-400">Hold</span></td>
												<td class="text-center">
													<ul class="icons-list">
														<li class="dropdown">
															<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>
															<ul class="dropdown-menu dropdown-menu-right">
																<li><a href="#"><i class="icon-file-stats"></i> View statement</a></li>
																<li><a href="#"><i class="icon-file-text2"></i> Edit campaign</a></li>
																<li><a href="#"><i class="icon-file-locked"></i> Disable campaign</a></li>
																<li class="divider"></li>
																<li><a href="#"><i class="icon-gear"></i> Settings</a></li>
															</ul>
														</li>
													</ul>
												</td>
											</tr>
											<tr>
												<td>
													<div class="media-left media-middle">
														<a href="#"><img src="assets/images/brands/twitter.png" class="img-circle img-xs" alt=""></a>
													</div>
													<div class="media-left">
														<div class=""><a href="#" class="text-default text-semibold">Twitter ads</a></div>
														<div class="text-muted text-size-small">
															<span class="status-mark border-grey-400 position-left"></span>
															04:00 - 05:00
														</div>
													</div>
												</td>
												<td><span class="text-muted">Deluxe</span></td>
												<td><span class="text-success-600"><i class="icon-stats-growth2 position-left"></i> 2.78%</span></td>
												<td><h6 class="text-semibold">$7,467</h6></td>
												<td><span class="label bg-grey-400">Hold</span></td>
												<td class="text-center">
													<ul class="icons-list">
														<li class="dropdown">
															<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>
															<ul class="dropdown-menu dropdown-menu-right">
																<li><a href="#"><i class="icon-file-stats"></i> View statement</a></li>
																<li><a href="#"><i class="icon-file-text2"></i> Edit campaign</a></li>
																<li><a href="#"><i class="icon-file-locked"></i> Disable campaign</a></li>
																<li class="divider"></li>
																<li><a href="#"><i class="icon-gear"></i> Settings</a></li>
															</ul>
														</li>
													</ul>
												</td>
											</tr>

											<tr class="active border-double">
												<td colspan="5">Yesterday</td>
												<td class="text-right">
													<span class="progress-meter" id="yesterday-progress" data-progress="65"></span>
												</td>
											</tr>
											<tr>
												<td>
													<div class="media-left media-middle">
														<a href="#"><img src="assets/images/brands/bing.png" class="img-circle img-xs" alt=""></a>
													</div>
													<div class="media-left">
														<div class=""><a href="#" class="text-default text-semibold">Bing campaign</a></div>
														<div class="text-muted text-size-small">
															<span class="status-mark border-success position-left"></span>
															15:00 - 16:00
														</div>
													</div>
												</td>
												<td><span class="text-muted">Metrics</span></td>
												<td><span class="text-danger"><i class="icon-stats-decline2 position-left"></i> - 5.78%</span></td>
												<td><h6 class="text-semibold">$970</h6></td>
												<td><span class="label bg-success-400">Pending</span></td>
												<td class="text-center">
													<ul class="icons-list">
														<li class="dropup">
															<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>
															<ul class="dropdown-menu dropdown-menu-right">
																<li><a href="#"><i class="icon-file-stats"></i> View statement</a></li>
																<li><a href="#"><i class="icon-file-text2"></i> Edit campaign</a></li>
																<li><a href="#"><i class="icon-file-locked"></i> Disable campaign</a></li>
																<li class="divider"></li>
																<li><a href="#"><i class="icon-gear"></i> Settings</a></li>
															</ul>
														</li>
													</ul>
												</td>
											</tr>
											<tr>
												<td>
													<div class="media-left media-middle">
														<a href="#"><img src="assets/images/brands/amazon.png" class="img-circle img-xs" alt=""></a>
													</div>
													<div class="media-left">
														<div class=""><a href="#" class="text-default text-semibold">Amazon ads</a></div>
														<div class="text-muted text-size-small">
															<span class="status-mark border-danger position-left"></span>
															18:00 - 19:00
														</div>
													</div>
												</td>
												<td><span class="text-muted">Blueish</span></td>
												<td><span class="text-success-600"><i class="icon-stats-growth2 position-left"></i> 6.79%</span></td>
												<td><h6 class="text-semibold">$1,540</h6></td>
												<td><span class="label bg-blue">Active</span></td>
												<td class="text-center">
													<ul class="icons-list">
														<li class="dropup">
															<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>
															<ul class="dropdown-menu dropdown-menu-right">
																<li><a href="#"><i class="icon-file-stats"></i> View statement</a></li>
																<li><a href="#"><i class="icon-file-text2"></i> Edit campaign</a></li>
																<li><a href="#"><i class="icon-file-locked"></i> Disable campaign</a></li>
																<li class="divider"></li>
																<li><a href="#"><i class="icon-gear"></i> Settings</a></li>
															</ul>
														</li>
													</ul>
												</td>
											</tr>
											<tr>
												<td>
													<div class="media-left media-middle">
														<a href="#"><img src="assets/images/brands/dribbble.png" class="img-circle img-xs" alt=""></a>
													</div>
													<div class="media-left">
														<div class=""><a href="#" class="text-default text-semibold">Dribbble ads</a></div>
														<div class="text-muted text-size-small">
															<span class="status-mark border-blue position-left"></span>
															20:00 - 21:00
														</div>
													</div>
												</td>
												<td><span class="text-muted">Teamable</span></td>
												<td><span class="text-danger"><i class="icon-stats-decline2 position-left"></i> 9.83%</span></td>
												<td><h6 class="text-semibold">$8,350</h6></td>
												<td><span class="label bg-danger">Closed</span></td>
												<td class="text-center">
													<ul class="icons-list">
														<li class="dropup">
															<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>
															<ul class="dropdown-menu dropdown-menu-right">
																<li><a href="#"><i class="icon-file-stats"></i> View statement</a></li>
																<li><a href="#"><i class="icon-file-text2"></i> Edit campaign</a></li>
																<li><a href="#"><i class="icon-file-locked"></i> Disable campaign</a></li>
																<li class="divider"></li>
																<li><a href="#"><i class="icon-gear"></i> Settings</a></li>
															</ul>
														</li>
													</ul>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div> -->
                <!-- /marketing campaigns -->

                <!-- Quick stats boxes -->
                <!-- <div class="row">
                  <div class="col-lg-4">
                    <!-- Members online -->
                    <div class="panel bg-teal-400">
                      <div class="panel-body">
                        <div class="heading-elements">
                          <span class="heading-text badge bg-teal-800"
                            >+53,6%</span
                          >
                        </div>

                        <h3 class="no-margin">3,450</h3>
                        Members online
                        <div class="text-muted text-size-small">489 avg</div>
                      </div>

                      <div class="container-fluid">
                        <div id="members-online"></div>
                      </div>
                    </div>
                    <!-- /members online -->
                  </div>

                  <div class="col-lg-4">
                    <!-- Current server load -->
                    <div class="panel bg-pink-400">
                      <div class="panel-body">
                        <div class="heading-elements">
                          <ul class="icons-list">
                            <li class="dropdown">
                              <a
                                href="#"
                                class="dropdown-toggle"
                                data-toggle="dropdown"
                                ><i class="icon-cog3"></i>
                                <span class="caret"></span
                              ></a>
                              <ul class="dropdown-menu dropdown-menu-right">
                                <li>
                                  <a href="#"
                                    ><i class="icon-sync"></i> Update data</a
                                  >
                                </li>
                                <li>
                                  <a href="#"
                                    ><i class="icon-list-unordered"></i>
                                    Detailed log</a
                                  >
                                </li>
                                <li>
                                  <a href="#"
                                    ><i class="icon-pie5"></i> Statistics</a
                                  >
                                </li>
                                <li>
                                  <a href="#"
                                    ><i class="icon-cross3"></i> Clear list</a
                                  >
                                </li>
                              </ul>
                            </li>
                          </ul>
                        </div>

                        <h3 class="no-margin">49.4%</h3>
                        Current server load
                        <div class="text-muted text-size-small">34.6% avg</div>
                      </div>

                      <div id="server-load"></div>
                    </div>
                    <!-- /current server load -->
                  </div>

                  <div class="col-lg-4">
                    <!-- Today's revenue -->
                    <div class="panel bg-blue-400">
                      <div class="panel-body">
                        <div class="heading-elements">
                          <ul class="icons-list">
                            <li><a data-action="reload"></a></li>
                          </ul>
                        </div>

                        <h3 class="no-margin">$18,390</h3>
                        Today's revenue
                        <div class="text-muted text-size-small">
                          $37,578 avg
                        </div>
                      </div>

                      <div id="today-revenue"></div>
                    </div>
                    <!-- /today's revenue -->
                  </div>
                </div> -->
                <!-- /quick stats boxes -->

                <!-- Support tickets -->
                <div class="panel panel-flat">
                  <div class="panel-heading">
                    <h6 class="panel-title">Support tickets</h6>
                    <div class="heading-elements">
                      <button
                        type="button"
                        class="
                          btn btn-link
                          daterange-ranges
                          heading-btn
                          text-semibold
                        "
                      >
                        <i class="icon-calendar3 position-left"></i>
                        <span></span> <b class="caret"></b>
                      </button>
                    </div>
                  </div>

                  <div class="table-responsive">
                    <table class="table table-xlg text-nowrap">
                      <tbody>
                        <tr>
                          <td class="col-md-4">
                            <div class="media-left media-middle">
                              <div id="tickets-status"></div>
                            </div>

                            <div class="media-left">
                              <h5 class="text-semibold no-margin">
                                14,327
                                <small class="text-success text-size-base"
                                  ><i class="icon-arrow-up12"></i>
                                  (+2.9%)</small
                                >
                              </h5>
                              <span class="text-muted"
                                ><span
                                  class="
                                    status-mark
                                    border-success
                                    position-left
                                  "
                                ></span>
                                Jun 16, 10:00 am</span
                              >
                            </div>
                          </td>

                          <td class="col-md-3">
                            <div class="media-left media-middle">
                              <a
                                href="#"
                                class="
                                  btn
                                  border-indigo-400
                                  text-indigo-400
                                  btn-flat btn-rounded btn-xs btn-icon
                                "
                                ><i class="icon-alarm-add"></i
                              ></a>
                            </div>

                            <div class="media-left">
                              <h5 class="text-semibold no-margin">
                                1,132
                                <small class="display-block no-margin"
                                  >total tickets</small
                                >
                              </h5>
                            </div>
                          </td>

                          <td class="col-md-3">
                            <div class="media-left media-middle">
                              <a
                                href="#"
                                class="
                                  btn
                                  border-indigo-400
                                  text-indigo-400
                                  btn-flat btn-rounded btn-xs btn-icon
                                "
                                ><i class="icon-spinner11"></i
                              ></a>
                            </div>

                            <div class="media-left">
                              <h5 class="text-semibold no-margin">
                                06:25:00
                                <small class="display-block no-margin"
                                  >response time</small
                                >
                              </h5>
                            </div>
                          </td>

                          <td class="text-right col-md-2">
                            <a href="#" class="btn bg-teal-400"
                              ><i class="icon-statistics position-left"></i>
                              Report</a
                            >
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>

                  <div class="table-responsive">
                    <table class="table text-nowrap">
                      <thead>
                        <tr>
                          <th style="width: 50px">Due</th>
                          <th style="width: 300px">User</th>
                          <th>Description</th>
                          <th class="text-center" style="width: 20px">
                            <i class="icon-arrow-down12"></i>
                          </th>
                        </tr>
                      </thead>
                      <!-- <tbody>
              
                <!-- /support tickets -->

                <!-- Latest posts -->
                <div class="panel panel-flat">
                  <div class="panel-heading">
                    <h6 class="panel-title">Latest posts</h6>
                    <div class="heading-elements">
                      <ul class="icons-list">
                        <li><a data-action="collapse"></a></li>
                        <li><a data-action="reload"></a></li>
                        <li><a data-action="close"></a></li>
                      </ul>
                    </div>
                  </div>

                  <div class="panel-body">
                    <div class="row">
                      <div class="col-lg-6">
                        <ul class="media-list content-group">
                          <li class="media stack-media-on-mobile">
                            <div class="media-left">
                              <div class="thumb">
                                <a href="#">
                                  <img
                                    src="assets/images/placeholder.jpg"
                                    class="
                                      img-responsive img-rounded
                                      media-preview
                                    "
                                    alt=""
                                  />
                                  <span class="zoom-image"
                                    ><i class="icon-play3"></i
                                  ></span>
                                </a>
                              </div>
                            </div>

                            <div class="media-body">
                              <h6 class="media-heading">
                                <a href="#">Up unpacked friendly</a>
                              </h6>
                              <ul
                                class="
                                  list-inline list-inline-separate
                                  text-muted
                                  mb-5
                                "
                              >
                                <li>
                                  <i class="icon-book-play position-left"></i>
                                  Video tutorials
                                </li>
                                <li>14 minutes ago</li>
                              </ul>
                              The him father parish looked has sooner.
                              Attachment frequently gay terminated son...
                            </div>
                          </li>

                          <li class="media stack-media-on-mobile">
                            <div class="media-left">
                              <div class="thumb">
                                <a href="#">
                                  <img
                                    src="assets/images/placeholder.jpg"
                                    class="
                                      img-responsive img-rounded
                                      media-preview
                                    "
                                    alt=""
                                  />
                                  <span class="zoom-image"
                                    ><i class="icon-play3"></i
                                  ></span>
                                </a>
                              </div>
                            </div>

                            <div class="media-body">
                              <h6 class="media-heading">
                                <a href="#">It allowance prevailed</a>
                              </h6>
                              <ul
                                class="
                                  list-inline list-inline-separate
                                  text-muted
                                  mb-5
                                "
                              >
                                <li>
                                  <i class="icon-book-play position-left"></i>
                                  Video tutorials
                                </li>
                                <li>12 days ago</li>
                              </ul>
                              Alteration literature to or an sympathize mr
                              imprudence. Of is ferrars subject as enjoyed...
                            </div>
                          </li>
                        </ul>
                      </div>

                      <div class="col-lg-6">
                        <ul class="media-list content-group">
                          <li class="media stack-media-on-mobile">
                            <div class="media-left">
                              <div class="thumb">
                                <a href="#">
                                  <img
                                    src="assets/images/placeholder.jpg"
                                    class="
                                      img-responsive img-rounded
                                      media-preview
                                    "
                                    alt=""
                                  />
                                  <span class="zoom-image"
                                    ><i class="icon-play3"></i
                                  ></span>
                                </a>
                              </div>
                            </div>

                            <div class="media-body">
                              <h6 class="media-heading">
                                <a href="#">Case read they must</a>
                              </h6>
                              <ul
                                class="
                                  list-inline list-inline-separate
                                  text-muted
                                  mb-5
                                "
                              >
                                <li>
                                  <i class="icon-book-play position-left"></i>
                                  Video tutorials
                                </li>
                                <li>20 hours ago</li>
                              </ul>
                              On it differed repeated wandered required in. Then
                              girl neat why yet knew rose spot...
                            </div>
                          </li>

                          <li class="media stack-media-on-mobile">
                            <div class="media-left">
                              <div class="thumb">
                                <a href="#">
                                  <img
                                    src="assets/images/placeholder.jpg"
                                    class="
                                      img-responsive img-rounded
                                      media-preview
                                    "
                                    alt=""
                                  />
                                  <span class="zoom-image"
                                    ><i class="icon-play3"></i
                                  ></span>
                                </a>
                              </div>
                            </div>

                            <div class="media-body">
                              <h6 class="media-heading">
                                <a href="#">Too carriage attended</a>
                              </h6>
                              <ul
                                class="
                                  list-inline list-inline-separate
                                  text-muted
                                  mb-5
                                "
                              >
                                <li>
                                  <i class="icon-book-play position-left"></i>
                                  FAQ section
                                </li>
                                <li>2 days ago</li>
                              </ul>
                              Marianne or husbands if at stronger ye. Considered
                              is as middletons uncommonly...
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /latest posts -->
              </div>

              <div class="col-lg-4">
                <!-- Progress counters -->
                <div class="row">
                  <div class="col-md-6">
                    <!-- Available hours -->
                    <div class="panel text-center">
                      <div class="panel-body">
                        <div class="heading-elements">
                          <ul class="icons-list">
                            <li class="dropdown text-muted">
                              <a
                                href="#"
                                class="dropdown-toggle"
                                data-toggle="dropdown"
                                ><i class="icon-cog3"></i>
                                <span class="caret"></span
                              ></a>
                              <ul class="dropdown-menu dropdown-menu-right">
                                <li>
                                  <a href="#"
                                    ><i class="icon-sync"></i> Update data</a
                                  >
                                </li>
                                <li>
                                  <a href="#"
                                    ><i class="icon-list-unordered"></i>
                                    Detailed log</a
                                  >
                                </li>
                                <li>
                                  <a href="#"
                                    ><i class="icon-pie5"></i> Statistics</a
                                  >
                                </li>
                                <li>
                                  <a href="#"
                                    ><i class="icon-cross3"></i> Clear list</a
                                  >
                                </li>
                              </ul>
                            </li>
                          </ul>
                        </div>

                        <!-- Progress counter -->
                        <div
                          class="content-group-sm svg-center position-relative"
                          id="hours-available-progress"
                        ></div>
                        <!-- /progress counter -->

                        <!-- Bars -->
                        <div id="hours-available-bars"></div>
                        <!-- /bars -->
                      </div>
                    </div>
                    <!-- /available hours -->
                  </div>

                  <div class="col-md-6">
                    <!-- Productivity goal -->
                    <div class="panel text-center">
                      <div class="panel-body">
                        <div class="heading-elements">
                          <ul class="icons-list">
                            <li class="dropdown text-muted">
                              <a
                                href="#"
                                class="dropdown-toggle"
                                data-toggle="dropdown"
                                ><i class="icon-cog3"></i>
                                <span class="caret"></span
                              ></a>
                              <ul class="dropdown-menu dropdown-menu-right">
                                <li>
                                  <a href="#"
                                    ><i class="icon-sync"></i> Update data</a
                                  >
                                </li>
                                <li>
                                  <a href="#"
                                    ><i class="icon-list-unordered"></i>
                                    Detailed log</a
                                  >
                                </li>
                                <li>
                                  <a href="#"
                                    ><i class="icon-pie5"></i> Statistics</a
                                  >
                                </li>
                                <li>
                                  <a href="#"
                                    ><i class="icon-cross3"></i> Clear list</a
                                  >
                                </li>
                              </ul>
                            </li>
                          </ul>
                        </div>

                        <!-- Progress counter -->
                        <div
                          class="content-group-sm svg-center position-relative"
                          id="goal-progress"
                        ></div>
                        <!-- /progress counter -->

                        <!-- Bars -->
                        <div id="goal-bars"></div>
                        <!-- /bars -->
                      </div>
                    </div>
                    <!-- /productivity goal -->
                  </div>
                </div>
                <!-- /progress counters -->

            

                <!-- My messages -->
                <div class="panel panel-flat">
                  <div class="panel-heading">
                    <h6 class="panel-title">My messages</h6>
                    <div class="heading-elements">
                      <span class="heading-text"
                        ><i class="icon-history text-warning position-left"></i>
                        Jul 7, 10:30</span
                      >
                      <span class="label bg-success heading-text">Online</span>
                    </div>
                  </div>

                  <!-- Numbers -->
                  <div class="container-fluid">
                    <div class="row text-center">
                      <div class="col-md-4">
                        <div class="content-group">
                          <h6 class="text-semibold no-margin">
                            <i
                              class="icon-clipboard3 position-left text-slate"
                            ></i>
                            2,345
                          </h6>
                          <span class="text-muted text-size-small"
                            >this week</span
                          >
                        </div>
                      </div>

                      <div class="col-md-4">
                        <div class="content-group">
                          <h6 class="text-semibold no-margin">
                            <i
                              class="icon-calendar3 position-left text-slate"
                            ></i>
                            3,568
                          </h6>
                          <span class="text-muted text-size-small"
                            >this month</span
                          >
                        </div>
                      </div>

                      <div class="col-md-4">
                        <div class="content-group">
                          <h6 class="text-semibold no-margin">
                            <i
                              class="icon-comments position-left text-slate"
                            ></i>
                            32,693
                          </h6>
                          <span class="text-muted text-size-small"
                            >all messages</span
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- /numbers -->

                  <!-- Area chart -->
                  <div id="messages-stats"></div>
                  <!-- /area chart -->

                  <!-- Tabs -->
                  <ul
                    class="
                      nav nav-lg nav-tabs nav-justified
                      no-margin no-border-radius
                      bg-indigo-400
                      border-top border-top-indigo-300
                    "
                  >
                    <li class="active">
                      <a
                        href="#messages-tue"
                        class="text-size-small text-uppercase"
                        data-toggle="tab"
                      >
                        Tuesday
                      </a>
                    </li>

                    <li>
                      <a
                        href="#messages-mon"
                        class="text-size-small text-uppercase"
                        data-toggle="tab"
                      >
                        Monday
                      </a>
                    </li>

                    <li>
                      <a
                        href="#messages-fri"
                        class="text-size-small text-uppercase"
                        data-toggle="tab"
                      >
                        Friday
                      </a>
                    </li>
                  </ul>
                  <!-- /tabs -->

                  <!-- Tabs content -->
                  <div class="tab-content">
                    <div
                      class="tab-pane active fade in has-padding"
                      id="messages-tue"
                    >
                      <ul class="media-list">
                        <li class="media">
                          <div class="media-left">
                            <img
                              src="assets/images/placeholder.jpg"
                              class="img-circle img-xs"
                              alt=""
                            />
                            <span class="badge bg-danger-400 media-badge"
                              >8</span
                            >
                          </div>

                          <div class="media-body">
                            <a href="#">
                              James Alexander
                              <span class="media-annotation pull-right"
                                >14:58</span
                              >
                            </a>

                            <span class="display-block text-muted"
                              >The constitutionally inventoried
                              precariously...</span
                            >
                          </div>
                        </li>

                        <li class="media">
                          <div class="media-left">
                            <img
                              src="assets/images/placeholder.jpg"
                              class="img-circle img-xs"
                              alt=""
                            />
                            <span class="badge bg-danger-400 media-badge"
                              >6</span
                            >
                          </div>

                          <div class="media-body">
                            <a href="#">
                              Margo Baker
                              <span class="media-annotation pull-right"
                                >12:16</span
                              >
                            </a>

                            <span class="display-block text-muted"
                              >Pinched a well more moral chose goodness...</span
                            >
                          </div>
                        </li>

                        <li class="media">
                          <div class="media-left">
                            <img
                              src="assets/images/placeholder.jpg"
                              class="img-circle img-xs"
                              alt=""
                            />
                          </div>

                          <div class="media-body">
                            <a href="#">
                              Jeremy Victorino
                              <span class="media-annotation pull-right"
                                >09:48</span
                              >
                            </a>

                            <span class="display-block text-muted"
                              >Pert thickly mischievous clung frowned
                              well...</span
                            >
                          </div>
                        </li>

                        <li class="media">
                          <div class="media-left">
                            <img
                              src="assets/images/placeholder.jpg"
                              class="img-circle img-xs"
                              alt=""
                            />
                          </div>

                          <div class="media-body">
                            <a href="#">
                              Beatrix Diaz
                              <span class="media-annotation pull-right"
                                >05:54</span
                              >
                            </a>

                            <span class="display-block text-muted"
                              >Nightingale taped hello bucolic fussily
                              cardinal...</span
                            >
                          </div>
                        </li>

                        <li class="media">
                          <div class="media-left">
                            <img
                              src="assets/images/placeholder.jpg"
                              class="img-circle img-xs"
                              alt=""
                            />
                          </div>

                          <div class="media-body">
                            <a href="#">
                              Richard Vango
                              <span class="media-annotation pull-right"
                                >01:43</span
                              >
                            </a>

                            <span class="display-block text-muted"
                              >Amidst roadrunner distantly pompously
                              where...</span
                            >
                          </div>
                        </li>
                      </ul>
                    </div>

                    <div class="tab-pane fade has-padding" id="messages-mon">
                      <ul class="media-list">
                        <li class="media">
                          <div class="media-left">
                            <img
                              src="assets/images/placeholder.jpg"
                              class="img-circle img-sm"
                              alt=""
                            />
                          </div>

                          <div class="media-body">
                            <a href="#">
                              Isak Temes
                              <span class="media-annotation pull-right"
                                >Tue, 19:58</span
                              >
                            </a>

                            <span class="display-block text-muted"
                              >Reasonable palpably rankly expressly
                              grimy...</span
                            >
                          </div>
                        </li>

                        <li class="media">
                          <div class="media-left">
                            <img
                              src="assets/images/placeholder.jpg"
                              class="img-circle img-sm"
                              alt=""
                            />
                          </div>

                          <div class="media-body">
                            <a href="#">
                              Vittorio Cosgrove
                              <span class="media-annotation pull-right"
                                >Tue, 16:35</span
                              >
                            </a>

                            <span class="display-block text-muted"
                              >Arguably therefore more unexplainable
                              fumed...</span
                            >
                          </div>
                        </li>

                        <li class="media">
                          <div class="media-left">
                            <img
                              src="assets/images/placeholder.jpg"
                              class="img-circle img-sm"
                              alt=""
                            />
                          </div>

                          <div class="media-body">
                            <a href="#">
                              Hilary Talaugon
                              <span class="media-annotation pull-right"
                                >Tue, 12:16</span
                              >
                            </a>

                            <span class="display-block text-muted"
                              >Nicely unlike porpoise a kookaburra past
                              more...</span
                            >
                          </div>
                        </li>

                        <li class="media">
                          <div class="media-left">
                            <img
                              src="assets/images/placeholder.jpg"
                              class="img-circle img-sm"
                              alt=""
                            />
                          </div>

                          <div class="media-body">
                            <a href="#">
                              Bobbie Seber
                              <span class="media-annotation pull-right"
                                >Tue, 09:20</span
                              >
                            </a>

                            <span class="display-block text-muted"
                              >Before visual vigilantly fortuitous
                              tortoise...</span
                            >
                          </div>
                        </li>

                        <li class="media">
                          <div class="media-left">
                            <img
                              src="assets/images/placeholder.jpg"
                              class="img-circle img-sm"
                              alt=""
                            />
                          </div>

                          <div class="media-body">
                            <a href="#">
                              Walther Laws
                              <span class="media-annotation pull-right"
                                >Tue, 03:29</span
                              >
                            </a>

                            <span class="display-block text-muted"
                              >Far affecting more leered unerringly
                              dishonest...</span
                            >
                          </div>
                        </li>
                      </ul>
                    </div>

                    <div class="tab-pane fade has-padding" id="messages-fri">
                      <ul class="media-list">
                        <li class="media">
                          <div class="media-left">
                            <img
                              src="assets/images/placeholder.jpg"
                              class="img-circle img-sm"
                              alt=""
                            />
                          </div>

                          <div class="media-body">
                            <a href="#">
                              Owen Stretch
                              <span class="media-annotation pull-right"
                                >Mon, 18:12</span
                              >
                            </a>

                            <span class="display-block text-muted"
                              >Tardy rattlesnake seal raptly earthworm...</span
                            >
                          </div>
                        </li>

                        <li class="media">
                          <div class="media-left">
                            <img
                              src="assets/images/placeholder.jpg"
                              class="img-circle img-sm"
                              alt=""
                            />
                          </div>

                          <div class="media-body">
                            <a href="#">
                              Jenilee Mcnair
                              <span class="media-annotation pull-right"
                                >Mon, 14:03</span
                              >
                            </a>

                            <span class="display-block text-muted"
                              >Since hello dear pushed amid darn trite...</span
                            >
                          </div>
                        </li>

                        <li class="media">
                          <div class="media-left">
                            <img
                              src="assets/images/placeholder.jpg"
                              class="img-circle img-sm"
                              alt=""
                            />
                          </div>

                          <div class="media-body">
                            <a href="#">
                              Alaster Jain
                              <span class="media-annotation pull-right"
                                >Mon, 13:59</span
                              >
                            </a>

                            <span class="display-block text-muted"
                              >Dachshund cardinal dear next jeepers
                              well...</span
                            >
                          </div>
                        </li>

                        <li class="media">
                          <div class="media-left">
                            <img
                              src="assets/images/placeholder.jpg"
                              class="img-circle img-sm"
                              alt=""
                            />
                          </div>

                          <div class="media-body">
                            <a href="#">
                              Sigfrid Thisted
                              <span class="media-annotation pull-right"
                                >Mon, 09:26</span
                              >
                            </a>

                            <span class="display-block text-muted"
                              >Lighted wolf yikes less lemur crud
                              grunted...</span
                            >
                          </div>
                        </li>

                        <li class="media">
                          <div class="media-left">
                            <img
                              src="assets/images/placeholder.jpg"
                              class="img-circle img-sm"
                              alt=""
                            />
                          </div>

                          <div class="media-body">
                            <a href="#">
                              Sherilyn Mckee
                              <span class="media-annotation pull-right"
                                >Mon, 06:38</span
                              >
                            </a>

                            <span class="display-block text-muted"
                              >Less unicorn a however careless husky...</span
                            >
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <!-- /tabs content -->
                </div>
                <!-- /my messages -->

                <!-- Daily financials -->
                <div class="panel panel-flat">
                  <div class="panel-heading">
                    <h6 class="panel-title">Daily financials</h6>
                    <div class="heading-elements">
                      <form class="heading-form" action="#">
                        <div class="form-group">
                          <label
                            class="
                              checkbox
                              checkbox-inline
                              checkbox-switchery
                              checkbox-right
                              switchery-xs
                            "
                          >
                            <input
                              type="checkbox"
                              class="switcher"
                              id="realtime"
                              checked="checked"
                            />
                            Realtime
                          </label>
                        </div>
                      </form>
                      <span class="badge bg-danger-400 heading-text">+86</span>
                    </div>
                  </div>

                  <div class="panel-body">
                    <div class="content-group-xs" id="bullets"></div>

                    <ul class="media-list">
                      <li class="media">
                        <div class="media-left">
                          <a
                            href="#"
                            class="
                              btn
                              border-pink
                              text-pink
                              btn-flat btn-rounded btn-icon btn-xs
                            "
                            ><i class="icon-statistics"></i
                          ></a>
                        </div>

                        <div class="media-body">
                          Stats for July, 6: 1938 orders, $4220 revenue
                          <div class="media-annotation">2 hours ago</div>
                        </div>

                        <div class="media-right media-middle">
                          <ul class="icons-list">
                            <li>
                              <a href="#"><i class="icon-arrow-right13"></i></a>
                            </li>
                          </ul>
                        </div>
                      </li>

                      <li class="media">
                        <div class="media-left">
                          <a
                            href="#"
                            class="
                              btn
                              border-success
                              text-success
                              btn-flat btn-rounded btn-icon btn-xs
                            "
                            ><i class="icon-checkmark3"></i
                          ></a>
                        </div>

                        <div class="media-body">
                          Invoices <a href="#">#4732</a> and
                          <a href="#">#4734</a> have been paid
                          <div class="media-annotation">Dec 18, 18:36</div>
                        </div>

                        <div class="media-right media-middle">
                          <ul class="icons-list">
                            <li>
                              <a href="#"><i class="icon-arrow-right13"></i></a>
                            </li>
                          </ul>
                        </div>
                      </li>

                      <li class="media">
                        <div class="media-left">
                          <a
                            href="#"
                            class="
                              btn
                              border-primary
                              text-primary
                              btn-flat btn-rounded btn-icon btn-xs
                            "
                            ><i class="icon-alignment-unalign"></i
                          ></a>
                        </div>

                        <div class="media-body">
                          Affiliate commission for June has been paid
                          <div class="media-annotation">36 minutes ago</div>
                        </div>

                        <div class="media-right media-middle">
                          <ul class="icons-list">
                            <li>
                              <a href="#"><i class="icon-arrow-right13"></i></a>
                            </li>
                          </ul>
                        </div>
                      </li>

                      <li class="media">
                        <div class="media-left">
                          <a
                            href="#"
                            class="
                              btn
                              border-warning-400
                              text-warning-400
                              btn-flat btn-rounded btn-icon btn-xs
                            "
                            ><i class="icon-spinner11"></i
                          ></a>
                        </div>

                        <div class="media-body">
                          Order <a href="#">#37745</a> from July, 1st has been
                          refunded
                          <div class="media-annotation">4 minutes ago</div>
                        </div>

                        <div class="media-right media-middle">
                          <ul class="icons-list">
                            <li>
                              <a href="#"><i class="icon-arrow-right13"></i></a>
                            </li>
                          </ul>
                        </div>
                      </li>

                      <li class="media">
                        <div class="media-left">
                          <a
                            href="#"
                            class="
                              btn
                              border-teal-400
                              text-teal
                              btn-flat btn-rounded btn-icon btn-xs
                            "
                            ><i class="icon-redo2"></i
                          ></a>
                        </div>

                        <div class="media-body">
                          Invoice <a href="#">#4769</a> has been sent to
                          <a href="#">Robert Smith</a>
                          <div class="media-annotation">Dec 12, 05:46</div>
                        </div>

                        <div class="media-right media-middle">
                          <ul class="icons-list">
                            <li>
                              <a href="#"><i class="icon-arrow-right13"></i></a>
                            </li>
                          </ul>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
                <!-- /daily financials -->
              </div>
            </div>
            <!-- /dashboard content -->

            <!-- Footer -->
            <div class="footer text-muted">
              &copy; 2015. <a href="#">Limitless Web App Kit</a> by
              <a href="http://themeforest.net/user/Kopyov" target="_blank"
                >Eugene Kopyov</a
              >
            </div>
            <!-- /footer -->
          
          
          
          
          
          
          
          </div>
          
          <!-- /content area -->
        </div>
        <!-- /main content -->
      </div>
      <!-- /page content -->
    </div>
    <!-- /page container -->
  </body>
</html>
