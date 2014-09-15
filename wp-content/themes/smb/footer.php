              </div>
            </div>
          </div>
        <div style="position:absolute;top:0;left:0;background-color:#fff;height:100%;background-image:url('http://needful.no/wp-content/uploads/2011/06/logonytest.jpg');background-repeat:no-repeat;">
          <div id="verticalpage">
            <a href="http://smbantikviteter.no"><img title="logo" src="http://smbantikviteter.no/ny/wp-content/uploads/2012/12/weblogo_245px.png" style="padding-left:13px;padding-top:10px;"></a>
          </div>
          <div style="width:270px;overflow:auto;background-color:#fff;">
            <div class="sidebar accordian" id="vertical">
              <div class="wrapper">
                <div class="widget widget_nav_menu" id="nav_menu-3">
                  <div class="menu-meny-container">
                  </div>
                </div>
                <div class="widget widget_wysija" id="wysija-3">
                  <h2 class="widgettitle">Abonner på vår mailing-liste</h2>
                  <div class="widget_wysija_cont">
                    <div class="wysija-msg ajax" id="msg-form-wysija-3"></div>
                    <form class="widget_wysija" action="#wysija" method="post" id="form-wysija-3">
                      <p class="wysija-paragraph">
                        <input type="text" value="" placeholder="E-post" title="E-post" class="wysija-input validate[required,custom[email]]" name="wysija[user][email]">
                        <span class="abs-req">
                            <input type="text" value="" class="wysija-input validated[abs][email]" name="wysija[user][abs][email]">
                        </span>
                      </p>
                      <input type="submit" value="Meld deg på listen" class="wysija-submit wysija-submit-field">
                      <input type="hidden" value="1" name="form_id">
                      <input type="hidden" value="save" name="action">
                      <input type="hidden" value="subscribers" name="controller">
                      <input type="hidden" name="wysija-page" value="1">
                      <input type="hidden" value="1" name="wysija[user_list][list_ids]">
                    </form>
                  </div>
                </div>
                <div class="widget widget_text" id="text-4">
                  <h2 class="widgettitle">SMB ANTIKVITETER</h2>
                  <div class="textwidget">
                    <span style="font-size:.9em;color:#004577;">
                      TLF: 40 40 20 29<br>
                      <a href="mailto:sm@smbantikviteter.no">sm@smbantikviteter.no</a>
                    </span>
                  </div>
                </div>
                <div class="widget widget_text" id="text-5">
                  <div class="textwidget">
                    <a href="http://www.kaareberntsenantikviteter.no/">
                      <img src="http://smbantikviteter.no/ny/wp-content/uploads/2013/12/logo1-e1386675053716.jpg">
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div id="footer" role="contentinfo">
        <div id="copyright">
          <?php echo sprintf( __( '%1$s %2$s %3$s. All Rights Reserved.', 'blankslate' ), '&copy;', date( 'Y' ), esc_html( get_bloginfo( 'name' ) ) ); echo sprintf( __( ' Theme By: %1$s.', 'blankslate' ), '<a href="http://tidythemes.com/">TidyThemes</a>' ); ?>
        </div>
      </div>
    <?php wp_footer(); ?>
  </body>
</html>