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
                        <!--Grafik Berita Artikel-->
                        <div class="col-md-12">
                            <div class="white p-5 r-5">
                                <div class="card-title">
                                    <h5> Grafik Compare Views</h5>
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
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Grafik Berita Terpopuler-->
                    <div class="white p-5 r-5">
                        <div class="card-title">
                            <h5> Grafik Best Views</h5>
                            {!!json_encode($best_berita)!!}
                        </div>
                        <div class="row my-3">
                            <div class="col-md-6">
                                <div id="chart_best_berita"></div>
                            </div>
                            <div class="col-md-6 panel" style="height: 350px" id="show-chart">
                                <div id="chart_best_artikel"></div>
                            </div>
                        </div>
                    </div>
                    <!--Grafik Artikel Terpopuler-->
                </div>
                <!--Today Tab End-->
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="https://code.highcharts.com/highcharts.js"></script>

    <script>
        function chart_berita_artikel() {
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
                    categories: {!! json_encode($monthNames) !!},
                    accessibility: {
                        description: 'Months of the year'
                    }
                },
                yAxis: {
                    title: {
                        text: 'Viewer'
                    },
                    labels: {
                        formatter: function() {
                            return this.value + ' views';
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
                    name: 'Berita',
                    marker: {
                        symbol: 'square'
                    },
                    data: {!! json_encode($berita) !!}

                }, {
                    name: 'Artikel',
                    marker: {
                        symbol: 'diamond'
                    },
                    data: {!! json_encode($artikel) !!},
                }],
                responsive: {
                    rules: [{
                        condition: {
                            maxWidth: 500
                        },
                        chartOptions: {
                            legend: {
                                align: 'center',
                                verticalAlign: 'bottom',
                                layout: 'horizontal'
                            },
                            yAxis: {
                                labels: {
                                    align: 'left',
                                    x: 0,
                                    y: -5
                                },
                                title: {
                                    text: null
                                }
                            },
                            subtitle: {
                                text: null
                            },
                            credits: {
                                enabled: false
                            }
                        }
                    }]
                }
            });
        }
        
        function chart_best_berita(params) {
            Highcharts.chart('chart_best_berita', {
                chart: {
                    type: 'column'
                },
                title: {
                    text: '6 Berita Paling Sering Dikunjungi'
                },
                subtitle: {
                    text: 'Source: https://nurulfalah.org (Febri IT)'
                },
                xAxis: {
                    categories: {!!json_encode($judul_berita)!!},
                    crosshair: true
                },
                yAxis: {
                    min: 0,
                    title: {
                        text: 'Rainfall (mm)'
                    }
                },
                tooltip: {
                    headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                    pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                        '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
                    footerFormat: '</table>',
                    shared: true,
                    useHTML: true
                },
                plotOptions: {
                    column: {
                        pointPadding: 0.2,
                        borderWidth: 0
                    }
                },
                series: [{
                    name: 'Tokyo',
                    data: {!!json_encode($best_berita)!!}

                }]
            });
        }

        $(document).ready(function() {
            chart_berita_artikel();
            chart_best_berita();
        })
    </script>
@endsection
