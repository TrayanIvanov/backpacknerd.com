<div id="footer" class="container-fluid">
    <div class="container">

        <p>Въведи своята е-поща и ще получаваш известия за нови статии. Обещавам да не спамя.. много!</p>
        <div id="subscribe-form" class="row">
            {{ csrf_field() }}
            <div class="col-sm-9">
                <div class="form-group">
                    <input type="email" name="subscribeEmail" value="" class="form-control" placeholder="Е-поща" />
                </div>
            </div>
            <div class="col-sm-3">
                <div class="form-group">
                    <button class="btn btn-def">Изпрати</button>
                </div>
            </div>
        </div>
        <p id="subscribe-form-message">&nbsp;</p>

        <div class="hr-line-footer">&nbsp;</div>

        <div class="row">
            <div class="col-sm-6">
                <p>
                    <i class="fa fa-facebook-official" aria-hidden="true"></i>
                    <a href="https://www.facebook.com/backpacknerd" target="_blank">Facebook страница &raquo;</a>
                </p>
                <p><a href="{{ url('/articles') }}">Всички статии &raquo;</a></p>
                <p><a href="{{ url('/contacts') }}">Контакти &raquo;</a></p>
            </div>
            <div class="col-sm-6">
                <p>Сайтът е направен с любов и много крачки &nbsp; <i class="fa fa-heart-o" aria-hidden="true"></i></p>
                <p>Дизайн и разработка: <a href="http://trayan.co.uk" target="_blank">Траян Иванов</a></p>
            </div>
        </div>
    </div>
</div>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-37637143-9', 'auto');
  ga('send', 'pageview');
</script>

<script type="text/javascript">
    $(document).ready(function() {
        $("#subscribe-form button").click(function(){
            subscribe();
        });

        $('#subscribe-form').keypress(function(e){
            if(e.which == 13){
                subscribe();
            }
        });

        function subscribe()
        {
            var email = $("#subscribe-form input[name=subscribeEmail]").val();
            var csrf_token = $("#subscribe-form input[name=_token]").val();
            $.ajax({
                method: 'post',
                url: 'subscribe',
                data: {
                    subscribe_email: email,
                    _token: csrf_token,
                },
                success: function(data) {
                    var subscribe_message = data.message;
                    $("#subscribe-form-message").removeClass().addClass("success-color").html(subscribe_message);
                    $("#subscribe-form input[name=subscribeEmail]").val("");
                },
                error: function(e) {
                    var subscribe_message = $.parseJSON(e.responseText).subscribe_email[0];
                    $("#subscribe-form-message").removeClass().addClass("error-color").html(subscribe_message);
                }
            });
        }
    });
</script>
