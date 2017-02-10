        <div class="col s12 m12 l9">
            <div class="row" style="text-align:left;background-color:#fff;color:#333;border:2px solid #333;">
                <div class="col s12 m6 l6" style="text-align:center;padding:60px 0 0 0">
                    <img style="width:80%" src="<?php echo site_url('images/logo-json.png'); ?>"/>
                </div>
                <div class="col s12 m6 l6" style="padding:40px 30px 70px 25px" style="text-align:left">
                    <h5 style="font-weight:400;font-size:40px;color:#1C59A5;">JavaScript Object Notation</h5>
                    <p>JSON atau JavaScript Object Notation adalah format pertukaran data berbasis teks yang ringan, mudah dibaca dan ditulis oleh manusia, serta mudah diterjemahkan atau di generate oleh mesin komputer.</p>
                </div>
            </div>
            <div class="row section" style="text-align:left;background-color:#1C59A5;font-weight:400;line-height:36px;font-size:22px;color:#fff;padding:20px 20px 20px 50px;">
                <div class="row">
                    <p>*<br/>
JSON menggunakan syntax JavaScript, tetapi JSON hanyalah sebuah format teks.<br/>
Teks bisa dibaca dan digunakan sebagai format data oleh bahasa pemrograman apa saja.</p>
                </div>
            </div>
            <br/>
            
            <div class="row" style="text-align:left;color:#000;text-align:left;padding:0px 30px 0px 30px;">
                <h2 style="font-size:38px;color:#555;margin-bottom:40px;">Mengapa Menggunakan JSON</h2>
                <p>Dikarenakan format JSON hanyalah berupa teks saja, hal ini membuat JSON mudah untuk dikirim dari server, dan digunakan sebagai format data berbagai bahasa pemrograman.
</p>
<p>
Javascript mempunyai fungsi bawaan untuk mengkonversi string, ditulis dalam format JSON, menjadi object Javascript :<br/>
<code class="syntax">JSON.parse()</code>
</p>
<p>
Jadi, jika Anda menerima data dari server dalam format JSON, Anda bisa langsung menggunakan data tersebut layaknya sebuah object di Javascript.</p>
<p>JSON adalah format penulisan yang terstruktur, cepat dan mudah dipelajari.</p>
            </div>
            
            
            <div style="padding:0 20px 0 20px;"><br/>
                <div style="height:120px;padding-top:20px;text-align:right"><a href="<?php echo site_url('/json/pengenalan-json.html'); ?>" class="hoverable waves-effect waves-light red darken-1 navigation-button"><i class="material-icons right">fast_forward</i>
PELAJARI JSON</a></div>
            </div>
            
        </div>
    </div>
</div>

<?php /* foreach($json as $json_item) { ?>
    <h1><a href="<?php echo site_url('json/'.$json_item['slug']); ?>.html"><?php echo $json_item['title']; ?></a></h1>
    <p><?php echo $json_item['content']; ?></p><br/>
<?php } */?>

