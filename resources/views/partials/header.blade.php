<div id="header" class="container-fluid" style="position: relative;">
    <div class="container">
        <h1><a href="{{ url('/') }}">Backpack Nerd</a></h1>
        <p>There and back again..</p>
    </div>
</div>

{{-- Facebook share stuff --}}
<script>
window.fbAsyncInit = function() {
    FB.init({
        appId      : '1815326942053960',
        xfbml      : true,
        version    : 'v2.8'
    });
    FB.AppEvents.logPageView();
};

(function(d, s, id){
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) {return;}
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>
