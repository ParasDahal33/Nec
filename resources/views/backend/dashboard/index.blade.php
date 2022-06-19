@extends('backend.layout.master')
@extends('backend.layout.header')
@extends('backend.layout.sidebar')
@extends('backend.layout.footer')

@section('content')

<div class="site-content">
        <div class="row">
          <div class="col-sm-6">
            <div class="widget-infoblock wi-large m-b-30" style="background-image: url(img/photos/1.jpg)">
              <div class="wi-bg bg-success"></div>
              <a href="#">
                <div class="wi-content-top p-a-30">
                  <div class="wi-icon">
                    <i class="zmdi zmdi-check-all"></i>
                  </div>
                </div>
                <div class="wi-content-bottom p-a-30">
                  <div class="wi-tag">
                    <span class="label label-danger">Traffic</span>
                  </div>
                  <div class="wi-title m-b-30">Devices and resolutions</div>
                  <div class="wi-text">Powerful marketing analytics solutions for companies of all shapes and sizes. Get stronger results across all your sites.</div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="row">
              <div class="col-sm-6">
                <div class="widget-infoblock wi-small m-b-30" style="background-image: url(backend/img/photos/2.jpg)">
                  <div class="wi-bg"></div>
                  <div class="wi-content-bottom p-a-30">
                    <div class="wi-title">New users</div>
                    <div class="wi-stat">
                      <span class="m-r-10">
                        <i class="zmdi zmdi-caret-up text-success"></i>
                      </span> +47%</div>
                    <div class="wi-text">Calculated in last 7 days</div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="widget-infoblock wi-small m-b-30">
                  <div class="wi-bg bg-danger"></div>
                  <div class="wi-content-top p-a-15">
                    <div class="wi-tools pull-right">
                      <a href="#">
                        <i class="zmdi zmdi-refresh"></i>
                      </a>
                      <a href="#">
                        <i class="zmdi zmdi-close"></i>
                      </a>
                    </div>
                    <div class="wi-icon">
                      <i class="zmdi zmdi-cloud-outline-alt text-danger"></i>
                    </div>
                    <div class="wi-number">47%</div>
                    <div class="wi-text">Memory usage</div>
                  </div>
                  <div class="wi-content-bottom">
                    <canvas id="infoblock-chart-1"></canvas>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="widget-infoblock wi-small m-b-30">
                  <div class="wi-bg bg-info"></div>
                  <div class="wi-content-top p-a-15">
                    <div class="wi-tools pull-right">
                      <a href="#">
                        <i class="zmdi zmdi-refresh"></i>
                      </a>
                      <a href="#">
                        <i class="zmdi zmdi-close"></i>
                      </a>
                    </div>
                    <div class="wi-icon">
                      <i class="zmdi zmdi-swap-alt text-info"></i>
                    </div>
                    <div class="wi-number">$ 47,855</div>
                    <div class="wi-text">Revenue</div>
                  </div>
                  <div class="wi-content-bottom">
                    <canvas id="infoblock-chart-2"></canvas>
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="widget-infoblock wi-small m-b-30" style="background-image: url(img/photos/3.jpg)">
                  <div class="wi-bg"></div>
                  <div class="wi-content-bottom p-a-30">
                    <div class="wi-title">Bounce rate</div>
                    <div class="wi-stat">
                      <span class="m-r-10">
                        <i class="zmdi zmdi-caret-down text-danger"></i>
                      </span> -85%</div>
                    <div class="wi-text">Updated: 09:26 AM</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="panel panel-default panel-table">
          <div class="panel-heading">
            <div class="panel-tools">
              <a href="#" class="tools-icon">
                <i class="zmdi zmdi-refresh"></i>
              </a>
              <a href="#" class="tools-icon">
                <i class="zmdi zmdi-close"></i>
              </a>
            </div>
            <h3 class="panel-title">Conversions map</h3>
            <div class="panel-subtitle">1 Feb 2017 - 17 Jul 2017</div>
          </div>
          <div class="panel-body">
            <div class="row">
              <div class="col-sm-8">
                <div id="vector-map" style="height: 350px; width: 100%"></div>
              </div>
              <div class="col-sm-4">
                <div class="switches-stacked m-b-30">
                  <label class="switch switch-primary m-b-15">
                    <input type="checkbox" name="newsletter" class="s-input" checked="checked">
                    <span class="s-content">
                      <span class="s-track"></span>
                      <span class="s-handle"></span>
                    </span>
                    <span class="s-desc text-muted">Mobiles</span>
                  </label>
                  <label class="switch switch-primary">
                    <input type="checkbox" name="newsletter" class="s-input">
                    <span class="s-content">
                      <span class="s-track"></span>
                      <span class="s-handle"></span>
                    </span>
                    <span class="s-desc text-muted">Desktop</span>
                  </label>
                </div>
                <p>Google AdWords
                  <span class="pull-right text-muted">80%</span>
                </p>
                <div class="progress progress-xs m-b-20">
                  <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                    <span class="sr-only">80% Complete (success)</span>
                  </div>
                </div>
                <p>Facebook
                  <span class="pull-right text-muted">57%</span>
                </p>
                <div class="progress progress-xs m-b-20">
                  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="57" aria-valuemin="0" aria-valuemax="100" style="width: 57%">
                    <span class="sr-only">57% Complete (success)</span>
                  </div>
                </div>
                <p>SEO
                  <span class="pull-right text-muted">60%</span>
                </p>
                <div class="progress progress-xs m-b-20">
                  <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                    <span class="sr-only">60% Complete (success)</span>
                  </div>
                </div>
                <p>Instagram
                  <span class="pull-right text-muted">23%</span>
                </p>
                <div class="progress progress-xs m-b-20">
                  <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="23" aria-valuemin="0" aria-valuemax="100" style="width: 23%">
                    <span class="sr-only">23% Complete (success)</span>
                  </div>
                </div>
                <button type="button" class="btn btn-outline-primary btn-block">Details</button>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="panel panel-default panel-table">
              <div class="panel-heading">
                <div class="panel-tools">
                  <a href="#" class="tools-icon">
                    <i class="zmdi zmdi-refresh"></i>
                  </a>
                  <a href="#" class="tools-icon">
                    <i class="zmdi zmdi-close"></i>
                  </a>
                </div>
                <h3 class="panel-title">Top users</h3>
                <div class="panel-subtitle">30 Jun 2017 - 17 Jul 2017</div>
              </div>
              <div class="table-responsive">
                <table class="table table-borderless">
                  <tbody>
                    <tr>
                      <td>
                        <img class="img-circle" src="{{asset('backend/img/avatars/1.jpg')}}" alt="" width="32" height="32">
                      </td>
                      <td>
                        Jonathan Mel
                        <br>
                        <small class="text-muted">
                          <span class="flag-icon flag-icon-us"></span> USA</small>
                      </td>
                      <td>
                        <div class="text-warning">
                          <i class="zmdi zmdi-star"></i>
                          <i class="zmdi zmdi-star"></i>
                          <i class="zmdi zmdi-star"></i>
                          <i class="zmdi zmdi-star"></i>
                          <i class="zmdi zmdi-star"></i>
                        </div>
                      </td>
                      <td class="actions text-center">
                        <a href="#">
                          <i class="zmdi zmdi-more"></i>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <img class="img-circle" src="img/avatars/2.jpg" alt="" width="32" height="32">
                      </td>
                      <td>
                        Landon Graham
                        <br>
                        <small class="text-muted">
                          <span class="flag-icon flag-icon-no"></span> Norway</small>
                      </td>
                      <td>
                        <div class="text-warning">
                          <i class="zmdi zmdi-star"></i>
                          <i class="zmdi zmdi-star"></i>
                          <i class="zmdi zmdi-star"></i>
                          <i class="zmdi zmdi-star"></i>
                          <i class="zmdi zmdi-star"></i>
                        </div>
                      </td>
                      <td class="actions text-center">
                        <a href="#">
                          <i class="zmdi zmdi-more"></i>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <img class="img-circle" src="img/avatars/3.jpg" alt="" width="32" height="32">
                      </td>
                      <td>
                        Ron Carran
                        <br>
                        <small class="text-muted">
                          <span class="flag-icon flag-icon-fr"></span> France</small>
                      </td>
                      <td>
                        <div class="text-warning">
                          <i class="zmdi zmdi-star"></i>
                          <i class="zmdi zmdi-star"></i>
                          <i class="zmdi zmdi-star"></i>
                          <i class="zmdi zmdi-star"></i>
                          <i class="zmdi zmdi-star-outline"></i>
                        </div>
                      </td>
                      <td class="actions text-center">
                        <a href="#">
                          <i class="zmdi zmdi-more"></i>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <img class="img-circle" src="img/avatars/4.jpg" alt="" width="32" height="32">
                      </td>
                      <td>
                        Lucius Skyler
                        <br>
                        <small class="text-muted">
                          <span class="flag-icon flag-icon-de"></span> Germany</small>
                      </td>
                      <td>
                        <div class="text-warning">
                          <i class="zmdi zmdi-star"></i>
                          <i class="zmdi zmdi-star"></i>
                          <i class="zmdi zmdi-star"></i>
                          <i class="zmdi zmdi-star-outline"></i>
                          <i class="zmdi zmdi-star-outline"></i>
                        </div>
                      </td>
                      <td class="actions text-center">
                        <a href="#">
                          <i class="zmdi zmdi-more"></i>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <img class="img-circle" src="img/avatars/5.jpg" alt="" width="32" height="32">
                      </td>
                      <td>
                        Vance Osborn
                        <br>
                        <small class="text-muted">
                          <span class="flag-icon flag-icon-pl"></span> Poland</small>
                      </td>
                      <td>
                        <div class="text-warning">
                          <i class="zmdi zmdi-star"></i>
                          <i class="zmdi zmdi-star"></i>
                          <i class="zmdi zmdi-star"></i>
                          <i class="zmdi zmdi-star-outline"></i>
                          <i class="zmdi zmdi-star-outline"></i>
                        </div>
                      </td>
                      <td class="actions text-center">
                        <a href="#">
                          <i class="zmdi zmdi-more"></i>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <img class="img-circle" src="img/avatars/6.jpg" alt="" width="32" height="32">
                      </td>
                      <td>
                        Angelica Ramos
                        <br>
                        <small class="text-muted">
                          <span class="flag-icon flag-icon-ru"></span> Russia</small>
                      </td>
                      <td>
                        <div class="text-warning">
                          <i class="zmdi zmdi-star"></i>
                          <i class="zmdi zmdi-star"></i>
                          <i class="zmdi zmdi-star"></i>
                          <i class="zmdi zmdi-star-outline"></i>
                          <i class="zmdi zmdi-star-outline"></i>
                        </div>
                      </td>
                      <td class="actions text-center">
                        <a href="#">
                          <i class="zmdi zmdi-more"></i>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <img class="img-circle" src="img/avatars/7.jpg" alt="" width="32" height="32">
                      </td>
                      <td>
                        Brenden Wagner
                        <br>
                        <small class="text-muted">
                          <span class="flag-icon flag-icon-au"></span> Australia</small>
                      </td>
                      <td>
                        <div class="text-warning">
                          <i class="zmdi zmdi-star"></i>
                          <i class="zmdi zmdi-star"></i>
                          <i class="zmdi zmdi-star"></i>
                          <i class="zmdi zmdi-star-outline"></i>
                          <i class="zmdi zmdi-star-outline"></i>
                        </div>
                      </td>
                      <td class="actions text-center">
                        <a href="#">
                          <i class="zmdi zmdi-more"></i>
                        </a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="panel panel-default">
              <div class="panel-heading">
                <div class="panel-tools">
                  <a href="#" class="tools-icon">
                    <i class="zmdi zmdi-refresh"></i>
                  </a>
                  <a href="#" class="tools-icon">
                    <i class="zmdi zmdi-close"></i>
                  </a>
                </div>
                <h3 class="panel-title">Top sales</h3>
                <div class="panel-subtitle">Lorem ipsum dolor sit amet</div>
              </div>
              <div class="panel-body">
                <div id="donut" style="height: 215px"></div>
              </div>
              <table class="table">
                <tbody>
                  <tr>
                    <td>
                      <i class="zmdi zmdi-circle text-primary"></i>
                    </td>
                    <td>Android</td>
                    <td>34</td>
                    <td class="text-center">
                      <i class="zmdi zmdi-arrow-left-bottom"></i>
                    </td>
                    <td class="text-right">
                      <div class="btn-group">
                        <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Action
                          <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-right">
                          <li><a href="#">Action</a></li>
                          <li><a href="#">Another action</a></li>
                          <li><a href="#">Something else here</a></li>
                          <li role="separator" class="divider"></li>
                          <li><a href="#">Separated link</a></li>
                        </ul>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <i class="zmdi zmdi-circle text-warning"></i>
                    </td>
                    <td>iOS</td>
                    <td>67</td>
                    <td class="text-center">
                      <i class="zmdi zmdi-arrow-right-top"></i>
                    </td>
                    <td class="text-right">
                      <div class="btn-group">
                        <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Action
                          <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-right">
                          <li><a href="#">Action</a></li>
                          <li><a href="#">Another action</a></li>
                          <li><a href="#">Something else here</a></li>
                          <li role="separator" class="divider"></li>
                          <li><a href="#">Separated link</a></li>
                        </ul>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <i class="zmdi zmdi-circle text-danger"></i>
                    </td>
                    <td>Windows</td>
                    <td>45</td>
                    <td class="text-center">
                      <i class="zmdi zmdi-arrow-left-bottom"></i>
                    </td>
                    <td class="text-right">
                      <div class="btn-group">
                        <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Action
                          <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-right">
                          <li><a href="#">Action</a></li>
                          <li><a href="#">Another action</a></li>
                          <li><a href="#">Something else here</a></li>
                          <li role="separator" class="divider"></li>
                          <li><a href="#">Separated link</a></li>
                        </ul>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="col-md-4">
            <div class="panel panel-default panel-table">
              <div class="panel-heading">
                <div class="panel-tools">
                  <a href="#" class="tools-icon">
                    <i class="zmdi zmdi-refresh"></i>
                  </a>
                  <a href="#" class="tools-icon">
                    <i class="zmdi zmdi-close"></i>
                  </a>
                </div>
                <h3 class="panel-title">Downloads</h3>
                <div class="panel-subtitle">+17 today</div>
              </div>
              <div class="panel-body">
                <div class="text-center m-b-30">
                  <div class="btn-group btn-group-sm" data-toggle="buttons">
                    <label class="btn btn-default active">
                      <input type="radio" name="buttonRadios" id="buttonRadios1" autocomplete="off" checked="checked"> Plugins
                    </label>
                    <label class="btn btn-default">
                      <input type="radio" name="buttonRadios" id="buttonRadios2" autocomplete="off"> Modules
                    </label>
                  </div>
                </div>
                <div id="chart-bar" style="height: 290px"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-8">
            <div class="panel panel-default panel-table">
              <div class="panel-heading">
                <div class="panel-tools">
                  <a href="#" class="tools-icon">
                    <i class="zmdi zmdi-refresh"></i>
                  </a>
                  <a href="#" class="tools-icon">
                    <i class="zmdi zmdi-close"></i>
                  </a>
                </div>
                <h3 class="panel-title">Sales statistics</h3>
                <div class="panel-subtitle">30 Jun 2017 - 17 Jul 2017</div>
              </div>
              <div class="table-responsive">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th style="width: 32px"></th>
                      <th>Name</th>
                      <th>Date</th>
                      <th>Country</th>
                      <th>Sales</th>
                      <th style="width: 15%">Progress</th>
                      <th>Status</th>
                      <th style="width: 32px">Access</th>
                      <th style="width: 5%"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <img class="img-circle" src="img/avatars/1.jpg" alt="" width="32" height="32">
                      </td>
                      <td>Jonathan Mel</td>
                      <td>
                        April 6, 2017
                        <br>
                        <small class="text-muted">8:30</small>
                      </td>
                      <td>
                        <span class="flag-icon flag-icon-us"></span>
                      </td>
                      <td>98</td>
                      <td>
                        <small class="text-muted">5/10</small>
                        <div class="progress progress-xs m-b-0">
                          <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                            <span class="sr-only">60% Complete (success)</span>
                          </div>
                        </div>
                      </td>
                      <td>
                        <span class="label label-outline-success">Active</span>
                      </td>
                      <td>
                        <label class="switch switch-primary m-t-10">
                          <input type="checkbox" name="newsletter" class="s-input">
                          <span class="s-content">
                            <span class="s-track"></span>
                            <span class="s-handle"></span>
                          </span>
                        </label>
                      </td>
                      <td>
                        <div class="btn-group">
                          <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Action
                            <span class="caret"></span>
                          </button>
                          <ul class="dropdown-menu dropdown-menu-right">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                          </ul>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <img class="img-circle" src="img/avatars/2.jpg" alt="" width="32" height="32">
                      </td>
                      <td>Landon Graham</td>
                      <td>
                        March 31, 2017
                        <br>
                        <small class="text-muted">2:25</small>
                      </td>
                      <td>
                        <span class="flag-icon flag-icon-gb"></span>
                      </td>
                      <td>105</td>
                      <td>
                        <small class="text-muted">8/10</small>
                        <div class="progress progress-xs m-b-0">
                          <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                            <span class="sr-only">80% Complete (success)</span>
                          </div>
                        </div>
                      </td>
                      <td>
                        <span class="label label-outline-info">In process</span>
                      </td>
                      <td>
                        <label class="switch switch-primary m-t-10">
                          <input type="checkbox" name="newsletter" class="s-input" checked="checked">
                          <span class="s-content">
                            <span class="s-track"></span>
                            <span class="s-handle"></span>
                          </span>
                        </label>
                      </td>
                      <td>
                        <div class="btn-group">
                          <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Action
                            <span class="caret"></span>
                          </button>
                          <ul class="dropdown-menu dropdown-menu-right">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                          </ul>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <img class="img-circle" src="img/avatars/3.jpg" alt="" width="32" height="32">
                      </td>
                      <td>Ron Carran</td>
                      <td>
                        February 14, 2017
                        <br>
                        <small class="text-muted">5:40</small>
                      </td>
                      <td>
                        <span class="flag-icon flag-icon-us"></span>
                      </td>
                      <td>87</td>
                      <td>
                        <small class="text-muted">4/10</small>
                        <div class="progress progress-xs m-b-0">
                          <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                            <span class="sr-only">40% Complete (success)</span>
                          </div>
                        </div>
                      </td>
                      <td>
                        <span class="label label-outline-success">Active</span>
                      </td>
                      <td>
                        <label class="switch switch-primary m-t-10">
                          <input type="checkbox" name="newsletter" class="s-input">
                          <span class="s-content">
                            <span class="s-track"></span>
                            <span class="s-handle"></span>
                          </span>
                        </label>
                      </td>
                      <td>
                        <div class="btn-group">
                          <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Action
                            <span class="caret"></span>
                          </button>
                          <ul class="dropdown-menu dropdown-menu-right">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                          </ul>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <img class="img-circle" src="img/avatars/4.jpg" alt="" width="32" height="32">
                      </td>
                      <td>Lucius Skyle</td>
                      <td>
                        January 12, 2017
                        <br>
                        <small class="text-muted">4:50</small>
                      </td>
                      <td>
                        <span class="flag-icon flag-icon-fr"></span>
                      </td>
                      <td>145</td>
                      <td>
                        <small class="text-muted">7/10</small>
                        <div class="progress progress-xs m-b-0">
                          <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                            <span class="sr-only">70% Complete (success)</span>
                          </div>
                        </div>
                      </td>
                      <td>
                        <span class="label label-outline-warning">Expired</span>
                      </td>
                      <td>
                        <label class="switch switch-primary m-t-10">
                          <input type="checkbox" name="newsletter" class="s-input" checked="checked">
                          <span class="s-content">
                            <span class="s-track"></span>
                            <span class="s-handle"></span>
                          </span>
                        </label>
                      </td>
                      <td>
                        <div class="btn-group">
                          <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Action
                            <span class="caret"></span>
                          </button>
                          <ul class="dropdown-menu dropdown-menu-right">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                          </ul>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="panel panel-default panel-table">
              <div class="panel-heading">
                <div class="panel-tools">
                  <a href="#" class="tools-icon">
                    <i class="zmdi zmdi-refresh"></i>
                  </a>
                  <a href="#" class="tools-icon">
                    <i class="zmdi zmdi-close"></i>
                  </a>
                </div>
                <h3 class="panel-title">CPU load</h3>
                <div class="panel-subtitle">4 core processor</div>
              </div>
              <div class="panel-body">
                <div id="realtime" style="height: 285px"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection