@extends('layouts.home')

@section('title', $setting->title)
@section('description', $setting->description)
@section('keywords', $setting->keywords)

@section('javascript')

<style>
    #owl-demo .item, #owl-demo-1 .item{
        background: #3fbf79;
        padding: 30px 0px;
        margin: 10px;
        color: #FFF;
        -webkit-border-radius: 3px;
        -moz-border-radius: 3px;
        border-radius: 3px;
        text-align: center;
        width: 190px;
    }
    .customNavigation{
        text-align: center;
    }
    .customNavigation a{
        -webkit-user-select: none;
        -khtml-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
    }
</style>
<script>
function myFunction(url) {
  window.open(url, "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,top=200,left=300,width=600,height=400");
}
</script>
@endsection
@section('content')

    @include('home._slider')
    <div class="p-2 bg-ruam text-white row justify-content-md-center">
        <div class="col-md-auto">
            <img class="home-middle-logo" width="100px" src="{{ asset('assets')}}/images/website_logo.png" alt="logo" />
        </div>
        <div class="col col-lg-4">
            <h4>金属加工.comが選べる理由</h4>
        </div>
    </div>
    <div class="p-3 bg-orange text-white row justify-content-md-center">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-10">
                <img width="100%" src="{{ asset('assets/images/need_reason.png')}}"/>
            </div>
            <div class="col-1"></div>
        </div>
    </div>
    <!-- Page Content -->
    <div class="container">
        <!-- About Section -->
        <div class="home-main">
            <div class="row">
                <div class="col-lg-3 col-md-5">
                    @include('home._leftside')
                </div>
                <div class="col-lg-9 col-md-7">
                    <div class="card mt-3">
                        <div id="sideInfo" style="display: block;">
                           <div class="head">
                             <p class="close"><img src="./guide/guid_files/icon-close.png" alt="閉じる"></p>
                           </div>
                           <div class="cont">
                                <p class="mB10"><a href=".//mizukiri/"><img src="./guide/guid_files/ban_side_mizukiri.gif" alt="金属オーダー鏡始めました"></a></p>
                                <p><a href=".//bend/bend_draft.html?id=14"><img src="./guide/guid_files/ban_side_punch.gif" alt="パンチング始めました"></a></p>
                           </div>
                       </div>
                        <div class="card-header bg-ruam text-white"><h3>加工チャンネル動画一覧</h3></div>
                        
                            <div class="container">
                            
                                    <div class="mainIn">
                            <ul class="movieList">
                                <!--  @foreach($materials as $material)
                                     <option data-gravity="{{$material->gravity}}" value="{{$material->id}}">{{$material->material}}</option>
                                 @endforeach -->


                               @foreach($videos as $video)
                                <li class="js-matchHeight" style="height: 221px;" onclick="myFunction('{{$video->video_url}}')">
                                    <p class="head">
                                        <!-- <a href="//www.youtube.com/watch?v=gicgkJ5TE4w&rel=0" data-lity="data-lity"> -->
                                        <a  class="popup">
                                            <img src="storage/{{$video->image}}" alt="溶接加工">
                                        </a>
                                        <!-- <iframe width="320" height="180" src="https://www.youtube.com/embed/gicgkJ5TE4w?rel=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
                                    </p>
                                    <p class="text"><span class="icon"></span>{{$video->description}}</p>
                                </li>
                                 @endforeach
                                <li class="js-matchHeight" style="height: 221px;">
                                    <p class="head">
                                        <!-- <a href="//www.youtube.com/watch?v=VqaT2Ds2sY0&rel=0" data-lity="data-lity"> -->
                                        <a href="entry.html?v=VqaT2Ds2sY0" class="popup">
                                            <img src="./guide/guid_files/img-movie2.jpg" alt="曲げ加工">
                                        </a>
                                        <!-- <iframe width="320" height="180" src="https://www.youtube.com/embed/VqaT2Ds2sY0?rel=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
                                    </p>
                                    <p class="text"><span class="icon"></span>曲げ加工 (1分16秒)</p>
                                </li>
                                <li class="js-matchHeight" style="height: 221px;">
                                    <p class="head">
                                        <!-- <a href="//www.youtube.com/watch?v=SuhJ3mLfJww&rel=0" data-lity="data-lity"> -->
                                        <a href="entry.html?v=SuhJ3mLfJww" class="popup">
                                            <img src="./guide/guid_files/img-movie3.jpg" alt="レーザータレパン複合加工">
                                        </a>
                                        <!-- <iframe width="320" height="180" src="https://www.youtube.com/embed/SuhJ3mLfJww?rel=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
                                    </p>
                                    <p class="text"><span class="icon"></span>レーザータレパン複合加工 (3分31秒)</p>
                                </li>
                                <li class="js-matchHeight" style="height: 221px;">
                                    <p class="head">
                                        <!-- <a href="//www.youtube.com/watch?v=hlHkREuDBME&rel=0" data-lity="data-lity"> -->
                                        <a href="entry.html?v=hlHkREuDBME" class="popup">
                                            <img src="./guide/guid_files/img-movie4.jpg" alt="タレパン加工">
                                        </a>
                                        <!-- <iframe width="320" height="180" src="https://www.youtube.com/embed/hlHkREuDBME?rel=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
                                    </p>
                                    <p class="text"><span class="icon"></span>タレパン加工 (1分17秒)</p>
                                </li>
                                <li class="js-matchHeight" style="">
                                    <p class="head">
                                        <!-- <a href="//www.youtube.com/watch?v=Fun0t0p3sFA&rel=0" data-lity="data-lity"> -->
                                        <a href="entry.html?v=Fun0t0p3sFA" class="popup" "="">
                                            <img src="./guide/guid_files/img-movie5.jpg" alt="アルミ材切断加工">
                                        </a>
                                        <!-- <iframe width="320" height="180" src="https://www.youtube.com/embed/Fun0t0p3sFA?rel=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
                                    </p>
                                    <p class="text"><span class="icon"></span>アルミ材切断加工 (1分4秒)</p>
                                </li>
                            </ul>
                        </div>
                                

                            </div>
                        
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="p-2 bg-secondary col-12 text-white text-center"><b>ご注文の流れ</b></div>
            </div>
            <div class="row mt-2">
                <div class="col-12">
                    <img width="100%" src="{{ asset('assets/images/useflow.png')}}">
                </div>
            </div>
            <!-- /.row -->
        </div>
    </div>


    <!-- /.container -->

@endsection
