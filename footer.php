    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12 fbox">
                
                    <ul class="list-inline">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>                        
                    </ul>
                </div>
            </div>
        </div>
        <div id="ritfooter" class="row">
			<div class="col-md-6">
				Copyright &copy; <a href="http://www.rit.edu/">Rochester Institute of Technology</a><br/>
				<a href="http://www.rit.edu/copyright.html">Copyright Infringement</a> |
				<a href="http://www.rit.edu/privacystatement.html">Privacy Statement</a> |
				<a href="http://www.rit.edu/disclaimer.html">Disclaimer</a> |
				<a href="http://www.rit.edu/nondiscrimination.html">Nondiscrimination</a>
			</div>
			<div class="col-md-6 text-right">
				One Lomb Memorial Drive Rochester NY 14623-5603 <br/>
				Qustions or comments? <a href="http://www.rit.edu/ask/">Send us feedback.</a> Telephone 585-475-2411
			</div>
		</div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript">
        $('.carousel[data-type="multi"] .item').each(function(){
          var next = $(this).next();
          if (!next.length) {
            next = $(this).siblings(':first');
          }
          next.children(':first-child').clone().appendTo($(this));

          for (var i=0;i<4;i++) {
            next=next.next();
            if (!next.length) {
                next = $(this).siblings(':first');
            }

            next.children(':first-child').clone().appendTo($(this));
          }
        });        
    </script>