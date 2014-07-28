<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.


// Get the HTML for the settings bits.
$html = theme_prs_get_html_for_settings($OUTPUT, $PAGE);
//$showb = (!$PAGE->blocks->region_completely_docked('side-pre', $OUTPUT));
$left = (!right_to_left());  // To know if to add 'pull-right' and 'desktop-first-column' classes in the layout for LTR.
echo $OUTPUT->doctype() ?>
<html <?php echo $OUTPUT->htmlattributes(); ?>>
<head>
    <title><?php echo $OUTPUT->page_title(); ?></title>
    <link rel="shortcut icon" href="<?php echo $OUTPUT->favicon(); ?>" />
    <?php echo $OUTPUT->standard_head_html() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
   
</head>

<body <?php echo $OUTPUT->body_attributes('two-column'); ?>>
<?php require_once('topmenu.php');  ?> 
<div id="page-cont">
<?php echo $OUTPUT->standard_top_of_body_html() ?>

<header role="banner" class="navbar navbar-fixed-top<?php echo $html->navbarclass ?> moodle-has-zindex">
    <nav role="navigation" class="navbar-inner">
        <div class="container-fluid">
            <a class="brand" href="<?php echo $CFG->wwwroot;?>">  <?php echo $SITE->shortname; ?></a>
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <div class="nav-collapse collapse">
                <?php echo $OUTPUT->custom_menu(); ?>
                <ul class="nav pull-right">
                    <li><?php echo $OUTPUT->page_heading_menu(); ?></li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<div id="page" class="container-fluid">

    <header id="page-header" class="clearfix">
        <div id="cont-header">
        <?php //echo $html->heading; ?>
        <div id="page-navbar" class="clearfix">
            <nav class="breadcrumb-nav"><?php echo $OUTPUT->navbar(); ?></nav>
            <div class="breadcrumb-button"><?php echo $OUTPUT->page_heading_button(); ?></div>
        </div>
        <div id="course-header">
            <?php echo $OUTPUT->course_header(); ?>
        </div></div>
    </header>

    <div id="page-content" class="row-fluid">
   
    
        <section id="region-main" class="span9<?php if ($left) { echo ' pull-right'; } ?>">
            <?php
            echo $OUTPUT->course_content_header();
            echo $OUTPUT->main_content();
            echo $OUTPUT->course_content_footer();
            ?>
        </section>
        <?php
        $classextra = '';
        if ($left) {
            $classextra = ' desktop-first-column';
        }
        echo $OUTPUT->blocks('side-pre', 'span3'.$classextra);
        ?>
    </div>
 </div>
</div>
    <footer id="page-footer">
       <div id="footer-container">
            <div class="footer_logo">
                <img alt="palliser schools" src="<?php echo $OUTPUT->pix_url('footer-logo','theme') ?>">
            </div>
            <div class="footer-center">
                <div id="course-footer"><?php echo $OUTPUT->course_footer(); ?></div>
                <p class="helplink"><?php echo $OUTPUT->page_doc_link(); ?></p>
                <?php
                echo $html->footnote;
                echo $OUTPUT->login_info();
                echo $OUTPUT->home_link();
                echo $OUTPUT->standard_footer_html();
                ?>
            </div>
            <div class="connect">
                <h3>Connect with us</h3>
                <ul>
                    <li class="twitter">
                        <a href="https://twitter.com/PalliserSchools" target="_blank">Twitter</a>
                        <a href="https://twitter.com/PalliserSchools" target="_blank" class="alias"><span>@PalliserSchools</span></a>
                    </li>
                    <li><a href="https://www.facebook.com/PalliserRegionalSchools" target="_blank">Facebook</a></li>
                    <li><a href="http://www.youtube.com/user/palliserRegSch" target="_blank">YouTube</a></li>
                </ul>
            </div>
            <div class="clear"></div>
        </div>
    </footer>

    <?php echo $OUTPUT->standard_end_of_body_html() ?>
<?php require_once('script.php');  ?>
</body>
</html>
