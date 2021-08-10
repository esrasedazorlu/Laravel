@extends('layouts.admin')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header" data-background-color="orange">
                            <i class="material-icons">content_copy</i>
                        </div>
                        <div class="card-content">
                            <p class="category">Used Space</p>
                            <h3 class="title">49/50
                                <small>GB</small>
                            </h3>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="material-icons text-danger">warning</i>
                                <a href="#pablo">Get More Space...</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header" data-background-color="green">
                            <i class="material-icons">store</i>
                        </div>
                        <div class="card-content">
                            <p class="category">Revenue</p>
                            <h3 class="title">$34,245</h3>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="material-icons">date_range</i> Last 24 Hours
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header" data-background-color="red">
                            <i class="material-icons">info_outline</i>
                        </div>
                        <div class="card-content">
                            <p class="category">Fixed Issues</p>
                            <h3 class="title">75</h3>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="material-icons">local_offer</i> Tracked from Github
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header" data-background-color="blue">
                            <i class="fa fa-twitter"></i>
                        </div>
                        <div class="card-content">
                            <p class="category">Followers</p>
                            <h3 class="title">+245</h3>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="material-icons">update</i> Just Updated
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header card-chart" data-background-color="green">
                            <div class="ct-chart" id="dailySalesChart"><svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="100%" class="ct-chart-line" style="width: 100%; height: 100%;"><g class="ct-grids"><line x1="40" x2="40" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line x1="77" x2="77" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line x1="114" x2="114" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line x1="151" x2="151" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line x1="188" x2="188" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line x1="225" x2="225" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line x1="262" x2="262" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line y1="120" y2="120" x1="40" x2="299" class="ct-grid ct-vertical"></line><line y1="96" y2="96" x1="40" x2="299" class="ct-grid ct-vertical"></line><line y1="72" y2="72" x1="40" x2="299" class="ct-grid ct-vertical"></line><line y1="48" y2="48" x1="40" x2="299" class="ct-grid ct-vertical"></line><line y1="24" y2="24" x1="40" x2="299" class="ct-grid ct-vertical"></line><line y1="0" y2="0" x1="40" x2="299" class="ct-grid ct-vertical"></line></g><g><g class="ct-series ct-series-a"><path d="M40,91.2C77,79.2,77,79.2,77,79.2C114,103.2,114,103.2,114,103.2C151,79.2,151,79.2,151,79.2C188,64.8,188,64.8,188,64.8C225,76.8,225,76.8,225,76.8C262,28.8,262,28.8,262,28.8" class="ct-line"></path><line x1="40" y1="91.2" x2="40.01" y2="91.2" class="ct-point" ct:value="12" opacity="1"></line><line x1="77" y1="79.2" x2="77.01" y2="79.2" class="ct-point" ct:value="17" opacity="1"></line><line x1="114" y1="103.2" x2="114.01" y2="103.2" class="ct-point" ct:value="7" opacity="1"></line><line x1="151" y1="79.2" x2="151.01" y2="79.2" class="ct-point" ct:value="17" opacity="1"></line><line x1="188" y1="64.8" x2="188.01" y2="64.8" class="ct-point" ct:value="23" opacity="1"></line><line x1="225" y1="76.8" x2="225.01" y2="76.8" class="ct-point" ct:value="18" opacity="1"></line><line x1="262" y1="28.799999999999997" x2="262.01" y2="28.799999999999997" class="ct-point" ct:value="38" opacity="1"></line></g></g><g class="ct-labels"><foreignObject style="overflow: visible;" x="40" y="125" width="37" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 37px; height: 20px" xmlns="http://www.w3.org/1999/xhtml">M</span></foreignObject><foreignObject style="overflow: visible;" x="77" y="125" width="37" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 37px; height: 20px" xmlns="http://www.w3.org/1999/xhtml">T</span></foreignObject><foreignObject style="overflow: visible;" x="114" y="125" width="37" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 37px; height: 20px" xmlns="http://www.w3.org/1999/xhtml">W</span></foreignObject><foreignObject style="overflow: visible;" x="151" y="125" width="37" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 37px; height: 20px" xmlns="http://www.w3.org/1999/xhtml">T</span></foreignObject><foreignObject style="overflow: visible;" x="188" y="125" width="37" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 37px; height: 20px" xmlns="http://www.w3.org/1999/xhtml">F</span></foreignObject><foreignObject style="overflow: visible;" x="225" y="125" width="37" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 37px; height: 20px" xmlns="http://www.w3.org/1999/xhtml">S</span></foreignObject><foreignObject style="overflow: visible;" x="262" y="125" width="37" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 37px; height: 20px" xmlns="http://www.w3.org/1999/xhtml">S</span></foreignObject><foreignObject style="overflow: visible;" y="96" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" style="height: 24px; width: 30px" xmlns="http://www.w3.org/1999/xhtml">0</span></foreignObject><foreignObject style="overflow: visible;" y="72" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" style="height: 24px; width: 30px" xmlns="http://www.w3.org/1999/xhtml">10</span></foreignObject><foreignObject style="overflow: visible;" y="48" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" style="height: 24px; width: 30px" xmlns="http://www.w3.org/1999/xhtml">20</span></foreignObject><foreignObject style="overflow: visible;" y="24" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" style="height: 24px; width: 30px" xmlns="http://www.w3.org/1999/xhtml">30</span></foreignObject><foreignObject style="overflow: visible;" y="0" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" style="height: 24px; width: 30px" xmlns="http://www.w3.org/1999/xhtml">40</span></foreignObject><foreignObject style="overflow: visible;" y="-30" x="0" height="30" width="30"><span class="ct-label ct-vertical ct-start" style="height: 30px; width: 30px" xmlns="http://www.w3.org/1999/xhtml">50</span></foreignObject></g></svg></div>
                        </div>
                        <div class="card-content">
                            <h4 class="title">Daily Sales</h4>
                            <p class="category">
                                <span class="text-success"><i class="fa fa-long-arrow-up"></i> 55% </span> increase in today sales.</p>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="material-icons">access_time</i> updated 4 minutes ago
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header card-chart" data-background-color="orange">
                            <div class="ct-chart" id="emailsSubscriptionChart"><svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="100%" class="ct-chart-bar" style="width: 100%; height: 100%;"><g class="ct-grids"><line y1="120" y2="120" x1="40" x2="294" class="ct-grid ct-vertical"></line><line y1="96" y2="96" x1="40" x2="294" class="ct-grid ct-vertical"></line><line y1="72" y2="72" x1="40" x2="294" class="ct-grid ct-vertical"></line><line y1="48" y2="48" x1="40" x2="294" class="ct-grid ct-vertical"></line><line y1="24" y2="24" x1="40" x2="294" class="ct-grid ct-vertical"></line><line y1="0" y2="0" x1="40" x2="294" class="ct-grid ct-vertical"></line></g><g><g class="ct-series ct-series-a"><line x1="50.583333333333336" x2="50.583333333333336" y1="120" y2="54.959999999999994" class="ct-bar" ct:value="542" opacity="1"></line><line x1="71.75" x2="71.75" y1="120" y2="66.84" class="ct-bar" ct:value="443" opacity="1"></line><line x1="92.91666666666667" x2="92.91666666666667" y1="120" y2="81.6" class="ct-bar" ct:value="320" opacity="1"></line><line x1="114.08333333333333" x2="114.08333333333333" y1="120" y2="26.400000000000006" class="ct-bar" ct:value="780" opacity="1"></line><line x1="135.25" x2="135.25" y1="120" y2="53.64" class="ct-bar" ct:value="553" opacity="1"></line><line x1="156.41666666666669" x2="156.41666666666669" y1="120" y2="65.64" class="ct-bar" ct:value="453" opacity="1"></line><line x1="177.58333333333334" x2="177.58333333333334" y1="120" y2="80.88" class="ct-bar" ct:value="326" opacity="1"></line><line x1="198.75000000000003" x2="198.75000000000003" y1="120" y2="67.92" class="ct-bar" ct:value="434" opacity="1"></line><line x1="219.91666666666669" x2="219.91666666666669" y1="120" y2="51.84" class="ct-bar" ct:value="568" opacity="1"></line><line x1="241.08333333333334" x2="241.08333333333334" y1="120" y2="46.8" class="ct-bar" ct:value="610" opacity="1"></line><line x1="262.25" x2="262.25" y1="120" y2="29.28" class="ct-bar" ct:value="756" opacity="1"></line><line x1="283.4166666666667" x2="283.4166666666667" y1="120" y2="12.599999999999994" class="ct-bar" ct:value="895" opacity="1"></line></g></g><g class="ct-labels"><foreignObject style="overflow: visible;" x="40" y="125" width="21.166666666666668" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 21px; height: 20px" xmlns="http://www.w3.org/1999/xhtml">Jan</span></foreignObject><foreignObject style="overflow: visible;" x="61.16666666666667" y="125" width="21.166666666666668" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 21px; height: 20px" xmlns="http://www.w3.org/1999/xhtml">Feb</span></foreignObject><foreignObject style="overflow: visible;" x="82.33333333333334" y="125" width="21.166666666666664" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 21px; height: 20px" xmlns="http://www.w3.org/1999/xhtml">Mar</span></foreignObject><foreignObject style="overflow: visible;" x="103.5" y="125" width="21.16666666666667" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 21px; height: 20px" xmlns="http://www.w3.org/1999/xhtml">Apr</span></foreignObject><foreignObject style="overflow: visible;" x="124.66666666666667" y="125" width="21.16666666666667" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 21px; height: 20px" xmlns="http://www.w3.org/1999/xhtml">Mai</span></foreignObject><foreignObject style="overflow: visible;" x="145.83333333333334" y="125" width="21.166666666666657" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 21px; height: 20px" xmlns="http://www.w3.org/1999/xhtml">Jun</span></foreignObject><foreignObject style="overflow: visible;" x="167" y="125" width="21.166666666666686" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 21px; height: 20px" xmlns="http://www.w3.org/1999/xhtml">Jul</span></foreignObject><foreignObject style="overflow: visible;" x="188.16666666666669" y="125" width="21.166666666666657" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 21px; height: 20px" xmlns="http://www.w3.org/1999/xhtml">Aug</span></foreignObject><foreignObject style="overflow: visible;" x="209.33333333333334" y="125" width="21.166666666666657" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 21px; height: 20px" xmlns="http://www.w3.org/1999/xhtml">Sep</span></foreignObject><foreignObject style="overflow: visible;" x="230.5" y="125" width="21.166666666666686" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 21px; height: 20px" xmlns="http://www.w3.org/1999/xhtml">Oct</span></foreignObject><foreignObject style="overflow: visible;" x="251.66666666666669" y="125" width="21.166666666666657" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 21px; height: 20px" xmlns="http://www.w3.org/1999/xhtml">Nov</span></foreignObject><foreignObject style="overflow: visible;" x="272.83333333333337" y="125" width="30" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 30px; height: 20px" xmlns="http://www.w3.org/1999/xhtml">Dec</span></foreignObject><foreignObject style="overflow: visible;" y="96" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" style="height: 24px; width: 30px" xmlns="http://www.w3.org/1999/xhtml">0</span></foreignObject><foreignObject style="overflow: visible;" y="72" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" style="height: 24px; width: 30px" xmlns="http://www.w3.org/1999/xhtml">200</span></foreignObject><foreignObject style="overflow: visible;" y="48" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" style="height: 24px; width: 30px" xmlns="http://www.w3.org/1999/xhtml">400</span></foreignObject><foreignObject style="overflow: visible;" y="24" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" style="height: 24px; width: 30px" xmlns="http://www.w3.org/1999/xhtml">600</span></foreignObject><foreignObject style="overflow: visible;" y="0" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" style="height: 24px; width: 30px" xmlns="http://www.w3.org/1999/xhtml">800</span></foreignObject><foreignObject style="overflow: visible;" y="-30" x="0" height="30" width="30"><span class="ct-label ct-vertical ct-start" style="height: 30px; width: 30px" xmlns="http://www.w3.org/1999/xhtml">1000</span></foreignObject></g></svg></div>
                        </div>
                        <div class="card-content">
                            <h4 class="title">Email Subscriptions</h4>
                            <p class="category">Last Campaign Performance</p>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="material-icons">access_time</i> campaign sent 2 days ago
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header card-chart" data-background-color="red">
                            <div class="ct-chart" id="completedTasksChart"><svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="100%" class="ct-chart-line" style="width: 100%; height: 100%;"><g class="ct-grids"><line x1="40" x2="40" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line x1="72.375" x2="72.375" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line x1="104.75" x2="104.75" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line x1="137.125" x2="137.125" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line x1="169.5" x2="169.5" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line x1="201.875" x2="201.875" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line x1="234.25" x2="234.25" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line x1="266.625" x2="266.625" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line y1="120" y2="120" x1="40" x2="299" class="ct-grid ct-vertical"></line><line y1="96" y2="96" x1="40" x2="299" class="ct-grid ct-vertical"></line><line y1="72" y2="72" x1="40" x2="299" class="ct-grid ct-vertical"></line><line y1="48" y2="48" x1="40" x2="299" class="ct-grid ct-vertical"></line><line y1="24" y2="24" x1="40" x2="299" class="ct-grid ct-vertical"></line><line y1="0" y2="0" x1="40" x2="299" class="ct-grid ct-vertical"></line></g><g><g class="ct-series ct-series-a"><path d="M40,92.4C72.375,30,72.375,30,72.375,30C104.75,66,104.75,66,104.75,66C137.125,84,137.125,84,137.125,84C169.5,86.4,169.5,86.4,169.5,86.4C201.875,91.2,201.875,91.2,201.875,91.2C234.25,96,234.25,96,234.25,96C266.625,97.2,266.625,97.2,266.625,97.2" class="ct-line"></path><line x1="40" y1="92.4" x2="40.01" y2="92.4" class="ct-point" ct:value="230" opacity="1"></line><line x1="72.375" y1="30" x2="72.385" y2="30" class="ct-point" ct:value="750" opacity="1"></line><line x1="104.75" y1="66" x2="104.76" y2="66" class="ct-point" ct:value="450" opacity="1"></line><line x1="137.125" y1="84" x2="137.135" y2="84" class="ct-point" ct:value="300" opacity="1"></line><line x1="169.5" y1="86.4" x2="169.51" y2="86.4" class="ct-point" ct:value="280" opacity="1"></line><line x1="201.875" y1="91.2" x2="201.885" y2="91.2" class="ct-point" ct:value="240" opacity="1"></line><line x1="234.25" y1="96" x2="234.26" y2="96" class="ct-point" ct:value="200" opacity="1"></line><line x1="266.625" y1="97.2" x2="266.635" y2="97.2" class="ct-point" ct:value="190" opacity="1"></line></g></g><g class="ct-labels"><foreignObject style="overflow: visible;" x="40" y="125" width="32.375" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 32px; height: 20px" xmlns="http://www.w3.org/1999/xhtml">12am</span></foreignObject><foreignObject style="overflow: visible;" x="72.375" y="125" width="32.375" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 32px; height: 20px" xmlns="http://www.w3.org/1999/xhtml">3pm</span></foreignObject><foreignObject style="overflow: visible;" x="104.75" y="125" width="32.375" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 32px; height: 20px" xmlns="http://www.w3.org/1999/xhtml">6pm</span></foreignObject><foreignObject style="overflow: visible;" x="137.125" y="125" width="32.375" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 32px; height: 20px" xmlns="http://www.w3.org/1999/xhtml">9pm</span></foreignObject><foreignObject style="overflow: visible;" x="169.5" y="125" width="32.375" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 32px; height: 20px" xmlns="http://www.w3.org/1999/xhtml">12pm</span></foreignObject><foreignObject style="overflow: visible;" x="201.875" y="125" width="32.375" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 32px; height: 20px" xmlns="http://www.w3.org/1999/xhtml">3am</span></foreignObject><foreignObject style="overflow: visible;" x="234.25" y="125" width="32.375" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 32px; height: 20px" xmlns="http://www.w3.org/1999/xhtml">6am</span></foreignObject><foreignObject style="overflow: visible;" x="266.625" y="125" width="32.375" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 32px; height: 20px" xmlns="http://www.w3.org/1999/xhtml">9am</span></foreignObject><foreignObject style="overflow: visible;" y="96" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" style="height: 24px; width: 30px" xmlns="http://www.w3.org/1999/xhtml">0</span></foreignObject><foreignObject style="overflow: visible;" y="72" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" style="height: 24px; width: 30px" xmlns="http://www.w3.org/1999/xhtml">200</span></foreignObject><foreignObject style="overflow: visible;" y="48" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" style="height: 24px; width: 30px" xmlns="http://www.w3.org/1999/xhtml">400</span></foreignObject><foreignObject style="overflow: visible;" y="24" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" style="height: 24px; width: 30px" xmlns="http://www.w3.org/1999/xhtml">600</span></foreignObject><foreignObject style="overflow: visible;" y="0" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" style="height: 24px; width: 30px" xmlns="http://www.w3.org/1999/xhtml">800</span></foreignObject><foreignObject style="overflow: visible;" y="-30" x="0" height="30" width="30"><span class="ct-label ct-vertical ct-start" style="height: 30px; width: 30px" xmlns="http://www.w3.org/1999/xhtml">1000</span></foreignObject></g></svg></div>
                        </div>
                        <div class="card-content">
                            <h4 class="title">Completed Tasks</h4>
                            <p class="category">Last Campaign Performance</p>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="material-icons">access_time</i> campaign sent 2 days ago
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="card card-nav-tabs">
                        <div class="card-header" data-background-color="purple">
                            <div class="nav-tabs-navigation">
                                <div class="nav-tabs-wrapper">
                                    <span class="nav-tabs-title">Tasks:</span>
                                    <ul class="nav nav-tabs" data-tabs="tabs">
                                        <li class="active">
                                            <a href="#profile" data-toggle="tab">
                                                <i class="material-icons">bug_report</i> Bugs
                                                <div class="ripple-container"></div>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="#messages" data-toggle="tab">
                                                <i class="material-icons">code</i> Website
                                                <div class="ripple-container"></div>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="#settings" data-toggle="tab">
                                                <i class="material-icons">cloud</i> Server
                                                <div class="ripple-container"></div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="tab-content">
                                <div class="tab-pane active" id="profile">
                                    <table class="table">
                                        <tbody>
                                        <tr>
                                            <td>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="optionsCheckboxes" checked=""><span class="checkbox-material"><span class="check"></span></span>
                                                    </label>
                                                </div>
                                            </td>
                                            <td>Sign contract for "What are conference organizers afraid of?"</td>
                                            <td class="td-actions text-right">
                                                <button type="button" rel="tooltip" title="" class="btn btn-primary btn-simple btn-xs" data-original-title="Edit Task">
                                                    <i class="material-icons">edit</i>
                                                </button>
                                                <button type="button" rel="tooltip" title="" class="btn btn-danger btn-simple btn-xs" data-original-title="Remove">
                                                    <i class="material-icons">close</i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="optionsCheckboxes"><span class="checkbox-material"><span class="check"></span></span>
                                                    </label>
                                                </div>
                                            </td>
                                            <td>Lines From Great Russian Literature? Or E-mails From My Boss?</td>
                                            <td class="td-actions text-right">
                                                <button type="button" rel="tooltip" title="" class="btn btn-primary btn-simple btn-xs" data-original-title="Edit Task">
                                                    <i class="material-icons">edit</i>
                                                </button>
                                                <button type="button" rel="tooltip" title="" class="btn btn-danger btn-simple btn-xs" data-original-title="Remove">
                                                    <i class="material-icons">close</i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="optionsCheckboxes"><span class="checkbox-material"><span class="check"></span></span>
                                                    </label>
                                                </div>
                                            </td>
                                            <td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
                                            </td>
                                            <td class="td-actions text-right">
                                                <button type="button" rel="tooltip" title="" class="btn btn-primary btn-simple btn-xs" data-original-title="Edit Task">
                                                    <i class="material-icons">edit</i>
                                                </button>
                                                <button type="button" rel="tooltip" title="" class="btn btn-danger btn-simple btn-xs" data-original-title="Remove">
                                                    <i class="material-icons">close</i>
                                                    <div class="ripple-container"></div></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="optionsCheckboxes" checked=""><span class="checkbox-material"><span class="check"></span></span>
                                                    </label>
                                                </div>
                                            </td>
                                            <td>Create 4 Invisible User Experiences you Never Knew About</td>
                                            <td class="td-actions text-right">
                                                <button type="button" rel="tooltip" title="" class="btn btn-primary btn-simple btn-xs" data-original-title="Edit Task">
                                                    <i class="material-icons">edit</i>
                                                    <div class="ripple-container"></div></button>
                                                <button type="button" rel="tooltip" title="" class="btn btn-danger btn-simple btn-xs" data-original-title="Remove">
                                                    <i class="material-icons">close</i>
                                                    <div class="ripple-container"></div></button>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane" id="messages">
                                    <table class="table">
                                        <tbody>
                                        <tr>
                                            <td>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="optionsCheckboxes" checked=""><span class="checkbox-material"><span class="check"></span></span>
                                                    </label>
                                                </div>
                                            </td>
                                            <td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
                                            </td>
                                            <td class="td-actions text-right">
                                                <button type="button" rel="tooltip" title="" class="btn btn-primary btn-simple btn-xs" data-original-title="Edit Task">
                                                    <i class="material-icons">edit</i>
                                                </button>
                                                <button type="button" rel="tooltip" title="" class="btn btn-danger btn-simple btn-xs" data-original-title="Remove">
                                                    <i class="material-icons">close</i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="optionsCheckboxes"><span class="checkbox-material"><span class="check"></span></span>
                                                    </label>
                                                </div>
                                            </td>
                                            <td>Sign contract for "What are conference organizers afraid of?"</td>
                                            <td class="td-actions text-right">
                                                <button type="button" rel="tooltip" title="" class="btn btn-primary btn-simple btn-xs" data-original-title="Edit Task">
                                                    <i class="material-icons">edit</i>
                                                </button>
                                                <button type="button" rel="tooltip" title="" class="btn btn-danger btn-simple btn-xs" data-original-title="Remove">
                                                    <i class="material-icons">close</i>
                                                </button>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane" id="settings">
                                    <table class="table">
                                        <tbody>
                                        <tr>
                                            <td>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="optionsCheckboxes"><span class="checkbox-material"><span class="check"></span></span>
                                                    </label>
                                                </div>
                                            </td>
                                            <td>Lines From Great Russian Literature? Or E-mails From My Boss?</td>
                                            <td class="td-actions text-right">
                                                <button type="button" rel="tooltip" title="" class="btn btn-primary btn-simple btn-xs" data-original-title="Edit Task">
                                                    <i class="material-icons">edit</i>
                                                </button>
                                                <button type="button" rel="tooltip" title="" class="btn btn-danger btn-simple btn-xs" data-original-title="Remove">
                                                    <i class="material-icons">close</i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="optionsCheckboxes" checked=""><span class="checkbox-material"><span class="check"></span></span>
                                                    </label>
                                                </div>
                                            </td>
                                            <td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
                                            </td>
                                            <td class="td-actions text-right">
                                                <button type="button" rel="tooltip" title="" class="btn btn-primary btn-simple btn-xs" data-original-title="Edit Task">
                                                    <i class="material-icons">edit</i>
                                                </button>
                                                <button type="button" rel="tooltip" title="" class="btn btn-danger btn-simple btn-xs" data-original-title="Remove">
                                                    <i class="material-icons">close</i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="optionsCheckboxes"><span class="checkbox-material"><span class="check"></span></span>
                                                    </label>
                                                </div>
                                            </td>
                                            <td>Sign contract for "What are conference organizers afraid of?"</td>
                                            <td class="td-actions text-right">
                                                <button type="button" rel="tooltip" title="" class="btn btn-primary btn-simple btn-xs" data-original-title="Edit Task">
                                                    <i class="material-icons">edit</i>
                                                </button>
                                                <button type="button" rel="tooltip" title="" class="btn btn-danger btn-simple btn-xs" data-original-title="Remove">
                                                    <i class="material-icons">close</i>
                                                </button>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-header" data-background-color="orange">
                            <h4 class="title">Employees Stats</h4>
                            <p class="category">New employees on 15th September, 2016</p>
                        </div>
                        <div class="card-content table-responsive">
                            <table class="table table-hover">
                                <thead class="text-warning">
                                <tr><th>ID</th>
                                    <th>Name</th>
                                    <th>Salary</th>
                                    <th>Country</th>
                                </tr></thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Dakota Rice</td>
                                    <td>$36,738</td>
                                    <td>Niger</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Minerva Hooper</td>
                                    <td>$23,789</td>
                                    <td>Curaçao</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Sage Rodriguez</td>
                                    <td>$56,142</td>
                                    <td>Netherlands</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Philip Chaney</td>
                                    <td>$38,735</td>
                                    <td>Korea, South</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
