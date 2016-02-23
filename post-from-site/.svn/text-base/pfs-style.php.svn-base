<?php
header('Content-type: text/css');
require('../../../wp-load.php');

echo "/* CSS generated for the Post-From-Site plugin. Defaults can be edited through settings page in Wordpress. */\n\n";
$stylevars = Array('pfs_titlecolor','pfs_textcolor','pfs_bgcolor','pfs_bgimg');
$pfs_options = get_option('pfs_options');
foreach($stylevars as $var) ${$var}=$pfs_options[$var];
?>

.pfs-post-box{
    
    background: red url('<?php echo bloginfo('template_url'); ?>/images/body-bg.png') repeat;
    border:1px solid #333;
    padding:10px;
    padding-top:55px;
    font-family:'Trebuchet MS',sans-serif;
    font-size:9pt;
    font-weight:normal;
    <?php echo (''==$pfs_textcolor)?"":"color:$pfs_textcolor;\n"; ?>
    text-align:center;
    -moz-border-radius:5px;
    -webkit-border-radius:5px;
    border-radius:5px;
}
.pfs-post-box #closex {
    float:right;
    font-size:16px;
    font-weight:bold;
    text-decoration:none;
    color:#333;
    padding:0;
    margin:0;
    margin-top:-50px;
}
.pfs-post-box h1 {
    font-size:20px;
    margin-bottom:40px;

}
.pfs-post-box textarea {
	margin-top: 10px;
	margin-left: 10px;
}
.pfs-post-box textarea, .pfs-post-box input, .pfs-post-box input.upload {
/*
    background-color:white;
    color:#333;
    width:550px;
    height: 200px;
    margin:5px 25px;
    border:1px solid #333;
    -moz-border-radius:3px;
    -webkit-border-radius:3px;
    border-radius:3px;
*/    
    border:1px solid #ececec;
	background-color:#fff;
	-webkit-box-shadow: 0px 0px 3px rgba(0,0,0,0.15); 
    -moz-box-shadow: 0px 0px 3px rgba(0,0,0,0.15);  
    box-shadow: 0px 0px 3px rgba(0,0,0,0.15);  
    padding:5px;
}
.pfs-post-box .submit {
/*
    float:right;
    padding:4px 10px;
    border:1px solid #222D5F;
    -moz-border-radius:3px;
    -webkit-border-radius:3px;
    border-radius:3px;
    margin-right:19px;
*/
	background: #9aca5b;
	border: none;
	border-radius: 5px;
	color: #333;
	padding: 5px 5px;
	cursor: pointer;
	float:right;
    padding:4px 10px;
}
/*
.pfs-post-box input { 
    color:#333;
    border:1px solid #222D5F;
    -moz-border-radius:3px;
    -webkit-border-radius:3px;
    border-radius:3px;
}

.pfs-post-box input.upload { 
    border:none;
}
*/
#pfs_meta select {
    width:175px;
    border:1px solid #222D5F;
    -moz-border-radius:3px;
    -webkit-border-radius:3px;
    border-radius:3px;    
}
.pfs-post-box h4 {
    display:inline;
    font-size:130%;
    <?php echo (''==$pfs_titlecolor)?"":"color:$pfs_titlecolor;"; ?>
}
#pfs_catchecks, #pfs_tagchecks {
    float:left;
    width:40%;
    text-align:center;
    padding:10px;
    padding-top:0;
    margin-left:35px;
}
#pfs_meta h4 {
    margin-bottom:0;
    margin-left:-35px;
    display:block;
    text-align:left;
}
#pfs_meta input, #pfs_meta label {
    margin:0;
    margin-top:5px;
}
.pfs-post-box h3 {
    padding-bottom:40px;
}
#pfs-alert {
    border:1px solid #222D5F;
    padding:10px;
    margin:3px;
    background-color:#FAF6CE;
    font-weight:normal;
}
#pfs-alert p {
    margin-bottom:0;
}
#alert,.error{
    border:1px solid red;
    padding:10px;
    margin:3px;
    background-color:#eda9a9;
    font-weight:normal;
}
.clear {clear:both;}
<?php echo $pfs_options['pfs_customcss']; ?>
