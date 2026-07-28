      <script type="text/javascript" src="assets/js/socialShare.js"></script>
      <script>
         function socialShare_next(provider){
            if(provider !=null){
              var shareTitle = $('#share_title').val();
              var shareSummary = $('#share_description').val();
              var shareUrl = $('#share_url').val();
              var shareImage = $('#share_img_url').val();

              console.log(shareTitle);
              console.log(shareSummary);
              console.log(shareUrl);
              console.log(shareImage);

              if (shareUrl == undefined){
                shareUrl = window.location.href;
                if(shareUrl.lastIndexOf("?") > -1){
                  var n = shareUrl.lastIndexOf("?");
                  shareUrl = shareUrl.substring(0,n);
                }
              }
            }

            $('#social_share_'+provider).attr('data-title',shareTitle);
            $('#social_share_'+provider).attr('data-sharer',provider);
            $('#social_share_'+provider).attr('data-description',shareSummary);
            $('#social_share_'+provider).attr('data-image',shareImage);
            $('#social_share_'+provider).attr('data-url',shareUrl);
            $('#social_share_'+provider).trigger('click');
         }
      </script>