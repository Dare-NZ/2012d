<?php
/*
Template name: Home
 */

get_header(); ?>

<div class="slider">
    <div class="overlay"></div>
    <div class="text"></div>
    <div class="zigzag"></div>
</div>
<div class="content">
    <div class="wrapper">
        <div class="inner">
            <h1><span>Make me your web designer.</span></h1>
            <div class="half">
                <p>It’s hard to build a good website these days. Not only do you have to have a design, it also has to work well. It has to have a clear purpose and have users respond to the messages being presented. Add to that multiple browsers across a multitude of devices from mobile phones to digital desks and it starts to look like a task of behemothic proportions.</p>
                <p>That’s where I come in. Not only can I wield photoshop like I was born to it, I can carry any design through to a fully functional battle hardened web application.</p>
            </div>
            <div class="half">
                <p>Need a content management system? I’ve got that covered. Search engine optimisation? Piece of cake. If you're trying to sell products securely online; or perhaps create a facebook app you’ve come to the right place. <strong>If it’s a challenge; I’m interested</strong>. Get in touch and we can talk about it.</p>
                <p>If you’re not actually looking for a web designer I may have something for you, too. I am always experimenting with new techniques and I have decided that since I believe in the open web I should share my toys.</p>
            </div>
            <div class="clr"></div>
            <h2><span>services.</span></h2>
            <script type="text/javascript">
                $(document).ready(function(e){
                   // $('#skills').bxSlider();
                });
            </script>   
            <div class="slider-wrap" style="height:230px">
                <ul id="skills" class="skills">
                    <li>
                        <div>
                            <div class="fourth">
                                <img src="<?php bloginfo('template_url') ?>/images/home/webdesign.png" alt="">
                                <h2><span>Web design</span></h2>
                                <p>I can design and build from your initial idea to a fully fledged and function web application fast, professionally and with a minimum of fuss.</p>
                            </div>
                            <div class="fourth">
                                <img src="<?php bloginfo('template_url') ?>/images/home/cms.png" alt="">
                                <h2><span>CMS deployments</span></h2>
                                <p>Wordpress is a powerful PHP based CMS which makes it a piece of cake to produce a website that can be easily updated from anywhere online.</p>
                            </div>
                            <div class="fourth">
                                <img src="<?php bloginfo('template_url') ?>/images/home/ecommerce.png" alt="">
                                <h2><span>E-commerce</span></h2>
                                <p>Using a powerful open source e-commerce framework I can help you create a powerful, flexible online store with a secure online payment gateway .</p>
                            </div>
                            <div class="fourth">
                                <img src="<?php bloginfo('template_url') ?>/images/home/social.png" alt="">
                                <h2><span>Social media</span></h2>
                                <p>Email templates, facebook pages, google places and more. I am familiar with and capable of leveraging most PHP based social media API's</p>
                            </div>
                        </div>
                    </li>
                    <li><img src="<?php bloginfo('template_url') ?>/images/home/process.png" alt=""></li>
                    
                </ul>
            </div>
        </div>
        
        <div class="inner">
            <h2><span>Skillset</span></h2>
            <script type="text/javascript">
                    Raphael.fn.pieChart = function (cx, cy, r, values, labels, stroke, colours) {
                    var paper = this,
                        rad = Math.PI / 180,
                        chart = this.set();
                    function sector(cx, cy, r, startAngle, endAngle, params) {
                        var x1 = cx + r * Math.cos(-startAngle * rad),
                            x2 = cx + r * Math.cos(-endAngle * rad),
                            y1 = cy + r * Math.sin(-startAngle * rad),
                            y2 = cy + r * Math.sin(-endAngle * rad);
                        return paper.path(["M", cx, cy, "L", x1, y1, "A", r, r, 0, +(endAngle - startAngle > 180), 0, x2, y2, "z"]).attr(params);
                    }
                    
                    var angle = 0,
                        textR = 2.5,
                        total = 0,
                        start = 0,
                        process = function (j) {
                            var value = values[j],
                                colour = colours[j],
                                toggle = true,
                                angleplus = 360 * value / total,
                                popangle = angle + (angleplus / 2),
                                ms = 500,
                                delta = 30,
                                p = sector(cx, cy, r, angle, angle + angleplus, {fill: "90-" + colour + "-" + colour, stroke: stroke, "stroke-width": 0}),
                                //txt = paper.text(cx + (r + delta + 20) * Math.cos(-popangle * rad), cy + (r + delta + 25) * Math.sin(-popangle * rad), labels[j]).attr({fill: bcolor, stroke: "none", opacity: 0, "font-size": 12});
                                txt = paper.text(cx + ((r / textR) + delta + 0) * Math.cos(-popangle * rad), cy + ((r / textR) + delta + 0) * Math.sin(-popangle * rad), labels[j]).attr({fill: '#fff', stroke: "none", opacity: 0.5, "font-size": 13, "font-weight" : "bold"});
                                $('#details li:eq(' + (5 + j) + ') h2').css({'color' : '#000'});
                            p.mouseover(function () {
                                p.stop().animate({transform: "s1.05 1.05 " + cx + " " + cy}, ms, "elastic");
                                txt.stop().animate({opacity: 1}, ms, "elastic");
                                    $('#details').animate({'margin-top' :  -(133 * 4) + (-133 * j) + 'px'});
                                    $('#details li h2').css({'color' : '#ccc'});
                                    $('#details li:eq(' + (5 + j) + ') h2').css({'color' : '#000'});
                                    console.log(j);
                            }).mouseout(function () {
                                p.stop().animate({transform: ""}, ms, "elastic");
                                txt.stop().animate({opacity: 0.5}, ms);
                            });

                            angle += angleplus;
                            chart.push(p);
                            chart.push(txt);
                            start += .1;
                        };
                    for (var i = 0, ii = values.length; i < ii; i++) {
                        total += values[i];
                    }
                    for (i = 0; i < ii; i++) {
                        process(i);
                    }
                    return chart;
                };
                
                $(function () {
                    var values = [],
                        altValues = [],
                        labels = [],
                        colours = [],
                        desc = [];
                    $("tr").each(function () {
                        values.push(parseInt($("td.value", this).text(), 10));
                        colours.push($("td.colour", this).text());
                        desc.push($("td.desc", this).text());
                        labels.push($("th", this).text());
                    });
                    
                    $("table").hide();

                    var size = 380;
                    
                    Raphael("holder", size, size).pieChart((size / 2), (size / 2), (size * .45), values, labels, "#fff", colours);
                    

                    for (var i = 3; i >= 0; i--) {
                        $.each(desc, function(i1, v1){
                            $('ul#details').append('<li><div class="bar" style="background:' + colours[i1] + ';"></div><h2>' + labels[i1] + '</h2><br /><p>' + desc[i1] + '</p></li>');
                        });
                    };
                    
                });
            </script>
            <table>
                <tbody>
                    <tr>
                        <th scope="row">HTML5 / CSS3</th>
                        <td class="value">100</td>
                        <td class="colour">#58494d</td>
                        <td class="altValue">84</td>
                        <td class="desc">With the latest developments in HTML and CSS the world of web design is finally getting interesting. I use the latest tricks but back them up with tried and true techniques that work for everyone.</td>
                        <td class="details">Lorem ipsum</td>
                    </tr>
                    <tr>
                        <th scope="row">AJAX</th>
                        <td class="value">50</td>
                        <td class="colour">#1ec6c6</td>
                        <td class="altValue">40</td>
                        <td class="desc">Using jQuery and PHP I can create a dynamic website with bookmarkable states loading data from HTML, MYSQL or an API.</td>
                        <td class="details">Lorem ipsum</td>
                    </tr>
                    <tr>
                        <th scope="row">PHP</th>
                        <td class="value">120</td>
                        <td class="colour">#e78a61</td>
                        <td class="altValue">74</td>
                        <td class="desc">If you can think it, PHP can probably do it. I have used PHP for everything from organising my MP3's to creating large dynamic content driven websites.</td>
                        <td class="details">Lorem ipsum</td>
                    </tr>
                    <tr>
                        <th scope="row">JS</th>
                        <td class="value">100</td>
                        <td class="colour">#894a52</td>
                        <td class="altValue">87</td>
                        <td class="desc">I use javascript and jQuery to create advanced cross browser user experiences. jQuery</td>
                        <td class="details">Lorem ipsum</td>
                    </tr>
                    <tr>
                        <th scope="row">Other</th>
                        <td class="value">100</td>
                        <td class="colour">#69194c</td>
                        <td class="altValue">50</td>
                        <td class="desc">Ubuntu, Photoshop, 3ds Max, Rhino, </td>
                        <td class="details">Lorem ipsum</td>
                    </tr>
                </tbody>
            </table>
            <div id="holder" style="width:400px; height:400px;float:left;"></div> 
            <div class="details">
            <ul id="details">
                
            </ul>
            </div>
            <!--
        <div class="inner">
            <div class="cta">
                <div class="message"><h2>So what are you waiting for?</h2></div>
                <a href="#" id="hire-me" class="button clean-grey">Hire me!</a>
            </div>
            <div class="clr"></div>
        </div>
        --> 
        </div>
    </div>
</div>
<?php get_footer(); ?>
