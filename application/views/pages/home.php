        <div class="wall-home card">
            <img class="homepage-header-logo" src="<?php echo site_url('images/kelastutorial-logo-white.svg'); ?>"/>
            <form onsubmit="location.href='https://kelastutorial.com/search?q=' + document.getElementById('searchInput').value; return false;">
                <input id="searchInput" class="hoverable" style="border-radius:2px;background-color:#fff;padding:0 30px 0 30px;font-size:15px;width:50%" type="text" placeholder="Cari Tutorial"/>
            </form>
        </div>
        <div class="section tutorial-summary container">
            <h3>Tutorial Terpopuler</h3>
            <div class="row">
                <div class="col s6 m4 l2">
                    <a href="<?php echo site_url('html'); ?>"><img src="<?php echo site_url('images/html-icon.png'); ?>" style="height:50px;margin-bottom:7px;"/><br/>
                    HTML</a><br/><br/><br/>
                </div>
                <div class="col s6 m4 l2">
                    <a href="<?php echo site_url('java'); ?>"><img src="<?php echo site_url('images/java-icon.png'); ?>" style="height:50px;margin-bottom:7px;"/><br/>
                    Java</a><br/><br/><br/>
                </div>
                <div class="col s6 m4 l2">
                    <a href="<?php echo site_url('python'); ?>"><img src="<?php echo site_url('images/python-icon.png'); ?>" style="height:50px;margin-bottom:7px;"/><br/>
                    Python</a><br/><br/><br/>
                </div>
                <div class="col s6 m4 l2">
                    <a href="<?php echo site_url('json'); ?>"><img src="<?php echo site_url('images/json-icon.png'); ?>" style="height:50px;margin-bottom:7px;"/><br/>
                    JSON</a><br/><br/><br/>
                </div>
                <div class="col s6 m4 l2">
                    <a href="<?php echo site_url('git'); ?>"><img src="<?php echo site_url('images/git-icon.png'); ?>" style="height:50px;margin-bottom:7px;"/><br/>
                    Git</a><br/><br/><br/>
                </div>
                <div class="col s6 m4 l2">
                    <a href="<?php echo site_url('tutorials'); ?>"><img src="<?php echo site_url('images/more-icon.png'); ?>" style="height:50px;margin-bottom:7px;"/><br/>
                    Semua Tutorial</a><br/><br/><br/>
                </div>
            </div>
            
        </div>
