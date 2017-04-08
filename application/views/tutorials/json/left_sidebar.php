
        <div class="tutorial-wall"></div>
        <div class="container" style="height:auto;width:100%;padding-top:30px;">
            <div class="row">
                <div class="col s12 m12 l3 hide-on-tablet">
                    <div class="left-sidebar-container">
                        <div class="grey lighten-3 left-sidebar">
                            <span class="subtutorial">Pendahuluan</span><br/>
                            <a href='<?php echo site_url('json/pengertian-json.html'); ?>'>Pengertian JSON</a>
                            <a href='<?php echo site_url('json/sejarah-json.html'); ?>'>Sejarah JSON</a>
                        </div>
                        <div class="grey lighten-3 left-sidebar">
                            <span class="subtutorial">JSON Dasar</span><br/>
                            <a href='<?php echo site_url('json/syntax-json.html'); ?>'>Syntax JSON</a>
                            <a href='<?php echo site_url('json/tipe-data-json.html'); ?>'>Tipe Data JSON</a>
                            <a href='<?php echo site_url('json/objek-json.html'); ?>'>Objek JSON</a>
                            <a href='<?php echo site_url('json/schema-json.html'); ?>'>Schema JSON</a>
                        </div>
                    </div>
                </div>
                <!-- Mobile Navigation -->
                <div class="mobile-navigation">
                    <ul class="side-nav" id="mobile-demo" style="width:70%;z-index:1000;">
                        <div class="header-mobile grey lighten-3" style="height:110px;padding:33px 5px 0 0;text-align:center">
                            <a href="<?php echo site_url(); ?>"><img alt="logo-kelastutorial" src="<?php echo site_url('images/kelastutorial-logo.svg'); ?>" height="38px"/></a>
                        </div>
                        <li style="border-bottom:1px solid #e0e0e0"><a href="<?php echo site_url('tutorials'); ?>">Semua Tutorial</a></li>
                        <li class="no-padding">
                            <ul class='collapsible collapsible-accordion'>
                                <li><a class='collapsible-header  waves-effect'>Pendahuluan</a>
                                    <div class='collapsible-body'>
                                        <ul>
                                            <li><a href='<?php echo site_url('json/pengertian-json.html'); ?>'>Pengertian JSON</a></li>
                                            <li><a href='<?php echo site_url('json/sejarah-json.html'); ?>'>Sejarah JSON</a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="no-padding">
                            <ul class='collapsible collapsible-accordion'>
                                <li><a class='collapsible-header  waves-effect'>JSON Dasar</a>
                                    <div class='collapsible-body'>
                                        <ul>
                                            <li><a href='<?php echo site_url('json/syntax-json.html'); ?>'>Syntax JSON</a></li>
                                            <li><a href='<?php echo site_url('json/tipe-data-json.html'); ?>'>Tipe Data JSON</a></li>
                                            <li><a href='<?php echo site_url('json/objek-json.html'); ?>'>Objek JSON</a></li>
                                            <li><a href='<?php echo site_url('json/schema-json.html'); ?>'>Schema JSON</a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </div><!-- End Mobile Navigation -->