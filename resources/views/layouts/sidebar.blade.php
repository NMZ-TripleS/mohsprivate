<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="user-pro"><a class="has-arrow waves-effect waves-dark" href="javascript:void(0)"
                                        aria-expanded="false">
                                        {{-- <img src="{{asset('images/users/1.jpg')}}"
                                                                   alt="user-img" class="img-circle"> --}}
                                                                   <span
                            class="hide-menu">{{\Illuminate\Support\Facades\Auth::user()->name}}</span></a>
                    <ul aria-expanded="false" class="collapse">
                        {{-- <li><a href="javascript:void(0)"><i class="ti-user"></i> My Profile</a></li> --}}
{{--                        <li><a href="javascript:void(0)"><i class="ti-wallet"></i> My Balance</a></li>--}}
{{--                        <li><a href="javascript:void(0)"><i class="ti-email"></i> Inbox</a></li>--}}
{{--                        <li><a href="javascript:void(0)"><i class="ti-settings"></i> Account Setting</a></li>--}}
                        <li>  <a href="{{ route('logout') }}"   onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="dropdown-item"><i class="fa fa-power-off"></i> Logout</a>
                        </li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </ul>
                </li>
                {{--<li class="nav-small-cap">--- PERSONAL</li>--}}
                <li><a class="waves-effect waves-dark" href="{{url('/')}}"><i class="icon-speedometer"></i><span
                            class="hide-menu">Dashboard</span></a>
                </li>
{{--                <li><a class="waves-effect waves-dark" href="{{url('submit_others')}}"><i class="ti-layout-grid2"></i><span--}}
{{--                            class="hide-menu">Submit Others</span></a>--}}
{{--                </li>--}}

                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)"
                        aria-expanded="false"><i class="icon-people"></i><span class="hide-menu">Type Two Patients</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{url('typetwopatients/create')}}">Register</a></li>
                        <li><a href="{{url('typetwopatients/list')}}">List</a></li>
                        <li> <a class="has-arrow" href="javascript:void(0)" aria-expanded="false">Follow up</a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{url('typetwofollowup/create')}}">Add</a></li>
                                <li><a href="{{url('typetwofollowup/list')}}">list</a></li>
{{--                                <li><a href="javascript:void(0)">item 1.3.3</a></li>--}}
{{--                                <li><a href="javascript:void(0)">item 1.3.4</a></li>--}}
                            </ul>
                        </li>
{{--                        <li> <a class="has-arrow" href="javascript:void(0)" aria-expanded="false">Others</a>--}}
{{--                            <ul aria-expanded="false" class="collapse">--}}
{{--                                <li><a href="{{url('avicreate')}}">Add</a></li>--}}
{{--                                <li><a href="{{url('avilist')}}">list</a></li>--}}
{{--                                <li><a href="javascript:void(0)">item 1.3.3</a></li>--}}
{{--                                <li><a href="javascript:void(0)">item 1.3.4</a></li>--}}
{{--                            </ul>--}}
{{--                        </li>--}}
{{--                        <li><a href="javascript:void(0)">item 1.4</a></li>--}}
                    </ul>
                </li>
{{--                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)"--}}
{{--                        aria-expanded="false"><i class="ti-align-left"></i><span class="hide-menu">Submit Others</span></a>--}}
{{--                </li>--}}

                {{--<li><a class="has-arrow waves-effect waves-dark" href="javascript:void(0)"--}}
                {{--aria-expanded="false"><i class="ti-palette"></i><span class="hide-menu">Ui Elements <span--}}
                {{--class="badge badge-pill badge-primary text-white ml-auto">25</span></span></a>--}}
                {{--<ul aria-expanded="false" class="collapse">--}}
                {{--<li><a href="ui-cards.html">Cards</a></li>--}}
                {{--<li><a href="ui-user-card.html">User Cards</a></li>--}}
                {{--<li><a href="ui-buttons.html">Buttons</a></li>--}}
                {{--<li><a href="ui-modals.html">Modals</a></li>--}}
                {{--<li><a href="ui-tab.html">Tab</a></li>--}}
                {{--<li><a href="ui-tooltip-popover.html">Tooltip &amp; Popover</a></li>--}}
                {{--<li><a href="ui-tooltip-stylish.html">Tooltip stylish</a></li>--}}
                {{--<li><a href="ui-sweetalert.html">Sweet Alert</a></li>--}}
                {{--<li><a href="ui-notification.html">Notification</a></li>--}}
                {{--<li><a href="ui-progressbar.html">Progressbar</a></li>--}}
                {{--<li><a href="ui-nestable.html">Nestable</a></li>--}}
                {{--<li><a href="ui-range-slider.html">Range slider</a></li>--}}
                {{--<li><a href="ui-timeline.html">Timeline</a></li>--}}
                {{--<li><a href="ui-typography.html">Typography</a></li>--}}
                {{--<li><a href="ui-horizontal-timeline.html">Horizontal Timeline</a></li>--}}
                {{--<li><a href="ui-session-timeout.html">Session Timeout</a></li>--}}
                {{--<li><a href="ui-session-ideal-timeout.html">Session Ideal Timeout</a></li>--}}
                {{--<li><a href="ui-bootstrap.html">Bootstrap Ui</a></li>--}}
                {{--<li><a href="ui-breadcrumb.html">Breadcrumb</a></li>--}}
                {{--<li><a href="ui-bootstrap-switch.html">Bootstrap Switch</a></li>--}}
                {{--<li><a href="ui-list-media.html">List Media</a></li>--}}
                {{--<li><a href="ui-ribbons.html">Ribbons</a></li>--}}
                {{--<li><a href="ui-grid.html">Grid</a></li>--}}
                {{--<li><a href="ui-carousel.html">Carousel</a></li>--}}
                {{--<li><a href="ui-date-paginator.html">Date-paginator</a></li>--}}
                {{--<li><a href="ui-dragable-portlet.html">Dragable Portlet</a></li>--}}
                {{--</ul>--}}
                {{--</li>--}}
                {{--<li class="nav-small-cap">--- PROFESSIONAL</li>--}}
                {{--<li><a class="has-arrow waves-effect waves-dark" href="javascript:void(0)"--}}
                {{--aria-expanded="false"><i class="ti-calendar"></i><span--}}
                {{--class="hide-menu">Appointment</span></a>--}}
                {{--<ul aria-expanded="false" class="collapse">--}}
                {{--<li><a href="doctor-schedule.html">Doctor Schedule</a></li>--}}
                {{--<li><a href="book-appointment.html">Book Appointment</a></li>--}}
                {{--</ul>--}}
                {{--</li>--}}
                {{--<li><a class="has-arrow waves-effect waves-dark" href="javascript:void(0)"--}}
                {{--aria-expanded="false"><i class="fa fa-user-md"></i><span class="hide-menu">Doctors</span></a>--}}
                {{--<ul aria-expanded="false" class="collapse">--}}
                {{--<li><a href="doctors.html">All Doctors</a></li>--}}
                {{--<li><a href="add-doctor.html">Add Doctor</a></li>--}}
                {{--<li><a href="edit-doctor.html">Edit Doctor</a></li>--}}
                {{--<li><a href="doctor-profile.html">Doctor Profile</a></li>--}}
                {{--</ul>--}}
                {{--</li>--}}
                {{--<li><a class="has-arrow waves-effect waves-dark" href="javascript:void(0)"--}}
                {{--aria-expanded="false"><i class="icon-people"></i><span class="hide-menu">Patients</span></a>--}}
                {{--<ul aria-expanded="false" class="collapse">--}}
                {{--<li><a href="patients.html">All Patients</a></li>--}}
                {{--<li><a href="add-patient.html">Add Patients</a></li>--}}
                {{--<li><a href="edit-patient.html">Edit Patients</a></li>--}}
                {{--<li><a href="patient-profile.html">Patient Profile</a></li>--}}
                {{--</ul>--}}
                {{--</li>--}}
                {{--<li><a class="has-arrow waves-effect waves-dark" href="javascript:void(0)"--}}
                {{--aria-expanded="false"><i class="icon-chart"></i><span--}}
                {{--class="hide-menu">Reports</span></a>--}}
                {{--<ul aria-expanded="false" class="collapse">--}}
                {{--<li><a href="payment-report.html">Payment Report</a></li>--}}
                {{--<li><a href="income-report.html">Income Report</a></li>--}}
                {{--<li><a href="sales-report.html">Sales Report</a></li>--}}
                {{--</ul>--}}
                {{--</li>--}}
                {{--<li><a class="has-arrow waves-effect waves-dark" href="javascript:void(0)"--}}
                {{--aria-expanded="false"><i class="fas fa-rupee-sign"></i><span--}}
                {{--class="hide-menu">Payments</span></a>--}}
                {{--<ul aria-expanded="false" class="collapse">--}}
                {{--<li><a href="payments.html">Payments</a></li>--}}
                {{--<li><a href="add-payments.html">Add Payment</a></li>--}}
                {{--<li><a href="patient-invoice.html">Invoice</a></li>--}}
                {{--</ul>--}}
                {{--</li>--}}
                {{--<li class="nav-small-cap">--- FORMS, TABLE &amp; WIDGETS</li>--}}
                {{--<li><a class="has-arrow waves-effect waves-dark" href="javascript:void(0)"--}}
                {{--aria-expanded="false"><i class="ti-layout-media-right-alt"></i><span--}}
                {{--class="hide-menu">Forms</span></a>--}}
                {{--<ul aria-expanded="false" class="collapse">--}}
                {{--<li><a href="form-basic.html">Basic Forms</a></li>--}}
                {{--<li><a href="form-layout.html">Form Layouts</a></li>--}}
                {{--<li><a href="form-addons.html">Form Addons</a></li>--}}
                {{--<li><a href="form-material.html">Form Material</a></li>--}}
                {{--<li><a href="form-float-input.html">Floating Lable</a></li>--}}
                {{--<li><a href="form-pickers.html">Form Pickers</a></li>--}}
                {{--<li><a href="form-upload.html">File Upload</a></li>--}}
                {{--<li><a href="form-mask.html">Form Mask</a></li>--}}
                {{--<li><a href="form-validation.html">Form Validation</a></li>--}}
                {{--<li><a href="form-dropzone.html">File Dropzone</a></li>--}}
                {{--<li><a href="form-icheck.html">Icheck control</a></li>--}}
                {{--<li><a href="form-img-cropper.html">Image Cropper</a></li>--}}
                {{--<li><a href="form-bootstrapwysihtml5.html">HTML5 Editor</a></li>--}}
                {{--<li><a href="form-typehead.html">Form Typehead</a></li>--}}
                {{--<li><a href="form-wizard.html">Form Wizard</a></li>--}}
                {{--<li><a href="form-xeditable.html">Xeditable Editor</a></li>--}}
                {{--<li><a href="form-summernote.html">Summernote Editor</a></li>--}}
                {{--<li><a href="form-tinymce.html">Tinymce Editor</a></li>--}}
                {{--</ul>--}}
                {{--</li>--}}
                {{--<li><a class="has-arrow waves-effect waves-dark" href="javascript:void(0)"--}}
                {{--aria-expanded="false"><i class="ti-layout-accordion-merged"></i><span class="hide-menu">Tables</span></a>--}}
                {{--<ul aria-expanded="false" class="collapse">--}}
                {{--<li><a href="table-basic.html">Basic Tables</a></li>--}}
                {{--<li><a href="table-layout.html">Table Layouts</a></li>--}}
                {{--<li><a href="table-data-table.html">Data Tables</a></li>--}}
                {{--<li><a href="table-footable.html">Footable</a></li>--}}
                {{--<li><a href="table-jsgrid.html">Js Grid Table</a></li>--}}
                {{--<li><a href="table-responsive.html">Responsive Table</a></li>--}}
                {{--<li><a href="table-bootstrap.html">Bootstrap Tables</a></li>--}}
                {{--<li><a href="table-editable-table.html">Editable Table</a></li>--}}
                {{--</ul>--}}
                {{--</li>--}}
                {{--<li><a class="has-arrow waves-effect waves-dark" href="javascript:void(0)"--}}
                {{--aria-expanded="false"><i class="ti-settings"></i><span--}}
                {{--class="hide-menu">Widgets</span></a>--}}
                {{--<ul aria-expanded="false" class="collapse">--}}
                {{--<li><a href="widget-data.html">Data Widgets</a></li>--}}
                {{--<li><a href="widget-apps.html">Apps Widgets</a></li>--}}
                {{--<li><a href="widget-charts.html">Charts Widgets</a></li>--}}
                {{--</ul>--}}
                {{--</li>--}}
                {{--<li class="nav-small-cap">--- EXTRA COMPONENTS</li>--}}
                {{--<li><a class="has-arrow waves-effect waves-dark" href="javascript:void(0)"--}}
                {{--aria-expanded="false"><i class="ti-gallery"></i><span--}}
                {{--class="hide-menu">Page Layout</span></a>--}}
                {{--<ul aria-expanded="false" class="collapse">--}}
                {{--<li><a href="layout-single-column.html">1 Column</a></li>--}}
                {{--<li><a href="layout-fix-header.html">Fix header</a></li>--}}
                {{--<li><a href="layout-fix-sidebar.html">Fix sidebar</a></li>--}}
                {{--<li><a href="layout-fix-header-sidebar.html">Fixe header &amp; Sidebar</a></li>--}}
                {{--<li><a href="layout-boxed.html">Boxed Layout</a></li>--}}
                {{--<li><a href="layout-logo-center.html">Logo in Center</a></li>--}}
                {{--</ul>--}}
                {{--</li>--}}
                {{--<li><a class="has-arrow waves-effect waves-dark" href="javascript:void(0)"--}}
                {{--aria-expanded="false"><i class="ti-files"></i><span class="hide-menu">Sample Pages <span--}}
                {{--class="badge badge-pill badge-info">25</span></span></a>--}}
                {{--<ul aria-expanded="false" class="collapse">--}}
                {{--<li><a href="starter-kit.html">Starter Kit</a></li>--}}
                {{--<li><a href="pages-blank.html">Blank page</a></li>--}}
                {{--<li><a href="javascript:void(0)" class="has-arrow">Authentication <span--}}
                {{--class="badge badge-pill badge-success pull-right">6</span></a>--}}
                {{--<ul aria-expanded="false" class="collapse">--}}
                {{--<li><a href="pages-login.html">Login 1</a></li>--}}
                {{--<li><a href="pages-login-2.html">Login 2</a></li>--}}
                {{--<li><a href="pages-register.html">Register</a></li>--}}
                {{--<li><a href="pages-register2.html">Register 2</a></li>--}}
                {{--<li><a href="pages-register3.html">Register 3</a></li>--}}
                {{--<li><a href="pages-lockscreen.html">Lockscreen</a></li>--}}
                {{--<li><a href="pages-recover-password.html">Recover password</a></li>--}}
                {{--</ul>--}}
                {{--</li>--}}
                {{--<li><a href="pages-profile.html">Profile page</a></li>--}}
                {{--<li><a href="pages-animation.html">Animation</a></li>--}}
                {{--<li><a href="pages-fix-innersidebar.html">Sticky Left sidebar</a></li>--}}
                {{--<li><a href="pages-fix-inner-right-sidebar.html">Sticky Right sidebar</a></li>--}}
                {{--<li><a href="pages-invoice.html">Invoice</a></li>--}}
                {{--<li><a href="pages-treeview.html">Treeview</a></li>--}}
                {{--<li><a href="pages-utility-classes.html">Helper Classes</a></li>--}}
                {{--<li><a href="pages-search-result.html">Search result</a></li>--}}
                {{--<li><a href="pages-scroll.html">Scrollbar</a></li>--}}
                {{--<li><a href="pages-pricing.html">Pricing</a></li>--}}
                {{--<li><a href="pages-lightbox-popup.html">Lighbox popup</a></li>--}}
                {{--<li><a href="pages-gallery.html">Gallery</a></li>--}}
                {{--<li><a href="pages-faq.html">Faqs</a></li>--}}
                {{--<li><a href="javascript:void(0)" class="has-arrow">Error Pages</a>--}}
                {{--<ul aria-expanded="false" class="collapse">--}}
                {{--<li><a href="pages-error-400.html">400</a></li>--}}
                {{--<li><a href="pages-error-403.html">403</a></li>--}}
                {{--<li><a href="pages-error-404.html">404</a></li>--}}
                {{--<li><a href="pages-error-500.html">500</a></li>--}}
                {{--<li><a href="pages-error-503.html">503</a></li>--}}
                {{--</ul>--}}
                {{--</li>--}}
                {{--</ul>--}}
                {{--</li>--}}
                {{--<li><a class="has-arrow waves-effect waves-dark" href="javascript:void(0)"--}}
                {{--aria-expanded="false"><i class="ti-pie-chart"></i><span--}}
                {{--class="hide-menu">Charts</span></a>--}}
                {{--<ul aria-expanded="false" class="collapse">--}}
                {{--<li><a href="chart-morris.html">Morris Chart</a></li>--}}
                {{--<li><a href="chart-chartist.html">Chartis Chart</a></li>--}}
                {{--<li><a href="chart-echart.html">Echarts</a></li>--}}
                {{--<li><a href="chart-flot.html">Flot Chart</a></li>--}}
                {{--<li><a href="chart-knob.html">Knob Chart</a></li>--}}
                {{--<li><a href="chart-chart-js.html">Chartjs</a></li>--}}
                {{--<li><a href="chart-sparkline.html">Sparkline Chart</a></li>--}}
                {{--<li><a href="chart-extra-chart.html">Extra chart</a></li>--}}
                {{--<li><a href="chart-peity.html">Peity Charts</a></li>--}}
                {{--</ul>--}}
                {{--</li>--}}
                {{--<li><a class="has-arrow waves-effect waves-dark" href="javascript:void(0)"--}}
                {{--aria-expanded="false"><i class="ti-light-bulb"></i><span--}}
                {{--class="hide-menu">Icons</span></a>--}}
                {{--<ul aria-expanded="false" class="collapse">--}}
                {{--<li><a href="icon-material.html">Material Icons</a></li>--}}
                {{--<li><a href="icon-fontawesome.html">Fontawesome Icons</a></li>--}}
                {{--<li><a href="icon-themify.html">Themify Icons</a></li>--}}
                {{--<li><a href="icon-weather.html">Weather Icons</a></li>--}}
                {{--<li><a href="icon-simple-lineicon.html">Simple Line icons</a></li>--}}
                {{--<li><a href="icon-flag.html">Flag Icons</a></li>--}}
                {{--<li><a href="icon-iconmind.html">Mind Icons</a></li>--}}
                {{--</ul>--}}
                {{--</li>--}}
                {{--<li><a class="has-arrow waves-effect waves-dark" href="javascript:void(0)"--}}
                {{--aria-expanded="false"><i class="ti-location-pin"></i><span class="hide-menu">Maps</span></a>--}}
                {{--<ul aria-expanded="false" class="collapse">--}}
                {{--<li><a href="map-google.html">Google Maps</a></li>--}}
                {{--<li><a href="map-vector.html">Vector Maps</a></li>--}}
                {{--</ul>--}}
                {{--</li>--}}
                {{--<li><a class="has-arrow waves-effect waves-dark" href="javascript:void(0)"--}}
                {{--aria-expanded="false"><i class="ti-align-left"></i><span--}}
                {{--class="hide-menu">Multi level dd</span></a>--}}
                {{--<ul aria-expanded="false" class="collapse">--}}
                {{--<li><a href="javascript:void(0)">item 1.1</a></li>--}}
                {{--<li><a href="javascript:void(0)">item 1.2</a></li>--}}
                {{--<li><a class="has-arrow" href="javascript:void(0)" aria-expanded="false">Menu 1.3</a>--}}
                {{--<ul aria-expanded="false" class="collapse">--}}
                {{--<li><a href="javascript:void(0)">item 1.3.1</a></li>--}}
                {{--<li><a href="javascript:void(0)">item 1.3.2</a></li>--}}
                {{--<li><a href="javascript:void(0)">item 1.3.3</a></li>--}}
                {{--<li><a href="javascript:void(0)">item 1.3.4</a></li>--}}
                {{--</ul>--}}
                {{--</li>--}}
                {{--<li><a href="javascript:void(0)">item 1.4</a></li>--}}
                {{--</ul>--}}
                {{--</li>--}}
                {{--<li class="nav-small-cap">--- SUPPORT</li>--}}
                {{--<li><a class="waves-effect waves-dark"--}}
                {{--href="http://eliteadmin.themedesigner.in/demos/bt4/documentation/documentation.html"--}}
                {{--aria-expanded="false"><i class="fa fa-circle-o text-danger"></i><span class="hide-menu">Documentation</span></a>--}}
                {{--</li>--}}
                {{--<li><a class="waves-effect waves-dark" href="pages-login.html" aria-expanded="false"><i--}}
                {{--class="fa fa-circle-o text-success"></i><span--}}
                {{--class="hide-menu">Log Out</span></a></li>--}}
                {{--<li><a class="waves-effect waves-dark" href="pages-faq.html" aria-expanded="false"><i--}}
                {{--class="fa fa-circle-o text-info"></i><span class="hide-menu">FAQs</span></a>--}}
                {{--</li>--}}
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
