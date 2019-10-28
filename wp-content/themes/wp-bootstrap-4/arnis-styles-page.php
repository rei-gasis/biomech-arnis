<?php
/*
 * Template Name: Arnis Style Page Template
 * Template Post Type: post, arnis_styles, page
 */


get_header(); ?>

<script>
    // $(document).ready(function(){
    //     alert('a');
    // })
    // alert('test');
</script>

<div class="container">
    <div class="pagefixer_legal">
        <main id="container" class="col-lg-12">
            <div class="row">
                <nav class="col-lg-3">
                    <h1>Styles</h1>
                    <ul class="list-group" id="nav-arnis-styles">
                        <?php
                        $args = array(
                            'post_type' => 'arnis_styles',
                            'post_status' => 'publish'
                        );
                        $query = new WP_Query($args);   

                        if($query->have_posts()){
                            $posts = $query->posts;
                            foreach($posts as $post){
                                $title = $post->post_title;
                                if($title === "Eskrima")
                                	echo "<li class='list-group-item active'>$title</li>";
                                else
                                	echo "<li class='list-group-item'>$title</li>";	
                            }
                        }

                        ?>           
                    </ul>
                </nav>
                <span class="col-lg-1">
                </span> <!-- space-->
                <section class="col-lg-8">
                    <nav>
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tab-mocap">MoCap</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tab-youtube-vid">Youtube</a>
                            </li>
                        </ul>
                    </nav>
                    <article class="tab-content">
                        <div class="tab-pane fade active show" id="tab-mocap">
                            <div class="row">
                                <div class="tab-content show active col-lg-10" id="player-container">
                                    <div class="mocap-player tab-pane fade active show" id="tab-full-scene">
                                        Full scene
                                    </div>
                                    <div class="mocap-player tab-pane fade" id="tab-scene-1">
                                        Scene 1
                                    </div>
                                    <div class="mocap-player tab-pane fade" id="tab-scene-2">
                                        Scene 2
                                    </div>
                                    <div class="mocap-player tab-pane fade" id="tab-scene-3">
                                        Scene 3
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <nav>
                                        <ul class="list-group">
                                            <li class="list-group-item">
                                                <a id="nav-full-scene" class="nav-link" data-toggle="tab" href="#tab-full-scene">Full scene</a>
                                            </li>
                                            <li class="list-group-item">
                                                <a lass="nav-link" data-toggle="tab" href="#tab-scene-1">Scene 1</a>
                                            </li>
                                            <li class="list-group-item">
                                                <a lass="nav-link" data-toggle="tab" href="#tab-scene-2">Scene 2</a>
                                            </li>
                                            <li class="list-group-item">
                                                <a lass="nav-link" data-toggle="tab" href="#tab-scene-3">Scene 3</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-youtube-vid">
                            <p>hello</p>
                            <p>earth</p>
                        </div>
                    </article>
                </section>
            </div>
        </main> <!-- container -->
    </div>
</div>
<?php get_footer(); ?>



