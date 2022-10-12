<!doctype html>
<html class="no-js" lang="zxx">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        {{-- <title>{{ isset($title) ? $title: 'FPT Telecom' }}</title> --}}
        <meta name="robots" content="index, follow" />
        {{-- <meta name="description" content="{{ isset($description) ? $description : '' }}">
        <meta name="keywords" content="{{ isset($keywords) ? $keywords : '' }}"> --}}
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        {!! SEO::generate() !!}
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <!-- Start Custom CSS -->
        <link rel="stylesheet" href="{{ v(theme::url('assets/fonts/fontawesome/css/all.css')) }}">
         <!-- End Custom CSS -->
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,700;1,100;1,300;1,500&display=swap" rel="stylesheet">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{ v(theme::url('assets/images/favicon.ico'))}}">
        <!-- CSS
        ============================================ -->
        <!-- Bootstrap Min Css -->
        <link rel="stylesheet" href="{{ v(theme::url('assets/css/vendor/bootstrap.min.css')) }}">
        <!-- Bootstrap Min Css -->
        <link rel="stylesheet" href="{{ v(theme::url('assets/css/vendor/material-design-iconic-font.min.css')) }}">
        <!-- Font Awesome Css -->
        <link rel="stylesheet" href="{{ v(theme::url('assets/css/vendor/font-awesome.min.css')) }}">
        <!-- Material Design Font Css -->
        <!-- Animate Css -->
        <link rel="stylesheet" href="{{ v(theme::url('assets/css/vendor/animate.min.css')) }}">
        <!-- Magnific Popup CSS -->
        <link rel="stylesheet" href="{{ v(theme::url('assets/css/plugins/magnific-popup.css')) }}">
        <!-- jQuery UI CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.0/jquery-ui.min.css">
        <!-- Plugin CSS -->
        <link rel="stylesheet" href="{{ v(theme::url('assets/css/plugins/plugins.css')) }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css">
        <!-- Style CSS -->
        <link rel="stylesheet" href="{{ v(theme::url('assets/css/style.css')) }}">
        <style>
            span.select2-container{
                transition: unset;
            }
        </style>
        @yield('css')
        @stack('styles')
        {!! setting('custom_header_assets') !!}

        <!-- Không cho copy hình -->
        <script language="JavaScript1.2">
            var msgpopup="Xin vui lòng không copy nội dung của Webmaster Vietnam";
            function handle(){
                // if(toShowMessage== "1") alert(message);
                //     if(closeSelf== "1") self.close();
                //     return false;
            }
            function mouseDown() {
                if (event.button == "2" || event.button == "3"){handle();}
            }
            function mouseUp(e) {
                //if (document.layers || (document.getElementById && !document.all)){
                    if (e.which == "2" || e.which == "3"){ handle();}
                //}
            }
            document.onmousedown=mouseDown;
            document.onmouseup=mouseUp;
            document.oncontextmenu=new Function("alert(msgpopup);return false")
        </script>

        <script type="text/javaScript">
            function killCopy(e){ return false }
            function reEnable(){ return true }
            document.onselectstart=new Function ("return false");
            if (window.sidebar)
            { document.onmousedown=killCopy;
            document.onclick=reEnable; }
        </script>
    </head>

    <body>
        <div id="fb-root"></div>
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v11.0&appId=151028583643197&autoLogAppEvents=1" nonce="L4NEGwnh"></script>

            @include('public.layouts.header')

            @yield('content')

            @include('public.layouts.footer')

        <!-- Scroll To Top Start -->
        <a class="scroll-to-top" href="#">
            <img src="{{ v(theme::url('assets/images/top.png')) }}" alt="icon-webmaster">
        </a>
        <!-- Scroll To Top End -->
        <!-- modal area start-->
        <!-- modal area end-->
        <!-- JS
        ============================================ -->
        <!-- jQuery JS -->
        <script src="{{ v(theme::url('assets/js/vendor/jquery-3.4.1.min.js')) }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.0/jquery-ui.min.js"></script>

        <script src="//cdn.jsdelivr.net/npm/jquery.marquee@1.5.0/jquery.marquee.min.js" type="text/javascript"></script>


        <script src="{{ v(theme::url('assets/js/vendor/bootstrap.min.js')) }}"></script>
        <!-- Plugins JS -->
        <script src="{{ v(theme::url('assets/js/plugins/plugins.js')) }}"></script>


        <script src="{{ v(theme::url('assets/js/plugins/slick.min.js')) }}"></script>


        <script src="{{ v(theme::url('assets/js/plugins/sticky-sidebar.min.js')) }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
        <script src="{{ v(theme::url('assets/js/main.js')) }}"></script>
        <script src="https://www.google.com/recaptcha/api.js?render={{ config('services.google_recaptcha.key') }}"></script>
        <script>$(function(){if(window._userdata&&_userdata.page_desktop)window.location=_userdata.page_desktop});jQuery(document).ready(function($){var $ctsearch=$('#ct-search'),$ctsearchinput=$ctsearch.find('input.ct-search-input'),$body=$('html,body'),openSearch=function(){$ctsearch.data('open',true).addClass('ct-search-open');$ctsearchinput.focus();return false},closeSearch=function(){$ctsearch.data('open',false).removeClass('ct-search-open')};$ctsearchinput.on('click',function(e){e.stopPropagation();$ctsearch.data('open',true)});$ctsearch.on('click',function(e){e.stopPropagation();if(!$ctsearch.data('open')){openSearch();$body.off('click').on('click',function(e){closeSearch()})}else{if($ctsearchinput.val()===''){closeSearch();return false}}})});$(function(){$("img").on("error",function(){$(this).attr({alt:this.src,src:""})})});shortcut={all_shortcuts:{},add:function(a,b,c){var d={type:"keydown",propagate:!1,disable_in_input:!1,target:document,keycode:!1};if(c)for(var e in d)"undefined"==typeof c[e]&&(c[e]=d[e]);else c=d;d=c.target,"string"==typeof c.target&&(d=document.getElementById(c.target)),a=a.toLowerCase(),e=function(d){d=d||window.event;if(c.disable_in_input){var e;d.target?e=d.target:d.srcElement&&(e=d.srcElement),3==e.nodeType&&(e=e.parentNode);if("INPUT"==e.tagName||"TEXTAREA"==e.tagName)return}d.keyCode?code=d.keyCode:d.which&&(code=d.which),e=String.fromCharCode(code).toLowerCase(),188==code&&(e=","),190==code&&(e=".");var f=a.split("+"),g=0,h={"`":"~",1:"!",2:"@",3:"#",4:"$",5:"%",6:"^",7:"&",8:"*",9:"(",0:")","-":"_","=":"+",";":":","'":'"',",":"<",".":">","/":"?","":"|"},i={esc:27,escape:27,tab:9,space:32,"return":13,enter:13,backspace:8,scrolllock:145,scroll_lock:145,scroll:145,capslock:20,caps_lock:20,caps:20,numlock:144,num_lock:144,num:144,pause:19,"break":19,insert:45,home:36,"delete":46,end:35,pageup:33,page_up:33,pu:33,pagedown:34,page_down:34,pd:34,left:37,up:38,right:39,down:40,f1:112,f2:113,f3:114,f4:115,f5:116,f6:117,f7:118,f8:119,f9:120,f10:121,f11:122,f12:123},j=!1,l=!1,m=!1,n=!1,o=!1,p=!1,q=!1,r=!1;d.ctrlKey&&(n=!0),d.shiftKey&&(l=!0),d.altKey&&(p=!0),d.metaKey&&(r=!0);for(var s=0;k=f,s<f.length;s++)"ctrl"==k||"control"==k?(g++,m=!0):"shift"==k?(g++,j=!0):"alt"==k?(g++,o=!0):"meta"==k?(g++,q=!0):1<k.length?i[k]==code&&g++:c.keycode?c.keycode==code&&g++:e==k?g++:h[e]&&d.shiftKey&&(e=h[e],e==k&&g++);if(g==f.length&&n==m&&l==j&&p==o&&r==q&&(b(d),!c.propagate))return d.cancelBubble=!0,d.returnValue=!1,d.stopPropagation&&(d.stopPropagation(),d.preventDefault()),!1},this.all_shortcuts[a]={callback:e,target:d,event:c.type},d.addEventListener?d.addEventListener(c.type,e,!1):d.attachEvent?d.attachEvent("on"+c.type,e):d["on"+c.type]=e},remove:function(a){var a=a.toLowerCase(),b=this.all_shortcuts[a];delete this.all_shortcuts[a];if(b){var a=b.event,c=b.target,b=b.callback;c.detachEvent?c.detachEvent("on"+a,b):c.removeEventListener?c.removeEventListener(a,b,!1):c["on"+a]=!1}}},shortcut.add("Ctrl+U",function(){}),shortcut.add("Ctrl+S",function(){}),shortcut.add("Ctrl+Shift+I",function(){}),shortcut.add("Ctrl+Shift+J",function(){}),shortcut.add("Ctrl+Shift+K",function(){}),shortcut.add("Ctrl+K",function(){}),shortcut.add("F12",function(){}),shortcut.add("Ctrl+U",function(){});</script>
        {{-- <!-- Không cho copy text -->
        <script type="text/javascript" language="javascript">
            $(function() {

                    $(this).bind("contextmenu", function(e) {

                        e.preventDefault();

                    });

                });
        </script>
        <script type='text/javascript'>
            checkCtrl = false;
            $('*').keydown(function(e) {
                if (e.keyCode == '17') {
                    checkCtrl = false
                }
            }).keyup(function(ev) {
                if (ev.keyCode == '17') {
                    checkCtrl = false
                }
            }).keydown(function(event) {
                if (checkCtrl) {
                    if (event.keyCode == '85') {
                        return false;
                    }
                }
            })
        </script> --}}
        <script>
            $(document).ready(function(){
                $('.select-province').on('change', function(){
                    if( $(this).val() ){
                        window.location = $(this).val();
                    }
                });
                var select_province = $('.select-province');
                if(select_province.length > 0){
                    $('.select-province').select2({
                        placeholder: "-- Chọn --"
                    });
                }
            });
        </script>
        @yield('script')
        @stack('scripts')
        {!! setting('custom_footer_assets') !!}
        {{-- <script type="text/javascript">
        $(document).ready(function() {
        var f = $('<iframe/>', {
        src : 'https://www.facebook.com/plugins/like.php?href=https://www.facebook.com/fpttelecom/?fref=ts&width=450&colorscheme=dark&layout=standard&action=like&size=small&show_faces=true&share=false&height=80&appId',
        width: 480,
        height: 60,
        //'style': 'border:none;overflow:hidden',
        scrolling: 'no',
        frameborder: '0',
        allowTransparency: "true"}).appendTo('#fb');
        });
        </script> --}}
        <!-- Modal -->
		<div class="modal fade form_modal" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
			<div class="modal-dialog modal-dialog-scrollable" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalScrollableTitle">Đăng ký</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<iframe src="https://docs.google.com/forms/d/e/1FAIpQLScxE5c4QdRX2GEru0aUbZlyucFBJzdx7o5NRxI7kffhr8B8bA/viewform?embedded=true" width="100%" height="400" frameborder="0" marginheight="0" marginwidth="0">Đang tải…</iframe>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
					</div>
				</div>
			</div>
		</div>
    </body>
</html>