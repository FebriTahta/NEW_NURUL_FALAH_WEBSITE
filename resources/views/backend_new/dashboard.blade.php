@extends('new_layouts.be_master')

@section('content')
    <div class="page has-sidebar-left height-full">
        <header class="blue accent-3 relative nav-sticky">
            <div class="container-fluid text-white">
                <div class="row p-t-b-10 ">
                    <div class="col">
                        <h4>
                            <i class="icon-box"></i>
                            Dashboard
                        </h4>
                    </div>
                </div>
                <div class="row">
                    <ul class="nav responsive-tab nav-material nav-material-white" id="v-pills-tab">
                        <li>
                            <a class="nav-link active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1">
                                <i class="icon icon-home2"></i>Today</a>
                        </li>
                    </ul>
                    <a class="btn-fab absolute fab-right-bottom btn-primary" data-toggle="control-sidebar">
                        <i class="icon icon-menu"></i>
                    </a>
                </div>
            </div>
        </header>
        <div class="container-fluid relative animatedParent animateOnce">
            <div class="tab-content pb-3" id="v-pills-tabContent">
                <!--Today Tab Start-->
                <div class="tab-pane animated fadeInUpShort show active" id="v-pills-1">
                    <div class="row my-3">
                        <div class="col-md-3">
                            <div class="counter-box white r-5 p-3">
                                <div class="p-4">
                                    <div class="float-right">
                                        <span class="icon icon-note-list text-light-blue s-48"></span>
                                    </div>
                                    <div class="counter-title">Total Berita</div>
                                    <h5 class="sc-counter mt-3">{{ $total_berita }}</h5>
                                </div>
                                <div class="progress progress-xs r-0">
                                    <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25"
                                        aria-valuemin="0" aria-valuemax="128"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="counter-box white r-5 p-3">
                                <div class="p-4">
                                    <div class="float-right">
                                        <span class="icon icon-inbox-document-text s-48"></span>
                                    </div>
                                    <div class="counter-title">Total Artikel</div>
                                    <h5 class="sc-counter mt-3">{{ $total_artikel }}</h5>
                                </div>
                                <div class="progress progress-xs r-0">
                                    <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25"
                                        aria-valuemin="0" aria-valuemax="128"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="counter-box white r-5 p-3">
                                <div class="p-4">
                                    <div class="float-right">
                                        <span class="icon icon-mail-envelope-open s-48"></span>
                                    </div>
                                    <div class="counter-title ">Total Narasumber</div>
                                    <h5 class="sc-counter mt-3">{{ $total_sumber }}</h5>
                                </div>
                                <div class="progress progress-xs r-0">
                                    <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="25"
                                        aria-valuemin="0" aria-valuemax="128"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="counter-box white r-5 p-3">
                                <div class="p-4">
                                    <div class="float-right">
                                        <span class="icon icon-stop-watch3 s-48"></span>
                                    </div>
                                    <div class="counter-title">Total Redaksi</div>
                                    <h5 class="sc-counter mt-3">{{ $total_penulis }}</h5>
                                </div>
                                <div class="progress progress-xs r-0">
                                    <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="25"
                                        aria-valuemin="0" aria-valuemax="128"></div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="white p-5 r-5">
                                <div class="card-title">
                                    <h5> Grafik Best Views</h5>
                                </div>
                                <div class="row my-3">
                                    <div class="col-md-3">
                                        <div class="my-3 mt-4">
                                            <h5>Total Viewer Keseluruhan<span class="red-text">-</span></h5>
                                            <span class="s-24">{{ $total_viewer }}</span>
                                            <p>Rangkuman singkat mengenai berita / artikel paling banyak dibaca atau
                                                diminati.</p>
                                        </div>
                                        <div class="row no-gutters bg-light r-3 p-2 mt-5">
                                            <div class="col-md-6 b-r p-3">
                                                <h5>Total Viewer Berita</h5>
                                                <span>{{ $total_viewer_berita }} </span>
                                            </div>
                                            <div class="col-md-6 p-3">
                                                <div class="">
                                                    <h5>Total Viewer Artikel</h5>
                                                    <span>{{ $total_viewer_artikel }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-9 panel" style="height: 350px" id="show-chart">
                                        <div id="chart"></div>
                                        {{-- <canvas id="canvas" data-dataset="[
                                                            [0, 15, 4, 30, 8, 5, 18],
                                                            [1, 7, 21, 4, 12, 5, 10],
                                                
                                                            ]" data-labels="['A', 'B', 'C', 'D', 'E', 'F']"
                                            data-dataset-options="[
                                                            {   label:'HTML',
                                                                fill: true,
                                                                backgroundColor: 'rgba(50,141,255,.2)',
                                                                borderColor: '#328dff',
                                                                pointBorderColor: '#328dff',
                                                                pointBackgroundColor: '#fff',
                                                                pointBorderWidth: 2,
                                                                borderWidth: 1,
                                                                borderJoinStyle: 'miter',
                                                                pointHoverBackgroundColor: '#328dff',
                                                                pointHoverBorderColor: '#328dff',
                                                                pointHoverBorderWidth: 1,
                                                                pointRadius: 3,
                                                                
                                                            },
                                                            {  
                                                                label:'Wordpress',
                                                                fill: false,
                                                                borderDash: [5, 5],
                                                                backgroundColor: 'rgba(87,115,238,.3)',
                                                                borderColor: '#2979ff',
                                                                pointBorderColor: '#2979ff',
                                                                pointBackgroundColor: '#2979ff',
                                                                pointBorderWidth: 2,
                                                
                                                                borderWidth: 1,
                                                                borderJoinStyle: 'miter',
                                                                pointHoverBackgroundColor: '#2979ff',
                                                                pointHoverBorderColor: '#fff',
                                                                pointHoverBorderWidth: 1,
                                                                pointRadius: 3,
                                                                
                                                            }
                                                            ]"
                                            data-options="{
                                                                    maintainAspectRatio: false,
                                                                    legend: {
                                                                        display: true
                                                                    },
                                                        
                                                                    scales: {
                                                                        xAxes: [{
                                                                            display: true,
                                                                            gridLines: {
                                                                                zeroLineColor: '#eee',
                                                                                color: '#eee',
                                                                            
                                                                                borderDash: [5, 5],
                                                                            }
                                                                        }],
                                                                        yAxes: [{
                                                                            display: true,
                                                                            gridLines: {
                                                                                zeroLineColor: '#eee',
                                                                                color: '#eee',
                                                                                borderDash: [5, 5],
                                                                            }
                                                                        }]
                                                        
                                                                    },
                                                                    elements: {
                                                                        line: {
                                                                        
                                                                            tension: 0.4,
                                                                            borderWidth: 1
                                                                        },
                                                                        point: {
                                                                            radius: 2,
                                                                            hitRadius: 10,
                                                                            hoverRadius: 6,
                                                                            borderWidth: 4
                                                                        }
                                                                    }
                                                                }">
                                        </canvas> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row row-eq-height">
                        <!-- Chat Widget Start -->
                        <div class="col-md-4">
                            <div class="card my-3 no-b r-5">
                                <div class="card-header white no-b">
                                    <h6><span class="badge badge-danger r-3 mr-2">5</span>New Chats </h6>
                                </div>
                                <div class="card-body chat-widget  p-3 r-5 slimScroll" data-height="435">
                                    <ul class="list-unstyled">
                                        <li class="by-me">
                                            <div class="avatar float-left">
                                                <img src="assets/img/dummy/u1.png" alt="" class="img-responsive">
                                                <span class="avatar-badge has-indicator busy"></span>
                                            </div>
                                            <div class="chat-content">
                                                <!-- In meta area, first include "name" and then "time" -->
                                                <div class="chat-meta">Sent
                                                    <span class="float-right">3 hours ago</span>
                                                </div>
                                                Vivamus diam elit diam, consectetur dapibus adipiscing elit.
                                            </div>
                                        </li>
                                        <!-- Chat by other. Use the class "by-other". -->
                                        <li class="by-other">
                                            <!-- Use the class "float-right" in avatar -->
                                            <div class="avatar float-right">
                                                <!-- Online or offline -->
                                                <b class="c-off"></b>
                                                <img src="assets/img/dummy/u4.png" alt="" class="img-responsive">
                                                <span class="avatar-badge has-indicator idle"></span>
                                            </div>
                                            <div class="chat-content">
                                                <!-- In the chat meta, first include "time" then "name" -->
                                                <div class="chat-meta">3 hours ago
                                                    <span class="float-right">Received</span>
                                                </div>
                                                Vivamus diam elit diam, consectetur elit.
                                            </div>
                                        </li>
                                        <li class="by-me">
                                            <div class="avatar float-left">
                                                <b class="c-on"></b>
                                                <img src="assets/img/dummy/u5.png" alt="" class="img-responsive">
                                                <span class="avatar-badge has-indicator online"></span>
                                            </div>
                                            <div class="chat-content">
                                                <div class="chat-meta">Seen
                                                    <span class="float-right">4 hours ago</span>
                                                </div>
                                                Lorem dolor sit sit amet dolo.
                                            </div>
                                        </li>
                                        <li class="by-other">
                                            <!-- Use the class "float-right" in avatar -->
                                            <div class="avatar float-right">
                                                <b class="c-off"></b>
                                                <img src="assets/img/dummy/u4.png" alt="" class="img-responsive">
                                                <span class="avatar-badge has-indicator online"></span>
                                            </div>
                                            <div class="chat-content">
                                                <!-- In the chat meta, first include "time" then "name" -->
                                                <div class="chat-meta">3 hours ago
                                                    <span class="float-right">Undelivered</span>
                                                </div>
                                                Vivamus diam elit diam, consectetur.
                                            </div>
                                        </li>
                                        <li class="by-me">
                                            <div class="avatar float-left">
                                                <b class="c-on"></b>
                                                <img src="assets/img/dummy/u3.png" alt="" class="img-responsive">
                                                <span class="avatar-badge has-indicator bust"></span>
                                            </div>
                                            <div class="chat-content">
                                                <div class="chat-meta">Audio
                                                    <span class="float-right">4 hours ago</span>
                                                </div>
                                                Vivamus diam eget, Vivamus consectetur.
                                            </div>
                                        </li>
                                        <li class="by-other">
                                            <!-- Use the class "float-right" in avatar -->
                                            <div class="avatar float-right">
                                                <b class="c-off"></b>
                                                <img src="assets/img/dummy/u2.png" alt="" class="img-responsive">
                                                <span class="avatar-badge has-indicator online"></span>
                                            </div>
                                            <div class="chat-content">
                                                <!-- In the chat meta, first include "time" then "name" -->
                                                <div class="chat-meta">3 hours ago
                                                    <span class="float-right">Image</span>
                                                </div>
                                                Duis dolor sit eut purus dolor feugius diam elit diamt.
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-footer white">
                                    <!-- Chat button -->
                                    <form>
                                        <div class="input-group">
                                            <input class="form-control s-12 bg-light r-30 mr-3"
                                                placeholder="Type your message..." type="text">
                                            <span class="input-group-btn">
                                                <button type="submit" class="btn-fab btn-danger p-0 s-14"><i
                                                        class="icon-subdirectory_arrow_left"></i></button>
                                            </span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- Followers -->
                        <div class="col-md-3">
                            <div class="card no-b r-5 my-3">
                                <div class="card-body">
                                    <h5 class="card-title">New Followers <span class="badge badge-success r-3">30+</span>
                                    </h5>
                                    <p>There are 30 new followers</p>
                                    <div class="avatar-group">
                                        <figure class="avatar">
                                            <img src="assets/img/dummy/u4.png" alt="">
                                        </figure>
                                        <figure class="avatar">
                                            <span class="avatar-letter avatar-letter-l circle"></span>
                                        </figure>
                                        <figure class="avatar">
                                            <img src="assets/img/dummy/u5.png" alt="">
                                        </figure>
                                        <figure class="avatar">
                                            <img src="assets/img/dummy/u6.png" alt="">
                                        </figure>
                                        <figure class="avatar">
                                            <img src="assets/img/dummy/u7.png" alt="">
                                        </figure>
                                        <figure class="avatar">
                                            <span class="avatar-letter avatar-letter-a circle"></span>
                                        </figure>
                                        <figure class="avatar">
                                            <span class="avatar-letter avatar-letter-b circle"></span>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                            <div class="card no-b r-5 my-3">
                                <div class="bg-primary text-white lighten-2 r-5">
                                    <div class="pt-5 pb-0 pl-4 pr-4">
                                        <div class="lightSlider masonry-container" data-item="1" data-item-md="1"
                                            data-item-sm="1" data-auto="true" data-pause="6000" data-pager="false"
                                            data-controls="false" data-loop="true">
                                            <div>
                                                <h5 class="font-weight-normal s-14">Followers Increased</h5>
                                                <div class="my-5">
                                                    <span>
                                                        Today 30%</span>
                                                    <div class="progress" style="height: 3px;">
                                                        <div class="progress-bar bg-success" role="progressbar"
                                                            style="width: 25%;" aria-valuenow="25" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                                <div class="my-5">
                                                    <span>
                                                        Yesterday 10%</span>
                                                    <div class="progress" style="height: 3px;">
                                                        <div class="progress-bar bg-success" role="progressbar"
                                                            style="width: 25%;" aria-valuenow="25" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                                <canvas width="378" height="140" data-chart="spark"
                                                    data-chart-type="bar"
                                                    data-dataset="[[28,530,200,430,28,530,200,430,28,530,200,430,28,530,200,430,28,530,200,430]]"
                                                    data-labels="['a','b','c','d','a','b','c','d','a','b','c','d','a','b','c','d','a','b','c','d']"
                                                    data-dataset-options="[
                                                        { borderColor:  'rgba(54, 162, 235, 1)', backgroundColor: 'rgba(54, 162, 235,1)'},
                                                        ]">
                                                </canvas>
                                            </div>
                                            <div>
                                                <h5 class="font-weight-normal s-14">Followers Increased</h5>
                                                <div class="my-5">
                                                    <span>
                                                        Today 30%</span>
                                                    <div class="progress" style="height: 3px;">
                                                        <div class="progress-bar bg-success" role="progressbar"
                                                            style="width: 25%;" aria-valuenow="25" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                                <div class="my-5">
                                                    <span>
                                                        Yesterday 10%</span>
                                                    <div class="progress" style="height: 3px;">
                                                        <div class="progress-bar bg-success" role="progressbar"
                                                            style="width: 25%;" aria-valuenow="25" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                                <canvas width="378" height="140" data-chart="spark"
                                                    data-chart-type="line"
                                                    data-dataset="[[28,530,200,430,28,530,200,430,28,530,200,430,28,530,200,430,28,530,200,430]]"
                                                    data-labels="['a','b','c','d','a','b','c','d','a','b','c','d','a','b','c','d','a','b','c','d']"
                                                    data-dataset-options="[
                                                        { borderColor:  'rgba(54, 162, 235, 1)', backgroundColor: 'rgba(54, 162, 235,1)'},
                                                        ]">
                                                </canvas>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- Daily Sale Report-->
                        <div class="col-md-5">
                            <div class="card my-3 no-b ">
                                <div class="card-header white b-0 p-3">
                                    <div class="card-handle">
                                        <a data-toggle="collapse" href="#salesCard" aria-expanded="false"
                                            aria-controls="salesCard">
                                            <i class="icon-menu"></i>
                                        </a>
                                    </div>
                                    <h4 class="card-title">Daily Sale Report</h4>
                                    <small class="card-subtitle mb-2 text-muted">Items purchase by users.</small>
                                </div>
                                <div class="collapse show" id="salesCard">
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <table class="table table-hover earning-box">
                                                <thead class="bg-light">
                                                    <tr>
                                                        <th colspan="2">Client Name</th>
                                                        <th>Item Purchased</th>
                                                        <th>Price</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="w-10">
                                                            <a href="panel-page-profile.html" class="avatar avatar-lg">
                                                                <img src="assets/img/dummy/u6.png" alt="">
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <h6>Sara Kamzoon</h6>
                                                            <small class="text-muted">Marketing Manager</small>
                                                        </td>
                                                        <td>25</td>
                                                        <td>$250</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="w-10">
                                                            <a href="panel-page-profile.html" class="avatar avatar-lg">
                                                                <img src="assets/img/dummy/u7.png" alt="">
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <h6>Sara Kamzoon</h6>
                                                            <small class="text-muted">Marketing Manager</small>
                                                        </td>
                                                        <td>25</td>
                                                        <td>$250</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="w-10">
                                                            <a href="panel-page-profile.html" class="avatar avatar-lg">
                                                                <img src="assets/img/dummy/u9.png" alt="">
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <h6>Sara Kamzoon</h6>
                                                            <small class="text-muted">Marketing Manager</small>
                                                        </td>
                                                        <td>25</td>
                                                        <td>$250</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="w-10">
                                                            <a href="panel-page-profile.html" class="avatar avatar-lg">
                                                                <img src="assets/img/dummy/u11.png" alt="">
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <h6>Sara Kamzoon</h6>
                                                            <small class="text-muted">Marketing Manager</small>
                                                        </td>
                                                        <td>25</td>
                                                        <td>$250</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="w-10">
                                                            <a href="panel-page-profile.html" class="avatar avatar-lg">
                                                                <img src="assets/img/dummy/u12.png" alt="">
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <h6>Sara Kamzoon</h6>
                                                            <small class="text-muted">Marketing Manager</small>
                                                        </td>
                                                        <td>25</td>
                                                        <td>$250</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Today Tab End-->
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="https://code.highcharts.com/highcharts.js"></script>

    <script>
        Highcharts.chart('chart', {
            chart: {
                type: 'spline'
            },
            title: {
                text: 'Grafik Viewer Berita & Artikel'
            },
            subtitle: {
                text: 'Sumber : Analisis https://nurulfalah.org (Febri IT)'
            },
            xAxis: {
                categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
                    'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'
                ],
                accessibility: {
                    description: 'Months of the year'
                }
            },
            yAxis: {
                title: {
                    text: 'Temperature'
                },
                labels: {
                    formatter: function() {
                        return this.value + '°';
                    }
                }
            },
            tooltip: {
                crosshairs: true,
                shared: true
            },
            plotOptions: {
                spline: {
                    marker: {
                        radius: 4,
                        lineColor: '#666666',
                        lineWidth: 1
                    }
                }
            },
            series: [{
                name: 'Tokyo',
                marker: {
                    symbol: 'square'
                },
                data: [7.0, 6.9, 9.5, 14.5, 18.2, 21.5, 25.2, {
                    y: 26.5,
                    marker: {
                        symbol: 'url(https://www.highcharts.com/samples/graphics/sun.png)'
                    },
                    accessibility: {
                        description: 'Sunny symbol, this is the warmest point in the chart.'
                    }
                }, 23.3, 18.3, 13.9, 9.6]

            }, {
                name: 'London',
                marker: {
                    symbol: 'diamond'
                },
                data: [{
                    y: 3.9,
                    marker: {
                        symbol: 'url(https://www.highcharts.com/samples/graphics/snow.png)'
                    },
                    accessibility: {
                        description: 'Snowy symbol, this is the coldest point in the chart.'
                    }
                }, 4.2, 5.7, 8.5, 11.9, 15.2, 17.0, 16.6, 14.2, 10.3, 6.6, 4.8]
            }]
        });
    </script>

    {{-- <script>
        $(document).ready(function (){
            chartBerita();
        })

        function chartBerita() {
            $.ajax({
                type: "POST",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "/chart-berita",
                data: {
                    type: 'non_search'
                },
                dataType: "JSON",
                success: function(response) {
                    make_chart(response.content.monthNames, response.content.berita);
                }
            });
        };

        function make_chart(monthNames, berita) {
            $('.show-chart').html('');
            //membuat chart baru
            $('.show-chart').html('<canvas id="canvas" height="350" width="600"></canvas>')
            var ctx = document.getElementById('canvas').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: monthNames,
                    datasets: [{
                        label: 'Chart',
                        backgroundColor: "rgb(185, 124, 243)",
                        data: berita,
                        borderColor: "rgb(91, 233, 138)",
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        };


    </script> --}}
@endsection
