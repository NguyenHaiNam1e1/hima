
@extends('home')
@section('Content')
<div class="services section-padding bg-grey" data-scroll-index='2' style="margin-top: -50px;">
    <div class="container">
<!-- row -->
        <div class="row">
    <!-- table left 1 -->
            <div class="col-lg-9 col-md-6 col-sm-12 col-xs-12 mb-30" >   
                <div class="service-box bg-white text-center" style="margin-top: 40px;">
                    <div class="icon-text">

                     <div class="card-header text-uppercase">Media object left alighned</div>
                        <div class="card-body">
                            <div class="media">
                                <img class="mr-3 rounded" src="{{$Discover->icon}}"  alt="user avatar" style="height: 200px;">
                                <div class="media-body">
                                    <h5 class="mt-0">Media heading</h5>
                                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. 
                                </div>
                        

                            
                            </div>
                        </div>
                    </div>
                      </div>
                    </div>

    <!-- end table left 1 -->

            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 mb-30" >

    <!-- table right 1   -->
                <div class="service-box bg-white text-center" style="margin-top: 40px;">
                    <div class="icon-text">
                        <div class=" index-so-box">
                            <div class="index_r_s">
                                <form action="/search" method="get" class="formsearch">
                                    <span class="text-box">
                                        <input class="autocomplete" autocomplete="off" title="Enter App Name, Package Name, Package ID" name="q" type="text" placeholder="PUBG Mobile" required="">
                                    </span>
                                    <span class="text-btn" title="Search APK">
                                        <input class="si" type="submit" value="">
                                    </span>
                                </form>
                            </div>
                            <div class="index_r_hot">
                                    
                                    <a href="/search?q=hago game online&amp;ici=hot_index"><i class="search-icon-hot"></i>hago game online</a>
                                    
                                    <a href="/search?q=gta 5&amp;ici=hot_index">gta 5</a>
                                    
                                    <a href="/search?q=nba 2k20&amp;ici=hot_index">nba 2k20</a>
                                    
                                    <a href="/search?q=telegram&amp;ici=hot_index">telegram</a>
                                    
                                    <a href="/search?q=lulubox free skin&amp;ici=hot_index">lulubox free skin</a>
                                    
                                    <a href="/search?q=pubg mobile&amp;ici=hot_index">pubg mobile</a>
                                    
                                    <a href="/search?q=roblox&amp;ici=hot_index">roblox</a>
                                    
                                    <a href="/search?q=root&amp;ici=hot_index">root</a>
                                    
                                    <a href="/search?q=call of duty&amp;ici=hot_index">call of duty</a>
                                    
                                    <a href="/search?q=browser&amp;ici=hot_index">browser</a>
                                    
                                    <a href="/search?q=efootball pes 2020&amp;ici=hot_index">efootball pes 2020</a>
                                    
                                    <a href="/search?q=call of duty: mobile&amp;ici=hot_index">call of duty: mobile</a>
                                    
                                    <a href="/search?q=nba&amp;ici=hot_index">nba</a>
                                    
                                    <a href="/search?q=summertime saga&amp;ici=hot_index">summertime saga</a>   
                            </div>
                        </div>
                    </div>
                </div>
    <!-- end table right 1 -->

    <!-- table right 2 -->
                <div class="top">
                    <div class="service-box bg-white text-center" style="margin-top=30px">    
                        <div class="icon-text">
                            <dl class="right_apkpure">
                                <dt>
                                    <a class="dl-ref" dl-ref="home" title="Hima APK" href="">
                                        <img src="https://hima.app/img/logo.png"></a></dt>
                                <dd class="title-dd">
                                    <a class="dl-ref" dl-ref="home" title="Hima APK" href="/Hima-app.html?icn=aegon&amp;ici=image_home">
                                        Hima
                                        <i class="istar"></i> <scan class="sstar">8.8</scan>
                                    </a>
                                </dd>
                                <dd class="des-dd"><p class="tit">Using Hima App</p><p class="des">Faster, free and saving data!</p></dd>
                                <div class="down">
                                    
                                        <a class="dl-ref" dl-ref="home" title="Download Hima latest version apk" href="/Hima-app.html?icn=aegon&amp;ici=image_home">Download v3.16.3 <span class="fsize">(<span>11.9 MB</span>)</span></a>
                                    
                                </div>
                            </dl>
                            <div class="facebook-like"> 
                                <p class="social-network">
                                    <a class="network fb" rel="nofollow noopener" target="_blank" href="https://www.facebook.com/Hima"><span>Facebook</span></a>
                                    <a class="network tw" rel="nofollow noopener" target="_blank" href="https://twitter.com/Hima"><span>Twitter</span></a>
                                    <a class="network glp" rel="nofollow noopener" target="_blank" href="https://www.youtube.com/channel/UCbCOKdnt1yYk4S3I4a034XQ"><span>YouTube</span></a>
                                </p>
                            </div>
                        </div>
                    </div>  
                </div>
    <!-- end table right 2 -->          
            </div>
        </div>  
<!-- end row -->
  </div>
</div>
@endsection