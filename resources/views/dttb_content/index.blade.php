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

                        <div class="title" >
                            <a href="/discover">Discover »</a>
                            <a href="/discover">More »</a>
                        </div>

                            <ul class="top-list sublist">
                            
                            @foreach($Discover as $discover)
                                <li class="w33">
                                    <dl>
                                        <dt>
                                            <a title=""
                                                href="{{URL::to('/detail/'.$discover->id)}}">
                                                <img alt="VideoBuddy — Fast Downloader, Video Detector APK" 
                                                data-srcset="https://image.winudf.com/v2/user/admin/YWRtaW5fV2VCZS5wbmdfMTU3ODM3OTgwNDM5MA/icon.png?w=150&amp;fakeurl=1 2x" data-original="https://image.winudf.com/v2/user/admin/YWRtaW5fV2VCZS5wbmdfMTU3ODM3OTgwNDM5MA/icon.png?w=75&amp;fakeurl=1" 
                                                src="{{$discover->icon}}" 
                                                data-was-processed="true">
                                            </a>
                                        </dt>
                                        <dd class="title-dd">
                                        <a title="VideoBuddy — Fast Downloader, Video Detector APK" 
                                            href="{{URL::to('/detail/'.$discover->id)}}">{{$discover->shortDesc}}</a>
                                        </dd>
                                        
                                        <dd>{{$discover->appName}}</dd>
                                        
                                        
                                        <dd>{{$discover->created_at}}</dd>
                                        
                                        <dd class="down"><a rel="nofollow" class="" title="Download VideoBuddy — Fast Downloader, Video Detector latest version apk" href="/videobuddy-video-downloader/com.vid007.videobuddy/download?from=home%2Feditors_picks">Install</a></dd>
                                    </dl>
                                </li>
                                @endforeach

                            </ul>
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




<div class="services section-padding bg-grey" data-scroll-index='2'>
    <div class="container">
<!-- row -->
        <div class="row">
            <div class="col-lg-9 col-md-6 col-sm-12 col-xs-12 mb-30">
    <!-- table left 2 -->
                    <div class="service-box bg-white text-center" style=" margin-top: -90px;">
                        <div class="icon-text">
                            <ul class="nav nav-tabs nav-tabs-danger top-icon">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#tabe-7"><i class="bx bxl-android"></i> <span class="hidden-xs">Android</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#tabe-8"><i class="bx bxl-apple"></i> <span class="hidden-xs">IOS</span></a>
                                </li>
                            </ul>
                            <ul class="top-list sublist">
                                <li class="w33">
                                    <dl>
                                        <dt><a title="Garena Free Fire: Winterlands APK" href="/garena-free-fire-android-il/com.dts.freefireth"><img alt="Garena Free Fire: Winterlands APK" data-srcset="https://image.winudf.com/v2/image1/Y29tLmR0cy5mcmVlZmlyZXRoX2ljb25fMTU3NjAzNzAzMF8wMjE/icon.png?w=150&amp;fakeurl=1 2x" data-original="https://image.winudf.com/v2/image1/Y29tLmR0cy5mcmVlZmlyZXRoX2ljb25fMTU3NjAzNzAzMF8wMjE/icon.png?w=75&amp;fakeurl=1" src="https://image.winudf.com/v2/image1/Y29tLnRlbmNlbnQuaWdfaWNvbl8xNjA1NTExODU4XzA4OA/icon.png?w=60&fakeurl=1" class="loaded" srcset="https://image.winudf.com/v2/image1/Y29tLmR0cy5mcmVlZmlyZXRoX2ljb25fMTU3NjAzNzAzMF8wMjE/icon.png?w=150&amp;fakeurl=1 2x" data-was-processed="true"></a></dt>
                                        <dd class="title-dd"><a title="Garena Free Fire: Winterlands APK" href="/garena-free-fire-android-il/com.dts.freefireth">Garena Free Fire: Winterlands</a></dd>
                                        
                                        <dd>
                                            <div class="stars"><span class="score" title="Garena Free Fire: Winterlands average rating 8.7" style="width:86.99999999999999%"></span><span class="star">8.7</span></div>
                                        </dd>
                                        
                                        
                                            
                                                <dd>Action</dd>
                                            
                                        
                                        <dd class="down"><a rel="nofollow" class="" title="Download Garena Free Fire: Winterlands latest version xapk" href="/garena-free-fire-android-il/com.dts.freefireth/download?from=home%2Fhot">Download XAPK</a></dd>
                                    </dl>
                                </li>

                                <li class="w33">
                                    <dl>
                                        <dt><a title="Tales of Wind APK" href="/tales-of-wind/com.emagroups.ic2"><img alt="Tales of Wind APK" data-srcset="https://image.winudf.com/v2/image1/Y29tLmVtYWdyb3Vwcy5pYzJfaWNvbl8xNTU3NTc1NDg4XzAyNw/icon.png?w=150&amp;fakeurl=1 2x" data-original="https://image.winudf.com/v2/image1/Y29tLmVtYWdyb3Vwcy5pYzJfaWNvbl8xNTU3NTc1NDg4XzAyNw/icon.png?w=75&amp;fakeurl=1" src="https://image.winudf.com/v2/image1/Y29tLmVtYWdyb3Vwcy5pYzJfaWNvbl8xNTU3NTc1NDg4XzAyNw/icon.png?w=75&amp;fakeurl=1" class="loaded" srcset="https://image.winudf.com/v2/image1/Y29tLmVtYWdyb3Vwcy5pYzJfaWNvbl8xNTU3NTc1NDg4XzAyNw/icon.png?w=150&amp;fakeurl=1 2x" data-was-processed="true"></a></dt>
                                        <dd class="title-dd"><a title="Tales of Wind APK" href="/tales-of-wind/com.emagroups.ic2">Tales of Wind</a></dd>
                                        
                                        <dd>
                                            <div class="stars"><span class="score" title="Tales of Wind average rating 7.8" style="width:78%"></span><span class="star">7.8</span></div>
                                        </dd>
                                        
                                        
                                            
                                                <dd>Role Playing</dd>
                                            
                                        
                                        <dd class="down"><a rel="nofollow" class="" title="Download Tales of Wind latest version xapk" href="/tales-of-wind/com.emagroups.ic2/download?from=home%2Fhot">Download XAPK</a></dd>
                                    </dl>
                                </li>

                                <li class="w33">
                                    <dl>
                                        <dt><a title="PUBG MOBILE APK" href="/pubg-mobile-4-android-i/com.tencent.ig"><img alt="PUBG MOBILE APK" data-srcset="https://image.winudf.com/v2/image1/Y29tLnRlbmNlbnQuaWdfaWNvbl8xNTc2MDIxMjgwXzA4MA/icon.png?w=150&amp;fakeurl=1 2x" data-original="https://image.winudf.com/v2/image1/Y29tLnRlbmNlbnQuaWdfaWNvbl8xNTc2MDIxMjgwXzA4MA/icon.png?w=75&amp;fakeurl=1" src="https://image.winudf.com/v2/image1/Y29tLnRlbmNlbnQuaWdfaWNvbl8xNTc2MDIxMjgwXzA4MA/icon.png?w=75&amp;fakeurl=1" class="loaded" srcset="https://image.winudf.com/v2/image1/Y29tLnRlbmNlbnQuaWdfaWNvbl8xNTc2MDIxMjgwXzA4MA/icon.png?w=150&amp;fakeurl=1 2x" data-was-processed="true"></a></dt>
                                        <dd class="title-dd"><a title="PUBG MOBILE APK" href="/pubg-mobile-4-android-i/com.tencent.ig">PUBG MOBILE</a></dd>
                                        
                                        <dd>
                                            <div class="stars"><span class="score" title="PUBG MOBILE average rating 8.7" style="width:86.99999999999999%"></span><span class="star">8.7</span></div>
                                        </dd>
                                        
                                        
                                            
                                                <dd>Action</dd>
                                            
                                        
                                        <dd class="down"><a rel="nofollow" class="" title="Download PUBG MOBILE latest version apk" href="/pubg-mobile-4-android-i/com.tencent.ig/download?from=home%2Fhot">Install</a></dd>
                                    </dl>
                                </li>

                                <li class="w33">
                                    <dl>
                                        <dt><a title="PUBG MOBILE LITE APK" href="/pubg-lite-android/com.tencent.iglite"><img alt="PUBG MOBILE LITE APK" data-srcset="https://image.winudf.com/v2/image1/Y29tLnRlbmNlbnQuaWdsaXRlX2ljb25fMTU3Nzk0NTExMF8wODk/icon.png?w=150&amp;fakeurl=1 2x" data-original="https://image.winudf.com/v2/image1/Y29tLnRlbmNlbnQuaWdsaXRlX2ljb25fMTU3Nzk0NTExMF8wODk/icon.png?w=75&amp;fakeurl=1" src="https://image.winudf.com/v2/image1/Y29tLnRlbmNlbnQuaWdsaXRlX2ljb25fMTU3Nzk0NTExMF8wODk/icon.png?w=75&amp;fakeurl=1" class="loaded" srcset="https://image.winudf.com/v2/image1/Y29tLnRlbmNlbnQuaWdsaXRlX2ljb25fMTU3Nzk0NTExMF8wODk/icon.png?w=150&amp;fakeurl=1 2x" data-was-processed="true"></a></dt>
                                        <dd class="title-dd"><a title="PUBG MOBILE LITE APK" href="/pubg-lite-android/com.tencent.iglite">PUBG MOBILE LITE</a></dd>
                                        
                                        <dd>
                                            <div class="stars"><span class="score" title="PUBG MOBILE LITE average rating 8.4" style="width:84.00000000000001%"></span><span class="star">8.4</span></div>
                                        </dd>
                                        
                                        
                                            
                                                <dd>Action</dd>
                                            
                                        
                                        <dd class="down"><a rel="nofollow" class="" title="Download PUBG MOBILE LITE latest version apk" href="/pubg-lite-android/com.tencent.iglite/download?from=home%2Fhot">Install</a></dd>
                                    </dl>
                                </li>

                                <li class="w33">
                                    <dl>
                                        <dt><a title="PUBG MOBILE KR APK" href="/pubg-mobile/com.pubg.krmobile"><img alt="PUBG MOBILE KR APK" data-srcset="https://image.winudf.com/v2/image1/Y29tLnB1Ymcua3Jtb2JpbGVfaWNvbl8xNTc2MDU0NTk1XzAzNg/icon.png?w=150&amp;fakeurl=1 2x" data-original="https://image.winudf.com/v2/image1/Y29tLnB1Ymcua3Jtb2JpbGVfaWNvbl8xNTc2MDU0NTk1XzAzNg/icon.png?w=75&amp;fakeurl=1" src="https://image.winudf.com/v2/image1/Y29tLnB1Ymcua3Jtb2JpbGVfaWNvbl8xNTc2MDU0NTk1XzAzNg/icon.png?w=75&amp;fakeurl=1" class="loaded" srcset="https://image.winudf.com/v2/image1/Y29tLnB1Ymcua3Jtb2JpbGVfaWNvbl8xNTc2MDU0NTk1XzAzNg/icon.png?w=150&amp;fakeurl=1 2x" data-was-processed="true"></a></dt>
                                        <dd class="title-dd"><a title="PUBG MOBILE KR APK" href="/pubg-mobile/com.pubg.krmobile">PUBG MOBILE KR</a></dd>
                                        
                                        <dd>
                                            <div class="stars"><span class="score" title="PUBG MOBILE KR average rating 8.4" style="width:84.00000000000001%"></span><span class="star">8.4</span></div>
                                        </dd>
                                        
                                        
                                            
                                                <dd>Action</dd>
                                            
                                        
                                        <dd class="down"><a rel="nofollow" class="" title="Download PUBG MOBILE KR latest version xapk" href="/pubg-mobile/com.pubg.krmobile/download?from=home%2Fhot">Download XAPK</a></dd>
                                    </dl>
                                </li>

                                <li class="w33">
                                    <dl>
                                        <dt><a title="Mobile Legends: Bang Bang APK" href="/mobile-legends-bang-bang/com.mobile.legends"><img alt="Mobile Legends: Bang Bang APK" data-srcset="https://image.winudf.com/v2/image1/Y29tLm1vYmlsZS5sZWdlbmRzX2ljb25fMTU3NDEzNDM0MF8wNTU/icon.png?w=150&amp;fakeurl=1 2x" data-original="https://image.winudf.com/v2/image1/Y29tLm1vYmlsZS5sZWdlbmRzX2ljb25fMTU3NDEzNDM0MF8wNTU/icon.png?w=75&amp;fakeurl=1" src="https://image.winudf.com/v2/image1/Y29tLm1vYmlsZS5sZWdlbmRzX2ljb25fMTU3NDEzNDM0MF8wNTU/icon.png?w=75&amp;fakeurl=1" class="loaded" srcset="https://image.winudf.com/v2/image1/Y29tLm1vYmlsZS5sZWdlbmRzX2ljb25fMTU3NDEzNDM0MF8wNTU/icon.png?w=150&amp;fakeurl=1 2x" data-was-processed="true"></a></dt>
                                        <dd class="title-dd"><a title="Mobile Legends: Bang Bang APK" href="/mobile-legends-bang-bang/com.mobile.legends">Mobile Legends: Bang Bang</a></dd>
                                        
                                        <dd>
                                            <div class="stars"><span class="score" title="Mobile Legends: Bang Bang average rating 8.6" style="width:86%"></span><span class="star">8.6</span></div>
                                        </dd>
                                        
                                        
                                            
                                                <dd>Action</dd>
                                            
                                        
                                        <dd class="down"><a rel="nofollow" class="" title="Download Mobile Legends: Bang Bang latest version apk" href="/mobile-legends-bang-bang/com.mobile.legends/download?from=home%2Fhot">Install</a></dd>
                                    </dl>
                                </li>

                                <li class="w33">
                                    <dl>
                                        <dt><a title="Overlords of Oblivion APK" href="/overlords-of-oblivion/com.emagroups.ic"><img alt="Overlords of Oblivion APK" data-srcset="https://image.winudf.com/v2/image1/Y29tLmVtYWdyb3Vwcy5pY19pY29uXzE1NDUwMzM4ODlfMDcx/icon.png?w=150&amp;fakeurl=1 2x" data-original="https://image.winudf.com/v2/image1/Y29tLmVtYWdyb3Vwcy5pY19pY29uXzE1NDUwMzM4ODlfMDcx/icon.png?w=75&amp;fakeurl=1" src="https://image.winudf.com/v2/image1/Y29tLmVtYWdyb3Vwcy5pY19pY29uXzE1NDUwMzM4ODlfMDcx/icon.png?w=75&amp;fakeurl=1" class="loaded" srcset="https://image.winudf.com/v2/image1/Y29tLmVtYWdyb3Vwcy5pY19pY29uXzE1NDUwMzM4ODlfMDcx/icon.png?w=150&amp;fakeurl=1 2x" data-was-processed="true"></a></dt>
                                        <dd class="title-dd"><a title="Overlords of Oblivion APK" href="/overlords-of-oblivion/com.emagroups.ic">Overlords of Oblivion</a></dd>
                                        
                                        <dd>
                                            <div class="stars"><span class="score" title="Overlords of Oblivion average rating 6.7" style="width:67%"></span><span class="star">6.7</span></div>
                                        </dd>
                                        
                                        
                                            
                                                <dd>Role Playing</dd>
                                            
                                        
                                        <dd class="down"><a rel="nofollow" class="" title="Download Overlords of Oblivion latest version apk" href="/overlords-of-oblivion/com.emagroups.ic/download?from=home%2Fhot">Install</a></dd>
                                    </dl>
                                </li>

                                <li class="w33">
                                    <dl>
                                        <dt><a title="Call of Duty®: Mobile APK" href="/call-of-duty-legends-of-war/com.activision.callofduty.shooter"><img alt="Call of Duty®: Mobile APK" data-srcset="https://image.winudf.com/v2/image1/Y29tLmFjdGl2aXNpb24uY2FsbG9mZHV0eS5zaG9vdGVyX2ljb25fMTU3Nzk0NTEyM18wMjE/icon.png?w=150&amp;fakeurl=1 2x" data-original="https://image.winudf.com/v2/image1/Y29tLmFjdGl2aXNpb24uY2FsbG9mZHV0eS5zaG9vdGVyX2ljb25fMTU3Nzk0NTEyM18wMjE/icon.png?w=75&amp;fakeurl=1" src="https://image.winudf.com/v2/image1/Y29tLmFjdGl2aXNpb24uY2FsbG9mZHV0eS5zaG9vdGVyX2ljb25fMTU3Nzk0NTEyM18wMjE/icon.png?w=75&amp;fakeurl=1" class="loaded" srcset="https://image.winudf.com/v2/image1/Y29tLmFjdGl2aXNpb24uY2FsbG9mZHV0eS5zaG9vdGVyX2ljb25fMTU3Nzk0NTEyM18wMjE/icon.png?w=150&amp;fakeurl=1 2x" data-was-processed="true"></a></dt>
                                        <dd class="title-dd"><a title="Call of Duty®: Mobile APK" href="/call-of-duty-legends-of-war/com.activision.callofduty.shooter">Call of Duty®: Mobile</a></dd>
                                        
                                        <dd>
                                            <div class="stars"><span class="score" title="Call of Duty®: Mobile average rating 8.1" style="width:81%"></span><span class="star">8.1</span></div>
                                        </dd>
                                        
                                        
                                            
                                                <dd>Action</dd>
                                            
                                        
                                        <dd class="down"><a rel="nofollow" class="" title="Download Call of Duty®: Mobile latest version xapk" href="/call-of-duty-legends-of-war/com.activision.callofduty.shooter/download?from=home%2Fhot">Download XAPK</a></dd>
                                    </dl>
                                </li>

                                <li class="w33">
                                    <dl>
                                        <dt><a title="Dream League Soccer 2020 APK" href="/dream-league-soccer-2020/com.firsttouchAndroid.dls7"><img alt="Dream League Soccer 2020 APK" data-srcset="https://image.winudf.com/v2/image1/Y29tLmZpcnN0dG91Y2hnYW1lcy5kbHM3X2ljb25fMTU3NjAxMDk1OF8wNjY/icon.png?w=150&amp;fakeurl=1 2x" data-original="https://image.winudf.com/v2/image1/Y29tLmZpcnN0dG91Y2hnYW1lcy5kbHM3X2ljb25fMTU3NjAxMDk1OF8wNjY/icon.png?w=75&amp;fakeurl=1" src="https://image.winudf.com/v2/image1/Y29tLmZpcnN0dG91Y2hnYW1lcy5kbHM3X2ljb25fMTU3NjAxMDk1OF8wNjY/icon.png?w=75&amp;fakeurl=1" class="loaded" srcset="https://image.winudf.com/v2/image1/Y29tLmZpcnN0dG91Y2hnYW1lcy5kbHM3X2ljb25fMTU3NjAxMDk1OF8wNjY/icon.png?w=150&amp;fakeurl=1 2x" data-was-processed="true"></a></dt>
                                        <dd class="title-dd"><a title="Dream League Soccer 2020 APK" href="/dream-league-soccer-2020/com.firsttouchAndroid.dls7">Dream League Soccer 2020</a></dd>
                                        
                                        <dd>
                                            <div class="stars"><span class="score" title="Dream League Soccer 2020 average rating 7.2" style="width:72%"></span><span class="star">7.2</span></div>
                                        </dd>
                                        
                                        
                                            
                                                <dd>Sports</dd>
                                            
                                        
                                        <dd class="down"><a rel="nofollow" class="" title="Download Dream League Soccer 2020 latest version xapk" href="/dream-league-soccer-2020/com.firsttouchAndroid.dls7/download?from=home%2Fhot">Download XAPK</a></dd>
                                    </dl>
                                </li>

                                <li class="w33">
                                    <dl>
                                        <dt><a title="Worms Zone .io - Voracious Snake APK" href="/worms-zone-io-voracious-snake/com.wildspike.wormszone"><img alt="Worms Zone .io - Voracious Snake APK" data-srcset="https://image.winudf.com/v2/image1/Y29tLndpbGRzcGlrZS53b3Jtc3pvbmVfaWNvbl8xNTc2NDkxMjgzXzAyMw/icon.png?w=150&amp;fakeurl=1 2x" data-original="https://image.winudf.com/v2/image1/Y29tLndpbGRzcGlrZS53b3Jtc3pvbmVfaWNvbl8xNTc2NDkxMjgzXzAyMw/icon.png?w=75&amp;fakeurl=1" src="https://image.winudf.com/v2/image1/Y29tLndpbGRzcGlrZS53b3Jtc3pvbmVfaWNvbl8xNTc2NDkxMjgzXzAyMw/icon.png?w=75&amp;fakeurl=1" class="loaded" srcset="https://image.winudf.com/v2/image1/Y29tLndpbGRzcGlrZS53b3Jtc3pvbmVfaWNvbl8xNTc2NDkxMjgzXzAyMw/icon.png?w=150&amp;fakeurl=1 2x" data-was-processed="true"></a></dt>
                                        <dd class="title-dd"><a title="Worms Zone .io - Voracious Snake APK" href="/worms-zone-io-voracious-snake/com.wildspike.wormszone">Worms Zone .io - Voracious Snake</a></dd>
                                        
                                        <dd>
                                            <div class="stars"><span class="score" title="Worms Zone .io - Voracious Snake average rating 7.5" style="width:75%"></span><span class="star">7.5</span></div>
                                        </dd>
                                        
                                        
                                            
                                                <dd>Action</dd>
                                            
                                        
                                        <dd class="down"><a rel="nofollow" class="" title="Download Worms Zone .io - Voracious Snake latest version apk" href="/worms-zone-io-voracious-snake/com.wildspike.wormszone/download?from=home%2Fhot">Install</a></dd>
                                    </dl>
                                </li>

                                <li class="w33">
                                    <dl>
                                        <dt><a title="Subway Surfers APK" href="/subway-surfers-1/com.kiloo.subwaysurf"><img alt="Subway Surfers APK" data-srcset="https://image.winudf.com/v2/image1/Y29tLmtpbG9vLnN1YndheXN1cmZfaWNvbl8xNTc3OTc3NDAwXzA3MQ/icon.png?w=150&amp;fakeurl=1 2x" data-original="https://image.winudf.com/v2/image1/Y29tLmtpbG9vLnN1YndheXN1cmZfaWNvbl8xNTc3OTc3NDAwXzA3MQ/icon.png?w=75&amp;fakeurl=1" src="https://image.winudf.com/v2/image1/Y29tLmtpbG9vLnN1YndheXN1cmZfaWNvbl8xNTc3OTc3NDAwXzA3MQ/icon.png?w=75&amp;fakeurl=1" class="loaded" srcset="https://image.winudf.com/v2/image1/Y29tLmtpbG9vLnN1YndheXN1cmZfaWNvbl8xNTc3OTc3NDAwXzA3MQ/icon.png?w=150&amp;fakeurl=1 2x" data-was-processed="true"></a></dt>
                                        <dd class="title-dd"><a title="Subway Surfers APK" href="/subway-surfers-1/com.kiloo.subwaysurf">Subway Surfers</a></dd>
                                        
                                        <dd>
                                            <div class="stars"><span class="score" title="Subway Surfers average rating 9.3" style="width:93%"></span><span class="star">9.3</span></div>
                                        </dd>
                                        
                                        
                                            
                                                <dd>Arcade</dd>
                                            
                                        
                                        <dd class="down"><a rel="nofollow" class="" title="Download Subway Surfers latest version apk" href="/subway-surfers-1/com.kiloo.subwaysurf/download?from=home%2Fhot">Install</a></dd>
                                    </dl>
                                </li>

                                <li class="w33">
                                    <dl>
                                        <dt><a title="8 Ball Pool APK" href="/8-ball-pool-android-1/com.miniclip.eightballpool"><img alt="8 Ball Pool APK" data-srcset="https://image.winudf.com/v2/image1/Y29tLm1pbmljbGlwLmVpZ2h0YmFsbHBvb2xfaWNvbl8xNTYxMzk3MjU5XzAyOQ/icon.png?w=150&amp;fakeurl=1 2x" data-original="https://image.winudf.com/v2/image1/Y29tLm1pbmljbGlwLmVpZ2h0YmFsbHBvb2xfaWNvbl8xNTYxMzk3MjU5XzAyOQ/icon.png?w=75&amp;fakeurl=1" src="https://image.winudf.com/v2/image1/Y29tLm1pbmljbGlwLmVpZ2h0YmFsbHBvb2xfaWNvbl8xNTYxMzk3MjU5XzAyOQ/icon.png?w=75&amp;fakeurl=1" class="loaded" srcset="https://image.winudf.com/v2/image1/Y29tLm1pbmljbGlwLmVpZ2h0YmFsbHBvb2xfaWNvbl8xNTYxMzk3MjU5XzAyOQ/icon.png?w=150&amp;fakeurl=1 2x" data-was-processed="true"></a></dt>
                                        <dd class="title-dd"><a title="8 Ball Pool APK" href="/8-ball-pool-android-1/com.miniclip.eightballpool">8 Ball Pool</a></dd>
                                        
                                        <dd>
                                            <div class="stars"><span class="score" title="8 Ball Pool average rating 9.4" style="width:94%"></span><span class="star">9.4</span></div>
                                        </dd>
                                        
                                        
                                            
                                                <dd>Sports</dd>
                                            
                                        
                                        <dd class="down"><a rel="nofollow" class="" title="Download 8 Ball Pool latest version apk" href="/8-ball-pool-android-1/com.miniclip.eightballpool/download?from=home%2Fhot">Install</a></dd>
                                    </dl>
                                </li>
                                                </ul>
                                                <ul class="top-list sublist" style="display: none;">
                                                    
                                                    

                                <li class="w33">
                                    <dl>
                                        <dt><a title="LuluBox - Allow you to unlock all skin of FreeFire APK" href="/lulubox/com.lulu.lulubox"><img alt="LuluBox - Allow you to unlock all skin of FreeFire APK" data-srcset="https://image.winudf.com/v2/user/admin/YWRtaW5faWNfbGF1bmNoZXIucG5nXzE1NTI1MzQwNzgwNjg/icon.png?w=150&amp;fakeurl=1 2x" data-original="https://image.winudf.com/v2/user/admin/YWRtaW5faWNfbGF1bmNoZXIucG5nXzE1NTI1MzQwNzgwNjg/icon.png?w=75&amp;fakeurl=1" src="https://static.apkpure.com/www/static/imgs/lazy.png"></a></dt>
                                        <dd class="title-dd"><a title="LuluBox - Allow you to unlock all skin of FreeFire APK" href="/lulubox/com.lulu.lulubox">LuluBox - Allow you to unlock all skin of FreeFire</a></dd>
                                        
                                        <dd>
                                            <div class="stars"><span class="score" title="LuluBox - Allow you to unlock all skin of FreeFire average rating 7.6" style="width:76%"></span><span class="star">7.6</span></div>
                                        </dd>
                                        
                                        
                                            
                                                <dd>Tools</dd>
                                            
                                        
                                        <dd class="down"><a rel="nofollow" class="" title="Download LuluBox - Allow you to unlock all skin of FreeFire latest version apk" href="/lulubox/com.lulu.lulubox/download?from=home%2Fhot">Install</a></dd>
                                    </dl>
                                </li>

                                <li class="w33">
                                    <dl>
                                        <dt><a title="VideoBuddy — Fast Downloader, Video Detector APK" href="/videobuddy-video-downloader/com.vid007.videobuddy"><img alt="VideoBuddy — Fast Downloader, Video Detector APK" data-srcset="https://image.winudf.com/v2/user/admin/YWRtaW5fV2VjaGF0SU1HMTUwLnBuZ18xNTY5MzA2OTExNTY3/icon.png?w=150&amp;fakeurl=1 2x" data-original="https://image.winudf.com/v2/user/admin/YWRtaW5fV2VjaGF0SU1HMTUwLnBuZ18xNTY5MzA2OTExNTY3/icon.png?w=75&amp;fakeurl=1" src="https://static.apkpure.com/www/static/imgs/lazy.png"></a></dt>
                                        <dd class="title-dd"><a title="VideoBuddy — Fast Downloader, Video Detector APK" href="/videobuddy-video-downloader/com.vid007.videobuddy">VideoBuddy — Fast Downloader, Video Detector</a></dd>
                                        
                                        <dd>
                                            <div class="stars"><span class="score" title="VideoBuddy — Fast Downloader, Video Detector average rating 8.4" style="width:84.00000000000001%"></span><span class="star">8.4</span></div>
                                        </dd>
                                        
                                        
                                            
                                                <dd>Video Players &amp; Editors</dd>
                                            
                                        
                                        <dd class="down"><a rel="nofollow" class="" title="Download VideoBuddy — Fast Downloader, Video Detector latest version apk" href="/videobuddy-video-downloader/com.vid007.videobuddy/download?from=home%2Fhot">Install</a></dd>
                                    </dl>
                                </li>

                                <li class="w33">
                                    <dl>
                                        <dt><a title="VidMate - HD Video Downloader &amp; Live TV APK" href="/vidmate-downloader-hd-live-tv/com.nemo.vidmate"><img alt="VidMate - HD Video Downloader &amp; Live TV APK" data-srcset="https://image.winudf.com/v2/image/YWRtaW5f5aSa5aSn55qELnBuZ18xNTI4NzEzMTcxMjU0/icon.png?w=150&amp;fakeurl=1 2x" data-original="https://image.winudf.com/v2/image/YWRtaW5f5aSa5aSn55qELnBuZ18xNTI4NzEzMTcxMjU0/icon.png?w=75&amp;fakeurl=1" src="https://static.apkpure.com/www/static/imgs/lazy.png"></a></dt>
                                        <dd class="title-dd"><a title="VidMate - HD Video Downloader &amp; Live TV APK" href="/vidmate-downloader-hd-live-tv/com.nemo.vidmate">VidMate - HD Video Downloader &amp; Live TV</a></dd>
                                        
                                        <dd>
                                            <div class="stars"><span class="score" title="VidMate - HD Video Downloader &amp; Live TV average rating 9.0" style="width:90%"></span><span class="star">9.0</span></div>
                                        </dd>
                                        
                                        
                                            
                                                <dd>Tools</dd>
                                            
                                        
                                        <dd class="down"><a rel="nofollow" class="" title="Download VidMate - HD Video Downloader &amp; Live TV latest version apk" href="/vidmate-downloader-hd-live-tv/com.nemo.vidmate/download?from=home%2Fhot">Install</a></dd>
                                    </dl>
                                </li>

                                <li class="w33">
                                    <dl>
                                        <dt><a title="HAGO - Play With New Friends APK" href="/hago-play-with-new-friends/com.yy.hiyo"><img alt="HAGO - Play With New Friends APK" data-srcset="https://image.winudf.com/v2/image1/Y29tLnl5LmhpeW9faWNvbl8xNTYxMTMyMTQ5XzAyMQ/icon.png?w=150&amp;fakeurl=1 2x" data-original="https://image.winudf.com/v2/user/admin/YWRtaW5fZXpnaWYtNC02ZGUzODhlMjY1YzAuZ2lmXzE1NjYwMTE3ODU0ODU" src="https://static.apkpure.com/www/static/imgs/lazy.png"></a></dt>
                                        <dd class="title-dd"><a title="HAGO - Play With New Friends APK" href="/hago-play-with-new-friends/com.yy.hiyo">HAGO - Play With New Friends</a></dd>
                                        
                                        <dd>
                                            <div class="stars"><span class="score" title="HAGO - Play With New Friends average rating 8.4" style="width:84.00000000000001%"></span><span class="star">8.4</span></div>
                                        </dd>
                                        
                                        
                                            
                                                <dd>Social</dd>
                                            
                                        
                                        <dd class="down"><a rel="nofollow" class="" title="Download HAGO - Play With New Friends latest version apk" href="/hago-play-with-new-friends/com.yy.hiyo/download?from=home%2Fhot">Install</a></dd>
                                    </dl>
                                </li>

                                <li class="w33">
                                    <dl>
                                        <dt><a title="WhatsApp Messenger APK" href="/whatsapp-messenger/com.whatsapp"><img alt="WhatsApp Messenger APK" data-srcset="https://image.winudf.com/v2/image1/Y29tLndoYXRzYXBwX2ljb25fMTU1OTg1MDA2NF8wNjI/icon.png?w=150&amp;fakeurl=1 2x" data-original="https://image.winudf.com/v2/image1/Y29tLndoYXRzYXBwX2ljb25fMTU1OTg1MDA2NF8wNjI/icon.png?w=75&amp;fakeurl=1" src="https://static.apkpure.com/www/static/imgs/lazy.png"></a></dt>
                                        <dd class="title-dd"><a title="WhatsApp Messenger APK" href="/whatsapp-messenger/com.whatsapp">WhatsApp Messenger</a></dd>
                                        
                                        <dd>
                                            <div class="stars"><span class="score" title="WhatsApp Messenger average rating 9.0" style="width:90%"></span><span class="star">9.0</span></div>
                                        </dd>
                                        
                                        
                                            
                                                <dd>Communication</dd>
                                            
                                        
                                        <dd class="down"><a rel="nofollow" class="" title="Download WhatsApp Messenger latest version apk" href="/whatsapp-messenger/com.whatsapp/download?from=home%2Fhot">Install</a></dd>
                                    </dl>
                                </li>

                                <li class="w33">
                                    <dl>
                                        <dt><a title="Google Play Store APK" href="/google-play-store/com.android.vending"><img alt="Google Play Store APK" data-srcset="https://image.winudf.com/v2/image/YWRtaW5faWNfbGF1bmNoZXJfcGxheV9zdG9yZS5wbmdfMTUwMjE2MzE4NzkwMw/icon.png?w=150&amp;fakeurl=1 2x" data-original="https://image.winudf.com/v2/image/YWRtaW5faWNfbGF1bmNoZXJfcGxheV9zdG9yZS5wbmdfMTUwMjE2MzE4NzkwMw/icon.png?w=75&amp;fakeurl=1" src="https://static.apkpure.com/www/static/imgs/lazy.png"></a></dt>
                                        <dd class="title-dd"><a title="Google Play Store APK" href="/google-play-store/com.android.vending">Google Play Store</a></dd>
                                        
                                        <dd>
                                            <div class="stars"><span class="score" title="Google Play Store average rating 7.8" style="width:78%"></span><span class="star">7.8</span></div>
                                        </dd>
                                        
                                        
                                            
                                                <dd>Tools</dd>
                                            
                                        
                                        <dd class="down"><a rel="nofollow" class="" title="Download Google Play Store latest version apk" href="/google-play-store/com.android.vending/download?from=home%2Fhot">Install</a></dd>
                                    </dl>
                                </li>

                                <li class="w33">
                                    <dl>
                                        <dt><a title="Messenger – Text and Video Chat for Free APK" href="/facebook-messenger/com.facebook.orca"><img alt="Messenger – Text and Video Chat for Free APK" data-srcset="https://image.winudf.com/v2/image1/Y29tLmZhY2Vib29rLm9yY2FfaWNvbl8xNTYxNDE0ODQ5XzAwMw/icon.png?w=150&amp;fakeurl=1 2x" data-original="https://image.winudf.com/v2/image1/Y29tLmZhY2Vib29rLm9yY2FfaWNvbl8xNTYxNDE0ODQ5XzAwMw/icon.png?w=75&amp;fakeurl=1" src="https://static.apkpure.com/www/static/imgs/lazy.png"></a></dt>
                                        <dd class="title-dd"><a title="Messenger – Text and Video Chat for Free APK" href="/facebook-messenger/com.facebook.orca">Messenger – Text and Video Chat for Free</a></dd>
                                        
                                        <dd>
                                            <div class="stars"><span class="score" title="Messenger – Text and Video Chat for Free average rating 8.9" style="width:89%"></span><span class="star">8.9</span></div>
                                        </dd>
                                        
                                        
                                            
                                                <dd>Communication</dd>
                                            
                                        
                                        <dd class="down"><a rel="nofollow" class="" title="Download Messenger – Text and Video Chat for Free latest version apk" href="/facebook-messenger/com.facebook.orca/download?from=home%2Fhot">Install</a></dd>
                                    </dl>
                                </li>

                                <li class="w33">
                                    <dl>
                                        <dt><a title="Instagram APK" href="/instagram/com.instagram.android"><img alt="Instagram APK" data-srcset="https://image.winudf.com/v2/image1/Y29tLmluc3RhZ3JhbS5hbmRyb2lkX2ljb25fMTU2MTUwNDM4M18wOTQ/icon.png?w=150&amp;fakeurl=1 2x" data-original="https://image.winudf.com/v2/image1/Y29tLmluc3RhZ3JhbS5hbmRyb2lkX2ljb25fMTU2MTUwNDM4M18wOTQ/icon.png?w=75&amp;fakeurl=1" src="https://static.apkpure.com/www/static/imgs/lazy.png"></a></dt>
                                        <dd class="title-dd"><a title="Instagram APK" href="/instagram/com.instagram.android">Instagram</a></dd>
                                        
                                        <dd>
                                            <div class="stars"><span class="score" title="Instagram average rating 9.3" style="width:93%"></span><span class="star">9.3</span></div>
                                        </dd>
                                        
                                        
                                            
                                                <dd>Social</dd>
                                            
                                        
                                        <dd class="down"><a rel="nofollow" class="" title="Download Instagram latest version apk" href="/instagram/com.instagram.android/download?from=home%2Fhot">Install</a></dd>
                                    </dl>
                                </li>

                                <li class="w33">
                                    <dl>
                                        <dt><a title="SHAREit - Transfer &amp; Share APK" href="/shareit-transfer-share/com.lenovo.anyshare.gps"><img alt="SHAREit - Transfer &amp; Share APK" data-srcset="https://image.winudf.com/v2/image1/Y29tLmxlbm92by5hbnlzaGFyZS5ncHNfaWNvbl8xNTU1NDgyMTExXzAyNg/icon.png?w=150&amp;fakeurl=1 2x" data-original="https://image.winudf.com/v2/image1/Y29tLmxlbm92by5hbnlzaGFyZS5ncHNfaWNvbl8xNTU1NDgyMTExXzAyNg/icon.png?w=75&amp;fakeurl=1" src="https://static.apkpure.com/www/static/imgs/lazy.png"></a></dt>
                                        <dd class="title-dd"><a title="SHAREit - Transfer &amp; Share APK" href="/shareit-transfer-share/com.lenovo.anyshare.gps">SHAREit - Transfer &amp; Share</a></dd>
                                        
                                        <dd>
                                            <div class="stars"><span class="score" title="SHAREit - Transfer &amp; Share average rating 8.5" style="width:85%"></span><span class="star">8.5</span></div>
                                        </dd>
                                        
                                        
                                            
                                                <dd>Tools</dd>
                                            
                                        
                                        <dd class="down"><a rel="nofollow" class="" title="Download SHAREit - Transfer &amp; Share latest version apk" href="/shareit-transfer-share/com.lenovo.anyshare.gps/download?from=home%2Fhot">Install</a></dd>
                                    </dl>
                                </li>

                                <li class="w33">
                                    <dl>
                                        <dt><a title="Facebook APK" href="/facebook/com.facebook.katana"><img alt="Facebook APK" data-srcset="https://image.winudf.com/v2/image1/Y29tLmZhY2Vib29rLmthdGFuYV9pY29uXzE1NTc5OTAwMzBfMDIz/icon.png?w=150&amp;fakeurl=1 2x" data-original="https://image.winudf.com/v2/image1/Y29tLmZhY2Vib29rLmthdGFuYV9pY29uXzE1NTc5OTAwMzBfMDIz/icon.png?w=75&amp;fakeurl=1" src="https://static.apkpure.com/www/static/imgs/lazy.png"></a></dt>
                                        <dd class="title-dd"><a title="Facebook APK" href="/facebook/com.facebook.katana">Facebook</a></dd>
                                        
                                        <dd>
                                            <div class="stars"><span class="score" title="Facebook average rating 8.8" style="width:88.00000000000001%"></span><span class="star">8.8</span></div>
                                        </dd>
                                        
                                        
                                            
                                                <dd>Social</dd>
                                            
                                        
                                        <dd class="down"><a rel="nofollow" class="" title="Download Facebook latest version apk" href="/facebook/com.facebook.katana/download?from=home%2Fhot">Install</a></dd>
                                    </dl>
                                </li>

                                <li class="w33">
                                    <dl>
                                        <dt><a title="Facebook Lite APK" href="/facebook-lite/com.facebook.lite"><img alt="Facebook Lite APK" data-srcset="https://image.winudf.com/v2/image1/Y29tLmZhY2Vib29rLmxpdGVfaWNvbl8xNTczNTQ5NzE4XzAxOQ/icon.png?w=150&amp;fakeurl=1 2x" data-original="https://image.winudf.com/v2/image1/Y29tLmZhY2Vib29rLmxpdGVfaWNvbl8xNTczNTQ5NzE4XzAxOQ/icon.png?w=75&amp;fakeurl=1" src="https://static.apkpure.com/www/static/imgs/lazy.png"></a></dt>
                                        <dd class="title-dd"><a title="Facebook Lite APK" href="/facebook-lite/com.facebook.lite">Facebook Lite</a></dd>
                                        
                                        <dd>
                                            <div class="stars"><span class="score" title="Facebook Lite average rating 8.8" style="width:88.00000000000001%"></span><span class="star">8.8</span></div>
                                        </dd>
                                        
                                        
                                            
                                                <dd>Social</dd>
                                            
                                        
                                        <dd class="down"><a rel="nofollow" class="" title="Download Facebook Lite latest version apk" href="/facebook-lite/com.facebook.lite/download?from=home%2Fhot">Install</a></dd>
                                    </dl>
                                </li>

                                <li class="w33">
                                    <dl>
                                        <dt><a title="MX Player APK" href="/mx-player/com.mxtech.videoplayer.ad"><img alt="MX Player APK" data-srcset="https://image.winudf.com/v2/image1/Y29tLm14dGVjaC52aWRlb3BsYXllci5hZF9pY29uXzE1NTgxMTM0NzJfMDcx/icon.png?w=150&amp;fakeurl=1 2x" data-original="https://image.winudf.com/v2/image1/Y29tLm14dGVjaC52aWRlb3BsYXllci5hZF9pY29uXzE1NTgxMTM0NzJfMDcx/icon.png?w=75&amp;fakeurl=1" src="https://static.apkpure.com/www/static/imgs/lazy.png"></a></dt>
                                        <dd class="title-dd"><a title="MX Player APK" href="/mx-player/com.mxtech.videoplayer.ad">MX Player</a></dd>
                                        
                                        <dd>
                                            <div class="stars"><span class="score" title="MX Player average rating 9.6" style="width:96%"></span><span class="star">9.6</span></div>
                                        </dd>
                                        
                                        
                                            
                                                <dd>Video Players &amp; Editors</dd>
                                            
                                        
                                        <dd class="down"><a rel="nofollow" class="" title="Download MX Player latest version apk" href="/mx-player/com.mxtech.videoplayer.ad/download?from=home%2Fhot">Install</a></dd>
                                    </dl>
                                </li>
                            </ul>
                        </div>
                    </div>
    <!-- end table left 2 -->

    <!-- table left 3 -->
                <div class="top">
                    <div class="service-box bg-white text-center" style="margin-top=30px" >
                        <div class="icon-text">
                            <ul class="top-list top-list-s sublist">       
                                <li class="w33">
                                    <a href="/apex-legends-4a/com.ea.apexlegends" title="Apex Legends - Battle Royale">
                                        <dl>
                                            <dt><img alt="Apex Legends - Battle Royale" data-srcset="https://image.winudf.com/v2/user/admin/YWRtaW5fZGN6YTJtdi1iNTg5OGU1OS0wNzQ3LTQ1ZjUtOTFiMy02ODRjNmUwOWJjOTkucG5nXzE1NTA1NjA1NjU1Njk/icon.png?w=150&amp;fakeurl=1 2x" data-original="https://image.winudf.com/v2/user/admin/YWRtaW5fZGN6YTJtdi1iNTg5OGU1OS0wNzQ3LTQ1ZjUtOTFiMy02ODRjNmUwOWJjOTkucG5nXzE1NTA1NjA1NjU1Njk/icon.png?w=75&amp;fakeurl=1" src="https://image.winudf.com/v2/user/admin/YWRtaW5fZGN6YTJtdi1iNTg5OGU1OS0wNzQ3LTQ1ZjUtOTFiMy02ODRjNmUwOWJjOTkucG5nXzE1NTA1NjA1NjU1Njk/icon.png?w=75&amp;fakeurl=1" class="loaded" srcset="https://image.winudf.com/v2/user/admin/YWRtaW5fZGN6YTJtdi1iNTg5OGU1OS0wNzQ3LTQ1ZjUtOTFiMy02ODRjNmUwOWJjOTkucG5nXzE1NTA1NjA1NjU1Njk/icon.png?w=150&amp;fakeurl=1 2x" data-was-processed="true"></dt>
                                            <dd class="title-dd">Apex Legends - Battle Royale</dd>
                                            <dd>Respawn Entertainment</dd>
                                            <dd>Pre-Registrants: 357k</dd>
                                        </dl>
                                    </a>
                                </li>
                                <li class="w33">
                                    <a href="/sky-children-of-the-light/com.tgc.sky.android" title="Sky: Children of the Light">
                                        <dl>
                                            <dt><img alt="Sky: Children of the Light" data-srcset="https://image.winudf.com/v2/image1/Y29tLnRnYy5za3kuYW5kcm9pZF9pY29uXzE1NzQzMTYyMjFfMDQ0/icon.png?w=150&amp;fakeurl=1 2x" data-original="https://image.winudf.com/v2/image1/Y29tLnRnYy5za3kuYW5kcm9pZF9pY29uXzE1NzQzMTYyMjFfMDQ0/icon.png?w=75&amp;fakeurl=1" src="https://image.winudf.com/v2/image1/Y29tLnRnYy5za3kuYW5kcm9pZF9pY29uXzE1NzQzMTYyMjFfMDQ0/icon.png?w=75&amp;fakeurl=1" class="loaded" srcset="https://image.winudf.com/v2/image1/Y29tLnRnYy5za3kuYW5kcm9pZF9pY29uXzE1NzQzMTYyMjFfMDQ0/icon.png?w=150&amp;fakeurl=1 2x" data-was-processed="true"></dt>
                                            <dd class="title-dd">Sky: Children of the Light</dd>
                                            <dd>thatgamecompany inc</dd>
                                            <dd>Pre-Registrants: 33k</dd>
                                        </dl>
                                    </a>
                                </li>
                                <li class="w33">
                                    <a href="/shadowgun-war-Android-online-pvp-fps/com.madfingerAndroid.warAndroid.shooter" title="Shadowgun War Android - Online PvP FPS">
                                        <dl>
                                            <dt><img alt="Shadowgun War Android - Online PvP FPS" data-srcset="https://image.winudf.com/v2/image1/Y29tLm1hZGZpbmdlcmdhbWVzLndhcmdhbWVzLnNob290ZXJfaWNvbl8xNTc2NzA3MDIxXzA3OQ/icon.png?w=150&amp;fakeurl=1 2x" data-original="https://image.winudf.com/v2/image1/Y29tLm1hZGZpbmdlcmdhbWVzLndhcmdhbWVzLnNob290ZXJfaWNvbl8xNTc2NzA3MDIxXzA3OQ/icon.png?w=75&amp;fakeurl=1" src="https://image.winudf.com/v2/image1/Y29tLm1hZGZpbmdlcmdhbWVzLndhcmdhbWVzLnNob290ZXJfaWNvbl8xNTc2NzA3MDIxXzA3OQ/icon.png?w=75&amp;fakeurl=1" class="loaded" srcset="https://image.winudf.com/v2/image1/Y29tLm1hZGZpbmdlcmdhbWVzLndhcmdhbWVzLnNob290ZXJfaWNvbl8xNTc2NzA3MDIxXzA3OQ/icon.png?w=150&amp;fakeurl=1 2x" data-was-processed="true"></dt>
                                            <dd class="title-dd">Shadowgun War Android - Online PvP FPS</dd>
                                            <dd>MADFINGER Android</dd>
                                            <dd>Pre-Registrants: 9.7k</dd>
                                        </dl>
                                    </a>
                                </li>
                                <li class="w33">
                                    <a href="/extraordinary-ones/com.netease.frxyna" title="Extraordinary Ones">
                                        <dl>
                                            <dt><img alt="Extraordinary Ones" data-srcset="https://image.winudf.com/v2/image1/Y29tLm5ldGVhc2UuZnJ4eW5hX2ljb25fMTU3NTU3MzExNl8wNjc/icon.png?w=150&amp;fakeurl=1 2x" data-original="https://image.winudf.com/v2/image1/Y29tLm5ldGVhc2UuZnJ4eW5hX2ljb25fMTU3NTU3MzExNl8wNjc/icon.png?w=75&amp;fakeurl=1" src="https://image.winudf.com/v2/image1/Y29tLm5ldGVhc2UuZnJ4eW5hX2ljb25fMTU3NTU3MzExNl8wNjc/icon.png?w=75&amp;fakeurl=1" class="loaded" srcset="https://image.winudf.com/v2/image1/Y29tLm5ldGVhc2UuZnJ4eW5hX2ljb25fMTU3NTU3MzExNl8wNjc/icon.png?w=150&amp;fakeurl=1 2x" data-was-processed="true"></dt>
                                            <dd class="title-dd">Extraordinary Ones</dd>
                                            <dd>NetEase Android</dd>
                                            <dd>Pre-Registrants: 0</dd>
                                        </dl>
                                    </a>
                                </li>
                                <li class="w33">
                                    <a href="/ms-naomi-s-puzzle/com.gravity.naomi.aos" title="Ms.NAOMI's PUZZLE">
                                        <dl>
                                            <dt><img alt="Ms.NAOMI's PUZZLE" data-srcset="https://image.winudf.com/v2/image1/Y29tLmdyYXZpdHkubmFvbWkuYW9zX2ljb25fMTU3NjUxMTg2MF8wMTI/icon.png?w=150&amp;fakeurl=1 2x" data-original="https://image.winudf.com/v2/image1/Y29tLmdyYXZpdHkubmFvbWkuYW9zX2ljb25fMTU3NjUxMTg2MF8wMTI/icon.png?w=75&amp;fakeurl=1" src="https://image.winudf.com/v2/image1/Y29tLmdyYXZpdHkubmFvbWkuYW9zX2ljb25fMTU3NjUxMTg2MF8wMTI/icon.png?w=75&amp;fakeurl=1" class="loaded" srcset="https://image.winudf.com/v2/image1/Y29tLmdyYXZpdHkubmFvbWkuYW9zX2ljb25fMTU3NjUxMTg2MF8wMTI/icon.png?w=150&amp;fakeurl=1 2x" data-was-processed="true"></dt>
                                            <dd class="title-dd">Ms.NAOMI's PUZZLE</dd>
                                            <dd>GRAVITY Co., Ltd.</dd>
                                            <dd>Pre-Registrants: 79</dd>
                                        </dl>
                                    </a>
                                </li>
                                <li class="w33">
                                    <a href="/puzzle-eudemon-tales/com.igg.android.puzzleeudemontales" title="Puzzle Eudemon Tales">
                                        <dl>
                                            <dt><img alt="Puzzle Eudemon Tales" data-srcset="https://image.winudf.com/v2/image1/Y29tLmlnZy5hbmRyb2lkLnB1enpsZWV1ZGVtb250YWxlc19pY29uXzE1NzQ0NDY0NzJfMDI0/icon.png?w=150&amp;fakeurl=1 2x" data-original="https://image.winudf.com/v2/image1/Y29tLmlnZy5hbmRyb2lkLnB1enpsZWV1ZGVtb250YWxlc19pY29uXzE1NzQ0NDY0NzJfMDI0/icon.png?w=75&amp;fakeurl=1" src="https://image.winudf.com/v2/image1/Y29tLmlnZy5hbmRyb2lkLnB1enpsZWV1ZGVtb250YWxlc19pY29uXzE1NzQ0NDY0NzJfMDI0/icon.png?w=75&amp;fakeurl=1" class="loaded" srcset="https://image.winudf.com/v2/image1/Y29tLmlnZy5hbmRyb2lkLnB1enpsZWV1ZGVtb250YWxlc19pY29uXzE1NzQ0NDY0NzJfMDI0/icon.png?w=150&amp;fakeurl=1 2x" data-was-processed="true"></dt>
                                            <dd class="title-dd">Puzzle Eudemon Tales</dd>
                                            <dd>IGG.COM</dd>
                                            <dd>Pre-Registrants: 100</dd>
                                        </dl>
                                    </a>
                                </li>
                                <li class="w33">
                                    <a href="/racecraft-build-race/com.budgestudios.googleplay.BudgeRacing" title="RaceCraft - Build &amp; Race">
                                        <dl>
                                            <dt><img alt="RaceCraft - Build &amp; Race" data-srcset="https://image.winudf.com/v2/image1/Y29tLmJ1ZGdlc3R1ZGlvcy5nb29nbGVwbGF5LkJ1ZGdlUmFjaW5nX2ljb25fMTU3NjY3OTY0NV8wNTM/icon.png?w=150&amp;fakeurl=1 2x" data-original="https://image.winudf.com/v2/image1/Y29tLmJ1ZGdlc3R1ZGlvcy5nb29nbGVwbGF5LkJ1ZGdlUmFjaW5nX2ljb25fMTU3NjY3OTY0NV8wNTM/icon.png?w=75&amp;fakeurl=1" src="https://image.winudf.com/v2/image1/Y29tLmJ1ZGdlc3R1ZGlvcy5nb29nbGVwbGF5LkJ1ZGdlUmFjaW5nX2ljb25fMTU3NjY3OTY0NV8wNTM/icon.png?w=75&amp;fakeurl=1" class="loaded" srcset="https://image.winudf.com/v2/image1/Y29tLmJ1ZGdlc3R1ZGlvcy5nb29nbGVwbGF5LkJ1ZGdlUmFjaW5nX2ljb25fMTU3NjY3OTY0NV8wNTM/icon.png?w=150&amp;fakeurl=1 2x" data-was-processed="true"></dt>
                                            <dd class="title-dd">RaceCraft - Build &amp; Race</dd>
                                            <dd>Budge Studios</dd>
                                            <dd>Pre-Registrants: 141</dd>
                                        </dl>
                                    </a>
                                </li>
                                <li class="w33">
                                    <a href="/phantoms-tang-dynasty/com.yoozooAndroid.ptd" title="Phantoms: Tang Dynasty">
                                        <dl>
                                            <dt><img alt="Phantoms: Tang Dynasty" data-srcset="https://image.winudf.com/v2/image1/Y29tLnlvb3pvb2dhbWVzLnB0ZF9pY29uXzE1NzQxMjY5MzNfMDAw/icon.png?w=150&amp;fakeurl=1 2x" data-original="https://image.winudf.com/v2/image1/Y29tLnlvb3pvb2dhbWVzLnB0ZF9pY29uXzE1NzQxMjY5MzNfMDAw/icon.png?w=75&amp;fakeurl=1" src="https://image.winudf.com/v2/image1/Y29tLnlvb3pvb2dhbWVzLnB0ZF9pY29uXzE1NzQxMjY5MzNfMDAw/icon.png?w=75&amp;fakeurl=1" class="loaded" srcset="https://image.winudf.com/v2/image1/Y29tLnlvb3pvb2dhbWVzLnB0ZF9pY29uXzE1NzQxMjY5MzNfMDAw/icon.png?w=150&amp;fakeurl=1 2x" data-was-processed="true"></dt>
                                            <dd class="title-dd">Phantoms: Tang Dynasty</dd>
                                            <dd>YOUZU(SINGAPORE)PTE.LTD.</dd>
                                            <dd>Pre-Registrants: 943</dd>
                                        </dl>
                                    </a>
                                </li>
                                <li class="w33">
                                    <a href="/black-clover-phantom-knights/com.bandainamcoent.blackcloverinfiniteknightsww" title="Black Clover Phantom Knights">
                                        <dl>
                                            <dt><img alt="Black Clover Phantom Knights" data-srcset="https://image.winudf.com/v2/image1/Y29tLmJhbmRhaW5hbWNvZW50LmJsYWNrY2xvdmVyaW5maW5pdGVrbmlnaHRzd3dfaWNvbl8xNTc1NjQzNDQ1XzAzOA/icon.png?w=150&amp;fakeurl=1 2x" data-original="https://image.winudf.com/v2/image1/Y29tLmJhbmRhaW5hbWNvZW50LmJsYWNrY2xvdmVyaW5maW5pdGVrbmlnaHRzd3dfaWNvbl8xNTc1NjQzNDQ1XzAzOA/icon.png?w=75&amp;fakeurl=1" src="https://image.winudf.com/v2/image1/Y29tLmJhbmRhaW5hbWNvZW50LmJsYWNrY2xvdmVyaW5maW5pdGVrbmlnaHRzd3dfaWNvbl8xNTc1NjQzNDQ1XzAzOA/icon.png?w=75&amp;fakeurl=1" class="loaded" srcset="https://image.winudf.com/v2/image1/Y29tLmJhbmRhaW5hbWNvZW50LmJsYWNrY2xvdmVyaW5maW5pdGVrbmlnaHRzd3dfaWNvbl8xNTc1NjQzNDQ1XzAzOA/icon.png?w=150&amp;fakeurl=1 2x" data-was-processed="true"></dt>
                                            <dd class="title-dd">Black Clover Phantom Knights</dd>
                                            <dd>BANDAI NAMCO Entertainment Inc.</dd>
                                            <dd>Pre-Registrants: 905</dd>
                                        </dl>
                                    </a>
                                </li>
                            </ul>
                


        

    

                        </div>
                    </div>
                </div>
    <!-- end table 3 -->

    <!-- table left 4 -->
                <div class="top">
                    <div class="service-box bg-white text-center" style="margin-top=30px" >  
                        <div class="icon-text">
                            <ul class="nav nav-tabs nav-tabs-danger top-icon">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#tabe-7"><i class="bx bxl-android"></i> <span class="hidden-xs">Android</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#tabe-8"><i class="bx bxl-apple"></i> <span class="hidden-xs">IOS</span></a>
                                </li> 
                            </ul> 
                                <div class="bd">
                                    <ul class="top-list sublist">
                                        <li class="w33">
                                            <dl>
                                                <dt><a title="Soap Cutting APK" href="/soap-cutting/com.crazylabs.soap.cutting"><img alt="Soap Cutting APK" data-srcset="https://image.winudf.com/v2/image1/Y29tLmNyYXp5bGFicy5zb2FwLmN1dHRpbmdfaWNvbl8xNTc3ODQ3MDEzXzAzNQ/icon.png?w=150&amp;fakeurl=1 2x" data-original="https://image.winudf.com/v2/image1/Y29tLmNyYXp5bGFicy5zb2FwLmN1dHRpbmdfaWNvbl8xNTc3ODQ3MDEzXzAzNQ/icon.png?w=75&amp;fakeurl=1" src="https://image.winudf.com/v2/image1/Y29tLmNyYXp5bGFicy5zb2FwLmN1dHRpbmdfaWNvbl8xNTc3ODQ3MDEzXzAzNQ/icon.png?w=75&amp;fakeurl=1" class="loaded" srcset="https://image.winudf.com/v2/image1/Y29tLmNyYXp5bGFicy5zb2FwLmN1dHRpbmdfaWNvbl8xNTc3ODQ3MDEzXzAzNQ/icon.png?w=150&amp;fakeurl=1 2x" data-was-processed="true"></a></dt>
                                                <dd class="title-dd"><a title="Soap Cutting APK" href="/soap-cutting/com.crazylabs.soap.cutting">Soap Cutting</a></dd>
                                                
                                                <dd>Crazy Labs by TabTale</dd>
                                                
                                                
                                                <dd>2020-01-07</dd>
                                                
                                                <dd class="down"><a rel="nofollow" class="" title="Download Soap Cutting latest version apk" href="/soap-cutting/com.crazylabs.soap.cutting/download?from=home%2Ftopic%2Ftrending-Android">Install</a></dd>
                                            </dl>
                                        </li>

                                        <li class="w33">
                                            <dl>
                                                <dt><a title="Super Stylist - Dress Up &amp; Style Fashion Guru APK" href="/super-stylist-dress-up-style-fashion-guru/com.cocoplay.fashion.style"><img alt="Super Stylist - Dress Up &amp; Style Fashion Guru APK" data-srcset="https://image.winudf.com/v2/image1/Y29tLmNvY29wbGF5LmZhc2hpb24uc3R5bGVfaWNvbl8xNTc2Njg1NTUyXzA5Mw/icon.png?w=150&amp;fakeurl=1 2x" data-original="https://image.winudf.com/v2/image1/Y29tLmNvY29wbGF5LmZhc2hpb24uc3R5bGVfaWNvbl8xNTc2Njg1NTUyXzA5Mw/icon.png?w=75&amp;fakeurl=1" src="https://image.winudf.com/v2/image1/Y29tLmNvY29wbGF5LmZhc2hpb24uc3R5bGVfaWNvbl8xNTc2Njg1NTUyXzA5Mw/icon.png?w=75&amp;fakeurl=1" class="loaded" srcset="https://image.winudf.com/v2/image1/Y29tLmNvY29wbGF5LmZhc2hpb24uc3R5bGVfaWNvbl8xNTc2Njg1NTUyXzA5Mw/icon.png?w=150&amp;fakeurl=1 2x" data-was-processed="true"></a></dt>
                                                <dd class="title-dd"><a title="Super Stylist - Dress Up &amp; Style Fashion Guru APK" href="/super-stylist-dress-up-style-fashion-guru/com.cocoplay.fashion.style">Super Stylist - Dress Up &amp; Style Fashion Guru</a></dd>
                                                
                                                <dd>Crazy Labs by TabTale</dd>
                                                
                                                
                                                <dd>2020-01-07</dd>
                                                
                                                <dd class="down"><a rel="nofollow" class="" title="Download Super Stylist - Dress Up &amp; Style Fashion Guru latest version xapk" href="/super-stylist-dress-up-style-fashion-guru/com.cocoplay.fashion.style/download?from=home%2Ftopic%2Ftrending-Android">Download XAPK</a></dd>
                                            </dl>
                                        </li>

                                        <li class="w33">
                                            <dl>
                                                <dt><a title="Game of Android the Game APK" href="/game-of-Android-the-game/com.wb.goog.ellen.gameofAndroid"><img alt="Game of Android the Game APK" data-srcset="https://image.winudf.com/v2/image1/Y29tLndiLmdvb2cuZWxsZW4uZ2FtZW9mZ2FtZXNfaWNvbl8xNTU0NDM3NTcyXzAyMQ/icon.png?w=150&amp;fakeurl=1 2x" data-original="https://image.winudf.com/v2/image1/Y29tLndiLmdvb2cuZWxsZW4uZ2FtZW9mZ2FtZXNfaWNvbl8xNTU0NDM3NTcyXzAyMQ/icon.png?w=75&amp;fakeurl=1" src="https://image.winudf.com/v2/image1/Y29tLndiLmdvb2cuZWxsZW4uZ2FtZW9mZ2FtZXNfaWNvbl8xNTU0NDM3NTcyXzAyMQ/icon.png?w=75&amp;fakeurl=1" class="loaded" srcset="https://image.winudf.com/v2/image1/Y29tLndiLmdvb2cuZWxsZW4uZ2FtZW9mZ2FtZXNfaWNvbl8xNTU0NDM3NTcyXzAyMQ/icon.png?w=150&amp;fakeurl=1 2x" data-was-processed="true"></a></dt>
                                                <dd class="title-dd"><a title="Game of Android the Game APK" href="/game-of-Android-the-game/com.wb.goog.ellen.gameofAndroid">Game of Android the Game</a></dd>
                                                
                                                <dd>Warner Bros. International Enterprises</dd>
                                                
                                                
                                                <dd>2020-01-07</dd>
                                                
                                                <dd class="down"><a rel="nofollow" class="" title="Download Game of Android the Game latest version apk" href="/game-of-Android-the-game/com.wb.goog.ellen.gameofAndroid/download?from=home%2Ftopic%2Ftrending-Android">Install</a></dd>
                                            </dl>
                                        </li>

                                        <li class="w33">
                                            <dl>
                                                <dt><a title="Unblock Ball - Block Puzzle APK" href="/unblock-ball-block-puzzle/roll.unblock.ball.block.puzzle"><img alt="Unblock Ball - Block Puzzle APK" data-srcset="https://image.winudf.com/v2/image1/cm9sbC51bmJsb2NrLmJhbGwuYmxvY2sucHV6emxlX2ljb25fMTU1NjQ5OTkxNV8wNDg/icon.png?w=150&amp;fakeurl=1 2x" data-original="https://image.winudf.com/v2/image1/cm9sbC51bmJsb2NrLmJhbGwuYmxvY2sucHV6emxlX2ljb25fMTU1NjQ5OTkxNV8wNDg/icon.png?w=75&amp;fakeurl=1" src="https://image.winudf.com/v2/image1/cm9sbC51bmJsb2NrLmJhbGwuYmxvY2sucHV6emxlX2ljb25fMTU1NjQ5OTkxNV8wNDg/icon.png?w=75&amp;fakeurl=1" class="loaded" srcset="https://image.winudf.com/v2/image1/cm9sbC51bmJsb2NrLmJhbGwuYmxvY2sucHV6emxlX2ljb25fMTU1NjQ5OTkxNV8wNDg/icon.png?w=150&amp;fakeurl=1 2x" data-was-processed="true"></a></dt>
                                                <dd class="title-dd"><a title="Unblock Ball - Block Puzzle APK" href="/unblock-ball-block-puzzle/roll.unblock.ball.block.puzzle">Unblock Ball - Block Puzzle</a></dd>
                                                
                                                <dd>Fun Free Fun</dd>
                                                
                                                
                                                <dd>2020-01-07</dd>
                                                
                                                <dd class="down"><a rel="nofollow" class="" title="Download Unblock Ball - Block Puzzle latest version apk" href="/unblock-ball-block-puzzle/roll.unblock.ball.block.puzzle/download?from=home%2Ftopic%2Ftrending-Android">Install</a></dd>
                                            </dl>
                                        </li>

                                        <li class="w33">
                                            <dl>
                                                <dt><a title="Mix Colors! APK" href="/mix-colors/jp.aiayatsuji.mixcolors"><img alt="Mix Colors! APK" data-srcset="https://image.winudf.com/v2/image1/anAuYWlheWF0c3VqaS5taXhjb2xvcnNfaWNvbl8xNTcyNDg2OTAzXzA5NQ/icon.png?w=150&amp;fakeurl=1 2x" data-original="https://image.winudf.com/v2/image1/anAuYWlheWF0c3VqaS5taXhjb2xvcnNfaWNvbl8xNTcyNDg2OTAzXzA5NQ/icon.png?w=75&amp;fakeurl=1" src="https://image.winudf.com/v2/image1/anAuYWlheWF0c3VqaS5taXhjb2xvcnNfaWNvbl8xNTcyNDg2OTAzXzA5NQ/icon.png?w=75&amp;fakeurl=1" class="loaded" srcset="https://image.winudf.com/v2/image1/anAuYWlheWF0c3VqaS5taXhjb2xvcnNfaWNvbl8xNTcyNDg2OTAzXzA5NQ/icon.png?w=150&amp;fakeurl=1 2x" data-was-processed="true"></a></dt>
                                                <dd class="title-dd"><a title="Mix Colors! APK" href="/mix-colors/jp.aiayatsuji.mixcolors">Mix Colors!</a></dd>
                                                
                                                <dd>AiAyatsuji</dd>
                                                
                                                
                                                <dd>2020-01-07</dd>
                                                
                                                <dd class="down"><a rel="nofollow" class="" title="Download Mix Colors! latest version apk" href="/mix-colors/jp.aiayatsuji.mixcolors/download?from=home%2Ftopic%2Ftrending-Android">Install</a></dd>
                                            </dl>
                                        </li>

                                        <li class="w33">
                                            <dl>
                                                <dt><a title="5 Differences Online APK" href="/5-differences-online/org.smIOS.find"><img alt="5 Differences Online APK" data-srcset="https://image.winudf.com/v2/image1/b3JnLnNtYXBwcy5maW5kX2ljb25fMTU2OTk3MzgxNl8wNjk/icon.png?w=150&amp;fakeurl=1 2x" data-original="https://image.winudf.com/v2/image1/b3JnLnNtYXBwcy5maW5kX2ljb25fMTU2OTk3MzgxNl8wNjk/icon.png?w=75&amp;fakeurl=1" src="https://image.winudf.com/v2/image1/b3JnLnNtYXBwcy5maW5kX2ljb25fMTU2OTk3MzgxNl8wNjk/icon.png?w=75&amp;fakeurl=1" class="loaded" srcset="https://image.winudf.com/v2/image1/b3JnLnNtYXBwcy5maW5kX2ljb25fMTU2OTk3MzgxNl8wNjk/icon.png?w=150&amp;fakeurl=1 2x" data-was-processed="true"></a></dt>
                                                <dd class="title-dd"><a title="5 Differences Online APK" href="/5-differences-online/org.smIOS.find">5 Differences Online</a></dd>
                                                
                                                <dd>Smart Project GMBH</dd>
                                                
                                                
                                                <dd>2020-01-07</dd>
                                                
                                                <dd class="down"><a rel="nofollow" class="" title="Download 5 Differences Online latest version apk" href="/5-differences-online/org.smIOS.find/download?from=home%2Ftopic%2Ftrending-Android">Install</a></dd>
                                            </dl>
                                        </li>

                                        <li class="w33">
                                            <dl>
                                                <dt><a title="Idle Makeover APK" href="/idle-makeover/com.mindstormstudios.idlemakeover"><img alt="Idle Makeover APK" data-srcset="https://image.winudf.com/v2/image1/Y29tLm1pbmRzdG9ybXN0dWRpb3MuaWRsZW1ha2VvdmVyX2ljb25fMTU3Njk2ODcxOV8wMjA/icon.png?w=150&amp;fakeurl=1 2x" data-original="https://image.winudf.com/v2/image1/Y29tLm1pbmRzdG9ybXN0dWRpb3MuaWRsZW1ha2VvdmVyX2ljb25fMTU3Njk2ODcxOV8wMjA/icon.png?w=75&amp;fakeurl=1" src="https://image.winudf.com/v2/image1/Y29tLm1pbmRzdG9ybXN0dWRpb3MuaWRsZW1ha2VvdmVyX2ljb25fMTU3Njk2ODcxOV8wMjA/icon.png?w=75&amp;fakeurl=1" class="loaded" srcset="https://image.winudf.com/v2/image1/Y29tLm1pbmRzdG9ybXN0dWRpb3MuaWRsZW1ha2VvdmVyX2ljb25fMTU3Njk2ODcxOV8wMjA/icon.png?w=150&amp;fakeurl=1 2x" data-was-processed="true"></a></dt>
                                                <dd class="title-dd"><a title="Idle Makeover APK" href="/idle-makeover/com.mindstormstudios.idlemakeover">Idle Makeover</a></dd>
                                                
                                                <dd>Lion Studios</dd>
                                                
                                                
                                                <dd>2020-01-07</dd>
                                                
                                                <dd class="down"><a rel="nofollow" class="" title="Download Idle Makeover latest version apk" href="/idle-makeover/com.mindstormstudios.idlemakeover/download?from=home%2Ftopic%2Ftrending-Android">Install</a></dd>
                                            </dl>
                                        </li>

                                        <li class="w33">
                                            <dl>
                                                <dt><a title="Idle Shopping Mall APK" href="/idle-shopping-mall/com.lonAndroid.gp.outlets"><img alt="Idle Shopping Mall APK" data-srcset="https://image.winudf.com/v2/image1/Y29tLmxvbmdhbWVzLmdwLm91dGxldHNfaWNvbl8xNTc2ODU5NjA0XzA1Nw/icon.png?w=150&amp;fakeurl=1 2x" data-original="https://image.winudf.com/v2/image1/Y29tLmxvbmdhbWVzLmdwLm91dGxldHNfaWNvbl8xNTc2ODU5NjA0XzA1Nw/icon.png?w=75&amp;fakeurl=1" src="https://image.winudf.com/v2/image1/Y29tLmxvbmdhbWVzLmdwLm91dGxldHNfaWNvbl8xNTc2ODU5NjA0XzA1Nw/icon.png?w=75&amp;fakeurl=1" class="loaded" srcset="https://image.winudf.com/v2/image1/Y29tLmxvbmdhbWVzLmdwLm91dGxldHNfaWNvbl8xNTc2ODU5NjA0XzA1Nw/icon.png?w=150&amp;fakeurl=1 2x" data-was-processed="true"></a></dt>
                                                <dd class="title-dd"><a title="Idle Shopping Mall APK" href="/idle-shopping-mall/com.lonAndroid.gp.outlets">Idle Shopping Mall</a></dd>
                                                
                                                <dd>Glimmering Game Limited</dd>
                                                
                                                
                                                <dd>2020-01-07</dd>
                                                
                                                <dd class="down"><a rel="nofollow" class="" title="Download Idle Shopping Mall latest version xapk" href="/idle-shopping-mall/com.lonAndroid.gp.outlets/download?from=home%2Ftopic%2Ftrending-Android">Download XAPK</a></dd>
                                            </dl>
                                        </li>

                                        <li class="w33">
                                            <dl>
                                                <dt><a title="Blackjack APK" href="/blackjack/com.tripledot.blackjack"><img alt="Blackjack APK" data-srcset="https://image.winudf.com/v2/image1/Y29tLnRyaXBsZWRvdC5ibGFja2phY2tfaWNvbl8xNTc1NDEzNzA1XzAxMg/icon.png?w=150&amp;fakeurl=1 2x" data-original="https://image.winudf.com/v2/image1/Y29tLnRyaXBsZWRvdC5ibGFja2phY2tfaWNvbl8xNTc1NDEzNzA1XzAxMg/icon.png?w=75&amp;fakeurl=1" src="https://image.winudf.com/v2/image1/Y29tLnRyaXBsZWRvdC5ibGFja2phY2tfaWNvbl8xNTc1NDEzNzA1XzAxMg/icon.png?w=75&amp;fakeurl=1" class="loaded" srcset="https://image.winudf.com/v2/image1/Y29tLnRyaXBsZWRvdC5ibGFja2phY2tfaWNvbl8xNTc1NDEzNzA1XzAxMg/icon.png?w=150&amp;fakeurl=1 2x" data-was-processed="true"></a></dt>
                                                <dd class="title-dd"><a title="Blackjack APK" href="/blackjack/com.tripledot.blackjack">Blackjack</a></dd>
                                                
                                                <dd>Tripledot Studios Limited</dd>
                                                
                                                
                                                <dd>2020-01-07</dd>
                                                
                                                <dd class="down"><a rel="nofollow" class="" title="Download Blackjack latest version apk" href="/blackjack/com.tripledot.blackjack/download?from=home%2Ftopic%2Ftrending-Android">Install</a></dd>
                                            </dl>
                                        </li>
                                                        </ul>
                                                        <ul class="top-list sublist" style="display: none;">
                                                            
                                                            

                                        <li class="w33">
                                            <dl>
                                                <dt><a title="Android Auto - Google Maps, Media &amp; Messaging APK" href="/android-auto-google-maps-media-messaging/com.google.android.projection.gearhead"><img alt="Android Auto - Google Maps, Media &amp; Messaging APK" data-srcset="https://image.winudf.com/v2/image1/Y29tLmdvb2dsZS5hbmRyb2lkLnByb2plY3Rpb24uZ2VhcmhlYWRfaWNvbl8xNTYxNjUwMTI3XzAzMA/icon.png?w=150&amp;fakeurl=1 2x" data-original="https://image.winudf.com/v2/image1/Y29tLmdvb2dsZS5hbmRyb2lkLnByb2plY3Rpb24uZ2VhcmhlYWRfaWNvbl8xNTYxNjUwMTI3XzAzMA/icon.png?w=75&amp;fakeurl=1" src="https://static.apkpure.com/www/static/imgs/lazy.png"></a></dt>
                                                <dd class="title-dd"><a title="Android Auto - Google Maps, Media &amp; Messaging APK" href="/android-auto-google-maps-media-messaging/com.google.android.projection.gearhead">Android Auto - Google Maps, Media &amp; Messaging</a></dd>
                                                
                                                <dd>Google LLC</dd>
                                                
                                                
                                                <dd>2020-01-07</dd>
                                                
                                                <dd class="down"><a rel="nofollow" class="" title="Download Android Auto - Google Maps, Media &amp; Messaging latest version apk" href="/android-auto-google-maps-media-messaging/com.google.android.projection.gearhead/download?from=home%2Ftopic%2Ftrending-IOS">Install</a></dd>
                                            </dl>
                                        </li>

                                        <li class="w33">
                                            <dl>
                                                <dt><a title="Android System WebView APK" href="/android-system-webview/com.google.android.webview"><img alt="Android System WebView APK" data-srcset="https://image.winudf.com/v2/image1/Y29tLmdvb2dsZS5hbmRyb2lkLndlYnZpZXdfaWNvbl8xNTYzMjQ3MDUyXzAxMQ/icon.png?w=150&amp;fakeurl=1 2x" data-original="https://image.winudf.com/v2/image1/Y29tLmdvb2dsZS5hbmRyb2lkLndlYnZpZXdfaWNvbl8xNTYzMjQ3MDUyXzAxMQ/icon.png?w=75&amp;fakeurl=1" src="https://static.apkpure.com/www/static/imgs/lazy.png"></a></dt>
                                                <dd class="title-dd"><a title="Android System WebView APK" href="/android-system-webview/com.google.android.webview">Android System WebView</a></dd>
                                                
                                                <dd>Google LLC</dd>
                                                
                                                
                                                <dd>2020-01-07</dd>
                                                
                                                <dd class="down"><a rel="nofollow" class="" title="Download Android System WebView latest version apk" href="/android-system-webview/com.google.android.webview/download?from=home%2Ftopic%2Ftrending-IOS">Install</a></dd>
                                            </dl>
                                        </li>

                                        <li class="w33">
                                            <dl>
                                                <dt><a title="🚨 Earthquake Network - Realtime alerts APK" href="/%F0%9F%9A%A8-earthquake-network-realtime-alerts/com.finazzi.distquake"><img alt="🚨 Earthquake Network - Realtime alerts APK" data-srcset="https://image.winudf.com/v2/image1/Y29tLmZpbmF6emkuZGlzdHF1YWtlX2ljb25fMTU3NjIwMjQ0NF8wMTI/icon.png?w=150&amp;fakeurl=1 2x" data-original="https://image.winudf.com/v2/image1/Y29tLmZpbmF6emkuZGlzdHF1YWtlX2ljb25fMTU3NjIwMjQ0NF8wMTI/icon.png?w=75&amp;fakeurl=1" src="https://static.apkpure.com/www/static/imgs/lazy.png"></a></dt>
                                                <dd class="title-dd"><a title="🚨 Earthquake Network - Realtime alerts APK" href="/%F0%9F%9A%A8-earthquake-network-realtime-alerts/com.finazzi.distquake">🚨 Earthquake Network - Realtime alerts</a></dd>
                                                
                                                <dd>Francesco Finazzi</dd>
                                                
                                                
                                                <dd>2020-01-07</dd>
                                                
                                                <dd class="down"><a rel="nofollow" class="" title="Download 🚨 Earthquake Network - Realtime alerts latest version apk" href="/%F0%9F%9A%A8-earthquake-network-realtime-alerts/com.finazzi.distquake/download?from=home%2Ftopic%2Ftrending-IOS">Install</a></dd>
                                            </dl>
                                        </li>

                                        <li class="w33">
                                            <dl>
                                                <dt><a title="YouTube Kids APK" href="/youtube-kids/com.google.android.IOS.youtube.kids"><img alt="YouTube Kids APK" data-srcset="https://image.winudf.com/v2/image1/Y29tLmdvb2dsZS5hbmRyb2lkLmFwcHMueW91dHViZS5raWRzX2ljb25fMTU2NTQwOTM0OF8wNjY/icon.png?w=150&amp;fakeurl=1 2x" data-original="https://image.winudf.com/v2/image1/Y29tLmdvb2dsZS5hbmRyb2lkLmFwcHMueW91dHViZS5raWRzX2ljb25fMTU2NTQwOTM0OF8wNjY/icon.png?w=75&amp;fakeurl=1" src="https://static.apkpure.com/www/static/imgs/lazy.png"></a></dt>
                                                <dd class="title-dd"><a title="YouTube Kids APK" href="/youtube-kids/com.google.android.IOS.youtube.kids">YouTube Kids</a></dd>
                                                
                                                <dd>Google LLC</dd>
                                                
                                                
                                                <dd>2020-01-07</dd>
                                                
                                                <dd class="down"><a rel="nofollow" class="" title="Download YouTube Kids latest version apk" href="/youtube-kids/com.google.android.IOS.youtube.kids/download?from=home%2Ftopic%2Ftrending-IOS">Install</a></dd>
                                            </dl>
                                        </li>

                                        <li class="w33">
                                            <dl>
                                                <dt><a title="Remind: School Communication APK" href="/remind-school-communication/com.remind101"><img alt="Remind: School Communication APK" data-srcset="https://image.winudf.com/v2/image1/Y29tLnJlbWluZDEwMV9pY29uXzE1NTQ3NjMwODBfMDMx/icon.png?w=150&amp;fakeurl=1 2x" data-original="https://image.winudf.com/v2/image1/Y29tLnJlbWluZDEwMV9pY29uXzE1NTQ3NjMwODBfMDMx/icon.png?w=75&amp;fakeurl=1" src="https://static.apkpure.com/www/static/imgs/lazy.png"></a></dt>
                                                <dd class="title-dd"><a title="Remind: School Communication APK" href="/remind-school-communication/com.remind101">Remind: School Communication</a></dd>
                                                
                                                <dd>Remind101</dd>
                                                
                                                
                                                <dd>2020-01-07</dd>
                                                
                                                <dd class="down"><a rel="nofollow" class="" title="Download Remind: School Communication latest version apk" href="/remind-school-communication/com.remind101/download?from=home%2Ftopic%2Ftrending-IOS">Install</a></dd>
                                            </dl>
                                        </li>

                                        <li class="w33">
                                            <dl>
                                                <dt><a title="Canvas Student APK" href="/canvas-student/com.instructure.candroid"><img alt="Canvas Student APK" data-srcset="https://image.winudf.com/v2/image1/Y29tLmluc3RydWN0dXJlLmNhbmRyb2lkX2ljb25fMTU2MTY4Njk1NV8wMTA/icon.png?w=150&amp;fakeurl=1 2x" data-original="https://image.winudf.com/v2/image1/Y29tLmluc3RydWN0dXJlLmNhbmRyb2lkX2ljb25fMTU2MTY4Njk1NV8wMTA/icon.png?w=75&amp;fakeurl=1" src="https://static.apkpure.com/www/static/imgs/lazy.png"></a></dt>
                                                <dd class="title-dd"><a title="Canvas Student APK" href="/canvas-student/com.instructure.candroid">Canvas Student</a></dd>
                                                
                                                <dd>Instructure</dd>
                                                
                                                
                                                <dd>2020-01-07</dd>
                                                
                                                <dd class="down"><a rel="nofollow" class="" title="Download Canvas Student latest version xapk" href="/canvas-student/com.instructure.candroid/download?from=home%2Ftopic%2Ftrending-IOS">Download XAPK</a></dd>
                                            </dl>
                                        </li>

                                        <li class="w33">
                                            <dl>
                                                <dt><a title="Poshmark - Buy &amp; Sell Fashion APK" href="/poshmark-buy-sell-fashion/com.poshmark.app"><img alt="Poshmark - Buy &amp; Sell Fashion APK" data-srcset="https://image.winudf.com/v2/image1/Y29tLnBvc2htYXJrLmFwcF9pY29uXzE1NjE1OTQ1NDVfMDE4/icon.png?w=150&amp;fakeurl=1 2x" data-original="https://image.winudf.com/v2/image1/Y29tLnBvc2htYXJrLmFwcF9pY29uXzE1NjE1OTQ1NDVfMDE4/icon.png?w=75&amp;fakeurl=1" src="https://static.apkpure.com/www/static/imgs/lazy.png"></a></dt>
                                                <dd class="title-dd"><a title="Poshmark - Buy &amp; Sell Fashion APK" href="/poshmark-buy-sell-fashion/com.poshmark.app">Poshmark - Buy &amp; Sell Fashion</a></dd>
                                                
                                                <dd>Poshmark, Inc</dd>
                                                
                                                
                                                <dd>2020-01-07</dd>
                                                
                                                <dd class="down"><a rel="nofollow" class="" title="Download Poshmark - Buy &amp; Sell Fashion latest version apk" href="/poshmark-buy-sell-fashion/com.poshmark.app/download?from=home%2Ftopic%2Ftrending-IOS">Install</a></dd>
                                            </dl>
                                        </li>

                                        <li class="w33">
                                            <dl>
                                                <dt><a title="Digital Wellbeing APK" href="/digital-wellbeing/com.google.android.IOS.wellbeing"><img alt="Digital Wellbeing APK" data-srcset="https://image.winudf.com/v2/image1/Y29tLmdvb2dsZS5hbmRyb2lkLmFwcHMud2VsbGJlaW5nX2ljb25fMTU1NjAzMjUxMV8wMDI/icon.png?w=150&amp;fakeurl=1 2x" data-original="https://image.winudf.com/v2/image1/Y29tLmdvb2dsZS5hbmRyb2lkLmFwcHMud2VsbGJlaW5nX2ljb25fMTU1NjAzMjUxMV8wMDI/icon.png?w=75&amp;fakeurl=1" src="https://static.apkpure.com/www/static/imgs/lazy.png"></a></dt>
                                                <dd class="title-dd"><a title="Digital Wellbeing APK" href="/digital-wellbeing/com.google.android.IOS.wellbeing">Digital Wellbeing</a></dd>
                                                
                                                <dd>Google LLC</dd>
                                                
                                                
                                                <dd>2020-01-07</dd>
                                                
                                                <dd class="down"><a rel="nofollow" class="" title="Download Digital Wellbeing latest version apk" href="/digital-wellbeing/com.google.android.IOS.wellbeing/download?from=home%2Ftopic%2Ftrending-IOS">Install</a></dd>
                                            </dl>
                                        </li>

                                        <li class="w33">
                                            <dl>
                                                <dt><a title="YouTube Studio APK" href="/youtube-studio/com.google.android.IOS.youtube.creator"><img alt="YouTube Studio APK" data-srcset="https://image.winudf.com/v2/image1/Y29tLmdvb2dsZS5hbmRyb2lkLmFwcHMueW91dHViZS5jcmVhdG9yX2ljb25fMTU2NzUzMjA2NV8wMzE/icon.png?w=150&amp;fakeurl=1 2x" data-original="https://image.winudf.com/v2/image1/Y29tLmdvb2dsZS5hbmRyb2lkLmFwcHMueW91dHViZS5jcmVhdG9yX2ljb25fMTU2NzUzMjA2NV8wMzE/icon.png?w=75&amp;fakeurl=1" src="https://static.apkpure.com/www/static/imgs/lazy.png"></a></dt>
                                                <dd class="title-dd"><a title="YouTube Studio APK" href="/youtube-studio/com.google.android.IOS.youtube.creator">YouTube Studio</a></dd>
                                                
                                                <dd>Google LLC</dd>
                                                
                                                
                                                <dd>2020-01-07</dd>
                                                
                                                <dd class="down"><a rel="nofollow" class="" title="Download YouTube Studio latest version xapk" href="/youtube-studio/com.google.android.IOS.youtube.creator/download?from=home%2Ftopic%2Ftrending-IOS">Download XAPK</a></dd>
                                            </dl>
                                            </li>                  
                                    </ul>
                                </div>
                        </div>
                    </div>
                </div>
    <!-- end table left 4 -->

    <!-- table left 5 -->
                <div class="top">
                    <div class="service-box bg-white text-center" style="margin-top=30px" >
                        <div class="icon-text">
                            <ul class="top-list top-list-s sublist">
                                <li class="w5">
                                    <a href="/russian-car-driver-zil-130-premium/com.AB.RCDZILPE" title="Russian Car Driver  ZIL 130 Premium">
                                        <dl>
                                            <dt><img alt="Russian Car Driver  ZIL 130 Premium" data-srcset="https://image.winudf.com/v2/image1/Y29tLkFCLlJDRFpJTFBFX2ljb25fMTU1MzU1NDY2Ml8wMDM/icon.png?w=150&amp;fakeurl=1 2x" data-original="https://image.winudf.com/v2/image1/Y29tLkFCLlJDRFpJTFBFX2ljb25fMTU1MzU1NDY2Ml8wMDM/icon.png?w=75&amp;fakeurl=1" src="https://image.winudf.com/v2/image1/Y29tLkFCLlJDRFpJTFBFX2ljb25fMTU1MzU1NDY2Ml8wMDM/icon.png?w=75&amp;fakeurl=1" class="loaded" srcset="https://image.winudf.com/v2/image1/Y29tLkFCLlJDRFpJTFBFX2ljb25fMTU1MzU1NDY2Ml8wMDM/icon.png?w=150&amp;fakeurl=1 2x" data-was-processed="true"></dt>
                                            <dd class="title-dd">Russian Car Driver  ZIL 130 Premium</dd>
                                            <dd>Simulation</dd>
                                            <dd>ABAndroid89</dd>
                                            <dd class="price">
                                                            <span class="price-new">$0.99</span>
                                                            <span class="price-old">$1.49</span>
                                                            <span class="price-disco">-34%</span>
                                                        </dd>
                                        </dl>
                                    </a>
                                </li>
                                <li class="w5">
                                    <a href="/flockers/com.team17.flockers" title="Flockers">
                                        <dl>
                                            <dt><img alt="Flockers" data-srcset="https://image.winudf.com/v2/image/Y29tLnRlYW0xNy5mbG9ja2Vyc19pY29uXzBfYjU5MWUwNTI/icon.png?w=150&amp;fakeurl=1 2x" data-original="https://image.winudf.com/v2/image/Y29tLnRlYW0xNy5mbG9ja2Vyc19pY29uXzBfYjU5MWUwNTI/icon.png?w=75&amp;fakeurl=1" src="https://image.winudf.com/v2/image/Y29tLnRlYW0xNy5mbG9ja2Vyc19pY29uXzBfYjU5MWUwNTI/icon.png?w=75&amp;fakeurl=1" class="loaded" srcset="https://image.winudf.com/v2/image/Y29tLnRlYW0xNy5mbG9ja2Vyc19pY29uXzBfYjU5MWUwNTI/icon.png?w=150&amp;fakeurl=1 2x" data-was-processed="true"></dt>
                                            <dd class="title-dd">Flockers</dd>
                                            <dd>Puzzle</dd>
                                            <dd>Team 17 Digital Limited</dd>
                                            <dd class="price">
                                                            <span class="price-new">$0.99</span>
                                                            <span class="price-old">$1.99</span>
                                                            <span class="price-disco">-50%</span>
                                                        </dd>
                                        </dl>
                                    </a>
                                </li>
                                <li class="w5">
                                    <a href="/siege-of-dragonspear/com.beamdog.siegeofdragonspear" title="Siege of Dragonspear">
                                        <dl>
                                            <dt><img alt="Siege of Dragonspear" data-srcset="https://image.winudf.com/v2/image/Y29tLmJlYW1kb2cuc2llZ2VvZmRyYWdvbnNwZWFyX2ljb25fMTUyODQxMjEwOV8wNzE/icon.png?w=150&amp;fakeurl=1 2x" data-original="https://image.winudf.com/v2/image/Y29tLmJlYW1kb2cuc2llZ2VvZmRyYWdvbnNwZWFyX2ljb25fMTUyODQxMjEwOV8wNzE/icon.png?w=75&amp;fakeurl=1" src="https://image.winudf.com/v2/image/Y29tLmJlYW1kb2cuc2llZ2VvZmRyYWdvbnNwZWFyX2ljb25fMTUyODQxMjEwOV8wNzE/icon.png?w=75&amp;fakeurl=1" class="loaded" srcset="https://image.winudf.com/v2/image/Y29tLmJlYW1kb2cuc2llZ2VvZmRyYWdvbnNwZWFyX2ljb25fMTUyODQxMjEwOV8wNzE/icon.png?w=150&amp;fakeurl=1 2x" data-was-processed="true"></dt>
                                            <dd class="title-dd">Siege of Dragonspear</dd>
                                            <dd>Role Playing</dd>
                                            <dd>Beamdog</dd>
                                            <dd class="price">
                                                            <span class="price-new">$1.99</span>
                                                            <span class="price-old">$9.99</span>
                                                            <span class="price-disco">-80%</span>
                                                        </dd>
                                        </dl>
                                    </a>
                                </li>
                                <li class="w5">
                                    <a href="/sudoku-deluxe-vip/com.artstorm.sudokuvip" title="Sudoku Deluxe VIP">
                                        <dl>
                                            <dt><img alt="Sudoku Deluxe VIP" data-srcset="https://image.winudf.com/v2/image1/Y29tLmFydHN0b3JtLnN1ZG9rdXZpcF9pY29uXzE1NjE0MTcwNjNfMDY4/icon.png?w=150&amp;fakeurl=1 2x" data-original="https://image.winudf.com/v2/image1/Y29tLmFydHN0b3JtLnN1ZG9rdXZpcF9pY29uXzE1NjE0MTcwNjNfMDY4/icon.png?w=75&amp;fakeurl=1" src="https://image.winudf.com/v2/image1/Y29tLmFydHN0b3JtLnN1ZG9rdXZpcF9pY29uXzE1NjE0MTcwNjNfMDY4/icon.png?w=75&amp;fakeurl=1" class="loaded" srcset="https://image.winudf.com/v2/image1/Y29tLmFydHN0b3JtLnN1ZG9rdXZpcF9pY29uXzE1NjE0MTcwNjNfMDY4/icon.png?w=150&amp;fakeurl=1 2x" data-was-processed="true"></dt>
                                            <dd class="title-dd">Sudoku Deluxe VIP</dd>
                                            <dd>Puzzle</dd>
                                            <dd>ArtStorm</dd>
                                            <dd class="price">
                                                            <span class="price-new">Free</span>
                                                            <span class="price-old">$1.99</span>
                                                            <span class="price-disco">-100%</span>
                                                        </dd>
                                        </dl>
                                    </a>
                                </li>
                                <li class="w5">
                                    <a href="/simulator-z-ad-free/com.GorillaAndroidStudio.Zombie" title="Simulator Z - Ad Free">
                                        <dl>
                                            <dt><img alt="Simulator Z - Ad Free" data-srcset="https://image.winudf.com/v2/image1/Y29tLkdvcmlsbGFHYW1lc1N0dWRpby5ab21iaWVfaWNvbl8xNTc3MDg4NjI1XzA0OA/icon.png?w=150&amp;fakeurl=1 2x" data-original="https://image.winudf.com/v2/image1/Y29tLkdvcmlsbGFHYW1lc1N0dWRpby5ab21iaWVfaWNvbl8xNTc3MDg4NjI1XzA0OA/icon.png?w=75&amp;fakeurl=1" src="https://image.winudf.com/v2/image1/Y29tLkdvcmlsbGFHYW1lc1N0dWRpby5ab21iaWVfaWNvbl8xNTc3MDg4NjI1XzA0OA/icon.png?w=75&amp;fakeurl=1" class="loaded" srcset="https://image.winudf.com/v2/image1/Y29tLkdvcmlsbGFHYW1lc1N0dWRpby5ab21iaWVfaWNvbl8xNTc3MDg4NjI1XzA0OA/icon.png?w=150&amp;fakeurl=1 2x" data-was-processed="true"></dt>
                                            <dd class="title-dd">Simulator Z - Ad Free</dd>
                                            <dd>Simulation</dd>
                                            <dd>GorillaAndroidStudio</dd>
                                            <dd class="price">
                                                            <span class="price-new">$1.49</span>
                                                            <span class="price-old">$2.99</span>
                                                            <span class="price-disco">-50%</span>
                                                        </dd>
                                        </dl>
                                    </a>
                                </li>
                                <li class="w5">
                                    <a href="/crystal-wars/com.bluekid.crystalwars" title="Crystal Wars">
                                        <dl>
                                            <dt><img alt="Crystal Wars" data-srcset="https://image.winudf.com/v2/image1/Y29tLmJsdWVraWQuY3J5c3RhbHdhcnNfaWNvbl8xNTY5NTMzMzc1XzAwOA/icon.png?w=150&amp;fakeurl=1 2x" data-original="https://image.winudf.com/v2/image1/Y29tLmJsdWVraWQuY3J5c3RhbHdhcnNfaWNvbl8xNTY5NTMzMzc1XzAwOA/icon.png?w=75&amp;fakeurl=1" src="https://image.winudf.com/v2/image1/Y29tLmJsdWVraWQuY3J5c3RhbHdhcnNfaWNvbl8xNTY5NTMzMzc1XzAwOA/icon.png?w=75&amp;fakeurl=1" class="loaded" srcset="https://image.winudf.com/v2/image1/Y29tLmJsdWVraWQuY3J5c3RhbHdhcnNfaWNvbl8xNTY5NTMzMzc1XzAwOA/icon.png?w=150&amp;fakeurl=1 2x" data-was-processed="true"></dt>
                                            <dd class="title-dd">Crystal Wars</dd>
                                            <dd>Action</dd>
                                            <dd>BLUEKID</dd>
                                            <dd class="price">
                                                            <span class="price-new">$0.99</span>
                                                            <span class="price-old">$1.49</span>
                                                            <span class="price-disco">-34%</span>
                                                        </dd>
                                        </dl>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
    <!-- end table 5 -->

    <!-- table left 6 -->  
                    <div class="service-box bg-white text-center" style="margin-top: 40px;">
                        <div class="icon-text">
                        <div class="title" >
                                <a href="/discover">Discover »</a>
                                <a href="/discover">More »</a>
                            </div>

                                <div class="topics-side">
                                        <ul>
                                            
                                            <li>
                                                <a href="http://topic.neocraftstudio.com/sword_icon_vote/index.php?utm_source=Hima" title="One Last Step for Eternal Sword M - Icon, slogan and more!" rel="nofollow" target="_blank">
                                                    <div class="topic-bg-degault">
                                                            <div class="lazygb_topic" data-original="https://image.winudf.com/v2/user/admin/YWRtaW5fzbbGsWJhbm5lctKzLmpwZ18xNTc3ODQxODI1MTY4/image.png?fakeurl=1&amp;w=390" data-was-processed="true" style="background-image: url(&quot;https://image.winudf.com/v2/user/admin/YWRtaW5fzbbGsWJhbm5lctKzLmpwZ18xNTc3ODQxODI1MTY4/image.png?fakeurl=1&amp;w=390&quot;);"></div>
                                                        </div>
                                                    <div class="tit">One Last Step for Eternal Sword M - Icon, slogan and more!</div>
                                                </a>
                                            </li>
                                            
                                            <li>
                                                <a href="/topic/happy-new-year-2020" title="Happy new year">
                                                    <div class="topic-bg-degault">
                                                            <div class="lazygb_topic" data-original="https://image.winudf.com/v2/user/admin/YWRtaW5faGFwcHkgbmV3IHllYXIhICgyKS5wbmdfMTU3NTg4MjI0Mzk0NA/image.png?fakeurl=1&amp;w=390" data-was-processed="true" style="background-image: url(&quot;https://image.winudf.com/v2/user/admin/YWRtaW5faGFwcHkgbmV3IHllYXIhICgyKS5wbmdfMTU3NTg4MjI0Mzk0NA/image.png?fakeurl=1&amp;w=390&quot;);"></div>
                                                        </div>
                                                    <div class="tit">Happy new year</div>
                                                </a>
                                            </li>
                                            
                                            <li>
                                                <a href="/topic/best-android-IOS-2019" title="Best Android IOS of 2019">
                                                    <div class="topic-bg-degault">
                                                            <div class="lazygb_topic" data-original="https://image.winudf.com/v2/user/admin/YWRtaW5f5re75Yqg5qCH6aKYICgyKS5wbmdfMTU3NTQ0MzgwMjI4MQ/image.png?fakeurl=1&amp;w=390" data-was-processed="true" style="background-image: url(&quot;https://image.winudf.com/v2/user/admin/YWRtaW5f5re75Yqg5qCH6aKYICgyKS5wbmdfMTU3NTQ0MzgwMjI4MQ/image.png?fakeurl=1&amp;w=390&quot;);"></div>
                                                        </div>
                                                    <div class="tit">Best Android IOS of 2019</div>
                                                </a>
                                            </li>
                                            
                                        </ul>
                                </div>    
                        </div>
                    </div>
    <!---end table 6-->

    <!-- table left 7 -->
                <div class="top">
                    <div class="service-box bg-white text-center">
                        <div class="icon-text">
                            <ul class="nav nav-tabs nav-tabs-danger top-icon">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#tabe-7"><i class="bx bxl-android"></i> <span class="hidden-xs">Android</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#tabe-8"><i class="bx bxl-apple"></i> <span class="hidden-xs">IOS</span></a>
                                </li>
                            </ul>


                            <div class="bd">
                                <ul class="top-list sublist">
                                    <li class="w33">
                                        <dl>
                                            <dt><a title="Anti Terrorist - Gun Shooting Game APK" href="/vn/anti-terrorist-gun-shooting-game/com.nanohead.antiterroriststrike"><img alt="Anti Terrorist - Gun Shooting Game APK" data-srcset="https://image.winudf.com/v2/image1/Y29tLm5hbm9oZWFkLmFudGl0ZXJyb3Jpc3RzdHJpa2VfaWNvbl8xNTUwMDU1NzA3XzAwNQ/icon.png?w=150&amp;fakeurl=1 2x" data-original="https://image.winudf.com/v2/image1/Y29tLm5hbm9oZWFkLmFudGl0ZXJyb3Jpc3RzdHJpa2VfaWNvbl8xNTUwMDU1NzA3XzAwNQ/icon.png?w=75&amp;fakeurl=1" src="https://static.apkpure.com/www/static/imgs/lazy.png"/></a></dt>
                                            <dd class="title-dd"><a title="Anti Terrorist - Gun Shooting Game APK" href="/vn/anti-terrorist-gun-shooting-game/com.nanohead.antiterroriststrike">Anti Terrorist - Gun Shooting Game</a></dd>
                                            
                                            <dd>1.1.8</dd>
                                            
                                            
                                                
                                                    <dd>2020-11-30</dd>
                                                
                                            
                                            <dd class="down"><a rel="nofollow" class="" title="Tải về xapk Anti Terrorist - Gun Shooting Game phiên bản mới nhất" href="/vn/anti-terrorist-gun-shooting-game/com.nanohead.antiterroriststrike/download?from=home%2Fnew">Tải về XAPK</a></dd>
                                        </dl>
                                    </li>

                                    <li class="w33">
                                        <dl>
                                            <dt><a title="School of Chaos Online MMORPG APK" href="/vn/school-of-chaos-online-mmorpg/com.vnlentertainment.mmoproject"><img alt="School of Chaos Online MMORPG APK" data-srcset="https://image.winudf.com/v2/image1/Y29tLnZubGVudGVydGFpbm1lbnQubW1vcHJvamVjdF9pY29uXzE1NjE2MTEyNzJfMDQ2/icon.png?w=150&amp;fakeurl=1 2x" data-original="https://image.winudf.com/v2/image1/Y29tLnZubGVudGVydGFpbm1lbnQubW1vcHJvamVjdF9pY29uXzE1NjE2MTEyNzJfMDQ2/icon.png?w=75&amp;fakeurl=1" src="https://static.apkpure.com/www/static/imgs/lazy.png"/></a></dt>
                                            <dd class="title-dd"><a title="School of Chaos Online MMORPG APK" href="/vn/school-of-chaos-online-mmorpg/com.vnlentertainment.mmoproject">School of Chaos Online MMORPG</a></dd>
                                            
                                            <dd>1.796</dd>
                                            
                                            
                                                
                                                    <dd>2020-11-30</dd>
                                                
                                            
                                            <dd class="down"><a rel="nofollow" class="" title="Tải về xapk School of Chaos Online MMORPG phiên bản mới nhất" href="/vn/school-of-chaos-online-mmorpg/com.vnlentertainment.mmoproject/download?from=home%2Fnew">Tải về XAPK</a></dd>
                                        </dl>
                                    </li>

                                    <li class="w33">
                                        <dl>
                                            <dt><a title="Sechsundsechzig Offline - 66 Kartenspiel APK" href="/vn/sixty-six-offline-66-single-player-card-game/com.zariba.sechsundsechzig.offline"><img alt="Sechsundsechzig Offline - 66 Kartenspiel APK" data-srcset="https://image.winudf.com/v2/image1/Y29tLnphcmliYS5zZWNoc3VuZHNlY2h6aWcub2ZmbGluZV9pY29uXzE1NzQwNjk2NTNfMDgw/icon.png?w=150&amp;fakeurl=1 2x" data-original="https://image.winudf.com/v2/image1/Y29tLnphcmliYS5zZWNoc3VuZHNlY2h6aWcub2ZmbGluZV9pY29uXzE1NzQwNjk2NTNfMDgw/icon.png?w=75&amp;fakeurl=1" src="https://static.apkpure.com/www/static/imgs/lazy.png"/></a></dt>
                                            <dd class="title-dd"><a title="Sechsundsechzig Offline - 66 Kartenspiel APK" href="/vn/sixty-six-offline-66-single-player-card-game/com.zariba.sechsundsechzig.offline">Sechsundsechzig Offline - 66 Kartenspiel</a></dd>
                                            
                                            <dd>1.5.11</dd>
                                            
                                            
                                                
                                                    <dd>2020-11-30</dd>
                                                
                                            
                                            <dd class="down"><a rel="nofollow" class="" title="Tải về xapk Sechsundsechzig Offline - 66 Kartenspiel phiên bản mới nhất" href="/vn/sixty-six-offline-66-single-player-card-game/com.zariba.sechsundsechzig.offline/download?from=home%2Fnew">Tải về XAPK</a></dd>
                                        </dl>
                                    </li>

                                    <li class="w33">
                                        <dl>
                                            <dt><a title="Mod Wobbly Ragdoll Life Sandbox Simulator APK" href="/vn/mod-wobbly-ragdoll-life-sandbox-simulator/com.gang.wobbly.fall.life"><img alt="Mod Wobbly Ragdoll Life Sandbox Simulator APK" data-srcset="https://image.winudf.com/v2/image1/Y29tLmdhbmcud29iYmx5LmZhbGwubGlmZV9pY29uXzE2MDYzNzgzMTlfMDcx/icon.png?w=150&amp;fakeurl=1 2x" data-original="https://image.winudf.com/v2/image1/Y29tLmdhbmcud29iYmx5LmZhbGwubGlmZV9pY29uXzE2MDYzNzgzMTlfMDcx/icon.png?w=75&amp;fakeurl=1" src="https://static.apkpure.com/www/static/imgs/lazy.png"/></a></dt>
                                            <dd class="title-dd"><a title="Mod Wobbly Ragdoll Life Sandbox Simulator APK" href="/vn/mod-wobbly-ragdoll-life-sandbox-simulator/com.gang.wobbly.fall.life">Mod Wobbly Ragdoll Life Sandbox Simulator</a></dd>
                                            
                                            <dd>1.0</dd>
                                            
                                            
                                                
                                                    <dd>2020-11-30</dd>
                                                
                                            
                                            <dd class="down"><a rel="nofollow" class="" title="Tải về apk Mod Wobbly Ragdoll Life Sandbox Simulator phiên bản mới nhất" href="/vn/mod-wobbly-ragdoll-life-sandbox-simulator/com.gang.wobbly.fall.life/download?from=home%2Fnew">Tải về APK</a></dd>
                                        </dl>
                                    </li>

                                    <li class="w33">
                                        <dl>
                                            <dt><a title="La bruja Renata APK" href="/vn/la-bruja-renata/com.KivarStudios.RenataParca"><img alt="La bruja Renata APK" data-srcset="https://image.winudf.com/v2/image1/Y29tLktpdmFyU3R1ZGlvcy5SZW5hdGFQYXJjYV9pY29uXzE1NzQ3NjgxNjNfMDI3/icon.png?w=150&amp;fakeurl=1 2x" data-original="https://image.winudf.com/v2/image1/Y29tLktpdmFyU3R1ZGlvcy5SZW5hdGFQYXJjYV9pY29uXzE1NzQ3NjgxNjNfMDI3/icon.png?w=75&amp;fakeurl=1" src="https://static.apkpure.com/www/static/imgs/lazy.png"/></a></dt>
                                            <dd class="title-dd"><a title="La bruja Renata APK" href="/vn/la-bruja-renata/com.KivarStudios.RenataParca">La bruja Renata</a></dd>
                                            
                                            <dd>1.1</dd>
                                            
                                            
                                                
                                                    <dd>2020-11-30</dd>
                                                
                                            
                                            <dd class="down"><a rel="nofollow" class="" title="Tải về apk La bruja Renata phiên bản mới nhất" href="/vn/la-bruja-renata/com.KivarStudios.RenataParca/download?from=home%2Fnew">Tải về APK</a></dd>
                                        </dl>
                                    </li>

                                    <li class="w33">
                                        <dl>
                                            <dt><a title="Puzzle  Masks 2020 game APK" href="/vn/puzzle-masks-2020-game/com.eaglesdev.pjmaskpuzz"><img alt="Puzzle  Masks 2020 game APK" data-srcset="https://image.winudf.com/v2/image1/Y29tLmVhZ2xlc2Rldi5wam1hc2twdXp6X2ljb25fMTYwNjIwMjc0MF8wNjc/icon.png?w=150&amp;fakeurl=1 2x" data-original="https://image.winudf.com/v2/image1/Y29tLmVhZ2xlc2Rldi5wam1hc2twdXp6X2ljb25fMTYwNjIwMjc0MF8wNjc/icon.png?w=75&amp;fakeurl=1" src="https://static.apkpure.com/www/static/imgs/lazy.png"/></a></dt>
                                            <dd class="title-dd"><a title="Puzzle  Masks 2020 game APK" href="/vn/puzzle-masks-2020-game/com.eaglesdev.pjmaskpuzz">Puzzle  Masks 2020 game</a></dd>
                                            
                                            <dd>2.0.0</dd>
                                            
                                            
                                                
                                                    <dd>2020-11-30</dd>
                                                
                                            
                                            <dd class="down"><a rel="nofollow" class="" title="Tải về apk Puzzle  Masks 2020 game phiên bản mới nhất" href="/vn/puzzle-masks-2020-game/com.eaglesdev.pjmaskpuzz/download?from=home%2Fnew">Tải về APK</a></dd>
                                        </dl>
                                    </li>
                                                    </ul>
                                                    <ul class="top-list sublist" style="display: none">
                                                        
                                                        

                                    <li class="w33">
                                        <dl>
                                            <dt><a title="Sasthracheppu Kerala Learning App APK" href="/vn/sasthracheppu-kerala-learning-app/com.basith.sasthracheppuapp"><img alt="Sasthracheppu Kerala Learning App APK" data-srcset="https://image.winudf.com/v2/image1/Y29tLmJhc2l0aC5zYXN0aHJhY2hlcHB1YXBwX2ljb25fMTU5MDMwMjAwMF8wODk/icon.png?w=150&amp;fakeurl=1 2x" data-original="https://image.winudf.com/v2/image1/Y29tLmJhc2l0aC5zYXN0aHJhY2hlcHB1YXBwX2ljb25fMTU5MDMwMjAwMF8wODk/icon.png?w=75&amp;fakeurl=1" src="https://static.apkpure.com/www/static/imgs/lazy.png"/></a></dt>
                                            <dd class="title-dd"><a title="Sasthracheppu Kerala Learning App APK" href="/vn/sasthracheppu-kerala-learning-app/com.basith.sasthracheppuapp">Sasthracheppu Kerala Learning App</a></dd>
                                            
                                            <dd>2.4</dd>
                                            
                                            
                                                
                                                    <dd>2020-11-30</dd>
                                                
                                            
                                            <dd class="down"><a rel="nofollow" class="" title="Tải về xapk Sasthracheppu Kerala Learning App phiên bản mới nhất" href="/vn/sasthracheppu-kerala-learning-app/com.basith.sasthracheppuapp/download?from=home%2Fnew">Tải về XAPK</a></dd>
                                        </dl>
                                    </li>

                                    <li class="w33">
                                        <dl>
                                            <dt><a title="Tiwa - Buy &amp; sell the very best of African Fashion APK" href="/vn/tiwa-buy-sell-the-very-best-of-african-fashion/com.tiwa.app"><img alt="Tiwa - Buy &amp; sell the very best of African Fashion APK" data-srcset="https://image.winudf.com/v2/image1/Y29tLnRpd2EuYXBwX2ljb25fMTU3MDI4NTY4NV8wMzY/icon.png?w=150&amp;fakeurl=1 2x" data-original="https://image.winudf.com/v2/image1/Y29tLnRpd2EuYXBwX2ljb25fMTU3MDI4NTY4NV8wMzY/icon.png?w=75&amp;fakeurl=1" src="https://static.apkpure.com/www/static/imgs/lazy.png"/></a></dt>
                                            <dd class="title-dd"><a title="Tiwa - Buy &amp; sell the very best of African Fashion APK" href="/vn/tiwa-buy-sell-the-very-best-of-african-fashion/com.tiwa.app">Tiwa - Buy &amp; sell the very best of African Fashion</a></dd>
                                            
                                            <dd>1.0.1</dd>
                                            
                                            
                                                
                                                    <dd>2020-11-30</dd>
                                                
                                            
                                            <dd class="down"><a rel="nofollow" class="" title="Tải về xapk Tiwa - Buy &amp; sell the very best of African Fashion phiên bản mới nhất" href="/vn/tiwa-buy-sell-the-very-best-of-african-fashion/com.tiwa.app/download?from=home%2Fnew">Tải về XAPK</a></dd>
                                        </dl>
                                    </li>

                                    <li class="w33">
                                        <dl>
                                            <dt><a title="The Raven Age APK" href="/vn/the-raven-age/com.supapass.android.player.theravenage"><img alt="The Raven Age APK" data-srcset="https://image.winudf.com/v2/image1/Y29tLnN1cGFwYXNzLmFuZHJvaWQucGxheWVyLnRoZXJhdmVuYWdlX2ljb25fMTU2NzIyMzg4NV8wMTU/icon.png?w=150&amp;fakeurl=1 2x" data-original="https://image.winudf.com/v2/image1/Y29tLnN1cGFwYXNzLmFuZHJvaWQucGxheWVyLnRoZXJhdmVuYWdlX2ljb25fMTU2NzIyMzg4NV8wMTU/icon.png?w=75&amp;fakeurl=1" src="https://static.apkpure.com/www/static/imgs/lazy.png"/></a></dt>
                                            <dd class="title-dd"><a title="The Raven Age APK" href="/vn/the-raven-age/com.supapass.android.player.theravenage">The Raven Age</a></dd>
                                            
                                            <dd>1.9</dd>
                                            
                                            
                                                
                                                    <dd>2020-11-30</dd>
                                                
                                            
                                            <dd class="down"><a rel="nofollow" class="" title="Tải về apk The Raven Age phiên bản mới nhất" href="/vn/the-raven-age/com.supapass.android.player.theravenage/download?from=home%2Fnew">Tải về APK</a></dd>
                                        </dl>
                                    </li>

                                    <li class="w33">
                                        <dl>
                                            <dt><a title="English Japanese Dictionary APK" href="/vn/english-japanese-dictionary/com.dictionary.ja"><img alt="English Japanese Dictionary APK" data-srcset="https://image.winudf.com/v2/image1/Y29tLmRpY3Rpb25hcnkuamFfaWNvbl8xNTgwOTY1NjM1XzA2MA/icon.png?w=150&amp;fakeurl=1 2x" data-original="https://image.winudf.com/v2/image1/Y29tLmRpY3Rpb25hcnkuamFfaWNvbl8xNTgwOTY1NjM1XzA2MA/icon.png?w=75&amp;fakeurl=1" src="https://static.apkpure.com/www/static/imgs/lazy.png"/></a></dt>
                                            <dd class="title-dd"><a title="English Japanese Dictionary APK" href="/vn/english-japanese-dictionary/com.dictionary.ja">English Japanese Dictionary</a></dd>
                                            
                                            <dd>inn</dd>
                                            
                                            
                                                
                                                    <dd>2020-11-30</dd>
                                                
                                            
                                            <dd class="down"><a rel="nofollow" class="" title="Tải về apk English Japanese Dictionary phiên bản mới nhất" href="/vn/english-japanese-dictionary/com.dictionary.ja/download?from=home%2Fnew">Tải về APK</a></dd>
                                        </dl>
                                    </li>

                                    <li class="w33">
                                        <dl>
                                            <dt><a title="3 minutes Music Composition - musicLine APK" href="/vn/3-minutes-music-composition-musicline/jp.gr.java.conf.createapps.musicline"><img alt="3 minutes Music Composition - musicLine APK" data-srcset="https://image.winudf.com/v2/image1/anAuZ3IuamF2YS5jb25mLmNyZWF0ZWFwcHMubXVzaWNsaW5lX2ljb25fMTU1NTQxNzYwMF8wODI/icon.png?w=150&amp;fakeurl=1 2x" data-original="https://image.winudf.com/v2/image1/anAuZ3IuamF2YS5jb25mLmNyZWF0ZWFwcHMubXVzaWNsaW5lX2ljb25fMTU1NTQxNzYwMF8wODI/icon.png?w=75&amp;fakeurl=1" src="https://static.apkpure.com/www/static/imgs/lazy.png"/></a></dt>
                                            <dd class="title-dd"><a title="3 minutes Music Composition - musicLine APK" href="/vn/3-minutes-music-composition-musicline/jp.gr.java.conf.createapps.musicline">3 minutes Music Composition - musicLine</a></dd>
                                            
                                            <dd>8.9.6</dd>
                                            
                                            
                                                
                                                    <dd>2020-11-30</dd>
                                                
                                            
                                            <dd class="down"><a rel="nofollow" class="" title="Tải về apk 3 minutes Music Composition - musicLine phiên bản mới nhất" href="/vn/3-minutes-music-composition-musicline/jp.gr.java.conf.createapps.musicline/download?from=home%2Fnew">Tải về APK</a></dd>
                                        </dl>
                                    </li>

                                    <li class="w33">
                                        <dl>
                                            <dt><a title="Gallery for Locus APK" href="/vn/gallery-for-locus/net.tetraowl.galleryinlocus"><img alt="Gallery for Locus APK" data-srcset="https://image.winudf.com/v2/image1/bmV0LnRldHJhb3dsLmdhbGxlcnlpbmxvY3VzX2ljb25fMTYwNTgyMjk0MF8wMTc/icon.png?w=150&amp;fakeurl=1 2x" data-original="https://image.winudf.com/v2/image1/bmV0LnRldHJhb3dsLmdhbGxlcnlpbmxvY3VzX2ljb25fMTYwNTgyMjk0MF8wMTc/icon.png?w=75&amp;fakeurl=1" src="https://static.apkpure.com/www/static/imgs/lazy.png"/></a></dt>
                                            <dd class="title-dd"><a title="Gallery for Locus APK" href="/vn/gallery-for-locus/net.tetraowl.galleryinlocus">Gallery for Locus</a></dd>
                                            
                                            <dd>1.1</dd>
                                            
                                            
                                                
                                                    <dd>2020-11-30</dd>
                                                
                                            
                                            <dd class="down"><a rel="nofollow" class="" title="Tải về xapk Gallery for Locus phiên bản mới nhất" href="/vn/gallery-for-locus/net.tetraowl.galleryinlocus/download?from=home%2Fnew">Tải về XAPK</a></dd>
                                        </dl>
                                    </li>
                                </ul>
                            </div>         
                        </div>
                    </div>
                </div>
    <!-- end table 7 -->

    <!-- table left 8 -->

                <div class="top">
                    <div class="service-box bg-white text-center">
                        <div class="icon-text">
                            <ul class="nav nav-tabs nav-tabs-danger top-icon">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#tabe-7"><i class="bx bxl-android"></i> <span class="hidden-xs">Android</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#tabe-8"><i class="bx bxl-apple"></i> <span class="hidden-xs">IOS</span></a>
                                </li>           
                            </ul>
                            <div class="bd">
                                <ul class="top-list sublist">
                                    <li class="w33">
                                        <dl>
                                            <dt><a title="Blade Forge 3D APK" href="/vn/blade-forge-3d/com.kwalee.bladeforge3d"><img alt="Blade Forge 3D APK" data-srcset="https://image.winudf.com/v2/image1/Y29tLmt3YWxlZS5ibGFkZWZvcmdlM2RfaWNvbl8xNjA1MTQ3NjU5XzA2Mg/icon.png?w=150&amp;fakeurl=1 2x" data-original="https://image.winudf.com/v2/image1/Y29tLmt3YWxlZS5ibGFkZWZvcmdlM2RfaWNvbl8xNjA1MTQ3NjU5XzA2Mg/icon.png?w=75&amp;fakeurl=1" src="https://static.apkpure.com/www/static/imgs/lazy.png"/></a></dt>
                                            <dd class="title-dd"><a title="Blade Forge 3D APK" href="/vn/blade-forge-3d/com.kwalee.bladeforge3d">Blade Forge 3D</a></dd>
                                            
                                            <dd>
                                                <div class="stars"><span class="score" title="Blade Forge 3D đánh giá trung bình 0.0" style="width:0%"></span></div>
                                            </dd>
                                            
                                            
                                                
                                                    <dd>2020-11-18</dd>
                                                
                                            
                                            <dd class="down"><a rel="nofollow" class="" title="Tải về apk Blade Forge 3D phiên bản mới nhất" href="/vn/blade-forge-3d/com.kwalee.bladeforge3d/download?from=home%2Ftopic%2Ftop-new-games">Tải về APK</a></dd>
                                        </dl>
                                    </li>

                                    <li class="w33">
                                        <dl>
                                            <dt><a title="Project Makeover APK" href="/vn/project-makeover/com.bgg.jump"><img alt="Project Makeover APK" data-srcset="https://image.winudf.com/v2/image1/Y29tLmJnZy5qdW1wX2ljb25fMTYwMDEyMTg3NV8wOTk/icon.png?w=150&amp;fakeurl=1 2x" data-original="https://image.winudf.com/v2/image1/Y29tLmJnZy5qdW1wX2ljb25fMTYwMDEyMTg3NV8wOTk/icon.png?w=75&amp;fakeurl=1" src="https://static.apkpure.com/www/static/imgs/lazy.png"/></a></dt>
                                            <dd class="title-dd"><a title="Project Makeover APK" href="/vn/project-makeover/com.bgg.jump">Project Makeover</a></dd>
                                            
                                            <dd>
                                                <div class="stars"><span class="score" title="Project Makeover đánh giá trung bình 7.4" style="width:74%"></span><span class="star">7.4</span></div>
                                            </dd>
                                            
                                            
                                                
                                                    <dd>2020-11-13</dd>
                                                
                                            
                                            <dd class="down"><a rel="nofollow" class="" title="Tải về xapk Project Makeover phiên bản mới nhất" href="/vn/project-makeover/com.bgg.jump/download?from=home%2Ftopic%2Ftop-new-games">Tải về XAPK</a></dd>
                                        </dl>
                                    </li>

                                    <li class="w33">
                                        <dl>
                                            <dt><a title="RubberBand Cutting - ASMR APK" href="/vn/rubberband-cutting-asmr/com.crazylabs.rubber.band.asmr.cut"><img alt="RubberBand Cutting - ASMR APK" data-srcset="https://image.winudf.com/v2/image1/Y29tLmNyYXp5bGFicy5ydWJiZXIuYmFuZC5hc21yLmN1dF9pY29uXzE2MDQ1Njg0MjhfMDUy/icon.png?w=150&amp;fakeurl=1 2x" data-original="https://image.winudf.com/v2/image1/Y29tLmNyYXp5bGFicy5ydWJiZXIuYmFuZC5hc21yLmN1dF9pY29uXzE2MDQ1Njg0MjhfMDUy/icon.png?w=75&amp;fakeurl=1" src="https://static.apkpure.com/www/static/imgs/lazy.png"/></a></dt>
                                            <dd class="title-dd"><a title="RubberBand Cutting - ASMR APK" href="/vn/rubberband-cutting-asmr/com.crazylabs.rubber.band.asmr.cut">RubberBand Cutting - ASMR</a></dd>
                                            
                                            <dd>
                                                <div class="stars"><span class="score" title="RubberBand Cutting - ASMR đánh giá trung bình 0.0" style="width:0%"></span></div>
                                            </dd>
                                            
                                            
                                                
                                                    <dd>2020-11-16</dd>
                                                
                                            
                                            <dd class="down"><a rel="nofollow" class="" title="Tải về apk RubberBand Cutting - ASMR phiên bản mới nhất" href="/vn/rubberband-cutting-asmr/com.crazylabs.rubber.band.asmr.cut/download?from=home%2Ftopic%2Ftop-new-games">Tải về APK</a></dd>
                                        </dl>
                                    </li>

                                    <li class="w33">
                                        <dl>
                                            <dt><a title="Stretch Guy APK" href="/vn/stretch-guy/com.YsoCorp.StretchGuy"><img alt="Stretch Guy APK" data-srcset="https://image.winudf.com/v2/image1/Y29tLllzb0NvcnAuU3RyZXRjaEd1eV9pY29uXzE2MDQzMDY0NzZfMDk0/icon.png?w=150&amp;fakeurl=1 2x" data-original="https://image.winudf.com/v2/image1/Y29tLllzb0NvcnAuU3RyZXRjaEd1eV9pY29uXzE2MDQzMDY0NzZfMDk0/icon.png?w=75&amp;fakeurl=1" src="https://static.apkpure.com/www/static/imgs/lazy.png"/></a></dt>
                                            <dd class="title-dd"><a title="Stretch Guy APK" href="/vn/stretch-guy/com.YsoCorp.StretchGuy">Stretch Guy</a></dd>
                                            
                                            <dd>
                                                <div class="stars"><span class="score" title="Stretch Guy đánh giá trung bình 0.0" style="width:0%"></span></div>
                                            </dd>
                                            
                                            
                                                
                                                    <dd>2020-11-22</dd>
                                                
                                            
                                            <dd class="down"><a rel="nofollow" class="" title="Tải về xapk Stretch Guy phiên bản mới nhất" href="/vn/stretch-guy/com.YsoCorp.StretchGuy/download?from=home%2Ftopic%2Ftop-new-games">Tải về XAPK</a></dd>
                                        </dl>
                                    </li>

                                    <li class="w33">
                                        <dl>
                                            <dt><a title="Thiếu Niên 3Q - VNG: Tam Quốc Chiến Thuật APK" href="/vn/thi%E1%BA%BFu-ni%C3%AAn-3q-vng-tam-qu%E1%BB%91c-chi%E1%BA%BFn-thu%E1%BA%ADt/com.vng.thieunien3qvng"><img alt="Thiếu Niên 3Q - VNG: Tam Quốc Chiến Thuật APK" data-srcset="https://image.winudf.com/v2/image1/Y29tLnZuZy50aGlldW5pZW4zcXZuZ19pY29uXzE2MDI1NzgwMjFfMDAw/icon.png?w=150&amp;fakeurl=1 2x" data-original="https://image.winudf.com/v2/image1/Y29tLnZuZy50aGlldW5pZW4zcXZuZ19pY29uXzE2MDI1NzgwMjFfMDAw/icon.png?w=75&amp;fakeurl=1" src="https://static.apkpure.com/www/static/imgs/lazy.png"/></a></dt>
                                            <dd class="title-dd"><a title="Thiếu Niên 3Q - VNG: Tam Quốc Chiến Thuật APK" href="/vn/thi%E1%BA%BFu-ni%C3%AAn-3q-vng-tam-qu%E1%BB%91c-chi%E1%BA%BFn-thu%E1%BA%ADt/com.vng.thieunien3qvng">Thiếu Niên 3Q - VNG: Tam Quốc Chiến Thuật</a></dd>
                                            
                                            <dd>
                                                <div class="stars"><span class="score" title="Thiếu Niên 3Q - VNG: Tam Quốc Chiến Thuật đánh giá trung bình 10.0" style="width:100%"></span><span class="star">10.0</span></div>
                                            </dd>
                                            
                                            
                                                
                                                    <dd>2020-11-01</dd>
                                                
                                            
                                            <dd class="down"><a rel="nofollow" class="" title="Tải về xapk Thiếu Niên 3Q - VNG: Tam Quốc Chiến Thuật phiên bản mới nhất" href="/vn/thi%E1%BA%BFu-ni%C3%AAn-3q-vng-tam-qu%E1%BB%91c-chi%E1%BA%BFn-thu%E1%BA%ADt/com.vng.thieunien3qvng/download?from=home%2Ftopic%2Ftop-new-games">Tải về XAPK</a></dd>
                                        </dl>
                                    </li>

                                    <li class="w33">
                                        <dl>
                                            <dt><a title="Trung Tâm Mua Sắm Của Bé Gấu Trúc APK" href="/vn/little-panda-s-shopping-mall/com.sinyee.babybus.market"><img alt="Trung Tâm Mua Sắm Của Bé Gấu Trúc APK" data-srcset="https://image.winudf.com/v2/image1/Y29tLnNpbnllZS5iYWJ5YnVzLm1hcmtldF9pY29uXzE2MDU3NzczNTNfMDY4/icon.png?w=150&amp;fakeurl=1 2x" data-original="https://image.winudf.com/v2/image1/Y29tLnNpbnllZS5iYWJ5YnVzLm1hcmtldF9pY29uXzE2MDU3NzczNTNfMDY4/icon.png?w=75&amp;fakeurl=1" src="https://static.apkpure.com/www/static/imgs/lazy.png"/></a></dt>
                                            <dd class="title-dd"><a title="Trung Tâm Mua Sắm Của Bé Gấu Trúc APK" href="/vn/little-panda-s-shopping-mall/com.sinyee.babybus.market">Trung Tâm Mua Sắm Của Bé Gấu Trúc</a></dd>
                                            
                                            <dd>
                                                <div class="stars"><span class="score" title="Trung Tâm Mua Sắm Của Bé Gấu Trúc đánh giá trung bình 0.0" style="width:0%"></span></div>
                                            </dd>
                                            
                                            
                                                
                                                    <dd>2020-11-26</dd>
                                                
                                            
                                            <dd class="down"><a rel="nofollow" class="" title="Tải về apk Trung Tâm Mua Sắm Của Bé Gấu Trúc phiên bản mới nhất" href="/vn/little-panda-s-shopping-mall/com.sinyee.babybus.market/download?from=home%2Ftopic%2Ftop-new-games">Tải về APK</a></dd>
                                        </dl>
                                    </li>
                                                    </ul>
                                                    <ul class="top-list sublist" style="display: none">
                                                        
                                                        

                                    <li class="w33">
                                        <dl>
                                            <dt><a title="Lịch Âm 2021 - Lịch Vạn Niên 2021 APK" href="/vn/l%E1%BB%8Bch-%C3%A2m-2021-l%E1%BB%8Bch-v%E1%BA%A1n-ni%C3%AAn-2021/com.licham.lichvannien2021.lichviet"><img alt="Lịch Âm 2021 - Lịch Vạn Niên 2021 APK" data-srcset="https://image.winudf.com/v2/image1/Y29tLmxpY2hhbS5saWNodmFubmllbjIwMjEubGljaHZpZXRfaWNvbl8xNjA1OTgxOTc4XzAzMQ/icon.png?w=150&amp;fakeurl=1 2x" data-original="https://image.winudf.com/v2/image1/Y29tLmxpY2hhbS5saWNodmFubmllbjIwMjEubGljaHZpZXRfaWNvbl8xNjA1OTgxOTc4XzAzMQ/icon.png?w=75&amp;fakeurl=1" src="https://static.apkpure.com/www/static/imgs/lazy.png"/></a></dt>
                                            <dd class="title-dd"><a title="Lịch Âm 2021 - Lịch Vạn Niên 2021 APK" href="/vn/l%E1%BB%8Bch-%C3%A2m-2021-l%E1%BB%8Bch-v%E1%BA%A1n-ni%C3%AAn-2021/com.licham.lichvannien2021.lichviet">Lịch Âm 2021 - Lịch Vạn Niên 2021</a></dd>
                                            
                                            <dd>
                                                <div class="stars"><span class="score" title="Lịch Âm 2021 - Lịch Vạn Niên 2021 đánh giá trung bình 0.0" style="width:0%"></span></div>
                                            </dd>
                                            
                                            
                                                
                                                    <dd>2020-11-26</dd>
                                                
                                            
                                            <dd class="down"><a rel="nofollow" class="" title="Tải về apk Lịch Âm 2021 - Lịch Vạn Niên 2021 phiên bản mới nhất" href="/vn/l%E1%BB%8Bch-%C3%A2m-2021-l%E1%BB%8Bch-v%E1%BA%A1n-ni%C3%AAn-2021/com.licham.lichvannien2021.lichviet/download?from=home%2Ftopic%2Ftop-new-apps">Tải về APK</a></dd>
                                        </dl>
                                    </li>

                                    <li class="w33">
                                        <dl>
                                            <dt><a title="charging play Assistant APK" href="/vn/charging-play-assistant/charging.play.helpertips"><img alt="charging play Assistant APK" data-srcset="https://image.winudf.com/v2/image1/Y2hhcmdpbmcucGxheS5oZWxwZXJ0aXBzX2ljb25fMTYwNjE1NTMwNV8wMzM/icon.png?w=150&amp;fakeurl=1 2x" data-original="https://image.winudf.com/v2/image1/Y2hhcmdpbmcucGxheS5oZWxwZXJ0aXBzX2ljb25fMTYwNjE1NTMwNV8wMzM/icon.png?w=75&amp;fakeurl=1" src="https://static.apkpure.com/www/static/imgs/lazy.png"/></a></dt>
                                            <dd class="title-dd"><a title="charging play Assistant APK" href="/vn/charging-play-assistant/charging.play.helpertips">charging play Assistant</a></dd>
                                            
                                            <dd>
                                                <div class="stars"><span class="score" title="charging play Assistant đánh giá trung bình 0.0" style="width:0%"></span></div>
                                            </dd>
                                            
                                            
                                                
                                                    <dd>2020-11-16</dd>
                                                
                                            
                                            <dd class="down"><a rel="nofollow" class="" title="Tải về apk charging play Assistant phiên bản mới nhất" href="/vn/charging-play-assistant/charging.play.helpertips/download?from=home%2Ftopic%2Ftop-new-apps">Tải về APK</a></dd>
                                        </dl>
                                    </li>

                                    <li class="w33">
                                        <dl>
                                            <dt><a title="MochiMochi - Học tiếng Anh APK" href="/vn/mochimochi-h%E1%BB%8Dc-ti%E1%BA%BFng-anh/com.mochimochi.android.en"><img alt="MochiMochi - Học tiếng Anh APK" data-srcset="https://image.winudf.com/v2/image1/Y29tLm1vY2hpbW9jaGkuYW5kcm9pZC5lbl9pY29uXzE2MDU4MjY1NzVfMDkz/icon.png?w=150&amp;fakeurl=1 2x" data-original="https://image.winudf.com/v2/image1/Y29tLm1vY2hpbW9jaGkuYW5kcm9pZC5lbl9pY29uXzE2MDU4MjY1NzVfMDkz/icon.png?w=75&amp;fakeurl=1" src="https://static.apkpure.com/www/static/imgs/lazy.png"/></a></dt>
                                            <dd class="title-dd"><a title="MochiMochi - Học tiếng Anh APK" href="/vn/mochimochi-h%E1%BB%8Dc-ti%E1%BA%BFng-anh/com.mochimochi.android.en">MochiMochi - Học tiếng Anh</a></dd>
                                            
                                            <dd>
                                                <div class="stars"><span class="score" title="MochiMochi - Học tiếng Anh đánh giá trung bình 0.0" style="width:0%"></span></div>
                                            </dd>
                                            
                                            
                                                
                                                    <dd>2020-11-25</dd>
                                                
                                            
                                            <dd class="down"><a rel="nofollow" class="" title="Tải về xapk MochiMochi - Học tiếng Anh phiên bản mới nhất" href="/vn/mochimochi-h%E1%BB%8Dc-ti%E1%BA%BFng-anh/com.mochimochi.android.en/download?from=home%2Ftopic%2Ftop-new-apps">Tải về XAPK</a></dd>
                                        </dl>
                                    </li>

                                    <li class="w33">
                                        <dl>
                                            <dt><a title="DAZN Live Fight Sports APK" href="/vn/dazn-live-fight-sports-boxing-mma-more/com.dazn"><img alt="DAZN Live Fight Sports APK" data-srcset="https://image.winudf.com/v2/image1/Y29tLmRhem5faWNvbl8xNTU0OTI2NDM4XzAwNQ/icon.png?w=150&amp;fakeurl=1 2x" data-original="https://image.winudf.com/v2/image1/Y29tLmRhem5faWNvbl8xNTU0OTI2NDM4XzAwNQ/icon.png?w=75&amp;fakeurl=1" src="https://static.apkpure.com/www/static/imgs/lazy.png"/></a></dt>
                                            <dd class="title-dd"><a title="DAZN Live Fight Sports APK" href="/vn/dazn-live-fight-sports-boxing-mma-more/com.dazn">DAZN Live Fight Sports</a></dd>
                                            
                                            <dd>
                                                <div class="stars"><span class="score" title="DAZN Live Fight Sports đánh giá trung bình 6.0" style="width:60%"></span><span class="star">6.0</span></div>
                                            </dd>
                                            
                                            
                                                
                                                    <dd>2020-11-17</dd>
                                                
                                            
                                            <dd class="down"><a rel="nofollow" class="" title="Tải về xapk DAZN Live Fight Sports phiên bản mới nhất" href="/vn/dazn-live-fight-sports-boxing-mma-more/com.dazn/download?from=home%2Ftopic%2Ftop-new-apps">Tải về XAPK</a></dd>
                                        </dl>
                                    </li>

                                    <li class="w33">
                                        <dl>
                                            <dt><a title="AMOLED Wallpaper: 3D Themes &amp; 4K Wallpaper APK" href="/vn/amoled-wallpaper-3d-themes-4k-wallpaper/live.colorful.amoled.themes.wallpaper"><img alt="AMOLED Wallpaper: 3D Themes &amp; 4K Wallpaper APK" data-srcset="https://image.winudf.com/v2/image1/bGl2ZS5jb2xvcmZ1bC5hbW9sZWQudGhlbWVzLndhbGxwYXBlcl9pY29uXzE2MDUxNjcxNzFfMDE4/icon.png?w=150&amp;fakeurl=1 2x" data-original="https://image.winudf.com/v2/image1/bGl2ZS5jb2xvcmZ1bC5hbW9sZWQudGhlbWVzLndhbGxwYXBlcl9pY29uXzE2MDUxNjcxNzFfMDE4/icon.png?w=75&amp;fakeurl=1" src="https://static.apkpure.com/www/static/imgs/lazy.png"/></a></dt>
                                            <dd class="title-dd"><a title="AMOLED Wallpaper: 3D Themes &amp; 4K Wallpaper APK" href="/vn/amoled-wallpaper-3d-themes-4k-wallpaper/live.colorful.amoled.themes.wallpaper">AMOLED Wallpaper: 3D Themes &amp; 4K Wallpaper</a></dd>
                                            
                                            <dd>
                                                <div class="stars"><span class="score" title="AMOLED Wallpaper: 3D Themes &amp; 4K Wallpaper đánh giá trung bình 0.0" style="width:0%"></span></div>
                                            </dd>
                                            
                                            
                                                
                                                    <dd>2020-11-25</dd>
                                                
                                            
                                            <dd class="down"><a rel="nofollow" class="" title="Tải về apk AMOLED Wallpaper: 3D Themes &amp; 4K Wallpaper phiên bản mới nhất" href="/vn/amoled-wallpaper-3d-themes-4k-wallpaper/live.colorful.amoled.themes.wallpaper/download?from=home%2Ftopic%2Ftop-new-apps">Tải về APK</a></dd>
                                        </dl>
                                    </li>

                                    <li class="w33">
                                        <dl>
                                            <dt><a title="AmongLock - Among Lock Screen of Among Us Reactor APK" href="/vn/amonglock-among-lock-screen-of-among-us-reactor/amonguslock.amonguslockscreen.amonglock"><img alt="AmongLock - Among Lock Screen of Among Us Reactor APK" data-srcset="https://image.winudf.com/v2/image1/YW1vbmd1c2xvY2suYW1vbmd1c2xvY2tzY3JlZW4uYW1vbmdsb2NrX2ljb25fMTYwNTc0NTcxMl8wMTM/icon.png?w=150&amp;fakeurl=1 2x" data-original="https://image.winudf.com/v2/image1/YW1vbmd1c2xvY2suYW1vbmd1c2xvY2tzY3JlZW4uYW1vbmdsb2NrX2ljb25fMTYwNTc0NTcxMl8wMTM/icon.png?w=75&amp;fakeurl=1" src="https://static.apkpure.com/www/static/imgs/lazy.png"/></a></dt>
                                            <dd class="title-dd"><a title="AmongLock - Among Lock Screen of Among Us Reactor APK" href="/vn/amonglock-among-lock-screen-of-among-us-reactor/amonguslock.amonguslockscreen.amonglock">AmongLock - Among Lock Screen of Among Us Reactor</a></dd>
                                            
                                            <dd>
                                                <div class="stars"><span class="score" title="AmongLock - Among Lock Screen of Among Us Reactor đánh giá trung bình 7.4" style="width:74%"></span><span class="star">7.4</span></div>
                                            </dd>
                                            
                                            
                                                
                                                    <dd>2020-11-29</dd>
                                                
                                            
                                            <dd class="down"><a rel="nofollow" class="" title="Tải về xapk AmongLock - Among Lock Screen of Among Us Reactor phiên bản mới nhất" href="/vn/amonglock-among-lock-screen-of-among-us-reactor/amonguslock.amonguslockscreen.amonglock/download?from=home%2Ftopic%2Ftop-new-apps">Tải về XAPK</a></dd>
                                        </dl>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
    <!-- end table 8 -->
            </div>

            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 mb-30" >
    <!-- table right 3 -->
                <div class="service-box bg-white text-center">
                    <div class="icon-text">           
                        <div class="title">
                             Editor's Choice
                            <div class="more"><a href="/editor-choice">More »</a></div>
                        </div>
                            <div class="choice-wrap">
                                <ul>
                                    <li>
                                        <a href="http://topic.neocraftstudio.com/sword_icon_vote/index.php?utm_source=Hima" title="One Last Step for Eternal Sword M - Icon, slogan and more!" rel="nofollow" target="_blank">
                                            <div class="banner">
                                                
                                                <img data-srcset="https://image.winudf.com/v2/user/admin/YWRtaW5fzbbGsWJhbm5lctKzLmpwZ18xNTc3ODQxODI1MTY4/image.png?fakeurl=1&amp;w=660 2x" data-original="https://image.winudf.com/v2/user/admin/YWRtaW5fzbbGsWJhbm5lctKzLmpwZ18xNTc3ODQxODI1MTY4/image.png?fakeurl=1&amp;w=330"  data-was-processed="true">
                                                
                                            </div>
                                            <div class="wrap banner-wrap">
                                                
                                                <div class="icon">
                                                    <img data-srcset="https://image.winudf.com/v2/user/admin/YWRtaW5fbG9nby1uZW8tNTEyLTAwNS5wbmdfMTU3MzAzNzM2MjM5OQ/image.png?fakeurl=1&amp;w=120 2x" data-original="https://image.winudf.com/v2/user/admin/YWRtaW5fbG9nby1uZW8tNTEyLTAwNS5wbmdfMTU3MzAzNzM2MjM5OQ/image.png?fakeurl=1&amp;w=60" src="https://image.winudf.com/v2/image1/Y29tLnBhbnplcmRvZy50YWN0aWNvb2xfaWNvbl8xNTg4MjQ4Njc4XzA2NQ/icon.png?w=60&fakeurl=1" data-was-processed="true">
                                                </div>
                                                
                                                <div class="info">
                                                    
                                                    <div class="tit">One Last Step for Eternal Sword M - Icon, slogan and more!</div>
                                                </div>
                                                <div class="des">One Last Step for Eternal Sword M, Icon, slogan and more! Choose the best mobile game character designs you love.</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/8-ball-pool-android-1/com.miniclip.eightballpool" title="8 Ball Pool">
                                            <div class="wrap">
                                                
                                                <div class="icon">
                                                    <img alt="8 Ball Pool" data-srcset="https://image.winudf.com/v2/image1/Y29tLm1pbmljbGlwLmVpZ2h0YmFsbHBvb2xfaWNvbl8xNTYxMzk3MjU5XzAyOQ/icon.png?w=120&amp;fakeurl=1 2x" data-original="https://image.winudf.com/v2/image1/Y29tLm1pbmljbGlwLmVpZ2h0YmFsbHBvb2xfaWNvbl8xNTYxMzk3MjU5XzAyOQ/icon.png?w=60&amp;fakeurl=1" src="https://image.winudf.com/v2/image1/Y29tLm1pbmljbGlwLmVpZ2h0YmFsbHBvb2xfaWNvbl8xNTYxMzk3MjU5XzAyOQ/icon.png?w=60&amp;fakeurl=1" class="loaded" srcset="https://image.winudf.com/v2/image1/Y29tLm1pbmljbGlwLmVpZ2h0YmFsbHBvb2xfaWNvbl8xNTYxMzk3MjU5XzAyOQ/icon.png?w=120&amp;fakeurl=1 2x" data-was-processed="true">
                                                </div>
                                                
                                                <div class="info">
                                                    
                                                    <div class="floatr"><i></i>
                                                        <span>9.4</span></div>
                                                    
                                                    <div class="tit">8 Ball Pool</div>
                                                </div>
                                                <div class="des">Play the World's #1 Pool game</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/smash-hit/com.mediocre.smashhit" title="Smash Hit">
                                            <div class="wrap">
                                                
                                                <div class="icon">
                                                    <img alt="Smash Hit" data-srcset="https://image.winudf.com/v2/image1/Y29tLm1lZGlvY3JlLnNtYXNoaGl0X2ljb25fMTU2Njg5MjA5Ml8wNzY/icon.png?w=120&amp;fakeurl=1 2x" data-original="https://image.winudf.com/v2/image1/Y29tLm1lZGlvY3JlLnNtYXNoaGl0X2ljb25fMTU2Njg5MjA5Ml8wNzY/icon.png?w=60&amp;fakeurl=1" src="https://image.winudf.com/v2/image1/Y29tLm1lZGlvY3JlLnNtYXNoaGl0X2ljb25fMTU2Njg5MjA5Ml8wNzY/icon.png?w=60&amp;fakeurl=1" class="loaded" srcset="https://image.winudf.com/v2/image1/Y29tLm1lZGlvY3JlLnNtYXNoaGl0X2ljb25fMTU2Njg5MjA5Ml8wNzY/icon.png?w=120&amp;fakeurl=1 2x" data-was-processed="true">
                                                </div>
                                                
                                                <div class="info">
                                                    
                                                    <div class="floatr"><i></i>
                                                        <span>9.4</span></div>
                                                    
                                                    <div class="tit">Smash Hit</div>
                                                </div>
                                                <div class="des">Prepare for a transcendental, ambient journey through time and space.</div>
                                            </div>
                                        </a>
                                    </li>  
                                    <li>
                                        <a href="/dc-legends-battle-for-justice/com.wb.goog.dc.legends" title="DC Legends">
                                            <div class="wrap">
                                                
                                                <div class="icon">
                                                    <img alt="DC Legends" data-srcset="https://image.winudf.com/v2/image1/Y29tLndiLmdvb2cuZGMubGVnZW5kc19pY29uXzE1NzE2NzI4MjRfMDcx/icon.png?w=120&amp;fakeurl=1 2x" data-original="https://image.winudf.com/v2/image1/Y29tLndiLmdvb2cuZGMubGVnZW5kc19pY29uXzE1NzE2NzI4MjRfMDcx/icon.png?w=60&amp;fakeurl=1" src="https://image.winudf.com/v2/image1/Y29tLndiLmdvb2cuZGMubGVnZW5kc19pY29uXzE1NzE2NzI4MjRfMDcx/icon.png?w=60&amp;fakeurl=1" class="loaded" srcset="https://image.winudf.com/v2/image1/Y29tLndiLmdvb2cuZGMubGVnZW5kc19pY29uXzE1NzE2NzI4MjRfMDcx/icon.png?w=120&amp;fakeurl=1 2x" data-was-processed="true">
                                                </div>
                                                
                                                <div class="info">
                                                    
                                                    <div class="floatr"><i></i>
                                                        <span>8.5</span></div>
                                                    
                                                    <div class="tit">DC Legends</div>
                                                </div>
                                                <div class="des">Collect &amp; Level Up DC Super Heroes &amp; Villains in the ultimate Strategy RPG!</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/modern-strike-online-pvp-fps/com.gamedevltd.modernstrike" title="Modern Strike Online">
                                            <div class="wrap">
                                                
                                                <div class="icon">
                                                    <img alt="Modern Strike Online" data-srcset="https://image.winudf.com/v2/image1/Y29tLmdhbWVkZXZsdGQubW9kZXJuc3RyaWtlX2ljb25fMTU3MzQ2NDEzOV8wNzY/icon.png?w=120&amp;fakeurl=1 2x" data-original="https://image.winudf.com/v2/image1/Y29tLmdhbWVkZXZsdGQubW9kZXJuc3RyaWtlX2ljb25fMTU3MzQ2NDEzOV8wNzY/icon.png?w=60&amp;fakeurl=1" src="https://image.winudf.com/v2/image1/Y29tLmdhbWVkZXZsdGQubW9kZXJuc3RyaWtlX2ljb25fMTU3MzQ2NDEzOV8wNzY/icon.png?w=60&amp;fakeurl=1" class="loaded" srcset="https://image.winudf.com/v2/image1/Y29tLmdhbWVkZXZsdGQubW9kZXJuc3RyaWtlX2ljb25fMTU3MzQ2NDEzOV8wNzY/icon.png?w=120&amp;fakeurl=1 2x" data-was-processed="true">
                                                </div>
                                                
                                                <div class="info">
                                                    
                                                    <div class="floatr"><i></i>
                                                        <span>8.4</span></div>
                                                    
                                                    <div class="tit">Modern Strike Online</div>
                                                </div>
                                                <div class="des">Crazy online FPS battles with players from around the world!</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/f1-manager/com.hutchAndroid.formularacing" title="F1 Manager">
                                            <div class="wrap">
                                                
                                                <div class="icon">
                                                    <img alt="F1 Manager" data-srcset="https://image.winudf.com/v2/image1/Y29tLmh1dGNoZ2FtZXMuZm9ybXVsYXJhY2luZ19pY29uXzE1NzQwOTE4ODVfMDYy/icon.png?w=120&amp;fakeurl=1 2x" data-original="https://image.winudf.com/v2/image1/Y29tLmh1dGNoZ2FtZXMuZm9ybXVsYXJhY2luZ19pY29uXzE1NzQwOTE4ODVfMDYy/icon.png?w=60&amp;fakeurl=1" src="https://image.winudf.com/v2/image1/Y29tLmh1dGNoZ2FtZXMuZm9ybXVsYXJhY2luZ19pY29uXzE1NzQwOTE4ODVfMDYy/icon.png?w=60&amp;fakeurl=1" class="loaded" srcset="https://image.winudf.com/v2/image1/Y29tLmh1dGNoZ2FtZXMuZm9ybXVsYXJhY2luZ19pY29uXzE1NzQwOTE4ODVfMDYy/icon.png?w=120&amp;fakeurl=1 2x" data-was-processed="true">
                                                </div>
                                                
                                                <div class="info">
                                                    
                                                    <div class="floatr"><i></i>
                                                        <span>8.5</span></div>
                                                    
                                                    <div class="tit">F1 Manager</div>
                                                </div>
                                                <div class="des">2019 Official Formula 1 Game</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/candy-crush-saga/com.king.candycrushsaga" title="Candy Crush Saga">
                                            <div class="wrap">
                                                
                                                <div class="icon">
                                                    <img alt="Candy Crush Saga" data-srcset="https://image.winudf.com/v2/image1/Y29tLmtpbmcuY2FuZHljcnVzaHNhZ2FfaWNvbl8xNTc2MjI1ODU0XzAzMw/icon.png?w=120&amp;fakeurl=1 2x" data-original="https://image.winudf.com/v2/image1/Y29tLmtpbmcuY2FuZHljcnVzaHNhZ2FfaWNvbl8xNTc2MjI1ODU0XzAzMw/icon.png?w=60&amp;fakeurl=1" src="https://image.winudf.com/v2/image1/Y29tLmtpbmcuY2FuZHljcnVzaHNhZ2FfaWNvbl8xNTc2MjI1ODU0XzAzMw/icon.png?w=60&amp;fakeurl=1" class="loaded" srcset="https://image.winudf.com/v2/image1/Y29tLmtpbmcuY2FuZHljcnVzaHNhZ2FfaWNvbl8xNTc2MjI1ODU0XzAzMw/icon.png?w=120&amp;fakeurl=1 2x" data-was-processed="true">
                                                </div>
                                                
                                                <div class="info">
                                                    
                                                    <div class="floatr"><i></i>
                                                        <span>9.4</span></div>
                                                    
                                                    <div class="tit">Candy Crush Saga</div>
                                                </div>
                                                <div class="des">🍭&nbsp;The sweetest&nbsp;puzzle game! Switch, match &amp; blast candies to win levels!&nbsp;🍬</div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>      
                    </div>
                </div>
    <!-- end table right 3 -->

    <!-- table right 4 -->
            <div class="top">
                <div class="service-box bg-white text-center" style="margin-top=30px">
                    <div class="icon-text">    
                        <div class="title" >
                            <a href="/discover">Discover »</a>
                            <a href="/discover">More »</a>
                        </div>
                    </div>
                        <div class="bd">
                            <ul class="day_list">
                    
                    

                                <li>
                                    <div class="day_list_number">1</div>
                                    <dl>
                                        <dt><a title="Garena Free Fire: NGÀY BOOYAH APK" href="/vn/garena-free-fire-android-il/com.dts.freefireth"><img alt="Garena Free Fire: NGÀY BOOYAH APK" data-srcset="https://image.winudf.com/v2/image1/Y29tLmR0cy5mcmVlZmlyZXRoX2ljb25fMTYwMTM2MDU2Ml8wMjg/icon.png?w=120&amp;fakeurl=1 2x" data-original="https://image.winudf.com/v2/image1/Y29tLmR0cy5mcmVlZmlyZXRoX2ljb25fMTYwMTM2MDU2Ml8wMjg/icon.png?w=60&amp;fakeurl=1" src="https://image.winudf.com/v2/image1/Y29tLmR0cy5mcmVlZmlyZXRoX2ljb25fMTYwMTM2MDU2Ml8wMjg/icon.png?w=60&fakeurl=1"/></a></dt>
                                        <dd class="title-dd"><a title="Garena Free Fire: NGÀY BOOYAH APK" href="/vn/garena-free-fire-android-il/com.dts.freefireth">Garena Free Fire: NGÀY BOOYAH</a></dd>
                                        <dd>1.54.1</dd>
                                        <dd>Tác vụ</dd>
                                        <dd class="down"><a rel="nofollow" class="" title="Tải về xapk Garena Free Fire: NGÀY BOOYAH phiên bản mới nhất" href="/vn/garena-free-fire-android-il/com.dts.freefireth/download?from=home%2Fhot">Tải về XAPK</a></dd>
                                    </dl>
                                </li>


                                <li>
                                    <div class="day_list_number">2</div>
                                    <dl>
                                        <dt><a title="Liên Minh: Tốc Chiến APK" href="/vn/league-of-legends-wild-rift/com.riotgames.league.wildrift"><img alt="Liên Minh: Tốc Chiến APK" data-srcset="https://image.winudf.com/v2/image1/Y29tLnJpb3RnYW1lcy5sZWFndWUud2lsZHJpZnRfaWNvbl8xNjA2MTQ4MTMwXzA5MA/icon.png?w=120&amp;fakeurl=1 2x" data-original="https://image.winudf.com/v2/image1/Y29tLnJpb3RnYW1lcy5sZWFndWUud2lsZHJpZnRfaWNvbl8xNjA2MTQ4MTMwXzA5MA/icon.png?w=60&amp;fakeurl=1" src="https://static.apkpure.com/www/static/imgs/lazy.png"/></a></dt>
                                        <dd class="title-dd"><a title="Liên Minh: Tốc Chiến APK" href="/vn/league-of-legends-wild-rift/com.riotgames.league.wildrift">Liên Minh: Tốc Chiến</a></dd>
                                        <dd>1.0.0.3386</dd>
                                        <dd>Chiến thuật</dd>
                                        <dd class="down"><a rel="nofollow" class="" title="Tải về xapk Liên Minh: Tốc Chiến phiên bản mới nhất" href="/vn/league-of-legends-wild-rift/com.riotgames.league.wildrift/download?from=home%2Fhot">Tải về XAPK</a></dd>
                                    </dl>
                                </li>


                                <li>
                                    <div class="day_list_number">3</div>
                                    <dl>
                                        <dt><a title="Teamfight Tactics: League of Legends Strategy Game APK" href="/vn/teamfight-tactics-league-of-legends-strategy-game/com.riotgames.league.teamfighttactics"><img alt="Teamfight Tactics: League of Legends Strategy Game APK" data-srcset="https://image.winudf.com/v2/image1/Y29tLnJpb3RnYW1lcy5sZWFndWUudGVhbWZpZ2h0dGFjdGljc19pY29uXzE1ODQwNjUyNjVfMDk2/icon.png?w=120&amp;fakeurl=1 2x" data-original="https://image.winudf.com/v2/image1/Y29tLnJpb3RnYW1lcy5sZWFndWUudGVhbWZpZ2h0dGFjdGljc19pY29uXzE1ODQwNjUyNjVfMDk2/icon.png?w=60&amp;fakeurl=1" src="https://static.apkpure.com/www/static/imgs/lazy.png"/></a></dt>
                                        <dd class="title-dd"><a title="Teamfight Tactics: League of Legends Strategy Game APK" href="/vn/teamfight-tactics-league-of-legends-strategy-game/com.riotgames.league.teamfighttactics">Teamfight Tactics: League of Legends Strategy Game</a></dd>
                                        <dd>10.23.3432581</dd>
                                        <dd>Chiến thuật</dd>
                                        <dd class="down"><a rel="nofollow" class="" title="Tải về apk Teamfight Tactics: League of Legends Strategy Game phiên bản mới nhất" href="/vn/teamfight-tactics-league-of-legends-strategy-game/com.riotgames.league.teamfighttactics/download?from=home%2Fhot">Tải về APK</a></dd>
                                    </dl>
                                </li>


                                <li>
                                    <div class="day_list_number">4</div>
                                    <dl>
                                        <dt><a title="Garena Liên Quân Mobile APK" href="/vn/garena-li%C3%AAn-qu%C3%A2n-mobile-x-ultraman/com.garena.game.kgvn"><img alt="Garena Liên Quân Mobile APK" data-srcset="https://image.winudf.com/v2/image1/Y29tLmdhcmVuYS5nYW1lLmtndm5faWNvbl8xNjA0NDY0OTY5XzA4OQ/icon.png?w=120&amp;fakeurl=1 2x" data-original="https://image.winudf.com/v2/image1/Y29tLmdhcmVuYS5nYW1lLmtndm5faWNvbl8xNjA0NDY0OTY5XzA4OQ/icon.png?w=60&amp;fakeurl=1" src="https://static.apkpure.com/www/static/imgs/lazy.png"/></a></dt>
                                        <dd class="title-dd"><a title="Garena Liên Quân Mobile APK" href="/vn/garena-li%C3%AAn-qu%C3%A2n-mobile-x-ultraman/com.garena.game.kgvn">Garena Liên Quân Mobile</a></dd>
                                        <dd>1.36.1.11</dd>
                                        <dd>Tác vụ</dd>
                                        <dd class="down"><a rel="nofollow" class="" title="Tải về xapk Garena Liên Quân Mobile phiên bản mới nhất" href="/vn/garena-li%C3%AAn-qu%C3%A2n-mobile-x-ultraman/com.garena.game.kgvn/download?from=home%2Fhot">Tải về XAPK</a></dd>
                                    </dl>
                                </li>


                                <li>
                                    <div class="day_list_number">5</div>
                                    <dl>
                                        <dt><a title="Digital World APK" href="/vn/digital-world/com.hivgd.un"><img alt="Digital World APK" data-srcset="https://image.winudf.com/v2/user/admin/YWRtaW5fMS5wbmdfMTU1MDU0ODgzOTEwNQ/icon.png?w=120&amp;fakeurl=1 2x" data-original="https://image.winudf.com/v2/user/admin/YWRtaW5fMS5wbmdfMTU1MDU0ODgzOTEwNQ/icon.png?w=60&amp;fakeurl=1" src="https://static.apkpure.com/www/static/imgs/lazy.png"/></a></dt>
                                        <dd class="title-dd"><a title="Digital World APK" href="/vn/digital-world/com.hivgd.un">Digital World</a></dd>
                                        <dd>1.0</dd>
                                        <dd>Phiêu lưu</dd>
                                        <dd class="down"><a rel="nofollow" class="" title="Tải về apk Digital World phiên bản mới nhất" href="/vn/digital-world/com.hivgd.un/download?from=home%2Fhot">Tải về APK</a></dd>
                                    </dl>
                                </li>


                                <li>
                                    <div class="day_list_number">6</div>
                                    <dl>
                                        <dt><a title="Among Us APK" href="/vn/among-us/com.innersloth.spacemafia"><img alt="Among Us APK" data-srcset="https://image.winudf.com/v2/image1/Y29tLmlubmVyc2xvdGguc3BhY2VtYWZpYV9pY29uXzE1NTQ5MzY1NjJfMDEz/icon.png?w=120&amp;fakeurl=1 2x" data-original="https://image.winudf.com/v2/image1/Y29tLmlubmVyc2xvdGguc3BhY2VtYWZpYV9pY29uXzE1NTQ5MzY1NjJfMDEz/icon.png?w=60&amp;fakeurl=1" src="https://static.apkpure.com/www/static/imgs/lazy.png"/></a></dt>
                                        <dd class="title-dd"><a title="Among Us APK" href="/vn/among-us/com.innersloth.spacemafia">Among Us</a></dd>
                                        <dd>2020.11.17</dd>
                                        <dd>Tác vụ</dd>
                                        <dd class="down"><a rel="nofollow" class="" title="Tải về apk Among Us phiên bản mới nhất" href="/vn/among-us/com.innersloth.spacemafia/download?from=home%2Fhot">Tải về APK</a></dd>
                                    </dl>
                                </li>


                                <li>
                                    <div class="day_list_number">7</div>
                                    <dl>
                                        <dt><a title="PUBG MOBILE METRO ROYALE APK" href="/vn/pubg-mobile-4-android-i/com.tencent.ig"><img alt="PUBG MOBILE METRO ROYALE APK" data-srcset="https://image.winudf.com/v2/image1/Y29tLnRlbmNlbnQuaWdfaWNvbl8xNjA1NTExODU4XzA4OA/icon.png?w=120&amp;fakeurl=1 2x" data-original="https://image.winudf.com/v2/image1/Y29tLnRlbmNlbnQuaWdfaWNvbl8xNjA1NTExODU4XzA4OA/icon.png?w=60&amp;fakeurl=1" src="https://static.apkpure.com/www/static/imgs/lazy.png"/></a></dt>
                                        <dd class="title-dd"><a title="PUBG MOBILE METRO ROYALE APK" href="/vn/pubg-mobile-4-android-i/com.tencent.ig">PUBG MOBILE METRO ROYALE</a></dd>
                                        <dd>1.1.0</dd>
                                        <dd>Tác vụ</dd>
                                        <dd class="down"><a rel="nofollow" class="" title="Tải về apk PUBG MOBILE METRO ROYALE phiên bản mới nhất" href="/vn/pubg-mobile-4-android-i/com.tencent.ig/download?from=home%2Fhot">Tải về APK</a></dd>
                                    </dl>
                                </li>


                                <li>
                                    <div class="day_list_number">8</div>
                                    <dl>
                                        <dt><a title="Mini World Block Art APK" href="/vn/mini-world-block-art/com.playmini.miniworld"><img alt="Mini World Block Art APK" data-srcset="https://image.winudf.com/v2/image1/Y29tLnBsYXltaW5pLm1pbml3b3JsZF9pY29uXzE1OTc5MjIwNTRfMDI1/icon.png?w=120&amp;fakeurl=1 2x" data-original="https://image.winudf.com/v2/image1/Y29tLnBsYXltaW5pLm1pbml3b3JsZF9pY29uXzE1OTc5MjIwNTRfMDI1/icon.png?w=60&amp;fakeurl=1" src="https://static.apkpure.com/www/static/imgs/lazy.png"/></a></dt>
                                        <dd class="title-dd"><a title="Mini World Block Art APK" href="/vn/mini-world-block-art/com.playmini.miniworld">Mini World Block Art</a></dd>
                                        <dd>0.49.1</dd>
                                        <dd>Phiêu lưu</dd>
                                        <dd class="down"><a rel="nofollow" class="" title="Tải về xapk Mini World Block Art phiên bản mới nhất" href="/vn/mini-world-block-art/com.playmini.miniworld/download?from=home%2Fhot">Tải về XAPK</a></dd>
                                    </dl>
                                </li>


                                <li>
                                    <div class="day_list_number">9</div>
                                    <dl>
                                        <dt><a title="Stick War: Legacy APK" href="/vn/stick-war-legacy/com.maxgames.stickwarlegacy"><img alt="Stick War: Legacy APK" data-srcset="https://image.winudf.com/v2/image1/Y29tLm1heGdhbWVzLnN0aWNrd2FybGVnYWN5X2ljb25fMTU1OTg1NDg1Ml8wMDc/icon.png?w=120&amp;fakeurl=1 2x" data-original="https://image.winudf.com/v2/image1/Y29tLm1heGdhbWVzLnN0aWNrd2FybGVnYWN5X2ljb25fMTU1OTg1NDg1Ml8wMDc/icon.png?w=60&amp;fakeurl=1" src="https://static.apkpure.com/www/static/imgs/lazy.png"/></a></dt>
                                        <dd class="title-dd"><a title="Stick War: Legacy APK" href="/vn/stick-war-legacy/com.maxgames.stickwarlegacy">Stick War: Legacy</a></dd>
                                        <dd>2020.2.77</dd>
                                        <dd>Chiến thuật</dd>
                                        <dd class="down"><a rel="nofollow" class="" title="Tải về xapk Stick War: Legacy phiên bản mới nhất" href="/vn/stick-war-legacy/com.maxgames.stickwarlegacy/download?from=home%2Fhot">Tải về XAPK</a></dd>
                                    </dl>
                                </li>


                                <li>
                                    <div class="day_list_number">10</div>
                                    <dl>
                                        <dt><a title="PUBG MOBILE VN - METRO ROYALE APK" href="/vn/pubg-mobile-vn-metro-royale/com.vng.pubgmobile"><img alt="PUBG MOBILE VN - METRO ROYALE APK" data-srcset="https://image.winudf.com/v2/image1/Y29tLnZuZy5wdWJnbW9iaWxlX2ljb25fMTYwNDkxOTA3M18wNjc/icon.png?w=120&amp;fakeurl=1 2x" data-original="https://image.winudf.com/v2/image1/Y29tLnZuZy5wdWJnbW9iaWxlX2ljb25fMTYwNDkxOTA3M18wNjc/icon.png?w=60&amp;fakeurl=1" src="https://static.apkpure.com/www/static/imgs/lazy.png"/></a></dt>
                                        <dd class="title-dd"><a title="PUBG MOBILE VN - METRO ROYALE APK" href="/vn/pubg-mobile-vn-metro-royale/com.vng.pubgmobile">PUBG MOBILE VN - METRO ROYALE</a></dd>
                                        <dd>1.1.0</dd>
                                        <dd>Tác vụ</dd>
                                        <dd class="down"><a rel="nofollow" class="" title="Tải về xapk PUBG MOBILE VN - METRO ROYALE phiên bản mới nhất" href="/vn/pubg-mobile-vn-metro-royale/com.vng.pubgmobile/download?from=home%2Fhot">Tải về XAPK</a></dd>
                                    </dl>
                                </li>

                                                    <div class="day_list_more"><a href="/vn/game">Thêm &raquo;</a></div>
                                                </ul>
                                                <ul class="day_list" style="display: none">
                                                    
                                                    

                                <li>
                                    <div class="day_list_number">1</div>
                                    <dl>
                                        <dt><a title="LuluBox - Free Skin Mod for Garena Liên Quân APK" href="/vn/lulubox/com.lulu.lulubox"><img alt="LuluBox - Free Skin Mod for Garena Liên Quân APK" data-srcset="https://image.winudf.com/v2/user/admin/YWRtaW5faWNfbGF1bmNoZXIucG5nXzE1NTI1MzQwNzgwNjg/icon.png?w=120&amp;fakeurl=1 2x" data-original="https://image.winudf.com/v2/user/admin/YWRtaW5faWNfbGF1bmNoZXIucG5nXzE1NTI1MzQwNzgwNjg/icon.png?w=60&amp;fakeurl=1" src="https://static.apkpure.com/www/static/imgs/lazy.png"/></a></dt>
                                        <dd class="title-dd"><a title="LuluBox - Free Skin Mod for Garena Liên Quân APK" href="/vn/lulubox/com.lulu.lulubox">LuluBox - Free Skin Mod for Garena Liên Quân</a></dd>
                                        <dd>4.8.8</dd>
                                        <dd>Công cụ</dd>
                                        <dd class="down"><a rel="nofollow" class="" title="Tải về apk LuluBox - Free Skin Mod for Garena Liên Quân phiên bản mới nhất" href="/vn/lulubox/com.lulu.lulubox/download?from=home%2Fhot">Tải về APK</a></dd>
                                    </dl>
                                </li>


                                <li>
                                    <div class="day_list_number">2</div>
                                    <dl>
                                        <dt><a title="Máy chủ Minecraft PE APK" href="/vn/servers-for-minecraft-pe/com.kissapp.appserversminecraft"><img alt="Máy chủ Minecraft PE APK" data-srcset="https://image.winudf.com/v2/image1/Y29tLmtpc3NhcHAuYXBwc2VydmVyc21pbmVjcmFmdF9pY29uXzE1NDczNzI4ODhfMDkz/icon.png?w=120&amp;fakeurl=1 2x" data-original="https://image.winudf.com/v2/image1/Y29tLmtpc3NhcHAuYXBwc2VydmVyc21pbmVjcmFmdF9pY29uXzE1NDczNzI4ODhfMDkz/icon.png?w=60&amp;fakeurl=1" src="https://static.apkpure.com/www/static/imgs/lazy.png"/></a></dt>
                                        <dd class="title-dd"><a title="Máy chủ Minecraft PE APK" href="/vn/servers-for-minecraft-pe/com.kissapp.appserversminecraft">Máy chủ Minecraft PE</a></dd>
                                        <dd>2.16</dd>
                                        <dd>Công cụ</dd>
                                        <dd class="down"><a rel="nofollow" class="" title="Tải về apk Máy chủ Minecraft PE phiên bản mới nhất" href="/vn/servers-for-minecraft-pe/com.kissapp.appserversminecraft/download?from=home%2Fhot">Tải về APK</a></dd>
                                    </dl>
                                </li>


                                <li>
                                    <div class="day_list_number">3</div>
                                    <dl>
                                        <dt><a title="YouTube Vanced APK" href="/vn/youtube-vanced/com.vanced.android.youtube"><img alt="YouTube Vanced APK" data-srcset="https://image.winudf.com/v2/user/admin/YWRtaW5faWNfbGF1bmNoZXJfcm91bmQtMS0zODR4Mzg0LnBuZ18xNTc5NTA5NDU4MTM3/icon.png?w=120&amp;fakeurl=1 2x" data-original="https://image.winudf.com/v2/user/admin/YWRtaW5faWNfbGF1bmNoZXJfcm91bmQtMS0zODR4Mzg0LnBuZ18xNTc5NTA5NDU4MTM3/icon.png?w=60&amp;fakeurl=1" src="https://static.apkpure.com/www/static/imgs/lazy.png"/></a></dt>
                                        <dd class="title-dd"><a title="YouTube Vanced APK" href="/vn/youtube-vanced/com.vanced.android.youtube">YouTube Vanced</a></dd>
                                        <dd>14.21.54</dd>
                                        <dd>Xem và sửa video</dd>
                                        <dd class="down"><a rel="nofollow" class="" title="Tải về apk YouTube Vanced phiên bản mới nhất" href="/vn/youtube-vanced/com.vanced.android.youtube/download?from=home%2Fhot">Tải về APK</a></dd>
                                    </dl>
                                </li>


                                <li>
                                    <div class="day_list_number">4</div>
                                    <dl>
                                        <dt><a title="Google Play Store APK" href="/vn/google-play-store/com.android.vending"><img alt="Google Play Store APK" data-srcset="https://image.winudf.com/v2/image/YWRtaW5faWNfbGF1bmNoZXJfcGxheV9zdG9yZS5wbmdfMTUwMjE2MzE4NzkwMw/icon.png?w=120&amp;fakeurl=1 2x" data-original="https://image.winudf.com/v2/image/YWRtaW5faWNfbGF1bmNoZXJfcGxheV9zdG9yZS5wbmdfMTUwMjE2MzE4NzkwMw/icon.png?w=60&amp;fakeurl=1" src="https://static.apkpure.com/www/static/imgs/lazy.png"/></a></dt>
                                        <dd class="title-dd"><a title="Google Play Store APK" href="/vn/google-play-store/com.android.vending">Google Play Store</a></dd>
                                        <dd>22.5.28-16 [0] [PR] 339926180</dd>
                                        <dd>Công cụ</dd>
                                        <dd class="down"><a rel="nofollow" class="" title="Tải về apk Google Play Store phiên bản mới nhất" href="/vn/google-play-store/com.android.vending/download?from=home%2Fhot">Tải về APK</a></dd>
                                    </dl>
                                </li>


                                <li>
                                    <div class="day_list_number">5</div>
                                    <dl>
                                        <dt><a title="Mods | AddOns for Minecraft PE (MCPE) Free APK" href="/vn/mods-addons-for-minecraft-pe-mcpe-free/com.ultimategamestudio.mcpecenter.mods"><img alt="Mods | AddOns for Minecraft PE (MCPE) Free APK" data-srcset="https://image.winudf.com/v2/image1/Y29tLnVsdGltYXRlZ2FtZXN0dWRpby5tY3BlY2VudGVyLm1vZHNfaWNvbl8xNTUyOTgwNzk5XzAxMA/icon.png?w=120&amp;fakeurl=1 2x" data-original="https://image.winudf.com/v2/image1/Y29tLnVsdGltYXRlZ2FtZXN0dWRpby5tY3BlY2VudGVyLm1vZHNfaWNvbl8xNTUyOTgwNzk5XzAxMA/icon.png?w=60&amp;fakeurl=1" src="https://static.apkpure.com/www/static/imgs/lazy.png"/></a></dt>
                                        <dd class="title-dd"><a title="Mods | AddOns for Minecraft PE (MCPE) Free APK" href="/vn/mods-addons-for-minecraft-pe-mcpe-free/com.ultimategamestudio.mcpecenter.mods">Mods | AddOns for Minecraft PE (MCPE) Free</a></dd>
                                        <dd>1.20.1</dd>
                                        <dd>Công cụ</dd>
                                        <dd class="down"><a rel="nofollow" class="" title="Tải về apk Mods | AddOns for Minecraft PE (MCPE) Free phiên bản mới nhất" href="/vn/mods-addons-for-minecraft-pe-mcpe-free/com.ultimategamestudio.mcpecenter.mods/download?from=home%2Fhot">Tải về APK</a></dd>
                                    </dl>
                                </li>


                                <li>
                                    <div class="day_list_number">6</div>
                                    <dl>
                                        <dt><a title="Messenger - nhắn tin và gọi video miễn phí APK" href="/vn/facebook-messenger/com.facebook.orca"><img alt="Messenger - nhắn tin và gọi video miễn phí APK" data-srcset="https://image.winudf.com/v2/image1/Y29tLmZhY2Vib29rLm9yY2FfaWNvbl8xNjAyNjkxODU1XzA2NQ/icon.png?w=120&amp;fakeurl=1 2x" data-original="https://image.winudf.com/v2/image1/Y29tLmZhY2Vib29rLm9yY2FfaWNvbl8xNjAyNjkxODU1XzA2NQ/icon.png?w=60&amp;fakeurl=1" src="https://static.apkpure.com/www/static/imgs/lazy.png"/></a></dt>
                                        <dd class="title-dd"><a title="Messenger - nhắn tin và gọi video miễn phí APK" href="/vn/facebook-messenger/com.facebook.orca">Messenger - nhắn tin và gọi video miễn phí</a></dd>
                                        <dd>291.2.0.22.114</dd>
                                        <dd>Liên lạc</dd>
                                        <dd class="down"><a rel="nofollow" class="" title="Tải về apk Messenger - nhắn tin và gọi video miễn phí phiên bản mới nhất" href="/vn/facebook-messenger/com.facebook.orca/download?from=home%2Fhot">Tải về APK</a></dd>
                                    </dl>
                                </li>


                                <li>
                                    <div class="day_list_number">7</div>
                                    <dl>
                                        <dt><a title="HappyMod APK" href="/vn/happymod/com.happymod.apk"><img alt="HappyMod APK" data-srcset="https://image.winudf.com/v2/user/admin/YWRtaW5faWNvbi5wbmdfMTU2NjYzMDE5MDUwMw/icon.png?w=120&amp;fakeurl=1 2x" data-original="https://image.winudf.com/v2/user/admin/YWRtaW5faWNvbi5wbmdfMTU2NjYzMDE5MDUwMw/icon.png?w=60&amp;fakeurl=1" src="https://static.apkpure.com/www/static/imgs/lazy.png"/></a></dt>
                                        <dd class="title-dd"><a title="HappyMod APK" href="/vn/happymod/com.happymod.apk">HappyMod</a></dd>
                                        <dd>2.5.9</dd>
                                        <dd>Công cụ</dd>
                                        <dd class="down"><a rel="nofollow" class="" title="Tải về apk HappyMod phiên bản mới nhất" href="/vn/happymod/com.happymod.apk/download?from=home%2Fhot">Tải về APK</a></dd>
                                    </dl>
                                </li>


                                <li>
                                    <div class="day_list_number">8</div>
                                    <dl>
                                        <dt><a title="Facebook APK" href="/vn/facebook/com.facebook.katana"><img alt="Facebook APK" data-srcset="https://image.winudf.com/v2/image1/Y29tLmZhY2Vib29rLmthdGFuYV9pY29uXzE1NTc5OTAwMzBfMDIz/icon.png?w=120&amp;fakeurl=1 2x" data-original="https://image.winudf.com/v2/image1/Y29tLmZhY2Vib29rLmthdGFuYV9pY29uXzE1NTc5OTAwMzBfMDIz/icon.png?w=60&amp;fakeurl=1" src="https://static.apkpure.com/www/static/imgs/lazy.png"/></a></dt>
                                        <dd class="title-dd"><a title="Facebook APK" href="/vn/facebook/com.facebook.katana">Facebook</a></dd>
                                        <dd>297.0.0.36.116</dd>
                                        <dd>Xã hội</dd>
                                        <dd class="down"><a rel="nofollow" class="" title="Tải về apk Facebook phiên bản mới nhất" href="/vn/facebook/com.facebook.katana/download?from=home%2Fhot">Tải về APK</a></dd>
                                    </dl>
                                </li>


                                <li>
                                    <div class="day_list_number">9</div>
                                    <dl>
                                        <dt><a title="Zalo - Gọi Video sắc nét APK" href="/vn/zalo-video-call/com.zing.zalo"><img alt="Zalo - Gọi Video sắc nét APK" data-srcset="https://image.winudf.com/v2/image1/Y29tLnppbmcuemFsb19pY29uXzE1NjA4MzUzMjJfMDQ3/icon.png?w=120&amp;fakeurl=1 2x" data-original="https://image.winudf.com/v2/image1/Y29tLnppbmcuemFsb19pY29uXzE1NjA4MzUzMjJfMDQ3/icon.png?w=60&amp;fakeurl=1" src="https://static.apkpure.com/www/static/imgs/lazy.png"/></a></dt>
                                        <dd class="title-dd"><a title="Zalo - Gọi Video sắc nét APK" href="/vn/zalo-video-call/com.zing.zalo">Zalo - Gọi Video sắc nét</a></dd>
                                        <dd>20.10.02</dd>
                                        <dd>Liên lạc</dd>
                                        <dd class="down"><a rel="nofollow" class="" title="Tải về xapk Zalo - Gọi Video sắc nét phiên bản mới nhất" href="/vn/zalo-video-call/com.zing.zalo/download?from=home%2Fhot">Tải về XAPK</a></dd>
                                    </dl>
                                </li>


                                <li>
                                    <div class="day_list_number">10</div>
                                    <dl>
                                        <dt><a title="YouTube APK" href="/vn/youtube/com.google.android.youtube"><img alt="YouTube APK" data-srcset="https://image.winudf.com/v2/image1/Y29tLmdvb2dsZS5hbmRyb2lkLnlvdXR1YmVfaWNvbl8xNTU1MTE3NTQ3XzA5NA/icon.png?w=120&amp;fakeurl=1 2x" data-original="https://image.winudf.com/v2/image1/Y29tLmdvb2dsZS5hbmRyb2lkLnlvdXR1YmVfaWNvbl8xNTU1MTE3NTQ3XzA5NA/icon.png?w=60&amp;fakeurl=1" src="https://static.apkpure.com/www/static/imgs/lazy.png"/></a></dt>
                                        <dd class="title-dd"><a title="YouTube APK" href="/vn/youtube/com.google.android.youtube">YouTube</a></dd>
                                        <dd>15.46.38</dd>
                                        <dd>Xem và sửa video</dd>
                                        <dd class="down"><a rel="nofollow" class="" title="Tải về xapk YouTube phiên bản mới nhất" href="/vn/youtube/com.google.android.youtube/download?from=home%2Fhot">Tải về XAPK</a></dd>
                                    </dl>
                                </li>

                                <div class="day_list_more"><a href="/vn/app">Thêm &raquo;</a></div>
                            </ul>
                         </div>
                    </div>  
                        
                </div>
    <!-- table right 4 -->   

    <!-- table right 5 -->
            <div class="top">
                <div class="service-box bg-white text-center" style="margin-top=30px">
                    <div class="icon-text">   
                        <div class="title" >
                            <a href="/discover">Discover »</a>
                            <a href="/discover">More »</a>
                         </div>
                          <ul class="index-category index-category-b cicon">
                                <li><a href="/vn/game_adventure"><i class="adventure"></i>Phiêu lưu</a></li>
                                <li><a href="/vn/tools"><i class="tools"></i>Công cụ</a></li>
                                <li><a href="/vn/entertainment"><i class="entertainment"></i>Giải trí</a></li>
                                <li><a href="/vn/game_action"><i class="action"></i>Tác vụ</a></li>
                                <li><a href="/vn/communication"><i class="communication"></i>Liên lạc</a></li>
                                <li><a href="/vn/social"><i class="social"></i>Xã hội</a></li>
                                <li><a href="/vn/music_and_audio"><i class="music-audio"></i>Nhạc và Âm thanh</a></li>
                                <li><a href="/vn/game_role_playing"><i class="role-playing"></i>Nhập vai</a></li>
                                <li><a href="/vn/photography"><i class="photography"></i>Nhiếp ảnh</a></li>
                                <li><a href="/vn/video_players"><i class="media-video"></i>Xem và sửa video</a></li>
                                <li><a href="/vn/game_arcade"><i class="arcade"></i>Trò chơi điện tử</a></li>
                                <li><a href="/vn/game_casual"><i class="casual"></i>Thông thường</a></li>
                                <li><a href="/vn/personalization"><i class="personalization"></i>Cá nhân hóa</a></li>
                                <li><a href="/vn/game_strategy"><i class="strategy"></i>Chiến thuật</a></li>
                                <li><a href="/vn/productivity"><i class="productivity"></i>Năng suất</a></li>
                                <li><a href="/vn/game_sports"><i class="game_sports"></i>Thể thao</a></li>
                                <li><a href="/vn/game_simulation"><i class="simulation"></i>Mô phỏng</a></li>
                                <li><a href="/vn/education"><i class="education"></i>Giáo dục</a></li>
                                <li><a href="/vn/game_racing"><i class="racing"></i>Đua xe</a></li>
                                <li><a href="/vn/lifestyle"><i class="lifestyle"></i>Lối sống</a></li>
                                <li><a href="/vn/books_and_reference"><i class="book-reference"></i>Sách và Tài liệu tham khảo</a></li>
                                <li><a href="/vn/game_music"><i class="music"></i>Nhạc</a></li>
                                <li><a href="/vn/game_puzzle"><i class="puzzle"></i>Câu đố</a></li>
                                <li><a href="/vn/shopping"><i class="shopping"></i>Mua sắm</a></li>
                                <li><a href="/vn/game_card"><i class="card"></i>Thẻ</a></li>
                                <li><a href="/vn/business"><i class="business"></i>Doanh nghiệp</a></li>
                                <li><a href="/vn/game_casino"><i class="casino"></i>Sòng bạc</a></li>
                                <li><a href="/vn/health_and_fitness"><i class="health-fitness"></i>Sức khỏe và Thể hình</a></li>
                                <li><a href="/vn/sports"><i class="sports"></i>Thể thao</a></li>
                                <li><a href="/vn/travel_and_local"><i class="travel-local"></i>Du lịch và Địa phương</a></li>
                            </ul>
            
                    </div>
                </div>
            </div>
    <!-- end table right 5 -->       
            </div>
        </div>

<!-- endrow -->
    </div>
</div>

@endsection