@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-lg-8 mb-4 order-0">
            <div class="card">
                <div class="d-flex align-items-end row">
                    <div class="col-sm-7">
                        <div class="card-body">
                            <h5 class="card-title text-primary">Congratulations John! 🎉</h5>
                            <p class="mb-4">You have done <span class="fw-bold">72%</span> more sales today. Check your
                                new badge in your profile.</p>

                            <a href="javascript:;" class="btn btn-sm btn-outline-primary">View Badges</a>
                        </div>
                    </div>
                    <div class="col-sm-5 text-center text-sm-left">
                        <div class="card-body pb-0 px-0 px-md-4">
                            <img src="../assets/img/illustrations/man-with-laptop-light.png" height="140"
                                alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png"
                                data-app-light-img="illustrations/man-with-laptop-light.png">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 order-1">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <img src="../assets/img/icons/unicons/chart-success.png" alt="chart success"
                                        class="rounded">
                                </div>
                                <div class="dropdown">
                                    <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                                        <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                    </div>
                                </div>
                            </div>
                            <span class="fw-semibold d-block mb-1">Profit</span>
                            <h3 class="card-title mb-2">$12,628</h3>
                            <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +72.80%</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <img src="../assets/img/icons/unicons/wallet-info.png" alt="Credit Card"
                                        class="rounded">
                                </div>
                                <div class="dropdown">
                                    <button class="btn p-0" type="button" id="cardOpt6" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt6">
                                        <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                    </div>
                                </div>
                            </div>
                            <span>Sales</span>
                            <h3 class="card-title text-nowrap mb-1">$4,679</h3>
                            <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +28.42%</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Total Revenue -->
        <div class="col-12 col-lg-8 order-2 order-md-3 order-lg-2 mb-4">
            <div class="card">
                <div class="row row-bordered g-0">
                    <div class="col-md-8">
                        <h5 class="card-header m-0 me-2 pb-3">Total Revenue</h5>
                        <div id="totalRevenueChart" class="px-2" style="min-height: 315px;">
                            <div id="apexchartsy3aloctq" class="apexcharts-canvas apexchartsy3aloctq apexcharts-theme-light"
                                style="width: 515px; height: 300px;"><svg id="SvgjsSvg1571" width="515" height="300"
                                    xmlns="http://www.w3.org/2000/svg" version="1.1"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                    class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                    style="background: transparent;">
                                    <foreignObject x="0" y="0" width="515" height="300">
                                        <div class="apexcharts-legend apexcharts-align-left apx-legend-position-top"
                                            xmlns="http://www.w3.org/1999/xhtml"
                                            style="right: 0px; position: absolute; left: 0px; top: 4px; max-height: 150px;">
                                            <div class="apexcharts-legend-series" rel="1" seriesname="2021"
                                                data:collapsed="false" style="margin: 2px 10px;"><span
                                                    class="apexcharts-legend-marker" rel="1"
                                                    data:collapsed="false"
                                                    style="background: rgb(105, 108, 255) !important; color: rgb(105, 108, 255); height: 8px; width: 8px; left: -3px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span
                                                    class="apexcharts-legend-text" rel="1" i="0"
                                                    data:default-text="2021" data:collapsed="false"
                                                    style="color: rgb(161, 172, 184); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">2021</span>
                                            </div>
                                            <div class="apexcharts-legend-series" rel="2" seriesname="2020"
                                                data:collapsed="false" style="margin: 2px 10px;"><span
                                                    class="apexcharts-legend-marker" rel="2"
                                                    data:collapsed="false"
                                                    style="background: rgb(3, 195, 236) !important; color: rgb(3, 195, 236); height: 8px; width: 8px; left: -3px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span
                                                    class="apexcharts-legend-text" rel="2" i="1"
                                                    data:default-text="2020" data:collapsed="false"
                                                    style="color: rgb(161, 172, 184); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">2020</span>
                                            </div>
                                        </div>
                                        <style type="text/css">
                                            .apexcharts-legend {
                                                display: flex;
                                                overflow: auto;
                                                padding: 0 10px;
                                            }

                                            .apexcharts-legend.apx-legend-position-bottom,
                                            .apexcharts-legend.apx-legend-position-top {
                                                flex-wrap: wrap
                                            }

                                            .apexcharts-legend.apx-legend-position-right,
                                            .apexcharts-legend.apx-legend-position-left {
                                                flex-direction: column;
                                                bottom: 0;
                                            }

                                            .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-left,
                                            .apexcharts-legend.apx-legend-position-top.apexcharts-align-left,
                                            .apexcharts-legend.apx-legend-position-right,
                                            .apexcharts-legend.apx-legend-position-left {
                                                justify-content: flex-start;
                                            }

                                            .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-center,
                                            .apexcharts-legend.apx-legend-position-top.apexcharts-align-center {
                                                justify-content: center;
                                            }

                                            .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-right,
                                            .apexcharts-legend.apx-legend-position-top.apexcharts-align-right {
                                                justify-content: flex-end;
                                            }

                                            .apexcharts-legend-series {
                                                cursor: pointer;
                                                line-height: normal;
                                            }

                                            .apexcharts-legend.apx-legend-position-bottom .apexcharts-legend-series,
                                            .apexcharts-legend.apx-legend-position-top .apexcharts-legend-series {
                                                display: flex;
                                                align-items: center;
                                            }

                                            .apexcharts-legend-text {
                                                position: relative;
                                                font-size: 14px;
                                            }

                                            .apexcharts-legend-text *,
                                            .apexcharts-legend-marker * {
                                                pointer-events: none;
                                            }

                                            .apexcharts-legend-marker {
                                                position: relative;
                                                display: inline-block;
                                                cursor: pointer;
                                                margin-right: 3px;
                                                border-style: solid;
                                            }

                                            .apexcharts-legend.apexcharts-align-right .apexcharts-legend-series,
                                            .apexcharts-legend.apexcharts-align-left .apexcharts-legend-series {
                                                display: inline-block;
                                            }

                                            .apexcharts-legend-series.apexcharts-no-click {
                                                cursor: auto;
                                            }

                                            .apexcharts-legend .apexcharts-hidden-zero-series,
                                            .apexcharts-legend .apexcharts-hidden-null-series {
                                                display: none !important;
                                            }

                                            .apexcharts-inactive-legend {
                                                opacity: 0.45;
                                            }
                                        </style>
                                    </foreignObject>
                                    <g id="SvgjsG1573" class="apexcharts-inner apexcharts-graphical"
                                        transform="translate(53.80000114440918, 52)">
                                        <defs id="SvgjsDefs1572">
                                            <linearGradient id="SvgjsLinearGradient1577" x1="0" y1="0"
                                                x2="0" y2="1">
                                                <stop id="SvgjsStop1578" stop-opacity="0.4"
                                                    stop-color="rgba(216,227,240,0.4)" offset="0"></stop>
                                                <stop id="SvgjsStop1579" stop-opacity="0.5"
                                                    stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                                <stop id="SvgjsStop1580" stop-opacity="0.5"
                                                    stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                            </linearGradient>
                                            <clipPath id="gridRectMasky3aloctq">
                                                <rect id="SvgjsRect1582" width="451.1999988555908"
                                                    height="223.70079907417298" x="-5" y="-3"
                                                    rx="0" ry="0" opacity="1" stroke-width="0"
                                                    stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                            </clipPath>
                                            <clipPath id="forecastMasky3aloctq"></clipPath>
                                            <clipPath id="nonForecastMasky3aloctq"></clipPath>
                                            <clipPath id="gridRectMarkerMasky3aloctq">
                                                <rect id="SvgjsRect1583" width="445.1999988555908"
                                                    height="221.70079907417298" x="-2" y="-2"
                                                    rx="0" ry="0" opacity="1" stroke-width="0"
                                                    stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                            </clipPath>
                                        </defs>
                                        <rect id="SvgjsRect1581" width="22.05999994277954" height="217.70079907417298"
                                            x="0" y="0" rx="0" ry="0" opacity="1"
                                            stroke-width="0" stroke-dasharray="3" fill="url(#SvgjsLinearGradient1577)"
                                            class="apexcharts-xcrosshairs" y2="217.70079907417298" filter="none"
                                            fill-opacity="0.9"></rect>
                                        <g id="SvgjsG1603" class="apexcharts-xaxis" transform="translate(0, 0)">
                                            <g id="SvgjsG1604" class="apexcharts-xaxis-texts-g"
                                                transform="translate(0, -4)"><text id="SvgjsText1606"
                                                    font-family="Helvetica, Arial, sans-serif" x="31.5142856325422"
                                                    y="246.70079907417298" text-anchor="middle" dominant-baseline="auto"
                                                    font-size="13px" font-weight="400" fill="#a1acb8"
                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1607">Jan</tspan>
                                                    <title>Jan</title>
                                                </text><text id="SvgjsText1609" font-family="Helvetica, Arial, sans-serif"
                                                    x="94.5428568976266" y="246.70079907417298" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="13px" font-weight="400"
                                                    fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1610">Feb</tspan>
                                                    <title>Feb</title>
                                                </text><text id="SvgjsText1612" font-family="Helvetica, Arial, sans-serif"
                                                    x="157.57142816271102" y="246.70079907417298" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="13px" font-weight="400"
                                                    fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1613">Mar</tspan>
                                                    <title>Mar</title>
                                                </text><text id="SvgjsText1615" font-family="Helvetica, Arial, sans-serif"
                                                    x="220.5999994277954" y="246.70079907417298" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="13px" font-weight="400"
                                                    fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1616">Apr</tspan>
                                                    <title>Apr</title>
                                                </text><text id="SvgjsText1618" font-family="Helvetica, Arial, sans-serif"
                                                    x="283.6285706928798" y="246.70079907417298" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="13px" font-weight="400"
                                                    fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1619">May</tspan>
                                                    <title>May</title>
                                                </text><text id="SvgjsText1621" font-family="Helvetica, Arial, sans-serif"
                                                    x="346.6571419579642" y="246.70079907417298" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="13px" font-weight="400"
                                                    fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1622">Jun</tspan>
                                                    <title>Jun</title>
                                                </text><text id="SvgjsText1624" font-family="Helvetica, Arial, sans-serif"
                                                    x="409.6857132230486" y="246.70079907417298" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="13px" font-weight="400"
                                                    fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1625">Jul</tspan>
                                                    <title>Jul</title>
                                                </text></g>
                                        </g>
                                        <g id="SvgjsG1640" class="apexcharts-grid">
                                            <g id="SvgjsG1641" class="apexcharts-gridlines-horizontal">
                                                <line id="SvgjsLine1643" x1="0" y1="0"
                                                    x2="441.1999988555908" y2="0" stroke="#eceef1"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1644" x1="0" y1="43.540159814834595"
                                                    x2="441.1999988555908" y2="43.540159814834595" stroke="#eceef1"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1645" x1="0" y1="87.08031962966919"
                                                    x2="441.1999988555908" y2="87.08031962966919" stroke="#eceef1"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1646" x1="0" y1="130.6204794445038"
                                                    x2="441.1999988555908" y2="130.6204794445038" stroke="#eceef1"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1647" x1="0" y1="174.16063925933838"
                                                    x2="441.1999988555908" y2="174.16063925933838" stroke="#eceef1"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1648" x1="0" y1="217.70079907417298"
                                                    x2="441.1999988555908" y2="217.70079907417298" stroke="#eceef1"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                            </g>
                                            <g id="SvgjsG1642" class="apexcharts-gridlines-vertical"></g>
                                            <line id="SvgjsLine1650" x1="0" y1="217.70079907417298"
                                                x2="441.1999988555908" y2="217.70079907417298" stroke="transparent"
                                                stroke-dasharray="0" stroke-linecap="butt"></line>
                                            <line id="SvgjsLine1649" x1="0" y1="1" x2="0"
                                                y2="217.70079907417298" stroke="transparent" stroke-dasharray="0"
                                                stroke-linecap="butt"></line>
                                        </g>
                                        <g id="SvgjsG1584" class="apexcharts-bar-series apexcharts-plot-series">
                                            <g id="SvgjsG1585" class="apexcharts-series" seriesName="2021"
                                                rel="1" data:realIndex="0">
                                                <path id="SvgjsPath1587"
                                                    d="M 20.48428566115243 120.62047944450379L 20.48428566115243 62.24819177780151Q 20.48428566115243 52.24819177780151 30.48428566115243 52.24819177780151L 26.544285603931968 52.24819177780151Q 36.54428560393197 52.24819177780151 36.54428560393197 62.24819177780151L 36.54428560393197 62.24819177780151L 36.54428560393197 120.62047944450379Q 36.54428560393197 130.6204794445038 26.544285603931968 130.6204794445038L 30.48428566115243 130.6204794445038Q 20.48428566115243 130.6204794445038 20.48428566115243 120.62047944450379z"
                                                    fill="rgba(105,108,255,0.85)" fill-opacity="1" stroke="#ffffff"
                                                    stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                    stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                    clip-path="url(#gridRectMasky3aloctq)"
                                                    pathTo="M 20.48428566115243 120.62047944450379L 20.48428566115243 62.24819177780151Q 20.48428566115243 52.24819177780151 30.48428566115243 52.24819177780151L 26.544285603931968 52.24819177780151Q 36.54428560393197 52.24819177780151 36.54428560393197 62.24819177780151L 36.54428560393197 62.24819177780151L 36.54428560393197 120.62047944450379Q 36.54428560393197 130.6204794445038 26.544285603931968 130.6204794445038L 30.48428566115243 130.6204794445038Q 20.48428566115243 130.6204794445038 20.48428566115243 120.62047944450379z"
                                                    pathFrom="M 20.48428566115243 120.62047944450379L 20.48428566115243 120.62047944450379L 36.54428560393197 120.62047944450379L 36.54428560393197 120.62047944450379L 36.54428560393197 120.62047944450379L 36.54428560393197 120.62047944450379L 36.54428560393197 120.62047944450379L 20.48428566115243 120.62047944450379"
                                                    cy="52.24819177780151" cx="80.51285692623684" j="0"
                                                    val="18" barHeight="78.37228766670228"
                                                    barWidth="22.05999994277954"></path>
                                                <path id="SvgjsPath1588"
                                                    d="M 83.51285692623684 120.62047944450379L 83.51285692623684 110.14236757411956Q 83.51285692623684 100.14236757411956 93.51285692623684 100.14236757411956L 89.57285686901638 100.14236757411956Q 99.57285686901638 100.14236757411956 99.57285686901638 110.14236757411956L 99.57285686901638 110.14236757411956L 99.57285686901638 120.62047944450379Q 99.57285686901638 130.6204794445038 89.57285686901638 130.6204794445038L 93.51285692623684 130.6204794445038Q 83.51285692623684 130.6204794445038 83.51285692623684 120.62047944450379z"
                                                    fill="rgba(105,108,255,0.85)" fill-opacity="1" stroke="#ffffff"
                                                    stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                    stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                    clip-path="url(#gridRectMasky3aloctq)"
                                                    pathTo="M 83.51285692623684 120.62047944450379L 83.51285692623684 110.14236757411956Q 83.51285692623684 100.14236757411956 93.51285692623684 100.14236757411956L 89.57285686901638 100.14236757411956Q 99.57285686901638 100.14236757411956 99.57285686901638 110.14236757411956L 99.57285686901638 110.14236757411956L 99.57285686901638 120.62047944450379Q 99.57285686901638 130.6204794445038 89.57285686901638 130.6204794445038L 93.51285692623684 130.6204794445038Q 83.51285692623684 130.6204794445038 83.51285692623684 120.62047944450379z"
                                                    pathFrom="M 83.51285692623684 120.62047944450379L 83.51285692623684 120.62047944450379L 99.57285686901638 120.62047944450379L 99.57285686901638 120.62047944450379L 99.57285686901638 120.62047944450379L 99.57285686901638 120.62047944450379L 99.57285686901638 120.62047944450379L 83.51285692623684 120.62047944450379"
                                                    cy="100.14236757411956" cx="143.54142819132124" j="1"
                                                    val="7" barHeight="30.478111870384218"
                                                    barWidth="22.05999994277954"></path>
                                                <path id="SvgjsPath1589"
                                                    d="M 146.54142819132124 120.62047944450379L 146.54142819132124 75.3102397222519Q 146.54142819132124 65.3102397222519 156.54142819132124 65.3102397222519L 152.6014281341008 65.3102397222519Q 162.6014281341008 65.3102397222519 162.6014281341008 75.3102397222519L 162.6014281341008 75.3102397222519L 162.6014281341008 120.62047944450379Q 162.6014281341008 130.6204794445038 152.6014281341008 130.6204794445038L 156.54142819132124 130.6204794445038Q 146.54142819132124 130.6204794445038 146.54142819132124 120.62047944450379z"
                                                    fill="rgba(105,108,255,0.85)" fill-opacity="1" stroke="#ffffff"
                                                    stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                    stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                    clip-path="url(#gridRectMasky3aloctq)"
                                                    pathTo="M 146.54142819132124 120.62047944450379L 146.54142819132124 75.3102397222519Q 146.54142819132124 65.3102397222519 156.54142819132124 65.3102397222519L 152.6014281341008 65.3102397222519Q 162.6014281341008 65.3102397222519 162.6014281341008 75.3102397222519L 162.6014281341008 75.3102397222519L 162.6014281341008 120.62047944450379Q 162.6014281341008 130.6204794445038 152.6014281341008 130.6204794445038L 156.54142819132124 130.6204794445038Q 146.54142819132124 130.6204794445038 146.54142819132124 120.62047944450379z"
                                                    pathFrom="M 146.54142819132124 120.62047944450379L 146.54142819132124 120.62047944450379L 162.6014281341008 120.62047944450379L 162.6014281341008 120.62047944450379L 162.6014281341008 120.62047944450379L 162.6014281341008 120.62047944450379L 162.6014281341008 120.62047944450379L 146.54142819132124 120.62047944450379"
                                                    cy="65.3102397222519" cx="206.56999945640564" j="2"
                                                    val="15" barHeight="65.3102397222519"
                                                    barWidth="22.05999994277954"></path>
                                                <path id="SvgjsPath1590"
                                                    d="M 209.56999945640564 120.62047944450379L 209.56999945640564 14.354015981483457Q 209.56999945640564 4.354015981483457 219.56999945640564 4.354015981483457L 215.62999939918518 4.354015981483457Q 225.62999939918518 4.354015981483457 225.62999939918518 14.354015981483457L 225.62999939918518 14.354015981483457L 225.62999939918518 120.62047944450379Q 225.62999939918518 130.6204794445038 215.62999939918518 130.6204794445038L 219.56999945640564 130.6204794445038Q 209.56999945640564 130.6204794445038 209.56999945640564 120.62047944450379z"
                                                    fill="rgba(105,108,255,0.85)" fill-opacity="1" stroke="#ffffff"
                                                    stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                    stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                    clip-path="url(#gridRectMasky3aloctq)"
                                                    pathTo="M 209.56999945640564 120.62047944450379L 209.56999945640564 14.354015981483457Q 209.56999945640564 4.354015981483457 219.56999945640564 4.354015981483457L 215.62999939918518 4.354015981483457Q 225.62999939918518 4.354015981483457 225.62999939918518 14.354015981483457L 225.62999939918518 14.354015981483457L 225.62999939918518 120.62047944450379Q 225.62999939918518 130.6204794445038 215.62999939918518 130.6204794445038L 219.56999945640564 130.6204794445038Q 209.56999945640564 130.6204794445038 209.56999945640564 120.62047944450379z"
                                                    pathFrom="M 209.56999945640564 120.62047944450379L 209.56999945640564 120.62047944450379L 225.62999939918518 120.62047944450379L 225.62999939918518 120.62047944450379L 225.62999939918518 120.62047944450379L 225.62999939918518 120.62047944450379L 225.62999939918518 120.62047944450379L 209.56999945640564 120.62047944450379"
                                                    cy="4.354015981483457" cx="269.59857072149003" j="3"
                                                    val="29" barHeight="126.26646346302033"
                                                    barWidth="22.05999994277954"></path>
                                                <path id="SvgjsPath1591"
                                                    d="M 272.59857072149003 120.62047944450379L 272.59857072149003 62.24819177780151Q 272.59857072149003 52.24819177780151 282.59857072149003 52.24819177780151L 278.6585706642696 52.24819177780151Q 288.6585706642696 52.24819177780151 288.6585706642696 62.24819177780151L 288.6585706642696 62.24819177780151L 288.6585706642696 120.62047944450379Q 288.6585706642696 130.6204794445038 278.6585706642696 130.6204794445038L 282.59857072149003 130.6204794445038Q 272.59857072149003 130.6204794445038 272.59857072149003 120.62047944450379z"
                                                    fill="rgba(105,108,255,0.85)" fill-opacity="1" stroke="#ffffff"
                                                    stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                    stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                    clip-path="url(#gridRectMasky3aloctq)"
                                                    pathTo="M 272.59857072149003 120.62047944450379L 272.59857072149003 62.24819177780151Q 272.59857072149003 52.24819177780151 282.59857072149003 52.24819177780151L 278.6585706642696 52.24819177780151Q 288.6585706642696 52.24819177780151 288.6585706642696 62.24819177780151L 288.6585706642696 62.24819177780151L 288.6585706642696 120.62047944450379Q 288.6585706642696 130.6204794445038 278.6585706642696 130.6204794445038L 282.59857072149003 130.6204794445038Q 272.59857072149003 130.6204794445038 272.59857072149003 120.62047944450379z"
                                                    pathFrom="M 272.59857072149003 120.62047944450379L 272.59857072149003 120.62047944450379L 288.6585706642696 120.62047944450379L 288.6585706642696 120.62047944450379L 288.6585706642696 120.62047944450379L 288.6585706642696 120.62047944450379L 288.6585706642696 120.62047944450379L 272.59857072149003 120.62047944450379"
                                                    cy="52.24819177780151" cx="332.62714198657443" j="4"
                                                    val="18" barHeight="78.37228766670228"
                                                    barWidth="22.05999994277954"></path>
                                                <path id="SvgjsPath1592"
                                                    d="M 335.62714198657443 120.62047944450379L 335.62714198657443 88.37228766670228Q 335.62714198657443 78.37228766670228 345.62714198657443 78.37228766670228L 341.68714192935397 78.37228766670228Q 351.68714192935397 78.37228766670228 351.68714192935397 88.37228766670228L 351.68714192935397 88.37228766670228L 351.68714192935397 120.62047944450379Q 351.68714192935397 130.6204794445038 341.68714192935397 130.6204794445038L 345.62714198657443 130.6204794445038Q 335.62714198657443 130.6204794445038 335.62714198657443 120.62047944450379z"
                                                    fill="rgba(105,108,255,0.85)" fill-opacity="1" stroke="#ffffff"
                                                    stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                    stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                    clip-path="url(#gridRectMasky3aloctq)"
                                                    pathTo="M 335.62714198657443 120.62047944450379L 335.62714198657443 88.37228766670228Q 335.62714198657443 78.37228766670228 345.62714198657443 78.37228766670228L 341.68714192935397 78.37228766670228Q 351.68714192935397 78.37228766670228 351.68714192935397 88.37228766670228L 351.68714192935397 88.37228766670228L 351.68714192935397 120.62047944450379Q 351.68714192935397 130.6204794445038 341.68714192935397 130.6204794445038L 345.62714198657443 130.6204794445038Q 335.62714198657443 130.6204794445038 335.62714198657443 120.62047944450379z"
                                                    pathFrom="M 335.62714198657443 120.62047944450379L 335.62714198657443 120.62047944450379L 351.68714192935397 120.62047944450379L 351.68714192935397 120.62047944450379L 351.68714192935397 120.62047944450379L 351.68714192935397 120.62047944450379L 351.68714192935397 120.62047944450379L 335.62714198657443 120.62047944450379"
                                                    cy="78.37228766670228" cx="395.6557132516588" j="5"
                                                    val="12" barHeight="52.248191777801516"
                                                    barWidth="22.05999994277954"></path>
                                                <path id="SvgjsPath1593"
                                                    d="M 398.6557132516588 120.62047944450379L 398.6557132516588 101.43433561115265Q 398.6557132516588 91.43433561115265 408.6557132516588 91.43433561115265L 404.71571319443837 91.43433561115265Q 414.71571319443837 91.43433561115265 414.71571319443837 101.43433561115265L 414.71571319443837 101.43433561115265L 414.71571319443837 120.62047944450379Q 414.71571319443837 130.6204794445038 404.71571319443837 130.6204794445038L 408.6557132516588 130.6204794445038Q 398.6557132516588 130.6204794445038 398.6557132516588 120.62047944450379z"
                                                    fill="rgba(105,108,255,0.85)" fill-opacity="1" stroke="#ffffff"
                                                    stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                    stroke-dasharray="0" class="apexcharts-bar-area" index="0"
                                                    clip-path="url(#gridRectMasky3aloctq)"
                                                    pathTo="M 398.6557132516588 120.62047944450379L 398.6557132516588 101.43433561115265Q 398.6557132516588 91.43433561115265 408.6557132516588 91.43433561115265L 404.71571319443837 91.43433561115265Q 414.71571319443837 91.43433561115265 414.71571319443837 101.43433561115265L 414.71571319443837 101.43433561115265L 414.71571319443837 120.62047944450379Q 414.71571319443837 130.6204794445038 404.71571319443837 130.6204794445038L 408.6557132516588 130.6204794445038Q 398.6557132516588 130.6204794445038 398.6557132516588 120.62047944450379z"
                                                    pathFrom="M 398.6557132516588 120.62047944450379L 398.6557132516588 120.62047944450379L 414.71571319443837 120.62047944450379L 414.71571319443837 120.62047944450379L 414.71571319443837 120.62047944450379L 414.71571319443837 120.62047944450379L 414.71571319443837 120.62047944450379L 398.6557132516588 120.62047944450379"
                                                    cy="91.43433561115265" cx="458.6842845167432" j="6"
                                                    val="9" barHeight="39.18614383335114"
                                                    barWidth="22.05999994277954"></path>
                                            </g>
                                            <g id="SvgjsG1594" class="apexcharts-series" seriesName="2020"
                                                rel="2" data:realIndex="1">
                                                <path id="SvgjsPath1596"
                                                    d="M 20.48428566115243 150.6204794445038L 20.48428566115243 187.22268720378878Q 20.48428566115243 197.22268720378878 30.48428566115243 197.22268720378878L 26.544285603931968 197.22268720378878Q 36.54428560393197 197.22268720378878 36.54428560393197 187.22268720378878L 36.54428560393197 187.22268720378878L 36.54428560393197 150.6204794445038Q 36.54428560393197 140.6204794445038 26.544285603931968 140.6204794445038L 30.48428566115243 140.6204794445038Q 20.48428566115243 140.6204794445038 20.48428566115243 150.6204794445038z"
                                                    fill="rgba(3,195,236,0.85)" fill-opacity="1" stroke="#ffffff"
                                                    stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                    stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                    clip-path="url(#gridRectMasky3aloctq)"
                                                    pathTo="M 20.48428566115243 150.6204794445038L 20.48428566115243 187.22268720378878Q 20.48428566115243 197.22268720378878 30.48428566115243 197.22268720378878L 26.544285603931968 197.22268720378878Q 36.54428560393197 197.22268720378878 36.54428560393197 187.22268720378878L 36.54428560393197 187.22268720378878L 36.54428560393197 150.6204794445038Q 36.54428560393197 140.6204794445038 26.544285603931968 140.6204794445038L 30.48428566115243 140.6204794445038Q 20.48428566115243 140.6204794445038 20.48428566115243 150.6204794445038z"
                                                    pathFrom="M 20.48428566115243 150.6204794445038L 20.48428566115243 150.6204794445038L 36.54428560393197 150.6204794445038L 36.54428560393197 150.6204794445038L 36.54428560393197 150.6204794445038L 36.54428560393197 150.6204794445038L 36.54428560393197 150.6204794445038L 20.48428566115243 150.6204794445038"
                                                    cy="177.22268720378878" cx="80.51285692623684" j="0"
                                                    val="-13" barHeight="-56.60220775928498"
                                                    barWidth="22.05999994277954"></path>
                                                <path id="SvgjsPath1597"
                                                    d="M 83.51285692623684 150.6204794445038L 83.51285692623684 208.99276711120606Q 83.51285692623684 218.99276711120606 93.51285692623684 218.99276711120606L 89.57285686901638 218.99276711120606Q 99.57285686901638 218.99276711120606 99.57285686901638 208.99276711120606L 99.57285686901638 208.99276711120606L 99.57285686901638 150.6204794445038Q 99.57285686901638 140.6204794445038 89.57285686901638 140.6204794445038L 93.51285692623684 140.6204794445038Q 83.51285692623684 140.6204794445038 83.51285692623684 150.6204794445038z"
                                                    fill="rgba(3,195,236,0.85)" fill-opacity="1" stroke="#ffffff"
                                                    stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                    stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                    clip-path="url(#gridRectMasky3aloctq)"
                                                    pathTo="M 83.51285692623684 150.6204794445038L 83.51285692623684 208.99276711120606Q 83.51285692623684 218.99276711120606 93.51285692623684 218.99276711120606L 89.57285686901638 218.99276711120606Q 99.57285686901638 218.99276711120606 99.57285686901638 208.99276711120606L 99.57285686901638 208.99276711120606L 99.57285686901638 150.6204794445038Q 99.57285686901638 140.6204794445038 89.57285686901638 140.6204794445038L 93.51285692623684 140.6204794445038Q 83.51285692623684 140.6204794445038 83.51285692623684 150.6204794445038z"
                                                    pathFrom="M 83.51285692623684 150.6204794445038L 83.51285692623684 150.6204794445038L 99.57285686901638 150.6204794445038L 99.57285686901638 150.6204794445038L 99.57285686901638 150.6204794445038L 99.57285686901638 150.6204794445038L 99.57285686901638 150.6204794445038L 83.51285692623684 150.6204794445038"
                                                    cy="198.99276711120606" cx="143.54142819132124" j="1"
                                                    val="-18" barHeight="-78.37228766670228"
                                                    barWidth="22.05999994277954"></path>
                                                <path id="SvgjsPath1598"
                                                    d="M 146.54142819132124 150.6204794445038L 146.54142819132124 169.80662327785492Q 146.54142819132124 179.80662327785492 156.54142819132124 179.80662327785492L 152.6014281341008 179.80662327785492Q 162.6014281341008 179.80662327785492 162.6014281341008 169.80662327785492L 162.6014281341008 169.80662327785492L 162.6014281341008 150.6204794445038Q 162.6014281341008 140.6204794445038 152.6014281341008 140.6204794445038L 156.54142819132124 140.6204794445038Q 146.54142819132124 140.6204794445038 146.54142819132124 150.6204794445038z"
                                                    fill="rgba(3,195,236,0.85)" fill-opacity="1" stroke="#ffffff"
                                                    stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                    stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                    clip-path="url(#gridRectMasky3aloctq)"
                                                    pathTo="M 146.54142819132124 150.6204794445038L 146.54142819132124 169.80662327785492Q 146.54142819132124 179.80662327785492 156.54142819132124 179.80662327785492L 152.6014281341008 179.80662327785492Q 162.6014281341008 179.80662327785492 162.6014281341008 169.80662327785492L 162.6014281341008 169.80662327785492L 162.6014281341008 150.6204794445038Q 162.6014281341008 140.6204794445038 152.6014281341008 140.6204794445038L 156.54142819132124 140.6204794445038Q 146.54142819132124 140.6204794445038 146.54142819132124 150.6204794445038z"
                                                    pathFrom="M 146.54142819132124 150.6204794445038L 146.54142819132124 150.6204794445038L 162.6014281341008 150.6204794445038L 162.6014281341008 150.6204794445038L 162.6014281341008 150.6204794445038L 162.6014281341008 150.6204794445038L 162.6014281341008 150.6204794445038L 146.54142819132124 150.6204794445038"
                                                    cy="159.80662327785492" cx="206.56999945640564" j="2"
                                                    val="-9" barHeight="-39.18614383335114"
                                                    barWidth="22.05999994277954"></path>
                                                <path id="SvgjsPath1599"
                                                    d="M 209.56999945640564 150.6204794445038L 209.56999945640564 191.5767031852722Q 209.56999945640564 201.5767031852722 219.56999945640564 201.5767031852722L 215.62999939918518 201.5767031852722Q 225.62999939918518 201.5767031852722 225.62999939918518 191.5767031852722L 225.62999939918518 191.5767031852722L 225.62999939918518 150.6204794445038Q 225.62999939918518 140.6204794445038 215.62999939918518 140.6204794445038L 219.56999945640564 140.6204794445038Q 209.56999945640564 140.6204794445038 209.56999945640564 150.6204794445038z"
                                                    fill="rgba(3,195,236,0.85)" fill-opacity="1" stroke="#ffffff"
                                                    stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                    stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                    clip-path="url(#gridRectMasky3aloctq)"
                                                    pathTo="M 209.56999945640564 150.6204794445038L 209.56999945640564 191.5767031852722Q 209.56999945640564 201.5767031852722 219.56999945640564 201.5767031852722L 215.62999939918518 201.5767031852722Q 225.62999939918518 201.5767031852722 225.62999939918518 191.5767031852722L 225.62999939918518 191.5767031852722L 225.62999939918518 150.6204794445038Q 225.62999939918518 140.6204794445038 215.62999939918518 140.6204794445038L 219.56999945640564 140.6204794445038Q 209.56999945640564 140.6204794445038 209.56999945640564 150.6204794445038z"
                                                    pathFrom="M 209.56999945640564 150.6204794445038L 209.56999945640564 150.6204794445038L 225.62999939918518 150.6204794445038L 225.62999939918518 150.6204794445038L 225.62999939918518 150.6204794445038L 225.62999939918518 150.6204794445038L 225.62999939918518 150.6204794445038L 209.56999945640564 150.6204794445038"
                                                    cy="181.5767031852722" cx="269.59857072149003" j="3"
                                                    val="-14" barHeight="-60.956223740768436"
                                                    barWidth="22.05999994277954"></path>
                                                <path id="SvgjsPath1600"
                                                    d="M 272.59857072149003 150.6204794445038L 272.59857072149003 152.39055935192107Q 272.59857072149003 162.39055935192107 282.59857072149003 162.39055935192107L 278.6585706642696 162.39055935192107Q 288.6585706642696 162.39055935192107 288.6585706642696 152.39055935192107L 288.6585706642696 152.39055935192107L 288.6585706642696 150.6204794445038Q 288.6585706642696 140.6204794445038 278.6585706642696 140.6204794445038L 282.59857072149003 140.6204794445038Q 272.59857072149003 140.6204794445038 272.59857072149003 150.6204794445038z"
                                                    fill="rgba(3,195,236,0.85)" fill-opacity="1" stroke="#ffffff"
                                                    stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                    stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                    clip-path="url(#gridRectMasky3aloctq)"
                                                    pathTo="M 272.59857072149003 150.6204794445038L 272.59857072149003 152.39055935192107Q 272.59857072149003 162.39055935192107 282.59857072149003 162.39055935192107L 278.6585706642696 162.39055935192107Q 288.6585706642696 162.39055935192107 288.6585706642696 152.39055935192107L 288.6585706642696 152.39055935192107L 288.6585706642696 150.6204794445038Q 288.6585706642696 140.6204794445038 278.6585706642696 140.6204794445038L 282.59857072149003 140.6204794445038Q 272.59857072149003 140.6204794445038 272.59857072149003 150.6204794445038z"
                                                    pathFrom="M 272.59857072149003 150.6204794445038L 272.59857072149003 150.6204794445038L 288.6585706642696 150.6204794445038L 288.6585706642696 150.6204794445038L 288.6585706642696 150.6204794445038L 288.6585706642696 150.6204794445038L 288.6585706642696 150.6204794445038L 272.59857072149003 150.6204794445038"
                                                    cy="142.39055935192107" cx="332.62714198657443" j="4"
                                                    val="-5" barHeight="-21.770079907417298"
                                                    barWidth="22.05999994277954"></path>
                                                <path id="SvgjsPath1601"
                                                    d="M 335.62714198657443 150.6204794445038L 335.62714198657443 204.6387511297226Q 335.62714198657443 214.6387511297226 345.62714198657443 214.6387511297226L 341.68714192935397 214.6387511297226Q 351.68714192935397 214.6387511297226 351.68714192935397 204.6387511297226L 351.68714192935397 204.6387511297226L 351.68714192935397 150.6204794445038Q 351.68714192935397 140.6204794445038 341.68714192935397 140.6204794445038L 345.62714198657443 140.6204794445038Q 335.62714198657443 140.6204794445038 335.62714198657443 150.6204794445038z"
                                                    fill="rgba(3,195,236,0.85)" fill-opacity="1" stroke="#ffffff"
                                                    stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                    stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                    clip-path="url(#gridRectMasky3aloctq)"
                                                    pathTo="M 335.62714198657443 150.6204794445038L 335.62714198657443 204.6387511297226Q 335.62714198657443 214.6387511297226 345.62714198657443 214.6387511297226L 341.68714192935397 214.6387511297226Q 351.68714192935397 214.6387511297226 351.68714192935397 204.6387511297226L 351.68714192935397 204.6387511297226L 351.68714192935397 150.6204794445038Q 351.68714192935397 140.6204794445038 341.68714192935397 140.6204794445038L 345.62714198657443 140.6204794445038Q 335.62714198657443 140.6204794445038 335.62714198657443 150.6204794445038z"
                                                    pathFrom="M 335.62714198657443 150.6204794445038L 335.62714198657443 150.6204794445038L 351.68714192935397 150.6204794445038L 351.68714192935397 150.6204794445038L 351.68714192935397 150.6204794445038L 351.68714192935397 150.6204794445038L 351.68714192935397 150.6204794445038L 335.62714198657443 150.6204794445038"
                                                    cy="194.6387511297226" cx="395.6557132516588" j="5"
                                                    val="-17" barHeight="-74.01827168521882"
                                                    barWidth="22.05999994277954"></path>
                                                <path id="SvgjsPath1602"
                                                    d="M 398.6557132516588 150.6204794445038L 398.6557132516588 195.9307191667557Q 398.6557132516588 205.9307191667557 408.6557132516588 205.9307191667557L 404.71571319443837 205.9307191667557Q 414.71571319443837 205.9307191667557 414.71571319443837 195.9307191667557L 414.71571319443837 195.9307191667557L 414.71571319443837 150.6204794445038Q 414.71571319443837 140.6204794445038 404.71571319443837 140.6204794445038L 408.6557132516588 140.6204794445038Q 398.6557132516588 140.6204794445038 398.6557132516588 150.6204794445038z"
                                                    fill="rgba(3,195,236,0.85)" fill-opacity="1" stroke="#ffffff"
                                                    stroke-opacity="1" stroke-linecap="round" stroke-width="6"
                                                    stroke-dasharray="0" class="apexcharts-bar-area" index="1"
                                                    clip-path="url(#gridRectMasky3aloctq)"
                                                    pathTo="M 398.6557132516588 150.6204794445038L 398.6557132516588 195.9307191667557Q 398.6557132516588 205.9307191667557 408.6557132516588 205.9307191667557L 404.71571319443837 205.9307191667557Q 414.71571319443837 205.9307191667557 414.71571319443837 195.9307191667557L 414.71571319443837 195.9307191667557L 414.71571319443837 150.6204794445038Q 414.71571319443837 140.6204794445038 404.71571319443837 140.6204794445038L 408.6557132516588 140.6204794445038Q 398.6557132516588 140.6204794445038 398.6557132516588 150.6204794445038z"
                                                    pathFrom="M 398.6557132516588 150.6204794445038L 398.6557132516588 150.6204794445038L 414.71571319443837 150.6204794445038L 414.71571319443837 150.6204794445038L 414.71571319443837 150.6204794445038L 414.71571319443837 150.6204794445038L 414.71571319443837 150.6204794445038L 398.6557132516588 150.6204794445038"
                                                    cy="185.9307191667557" cx="458.6842845167432" j="6"
                                                    val="-15" barHeight="-65.3102397222519"
                                                    barWidth="22.05999994277954"></path>
                                            </g>
                                            <g id="SvgjsG1586" class="apexcharts-datalabels" data:realIndex="0"></g>
                                            <g id="SvgjsG1595" class="apexcharts-datalabels" data:realIndex="1"></g>
                                        </g>
                                        <line id="SvgjsLine1651" x1="0" y1="0" x2="441.1999988555908"
                                            y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                            stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                        <line id="SvgjsLine1652" x1="0" y1="0" x2="441.1999988555908"
                                            y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt"
                                            class="apexcharts-ycrosshairs-hidden"></line>
                                        <g id="SvgjsG1653" class="apexcharts-yaxis-annotations"></g>
                                        <g id="SvgjsG1654" class="apexcharts-xaxis-annotations"></g>
                                        <g id="SvgjsG1655" class="apexcharts-point-annotations"></g>
                                    </g>
                                    <g id="SvgjsG1626" class="apexcharts-yaxis" rel="0"
                                        transform="translate(15.80000114440918, 0)">
                                        <g id="SvgjsG1627" class="apexcharts-yaxis-texts-g"><text id="SvgjsText1628"
                                                font-family="Helvetica, Arial, sans-serif" x="20" y="53.5"
                                                text-anchor="end" dominant-baseline="auto" font-size="13px"
                                                font-weight="400" fill="#a1acb8"
                                                class="apexcharts-text apexcharts-yaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1629">30</tspan>
                                                <title>30</title>
                                            </text><text id="SvgjsText1630" font-family="Helvetica, Arial, sans-serif"
                                                x="20" y="97.0401598148346" text-anchor="end"
                                                dominant-baseline="auto" font-size="13px" font-weight="400"
                                                fill="#a1acb8" class="apexcharts-text apexcharts-yaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1631">20</tspan>
                                                <title>20</title>
                                            </text><text id="SvgjsText1632" font-family="Helvetica, Arial, sans-serif"
                                                x="20" y="140.5803196296692" text-anchor="end"
                                                dominant-baseline="auto" font-size="13px" font-weight="400"
                                                fill="#a1acb8" class="apexcharts-text apexcharts-yaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1633">10</tspan>
                                                <title>10</title>
                                            </text><text id="SvgjsText1634" font-family="Helvetica, Arial, sans-serif"
                                                x="20" y="184.1204794445038" text-anchor="end"
                                                dominant-baseline="auto" font-size="13px" font-weight="400"
                                                fill="#a1acb8" class="apexcharts-text apexcharts-yaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1635">0</tspan>
                                                <title>0</title>
                                            </text><text id="SvgjsText1636" font-family="Helvetica, Arial, sans-serif"
                                                x="20" y="227.66063925933838" text-anchor="end"
                                                dominant-baseline="auto" font-size="13px" font-weight="400"
                                                fill="#a1acb8" class="apexcharts-text apexcharts-yaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1637">-10</tspan>
                                                <title>-10</title>
                                            </text><text id="SvgjsText1638" font-family="Helvetica, Arial, sans-serif"
                                                x="20" y="271.200799074173" text-anchor="end"
                                                dominant-baseline="auto" font-size="13px" font-weight="400"
                                                fill="#a1acb8" class="apexcharts-text apexcharts-yaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1639">-20</tspan>
                                                <title>-20</title>
                                            </text></g>
                                    </g>
                                    <g id="SvgjsG1574" class="apexcharts-annotations"></g>
                                </svg>
                                <div class="apexcharts-tooltip apexcharts-theme-light">
                                    <div class="apexcharts-tooltip-title"
                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                    <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                            class="apexcharts-tooltip-marker"
                                            style="background-color: rgb(105, 108, 255);"></span>
                                        <div class="apexcharts-tooltip-text"
                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                            <div class="apexcharts-tooltip-y-group"><span
                                                    class="apexcharts-tooltip-text-y-label"></span><span
                                                    class="apexcharts-tooltip-text-y-value"></span></div>
                                            <div class="apexcharts-tooltip-goals-group"><span
                                                    class="apexcharts-tooltip-text-goals-label"></span><span
                                                    class="apexcharts-tooltip-text-goals-value"></span></div>
                                            <div class="apexcharts-tooltip-z-group"><span
                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                    class="apexcharts-tooltip-text-z-value"></span></div>
                                        </div>
                                    </div>
                                    <div class="apexcharts-tooltip-series-group" style="order: 2;"><span
                                            class="apexcharts-tooltip-marker"
                                            style="background-color: rgb(3, 195, 236);"></span>
                                        <div class="apexcharts-tooltip-text"
                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                            <div class="apexcharts-tooltip-y-group"><span
                                                    class="apexcharts-tooltip-text-y-label"></span><span
                                                    class="apexcharts-tooltip-text-y-value"></span></div>
                                            <div class="apexcharts-tooltip-goals-group"><span
                                                    class="apexcharts-tooltip-text-goals-label"></span><span
                                                    class="apexcharts-tooltip-text-goals-value"></span></div>
                                            <div class="apexcharts-tooltip-z-group"><span
                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                    class="apexcharts-tooltip-text-z-value"></span></div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                    <div class="apexcharts-yaxistooltip-text"></div>
                                </div>
                            </div>
                        </div>
                        <div class="resize-triggers">
                            <div class="expand-trigger">
                            
                            </div>
                            <div class="contract-trigger"></div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card-body">
                            <div class="text-center">
                                <div class="dropdown">
                                    <button class="btn btn-sm btn-outline-primary dropdown-toggle" type="button"
                                        id="growthReportId" data-bs-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        2022
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="growthReportId">
                                        <a class="dropdown-item" href="javascript:void(0);">2021</a>
                                        <a class="dropdown-item" href="javascript:void(0);">2020</a>
                                        <a class="dropdown-item" href="javascript:void(0);">2019</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="growthChart" style="min-height: 154.875px;">
                            <div id="apexchartsebkqr19v"
                                class="apexcharts-canvas apexchartsebkqr19v apexcharts-theme-light"
                                style="width: 265px; height: 154.875px;"><svg id="SvgjsSvg1656" width="265"
                                    height="154.875" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                    class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                    style="background: transparent;">
                                    <g id="SvgjsG1658" class="apexcharts-inner apexcharts-graphical"
                                        transform="translate(25.5, -25)">
                                        <defs id="SvgjsDefs1657">
                                            <clipPath id="gridRectMaskebkqr19v">
                                                <rect id="SvgjsRect1660" width="222" height="285" x="-3"
                                                    y="-1" rx="0" ry="0" opacity="1"
                                                    stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff">
                                                </rect>
                                            </clipPath>
                                            <clipPath id="forecastMaskebkqr19v"></clipPath>
                                            <clipPath id="nonForecastMaskebkqr19v"></clipPath>
                                            <clipPath id="gridRectMarkerMaskebkqr19v">
                                                <rect id="SvgjsRect1661" width="220" height="287" x="-2"
                                                    y="-2" rx="0" ry="0" opacity="1"
                                                    stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff">
                                                </rect>
                                            </clipPath>
                                            <linearGradient id="SvgjsLinearGradient1666" x1="1" y1="0"
                                                x2="0" y2="1">
                                                <stop id="SvgjsStop1667" stop-opacity="1"
                                                    stop-color="rgba(105,108,255,1)" offset="0.3"></stop>
                                                <stop id="SvgjsStop1668" stop-opacity="0.6"
                                                    stop-color="rgba(255,255,255,0.6)" offset="0.7"></stop>
                                                <stop id="SvgjsStop1669" stop-opacity="0.6"
                                                    stop-color="rgba(255,255,255,0.6)" offset="1"></stop>
                                            </linearGradient>
                                            <linearGradient id="SvgjsLinearGradient1677" x1="1" y1="0"
                                                x2="0" y2="1">
                                                <stop id="SvgjsStop1678" stop-opacity="1"
                                                    stop-color="rgba(105,108,255,1)" offset="0.3"></stop>
                                                <stop id="SvgjsStop1679" stop-opacity="0.6"
                                                    stop-color="rgba(105,108,255,0.6)" offset="0.7"></stop>
                                                <stop id="SvgjsStop1680" stop-opacity="0.6"
                                                    stop-color="rgba(105,108,255,0.6)" offset="1"></stop>
                                            </linearGradient>
                                        </defs>
                                        <g id="SvgjsG1662" class="apexcharts-radialbar">
                                            <g id="SvgjsG1663">
                                                <g id="SvgjsG1664" class="apexcharts-tracks">
                                                    <g id="SvgjsG1665" class="apexcharts-radialbar-track apexcharts-track"
                                                        rel="1">
                                                        <path id="apexcharts-radialbarTrack-0"
                                                            d="M 73.83506097560974 167.17541022773656 A 68.32987804878049 68.32987804878049 0 1 1 142.16493902439026 167.17541022773656"
                                                            fill="none" fill-opacity="1"
                                                            stroke="rgba(255,255,255,0.85)" stroke-opacity="1"
                                                            stroke-linecap="butt" stroke-width="17.357317073170734"
                                                            stroke-dasharray="0" class="apexcharts-radialbar-area"
                                                            data:pathOrig="M 73.83506097560974 167.17541022773656 A 68.32987804878049 68.32987804878049 0 1 1 142.16493902439026 167.17541022773656">
                                                        </path>
                                                    </g>
                                                </g>
                                                <g id="SvgjsG1671">
                                                    <g id="SvgjsG1676" class="apexcharts-series apexcharts-radial-series"
                                                        seriesName="Growth" rel="1" data:realIndex="0">
                                                        <path id="SvgjsPath1681"
                                                            d="M 73.83506097560974 167.17541022773656 A 68.32987804878049 68.32987804878049 0 1 1 175.95555982735613 100.85758285229481"
                                                            fill="none" fill-opacity="0.85"
                                                            stroke="url(#SvgjsLinearGradient1677)" stroke-opacity="1"
                                                            stroke-linecap="butt" stroke-width="17.357317073170734"
                                                            stroke-dasharray="5"
                                                            class="apexcharts-radialbar-area apexcharts-radialbar-slice-0"
                                                            data:angle="234" data:value="78" index="0"
                                                            j="0"
                                                            data:pathOrig="M 73.83506097560974 167.17541022773656 A 68.32987804878049 68.32987804878049 0 1 1 175.95555982735613 100.85758285229481">
                                                        </path>
                                                    </g>
                                                    <circle id="SvgjsCircle1672" r="54.65121951219512" cx="108"
                                                        cy="108" class="apexcharts-radialbar-hollow"
                                                        fill="transparent"></circle>
                                                    <g id="SvgjsG1673" class="apexcharts-datalabels-group"
                                                        transform="translate(0, 0) scale(1)" style="opacity: 1;"><text
                                                            id="SvgjsText1674" font-family="Public Sans" x="108"
                                                            y="123" text-anchor="middle" dominant-baseline="auto"
                                                            font-size="15px" font-weight="500" fill="#566a7f"
                                                            class="apexcharts-text apexcharts-datalabel-label"
                                                            style="font-family: &quot;Public Sans&quot;;">Growth</text><text
                                                            id="SvgjsText1675" font-family="Public Sans" x="108"
                                                            y="99" text-anchor="middle" dominant-baseline="auto"
                                                            font-size="22px" font-weight="500" fill="#566a7f"
                                                            class="apexcharts-text apexcharts-datalabel-value"
                                                            style="font-family: &quot;Public Sans&quot;;">78%</text>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                        <line id="SvgjsLine1682" x1="0" y1="0" x2="216"
                                            y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                            stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                        <line id="SvgjsLine1683" x1="0" y1="0" x2="216"
                                            y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt"
                                            class="apexcharts-ycrosshairs-hidden"></line>
                                    </g>
                                    <g id="SvgjsG1659" class="apexcharts-annotations"></g>
                                </svg>
                                <div class="apexcharts-legend"></div>
                            </div>
                        </div>
                        <div class="text-center fw-semibold pt-3 mb-2">62% Company Growth</div>

                        <div class="d-flex px-xxl-4 px-lg-2 p-4 gap-xxl-3 gap-lg-1 gap-3 justify-content-between">
                            <div class="d-flex">
                                <div class="me-2">
                                    <span class="badge bg-label-primary p-2"><i
                                            class="bx bx-dollar text-primary"></i></span>
                                </div>
                                <div class="d-flex flex-column">
                                    <small>2022</small>
                                    <h6 class="mb-0">$32.5k</h6>
                                </div>
                            </div>
                            <div class="d-flex">
                                <div class="me-2">
                                    <span class="badge bg-label-info p-2"><i class="bx bx-wallet text-info"></i></span>
                                </div>
                                <div class="d-flex flex-column">
                                    <small>2021</small>
                                    <h6 class="mb-0">$41.2k</h6>
                                </div>
                            </div>
                        </div>
                        <div class="resize-triggers">
                            <div class="expand-trigger">
                               
                            </div>
                            <div class="contract-trigger"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ Total Revenue -->
        <div class="col-12 col-md-8 col-lg-4 order-3 order-md-2">
            <div class="row">
                <div class="col-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <img src="../assets/img/icons/unicons/paypal.png" alt="Credit Card"
                                        class="rounded">
                                </div>
                                <div class="dropdown">
                                    <button class="btn p-0" type="button" id="cardOpt4" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt4">
                                        <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                    </div>
                                </div>
                            </div>
                            <span class="d-block mb-1">Payments</span>
                            <h3 class="card-title text-nowrap mb-2">$2,456</h3>
                            <small class="text-danger fw-semibold"><i class="bx bx-down-arrow-alt"></i>
                                -14.82%</small>
                        </div>
                    </div>
                </div>
                <div class="col-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <img src="../assets/img/icons/unicons/cc-primary.png" alt="Credit Card"
                                        class="rounded">
                                </div>
                                <div class="dropdown">
                                    <button class="btn p-0" type="button" id="cardOpt1" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="cardOpt1">
                                        <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                    </div>
                                </div>
                            </div>
                            <span class="fw-semibold d-block mb-1">Transactions</span>
                            <h3 class="card-title mb-2">$14,857</h3>
                            <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i>
                                +28.14%</small>
                        </div>
                    </div>
                </div>
                <!-- </div>
                <div class="row"> -->
                <div class="col-12 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between flex-sm-row flex-column gap-3"
                                style="position: relative;">
                                <div class="d-flex flex-sm-column flex-row align-items-start justify-content-between">
                                    <div class="card-title">
                                        <h5 class="text-nowrap mb-2">Profile Report</h5>
                                        <span class="badge bg-label-warning rounded-pill">Year 2021</span>
                                    </div>
                                    <div class="mt-sm-auto">
                                        <small class="text-success text-nowrap fw-semibold"><i
                                                class="bx bx-chevron-up"></i> 68.2%</small>
                                        <h3 class="mb-0">$84,686k</h3>
                                    </div>
                                </div>
                                <div id="profileReportChart" style="min-height: 80px;">
                                    <div id="apexchartsx394zegc"
                                        class="apexcharts-canvas apexchartsx394zegc apexcharts-theme-light"
                                        style="width: 199px; height: 80px;"><svg id="SvgjsSvg1685" width="199"
                                            height="80" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                            class="apexcharts-svg" xmlns:data="ApexChartsNS"
                                            transform="translate(0, 0)" style="background: transparent;">
                                            <g id="SvgjsG1687" class="apexcharts-inner apexcharts-graphical"
                                                transform="translate(0, 0)">
                                                <defs id="SvgjsDefs1686">
                                                    <clipPath id="gridRectMaskx394zegc">
                                                        <rect id="SvgjsRect1692" width="200" height="85"
                                                            x="-4.5" y="-2.5" rx="0"
                                                            ry="0" opacity="1" stroke-width="0"
                                                            stroke="none" stroke-dasharray="0" fill="#fff">
                                                        </rect>
                                                    </clipPath>
                                                    <clipPath id="forecastMaskx394zegc"></clipPath>
                                                    <clipPath id="nonForecastMaskx394zegc"></clipPath>
                                                    <clipPath id="gridRectMarkerMaskx394zegc">
                                                        <rect id="SvgjsRect1693" width="195" height="84"
                                                            x="-2" y="-2" rx="0"
                                                            ry="0" opacity="1" stroke-width="0"
                                                            stroke="none" stroke-dasharray="0" fill="#fff">
                                                        </rect>
                                                    </clipPath>
                                                    <filter id="SvgjsFilter1699" filterUnits="userSpaceOnUse"
                                                        width="200%" height="200%" x="-50%" y="-50%">
                                                        <feFlood id="SvgjsFeFlood1700" flood-color="#ffab00"
                                                            flood-opacity="0.15" result="SvgjsFeFlood1700Out"
                                                            in="SourceGraphic"></feFlood>
                                                        <feComposite id="SvgjsFeComposite1701" in="SvgjsFeFlood1700Out"
                                                            in2="SourceAlpha" operator="in"
                                                            result="SvgjsFeComposite1701Out">
                                                        </feComposite>
                                                        <feOffset id="SvgjsFeOffset1702" dx="5" dy="10"
                                                            result="SvgjsFeOffset1702Out" in="SvgjsFeComposite1701Out">
                                                        </feOffset>
                                                        <feGaussianBlur id="SvgjsFeGaussianBlur1703" stdDeviation="3 "
                                                            result="SvgjsFeGaussianBlur1703Out"
                                                            in="SvgjsFeOffset1702Out"></feGaussianBlur>
                                                        <feMerge id="SvgjsFeMerge1704" result="SvgjsFeMerge1704Out"
                                                            in="SourceGraphic">
                                                            <feMergeNode id="SvgjsFeMergeNode1705"
                                                                in="SvgjsFeGaussianBlur1703Out"></feMergeNode>
                                                            <feMergeNode id="SvgjsFeMergeNode1706"
                                                                in="[object Arguments]"></feMergeNode>
                                                        </feMerge>
                                                        <feBlend id="SvgjsFeBlend1707" in="SourceGraphic"
                                                            in2="SvgjsFeMerge1704Out" mode="normal"
                                                            result="SvgjsFeBlend1707Out"></feBlend>
                                                    </filter>
                                                </defs>
                                                <line id="SvgjsLine1691" x1="0" y1="0"
                                                    x2="0" y2="80" stroke="#b6b6b6"
                                                    stroke-dasharray="3" stroke-linecap="butt"
                                                    class="apexcharts-xcrosshairs" x="0" y="0"
                                                    width="1" height="80" fill="#b1b9c4" filter="none"
                                                    fill-opacity="0.9" stroke-width="1"></line>
                                                <g id="SvgjsG1708" class="apexcharts-xaxis"
                                                    transform="translate(0, 0)">
                                                    <g id="SvgjsG1709" class="apexcharts-xaxis-texts-g"
                                                        transform="translate(0, -4)"></g>
                                                </g>
                                                <g id="SvgjsG1717" class="apexcharts-grid">
                                                    <g id="SvgjsG1718" class="apexcharts-gridlines-horizontal"
                                                        style="display: none;">
                                                        <line id="SvgjsLine1720" x1="0" y1="0"
                                                            x2="191" y2="0" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1721" x1="0" y1="20"
                                                            x2="191" y2="20" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1722" x1="0" y1="40"
                                                            x2="191" y2="40" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1723" x1="0" y1="60"
                                                            x2="191" y2="60" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1724" x1="0" y1="80"
                                                            x2="191" y2="80" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                    </g>
                                                    <g id="SvgjsG1719" class="apexcharts-gridlines-vertical"
                                                        style="display: none;"></g>
                                                    <line id="SvgjsLine1726" x1="0" y1="80"
                                                        x2="191" y2="80" stroke="transparent"
                                                        stroke-dasharray="0" stroke-linecap="butt"></line>
                                                    <line id="SvgjsLine1725" x1="0" y1="1"
                                                        x2="0" y2="80" stroke="transparent"
                                                        stroke-dasharray="0" stroke-linecap="butt"></line>
                                                </g>
                                                <g id="SvgjsG1694"
                                                    class="apexcharts-line-series apexcharts-plot-series">
                                                    <g id="SvgjsG1695" class="apexcharts-series" seriesName="seriesx1"
                                                        data:longestSeries="true" rel="1" data:realIndex="0">
                                                        <path id="SvgjsPath1698"
                                                            d="M 0 76C 13.370000000000001 76 24.830000000000002 12 38.2 12C 51.57000000000001 12 63.03 62 76.4 62C 89.77 62 101.23 22 114.6 22C 127.97 22 139.43 38 152.8 38C 166.17000000000002 38 177.63 6 191 6"
                                                            fill="none" fill-opacity="1"
                                                            stroke="rgba(255,171,0,0.85)" stroke-opacity="1"
                                                            stroke-linecap="butt" stroke-width="5"
                                                            stroke-dasharray="0" class="apexcharts-line"
                                                            index="0" clip-path="url(#gridRectMaskx394zegc)"
                                                            filter="url(#SvgjsFilter1699)"
                                                            pathTo="M 0 76C 13.370000000000001 76 24.830000000000002 12 38.2 12C 51.57000000000001 12 63.03 62 76.4 62C 89.77 62 101.23 22 114.6 22C 127.97 22 139.43 38 152.8 38C 166.17000000000002 38 177.63 6 191 6"
                                                            pathFrom="M -1 120L -1 120L 38.2 120L 76.4 120L 114.6 120L 152.8 120L 191 120">
                                                        </path>
                                                        <g id="SvgjsG1696" class="apexcharts-series-markers-wrap"
                                                            data:realIndex="0">
                                                            <g class="apexcharts-series-markers">
                                                                <circle id="SvgjsCircle1732" r="0"
                                                                    cx="0" cy="0"
                                                                    class="apexcharts-marker w0jcg8bfl no-pointer-events"
                                                                    stroke="#ffffff" fill="#ffab00" fill-opacity="1"
                                                                    stroke-width="2" stroke-opacity="0.9"
                                                                    default-marker-size="0">
                                                                </circle>
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g id="SvgjsG1697" class="apexcharts-datalabels"
                                                        data:realIndex="0"></g>
                                                </g>
                                                <line id="SvgjsLine1727" x1="0" y1="0"
                                                    x2="191" y2="0" stroke="#b6b6b6"
                                                    stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"
                                                    class="apexcharts-ycrosshairs"></line>
                                                <line id="SvgjsLine1728" x1="0" y1="0"
                                                    x2="191" y2="0" stroke-dasharray="0"
                                                    stroke-width="0" stroke-linecap="butt"
                                                    class="apexcharts-ycrosshairs-hidden"></line>
                                                <g id="SvgjsG1729" class="apexcharts-yaxis-annotations"></g>
                                                <g id="SvgjsG1730" class="apexcharts-xaxis-annotations"></g>
                                                <g id="SvgjsG1731" class="apexcharts-point-annotations"></g>
                                            </g>
                                            <rect id="SvgjsRect1690" width="0" height="0" x="0"
                                                y="0" rx="0" ry="0" opacity="1"
                                                stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe">
                                            </rect>
                                            <g id="SvgjsG1716" class="apexcharts-yaxis" rel="0"
                                                transform="translate(-18, 0)"></g>
                                            <g id="SvgjsG1688" class="apexcharts-annotations"></g>
                                        </svg>
                                        <div class="apexcharts-legend" style="max-height: 40px;"></div>
                                        <div class="apexcharts-tooltip apexcharts-theme-light">
                                            <div class="apexcharts-tooltip-title"
                                                style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                            </div>
                                            <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                                    class="apexcharts-tooltip-marker"
                                                    style="background-color: rgb(255, 171, 0);"></span>
                                                <div class="apexcharts-tooltip-text"
                                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                    <div class="apexcharts-tooltip-y-group"><span
                                                            class="apexcharts-tooltip-text-y-label"></span><span
                                                            class="apexcharts-tooltip-text-y-value"></span></div>
                                                    <div class="apexcharts-tooltip-goals-group"><span
                                                            class="apexcharts-tooltip-text-goals-label"></span><span
                                                            class="apexcharts-tooltip-text-goals-value"></span></div>
                                                    <div class="apexcharts-tooltip-z-group"><span
                                                            class="apexcharts-tooltip-text-z-label"></span><span
                                                            class="apexcharts-tooltip-text-z-value"></span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                            <div class="apexcharts-yaxistooltip-text"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="resize-triggers">
                                    <div class="expand-trigger">
                                     
                                    </div>
                                    <div class="contract-trigger"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <!-- Order Statistics -->
        <div class="col-md-6 col-lg-4 col-xl-4 order-0 mb-4">
            <div class="card h-100">
                <div class="card-header d-flex align-items-center justify-content-between pb-0">
                    <div class="card-title mb-0">
                        <h5 class="m-0 me-2">Order Statistics</h5>
                        <small class="text-muted">42.82k Total Sales</small>
                    </div>
                    <div class="dropdown">
                        <button class="btn p-0" type="button" id="orederStatistics" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="orederStatistics">
                            <a class="dropdown-item" href="javascript:void(0);">Select All</a>
                            <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                            <a class="dropdown-item" href="javascript:void(0);">Share</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-3" style="position: relative;">
                        <div class="d-flex flex-column align-items-center gap-1">
                            <h2 class="mb-2">8,258</h2>
                            <span>Total Orders</span>
                        </div>
                        <div id="orderStatisticsChart" style="min-height: 137.55px;">
                            <div id="apexchartscije1enu"
                                class="apexcharts-canvas apexchartscije1enu apexcharts-theme-light"
                                style="width: 130px; height: 137.55px;"><svg id="SvgjsSvg1733" width="130"
                                    height="137.55" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                    class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                    style="background: transparent;">
                                    <g id="SvgjsG1735" class="apexcharts-inner apexcharts-graphical"
                                        transform="translate(-7, 0)">
                                        <defs id="SvgjsDefs1734">
                                            <clipPath id="gridRectMaskcije1enu">
                                                <rect id="SvgjsRect1737" width="150" height="173"
                                                    x="-4.5" y="-2.5" rx="0" ry="0"
                                                    opacity="1" stroke-width="0" stroke="none"
                                                    stroke-dasharray="0" fill="#fff"></rect>
                                            </clipPath>
                                            <clipPath id="forecastMaskcije1enu"></clipPath>
                                            <clipPath id="nonForecastMaskcije1enu"></clipPath>
                                            <clipPath id="gridRectMarkerMaskcije1enu">
                                                <rect id="SvgjsRect1738" width="145" height="172"
                                                    x="-2" y="-2" rx="0" ry="0"
                                                    opacity="1" stroke-width="0" stroke="none"
                                                    stroke-dasharray="0" fill="#fff"></rect>
                                            </clipPath>
                                        </defs>
                                        <g id="SvgjsG1739" class="apexcharts-pie">
                                            <g id="SvgjsG1740" transform="translate(0, 0) scale(1)">
                                                <circle id="SvgjsCircle1741" r="44.835365853658544" cx="70.5"
                                                    cy="70.5" fill="transparent"></circle>
                                                <g id="SvgjsG1742" class="apexcharts-slices">
                                                    <g id="SvgjsG1743" class="apexcharts-series apexcharts-pie-series"
                                                        seriesName="Electronic" rel="1" data:realIndex="0">
                                                        <path id="SvgjsPath1744"
                                                            d="M 70.5 10.71951219512195 A 59.78048780487805 59.78048780487805 0 0 1 97.63977353321047 123.7648046533095 L 90.85483014990785 110.44860348998213 A 44.835365853658544 44.835365853658544 0 0 0 70.5 25.664634146341456 L 70.5 10.71951219512195 z"
                                                            fill="rgba(105,108,255,1)" fill-opacity="1"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="5"
                                                            stroke-dasharray="0"
                                                            class="apexcharts-pie-area apexcharts-donut-slice-0"
                                                            index="0" j="0" data:angle="153"
                                                            data:startAngle="0" data:strokeWidth="5" data:value="85"
                                                            data:pathOrig="M 70.5 10.71951219512195 A 59.78048780487805 59.78048780487805 0 0 1 97.63977353321047 123.7648046533095 L 90.85483014990785 110.44860348998213 A 44.835365853658544 44.835365853658544 0 0 0 70.5 25.664634146341456 L 70.5 10.71951219512195 z"
                                                            stroke="#ffffff"></path>
                                                    </g>
                                                    <g id="SvgjsG1745" class="apexcharts-series apexcharts-pie-series"
                                                        seriesName="Sports" rel="2" data:realIndex="1">
                                                        <path id="SvgjsPath1746"
                                                            d="M 97.63977353321047 123.7648046533095 A 59.78048780487805 59.78048780487805 0 0 1 70.5 130.28048780487805 L 70.5 115.33536585365854 A 44.835365853658544 44.835365853658544 0 0 0 90.85483014990785 110.44860348998213 L 97.63977353321047 123.7648046533095 z"
                                                            fill="rgba(133,146,163,1)" fill-opacity="1"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="5"
                                                            stroke-dasharray="0"
                                                            class="apexcharts-pie-area apexcharts-donut-slice-1"
                                                            index="0" j="1" data:angle="27"
                                                            data:startAngle="153" data:strokeWidth="5" data:value="15"
                                                            data:pathOrig="M 97.63977353321047 123.7648046533095 A 59.78048780487805 59.78048780487805 0 0 1 70.5 130.28048780487805 L 70.5 115.33536585365854 A 44.835365853658544 44.835365853658544 0 0 0 90.85483014990785 110.44860348998213 L 97.63977353321047 123.7648046533095 z"
                                                            stroke="#ffffff"></path>
                                                    </g>
                                                    <g id="SvgjsG1747" class="apexcharts-series apexcharts-pie-series"
                                                        seriesName="Decor" rel="3" data:realIndex="2">
                                                        <path id="SvgjsPath1748"
                                                            d="M 70.5 130.28048780487805 A 59.78048780487805 59.78048780487805 0 0 1 10.71951219512195 70.50000000000001 L 25.664634146341456 70.5 A 44.835365853658544 44.835365853658544 0 0 0 70.5 115.33536585365854 L 70.5 130.28048780487805 z"
                                                            fill="rgba(3,195,236,1)" fill-opacity="1"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="5"
                                                            stroke-dasharray="0"
                                                            class="apexcharts-pie-area apexcharts-donut-slice-2"
                                                            index="0" j="2" data:angle="90"
                                                            data:startAngle="180" data:strokeWidth="5" data:value="50"
                                                            data:pathOrig="M 70.5 130.28048780487805 A 59.78048780487805 59.78048780487805 0 0 1 10.71951219512195 70.50000000000001 L 25.664634146341456 70.5 A 44.835365853658544 44.835365853658544 0 0 0 70.5 115.33536585365854 L 70.5 130.28048780487805 z"
                                                            stroke="#ffffff"></path>
                                                    </g>
                                                    <g id="SvgjsG1749" class="apexcharts-series apexcharts-pie-series"
                                                        seriesName="Fashion" rel="4" data:realIndex="3">
                                                        <path id="SvgjsPath1750"
                                                            d="M 10.71951219512195 70.50000000000001 A 59.78048780487805 59.78048780487805 0 0 1 70.48956633664653 10.719513105630845 L 70.4921747524849 25.664634829223125 A 44.835365853658544 44.835365853658544 0 0 0 25.664634146341456 70.5 L 10.71951219512195 70.50000000000001 z"
                                                            fill="rgba(113,221,55,1)" fill-opacity="1"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="5"
                                                            stroke-dasharray="0"
                                                            class="apexcharts-pie-area apexcharts-donut-slice-3"
                                                            index="0" j="3" data:angle="90"
                                                            data:startAngle="270" data:strokeWidth="5" data:value="50"
                                                            data:pathOrig="M 10.71951219512195 70.50000000000001 A 59.78048780487805 59.78048780487805 0 0 1 70.48956633664653 10.719513105630845 L 70.4921747524849 25.664634829223125 A 44.835365853658544 44.835365853658544 0 0 0 25.664634146341456 70.5 L 10.71951219512195 70.50000000000001 z"
                                                            stroke="#ffffff"></path>
                                                    </g>
                                                </g>
                                            </g>
                                            <g id="SvgjsG1751" class="apexcharts-datalabels-group"
                                                transform="translate(0, 0) scale(1)"><text id="SvgjsText1752"
                                                    font-family="Helvetica, Arial, sans-serif" x="70.5"
                                                    y="90.5" text-anchor="middle" dominant-baseline="auto"
                                                    font-size="0.8125rem" font-weight="400" fill="#a1acb8"
                                                    class="apexcharts-text apexcharts-datalabel-label"
                                                    style="font-family: Helvetica, Arial, sans-serif;">Weekly</text><text
                                                    id="SvgjsText1753" font-family="Public Sans" x="70.5"
                                                    y="71.5" text-anchor="middle" dominant-baseline="auto"
                                                    font-size="1.5rem" font-weight="400" fill="#566a7f"
                                                    class="apexcharts-text apexcharts-datalabel-value"
                                                    style="font-family: &quot;Public Sans&quot;;">38%</text></g>
                                        </g>
                                        <line id="SvgjsLine1754" x1="0" y1="0" x2="141"
                                            y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                            stroke-linecap="butt" class="apexcharts-ycrosshairs">
                                        </line>
                                        <line id="SvgjsLine1755" x1="0" y1="0" x2="141"
                                            y2="0" stroke-dasharray="0" stroke-width="0"
                                            stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                    </g>
                                    <g id="SvgjsG1736" class="apexcharts-annotations"></g>
                                </svg>
                                <div class="apexcharts-legend"></div>
                                <div class="apexcharts-tooltip apexcharts-theme-dark">
                                    <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                            class="apexcharts-tooltip-marker"
                                            style="background-color: rgb(105, 108, 255);"></span>
                                        <div class="apexcharts-tooltip-text"
                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                            <div class="apexcharts-tooltip-y-group"><span
                                                    class="apexcharts-tooltip-text-y-label"></span><span
                                                    class="apexcharts-tooltip-text-y-value"></span></div>
                                            <div class="apexcharts-tooltip-goals-group"><span
                                                    class="apexcharts-tooltip-text-goals-label"></span><span
                                                    class="apexcharts-tooltip-text-goals-value"></span></div>
                                            <div class="apexcharts-tooltip-z-group"><span
                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                    class="apexcharts-tooltip-text-z-value"></span></div>
                                        </div>
                                    </div>
                                    <div class="apexcharts-tooltip-series-group" style="order: 2;"><span
                                            class="apexcharts-tooltip-marker"
                                            style="background-color: rgb(133, 146, 163);"></span>
                                        <div class="apexcharts-tooltip-text"
                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                            <div class="apexcharts-tooltip-y-group"><span
                                                    class="apexcharts-tooltip-text-y-label"></span><span
                                                    class="apexcharts-tooltip-text-y-value"></span></div>
                                            <div class="apexcharts-tooltip-goals-group"><span
                                                    class="apexcharts-tooltip-text-goals-label"></span><span
                                                    class="apexcharts-tooltip-text-goals-value"></span></div>
                                            <div class="apexcharts-tooltip-z-group"><span
                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                    class="apexcharts-tooltip-text-z-value"></span></div>
                                        </div>
                                    </div>
                                    <div class="apexcharts-tooltip-series-group" style="order: 3;"><span
                                            class="apexcharts-tooltip-marker"
                                            style="background-color: rgb(3, 195, 236);"></span>
                                        <div class="apexcharts-tooltip-text"
                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                            <div class="apexcharts-tooltip-y-group"><span
                                                    class="apexcharts-tooltip-text-y-label"></span><span
                                                    class="apexcharts-tooltip-text-y-value"></span></div>
                                            <div class="apexcharts-tooltip-goals-group"><span
                                                    class="apexcharts-tooltip-text-goals-label"></span><span
                                                    class="apexcharts-tooltip-text-goals-value"></span></div>
                                            <div class="apexcharts-tooltip-z-group"><span
                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                    class="apexcharts-tooltip-text-z-value"></span></div>
                                        </div>
                                    </div>
                                    <div class="apexcharts-tooltip-series-group" style="order: 4;"><span
                                            class="apexcharts-tooltip-marker"
                                            style="background-color: rgb(113, 221, 55);"></span>
                                        <div class="apexcharts-tooltip-text"
                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                            <div class="apexcharts-tooltip-y-group"><span
                                                    class="apexcharts-tooltip-text-y-label"></span><span
                                                    class="apexcharts-tooltip-text-y-value"></span></div>
                                            <div class="apexcharts-tooltip-goals-group"><span
                                                    class="apexcharts-tooltip-text-goals-label"></span><span
                                                    class="apexcharts-tooltip-text-goals-value"></span></div>
                                            <div class="apexcharts-tooltip-z-group"><span
                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                    class="apexcharts-tooltip-text-z-value"></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="resize-triggers">
                            <div class="expand-trigger">
                               
                            </div>
                            <div class="contract-trigger"></div>
                        </div>
                    </div>
                    <ul class="p-0 m-0">
                        <li class="d-flex mb-4 pb-1">
                            <div class="avatar flex-shrink-0 me-3">
                                <span class="avatar-initial rounded bg-label-primary"><i
                                        class="bx bx-mobile-alt"></i></span>
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <h6 class="mb-0">Electronic</h6>
                                    <small class="text-muted">Mobile, Earbuds, TV</small>
                                </div>
                                <div class="user-progress">
                                    <small class="fw-semibold">82.5k</small>
                                </div>
                            </div>
                        </li>
                        <li class="d-flex mb-4 pb-1">
                            <div class="avatar flex-shrink-0 me-3">
                                <span class="avatar-initial rounded bg-label-success"><i
                                        class="bx bx-closet"></i></span>
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <h6 class="mb-0">Fashion</h6>
                                    <small class="text-muted">T-shirt, Jeans, Shoes</small>
                                </div>
                                <div class="user-progress">
                                    <small class="fw-semibold">23.8k</small>
                                </div>
                            </div>
                        </li>
                        <li class="d-flex mb-4 pb-1">
                            <div class="avatar flex-shrink-0 me-3">
                                <span class="avatar-initial rounded bg-label-info"><i class="bx bx-home-alt"></i></span>
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <h6 class="mb-0">Decor</h6>
                                    <small class="text-muted">Fine Art, Dining</small>
                                </div>
                                <div class="user-progress">
                                    <small class="fw-semibold">849k</small>
                                </div>
                            </div>
                        </li>
                        <li class="d-flex">
                            <div class="avatar flex-shrink-0 me-3">
                                <span class="avatar-initial rounded bg-label-secondary"><i
                                        class="bx bx-football"></i></span>
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <h6 class="mb-0">Sports</h6>
                                    <small class="text-muted">Football, Cricket Kit</small>
                                </div>
                                <div class="user-progress">
                                    <small class="fw-semibold">99</small>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--/ Order Statistics -->

        <!-- Expense Overview -->
        <div class="col-md-6 col-lg-4 order-1 mb-4">
            <div class="card h-100">
                <div class="card-header">
                    <ul class="nav nav-pills" role="tablist">
                        <li class="nav-item">
                            <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab"
                                data-bs-target="#navs-tabs-line-card-income" aria-controls="navs-tabs-line-card-income"
                                aria-selected="true">Income</button>
                        </li>
                        <li class="nav-item">
                            <button type="button" class="nav-link" role="tab">Expenses</button>
                        </li>
                        <li class="nav-item">
                            <button type="button" class="nav-link" role="tab">Profit</button>
                        </li>
                    </ul>
                </div>
                <div class="card-body px-0">
                    <div class="tab-content p-0">
                        <div class="tab-pane fade show active" id="navs-tabs-line-card-income" role="tabpanel"
                            style="position: relative;">
                            <div class="d-flex p-4 pt-3">
                                <div class="avatar flex-shrink-0 me-3">
                                    <img src="../assets/img/icons/unicons/wallet.png" alt="User">
                                </div>
                                <div>
                                    <small class="text-muted d-block">Total Balance</small>
                                    <div class="d-flex align-items-center">
                                        <h6 class="mb-0 me-1">$459.10</h6>
                                        <small class="text-success fw-semibold">
                                            <i class="bx bx-chevron-up"></i>
                                            42.9%
                                        </small>
                                    </div>
                                </div>
                            </div>
                            <div id="incomeChart" style="min-height: 215px;">
                                <div id="apexcharts70wutc7m"
                                    class="apexcharts-canvas apexcharts70wutc7m apexcharts-theme-light"
                                    style="width: 385px; height: 215px;"><svg id="SvgjsSvg1756" width="385"
                                        height="215" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                        class="apexcharts-svg apexcharts-zoomable" xmlns:data="ApexChartsNS"
                                        transform="translate(0, 0)" style="background: transparent;">
                                        <g id="SvgjsG1758" class="apexcharts-inner apexcharts-graphical"
                                            transform="translate(0, 10)">
                                            <defs id="SvgjsDefs1757">
                                                <clipPath id="gridRectMask70wutc7m">
                                                    <rect id="SvgjsRect1763" width="373.6875"
                                                        height="176.70079907417298" x="-3" y="-1"
                                                        rx="0" ry="0" opacity="1"
                                                        stroke-width="0" stroke="none" stroke-dasharray="0"
                                                        fill="#fff"></rect>
                                                </clipPath>
                                                <clipPath id="forecastMask70wutc7m"></clipPath>
                                                <clipPath id="nonForecastMask70wutc7m"></clipPath>
                                                <clipPath id="gridRectMarkerMask70wutc7m">
                                                    <rect id="SvgjsRect1764" width="395.6875"
                                                        height="202.70079907417298" x="-14" y="-14"
                                                        rx="0" ry="0" opacity="1"
                                                        stroke-width="0" stroke="none" stroke-dasharray="0"
                                                        fill="#fff"></rect>
                                                </clipPath>
                                                <linearGradient id="SvgjsLinearGradient1784" x1="0"
                                                    y1="0" x2="0" y2="1">
                                                    <stop id="SvgjsStop1785" stop-opacity="0.5"
                                                        stop-color="rgba(105,108,255,0.5)" offset="0"></stop>
                                                    <stop id="SvgjsStop1786" stop-opacity="0.25"
                                                        stop-color="rgba(195,196,255,0.25)" offset="0.95"></stop>
                                                    <stop id="SvgjsStop1787" stop-opacity="0.25"
                                                        stop-color="rgba(195,196,255,0.25)" offset="1"></stop>
                                                </linearGradient>
                                            </defs>
                                            <line id="SvgjsLine1762" x1="0" y1="0" x2="0"
                                                y2="174.70079907417298" stroke="#b6b6b6" stroke-dasharray="3"
                                                stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0"
                                                y="0" width="1" height="174.70079907417298"
                                                fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1">
                                            </line>
                                            <g id="SvgjsG1790" class="apexcharts-xaxis" transform="translate(0, 0)">
                                                <g id="SvgjsG1791" class="apexcharts-xaxis-texts-g"
                                                    transform="translate(0, -4)"><text id="SvgjsText1793"
                                                        font-family="Helvetica, Arial, sans-serif" x="0"
                                                        y="203.70079907417298" text-anchor="middle"
                                                        dominant-baseline="auto" font-size="13px" font-weight="400"
                                                        fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1794"></tspan>
                                                        <title></title>
                                                    </text><text id="SvgjsText1796"
                                                        font-family="Helvetica, Arial, sans-serif" x="52.52678571428571"
                                                        y="203.70079907417298" text-anchor="middle"
                                                        dominant-baseline="auto" font-size="13px" font-weight="400"
                                                        fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1797">Jan</tspan>
                                                        <title>Jan</title>
                                                    </text><text id="SvgjsText1799"
                                                        font-family="Helvetica, Arial, sans-serif"
                                                        x="105.05357142857142" y="203.70079907417298"
                                                        text-anchor="middle" dominant-baseline="auto" font-size="13px"
                                                        font-weight="400" fill="#a1acb8"
                                                        class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1800">Feb</tspan>
                                                        <title>Feb</title>
                                                    </text><text id="SvgjsText1802"
                                                        font-family="Helvetica, Arial, sans-serif"
                                                        x="157.58035714285714" y="203.70079907417298"
                                                        text-anchor="middle" dominant-baseline="auto" font-size="13px"
                                                        font-weight="400" fill="#a1acb8"
                                                        class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1803">Mar</tspan>
                                                        <title>Mar</title>
                                                    </text><text id="SvgjsText1805"
                                                        font-family="Helvetica, Arial, sans-serif"
                                                        x="210.10714285714286" y="203.70079907417298"
                                                        text-anchor="middle" dominant-baseline="auto" font-size="13px"
                                                        font-weight="400" fill="#a1acb8"
                                                        class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1806">Apr</tspan>
                                                        <title>Apr</title>
                                                    </text><text id="SvgjsText1808"
                                                        font-family="Helvetica, Arial, sans-serif" x="262.6339285714286"
                                                        y="203.70079907417298" text-anchor="middle"
                                                        dominant-baseline="auto" font-size="13px" font-weight="400"
                                                        fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1809">May</tspan>
                                                        <title>May</title>
                                                    </text><text id="SvgjsText1811"
                                                        font-family="Helvetica, Arial, sans-serif"
                                                        x="315.16071428571433" y="203.70079907417298"
                                                        text-anchor="middle" dominant-baseline="auto" font-size="13px"
                                                        font-weight="400" fill="#a1acb8"
                                                        class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1812">Jun</tspan>
                                                        <title>Jun</title>
                                                    </text><text id="SvgjsText1814"
                                                        font-family="Helvetica, Arial, sans-serif"
                                                        x="367.68750000000006" y="203.70079907417298"
                                                        text-anchor="middle" dominant-baseline="auto" font-size="13px"
                                                        font-weight="400" fill="#a1acb8"
                                                        class="apexcharts-text apexcharts-xaxis-label "
                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan1815">Jul</tspan>
                                                        <title>Jul</title>
                                                    </text></g>
                                            </g>
                                            <g id="SvgjsG1818" class="apexcharts-grid">
                                                <g id="SvgjsG1819" class="apexcharts-gridlines-horizontal">
                                                    <line id="SvgjsLine1821" x1="0" y1="0"
                                                        x2="367.6875" y2="0" stroke="#eceef1"
                                                        stroke-dasharray="3" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1822" x1="0" y1="43.675199768543244"
                                                        x2="367.6875" y2="43.675199768543244" stroke="#eceef1"
                                                        stroke-dasharray="3" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1823" x1="0" y1="87.35039953708649"
                                                        x2="367.6875" y2="87.35039953708649" stroke="#eceef1"
                                                        stroke-dasharray="3" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1824" x1="0" y1="131.02559930562973"
                                                        x2="367.6875" y2="131.02559930562973" stroke="#eceef1"
                                                        stroke-dasharray="3" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine1825" x1="0" y1="174.70079907417298"
                                                        x2="367.6875" y2="174.70079907417298" stroke="#eceef1"
                                                        stroke-dasharray="3" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                </g>
                                                <g id="SvgjsG1820" class="apexcharts-gridlines-vertical"></g>
                                                <line id="SvgjsLine1827" x1="0" y1="174.70079907417298"
                                                    x2="367.6875" y2="174.70079907417298" stroke="transparent"
                                                    stroke-dasharray="0" stroke-linecap="butt"></line>
                                                <line id="SvgjsLine1826" x1="0" y1="1"
                                                    x2="0" y2="174.70079907417298" stroke="transparent"
                                                    stroke-dasharray="0" stroke-linecap="butt"></line>
                                            </g>
                                            <g id="SvgjsG1765" class="apexcharts-area-series apexcharts-plot-series">
                                                <g id="SvgjsG1766" class="apexcharts-series" seriesName="seriesx1"
                                                    data:longestSeries="true" rel="1" data:realIndex="0">
                                                    <path id="SvgjsPath1788"
                                                        d="M 0 174.70079907417298L 0 113.55551939821244C 18.384375 113.55551939821244 34.14241071428572 126.65807932877541 52.526785714285715 126.65807932877541C 70.91116071428571 126.65807932877541 86.66919642857144 87.3503995370865 105.05357142857143 87.3503995370865C 123.43794642857142 87.3503995370865 139.19598214285713 122.29055935192109 157.58035714285714 122.29055935192109C 175.96473214285714 122.29055935192109 191.72276785714286 34.9401598148346 210.10714285714286 34.9401598148346C 228.49151785714287 34.9401598148346 244.24955357142858 104.82047944450379 262.63392857142856 104.82047944450379C 281.01830357142853 104.82047944450379 296.7763392857143 65.51279965281486 315.1607142857143 65.51279965281486C 333.54508928571425 65.51279965281486 349.303125 91.71791951394081 367.6875 91.71791951394081C 367.6875 91.71791951394081 367.6875 91.71791951394081 367.6875 174.70079907417298M 367.6875 91.71791951394081z"
                                                        fill="url(#SvgjsLinearGradient1784)" fill-opacity="1"
                                                        stroke-opacity="1" stroke-linecap="butt" stroke-width="0"
                                                        stroke-dasharray="0" class="apexcharts-area" index="0"
                                                        clip-path="url(#gridRectMask70wutc7m)"
                                                        pathTo="M 0 174.70079907417298L 0 113.55551939821244C 18.384375 113.55551939821244 34.14241071428572 126.65807932877541 52.526785714285715 126.65807932877541C 70.91116071428571 126.65807932877541 86.66919642857144 87.3503995370865 105.05357142857143 87.3503995370865C 123.43794642857142 87.3503995370865 139.19598214285713 122.29055935192109 157.58035714285714 122.29055935192109C 175.96473214285714 122.29055935192109 191.72276785714286 34.9401598148346 210.10714285714286 34.9401598148346C 228.49151785714287 34.9401598148346 244.24955357142858 104.82047944450379 262.63392857142856 104.82047944450379C 281.01830357142853 104.82047944450379 296.7763392857143 65.51279965281486 315.1607142857143 65.51279965281486C 333.54508928571425 65.51279965281486 349.303125 91.71791951394081 367.6875 91.71791951394081C 367.6875 91.71791951394081 367.6875 91.71791951394081 367.6875 174.70079907417298M 367.6875 91.71791951394081z"
                                                        pathFrom="M -1 218.37599884271623L -1 218.37599884271623L 52.526785714285715 218.37599884271623L 105.05357142857143 218.37599884271623L 157.58035714285714 218.37599884271623L 210.10714285714286 218.37599884271623L 262.63392857142856 218.37599884271623L 315.1607142857143 218.37599884271623L 367.6875 218.37599884271623">
                                                    </path>
                                                    <path id="SvgjsPath1789"
                                                        d="M 0 113.55551939821244C 18.384375 113.55551939821244 34.14241071428572 126.65807932877541 52.526785714285715 126.65807932877541C 70.91116071428571 126.65807932877541 86.66919642857144 87.3503995370865 105.05357142857143 87.3503995370865C 123.43794642857142 87.3503995370865 139.19598214285713 122.29055935192109 157.58035714285714 122.29055935192109C 175.96473214285714 122.29055935192109 191.72276785714286 34.9401598148346 210.10714285714286 34.9401598148346C 228.49151785714287 34.9401598148346 244.24955357142858 104.82047944450379 262.63392857142856 104.82047944450379C 281.01830357142853 104.82047944450379 296.7763392857143 65.51279965281486 315.1607142857143 65.51279965281486C 333.54508928571425 65.51279965281486 349.303125 91.71791951394081 367.6875 91.71791951394081"
                                                        fill="none" fill-opacity="1" stroke="#696cff"
                                                        stroke-opacity="1" stroke-linecap="butt" stroke-width="2"
                                                        stroke-dasharray="0" class="apexcharts-area" index="0"
                                                        clip-path="url(#gridRectMask70wutc7m)"
                                                        pathTo="M 0 113.55551939821244C 18.384375 113.55551939821244 34.14241071428572 126.65807932877541 52.526785714285715 126.65807932877541C 70.91116071428571 126.65807932877541 86.66919642857144 87.3503995370865 105.05357142857143 87.3503995370865C 123.43794642857142 87.3503995370865 139.19598214285713 122.29055935192109 157.58035714285714 122.29055935192109C 175.96473214285714 122.29055935192109 191.72276785714286 34.9401598148346 210.10714285714286 34.9401598148346C 228.49151785714287 34.9401598148346 244.24955357142858 104.82047944450379 262.63392857142856 104.82047944450379C 281.01830357142853 104.82047944450379 296.7763392857143 65.51279965281486 315.1607142857143 65.51279965281486C 333.54508928571425 65.51279965281486 349.303125 91.71791951394081 367.6875 91.71791951394081"
                                                        pathFrom="M -1 218.37599884271623L -1 218.37599884271623L 52.526785714285715 218.37599884271623L 105.05357142857143 218.37599884271623L 157.58035714285714 218.37599884271623L 210.10714285714286 218.37599884271623L 262.63392857142856 218.37599884271623L 315.1607142857143 218.37599884271623L 367.6875 218.37599884271623">
                                                    </path>
                                                    <g id="SvgjsG1767" class="apexcharts-series-markers-wrap"
                                                        data:realIndex="0">
                                                        <g id="SvgjsG1769" class="apexcharts-series-markers"
                                                            clip-path="url(#gridRectMarkerMask70wutc7m)">
                                                            <circle id="SvgjsCircle1770" r="6" cx="0"
                                                                cy="113.55551939821244"
                                                                class="apexcharts-marker no-pointer-events wyw6z4n65"
                                                                stroke="transparent" fill="transparent"
                                                                fill-opacity="1" stroke-width="4" stroke-opacity="0.9"
                                                                rel="0" j="0" index="0"
                                                                default-marker-size="6"></circle>
                                                            <circle id="SvgjsCircle1771" r="6"
                                                                cx="52.526785714285715" cy="126.65807932877541"
                                                                class="apexcharts-marker no-pointer-events w7mjrr1rf"
                                                                stroke="transparent" fill="transparent"
                                                                fill-opacity="1" stroke-width="4" stroke-opacity="0.9"
                                                                rel="1" j="1" index="0"
                                                                default-marker-size="6"></circle>
                                                        </g>
                                                        <g id="SvgjsG1772" class="apexcharts-series-markers"
                                                            clip-path="url(#gridRectMarkerMask70wutc7m)">
                                                            <circle id="SvgjsCircle1773" r="6"
                                                                cx="105.05357142857143" cy="87.3503995370865"
                                                                class="apexcharts-marker no-pointer-events whn5sadysi"
                                                                stroke="transparent" fill="transparent"
                                                                fill-opacity="1" stroke-width="4" stroke-opacity="0.9"
                                                                rel="2" j="2" index="0"
                                                                default-marker-size="6"></circle>
                                                        </g>
                                                        <g id="SvgjsG1774" class="apexcharts-series-markers"
                                                            clip-path="url(#gridRectMarkerMask70wutc7m)">
                                                            <circle id="SvgjsCircle1775" r="6"
                                                                cx="157.58035714285714" cy="122.29055935192109"
                                                                class="apexcharts-marker no-pointer-events w2gufz3ub"
                                                                stroke="transparent" fill="transparent"
                                                                fill-opacity="1" stroke-width="4" stroke-opacity="0.9"
                                                                rel="3" j="3" index="0"
                                                                default-marker-size="6"></circle>
                                                        </g>
                                                        <g id="SvgjsG1776" class="apexcharts-series-markers"
                                                            clip-path="url(#gridRectMarkerMask70wutc7m)">
                                                            <circle id="SvgjsCircle1777" r="6"
                                                                cx="210.10714285714286" cy="34.9401598148346"
                                                                class="apexcharts-marker no-pointer-events w7vsrk94e"
                                                                stroke="transparent" fill="transparent"
                                                                fill-opacity="1" stroke-width="4" stroke-opacity="0.9"
                                                                rel="4" j="4" index="0"
                                                                default-marker-size="6"></circle>
                                                        </g>
                                                        <g id="SvgjsG1778" class="apexcharts-series-markers"
                                                            clip-path="url(#gridRectMarkerMask70wutc7m)">
                                                            <circle id="SvgjsCircle1779" r="6"
                                                                cx="262.63392857142856" cy="104.82047944450379"
                                                                class="apexcharts-marker no-pointer-events wblmxnrvv"
                                                                stroke="transparent" fill="transparent"
                                                                fill-opacity="1" stroke-width="4" stroke-opacity="0.9"
                                                                rel="5" j="5" index="0"
                                                                default-marker-size="6"></circle>
                                                        </g>
                                                        <g id="SvgjsG1780" class="apexcharts-series-markers"
                                                            clip-path="url(#gridRectMarkerMask70wutc7m)">
                                                            <circle id="SvgjsCircle1781" r="6"
                                                                cx="315.1607142857143" cy="65.51279965281486"
                                                                class="apexcharts-marker no-pointer-events wenllnmc5"
                                                                stroke="transparent" fill="transparent"
                                                                fill-opacity="1" stroke-width="4" stroke-opacity="0.9"
                                                                rel="6" j="6" index="0"
                                                                default-marker-size="6"></circle>
                                                        </g>
                                                        <g id="SvgjsG1782" class="apexcharts-series-markers"
                                                            clip-path="url(#gridRectMarkerMask70wutc7m)">
                                                            <circle id="SvgjsCircle1783" r="6" cx="367.6875"
                                                                cy="91.71791951394081"
                                                                class="apexcharts-marker no-pointer-events w93b9vgwp"
                                                                stroke="#696cff" fill="#ffffff" fill-opacity="1"
                                                                stroke-width="4" stroke-opacity="0.9" rel="7"
                                                                j="7" index="0" default-marker-size="6">
                                                            </circle>
                                                        </g>
                                                    </g>
                                                </g>
                                                <g id="SvgjsG1768" class="apexcharts-datalabels" data:realIndex="0">
                                                </g>
                                            </g>
                                            <line id="SvgjsLine1828" x1="0" y1="0" x2="367.6875"
                                                y2="0" stroke="#b6b6b6" stroke-dasharray="0"
                                                stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs">
                                            </line>
                                            <line id="SvgjsLine1829" x1="0" y1="0" x2="367.6875"
                                                y2="0" stroke-dasharray="0" stroke-width="0"
                                                stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                            <g id="SvgjsG1830" class="apexcharts-yaxis-annotations"></g>
                                            <g id="SvgjsG1831" class="apexcharts-xaxis-annotations"></g>
                                            <g id="SvgjsG1832" class="apexcharts-point-annotations"></g>
                                            <rect id="SvgjsRect1833" width="0" height="0" x="0"
                                                y="0" rx="0" ry="0" opacity="1"
                                                stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"
                                                class="apexcharts-zoom-rect">
                                            </rect>
                                            <rect id="SvgjsRect1834" width="0" height="0" x="0"
                                                y="0" rx="0" ry="0" opacity="1"
                                                stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"
                                                class="apexcharts-selection-rect"></rect>
                                        </g>
                                        <rect id="SvgjsRect1761" width="0" height="0" x="0"
                                            y="0" rx="0" ry="0" opacity="1"
                                            stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe">
                                        </rect>
                                        <g id="SvgjsG1816" class="apexcharts-yaxis" rel="0"
                                            transform="translate(-8, 0)">
                                            <g id="SvgjsG1817" class="apexcharts-yaxis-texts-g"></g>
                                        </g>
                                        <g id="SvgjsG1759" class="apexcharts-annotations"></g>
                                    </svg>
                                    <div class="apexcharts-legend" style="max-height: 107.5px;"></div>
                                    <div class="apexcharts-tooltip apexcharts-theme-light">
                                        <div class="apexcharts-tooltip-title"
                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                        <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                                class="apexcharts-tooltip-marker"
                                                style="background-color: rgb(105, 108, 255);"></span>
                                            <div class="apexcharts-tooltip-text"
                                                style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                <div class="apexcharts-tooltip-y-group"><span
                                                        class="apexcharts-tooltip-text-y-label"></span><span
                                                        class="apexcharts-tooltip-text-y-value"></span></div>
                                                <div class="apexcharts-tooltip-goals-group"><span
                                                        class="apexcharts-tooltip-text-goals-label"></span><span
                                                        class="apexcharts-tooltip-text-goals-value"></span></div>
                                                <div class="apexcharts-tooltip-z-group"><span
                                                        class="apexcharts-tooltip-text-z-label"></span><span
                                                        class="apexcharts-tooltip-text-z-value"></span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light">
                                        <div class="apexcharts-xaxistooltip-text"
                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                    </div>
                                    <div
                                        class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                        <div class="apexcharts-yaxistooltip-text"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center pt-4 gap-2">
                                <div class="flex-shrink-0" style="position: relative;">
                                    <div id="expensesOfWeek" style="min-height: 57.7px;">
                                        <div id="apexchartssw9bzu3c"
                                            class="apexcharts-canvas apexchartssw9bzu3c apexcharts-theme-light"
                                            style="width: 60px; height: 57.7px;"><svg id="SvgjsSvg1835" width="60"
                                                height="57.7" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg"
                                                xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                                style="background: transparent;">
                                                <g id="SvgjsG1837" class="apexcharts-inner apexcharts-graphical"
                                                    transform="translate(-10, -10)">
                                                    <defs id="SvgjsDefs1836">
                                                        <clipPath id="gridRectMasksw9bzu3c">
                                                            <rect id="SvgjsRect1839" width="86" height="87"
                                                                x="-3" y="-1" rx="0"
                                                                ry="0" opacity="1" stroke-width="0"
                                                                stroke="none" stroke-dasharray="0" fill="#fff">
                                                            </rect>
                                                        </clipPath>
                                                        <clipPath id="forecastMasksw9bzu3c"></clipPath>
                                                        <clipPath id="nonForecastMasksw9bzu3c"></clipPath>
                                                        <clipPath id="gridRectMarkerMasksw9bzu3c">
                                                            <rect id="SvgjsRect1840" width="84" height="89"
                                                                x="-2" y="-2" rx="0"
                                                                ry="0" opacity="1" stroke-width="0"
                                                                stroke="none" stroke-dasharray="0" fill="#fff">
                                                            </rect>
                                                        </clipPath>
                                                    </defs>
                                                    <g id="SvgjsG1841" class="apexcharts-radialbar">
                                                        <g id="SvgjsG1842">
                                                            <g id="SvgjsG1843" class="apexcharts-tracks">
                                                                <g id="SvgjsG1844"
                                                                    class="apexcharts-radialbar-track apexcharts-track"
                                                                    rel="1">
                                                                    <path id="apexcharts-radialbarTrack-0"
                                                                        d="M 40 18.098170731707313 A 21.901829268292687 21.901829268292687 0 1 1 39.99617740968999 18.098171065291247"
                                                                        fill="none" fill-opacity="1"
                                                                        stroke="rgba(236,238,241,0.85)"
                                                                        stroke-opacity="1" stroke-linecap="round"
                                                                        stroke-width="2.0408536585365864"
                                                                        stroke-dasharray="0"
                                                                        class="apexcharts-radialbar-area"
                                                                        data:pathOrig="M 40 18.098170731707313 A 21.901829268292687 21.901829268292687 0 1 1 39.99617740968999 18.098171065291247">
                                                                    </path>
                                                                </g>
                                                            </g>
                                                            <g id="SvgjsG1846">
                                                                <g id="SvgjsG1850"
                                                                    class="apexcharts-series apexcharts-radial-series"
                                                                    seriesName="seriesx1" rel="1"
                                                                    data:realIndex="0">
                                                                    <path id="SvgjsPath1851"
                                                                        d="M 40 18.098170731707313 A 21.901829268292687 21.901829268292687 0 1 1 22.2810479140526 52.873572242130095"
                                                                        fill="none" fill-opacity="0.85"
                                                                        stroke="rgba(105,108,255,0.85)"
                                                                        stroke-opacity="1" stroke-linecap="round"
                                                                        stroke-width="4.081707317073173"
                                                                        stroke-dasharray="0"
                                                                        class="apexcharts-radialbar-area apexcharts-radialbar-slice-0"
                                                                        data:angle="234" data:value="65"
                                                                        index="0" j="0"
                                                                        data:pathOrig="M 40 18.098170731707313 A 21.901829268292687 21.901829268292687 0 1 1 22.2810479140526 52.873572242130095">
                                                                    </path>
                                                                </g>
                                                                <circle id="SvgjsCircle1847" r="18.881402439024395"
                                                                    cx="40" cy="40"
                                                                    class="apexcharts-radialbar-hollow"
                                                                    fill="transparent"></circle>
                                                                <g id="SvgjsG1848" class="apexcharts-datalabels-group"
                                                                    transform="translate(0, 0) scale(1)"
                                                                    style="opacity: 1;"><text id="SvgjsText1849"
                                                                        font-family="Helvetica, Arial, sans-serif"
                                                                        x="40" y="45"
                                                                        text-anchor="middle" dominant-baseline="auto"
                                                                        font-size="13px" font-weight="400"
                                                                        fill="#697a8d"
                                                                        class="apexcharts-text apexcharts-datalabel-value"
                                                                        style="font-family: Helvetica, Arial, sans-serif;">$65</text>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <line id="SvgjsLine1852" x1="0" y1="0"
                                                        x2="80" y2="0" stroke="#b6b6b6"
                                                        stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"
                                                        class="apexcharts-ycrosshairs"></line>
                                                    <line id="SvgjsLine1853" x1="0" y1="0"
                                                        x2="80" y2="0" stroke-dasharray="0"
                                                        stroke-width="0" stroke-linecap="butt"
                                                        class="apexcharts-ycrosshairs-hidden"></line>
                                                </g>
                                                <g id="SvgjsG1838" class="apexcharts-annotations"></g>
                                            </svg>
                                            <div class="apexcharts-legend"></div>
                                        </div>
                                    </div>
                                    <div class="resize-triggers">
                                        <div class="expand-trigger">
                                        
                                        </div>
                                        <div class="contract-trigger"></div>
                                    </div>
                                </div>
                                <div>
                                    <p class="mb-n1 mt-1">Expenses This Week</p>
                                    <small class="text-muted">$39 less than last week</small>
                                </div>
                            </div>
                            <div class="resize-triggers">
                                <div class="expand-trigger">
                                 
                                </div>
                                <div class="contract-trigger"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ Expense Overview -->

        <!-- Transactions -->
        <div class="col-md-6 col-lg-4 order-2 mb-4">
            <div class="card h-100">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="card-title m-0 me-2">Transactions</h5>
                    <div class="dropdown">
                        <button class="btn p-0" type="button" id="transactionID" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="transactionID">
                            <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
                            <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                            <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <ul class="p-0 m-0">
                        <li class="d-flex mb-4 pb-1">
                            <div class="avatar flex-shrink-0 me-3">
                                <img src="../assets/img/icons/unicons/paypal.png" alt="User" class="rounded">
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <small class="text-muted d-block mb-1">Paypal</small>
                                    <h6 class="mb-0">Send money</h6>
                                </div>
                                <div class="user-progress d-flex align-items-center gap-1">
                                    <h6 class="mb-0">+82.6</h6> <span class="text-muted">USD</span>
                                </div>
                            </div>
                        </li>
                        <li class="d-flex mb-4 pb-1">
                            <div class="avatar flex-shrink-0 me-3">
                                <img src="../assets/img/icons/unicons/wallet.png" alt="User" class="rounded">
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <small class="text-muted d-block mb-1">Wallet</small>
                                    <h6 class="mb-0">Mac'D</h6>
                                </div>
                                <div class="user-progress d-flex align-items-center gap-1">
                                    <h6 class="mb-0">+270.69</h6> <span class="text-muted">USD</span>
                                </div>
                            </div>
                        </li>
                        <li class="d-flex mb-4 pb-1">
                            <div class="avatar flex-shrink-0 me-3">
                                <img src="../assets/img/icons/unicons/chart.png" alt="User" class="rounded">
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <small class="text-muted d-block mb-1">Transfer</small>
                                    <h6 class="mb-0">Refund</h6>
                                </div>
                                <div class="user-progress d-flex align-items-center gap-1">
                                    <h6 class="mb-0">+637.91</h6> <span class="text-muted">USD</span>
                                </div>
                            </div>
                        </li>
                        <li class="d-flex mb-4 pb-1">
                            <div class="avatar flex-shrink-0 me-3">
                                <img src="../assets/img/icons/unicons/cc-success.png" alt="User" class="rounded">
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <small class="text-muted d-block mb-1">Credit Card</small>
                                    <h6 class="mb-0">Ordered Food</h6>
                                </div>
                                <div class="user-progress d-flex align-items-center gap-1">
                                    <h6 class="mb-0">-838.71</h6> <span class="text-muted">USD</span>
                                </div>
                            </div>
                        </li>
                        <li class="d-flex mb-4 pb-1">
                            <div class="avatar flex-shrink-0 me-3">
                                <img src="../assets/img/icons/unicons/wallet.png" alt="User" class="rounded">
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <small class="text-muted d-block mb-1">Wallet</small>
                                    <h6 class="mb-0">Starbucks</h6>
                                </div>
                                <div class="user-progress d-flex align-items-center gap-1">
                                    <h6 class="mb-0">+203.33</h6> <span class="text-muted">USD</span>
                                </div>
                            </div>
                        </li>
                        <li class="d-flex">
                            <div class="avatar flex-shrink-0 me-3">
                                <img src="../assets/img/icons/unicons/cc-warning.png" alt="User" class="rounded">
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <small class="text-muted d-block mb-1">Mastercard</small>
                                    <h6 class="mb-0">Ordered Food</h6>
                                </div>
                                <div class="user-progress d-flex align-items-center gap-1">
                                    <h6 class="mb-0">-92.45</h6> <span class="text-muted">USD</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--/ Transactions -->
    </div>
@endsection
